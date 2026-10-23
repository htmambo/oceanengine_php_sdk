<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInnerCapitalDetailListInnerCapitalSubDetailsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType
     */
    protected ?string $capitalSubType = null;

    /**
     * 资金子类型可转金额(单位：分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * @return \Oceanengine\Models\CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType
     */
    public function getCapitalSubType(): ?string
    {
        return $this->capitalSubType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalSubDetailsCapitalSubType $capitalSubType
     * @return self
     */
    public function setCapitalSubType(?string $capitalSubType): self
    {
        $this->capitalSubType = $capitalSubType;
        return $this;
    }

    /**
     * 资金子类型可转金额(单位：分)
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 资金子类型可转金额(单位：分)
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
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (int) $v;
        }
        return $obj;
    }
}
