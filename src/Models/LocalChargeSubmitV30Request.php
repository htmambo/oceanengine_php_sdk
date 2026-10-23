<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalChargeSubmitV30Request implements \JsonSerializable
{
    /**
     * 充值金额，单位分，值为实际金额乘以100
     * @var int
     */
    protected ?int $chargeAmount = null;

    /**
     * 提交充值请求ID，相同请求ID多次请求，返回相同充值单ID
     * @var string
     */
    protected ?string $chargeRequestId = null;

    /**
     * 本地推广告账户ID
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @var \Oceanengine\Models\LocalChargeSubmitV30RequestPayInfo
     */
    protected ?\Oceanengine\Models\LocalChargeSubmitV30RequestPayInfo $payInfo = null;

    /**
     * 充值金额，单位分，值为实际金额乘以100
     * @return int
     */
    public function getChargeAmount(): ?int
    {
        return $this->chargeAmount;
    }

    /**
     * 充值金额，单位分，值为实际金额乘以100
     * @param int $chargeAmount
     * @return self
     */
    public function setChargeAmount(?int $chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;
        return $this;
    }

    /**
     * 提交充值请求ID，相同请求ID多次请求，返回相同充值单ID
     * @return string
     */
    public function getChargeRequestId(): ?string
    {
        return $this->chargeRequestId;
    }

    /**
     * 提交充值请求ID，相同请求ID多次请求，返回相同充值单ID
     * @param string $chargeRequestId
     * @return self
     */
    public function setChargeRequestId(?string $chargeRequestId): self
    {
        $this->chargeRequestId = $chargeRequestId;
        return $this;
    }

    /**
     * 本地推广告账户ID
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * 本地推广告账户ID
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalChargeSubmitV30RequestPayInfo
     */
    public function getPayInfo(): ?\Oceanengine\Models\LocalChargeSubmitV30RequestPayInfo
    {
        return $this->payInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalChargeSubmitV30RequestPayInfo $payInfo
     * @return self
     */
    public function setPayInfo(?\Oceanengine\Models\LocalChargeSubmitV30RequestPayInfo $payInfo): self
    {
        $this->payInfo = $payInfo;
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
        if ($this->chargeRequestId !== null) {
            $result['charge_request_id'] = $this->chargeRequestId;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->payInfo !== null) {
            $result['pay_info'] = $this->payInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['charge_amount'] ?? null) !== null) {
            $obj->chargeAmount = (int) $v;
        }
        if (($v = $data['charge_request_id'] ?? null) !== null) {
            $obj->chargeRequestId = (string) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['pay_info'] ?? null) !== null && is_array($v)) {
            $obj->payInfo = \Oceanengine\Models\LocalChargeSubmitV30RequestPayInfo::fromArray($v);
        }
        return $obj;
    }
}
