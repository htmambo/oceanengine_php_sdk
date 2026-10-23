<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLogSearchDetailGetV2ResponseDataLog implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $contentLog = null;

    /**
     * @var string
     */
    protected ?string $contentTitle = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var int
     */
    protected ?int $objectId = null;

    /**
     * @var string
     */
    protected ?string $objectName = null;

    /**
     * @var string
     */
    protected ?string $objectType = null;

    /**
     * @var string
     */
    protected ?string $operator = null;

    /**
     * @var string
     */
    protected ?string $optIp = null;

    /**
     * @return string[]
     */
    public function getContentLog(): ?array
    {
        return $this->contentLog;
    }

    /**
     * @param string[] $contentLog
     * @return self
     */
    public function setContentLog(?array $contentLog): self
    {
        $this->contentLog = $contentLog;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentTitle(): ?string
    {
        return $this->contentTitle;
    }

    /**
     * @param string $contentTitle
     * @return self
     */
    public function setContentTitle(?string $contentTitle): self
    {
        $this->contentTitle = $contentTitle;
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
     * @return int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     * @return self
     */
    public function setObjectId(?int $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectName(): ?string
    {
        return $this->objectName;
    }

    /**
     * @param string $objectName
     * @return self
     */
    public function setObjectName(?string $objectName): self
    {
        $this->objectName = $objectName;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     * @return self
     */
    public function setObjectType(?string $objectType): self
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     * @return self
     */
    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * @return string
     */
    public function getOptIp(): ?string
    {
        return $this->optIp;
    }

    /**
     * @param string $optIp
     * @return self
     */
    public function setOptIp(?string $optIp): self
    {
        $this->optIp = $optIp;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->contentLog !== null) {
            $result['content_log'] = $this->contentLog;
        }
        if ($this->contentTitle !== null) {
            $result['content_title'] = $this->contentTitle;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->objectId !== null) {
            $result['object_id'] = $this->objectId;
        }
        if ($this->objectName !== null) {
            $result['object_name'] = $this->objectName;
        }
        if ($this->objectType !== null) {
            $result['object_type'] = $this->objectType;
        }
        if ($this->operator !== null) {
            $result['operator'] = $this->operator;
        }
        if ($this->optIp !== null) {
            $result['opt_ip'] = $this->optIp;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content_log'] ?? null) !== null && is_array($v)) {
            $obj->contentLog = $v;
        }
        if (($v = $data['content_title'] ?? null) !== null) {
            $obj->contentTitle = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['object_id'] ?? null) !== null) {
            $obj->objectId = (int) $v;
        }
        if (($v = $data['object_name'] ?? null) !== null) {
            $obj->objectName = (string) $v;
        }
        if (($v = $data['object_type'] ?? null) !== null) {
            $obj->objectType = (string) $v;
        }
        if (($v = $data['operator'] ?? null) !== null) {
            $obj->operator = (string) $v;
        }
        if (($v = $data['opt_ip'] ?? null) !== null) {
            $obj->optIp = (string) $v;
        }
        return $obj;
    }
}
