<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceUpdateV30Request implements \JsonSerializable
{
    /**
     * 投放账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 具体年龄定向设置
     * @var \Oceanengine\Models\OcProjectToolsAudienceUpdateV30AgeAudience[]
     */
    protected ?array $ageAudience = null;

    /**
     * 目标调控定向类型（支持多选）
     * @var \Oceanengine\Models\OcProjectToolsAudienceUpdateV30AudienceType[]
     */
    protected ?array $audienceType = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudience
     */
    protected ?\Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudience $districtAudience = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceUpdateV30GenderAudience
     */
    protected ?string $genderAudience = null;

    /**
     * 调控定向任务名称，默认值：定向溢价任务n_YYYY_MM_DD_HH:MM:SS
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $scheduleId = null;

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
     * @return \Oceanengine\Models\OcProjectToolsAudienceUpdateV30AgeAudience[]
     */
    public function getAgeAudience(): ?array
    {
        return $this->ageAudience;
    }

    /**
     * 具体年龄定向设置
     * @param \Oceanengine\Models\OcProjectToolsAudienceUpdateV30AgeAudience[] $ageAudience
     * @return self
     */
    public function setAgeAudience(?array $ageAudience): self
    {
        $this->ageAudience = $ageAudience;
        return $this;
    }

    /**
     * 目标调控定向类型（支持多选）
     * @return \Oceanengine\Models\OcProjectToolsAudienceUpdateV30AudienceType[]
     */
    public function getAudienceType(): ?array
    {
        return $this->audienceType;
    }

    /**
     * 目标调控定向类型（支持多选）
     * @param \Oceanengine\Models\OcProjectToolsAudienceUpdateV30AudienceType[] $audienceType
     * @return self
     */
    public function setAudienceType(?array $audienceType): self
    {
        $this->audienceType = $audienceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudience
     */
    public function getDistrictAudience(): ?\Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudience
    {
        return $this->districtAudience;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudience $districtAudience
     * @return self
     */
    public function setDistrictAudience(?\Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudience $districtAudience): self
    {
        $this->districtAudience = $districtAudience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceUpdateV30GenderAudience
     */
    public function getGenderAudience(): ?string
    {
        return $this->genderAudience;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceUpdateV30GenderAudience $genderAudience
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
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
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
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
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
            $obj->deliverySetting = \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['district_audience'] ?? null) !== null && is_array($v)) {
            $obj->districtAudience = \Oceanengine\Models\OcProjectToolsAudienceUpdateV30RequestDistrictAudience::fromArray($v);
        }
        if (($v = $data['gender_audience'] ?? null) !== null) {
            $obj->genderAudience = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        return $obj;
    }
}
