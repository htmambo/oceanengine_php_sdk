<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeImageMaterialsInner implements \JsonSerializable
{
    /**
     * 图片素材信息
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerImageInfoInner[]
     */
    protected ?array $imageInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataCreativeImageMaterialsImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerTemplateImage
     */
    protected ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerTemplateImage $templateImage = null;

    /**
     * 图片素材信息
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerImageInfoInner[]
     */
    public function getImageInfo(): ?array
    {
        return $this->imageInfo;
    }

    /**
     * 图片素材信息
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerImageInfoInner[] $imageInfo
     * @return self
     */
    public function setImageInfo(?array $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataCreativeImageMaterialsImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataCreativeImageMaterialsImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerTemplateImage
     */
    public function getTemplateImage(): ?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerTemplateImage
    {
        return $this->templateImage;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerTemplateImage $templateImage
     * @return self
     */
    public function setTemplateImage(?\Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerTemplateImage $templateImage): self
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
            $obj->imageInfo = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerImageInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['template_image'] ?? null) !== null && is_array($v)) {
            $obj->templateImage = \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeImageMaterialsInnerTemplateImage::fromArray($v);
        }
        return $obj;
    }
}
