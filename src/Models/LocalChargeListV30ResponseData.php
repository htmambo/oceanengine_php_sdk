<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalChargeListV30ResponseData implements \JsonSerializable
{
    /**
     * 充值记录列表
     * @var \Oceanengine\Models\LocalChargeListV30ResponseDataChargeListInner[]
     */
    protected ?array $chargeList = null;

    /**
     * @var \Oceanengine\Models\LocalChargeListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalChargeListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 总充值金额，单位分，需除以100使用
     * @var int
     */
    protected ?int $totalAmount = null;

    /**
     * 总撤销金额，单位分，需除以100使用
     * @var int
     */
    protected ?int $totalCancelAmount = null;

    /**
     * 实际充值总金额：总充值金额-总撤销金额，单位分，需除以100使用
     * @var int
     */
    protected ?int $totalChargeAmount = null;

    /**
     * 充值记录列表
     * @return \Oceanengine\Models\LocalChargeListV30ResponseDataChargeListInner[]
     */
    public function getChargeList(): ?array
    {
        return $this->chargeList;
    }

    /**
     * 充值记录列表
     * @param \Oceanengine\Models\LocalChargeListV30ResponseDataChargeListInner[] $chargeList
     * @return self
     */
    public function setChargeList(?array $chargeList): self
    {
        $this->chargeList = $chargeList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalChargeListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalChargeListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalChargeListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalChargeListV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 总充值金额，单位分，需除以100使用
     * @return int
     */
    public function getTotalAmount(): ?int
    {
        return $this->totalAmount;
    }

    /**
     * 总充值金额，单位分，需除以100使用
     * @param int $totalAmount
     * @return self
     */
    public function setTotalAmount(?int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * 总撤销金额，单位分，需除以100使用
     * @return int
     */
    public function getTotalCancelAmount(): ?int
    {
        return $this->totalCancelAmount;
    }

    /**
     * 总撤销金额，单位分，需除以100使用
     * @param int $totalCancelAmount
     * @return self
     */
    public function setTotalCancelAmount(?int $totalCancelAmount): self
    {
        $this->totalCancelAmount = $totalCancelAmount;
        return $this;
    }

    /**
     * 实际充值总金额：总充值金额-总撤销金额，单位分，需除以100使用
     * @return int
     */
    public function getTotalChargeAmount(): ?int
    {
        return $this->totalChargeAmount;
    }

    /**
     * 实际充值总金额：总充值金额-总撤销金额，单位分，需除以100使用
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
            $obj->chargeList = array_map(fn ($vv) => \Oceanengine\Models\LocalChargeListV30ResponseDataChargeListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalChargeListV30ResponseDataPageInfo::fromArray($v);
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
