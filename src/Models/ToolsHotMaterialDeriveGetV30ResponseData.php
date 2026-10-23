<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveGetV30ResponseDataTaskDetailsInner[]
     */
    protected ?array $taskDetails = null;

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveGetV30ResponseDataTaskDetailsInner[]
     */
    public function getTaskDetails(): ?array
    {
        return $this->taskDetails;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveGetV30ResponseDataTaskDetailsInner[] $taskDetails
     * @return self
     */
    public function setTaskDetails(?array $taskDetails): self
    {
        $this->taskDetails = $taskDetails;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->taskDetails !== null) {
            $result['task_details'] = $this->taskDetails;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['task_details'] ?? null) !== null && is_array($v)) {
            $obj->taskDetails = array_map(fn ($vv) => \Oceanengine\Models\ToolsHotMaterialDeriveGetV30ResponseDataTaskDetailsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
