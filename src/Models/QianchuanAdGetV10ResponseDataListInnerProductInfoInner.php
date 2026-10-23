<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdGetV10ResponseDataListInnerProductInfoInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $channelId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10DataListProductInfoChannelType
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
     * @var float
     */
    protected ?float $discountPrice = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $img = null;

    /**
     * @var float
     */
    protected ?float $marketPrice = null;

    /**
     * @var string
     */
    protected ?string $name = null;

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
     * @return \Oceanengine\Models\QianchuanAdGetV10DataListProductInfoChannelType
     */
    public function getChannelType(): ?string
    {
        return $this->channelType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10DataListProductInfoChannelType $channelType
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
     * @return float
     */
    public function getDiscountPrice(): ?float
    {
        return $this->discountPrice;
    }

    /**
     * @param float $discountPrice
     * @return self
     */
    public function setDiscountPrice(?float $discountPrice): self
    {
        $this->discountPrice = $discountPrice;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->img !== null) {
            $result['img'] = $this->img;
        }
        if ($this->marketPrice !== null) {
            $result['market_price'] = $this->marketPrice;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
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
            $obj->discountPrice = (float) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['img'] ?? null) !== null) {
            $obj->img = (string) $v;
        }
        if (($v = $data['market_price'] ?? null) !== null) {
            $obj->marketPrice = (float) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
