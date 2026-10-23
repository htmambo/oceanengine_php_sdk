<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoMaterialClearTaskGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 清理任务id
     * @var int
     */
    protected ?int $clearId = null;

    /**
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskGetV2ResponseDataListInnerClearTaskParams
     */
    protected ?\Oceanengine\Models\FileVideoMaterialClearTaskGetV2ResponseDataListInnerClearTaskParams $clearTaskParams = null;

    /**
     * 任务创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\FileVideoMaterialClearTaskGetV2DataListTaskStatus
     */
    protected ?string $taskStatus = null;

    /**
     * 清理任务id
     * @return int
     */
    public function getClearId(): ?int
    {
        return $this->clearId;
    }

    /**
     * 清理任务id
     * @param int $clearId
     * @return self
     */
    public function setClearId(?int $clearId): self
    {
        $this->clearId = $clearId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskGetV2ResponseDataListInnerClearTaskParams
     */
    public function getClearTaskParams(): ?\Oceanengine\Models\FileVideoMaterialClearTaskGetV2ResponseDataListInnerClearTaskParams
    {
        return $this->clearTaskParams;
    }

    /**
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskGetV2ResponseDataListInnerClearTaskParams $clearTaskParams
     * @return self
     */
    public function setClearTaskParams(?\Oceanengine\Models\FileVideoMaterialClearTaskGetV2ResponseDataListInnerClearTaskParams $clearTaskParams): self
    {
        $this->clearTaskParams = $clearTaskParams;
        return $this;
    }

    /**
     * 任务创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 任务创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoMaterialClearTaskGetV2DataListTaskStatus
     */
    public function getTaskStatus(): ?string
    {
        return $this->taskStatus;
    }

    /**
     * @param \Oceanengine\Models\FileVideoMaterialClearTaskGetV2DataListTaskStatus $taskStatus
     * @return self
     */
    public function setTaskStatus(?string $taskStatus): self
    {
        $this->taskStatus = $taskStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clearId !== null) {
            $result['clear_id'] = $this->clearId;
        }
        if ($this->clearTaskParams !== null) {
            $result['clear_task_params'] = $this->clearTaskParams;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->taskStatus !== null) {
            $result['task_status'] = $this->taskStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['clear_id'] ?? null) !== null) {
            $obj->clearId = (int) $v;
        }
        if (($v = $data['clear_task_params'] ?? null) !== null && is_array($v)) {
            $obj->clearTaskParams = \Oceanengine\Models\FileVideoMaterialClearTaskGetV2ResponseDataListInnerClearTaskParams::fromArray($v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['task_status'] ?? null) !== null) {
            $obj->taskStatus = (string) $v;
        }
        return $obj;
    }
}
