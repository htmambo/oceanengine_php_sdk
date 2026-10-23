<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ChargeListV30ResponseData implements \JsonSerializable
{
    /**
     * 充值信息列表
     * @var \Oceanengine\Models\ChargeListV30ResponseDataChargeListInner[]
     */
    protected ?array $chargeList = null;

    /**
     * @var \Oceanengine\Models\ChargeListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ChargeListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 充值行总充值金额
     * @var int
     */
    protected ?int $totalAmount = null;

    /**
     * 充值行已撤销金额
     * @var int
     */
    protected ?int $totalCancelAmount = null;

    /**
     * 总的充值金额，充值行总充值金额-充值行已撤销金额，单位元
     * @var int
     */
    protected ?int $totalChargeAmount = null;

    /**
     * 充值信息列表
     * @return \Oceanengine\Models\ChargeListV30ResponseDataChargeListInner[]
     */
    public function getChargeList(): ?array
    {
        return $this->chargeList;
    }

    /**
     * 充值信息列表
     * @param \Oceanengine\Models\ChargeListV30ResponseDataChargeListInner[] $chargeList
     * @return self
     */
    public function setChargeList(?array $chargeList): self
    {
        $this->chargeList = $chargeList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ChargeListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ChargeListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ChargeListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ChargeListV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 充值行总充值金额
     * @return int
     */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

    /**
     * 充值行总充值金额
     * @param int $totalAmount
     * @return self
     */
    public function setTotalAmount(?int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * 充值行已撤销金额
     * @return int
     */
    public function getTotalCancelAmount(): ?int
    {
        return $this->totalCancelAmount;
    }

    /**
     * 充值行已撤销金额
     * @param int $totalCancelAmount
     * @return self
     */
    public function setTotalCancelAmount(?int $totalCancelAmount): self
    {
        $this->totalCancelAmount = $totalCancelAmount;
        return $this;
    }

    /**
     * 总的充值金额，充值行总充值金额-充值行已撤销金额，单位元
     * @return int
     */
    public function getTotalChargeAmount(): ?int
    {
        return $this->totalChargeAmount;
    }

    /**
     * 总的充值金额，充值行总充值金额-充值行已撤销金额，单位元
     * @param int $totalChargeAmount
     * @return self
     */
    public function setTotalChargeAmount(?int $totalChargeAmount): self
    {
        $this->totalChargeAmount = $totalChargeAmount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->chargeList !== null) {
            $result['charge_list'] = $this->chargeList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->totalAmount !== null) {
            $result['total_amount'] = $this->totalAmount;
        }
        if ($this->totalCancelAmount !== null) {
            $result['total_cancel_amount'] = $this->totalCancelAmount;
        }
        if ($this->totalChargeAmount !== null) {
            $result['total_charge_amount'] = $this->totalChargeAmount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['charge_list'] ?? null) !== null && is_array($v)) {
            $obj->chargeList = array_map(fn ($vv) => \Oceanengine\Models\ChargeListV30ResponseDataChargeListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ChargeListV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['total_amount'] ?? null) !== null) {
            $obj->totalAmount = (int) $v;
        }
        if (($v = $data['total_cancel_amount'] ?? null) !== null) {
            $obj->totalCancelAmount = (int) $v;
        }
        if (($v = $data['total_charge_amount'] ?? null) !== null) {
            $obj->totalChargeAmount = (int) $v;
        }
        return $obj;
    }
}
