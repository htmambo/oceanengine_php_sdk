<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionListV10ResponseDataAdListInnerProductInfoInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var string
     */
    protected ?string $productImage = null;

    /**
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var string[]
     */
    protected ?array $recommendReasons = null;

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
     * @return string
     */
    public function getProductImage(): ?string
    {
        return $this->productImage;
    }

    /**
     * @param string $productImage
     * @return self
     */
    public function setProductImage(?string $productImage): self
    {
        $this->productImage = $productImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRecommendReasons(): ?array
    {
        return $this->recommendReasons;
    }

    /**
     * @param string[] $recommendReasons
     * @return self
     */
    public function setRecommendReasons(?array $recommendReasons): self
    {
        $this->recommendReasons = $recommendReasons;
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
        if ($this->productImage !== null) {
            $result['product_image'] = $this->productImage;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->recommendReasons !== null) {
            $result['recommend_reasons'] = $this->recommendReasons;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_image'] ?? null) !== null) {
            $obj->productImage = (string) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['recommend_reasons'] ?? null) !== null && is_array($v)) {
            $obj->recommendReasons = $v;
        }
        return $obj;
    }
}
