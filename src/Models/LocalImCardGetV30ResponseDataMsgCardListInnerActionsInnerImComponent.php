<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerImComponent implements \JsonSerializable
{
    /**
     * 组件id
     * @var string
     */
    protected ?string $componentId = null;

    /**
     * 组件名称
     * @var string
     */
    protected ?string $componentName = null;

    /**
     * 其他扩展字段
     * @var string
     */
    protected ?string $extra = null;

    /**
     * 组件类型：industry_advanced_online_reserve-高级在线预约
     * @var string
     */
    protected ?string $type = null;

    /**
     * 组件id
     * @return string
     */
    public function getComponentId(): ?string
    {
        return $this->componentId;
    }

    /**
     * 组件id
     * @param string $componentId
     * @return self
     */
    public function setComponentId(?string $componentId): self
    {
        $this->componentId = $componentId;
        return $this;
    }

    /**
     * 组件名称
     * @return string
     */
    public function getComponentName(): ?string
    {
        return $this->componentName;
    }

    /**
     * 组件名称
     * @param string $componentName
     * @return self
     */
    public function setComponentName(?string $componentName): self
    {
        $this->componentName = $componentName;
        return $this;
    }

    /**
     * 其他扩展字段
     * @return string
     */
    public function getExtra(): ?string
    {
        return $this->extra;
    }

    /**
     * 其他扩展字段
     * @param string $extra
     * @return self
     */
    public function setExtra(?string $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * 组件类型：industry_advanced_online_reserve-高级在线预约
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * 组件类型：industry_advanced_online_reserve-高级在线预约
     * @param string $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
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
        if ($this->extra !== null) {
            $result['extra'] = $this->extra;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['component_id'] ?? null) !== null) {
            $obj->componentId = (string) $v;
        }
        if (($v = $data['component_name'] ?? null) !== null) {
            $obj->componentName = (string) $v;
        }
        if (($v = $data['extra'] ?? null) !== null) {
            $obj->extra = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
