<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfo implements \JsonSerializable
{
    /**
     * 品牌分类名称
     * @var \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoBrandNameListInner[]
     */
    protected ?array $brandNameList = null;

    /**
     * @var \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategory
     */
    protected ?\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategory $yuntuCategory = null;

    /**
     * @var array<string,\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuSubBrandInfoValueInner[]>
     */
    protected ?array $yuntuSubBrandInfo = null;

    /**
     * 品牌分类名称
     * @return \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoBrandNameListInner[]
     */
    public function getBrandNameList(): ?array
    {
        return $this->brandNameList;
    }

    /**
     * 品牌分类名称
     * @param \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoBrandNameListInner[] $brandNameList
     * @return self
     */
    public function setBrandNameList(?array $brandNameList): self
    {
        $this->brandNameList = $brandNameList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategory
     */
    public function getYuntuCategory(): ?\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategory
    {
        return $this->yuntuCategory;
    }

    /**
     * @param \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategory $yuntuCategory
     * @return self
     */
    public function setYuntuCategory(?\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategory $yuntuCategory): self
    {
        $this->yuntuCategory = $yuntuCategory;
        return $this;
    }

    /**
     * @return array<string,\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuSubBrandInfoValueInner[]>
     */
    public function getYuntuSubBrandInfo(): ?array
    {
        return $this->yuntuSubBrandInfo;
    }

    /**
     * @param array<string,\Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuSubBrandInfoValueInner[]> $yuntuSubBrandInfo
     * @return self
     */
    public function setYuntuSubBrandInfo(?array $yuntuSubBrandInfo): self
    {
        $this->yuntuSubBrandInfo = $yuntuSubBrandInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandNameList !== null) {
            $result['brand_name_list'] = $this->brandNameList;
        }
        if ($this->yuntuCategory !== null) {
            $result['yuntu_category'] = $this->yuntuCategory;
        }
        if ($this->yuntuSubBrandInfo !== null) {
            $result['yuntu_sub_brand_info'] = $this->yuntuSubBrandInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_name_list'] ?? null) !== null && is_array($v)) {
            $obj->brandNameList = array_map(fn ($vv) => \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoBrandNameListInner::fromArray($vv), $v);
        }
        if (($v = $data['yuntu_category'] ?? null) !== null && is_array($v)) {
            $obj->yuntuCategory = \Oceanengine\Models\BrandQueryYuntu5aBrandCategoryV30ResponseDataYuntu5aBrandCategoryInfoYuntuCategory::fromArray($v);
        }
        if (($v = $data['yuntu_sub_brand_info'] ?? null) !== null && is_array($v)) {
            $obj->yuntuSubBrandInfo = $v;
        }
        return $obj;
    }
}
