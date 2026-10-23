<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestCategoryInfo implements \JsonSerializable
{
    /**
     * 广告标签，选填
     * @var string[]
     */
    protected ?array $adKeywords = null;

    /**
     * 品牌名称Id，种草必填
     * @var int
     */
    protected ?int $brandNameId = null;

    /**
     * cdp返回的品牌名称id，非种草必填，与brand_name_id分别对应对应非种草和种草的品牌名称
     * @var int
     */
    protected ?int $cdpBrandId = null;

    /**
     * 广告分类（行业3.0版），选填
     * @var int
     */
    protected ?int $industryV3 = null;

    /**
     * 产品系列
     * @var int[]
     */
    protected ?array $subBrandNameIds = null;

    /**
     * 所属类别（云图分类），种草产品必填，其余选填
     * @var int
     */
    protected ?int $yuntuCategoryId = null;

    /**
     * 云图spuid，选填
     * @var string
     */
    protected ?string $yuntuSpuId = null;

    /**
     * 广告标签，选填
     * @return string[]
     */
    public function getAdKeywords(): ?array
    {
        return $this->adKeywords;
    }

    /**
     * 广告标签，选填
     * @param string[] $adKeywords
     * @return self
     */
    public function setAdKeywords(?array $adKeywords): self
    {
        $this->adKeywords = $adKeywords;
        return $this;
    }

    /**
     * 品牌名称Id，种草必填
     * @return int
     */
    public function getBrandNameId(): ?int
    {
        return $this->brandNameId;
    }

    /**
     * 品牌名称Id，种草必填
     * @param int $brandNameId
     * @return self
     */
    public function setBrandNameId(?int $brandNameId): self
    {
        $this->brandNameId = $brandNameId;
        return $this;
    }

    /**
     * cdp返回的品牌名称id，非种草必填，与brand_name_id分别对应对应非种草和种草的品牌名称
     * @return int
     */
    public function getCdpBrandId(): ?int
    {
        return $this->cdpBrandId;
    }

    /**
     * cdp返回的品牌名称id，非种草必填，与brand_name_id分别对应对应非种草和种草的品牌名称
     * @param int $cdpBrandId
     * @return self
     */
    public function setCdpBrandId(?int $cdpBrandId): self
    {
        $this->cdpBrandId = $cdpBrandId;
        return $this;
    }

    /**
     * 广告分类（行业3.0版），选填
     * @return int
     */
    public function getIndustryV3(): ?int
    {
        return $this->industryV3;
    }

    /**
     * 广告分类（行业3.0版），选填
     * @param int $industryV3
     * @return self
     */
    public function setIndustryV3(?int $industryV3): self
    {
        $this->industryV3 = $industryV3;
        return $this;
    }

    /**
     * 产品系列
     * @return int[]
     */
    public function getSubBrandNameIds(): ?array
    {
        return $this->subBrandNameIds;
    }

    /**
     * 产品系列
     * @param int[] $subBrandNameIds
     * @return self
     */
    public function setSubBrandNameIds(?array $subBrandNameIds): self
    {
        $this->subBrandNameIds = $subBrandNameIds;
        return $this;
    }

    /**
     * 所属类别（云图分类），种草产品必填，其余选填
     * @return int
     */
    public function getYuntuCategoryId(): ?int
    {
        return $this->yuntuCategoryId;
    }

    /**
     * 所属类别（云图分类），种草产品必填，其余选填
     * @param int $yuntuCategoryId
     * @return self
     */
    public function setYuntuCategoryId(?int $yuntuCategoryId): self
    {
        $this->yuntuCategoryId = $yuntuCategoryId;
        return $this;
    }

    /**
     * 云图spuid，选填
     * @return string
     */
    public function getYuntuSpuId(): ?string
    {
        return $this->yuntuSpuId;
    }

    /**
     * 云图spuid，选填
     * @param string $yuntuSpuId
     * @return self
     */
    public function setYuntuSpuId(?string $yuntuSpuId): self
    {
        $this->yuntuSpuId = $yuntuSpuId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adKeywords !== null) {
            $result['ad_keywords'] = $this->adKeywords;
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
        if ($this->subBrandNameIds !== null) {
            $result['sub_brand_name_ids'] = $this->subBrandNameIds;
        }
        if ($this->yuntuCategoryId !== null) {
            $result['yuntu_category_id'] = $this->yuntuCategoryId;
        }
        if ($this->yuntuSpuId !== null) {
            $result['yuntu_spu_id'] = $this->yuntuSpuId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_keywords'] ?? null) !== null && is_array($v)) {
            $obj->adKeywords = $v;
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
        if (($v = $data['sub_brand_name_ids'] ?? null) !== null && is_array($v)) {
            $obj->subBrandNameIds = $v;
        }
        if (($v = $data['yuntu_category_id'] ?? null) !== null) {
            $obj->yuntuCategoryId = (int) $v;
        }
        if (($v = $data['yuntu_spu_id'] ?? null) !== null) {
            $obj->yuntuSpuId = (string) $v;
        }
        return $obj;
    }
}
