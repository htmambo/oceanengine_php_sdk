<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoChannel
     */
    protected ?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoChannel $channel = null;

    /**
     * 商品id
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoImage
     */
    protected ?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoImage $image = null;

    /**
     * 商品主图 URL
     * @var string
     */
    protected ?string $mainImageUrl = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 商品原价
     * @var int
     */
    protected ?int $price = null;

    /**
     * 商品所属店铺id
     * @var int
     */
    protected ?int $shopId = null;

    /**
     * 0=在线，1=下线，2=删除，-2=彻底删除
     * @var int
     */
    protected ?int $status = null;

    /**
     * @return \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoChannel
     */
    public function getChannel(): ?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoChannel
    {
        return $this->channel;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoChannel $channel
     * @return self
     */
    public function setChannel(?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoChannel $channel): self
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * 商品id
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 商品id
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoImage
     */
    public function getImage(): ?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoImage $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * 商品主图 URL
     * @return string
     */
    public function getMainImageUrl(): ?string
    {
        return $this->mainImageUrl;
    }

    /**
     * 商品主图 URL
     * @param string $mainImageUrl
     * @return self
     */
    public function setMainImageUrl(?string $mainImageUrl): self
    {
        $this->mainImageUrl = $mainImageUrl;
        return $this;
    }

    /**
     * 商品名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 商品名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 商品原价
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * 商品原价
     * @param int $price
     * @return self
     */
    public function setPrice(?int $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * 商品所属店铺id
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * 商品所属店铺id
     * @param int $shopId
     * @return self
     */
    public function setShopId(?int $shopId): self
    {
        $this->shopId = $shopId;
        return $this;
    }

    /**
     * 0=在线，1=下线，2=删除，-2=彻底删除
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 0=在线，1=下线，2=删除，-2=彻底删除
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->channel !== null) {
            $result['channel'] = $this->channel;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        if ($this->mainImageUrl !== null) {
            $result['main_image_url'] = $this->mainImageUrl;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        if ($this->shopId !== null) {
            $result['shop_id'] = $this->shopId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['channel'] ?? null) !== null && is_array($v)) {
            $obj->channel = \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoChannel::fromArray($v);
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\QianchuanOverallStarProductGetV10ResponseDataProductListInfosInnerProductInfoImage::fromArray($v);
        }
        if (($v = $data['main_image_url'] ?? null) !== null) {
            $obj->mainImageUrl = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['price'] ?? null) !== null) {
            $obj->price = (int) $v;
        }
        if (($v = $data['shop_id'] ?? null) !== null) {
            $obj->shopId = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        return $obj;
    }
}
