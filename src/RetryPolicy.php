<?php

declare(strict_types=1);

namespace Oceanengine;

/**
 * 不可变的重试策略：描述「哪些失败值得重试」以及「重试之间等多久」。
 * 批量投放场景下服务端会返回 429/5xx，若无保护层调用方只能自建传输层，
 * 因此把退避规则下沉到 SDK 内核。
 */
class RetryPolicy
{
    /** @var int 总尝试次数（含首次），1 表示不重试 */
    private int $maxAttempts;

    /** @var int 退避基数（毫秒） */
    private int $baseDelayMs;

    /** @var int 指数退避上限（毫秒） */
    private int $maxDelayMs;

    /** @var bool 是否叠加随机抖动，避免多实例同时重试造成惊群 */
    private bool $useJitter;

    /** @var array<int, int> 可重试的 HTTP 状态码 */
    private array $retryableStatusCodes;

    /** @var array<int, string> 默认可重试的幂等方法 */
    private array $retryableMethods;

    /**
     * @var array<int, int> "结果不明"的状态码：服务端可能已处理请求（网关错误等），
     * 非幂等请求重放它们可能造成重复投放
     */
    private array $ambiguousStatusCodes;

    /** @var bool 是否优先采用响应头 Retry-After 指定的等待时间 */
    private bool $respectRetryAfter;

    /** @var int Retry-After 的等待上限（秒），防止服务端指定超长等待；0 表示不等 */
    private int $maxRetryAfterSeconds;

    /** @var callable|null 重试回调 fn(int $attempt, int $delayMs, array $context): void */
    private $onRetry;

    /**
     * @param int $maxAttempts 总尝试次数（含首次），1 表示不重试
     * @param int $baseDelayMs 退避基数（毫秒）
     * @param int $maxDelayMs 指数退避上限（毫秒）
     * @param bool $useJitter 是否叠加随机抖动
     * @param array<int, int> $retryableStatusCodes 可重试的 HTTP 状态码
     * @param array<int, string> $retryableMethods 默认可重试的幂等方法
     * @param bool $respectRetryAfter 是否优先采用 Retry-After
     * @param int $maxRetryAfterSeconds Retry-After 等待上限（秒），0 表示不等
     * @param callable|null $onRetry 重试回调 fn(int $attempt, int $delayMs, array $context): void
     */
    public function __construct(
        int $maxAttempts = 3,
        int $baseDelayMs = 200,
        int $maxDelayMs = 5000,
        bool $useJitter = true,
        array $retryableStatusCodes = [429, 502, 503, 504],
        array $retryableMethods = ['GET', 'HEAD', 'OPTIONS'],
        array $ambiguousStatusCodes = [502, 503, 504],
        bool $respectRetryAfter = true,
        int $maxRetryAfterSeconds = 30,
        ?callable $onRetry = null
    ) {
        $this->maxAttempts = max(1, $maxAttempts);
        $this->baseDelayMs = max(0, $baseDelayMs);
        $this->maxDelayMs = max(0, $maxDelayMs);
        $this->useJitter = $useJitter;
        $this->retryableStatusCodes = array_values(array_map('intval', $retryableStatusCodes));
        $this->retryableMethods = array_values(array_map(
            static function ($method): string {
                return strtoupper(trim((string)$method));
            },
            $retryableMethods
        ));
        $this->ambiguousStatusCodes = array_values(array_map('intval', $ambiguousStatusCodes));
        $this->respectRetryAfter = $respectRetryAfter;
        $this->maxRetryAfterSeconds = max(0, $maxRetryAfterSeconds);
        $this->onRetry = $onRetry;
    }

    /**
     * 默认策略：3 次尝试，只重试幂等方法与 429/502/503/504。
     *
     * @return self
     */
    public static function default(): self
    {
        return new self();
    }

    /**
     * 关闭重试。
     *
     * @return self
     */
    public static function none(): self
    {
        return new self(1);
    }

    /**
     * @return int
     */
    public function getMaxAttempts(): int
    {
        return $this->maxAttempts;
    }

    /**
     * @return int
     */
    public function getBaseDelayMs(): int
    {
        return $this->baseDelayMs;
    }

    /**
     * @return int
     */
    public function getMaxDelayMs(): int
    {
        return $this->maxDelayMs;
    }

