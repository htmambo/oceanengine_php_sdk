<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoBrandNameListInner implements \JsonSerializable
{
    /**
     * 所属一级行业ID
     * @var int[]
     */
    protected ?array $firstCategoryIds = null;

    /**
     * 品牌名称
     * @var string
     */
    protected ?string $label = null;

    /**
     * 品牌ID
     * @var int
     */
    protected ?int $value = null;

    /**
     * 所属一级行业ID
     * @return int[]
     */
    public function getFirstCategoryIds(): ?array
    {
        return $this->firstCategoryIds;
    }

    /**
     * 所属一级行业ID
     * @param int[] $firstCategoryIds
     * @return self
     */
    public function setFirstCategoryIds(?array $firstCategoryIds): self
    {
        $this->firstCategoryIds = $firstCategoryIds;
        return $this;
    }

    /**
     * 品牌名称
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * 品牌名称
     * @param string $label
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }

    /**
     * 品牌ID
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * 品牌ID
     * @param int $value
     * @return self
     */
    public function setValue(?int $value): self
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
        if ($this->firstCategoryIds !== null) {
            $result['first_category_ids'] = $this->firstCategoryIds;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['first_category_ids'] ?? null) !== null && is_array($v)) {
            $obj->firstCategoryIds = $v;
        }
        if (($v = $data['label'] ?? null) !== null) {
            $obj->label = (string) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (int) $v;
        }
        return $obj;
    }
}
