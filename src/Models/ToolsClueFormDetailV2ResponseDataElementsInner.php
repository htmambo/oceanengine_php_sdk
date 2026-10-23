<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueFormDetailV2ResponseDataElementsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsClueFormDetailV2DataElementsAllowEmpty
     */
    protected ?string $allowEmpty = null;

    /**
     * @var int
     */
    protected ?int $elementId = null;

    /**
     * @var \Oceanengine\Models\ToolsClueFormDetailV2DataElementsIsUnique
     */
    protected ?string $isUnique = null;

    /**
     * @var string
     */
    protected ?string $label = null;

    /**
     * @var \Oceanengine\Models\ToolsClueFormDetailV2DataElementsType
     */
    protected ?string $type = null;

    /**
     * @var string
     */
    protected ?string $value = null;

    /**
     * @return \Oceanengine\Models\ToolsClueFormDetailV2DataElementsAllowEmpty
     */
    public function getAllowEmpty(): ?string
    {
        return $this->allowEmpty;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueFormDetailV2DataElementsAllowEmpty $allowEmpty
     * @return self
     */
    public function setAllowEmpty(?string $allowEmpty): self
    {
        $this->allowEmpty = $allowEmpty;
        return $this;
    }

    /**
     * @return int
     */
    public function getElementId(): ?int
    {
        return $this->elementId;
    }

    /**
     * @param int $elementId
     * @return self
     */
    public function setElementId(?int $elementId): self
    {
        $this->elementId = $elementId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueFormDetailV2DataElementsIsUnique
     */
    public function getIsUnique(): ?string
    {
        return $this->isUnique;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueFormDetailV2DataElementsIsUnique $isUnique
     * @return self
     */
    public function setIsUnique(?string $isUnique): self
    {
        $this->isUnique = $isUnique;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueFormDetailV2DataElementsType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueFormDetailV2DataElementsType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allowEmpty !== null) {
            $result['allow_empty'] = $this->allowEmpty;
        }
        if ($this->elementId !== null) {
            $result['element_id'] = $this->elementId;
        }
        if ($this->isUnique !== null) {
            $result['is_unique'] = $this->isUnique;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allow_empty'] ?? null) !== null) {
            $obj->allowEmpty = (string) $v;
        }
        if (($v = $data['element_id'] ?? null) !== null) {
            $obj->elementId = (int) $v;
        }
        if (($v = $data['is_unique'] ?? null) !== null) {
            $obj->isUnique = (string) $v;
        }
        if (($v = $data['label'] ?? null) !== null) {
            $obj->label = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        return $obj;
    }
}
