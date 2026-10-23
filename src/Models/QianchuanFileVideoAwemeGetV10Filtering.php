<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanFileVideoAwemeGetV10Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $awemeItemIds = null;

    /**
     * @var string
     */
    protected ?string $awemeItemUrl = null;

    /**
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @return int[]
     */
    public function getAwemeItemIds(): ?array
    {
        return $this->awemeItemIds;
    }

    /**
     * @param int[] $awemeItemIds
     * @return self
     */
    public function setAwemeItemIds(?array $awemeItemIds): self
    {
        $this->awemeItemIds = $awemeItemIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeItemUrl(): ?string
    {
        return $this->awemeItemUrl;
    }

    /**
     * @param string $awemeItemUrl
     * @return self
     */
    public function setAwemeItemUrl(?string $awemeItemUrl): self
    {
        $this->awemeItemUrl = $awemeItemUrl;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeItemIds !== null) {
            $result['aweme_item_ids'] = $this->awemeItemIds;
        }
        if ($this->awemeItemUrl !== null) {
            $result['aweme_item_url'] = $this->awemeItemUrl;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_ids'] ?? null) !== null && is_array($v)) {
            $obj->awemeItemIds = $v;
        }
        if (($v = $data['aweme_item_url'] ?? null) !== null) {
            $obj->awemeItemUrl = (string) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        return $obj;
    }
}
