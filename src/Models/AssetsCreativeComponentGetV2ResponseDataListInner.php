<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AssetsCreativeComponentGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var array<string,mixed>
     */
    protected ?array $componentData = null;

    /**
     * @var int
     */
    protected ?int $componentId = null;

    /**
     * @var string
     */
    protected ?string $componentName = null;

    /**
     * @var \Oceanengine\Models\AssetsCreativeComponentGetV2DataListComponentType
     */
    protected ?string $componentType = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\AssetsCreativeComponentGetV2DataListStatus
     */
    protected ?string $status = null;

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
     * @return \Oceanengine\Models\AssetsCreativeComponentGetV2DataListComponentType
     */
    public function getComponentType(): ?string
    {
        return $this->componentType;
    }

    /**
     * @param \Oceanengine\Models\AssetsCreativeComponentGetV2DataListComponentType $componentType
     * @return self
     */
    public function setComponentType(?string $componentType): self
    {
        $this->componentType = $componentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AssetsCreativeComponentGetV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AssetsCreativeComponentGetV2DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
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
        if ($this->componentData !== null) {
            $result['component_data'] = $this->componentData;
        }
        if ($this->componentId !== null) {
            $result['component_id'] = $this->componentId;
        }
        if ($this->componentName !== null) {
            $result['component_name'] = $this->componentName;
        }
        if ($this->componentType !== null) {
            $result['component_type'] = $this->componentType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['component_data'] ?? null) !== null && is_array($v)) {
            $obj->componentData = $v;
        }
        if (($v = $data['component_id'] ?? null) !== null) {
            $obj->componentId = (int) $v;
        }
        if (($v = $data['component_name'] ?? null) !== null) {
            $obj->componentName = (string) $v;
        }
        if (($v = $data['component_type'] ?? null) !== null) {
            $obj->componentType = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
