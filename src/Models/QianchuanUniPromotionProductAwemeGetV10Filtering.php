<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionProductAwemeGetV10Filtering implements \JsonSerializable
{
    /**
     * 是否只查看未投放商品
     * @var bool
     */
    protected ?bool $createRoi2LimitProduct = null;

    /**
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * 支持根据商品名称模糊搜索
     * @var string
     */
    protected ?string $productName = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionProductAwemeGetV10FilteringTab
     */
    protected ?string $tab = null;

    /**
     * 是否只查看未投放商品
     * @return bool
     */
    public function getCreateRoi2LimitProduct(): ?bool
    {
        return $this->createRoi2LimitProduct;
    }

    /**
     * 是否只查看未投放商品
     * @param bool $createRoi2LimitProduct
     * @return self
     */
    public function setCreateRoi2LimitProduct(?bool $createRoi2LimitProduct): self
    {
        $this->createRoi2LimitProduct = $createRoi2LimitProduct;
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
     * 支持根据商品名称模糊搜索
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 支持根据商品名称模糊搜索
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionProductAwemeGetV10FilteringTab
     */
    public function getTab(): ?string
    {
        return $this->tab;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionProductAwemeGetV10FilteringTab $tab
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
