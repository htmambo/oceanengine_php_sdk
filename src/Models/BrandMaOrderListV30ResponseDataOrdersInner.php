<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaOrderListV30ResponseDataOrdersInner implements \JsonSerializable
{
    /**
     * 投放产品
     * @var int
     */
    protected ?int $adForm = null;

    /**
     * @var \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerAdInfosInner[]
     */
    protected ?array $adInfos = null;

    /**
     * 进阶选项
     * @var int
     */
    protected ?int $advancedOption = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 投放位置
     * @var int
     */
    protected ?int $appOrigin = null;

    /**
     * 预订单审核状态
     * @var int
     */
    protected ?int $auditStatus = null;

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
     * 预订单售卖分类
     * @var int
     */
    protected ?int $classify = null;

    /**
     * 创建时间，yyyy-MM-DD HH:mm:ss
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * flags
     * @var array<string,bool>
     */
    protected ?array $flags = null;

    /**
     * 优化目标
     * @var int
     */
    protected ?int $gdSendType = null;

    /**
     * @var \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMagazinePriceInfo
     */
    protected ?\Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMagazinePriceInfo $magazinePriceInfo = null;

    /**
     * 创意拒绝原因
     * @var array<string,string[]>
     */
    protected ?array $materialRejectReason = null;

    /**
     * @var \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMerchantIntention
     */
    protected ?\Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMerchantIntention $merchantIntention = null;

    /**
     * 预订单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 预订单名称
     * @var string
     */
    protected ?string $orderName = null;

    /**
     * 预订单状态
     * @var int
     */
    protected ?int $orderStatus = null;

    /**
     * 计费类型
     * @var int
     */
    protected ?int $pricingType = null;

    /**
     * 产品类型
     * @var int
     */
    protected ?int $proType = null;

    /**
     * 预定单备注
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerScheduleInfo
     */
    protected ?\Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerScheduleInfo $scheduleInfo = null;

    /**
     * 操作员工ID
     * @var int[]
     */
    protected ?array $staffId = null;

    /**
     * 投放产品
     * @return int
     */
    public function getAdForm(): ?int
    {
        return $this->adForm;
    }

    /**
     * 投放产品
     * @param int $adForm
     * @return self
     */
    public function setAdForm(?int $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerAdInfosInner[]
     */
    public function getAdInfos(): ?array
    {
        return $this->adInfos;
    }

    /**
     * @param \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerAdInfosInner[] $adInfos
     * @return self
     */
    public function setAdInfos(?array $adInfos): self
    {
        $this->adInfos = $adInfos;
        return $this;
    }

    /**
     * 进阶选项
     * @return int
     */
    public function getAdvancedOption(): ?int
    {
        return $this->advancedOption;
    }

    /**
     * 进阶选项
     * @param int $advancedOption
     * @return self
     */
    public function setAdvancedOption(?int $advancedOption): self
    {
        $this->advancedOption = $advancedOption;
        return $this;
    }

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 投放位置
     * @return int
     */
    public function getAppOrigin(): ?int
    {
        return $this->appOrigin;
    }

    /**
     * 投放位置
     * @param int $appOrigin
     * @return self
     */
    public function setAppOrigin(?int $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * 预订单审核状态
     * @return int
     */
    public function getAuditStatus(): ?int
    {
        return $this->auditStatus;
    }

    /**
     * 预订单审核状态
     * @param int $auditStatus
     * @return self
     */
    public function setAuditStatus(?int $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
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
     * 预订单售卖分类
     * @return int
     */
    public function getClassify(): ?int
    {
        return $this->classify;
    }

    /**
     * 预订单售卖分类
     * @param int $classify
     * @return self
     */
    public function setClassify(?int $classify): self
    {
        $this->classify = $classify;
        return $this;
    }

    /**
     * 创建时间，yyyy-MM-DD HH:mm:ss
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间，yyyy-MM-DD HH:mm:ss
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * flags
     * @return array<string,bool>
     */
    public function getFlags(): ?array
    {
        return $this->flags;
    }

    /**
     * flags
     * @param array<string,bool> $flags
     * @return self
     */
    public function setFlags(?array $flags): self
    {
        $this->flags = $flags;
        return $this;
    }

    /**
     * 优化目标
     * @return int
     */
    public function getGdSendType(): ?int
    {
        return $this->gdSendType;
    }

    /**
     * 优化目标
     * @param int $gdSendType
     * @return self
     */
    public function setGdSendType(?int $gdSendType): self
    {
        $this->gdSendType = $gdSendType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMagazinePriceInfo
     */
    public function getMagazinePriceInfo(): ?\Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMagazinePriceInfo
    {
        return $this->magazinePriceInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMagazinePriceInfo $magazinePriceInfo
     * @return self
     */
    public function setMagazinePriceInfo(?\Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMagazinePriceInfo $magazinePriceInfo): self
    {
        $this->magazinePriceInfo = $magazinePriceInfo;
        return $this;
    }

    /**
     * 创意拒绝原因
     * @return array<string,string[]>
     */
    public function getMaterialRejectReason(): ?array
    {
        return $this->materialRejectReason;
    }

    /**
     * 创意拒绝原因
     * @param array<string,string[]> $materialRejectReason
     * @return self
     */
    public function setMaterialRejectReason(?array $materialRejectReason): self
    {
        $this->materialRejectReason = $materialRejectReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMerchantIntention
     */
    public function getMerchantIntention(): ?\Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMerchantIntention
    {
        return $this->merchantIntention;
    }

    /**
     * @param \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMerchantIntention $merchantIntention
     * @return self
     */
    public function setMerchantIntention(?\Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMerchantIntention $merchantIntention): self
    {
        $this->merchantIntention = $merchantIntention;
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
     * 预订单名称
     * @return string
     */
    public function getOrderName(): ?string
    {
        return $this->orderName;
    }

    /**
     * 预订单名称
     * @param string $orderName
     * @return self
     */
    public function setOrderName(?string $orderName): self
    {
        $this->orderName = $orderName;
        return $this;
    }

    /**
     * 预订单状态
     * @return int
     */
    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    /**
     * 预订单状态
     * @param int $orderStatus
     * @return self
     */
    public function setOrderStatus(?int $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * 计费类型
     * @return int
     */
    public function getPricingType(): ?int
    {
        return $this->pricingType;
    }

    /**
     * 计费类型
     * @param int $pricingType
     * @return self
     */
    public function setPricingType(?int $pricingType): self
    {
        $this->pricingType = $pricingType;
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
     * 预定单备注
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 预定单备注
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerScheduleInfo
     */
    public function getScheduleInfo(): ?\Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerScheduleInfo
    {
        return $this->scheduleInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerScheduleInfo $scheduleInfo
     * @return self
     */
    public function setScheduleInfo(?\Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerScheduleInfo $scheduleInfo): self
    {
        $this->scheduleInfo = $scheduleInfo;
        return $this;
    }

    /**
     * 操作员工ID
     * @return int[]
     */
    public function getStaffId(): ?array
    {
        return $this->staffId;
    }

    /**
     * 操作员工ID
     * @param int[] $staffId
     * @return self
     */
    public function setStaffId(?array $staffId): self
    {
        $this->staffId = $staffId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adForm !== null) {
            $result['ad_form'] = $this->adForm;
        }
        if ($this->adInfos !== null) {
            $result['ad_infos'] = $this->adInfos;
        }
        if ($this->advancedOption !== null) {
            $result['advanced_option'] = $this->advancedOption;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->appOrigin !== null) {
            $result['app_origin'] = $this->appOrigin;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->classify !== null) {
            $result['classify'] = $this->classify;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->flags !== null) {
            $result['flags'] = $this->flags;
        }
        if ($this->gdSendType !== null) {
            $result['gd_send_type'] = $this->gdSendType;
        }
        if ($this->magazinePriceInfo !== null) {
            $result['magazine_price_info'] = $this->magazinePriceInfo;
        }
        if ($this->materialRejectReason !== null) {
            $result['material_reject_reason'] = $this->materialRejectReason;
        }
        if ($this->merchantIntention !== null) {
            $result['merchant_intention'] = $this->merchantIntention;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderName !== null) {
            $result['order_name'] = $this->orderName;
        }
        if ($this->orderStatus !== null) {
            $result['order_status'] = $this->orderStatus;
        }
        if ($this->pricingType !== null) {
            $result['pricing_type'] = $this->pricingType;
        }
        if ($this->proType !== null) {
            $result['pro_type'] = $this->proType;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->scheduleInfo !== null) {
            $result['schedule_info'] = $this->scheduleInfo;
        }
        if ($this->staffId !== null) {
            $result['staff_id'] = $this->staffId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_form'] ?? null) !== null) {
            $obj->adForm = (int) $v;
        }
        if (($v = $data['ad_infos'] ?? null) !== null && is_array($v)) {
            $obj->adInfos = array_map(fn ($vv) => \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerAdInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['advanced_option'] ?? null) !== null) {
            $obj->advancedOption = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['app_origin'] ?? null) !== null) {
            $obj->appOrigin = (int) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['classify'] ?? null) !== null) {
            $obj->classify = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['flags'] ?? null) !== null && is_array($v)) {
            $obj->flags = $v;
        }
        if (($v = $data['gd_send_type'] ?? null) !== null) {
            $obj->gdSendType = (int) $v;
        }
        if (($v = $data['magazine_price_info'] ?? null) !== null && is_array($v)) {
            $obj->magazinePriceInfo = \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMagazinePriceInfo::fromArray($v);
        }
        if (($v = $data['material_reject_reason'] ?? null) !== null && is_array($v)) {
            $obj->materialRejectReason = $v;
        }
        if (($v = $data['merchant_intention'] ?? null) !== null && is_array($v)) {
            $obj->merchantIntention = \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerMerchantIntention::fromArray($v);
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_name'] ?? null) !== null) {
            $obj->orderName = (string) $v;
        }
        if (($v = $data['order_status'] ?? null) !== null) {
            $obj->orderStatus = (int) $v;
        }
        if (($v = $data['pricing_type'] ?? null) !== null) {
            $obj->pricingType = (int) $v;
        }
        if (($v = $data['pro_type'] ?? null) !== null) {
            $obj->proType = (int) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['schedule_info'] ?? null) !== null && is_array($v)) {
            $obj->scheduleInfo = \Oceanengine\Models\BrandMaOrderListV30ResponseDataOrdersInnerScheduleInfo::fromArray($v);
        }
        if (($v = $data['staff_id'] ?? null) !== null && is_array($v)) {
            $obj->staffId = $v;
        }
        return $obj;
    }
}
