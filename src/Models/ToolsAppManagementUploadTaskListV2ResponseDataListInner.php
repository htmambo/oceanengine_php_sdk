<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementUploadTaskListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 任务信息
     * @var string
     */
    protected ?string $message = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementUploadTaskListV2DataListStatus
     */
    protected ?string $status = null;

    /**
     * 上传文件id
     * @var int
     */
    protected ?int $uploadId = null;

    /**
     * 任务信息
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * 任务信息
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementUploadTaskListV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementUploadTaskListV2DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 上传文件id
     * @return int
     */
    public function getUploadId(): ?int
    {
        return $this->uploadId;
    }

    /**
     * 上传文件id
     * @param int $uploadId
     * @return self
     */
    public function setUploadId(?int $uploadId): self
    {
        $this->uploadId = $uploadId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->uploadId !== null) {
            $result['upload_id'] = $this->uploadId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['upload_id'] ?? null) !== null) {
            $obj->uploadId = (int) $v;
        }
        return $obj;
    }
}
