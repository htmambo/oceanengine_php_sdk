<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCard implements \JsonSerializable
{
    /**
     * 弹出时间 单位秒
     * @var int
     */
    protected ?int $advancedDuration = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCardImage
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCardImage $image = null;

    /**
     * 直播引流磁贴抖音号uid （直播引流磁贴）
     * @var string
     */
    protected ?string $liveIesCoreUserId = null;

    /**
     * 搜索词
     * @var string[]
     */
    protected ?array $searchWords = null;

    /**
     * 弹出时间 单位秒
     * @return int
     */
    public function getAdvancedDuration(): ?int
    {
        return $this->advancedDuration;
    }

    /**
     * 弹出时间 单位秒
     * @param int $advancedDuration
     * @return self
     */
    public function setAdvancedDuration(?int $advancedDuration): self
    {
        $this->advancedDuration = $advancedDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCardImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCardImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCardImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCardImage $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * 直播引流磁贴抖音号uid （直播引流磁贴）
     * @return string
     */
    public function getLiveIesCoreUserId(): ?string
    {
        return $this->liveIesCoreUserId;
    }

    /**
     * 直播引流磁贴抖音号uid （直播引流磁贴）
     * @param string $liveIesCoreUserId
     * @return self
     */
    public function setLiveIesCoreUserId(?string $liveIesCoreUserId): self
    {
        $this->liveIesCoreUserId = $liveIesCoreUserId;
        return $this;
    }

    /**
     * 搜索词
     * @return string[]
     */
    public function getSearchWords(): ?array
    {
        return $this->searchWords;
    }

    /**
     * 搜索词
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
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->liveIesCoreUserId !== null) {
            $result['live_ies_core_user_id'] = $this->liveIesCoreUserId;
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
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCardImage::fromArray($v);
        }
        if (($v = $data['live_ies_core_user_id'] ?? null) !== null) {
            $obj->liveIesCoreUserId = (string) $v;
        }
        if (($v = $data['search_words'] ?? null) !== null && is_array($v)) {
            $obj->searchWords = $v;
        }
        return $obj;
    }
}
