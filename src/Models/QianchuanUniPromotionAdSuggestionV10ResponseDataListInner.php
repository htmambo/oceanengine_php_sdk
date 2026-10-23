<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdSuggestionV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform
     */
    protected ?string $auditPlatform = null;

    /**
     * 审核建议
     * @var string[]
     */
    protected ?array $auditReason = null;

    /**
     * 审核的对象类型
     * @var string
     */
    protected ?string $desc = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerImageMaterial
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerImageMaterial $imageMaterial = null;

    /**
     * 是否为抖音主页视频标题
     * @var bool
     */
    protected ?bool $isAwemeVideoTitle = null;

    /**
     * 素材ID
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 商品ID
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 当Type为音频标题 & 视频标题 & 抖音主页视频标题时，这个字段为对应的视频素材ID
     * @var int
     */
    protected ?int $relatedVideoMaterialId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform
     */
    public function getAuditPlatform(): ?string
    {
        return $this->auditPlatform;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10DataListAuditPlatform $auditPlatform
     * @return self
     */
    public function setAuditPlatform(?string $auditPlatform): self
    {
        $this->auditPlatform = $auditPlatform;
        return $this;
    }

    /**
     * 审核建议
     * @return string[]
     */
    public function getAuditReason(): ?array
    {
        return $this->auditReason;
    }

    /**
     * 审核建议
     * @param string[] $auditReason
     * @return self
     */
    public function setAuditReason(?array $auditReason): self
    {
        $this->auditReason = $auditReason;
        return $this;
    }

    /**
     * 审核的对象类型
     * @return string
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * 审核的对象类型
     * @param string $desc
     * @return self
     */
    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerImageMaterial
     */
    public function getImageMaterial(): ?\Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerImageMaterial
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerImageMaterial $imageMaterial
     * @return self
     */
    public function setImageMaterial(?\Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerImageMaterial $imageMaterial): self
    {
        $this->imageMaterial = $imageMaterial;
        return $this;
    }

    /**
     * 是否为抖音主页视频标题
     * @return bool
     */
    public function getIsAwemeVideoTitle(): ?bool
    {
        return $this->isAwemeVideoTitle;
    }

    /**
     * 是否为抖音主页视频标题
     * @param bool $isAwemeVideoTitle
     * @return self
     */
    public function setIsAwemeVideoTitle(?bool $isAwemeVideoTitle): self
    {
        $this->isAwemeVideoTitle = $isAwemeVideoTitle;
        return $this;
    }

    /**
     * 素材ID
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材ID
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 商品ID
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品ID
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 当Type为音频标题 & 视频标题 & 抖音主页视频标题时，这个字段为对应的视频素材ID
     * @return int
     */
    public function getRelatedVideoMaterialId(): ?int
    {
        return $this->relatedVideoMaterialId;
    }

    /**
     * 当Type为音频标题 & 视频标题 & 抖音主页视频标题时，这个字段为对应的视频素材ID
     * @param int $relatedVideoMaterialId
     * @return self
     */
    public function setRelatedVideoMaterialId(?int $relatedVideoMaterialId): self
    {
        $this->relatedVideoMaterialId = $relatedVideoMaterialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterial $videoMaterial): self
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
        if ($this->auditPlatform !== null) {
            $result['audit_platform'] = $this->auditPlatform;
        }
        if ($this->auditReason !== null) {
            $result['audit_reason'] = $this->auditReason;
        }
        if ($this->desc !== null) {
            $result['desc'] = $this->desc;
        }
        if ($this->imageMaterial !== null) {
            $result['image_material'] = $this->imageMaterial;
        }
        if ($this->isAwemeVideoTitle !== null) {
            $result['is_aweme_video_title'] = $this->isAwemeVideoTitle;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->relatedVideoMaterialId !== null) {
            $result['related_video_material_id'] = $this->relatedVideoMaterialId;
        }
        if ($this->videoMaterial !== null) {
            $result['video_material'] = $this->videoMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_platform'] ?? null) !== null) {
            $obj->auditPlatform = (string) $v;
        }
        if (($v = $data['audit_reason'] ?? null) !== null && is_array($v)) {
            $obj->auditReason = $v;
        }
        if (($v = $data['desc'] ?? null) !== null) {
            $obj->desc = (string) $v;
        }
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerImageMaterial::fromArray($v);
        }
        if (($v = $data['is_aweme_video_title'] ?? null) !== null) {
            $obj->isAwemeVideoTitle = (bool) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['related_video_material_id'] ?? null) !== null) {
            $obj->relatedVideoMaterialId = (int) $v;
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\QianchuanUniPromotionAdSuggestionV10ResponseDataListInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
