<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner implements \JsonSerializable
{
    /**
     * 加款方可转资金子类型明细
     * @var \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInnerCapitalSubDetailsInner[]
     */
    protected ?array $capitalSubDetails = null;

    /**
     * @var \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType
     */
    protected ?string $capitalType = null;

    /**
     * 加款方可转资金余额(单位：分)
     * @var int
     */
    protected ?int $transferBalance = null;

    /**
     * 加款方可转资金子类型明细
     * @return \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInnerCapitalSubDetailsInner[]
     */
    public function getCapitalSubDetails(): ?array
    {
        return $this->capitalSubDetails;
    }

    /**
     * 加款方可转资金子类型明细
     * @param \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInnerCapitalSubDetailsInner[] $capitalSubDetails
     * @return self
     */
    public function setCapitalSubDetails(?array $capitalSubDetails): self
    {
        $this->capitalSubDetails = $capitalSubDetails;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType
     */
    public function getCapitalType(): ?string
    {
        return $this->capitalType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType $capitalType
     * @return self
     */
    public function setCapitalType(?string $capitalType): self
    {
        $this->capitalType = $capitalType;
        return $this;
    }

    /**
     * 加款方可转资金余额(单位：分)
     * @return int
     */
    public function getTransferBalance(): ?int
    {
        return $this->transferBalance;
    }

    /**
     * 加款方可转资金余额(单位：分)
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
            $obj->capitalSubDetails = array_map(fn ($vv) => \Oceanengine\Models\CgTransferQueryCanTransferBalanceV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInnerCapitalSubDetailsInner::fromArray($vv), $v);
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
