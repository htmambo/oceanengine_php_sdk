<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UniProjectListGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30DataListAigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerAudience
     */
    protected ?\Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerAudience $audience = null;

    /**
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerBrandInfo
     */
    protected ?\Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerBrandInfo $brandInfo = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var float
     */
    protected ?float $goingGlobalBudget = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30DataListGoingGlobalBudgetStatus
     */
    protected ?string $goingGlobalBudgetStatus = null;

    /**
     * @var float
     */
    protected ?float $goingGlobalRoiGoal = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30DataListGoingGlobalSwitch
     */
    protected ?string $goingGlobalSwitch = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30DataListMonetizationMode
     */
    protected ?string $monetizationMode = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30DataListPricing
     */
    protected ?string $pricing = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerRelatedProduct
     */
    protected ?\Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerRelatedProduct $relatedProduct = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30DataListScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30DataListStatusFirst
     */
    protected ?string $statusFirst = null;

    /**
     * @var \Oceanengine\Models\UniProjectListGetV30DataListStatusSecond[]
     */
    protected ?array $statusSecond = null;

    /**
     * @var float
     */
    protected ?float $uniRoiGoal = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30DataListAigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30DataListAigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
     * @return self
     */
    public function setAigcDynamicCreativeSwitch(?string $aigcDynamicCreativeSwitch): self
    {
        $this->aigcDynamicCreativeSwitch = $aigcDynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerAudience
     */
    public function getAudience(): ?\Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerBrandInfo $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getGoingGlobalBudget(): ?float
    {
        return $this->goingGlobalBudget;
    }

    /**
     * @param float $goingGlobalBudget
     * @return self
     */
    public function setGoingGlobalBudget(?float $goingGlobalBudget): self
    {
        $this->goingGlobalBudget = $goingGlobalBudget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30DataListGoingGlobalBudgetStatus
     */
    public function getGoingGlobalBudgetStatus(): ?string
    {
        return $this->goingGlobalBudgetStatus;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30DataListGoingGlobalBudgetStatus $goingGlobalBudgetStatus
     * @return self
     */
    public function setGoingGlobalBudgetStatus(?string $goingGlobalBudgetStatus): self
    {
        $this->goingGlobalBudgetStatus = $goingGlobalBudgetStatus;
        return $this;
    }

    /**
     * @return float
     */
    public function getGoingGlobalRoiGoal(): ?float
    {
        return $this->goingGlobalRoiGoal;
    }

    /**
     * @param float $goingGlobalRoiGoal
     * @return self
     */
    public function setGoingGlobalRoiGoal(?float $goingGlobalRoiGoal): self
    {
        $this->goingGlobalRoiGoal = $goingGlobalRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30DataListGoingGlobalSwitch
     */
    public function getGoingGlobalSwitch(): ?string
    {
        return $this->goingGlobalSwitch;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30DataListGoingGlobalSwitch $goingGlobalSwitch
     * @return self
     */
    public function setGoingGlobalSwitch(?string $goingGlobalSwitch): self
    {
        $this->goingGlobalSwitch = $goingGlobalSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30DataListMonetizationMode
     */
    public function getMonetizationMode(): ?string
    {
        return $this->monetizationMode;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30DataListMonetizationMode $monetizationMode
     * @return self
     */
    public function setMonetizationMode(?string $monetizationMode): self
    {
        $this->monetizationMode = $monetizationMode;
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
     * @return \Oceanengine\Models\UniProjectListGetV30DataListPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30DataListPricing $pricing
     * @return self
     */
    public function setPricing(?string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerRelatedProduct
     */
    public function getRelatedProduct(): ?\Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerRelatedProduct
    {
        return $this->relatedProduct;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerRelatedProduct $relatedProduct
     * @return self
     */
    public function setRelatedProduct(?\Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerRelatedProduct $relatedProduct): self
    {
        $this->relatedProduct = $relatedProduct;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleTime(): ?string
    {
        return $this->scheduleTime;
    }

    /**
     * @param string $scheduleTime
     * @return self
     */
    public function setScheduleTime(?string $scheduleTime): self
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30DataListScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30DataListScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30DataListStatusFirst
     */
    public function getStatusFirst(): ?string
    {
        return $this->statusFirst;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30DataListStatusFirst $statusFirst
     * @return self
     */
    public function setStatusFirst(?string $statusFirst): self
    {
        $this->statusFirst = $statusFirst;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\UniProjectListGetV30DataListStatusSecond[]
     */
    public function getStatusSecond(): ?array
    {
        return $this->statusSecond;
    }

    /**
     * @param \Oceanengine\Models\UniProjectListGetV30DataListStatusSecond[] $statusSecond
     * @return self
     */
    public function setStatusSecond(?array $statusSecond): self
    {
        $this->statusSecond = $statusSecond;
        return $this;
    }

    /**
     * @return float
     */
    public function getUniRoiGoal(): ?float
    {
        return $this->uniRoiGoal;
    }

    /**
     * @param float $uniRoiGoal
     * @return self
     */
    public function setUniRoiGoal(?float $uniRoiGoal): self
    {
        $this->uniRoiGoal = $uniRoiGoal;
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
        if ($this->aigcDynamicCreativeSwitch !== null) {
            $result['aigc_dynamic_creative_switch'] = $this->aigcDynamicCreativeSwitch;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->goingGlobalBudget !== null) {
            $result['going_global_budget'] = $this->goingGlobalBudget;
        }
        if ($this->goingGlobalBudgetStatus !== null) {
            $result['going_global_budget_status'] = $this->goingGlobalBudgetStatus;
        }
        if ($this->goingGlobalRoiGoal !== null) {
            $result['going_global_roi_goal'] = $this->goingGlobalRoiGoal;
        }
        if ($this->goingGlobalSwitch !== null) {
            $result['going_global_switch'] = $this->goingGlobalSwitch;
        }
        if ($this->monetizationMode !== null) {
            $result['monetization_mode'] = $this->monetizationMode;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->relatedProduct !== null) {
            $result['related_product'] = $this->relatedProduct;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->statusFirst !== null) {
            $result['status_first'] = $this->statusFirst;
        }
        if ($this->statusSecond !== null) {
            $result['status_second'] = $this->statusSecond;
        }
        if ($this->uniRoiGoal !== null) {
            $result['uni_roi_goal'] = $this->uniRoiGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aigc_dynamic_creative_switch'] ?? null) !== null) {
            $obj->aigcDynamicCreativeSwitch = (string) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerAudience::fromArray($v);
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerBrandInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['going_global_budget'] ?? null) !== null) {
            $obj->goingGlobalBudget = (float) $v;
        }
        if (($v = $data['going_global_budget_status'] ?? null) !== null) {
            $obj->goingGlobalBudgetStatus = (string) $v;
        }
        if (($v = $data['going_global_roi_goal'] ?? null) !== null) {
            $obj->goingGlobalRoiGoal = (float) $v;
        }
        if (($v = $data['going_global_switch'] ?? null) !== null) {
            $obj->goingGlobalSwitch = (string) $v;
        }
        if (($v = $data['monetization_mode'] ?? null) !== null) {
            $obj->monetizationMode = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['related_product'] ?? null) !== null && is_array($v)) {
            $obj->relatedProduct = \Oceanengine\Models\UniProjectListGetV30ResponseDataListInnerRelatedProduct::fromArray($v);
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['status_first'] ?? null) !== null) {
            $obj->statusFirst = (string) $v;
        }
        if (($v = $data['status_second'] ?? null) !== null && is_array($v)) {
            $obj->statusSecond = $v;
        }
        if (($v = $data['uni_roi_goal'] ?? null) !== null) {
            $obj->uniRoiGoal = (float) $v;
        }
        return $obj;
    }
}
