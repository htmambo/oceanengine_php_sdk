<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAidGetV30ResponseDataPromotionMapDataInnerAdsInnerCreativesInnerImageMaterials implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionAidGetV30DataPromotionMapDataAdsCreativesImageMaterialsImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var string[]
     */
    protected ?array $imageUris = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @return \Oceanengine\Models\PromotionAidGetV30DataPromotionMapDataAdsCreativesImageMaterialsImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionAidGetV30DataPromotionMapDataAdsCreativesImageMaterialsImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getImageUris(): ?array
    {
        return $this->imageUris;
    }

    /**
     * @param string[] $imageUris
     * @return self
     */
    public function setImageUris(?array $imageUris): self
    {
        $this->imageUris = $imageUris;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->imageUris !== null) {
            $result['image_uris'] = $this->imageUris;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['image_uris'] ?? null) !== null && is_array($v)) {
            $obj->imageUris = $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        return $obj;
    }
}
