<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalChargeResultV30ResponseData implements \JsonSerializable
{
    /**
     * 充值失败原因
     * @var string
     */
    protected ?string $chargeFailReason = null;

    /**
     * 充值单ID
     * @var int
     */
    protected ?int $chargeOrderId = null;

    /**
     * @var \Oceanengine\Models\LocalChargeResultV30DataChargeStatus
     */
    protected ?string $chargeStatus = null;

    /**
     * 充值成功时间，格式yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $chargeSuccessTime = null;

    /**
     * 充值失败原因
     * @return string
     */
    public function getChargeFailReason(): ?string
    {
        return $this->chargeFailReason;
    }

    /**
     * 充值失败原因
     * @param string $chargeFailReason
     * @return self
     */
    public function setChargeFailReason(?string $chargeFailReason): self
    {
        $this->chargeFailReason = $chargeFailReason;
        return $this;
    }

    /**
     * 充值单ID
     * @return int
     */
    public function getChargeOrderId(): ?int
    {
        return $this->chargeOrderId;
    }

    /**
     * 充值单ID
     * @param int $chargeOrderId
     * @return self
     */
    public function setChargeOrderId(?int $chargeOrderId): self
    {
        $this->chargeOrderId = $chargeOrderId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalChargeResultV30DataChargeStatus
     */
    public function getChargeStatus(): ?string
    {
        return $this->chargeStatus;
    }

    /**
     * @param \Oceanengine\Models\LocalChargeResultV30DataChargeStatus $chargeStatus
     * @return self
     */
    public function setChargeStatus(?string $chargeStatus): self
    {
        $this->chargeStatus = $chargeStatus;
        return $this;
    }

    /**
     * 充值成功时间，格式yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getChargeSuccessTime(): ?string
    {
        return $this->chargeSuccessTime;
    }

    /**
     * 充值成功时间，格式yyyy-MM-dd HH:mm:ss
     * @param string $chargeSuccessTime
     * @return self
     */
    public function setChargeSuccessTime(?string $chargeSuccessTime): self
    {
        $this->chargeSuccessTime = $chargeSuccessTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->chargeFailReason !== null) {
            $result['charge_fail_reason'] = $this->chargeFailReason;
        }
        if ($this->chargeOrderId !== null) {
            $result['charge_order_id'] = $this->chargeOrderId;
        }
        if ($this->chargeStatus !== null) {
            $result['charge_status'] = $this->chargeStatus;
        }
        if ($this->chargeSuccessTime !== null) {
            $result['charge_success_time'] = $this->chargeSuccessTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['charge_fail_reason'] ?? null) !== null) {
            $obj->chargeFailReason = (string) $v;
        }
        if (($v = $data['charge_order_id'] ?? null) !== null) {
            $obj->chargeOrderId = (int) $v;
        }
        if (($v = $data['charge_status'] ?? null) !== null) {
            $obj->chargeStatus = (string) $v;
        }
        if (($v = $data['charge_success_time'] ?? null) !== null) {
            $obj->chargeSuccessTime = (string) $v;
        }
        return $obj;
    }
}
