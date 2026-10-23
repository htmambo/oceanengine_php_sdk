<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsRegionGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $parentId = null;

    /**
     * @var string
     */
    protected ?string $regionLevel = null;

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
     * @return int
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     * @return self
     */
    public function setParentId(?int $parentId): self
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionLevel(): ?string
    {
        return $this->regionLevel;
    }

    /**
     * @param string $regionLevel
     * @return self
     */
    public function setRegionLevel(?string $regionLevel): self
    {
        $this->regionLevel = $regionLevel;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->parentId !== null) {
            $result['parent_id'] = $this->parentId;
        }
        if ($this->regionLevel !== null) {
            $result['region_level'] = $this->regionLevel;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['parent_id'] ?? null) !== null) {
            $obj->parentId = (int) $v;
        }
        if (($v = $data['region_level'] ?? null) !== null) {
            $obj->regionLevel = (string) $v;
        }
        return $obj;
    }
}
