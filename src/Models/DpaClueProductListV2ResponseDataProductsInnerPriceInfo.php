<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaClueProductListV2ResponseDataProductsInnerPriceInfo implements \JsonSerializable
{
    /**
     * 日付
     * @var string
     */
    protected ?string $dailyMortgage = null;

    /**
     * 折扣
     * @var float
     */
    protected ?float $discount = null;

    /**
     * 月付
     * @var string
     */
    protected ?string $downPayment = null;

    /**
     * 首付
     * @var string
     */
    protected ?string $mortgage = null;

    /**
     * 商品现价
     * @var float
     */
    protected ?float $price = null;

    /**
     * 价格单位
     * @var string
     */
    protected ?string $priceUnit = null;

    /**
     * 促销活动
     * @var string
     */
    protected ?string $salesPromotion = null;

    /**
     * 减价
     * @var float
     */
    protected ?float $saving = null;

    /**
     * 商品原价
     * @var float
     */
    protected ?float $value = null;

    /**
     * 日付
     * @return string
     */
    public function getDailyMortgage(): ?string
    {
        return $this->dailyMortgage;
    }

    /**
     * 日付
     * @param string $dailyMortgage
     * @return self
     */
    public function setDailyMortgage(?string $dailyMortgage): self
    {
        $this->dailyMortgage = $dailyMortgage;
        return $this;
    }

    /**
     * 折扣
     * @return float
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * 折扣
     * @param float $discount
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * 月付
     * @return string
     */
    public function getDownPayment(): ?string
    {
        return $this->downPayment;
    }

    /**
     * 月付
     * @param string $downPayment
     * @return self
     */
    public function setDownPayment(?string $downPayment): self
    {
        $this->downPayment = $downPayment;
        return $this;
    }

    /**
     * 首付
     * @return string
     */
    public function getMortgage(): ?string
    {
        return $this->mortgage;
    }

    /**
     * 首付
     * @param string $mortgage
     * @return self
     */
    public function setMortgage(?string $mortgage): self
    {
        $this->mortgage = $mortgage;
        return $this;
    }

    /**
     * 商品现价
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * 商品现价
     * @param float $price
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * 价格单位
     * @return string
     */
    public function getPriceUnit(): ?string
    {
        return $this->priceUnit;
    }

    /**
     * 价格单位
     * @param string $priceUnit
     * @return self
     */
    public function setPriceUnit(?string $priceUnit): self
    {
        $this->priceUnit = $priceUnit;
        return $this;
    }

    /**
     * 促销活动
     * @return string
     */
    public function getSalesPromotion(): ?string
    {
        return $this->salesPromotion;
    }

    /**
     * 促销活动
     * @param string $salesPromotion
     * @return self
     */
    public function setSalesPromotion(?string $salesPromotion): self
    {
        $this->salesPromotion = $salesPromotion;
        return $this;
    }

    /**
     * 减价
     * @return float
     */
    public function getSaving(): ?float
    {
        return $this->saving;
    }

    /**
     * 减价
     * @param float $saving
     * @return self
     */
    public function setSaving(?float $saving): self
    {
        $this->saving = $saving;
        return $this;
    }

    /**
     * 商品原价
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * 商品原价
     * @param float $value
     * @return self
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dailyMortgage !== null) {
            $result['daily_mortgage'] = $this->dailyMortgage;
        }
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        if ($this->downPayment !== null) {
            $result['down_payment'] = $this->downPayment;
        }
        if ($this->mortgage !== null) {
            $result['mortgage'] = $this->mortgage;
        }
        if ($this->price !== null) {
            $result['price'] = $this->price;
        }
        if ($this->priceUnit !== null) {
            $result['price_unit'] = $this->priceUnit;
        }
        if ($this->salesPromotion !== null) {
            $result['sales_promotion'] = $this->salesPromotion;
        }
        if ($this->saving !== null) {
            $result['saving'] = $this->saving;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['daily_mortgage'] ?? null) !== null) {
            $obj->dailyMortgage = (string) $v;
        }
        if (($v = $data['discount'] ?? null) !== null) {
            $obj->discount = (float) $v;
        }
        if (($v = $data['down_payment'] ?? null) !== null) {
            $obj->downPayment = (string) $v;
        }
        if (($v = $data['mortgage'] ?? null) !== null) {
            $obj->mortgage = (string) $v;
        }
        if (($v = $data['price'] ?? null) !== null) {
            $obj->price = (float) $v;
        }
        if (($v = $data['price_unit'] ?? null) !== null) {
            $obj->priceUnit = (string) $v;
        }
        if (($v = $data['sales_promotion'] ?? null) !== null) {
            $obj->salesPromotion = (string) $v;
        }
        if (($v = $data['saving'] ?? null) !== null) {
            $obj->saving = (float) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (float) $v;
        }
        return $obj;
    }
}
