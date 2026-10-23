<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaOrderListV30ResponseDataOrdersInnerMagazinePriceInfo implements \JsonSerializable
{
    /**
     * 实际总价
     * @var string
     */
    protected ?string $actualMagazinePrice = null;

    /**
     * 实际总价
     * @var string
     */
    protected ?string $actualMagazinePriceV2 = null;

    /**
     * 折扣
     * @var string
     */
    protected ?string $discount = null;

    /**
     * 刊例单价
     * @var string
     */
    protected ?string $publishPrice = null;

    /**
     * 售卖单价
     * @var string
     */
    protected ?string $sellPrice = null;

    /**
     * 刊例总价
     * @var string
     */
    protected ?string $totalPublishPrice = null;

    /**
     * 售卖总价
     * @var string
     */
    protected ?string $totalSellPrice = null;

    /**
     * 实际总价
     * @return string
     */
    public function getActualMagazinePrice(): ?string
    {
        return $this->actualMagazinePrice;
    }

    /**
     * 实际总价
     * @param string $actualMagazinePrice
     * @return self
     */
    public function setActualMagazinePrice(?string $actualMagazinePrice): self
    {
        $this->actualMagazinePrice = $actualMagazinePrice;
        return $this;
    }

    /**
     * 实际总价
     * @return string
     */
    public function getActualMagazinePriceV2(): ?string
    {
        return $this->actualMagazinePriceV2;
    }

    /**
     * 实际总价
     * @param string $actualMagazinePriceV2
     * @return self
     */
    public function setActualMagazinePriceV2(?string $actualMagazinePriceV2): self
    {
        $this->actualMagazinePriceV2 = $actualMagazinePriceV2;
        return $this;
    }

    /**
     * 折扣
     * @return string
     */
    public function getDiscount(): ?string
    {
        return $this->discount;
    }

    /**
     * 折扣
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
     * 售卖单价
     * @return string
     */
    public function getSellPrice(): ?string
    {
        return $this->sellPrice;
    }

    /**
     * 售卖单价
     * @param string $sellPrice
     * @return self
     */
    public function setSellPrice(?string $sellPrice): self
    {
        $this->sellPrice = $sellPrice;
        return $this;
    }

    /**
     * 刊例总价
     * @return string
     */
    public function getTotalPublishPrice(): ?string
    {
        return $this->totalPublishPrice;
    }

    /**
     * 刊例总价
     * @param string $totalPublishPrice
     * @return self
     */
    public function setTotalPublishPrice(?string $totalPublishPrice): self
    {
        $this->totalPublishPrice = $totalPublishPrice;
        return $this;
    }

    /**
     * 售卖总价
     * @return string
     */
    public function getTotalSellPrice(): ?string
    {
        return $this->totalSellPrice;
    }

    /**
     * 售卖总价
     * @param string $totalSellPrice
     * @return self
     */
    public function setTotalSellPrice(?string $totalSellPrice): self
    {
        $this->totalSellPrice = $totalSellPrice;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actualMagazinePrice !== null) {
            $result['actual_magazine_price'] = $this->actualMagazinePrice;
        }
        if ($this->actualMagazinePriceV2 !== null) {
            $result['actual_magazine_price_v2'] = $this->actualMagazinePriceV2;
        }
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        if ($this->publishPrice !== null) {
            $result['publish_price'] = $this->publishPrice;
        }
        if ($this->sellPrice !== null) {
            $result['sell_price'] = $this->sellPrice;
        }
        if ($this->totalPublishPrice !== null) {
            $result['total_publish_price'] = $this->totalPublishPrice;
        }
        if ($this->totalSellPrice !== null) {
            $result['total_sell_price'] = $this->totalSellPrice;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['actual_magazine_price'] ?? null) !== null) {
            $obj->actualMagazinePrice = (string) $v;
        }
        if (($v = $data['actual_magazine_price_v2'] ?? null) !== null) {
            $obj->actualMagazinePriceV2 = (string) $v;
        }
        if (($v = $data['discount'] ?? null) !== null) {
            $obj->discount = (string) $v;
        }
        if (($v = $data['publish_price'] ?? null) !== null) {
            $obj->publishPrice = (string) $v;
        }
        if (($v = $data['sell_price'] ?? null) !== null) {
            $obj->sellPrice = (string) $v;
        }
        if (($v = $data['total_publish_price'] ?? null) !== null) {
            $obj->totalPublishPrice = (string) $v;
        }
        if (($v = $data['total_sell_price'] ?? null) !== null) {
            $obj->totalSellPrice = (string) $v;
        }
        return $obj;
    }
}
