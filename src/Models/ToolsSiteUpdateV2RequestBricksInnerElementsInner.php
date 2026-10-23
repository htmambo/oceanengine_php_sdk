<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteUpdateV2RequestBricksInnerElementsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $allowEmpty = null;

    /**
     * @var int
     */
    protected ?int $isUnique = null;

    /**
     * @var string
     */
    protected ?string $label = null;

    /**
     * @var string
     */
    protected ?string $type = null;

    /**
     * @return int
     */
    public function getAllowEmpty(): ?int
    {
        return $this->allowEmpty;
    }

    /**
     * @param int $allowEmpty
     * @return self
     */
    public function setAllowEmpty(?int $allowEmpty): self
    {
        $this->allowEmpty = $allowEmpty;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsUnique(): ?int
    {
        return $this->isUnique;
    }

    /**
     * @param int $isUnique
     * @return self
     */
    public function setIsUnique(?int $isUnique): self
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
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
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
        if ($this->isUnique !== null) {
            $result['is_unique'] = $this->isUnique;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['allow_empty'] ?? null) !== null) {
            $obj->allowEmpty = (int) $v;
        }
        if (($v = $data['is_unique'] ?? null) !== null) {
            $obj->isUnique = (int) $v;
        }
        if (($v = $data['label'] ?? null) !== null) {
            $obj->label = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
