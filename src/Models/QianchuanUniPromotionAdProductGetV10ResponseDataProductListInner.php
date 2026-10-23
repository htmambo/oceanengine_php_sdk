<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdProductGetV10ResponseDataProductListInner implements \JsonSerializable
{
    /**
     * 抖音号ID列表，仅多号乘方商品计划返回
     * @var int[]
     */
    protected ?array $awemeIdList = null;

    /**
     * 商品是否已删除
     * @var bool
     */
    protected ?bool $isDel = null;

    /**
     * 商品ID，当计划为商品全域/乘方计划时返回
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerProductInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerProductInfo $productInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerStatsInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerStatsInfo $statsInfo = null;

    /**
     * 抖音号ID列表，仅多号乘方商品计划返回
     * @return int[]
     */
    public function getAwemeIdList(): ?array
    {
        return $this->awemeIdList;
    }

    /**
     * 抖音号ID列表，仅多号乘方商品计划返回
     * @param int[] $awemeIdList
     * @return self
     */
    public function setAwemeIdList(?array $awemeIdList): self
    {
        $this->awemeIdList = $awemeIdList;
        return $this;
    }

    /**
     * 商品是否已删除
     * @return bool
     */
    public function getIsDel(): ?bool
    {
        return $this->isDel;
    }

    /**
     * 商品是否已删除
     * @param bool $isDel
     * @return self
     */
    public function setIsDel(?bool $isDel): self
    {
        $this->isDel = $isDel;
        return $this;
    }

    /**
     * 商品ID，当计划为商品全域/乘方计划时返回
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品ID，当计划为商品全域/乘方计划时返回
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerStatsInfo
     */
    public function getStatsInfo(): ?\Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerStatsInfo
    {
        return $this->statsInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerStatsInfo $statsInfo
     * @return self
     */
    public function setStatsInfo(?\Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerStatsInfo $statsInfo): self
    {
        $this->statsInfo = $statsInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeIdList !== null) {
            $result['aweme_id_list'] = $this->awemeIdList;
        }
        if ($this->isDel !== null) {
            $result['is_del'] = $this->isDel;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->statsInfo !== null) {
            $result['stats_info'] = $this->statsInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id_list'] ?? null) !== null && is_array($v)) {
            $obj->awemeIdList = $v;
        }
        if (($v = $data['is_del'] ?? null) !== null) {
            $obj->isDel = (bool) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerProductInfo::fromArray($v);
        }
        if (($v = $data['stats_info'] ?? null) !== null && is_array($v)) {
            $obj->statsInfo = \Oceanengine\Models\QianchuanUniPromotionAdProductGetV10ResponseDataProductListInnerStatsInfo::fromArray($v);
        }
        return $obj;
    }
}
