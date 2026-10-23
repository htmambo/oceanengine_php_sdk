<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdBillingUniqueIdGetV30ResponseData implements \JsonSerializable
{
    /**
     * 唯一键列表
     * @var int[]
     */
    protected ?array $uniqueIdList = null;

    /**
     * 唯一键列表
     * @return int[]
     */
    public function getUniqueIdList(): ?array
    {
        return $this->uniqueIdList;
    }

    /**
     * 唯一键列表
     * @param int[] $uniqueIdList
     * @return self
     */
    public function setUniqueIdList(?array $uniqueIdList): self
    {
        $this->uniqueIdList = $uniqueIdList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->uniqueIdList !== null) {
            $result['unique_id_list'] = $this->uniqueIdList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['unique_id_list'] ?? null) !== null && is_array($v)) {
            $obj->uniqueIdList = $v;
        }
        return $obj;
    }
}
