<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcProjectListV30ResponseDataProjectListInnerProductInfo implements \JsonSerializable
{
    /**
     * 商品id
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 商品头图
     * @var string
     */
    protected ?string $productImageUrl = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 商品id
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品id
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 商品头图
     * @return string
     */
    public function getProductImageUrl(): ?string
    {
        return $this->productImageUrl;
    }

    /**
     * 商品头图
     * @param string $productImageUrl
     * @return self
     */
    public function setProductImageUrl(?string $productImageUrl): self
    {
        $this->productImageUrl = $productImageUrl;
        return $this;
    }

    /**
     * 商品名称
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 商品名称
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productImageUrl !== null) {
            $result['product_image_url'] = $this->productImageUrl;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_image_url'] ?? null) !== null) {
            $obj->productImageUrl = (string) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        return $obj;
    }
}
