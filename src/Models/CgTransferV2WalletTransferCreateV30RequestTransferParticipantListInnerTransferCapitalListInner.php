<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV2WalletTransferCreateV30RequestTransferParticipantListInnerTransferCapitalListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferV2WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum
     */
    protected ?string $capitalEnum = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType
     */
    protected ?string $capitalSubType = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform
     */
    protected ?string $payerPlatform = null;

    /**
     * 转账金额 (单位:分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum
     */
    public function getCapitalEnum(): ?string
    {
        return $this->capitalEnum;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum $capitalEnum
     * @return self
     */
    public function setCapitalEnum(?string $capitalEnum): self
    {
        $this->capitalEnum = $capitalEnum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType
     */
    public function getCapitalSubType(): ?string
    {
        return $this->capitalSubType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType $capitalSubType
     * @return self
     */
    public function setCapitalSubType(?string $capitalSubType): self
    {
        $this->capitalSubType = $capitalSubType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform
     */
    public function getPayerPlatform(): ?string
    {
        return $this->payerPlatform;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform $payerPlatform
     * @return self
     */
    public function setPayerPlatform(?string $payerPlatform): self
    {
        $this->payerPlatform = $payerPlatform;
        return $this;
    }

    /**
     * 转账金额 (单位:分)
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 转账金额 (单位:分)
     * @param int $transferAmount
     * @return self
     */
    public function setTransferAmount(?int $transferAmount): self
    {
        $this->transferAmount = $transferAmount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->capitalEnum !== null) {
            $result['capital_enum'] = $this->capitalEnum;
        }
        if ($this->capitalSubType !== null) {
            $result['capital_sub_type'] = $this->capitalSubType;
        }
        if ($this->payerPlatform !== null) {
            $result['payer_platform'] = $this->payerPlatform;
        }
        if ($this->transferAmount !== null) {
            $result['transfer_amount'] = $this->transferAmount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_enum'] ?? null) !== null) {
            $obj->capitalEnum = (string) $v;
        }
        if (($v = $data['capital_sub_type'] ?? null) !== null) {
            $obj->capitalSubType = (string) $v;
        }
        if (($v = $data['payer_platform'] ?? null) !== null) {
            $obj->payerPlatform = (string) $v;
        }
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (int) $v;
        }
        return $obj;
    }
}
