<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderDetailGetV10ResponseDataProductInfo implements \JsonSerializable
{
    /**
     * 折扣价区间最大值，单位为元
     * @var float
     */
    protected ?float $discountHigherPrice = null;

    /**
     * 折扣价区间最小值，单位为元
     * @var float
     */
    protected ?float $discountLowerPrice = null;

    /**
     * 商品id
     * @var int
     */
    protected ?int $id = null;

    /**
     * 商品主图
     * @var string
     */
    protected ?string $img = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 折扣价区间最大值，单位为元
     * @return float
     */
    public function getDiscountHigherPrice(): ?float
    {
        return $this->discountHigherPrice;
    }

    /**
     * 折扣价区间最大值，单位为元
     * @param float $discountHigherPrice
     * @return self
     */
    public function setDiscountHigherPrice(?float $discountHigherPrice): self
    {
        $this->discountHigherPrice = $discountHigherPrice;
        return $this;
    }

    /**
     * 折扣价区间最小值，单位为元
     * @return float
     */
    public function getDiscountLowerPrice(): ?float
    {
        return $this->discountLowerPrice;
    }

    /**
     * 折扣价区间最小值，单位为元
     * @param float $discountLowerPrice
     * @return self
     */
    public function setDiscountLowerPrice(?float $discountLowerPrice): self
    {
        $this->discountLowerPrice = $discountLowerPrice;
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
     * 商品主图
     * @return string
     */
    public function getImg(): ?string
    {
        return $this->img;
    }

    /**
     * 商品主图
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->discountHigherPrice !== null) {
            $result['discount_higher_price'] = $this->discountHigherPrice;
        }
        if ($this->discountLowerPrice !== null) {
            $result['discount_lower_price'] = $this->discountLowerPrice;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->img !== null) {
            $result['img'] = $this->img;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['discount_higher_price'] ?? null) !== null) {
            $obj->discountHigherPrice = (float) $v;
        }
        if (($v = $data['discount_lower_price'] ?? null) !== null) {
            $obj->discountLowerPrice = (float) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['img'] ?? null) !== null) {
            $obj->img = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
