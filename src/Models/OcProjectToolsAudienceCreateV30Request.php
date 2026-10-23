<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceCreateV30Request implements \JsonSerializable
{
    /**
     * 投放账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 具体年龄定向设置
     * @var \Oceanengine\Models\OcProjectToolsAudienceCreateV30AgeAudience[]
     */
    protected ?array $ageAudience = null;

    /**
     * 目标调控定向类型（支持多选）
     * @var \Oceanengine\Models\OcProjectToolsAudienceCreateV30AudienceType[]
     */
    protected ?array $audienceType = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDistrictAudience
     */
    protected ?\Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDistrictAudience $districtAudience = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceCreateV30GenderAudience
     */
    protected ?string $genderAudience = null;

    /**
     * 调控定向任务名称，默认值：定向溢价任务n_YYYY_MM_DD_HH:MM:SS
     * @var string
     */
    protected ?string $name = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 投放账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 投放账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 具体年龄定向设置
     * @return \Oceanengine\Models\OcProjectToolsAudienceCreateV30AgeAudience[]
     */
    public function getAgeAudience(): ?array
    {
        return $this->ageAudience;
    }

    /**
     * 具体年龄定向设置
     * @param \Oceanengine\Models\OcProjectToolsAudienceCreateV30AgeAudience[] $ageAudience
     * @return self
     */
    public function setAgeAudience(?array $ageAudience): self
    {
        $this->ageAudience = $ageAudience;
        return $this;
    }

    /**
     * 目标调控定向类型（支持多选）
     * @return \Oceanengine\Models\OcProjectToolsAudienceCreateV30AudienceType[]
     */
    public function getAudienceType(): ?array
    {
        return $this->audienceType;
    }

    /**
     * 目标调控定向类型（支持多选）
     * @param \Oceanengine\Models\OcProjectToolsAudienceCreateV30AudienceType[] $audienceType
     * @return self
     */
    public function setAudienceType(?array $audienceType): self
    {
        $this->audienceType = $audienceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDistrictAudience
     */
    public function getDistrictAudience(): ?\Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDistrictAudience
    {
        return $this->districtAudience;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDistrictAudience $districtAudience
     * @return self
     */
    public function setDistrictAudience(?\Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDistrictAudience $districtAudience): self
    {
        $this->districtAudience = $districtAudience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceCreateV30GenderAudience
     */
    public function getGenderAudience(): ?string
    {
        return $this->genderAudience;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceCreateV30GenderAudience $genderAudience
     * @return self
     */
    public function setGenderAudience(?string $genderAudience): self
    {
        $this->genderAudience = $genderAudience;
        return $this;
    }

    /**
     * 调控定向任务名称，默认值：定向溢价任务n_YYYY_MM_DD_HH:MM:SS
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 调控定向任务名称，默认值：定向溢价任务n_YYYY_MM_DD_HH:MM:SS
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->ageAudience !== null) {
            $result['age_audience'] = $this->ageAudience;
        }
        if ($this->audienceType !== null) {
            $result['audience_type'] = $this->audienceType;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->districtAudience !== null) {
            $result['district_audience'] = $this->districtAudience;
        }
        if ($this->genderAudience !== null) {
            $result['gender_audience'] = $this->genderAudience;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['age_audience'] ?? null) !== null && is_array($v)) {
            $obj->ageAudience = $v;
        }
        if (($v = $data['audience_type'] ?? null) !== null && is_array($v)) {
            $obj->audienceType = $v;
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['district_audience'] ?? null) !== null && is_array($v)) {
            $obj->districtAudience = \Oceanengine\Models\OcProjectToolsAudienceCreateV30RequestDistrictAudience::fromArray($v);
        }
        if (($v = $data['gender_audience'] ?? null) !== null) {
            $obj->genderAudience = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
