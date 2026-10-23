<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveSubmitV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30ResponseDataTasksInner[]
     */
    protected ?array $tasks = null;

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30ResponseDataTasksInner[]
     */
    public function getTasks(): ?array
    {
        return $this->tasks;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30ResponseDataTasksInner[] $tasks
     * @return self
     */
    public function setTasks(?array $tasks): self
    {
        $this->tasks = $tasks;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->tasks !== null) {
            $result['tasks'] = $this->tasks;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['tasks'] ?? null) !== null && is_array($v)) {
            $obj->tasks = array_map(fn ($vv) => \Oceanengine\Models\ToolsHotMaterialDeriveSubmitV30ResponseDataTasksInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
