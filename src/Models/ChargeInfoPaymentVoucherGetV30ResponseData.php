<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ChargeInfoPaymentVoucherGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ChargeInfoPaymentVoucherGetV30ResponseDataChargeDetail
     */
    protected ?\Oceanengine\Models\ChargeInfoPaymentVoucherGetV30ResponseDataChargeDetail $chargeDetail = null;

    /**
     * 充值失败原因
     * @var string
     */
    protected ?string $chargeFailReason = null;

    /**
     * 充值状态
     * @var string
     */
    protected ?string $chargeStatusName = null;

    /**
     * 资金编号
     * @var string
     */
    protected ?string $fundsSerial = null;

    /**
     * 是否被退款占用
     * @var bool
     */
    protected ?bool $isRefundUsed = null;

    /**
     * 概括
     * @var string
     */
    protected ?string $summary = null;

    /**
     * @return \Oceanengine\Models\ChargeInfoPaymentVoucherGetV30ResponseDataChargeDetail
     */
    public function getChargeDetail(): ?\Oceanengine\Models\ChargeInfoPaymentVoucherGetV30ResponseDataChargeDetail
    {
        return $this->chargeDetail;
    }

    /**
     * @param \Oceanengine\Models\ChargeInfoPaymentVoucherGetV30ResponseDataChargeDetail $chargeDetail
     * @return self
     */
    public function setChargeDetail(?\Oceanengine\Models\ChargeInfoPaymentVoucherGetV30ResponseDataChargeDetail $chargeDetail): self
    {
        $this->chargeDetail = $chargeDetail;
        return $this;
    }

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
     * 充值状态
     * @return string
     */
    public function getChargeStatusName(): ?string
    {
        return $this->chargeStatusName;
    }

    /**
     * 充值状态
     * @param string $chargeStatusName
     * @return self
     */
    public function setChargeStatusName(?string $chargeStatusName): self
    {
        $this->chargeStatusName = $chargeStatusName;
        return $this;
    }

    /**
     * 资金编号
     * @return string
     */
    public function getFundsSerial(): ?string
    {
        return $this->fundsSerial;
    }

    /**
     * 资金编号
     * @param string $fundsSerial
     * @return self
     */
    public function setFundsSerial(?string $fundsSerial): self
    {
        $this->fundsSerial = $fundsSerial;
        return $this;
    }

    /**
     * 是否被退款占用
     * @return bool
     */
    public function getIsRefundUsed(): ?bool
    {
        return $this->isRefundUsed;
    }

    /**
     * 是否被退款占用
     * @param bool $isRefundUsed
     * @return self
     */
    public function setIsRefundUsed(?bool $isRefundUsed): self
    {
        $this->isRefundUsed = $isRefundUsed;
        return $this;
    }

    /**
     * 概括
     * @return string
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * 概括
     * @param string $summary
     * @return self
     */
    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->chargeDetail !== null) {
            $result['charge_detail'] = $this->chargeDetail;
        }
        if ($this->chargeFailReason !== null) {
            $result['charge_fail_reason'] = $this->chargeFailReason;
        }
        if ($this->chargeStatusName !== null) {
            $result['charge_status_name'] = $this->chargeStatusName;
        }
        if ($this->fundsSerial !== null) {
            $result['funds_serial'] = $this->fundsSerial;
        }
        if ($this->isRefundUsed !== null) {
            $result['is_refund_used'] = $this->isRefundUsed;
        }
        if ($this->summary !== null) {
            $result['summary'] = $this->summary;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['charge_detail'] ?? null) !== null && is_array($v)) {
            $obj->chargeDetail = \Oceanengine\Models\ChargeInfoPaymentVoucherGetV30ResponseDataChargeDetail::fromArray($v);
        }
        if (($v = $data['charge_fail_reason'] ?? null) !== null) {
            $obj->chargeFailReason = (string) $v;
        }
        if (($v = $data['charge_status_name'] ?? null) !== null) {
            $obj->chargeStatusName = (string) $v;
        }
        if (($v = $data['funds_serial'] ?? null) !== null) {
            $obj->fundsSerial = (string) $v;
        }
        if (($v = $data['is_refund_used'] ?? null) !== null) {
            $obj->isRefundUsed = (bool) $v;
        }
        if (($v = $data['summary'] ?? null) !== null) {
            $obj->summary = (string) $v;
        }
        return $obj;
    }
}