    /**
     * @return bool
     */
    public function usesJitter(): bool
    {
        return $this->useJitter;
    }

    /**
     * @return array<int, int>
     */
    public function getRetryableStatusCodes(): array
    {
        return $this->retryableStatusCodes;
    }

    /**
     * @return array<int, string>
     */
    public function getRetryableMethods(): array
    {
        return $this->retryableMethods;
    }

    /**
     * @return bool
     */
    public function getRespectRetryAfter(): bool
    {
        return $this->respectRetryAfter;
    }

    /**
     * @return int
     */
    public function getMaxRetryAfterSeconds(): int
    {
        return $this->maxRetryAfterSeconds;
    }

    /**
     * @return callable|null
     */
    public function getOnRetry(): ?callable
    {
        return $this->onRetry;
    }

    /**
     * 判断一次失败是否值得重试。
     *
     * 状态码 0 代表传输层失败（连接被重置、超时），与具体业务状态码无关，
     * 按瞬时故障处理。
     *
     * @param string $method HTTP 方法
     * @param int $statusCode 响应状态码，0 表示传输层失败
     * @param bool $forceRetry 单请求显式开启（如需要重试的 POST），只放宽方法限制
     * @return bool
     */
    /**
     * 传输层错误（超时、连接中断）时是否重试。
     *
     * 这类失败的结果是**不明的**：服务端可能已经处理了请求（只是响应没回来）。
     * 因此非幂等请求（POST 建广告等）一律不重放，即使调用方显式要求重试，
     * 否则会出现"广告已创建但客户端以为失败"导致的重复投放。
     *
     * @param string $method
     * @return bool
     */
    public function shouldRetryTransportError(string $method): bool
    {
        if ($this->maxAttempts <= 1) {
            return false;
        }
        return in_array(strtoupper(trim($method)), $this->retryableMethods, true);
    }

    /**
     * 服务端给出的 Retry-After 是否在可接受范围内。
     *
     * 超过上限时不重试（宁可失败也不要提前重试撞上仍在限流的服务端），
     * 而不是截断成上限后提前重试。
     *
     * @param int $retryAfterSeconds
     * @return bool
     */
    public function isRetryAfterAcceptable(int $retryAfterSeconds): bool
    {
        if (!$this->respectRetryAfter) {
            return true;
        }
        if ($this->maxRetryAfterSeconds <= 0) {
            // 0 表示"不等 Retry-After"（不设上限），交给指数退避处理
            return true;
        }
        return $retryAfterSeconds <= $this->maxRetryAfterSeconds;
    }

    public function shouldRetry(string $method, int $statusCode, bool $forceRetry = false): bool
    {
        if ($this->maxAttempts <= 1) {
            return false;
        }
        if ($statusCode === 0) {
            // 结果不明（超时 / 连接中断 / 无状态码的响应）：与传输错误同规则，
            // forceRetry 在此不生效，避免重放可能已被服务端处理的请求
            return $this->shouldRetryTransportError($method);
        }
        if (!in_array($statusCode, $this->retryableStatusCodes, true)) {
            return false;
        }
        $isRetryableMethod = in_array(strtoupper(trim($method)), $this->retryableMethods, true);
        if ($forceRetry) {
            // "结果不明"的状态码（网关错误等）即使显式要求重试也不放行非幂等方法：
            // 服务端可能已创建了广告，重放即重复投放。要放开需在 retryableMethods
            // 里显式声明该方法可安全重放。
            if (in_array($statusCode, $this->ambiguousStatusCodes, true)) {
                return $isRetryableMethod;
            }
            // 明确拒绝（429 等）：服务端没有处理，重放是安全的
            return true;
        }
        // 非幂等方法默认不重试：重放 POST 可能造成重复投放
        return $isRetryableMethod;
    }

