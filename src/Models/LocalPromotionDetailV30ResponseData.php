<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionDetailV30ResponseData implements \JsonSerializable
{
    /**
     * 抖音号
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 自定义素材组合
     * @var \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInner[]
     */
    protected ?array $customerMaterialList = null;

    /**
     * 是否开启团购卡
     * @var bool
     */
    protected ?bool $enableGraphicDelivery = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionDetailV30DataLiveMaterialType
     */
    protected ?string $liveMaterialType = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterial
     */
    protected ?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterial $proceduralMaterial = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionDetailV30ResponseDataPromotionCardInfo
     */
    protected ?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataPromotionCardInfo $promotionCardInfo = null;

    /**
     * 广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionDetailV30DataVideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * 抖音号
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 自定义素材组合
     * @return \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInner[]
     */
    public function getCustomerMaterialList(): ?array
    {
        return $this->customerMaterialList;
    }

    /**
     * 自定义素材组合
     * @param \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInner[] $customerMaterialList
     * @return self
     */
    public function setCustomerMaterialList(?array $customerMaterialList): self
    {
        $this->customerMaterialList = $customerMaterialList;
        return $this;
    }

    /**
     * 是否开启团购卡
     * @return bool
     */
    public function getEnableGraphicDelivery(): ?bool
    {
        return $this->enableGraphicDelivery;
    }

    /**
     * 是否开启团购卡
     * @param bool $enableGraphicDelivery
     * @return self
     */
    public function setEnableGraphicDelivery(?bool $enableGraphicDelivery): self
    {
        $this->enableGraphicDelivery = $enableGraphicDelivery;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionDetailV30DataLiveMaterialType
     */
    public function getLiveMaterialType(): ?string
    {
        return $this->liveMaterialType;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionDetailV30DataLiveMaterialType $liveMaterialType
     * @return self
     */
    public function setLiveMaterialType(?string $liveMaterialType): self
    {
        $this->liveMaterialType = $liveMaterialType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterial
     */
    public function getProceduralMaterial(): ?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterial
    {
        return $this->proceduralMaterial;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterial $proceduralMaterial
     * @return self
     */
    public function setProceduralMaterial(?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterial $proceduralMaterial): self
    {
        $this->proceduralMaterial = $proceduralMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionDetailV30ResponseDataPromotionCardInfo
     */
    public function getPromotionCardInfo(): ?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataPromotionCardInfo
    {
        return $this->promotionCardInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionDetailV30ResponseDataPromotionCardInfo $promotionCardInfo
     * @return self
     */
    public function setPromotionCardInfo(?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataPromotionCardInfo $promotionCardInfo): self
    {
        $this->promotionCardInfo = $promotionCardInfo;
        return $this;
    }

    /**
     * 广告ID
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 广告ID
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionDetailV30DataVideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionDetailV30DataVideoHpVisibility $videoHpVisibility
     * @return self
     */
    public function setVideoHpVisibility(?string $videoHpVisibility): self
    {
        $this->videoHpVisibility = $videoHpVisibility;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->customerMaterialList !== null) {
            $result['customer_material_list'] = $this->customerMaterialList;
        }
        if ($this->enableGraphicDelivery !== null) {
            $result['enable_graphic_delivery'] = $this->enableGraphicDelivery;
        }
        if ($this->liveMaterialType !== null) {
            $result['live_material_type'] = $this->liveMaterialType;
        }
        if ($this->proceduralMaterial !== null) {
            $result['procedural_material'] = $this->proceduralMaterial;
        }
        if ($this->promotionCardInfo !== null) {
            $result['promotion_card_info'] = $this->promotionCardInfo;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->videoHpVisibility !== null) {
            $result['video_hp_visibility'] = $this->videoHpVisibility;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['customer_material_list'] ?? null) !== null && is_array($v)) {
            $obj->customerMaterialList = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['enable_graphic_delivery'] ?? null) !== null) {
            $obj->enableGraphicDelivery = (bool) $v;
        }
        if (($v = $data['live_material_type'] ?? null) !== null) {
            $obj->liveMaterialType = (string) $v;
        }
        if (($v = $data['procedural_material'] ?? null) !== null && is_array($v)) {
            $obj->proceduralMaterial = \Oceanengine\Models\LocalPromotionDetailV30ResponseDataProceduralMaterial::fromArray($v);
        }
        if (($v = $data['promotion_card_info'] ?? null) !== null && is_array($v)) {
            $obj->promotionCardInfo = \Oceanengine\Models\LocalPromotionDetailV30ResponseDataPromotionCardInfo::fromArray($v);
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['video_hp_visibility'] ?? null) !== null) {
            $obj->videoHpVisibility = (string) $v;
        }
        return $obj;
    }
}
