<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseDataOrdersInnerMagazinePriceInfo implements \JsonSerializable
{
    /**
     * 政策折扣
     * @var string
     */
    protected ?string $discount = null;

    /**
     * 刊例单价
     * @var string
     */
    protected ?string $publishPrice = null;

    /**
     * 政策单价
     * @var string
     */
    protected ?string $sellPrice = null;

    /**
     * 政策折扣
     * @return string
     */
    public function getDiscount(): ?string
    {
        return $this->discount;
    }

    /**
     * 政策折扣
     * @param string $discount
     * @return self
     */
    public function setDiscount(?string $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * 刊例单价
     * @return string
     */
    public function getPublishPrice(): ?string
    {
        return $this->publishPrice;
    }

    /**
     * 刊例单价
     * @param string $publishPrice
     * @return self
     */
    public function setPublishPrice(?string $publishPrice): self
    {
        $this->publishPrice = $publishPrice;
        return $this;
    }

    /**
     * 政策单价
     * @return string
     */
    public function getSellPrice(): ?string
    {
        return $this->sellPrice;
    }

    /**
     * 政策单价
     * @param string $sellPrice
     * @return self
     */
    public function setSellPrice(?string $sellPrice): self
    {
        $this->sellPrice = $sellPrice;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        if ($this->publishPrice !== null) {
            $result['publish_price'] = $this->publishPrice;
        }
        if ($this->sellPrice !== null) {
            $result['sell_price'] = $this->sellPrice;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['discount'] ?? null) !== null) {
            $obj->discount = (string) $v;
        }
        if (($v = $data['publish_price'] ?? null) !== null) {
            $obj->publishPrice = (string) $v;
        }
        if (($v = $data['sell_price'] ?? null) !== null) {
            $obj->sellPrice = (string) $v;
        }
        return $obj;
    }
}
