<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormDetailV2ResponseDataFormElementsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueFormDetailV2DataFormElementsAllowEmpty
     */
    protected ?string $allowEmpty = null;

    /**
     * @var int
     */
    protected ?int $defaultValue = null;

    /**
     * @var int
     */
    protected ?int $elementId = null;

    /**
     * @var \Oceanengine\Models\ClueFormDetailV2DataFormElementsElementType
     */
    protected ?string $elementType = null;

    /**
     * @var \Oceanengine\Models\ClueFormDetailV2DataFormElementsIsUnique
     */
    protected ?string $isUnique = null;

    /**
     * @var string
     */
    protected ?string $label = null;

    /**
     * @var int
     */
    protected ?int $layer = null;

    /**
     * @var int
     */
    protected ?int $sequence = null;

    /**
     * @return \Oceanengine\Models\ClueFormDetailV2DataFormElementsAllowEmpty
     */
    public function getAllowEmpty(): ?string
    {
        return $this->allowEmpty;
    }

    /**
     * @param \Oceanengine\Models\ClueFormDetailV2DataFormElementsAllowEmpty $allowEmpty
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
    public function getDefaultValue(): ?int
    {
        return $this->defaultValue;
    }

    /**
     * @param int $defaultValue
     * @return self
     */
    public function setDefaultValue(?int $defaultValue): self
    {
        $this->defaultValue = $defaultValue;
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
     * @return \Oceanengine\Models\ClueFormDetailV2DataFormElementsElementType
     */
    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    /**
     * @param \Oceanengine\Models\ClueFormDetailV2DataFormElementsElementType $elementType
     * @return self
     */
    public function setElementType(?string $elementType): self
    {
        $this->elementType = $elementType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueFormDetailV2DataFormElementsIsUnique
     */
    public function getIsUnique(): ?string
    {
        return $this->isUnique;
    }

    /**
     * @param \Oceanengine\Models\ClueFormDetailV2DataFormElementsIsUnique $isUnique
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
     * @return int
     */
    public function getLayer(): ?int
    {
        return $this->layer;
    }

    /**
     * @param int $layer
     * @return self
     */
    public function setLayer(?int $layer): self
    {
        $this->layer = $layer;
        return $this;
    }

    /**
     * @return int
     */
    public function getSequence(): ?int
    {
        return $this->sequence;
    }

    /**
     * @param int $sequence
     * @return self
     */
    public function setSequence(?int $sequence): self
    {
        $this->sequence = $sequence;
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
        if ($this->defaultValue !== null) {
            $result['default_value'] = $this->defaultValue;
        }
        if ($this->elementId !== null) {
            $result['element_id'] = $this->elementId;
        }
        if ($this->elementType !== null) {
            $result['element_type'] = $this->elementType;
        }
        if ($this->isUnique !== null) {
            $result['is_unique'] = $this->isUnique;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->layer !== null) {
            $result['layer'] = $this->layer;
        }
        if ($this->sequence !== null) {
            $result['sequence'] = $this->sequence;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allow_empty'] ?? null) !== null) {
            $obj->allowEmpty = (string) $v;
        }
        if (($v = $data['default_value'] ?? null) !== null) {
            $obj->defaultValue = (int) $v;
        }
        if (($v = $data['element_id'] ?? null) !== null) {
            $obj->elementId = (int) $v;
        }
        if (($v = $data['element_type'] ?? null) !== null) {
            $obj->elementType = (string) $v;
        }
        if (($v = $data['is_unique'] ?? null) !== null) {
            $obj->isUnique = (string) $v;
        }
        if (($v = $data['label'] ?? null) !== null) {
            $obj->label = (string) $v;
        }
        if (($v = $data['layer'] ?? null) !== null) {
            $obj->layer = (int) $v;
        }
        if (($v = $data['sequence'] ?? null) !== null) {
            $obj->sequence = (int) $v;
        }
        return $obj;
    }
}
