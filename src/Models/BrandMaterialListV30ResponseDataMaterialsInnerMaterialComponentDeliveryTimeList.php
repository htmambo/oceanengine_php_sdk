<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDeliveryTimeList implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $dayList = null;

    /**
     * @return string[]
     */
    public function getDayList(): ?array
    {
        return $this->dayList;
    }

    /**
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
