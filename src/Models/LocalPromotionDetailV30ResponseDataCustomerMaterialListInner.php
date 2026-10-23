<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionDetailV30ResponseDataCustomerMaterialListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalPromotionDetailV30DataCustomerMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerTitleMaterial
     */
    protected ?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerTitleMaterial $titleMaterial = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\LocalPromotionDetailV30DataCustomerMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionDetailV30DataCustomerMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerTitleMaterial
     */
    public function getTitleMaterial(): ?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerTitleMaterial
    {
        return $this->titleMaterial;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerTitleMaterial $titleMaterial
     * @return self
     */
    public function setTitleMaterial(?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerTitleMaterial $titleMaterial): self
    {
        $this->titleMaterial = $titleMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerVideoMaterial $videoMaterial): self
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
            $obj->titleMaterial = \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerTitleMaterial::fromArray($v);
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
