<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList implements \JsonSerializable
{
    /**
     * eg: [\"2006-01-02\"] 可以跨天填写
     * @var string[]
     */
    protected ?array $dayList = null;

    /**
     * eg: [\"2006-01-02\"] 可以跨天填写
     * @return string[]
     */
    public function getDayList(): ?array
    {
        return $this->dayList;
    }

    /**
     * eg: [\"2006-01-02\"] 可以跨天填写
     * @param string[] $dayList
     * @return self
     */
    public function setDayList(?array $dayList): self
    {
        $this->dayList = $dayList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dayList !== null) {
            $result['day_list'] = $this->dayList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['day_list'] ?? null) !== null && is_array($v)) {
            $obj->dayList = $v;
        }
        return $obj;
    }
}
