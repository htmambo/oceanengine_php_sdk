<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanCarouselAwemeGetV10Filtering implements \JsonSerializable
{
    /**
     * 挂车商品指定的筛选主页图文id
     * @var int
     */
    protected ?int $awemeCarouselId = null;

    /**
     * 分享链接
     * @var string
     */
    protected ?string $awemeItemUrl = null;

    /**
     * 图文id，抖音主页视频用来投放才会有，限制0-50。同时注意material_ids和aweme_carousel_id智能选择一个进行过滤，否则可能差不到数据。
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 商品id
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 挂车商品指定的筛选主页图文id
     * @return int
     */
    public function getAwemeCarouselId(): ?int
    {
        return $this->awemeCarouselId;
    }

    /**
     * 挂车商品指定的筛选主页图文id
     * @param int $awemeCarouselId
     * @return self
     */
    public function setAwemeCarouselId(?int $awemeCarouselId): self
    {
        $this->awemeCarouselId = $awemeCarouselId;
        return $this;
    }

    /**
     * 分享链接
     * @return string
     */
    public function getAwemeItemUrl(): ?string
    {
        return $this->awemeItemUrl;
    }

    /**
     * 分享链接
     * @param string $awemeItemUrl
     * @return self
     */
    public function setAwemeItemUrl(?string $awemeItemUrl): self
    {
        $this->awemeItemUrl = $awemeItemUrl;
        return $this;
    }

    /**
     * 图文id，抖音主页视频用来投放才会有，限制0-50。同时注意material_ids和aweme_carousel_id智能选择一个进行过滤，否则可能差不到数据。
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 图文id，抖音主页视频用来投放才会有，限制0-50。同时注意material_ids和aweme_carousel_id智能选择一个进行过滤，否则可能差不到数据。
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeCarouselId !== null) {
            $result['aweme_carousel_id'] = $this->awemeCarouselId;
        }
        if ($this->awemeItemUrl !== null) {
            $result['aweme_item_url'] = $this->awemeItemUrl;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_carousel_id'] ?? null) !== null) {
            $obj->awemeCarouselId = (int) $v;
        }
        if (($v = $data['aweme_item_url'] ?? null) !== null) {
            $obj->awemeItemUrl = (string) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        return $obj;
    }
}
