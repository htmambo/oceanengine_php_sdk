<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 抖音号ID列表，乘方多号场景用于标识素材关联的 pid-uid pairs
     * @var int[]
     */
    protected ?array $awemeIdList = null;

    /**
     * @var string[]
     */
    protected ?array $deliveryNotReason = null;

    /**
     * @var bool
     */
    protected ?bool $isDelete = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo $materialInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType
     */
    protected ?string $materialSelectType = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus
     */
    protected ?string $materialStatus = null;

    /**
     * 商品ID列表，乘方多号场景用于标识素材关联的 pid-uid pairs
     * @var int[]
     */
    protected ?array $productIdList = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerProductInfoInner[]
     */
    protected ?array $productInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo $statsInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 抖音号ID列表，乘方多号场景用于标识素材关联的 pid-uid pairs
     * @return int[]
     */
    public function getAwemeIdList(): ?array
    {
        return $this->awemeIdList;
    }

    /**
     * 抖音号ID列表，乘方多号场景用于标识素材关联的 pid-uid pairs
     * @param int[] $awemeIdList
     * @return self
     */
    public function setAwemeIdList(?array $awemeIdList): self
    {
        $this->awemeIdList = $awemeIdList;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDeliveryNotReason(): ?array
    {
        return $this->deliveryNotReason;
    }

    /**
     * @param string[] $deliveryNotReason
     * @return self
     */
    public function setDeliveryNotReason(?array $deliveryNotReason): self
    {
        $this->deliveryNotReason = $deliveryNotReason;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDelete(): ?bool
    {
        return $this->isDelete;
    }

    /**
     * @param bool $isDelete
     * @return self
     */
    public function setIsDelete(?bool $isDelete): self
    {
        $this->isDelete = $isDelete;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo
     */
    public function getMaterialInfo(): ?\Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo
    {
        return $this->materialInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo $materialInfo
     * @return self
     */
    public function setMaterialInfo(?\Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo $materialInfo): self
    {
        $this->materialInfo = $materialInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType
     */
    public function getMaterialSelectType(): ?string
    {
        return $this->materialSelectType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialSelectType $materialSelectType
     * @return self
     */
    public function setMaterialSelectType(?string $materialSelectType): self
    {
        $this->materialSelectType = $materialSelectType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus
     */
    public function getMaterialStatus(): ?string
    {
        return $this->materialStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus $materialStatus
     * @return self
     */
    public function setMaterialStatus(?string $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
        return $this;
    }

    /**
     * 商品ID列表，乘方多号场景用于标识素材关联的 pid-uid pairs
     * @return int[]
     */
    public function getProductIdList(): ?array
    {
        return $this->productIdList;
    }

    /**
     * 商品ID列表，乘方多号场景用于标识素材关联的 pid-uid pairs
     * @param int[] $productIdList
     * @return self
     */
    public function setProductIdList(?array $productIdList): self
    {
        $this->productIdList = $productIdList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerProductInfoInner[]
     */
    public function getProductInfo(): ?array
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerProductInfoInner[] $productInfo
     * @return self
     */
    public function setProductInfo(?array $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo
     */
    public function getStatsInfo(): ?\Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo
    {
        return $this->statsInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo $statsInfo
     * @return self
     */
    public function setStatsInfo(?\Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo $statsInfo): self
    {
        $this->statsInfo = $statsInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->awemeIdList !== null) {
            $result['aweme_id_list'] = $this->awemeIdList;
        }
        if ($this->deliveryNotReason !== null) {
            $result['delivery_not_reason'] = $this->deliveryNotReason;
        }
        if ($this->isDelete !== null) {
            $result['is_delete'] = $this->isDelete;
        }
        if ($this->materialInfo !== null) {
            $result['material_info'] = $this->materialInfo;
        }
        if ($this->materialSelectType !== null) {
            $result['material_select_type'] = $this->materialSelectType;
        }
        if ($this->materialStatus !== null) {
            $result['material_status'] = $this->materialStatus;
        }
        if ($this->productIdList !== null) {
            $result['product_id_list'] = $this->productIdList;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->statsInfo !== null) {
            $result['stats_info'] = $this->statsInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['aweme_id_list'] ?? null) !== null && is_array($v)) {
            $obj->awemeIdList = $v;
        }
        if (($v = $data['delivery_not_reason'] ?? null) !== null && is_array($v)) {
            $obj->deliveryNotReason = $v;
        }
        if (($v = $data['is_delete'] ?? null) !== null) {
            $obj->isDelete = (bool) $v;
        }
        if (($v = $data['material_info'] ?? null) !== null && is_array($v)) {
            $obj->materialInfo = \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfo::fromArray($v);
        }
        if (($v = $data['material_select_type'] ?? null) !== null) {
            $obj->materialSelectType = (string) $v;
        }
        if (($v = $data['material_status'] ?? null) !== null) {
            $obj->materialStatus = (string) $v;
        }
        if (($v = $data['product_id_list'] ?? null) !== null && is_array($v)) {
            $obj->productIdList = $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerProductInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['stats_info'] ?? null) !== null && is_array($v)) {
            $obj->statsInfo = \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo::fromArray($v);
        }
        return $obj;
    }
}
