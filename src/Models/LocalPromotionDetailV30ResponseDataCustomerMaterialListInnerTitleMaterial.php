<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionDetailV30ResponseDataCustomerMaterialListInnerTitleMaterial implements \JsonSerializable
{
    /**
     * 标题素材库id
     * @var int
     */
    protected ?int $legoMaterialId = null;

    /**
     * 标题素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 标题内容
     * @var string
     */
    protected ?string $title = null;

    /**
     * 标题素材库id
     * @return int
     */
    public function getLegoMaterialId(): ?int
    {
        return $this->legoMaterialId;
    }

    /**
     * 标题素材库id
     * @param int $legoMaterialId
     * @return self
     */
    public function setLegoMaterialId(?int $legoMaterialId): self
    {
        $this->legoMaterialId = $legoMaterialId;
        return $this;
    }

    /**
     * 标题素材id
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 标题素材id
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 标题内容
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 标题内容
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->legoMaterialId !== null) {
            $result['lego_material_id'] = $this->legoMaterialId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['lego_material_id'] ?? null) !== null) {
            $obj->legoMaterialId = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
