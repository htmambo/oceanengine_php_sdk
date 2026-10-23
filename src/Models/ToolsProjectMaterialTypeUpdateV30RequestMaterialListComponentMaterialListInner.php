<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectMaterialTypeUpdateV30RequestMaterialListComponentMaterialListInner implements \JsonSerializable
{
    /**
     * 组件id，取值来源【查询组件列表】，支持横版/竖版视频
     * @var int
     */
    protected ?int $componentId = null;

    /**
     * 组件id，取值来源【查询组件列表】，支持横版/竖版视频
     * @return int
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * 组件id，取值来源【查询组件列表】，支持横版/竖版视频
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
