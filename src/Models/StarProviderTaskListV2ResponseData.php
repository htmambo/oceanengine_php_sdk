<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarProviderTaskListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarProviderTaskListV2ResponseDataPagination
     */
    protected ?\Oceanengine\Models\StarProviderTaskListV2ResponseDataPagination $pagination = null;

    /**
     * @var \Oceanengine\Models\StarProviderTaskListV2ResponseDataTaskListInner[]
     */
    protected ?array $taskList = null;

    /**
     * @return \Oceanengine\Models\StarProviderTaskListV2ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\StarProviderTaskListV2ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\StarProviderTaskListV2ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\StarProviderTaskListV2ResponseDataPagination $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarProviderTaskListV2ResponseDataTaskListInner[]
     */
    public function getTaskList(): ?array
    {
        return $this->taskList;
    }

    /**
     * @param \Oceanengine\Models\StarProviderTaskListV2ResponseDataTaskListInner[] $taskList
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
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        if ($this->taskList !== null) {
            $result['task_list'] = $this->taskList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\StarProviderTaskListV2ResponseDataPagination::fromArray($v);
        }
        if (($v = $data['task_list'] ?? null) !== null && is_array($v)) {
            $obj->taskList = array_map(fn ($vv) => \Oceanengine\Models\StarProviderTaskListV2ResponseDataTaskListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
