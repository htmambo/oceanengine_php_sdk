<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInner implements \JsonSerializable
{
    /**
     * 子分类
     * @var \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInner[]
     */
    protected ?array $children = null;

    /**
     * 分类id
     * @var string
     */
    protected ?string $id = null;

    /**
     * 级别 格式: int64
     * @var int
     */
    protected ?int $level = null;

    /**
     * 分类名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 子分类
     * @return \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInner[]
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * 子分类
     * @param \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInner[] $children
     * @return self
     */
    public function setChildren(?array $children): self
    {
        $this->children = $children;
        return $this;
    }

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
     * 级别 格式: int64
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * 级别 格式: int64
     * @param int $level
     * @return self
     */
    public function setLevel(?int $level): self
    {
        $this->level = $level;
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
        if ($this->level !== null) {
            $result['level'] = $this->level;
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
            $obj->children = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInner::fromArray($vv), $v);
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['level'] ?? null) !== null) {
            $obj->level = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
