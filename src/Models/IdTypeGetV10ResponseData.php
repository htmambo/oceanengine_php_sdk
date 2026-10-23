<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class IdTypeGetV10ResponseData implements \JsonSerializable
{
    /**
     * 命中的实体列表
     * @var \Oceanengine\Models\IdTypeGetV10ResponseDataEntitiesInner[]
     */
    protected ?array $entities = null;

    /**
     * 命中的实体列表
     * @return \Oceanengine\Models\IdTypeGetV10ResponseDataEntitiesInner[]
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * 命中的实体列表
     * @param \Oceanengine\Models\IdTypeGetV10ResponseDataEntitiesInner[] $entities
     * @return self
     */
    public function setEntities(?array $entities): self
    {
        $this->entities = $entities;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->entities !== null) {
            $result['entities'] = $this->entities;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['entities'] ?? null) !== null && is_array($v)) {
            $obj->entities = array_map(fn ($vv) => \Oceanengine\Models\IdTypeGetV10ResponseDataEntitiesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
