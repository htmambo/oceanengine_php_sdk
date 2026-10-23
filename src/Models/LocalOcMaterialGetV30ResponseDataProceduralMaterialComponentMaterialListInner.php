<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcMaterialGetV30ResponseDataProceduralMaterialComponentMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $componentId = null;

    /**
     * @return string
     */
    public function getComponentId(): ?string
    {
        return $this->componentId;
    }

    /**
     * @param string $componentId
     * @return self
     */
    public function setComponentId(?string $componentId): self
    {
        $this->componentId = $componentId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->componentId !== null) {
            $result['component_id'] = $this->componentId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['component_id'] ?? null) !== null) {
            $obj->componentId = (string) $v;
        }
        return $obj;
    }
}
