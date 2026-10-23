<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpDataSourceReadV2ResponseDataDataListInnerChangeLogsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $action = null;

    /**
     * @var int
     */
    protected ?int $changeLogId = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var string[]
     */
    protected ?array $filePaths = null;

    /**
     * @var string
     */
    protected ?string $message = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var string
     */
    protected ?string $publishedTime = null;

    /**
     * @var int
     */
    protected ?int $status = null;

    /**
     * @return int
     */
    public function getAction(): ?int
    {
        return $this->action;
    }

    /**
     * @param int $action
     * @return self
     */
    public function setAction(?int $action): self
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return int
     */
    public function getChangeLogId(): ?int
    {
        return $this->changeLogId;
    }

    /**
     * @param int $changeLogId
     * @return self
     */
    public function setChangeLogId(?int $changeLogId): self
    {
        $this->changeLogId = $changeLogId;
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
     * @return string[]
     */
    public function getFilePaths(): ?array
    {
        return $this->filePaths;
    }

    /**
     * @param string[] $filePaths
     * @return self
     */
    public function setFilePaths(?array $filePaths): self
    {
        $this->filePaths = $filePaths;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublishedTime(): ?string
    {
        return $this->publishedTime;
    }

    /**
     * @param string $publishedTime
     * @return self
     */
    public function setPublishedTime(?string $publishedTime): self
    {
        $this->publishedTime = $publishedTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->action !== null) {
            $result['action'] = $this->action;
        }
        if ($this->changeLogId !== null) {
            $result['change_log_id'] = $this->changeLogId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->filePaths !== null) {
            $result['file_paths'] = $this->filePaths;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->publishedTime !== null) {
            $result['published_time'] = $this->publishedTime;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action'] ?? null) !== null) {
            $obj->action = (int) $v;
        }
        if (($v = $data['change_log_id'] ?? null) !== null) {
            $obj->changeLogId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['file_paths'] ?? null) !== null && is_array($v)) {
            $obj->filePaths = $v;
        }
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (string) $v;
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['published_time'] ?? null) !== null) {
            $obj->publishedTime = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        return $obj;
    }
}
