<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaProductUpdateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $platformId = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\DpaProductUpdateV2RequestProductInfo
     */
    protected ?\Oceanengine\Models\DpaProductUpdateV2RequestProductInfo $productInfo = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlatformId(): ?int
    {
        return $this->platformId;
    }

    /**
     * @param int $platformId
     * @return self
     */
    public function setPlatformId(?int $platformId): self
    {
        $this->platformId = $platformId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaProductUpdateV2RequestProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\DpaProductUpdateV2RequestProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaProductUpdateV2RequestProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\DpaProductUpdateV2RequestProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
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
        if ($this->platformId !== null) {
            $result['platform_id'] = $this->platformId;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['platform_id'] ?? null) !== null) {
            $obj->platformId = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\DpaProductUpdateV2RequestProductInfo::fromArray($v);
        }
        return $obj;
    }
}
