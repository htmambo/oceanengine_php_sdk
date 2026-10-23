<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandRegionGetV30ResponseDataRegionsInner implements \JsonSerializable
{
    /**
     * 省市全名
     * @var string
     */
    protected ?string $fullName = null;

    /**
     * 城市ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * 省市简称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 子城市列表
     * @var \Oceanengine\Models\BrandRegionGetV30ResponseDataRegionsInnerSubRegionsInner[]
     */
    protected ?array $subRegions = null;

    /**
     * 省市全名
     * @return string
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * 省市全名
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
     * 省市简称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 省市简称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 子城市列表
     * @return \Oceanengine\Models\BrandRegionGetV30ResponseDataRegionsInnerSubRegionsInner[]
     */
    public function getSubRegions(): ?array
    {
        return $this->subRegions;
    }

    /**
     * 子城市列表
     * @param \Oceanengine\Models\BrandRegionGetV30ResponseDataRegionsInnerSubRegionsInner[] $subRegions
     * @return self
     */
    public function setSubRegions(?array $subRegions): self
    {
        $this->subRegions = $subRegions;
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
        if ($this->subRegions !== null) {
            $result['sub_regions'] = $this->subRegions;
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
        if (($v = $data['sub_regions'] ?? null) !== null && is_array($v)) {
            $obj->subRegions = array_map(fn ($vv) => \Oceanengine\Models\BrandRegionGetV30ResponseDataRegionsInnerSubRegionsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
