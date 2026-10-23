<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeCreateV30Request implements \JsonSerializable
{
    /**
     * 计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCategoryInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCategoryInfo $categoryInfo = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30CreativeDisplayMode
     */
    protected ?string $creativeDisplayMode = null;

    /**
     * 创意列表
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInner[]
     */
    protected ?array $creativeList = null;

    /**
     * 代理商员工id
     * @var int
     */
    protected ?int $staffId = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestTrackUrlInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestTrackUrlInfo $trackUrlInfo = null;

    /**
     * 计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCategoryInfo
     */
    public function getCategoryInfo(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCategoryInfo
    {
        return $this->categoryInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCategoryInfo $categoryInfo
     * @return self
     */
    public function setCategoryInfo(?\Oceanengine\Models\BrandCreativeCreateV30RequestCategoryInfo $categoryInfo): self
    {
        $this->categoryInfo = $categoryInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30CreativeDisplayMode
     */
    public function getCreativeDisplayMode(): ?string
    {
        return $this->creativeDisplayMode;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30CreativeDisplayMode $creativeDisplayMode
     * @return self
     */
    public function setCreativeDisplayMode(?string $creativeDisplayMode): self
    {
        $this->creativeDisplayMode = $creativeDisplayMode;
        return $this;
    }

    /**
     * 创意列表
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInner[]
     */
    public function getCreativeList(): ?array
    {
        return $this->creativeList;
    }

    /**
     * 创意列表
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInner[] $creativeList
     * @return self
     */
    public function setCreativeList(?array $creativeList): self
    {
        $this->creativeList = $creativeList;
        return $this;
    }

    /**
     * 代理商员工id
     * @return int
     */
    public function getStaffId(): ?int
    {
        return $this->staffId;
    }

    /**
     * 代理商员工id
     * @param int $staffId
     * @return self
     */
    public function setStaffId(?int $staffId): self
    {
        $this->staffId = $staffId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestTrackUrlInfo
     */
    public function getTrackUrlInfo(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestTrackUrlInfo
    {
        return $this->trackUrlInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestTrackUrlInfo $trackUrlInfo
     * @return self
     */
    public function setTrackUrlInfo(?\Oceanengine\Models\BrandCreativeCreateV30RequestTrackUrlInfo $trackUrlInfo): self
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->categoryInfo !== null) {
            $result['category_info'] = $this->categoryInfo;
        }
        if ($this->creativeDisplayMode !== null) {
            $result['creative_display_mode'] = $this->creativeDisplayMode;
        }
        if ($this->creativeList !== null) {
            $result['creative_list'] = $this->creativeList;
        }
        if ($this->staffId !== null) {
            $result['staff_id'] = $this->staffId;
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
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['category_info'] ?? null) !== null && is_array($v)) {
            $obj->categoryInfo = \Oceanengine\Models\BrandCreativeCreateV30RequestCategoryInfo::fromArray($v);
        }
        if (($v = $data['creative_display_mode'] ?? null) !== null) {
            $obj->creativeDisplayMode = (string) $v;
        }
        if (($v = $data['creative_list'] ?? null) !== null && is_array($v)) {
            $obj->creativeList = array_map(fn ($vv) => \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['staff_id'] ?? null) !== null) {
            $obj->staffId = (int) $v;
        }
        if (($v = $data['track_url_info'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlInfo = \Oceanengine\Models\BrandCreativeCreateV30RequestTrackUrlInfo::fromArray($v);
        }
        return $obj;
    }
}
