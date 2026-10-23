<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerMagazinePriceInfo implements \JsonSerializable
{
    /**
     * 实际投放刊例
     * @var string
     */
    protected ?string $actualMagazinePrice = null;

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
     * 刊例总价
     * @var string
     */
    protected ?string $totalPublishPrice = null;

    /**
     * 政策总价
     * @var string
     */
    protected ?string $totalSellPrice = null;

    /**
     * 实际投放刊例
     * @return string
     */
    public function getActualMagazinePrice(): ?string
    {
        return $this->actualMagazinePrice;
    }

    /**
     * 实际投放刊例
     * @param string $actualMagazinePrice
     * @return self
     */
    public function setActualMagazinePrice(?string $actualMagazinePrice): self
    {
        $this->actualMagazinePrice = $actualMagazinePrice;
        return $this;
    }

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
     * 政策总价
     * @return string
     */
    public function getTotalSellPrice(): ?string
    {
        return $this->totalSellPrice;
    }

    /**
     * 政策总价
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
