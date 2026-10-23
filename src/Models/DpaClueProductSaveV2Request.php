<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaClueProductSaveV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\DpaClueProductSaveV2RequestProduct
     */
    protected ?\Oceanengine\Models\DpaClueProductSaveV2RequestProduct $product = null;

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
     * @return \Oceanengine\Models\DpaClueProductSaveV2RequestProduct
     */
    public function getProduct(): ?\Oceanengine\Models\DpaClueProductSaveV2RequestProduct
    {
        return $this->product;
    }

    /**
     * @param \Oceanengine\Models\DpaClueProductSaveV2RequestProduct $product
     * @return self
     */
    public function setProduct(?\Oceanengine\Models\DpaClueProductSaveV2RequestProduct $product): self
    {
        $this->product = $product;
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
        if ($this->product !== null) {
            $result['product'] = $this->product;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['product'] ?? null) !== null && is_array($v)) {
            $obj->product = \Oceanengine\Models\DpaClueProductSaveV2RequestProduct::fromArray($v);
        }
        return $obj;
    }
}
