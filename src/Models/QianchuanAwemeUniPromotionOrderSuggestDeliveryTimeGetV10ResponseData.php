<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderSuggestDeliveryTimeGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $suggestDeliveryTime = null;

    /**
     * @return float
     */
    public function getSuggestDeliveryTime(): ?float
    {
        return $this->suggestDeliveryTime;
    }

    /**
     * @param float $suggestDeliveryTime
     * @return self
     */
    public function setSuggestDeliveryTime(?float $suggestDeliveryTime): self
    {
        $this->suggestDeliveryTime = $suggestDeliveryTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->suggestDeliveryTime !== null) {
            $result['suggest_delivery_time'] = $this->suggestDeliveryTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['suggest_delivery_time'] ?? null) !== null) {
            $obj->suggestDeliveryTime = (float) $v;
        }
        return $obj;
    }
}
