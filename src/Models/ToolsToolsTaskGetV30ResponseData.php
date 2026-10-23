<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsToolsTaskGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 后台任务list
     * @var \Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataTaskListInner[]
     */
    protected ?array $taskList = null;

    /**
     * @return \Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 后台任务list
     * @return \Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataTaskListInner[]
     */
    public function getTaskList(): ?array
    {
        return $this->taskList;
    }

    /**
     * 后台任务list
     * @param \Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataTaskListInner[] $taskList
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
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->taskList !== null) {
            $result['task_list'] = $this->taskList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['task_list'] ?? null) !== null && is_array($v)) {
            $obj->taskList = array_map(fn ($vv) => \Oceanengine\Models\ToolsToolsTaskGetV30ResponseDataTaskListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
