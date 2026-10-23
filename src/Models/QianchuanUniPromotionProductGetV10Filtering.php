<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionProductGetV10Filtering implements \JsonSerializable
{
    /**
     * 只看未投放商品，仅限全域
     * @var bool
     */
    protected ?bool $createRoi2LimitProduct = null;

    /**
     * 只看可投商品，仅限乘方
     * @var bool
     */
    protected ?bool $filterNotDeliveryProduct = null;

    /**
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionProductGetV10FilteringTab
     */
    protected ?string $tab = null;

    /**
     * 只看未投放商品，仅限全域
     * @return bool
     */
    public function getCreateRoi2LimitProduct(): ?bool
    {
        return $this->createRoi2LimitProduct;
    }

    /**
     * 只看未投放商品，仅限全域
     * @param bool $createRoi2LimitProduct
     * @return self
     */
    public function setCreateRoi2LimitProduct(?bool $createRoi2LimitProduct): self
    {
        $this->createRoi2LimitProduct = $createRoi2LimitProduct;
        return $this;
    }

    /**
     * 只看可投商品，仅限乘方
     * @return bool
     */
    public function getFilterNotDeliveryProduct(): ?bool
    {
        return $this->filterNotDeliveryProduct;
    }

    /**
     * 只看可投商品，仅限乘方
     * @param bool $filterNotDeliveryProduct
     * @return self
     */
    public function setFilterNotDeliveryProduct(?bool $filterNotDeliveryProduct): self
    {
        $this->filterNotDeliveryProduct = $filterNotDeliveryProduct;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
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
     * @return \Oceanengine\Models\QianchuanUniPromotionProductGetV10FilteringTab
     */
    public function getTab(): ?string
    {
        return $this->tab;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionProductGetV10FilteringTab $tab
     * @return self
     */
    public function setTab(?string $tab): self
    {
        $this->tab = $tab;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createRoi2LimitProduct !== null) {
            $result['create_roi2_limit_product'] = $this->createRoi2LimitProduct;
        }
        if ($this->filterNotDeliveryProduct !== null) {
            $result['filter_not_delivery_product'] = $this->filterNotDeliveryProduct;
        }
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->tab !== null) {
            $result['tab'] = $this->tab;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_roi2_limit_product'] ?? null) !== null) {
            $obj->createRoi2LimitProduct = (bool) $v;
        }
        if (($v = $data['filter_not_delivery_product'] ?? null) !== null) {
            $obj->filterNotDeliveryProduct = (bool) $v;
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['tab'] ?? null) !== null) {
            $obj->tab = (string) $v;
        }
        return $obj;
    }
}
