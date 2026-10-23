<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarTaskListByProjectV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarTaskListByProjectV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarTaskListByProjectV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\StarTaskListByProjectV2ResponseDataProjectTasksInner[]
     */
    protected ?array $projectTasks = null;

    /**
     * @return \Oceanengine\Models\StarTaskListByProjectV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarTaskListByProjectV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarTaskListByProjectV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarTaskListByProjectV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarTaskListByProjectV2ResponseDataProjectTasksInner[]
     */
    public function getProjectTasks(): ?array
    {
        return $this->projectTasks;
    }

    /**
     * @param \Oceanengine\Models\StarTaskListByProjectV2ResponseDataProjectTasksInner[] $projectTasks
     * @return self
     */
    public function setProjectTasks(?array $projectTasks): self
    {
        $this->projectTasks = $projectTasks;
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
        if ($this->projectTasks !== null) {
            $result['project_tasks'] = $this->projectTasks;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarTaskListByProjectV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['project_tasks'] ?? null) !== null && is_array($v)) {
            $obj->projectTasks = array_map(fn ($vv) => \Oceanengine\Models\StarTaskListByProjectV2ResponseDataProjectTasksInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
