<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceImage
     */
    protected ?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceImage $priceImage = null;

    /**
     * 价格项
     * @var \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceItemsInner[]
     */
    protected ?array $priceItems = null;

    /**
     * @return \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceImage
     */
    public function getPriceImage(): ?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceImage
    {
        return $this->priceImage;
    }

    /**
     * @param \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceImage $priceImage
     * @return self
     */
    public function setPriceImage(?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceImage $priceImage): self
    {
        $this->priceImage = $priceImage;
        return $this;
    }

    /**
     * 价格项
     * @return \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceItemsInner[]
     */
    public function getPriceItems(): ?array
    {
        return $this->priceItems;
    }

    /**
     * 价格项
     * @param \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceItemsInner[] $priceItems
     * @return self
     */
    public function setPriceItems(?array $priceItems): self
    {
        $this->priceItems = $priceItems;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->priceImage !== null) {
            $result['price_image'] = $this->priceImage;
        }
        if ($this->priceItems !== null) {
            $result['price_items'] = $this->priceItems;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['price_image'] ?? null) !== null && is_array($v)) {
            $obj->priceImage = \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceImage::fromArray($v);
        }
        if (($v = $data['price_items'] ?? null) !== null && is_array($v)) {
            $obj->priceItems = array_map(fn ($vv) => \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfoPriceInfoPriceItemsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
