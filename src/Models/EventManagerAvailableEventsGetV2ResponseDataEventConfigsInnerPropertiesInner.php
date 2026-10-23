<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerAvailableEventsGetV2ResponseDataEventConfigsInnerPropertiesInner implements \JsonSerializable
{
    /**
     * 附加属性描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * 附加属性枚举值
     * @var array<string,string>
     */
    protected ?array $enumValue = null;

    /**
     * 附加属性英文名称
     * @var string
     */
    protected ?string $field = null;

    /**
     * 附加属性中文名称
     * @var string
     */
    protected ?string $fieldName = null;

    /**
     * 附加属性单位
     * @var string
     */
    protected ?string $unit = null;

    /**
     * @var \Oceanengine\Models\EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType
     */
    protected ?string $variableType = null;

    /**
     * 附加属性描述
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 附加属性描述
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 附加属性枚举值
     * @return array<string,string>
     */
    public function getEnumValue(): ?array
    {
        return $this->enumValue;
    }

    /**
     * 附加属性枚举值
     * @param array<string,string> $enumValue
     * @return self
     */
    public function setEnumValue(?array $enumValue): self
    {
        $this->enumValue = $enumValue;
        return $this;
    }

    /**
     * 附加属性英文名称
     * @return string
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * 附加属性英文名称
     * @param string $field
     * @return self
     */
    public function setField(?string $field): self
    {
        $this->field = $field;
        return $this;
    }

    /**
     * 附加属性中文名称
     * @return string
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    /**
     * 附加属性中文名称
     * @param string $fieldName
     * @return self
     */
    public function setFieldName(?string $fieldName): self
    {
        $this->fieldName = $fieldName;
        return $this;
    }

    /**
     * 附加属性单位
     * @return string
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * 附加属性单位
     * @param string $unit
     * @return self
     */
    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType
     */
    public function getVariableType(): ?string
    {
        return $this->variableType;
    }

    /**
     * @param \Oceanengine\Models\EventManagerAvailableEventsGetV2DataEventConfigsPropertiesVariableType $variableType
     * @return self
     */
    public function setVariableType(?string $variableType): self
    {
        $this->variableType = $variableType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->enumValue !== null) {
            $result['enum_value'] = $this->enumValue;
        }
        if ($this->field !== null) {
            $result['field'] = $this->field;
        }
        if ($this->fieldName !== null) {
            $result['field_name'] = $this->fieldName;
        }
        if ($this->unit !== null) {
            $result['unit'] = $this->unit;
        }
        if ($this->variableType !== null) {
            $result['variable_type'] = $this->variableType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['enum_value'] ?? null) !== null && is_array($v)) {
            $obj->enumValue = $v;
        }
        if (($v = $data['field'] ?? null) !== null) {
            $obj->field = (string) $v;
        }
        if (($v = $data['field_name'] ?? null) !== null) {
            $obj->fieldName = (string) $v;
        }
        if (($v = $data['unit'] ?? null) !== null) {
            $obj->unit = (string) $v;
        }
        if (($v = $data['variable_type'] ?? null) !== null) {
            $obj->variableType = (string) $v;
        }
        return $obj;
    }
}
