<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerCanTransferBalanceListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalEnum
     */
    protected ?string $capitalEnum = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource
     */
    protected ?string $capitalSource = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType
     */
    protected ?string $capitalSubType = null;

    /**
     * 减款方可转余额，单位分
     * @var int
     */
    protected ?int $payerCanTransferBalance = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform
     */
    protected ?string $platform = null;

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalEnum
     */
    public function getCapitalEnum(): ?string
    {
        return $this->capitalEnum;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalEnum $capitalEnum
     * @return self
     */
    public function setCapitalEnum(?string $capitalEnum): self
    {
        $this->capitalEnum = $capitalEnum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource
     */
    public function getCapitalSource(): ?string
    {
        return $this->capitalSource;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSource $capitalSource
     * @return self
     */
    public function setCapitalSource(?string $capitalSource): self
    {
        $this->capitalSource = $capitalSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType
     */
    public function getCapitalSubType(): ?string
    {
        return $this->capitalSubType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListCapitalSubType $capitalSubType
     * @return self
     */
    public function setCapitalSubType(?string $capitalSubType): self
    {
        $this->capitalSubType = $capitalSubType;
        return $this;
    }

    /**
     * 减款方可转余额，单位分
     * @return int
     */
    public function getPayerCanTransferBalance(): ?int
    {
        return $this->payerCanTransferBalance;
    }

    /**
     * 减款方可转余额，单位分
     * @param int $payerCanTransferBalance
     * @return self
     */
    public function setPayerCanTransferBalance(?int $payerCanTransferBalance): self
    {
        $this->payerCanTransferBalance = $payerCanTransferBalance;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListCanTransferBalanceListPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
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
        if ($this->capitalSource !== null) {
            $result['capital_source'] = $this->capitalSource;
        }
        if ($this->capitalSubType !== null) {
            $result['capital_sub_type'] = $this->capitalSubType;
        }
        if ($this->payerCanTransferBalance !== null) {
            $result['payer_can_transfer_balance'] = $this->payerCanTransferBalance;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_enum'] ?? null) !== null) {
            $obj->capitalEnum = (string) $v;
        }
        if (($v = $data['capital_source'] ?? null) !== null) {
            $obj->capitalSource = (string) $v;
        }
        if (($v = $data['capital_sub_type'] ?? null) !== null) {
            $obj->capitalSubType = (string) $v;
        }
        if (($v = $data['payer_can_transfer_balance'] ?? null) !== null) {
            $obj->payerCanTransferBalance = (int) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        return $obj;
    }
}