    /**
     * 计算下一次尝试前的等待毫秒数。
     *
     * @param int $attempt 已完成的尝试次数（1 表示刚失败第一次）
     * @param int|null $retryAfterSeconds 服务端 Retry-After 指定的秒数
     * @return int
     */
    public function computeDelayMs(int $attempt, ?int $retryAfterSeconds): int
    {
        if ($attempt < 1) {
            $attempt = 1;
        }
        if ($this->maxRetryAfterSeconds <= 0) {
            // 0 = "不等 Retry-After"：直接不等待（也不叠加抖动）
            return 0;
        }
        if ($this->respectRetryAfter && $retryAfterSeconds !== null && $retryAfterSeconds >= 0) {
            // Retry-After 是服务端的明确指令，必须原样尊重：不叠加抖动，
            // 否则提前重试会再次撞上限流。上限无条件生效，避免服务端指定
            // 超长等待把调用方挂住。
            $retryAfterMs = $retryAfterSeconds * 1000;
            $delay = max(0, min($retryAfterMs, $this->maxRetryAfterSeconds * 1000));
            if ($this->useJitter && $delay > 0) {
                // 抖动只往后错开，绝不早于服务端要求的等待时间；
                // 幅度按等待时长成比例（1/8，夹在 1~5s），去相关更强又不会拖太久
                $span = (int)min(5000, max(1000, intdiv($delay, 8)));
                $delay += random_int(0, $span);
            }
            return $delay;
        }

        // 指数退避，封顶前先限制指数避免整数溢出
        $exponent = min($attempt - 1, 30);
        $delay = (int)($this->baseDelayMs * (2 ** $exponent));
        $delay = min($delay, $this->maxDelayMs);
        if ($this->useJitter && $delay > 0) {
            // 等量抖动：落在 [50%, 100%]，既保留最小退避又打散并发重试
            $half = intdiv($delay, 2);
            $delay = $half + random_int(0, $delay - $half);
        }
        return max(0, $delay);
    }

    /**
     * @param int $maxAttempts
     * @return self
     */
    public function withMaxAttempts(int $maxAttempts): self
    {
        $clone = clone $this;
        $clone->maxAttempts = max(1, $maxAttempts);
        return $clone;
    }

    /**
     * @param int $baseDelayMs
     * @return self
     */
    public function withBaseDelayMs(int $baseDelayMs): self
    {
        $clone = clone $this;
        $clone->baseDelayMs = max(0, $baseDelayMs);
        return $clone;
    }

    /**
     * @param int $maxDelayMs
     * @return self
     */
    public function withMaxDelayMs(int $maxDelayMs): self
    {
        $clone = clone $this;
        $clone->maxDelayMs = max(0, $maxDelayMs);
        return $clone;
    }

    /**
     * @param bool $useJitter
     * @return self
     */
    public function withUseJitter(bool $useJitter): self
    {
        $clone = clone $this;
        $clone->useJitter = $useJitter;
        return $clone;
    }

    /**
     * @param array<int, int> $retryableStatusCodes
     * @return self
     */
    public function withRetryableStatusCodes(array $retryableStatusCodes): self
    {
        $clone = clone $this;
        $clone->retryableStatusCodes = array_values(array_map('intval', $retryableStatusCodes));
        return $clone;
    }

    /**
     * @param array<int, string> $retryableMethods
     * @return self
     */
    public function withAmbiguousStatusCodes(array $ambiguousStatusCodes): self
    {
        $clone = clone $this;
        $clone->ambiguousStatusCodes = array_values(array_map('intval', $ambiguousStatusCodes));
        return $clone;
    }

    public function withRetryableMethods(array $retryableMethods): self
    {
        $clone = clone $this;
        $clone->retryableMethods = array_values(array_map(
            static function ($method): string {
                return strtoupper(trim((string)$method));
            },
            $retryableMethods
        ));
        return $clone;
    }

    /**
     * @param bool $respectRetryAfter
     * @return self
     */
    public function withRespectRetryAfter(bool $respectRetryAfter): self
    {
        $clone = clone $this;
        $clone->respectRetryAfter = $respectRetryAfter;
        return $clone;
    }

    /**
     * @param int $maxRetryAfterSeconds
     * @return self
     */
    public function withMaxRetryAfterSeconds(int $maxRetryAfterSeconds): self
    {
        $clone = clone $this;
        $clone->maxRetryAfterSeconds = max(0, $maxRetryAfterSeconds);
        return $clone;
    }

    /**
     * @param callable|null $onRetry fn(int $attempt, int $delayMs, array $context): void
     * @return self
     */
    public function withOnRetry(?callable $onRetry): self
    {
        $clone = clone $this;
        $clone->onRetry = $onRetry;
        return $clone;
    }
}
