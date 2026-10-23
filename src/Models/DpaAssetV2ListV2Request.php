<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAssetV2ListV2Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\DpaAssetV2ListV2RequestFiltering
     */
    protected ?\Oceanengine\Models\DpaAssetV2ListV2RequestFiltering $filtering = null;

    /**
     * 页码， 默认值: 1
     * @var int
     */
    protected ?int $page = null;

    /**
     * 页面数据量， 默认值: 10，最大 100
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 新线索商品ID列表，最多传入100个
     * @var int[]
     */
    protected ?array $uniqueProductIds = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAssetV2ListV2RequestFiltering
     */
    public function getFiltering(): ?\Oceanengine\Models\DpaAssetV2ListV2RequestFiltering
    {
        return $this->filtering;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetV2ListV2RequestFiltering $filtering
     * @return self
     */
    public function setFiltering(?\Oceanengine\Models\DpaAssetV2ListV2RequestFiltering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码， 默认值: 1
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * 页码， 默认值: 1
     * @param int $page
     * @return self
     */
    public function setPage(?int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面数据量， 默认值: 10，最大 100
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 页面数据量， 默认值: 10，最大 100
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 新线索商品ID列表，最多传入100个
     * @return int[]
     */
    public function getUniqueProductIds(): ?array
    {
        return $this->uniqueProductIds;
    }

    /**
     * 新线索商品ID列表，最多传入100个
     * @param int[] $uniqueProductIds
     * @return self
     */
    public function setUniqueProductIds(?array $uniqueProductIds): self
    {
        $this->uniqueProductIds = $uniqueProductIds;
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
        if ($this->filtering !== null) {
            $result['filtering'] = $this->filtering;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        if ($this->uniqueProductIds !== null) {
            $result['unique_product_ids'] = $this->uniqueProductIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['filtering'] ?? null) !== null && is_array($v)) {
            $obj->filtering = \Oceanengine\Models\DpaAssetV2ListV2RequestFiltering::fromArray($v);
        }
        if (($v = $data['page'] ?? null) !== null) {
            $obj->page = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        if (($v = $data['unique_product_ids'] ?? null) !== null && is_array($v)) {
            $obj->uniqueProductIds = $v;
        }
        return $obj;
    }
}
