<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30RequestPromotionRelatedProductInnerComponentMaterialListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $componentId = null;

    /**
     * @return int
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * @param int $componentId
     * @return self
     */
    public function setComponentId(?int $componentId): self
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
            $obj->componentId = (int) $v;
        }
        return $obj;
    }
}
