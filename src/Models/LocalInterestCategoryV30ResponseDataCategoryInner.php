<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalInterestCategoryV30ResponseDataCategoryInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalInterestCategoryV30ResponseDataCategoryInnerChildrenInner[]
     */
    protected ?array $children = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $value = null;

    /**
     * @return \Oceanengine\Models\LocalInterestCategoryV30ResponseDataCategoryInnerChildrenInner[]
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * @param \Oceanengine\Models\LocalInterestCategoryV30ResponseDataCategoryInnerChildrenInner[] $children
     * @return self
     */
    public function setChildren(?array $children): self
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
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
        if ($this->children !== null) {
            $result['children'] = $this->children;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['children'] ?? null) !== null && is_array($v)) {
            $obj->children = array_map(fn ($vv) => \Oceanengine\Models\LocalInterestCategoryV30ResponseDataCategoryInnerChildrenInner::fromArray($vv), $v);
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        return $obj;
    }
}
