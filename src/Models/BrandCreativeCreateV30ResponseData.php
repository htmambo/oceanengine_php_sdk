<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 创意id列表
     * @var int[]
     */
    protected ?array $creativeIds = null;

    /**
     * 创意id列表
     * @return int[]
     */
    public function getCreativeIds(): ?array
    {
        return $this->creativeIds;
    }

    /**
     * 创意id列表
     * @param int[] $creativeIds
     * @return self
     */
    public function setCreativeIds(?array $creativeIds): self
    {
        $this->creativeIds = $creativeIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeIds !== null) {
            $result['creative_ids'] = $this->creativeIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_ids'] ?? null) !== null && is_array($v)) {
            $obj->creativeIds = $v;
        }
        return $obj;
    }
}
