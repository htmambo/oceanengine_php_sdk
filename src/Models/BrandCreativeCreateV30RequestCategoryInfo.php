<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeCreateV30RequestCategoryInfo implements \JsonSerializable
{
    /**
     * 标签
     * @var string[]
     */
    protected ?array $adKeyWord = null;

    /**
     * 品牌名称ID，优化目标为种草时写入
     * @var int
     */
    protected ?int $brandNameId = null;

    /**
     * 品牌名称ID，优化目标为非种草时写入
     * @var int
     */
    protected ?int $cdpBrandId = null;

    /**
     * 广告分类
     * @var int
     */
    protected ?int $industryV3 = null;

    /**
     * 产品系列
     * @var int[]
     */
    protected ?array $subBrandIds = null;

    /**
     * 所属类别三级id
     * @var int
     */
    protected ?int $yuntuCategoryId = null;

    /**
     * 所属类别二级id
     * @var int
     */
    protected ?int $yuntuIndustryId = null;

    /**
     * 所属类别一级id
     * @var int
     */
    protected ?int $yuntuMainIndustryId = null;

    /**
     * 云图SPU ID
     * @var string
     */
    protected ?string $yuntuSpuId = null;

    /**
     * 标签
     * @return string[]
     */
    public function getAdKeyWord(): ?array
    {
        return $this->adKeyWord;
    }

    /**
     * 标签
     * @param string[] $adKeyWord
     * @return self
     */
    public function setAdKeyWord(?array $adKeyWord): self
    {
        $this->adKeyWord = $adKeyWord;
        return $this;
    }

    /**
     * 品牌名称ID，优化目标为种草时写入
     * @return int
     */
    public function getBrandNameId(): ?int
    {
        return $this->brandNameId;
    }

    /**
     * 品牌名称ID，优化目标为种草时写入
     * @param int $brandNameId
     * @return self
     */
    public function setBrandNameId(?int $brandNameId): self
    {
        $this->brandNameId = $brandNameId;
        return $this;
    }

    /**
     * 品牌名称ID，优化目标为非种草时写入
     * @return int
     */
    public function getCdpBrandId(): ?int
    {
        return $this->cdpBrandId;
    }

    /**
     * 品牌名称ID，优化目标为非种草时写入
     * @param int $cdpBrandId
     * @return self
     */
    public function setCdpBrandId(?int $cdpBrandId): self
    {
        $this->cdpBrandId = $cdpBrandId;
        return $this;
    }

    /**
     * 广告分类
     * @return int
     */
    public function getIndustryV3(): ?int
    {
        return $this->industryV3;
    }

    /**
     * 广告分类
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
    public function getSubBrandIds(): ?array
    {
        return $this->subBrandIds;
    }

    /**
     * 产品系列
     * @param int[] $subBrandIds
     * @return self
     */
    public function setSubBrandIds(?array $subBrandIds): self
    {
        $this->subBrandIds = $subBrandIds;
        return $this;
    }

    /**
     * 所属类别三级id
     * @return int
     */
    public function getYuntuCategoryId(): ?int
    {
        return $this->yuntuCategoryId;
    }

    /**
     * 所属类别三级id
     * @param int $yuntuCategoryId
     * @return self
     */
    public function setYuntuCategoryId(?int $yuntuCategoryId): self
    {
        $this->yuntuCategoryId = $yuntuCategoryId;
        return $this;
    }

    /**
     * 所属类别二级id
     * @return int
     */
    public function getYuntuIndustryId(): ?int
    {
        return $this->yuntuIndustryId;
    }

    /**
     * 所属类别二级id
     * @param int $yuntuIndustryId
     * @return self
     */
    public function setYuntuIndustryId(?int $yuntuIndustryId): self
    {
        $this->yuntuIndustryId = $yuntuIndustryId;
        return $this;
    }

    /**
     * 所属类别一级id
     * @return int
     */
    public function getYuntuMainIndustryId(): ?int
    {
        return $this->yuntuMainIndustryId;
    }

    /**
     * 所属类别一级id
     * @param int $yuntuMainIndustryId
     * @return self
     */
    public function setYuntuMainIndustryId(?int $yuntuMainIndustryId): self
    {
        $this->yuntuMainIndustryId = $yuntuMainIndustryId;
        return $this;
    }

    /**
     * 云图SPU ID
     * @return string
     */
    public function getYuntuSpuId(): ?string
    {
        return $this->yuntuSpuId;
    }

    /**
     * 云图SPU ID
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
        if ($this->adKeyWord !== null) {
            $result['ad_key_word'] = $this->adKeyWord;
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
        if ($this->subBrandIds !== null) {
            $result['sub_brand_ids'] = $this->subBrandIds;
        }
        if ($this->yuntuCategoryId !== null) {
            $result['yuntu_category_id'] = $this->yuntuCategoryId;
        }
        if ($this->yuntuIndustryId !== null) {
            $result['yuntu_industry_id'] = $this->yuntuIndustryId;
        }
        if ($this->yuntuMainIndustryId !== null) {
            $result['yuntu_main_industry_id'] = $this->yuntuMainIndustryId;
        }
        if ($this->yuntuSpuId !== null) {
            $result['yuntu_spu_id'] = $this->yuntuSpuId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_key_word'] ?? null) !== null && is_array($v)) {
            $obj->adKeyWord = $v;
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
        if (($v = $data['sub_brand_ids'] ?? null) !== null && is_array($v)) {
            $obj->subBrandIds = $v;
        }
        if (($v = $data['yuntu_category_id'] ?? null) !== null) {
            $obj->yuntuCategoryId = (int) $v;
        }
        if (($v = $data['yuntu_industry_id'] ?? null) !== null) {
            $obj->yuntuIndustryId = (int) $v;
        }
        if (($v = $data['yuntu_main_industry_id'] ?? null) !== null) {
            $obj->yuntuMainIndustryId = (int) $v;
        }
        if (($v = $data['yuntu_spu_id'] ?? null) !== null) {
            $obj->yuntuSpuId = (string) $v;
        }
        return $obj;
    }
}
