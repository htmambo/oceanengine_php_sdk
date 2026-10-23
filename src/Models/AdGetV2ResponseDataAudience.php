<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdGetV2ResponseDataAudience implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceAc[]
     */
    protected ?array $ac = null;

    /**
     * @var \Oceanengine\Models\AdGetV2ResponseDataAudienceAction
     */
    protected ?\Oceanengine\Models\AdGetV2ResponseDataAudienceAction $action = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceActivateType[]
     */
    protected ?array $activateType = null;

    /**
     * @var int[]
     */
    protected ?array $adTag = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceAge[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceAndroidOsv
     */
    protected ?string $androidOsv = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceAppBehaviorTarget
     */
    protected ?string $appBehaviorTarget = null;

    /**
     * @var int[]
     */
    protected ?array $appCategory = null;

    /**
     * @var int[]
     */
    protected ?array $appIds = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceArticleCategory[]
     */
    protected ?array $articleCategory = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceAutoExtendTargets[]
     */
    protected ?array $autoExtendTargets = null;

    /**
     * @var int[]
     */
    protected ?array $awemeFanAccounts = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceAwemeFanBehaviors[]
     */
    protected ?array $awemeFanBehaviors = null;

    /**
     * @var int[]
     */
    protected ?array $awemeFanCategories = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceAwemeFanTimeScope
     */
    protected ?string $awemeFanTimeScope = null;

    /**
     * @var int[]
     */
    protected ?array $awemeFansNumbers = null;

    /**
     * @var int[]
     */
    protected ?array $businessIds = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceCareer[]
     */
    protected ?array $career = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceCarrier[]
     */
    protected ?array $carrier = null;

    /**
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceDeviceBrand[]
     */
    protected ?array $deviceBrand = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceDeviceType[]
     */
    protected ?array $deviceType = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceDistrict
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceDpaRtaRecommendType
     */
    protected ?string $dpaRtaRecommendType = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceDpaRtaSwitch
     */
    protected ?string $dpaRtaSwitch = null;

    /**
     * @var int[]
     */
    protected ?array $excludeFlowPackage = null;

    /**
     * @var int
     */
    protected ?int $filterAwemeAbnormalActive = null;

    /**
     * @var int
     */
    protected ?int $filterAwemeFansCount = null;

    /**
     * @var int
     */
    protected ?int $filterOwnAwemeFans = null;

    /**
     * @var int[]
     */
    protected ?array $flowPackage = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\AdGetV2ResponseDataAudienceGeolocationInner[]
     */
    protected ?array $geolocation = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceInterestActionMode
     */
    protected ?string $interestActionMode = null;

    /**
     * @var int[]
     */
    protected ?array $interestCategories = null;

    /**
     * @var int[]
     */
    protected ?array $interestTags = null;

    /**
     * @var int[]
     */
    protected ?array $interestWords = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceIosOsv
     */
    protected ?string $iosOsv = null;

    /**
     * @var int[]
     */
    protected ?array $launchPrice = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceLocationType
     */
    protected ?string $locationType = null;

    /**
     * @var int
     */
    protected ?int $ownAwemeNumber = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudiencePlatform[]
     */
    protected ?array $platform = null;

    /**
     * @var string
     */
    protected ?string $regionVersion = null;

    /**
     * @var int[]
     */
    protected ?array $retargetingTagsExclude = null;

    /**
     * @var int[]
     */
    protected ?array $retargetingTagsInclude = null;

    /**
     * @var \Oceanengine\Models\AdGetV2DataAudienceSuperiorPopularityType
     */
    protected ?string $superiorPopularityType = null;

    /**
     * @var int[]
     */
    protected ?array $userType = null;

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceAc[]
     */
    public function getAc(): ?array
    {
        return $this->ac;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceAc[] $ac
     * @return self
     */
    public function setAc(?array $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2ResponseDataAudienceAction
     */
    public function getAction(): ?\Oceanengine\Models\AdGetV2ResponseDataAudienceAction
    {
        return $this->action;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2ResponseDataAudienceAction $action
     * @return self
     */
    public function setAction(?\Oceanengine\Models\AdGetV2ResponseDataAudienceAction $action): self
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceActivateType[]
     */
    public function getActivateType(): ?array
    {
        return $this->activateType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceActivateType[] $activateType
     * @return self
     */
    public function setActivateType(?array $activateType): self
    {
        $this->activateType = $activateType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAdTag(): ?array
    {
        return $this->adTag;
    }

    /**
     * @param int[] $adTag
     * @return self
     */
    public function setAdTag(?array $adTag): self
    {
        $this->adTag = $adTag;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceAge[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceAndroidOsv
     */
    public function getAndroidOsv(): ?string
    {
        return $this->androidOsv;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceAndroidOsv $androidOsv
     * @return self
     */
    public function setAndroidOsv(?string $androidOsv): self
    {
        $this->androidOsv = $androidOsv;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceAppBehaviorTarget
     */
    public function getAppBehaviorTarget(): ?string
    {
        return $this->appBehaviorTarget;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceAppBehaviorTarget $appBehaviorTarget
     * @return self
     */
    public function setAppBehaviorTarget(?string $appBehaviorTarget): self
    {
        $this->appBehaviorTarget = $appBehaviorTarget;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAppCategory(): ?array
    {
        return $this->appCategory;
    }

    /**
     * @param int[] $appCategory
     * @return self
     */
    public function setAppCategory(?array $appCategory): self
    {
        $this->appCategory = $appCategory;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAppIds(): ?array
    {
        return $this->appIds;
    }

    /**
     * @param int[] $appIds
     * @return self
     */
    public function setAppIds(?array $appIds): self
    {
        $this->appIds = $appIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceArticleCategory[]
     */
    public function getArticleCategory(): ?array
    {
        return $this->articleCategory;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceArticleCategory[] $articleCategory
     * @return self
     */
    public function setArticleCategory(?array $articleCategory): self
    {
        $this->articleCategory = $articleCategory;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceAutoExtendTargets[]
     */
    public function getAutoExtendTargets(): ?array
    {
        return $this->autoExtendTargets;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceAutoExtendTargets[] $autoExtendTargets
     * @return self
     */
    public function setAutoExtendTargets(?array $autoExtendTargets): self
    {
        $this->autoExtendTargets = $autoExtendTargets;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAwemeFanAccounts(): ?array
    {
        return $this->awemeFanAccounts;
    }

    /**
     * @param int[] $awemeFanAccounts
     * @return self
     */
    public function setAwemeFanAccounts(?array $awemeFanAccounts): self
    {
        $this->awemeFanAccounts = $awemeFanAccounts;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceAwemeFanBehaviors[]
     */
    public function getAwemeFanBehaviors(): ?array
    {
        return $this->awemeFanBehaviors;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceAwemeFanBehaviors[] $awemeFanBehaviors
     * @return self
     */
    public function setAwemeFanBehaviors(?array $awemeFanBehaviors): self
    {
        $this->awemeFanBehaviors = $awemeFanBehaviors;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAwemeFanCategories(): ?array
    {
        return $this->awemeFanCategories;
    }

    /**
     * @param int[] $awemeFanCategories
     * @return self
     */
    public function setAwemeFanCategories(?array $awemeFanCategories): self
    {
        $this->awemeFanCategories = $awemeFanCategories;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceAwemeFanTimeScope
     */
    public function getAwemeFanTimeScope(): ?string
    {
        return $this->awemeFanTimeScope;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceAwemeFanTimeScope $awemeFanTimeScope
     * @return self
     */
    public function setAwemeFanTimeScope(?string $awemeFanTimeScope): self
    {
        $this->awemeFanTimeScope = $awemeFanTimeScope;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAwemeFansNumbers(): ?array
    {
        return $this->awemeFansNumbers;
    }

    /**
     * @param int[] $awemeFansNumbers
     * @return self
     */
    public function setAwemeFansNumbers(?array $awemeFansNumbers): self
    {
        $this->awemeFansNumbers = $awemeFansNumbers;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getBusinessIds(): ?array
    {
        return $this->businessIds;
    }

    /**
     * @param int[] $businessIds
     * @return self
     */
    public function setBusinessIds(?array $businessIds): self
    {
        $this->businessIds = $businessIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceCareer[]
     */
    public function getCareer(): ?array
    {
        return $this->career;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceCareer[] $career
     * @return self
     */
    public function setCareer(?array $career): self
    {
        $this->career = $career;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceCarrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->carrier;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceCarrier[] $carrier
     * @return self
     */
    public function setCarrier(?array $carrier): self
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * @param int[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceDeviceBrand[]
     */
    public function getDeviceBrand(): ?array
    {
        return $this->deviceBrand;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceDeviceBrand[] $deviceBrand
     * @return self
     */
    public function setDeviceBrand(?array $deviceBrand): self
    {
        $this->deviceBrand = $deviceBrand;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceDeviceType[]
     */
    public function getDeviceType(): ?array
    {
        return $this->deviceType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceDeviceType[] $deviceType
     * @return self
     */
    public function setDeviceType(?array $deviceType): self
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceDpaRtaRecommendType
     */
    public function getDpaRtaRecommendType(): ?string
    {
        return $this->dpaRtaRecommendType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceDpaRtaRecommendType $dpaRtaRecommendType
     * @return self
     */
    public function setDpaRtaRecommendType(?string $dpaRtaRecommendType): self
    {
        $this->dpaRtaRecommendType = $dpaRtaRecommendType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceDpaRtaSwitch
     */
    public function getDpaRtaSwitch(): ?string
    {
        return $this->dpaRtaSwitch;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceDpaRtaSwitch $dpaRtaSwitch
     * @return self
     */
    public function setDpaRtaSwitch(?string $dpaRtaSwitch): self
    {
        $this->dpaRtaSwitch = $dpaRtaSwitch;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getExcludeFlowPackage(): ?array
    {
        return $this->excludeFlowPackage;
    }

    /**
     * @param int[] $excludeFlowPackage
     * @return self
     */
    public function setExcludeFlowPackage(?array $excludeFlowPackage): self
    {
        $this->excludeFlowPackage = $excludeFlowPackage;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterAwemeAbnormalActive(): ?int
    {
        return $this->filterAwemeAbnormalActive;
    }

    /**
     * @param int $filterAwemeAbnormalActive
     * @return self
     */
    public function setFilterAwemeAbnormalActive(?int $filterAwemeAbnormalActive): self
    {
        $this->filterAwemeAbnormalActive = $filterAwemeAbnormalActive;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterAwemeFansCount(): ?int
    {
        return $this->filterAwemeFansCount;
    }

    /**
     * @param int $filterAwemeFansCount
     * @return self
     */
    public function setFilterAwemeFansCount(?int $filterAwemeFansCount): self
    {
        $this->filterAwemeFansCount = $filterAwemeFansCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilterOwnAwemeFans(): ?int
    {
        return $this->filterOwnAwemeFans;
    }

    /**
     * @param int $filterOwnAwemeFans
     * @return self
     */
    public function setFilterOwnAwemeFans(?int $filterOwnAwemeFans): self
    {
        $this->filterOwnAwemeFans = $filterOwnAwemeFans;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getFlowPackage(): ?array
    {
        return $this->flowPackage;
    }

    /**
     * @param int[] $flowPackage
     * @return self
     */
    public function setFlowPackage(?array $flowPackage): self
    {
        $this->flowPackage = $flowPackage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2ResponseDataAudienceGeolocationInner[]
     */
    public function getGeolocation(): ?array
    {
        return $this->geolocation;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2ResponseDataAudienceGeolocationInner[] $geolocation
     * @return self
     */
    public function setGeolocation(?array $geolocation): self
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceInterestActionMode
     */
    public function getInterestActionMode(): ?string
    {
        return $this->interestActionMode;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceInterestActionMode $interestActionMode
     * @return self
     */
    public function setInterestActionMode(?string $interestActionMode): self
    {
        $this->interestActionMode = $interestActionMode;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getInterestCategories(): ?array
    {
        return $this->interestCategories;
    }

    /**
     * @param int[] $interestCategories
     * @return self
     */
    public function setInterestCategories(?array $interestCategories): self
    {
        $this->interestCategories = $interestCategories;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getInterestTags(): ?array
    {
        return $this->interestTags;
    }

    /**
     * @param int[] $interestTags
     * @return self
     */
    public function setInterestTags(?array $interestTags): self
    {
        $this->interestTags = $interestTags;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getInterestWords(): ?array
    {
        return $this->interestWords;
    }

    /**
     * @param int[] $interestWords
     * @return self
     */
    public function setInterestWords(?array $interestWords): self
    {
        $this->interestWords = $interestWords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceIosOsv
     */
    public function getIosOsv(): ?string
    {
        return $this->iosOsv;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceIosOsv $iosOsv
     * @return self
     */
    public function setIosOsv(?string $iosOsv): self
    {
        $this->iosOsv = $iosOsv;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getLaunchPrice(): ?array
    {
        return $this->launchPrice;
    }

    /**
     * @param int[] $launchPrice
     * @return self
     */
    public function setLaunchPrice(?array $launchPrice): self
    {
        $this->launchPrice = $launchPrice;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceLocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceLocationType $locationType
     * @return self
     */
    public function setLocationType(?string $locationType): self
    {
        $this->locationType = $locationType;
        return $this;
    }

    /**
     * @return int
     */
    public function getOwnAwemeNumber(): ?int
    {
        return $this->ownAwemeNumber;
    }

    /**
     * @param int $ownAwemeNumber
     * @return self
     */
    public function setOwnAwemeNumber(?int $ownAwemeNumber): self
    {
        $this->ownAwemeNumber = $ownAwemeNumber;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudiencePlatform[]
     */
    public function getPlatform(): ?array
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudiencePlatform[] $platform
     * @return self
     */
    public function setPlatform(?array $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionVersion(): ?string
    {
        return $this->regionVersion;
    }

    /**
     * @param string $regionVersion
     * @return self
     */
    public function setRegionVersion(?string $regionVersion): self
    {
        $this->regionVersion = $regionVersion;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getRetargetingTagsExclude(): ?array
    {
        return $this->retargetingTagsExclude;
    }

    /**
     * @param int[] $retargetingTagsExclude
     * @return self
     */
    public function setRetargetingTagsExclude(?array $retargetingTagsExclude): self
    {
        $this->retargetingTagsExclude = $retargetingTagsExclude;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getRetargetingTagsInclude(): ?array
    {
        return $this->retargetingTagsInclude;
    }

    /**
     * @param int[] $retargetingTagsInclude
     * @return self
     */
    public function setRetargetingTagsInclude(?array $retargetingTagsInclude): self
    {
        $this->retargetingTagsInclude = $retargetingTagsInclude;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdGetV2DataAudienceSuperiorPopularityType
     */
    public function getSuperiorPopularityType(): ?string
    {
        return $this->superiorPopularityType;
    }

    /**
     * @param \Oceanengine\Models\AdGetV2DataAudienceSuperiorPopularityType $superiorPopularityType
     * @return self
     */
    public function setSuperiorPopularityType(?string $superiorPopularityType): self
    {
        $this->superiorPopularityType = $superiorPopularityType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getUserType(): ?array
    {
        return $this->userType;
    }

    /**
     * @param int[] $userType
     * @return self
     */
    public function setUserType(?array $userType): self
    {
        $this->userType = $userType;
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
        if ($this->action !== null) {
            $result['action'] = $this->action;
        }
        if ($this->activateType !== null) {
            $result['activate_type'] = $this->activateType;
        }
        if ($this->adTag !== null) {
            $result['ad_tag'] = $this->adTag;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->androidOsv !== null) {
            $result['android_osv'] = $this->androidOsv;
        }
        if ($this->appBehaviorTarget !== null) {
            $result['app_behavior_target'] = $this->appBehaviorTarget;
        }
        if ($this->appCategory !== null) {
            $result['app_category'] = $this->appCategory;
        }
        if ($this->appIds !== null) {
            $result['app_ids'] = $this->appIds;
        }
        if ($this->articleCategory !== null) {
            $result['article_category'] = $this->articleCategory;
        }
        if ($this->autoExtendTargets !== null) {
            $result['auto_extend_targets'] = $this->autoExtendTargets;
        }
        if ($this->awemeFanAccounts !== null) {
            $result['aweme_fan_accounts'] = $this->awemeFanAccounts;
        }
        if ($this->awemeFanBehaviors !== null) {
            $result['aweme_fan_behaviors'] = $this->awemeFanBehaviors;
        }
        if ($this->awemeFanCategories !== null) {
            $result['aweme_fan_categories'] = $this->awemeFanCategories;
        }
        if ($this->awemeFanTimeScope !== null) {
            $result['aweme_fan_time_scope'] = $this->awemeFanTimeScope;
        }
        if ($this->awemeFansNumbers !== null) {
            $result['aweme_fans_numbers'] = $this->awemeFansNumbers;
        }
        if ($this->businessIds !== null) {
            $result['business_ids'] = $this->businessIds;
        }
        if ($this->career !== null) {
            $result['career'] = $this->career;
        }
        if ($this->carrier !== null) {
            $result['carrier'] = $this->carrier;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->deviceBrand !== null) {
            $result['device_brand'] = $this->deviceBrand;
        }
        if ($this->deviceType !== null) {
            $result['device_type'] = $this->deviceType;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->dpaRtaRecommendType !== null) {
            $result['dpa_rta_recommend_type'] = $this->dpaRtaRecommendType;
        }
        if ($this->dpaRtaSwitch !== null) {
            $result['dpa_rta_switch'] = $this->dpaRtaSwitch;
        }
        if ($this->excludeFlowPackage !== null) {
            $result['exclude_flow_package'] = $this->excludeFlowPackage;
        }
        if ($this->filterAwemeAbnormalActive !== null) {
            $result['filter_aweme_abnormal_active'] = $this->filterAwemeAbnormalActive;
        }
        if ($this->filterAwemeFansCount !== null) {
            $result['filter_aweme_fans_count'] = $this->filterAwemeFansCount;
        }
        if ($this->filterOwnAwemeFans !== null) {
            $result['filter_own_aweme_fans'] = $this->filterOwnAwemeFans;
        }
        if ($this->flowPackage !== null) {
            $result['flow_package'] = $this->flowPackage;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->geolocation !== null) {
            $result['geolocation'] = $this->geolocation;
        }
        if ($this->interestActionMode !== null) {
            $result['interest_action_mode'] = $this->interestActionMode;
        }
        if ($this->interestCategories !== null) {
            $result['interest_categories'] = $this->interestCategories;
        }
        if ($this->interestTags !== null) {
            $result['interest_tags'] = $this->interestTags;
        }
        if ($this->interestWords !== null) {
            $result['interest_words'] = $this->interestWords;
        }
        if ($this->iosOsv !== null) {
            $result['ios_osv'] = $this->iosOsv;
        }
        if ($this->launchPrice !== null) {
            $result['launch_price'] = $this->launchPrice;
        }
        if ($this->locationType !== null) {
            $result['location_type'] = $this->locationType;
        }
        if ($this->ownAwemeNumber !== null) {
            $result['own_aweme_number'] = $this->ownAwemeNumber;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->regionVersion !== null) {
            $result['region_version'] = $this->regionVersion;
        }
        if ($this->retargetingTagsExclude !== null) {
            $result['retargeting_tags_exclude'] = $this->retargetingTagsExclude;
        }
        if ($this->retargetingTagsInclude !== null) {
            $result['retargeting_tags_include'] = $this->retargetingTagsInclude;
        }
        if ($this->superiorPopularityType !== null) {
            $result['superior_popularity_type'] = $this->superiorPopularityType;
        }
        if ($this->userType !== null) {
            $result['user_type'] = $this->userType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ac'] ?? null) !== null && is_array($v)) {
            $obj->ac = $v;
        }
        if (($v = $data['action'] ?? null) !== null && is_array($v)) {
            $obj->action = \Oceanengine\Models\AdGetV2ResponseDataAudienceAction::fromArray($v);
        }
        if (($v = $data['activate_type'] ?? null) !== null && is_array($v)) {
            $obj->activateType = $v;
        }
        if (($v = $data['ad_tag'] ?? null) !== null && is_array($v)) {
            $obj->adTag = $v;
        }
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['android_osv'] ?? null) !== null) {
            $obj->androidOsv = (string) $v;
        }
        if (($v = $data['app_behavior_target'] ?? null) !== null) {
            $obj->appBehaviorTarget = (string) $v;
        }
        if (($v = $data['app_category'] ?? null) !== null && is_array($v)) {
            $obj->appCategory = $v;
        }
        if (($v = $data['app_ids'] ?? null) !== null && is_array($v)) {
            $obj->appIds = $v;
        }
        if (($v = $data['article_category'] ?? null) !== null && is_array($v)) {
            $obj->articleCategory = $v;
        }
        if (($v = $data['auto_extend_targets'] ?? null) !== null && is_array($v)) {
            $obj->autoExtendTargets = $v;
        }
        if (($v = $data['aweme_fan_accounts'] ?? null) !== null && is_array($v)) {
            $obj->awemeFanAccounts = $v;
        }
        if (($v = $data['aweme_fan_behaviors'] ?? null) !== null && is_array($v)) {
            $obj->awemeFanBehaviors = $v;
        }
        if (($v = $data['aweme_fan_categories'] ?? null) !== null && is_array($v)) {
            $obj->awemeFanCategories = $v;
        }
        if (($v = $data['aweme_fan_time_scope'] ?? null) !== null) {
            $obj->awemeFanTimeScope = (string) $v;
        }
        if (($v = $data['aweme_fans_numbers'] ?? null) !== null && is_array($v)) {
            $obj->awemeFansNumbers = $v;
        }
        if (($v = $data['business_ids'] ?? null) !== null && is_array($v)) {
            $obj->businessIds = $v;
        }
        if (($v = $data['career'] ?? null) !== null && is_array($v)) {
            $obj->career = $v;
        }
        if (($v = $data['carrier'] ?? null) !== null && is_array($v)) {
            $obj->carrier = $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['device_brand'] ?? null) !== null && is_array($v)) {
            $obj->deviceBrand = $v;
        }
        if (($v = $data['device_type'] ?? null) !== null && is_array($v)) {
            $obj->deviceType = $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['dpa_rta_recommend_type'] ?? null) !== null) {
            $obj->dpaRtaRecommendType = (string) $v;
        }
        if (($v = $data['dpa_rta_switch'] ?? null) !== null) {
            $obj->dpaRtaSwitch = (string) $v;
        }
        if (($v = $data['exclude_flow_package'] ?? null) !== null && is_array($v)) {
            $obj->excludeFlowPackage = $v;
        }
        if (($v = $data['filter_aweme_abnormal_active'] ?? null) !== null) {
            $obj->filterAwemeAbnormalActive = (int) $v;
        }
        if (($v = $data['filter_aweme_fans_count'] ?? null) !== null) {
            $obj->filterAwemeFansCount = (int) $v;
        }
        if (($v = $data['filter_own_aweme_fans'] ?? null) !== null) {
            $obj->filterOwnAwemeFans = (int) $v;
        }
        if (($v = $data['flow_package'] ?? null) !== null && is_array($v)) {
            $obj->flowPackage = $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['geolocation'] ?? null) !== null && is_array($v)) {
            $obj->geolocation = array_map(fn ($vv) => \Oceanengine\Models\AdGetV2ResponseDataAudienceGeolocationInner::fromArray($vv), $v);
        }
        if (($v = $data['interest_action_mode'] ?? null) !== null) {
            $obj->interestActionMode = (string) $v;
        }
        if (($v = $data['interest_categories'] ?? null) !== null && is_array($v)) {
            $obj->interestCategories = $v;
        }
        if (($v = $data['interest_tags'] ?? null) !== null && is_array($v)) {
            $obj->interestTags = $v;
        }
        if (($v = $data['interest_words'] ?? null) !== null && is_array($v)) {
            $obj->interestWords = $v;
        }
        if (($v = $data['ios_osv'] ?? null) !== null) {
            $obj->iosOsv = (string) $v;
        }
        if (($v = $data['launch_price'] ?? null) !== null && is_array($v)) {
            $obj->launchPrice = $v;
        }
        if (($v = $data['location_type'] ?? null) !== null) {
            $obj->locationType = (string) $v;
        }
        if (($v = $data['own_aweme_number'] ?? null) !== null) {
            $obj->ownAwemeNumber = (int) $v;
        }
        if (($v = $data['platform'] ?? null) !== null && is_array($v)) {
            $obj->platform = $v;
        }
        if (($v = $data['region_version'] ?? null) !== null) {
            $obj->regionVersion = (string) $v;
        }
        if (($v = $data['retargeting_tags_exclude'] ?? null) !== null && is_array($v)) {
            $obj->retargetingTagsExclude = $v;
        }
        if (($v = $data['retargeting_tags_include'] ?? null) !== null && is_array($v)) {
            $obj->retargetingTagsInclude = $v;
        }
        if (($v = $data['superior_popularity_type'] ?? null) !== null) {
            $obj->superiorPopularityType = (string) $v;
        }
        if (($v = $data['user_type'] ?? null) !== null && is_array($v)) {
            $obj->userType = $v;
        }
        return $obj;
    }
}
