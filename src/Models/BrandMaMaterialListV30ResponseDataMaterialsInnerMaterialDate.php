<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaMaterialListV30ResponseDataMaterialsInnerMaterialDate implements \JsonSerializable
{
    /**
     * 投放产品
     * @var int
     */
    protected ?int $adForm = null;

    /**
     * 投放位置
     * @var int[]
     */
    protected ?array $appOrigin = null;

    /**
     * 经营场
     * @var int
     */
    protected ?int $bizScope = null;

    /**
     * 品牌计费方式：3-CPT，6-GD，3000001-CPT_CPM
     * @var int
     */
    protected ?int $brandPricingType = null;

    /**
     * 创建时间：yyyy-MM-dd HH:mm:ss
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 扩展计费类型：1-CPT_CPM
     * @var int
     */
    protected ?int $extendPricingType = null;

    /**
     * 优化目标
     * @var int
     */
    protected ?int $gdSendType = null;

    /**
     * 创意ID
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 创意聚合状态
     * @var int
     */
    protected ?int $materialUnionStatus = null;

    /**
     * 创意名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 操作状态：0-启用，1-暂停
     * @var int
     */
    protected ?int $optStatus = null;

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
     * 预订单展示状态
     * @var int
     */
    protected ?int $orderShowStatus = null;

    /**
     * 预订单聚合状态
     * @var int
     */
    protected ?int $orderUnionStatus = null;

    /**
     * 扫码预览链接，有效期24h，只有过审且未过期的创意可以预览
     * @var string
     */
    protected ?string $previewUrl = null;

    /**
     * 计费方式：3-CPT，6-GD
     * @var int
     */
    protected ?int $pricingType = null;

    /**
     * 产品类型
     * @var int
     */
    protected ?int $proType = null;

    /**
     * 审核拒绝原因
     * @var string[]
     */
    protected ?array $reason = null;

    /**
     * 是否展示草稿 tag
     * @var bool
     */
    protected ?bool $showDraftTag = null;

    /**
     * 显示状态
     * @var int
     */
    protected ?int $showStatus = null;

    /**
     * 是否展示生效版本Tag
     * @var bool
     */
    protected ?bool $showSuccessVersionTag = null;

    /**
     * 创意状态
     * @var int
     */
    protected ?int $status = null;

    /**
     * 创意样式模板ID
     * @var int
     */
    protected ?int $templateId = null;

    /**
     * 视频标题
     * @var string[]
     */
    protected ?array $titleList = null;

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
     * 投放位置
     * @return int[]
     */
    public function getAppOrigin(): ?array
    {
        return $this->appOrigin;
    }

    /**
     * 投放位置
     * @param int[] $appOrigin
     * @return self
     */
    public function setAppOrigin(?array $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * 经营场
     * @return int
     */
    public function getBizScope(): ?int
    {
        return $this->bizScope;
    }

    /**
     * 经营场
     * @param int $bizScope
     * @return self
     */
    public function setBizScope(?int $bizScope): self
    {
        $this->bizScope = $bizScope;
        return $this;
    }

    /**
     * 品牌计费方式：3-CPT，6-GD，3000001-CPT_CPM
     * @return int
     */
    public function getBrandPricingType(): ?int
    {
        return $this->brandPricingType;
    }

    /**
     * 品牌计费方式：3-CPT，6-GD，3000001-CPT_CPM
     * @param int $brandPricingType
     * @return self
     */
    public function setBrandPricingType(?int $brandPricingType): self
    {
        $this->brandPricingType = $brandPricingType;
        return $this;
    }

    /**
     * 创建时间：yyyy-MM-dd HH:mm:ss
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间：yyyy-MM-dd HH:mm:ss
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 扩展计费类型：1-CPT_CPM
     * @return int
     */
    public function getExtendPricingType(): ?int
    {
        return $this->extendPricingType;
    }

    /**
     * 扩展计费类型：1-CPT_CPM
     * @param int $extendPricingType
     * @return self
     */
    public function setExtendPricingType(?int $extendPricingType): self
    {
        $this->extendPricingType = $extendPricingType;
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
     * 创意ID
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 创意ID
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 创意聚合状态
     * @return int
     */
    public function getMaterialUnionStatus(): ?int
    {
        return $this->materialUnionStatus;
    }

    /**
     * 创意聚合状态
     * @param int $materialUnionStatus
     * @return self
     */
    public function setMaterialUnionStatus(?int $materialUnionStatus): self
    {
        $this->materialUnionStatus = $materialUnionStatus;
        return $this;
    }

    /**
     * 创意名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 创意名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 操作状态：0-启用，1-暂停
     * @return int
     */
    public function getOptStatus(): ?int
    {
        return $this->optStatus;
    }

    /**
     * 操作状态：0-启用，1-暂停
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
     * 预订单展示状态
     * @return int
     */
    public function getOrderShowStatus(): ?int
    {
        return $this->orderShowStatus;
    }

    /**
     * 预订单展示状态
     * @param int $orderShowStatus
     * @return self
     */
    public function setOrderShowStatus(?int $orderShowStatus): self
    {
        $this->orderShowStatus = $orderShowStatus;
        return $this;
    }

    /**
     * 预订单聚合状态
     * @return int
     */
    public function getOrderUnionStatus(): ?int
    {
        return $this->orderUnionStatus;
    }

    /**
     * 预订单聚合状态
     * @param int $orderUnionStatus
     * @return self
     */
    public function setOrderUnionStatus(?int $orderUnionStatus): self
    {
        $this->orderUnionStatus = $orderUnionStatus;
        return $this;
    }

    /**
     * 扫码预览链接，有效期24h，只有过审且未过期的创意可以预览
     * @return string
     */
    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    /**
     * 扫码预览链接，有效期24h，只有过审且未过期的创意可以预览
     * @param string $previewUrl
     * @return self
     */
    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->previewUrl = $previewUrl;
        return $this;
    }

    /**
     * 计费方式：3-CPT，6-GD
     * @return int
     */
    public function getPricingType(): ?int
    {
        return $this->pricingType;
    }

    /**
     * 计费方式：3-CPT，6-GD
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
     * 审核拒绝原因
     * @return string[]
     */
    public function getReason(): ?array
    {
        return $this->reason;
    }

    /**
     * 审核拒绝原因
     * @param string[] $reason
     * @return self
     */
    public function setReason(?array $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * 是否展示草稿 tag
     * @return bool
     */
    public function getShowDraftTag(): ?bool
    {
        return $this->showDraftTag;
    }

    /**
     * 是否展示草稿 tag
     * @param bool $showDraftTag
     * @return self
     */
    public function setShowDraftTag(?bool $showDraftTag): self
    {
        $this->showDraftTag = $showDraftTag;
        return $this;
    }

    /**
     * 显示状态
     * @return int
     */
    public function getShowStatus(): ?int
    {
        return $this->showStatus;
    }

    /**
     * 显示状态
     * @param int $showStatus
     * @return self
     */
    public function setShowStatus(?int $showStatus): self
    {
        $this->showStatus = $showStatus;
        return $this;
    }

    /**
     * 是否展示生效版本Tag
     * @return bool
     */
    public function getShowSuccessVersionTag(): ?bool
    {
        return $this->showSuccessVersionTag;
    }

    /**
     * 是否展示生效版本Tag
     * @param bool $showSuccessVersionTag
     * @return self
     */
    public function setShowSuccessVersionTag(?bool $showSuccessVersionTag): self
    {
        $this->showSuccessVersionTag = $showSuccessVersionTag;
        return $this;
    }

    /**
     * 创意状态
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 创意状态
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 创意样式模板ID
     * @return int
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }

    /**
     * 创意样式模板ID
     * @param int $templateId
     * @return self
     */
    public function setTemplateId(?int $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * 视频标题
     * @return string[]
     */
    public function getTitleList(): ?array
    {
        return $this->titleList;
    }

    /**
     * 视频标题
     * @param string[] $titleList
     * @return self
     */
    public function setTitleList(?array $titleList): self
    {
        $this->titleList = $titleList;
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
        if ($this->appOrigin !== null) {
            $result['app_origin'] = $this->appOrigin;
        }
        if ($this->bizScope !== null) {
            $result['biz_scope'] = $this->bizScope;
        }
        if ($this->brandPricingType !== null) {
            $result['brand_pricing_type'] = $this->brandPricingType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->extendPricingType !== null) {
            $result['extend_pricing_type'] = $this->extendPricingType;
        }
        if ($this->gdSendType !== null) {
            $result['gd_send_type'] = $this->gdSendType;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialUnionStatus !== null) {
            $result['material_union_status'] = $this->materialUnionStatus;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderName !== null) {
            $result['order_name'] = $this->orderName;
        }
        if ($this->orderShowStatus !== null) {
            $result['order_show_status'] = $this->orderShowStatus;
        }
        if ($this->orderUnionStatus !== null) {
            $result['order_union_status'] = $this->orderUnionStatus;
        }
        if ($this->previewUrl !== null) {
            $result['preview_url'] = $this->previewUrl;
        }
        if ($this->pricingType !== null) {
            $result['pricing_type'] = $this->pricingType;
        }
        if ($this->proType !== null) {
            $result['pro_type'] = $this->proType;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->showDraftTag !== null) {
            $result['show_draft_tag'] = $this->showDraftTag;
        }
        if ($this->showStatus !== null) {
            $result['show_status'] = $this->showStatus;
        }
        if ($this->showSuccessVersionTag !== null) {
            $result['show_success_version_tag'] = $this->showSuccessVersionTag;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->templateId !== null) {
            $result['template_id'] = $this->templateId;
        }
        if ($this->titleList !== null) {
            $result['title_list'] = $this->titleList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_form'] ?? null) !== null) {
            $obj->adForm = (int) $v;
        }
        if (($v = $data['app_origin'] ?? null) !== null && is_array($v)) {
            $obj->appOrigin = $v;
        }
        if (($v = $data['biz_scope'] ?? null) !== null) {
            $obj->bizScope = (int) $v;
        }
        if (($v = $data['brand_pricing_type'] ?? null) !== null) {
            $obj->brandPricingType = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['extend_pricing_type'] ?? null) !== null) {
            $obj->extendPricingType = (int) $v;
        }
        if (($v = $data['gd_send_type'] ?? null) !== null) {
            $obj->gdSendType = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_union_status'] ?? null) !== null) {
            $obj->materialUnionStatus = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_name'] ?? null) !== null) {
            $obj->orderName = (string) $v;
        }
        if (($v = $data['order_show_status'] ?? null) !== null) {
            $obj->orderShowStatus = (int) $v;
        }
        if (($v = $data['order_union_status'] ?? null) !== null) {
            $obj->orderUnionStatus = (int) $v;
        }
        if (($v = $data['preview_url'] ?? null) !== null) {
            $obj->previewUrl = (string) $v;
        }
        if (($v = $data['pricing_type'] ?? null) !== null) {
            $obj->pricingType = (int) $v;
        }
        if (($v = $data['pro_type'] ?? null) !== null) {
            $obj->proType = (int) $v;
        }
        if (($v = $data['reason'] ?? null) !== null && is_array($v)) {
            $obj->reason = $v;
        }
        if (($v = $data['show_draft_tag'] ?? null) !== null) {
            $obj->showDraftTag = (bool) $v;
        }
        if (($v = $data['show_status'] ?? null) !== null) {
            $obj->showStatus = (int) $v;
        }
        if (($v = $data['show_success_version_tag'] ?? null) !== null) {
            $obj->showSuccessVersionTag = (bool) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['template_id'] ?? null) !== null) {
            $obj->templateId = (int) $v;
        }
        if (($v = $data['title_list'] ?? null) !== null && is_array($v)) {
            $obj->titleList = $v;
        }
        return $obj;
    }
}
