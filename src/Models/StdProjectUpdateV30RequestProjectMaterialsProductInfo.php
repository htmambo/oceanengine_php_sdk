<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectUpdateV30RequestProjectMaterialsProductInfo implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * @var string[]
     */
    protected ?array $productImageFields = null;

    /**
     * @var string[]
     */
    protected ?array $productNameFields = null;

    /**
     * @var string[]
     */
    protected ?array $productSellingPointFields = null;

    /**
     * @var string[]
     */
    protected ?array $sellingPoints = null;

    /**
     * @var string[]
     */
    protected ?array $titles = null;

    /**
     * @return string[]
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * @param string[] $imageIds
     * @return self
     */
    public function setImageIds(?array $imageIds): self
    {
        $this->imageIds = $imageIds;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProductImageFields(): ?array
    {
        return $this->productImageFields;
    }

    /**
     * @param string[] $productImageFields
     * @return self
     */
    public function setProductImageFields(?array $productImageFields): self
    {
        $this->productImageFields = $productImageFields;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProductNameFields(): ?array
    {
        return $this->productNameFields;
    }

    /**
     * @param string[] $productNameFields
     * @return self
     */
    public function setProductNameFields(?array $productNameFields): self
    {
        $this->productNameFields = $productNameFields;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProductSellingPointFields(): ?array
    {
        return $this->productSellingPointFields;
    }

    /**
     * @param string[] $productSellingPointFields
     * @return self
     */
    public function setProductSellingPointFields(?array $productSellingPointFields): self
    {
        $this->productSellingPointFields = $productSellingPointFields;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSellingPoints(): ?array
    {
        return $this->sellingPoints;
    }

    /**
     * @param string[] $sellingPoints
     * @return self
     */
    public function setSellingPoints(?array $sellingPoints): self
    {
        $this->sellingPoints = $sellingPoints;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTitles(): ?array
    {
        return $this->titles;
    }

    /**
     * @param string[] $titles
     * @return self
     */
    public function setTitles(?array $titles): self
    {
        $this->titles = $titles;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageIds !== null) {
            $result['image_ids'] = $this->imageIds;
        }
        if ($this->productImageFields !== null) {
            $result['product_image_fields'] = $this->productImageFields;
        }
        if ($this->productNameFields !== null) {
            $result['product_name_fields'] = $this->productNameFields;
        }
        if ($this->productSellingPointFields !== null) {
            $result['product_selling_point_fields'] = $this->productSellingPointFields;
        }
        if ($this->sellingPoints !== null) {
            $result['selling_points'] = $this->sellingPoints;
        }
        if ($this->titles !== null) {
            $result['titles'] = $this->titles;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageIds = $v;
        }
        if (($v = $data['product_image_fields'] ?? null) !== null && is_array($v)) {
            $obj->productImageFields = $v;
        }
        if (($v = $data['product_name_fields'] ?? null) !== null && is_array($v)) {
            $obj->productNameFields = $v;
        }
        if (($v = $data['product_selling_point_fields'] ?? null) !== null && is_array($v)) {
            $obj->productSellingPointFields = $v;
        }
        if (($v = $data['selling_points'] ?? null) !== null && is_array($v)) {
            $obj->sellingPoints = $v;
        }
        if (($v = $data['titles'] ?? null) !== null && is_array($v)) {
            $obj->titles = $v;
        }
        return $obj;
    }
}
