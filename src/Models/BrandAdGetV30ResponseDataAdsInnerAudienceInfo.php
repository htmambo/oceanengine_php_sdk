<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerAudienceInfo implements \JsonSerializable
{
    /**
     * 网络
     * @var int[]
     */
    protected ?array $ac = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoAcV2
     */
    protected ?string $acV2 = null;

    /**
     * 新版兴趣(行为)定向
     * @var int[]
     */
    protected ?array $actionCategories = null;

    /**
     * 新版兴趣(行为)定向支持的层级  ['1']、['2']
     * @var string[]
     */
    protected ?array $actionCategoriesLevel = null;

    /**
     * 兴趣分类
     * @var int[]
     */
    protected ?array $adTag = null;

    /**
     * 年龄 [[0, 17], [18, 23]]
     * @var int[][]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoBrandSafety
     */
    protected ?string $brandSafety = null;

    /**
     * 商圈
     * @var int[]
     */
    protected ?array $businessIds = null;

    /**
     * 地域定向 - 城市
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * 内容关键词
     * @var string[]
     */
    protected ?array $contentKeyWords = null;

    /**
     * 人群包
     * @var int[]
     */
    protected ?array $displayRetargetingTags = null;

    /**
     * 地域类型,all:不限;select:城市;local:商圈
     * @var string
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoDistrictSplit
     */
    protected ?string $districtSplit = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoDistrictType
     */
    protected ?string $districtType = null;

    /**
     * 频道标识
     * @var int[]
     */
    protected ?array $entry = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoExcludeDistrict
     */
    protected ?string $excludeDistrict = null;

    /**
     * 性别
     * @var int
     */
    protected ?int $gender = null;

    /**
     * 商圈地理位置信息
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoGeolocationInner[]
     */
    protected ?array $geolocation = null;

    /**
     * 商圈拆分
     * @var int
     */
    protected ?int $isBusinessSplit = null;

    /**
     * 平台
     * @var int[]
     */
    protected ?array $platform = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoPlatformV2
     */
    protected ?string $platformV2 = null;

    /**
     * 地域定向 - 省份
     * @var int[]
     */
    protected ?array $province = null;

    /**
     * 人群包
     * @var array<string,\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoRetargetingTagTypeValue>
     */
    protected ?array $retargetingTagType = null;

    /**
     * 人群包
     * @var int[]
     */
    protected ?array $retargetingTags = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoRetargetingType
     */
    protected ?string $retargetingType = null;

    /**
     * 搜索关键词
     * @var string[]
     */
    protected ?array $searchKeyword = null;

    /**
     * 词包Id
     * @var int[]
     */
    protected ?array $wordBagIds = null;

    /**
     * 询价单关联的词条列表
     * @var string[]
     */
    protected ?array $wordList = null;

    /**
     * 网络
     * @return int[]
     */
    public function getAc(): ?array
    {
        return $this->ac;
    }

    /**
     * 网络
     * @param int[] $ac
     * @return self
     */
    public function setAc(?array $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoAcV2
     */
    public function getAcV2(): ?string
    {
        return $this->acV2;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoAcV2 $acV2
     * @return self
     */
    public function setAcV2(?string $acV2): self
    {
        $this->acV2 = $acV2;
        return $this;
    }

    /**
     * 新版兴趣(行为)定向
     * @return int[]
     */
    public function getActionCategories(): ?array
    {
        return $this->actionCategories;
    }

    /**
     * 新版兴趣(行为)定向
     * @param int[] $actionCategories
     * @return self
     */
    public function setActionCategories(?array $actionCategories): self
    {
        $this->actionCategories = $actionCategories;
        return $this;
    }

    /**
     * 新版兴趣(行为)定向支持的层级  ['1']、['2']
     * @return string[]
     */
    public function getActionCategoriesLevel(): ?array
    {
        return $this->actionCategoriesLevel;
    }

    /**
     * 新版兴趣(行为)定向支持的层级  ['1']、['2']
     * @param string[] $actionCategoriesLevel
     * @return self
     */
    public function setActionCategoriesLevel(?array $actionCategoriesLevel): self
    {
        $this->actionCategoriesLevel = $actionCategoriesLevel;
        return $this;
    }

    /**
     * 兴趣分类
     * @return int[]
     */
    public function getAdTag(): ?array
    {
        return $this->adTag;
    }

    /**
     * 兴趣分类
     * @param int[] $adTag
     * @return self
     */
    public function setAdTag(?array $adTag): self
    {
        $this->adTag = $adTag;
        return $this;
    }

    /**
     * 年龄 [[0, 17], [18, 23]]
     * @return int[][]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 年龄 [[0, 17], [18, 23]]
     * @param int[][] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoBrandSafety
     */
    public function getBrandSafety(): ?string
    {
        return $this->brandSafety;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoBrandSafety $brandSafety
     * @return self
     */
    public function setBrandSafety(?string $brandSafety): self
    {
        $this->brandSafety = $brandSafety;
        return $this;
    }

    /**
     * 商圈
     * @return int[]
     */
    public function getBusinessIds(): ?array
    {
        return $this->businessIds;
    }

    /**
     * 商圈
     * @param int[] $businessIds
     * @return self
     */
    public function setBusinessIds(?array $businessIds): self
    {
        $this->businessIds = $businessIds;
        return $this;
    }

    /**
     * 地域定向 - 城市
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * 地域定向 - 城市
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * 内容关键词
     * @return string[]
     */
    public function getContentKeyWords(): ?array
    {
        return $this->contentKeyWords;
    }

    /**
     * 内容关键词
     * @param string[] $contentKeyWords
     * @return self
     */
    public function setContentKeyWords(?array $contentKeyWords): self
    {
        $this->contentKeyWords = $contentKeyWords;
        return $this;
    }

    /**
     * 人群包
     * @return int[]
     */
    public function getDisplayRetargetingTags(): ?array
    {
        return $this->displayRetargetingTags;
    }

    /**
     * 人群包
     * @param int[] $displayRetargetingTags
     * @return self
     */
    public function setDisplayRetargetingTags(?array $displayRetargetingTags): self
    {
        $this->displayRetargetingTags = $displayRetargetingTags;
        return $this;
    }

    /**
     * 地域类型,all:不限;select:城市;local:商圈
     * @return string
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * 地域类型,all:不限;select:城市;local:商圈
     * @param string $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoDistrictSplit
     */
    public function getDistrictSplit(): ?string
    {
        return $this->districtSplit;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoDistrictSplit $districtSplit
     * @return self
     */
    public function setDistrictSplit(?string $districtSplit): self
    {
        $this->districtSplit = $districtSplit;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoDistrictType
     */
    public function getDistrictType(): ?string
    {
        return $this->districtType;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoDistrictType $districtType
     * @return self
     */
    public function setDistrictType(?string $districtType): self
    {
        $this->districtType = $districtType;
        return $this;
    }

    /**
     * 频道标识
     * @return int[]
     */
    public function getEntry(): ?array
    {
        return $this->entry;
    }

    /**
     * 频道标识
     * @param int[] $entry
     * @return self
     */
    public function setEntry(?array $entry): self
    {
        $this->entry = $entry;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoExcludeDistrict
     */
    public function getExcludeDistrict(): ?string
    {
        return $this->excludeDistrict;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoExcludeDistrict $excludeDistrict
     * @return self
     */
    public function setExcludeDistrict(?string $excludeDistrict): self
    {
        $this->excludeDistrict = $excludeDistrict;
        return $this;
    }

    /**
     * 性别
     * @return int
     */
    public function getGender(): ?int
    {
        return $this->gender;
    }

    /**
     * 性别
     * @param int $gender
     * @return self
     */
    public function setGender(?int $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * 商圈地理位置信息
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoGeolocationInner[]
     */
    public function getGeolocation(): ?array
    {
        return $this->geolocation;
    }

    /**
     * 商圈地理位置信息
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoGeolocationInner[] $geolocation
     * @return self
     */
    public function setGeolocation(?array $geolocation): self
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    /**
     * 商圈拆分
     * @return int
     */
    public function getIsBusinessSplit(): ?int
    {
        return $this->isBusinessSplit;
    }

    /**
     * 商圈拆分
     * @param int $isBusinessSplit
     * @return self
     */
    public function setIsBusinessSplit(?int $isBusinessSplit): self
    {
        $this->isBusinessSplit = $isBusinessSplit;
        return $this;
    }

    /**
     * 平台
     * @return int[]
     */
    public function getPlatform(): ?array
    {
        return $this->platform;
    }

    /**
     * 平台
     * @param int[] $platform
     * @return self
     */
    public function setPlatform(?array $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoPlatformV2
     */
    public function getPlatformV2(): ?string
    {
        return $this->platformV2;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoPlatformV2 $platformV2
     * @return self
     */
    public function setPlatformV2(?string $platformV2): self
    {
        $this->platformV2 = $platformV2;
        return $this;
    }

    /**
     * 地域定向 - 省份
     * @return int[]
     */
    public function getProvince(): ?array
    {
        return $this->province;
    }

    /**
     * 地域定向 - 省份
     * @param int[] $province
     * @return self
     */
    public function setProvince(?array $province): self
    {
        $this->province = $province;
        return $this;
    }

    /**
     * 人群包
     * @return array<string,\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoRetargetingTagTypeValue>
     */
    public function getRetargetingTagType(): ?array
    {
        return $this->retargetingTagType;
    }

    /**
     * 人群包
     * @param array<string,\Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoRetargetingTagTypeValue> $retargetingTagType
     * @return self
     */
    public function setRetargetingTagType(?array $retargetingTagType): self
    {
        $this->retargetingTagType = $retargetingTagType;
        return $this;
    }

    /**
     * 人群包
     * @return int[]
     */
    public function getRetargetingTags(): ?array
    {
        return $this->retargetingTags;
    }

    /**
     * 人群包
     * @param int[] $retargetingTags
     * @return self
     */
    public function setRetargetingTags(?array $retargetingTags): self
    {
        $this->retargetingTags = $retargetingTags;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoRetargetingType
     */
    public function getRetargetingType(): ?string
    {
        return $this->retargetingType;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsAudienceInfoRetargetingType $retargetingType
     * @return self
     */
    public function setRetargetingType(?string $retargetingType): self
    {
        $this->retargetingType = $retargetingType;
        return $this;
    }

    /**
     * 搜索关键词
     * @return string[]
     */
    public function getSearchKeyword(): ?array
    {
        return $this->searchKeyword;
    }

    /**
     * 搜索关键词
     * @param string[] $searchKeyword
     * @return self
     */
    public function setSearchKeyword(?array $searchKeyword): self
    {
        $this->searchKeyword = $searchKeyword;
        return $this;
    }

    /**
     * 词包Id
     * @return int[]
     */
    public function getWordBagIds(): ?array
    {
        return $this->wordBagIds;
    }

    /**
     * 词包Id
     * @param int[] $wordBagIds
     * @return self
     */
    public function setWordBagIds(?array $wordBagIds): self
    {
        $this->wordBagIds = $wordBagIds;
        return $this;
    }

    /**
     * 询价单关联的词条列表
     * @return string[]
     */
    public function getWordList(): ?array
    {
        return $this->wordList;
    }

    /**
     * 询价单关联的词条列表
     * @param string[] $wordList
     * @return self
     */
    public function setWordList(?array $wordList): self
    {
        $this->wordList = $wordList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ac !== null) {
            $result['ac'] = $this->ac;
        }
        if ($this->acV2 !== null) {
            $result['ac_v2'] = $this->acV2;
        }
        if ($this->actionCategories !== null) {
            $result['action_categories'] = $this->actionCategories;
        }
        if ($this->actionCategoriesLevel !== null) {
            $result['action_categories_level'] = $this->actionCategoriesLevel;
        }
        if ($this->adTag !== null) {
            $result['ad_tag'] = $this->adTag;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->brandSafety !== null) {
            $result['brand_safety'] = $this->brandSafety;
        }
        if ($this->businessIds !== null) {
            $result['business_ids'] = $this->businessIds;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->contentKeyWords !== null) {
            $result['content_key_words'] = $this->contentKeyWords;
        }
        if ($this->displayRetargetingTags !== null) {
            $result['display_retargeting_tags'] = $this->displayRetargetingTags;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->districtSplit !== null) {
            $result['district_split'] = $this->districtSplit;
        }
        if ($this->districtType !== null) {
            $result['district_type'] = $this->districtType;
        }
        if ($this->entry !== null) {
            $result['entry'] = $this->entry;
        }
        if ($this->excludeDistrict !== null) {
            $result['exclude_district'] = $this->excludeDistrict;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->geolocation !== null) {
            $result['geolocation'] = $this->geolocation;
        }
        if ($this->isBusinessSplit !== null) {
            $result['is_business_split'] = $this->isBusinessSplit;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->platformV2 !== null) {
            $result['platform_v2'] = $this->platformV2;
        }
        if ($this->province !== null) {
            $result['province'] = $this->province;
        }
        if ($this->retargetingTagType !== null) {
            $result['retargeting_tag_type'] = $this->retargetingTagType;
        }
        if ($this->retargetingTags !== null) {
            $result['retargeting_tags'] = $this->retargetingTags;
        }
        if ($this->retargetingType !== null) {
            $result['retargeting_type'] = $this->retargetingType;
        }
        if ($this->searchKeyword !== null) {
            $result['search_keyword'] = $this->searchKeyword;
        }
        if ($this->wordBagIds !== null) {
            $result['word_bag_ids'] = $this->wordBagIds;
        }
        if ($this->wordList !== null) {
            $result['word_list'] = $this->wordList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ac'] ?? null) !== null && is_array($v)) {
            $obj->ac = $v;
        }
        if (($v = $data['ac_v2'] ?? null) !== null) {
            $obj->acV2 = (string) $v;
        }
        if (($v = $data['action_categories'] ?? null) !== null && is_array($v)) {
            $obj->actionCategories = $v;
        }
        if (($v = $data['action_categories_level'] ?? null) !== null && is_array($v)) {
            $obj->actionCategoriesLevel = $v;
        }
        if (($v = $data['ad_tag'] ?? null) !== null && is_array($v)) {
            $obj->adTag = $v;
        }
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['brand_safety'] ?? null) !== null) {
            $obj->brandSafety = (string) $v;
        }
        if (($v = $data['business_ids'] ?? null) !== null && is_array($v)) {
            $obj->businessIds = $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['content_key_words'] ?? null) !== null && is_array($v)) {
            $obj->contentKeyWords = $v;
        }
        if (($v = $data['display_retargeting_tags'] ?? null) !== null && is_array($v)) {
            $obj->displayRetargetingTags = $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['district_split'] ?? null) !== null) {
            $obj->districtSplit = (string) $v;
        }
        if (($v = $data['district_type'] ?? null) !== null) {
            $obj->districtType = (string) $v;
        }
        if (($v = $data['entry'] ?? null) !== null && is_array($v)) {
            $obj->entry = $v;
        }
        if (($v = $data['exclude_district'] ?? null) !== null) {
            $obj->excludeDistrict = (string) $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (int) $v;
        }
        if (($v = $data['geolocation'] ?? null) !== null && is_array($v)) {
            $obj->geolocation = array_map(fn ($vv) => \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoGeolocationInner::fromArray($vv), $v);
        }
        if (($v = $data['is_business_split'] ?? null) !== null) {
            $obj->isBusinessSplit = (int) $v;
        }
        if (($v = $data['platform'] ?? null) !== null && is_array($v)) {
            $obj->platform = $v;
        }
        if (($v = $data['platform_v2'] ?? null) !== null) {
            $obj->platformV2 = (string) $v;
        }
        if (($v = $data['province'] ?? null) !== null && is_array($v)) {
            $obj->province = $v;
        }
        if (($v = $data['retargeting_tag_type'] ?? null) !== null && is_array($v)) {
            $obj->retargetingTagType = array_map(fn ($vv) => \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInnerAudienceInfoRetargetingTagTypeValue::fromArray($vv), $v);
        }
        if (($v = $data['retargeting_tags'] ?? null) !== null && is_array($v)) {
            $obj->retargetingTags = $v;
        }
        if (($v = $data['retargeting_type'] ?? null) !== null) {
            $obj->retargetingType = (string) $v;
        }
        if (($v = $data['search_keyword'] ?? null) !== null && is_array($v)) {
            $obj->searchKeyword = $v;
        }
        if (($v = $data['word_bag_ids'] ?? null) !== null && is_array($v)) {
            $obj->wordBagIds = $v;
        }
        if (($v = $data['word_list'] ?? null) !== null && is_array($v)) {
            $obj->wordList = $v;
        }
        return $obj;
    }
}
