<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerImageInfo
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerImageInfo $imageInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2CreativeListImageMaterialsImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage $templateImage = null;

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerImageInfo
     */
    public function getImageInfo(): ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerImageInfo
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerImageInfo $imageInfo
     * @return self
     */
    public function setImageInfo(?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerImageInfo $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2CreativeListImageMaterialsImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2CreativeListImageMaterialsImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage
     */
    public function getTemplateImage(): ?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage
    {
        return $this->templateImage;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage $templateImage
     * @return self
     */
    public function setTemplateImage(?\Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage $templateImage): self
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
        if ($this->templateImage !== null) {
            $result['template_image'] = $this->templateImage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_info'] ?? null) !== null && is_array($v)) {
            $obj->imageInfo = \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerImageInfo::fromArray($v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['template_image'] ?? null) !== null && is_array($v)) {
            $obj->templateImage = \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage::fromArray($v);
        }
        return $obj;
    }
}
