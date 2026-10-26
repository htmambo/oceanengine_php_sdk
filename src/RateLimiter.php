<?php

declare(strict_types=1);

namespace Oceanengine;

/**
 * 客户端级令牌桶限速器：把请求发起速率限制在 qps 以内。
 * 批量投放时服务端按 QPS 维度限流，本地先行削峰可显著降低 429 概率。
 * 该对象持有令牌状态，每个 ApiClient 应使用独立实例。
 */
class RateLimiter
{
    /** @var float 每秒允许的请求数，<= 0 表示不限速 */
    private float $qps;

    /** @var int 令牌桶容量，允许的突发请求数 */
    private int $burst;

    /** @var float 当前可用令牌 */
    private float $tokens;

    /** @var float 上次补充令牌的时刻（单调时钟读数，秒） */
    private float $lastRefill;

    /** @var int 最近一次等待的毫秒数 */
    private int $lastWaitMs = 0;

    /**
     * @param float $qps 每秒允许的请求数，<= 0 表示不限速
     * @param int $burst 令牌桶容量，默认 1 即严格 QPS
     */
    public function __construct(float $qps = 0.0, int $burst = 1)
    {
        $this->qps = $qps;
        $this->burst = max(1, $burst);
        $this->tokens = (float)$this->burst;
        $this->lastRefill = self::now();
    }

    /**
     * @return float
     */
    public function getQps(): float
    {
        return $this->qps;
    }

    /**
     * @return int
     */
    public function getBurst(): int
    {
        return $this->burst;
    }

    /**
     * @return int 最近一次等待的毫秒数
     */
    public function getLastWaitMs(): int
    {
        return $this->lastWaitMs;
    }

    /**
     * 阻塞直到可以发起一次请求。
     *
     * @return void
     */
    public function acquire(): void
    {
        if ($this->qps <= 0.0) {
            $this->lastWaitMs = 0;
            return;
        }

        $this->refill();
        if ($this->tokens >= 1.0) {
            $this->tokens -= 1.0;
            $this->lastWaitMs = 0;
            return;
        }

        $deficit = 1.0 - $this->tokens;
        // 向上取整到毫秒，保证等待不短于理论值，实际速率不会超过 qps
        $waitMs = (int)ceil(($deficit / $this->qps) * 1000.0);
        if ($waitMs > 0) {
            self::sleepMs($waitMs);
        }
        $this->refill();
        // 等待后仍有零头缺口时直接记为已消耗，宁可慢一点也不超发
        $this->tokens = $this->tokens >= 1.0 ? $this->tokens - 1.0 : 0.0;
        $this->lastWaitMs = $waitMs;
    }

    /**
     * 按实际流逝时间补充令牌。
     *
     * @return void
     */
    private function refill(): void
    {
        $now = self::now();
        $elapsed = $now - $this->lastRefill;
        if ($elapsed > 0) {
            $this->tokens = min((float)$this->burst, $this->tokens + $elapsed * $this->qps);
        }
        $this->lastRefill = $now;
    }

    /**
     * Monotonic clock: a wall-clock jump must not corrupt the token bucket.
     *
     * hrtime(false) is used instead of hrtime(true) because the latter's unit
     * is not consistent across builds (some return float seconds, others
     * integer nanoseconds).
     *
     * @return float Seconds, with sub-microsecond resolution
     */
    private static function now(): float
    {
        if (function_exists('hrtime')) {
            $parts = hrtime(false);
            if (is_array($parts) && count($parts) === 2) {
                return (float)$parts[0] + ((float)$parts[1] / 1000000000.0);
            }
        }
        return microtime(true);
    }

    /**
     * 分片休眠，避免单次 usleep 过长导致信号无法及时处理。
     *
     * @param int $milliseconds
     * @return void
     */
    private static function sleepMs(int $milliseconds): void
    {
        $remaining = $milliseconds * 1000;
        while ($remaining > 0) {
            $slice = $remaining > 500000 ? 500000 : $remaining;
            usleep($slice);
            $remaining -= $slice;
        }
    }
}
