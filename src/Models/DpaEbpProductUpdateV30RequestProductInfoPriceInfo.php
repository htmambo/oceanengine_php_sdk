<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpProductUpdateV30RequestProductInfoPriceInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $dailyMortgage = null;

    /**
     * @var float
     */
    protected ?float $discount = null;

    /**
     * @var string
     */
    protected ?string $downPayment = null;

    /**
     * @var string
     */
    protected ?string $mortgage = null;

    /**
     * @var float
     */
    protected ?float $price = null;

    /**
     * @var string
     */
    protected ?string $priceUnit = null;

    /**
     * @var string
     */
    protected ?string $salesPromotion = null;

    /**
     * @var float
     */
    protected ?float $saving = null;

    /**
     * @var float
     */
    protected ?float $value = null;

    /**
     * @return string
     */
    public function getDailyMortgage(): ?string
    {
        return $this->dailyMortgage;
    }

    /**
     * @param string $dailyMortgage
     * @return self
     */
    public function setDailyMortgage(?string $dailyMortgage): self
    {
        $this->dailyMortgage = $dailyMortgage;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return self
     */
    public function setDiscount(?float $discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownPayment(): ?string
    {
        return $this->downPayment;
    }

    /**
     * @param string $downPayment
     * @return self
     */
    public function setDownPayment(?string $downPayment): self
    {
        $this->downPayment = $downPayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getMortgage(): ?string
    {
        return $this->mortgage;
    }

    /**
     * @param string $mortgage
     * @return self
     */
    public function setMortgage(?string $mortgage): self
    {
        $this->mortgage = $mortgage;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceUnit(): ?string
    {
        return $this->priceUnit;
    }

    /**
     * @param string $priceUnit
     * @return self
     */
    public function setPriceUnit(?string $priceUnit): self
    {
        $this->priceUnit = $priceUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesPromotion(): ?string
    {
        return $this->salesPromotion;
    }

    /**
     * @param string $salesPromotion
     * @return self
     */
    public function setSalesPromotion(?string $salesPromotion): self
    {
        $this->salesPromotion = $salesPromotion;
        return $this;
    }

    /**
     * @return float
     */
    public function getSaving(): ?float
    {
        return $this->saving;
    }

    /**
     * @param float $saving
     * @return self
     */
    public function setSaving(?float $saving): self
    {
        $this->saving = $saving;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
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
