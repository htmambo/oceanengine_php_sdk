<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCategoryInfo implements \JsonSerializable
{
    /**
     * 创意分类
     * @var int
     */
    protected ?int $adCategory = null;

    /**
     * 创意标签
     * @var string[]
     */
    protected ?array $adKeywords = null;

    /**
     * 品牌名称
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * 品牌名称Id
     * @var int
     */
    protected ?int $brandNameId = null;

    /**
     * cdp返回的品牌名称id
     * @var int
     */
    protected ?int $cdpBrandId = null;

    /**
     * 创意分类（行业3.0版）
     * @var int
     */
    protected ?int $industryV3 = null;

    /**
     * 产品名称
     * @var string[]
     */
    protected ?array $productName = null;

    /**
     * 品牌二级名称Ids
     * @var int[]
     */
    protected ?array $subBrandNameIds = null;

    /**
     * 品牌二级名称
     * @var string[]
     */
    protected ?array $subBrandNames = null;

    /**
     * 云图分类
     * @var int
     */
    protected ?int $yuntuCategoryId = null;

    /**
     * 云图一级分类ID
     * @var int
     */
    protected ?int $yuntuMainIndustryId = null;

    /**
     * 电商spuId
     * @var string
     */
    protected ?string $yuntuSpuId = null;

    /**
     * 电商spu名称
     * @var string
     */
    protected ?string $yuntuSpuName = null;

    /**
     * 创意分类
     * @return int
     */
    public function getAdCategory(): ?int
    {
        return $this->adCategory;
    }

    /**
     * 创意分类
     * @param int $adCategory
     * @return self
     */
    public function setAdCategory(?int $adCategory): self
    {
        $this->adCategory = $adCategory;
        return $this;
    }

    /**
     * 创意标签
     * @return string[]
     */
    public function getAdKeywords(): ?array
    {
        return $this->adKeywords;
    }

    /**
     * 创意标签
     * @param string[] $adKeywords
     * @return self
     */
    public function setAdKeywords(?array $adKeywords): self
    {
        $this->adKeywords = $adKeywords;
        return $this;
    }

    /**
     * 品牌名称
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * 品牌名称
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * 品牌名称Id
     * @return int
     */
    public function getBrandNameId(): ?int
    {
        return $this->brandNameId;
    }

    /**
     * 品牌名称Id
     * @param int $brandNameId
     * @return self
     */
    public function setBrandNameId(?int $brandNameId): self
    {
        $this->brandNameId = $brandNameId;
        return $this;
    }

    /**
     * cdp返回的品牌名称id
     * @return int
     */
    public function getCdpBrandId(): ?int
    {
        return $this->cdpBrandId;
    }

    /**
     * cdp返回的品牌名称id
     * @param int $cdpBrandId
     * @return self
     */
    public function setCdpBrandId(?int $cdpBrandId): self
    {
        $this->cdpBrandId = $cdpBrandId;
        return $this;
    }

    /**
     * 创意分类（行业3.0版）
     * @return int
     */
    public function getIndustryV3(): ?int
    {
        return $this->industryV3;
    }

    /**
     * 创意分类（行业3.0版）
     * @param int $industryV3
     * @return self
     */
    public function setIndustryV3(?int $industryV3): self
    {
        $this->industryV3 = $industryV3;
        return $this;
    }

    /**
     * 产品名称
     * @return string[]
     */
    public function getProductName(): ?array
    {
        return $this->productName;
    }

    /**
     * 产品名称
     * @param string[] $productName
     * @return self
     */
    public function setProductName(?array $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 品牌二级名称Ids
     * @return int[]
     */
    public function getSubBrandNameIds(): ?array
    {
        return $this->subBrandNameIds;
    }

    /**
     * 品牌二级名称Ids
     * @param int[] $subBrandNameIds
     * @return self
     */
    public function setSubBrandNameIds(?array $subBrandNameIds): self
    {
        $this->subBrandNameIds = $subBrandNameIds;
        return $this;
    }

    /**
     * 品牌二级名称
     * @return string[]
     */
    public function getSubBrandNames(): ?array
    {
        return $this->subBrandNames;
    }

    /**
     * 品牌二级名称
     * @param string[] $subBrandNames
     * @return self
     */
    public function setSubBrandNames(?array $subBrandNames): self
    {
        $this->subBrandNames = $subBrandNames;
        return $this;
    }

    /**
     * 云图分类
     * @return int
     */
    public function getYuntuCategoryId(): ?int
    {
        return $this->yuntuCategoryId;
    }

    /**
     * 云图分类
     * @param int $yuntuCategoryId
     * @return self
     */
    public function setYuntuCategoryId(?int $yuntuCategoryId): self
    {
        $this->yuntuCategoryId = $yuntuCategoryId;
        return $this;
    }

    /**
     * 云图一级分类ID
     * @return int
     */
    public function getYuntuMainIndustryId(): ?int
    {
        return $this->yuntuMainIndustryId;
    }

    /**
     * 云图一级分类ID
     * @param int $yuntuMainIndustryId
     * @return self
     */
    public function setYuntuMainIndustryId(?int $yuntuMainIndustryId): self
    {
        $this->yuntuMainIndustryId = $yuntuMainIndustryId;
        return $this;
    }

    /**
     * 电商spuId
     * @return string
     */
    public function getYuntuSpuId(): ?string
    {
        return $this->yuntuSpuId;
    }

    /**
     * 电商spuId
     * @param string $yuntuSpuId
     * @return self
     */
    public function setYuntuSpuId(?string $yuntuSpuId): self
    {
        $this->yuntuSpuId = $yuntuSpuId;
        return $this;
    }

    /**
     * 电商spu名称
     * @return string
     */
    public function getYuntuSpuName(): ?string
    {
        return $this->yuntuSpuName;
    }

    /**
     * 电商spu名称
     * @param string $yuntuSpuName
     * @return self
     */
    public function setYuntuSpuName(?string $yuntuSpuName): self
    {
        $this->yuntuSpuName = $yuntuSpuName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adCategory !== null) {
            $result['ad_category'] = $this->adCategory;
        }
        if ($this->adKeywords !== null) {
            $result['ad_keywords'] = $this->adKeywords;
        }
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        if ($this->brandNameId !== null) {
            $result['brand_name_id'] = $this->brandNameId;
        }
        if ($this->cdpBrandId !== null) {
            $result['cdp_brand_id'] = $this->cdpBrandId;
        }
        if ($this->industryV3 !== null) {
            $result['industry_v3'] = $this->industryV3;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->subBrandNameIds !== null) {
            $result['sub_brand_name_ids'] = $this->subBrandNameIds;
        }
        if ($this->subBrandNames !== null) {
            $result['sub_brand_names'] = $this->subBrandNames;
        }
        if ($this->yuntuCategoryId !== null) {
            $result['yuntu_category_id'] = $this->yuntuCategoryId;
        }
        if ($this->yuntuMainIndustryId !== null) {
            $result['yuntu_main_industry_id'] = $this->yuntuMainIndustryId;
        }
        if ($this->yuntuSpuId !== null) {
            $result['yuntu_spu_id'] = $this->yuntuSpuId;
        }
        if ($this->yuntuSpuName !== null) {
            $result['yuntu_spu_name'] = $this->yuntuSpuName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_category'] ?? null) !== null) {
            $obj->adCategory = (int) $v;
        }
        if (($v = $data['ad_keywords'] ?? null) !== null && is_array($v)) {
            $obj->adKeywords = $v;
        }
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        if (($v = $data['brand_name_id'] ?? null) !== null) {
            $obj->brandNameId = (int) $v;
        }
        if (($v = $data['cdp_brand_id'] ?? null) !== null) {
            $obj->cdpBrandId = (int) $v;
        }
        if (($v = $data['industry_v3'] ?? null) !== null) {
            $obj->industryV3 = (int) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null && is_array($v)) {
            $obj->productName = $v;
        }
        if (($v = $data['sub_brand_name_ids'] ?? null) !== null && is_array($v)) {
            $obj->subBrandNameIds = $v;
        }
        if (($v = $data['sub_brand_names'] ?? null) !== null && is_array($v)) {
            $obj->subBrandNames = $v;
        }
        if (($v = $data['yuntu_category_id'] ?? null) !== null) {
            $obj->yuntuCategoryId = (int) $v;
        }
        if (($v = $data['yuntu_main_industry_id'] ?? null) !== null) {
            $obj->yuntuMainIndustryId = (int) $v;
        }
        if (($v = $data['yuntu_spu_id'] ?? null) !== null) {
            $obj->yuntuSpuId = (string) $v;
        }
        if (($v = $data['yuntu_spu_name'] ?? null) !== null) {
            $obj->yuntuSpuName = (string) $v;
        }
        return $obj;
    }
}
