<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentUpdateCommonComponentV2RequestCommonComponent implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponentAnchorComponent
     */
    protected ?\Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponentAnchorComponent $anchorComponent = null;

    /**
     * @var int
     */
    protected ?int $componentType = null;

    /**
     * @return \Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponentAnchorComponent
     */
    public function getAnchorComponent(): ?\Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponentAnchorComponent
    {
        return $this->anchorComponent;
    }

    /**
     * @param \Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponentAnchorComponent $anchorComponent
     * @return self
     */
    public function setAnchorComponent(?\Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponentAnchorComponent $anchorComponent): self
    {
        $this->anchorComponent = $anchorComponent;
        return $this;
    }

    /**
     * @return int
     */
    public function getComponentType(): ?int
    {
        return $this->componentType;
    }

    /**
     * @param int $componentType
     * @return self
     */
    public function setComponentType(?int $componentType): self
    {
        $this->componentType = $componentType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorComponent !== null) {
            $result['anchor_component'] = $this->anchorComponent;
        }
        if ($this->componentType !== null) {
            $result['component_type'] = $this->componentType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_component'] ?? null) !== null && is_array($v)) {
            $obj->anchorComponent = \Oceanengine\Models\StarComponentUpdateCommonComponentV2RequestCommonComponentAnchorComponent::fromArray($v);
        }
        if (($v = $data['component_type'] ?? null) !== null) {
            $obj->componentType = (int) $v;
        }
        return $obj;
    }
}
