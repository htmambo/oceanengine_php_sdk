<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionUpdateV30RequestCustomerMaterialListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalPromotionUpdateV30CustomerMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerTitleMaterial
     */
    protected ?\Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerTitleMaterial $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\LocalPromotionUpdateV30CustomerMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionUpdateV30CustomerMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerTitleMaterial
     */
    public function getTitleMaterial(): ?\Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerTitleMaterial
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerTitleMaterial $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?\Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerTitleMaterial $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerVideoMaterial $videoMaterial): self
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
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->titleMaterial !== null) {
            $result['title_material'] = $this->titleMaterial;
        }
        if ($this->videoMaterial !== null) {
            $result['video_material'] = $this->videoMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['title_material'] ?? null) !== null && is_array($v)) {
            $obj->titleMaterial = \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerTitleMaterial::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\LocalPromotionUpdateV30RequestCustomerMaterialListInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
