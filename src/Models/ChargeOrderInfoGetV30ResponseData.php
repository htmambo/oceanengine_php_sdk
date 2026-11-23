<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ChargeOrderInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 充值单-充值金额
     * @var int
     */
    protected ?int $chargeAmount = null;

    /**
     * 充值到账时间
     * @var string
     */
    protected ?string $chargeFinishedTime = null;

    /**
     * 充值单Id
     * @var int
     */
    protected ?int $chargeOrderId = null;

    /**
     * 充值单-充值对象ID
     * @var string
     */
    protected ?string $chargeTargetId = null;

    /**
     * 充值单-充值对象名称
     * @var string
     */
    protected ?string $chargeTargetName = null;

    /**
     * 请求adv和充值单的accountId是否一致
     * @var bool
     */
    protected ?bool $isSameAccount = null;

    /**
     * 请求adv和充值单的cid是否一致
     * @var bool
     */
    protected ?bool $isSameCustomer = null;

    /**
     * 充值单-充值金额
     * @return int
     */
    public function getChargeAmount(): ?int
    {
        return $this->chargeAmount;
    }

    /**
     * 充值单-充值金额
     * @param int $chargeAmount
     * @return self
     */
    public function setChargeAmount(?int $chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;
        return $this;
    }

    /**
     * 充值到账时间
     * @return string
     */
    public function getChargeFinishedTime(): ?string
    {
        return $this->chargeFinishedTime;
    }

    /**
     * 充值到账时间
     * @param string $chargeFinishedTime
     * @return self
     */
    public function setChargeFinishedTime(?string $chargeFinishedTime): self
    {
        $this->chargeFinishedTime = $chargeFinishedTime;
        return $this;
    }

    /**
     * 充值单Id
     * @return int
     */
    public function getChargeOrderId(): ?int
    {
        return $this->chargeOrderId;
    }

    /**
     * 充值单Id
     * @param int $chargeOrderId
     * @return self
     */
    public function setChargeOrderId(?int $chargeOrderId): self
    {
        $this->chargeOrderId = $chargeOrderId;
        return $this;
    }

    /**
     * 充值单-充值对象ID
     * @return string
     */
    public function getChargeTargetId(): ?string
    {
        return $this->chargeTargetId;
    }

    /**
     * 充值单-充值对象ID
     * @param string $chargeTargetId
     * @return self
     */
    public function setChargeTargetId(?string $chargeTargetId): self
    {
        $this->chargeTargetId = $chargeTargetId;
        return $this;
    }

    /**
     * 充值单-充值对象名称
     * @return string
     */
    public function getChargeTargetName(): ?string
    {
        return $this->chargeTargetName;
    }

    /**
     * 充值单-充值对象名称
     * @param string $chargeTargetName
     * @return self
     */
    public function setChargeTargetName(?string $chargeTargetName): self
    {
        $this->chargeTargetName = $chargeTargetName;
        return $this;
    }

    /**
     * 请求adv和充值单的accountId是否一致
     * @return bool
     */
    public function getIsSameAccount(): ?bool
    {
        return $this->isSameAccount;
    }

    /**
     * 请求adv和充值单的accountId是否一致
     * @param bool $isSameAccount
     * @return self
     */
    public function setIsSameAccount(?bool $isSameAccount): self
    {
        $this->isSameAccount = $isSameAccount;
        return $this;
    }

    /**
     * 请求adv和充值单的cid是否一致
     * @return bool
     */
    public function getIsSameCustomer(): ?bool
    {
        return $this->isSameCustomer;
    }

    /**
     * 请求adv和充值单的cid是否一致
     * @param bool $isSameCustomer
     * @return self
     */
    public function setIsSameCustomer(?bool $isSameCustomer): self
    {
        $this->isSameCustomer = $isSameCustomer;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->chargeAmount !== null) {
            $result['charge_amount'] = $this->chargeAmount;
        }
        if ($this->chargeFinishedTime !== null) {
            $result['charge_finished_time'] = $this->chargeFinishedTime;
        }
        if ($this->chargeOrderId !== null) {
            $result['charge_order_id'] = $this->chargeOrderId;
        }
        if ($this->chargeTargetId !== null) {
            $result['charge_target_id'] = $this->chargeTargetId;
        }
        if ($this->chargeTargetName !== null) {
            $result['charge_target_name'] = $this->chargeTargetName;
        }
        if ($this->isSameAccount !== null) {
            $result['is_same_account'] = $this->isSameAccount;
        }
        if ($this->isSameCustomer !== null) {
            $result['is_same_customer'] = $this->isSameCustomer;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['charge_amount'] ?? null) !== null) {
            $obj->chargeAmount = (int) $v;
        }
        if (($v = $data['charge_finished_time'] ?? null) !== null) {
            $obj->chargeFinishedTime = (string) $v;
        }
        if (($v = $data['charge_order_id'] ?? null) !== null) {
            $obj->chargeOrderId = (int) $v;
        }
        if (($v = $data['charge_target_id'] ?? null) !== null) {
            $obj->chargeTargetId = (string) $v;
        }
        if (($v = $data['charge_target_name'] ?? null) !== null) {
            $obj->chargeTargetName = (string) $v;
        }
        if (($v = $data['is_same_account'] ?? null) !== null) {
            $obj->isSameAccount = (bool) $v;
        }
        if (($v = $data['is_same_customer'] ?? null) !== null) {
            $obj->isSameCustomer = (bool) $v;
        }
        return $obj;
    }
}
