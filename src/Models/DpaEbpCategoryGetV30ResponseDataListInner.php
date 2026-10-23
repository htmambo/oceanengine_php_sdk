<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpCategoryGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 分类id
     * @var string
     */
    protected ?string $id = null;

    /**
     * 分类名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 父级分类id，没有父级则为-1
     * @var string
     */
    protected ?string $parent = null;

    /**
     * 子级分类，嵌套递归
     * @var array<string,mixed>[]
     */
    protected ?array $subs = null;

    /**
     * 分类id
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 分类id
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 分类名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 分类名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 父级分类id，没有父级则为-1
     * @return string
     */
    public function getParent(): ?string
    {
        return $this->parent;
    }

    /**
     * 父级分类id，没有父级则为-1
     * @param string $parent
     * @return self
     */
    public function setParent(?string $parent): self
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * 子级分类，嵌套递归
     * @return array<string,mixed>[]
     */
    public function getSubs(): ?array
    {
        return $this->subs;
    }

    /**
     * 子级分类，嵌套递归
     * @param array<string,mixed>[] $subs
     * @return self
     */
    public function setSubs(?array $subs): self
    {
        $this->subs = $subs;
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
        if ($this->parent !== null) {
            $result['parent'] = $this->parent;
        }
        if ($this->subs !== null) {
            $result['subs'] = $this->subs;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['parent'] ?? null) !== null) {
            $obj->parent = (string) $v;
        }
        if (($v = $data['subs'] ?? null) !== null && is_array($v)) {
            $obj->subs = $v;
        }
        return $obj;
    }
}
