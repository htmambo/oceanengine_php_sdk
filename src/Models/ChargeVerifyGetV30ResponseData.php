<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ChargeVerifyGetV30ResponseData implements \JsonSerializable
{
    /**
     * 是否可以充值
     * @var bool
     */
    protected ?bool $canCharge = null;

    /**
     * 合同列表
     * @var \Oceanengine\Models\ChargeVerifyGetV30ResponseDataChargeContractListInner[]
     */
    protected ?array $chargeContractList = null;

    /**
     * 最小充值金额
     * @var int
     */
    protected ?int $minChargeAmount = null;

    /**
     * 是否可以充值
     * @return bool
     */
    public function getCanCharge(): ?bool
    {
        return $this->canCharge;
    }

    /**
     * 是否可以充值
     * @param bool $canCharge
     * @return self
     */
    public function setCanCharge(?bool $canCharge): self
    {
        $this->canCharge = $canCharge;
        return $this;
    }

    /**
     * 合同列表
     * @return \Oceanengine\Models\ChargeVerifyGetV30ResponseDataChargeContractListInner[]
     */
    public function getChargeContractList(): ?array
    {
        return $this->chargeContractList;
    }

    /**
     * 合同列表
     * @param \Oceanengine\Models\ChargeVerifyGetV30ResponseDataChargeContractListInner[] $chargeContractList
     * @return self
     */
    public function setChargeContractList(?array $chargeContractList): self
    {
        $this->chargeContractList = $chargeContractList;
        return $this;
    }

    /**
     * 最小充值金额
     * @return int
     */
    public function getMinChargeAmount(): ?int
    {
        return $this->minChargeAmount;
    }

    /**
     * 最小充值金额
     * @param int $minChargeAmount
     * @return self
     */
    public function setMinChargeAmount(?int $minChargeAmount): self
    {
        $this->minChargeAmount = $minChargeAmount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->canCharge !== null) {
            $result['can_charge'] = $this->canCharge;
        }
        if ($this->chargeContractList !== null) {
            $result['charge_contract_list'] = $this->chargeContractList;
        }
        if ($this->minChargeAmount !== null) {
            $result['min_charge_amount'] = $this->minChargeAmount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['can_charge'] ?? null) !== null) {
            $obj->canCharge = (bool) $v;
        }
        if (($v = $data['charge_contract_list'] ?? null) !== null && is_array($v)) {
            $obj->chargeContractList = array_map(fn ($vv) => \Oceanengine\Models\ChargeVerifyGetV30ResponseDataChargeContractListInner::fromArray($vv), $v);
        }
        if (($v = $data['min_charge_amount'] ?? null) !== null) {
            $obj->minChargeAmount = (int) $v;
        }
        return $obj;
    }
}
