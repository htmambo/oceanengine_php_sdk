<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOrientationPackageGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10ResponseDataListInnerInActiveRetargetingTagsInner[]
     */
    protected ?array $inActiveRetargetingTags = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAc[]
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
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListActionScene[]
     */
    protected ?array $actionScene = null;

    /**
     * @var int[]
     */
    protected ?array $actionWords = null;

    /**
     * @var int
     */
    protected ?int $adNum = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAge[]
     */
    protected ?array $age = null;

    /**
     * @var int
     */
    protected ?int $autoExtendEnabled = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAutoExtendTargets[]
     */
    protected ?array $autoExtendTargets = null;

    /**
     * @var int[]
     */
    protected ?array $awemeFanAccounts = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors[]
     */
    protected ?array $awemeFanBehaviors = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays
     */
    protected ?string $awemeFanBehaviorsDays = null;

    /**
     * @var int[]
     */
    protected ?array $awemeFanCategories = null;

    /**
     * @var int[]
     */
    protected ?array $city = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListDistrict
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListElectricFenceRegion
     */
    protected ?string $electricFenceRegion = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListGender
     */
    protected ?string $gender = null;

    /**
     * @var int[]
     */
    protected ?array $interestCategories = null;

    /**
     * @var int[]
     */
    protected ?array $interestWords = null;

    /**
     * @var string[]
     */
    protected ?array $livePlatformTags = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListLocationType
     */
    protected ?string $locationType = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListNewCustomer
     */
    protected ?string $newCustomer = null;

    /**
     * @var int
     */
    protected ?int $orientationId = null;

    /**
     * @var string
     */
    protected ?string $orientationInfo = null;

    /**
     * @var string
     */
    protected ?string $orientationName = null;

    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListPlatform[]
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
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListSmartInterestAction
     */
    protected ?string $smartInterestAction = null;

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10ResponseDataListInnerInActiveRetargetingTagsInner[]
     */
    public function getInActiveRetargetingTags(): ?array
    {
        return $this->inActiveRetargetingTags;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10ResponseDataListInnerInActiveRetargetingTagsInner[] $inActiveRetargetingTags
     * @return self
     */
    public function setInActiveRetargetingTags(?array $inActiveRetargetingTags): self
    {
        $this->inActiveRetargetingTags = $inActiveRetargetingTags;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAc[]
     */
    public function getAc(): ?array
    {
        return $this->ac;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAc[] $ac
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
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListActionScene[]
     */
    public function getActionScene(): ?array
    {
        return $this->actionScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListActionScene[] $actionScene
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
     * @return int
     */
    public function getAdNum(): ?int
    {
        return $this->adNum;
    }

    /**
     * @param int $adNum
     * @return self
     */
    public function setAdNum(?int $adNum): self
    {
        $this->adNum = $adNum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAge[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return int
     */
    public function getAutoExtendEnabled(): ?int
    {
        return $this->autoExtendEnabled;
    }

    /**
     * @param int $autoExtendEnabled
     * @return self
     */
    public function setAutoExtendEnabled(?int $autoExtendEnabled): self
    {
        $this->autoExtendEnabled = $autoExtendEnabled;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAutoExtendTargets[]
     */
    public function getAutoExtendTargets(): ?array
    {
        return $this->autoExtendTargets;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAutoExtendTargets[] $autoExtendTargets
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
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors[]
     */
    public function getAwemeFanBehaviors(): ?array
    {
        return $this->awemeFanBehaviors;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAwemeFanBehaviors[] $awemeFanBehaviors
     * @return self
     */
    public function setAwemeFanBehaviors(?array $awemeFanBehaviors): self
    {
        $this->awemeFanBehaviors = $awemeFanBehaviors;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays
     */
    public function getAwemeFanBehaviorsDays(): ?string
    {
        return $this->awemeFanBehaviorsDays;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays $awemeFanBehaviorsDays
     * @return self
     */
    public function setAwemeFanBehaviorsDays(?string $awemeFanBehaviorsDays): self
    {
        $this->awemeFanBehaviorsDays = $awemeFanBehaviorsDays;
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
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListElectricFenceRegion
     */
    public function getElectricFenceRegion(): ?string
    {
        return $this->electricFenceRegion;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListElectricFenceRegion $electricFenceRegion
     * @return self
     */
    public function setElectricFenceRegion(?string $electricFenceRegion): self
    {
        $this->electricFenceRegion = $electricFenceRegion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
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
     * @return string[]
     */
    public function getLivePlatformTags(): ?array
    {
        return $this->livePlatformTags;
    }

    /**
     * @param string[] $livePlatformTags
     * @return self
     */
    public function setLivePlatformTags(?array $livePlatformTags): self
    {
        $this->livePlatformTags = $livePlatformTags;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListLocationType
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListLocationType $locationType
     * @return self
     */
    public function setLocationType(?string $locationType): self
    {
        $this->locationType = $locationType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListNewCustomer
     */
    public function getNewCustomer(): ?string
    {
        return $this->newCustomer;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListNewCustomer $newCustomer
     * @return self
     */
    public function setNewCustomer(?string $newCustomer): self
    {
        $this->newCustomer = $newCustomer;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrientationId(): ?int
    {
        return $this->orientationId;
    }

    /**
     * @param int $orientationId
     * @return self
     */
    public function setOrientationId(?int $orientationId): self
    {
        $this->orientationId = $orientationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrientationInfo(): ?string
    {
        return $this->orientationInfo;
    }

    /**
     * @param string $orientationInfo
     * @return self
     */
    public function setOrientationInfo(?string $orientationInfo): self
    {
        $this->orientationInfo = $orientationInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrientationName(): ?string
    {
        return $this->orientationName;
    }

    /**
     * @param string $orientationName
     * @return self
     */
    public function setOrientationName(?string $orientationName): self
    {
        $this->orientationName = $orientationName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListPlatform[]
     */
    public function getPlatform(): ?array
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListPlatform[] $platform
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
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListSmartInterestAction
     */
    public function getSmartInterestAction(): ?string
    {
        return $this->smartInterestAction;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListSmartInterestAction $smartInterestAction
     * @return self
     */
    public function setSmartInterestAction(?string $smartInterestAction): self
    {
        $this->smartInterestAction = $smartInterestAction;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->inActiveRetargetingTags !== null) {
            $result['InActive_retargeting_tags'] = $this->inActiveRetargetingTags;
        }
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
        if ($this->adNum !== null) {
            $result['ad_num'] = $this->adNum;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->autoExtendEnabled !== null) {
            $result['auto_extend_enabled'] = $this->autoExtendEnabled;
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
        if ($this->awemeFanBehaviorsDays !== null) {
            $result['aweme_fan_behaviors_days'] = $this->awemeFanBehaviorsDays;
        }
        if ($this->awemeFanCategories !== null) {
            $result['aweme_fan_categories'] = $this->awemeFanCategories;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->electricFenceRegion !== null) {
            $result['electric_fence_region'] = $this->electricFenceRegion;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->interestCategories !== null) {
            $result['interest_categories'] = $this->interestCategories;
        }
        if ($this->interestWords !== null) {
            $result['interest_words'] = $this->interestWords;
        }
        if ($this->livePlatformTags !== null) {
            $result['live_platform_tags'] = $this->livePlatformTags;
        }
        if ($this->locationType !== null) {
            $result['location_type'] = $this->locationType;
        }
        if ($this->newCustomer !== null) {
            $result['new_customer'] = $this->newCustomer;
        }
        if ($this->orientationId !== null) {
            $result['orientation_id'] = $this->orientationId;
        }
        if ($this->orientationInfo !== null) {
            $result['orientation_info'] = $this->orientationInfo;
        }
        if ($this->orientationName !== null) {
            $result['orientation_name'] = $this->orientationName;
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
        if ($this->smartInterestAction !== null) {
            $result['smart_interest_action'] = $this->smartInterestAction;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['InActive_retargeting_tags'] ?? null) !== null && is_array($v)) {
            $obj->inActiveRetargetingTags = array_map(fn ($vv) => \Oceanengine\Models\QianchuanOrientationPackageGetV10ResponseDataListInnerInActiveRetargetingTagsInner::fromArray($vv), $v);
        }
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
        if (($v = $data['ad_num'] ?? null) !== null) {
            $obj->adNum = (int) $v;
        }
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['auto_extend_enabled'] ?? null) !== null) {
            $obj->autoExtendEnabled = (int) $v;
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
        if (($v = $data['aweme_fan_behaviors_days'] ?? null) !== null) {
            $obj->awemeFanBehaviorsDays = (string) $v;
        }
        if (($v = $data['aweme_fan_categories'] ?? null) !== null && is_array($v)) {
            $obj->awemeFanCategories = $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['electric_fence_region'] ?? null) !== null) {
            $obj->electricFenceRegion = (string) $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['interest_categories'] ?? null) !== null && is_array($v)) {
            $obj->interestCategories = $v;
        }
        if (($v = $data['interest_words'] ?? null) !== null && is_array($v)) {
            $obj->interestWords = $v;
        }
        if (($v = $data['live_platform_tags'] ?? null) !== null && is_array($v)) {
            $obj->livePlatformTags = $v;
        }
        if (($v = $data['location_type'] ?? null) !== null) {
            $obj->locationType = (string) $v;
        }
        if (($v = $data['new_customer'] ?? null) !== null) {
            $obj->newCustomer = (string) $v;
        }
        if (($v = $data['orientation_id'] ?? null) !== null) {
            $obj->orientationId = (int) $v;
        }
        if (($v = $data['orientation_info'] ?? null) !== null) {
            $obj->orientationInfo = (string) $v;
        }
        if (($v = $data['orientation_name'] ?? null) !== null) {
            $obj->orientationName = (string) $v;
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
        if (($v = $data['smart_interest_action'] ?? null) !== null) {
            $obj->smartInterestAction = (string) $v;
        }
        return $obj;
    }
}
