<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueFormCreateV2RequestElementsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ClueFormCreateV2ElementsAllowEmpty
     */
    protected ?string $allowEmpty = null;

    /**
     * @var int
     */
    protected ?int $defaultValue = null;

    /**
     * @var \Oceanengine\Models\ClueFormCreateV2ElementsElementType
     */
    protected ?string $elementType = null;

    /**
     * @var \Oceanengine\Models\ClueFormCreateV2ElementsIsUnique
     */
    protected ?string $isUnique = null;

    /**
     * @var string
     */
    protected ?string $label = null;

    /**
     * @var \Oceanengine\Models\ClueFormCreateV2ElementsLayer
     */
    protected ?string $layer = null;

    /**
     * @var int
     */
    protected ?int $sequence = null;

    /**
     * @var string
     */
    protected ?string $value = null;

    /**
     * @return \Oceanengine\Models\ClueFormCreateV2ElementsAllowEmpty
     */
    public function getAllowEmpty(): ?string
    {
        return $this->allowEmpty;
    }

    /**
     * @param \Oceanengine\Models\ClueFormCreateV2ElementsAllowEmpty $allowEmpty
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
     * @return \Oceanengine\Models\ClueFormCreateV2ElementsElementType
     */
    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    /**
     * @param \Oceanengine\Models\ClueFormCreateV2ElementsElementType $elementType
     * @return self
     */
    public function setElementType(?string $elementType): self
    {
        $this->elementType = $elementType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueFormCreateV2ElementsIsUnique
     */
    public function getIsUnique(): ?string
    {
        return $this->isUnique;
    }

    /**
     * @param \Oceanengine\Models\ClueFormCreateV2ElementsIsUnique $isUnique
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
     * @return \Oceanengine\Models\ClueFormCreateV2ElementsLayer
     */
    public function getLayer(): ?string
    {
        return $this->layer;
    }

    /**
     * @param \Oceanengine\Models\ClueFormCreateV2ElementsLayer $layer
     * @return self
     */
    public function setLayer(?string $layer): self
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
        if ($this->defaultValue !== null) {
            $result['default_value'] = $this->defaultValue;
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
        if (($v = $data['default_value'] ?? null) !== null) {
            $obj->defaultValue = (int) $v;
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
            $obj->layer = (string) $v;
        }
        if (($v = $data['sequence'] ?? null) !== null) {
            $obj->sequence = (int) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        return $obj;
    }
}
