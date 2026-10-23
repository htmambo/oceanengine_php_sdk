<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAudiencePackageUpdateV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestActionConfig
     */
    protected ?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestActionConfig $actionConfig = null;

    /**
     * 年龄
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30Age[]
     */
    protected ?array $age = null;

    /**
     * 定向包ID
     * @var int
     */
    protected ?int $audiencePackageId = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30ConvertedTimeDuration
     */
    protected ?string $convertedTimeDuration = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomArea
     */
    protected ?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomArea $customArea = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30CustomizedInterestAction
     */
    protected ?string $customizedInterestAction = null;

    /**
     * 定向包描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30District
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30FilterAwemeAbnormalActive
     */
    protected ?string $filterAwemeAbnormalActive = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30FilterAwemeFansCount
     */
    protected ?string $filterAwemeFansCount = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30Gender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30HideIfConverted
     */
    protected ?string $hideIfConverted = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestInterestConfig
     */
    protected ?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestInterestConfig $interestConfig = null;

    /**
     * 账户ID
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 定向包名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestPoiAround
     */
    protected ?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestPoiAround $poiAround = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestRegion
     */
    protected ?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestRegion $region = null;

    /**
     * 定向人群包ID
     * @var int[]
     */
    protected ?array $retargetingTags = null;

    /**
     * 排除人群包ID
     * @var int[]
     */
    protected ?array $retargetingTagsExclude = null;

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestActionConfig
     */
    public function getActionConfig(): ?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestActionConfig
    {
        return $this->actionConfig;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestActionConfig $actionConfig
     * @return self
     */
    public function setActionConfig(?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestActionConfig $actionConfig): self
    {
        $this->actionConfig = $actionConfig;
        return $this;
    }

    /**
     * 年龄
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30Age[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 年龄
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30Age[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * 定向包ID
     * @return int
     */
    public function getAudiencePackageId(): ?int
    {
        return $this->audiencePackageId;
    }

    /**
     * 定向包ID
     * @param int $audiencePackageId
     * @return self
     */
    public function setAudiencePackageId(?int $audiencePackageId): self
    {
        $this->audiencePackageId = $audiencePackageId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30ConvertedTimeDuration
     */
    public function getConvertedTimeDuration(): ?string
    {
        return $this->convertedTimeDuration;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30ConvertedTimeDuration $convertedTimeDuration
     * @return self
     */
    public function setConvertedTimeDuration(?string $convertedTimeDuration): self
    {
        $this->convertedTimeDuration = $convertedTimeDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomArea
     */
    public function getCustomArea(): ?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomArea
    {
        return $this->customArea;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomArea $customArea
     * @return self
     */
    public function setCustomArea(?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomArea $customArea): self
    {
        $this->customArea = $customArea;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30CustomizedInterestAction
     */
    public function getCustomizedInterestAction(): ?string
    {
        return $this->customizedInterestAction;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30CustomizedInterestAction $customizedInterestAction
     * @return self
     */
    public function setCustomizedInterestAction(?string $customizedInterestAction): self
    {
        $this->customizedInterestAction = $customizedInterestAction;
        return $this;
    }

    /**
     * 定向包描述
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 定向包描述
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30District
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30District $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30FilterAwemeAbnormalActive
     */
    public function getFilterAwemeAbnormalActive(): ?string
    {
        return $this->filterAwemeAbnormalActive;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30FilterAwemeAbnormalActive $filterAwemeAbnormalActive
     * @return self
     */
    public function setFilterAwemeAbnormalActive(?string $filterAwemeAbnormalActive): self
    {
        $this->filterAwemeAbnormalActive = $filterAwemeAbnormalActive;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30FilterAwemeFansCount
     */
    public function getFilterAwemeFansCount(): ?string
    {
        return $this->filterAwemeFansCount;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30FilterAwemeFansCount $filterAwemeFansCount
     * @return self
     */
    public function setFilterAwemeFansCount(?string $filterAwemeFansCount): self
    {
        $this->filterAwemeFansCount = $filterAwemeFansCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30Gender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30Gender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30HideIfConverted
     */
    public function getHideIfConverted(): ?string
    {
        return $this->hideIfConverted;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30HideIfConverted $hideIfConverted
     * @return self
     */
    public function setHideIfConverted(?string $hideIfConverted): self
    {
        $this->hideIfConverted = $hideIfConverted;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestInterestConfig
     */
    public function getInterestConfig(): ?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestInterestConfig
    {
        return $this->interestConfig;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestInterestConfig $interestConfig
     * @return self
     */
    public function setInterestConfig(?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestInterestConfig $interestConfig): self
    {
        $this->interestConfig = $interestConfig;
        return $this;
    }

    /**
     * 账户ID
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * 账户ID
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 定向包名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 定向包名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestPoiAround
     */
    public function getPoiAround(): ?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestPoiAround
    {
        return $this->poiAround;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestPoiAround $poiAround
     * @return self
     */
    public function setPoiAround(?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestPoiAround $poiAround): self
    {
        $this->poiAround = $poiAround;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestRegion
     */
    public function getRegion(): ?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestRegion
    {
        return $this->region;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestRegion $region
     * @return self
     */
    public function setRegion(?\Oceanengine\Models\LocalAudiencePackageUpdateV30RequestRegion $region): self
    {
        $this->region = $region;
        return $this;
    }

    /**
     * 定向人群包ID
     * @return int[]
     */
    public function getRetargetingTags(): ?array
    {
        return $this->retargetingTags;
    }

    /**
     * 定向人群包ID
     * @param int[] $retargetingTags
     * @return self
     */
    public function setRetargetingTags(?array $retargetingTags): self
    {
        $this->retargetingTags = $retargetingTags;
        return $this;
    }

    /**
     * 排除人群包ID
     * @return int[]
     */
    public function getRetargetingTagsExclude(): ?array
    {
        return $this->retargetingTagsExclude;
    }

    /**
     * 排除人群包ID
     * @param int[] $retargetingTagsExclude
     * @return self
     */
    public function setRetargetingTagsExclude(?array $retargetingTagsExclude): self
    {
        $this->retargetingTagsExclude = $retargetingTagsExclude;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionConfig !== null) {
            $result['action_config'] = $this->actionConfig;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->audiencePackageId !== null) {
            $result['audience_package_id'] = $this->audiencePackageId;
        }
        if ($this->convertedTimeDuration !== null) {
            $result['converted_time_duration'] = $this->convertedTimeDuration;
        }
        if ($this->customArea !== null) {
            $result['custom_area'] = $this->customArea;
        }
        if ($this->customizedInterestAction !== null) {
            $result['customized_interest_action'] = $this->customizedInterestAction;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->district !== null) {
            $result['district'] = $this->district;
        }
        if ($this->filterAwemeAbnormalActive !== null) {
            $result['filter_aweme_abnormal_active'] = $this->filterAwemeAbnormalActive;
        }
        if ($this->filterAwemeFansCount !== null) {
            $result['filter_aweme_fans_count'] = $this->filterAwemeFansCount;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->hideIfConverted !== null) {
            $result['hide_if_converted'] = $this->hideIfConverted;
        }
        if ($this->interestConfig !== null) {
            $result['interest_config'] = $this->interestConfig;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->poiAround !== null) {
            $result['poi_around'] = $this->poiAround;
        }
        if ($this->region !== null) {
            $result['region'] = $this->region;
        }
        if ($this->retargetingTags !== null) {
            $result['retargeting_tags'] = $this->retargetingTags;
        }
        if ($this->retargetingTagsExclude !== null) {
            $result['retargeting_tags_exclude'] = $this->retargetingTagsExclude;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_config'] ?? null) !== null && is_array($v)) {
            $obj->actionConfig = \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestActionConfig::fromArray($v);
        }
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['audience_package_id'] ?? null) !== null) {
            $obj->audiencePackageId = (int) $v;
        }
        if (($v = $data['converted_time_duration'] ?? null) !== null) {
            $obj->convertedTimeDuration = (string) $v;
        }
        if (($v = $data['custom_area'] ?? null) !== null && is_array($v)) {
            $obj->customArea = \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestCustomArea::fromArray($v);
        }
        if (($v = $data['customized_interest_action'] ?? null) !== null) {
            $obj->customizedInterestAction = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['district'] ?? null) !== null) {
            $obj->district = (string) $v;
        }
        if (($v = $data['filter_aweme_abnormal_active'] ?? null) !== null) {
            $obj->filterAwemeAbnormalActive = (string) $v;
        }
        if (($v = $data['filter_aweme_fans_count'] ?? null) !== null) {
            $obj->filterAwemeFansCount = (string) $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['hide_if_converted'] ?? null) !== null) {
            $obj->hideIfConverted = (string) $v;
        }
        if (($v = $data['interest_config'] ?? null) !== null && is_array($v)) {
            $obj->interestConfig = \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestInterestConfig::fromArray($v);
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['poi_around'] ?? null) !== null && is_array($v)) {
            $obj->poiAround = \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestPoiAround::fromArray($v);
        }
        if (($v = $data['region'] ?? null) !== null && is_array($v)) {
            $obj->region = \Oceanengine\Models\LocalAudiencePackageUpdateV30RequestRegion::fromArray($v);
        }
        if (($v = $data['retargeting_tags'] ?? null) !== null && is_array($v)) {
            $obj->retargetingTags = $v;
        }
        if (($v = $data['retargeting_tags_exclude'] ?? null) !== null && is_array($v)) {
            $obj->retargetingTagsExclude = $v;
        }
        return $obj;
    }
}
