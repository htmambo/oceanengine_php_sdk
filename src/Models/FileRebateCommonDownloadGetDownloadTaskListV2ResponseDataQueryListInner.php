<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileRebateCommonDownloadGetDownloadTaskListV2ResponseDataQueryListInner implements \JsonSerializable
{
    /**
     * 查询ID
     * @var string
     */
    protected ?string $queryId = null;

    /**
     * 查询状态 1- 初始化，2-运行中，3-成功，4-失败
     * @var int
     */
    protected ?int $queryStatus = null;

    /**
     * 任务ID列表
     * @var \Oceanengine\Models\FileRebateCommonDownloadGetDownloadTaskListV2ResponseDataQueryListInnerTaskListInner[]
     */
    protected ?array $taskList = null;

    /**
     * 查询ID
     * @return string
     */
    public function getQueryId(): ?string
    {
        return $this->queryId;
    }

    /**
     * 查询ID
     * @param string $queryId
     * @return self
     */
    public function setQueryId(?string $queryId): self
    {
        $this->queryId = $queryId;
        return $this;
    }

    /**
     * 查询状态 1- 初始化，2-运行中，3-成功，4-失败
     * @return int
     */
    public function getQueryStatus(): ?int
    {
        return $this->queryStatus;
    }

    /**
     * 查询状态 1- 初始化，2-运行中，3-成功，4-失败
     * @param int $queryStatus
     * @return self
     */
    public function setQueryStatus(?int $queryStatus): self
    {
        $this->queryStatus = $queryStatus;
        return $this;
    }

    /**
     * 任务ID列表
     * @return \Oceanengine\Models\FileRebateCommonDownloadGetDownloadTaskListV2ResponseDataQueryListInnerTaskListInner[]
     */
    public function getTaskList(): ?array
    {
        return $this->taskList;
    }

    /**
     * 任务ID列表
     * @param \Oceanengine\Models\FileRebateCommonDownloadGetDownloadTaskListV2ResponseDataQueryListInnerTaskListInner[] $taskList
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
        if ($this->queryId !== null) {
            $result['query_id'] = $this->queryId;
        }
        if ($this->queryStatus !== null) {
            $result['query_status'] = $this->queryStatus;
        }
        if ($this->taskList !== null) {
            $result['task_list'] = $this->taskList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['query_id'] ?? null) !== null) {
            $obj->queryId = (string) $v;
        }
        if (($v = $data['query_status'] ?? null) !== null) {
            $obj->queryStatus = (int) $v;
        }
        if (($v = $data['task_list'] ?? null) !== null && is_array($v)) {
            $obj->taskList = array_map(fn ($vv) => \Oceanengine\Models\FileRebateCommonDownloadGetDownloadTaskListV2ResponseDataQueryListInnerTaskListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
