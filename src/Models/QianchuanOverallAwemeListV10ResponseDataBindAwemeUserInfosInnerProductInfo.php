<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfoChannel
     */
    protected ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfoChannel $channel = null;

    /**
     * @var string
     */
    protected ?string $img = null;

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
     * 商品id
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfoChannel
     */
    public function getChannel(): ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfoChannel
    {
        return $this->channel;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfoChannel $channel
     * @return self
     */
    public function setChannel(?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfoChannel $channel): self
    {
        $this->channel = $channel;
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
        if ($this->channel !== null) {
            $result['channel'] = $this->channel;
        }
        if ($this->img !== null) {
            $result['img'] = $this->img;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['channel'] ?? null) !== null && is_array($v)) {
            $obj->channel = \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInnerProductInfoChannel::fromArray($v);
        }
        if (($v = $data['img'] ?? null) !== null) {
            $obj->img = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['price'] ?? null) !== null) {
            $obj->price = (int) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        return $obj;
    }
}
