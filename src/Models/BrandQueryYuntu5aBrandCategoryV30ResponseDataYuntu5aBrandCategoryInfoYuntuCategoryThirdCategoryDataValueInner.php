<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategoryThirdCategoryDataValueInner implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $brandIds = null;

    /**
     * 三级级行业分类ID
     * @var int
     */
    protected ?int $id = null;

    /**
     * 三级级行业分类名称
     * @var string
     */
    protected ?string $value = null;

    /**
     * @return int[]
     */
    public function getBrandIds(): ?array
    {
        return $this->brandIds;
    }

    /**
     * @param int[] $brandIds
     * @return self
     */
    public function setBrandIds(?array $brandIds): self
    {
        $this->brandIds = $brandIds;
        return $this;
    }

    /**
     * 三级级行业分类ID
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 三级级行业分类ID
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 三级级行业分类名称
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * 三级级行业分类名称
     * @param string $value
     * @return self
     */
    public function setValue(?string $value): self
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
        if ($this->brandIds !== null) {
            $result['brand_ids'] = $this->brandIds;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_ids'] ?? null) !== null && is_array($v)) {
            $obj->brandIds = $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['value'] ?? null) !== null) {
            $obj->value = (string) $v;
        }
        return $obj;
    }
}
