<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceItemsInner implements \JsonSerializable
{
    /**
     * 价格类型
     * @var string
     */
    protected ?string $priceType = null;

    /**
     * 价格值
     * @var string
     */
    protected ?string $priceValue = null;

    /**
     * 价格类型
     * @return string
     */
    public function getPriceType(): ?string
    {
        return $this->priceType;
    }

    /**
     * 价格类型
     * @param string $priceType
     * @return self
     */
    public function setPriceType(?string $priceType): self
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * 价格值
     * @return string
     */
    public function getPriceValue(): ?string
    {
        return $this->priceValue;
    }

    /**
     * 价格值
     * @param string $priceValue
     * @return self
     */
    public function setPriceValue(?string $priceValue): self
    {
        $this->priceValue = $priceValue;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->priceType !== null) {
            $result['price_type'] = $this->priceType;
        }
        if ($this->priceValue !== null) {
            $result['price_value'] = $this->priceValue;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['price_type'] ?? null) !== null) {
            $obj->priceType = (string) $v;
        }
        if (($v = $data['price_value'] ?? null) !== null) {
            $obj->priceValue = (string) $v;
        }
        return $obj;
    }
}
