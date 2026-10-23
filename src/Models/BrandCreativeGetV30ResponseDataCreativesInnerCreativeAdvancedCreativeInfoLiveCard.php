<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCard implements \JsonSerializable
{
    /**
     * 副标题
     * @var string
     */
    protected ?string $advancedSubtitle = null;

    /**
     * 标题
     * @var string
     */
    protected ?string $advancedTitle = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCardImageInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCardImageInfo $imageInfo = null;

    /**
     * 副标题
     * @return string
     */
    public function getAdvancedSubtitle(): ?string
    {
        return $this->advancedSubtitle;
    }

    /**
     * 副标题
     * @param string $advancedSubtitle
     * @return self
     */
    public function setAdvancedSubtitle(?string $advancedSubtitle): self
    {
        $this->advancedSubtitle = $advancedSubtitle;
        return $this;
    }

    /**
     * 标题
     * @return string
     */
    public function getAdvancedTitle(): ?string
    {
        return $this->advancedTitle;
    }

    /**
     * 标题
     * @param string $advancedTitle
     * @return self
     */
    public function setAdvancedTitle(?string $advancedTitle): self
    {
        $this->advancedTitle = $advancedTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCardImageInfo
     */
    public function getImageInfo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCardImageInfo
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCardImageInfo $imageInfo
     * @return self
     */
    public function setImageInfo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCardImageInfo $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advancedSubtitle !== null) {
            $result['advanced_subtitle'] = $this->advancedSubtitle;
        }
        if ($this->advancedTitle !== null) {
            $result['advanced_title'] = $this->advancedTitle;
        }
        if ($this->imageInfo !== null) {
            $result['image_info'] = $this->imageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advanced_subtitle'] ?? null) !== null) {
            $obj->advancedSubtitle = (string) $v;
        }
        if (($v = $data['advanced_title'] ?? null) !== null) {
            $obj->advancedTitle = (string) $v;
        }
        if (($v = $data['image_info'] ?? null) !== null && is_array($v)) {
            $obj->imageInfo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCardImageInfo::fromArray($v);
        }
        return $obj;
    }
}
