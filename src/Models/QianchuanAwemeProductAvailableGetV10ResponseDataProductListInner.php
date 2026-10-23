<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeProductAvailableGetV10ResponseDataProductListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $categoryName = null;

    /**
     * @var int
     */
    protected ?int $channelId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeProductAvailableGetV10DataProductListChannelType
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
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $img = null;

    /**
     * @var int
     */
    protected ?int $inventory = null;

    /**
     * @var float
     */
    protected ?float $marketingPrice = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $productRate = null;

    /**
     * @var bool
     */
    protected ?bool $supportProductNewOpen = null;

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
     * @return \Oceanengine\Models\QianchuanAwemeProductAvailableGetV10DataProductListChannelType
     */
    public function getChannelType(): ?string
    {
        return $this->channelType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeProductAvailableGetV10DataProductListChannelType $channelType
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
    public function getMarketingPrice(): ?float
    {
        return $this->marketingPrice;
    }

    /**
     * @param float $marketingPrice
     * @return self
     */
    public function setMarketingPrice(?float $marketingPrice): self
    {
        $this->marketingPrice = $marketingPrice;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->img !== null) {
            $result['img'] = $this->img;
        }
        if ($this->inventory !== null) {
            $result['inventory'] = $this->inventory;
        }
        if ($this->marketingPrice !== null) {
            $result['marketing_price'] = $this->marketingPrice;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->productRate !== null) {
            $result['product_rate'] = $this->productRate;
        }
        if ($this->supportProductNewOpen !== null) {
            $result['support_product_new_open'] = $this->supportProductNewOpen;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
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
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['img'] ?? null) !== null) {
            $obj->img = (string) $v;
        }
        if (($v = $data['inventory'] ?? null) !== null) {
            $obj->inventory = (int) $v;
        }
        if (($v = $data['marketing_price'] ?? null) !== null) {
            $obj->marketingPrice = (float) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['product_rate'] ?? null) !== null) {
            $obj->productRate = (int) $v;
        }
        if (($v = $data['support_product_new_open'] ?? null) !== null) {
            $obj->supportProductNewOpen = (bool) $v;
        }
        return $obj;
    }
}
