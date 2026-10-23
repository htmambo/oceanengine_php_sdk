<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerImageInfoInner[]
     */
    protected ?array $imageInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeImageMaterialsImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerTemplateImage
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerTemplateImage $templateImage = null;

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerImageInfoInner[]
     */
    public function getImageInfo(): ?array
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerImageInfoInner[] $imageInfo
     * @return self
     */
    public function setImageInfo(?array $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeImageMaterialsImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeImageMaterialsImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
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
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerTemplateImage
     */
    public function getTemplateImage(): ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerTemplateImage
    {
        return $this->templateImage;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerTemplateImage $templateImage
     * @return self
     */
    public function setTemplateImage(?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerTemplateImage $templateImage): self
    {
        $this->templateImage = $templateImage;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageInfo !== null) {
            $result['image_info'] = $this->imageInfo;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->templateImage !== null) {
            $result['template_image'] = $this->templateImage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_info'] ?? null) !== null && is_array($v)) {
            $obj->imageInfo = array_map(fn ($vv) => \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerImageInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['template_image'] ?? null) !== null && is_array($v)) {
            $obj->templateImage = \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeImageMaterialsInnerTemplateImage::fromArray($v);
        }
        return $obj;
    }
}
