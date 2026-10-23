<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAudiencePackageGetV30ResponseDataAudiencePackagesInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerActionConfig
     */
    protected ?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerActionConfig $actionConfig = null;

    /**
     * 年龄
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesAge[]
     */
    protected ?array $age = null;

    /**
     * 定向包ID
     * @var int
     */
    protected ?int $audiencePackageId = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration
     */
    protected ?string $convertedTimeDuration = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerCustomArea
     */
    protected ?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerCustomArea $customArea = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction
     */
    protected ?string $customizedInterestAction = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesDistrict
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive
     */
    protected ?string $filterAwemeAbnormalActive = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount
     */
    protected ?string $filterAwemeFansCount = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted
     */
    protected ?string $hideIfConverted = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerInterestConfig
     */
    protected ?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerInterestConfig $interestConfig = null;

    /**
     * 定向包名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerPoiAround
     */
    protected ?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerPoiAround $poiAround = null;

    /**
     * @var \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerRegion
     */
    protected ?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerRegion $region = null;

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
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerActionConfig
     */
    public function getActionConfig(): ?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerActionConfig
    {
        return $this->actionConfig;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerActionConfig $actionConfig
     * @return self
     */
    public function setActionConfig(?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerActionConfig $actionConfig): self
    {
        $this->actionConfig = $actionConfig;
        return $this;
    }

    /**
     * 年龄
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 年龄
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesAge[] $age
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
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration
     */
    public function getConvertedTimeDuration(): ?string
    {
        return $this->convertedTimeDuration;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesConvertedTimeDuration $convertedTimeDuration
     * @return self
     */
    public function setConvertedTimeDuration(?string $convertedTimeDuration): self
    {
        $this->convertedTimeDuration = $convertedTimeDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerCustomArea
     */
    public function getCustomArea(): ?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerCustomArea
    {
        return $this->customArea;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerCustomArea $customArea
     * @return self
     */
    public function setCustomArea(?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerCustomArea $customArea): self
    {
        $this->customArea = $customArea;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction
     */
    public function getCustomizedInterestAction(): ?string
    {
        return $this->customizedInterestAction;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesCustomizedInterestAction $customizedInterestAction
     * @return self
     */
    public function setCustomizedInterestAction(?string $customizedInterestAction): self
    {
        $this->customizedInterestAction = $customizedInterestAction;
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
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive
     */
    public function getFilterAwemeAbnormalActive(): ?string
    {
        return $this->filterAwemeAbnormalActive;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeAbnormalActive $filterAwemeAbnormalActive
     * @return self
     */
    public function setFilterAwemeAbnormalActive(?string $filterAwemeAbnormalActive): self
    {
        $this->filterAwemeAbnormalActive = $filterAwemeAbnormalActive;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount
     */
    public function getFilterAwemeFansCount(): ?string
    {
        return $this->filterAwemeFansCount;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount $filterAwemeFansCount
     * @return self
     */
    public function setFilterAwemeFansCount(?string $filterAwemeFansCount): self
    {
        $this->filterAwemeFansCount = $filterAwemeFansCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted
     */
    public function getHideIfConverted(): ?string
    {
        return $this->hideIfConverted;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted $hideIfConverted
     * @return self
     */
    public function setHideIfConverted(?string $hideIfConverted): self
    {
        $this->hideIfConverted = $hideIfConverted;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerInterestConfig
     */
    public function getInterestConfig(): ?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerInterestConfig
    {
        return $this->interestConfig;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerInterestConfig $interestConfig
     * @return self
     */
    public function setInterestConfig(?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerInterestConfig $interestConfig): self
    {
        $this->interestConfig = $interestConfig;
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
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerPoiAround
     */
    public function getPoiAround(): ?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerPoiAround
    {
        return $this->poiAround;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerPoiAround $poiAround
     * @return self
     */
    public function setPoiAround(?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerPoiAround $poiAround): self
    {
        $this->poiAround = $poiAround;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerRegion
     */
    public function getRegion(): ?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerRegion
    {
        return $this->region;
    }

    /**
     * @param \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerRegion $region
     * @return self
     */
    public function setRegion(?\Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerRegion $region): self
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
            $obj->actionConfig = \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerActionConfig::fromArray($v);
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
            $obj->customArea = \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerCustomArea::fromArray($v);
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
            $obj->interestConfig = \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerInterestConfig::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['poi_around'] ?? null) !== null && is_array($v)) {
            $obj->poiAround = \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerPoiAround::fromArray($v);
        }
        if (($v = $data['region'] ?? null) !== null && is_array($v)) {
            $obj->region = \Oceanengine\Models\LocalAudiencePackageGetV30ResponseDataAudiencePackagesInnerRegion::fromArray($v);
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
