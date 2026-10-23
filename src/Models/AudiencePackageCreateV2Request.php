<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AudiencePackageCreateV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2Ac[]
     */
    protected ?array $ac = null;

    /**
     * @var int[]
     */
    protected ?array $actionCategories = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2ActionDays
     */
    protected ?string $actionDays = null;

    /**
     * @var int[]
     */
    protected ?array $actionWords = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2AdType
     */
    protected ?string $adType = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2Age[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2AndroidOsv
     */
    protected ?string $androidOsv = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2AutoExtendTargets[]
     */
    protected ?array $autoExtendTargets = null;

    /**
     * @var int[]
     */
    protected ?array $awemeFanAccounts = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2AwemeFanBehaviors[]
     */
    protected ?array $awemeFanBehaviors = null;

    /**
     * @var int[]
     */
    protected ?array $awemeFanCategories = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2AwemeFanTimeScope
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
     * @var \Oceanengine\Models\AudiencePackageCreateV2Carrier[]
     */
    protected ?array $carrier = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2CarrierRegionOptimize
     */
    protected ?string $carrierRegionOptimize = null;

    /**
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2ConvertedTimeDuration
     */
    protected ?string $convertedTimeDuration = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2DeliveryRange
     */
    protected ?string $deliveryRange = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2DeviceBrand[]
     */
    protected ?array $deviceBrand = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2DeviceType[]
     */
    protected ?array $deviceType = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2District
     */
    protected ?string $district = null;

    /**
     * @var int[]
     */
    protected ?array $excludeFlowPackage = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2FilterAwemeAbnormalActive
     */
    protected ?string $filterAwemeAbnormalActive = null;

    /**
     * @var int
     */
    protected ?int $filterAwemeFansCount = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2FilterEvent[]
     */
    protected ?array $filterEvent = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2FilterOwnAwemeFans
     */
    protected ?string $filterOwnAwemeFans = null;

    /**
     * @var int[]
     */
    protected ?array $flowPackage = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2Gender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2RequestGeolocationInner[]
     */
    protected ?array $geolocation = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2HarmonyOsv
     */
    protected ?string $harmonyOsv = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2HideIfConverted
     */
    protected ?string $hideIfConverted = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2HideIfExists
     */
    protected ?string $hideIfExists = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2InterestActionMode
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
     * @var \Oceanengine\Models\AudiencePackageCreateV2IosOsv
     */
    protected ?string $iosOsv = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2LandingType
     */
    protected ?string $landingType = null;

    /**
     * @var int[]
     */
    protected ?array $launchPrice = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2LocationType
     */
    protected ?string $locationType = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2MarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2Platform[]
     */
    protected ?array $platform = null;

    /**
     * @var string
     */
    protected ?string $regionVersion = null;

    /**
     * @var int[]
     */
    protected ?array $retargetingTags = null;

    /**
     * @var int[]
     */
    protected ?array $retargetingTagsExclude = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2SmartExtend
     */
    protected ?string $smartExtend = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageCreateV2SuperiorPopularityType
     */
    protected ?string $superiorPopularityType = null;

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2Ac[]
     */
    public function getAc(): ?array
    {
        return $this->ac;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2Ac[] $ac
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2ActionDays
     */
    public function getActionDays(): ?string
    {
        return $this->actionDays;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2ActionDays $actionDays
     * @return self
     */
    public function setActionDays(?string $actionDays): self
    {
        $this->actionDays = $actionDays;
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2AdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2AdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2Age[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2Age[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2AndroidOsv
     */
    public function getAndroidOsv(): ?string
    {
        return $this->androidOsv;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2AndroidOsv $androidOsv
     * @return self
     */
    public function setAndroidOsv(?string $androidOsv): self
    {
        $this->androidOsv = $androidOsv;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2AutoExtendTargets[]
     */
    public function getAutoExtendTargets(): ?array
    {
        return $this->autoExtendTargets;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2AutoExtendTargets[] $autoExtendTargets
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2AwemeFanBehaviors[]
     */
    public function getAwemeFanBehaviors(): ?array
    {
        return $this->awemeFanBehaviors;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2AwemeFanBehaviors[] $awemeFanBehaviors
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2AwemeFanTimeScope
     */
    public function getAwemeFanTimeScope(): ?string
    {
        return $this->awemeFanTimeScope;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2AwemeFanTimeScope $awemeFanTimeScope
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2Carrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->carrier;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2Carrier[] $carrier
     * @return self
     */
    public function setCarrier(?array $carrier): self
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2CarrierRegionOptimize
     */
    public function getCarrierRegionOptimize(): ?string
    {
        return $this->carrierRegionOptimize;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2CarrierRegionOptimize $carrierRegionOptimize
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2ConvertedTimeDuration
     */
    public function getConvertedTimeDuration(): ?string
    {
        return $this->convertedTimeDuration;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2ConvertedTimeDuration $convertedTimeDuration
     * @return self
     */
    public function setConvertedTimeDuration(?string $convertedTimeDuration): self
    {
        $this->convertedTimeDuration = $convertedTimeDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2DeliveryRange
     */
    public function getDeliveryRange(): ?string
    {
        return $this->deliveryRange;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2DeliveryRange $deliveryRange
     * @return self
     */
    public function setDeliveryRange(?string $deliveryRange): self
    {
        $this->deliveryRange = $deliveryRange;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2DeviceBrand[]
     */
    public function getDeviceBrand(): ?array
    {
        return $this->deviceBrand;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2DeviceBrand[] $deviceBrand
     * @return self
     */
    public function setDeviceBrand(?array $deviceBrand): self
    {
        $this->deviceBrand = $deviceBrand;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2DeviceType[]
     */
    public function getDeviceType(): ?array
    {
        return $this->deviceType;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2DeviceType[] $deviceType
     * @return self
     */
    public function setDeviceType(?array $deviceType): self
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2District
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2District $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2FilterAwemeAbnormalActive
     */
    public function getFilterAwemeAbnormalActive(): ?string
    {
        return $this->filterAwemeAbnormalActive;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2FilterAwemeAbnormalActive $filterAwemeAbnormalActive
     * @return self
     */
    public function setFilterAwemeAbnormalActive(?string $filterAwemeAbnormalActive): self
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2FilterEvent[]
     */
    public function getFilterEvent(): ?array
    {
        return $this->filterEvent;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2FilterEvent[] $filterEvent
     * @return self
     */
    public function setFilterEvent(?array $filterEvent): self
    {
        $this->filterEvent = $filterEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2FilterOwnAwemeFans
     */
    public function getFilterOwnAwemeFans(): ?string
    {
        return $this->filterOwnAwemeFans;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2FilterOwnAwemeFans $filterOwnAwemeFans
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2Gender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2Gender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2RequestGeolocationInner[]
     */
    public function getGeolocation(): ?array
    {
        return $this->geolocation;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2RequestGeolocationInner[] $geolocation
     * @return self
     */
    public function setGeolocation(?array $geolocation): self
    {
        $this->geolocation = $geolocation;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2HarmonyOsv
     */
    public function getHarmonyOsv(): ?string
    {
        return $this->harmonyOsv;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2HarmonyOsv $harmonyOsv
     * @return self
     */
    public function setHarmonyOsv(?string $harmonyOsv): self
    {
        $this->harmonyOsv = $harmonyOsv;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2HideIfConverted
     */
    public function getHideIfConverted(): ?string
    {
        return $this->hideIfConverted;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2HideIfConverted $hideIfConverted
     * @return self
     */
    public function setHideIfConverted(?string $hideIfConverted): self
    {
        $this->hideIfConverted = $hideIfConverted;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2HideIfExists
     */
    public function getHideIfExists(): ?string
    {
        return $this->hideIfExists;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2HideIfExists $hideIfExists
     * @return self
     */
    public function setHideIfExists(?string $hideIfExists): self
    {
        $this->hideIfExists = $hideIfExists;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2InterestActionMode
     */
    public function getInterestActionMode(): ?string
    {
        return $this->interestActionMode;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2InterestActionMode $interestActionMode
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2IosOsv
     */
    public function getIosOsv(): ?string
    {
        return $this->iosOsv;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2IosOsv $iosOsv
     * @return self
     */
    public function setIosOsv(?string $iosOsv): self
    {
        $this->iosOsv = $iosOsv;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2LandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2LandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2LocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2LocationType $locationType
     * @return self
     */
    public function setLocationType(?string $locationType): self
    {
        $this->locationType = $locationType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2MarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2MarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2Platform[]
     */
    public function getPlatform(): ?array
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2Platform[] $platform
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
    public function getRetargetingTags(): ?array
    {
        return $this->retargetingTags;
    }

    /**
     * @param int[] $retargetingTags
     * @return self
     */
    public function setRetargetingTags(?array $retargetingTags): self
    {
        $this->retargetingTags = $retargetingTags;
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
     * @return \Oceanengine\Models\AudiencePackageCreateV2SmartExtend
     */
    public function getSmartExtend(): ?string
    {
        return $this->smartExtend;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2SmartExtend $smartExtend
     * @return self
     */
    public function setSmartExtend(?string $smartExtend): self
    {
        $this->smartExtend = $smartExtend;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageCreateV2SuperiorPopularityType
     */
    public function getSuperiorPopularityType(): ?string
    {
        return $this->superiorPopularityType;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageCreateV2SuperiorPopularityType $superiorPopularityType
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
        if ($this->actionWords !== null) {
            $result['action_words'] = $this->actionWords;
        }
        if ($this->adType !== null) {
            $result['ad_type'] = $this->adType;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->androidOsv !== null) {
            $result['android_osv'] = $this->androidOsv;
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
        if ($this->deliveryRange !== null) {
            $result['delivery_range'] = $this->deliveryRange;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
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
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->launchPrice !== null) {
            $result['launch_price'] = $this->launchPrice;
        }
        if ($this->locationType !== null) {
            $result['location_type'] = $this->locationType;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->regionVersion !== null) {
            $result['region_version'] = $this->regionVersion;
        }
        if ($this->retargetingTags !== null) {
            $result['retargeting_tags'] = $this->retargetingTags;
        }
        if ($this->retargetingTagsExclude !== null) {
            $result['retargeting_tags_exclude'] = $this->retargetingTagsExclude;
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
            $obj->actionDays = (string) $v;
        }
        if (($v = $data['action_words'] ?? null) !== null && is_array($v)) {
            $obj->actionWords = $v;
        }
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['android_osv'] ?? null) !== null) {
            $obj->androidOsv = (string) $v;
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
        if (($v = $data['delivery_range'] ?? null) !== null) {
            $obj->deliveryRange = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
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
        if (($v = $data['exclude_flow_package'] ?? null) !== null && is_array($v)) {
            $obj->excludeFlowPackage = $v;
        }
        if (($v = $data['filter_aweme_abnormal_active'] ?? null) !== null) {
            $obj->filterAwemeAbnormalActive = (string) $v;
        }
        if (($v = $data['filter_aweme_fans_count'] ?? null) !== null) {
            $obj->filterAwemeFansCount = (int) $v;
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
            $obj->geolocation = array_map(fn ($vv) => \Oceanengine\Models\AudiencePackageCreateV2RequestGeolocationInner::fromArray($vv), $v);
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
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['launch_price'] ?? null) !== null && is_array($v)) {
            $obj->launchPrice = $v;
        }
        if (($v = $data['location_type'] ?? null) !== null) {
            $obj->locationType = (string) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null && is_array($v)) {
            $obj->platform = $v;
        }
        if (($v = $data['region_version'] ?? null) !== null) {
            $obj->regionVersion = (string) $v;
        }
        if (($v = $data['retargeting_tags'] ?? null) !== null && is_array($v)) {
            $obj->retargetingTags = $v;
        }
        if (($v = $data['retargeting_tags_exclude'] ?? null) !== null && is_array($v)) {
            $obj->retargetingTagsExclude = $v;
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
