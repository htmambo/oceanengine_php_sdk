<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AssetsCreativeComponentGetV2Filtering implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $componentId = null;

    /**
     * @var string
     */
    protected ?string $componentName = null;

    /**
     * @var \Oceanengine\Models\AssetsCreativeComponentGetV2FilteringComponentTypes[]
     */
    protected ?array $componentTypes = null;

    /**
     * @var string[]
     */
    protected ?array $skinTypes = null;

    /**
     * @var \Oceanengine\Models\AssetsCreativeComponentGetV2FilteringStatus[]
     */
    protected ?array $status = null;

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
     * @return string
     */
    public function getComponentName(): ?string
    {
        return $this->componentName;
    }

    /**
     * @param string $componentName
     * @return self
     */
    public function setComponentName(?string $componentName): self
    {
        $this->componentName = $componentName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AssetsCreativeComponentGetV2FilteringComponentTypes[]
     */
    public function getComponentTypes(): ?array
    {
        return $this->componentTypes;
    }

    /**
     * @param \Oceanengine\Models\AssetsCreativeComponentGetV2FilteringComponentTypes[] $componentTypes
     * @return self
     */
    public function setComponentTypes(?array $componentTypes): self
    {
        $this->componentTypes = $componentTypes;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSkinTypes(): ?array
    {
        return $this->skinTypes;
    }

    /**
     * @param string[] $skinTypes
     * @return self
     */
    public function setSkinTypes(?array $skinTypes): self
    {
        $this->skinTypes = $skinTypes;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AssetsCreativeComponentGetV2FilteringStatus[]
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AssetsCreativeComponentGetV2FilteringStatus[] $status
     * @return self
     */
    public function setStatus(?array $status): self
    {
        $this->status = $status;
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
        if ($this->componentName !== null) {
            $result['component_name'] = $this->componentName;
        }
        if ($this->componentTypes !== null) {
            $result['component_types'] = $this->componentTypes;
        }
        if ($this->skinTypes !== null) {
            $result['skin_types'] = $this->skinTypes;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['component_id'] ?? null) !== null) {
            $obj->componentId = (int) $v;
        }
        if (($v = $data['component_name'] ?? null) !== null) {
            $obj->componentName = (string) $v;
        }
        if (($v = $data['component_types'] ?? null) !== null && is_array($v)) {
            $obj->componentTypes = $v;
        }
        if (($v = $data['skin_types'] ?? null) !== null && is_array($v)) {
            $obj->skinTypes = $v;
        }
        if (($v = $data['status'] ?? null) !== null && is_array($v)) {
            $obj->status = $v;
        }
        return $obj;
    }
}
