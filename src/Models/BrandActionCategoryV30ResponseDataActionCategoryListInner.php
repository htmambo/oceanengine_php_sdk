<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandActionCategoryV30ResponseDataActionCategoryListInner implements \JsonSerializable
{
    /**
     * 二级兴趣
     * @var \Oceanengine\Models\BrandActionCategoryV30ResponseDataActionCategoryListInnerChildrenInner[]
     */
    protected ?array $children = null;

    /**
     * 一级兴趣ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * 一级兴趣名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 二级兴趣
     * @return \Oceanengine\Models\BrandActionCategoryV30ResponseDataActionCategoryListInnerChildrenInner[]
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * 二级兴趣
     * @param \Oceanengine\Models\BrandActionCategoryV30ResponseDataActionCategoryListInnerChildrenInner[] $children
     * @return self
     */
    public function setChildren(?array $children): self
    {
        $this->children = $children;
        return $this;
    }

    /**
     * 一级兴趣ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 一级兴趣ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 一级兴趣名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 一级兴趣名称
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
        if ($this->children !== null) {
            $result['children'] = $this->children;
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
        if (($v = $data['children'] ?? null) !== null && is_array($v)) {
            $obj->children = array_map(fn ($vv) => \Oceanengine\Models\BrandActionCategoryV30ResponseDataActionCategoryListInnerChildrenInner::fromArray($vv), $v);
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
