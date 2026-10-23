<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCard implements \JsonSerializable
{
    /**
     * 组件弹出时间
     * @var int
     */
    protected ?int $advancedDuration = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCardImageInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCardImageInfo $imageInfo = null;

    /**
     * 组件弹出时间
     * @return int
     */
    public function getAdvancedDuration(): ?int
    {
        return $this->advancedDuration;
    }

    /**
     * 组件弹出时间
     * @param int $advancedDuration
     * @return self
     */
    public function setAdvancedDuration(?int $advancedDuration): self
    {
        $this->advancedDuration = $advancedDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCardImageInfo
     */
    public function getImageInfo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCardImageInfo
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCardImageInfo $imageInfo
     * @return self
     */
    public function setImageInfo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCardImageInfo $imageInfo): self
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
        if ($this->advancedDuration !== null) {
            $result['advanced_duration'] = $this->advancedDuration;
        }
        if ($this->imageInfo !== null) {
            $result['image_info'] = $this->imageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advanced_duration'] ?? null) !== null) {
            $obj->advancedDuration = (int) $v;
        }
        if (($v = $data['image_info'] ?? null) !== null && is_array($v)) {
            $obj->imageInfo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCardImageInfo::fromArray($v);
        }
        return $obj;
    }
}
