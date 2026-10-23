<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanLqAdGetV10ResponseData implements \JsonSerializable
{
    /**
     * 低质计划ID列表
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * 低质计划ID列表
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * 低质计划ID列表
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        return $obj;
    }
}
