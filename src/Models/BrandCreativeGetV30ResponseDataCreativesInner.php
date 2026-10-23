<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInner implements \JsonSerializable
{
    /**
     * 计划ID
     * @var string
     */
    protected ?string $adId = null;

    /**
     * 广告主ID
     * @var string
     */
    protected ?string $advertiserId = null;

    /**
     * 三方购物车锚点ID
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * 三方购物车锚点名称
     * @var string
     */
    protected ?string $anchorName = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCategoryInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCategoryInfo $categoryInfo = null;

    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreative
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreative $creative = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeStatus
     */
    protected ?string $creativeStatus = null;

    /**
     * 投放结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 修改时间
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * 投放起始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerTrackUrlInfo
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerTrackUrlInfo $trackUrlInfo = null;

    /**
     * 计划ID
     * @return string
     */
    public function getAdId(): ?string
    {
        return $this->adId;
    }

    /**
     * 计划ID
     * @param string $adId
     * @return self
     */
    public function setAdId(?string $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 广告主ID
     * @return string
     */
    public function getAdvertiserId(): ?string
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param string $advertiserId
     * @return self
     */
    public function setAdvertiserId(?string $advertiserId): self
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
     * 三方购物车锚点名称
     * @return string
     */
    public function getAnchorName(): ?string
    {
        return $this->anchorName;
    }

    /**
     * 三方购物车锚点名称
     * @param string $anchorName
     * @return self
     */
    public function setAnchorName(?string $anchorName): self
    {
        $this->anchorName = $anchorName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCategoryInfo
     */
    public function getCategoryInfo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCategoryInfo
    {
        return $this->categoryInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCategoryInfo $categoryInfo
     * @return self
     */
    public function setCategoryInfo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCategoryInfo $categoryInfo): self
    {
        $this->categoryInfo = $categoryInfo;
        return $this;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreative
     */
    public function getCreative(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreative
    {
        return $this->creative;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreative $creative
     * @return self
     */
    public function setCreative(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreative $creative): self
    {
        $this->creative = $creative;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeStatus
     */
    public function getCreativeStatus(): ?string
    {
        return $this->creativeStatus;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeStatus $creativeStatus
     * @return self
     */
    public function setCreativeStatus(?string $creativeStatus): self
    {
        $this->creativeStatus = $creativeStatus;
        return $this;
    }

    /**
     * 投放结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 投放结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 修改时间
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * 修改时间
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * 投放起始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 投放起始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerTrackUrlInfo
     */
    public function getTrackUrlInfo(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerTrackUrlInfo
    {
        return $this->trackUrlInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerTrackUrlInfo $trackUrlInfo
     * @return self
     */
    public function setTrackUrlInfo(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerTrackUrlInfo $trackUrlInfo): self
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
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->anchorName !== null) {
            $result['anchor_name'] = $this->anchorName;
        }
        if ($this->categoryInfo !== null) {
            $result['category_info'] = $this->categoryInfo;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->creative !== null) {
            $result['creative'] = $this->creative;
        }
        if ($this->creativeStatus !== null) {
            $result['creative_status'] = $this->creativeStatus;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
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
            $obj->adId = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (string) $v;
        }
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['anchor_name'] ?? null) !== null) {
            $obj->anchorName = (string) $v;
        }
        if (($v = $data['category_info'] ?? null) !== null && is_array($v)) {
            $obj->categoryInfo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCategoryInfo::fromArray($v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['creative'] ?? null) !== null && is_array($v)) {
            $obj->creative = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreative::fromArray($v);
        }
        if (($v = $data['creative_status'] ?? null) !== null) {
            $obj->creativeStatus = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['track_url_info'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlInfo = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerTrackUrlInfo::fromArray($v);
        }
        return $obj;
    }
}
