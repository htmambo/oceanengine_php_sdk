<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanProductAvailableGetV10ResponseDataProductListInner implements \JsonSerializable
{
    /**
     * 商品权益
     * @var string[]
     */
    protected ?array $benefits = null;

    /**
     * @var string
     */
    protected ?string $categoryName = null;

    /**
     * @var int
     */
    protected ?int $channelId = null;

    /**
     * @var \Oceanengine\Models\QianchuanProductAvailableGetV10DataProductListChannelType
     */
    protected ?string $channelType = null;

    /**
     * @var float
     */
    protected ?float $discountHigherPrice = null;

    /**
     * @var float
     */
    protected ?float $discountLowerPrice = null;

    /**
     * @var int
     */
    protected ?int $discountPrice = null;

    /**
     * 首次上架时间
     * @var int
     */
    protected ?int $firstOnShelfTime = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $img = null;

    /**
     * @var \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataProductListInnerImgListInner[]
     */
    protected ?array $imgList = null;

    /**
     * @var int
     */
    protected ?int $inventory = null;

    /**
     * @var float
     */
    protected ?float $marketPrice = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $productRate = null;

    /**
     * 推荐理由
     * @var string[]
     */
    protected ?array $recommendReasons = null;

    /**
     * @var string
     */
    protected ?string $saleTime = null;

    /**
     * 销量
     * @var int
     */
    protected ?int $sellNum = null;

    /**
     * @var bool
     */
    protected ?bool $supportProductNewOpen = null;

    /**
     * @var \Oceanengine\Models\QianchuanProductAvailableGetV10DataProductListTags
     */
    protected ?string $tags = null;

    /**
     * 商品权益
     * @return string[]
     */
    public function getBenefits(): ?array
    {
        return $this->benefits;
    }

    /**
     * 商品权益
     * @param string[] $benefits
     * @return self
     */
    public function setBenefits(?array $benefits): self
    {
        $this->benefits = $benefits;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return self
     */
    public function setCategoryName(?string $categoryName): self
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return int
     */
    public function getChannelId(): ?int
    {
        return $this->channelId;
    }

    /**
     * @param int $channelId
     * @return self
     */
    public function setChannelId(?int $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanProductAvailableGetV10DataProductListChannelType
     */
    public function getChannelType(): ?string
    {
        return $this->channelType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanProductAvailableGetV10DataProductListChannelType $channelType
     * @return self
     */
    public function setChannelType(?string $channelType): self
    {
        $this->channelType = $channelType;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountHigherPrice(): ?float
    {
        return $this->discountHigherPrice;
    }

    /**
     * @param float $discountHigherPrice
     * @return self
     */
    public function setDiscountHigherPrice(?float $discountHigherPrice): self
    {
        $this->discountHigherPrice = $discountHigherPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountLowerPrice(): ?float
    {
        return $this->discountLowerPrice;
    }

    /**
     * @param float $discountLowerPrice
     * @return self
     */
    public function setDiscountLowerPrice(?float $discountLowerPrice): self
    {
        $this->discountLowerPrice = $discountLowerPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiscountPrice(): ?int
    {
        return $this->discountPrice;
    }

    /**
     * @param int $discountPrice
     * @return self
     */
    public function setDiscountPrice(?int $discountPrice): self
    {
        $this->discountPrice = $discountPrice;
        return $this;
    }

    /**
     * 首次上架时间
     * @return int
     */
    public function getFirstOnShelfTime(): ?int
    {
        return $this->firstOnShelfTime;
    }

    /**
     * 首次上架时间
     * @param int $firstOnShelfTime
     * @return self
     */
    public function setFirstOnShelfTime(?int $firstOnShelfTime): self
    {
        $this->firstOnShelfTime = $firstOnShelfTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getImg(): ?string
    {
        return $this->img;
    }

    /**
     * @param string $img
     * @return self
     */
    public function setImg(?string $img): self
    {
        $this->img = $img;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataProductListInnerImgListInner[]
     */
    public function getImgList(): ?array
    {
        return $this->imgList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataProductListInnerImgListInner[] $imgList
     * @return self
     */
    public function setImgList(?array $imgList): self
    {
        $this->imgList = $imgList;
        return $this;
    }

    /**
     * @return int
     */
    public function getInventory(): ?int
    {
        return $this->inventory;
    }

    /**
     * @param int $inventory
     * @return self
     */
    public function setInventory(?int $inventory): self
    {
        $this->inventory = $inventory;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarketPrice(): ?float
    {
        return $this->marketPrice;
    }

    /**
     * @param float $marketPrice
     * @return self
     */
    public function setMarketPrice(?float $marketPrice): self
    {
        $this->marketPrice = $marketPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductRate(): ?int
    {
        return $this->productRate;
    }

    /**
     * @param int $productRate
     * @return self
     */
    public function setProductRate(?int $productRate): self
    {
        $this->productRate = $productRate;
        return $this;
    }

    /**
     * 推荐理由
     * @return string[]
     */
    public function getRecommendReasons(): ?array
    {
        return $this->recommendReasons;
    }

    /**
     * 推荐理由
     * @param string[] $recommendReasons
     * @return self
     */
    public function setRecommendReasons(?array $recommendReasons): self
    {
        $this->recommendReasons = $recommendReasons;
        return $this;
    }

    /**
     * @return string
     */
    public function getSaleTime(): ?string
    {
        return $this->saleTime;
    }

    /**
     * @param string $saleTime
     * @return self
     */
    public function setSaleTime(?string $saleTime): self
    {
        $this->saleTime = $saleTime;
        return $this;
    }

    /**
     * 销量
     * @return int
     */
    public function getSellNum(): ?int
    {
        return $this->sellNum;
    }

    /**
     * 销量
     * @param int $sellNum
     * @return self
     */
    public function setSellNum(?int $sellNum): self
    {
        $this->sellNum = $sellNum;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSupportProductNewOpen(): ?bool
    {
        return $this->supportProductNewOpen;
    }

    /**
     * @param bool $supportProductNewOpen
     * @return self
     */
    public function setSupportProductNewOpen(?bool $supportProductNewOpen): self
    {
        $this->supportProductNewOpen = $supportProductNewOpen;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanProductAvailableGetV10DataProductListTags
     */
    public function getTags(): ?string
    {
        return $this->tags;
    }

    /**
     * @param \Oceanengine\Models\QianchuanProductAvailableGetV10DataProductListTags $tags
     * @return self
     */
    public function setTags(?string $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->benefits !== null) {
            $result['benefits'] = $this->benefits;
        }
        if ($this->categoryName !== null) {
            $result['category_name'] = $this->categoryName;
        }
        if ($this->channelId !== null) {
            $result['channel_id'] = $this->channelId;
        }
        if ($this->channelType !== null) {
            $result['channel_type'] = $this->channelType;
        }
        if ($this->discountHigherPrice !== null) {
            $result['discount_higher_price'] = $this->discountHigherPrice;
        }
        if ($this->discountLowerPrice !== null) {
            $result['discount_lower_price'] = $this->discountLowerPrice;
        }
        if ($this->discountPrice !== null) {
            $result['discount_price'] = $this->discountPrice;
        }
        if ($this->firstOnShelfTime !== null) {
            $result['first_on_shelf_time'] = $this->firstOnShelfTime;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->img !== null) {
            $result['img'] = $this->img;
        }
        if ($this->imgList !== null) {
            $result['img_list'] = $this->imgList;
        }
        if ($this->inventory !== null) {
            $result['inventory'] = $this->inventory;
        }
        if ($this->marketPrice !== null) {
            $result['market_price'] = $this->marketPrice;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->productRate !== null) {
            $result['product_rate'] = $this->productRate;
        }
        if ($this->recommendReasons !== null) {
            $result['recommend_reasons'] = $this->recommendReasons;
        }
        if ($this->saleTime !== null) {
            $result['sale_time'] = $this->saleTime;
        }
        if ($this->sellNum !== null) {
            $result['sell_num'] = $this->sellNum;
        }
        if ($this->supportProductNewOpen !== null) {
            $result['support_product_new_open'] = $this->supportProductNewOpen;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['benefits'] ?? null) !== null && is_array($v)) {
            $obj->benefits = $v;
        }
        if (($v = $data['category_name'] ?? null) !== null) {
            $obj->categoryName = (string) $v;
        }
        if (($v = $data['channel_id'] ?? null) !== null) {
            $obj->channelId = (int) $v;
        }
        if (($v = $data['channel_type'] ?? null) !== null) {
            $obj->channelType = (string) $v;
        }
        if (($v = $data['discount_higher_price'] ?? null) !== null) {
            $obj->discountHigherPrice = (float) $v;
        }
        if (($v = $data['discount_lower_price'] ?? null) !== null) {
            $obj->discountLowerPrice = (float) $v;
        }
        if (($v = $data['discount_price'] ?? null) !== null) {
            $obj->discountPrice = (int) $v;
        }
        if (($v = $data['first_on_shelf_time'] ?? null) !== null) {
            $obj->firstOnShelfTime = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['img'] ?? null) !== null) {
            $obj->img = (string) $v;
        }
        if (($v = $data['img_list'] ?? null) !== null && is_array($v)) {
            $obj->imgList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanProductAvailableGetV10ResponseDataProductListInnerImgListInner::fromArray($vv), $v);
        }
        if (($v = $data['inventory'] ?? null) !== null) {
            $obj->inventory = (int) $v;
        }
        if (($v = $data['market_price'] ?? null) !== null) {
            $obj->marketPrice = (float) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['product_rate'] ?? null) !== null) {
            $obj->productRate = (int) $v;
        }
        if (($v = $data['recommend_reasons'] ?? null) !== null && is_array($v)) {
            $obj->recommendReasons = $v;
        }
        if (($v = $data['sale_time'] ?? null) !== null) {
            $obj->saleTime = (string) $v;
        }
        if (($v = $data['sell_num'] ?? null) !== null) {
            $obj->sellNum = (int) $v;
        }
        if (($v = $data['support_product_new_open'] ?? null) !== null) {
            $obj->supportProductNewOpen = (bool) $v;
        }
        if (($v = $data['tags'] ?? null) !== null) {
            $obj->tags = (string) $v;
        }
        return $obj;
    }
}
