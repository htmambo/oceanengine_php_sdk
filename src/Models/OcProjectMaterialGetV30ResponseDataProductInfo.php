<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30ResponseDataProductInfo implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * DPA产品库图片字段
     * @var string[]
     */
    protected ?array $productImageFields = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataProductInfoProductImageType
     */
    protected ?string $productImageType = null;

    /**
     * DPA产品库名称字段
     * @var string[]
     */
    protected ?array $productNameFields = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataProductInfoProductNameType
     */
    protected ?string $productNameType = null;

    /**
     * DPA产品库卖点类型字段
     * @var string[]
     */
    protected ?array $productSellingPointFields = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataProductInfoProductSellingPointType
     */
    protected ?string $productSellingPointType = null;

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
     * DPA产品库图片字段
     * @return string[]
     */
    public function getProductImageFields(): ?array
    {
        return $this->productImageFields;
    }

    /**
     * DPA产品库图片字段
     * @param string[] $productImageFields
     * @return self
     */
    public function setProductImageFields(?array $productImageFields): self
    {
        $this->productImageFields = $productImageFields;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataProductInfoProductImageType
     */
    public function getProductImageType(): ?string
    {
        return $this->productImageType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataProductInfoProductImageType $productImageType
     * @return self
     */
    public function setProductImageType(?string $productImageType): self
    {
        $this->productImageType = $productImageType;
        return $this;
    }

    /**
     * DPA产品库名称字段
     * @return string[]
     */
    public function getProductNameFields(): ?array
    {
        return $this->productNameFields;
    }

    /**
     * DPA产品库名称字段
     * @param string[] $productNameFields
     * @return self
     */
    public function setProductNameFields(?array $productNameFields): self
    {
        $this->productNameFields = $productNameFields;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataProductInfoProductNameType
     */
    public function getProductNameType(): ?string
    {
        return $this->productNameType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataProductInfoProductNameType $productNameType
     * @return self
     */
    public function setProductNameType(?string $productNameType): self
    {
        $this->productNameType = $productNameType;
        return $this;
    }

    /**
     * DPA产品库卖点类型字段
     * @return string[]
     */
    public function getProductSellingPointFields(): ?array
    {
        return $this->productSellingPointFields;
    }

    /**
     * DPA产品库卖点类型字段
     * @param string[] $productSellingPointFields
     * @return self
     */
    public function setProductSellingPointFields(?array $productSellingPointFields): self
    {
        $this->productSellingPointFields = $productSellingPointFields;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataProductInfoProductSellingPointType
     */
    public function getProductSellingPointType(): ?string
    {
        return $this->productSellingPointType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataProductInfoProductSellingPointType $productSellingPointType
     * @return self
     */
    public function setProductSellingPointType(?string $productSellingPointType): self
    {
        $this->productSellingPointType = $productSellingPointType;
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
        if ($this->productImageType !== null) {
            $result['product_image_type'] = $this->productImageType;
        }
        if ($this->productNameFields !== null) {
            $result['product_name_fields'] = $this->productNameFields;
        }
        if ($this->productNameType !== null) {
            $result['product_name_type'] = $this->productNameType;
        }
        if ($this->productSellingPointFields !== null) {
            $result['product_selling_point_fields'] = $this->productSellingPointFields;
        }
        if ($this->productSellingPointType !== null) {
            $result['product_selling_point_type'] = $this->productSellingPointType;
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
        if (($v = $data['product_image_type'] ?? null) !== null) {
            $obj->productImageType = (string) $v;
        }
        if (($v = $data['product_name_fields'] ?? null) !== null && is_array($v)) {
            $obj->productNameFields = $v;
        }
        if (($v = $data['product_name_type'] ?? null) !== null) {
            $obj->productNameType = (string) $v;
        }
        if (($v = $data['product_selling_point_fields'] ?? null) !== null && is_array($v)) {
            $obj->productSellingPointFields = $v;
        }
        if (($v = $data['product_selling_point_type'] ?? null) !== null) {
            $obj->productSellingPointType = (string) $v;
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
