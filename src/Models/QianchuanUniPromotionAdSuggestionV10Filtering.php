<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdSuggestionV10Filtering implements \JsonSerializable
{
    /**
     * 需要查询审核建议的素材列表，支持视频、图片、标题等素材ID
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 需要查询审核建议的商品列表
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * 需要查询审核建议的素材列表，支持视频、图片、标题等素材ID
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 需要查询审核建议的素材列表，支持视频、图片、标题等素材ID
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 需要查询审核建议的商品列表
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * 需要查询审核建议的商品列表
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        return $obj;
    }
}
