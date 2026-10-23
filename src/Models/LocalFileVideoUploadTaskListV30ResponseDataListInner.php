<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileVideoUploadTaskListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 当任务失败后，会返回失败信息
     * @var string
     */
    protected ?string $errorMsg = null;

    /**
     * @var \Oceanengine\Models\LocalFileVideoUploadTaskListV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @var \Oceanengine\Models\LocalFileVideoUploadTaskListV30ResponseDataListInnerVideoInfo
     */
    protected ?\Oceanengine\Models\LocalFileVideoUploadTaskListV30ResponseDataListInnerVideoInfo $videoInfo = null;

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 当任务失败后，会返回失败信息
     * @return string
     */
    public function getErrorMsg(): ?string
    {
        return $this->errorMsg;
    }

    /**
     * 当任务失败后，会返回失败信息
     * @param string $errorMsg
     * @return self
     */
    public function setErrorMsg(?string $errorMsg): self
    {
        $this->errorMsg = $errorMsg;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileVideoUploadTaskListV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoUploadTaskListV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileVideoUploadTaskListV30ResponseDataListInnerVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\LocalFileVideoUploadTaskListV30ResponseDataListInnerVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoUploadTaskListV30ResponseDataListInnerVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\LocalFileVideoUploadTaskListV30ResponseDataListInnerVideoInfo $videoInfo): self
    {
        $this->videoInfo = $videoInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->errorMsg !== null) {
            $result['error_msg'] = $this->errorMsg;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        if ($this->videoInfo !== null) {
            $result['video_info'] = $this->videoInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['error_msg'] ?? null) !== null) {
            $obj->errorMsg = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\LocalFileVideoUploadTaskListV30ResponseDataListInnerVideoInfo::fromArray($v);
        }
        return $obj;
    }
}
