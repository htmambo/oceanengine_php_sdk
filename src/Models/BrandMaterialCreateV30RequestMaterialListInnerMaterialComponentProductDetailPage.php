<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentProductDetailPage implements \JsonSerializable
{
    /**
     * 抖音小店账号ID
     * @var string
     */
    protected ?string $awemeShopId = null;

    /**
     * 落地页
     * @var string
     */
    protected ?string $externalUrl = null;

    /**
     * 商品ID
     * @var string
     */
    protected ?string $productId = null;

    /**
     * 抖音小店账号ID
     * @return string
     */
    public function getAwemeShopId(): ?string
    {
        return $this->awemeShopId;
    }

    /**
     * 抖音小店账号ID
     * @param string $awemeShopId
     * @return self
     */
    public function setAwemeShopId(?string $awemeShopId): self
    {
        $this->awemeShopId = $awemeShopId;
        return $this;
    }

    /**
     * 落地页
     * @return string
     */
    public function getExternalUrl(): ?string
    {
        return $this->externalUrl;
    }

    /**
     * 落地页
     * @param string $externalUrl
     * @return self
     */
    public function setExternalUrl(?string $externalUrl): self
    {
        $this->externalUrl = $externalUrl;
        return $this;
    }

    /**
     * 商品ID
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * 商品ID
     * @param string $productId
     * @return self
     */
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeShopId !== null) {
            $result['aweme_shop_id'] = $this->awemeShopId;
        }
        if ($this->externalUrl !== null) {
            $result['external_url'] = $this->externalUrl;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_shop_id'] ?? null) !== null) {
            $obj->awemeShopId = (string) $v;
        }
        if (($v = $data['external_url'] ?? null) !== null) {
            $obj->externalUrl = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (string) $v;
        }
        return $obj;
    }
}
