<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30ResponseDataParticipantCanTransferBalanceListInnerPayerBalancesInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum
     */
    protected ?string $capitalEnum = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSource
     */
    protected ?string $capitalSource = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType
     */
    protected ?string $capitalSubType = null;

    /**
     * @var \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform
     */
    protected ?string $platform = null;

    /**
     * 可转余额，单位分
     * @var int
     */
    protected ?int $transferBalance = null;

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum
     */
    public function getCapitalEnum(): ?string
    {
        return $this->capitalEnum;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalEnum $capitalEnum
     * @return self
     */
    public function setCapitalEnum(?string $capitalEnum): self
    {
        $this->capitalEnum = $capitalEnum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSource
     */
    public function getCapitalSource(): ?string
    {
        return $this->capitalSource;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSource $capitalSource
     * @return self
     */
    public function setCapitalSource(?string $capitalSource): self
    {
        $this->capitalSource = $capitalSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType
     */
    public function getCapitalSubType(): ?string
    {
        return $this->capitalSubType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesCapitalSubType $capitalSubType
     * @return self
     */
    public function setCapitalSubType(?string $capitalSubType): self
    {
        $this->capitalSubType = $capitalSubType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\CgTransferV2WalletCanTransferBalanceBetweenAccountGetV30DataParticipantCanTransferBalanceListPayerBalancesPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 可转余额，单位分
     * @return int
     */
    public function getTransferBalance(): ?int
    {
        return $this->transferBalance;
    }

    /**
     * 可转余额，单位分
     * @param int $transferBalance
     * @return self
     */
    public function setTransferBalance(?int $transferBalance): self
    {
        $this->transferBalance = $transferBalance;
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
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->transferBalance !== null) {
            $result['transfer_balance'] = $this->transferBalance;
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
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['transfer_balance'] ?? null) !== null) {
            $obj->transferBalance = (int) $v;
        }
        return $obj;
    }
}
