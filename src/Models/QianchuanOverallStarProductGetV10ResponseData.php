<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallStarProductGetV10ResponseData implements \JsonSerializable
{
    /**
     * 是否超过roi2互斥商品过滤上限
     * @var bool
     */
    protected ?bool $overCreateRoi2limitProduct = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataPagination
     */
    protected ?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataPagination $pagination = null;

    /**
     * 返回置灰检查结果
     * @var \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInner[]
     */
    protected ?array $productListInfos = null;

    /**
     * 是否超过roi2互斥商品过滤上限
     * @return bool
     */
    public function getOverCreateRoi2limitProduct(): ?bool
    {
        return $this->overCreateRoi2limitProduct;
    }

    /**
     * 是否超过roi2互斥商品过滤上限
     * @param bool $overCreateRoi2limitProduct
     * @return self
     */
    public function setOverCreateRoi2limitProduct(?bool $overCreateRoi2limitProduct): self
    {
        $this->overCreateRoi2limitProduct = $overCreateRoi2limitProduct;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataPagination $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * 返回置灰检查结果
     * @return \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInner[]
     */
    public function getProductListInfos(): ?array
    {
        return $this->productListInfos;
    }

    /**
     * 返回置灰检查结果
     * @param \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInner[] $productListInfos
     * @return self
     */
    public function setProductListInfos(?array $productListInfos): self
    {
        $this->productListInfos = $productListInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->overCreateRoi2limitProduct !== null) {
            $result['over_create_roi2limit_product'] = $this->overCreateRoi2limitProduct;
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        if ($this->productListInfos !== null) {
            $result['product_list_infos'] = $this->productListInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['over_create_roi2limit_product'] ?? null) !== null) {
            $obj->overCreateRoi2limitProduct = (bool) $v;
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataPagination::fromArray($v);
        }
        if (($v = $data['product_list_infos'] ?? null) !== null && is_array($v)) {
            $obj->productListInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
