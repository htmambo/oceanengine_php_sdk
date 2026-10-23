<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOperationLogQueryV30ResponseDataLogListInner implements \JsonSerializable
{
    /**
     * 操作内容
     * @var string[]
     */
    protected ?array $content = null;

    /**
     * 操作对象ID
     * @var int
     */
    protected ?int $objectId = null;

    /**
     * 操作对象类型
     * @var string
     */
    protected ?string $objectType = null;

    /**
     * 操作人
     * @var string
     */
    protected ?string $operator = null;

    /**
     * 操作人IP
     * @var string
     */
    protected ?string $optIp = null;

    /**
     * 操作时间
     * @var string
     */
    protected ?string $optTime = null;

    /**
     * 操作类型
     * @var string
     */
    protected ?string $optType = null;

    /**
     * 操作内容
     * @return string[]
     */
    public function getContent(): ?array
    {
        return $this->content;
    }

    /**
     * 操作内容
     * @param string[] $content
     * @return self
     */
    public function setContent(?array $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * 操作对象ID
     * @return int
     */
    public function getObjectId(): ?int
    {
        return $this->objectId;
    }

    /**
     * 操作对象ID
     * @param int $objectId
     * @return self
     */
    public function setObjectId(?int $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * 操作对象类型
     * @return string
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    /**
     * 操作对象类型
     * @param string $objectType
     * @return self
     */
    public function setObjectType(?string $objectType): self
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * 操作人
     * @return string
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * 操作人
     * @param string $operator
     * @return self
     */
    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * 操作人IP
     * @return string
     */
    public function getOptIp(): ?string
    {
        return $this->optIp;
    }

    /**
     * 操作人IP
     * @param string $optIp
     * @return self
     */
    public function setOptIp(?string $optIp): self
    {
        $this->optIp = $optIp;
        return $this;
    }

    /**
     * 操作时间
     * @return string
     */
    public function getOptTime(): ?string
    {
        return $this->optTime;
    }

    /**
     * 操作时间
     * @param string $optTime
     * @return self
     */
    public function setOptTime(?string $optTime): self
    {
        $this->optTime = $optTime;
        return $this;
    }

    /**
     * 操作类型
     * @return string
     */
    public function getOptType(): ?string
    {
        return $this->optType;
    }

    /**
     * 操作类型
     * @param string $optType
     * @return self
     */
    public function setOptType(?string $optType): self
    {
        $this->optType = $optType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->objectId !== null) {
            $result['object_id'] = $this->objectId;
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
        if ($this->optTime !== null) {
            $result['opt_time'] = $this->optTime;
        }
        if ($this->optType !== null) {
            $result['opt_type'] = $this->optType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content'] ?? null) !== null && is_array($v)) {
            $obj->content = $v;
        }
        if (($v = $data['object_id'] ?? null) !== null) {
            $obj->objectId = (int) $v;
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
        if (($v = $data['opt_time'] ?? null) !== null) {
            $obj->optTime = (string) $v;
        }
        if (($v = $data['opt_type'] ?? null) !== null) {
            $obj->optType = (string) $v;
        }
        return $obj;
    }
}
