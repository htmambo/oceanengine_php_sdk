<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCard implements \JsonSerializable
{
    /**
     * 组件弹出时间
     * @var int
     */
    protected ?int $advancedDuration = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCardImageInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCardImageInfo $imageInfo = null;

    /**
     * 内容热推引流直播间抖音号
     * @var string
     */
    protected ?string $liveAwemeId = null;

    /**
     * 搜索词数组
     * @var string[]
     */
    protected ?array $searchWords = null;

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
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCardImageInfo
     */
    public function getImageInfo(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCardImageInfo
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCardImageInfo $imageInfo
     * @return self
     */
    public function setImageInfo(?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCardImageInfo $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * 内容热推引流直播间抖音号
     * @return string
     */
    public function getLiveAwemeId(): ?string
    {
        return $this->liveAwemeId;
    }

    /**
     * 内容热推引流直播间抖音号
     * @param string $liveAwemeId
     * @return self
     */
    public function setLiveAwemeId(?string $liveAwemeId): self
    {
        $this->liveAwemeId = $liveAwemeId;
        return $this;
    }

    /**
     * 搜索词数组
     * @return string[]
     */
    public function getSearchWords(): ?array
    {
        return $this->searchWords;
    }

    /**
     * 搜索词数组
     * @param string[] $searchWords
     * @return self
     */
    public function setSearchWords(?array $searchWords): self
    {
        $this->searchWords = $searchWords;
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
        if ($this->liveAwemeId !== null) {
            $result['live_aweme_id'] = $this->liveAwemeId;
        }
        if ($this->searchWords !== null) {
            $result['search_words'] = $this->searchWords;
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
            $obj->imageInfo = \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCardImageInfo::fromArray($v);
        }
        if (($v = $data['live_aweme_id'] ?? null) !== null) {
            $obj->liveAwemeId = (string) $v;
        }
        if (($v = $data['search_words'] ?? null) !== null && is_array($v)) {
            $obj->searchWords = $v;
        }
        return $obj;
    }
}
