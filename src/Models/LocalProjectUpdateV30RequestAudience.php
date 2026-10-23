<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectUpdateV30RequestAudience implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceActionConfig
     */
    protected ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceActionConfig $actionConfig = null;

    /**
     * 年龄
     * @var \Oceanengine\Models\LocalProjectUpdateV30AudienceAge[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30AudienceConvertedTimeDuration
     */
    protected ?string $convertedTimeDuration = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomArea
     */
    protected ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomArea $customArea = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30AudienceCustomizedInterestAction
     */
    protected ?string $customizedInterestAction = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30AudienceDistrict
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30AudienceFilterAwemeAbnormalActive
     */
    protected ?string $filterAwemeAbnormalActive = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30AudienceFilterAwemeFansCount
     */
    protected ?string $filterAwemeFansCount = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30AudienceGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30AudienceHideIfConverted
     */
    protected ?string $hideIfConverted = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceInterestConfig
     */
    protected ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceInterestConfig $interestConfig = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30RequestAudiencePoiAround
     */
    protected ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudiencePoiAround $poiAround = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceRegion
     */
    protected ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceRegion $region = null;

    /**
     * 定向人群包
     * @var int[]
     */
    protected ?array $retargetingTags = null;

    /**
     * 排除人群包
     * @var int[]
     */
    protected ?array $retargetingTagsExclude = null;

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceActionConfig
     */
    public function getActionConfig(): ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceActionConfig
    {
        return $this->actionConfig;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceActionConfig $actionConfig
     * @return self
     */
    public function setActionConfig(?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceActionConfig $actionConfig): self
    {
        $this->actionConfig = $actionConfig;
        return $this;
    }

    /**
     * 年龄
     * @return \Oceanengine\Models\LocalProjectUpdateV30AudienceAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 年龄
     * @param \Oceanengine\Models\LocalProjectUpdateV30AudienceAge[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30AudienceConvertedTimeDuration
     */
    public function getConvertedTimeDuration(): ?string
    {
        return $this->convertedTimeDuration;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30AudienceConvertedTimeDuration $convertedTimeDuration
     * @return self
     */
    public function setConvertedTimeDuration(?string $convertedTimeDuration): self
    {
        $this->convertedTimeDuration = $convertedTimeDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomArea
     */
    public function getCustomArea(): ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomArea
    {
        return $this->customArea;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomArea $customArea
     * @return self
     */
    public function setCustomArea(?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomArea $customArea): self
    {
        $this->customArea = $customArea;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30AudienceCustomizedInterestAction
     */
    public function getCustomizedInterestAction(): ?string
    {
        return $this->customizedInterestAction;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30AudienceCustomizedInterestAction $customizedInterestAction
     * @return self
     */
    public function setCustomizedInterestAction(?string $customizedInterestAction): self
    {
        $this->customizedInterestAction = $customizedInterestAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30AudienceDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30AudienceDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30AudienceFilterAwemeAbnormalActive
     */
    public function getFilterAwemeAbnormalActive(): ?string
    {
        return $this->filterAwemeAbnormalActive;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30AudienceFilterAwemeAbnormalActive $filterAwemeAbnormalActive
     * @return self
     */
    public function setFilterAwemeAbnormalActive(?string $filterAwemeAbnormalActive): self
    {
        $this->filterAwemeAbnormalActive = $filterAwemeAbnormalActive;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30AudienceFilterAwemeFansCount
     */
    public function getFilterAwemeFansCount(): ?string
    {
        return $this->filterAwemeFansCount;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30AudienceFilterAwemeFansCount $filterAwemeFansCount
     * @return self
     */
    public function setFilterAwemeFansCount(?string $filterAwemeFansCount): self
    {
        $this->filterAwemeFansCount = $filterAwemeFansCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30AudienceGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30AudienceGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30AudienceHideIfConverted
     */
    public function getHideIfConverted(): ?string
    {
        return $this->hideIfConverted;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30AudienceHideIfConverted $hideIfConverted
     * @return self
     */
    public function setHideIfConverted(?string $hideIfConverted): self
    {
        $this->hideIfConverted = $hideIfConverted;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceInterestConfig
     */
    public function getInterestConfig(): ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceInterestConfig
    {
        return $this->interestConfig;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceInterestConfig $interestConfig
     * @return self
     */
    public function setInterestConfig(?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceInterestConfig $interestConfig): self
    {
        $this->interestConfig = $interestConfig;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30RequestAudiencePoiAround
     */
    public function getPoiAround(): ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudiencePoiAround
    {
        return $this->poiAround;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30RequestAudiencePoiAround $poiAround
     * @return self
     */
    public function setPoiAround(?\Oceanengine\Models\LocalProjectUpdateV30RequestAudiencePoiAround $poiAround): self
    {
        $this->poiAround = $poiAround;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceRegion
     */
    public function getRegion(): ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceRegion
    {
        return $this->region;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceRegion $region
     * @return self
     */
    public function setRegion(?\Oceanengine\Models\LocalProjectUpdateV30RequestAudienceRegion $region): self
    {
        $this->region = $region;
        return $this;
    }

    /**
     * 定向人群包
     * @return int[]
     */
    public function getRetargetingTags(): ?array
    {
        return $this->retargetingTags;
    }

    /**
     * 定向人群包
     * @param int[] $retargetingTags
     * @return self
     */
    public function setRetargetingTags(?array $retargetingTags): self
    {
        $this->retargetingTags = $retargetingTags;
        return $this;
    }

    /**
     * 排除人群包
     * @return int[]
     */
    public function getRetargetingTagsExclude(): ?array
    {
        return $this->retargetingTagsExclude;
    }

    /**
     * 排除人群包
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
        if ($this->convertedTimeDuration !== null) {
            $result['converted_time_duration'] = $this->convertedTimeDuration;
        }
        if ($this->customArea !== null) {
            $result['custom_area'] = $this->customArea;
        }
        if ($this->customizedInterestAction !== null) {
            $result['customized_interest_action'] = $this->customizedInterestAction;
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
            $obj->actionConfig = \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceActionConfig::fromArray($v);
        }
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['converted_time_duration'] ?? null) !== null) {
            $obj->convertedTimeDuration = (string) $v;
        }
        if (($v = $data['custom_area'] ?? null) !== null && is_array($v)) {
            $obj->customArea = \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceCustomArea::fromArray($v);
        }
        if (($v = $data['customized_interest_action'] ?? null) !== null) {
            $obj->customizedInterestAction = (string) $v;
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
            $obj->interestConfig = \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceInterestConfig::fromArray($v);
        }
        if (($v = $data['poi_around'] ?? null) !== null && is_array($v)) {
            $obj->poiAround = \Oceanengine\Models\LocalProjectUpdateV30RequestAudiencePoiAround::fromArray($v);
        }
        if (($v = $data['region'] ?? null) !== null && is_array($v)) {
            $obj->region = \Oceanengine\Models\LocalProjectUpdateV30RequestAudienceRegion::fromArray($v);
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
