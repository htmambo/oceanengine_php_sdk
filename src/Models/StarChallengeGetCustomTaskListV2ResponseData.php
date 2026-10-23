<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeGetCustomTaskListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 任务列表
     * @var \Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataTaskListInner[]
     */
    protected ?array $taskList = null;

    /**
     * @return \Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 任务列表
     * @return \Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataTaskListInner[]
     */
    public function getTaskList(): ?array
    {
        return $this->taskList;
    }

    /**
     * 任务列表
     * @param \Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataTaskListInner[] $taskList
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
            $obj->pageInfo = \Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['task_list'] ?? null) !== null && is_array($v)) {
            $obj->taskList = array_map(fn ($vv) => \Oceanengine\Models\StarChallengeGetCustomTaskListV2ResponseDataTaskListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
