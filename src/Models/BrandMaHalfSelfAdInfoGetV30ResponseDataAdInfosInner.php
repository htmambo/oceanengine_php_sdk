<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfAdInfoGetV30ResponseDataAdInfosInner implements \JsonSerializable
{
    /**
     * 计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 计划名称
     * @var string
     */
    protected ?string $adName = null;

    /**
     * 审核结果列表
     * @var \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30ResponseDataAdInfosInnerAuditResultListInner[]
     */
    protected ?array $auditResultList = null;

    /**
     * 广告组ID
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * 广告组名称
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * 计划创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 投放状态
     * @var int
     */
    protected ?int $deliveryType = null;

    /**
     * 计划投放结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 扩展计费方式
     * @var int
     */
    protected ?int $extendPricingType = null;

    /**
     * 扩展布尔标记
     * @var array<string,bool>
     */
    protected ?array $flags = null;

    /**
     * 启停状态
     * @var int
     */
    protected ?int $optStatus = null;

    /**
     * 预订单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 计费方式
     * @var int
     */
    protected ?int $pricing = null;

    /**
     * 产品类型
     * @var int
     */
    protected ?int $proType = null;

    /**
     * 创建来源，用于确认半自助来源
     * @var int
     */
    protected ?int $selfServiceSource = null;

    /**
     * 广告来源
     * @var int
     */
    protected ?int $sourceType = null;

    /**
     * 计划投放开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 按预警类型聚合的上线异常文案
     * @var array<string,string[]>
     */
    protected ?array $warningInfo = null;

    /**
     * 计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 计划名称
     * @return string
     */
    public function getAdName(): ?string
    {
        return $this->adName;
    }

    /**
     * 计划名称
     * @param string $adName
     * @return self
     */
    public function setAdName(?string $adName): self
    {
        $this->adName = $adName;
        return $this;
    }

    /**
     * 审核结果列表
     * @return \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30ResponseDataAdInfosInnerAuditResultListInner[]
     */
    public function getAuditResultList(): ?array
    {
        return $this->auditResultList;
    }

    /**
     * 审核结果列表
     * @param \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30ResponseDataAdInfosInnerAuditResultListInner[] $auditResultList
     * @return self
     */
    public function setAuditResultList(?array $auditResultList): self
    {
        $this->auditResultList = $auditResultList;
        return $this;
    }

    /**
     * 广告组ID
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * 广告组ID
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 广告组名称
     * @return string
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * 广告组名称
     * @param string $campaignName
     * @return self
     */
    public function setCampaignName(?string $campaignName): self
    {
        $this->campaignName = $campaignName;
        return $this;
    }

    /**
     * 计划创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 计划创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 投放状态
     * @return int
     */
    public function getDeliveryType(): ?int
    {
        return $this->deliveryType;
    }

    /**
     * 投放状态
     * @param int $deliveryType
     * @return self
     */
    public function setDeliveryType(?int $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * 计划投放结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 计划投放结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 扩展计费方式
     * @return int
     */
    public function getExtendPricingType(): ?int
    {
        return $this->extendPricingType;
    }

    /**
     * 扩展计费方式
     * @param int $extendPricingType
     * @return self
     */
    public function setExtendPricingType(?int $extendPricingType): self
    {
        $this->extendPricingType = $extendPricingType;
        return $this;
    }

    /**
     * 扩展布尔标记
     * @return array<string,bool>
     */
    public function getFlags(): ?array
    {
        return $this->flags;
    }

    /**
     * 扩展布尔标记
     * @param array<string,bool> $flags
     * @return self
     */
    public function setFlags(?array $flags): self
    {
        $this->flags = $flags;
        return $this;
    }

    /**
     * 启停状态
     * @return int
     */
    public function getOptStatus(): ?int
    {
        return $this->optStatus;
    }

    /**
     * 启停状态
     * @param int $optStatus
     * @return self
     */
    public function setOptStatus(?int $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * 预订单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 预订单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 计费方式
     * @return int
     */
    public function getPricing(): ?int
    {
        return $this->pricing;
    }

    /**
     * 计费方式
     * @param int $pricing
     * @return self
     */
    public function setPricing(?int $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * 产品类型
     * @return int
     */
    public function getProType(): ?int
    {
        return $this->proType;
    }

    /**
     * 产品类型
     * @param int $proType
     * @return self
     */
    public function setProType(?int $proType): self
    {
        $this->proType = $proType;
        return $this;
    }

    /**
     * 创建来源，用于确认半自助来源
     * @return int
     */
    public function getSelfServiceSource(): ?int
    {
        return $this->selfServiceSource;
    }

    /**
     * 创建来源，用于确认半自助来源
     * @param int $selfServiceSource
     * @return self
     */
    public function setSelfServiceSource(?int $selfServiceSource): self
    {
        $this->selfServiceSource = $selfServiceSource;
        return $this;
    }

    /**
     * 广告来源
     * @return int
     */
    public function getSourceType(): ?int
    {
        return $this->sourceType;
    }

    /**
     * 广告来源
     * @param int $sourceType
     * @return self
     */
    public function setSourceType(?int $sourceType): self
    {
        $this->sourceType = $sourceType;
        return $this;
    }

    /**
     * 计划投放开始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 计划投放开始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 按预警类型聚合的上线异常文案
     * @return array<string,string[]>
     */
    public function getWarningInfo(): ?array
    {
        return $this->warningInfo;
    }

    /**
     * 按预警类型聚合的上线异常文案
     * @param array<string,string[]> $warningInfo
     * @return self
     */
    public function setWarningInfo(?array $warningInfo): self
    {
        $this->warningInfo = $warningInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->auditResultList !== null) {
            $result['audit_result_list'] = $this->auditResultList;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->deliveryType !== null) {
            $result['delivery_type'] = $this->deliveryType;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->extendPricingType !== null) {
            $result['extend_pricing_type'] = $this->extendPricingType;
        }
        if ($this->flags !== null) {
            $result['flags'] = $this->flags;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
        }
        if ($this->proType !== null) {
            $result['pro_type'] = $this->proType;
        }
        if ($this->selfServiceSource !== null) {
            $result['self_service_source'] = $this->selfServiceSource;
        }
        if ($this->sourceType !== null) {
            $result['source_type'] = $this->sourceType;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->warningInfo !== null) {
            $result['warning_info'] = $this->warningInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['audit_result_list'] ?? null) !== null && is_array($v)) {
            $obj->auditResultList = array_map(fn ($vv) => \Oceanengine\Models\BrandMaHalfSelfAdInfoGetV30ResponseDataAdInfosInnerAuditResultListInner::fromArray($vv), $v);
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['delivery_type'] ?? null) !== null) {
            $obj->deliveryType = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['extend_pricing_type'] ?? null) !== null) {
            $obj->extendPricingType = (int) $v;
        }
        if (($v = $data['flags'] ?? null) !== null && is_array($v)) {
            $obj->flags = $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (int) $v;
        }
        if (($v = $data['pro_type'] ?? null) !== null) {
            $obj->proType = (int) $v;
        }
        if (($v = $data['self_service_source'] ?? null) !== null) {
            $obj->selfServiceSource = (int) $v;
        }
        if (($v = $data['source_type'] ?? null) !== null) {
            $obj->sourceType = (int) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['warning_info'] ?? null) !== null && is_array($v)) {
            $obj->warningInfo = $v;
        }
        return $obj;
    }
}
