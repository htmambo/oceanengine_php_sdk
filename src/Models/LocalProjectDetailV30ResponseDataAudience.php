<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectDetailV30ResponseDataAudience implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceActionConfig
     */
    protected ?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceActionConfig $actionConfig = null;

    /**
     * 年龄
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAudienceAge[]
     */
    protected ?array $age = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAudienceConvertedTimeDuration
     */
    protected ?string $convertedTimeDuration = null;

    /**
     * 自定义区域定向设置
     * @var \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceCustomAreaInner[]
     */
    protected ?array $customArea = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAudienceCustomizedInterestAction
     */
    protected ?string $customizedInterestAction = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAudienceDistrict
     */
    protected ?string $district = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAudienceFilterAwemeAbnormalActive
     */
    protected ?string $filterAwemeAbnormalActive = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAudienceFilterAwemeFansCount
     */
    protected ?string $filterAwemeFansCount = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAudienceGender
     */
    protected ?string $gender = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30DataAudienceHideIfConverted
     */
    protected ?string $hideIfConverted = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceInterestConfig
     */
    protected ?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceInterestConfig $interestConfig = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudiencePoiAround
     */
    protected ?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudiencePoiAround $poiAround = null;

    /**
     * @var \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceRegion
     */
    protected ?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceRegion $region = null;

    /**
     * 定向人群包列表
     * @var int[]
     */
    protected ?array $retargetingTags = null;

    /**
     * 排除人群包列表
     * @var int[]
     */
    protected ?array $retargetingTagsExclude = null;

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceActionConfig
     */
    public function getActionConfig(): ?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceActionConfig
    {
        return $this->actionConfig;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceActionConfig $actionConfig
     * @return self
     */
    public function setActionConfig(?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceActionConfig $actionConfig): self
    {
        $this->actionConfig = $actionConfig;
        return $this;
    }

    /**
     * 年龄
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAudienceAge[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 年龄
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAudienceAge[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAudienceConvertedTimeDuration
     */
    public function getConvertedTimeDuration(): ?string
    {
        return $this->convertedTimeDuration;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAudienceConvertedTimeDuration $convertedTimeDuration
     * @return self
     */
    public function setConvertedTimeDuration(?string $convertedTimeDuration): self
    {
        $this->convertedTimeDuration = $convertedTimeDuration;
        return $this;
    }

    /**
     * 自定义区域定向设置
     * @return \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceCustomAreaInner[]
     */
    public function getCustomArea(): ?array
    {
        return $this->customArea;
    }

    /**
     * 自定义区域定向设置
     * @param \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceCustomAreaInner[] $customArea
     * @return self
     */
    public function setCustomArea(?array $customArea): self
    {
        $this->customArea = $customArea;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAudienceCustomizedInterestAction
     */
    public function getCustomizedInterestAction(): ?string
    {
        return $this->customizedInterestAction;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAudienceCustomizedInterestAction $customizedInterestAction
     * @return self
     */
    public function setCustomizedInterestAction(?string $customizedInterestAction): self
    {
        $this->customizedInterestAction = $customizedInterestAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAudienceDistrict
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAudienceDistrict $district
     * @return self
     */
    public function setDistrict(?string $district): self
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAudienceFilterAwemeAbnormalActive
     */
    public function getFilterAwemeAbnormalActive(): ?string
    {
        return $this->filterAwemeAbnormalActive;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAudienceFilterAwemeAbnormalActive $filterAwemeAbnormalActive
     * @return self
     */
    public function setFilterAwemeAbnormalActive(?string $filterAwemeAbnormalActive): self
    {
        $this->filterAwemeAbnormalActive = $filterAwemeAbnormalActive;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAudienceFilterAwemeFansCount
     */
    public function getFilterAwemeFansCount(): ?string
    {
        return $this->filterAwemeFansCount;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAudienceFilterAwemeFansCount $filterAwemeFansCount
     * @return self
     */
    public function setFilterAwemeFansCount(?string $filterAwemeFansCount): self
    {
        $this->filterAwemeFansCount = $filterAwemeFansCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAudienceGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAudienceGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30DataAudienceHideIfConverted
     */
    public function getHideIfConverted(): ?string
    {
        return $this->hideIfConverted;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30DataAudienceHideIfConverted $hideIfConverted
     * @return self
     */
    public function setHideIfConverted(?string $hideIfConverted): self
    {
        $this->hideIfConverted = $hideIfConverted;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceInterestConfig
     */
    public function getInterestConfig(): ?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceInterestConfig
    {
        return $this->interestConfig;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceInterestConfig $interestConfig
     * @return self
     */
    public function setInterestConfig(?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceInterestConfig $interestConfig): self
    {
        $this->interestConfig = $interestConfig;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudiencePoiAround
     */
    public function getPoiAround(): ?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudiencePoiAround
    {
        return $this->poiAround;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudiencePoiAround $poiAround
     * @return self
     */
    public function setPoiAround(?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudiencePoiAround $poiAround): self
    {
        $this->poiAround = $poiAround;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceRegion
     */
    public function getRegion(): ?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceRegion
    {
        return $this->region;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceRegion $region
     * @return self
     */
    public function setRegion(?\Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceRegion $region): self
    {
        $this->region = $region;
        return $this;
    }

    /**
     * 定向人群包列表
     * @return int[]
     */
    public function getRetargetingTags(): ?array
    {
        return $this->retargetingTags;
    }

    /**
     * 定向人群包列表
     * @param int[] $retargetingTags
     * @return self
     */
    public function setRetargetingTags(?array $retargetingTags): self
    {
        $this->retargetingTags = $retargetingTags;
        return $this;
    }

    /**
     * 排除人群包列表
     * @return int[]
     */
    public function getRetargetingTagsExclude(): ?array
    {
        return $this->retargetingTagsExclude;
    }

    /**
     * 排除人群包列表
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
            $obj->actionConfig = \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceActionConfig::fromArray($v);
        }
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['converted_time_duration'] ?? null) !== null) {
            $obj->convertedTimeDuration = (string) $v;
        }
        if (($v = $data['custom_area'] ?? null) !== null && is_array($v)) {
            $obj->customArea = array_map(fn ($vv) => \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceCustomAreaInner::fromArray($vv), $v);
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
            $obj->interestConfig = \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceInterestConfig::fromArray($v);
        }
        if (($v = $data['poi_around'] ?? null) !== null && is_array($v)) {
            $obj->poiAround = \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudiencePoiAround::fromArray($v);
        }
        if (($v = $data['region'] ?? null) !== null && is_array($v)) {
            $obj->region = \Oceanengine\Models\LocalProjectDetailV30ResponseDataAudienceRegion::fromArray($v);
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
