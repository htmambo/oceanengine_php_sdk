<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsToolsTaskDetailGetV30ResponseDataObjectListInner implements \JsonSerializable
{
    /**
     * 修改之后的值
     * @var string
     */
    protected ?string $newValue = null;

    /**
     * 名称
     * @var string
     */
    protected ?string $objectName = null;

    /**
     * @var \Oceanengine\Models\ToolsToolsTaskDetailGetV30DataObjectListObjectStatus
     */
    protected ?string $objectStatus = null;

    /**
     * 修改之前的值
     * @var string
     */
    protected ?string $oldValue = null;

    /**
     * 修改之后的值
     * @return string
     */
    public function getNewValue(): ?string
    {
        return $this->newValue;
    }

    /**
     * 修改之后的值
     * @param string $newValue
     * @return self
     */
    public function setNewValue(?string $newValue): self
    {
        $this->newValue = $newValue;
        return $this;
    }

    /**
     * 名称
     * @return string
     */
    public function getObjectName(): ?string
    {
        return $this->objectName;
    }

    /**
     * 名称
     * @param string $objectName
     * @return self
     */
    public function setObjectName(?string $objectName): self
    {
        $this->objectName = $objectName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsToolsTaskDetailGetV30DataObjectListObjectStatus
     */
    public function getObjectStatus(): ?string
    {
        return $this->objectStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsToolsTaskDetailGetV30DataObjectListObjectStatus $objectStatus
     * @return self
     */
    public function setObjectStatus(?string $objectStatus): self
    {
        $this->objectStatus = $objectStatus;
        return $this;
    }

    /**
     * 修改之前的值
     * @return string
     */
    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }

    /**
     * 修改之前的值
     * @param string $oldValue
     * @return self
     */
    public function setOldValue(?string $oldValue): self
    {
        $this->oldValue = $oldValue;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->newValue !== null) {
            $result['new_value'] = $this->newValue;
        }
        if ($this->objectName !== null) {
            $result['object_name'] = $this->objectName;
        }
        if ($this->objectStatus !== null) {
            $result['object_status'] = $this->objectStatus;
        }
        if ($this->oldValue !== null) {
            $result['old_value'] = $this->oldValue;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['new_value'] ?? null) !== null) {
            $obj->newValue = (string) $v;
        }
        if (($v = $data['object_name'] ?? null) !== null) {
            $obj->objectName = (string) $v;
        }
        if (($v = $data['object_status'] ?? null) !== null) {
            $obj->objectStatus = (string) $v;
        }
        if (($v = $data['old_value'] ?? null) !== null) {
            $obj->oldValue = (string) $v;
        }
        return $obj;
    }
}
