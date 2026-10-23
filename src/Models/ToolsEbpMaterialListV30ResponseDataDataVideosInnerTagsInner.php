<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialListV30ResponseDataDataVideosInnerTagsInner implements \JsonSerializable
{
    /**
     * 一级分类名，暂无则返回空字符串
     * @var string
     */
    protected ?string $categoryL1name = null;

    /**
     * 二级分类名，暂无则返回空字符串
     * @var string
     */
    protected ?string $categoryL2name = null;

    /**
     * true=系统标签，false=自定义标签
     * @var bool
     */
    protected ?bool $isSystem = null;

    /**
     * 关联素材数，列表素材维度默认返回 0
     * @var int
     */
    protected ?int $relMaterialCount = null;

    /**
     * @var int
     */
    protected ?int $tagId = null;

    /**
     * @var string
     */
    protected ?string $tagName = null;

    /**
     * 一级分类名，暂无则返回空字符串
     * @return string
     */
    public function getCategoryL1name(): ?string
    {
        return $this->categoryL1name;
    }

    /**
     * 一级分类名，暂无则返回空字符串
     * @param string $categoryL1name
     * @return self
     */
    public function setCategoryL1name(?string $categoryL1name): self
    {
        $this->categoryL1name = $categoryL1name;
        return $this;
    }

    /**
     * 二级分类名，暂无则返回空字符串
     * @return string
     */
    public function getCategoryL2name(): ?string
    {
        return $this->categoryL2name;
    }

    /**
     * 二级分类名，暂无则返回空字符串
     * @param string $categoryL2name
     * @return self
     */
    public function setCategoryL2name(?string $categoryL2name): self
    {
        $this->categoryL2name = $categoryL2name;
        return $this;
    }

    /**
     * true=系统标签，false=自定义标签
     * @return bool
     */
    public function getIsSystem(): ?bool
    {
        return $this->isSystem;
    }

    /**
     * true=系统标签，false=自定义标签
     * @param bool $isSystem
     * @return self
     */
    public function setIsSystem(?bool $isSystem): self
    {
        $this->isSystem = $isSystem;
        return $this;
    }

    /**
     * 关联素材数，列表素材维度默认返回 0
     * @return int
     */
    public function getRelMaterialCount(): ?int
    {
        return $this->relMaterialCount;
    }

    /**
     * 关联素材数，列表素材维度默认返回 0
     * @param int $relMaterialCount
     * @return self
     */
    public function setRelMaterialCount(?int $relMaterialCount): self
    {
        $this->relMaterialCount = $relMaterialCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getTagId(): ?int
    {
        return $this->tagId;
    }

    /**
     * @param int $tagId
     * @return self
     */
    public function setTagId(?int $tagId): self
    {
        $this->tagId = $tagId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTagName(): ?string
    {
        return $this->tagName;
    }

    /**
     * @param string $tagName
     * @return self
     */
    public function setTagName(?string $tagName): self
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->categoryL1name !== null) {
            $result['category_l1name'] = $this->categoryL1name;
        }
        if ($this->categoryL2name !== null) {
            $result['category_l2name'] = $this->categoryL2name;
        }
        if ($this->isSystem !== null) {
            $result['is_system'] = $this->isSystem;
        }
        if ($this->relMaterialCount !== null) {
            $result['rel_material_count'] = $this->relMaterialCount;
        }
        if ($this->tagId !== null) {
            $result['tag_id'] = $this->tagId;
        }
        if ($this->tagName !== null) {
            $result['tag_name'] = $this->tagName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['category_l1name'] ?? null) !== null) {
            $obj->categoryL1name = (string) $v;
        }
        if (($v = $data['category_l2name'] ?? null) !== null) {
            $obj->categoryL2name = (string) $v;
        }
        if (($v = $data['is_system'] ?? null) !== null) {
            $obj->isSystem = (bool) $v;
        }
        if (($v = $data['rel_material_count'] ?? null) !== null) {
            $obj->relMaterialCount = (int) $v;
        }
        if (($v = $data['tag_id'] ?? null) !== null) {
            $obj->tagId = (int) $v;
        }
        if (($v = $data['tag_name'] ?? null) !== null) {
            $obj->tagName = (string) $v;
        }
        return $obj;
    }
}
