<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdQuotaGetV10ResponseDataQuotaSearch implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchDeliveryInfo
     */
    protected ?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchDeliveryInfo $deliveryInfo = null;

    /**
     * 当前最高月消耗
     * @var float
     */
    protected ?float $monthCost = null;

    /**
     * 当前所在限额档位：1,2,3,4,5,6,7,8,9
     * @var int
     */
    protected ?int $quotaGear = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchQuotaInfo
     */
    protected ?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchQuotaInfo $quotaInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchStageInfo
     */
    protected ?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchStageInfo $stageInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchDeliveryInfo
     */
    public function getDeliveryInfo(): ?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchDeliveryInfo
    {
        return $this->deliveryInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchDeliveryInfo $deliveryInfo
     * @return self
     */
    public function setDeliveryInfo(?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchDeliveryInfo $deliveryInfo): self
    {
        $this->deliveryInfo = $deliveryInfo;
        return $this;
    }

    /**
     * 当前最高月消耗
     * @return float
     */
    public function getMonthCost(): ?float
    {
        return $this->monthCost;
    }

    /**
     * 当前最高月消耗
     * @param float $monthCost
     * @return self
     */
    public function setMonthCost(?float $monthCost): self
    {
        $this->monthCost = $monthCost;
        return $this;
    }

    /**
     * 当前所在限额档位：1,2,3,4,5,6,7,8,9
     * @return int
     */
    public function getQuotaGear(): ?int
    {
        return $this->quotaGear;
    }

    /**
     * 当前所在限额档位：1,2,3,4,5,6,7,8,9
     * @param int $quotaGear
     * @return self
     */
    public function setQuotaGear(?int $quotaGear): self
    {
        $this->quotaGear = $quotaGear;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchQuotaInfo
     */
    public function getQuotaInfo(): ?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchQuotaInfo
    {
        return $this->quotaInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchQuotaInfo $quotaInfo
     * @return self
     */
    public function setQuotaInfo(?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchQuotaInfo $quotaInfo): self
    {
        $this->quotaInfo = $quotaInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchStageInfo
     */
    public function getStageInfo(): ?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchStageInfo
    {
        return $this->stageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchStageInfo $stageInfo
     * @return self
     */
    public function setStageInfo(?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchStageInfo $stageInfo): self
    {
        $this->stageInfo = $stageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->deliveryInfo !== null) {
            $result['delivery_info'] = $this->deliveryInfo;
        }
        if ($this->monthCost !== null) {
            $result['month_cost'] = $this->monthCost;
        }
        if ($this->quotaGear !== null) {
            $result['quota_gear'] = $this->quotaGear;
        }
        if ($this->quotaInfo !== null) {
            $result['quota_info'] = $this->quotaInfo;
        }
        if ($this->stageInfo !== null) {
            $result['stage_info'] = $this->stageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['delivery_info'] ?? null) !== null && is_array($v)) {
            $obj->deliveryInfo = \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchDeliveryInfo::fromArray($v);
        }
        if (($v = $data['month_cost'] ?? null) !== null) {
            $obj->monthCost = (float) $v;
        }
        if (($v = $data['quota_gear'] ?? null) !== null) {
            $obj->quotaGear = (int) $v;
        }
        if (($v = $data['quota_info'] ?? null) !== null && is_array($v)) {
            $obj->quotaInfo = \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchQuotaInfo::fromArray($v);
        }
        if (($v = $data['stage_info'] ?? null) !== null && is_array($v)) {
            $obj->stageInfo = \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearchStageInfo::fromArray($v);
        }
        return $obj;
    }
}
