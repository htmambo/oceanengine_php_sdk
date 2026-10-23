<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerRemitterCapitalDetailListInner implements \JsonSerializable
{
    /**
     * 可转资金子类型明细列表
     * @var \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerRemitterCapitalDetailListInnerCapitalSubDetailsInner[]
     */
    protected ?array $capitalSubDetails = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType
     */
    protected ?string $capitalType = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListPlatform
     */
    protected ?string $platform = null;

    /**
     * 可转余额（单位：分）
     * @var int
     */
    protected ?int $transferBalance = null;

    /**
     * 可转资金子类型明细列表
     * @return \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerRemitterCapitalDetailListInnerCapitalSubDetailsInner[]
     */
    public function getCapitalSubDetails(): ?array
    {
        return $this->capitalSubDetails;
    }

    /**
     * 可转资金子类型明细列表
     * @param \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerRemitterCapitalDetailListInnerCapitalSubDetailsInner[] $capitalSubDetails
     * @return self
     */
    public function setCapitalSubDetails(?array $capitalSubDetails): self
    {
        $this->capitalSubDetails = $capitalSubDetails;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType
     */
    public function getCapitalType(): ?string
    {
        return $this->capitalType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListCapitalType $capitalType
     * @return self
     */
    public function setCapitalType(?string $capitalType): self
    {
        $this->capitalType = $capitalType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30DataCanTransferDetailListRemitterCapitalDetailListPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 可转余额（单位：分）
     * @return int
     */
    public function getTransferBalance(): ?int
    {
        return $this->transferBalance;
    }

    /**
     * 可转余额（单位：分）
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
        if ($this->capitalSubDetails !== null) {
            $result['capital_sub_details'] = $this->capitalSubDetails;
        }
        if ($this->capitalType !== null) {
            $result['capital_type'] = $this->capitalType;
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
        if (($v = $data['capital_sub_details'] ?? null) !== null && is_array($v)) {
            $obj->capitalSubDetails = array_map(fn ($vv) => \Oceanengine\Models\CgTransferWalletTransferCanTransferBalanceV30ResponseDataCanTransferDetailListInnerRemitterCapitalDetailListInnerCapitalSubDetailsInner::fromArray($vv), $v);
        }
        if (($v = $data['capital_type'] ?? null) !== null) {
            $obj->capitalType = (string) $v;
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
