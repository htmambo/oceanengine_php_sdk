<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectUpdateV30RequestAudience implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceAc[]
     */
    protected ?array $ac = null;

    /**
     * @var int[]
     */
    protected ?array $actionCategories = null;

    /**
     * @var int
     */
    protected ?int $actionDays = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceActionScene[]
     */
    protected ?array $actionScene = null;

    /**
     * @var int[]
     */
    protected ?array $actionWords = null;

    /**
     * @var string[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceAndroidOsv
     */
    protected ?string $androidOsv = null;

    /**
     * @var int
     */
    protected ?int $audiencePackageId = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceAutoExtendTargets[]
     */
    protected ?array $autoExtendTargets = null;

    /**
     * @var int[]
     */
    protected ?array $awemeFanAccounts = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceAwemeFanBehaviors[]
     */
    protected ?array $awemeFanBehaviors = null;

    /**
     * @var int[]
     */
    protected ?array $awemeFanCategories = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceAwemeFanTimeScope
     */
    protected ?string $awemeFanTimeScope = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceCarrier[]
     */
    protected ?array $carrier = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceCarrierRegionOptimize
     */
    protected ?string $carrierRegionOptimize = null;

    /**
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceConvertedTimeDuration
     */
    protected ?string $convertedTimeDuration = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceDeviceBrand[]
     */
    protected ?array $deviceBrand = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceDeviceType[]
     */
    protected ?array $deviceType = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceDistrict
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceDpaCity
     */
    protected ?string $dpaCity = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceDpaLbs
     */
    protected ?string $dpaLbs = null;

    /**
     * @var int[]
     */
    protected ?array $excludeFlowPackage = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceFilterAwemeAbnormalActive
     */
    protected ?string $filterAwemeAbnormalActive = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceFilterAwemeFansCount
     */
    protected ?string $filterAwemeFansCount = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceFilterEvent[]
     */
    protected ?array $filterEvent = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceFilterOwnAwemeFans
     */
    protected ?string $filterOwnAwemeFans = null;

    /**
     * @var int[]
     */
    protected ?array $flowPackage = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30RequestAudienceGeolocationInner[]
     */
    protected ?array $geolocation = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceHarmonyOsv
     */
    protected ?string $harmonyOsv = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceHideIfConverted
     */
    protected ?string $hideIfConverted = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceHideIfExists
     */
    protected ?string $hideIfExists = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceInterestActionMode
     */
    protected ?string $interestActionMode = null;

    /**
     * @var int[]
     */
    protected ?array $interestCategories = null;

    /**
     * @var int[]
     */
    protected ?array $interestWords = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceIosOsv
     */
    protected ?string $iosOsv = null;

    /**
     * @var int[]
     */
    protected ?array $launchPrice = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceLocationType
     */
    protected ?string $locationType = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudiencePlatform[]
     */
    protected ?array $platform = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceRegionRecommend
     */
    protected ?string $regionRecommend = null;

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
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceSmartExtend
     */
    protected ?string $smartExtend = null;

    /**
     * @var \Oceanengine\Models\ProjectUpdateV30AudienceSuperiorPopularityType
     */
    protected ?string $superiorPopularityType = null;

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceAc[]
     */
    public function getAc(): ?array
    {
        return $this->ac;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceAc[] $ac
     * @return self
     */
    public function setAc(?array $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getActionCategories(): ?array
    {
        return $this->actionCategories;
    }

    /**
     * @param int[] $actionCategories
     * @return self
     */
    public function setActionCategories(?array $actionCategories): self
    {
        $this->actionCategories = $actionCategories;
        return $this;
    }

    /**
     * @return int
     */
    public function getActionDays(): ?int
    {
        return $this->actionDays;
    }

    /**
     * @param int $actionDays
     * @return self
     */
    public function setActionDays(?int $actionDays): self
    {
        $this->actionDays = $actionDays;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceActionScene[]
     */
    public function getActionScene(): ?array
    {
        return $this->actionScene;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceActionScene[] $actionScene
     * @return self
     */
    public function setActionScene(?array $actionScene): self
    {
        $this->actionScene = $actionScene;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getActionWords(): ?array
    {
        return $this->actionWords;
    }

    /**
     * @param int[] $actionWords
     * @return self
     */
    public function setActionWords(?array $actionWords): self
    {
        $this->actionWords = $actionWords;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param string[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceAndroidOsv
     */
    public function getAndroidOsv(): ?string
    {
        return $this->androidOsv;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceAndroidOsv $androidOsv
     * @return self
     */
    public function setAndroidOsv(?string $androidOsv): self
    {
        $this->androidOsv = $androidOsv;
        return $this;
    }

    /**
     * @return int
     */
    public function getAudiencePackageId(): ?int
    {
        return $this->audiencePackageId;
    }

    /**
     * @param int $audiencePackageId
     * @return self
     */
    public function setAudiencePackageId(?int $audiencePackageId): self
    {
        $this->audiencePackageId = $audiencePackageId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceAutoExtendTargets[]
     */
    public function getAutoExtendTargets(): ?array
    {
        return $this->autoExtendTargets;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceAutoExtendTargets[] $autoExtendTargets
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
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceAwemeFanBehaviors[]
     */
    public function getAwemeFanBehaviors(): ?array
    {
        return $this->awemeFanBehaviors;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceAwemeFanBehaviors[] $awemeFanBehaviors
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
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceAwemeFanTimeScope
     */
    public function getAwemeFanTimeScope(): ?string
    {
        return $this->awemeFanTimeScope;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceAwemeFanTimeScope $awemeFanTimeScope
     * @return self
     */
    public function setAwemeFanTimeScope(?string $awemeFanTimeScope): self
    {
        $this->awemeFanTimeScope = $awemeFanTimeScope;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceCarrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->carrier;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceCarrier[] $carrier
     * @return self
     */
    public function setCarrier(?array $carrier): self
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceCarrierRegionOptimize
     */
    public function getCarrierRegionOptimize(): ?string
    {
        return $this->carrierRegionOptimize;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceCarrierRegionOptimize $carrierRegionOptimize
     * @return self
     */
    public function setCarrierRegionOptimize(?string $carrierRegionOptimize): self
    {
        $this->carrierRegionOptimize = $carrierRegionOptimize;
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
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceConvertedTimeDuration
     */
    public function getConvertedTimeDuration(): ?string
    {
        return $this->convertedTimeDuration;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceConvertedTimeDuration $convertedTimeDuration
     * @return self
     */
    public function setConvertedTimeDuration(?string $convertedTimeDuration): self
    {
        $this->convertedTimeDuration = $convertedTimeDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceDeviceBrand[]
     */
    public function getDeviceBrand(): ?array
    {
        return $this->deviceBrand;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceDeviceBrand[] $deviceBrand
     * @return self
     */
    public function setDeviceBrand(?array $deviceBrand): self
    {
        $this->deviceBrand = $deviceBrand;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceDeviceType[]
     */
    public function getDeviceType(): ?array
    {
        return $this->deviceType;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceDeviceType[] $deviceType
     * @return self
     */
    public function setDeviceType(?array $deviceType): self
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceDpaCity
     */
    public function getDpaCity(): ?string
    {
        return $this->dpaCity;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceDpaCity $dpaCity
     * @return self
     */
    public function setDpaCity(?string $dpaCity): self
    {
        $this->dpaCity = $dpaCity;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceDpaLbs
     */
    public function getDpaLbs(): ?string
    {
        return $this->dpaLbs;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceDpaLbs $dpaLbs
     * @return self
     */
    public function setDpaLbs(?string $dpaLbs): self
    {
        $this->dpaLbs = $dpaLbs;
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
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceFilterAwemeAbnormalActive
     */
    public function getFilterAwemeAbnormalActive(): ?string
    {
        return $this->filterAwemeAbnormalActive;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceFilterAwemeAbnormalActive $filterAwemeAbnormalActive
     * @return self
     */
    public function setFilterAwemeAbnormalActive(?string $filterAwemeAbnormalActive): self
    {
        $this->filterAwemeAbnormalActive = $filterAwemeAbnormalActive;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceFilterAwemeFansCount
     */
    public function getFilterAwemeFansCount(): ?string
    {
        return $this->filterAwemeFansCount;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceFilterAwemeFansCount $filterAwemeFansCount
     * @return self
     */
    public function setFilterAwemeFansCount(?string $filterAwemeFansCount): self
    {
        $this->filterAwemeFansCount = $filterAwemeFansCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceFilterEvent[]
     */
    public function getFilterEvent(): ?array
    {
        return $this->filterEvent;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceFilterEvent[] $filterEvent
     * @return self
     */
    public function setFilterEvent(?array $filterEvent): self
    {
        $this->filterEvent = $filterEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceFilterOwnAwemeFans
     */
    public function getFilterOwnAwemeFans(): ?string
    {
        return $this->filterOwnAwemeFans;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceFilterOwnAwemeFans $filterOwnAwemeFans
     * @return self
     */
    public function setFilterOwnAwemeFans(?string $filterOwnAwemeFans): self
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
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30RequestAudienceGeolocationInner[]
     */
    public function getGeolocation(): ?array
    {
        return $this->geolocation;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30RequestAudienceGeolocationInner[] $geolocation
     * @return self
     */
    public function setGeolocation(?array $geolocation): self
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceHarmonyOsv
     */
    public function getHarmonyOsv(): ?string
    {
        return $this->harmonyOsv;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceHarmonyOsv $harmonyOsv
     * @return self
     */
    public function setHarmonyOsv(?string $harmonyOsv): self
    {
        $this->harmonyOsv = $harmonyOsv;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceHideIfConverted
     */
    public function getHideIfConverted(): ?string
    {
        return $this->hideIfConverted;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceHideIfConverted $hideIfConverted
     * @return self
     */
    public function setHideIfConverted(?string $hideIfConverted): self
    {
        $this->hideIfConverted = $hideIfConverted;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceHideIfExists
     */
    public function getHideIfExists(): ?string
    {
        return $this->hideIfExists;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceHideIfExists $hideIfExists
     * @return self
     */
    public function setHideIfExists(?string $hideIfExists): self
    {
        $this->hideIfExists = $hideIfExists;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceInterestActionMode
     */
    public function getInterestActionMode(): ?string
    {
        return $this->interestActionMode;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceInterestActionMode $interestActionMode
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
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceIosOsv
     */
    public function getIosOsv(): ?string
    {
        return $this->iosOsv;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceIosOsv $iosOsv
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
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceLocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceLocationType $locationType
     * @return self
     */
    public function setLocationType(?string $locationType): self
    {
        $this->locationType = $locationType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudiencePlatform[]
     */
    public function getPlatform(): ?array
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudiencePlatform[] $platform
     * @return self
     */
    public function setPlatform(?array $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceRegionRecommend
     */
    public function getRegionRecommend(): ?string
    {
        return $this->regionRecommend;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceRegionRecommend $regionRecommend
     * @return self
     */
    public function setRegionRecommend(?string $regionRecommend): self
    {
        $this->regionRecommend = $regionRecommend;
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
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceSmartExtend
     */
    public function getSmartExtend(): ?string
    {
        return $this->smartExtend;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceSmartExtend $smartExtend
     * @return self
     */
    public function setSmartExtend(?string $smartExtend): self
    {
        $this->smartExtend = $smartExtend;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectUpdateV30AudienceSuperiorPopularityType
     */
    public function getSuperiorPopularityType(): ?string
    {
        return $this->superiorPopularityType;
    }

    /**
     * @param \Oceanengine\Models\ProjectUpdateV30AudienceSuperiorPopularityType $superiorPopularityType
     * @return self
     */
    public function setSuperiorPopularityType(?string $superiorPopularityType): self
    {
        $this->superiorPopularityType = $superiorPopularityType;
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
        if ($this->actionDays !== null) {
            $result['action_days'] = $this->actionDays;
        }
        if ($this->actionScene !== null) {
            $result['action_scene'] = $this->actionScene;
        }
        if ($this->actionWords !== null) {
            $result['action_words'] = $this->actionWords;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->androidOsv !== null) {
            $result['android_osv'] = $this->androidOsv;
        }
        if ($this->audiencePackageId !== null) {
            $result['audience_package_id'] = $this->audiencePackageId;
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
        if ($this->carrier !== null) {
            $result['carrier'] = $this->carrier;
        }
        if ($this->carrierRegionOptimize !== null) {
            $result['carrier_region_optimize'] = $this->carrierRegionOptimize;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->convertedTimeDuration !== null) {
            $result['converted_time_duration'] = $this->convertedTimeDuration;
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
        if ($this->dpaCity !== null) {
            $result['dpa_city'] = $this->dpaCity;
        }
        if ($this->dpaLbs !== null) {
            $result['dpa_lbs'] = $this->dpaLbs;
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
        if ($this->filterEvent !== null) {
            $result['filter_event'] = $this->filterEvent;
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
        if ($this->harmonyOsv !== null) {
            $result['harmony_osv'] = $this->harmonyOsv;
        }
        if ($this->hideIfConverted !== null) {
            $result['hide_if_converted'] = $this->hideIfConverted;
        }
        if ($this->hideIfExists !== null) {
            $result['hide_if_exists'] = $this->hideIfExists;
        }
        if ($this->interestActionMode !== null) {
            $result['interest_action_mode'] = $this->interestActionMode;
        }
        if ($this->interestCategories !== null) {
            $result['interest_categories'] = $this->interestCategories;
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
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->regionRecommend !== null) {
            $result['region_recommend'] = $this->regionRecommend;
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
        if ($this->smartExtend !== null) {
            $result['smart_extend'] = $this->smartExtend;
        }
        if ($this->superiorPopularityType !== null) {
            $result['superior_popularity_type'] = $this->superiorPopularityType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ac'] ?? null) !== null && is_array($v)) {
            $obj->ac = $v;
        }
        if (($v = $data['action_categories'] ?? null) !== null && is_array($v)) {
            $obj->actionCategories = $v;
        }
        if (($v = $data['action_days'] ?? null) !== null) {
            $obj->actionDays = (int) $v;
        }
        if (($v = $data['action_scene'] ?? null) !== null && is_array($v)) {
            $obj->actionScene = $v;
        }
        if (($v = $data['action_words'] ?? null) !== null && is_array($v)) {
            $obj->actionWords = $v;
        }
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['android_osv'] ?? null) !== null) {
            $obj->androidOsv = (string) $v;
        }
        if (($v = $data['audience_package_id'] ?? null) !== null) {
            $obj->audiencePackageId = (int) $v;
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
        if (($v = $data['carrier'] ?? null) !== null && is_array($v)) {
            $obj->carrier = $v;
        }
        if (($v = $data['carrier_region_optimize'] ?? null) !== null) {
            $obj->carrierRegionOptimize = (string) $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['converted_time_duration'] ?? null) !== null) {
            $obj->convertedTimeDuration = (string) $v;
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
        if (($v = $data['dpa_city'] ?? null) !== null) {
            $obj->dpaCity = (string) $v;
        }
        if (($v = $data['dpa_lbs'] ?? null) !== null) {
            $obj->dpaLbs = (string) $v;
        }
        if (($v = $data['exclude_flow_package'] ?? null) !== null && is_array($v)) {
            $obj->excludeFlowPackage = $v;
        }
        if (($v = $data['filter_aweme_abnormal_active'] ?? null) !== null) {
            $obj->filterAwemeAbnormalActive = (string) $v;
        }
        if (($v = $data['filter_aweme_fans_count'] ?? null) !== null) {
            $obj->filterAwemeFansCount = (string) $v;
        }
        if (($v = $data['filter_event'] ?? null) !== null && is_array($v)) {
            $obj->filterEvent = $v;
        }
        if (($v = $data['filter_own_aweme_fans'] ?? null) !== null) {
            $obj->filterOwnAwemeFans = (string) $v;
        }
        if (($v = $data['flow_package'] ?? null) !== null && is_array($v)) {
            $obj->flowPackage = $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['geolocation'] ?? null) !== null && is_array($v)) {
            $obj->geolocation = array_map(fn ($vv) => \Oceanengine\Models\ProjectUpdateV30RequestAudienceGeolocationInner::fromArray($vv), $v);
        }
        if (($v = $data['harmony_osv'] ?? null) !== null) {
            $obj->harmonyOsv = (string) $v;
        }
        if (($v = $data['hide_if_converted'] ?? null) !== null) {
            $obj->hideIfConverted = (string) $v;
        }
        if (($v = $data['hide_if_exists'] ?? null) !== null) {
            $obj->hideIfExists = (string) $v;
        }
        if (($v = $data['interest_action_mode'] ?? null) !== null) {
            $obj->interestActionMode = (string) $v;
        }
        if (($v = $data['interest_categories'] ?? null) !== null && is_array($v)) {
            $obj->interestCategories = $v;
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
        if (($v = $data['platform'] ?? null) !== null && is_array($v)) {
            $obj->platform = $v;
        }
        if (($v = $data['region_recommend'] ?? null) !== null) {
            $obj->regionRecommend = (string) $v;
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
        if (($v = $data['smart_extend'] ?? null) !== null) {
            $obj->smartExtend = (string) $v;
        }
        if (($v = $data['superior_popularity_type'] ?? null) !== null) {
            $obj->superiorPopularityType = (string) $v;
        }
        return $obj;
    }
}
