<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectListV30ResponseDataListInnerRelatedProduct implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $productId = null;

    /**
     * @var int
     */
    protected ?int $productPlatformId = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListRelatedProductProductSetting
     */
    protected ?string $productSetting = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProductProductsInner[]
     */
    protected ?array $products = null;

    /**
     * @var int
     */
    protected ?int $uniqueProductId = null;

    /**
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     * @return self
     */
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductPlatformId(): ?int
    {
        return $this->productPlatformId;
    }

    /**
     * @param int $productPlatformId
     * @return self
     */
    public function setProductPlatformId(?int $productPlatformId): self
    {
        $this->productPlatformId = $productPlatformId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListRelatedProductProductSetting
     */
    public function getProductSetting(): ?string
    {
        return $this->productSetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListRelatedProductProductSetting $productSetting
     * @return self
     */
    public function setProductSetting(?string $productSetting): self
    {
        $this->productSetting = $productSetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProductProductsInner[]
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProductProductsInner[] $products
     * @return self
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @return int
     */
    public function getUniqueProductId(): ?int
    {
        return $this->uniqueProductId;
    }

    /**
     * @param int $uniqueProductId
     * @return self
     */
    public function setUniqueProductId(?int $uniqueProductId): self
    {
        $this->uniqueProductId = $uniqueProductId;
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
        if ($this->productPlatformId !== null) {
            $result['product_platform_id'] = $this->productPlatformId;
        }
        if ($this->productSetting !== null) {
            $result['product_setting'] = $this->productSetting;
        }
        if ($this->products !== null) {
            $result['products'] = $this->products;
        }
        if ($this->uniqueProductId !== null) {
            $result['unique_product_id'] = $this->uniqueProductId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (string) $v;
        }
        if (($v = $data['product_platform_id'] ?? null) !== null) {
            $obj->productPlatformId = (int) $v;
        }
        if (($v = $data['product_setting'] ?? null) !== null) {
            $obj->productSetting = (string) $v;
        }
        if (($v = $data['products'] ?? null) !== null && is_array($v)) {
            $obj->products = array_map(fn ($vv) => \Oceanengine\Models\ProjectListV30ResponseDataListInnerRelatedProductProductsInner::fromArray($vv), $v);
        }
        if (($v = $data['unique_product_id'] ?? null) !== null) {
            $obj->uniqueProductId = (int) $v;
        }
        return $obj;
    }
}
