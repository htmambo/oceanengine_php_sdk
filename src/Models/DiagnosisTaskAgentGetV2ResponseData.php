<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DiagnosisTaskAgentGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DiagnosisTaskAgentGetV2ResponseDataTaskListInner[]
     */
    protected ?array $taskList = null;

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAgentGetV2ResponseDataTaskListInner[]
     */
    public function getTaskList(): ?array
    {
        return $this->taskList;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAgentGetV2ResponseDataTaskListInner[] $taskList
     * @return self
     */
    public function setTaskList(?array $taskList): self
    {
        $this->taskList = $taskList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->taskList !== null) {
            $result['task_list'] = $this->taskList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['task_list'] ?? null) !== null && is_array($v)) {
            $obj->taskList = array_map(fn ($vv) => \Oceanengine\Models\DiagnosisTaskAgentGetV2ResponseDataTaskListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
