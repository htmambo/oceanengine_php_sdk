<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class Paycnt7rStopDecisionGetV10ResponseData implements \JsonSerializable
{
    /**
     * 额外附加信息：时间窗、指标、阈值、query_id 和判断原因
     * @var array<string,string>
     */
    protected ?array $extra = null;

    /**
     * 查询成功时的判断原因；失败时该字段可为空，错误信息见顶层 message。
     * @var string
     */
    protected ?string $resMsg = null;

    /**
     * 仅 success=true 时有效；不会执行关停
     * @var bool
     */
    protected ?bool $shouldStop = null;

    /**
     * 查询和判断是否成功，与 should_stop 区分
     * @var bool
     */
    protected ?bool $success = null;

    /**
     * 额外附加信息：时间窗、指标、阈值、query_id 和判断原因
     * @return array<string,string>
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * 额外附加信息：时间窗、指标、阈值、query_id 和判断原因
     * @param array<string,string> $extra
     * @return self
     */
    public function setExtra(?array $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * 查询成功时的判断原因；失败时该字段可为空，错误信息见顶层 message。
     * @return string
     */
    public function getResMsg(): ?string
    {
        return $this->resMsg;
    }

    /**
     * 查询成功时的判断原因；失败时该字段可为空，错误信息见顶层 message。
     * @param string $resMsg
     * @return self
     */
    public function setResMsg(?string $resMsg): self
    {
        $this->resMsg = $resMsg;
        return $this;
    }

    /**
     * 仅 success=true 时有效；不会执行关停
     * @return bool
     */
    public function getShouldStop(): ?bool
    {
        return $this->shouldStop;
    }

    /**
     * 仅 success=true 时有效；不会执行关停
     * @param bool $shouldStop
     * @return self
     */
    public function setShouldStop(?bool $shouldStop): self
    {
        $this->shouldStop = $shouldStop;
        return $this;
    }

    /**
     * 查询和判断是否成功，与 should_stop 区分
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * 查询和判断是否成功，与 should_stop 区分
     * @param bool $success
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->extra !== null) {
            $result['extra'] = $this->extra;
        }
        if ($this->resMsg !== null) {
            $result['res_msg'] = $this->resMsg;
        }
        if ($this->shouldStop !== null) {
            $result['should_stop'] = $this->shouldStop;
        }
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['extra'] ?? null) !== null && is_array($v)) {
            $obj->extra = $v;
        }
        if (($v = $data['res_msg'] ?? null) !== null) {
            $obj->resMsg = (string) $v;
        }
        if (($v = $data['should_stop'] ?? null) !== null) {
            $obj->shouldStop = (bool) $v;
        }
        if (($v = $data['success'] ?? null) !== null) {
            $obj->success = (bool) $v;
        }
        return $obj;
    }
}
