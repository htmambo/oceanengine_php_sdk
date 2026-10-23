<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInnerCapitalDetailListInner implements \JsonSerializable
{
    /**
     * 可转资金子类型明细列表
     * @var \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInnerCapitalDetailListInnerCapitalSubDetailsInner[]
     */
    protected ?array $capitalSubDetails = null;

    /**
     * @var \Oceanengine\Models\CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType
     */
    protected ?string $capitalType = null;

    /**
     * 可转资金金额(单位：分)
     * @var int
     */
    protected ?int $transferBalance = null;

    /**
     * 可转资金子类型明细列表
     * @return \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInnerCapitalDetailListInnerCapitalSubDetailsInner[]
     */
    public function getCapitalSubDetails(): ?array
    {
        return $this->capitalSubDetails;
    }

    /**
     * 可转资金子类型明细列表
     * @param \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInnerCapitalDetailListInnerCapitalSubDetailsInner[] $capitalSubDetails
     * @return self
     */
    public function setCapitalSubDetails(?array $capitalSubDetails): self
    {
        $this->capitalSubDetails = $capitalSubDetails;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType
     */
    public function getCapitalType(): ?string
    {
        return $this->capitalType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferQueryTransferBalanceV30DataAccontAmountDetailListCapitalDetailListCapitalType $capitalType
     * @return self
     */
    public function setCapitalType(?string $capitalType): self
    {
        $this->capitalType = $capitalType;
        return $this;
    }

    /**
     * 可转资金金额(单位：分)
     * @return int
     */
    public function getTransferBalance(): ?int
    {
        return $this->transferBalance;
    }

    /**
     * 可转资金金额(单位：分)
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
        if ($this->transferBalance !== null) {
            $result['transfer_balance'] = $this->transferBalance;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['capital_sub_details'] ?? null) !== null && is_array($v)) {
            $obj->capitalSubDetails = array_map(fn ($vv) => \Oceanengine\Models\CgTransferQueryTransferBalanceV30ResponseDataAccontAmountDetailListInnerCapitalDetailListInnerCapitalSubDetailsInner::fromArray($vv), $v);
        }
        if (($v = $data['capital_type'] ?? null) !== null) {
            $obj->capitalType = (string) $v;
        }
        if (($v = $data['transfer_balance'] ?? null) !== null) {
            $obj->transferBalance = (int) $v;
        }
        return $obj;
    }
}
