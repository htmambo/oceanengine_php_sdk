<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AsyncTaskCreateV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string
     */
    protected ?string $errMsg = null;

    /**
     * @var int
     */
    protected ?int $fileSize = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @var string
     */
    protected ?string $taskName = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $taskParams = null;

    /**
     * @var string
     */
    protected ?string $taskStatus = null;

    /**
     * @var string
     */
    protected ?string $taskType = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

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
     * @return string
     */
    public function getErrMsg(): ?string
    {
        return $this->errMsg;
    }

    /**
     * @param string $errMsg
     * @return self
     */
    public function setErrMsg(?string $errMsg): self
    {
        $this->errMsg = $errMsg;
        return $this;
    }

    /**
     * @return int
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    /**
     * @param int $fileSize
     * @return self
     */
    public function setFileSize(?int $fileSize): self
    {
        $this->fileSize = $fileSize;
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
     * @return string
     */
    public function getTaskName(): ?string
    {
        return $this->taskName;
    }

    /**
     * @param string $taskName
     * @return self
     */
    public function setTaskName(?string $taskName): self
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    public function getTaskParams(): ?array
    {
        return $this->taskParams;
    }

    /**
     * @param array<string,mixed> $taskParams
     * @return self
     */
    public function setTaskParams(?array $taskParams): self
    {
        $this->taskParams = $taskParams;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskStatus(): ?string
    {
        return $this->taskStatus;
    }

    /**
     * @param string $taskStatus
     * @return self
     */
    public function setTaskStatus(?string $taskStatus): self
    {
        $this->taskStatus = $taskStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskType(): ?string
    {
        return $this->taskType;
    }

    /**
     * @param string $taskType
     * @return self
     */
    public function setTaskType(?string $taskType): self
    {
        $this->taskType = $taskType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->errMsg !== null) {
            $result['err_msg'] = $this->errMsg;
        }
        if ($this->fileSize !== null) {
            $result['file_size'] = $this->fileSize;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        if ($this->taskName !== null) {
            $result['task_name'] = $this->taskName;
        }
        if ($this->taskParams !== null) {
            $result['task_params'] = $this->taskParams;
        }
        if ($this->taskStatus !== null) {
            $result['task_status'] = $this->taskStatus;
        }
        if ($this->taskType !== null) {
            $result['task_type'] = $this->taskType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['err_msg'] ?? null) !== null) {
            $obj->errMsg = (string) $v;
        }
        if (($v = $data['file_size'] ?? null) !== null) {
            $obj->fileSize = (int) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        if (($v = $data['task_name'] ?? null) !== null) {
            $obj->taskName = (string) $v;
        }
        if (($v = $data['task_params'] ?? null) !== null && is_array($v)) {
            $obj->taskParams = $v;
        }
        if (($v = $data['task_status'] ?? null) !== null) {
            $obj->taskStatus = (string) $v;
        }
        if (($v = $data['task_type'] ?? null) !== null) {
            $obj->taskType = (string) $v;
        }
        return $obj;
    }
}
