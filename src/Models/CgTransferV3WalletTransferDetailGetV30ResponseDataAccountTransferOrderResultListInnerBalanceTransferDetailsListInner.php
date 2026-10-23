<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV3WalletTransferDetailGetV30ResponseDataAccountTransferOrderResultListInnerBalanceTransferDetailsListInner implements \JsonSerializable
{
    /**
     * 转账资金明细编号
     * @var string
     */
    protected ?string $balanceTransferSerial = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum
     */
    protected ?string $capitalEnum = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource
     */
    protected ?string $capitalSource = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType
     */
    protected ?string $capitalSubType = null;

    /**
     * 转账完成时间
     * @var string
     */
    protected ?string $finishTime = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus
     */
    protected ?string $payStatus = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform
     */
    protected ?string $payeePlatform = null;

    /**
     * @var \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayerPlatform
     */
    protected ?string $payerPlatform = null;

    /**
     * 转账金额(单位:分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * 转账失败原因
     * @var string
     */
    protected ?string $transferFailReason = null;

    /**
     * 转账资金明细编号
     * @return string
     */
    public function getBalanceTransferSerial(): ?string
    {
        return $this->balanceTransferSerial;
    }

    /**
     * 转账资金明细编号
     * @param string $balanceTransferSerial
     * @return self
     */
    public function setBalanceTransferSerial(?string $balanceTransferSerial): self
    {
        $this->balanceTransferSerial = $balanceTransferSerial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum
     */
    public function getCapitalEnum(): ?string
    {
        return $this->capitalEnum;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum $capitalEnum
     * @return self
     */
    public function setCapitalEnum(?string $capitalEnum): self
    {
        $this->capitalEnum = $capitalEnum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource
     */
    public function getCapitalSource(): ?string
    {
        return $this->capitalSource;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSource $capitalSource
     * @return self
     */
    public function setCapitalSource(?string $capitalSource): self
    {
        $this->capitalSource = $capitalSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType
     */
    public function getCapitalSubType(): ?string
    {
        return $this->capitalSubType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalSubType $capitalSubType
     * @return self
     */
    public function setCapitalSubType(?string $capitalSubType): self
    {
        $this->capitalSubType = $capitalSubType;
        return $this;
    }

    /**
     * 转账完成时间
     * @return string
     */
    public function getFinishTime(): ?string
    {
        return $this->finishTime;
    }

    /**
     * 转账完成时间
     * @param string $finishTime
     * @return self
     */
    public function setFinishTime(?string $finishTime): self
    {
        $this->finishTime = $finishTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus
     */
    public function getPayStatus(): ?string
    {
        return $this->payStatus;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayStatus $payStatus
     * @return self
     */
    public function setPayStatus(?string $payStatus): self
    {
        $this->payStatus = $payStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform
     */
    public function getPayeePlatform(): ?string
    {
        return $this->payeePlatform;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayeePlatform $payeePlatform
     * @return self
     */
    public function setPayeePlatform(?string $payeePlatform): self
    {
        $this->payeePlatform = $payeePlatform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayerPlatform
     */
    public function getPayerPlatform(): ?string
    {
        return $this->payerPlatform;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV3WalletTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListPayerPlatform $payerPlatform
     * @return self
     */
    public function setPayerPlatform(?string $payerPlatform): self
    {
        $this->payerPlatform = $payerPlatform;
        return $this;
    }

    /**
     * 转账金额(单位:分)
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 转账金额(单位:分)
     * @param int $transferAmount
     * @return self
     */
    public function setTransferAmount(?int $transferAmount): self
    {
        $this->transferAmount = $transferAmount;
        return $this;
    }

    /**
     * 转账失败原因
     * @return string
     */
    public function getTransferFailReason(): ?string
    {
        return $this->transferFailReason;
    }

    /**
     * 转账失败原因
     * @param string $transferFailReason
     * @return self
     */
    public function setTransferFailReason(?string $transferFailReason): self
    {
        $this->transferFailReason = $transferFailReason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->balanceTransferSerial !== null) {
            $result['balance_transfer_serial'] = $this->balanceTransferSerial;
        }
        if ($this->capitalEnum !== null) {
            $result['capital_enum'] = $this->capitalEnum;
        }
        if ($this->capitalSource !== null) {
            $result['capital_source'] = $this->capitalSource;
        }
        if ($this->capitalSubType !== null) {
            $result['capital_sub_type'] = $this->capitalSubType;
        }
        if ($this->finishTime !== null) {
            $result['finish_time'] = $this->finishTime;
        }
        if ($this->payStatus !== null) {
            $result['pay_status'] = $this->payStatus;
        }
        if ($this->payeePlatform !== null) {
            $result['payee_platform'] = $this->payeePlatform;
        }
        if ($this->payerPlatform !== null) {
            $result['payer_platform'] = $this->payerPlatform;
        }
        if ($this->transferAmount !== null) {
            $result['transfer_amount'] = $this->transferAmount;
        }
        if ($this->transferFailReason !== null) {
            $result['transfer_fail_reason'] = $this->transferFailReason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['balance_transfer_serial'] ?? null) !== null) {
            $obj->balanceTransferSerial = (string) $v;
        }
        if (($v = $data['capital_enum'] ?? null) !== null) {
            $obj->capitalEnum = (string) $v;
        }
        if (($v = $data['capital_source'] ?? null) !== null) {
            $obj->capitalSource = (string) $v;
        }
        if (($v = $data['capital_sub_type'] ?? null) !== null) {
            $obj->capitalSubType = (string) $v;
        }
        if (($v = $data['finish_time'] ?? null) !== null) {
            $obj->finishTime = (string) $v;
        }
        if (($v = $data['pay_status'] ?? null) !== null) {
            $obj->payStatus = (string) $v;
        }
        if (($v = $data['payee_platform'] ?? null) !== null) {
            $obj->payeePlatform = (string) $v;
        }
        if (($v = $data['payer_platform'] ?? null) !== null) {
            $obj->payerPlatform = (string) $v;
        }
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (int) $v;
        }
        if (($v = $data['transfer_fail_reason'] ?? null) !== null) {
            $obj->transferFailReason = (string) $v;
        }
        return $obj;
    }
}
