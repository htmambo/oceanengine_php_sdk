<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProjectUpdateV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30RequestAudience
     */
    protected ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudience $audience = null;

    /**
     * @var int
     */
    protected ?int $bid = null;

    /**
     * 预算
     * @var int
     */
    protected ?int $budget = null;

    /**
     * 私信接待抖音号，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、intelligent_selection_mode = On时：(选的留咨组件+选的n个营销页里有1个关联组件里包含私信)->必传，否则不传 3、intelligent_selection_mode = Off时 3.1、 localAssetType=详情页/私信页:选的留咨组件里包含私信->必传，否则不传 3.2、 localAssetType=营销页：选的n个营销页里有1个关联组件里包含私信->必传，否则不传 3.3 不传不更新，传了=0认为：删除，传了>0:认为：更新
     * @var string
     */
    protected ?string $consultAwemeUid = null;

    /**
     * 每日投放时长（单位：秒，必须为1800s的整数倍）
     * @var int
     */
    protected ?int $dailyDeliverySeconds = null;

    /**
     * 结束投放时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 高峰日-预算上调比例（40表示上调40%）
     * @var int
     */
    protected ?int $highBudgetRate = null;

    /**
     * 是否设置高峰日预算
     * @var bool
     */
    protected ?bool $isSetPeakBudget = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 选择的营销页ids，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、仅(intelligent_selection_mode = Off && local_asset_type = 营销页 ) 或者  （intelligent_selection_mode = On && 所选的门店/商品包含营销页） 时必传，否则不传
     * @var int[]
     */
    protected ?array $marketPageIds = null;

    /**
     * 项目名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 高峰日-节假日
     * @var \Oceanengine\Models\LocalProjectUpdateV30PeakHolidays[]
     */
    protected ?array $peakHolidays = null;

    /**
     * 高峰日-自然周
     * @var \Oceanengine\Models\LocalProjectUpdateV30PeakWeekDays[]
     */
    protected ?array $peakWeekDays = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 固定投放时长
     * @var int
     */
    protected ?int $scheduleFixedSeconds = null;

    /**
     * 投放时段
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\LocalProjectUpdateV30ScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\LocalProjectUpdateV30RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\LocalProjectUpdateV30RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return int
     */
    public function getBid(): ?int
    {
        return $this->bid;
    }

    /**
     * @param int $bid
     * @return self
     */
    public function setBid(?int $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * 预算
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 预算
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 私信接待抖音号，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、intelligent_selection_mode = On时：(选的留咨组件+选的n个营销页里有1个关联组件里包含私信)->必传，否则不传 3、intelligent_selection_mode = Off时 3.1、 localAssetType=详情页/私信页:选的留咨组件里包含私信->必传，否则不传 3.2、 localAssetType=营销页：选的n个营销页里有1个关联组件里包含私信->必传，否则不传 3.3 不传不更新，传了=0认为：删除，传了>0:认为：更新
     * @return string
     */
    public function getConsultAwemeUid(): ?string
    {
        return $this->consultAwemeUid;
    }

    /**
     * 私信接待抖音号，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、intelligent_selection_mode = On时：(选的留咨组件+选的n个营销页里有1个关联组件里包含私信)->必传，否则不传 3、intelligent_selection_mode = Off时 3.1、 localAssetType=详情页/私信页:选的留咨组件里包含私信->必传，否则不传 3.2、 localAssetType=营销页：选的n个营销页里有1个关联组件里包含私信->必传，否则不传 3.3 不传不更新，传了=0认为：删除，传了>0:认为：更新
     * @param string $consultAwemeUid
     * @return self
     */
    public function setConsultAwemeUid(?string $consultAwemeUid): self
    {
        $this->consultAwemeUid = $consultAwemeUid;
        return $this;
    }

    /**
     * 每日投放时长（单位：秒，必须为1800s的整数倍）
     * @return int
     */
    public function getDailyDeliverySeconds(): ?int
    {
        return $this->dailyDeliverySeconds;
    }

    /**
     * 每日投放时长（单位：秒，必须为1800s的整数倍）
     * @param int $dailyDeliverySeconds
     * @return self
     */
    public function setDailyDeliverySeconds(?int $dailyDeliverySeconds): self
    {
        $this->dailyDeliverySeconds = $dailyDeliverySeconds;
        return $this;
    }

    /**
     * 结束投放时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 结束投放时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 高峰日-预算上调比例（40表示上调40%）
     * @return int
     */
    public function getHighBudgetRate(): ?int
    {
        return $this->highBudgetRate;
    }

    /**
     * 高峰日-预算上调比例（40表示上调40%）
     * @param int $highBudgetRate
     * @return self
     */
    public function setHighBudgetRate(?int $highBudgetRate): self
    {
        $this->highBudgetRate = $highBudgetRate;
        return $this;
    }

    /**
     * 是否设置高峰日预算
     * @return bool
     */
    public function getIsSetPeakBudget(): ?bool
    {
        return $this->isSetPeakBudget;
    }

    /**
     * 是否设置高峰日预算
     * @param bool $isSetPeakBudget
     * @return self
     */
    public function setIsSetPeakBudget(?bool $isSetPeakBudget): self
    {
        $this->isSetPeakBudget = $isSetPeakBudget;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 选择的营销页ids，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、仅(intelligent_selection_mode = Off && local_asset_type = 营销页 ) 或者  （intelligent_selection_mode = On && 所选的门店/商品包含营销页） 时必传，否则不传
     * @return int[]
     */
    public function getMarketPageIds(): ?array
    {
        return $this->marketPageIds;
    }

    /**
     * 选择的营销页ids，详细规则： 1、仅local_delivery_scene=“EXTERNAL”线索时支持传 2、仅(intelligent_selection_mode = Off && local_asset_type = 营销页 ) 或者  （intelligent_selection_mode = On && 所选的门店/商品包含营销页） 时必传，否则不传
     * @param int[] $marketPageIds
     * @return self
     */
    public function setMarketPageIds(?array $marketPageIds): self
    {
        $this->marketPageIds = $marketPageIds;
        return $this;
    }

    /**
     * 项目名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 项目名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 高峰日-节假日
     * @return \Oceanengine\Models\LocalProjectUpdateV30PeakHolidays[]
     */
    public function getPeakHolidays(): ?array
    {
        return $this->peakHolidays;
    }

    /**
     * 高峰日-节假日
     * @param \Oceanengine\Models\LocalProjectUpdateV30PeakHolidays[] $peakHolidays
     * @return self
     */
    public function setPeakHolidays(?array $peakHolidays): self
    {
        $this->peakHolidays = $peakHolidays;
        return $this;
    }

    /**
     * 高峰日-自然周
     * @return \Oceanengine\Models\LocalProjectUpdateV30PeakWeekDays[]
     */
    public function getPeakWeekDays(): ?array
    {
        return $this->peakWeekDays;
    }

    /**
     * 高峰日-自然周
     * @param \Oceanengine\Models\LocalProjectUpdateV30PeakWeekDays[] $peakWeekDays
     * @return self
     */
    public function setPeakWeekDays(?array $peakWeekDays): self
    {
        $this->peakWeekDays = $peakWeekDays;
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
     * 固定投放时长
     * @return int
     */
    public function getScheduleFixedSeconds(): ?int
    {
        return $this->scheduleFixedSeconds;
    }

    /**
     * 固定投放时长
     * @param int $scheduleFixedSeconds
     * @return self
     */
    public function setScheduleFixedSeconds(?int $scheduleFixedSeconds): self
    {
        $this->scheduleFixedSeconds = $scheduleFixedSeconds;
        return $this;
    }

    /**
     * 投放时段
     * @return string
     */
    public function getScheduleTime(): ?string
    {
        return $this->scheduleTime;
    }

    /**
     * 投放时段
     * @param string $scheduleTime
     * @return self
     */
    public function setScheduleTime(?string $scheduleTime): self
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalProjectUpdateV30ScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\LocalProjectUpdateV30ScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->consultAwemeUid !== null) {
            $result['consult_aweme_uid'] = $this->consultAwemeUid;
        }
        if ($this->dailyDeliverySeconds !== null) {
            $result['daily_delivery_seconds'] = $this->dailyDeliverySeconds;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->highBudgetRate !== null) {
            $result['high_budget_rate'] = $this->highBudgetRate;
        }
        if ($this->isSetPeakBudget !== null) {
            $result['is_set_peak_budget'] = $this->isSetPeakBudget;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->marketPageIds !== null) {
            $result['market_page_ids'] = $this->marketPageIds;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->peakHolidays !== null) {
            $result['peak_holidays'] = $this->peakHolidays;
        }
        if ($this->peakWeekDays !== null) {
            $result['peak_week_days'] = $this->peakWeekDays;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->scheduleFixedSeconds !== null) {
            $result['schedule_fixed_seconds'] = $this->scheduleFixedSeconds;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\LocalProjectUpdateV30RequestAudience::fromArray($v);
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (int) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['consult_aweme_uid'] ?? null) !== null) {
            $obj->consultAwemeUid = (string) $v;
        }
        if (($v = $data['daily_delivery_seconds'] ?? null) !== null) {
            $obj->dailyDeliverySeconds = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['high_budget_rate'] ?? null) !== null) {
            $obj->highBudgetRate = (int) $v;
        }
        if (($v = $data['is_set_peak_budget'] ?? null) !== null) {
            $obj->isSetPeakBudget = (bool) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['market_page_ids'] ?? null) !== null && is_array($v)) {
            $obj->marketPageIds = $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['peak_holidays'] ?? null) !== null && is_array($v)) {
            $obj->peakHolidays = $v;
        }
        if (($v = $data['peak_week_days'] ?? null) !== null && is_array($v)) {
            $obj->peakWeekDays = $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['schedule_fixed_seconds'] ?? null) !== null) {
            $obj->scheduleFixedSeconds = (int) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        return $obj;
    }
}
