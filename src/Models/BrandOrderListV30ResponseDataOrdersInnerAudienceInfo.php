<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseDataOrdersInnerAudienceInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoAc
     */
    protected ?string $ac = null;

    /**
     * 兴趣
     * @var int[]
     */
    protected ?array $actionCategories = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting
     */
    protected ?string $additionalTargeting = null;

    /**
     * 年龄
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoAges[]
     */
    protected ?array $ages = null;

    /**
     * 优选人群拓展
     * @var string[]
     */
    protected ?array $autoExtendTargets = null;

    /**
     * @var string[]
     */
    protected ?array $chaseBrandList = null;

    /**
     * @var string[]
     */
    protected ?array $chaseCategoryList = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoDistrictInfo
     */
    protected ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoDistrictInfo $districtInfo = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoGender
     */
    protected ?string $gender = null;

    /**
     * @var array<string,mixed>[]
     */
    protected ?array $hotSpotEventList = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoIsRealTimeContextTarget
     */
    protected ?string $isRealTimeContextTarget = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoPlatform
     */
    protected ?string $platform = null;

    /**
     * @var \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoRetargetingInfo
     */
    protected ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoRetargetingInfo $retargetingInfo = null;

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoAc
     */
    public function getAc(): ?string
    {
        return $this->ac;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoAc $ac
     * @return self
     */
    public function setAc(?string $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    /**
     * 兴趣
     * @return int[]
     */
    public function getActionCategories(): ?array
    {
        return $this->actionCategories;
    }

    /**
     * 兴趣
     * @param int[] $actionCategories
     * @return self
     */
    public function setActionCategories(?array $actionCategories): self
    {
        $this->actionCategories = $actionCategories;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting
     */
    public function getAdditionalTargeting(): ?string
    {
        return $this->additionalTargeting;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoAdditionalTargeting $additionalTargeting
     * @return self
     */
    public function setAdditionalTargeting(?string $additionalTargeting): self
    {
        $this->additionalTargeting = $additionalTargeting;
        return $this;
    }

    /**
     * 年龄
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoAges[]
     */
    public function getAges(): ?array
    {
        return $this->ages;
    }

    /**
     * 年龄
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoAges[] $ages
     * @return self
     */
    public function setAges(?array $ages): self
    {
        $this->ages = $ages;
        return $this;
    }

    /**
     * 优选人群拓展
     * @return string[]
     */
    public function getAutoExtendTargets(): ?array
    {
        return $this->autoExtendTargets;
    }

    /**
     * 优选人群拓展
     * @param string[] $autoExtendTargets
     * @return self
     */
    public function setAutoExtendTargets(?array $autoExtendTargets): self
    {
        $this->autoExtendTargets = $autoExtendTargets;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getChaseBrandList(): ?array
    {
        return $this->chaseBrandList;
    }

    /**
     * @param string[] $chaseBrandList
     * @return self
     */
    public function setChaseBrandList(?array $chaseBrandList): self
    {
        $this->chaseBrandList = $chaseBrandList;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getChaseCategoryList(): ?array
    {
        return $this->chaseCategoryList;
    }

    /**
     * @param string[] $chaseCategoryList
     * @return self
     */
    public function setChaseCategoryList(?array $chaseCategoryList): self
    {
        $this->chaseCategoryList = $chaseCategoryList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoDistrictInfo
     */
    public function getDistrictInfo(): ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoDistrictInfo
    {
        return $this->districtInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoDistrictInfo $districtInfo
     * @return self
     */
    public function setDistrictInfo(?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoDistrictInfo $districtInfo): self
    {
        $this->districtInfo = $districtInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return array<string,mixed>[]
     */
    public function getHotSpotEventList(): ?array
    {
        return $this->hotSpotEventList;
    }

    /**
     * @param array<string,mixed>[] $hotSpotEventList
     * @return self
     */
    public function setHotSpotEventList(?array $hotSpotEventList): self
    {
        $this->hotSpotEventList = $hotSpotEventList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoIsRealTimeContextTarget
     */
    public function getIsRealTimeContextTarget(): ?string
    {
        return $this->isRealTimeContextTarget;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoIsRealTimeContextTarget $isRealTimeContextTarget
     * @return self
     */
    public function setIsRealTimeContextTarget(?string $isRealTimeContextTarget): self
    {
        $this->isRealTimeContextTarget = $isRealTimeContextTarget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30DataOrdersAudienceInfoPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoRetargetingInfo
     */
    public function getRetargetingInfo(): ?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoRetargetingInfo
    {
        return $this->retargetingInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoRetargetingInfo $retargetingInfo
     * @return self
     */
    public function setRetargetingInfo(?\Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoRetargetingInfo $retargetingInfo): self
    {
        $this->retargetingInfo = $retargetingInfo;
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
        if ($this->actionCategories !== null) {
            $result['action_categories'] = $this->actionCategories;
        }
        if ($this->additionalTargeting !== null) {
            $result['additional_targeting'] = $this->additionalTargeting;
        }
        if ($this->ages !== null) {
            $result['ages'] = $this->ages;
        }
        if ($this->autoExtendTargets !== null) {
            $result['auto_extend_targets'] = $this->autoExtendTargets;
        }
        if ($this->chaseBrandList !== null) {
            $result['chase_brand_list'] = $this->chaseBrandList;
        }
        if ($this->chaseCategoryList !== null) {
            $result['chase_category_list'] = $this->chaseCategoryList;
        }
        if ($this->districtInfo !== null) {
            $result['district_info'] = $this->districtInfo;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->hotSpotEventList !== null) {
            $result['hot_spot_event_list'] = $this->hotSpotEventList;
        }
        if ($this->isRealTimeContextTarget !== null) {
            $result['is_real_time_context_target'] = $this->isRealTimeContextTarget;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->retargetingInfo !== null) {
            $result['retargeting_info'] = $this->retargetingInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ac'] ?? null) !== null) {
            $obj->ac = (string) $v;
        }
        if (($v = $data['action_categories'] ?? null) !== null && is_array($v)) {
            $obj->actionCategories = $v;
        }
        if (($v = $data['additional_targeting'] ?? null) !== null) {
            $obj->additionalTargeting = (string) $v;
        }
        if (($v = $data['ages'] ?? null) !== null && is_array($v)) {
            $obj->ages = $v;
        }
        if (($v = $data['auto_extend_targets'] ?? null) !== null && is_array($v)) {
            $obj->autoExtendTargets = $v;
        }
        if (($v = $data['chase_brand_list'] ?? null) !== null && is_array($v)) {
            $obj->chaseBrandList = $v;
        }
        if (($v = $data['chase_category_list'] ?? null) !== null && is_array($v)) {
            $obj->chaseCategoryList = $v;
        }
        if (($v = $data['district_info'] ?? null) !== null && is_array($v)) {
            $obj->districtInfo = \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoDistrictInfo::fromArray($v);
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['hot_spot_event_list'] ?? null) !== null && is_array($v)) {
            $obj->hotSpotEventList = $v;
        }
        if (($v = $data['is_real_time_context_target'] ?? null) !== null) {
            $obj->isRealTimeContextTarget = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['retargeting_info'] ?? null) !== null && is_array($v)) {
            $obj->retargetingInfo = \Oceanengine\Models\BrandOrderListV30ResponseDataOrdersInnerAudienceInfoRetargetingInfo::fromArray($v);
        }
        return $obj;
    }
}
