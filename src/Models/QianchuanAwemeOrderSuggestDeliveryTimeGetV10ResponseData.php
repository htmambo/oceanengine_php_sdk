<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderSuggestDeliveryTimeGetV10ResponseData implements \JsonSerializable
{
    /**
     * 建议追加投放时长 - 短视频：xx天 - 直播：xx小时
     * @var float
     */
    protected ?float $suggestDeliveryTime = null;

    /**
     * 建议追加投放时长 - 短视频：xx天 - 直播：xx小时
     * @return float
     */
    public function getSuggestDeliveryTime(): ?float
    {
        return $this->suggestDeliveryTime;
    }

    /**
     * 建议追加投放时长 - 短视频：xx天 - 直播：xx小时
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
