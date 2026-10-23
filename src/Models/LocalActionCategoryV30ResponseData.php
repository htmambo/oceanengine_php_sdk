<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalActionCategoryV30ResponseData implements \JsonSerializable
{
    /**
     * @var array<string,mixed>[]
     */
    protected ?array $children = null;

    /**
     * @var int
     */
    protected ?int $num = null;

    /**
     * @return array<string,mixed>[]
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * @param array<string,mixed>[] $children
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
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     * @return self
     */
    public function setNum(?int $num): self
    {
        $this->num = $num;
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
        if ($this->num !== null) {
            $result['num'] = $this->num;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['children'] ?? null) !== null && is_array($v)) {
            $obj->children = $v;
        }
        if (($v = $data['num'] ?? null) !== null) {
            $obj->num = (int) $v;
        }
        return $obj;
    }
}
