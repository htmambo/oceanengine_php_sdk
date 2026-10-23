<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandRegionGetV30ResponseDataRegionsInnerSubRegionsInner implements \JsonSerializable
{
    /**
     * 城市全称
     * @var string
     */
    protected ?string $fullName = null;

    /**
     * 城市ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * 城市简称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 城市全称
     * @return string
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * 城市全称
     * @param string $fullName
     * @return self
     */
    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * 城市ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 城市ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 城市简称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 城市简称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fullName !== null) {
            $result['full_name'] = $this->fullName;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['full_name'] ?? null) !== null) {
            $obj->fullName = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
