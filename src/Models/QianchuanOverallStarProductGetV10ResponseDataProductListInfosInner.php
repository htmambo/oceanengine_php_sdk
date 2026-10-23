<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallStarProductGetV10ResponseDataProductListInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfo
     */
    protected ?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfo $productInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfo $productInfo): self
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
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfo::fromArray($v);
        }
        return $obj;
    }
}
