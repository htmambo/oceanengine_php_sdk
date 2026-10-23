<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AssetsCreativeComponentUpdateV2RequestComponentInfo implements \JsonSerializable
{
    /**
     * @var array<string,mixed>
     */
    protected ?array $componentData = null;

    /**
     * @var string
     */
    protected ?string $componentName = null;

    /**
     * @var \Oceanengine\Models\AssetsCreativeComponentUpdateV2ComponentInfoComponentType
     */
    protected ?string $componentType = null;

    /**
     * @return array<string,mixed>
     */
    public function getComponentData(): ?array
    {
        return $this->componentData;
    }

    /**
     * @param array<string,mixed> $componentData
     * @return self
     */
    public function setComponentData(?array $componentData): self
    {
        $this->componentData = $componentData;
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
     * @return \Oceanengine\Models\AssetsCreativeComponentUpdateV2ComponentInfoComponentType
     */
    public function getComponentType(): ?string
    {
        return $this->componentType;
    }

    /**
     * @param \Oceanengine\Models\AssetsCreativeComponentUpdateV2ComponentInfoComponentType $componentType
     * @return self
     */
    public function setComponentType(?string $componentType): self
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
        if ($this->componentData !== null) {
            $result['component_data'] = $this->componentData;
        }
        if ($this->componentName !== null) {
            $result['component_name'] = $this->componentName;
        }
        if ($this->componentType !== null) {
            $result['component_type'] = $this->componentType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['component_data'] ?? null) !== null && is_array($v)) {
            $obj->componentData = $v;
        }
        if (($v = $data['component_name'] ?? null) !== null) {
            $obj->componentName = (string) $v;
        }
        if (($v = $data['component_type'] ?? null) !== null) {
            $obj->componentType = (string) $v;
        }
        return $obj;
    }
}
