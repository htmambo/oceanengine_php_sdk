<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaClueProductDeleteV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 通过巨量商品ID删除
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * @var \Oceanengine\Models\DpaClueProductDeleteV2RequestStoreIdAndOuterId
     */
    protected ?\Oceanengine\Models\DpaClueProductDeleteV2RequestStoreIdAndOuterId $storeIdAndOuterId = null;

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
     * 通过巨量商品ID删除
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * 通过巨量商品ID删除
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaClueProductDeleteV2RequestStoreIdAndOuterId
     */
    public function getStoreIdAndOuterId(): ?\Oceanengine\Models\DpaClueProductDeleteV2RequestStoreIdAndOuterId
    {
        return $this->storeIdAndOuterId;
    }

    /**
     * @param \Oceanengine\Models\DpaClueProductDeleteV2RequestStoreIdAndOuterId $storeIdAndOuterId
     * @return self
     */
    public function setStoreIdAndOuterId(?\Oceanengine\Models\DpaClueProductDeleteV2RequestStoreIdAndOuterId $storeIdAndOuterId): self
    {
        $this->storeIdAndOuterId = $storeIdAndOuterId;
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
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        if ($this->storeIdAndOuterId !== null) {
            $result['store_id_and_outer_id'] = $this->storeIdAndOuterId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        if (($v = $data['store_id_and_outer_id'] ?? null) !== null && is_array($v)) {
            $obj->storeIdAndOuterId = \Oceanengine\Models\DpaClueProductDeleteV2RequestStoreIdAndOuterId::fromArray($v);
        }
        return $obj;
    }
}
