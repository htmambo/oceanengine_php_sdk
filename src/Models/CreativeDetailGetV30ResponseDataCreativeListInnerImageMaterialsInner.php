<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInner implements \JsonSerializable
{
    /**
     * 图片素材信息
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerImageInfoInner[]
     */
    protected ?array $imageInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerTemplateImage
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerTemplateImage $templateImage = null;

    /**
     * 图片素材信息
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerImageInfoInner[]
     */
    public function getImageInfo(): ?array
    {
        return $this->imageInfo;
    }

    /**
     * 图片素材信息
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerImageInfoInner[] $imageInfo
     * @return self
     */
    public function setImageInfo(?array $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerTemplateImage
     */
    public function getTemplateImage(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerTemplateImage
    {
        return $this->templateImage;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerTemplateImage $templateImage
     * @return self
     */
    public function setTemplateImage(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerTemplateImage $templateImage): self
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
        if ($this->templateImage !== null) {
            $result['template_image'] = $this->templateImage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_info'] ?? null) !== null && is_array($v)) {
            $obj->imageInfo = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerImageInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['template_image'] ?? null) !== null && is_array($v)) {
            $obj->templateImage = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeListInnerImageMaterialsInnerTemplateImage::fromArray($v);
        }
        return $obj;
    }
}
