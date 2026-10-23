<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsAudienceListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 具体年龄定向设置
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30DataListAgeAudience[]
     */
    protected ?array $ageAudience = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30DataListAudienceType
     */
    protected ?string $audienceType = null;

    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDeliverySetting
     */
    protected ?\Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudience
     */
    protected ?\Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudience $districtAudience = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30DataListFirstStatus
     */
    protected ?string $firstStatus = null;

    /**
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30DataListGenderAudience
     */
    protected ?string $genderAudience = null;

    /**
     * 调控任务名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 调控任务ID
     * @var int
     */
    protected ?int $scheduleId = null;

    /**
     * 二级任务状态
     * @var \Oceanengine\Models\OcProjectToolsAudienceListV30DataListSecondStatus[]
     */
    protected ?array $secondStatus = null;

    /**
     * 更新时间
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * 具体年龄定向设置
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30DataListAgeAudience[]
     */
    public function getAgeAudience(): ?array
    {
        return $this->ageAudience;
    }

    /**
     * 具体年龄定向设置
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30DataListAgeAudience[] $ageAudience
     * @return self
     */
    public function setAgeAudience(?array $ageAudience): self
    {
        $this->ageAudience = $ageAudience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30DataListAudienceType
     */
    public function getAudienceType(): ?string
    {
        return $this->audienceType;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30DataListAudienceType $audienceType
     * @return self
     */
    public function setAudienceType(?string $audienceType): self
    {
        $this->audienceType = $audienceType;
        return $this;
    }

    /**
     * 创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudience
     */
    public function getDistrictAudience(): ?\Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudience
    {
        return $this->districtAudience;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudience $districtAudience
     * @return self
     */
    public function setDistrictAudience(?\Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudience $districtAudience): self
    {
        $this->districtAudience = $districtAudience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30DataListFirstStatus
     */
    public function getFirstStatus(): ?string
    {
        return $this->firstStatus;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30DataListFirstStatus $firstStatus
     * @return self
     */
    public function setFirstStatus(?string $firstStatus): self
    {
        $this->firstStatus = $firstStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30DataListGenderAudience
     */
    public function getGenderAudience(): ?string
    {
        return $this->genderAudience;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30DataListGenderAudience $genderAudience
     * @return self
     */
    public function setGenderAudience(?string $genderAudience): self
    {
        $this->genderAudience = $genderAudience;
        return $this;
    }

    /**
     * 调控任务名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 调控任务名称
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
     * 调控任务ID
     * @return int
     */
    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    /**
     * 调控任务ID
     * @param int $scheduleId
     * @return self
     */
    public function setScheduleId(?int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    /**
     * 二级任务状态
     * @return \Oceanengine\Models\OcProjectToolsAudienceListV30DataListSecondStatus[]
     */
    public function getSecondStatus(): ?array
    {
        return $this->secondStatus;
    }

    /**
     * 二级任务状态
     * @param \Oceanengine\Models\OcProjectToolsAudienceListV30DataListSecondStatus[] $secondStatus
     * @return self
     */
    public function setSecondStatus(?array $secondStatus): self
    {
        $this->secondStatus = $secondStatus;
        return $this;
    }

    /**
     * 更新时间
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * 更新时间
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ageAudience !== null) {
            $result['age_audience'] = $this->ageAudience;
        }
        if ($this->audienceType !== null) {
            $result['audience_type'] = $this->audienceType;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->districtAudience !== null) {
            $result['district_audience'] = $this->districtAudience;
        }
        if ($this->firstStatus !== null) {
            $result['first_status'] = $this->firstStatus;
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
        if ($this->scheduleId !== null) {
            $result['schedule_id'] = $this->scheduleId;
        }
        if ($this->secondStatus !== null) {
            $result['second_status'] = $this->secondStatus;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['age_audience'] ?? null) !== null && is_array($v)) {
            $obj->ageAudience = $v;
        }
        if (($v = $data['audience_type'] ?? null) !== null) {
            $obj->audienceType = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDeliverySetting::fromArray($v);
        }
        if (($v = $data['district_audience'] ?? null) !== null && is_array($v)) {
            $obj->districtAudience = \Oceanengine\Models\OcProjectToolsAudienceListV30ResponseDataListInnerDistrictAudience::fromArray($v);
        }
        if (($v = $data['first_status'] ?? null) !== null) {
            $obj->firstStatus = (string) $v;
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
        if (($v = $data['schedule_id'] ?? null) !== null) {
            $obj->scheduleId = (int) $v;
        }
        if (($v = $data['second_status'] ?? null) !== null && is_array($v)) {
            $obj->secondStatus = $v;
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
        }
        return $obj;
    }
}
