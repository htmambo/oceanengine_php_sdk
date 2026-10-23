<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerImageInfo
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerImageInfo $imageInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListImageMaterialsImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage
     */
    protected ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage $templateImage = null;

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerImageInfo
     */
    public function getImageInfo(): ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerImageInfo
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerImageInfo $imageInfo
     * @return self
     */
    public function setImageInfo(?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerImageInfo $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListImageMaterialsImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2CreativeListImageMaterialsImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage
     */
    public function getTemplateImage(): ?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage
    {
        return $this->templateImage;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage $templateImage
     * @return self
     */
    public function setTemplateImage(?\Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage $templateImage): self
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
            $obj->imageInfo = \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerImageInfo::fromArray($v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['template_image'] ?? null) !== null && is_array($v)) {
            $obj->templateImage = \Oceanengine\Models\CreativeCustomCreativeUpdateV2RequestCreativeListInnerImageMaterialsInnerTemplateImage::fromArray($v);
        }
        return $obj;
    }
}
