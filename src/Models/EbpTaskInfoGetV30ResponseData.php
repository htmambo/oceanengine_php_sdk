<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpTaskInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 任务详情，每个账户执行情况，只披露已完成账户的情况
     * @var \Oceanengine\Models\EbpTaskInfoGetV30ResponseDataAccountRowsInner[]
     */
    protected ?array $accountRows = null;

    /**
     * 任务失败数量
     * @var int
     */
    protected ?int $failCnt = null;

    /**
     * 任务成功数量
     * @var int
     */
    protected ?int $successCnt = null;

    /**
     * 任务ID
     * @var string
     */
    protected ?string $taskId = null;

    /**
     * @var \Oceanengine\Models\EbpTaskInfoGetV30DataTaskStatus
     */
    protected ?string $taskStatus = null;

    /**
     * 任务总数
     * @var int
     */
    protected ?int $totalCnt = null;

    /**
     * 任务详情，每个账户执行情况，只披露已完成账户的情况
     * @return \Oceanengine\Models\EbpTaskInfoGetV30ResponseDataAccountRowsInner[]
     */
    public function getAccountRows(): ?array
    {
        return $this->accountRows;
    }

    /**
     * 任务详情，每个账户执行情况，只披露已完成账户的情况
     * @param \Oceanengine\Models\EbpTaskInfoGetV30ResponseDataAccountRowsInner[] $accountRows
     * @return self
     */
    public function setAccountRows(?array $accountRows): self
    {
        $this->accountRows = $accountRows;
        return $this;
    }

    /**
     * 任务失败数量
     * @return int
     */
    public function getFailCnt(): ?int
    {
        return $this->failCnt;
    }

    /**
     * 任务失败数量
     * @param int $failCnt
     * @return self
     */
    public function setFailCnt(?int $failCnt): self
    {
        $this->failCnt = $failCnt;
        return $this;
    }

    /**
     * 任务成功数量
     * @return int
     */
    public function getSuccessCnt(): ?int
    {
        return $this->successCnt;
    }

    /**
     * 任务成功数量
     * @param int $successCnt
     * @return self
     */
    public function setSuccessCnt(?int $successCnt): self
    {
        $this->successCnt = $successCnt;
        return $this;
    }

    /**
     * 任务ID
     * @return string
     */
    public function getTaskId(): ?string
    {
        return $this->taskId;
    }

    /**
     * 任务ID
     * @param string $taskId
     * @return self
     */
    public function setTaskId(?string $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpTaskInfoGetV30DataTaskStatus
     */
    public function getTaskStatus(): ?string
    {
        return $this->taskStatus;
    }

    /**
     * @param \Oceanengine\Models\EbpTaskInfoGetV30DataTaskStatus $taskStatus
     * @return self
     */
    public function setTaskStatus(?string $taskStatus): self
    {
        $this->taskStatus = $taskStatus;
        return $this;
    }

    /**
     * 任务总数
     * @return int
     */
    public function getTotalCnt(): ?int
    {
        return $this->totalCnt;
    }

    /**
     * 任务总数
     * @param int $totalCnt
     * @return self
     */
    public function setTotalCnt(?int $totalCnt): self
    {
        $this->totalCnt = $totalCnt;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountRows !== null) {
            $result['account_rows'] = $this->accountRows;
        }
        if ($this->failCnt !== null) {
            $result['fail_cnt'] = $this->failCnt;
        }
        if ($this->successCnt !== null) {
            $result['success_cnt'] = $this->successCnt;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        if ($this->taskStatus !== null) {
            $result['task_status'] = $this->taskStatus;
        }
        if ($this->totalCnt !== null) {
            $result['total_cnt'] = $this->totalCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_rows'] ?? null) !== null && is_array($v)) {
            $obj->accountRows = array_map(fn ($vv) => \Oceanengine\Models\EbpTaskInfoGetV30ResponseDataAccountRowsInner::fromArray($vv), $v);
        }
        if (($v = $data['fail_cnt'] ?? null) !== null) {
            $obj->failCnt = (int) $v;
        }
        if (($v = $data['success_cnt'] ?? null) !== null) {
            $obj->successCnt = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (string) $v;
        }
        if (($v = $data['task_status'] ?? null) !== null) {
            $obj->taskStatus = (string) $v;
        }
        if (($v = $data['total_cnt'] ?? null) !== null) {
            $obj->totalCnt = (int) $v;
        }
        return $obj;
    }
}
