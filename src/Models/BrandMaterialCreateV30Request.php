<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestCategoryInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestCategoryInfo $categoryInfo = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30ContentType
     */
    protected ?string $contentType = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30CreativeDisplayMode
     */
    protected ?string $creativeDisplayMode = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestLbs
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestLbs $lbs = null;

    /**
     * 创意详细信息
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInner[]
     */
    protected ?array $materialList = null;

    /**
     * 预定单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestTrackUrlInfo
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestTrackUrlInfo $trackUrlInfo = null;

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
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestCategoryInfo
     */
    public function getCategoryInfo(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestCategoryInfo
    {
        return $this->categoryInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestCategoryInfo $categoryInfo
     * @return self
     */
    public function setCategoryInfo(?\Oceanengine\Models\BrandMaterialCreateV30RequestCategoryInfo $categoryInfo): self
    {
        $this->categoryInfo = $categoryInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30ContentType
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30ContentType $contentType
     * @return self
     */
    public function setContentType(?string $contentType): self
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30CreativeDisplayMode
     */
    public function getCreativeDisplayMode(): ?string
    {
        return $this->creativeDisplayMode;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30CreativeDisplayMode $creativeDisplayMode
     * @return self
     */
    public function setCreativeDisplayMode(?string $creativeDisplayMode): self
    {
        $this->creativeDisplayMode = $creativeDisplayMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestLbs
     */
    public function getLbs(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestLbs
    {
        return $this->lbs;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestLbs $lbs
     * @return self
     */
    public function setLbs(?\Oceanengine\Models\BrandMaterialCreateV30RequestLbs $lbs): self
    {
        $this->lbs = $lbs;
        return $this;
    }

    /**
     * 创意详细信息
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInner[]
     */
    public function getMaterialList(): ?array
    {
        return $this->materialList;
    }

    /**
     * 创意详细信息
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInner[] $materialList
     * @return self
     */
    public function setMaterialList(?array $materialList): self
    {
        $this->materialList = $materialList;
        return $this;
    }

    /**
     * 预定单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 预定单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestTrackUrlInfo
     */
    public function getTrackUrlInfo(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestTrackUrlInfo
    {
        return $this->trackUrlInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestTrackUrlInfo $trackUrlInfo
     * @return self
     */
    public function setTrackUrlInfo(?\Oceanengine\Models\BrandMaterialCreateV30RequestTrackUrlInfo $trackUrlInfo): self
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->categoryInfo !== null) {
            $result['category_info'] = $this->categoryInfo;
        }
        if ($this->contentType !== null) {
            $result['content_type'] = $this->contentType;
        }
        if ($this->creativeDisplayMode !== null) {
            $result['creative_display_mode'] = $this->creativeDisplayMode;
        }
        if ($this->lbs !== null) {
            $result['lbs'] = $this->lbs;
        }
        if ($this->materialList !== null) {
            $result['material_list'] = $this->materialList;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->trackUrlInfo !== null) {
            $result['track_url_info'] = $this->trackUrlInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['category_info'] ?? null) !== null && is_array($v)) {
            $obj->categoryInfo = \Oceanengine\Models\BrandMaterialCreateV30RequestCategoryInfo::fromArray($v);
        }
        if (($v = $data['content_type'] ?? null) !== null) {
            $obj->contentType = (string) $v;
        }
        if (($v = $data['creative_display_mode'] ?? null) !== null) {
            $obj->creativeDisplayMode = (string) $v;
        }
        if (($v = $data['lbs'] ?? null) !== null && is_array($v)) {
            $obj->lbs = \Oceanengine\Models\BrandMaterialCreateV30RequestLbs::fromArray($v);
        }
        if (($v = $data['material_list'] ?? null) !== null && is_array($v)) {
            $obj->materialList = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['track_url_info'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlInfo = \Oceanengine\Models\BrandMaterialCreateV30RequestTrackUrlInfo::fromArray($v);
        }
        return $obj;
    }
}
