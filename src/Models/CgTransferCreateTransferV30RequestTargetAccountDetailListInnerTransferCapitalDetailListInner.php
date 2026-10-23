<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferCreateTransferV30RequestTargetAccountDetailListInnerTransferCapitalDetailListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalSubType
     */
    protected ?string $capitalSubType = null;

    /**
     * @var \Oceanengine\Models\CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType
     */
    protected ?string $capitalType = null;

    /**
     * 转账资金金额(单位：分)
     * @var int
     */
    protected ?int $transferAmount = null;

    /**
     * @return \Oceanengine\Models\CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalSubType
     */
    public function getCapitalSubType(): ?string
    {
        return $this->capitalSubType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalSubType $capitalSubType
     * @return self
     */
    public function setCapitalSubType(?string $capitalSubType): self
    {
        $this->capitalSubType = $capitalSubType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType
     */
    public function getCapitalType(): ?string
    {
        return $this->capitalType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType $capitalType
     * @return self
     */
    public function setCapitalType(?string $capitalType): self
    {
        $this->capitalType = $capitalType;
        return $this;
    }

    /**
     * 转账资金金额(单位：分)
     * @return int
     */
    public function getTransferAmount(): ?int
    {
        return $this->transferAmount;
    }

    /**
     * 转账资金金额(单位：分)
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
        if (($v = $data['transfer_amount'] ?? null) !== null) {
            $obj->transferAmount = (int) $v;
        }
        return $obj;
    }
}
