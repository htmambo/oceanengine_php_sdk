<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInner implements \JsonSerializable
{
    /**
     * 子分类
     * @var \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInnerChildrenInner[]
     */
    protected ?array $children = null;

    /**
     * @var string
     */
    protected ?string $id = null;

    /**
     * @var int
     */
    protected ?int $level = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInnerThemeTagsInner[]
     */
    protected ?array $themeTags = null;

    /**
     * 子分类
     * @return \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInnerChildrenInner[]
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * 子分类
     * @param \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInnerChildrenInner[] $children
     * @return self
     */
    public function setChildren(?array $children): self
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return self
     */
    public function setLevel(?int $level): self
    {
        $this->level = $level;
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
     * @return \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInnerThemeTagsInner[]
     */
    public function getThemeTags(): ?array
    {
        return $this->themeTags;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInnerThemeTagsInner[] $themeTags
     * @return self
     */
    public function setThemeTags(?array $themeTags): self
    {
        $this->themeTags = $themeTags;
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
        if ($this->themeTags !== null) {
            $result['theme_tags'] = $this->themeTags;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['children'] ?? null) !== null && is_array($v)) {
            $obj->children = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInnerChildrenInner::fromArray($vv), $v);
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
        if (($v = $data['theme_tags'] ?? null) !== null && is_array($v)) {
            $obj->themeTags = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementIndustryInfoListV2ResponseDataIndustriesInnerChildrenInnerThemeTagsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
