<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CgTransferCanTransferBalanceGetV30ResponseDataCanTransferDetailListInnerPayeeTransferAmountDetailListInnerCapitalDetailListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType
     */
    protected ?string $capitalType = null;

    /**
     * 转入方可转资金余额(单位：分)
     * @var int
     */
    protected ?int $transferBalance = null;

    /**
     * @return \Oceanengine\Models\CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType
     */
    public function getCapitalType(): ?string
    {
        return $this->capitalType;
    }

    /**
     * @param \Oceanengine\Models\CgTransferCanTransferBalanceGetV30DataCanTransferDetailListPayeeTransferAmountDetailListCapitalDetailListCapitalType $capitalType
     * @return self
     */
    public function setCapitalType(?string $capitalType): self
    {
        $this->capitalType = $capitalType;
        return $this;
    }

    /**
     * 转入方可转资金余额(单位：分)
     * @return int
     */
    public function getTransferBalance(): ?int
    {
        return $this->transferBalance;
    }

    /**
     * 转入方可转资金余额(单位：分)
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
        if (($v = $data['capital_type'] ?? null) !== null) {
            $obj->capitalType = (string) $v;
        }
        if (($v = $data['transfer_balance'] ?? null) !== null) {
            $obj->transferBalance = (int) $v;
        }
        return $obj;
    }
}
