<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeUpdateV30Request implements \JsonSerializable
{
    /**
     * 计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreative
     */
    protected ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreative $advancedCreative = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfo $advancedCreativeInfo = null;

    /**
     * 广告组ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 三方购物车锚点ID
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * 抖音号ID
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 创意ID
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * 视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeUpdateV30RequestTrackUrlInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeUpdateV30RequestTrackUrlInfo $trackUrlInfo = null;

    /**
     * 计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreative
     */
    public function getAdvancedCreative(): ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreative
    {
        return $this->advancedCreative;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreative $advancedCreative
     * @return self
     */
    public function setAdvancedCreative(?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreative $advancedCreative): self
    {
        $this->advancedCreative = $advancedCreative;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfo
     */
    public function getAdvancedCreativeInfo(): ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfo
    {
        return $this->advancedCreativeInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfo $advancedCreativeInfo
     * @return self
     */
    public function setAdvancedCreativeInfo(?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfo $advancedCreativeInfo): self
    {
        $this->advancedCreativeInfo = $advancedCreativeInfo;
        return $this;
    }

    /**
     * 广告组ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告组ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 三方购物车锚点ID
     * @return string
     */
    public function getAnchorId(): ?string
    {
        return $this->anchorId;
    }

    /**
     * 三方购物车锚点ID
     * @param string $anchorId
     * @return self
     */
    public function setAnchorId(?string $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * 抖音号ID
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号ID
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 创意ID
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * 创意ID
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * 视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeUpdateV30RequestTrackUrlInfo
     */
    public function getTrackUrlInfo(): ?\Oceanengine\Models\BrandCreativeUpdateV30RequestTrackUrlInfo
    {
        return $this->trackUrlInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeUpdateV30RequestTrackUrlInfo $trackUrlInfo
     * @return self
     */
    public function setTrackUrlInfo(?\Oceanengine\Models\BrandCreativeUpdateV30RequestTrackUrlInfo $trackUrlInfo): self
    {
        $this->trackUrlInfo = $trackUrlInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advancedCreative !== null) {
            $result['advanced_creative'] = $this->advancedCreative;
        }
        if ($this->advancedCreativeInfo !== null) {
            $result['advanced_creative_info'] = $this->advancedCreativeInfo;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->trackUrlInfo !== null) {
            $result['track_url_info'] = $this->trackUrlInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advanced_creative'] ?? null) !== null && is_array($v)) {
            $obj->advancedCreative = \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreative::fromArray($v);
        }
        if (($v = $data['advanced_creative_info'] ?? null) !== null && is_array($v)) {
            $obj->advancedCreativeInfo = \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfo::fromArray($v);
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['track_url_info'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlInfo = \Oceanengine\Models\BrandCreativeUpdateV30RequestTrackUrlInfo::fromArray($v);
        }
        return $obj;
    }
}
