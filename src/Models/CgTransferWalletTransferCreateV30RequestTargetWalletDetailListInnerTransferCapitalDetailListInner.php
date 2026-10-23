<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferWalletTransferCreateV30RequestTargetWalletDetailListInnerTransferCapitalDetailListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalSubType
     */
    protected ?string $capitalSubType = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType
     */
    protected ?string $capitalType = null;

    /**
     * @var \Oceanengine\Models\CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform
     */
    protected ?string $platform = null;

    /**
     * 申请转账金额（单位：分）
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalSubType
     */
    public function getCapitalSubType(): ?string
    {
        return $this->capitalSubType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalSubType $capitalSubType
     * @return self
     */
    public function setCapitalSubType(?string $capitalSubType): self
    {
        $this->capitalSubType = $capitalSubType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType
     */
    public function getCapitalType(): ?string
    {
        return $this->capitalType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListCapitalType $capitalType
     * @return self
     */
    public function setCapitalType(?string $capitalType): self
    {
        $this->capitalType = $capitalType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\CgTransferWalletTransferCreateV30TargetWalletDetailListTransferCapitalDetailListPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 申请转账金额（单位：分）
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 申请转账金额（单位：分）
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
        if ($this->capitalSubType !== null) {
            $result['capital_sub_type'] = $this->capitalSubType;
        }
        if ($this->capitalType !== null) {
            $result['capital_type'] = $this->capitalType;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->transferAmount !== null) {
            $result['transfer_amount'] = $this->transferAmount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_sub_type'] ?? null) !== null) {
            $obj->capitalSubType = (string) $v;
        }
        if (($v = $data['capital_type'] ?? null) !== null) {
            $obj->capitalType = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (int) $v;
        }
        return $obj;
    }
}
