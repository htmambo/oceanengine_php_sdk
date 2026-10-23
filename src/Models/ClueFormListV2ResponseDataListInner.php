<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\ClueFormListV2DataListEnableLayer
     */
    protected ?string $enableLayer = null;

    /**
     * @var \Oceanengine\Models\ClueFormListV2DataListFormType
     */
    protected ?string $formType = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var \Oceanengine\Models\ClueFormListV2DataListIsDel
     */
    protected ?string $isDel = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * @var \Oceanengine\Models\ClueFormListV2DataListValidateType
     */
    protected ?string $validateType = null;

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
     * @return \Oceanengine\Models\ClueFormListV2DataListEnableLayer
     */
    public function getEnableLayer(): ?string
    {
        return $this->enableLayer;
    }

    /**
     * @param \Oceanengine\Models\ClueFormListV2DataListEnableLayer $enableLayer
     * @return self
     */
    public function setEnableLayer(?string $enableLayer): self
    {
        $this->enableLayer = $enableLayer;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueFormListV2DataListFormType
     */
    public function getFormType(): ?string
    {
        return $this->formType;
    }

    /**
     * @param \Oceanengine\Models\ClueFormListV2DataListFormType $formType
     * @return self
     */
    public function setFormType(?string $formType): self
    {
        $this->formType = $formType;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueFormListV2DataListIsDel
     */
    public function getIsDel(): ?string
    {
        return $this->isDel;
    }

    /**
     * @param \Oceanengine\Models\ClueFormListV2DataListIsDel $isDel
     * @return self
     */
    public function setIsDel(?string $isDel): self
    {
        $this->isDel = $isDel;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueFormListV2DataListValidateType
     */
    public function getValidateType(): ?string
    {
        return $this->validateType;
    }

    /**
     * @param \Oceanengine\Models\ClueFormListV2DataListValidateType $validateType
     * @return self
     */
    public function setValidateType(?string $validateType): self
    {
        $this->validateType = $validateType;
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
        if ($this->enableLayer !== null) {
            $result['enable_layer'] = $this->enableLayer;
        }
        if ($this->formType !== null) {
            $result['form_type'] = $this->formType;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->isDel !== null) {
            $result['is_del'] = $this->isDel;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        if ($this->validateType !== null) {
            $result['validate_type'] = $this->validateType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['enable_layer'] ?? null) !== null) {
            $obj->enableLayer = (string) $v;
        }
        if (($v = $data['form_type'] ?? null) !== null) {
            $obj->formType = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['is_del'] ?? null) !== null) {
            $obj->isDel = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        if (($v = $data['validate_type'] ?? null) !== null) {
            $obj->validateType = (string) $v;
        }
        return $obj;
    }
}
