<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentCreateCommonComponentV2RequestCommonComponent implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarComponentCreateCommonComponentV2RequestCommonComponentAnchorComponent
     */
    protected ?\Oceanengine\Models\StarComponentCreateCommonComponentV2RequestCommonComponentAnchorComponent $anchorComponent = null;

    /**
     * @var int
     */
    protected ?int $componentType = null;

    /**
     * @return \Oceanengine\Models\StarComponentCreateCommonComponentV2RequestCommonComponentAnchorComponent
     */
    public function getAnchorComponent(): ?\Oceanengine\Models\StarComponentCreateCommonComponentV2RequestCommonComponentAnchorComponent
    {
        return $this->anchorComponent;
    }

    /**
     * @param \Oceanengine\Models\StarComponentCreateCommonComponentV2RequestCommonComponentAnchorComponent $anchorComponent
     * @return self
     */
    public function setAnchorComponent(?\Oceanengine\Models\StarComponentCreateCommonComponentV2RequestCommonComponentAnchorComponent $anchorComponent): self
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
            $obj->anchorComponent = \Oceanengine\Models\StarComponentCreateCommonComponentV2RequestCommonComponentAnchorComponent::fromArray($v);
        }
        if (($v = $data['component_type'] ?? null) !== null) {
            $obj->componentType = (int) $v;
        }
        return $obj;
    }
}
