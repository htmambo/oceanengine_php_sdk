<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfo $carouselInfo = null;

    /**
     * 素材不可投原因
     * @var string
     */
    protected ?string $deliveryNotReason = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerImageMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerImageMaterial $imageMaterial = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus
     */
    protected ?string $materialStatus = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo $statsInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfo
     */
    public function getCarouselInfo(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfo
    {
        return $this->carouselInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfo $carouselInfo
     * @return self
     */
    public function setCarouselInfo(?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfo $carouselInfo): self
    {
        $this->carouselInfo = $carouselInfo;
        return $this;
    }

    /**
     * 素材不可投原因
     * @return string
     */
    public function getDeliveryNotReason(): ?string
    {
        return $this->deliveryNotReason;
    }

    /**
     * 素材不可投原因
     * @param string $deliveryNotReason
     * @return self
     */
    public function setDeliveryNotReason(?string $deliveryNotReason): self
    {
        $this->deliveryNotReason = $deliveryNotReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerImageMaterial
     */
    public function getImageMaterial(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerImageMaterial
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerImageMaterial $imageMaterial
     * @return self
     */
    public function setImageMaterial(?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerImageMaterial $imageMaterial): self
    {
        $this->imageMaterial = $imageMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus
     */
    public function getMaterialStatus(): ?string
    {
        return $this->materialStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialStatus $materialStatus
     * @return self
     */
    public function setMaterialStatus(?string $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo
     */
    public function getStatsInfo(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo
    {
        return $this->statsInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo $statsInfo
     * @return self
     */
    public function setStatsInfo(?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo $statsInfo): self
    {
        $this->statsInfo = $statsInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterial $videoMaterial): self
    {
        $this->videoMaterial = $videoMaterial;
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
        if ($this->carouselInfo !== null) {
            $result['carousel_info'] = $this->carouselInfo;
        }
        if ($this->deliveryNotReason !== null) {
            $result['delivery_not_reason'] = $this->deliveryNotReason;
        }
        if ($this->imageMaterial !== null) {
            $result['image_material'] = $this->imageMaterial;
        }
        if ($this->materialStatus !== null) {
            $result['material_status'] = $this->materialStatus;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->statsInfo !== null) {
            $result['stats_info'] = $this->statsInfo;
        }
        if ($this->videoMaterial !== null) {
            $result['video_material'] = $this->videoMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['carousel_info'] ?? null) !== null && is_array($v)) {
            $obj->carouselInfo = \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerCarouselInfo::fromArray($v);
        }
        if (($v = $data['delivery_not_reason'] ?? null) !== null) {
            $obj->deliveryNotReason = (string) $v;
        }
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerImageMaterial::fromArray($v);
        }
        if (($v = $data['material_status'] ?? null) !== null) {
            $obj->materialStatus = (string) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['stats_info'] ?? null) !== null && is_array($v)) {
            $obj->statsInfo = \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
