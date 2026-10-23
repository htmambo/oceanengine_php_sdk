<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30AigcDynamicCreativeSwitch
     */
    protected ?string $aigcDynamicCreativeSwitch = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30RequestAudience
     */
    protected ?\Oceanengine\Models\StdProjectUpdateV30RequestAudience $audience = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30AudienceType
     */
    protected ?string $audienceType = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30AutoExtendTraffic
     */
    protected ?string $autoExtendTraffic = null;

    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var string[]
     */
    protected ?array $blueFlowKeywordName = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30RequestBrandInfo
     */
    protected ?\Oceanengine\Models\StdProjectUpdateV30RequestBrandInfo $brandInfo = null;

    /**
     * 预算
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30BudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var float
     */
    protected ?float $deepCpabid = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30DownloadMode
     */
    protected ?string $downloadMode = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var float
     */
    protected ?float $firstRoiGoal = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30RequestInternalAdvertiserInfo
     */
    protected ?\Oceanengine\Models\StdProjectUpdateV30RequestInternalAdvertiserInfo $internalAdvertiserInfo = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30IsCommentDisable
     */
    protected ?string $isCommentDisable = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30RequestKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var float
     */
    protected ?float $liveDuration = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterials
     */
    protected ?\Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterials $projectMaterials = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var string
     */
    protected ?string $scheduleTime = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30ScheduleType
     */
    protected ?string $scheduleType = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30SearchContinueDelivery
     */
    protected ?string $searchContinueDelivery = null;

    /**
     * @var float
     */
    protected ?float $sevenRoiGoal = null;

    /**
     * @var int[]
     */
    protected ?array $starTaskIdList = null;

    /**
     * @var \Oceanengine\Models\StdProjectUpdateV30RequestTrackUrlSetting
     */
    protected ?\Oceanengine\Models\StdProjectUpdateV30RequestTrackUrlSetting $trackUrlSetting = null;

    /**
     * @var float
     */
    protected ?float $unionBidRatio = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30AigcDynamicCreativeSwitch
     */
    public function getAigcDynamicCreativeSwitch(): ?string
    {
        return $this->aigcDynamicCreativeSwitch;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30AigcDynamicCreativeSwitch $aigcDynamicCreativeSwitch
     * @return self
     */
    public function setAigcDynamicCreativeSwitch(?string $aigcDynamicCreativeSwitch): self
    {
        $this->aigcDynamicCreativeSwitch = $aigcDynamicCreativeSwitch;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\StdProjectUpdateV30RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\StdProjectUpdateV30RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30AudienceType
     */
    public function getAudienceType(): ?string
    {
        return $this->audienceType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30AudienceType $audienceType
     * @return self
     */
    public function setAudienceType(?string $audienceType): self
    {
        $this->audienceType = $audienceType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30AutoExtendTraffic
     */
    public function getAutoExtendTraffic(): ?string
    {
        return $this->autoExtendTraffic;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30AutoExtendTraffic $autoExtendTraffic
     * @return self
     */
    public function setAutoExtendTraffic(?string $autoExtendTraffic): self
    {
        $this->autoExtendTraffic = $autoExtendTraffic;
        return $this;
    }

    /**
     * @return float
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * @param float $bid
     * @return self
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getBlueFlowKeywordName(): ?array
    {
        return $this->blueFlowKeywordName;
    }

    /**
     * @param string[] $blueFlowKeywordName
     * @return self
     */
    public function setBlueFlowKeywordName(?array $blueFlowKeywordName): self
    {
        $this->blueFlowKeywordName = $blueFlowKeywordName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30RequestBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\StdProjectUpdateV30RequestBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30RequestBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\StdProjectUpdateV30RequestBrandInfo $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
        return $this;
    }

    /**
     * 预算
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * 预算
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30BudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30BudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpaBid(): ?float
    {
        return $this->cpaBid;
    }

    /**
     * @param float $cpaBid
     * @return self
     */
    public function setCpaBid(?float $cpaBid): self
    {
        $this->cpaBid = $cpaBid;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeepCpabid(): ?float
    {
        return $this->deepCpabid;
    }

    /**
     * @param float $deepCpabid
     * @return self
     */
    public function setDeepCpabid(?float $deepCpabid): self
    {
        $this->deepCpabid = $deepCpabid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30DownloadMode
     */
    public function getDownloadMode(): ?string
    {
        return $this->downloadMode;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30DownloadMode $downloadMode
     * @return self
     */
    public function setDownloadMode(?string $downloadMode): self
    {
        $this->downloadMode = $downloadMode;
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
    public function getFirstRoiGoal(): ?float
    {
        return $this->firstRoiGoal;
    }

    /**
     * @param float $firstRoiGoal
     * @return self
     */
    public function setFirstRoiGoal(?float $firstRoiGoal): self
    {
        $this->firstRoiGoal = $firstRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30RequestInternalAdvertiserInfo
     */
    public function getInternalAdvertiserInfo(): ?\Oceanengine\Models\StdProjectUpdateV30RequestInternalAdvertiserInfo
    {
        return $this->internalAdvertiserInfo;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30RequestInternalAdvertiserInfo $internalAdvertiserInfo
     * @return self
     */
    public function setInternalAdvertiserInfo(?\Oceanengine\Models\StdProjectUpdateV30RequestInternalAdvertiserInfo $internalAdvertiserInfo): self
    {
        $this->internalAdvertiserInfo = $internalAdvertiserInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30IsCommentDisable
     */
    public function getIsCommentDisable(): ?string
    {
        return $this->isCommentDisable;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30IsCommentDisable $isCommentDisable
     * @return self
     */
    public function setIsCommentDisable(?string $isCommentDisable): self
    {
        $this->isCommentDisable = $isCommentDisable;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30RequestKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30RequestKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveDuration(): ?float
    {
        return $this->liveDuration;
    }

    /**
     * @param float $liveDuration
     * @return self
     */
    public function setLiveDuration(?float $liveDuration): self
    {
        $this->liveDuration = $liveDuration;
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
     * @return \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterials
     */
    public function getProjectMaterials(): ?\Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterials
    {
        return $this->projectMaterials;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterials $projectMaterials
     * @return self
     */
    public function setProjectMaterials(?\Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterials $projectMaterials): self
    {
        $this->projectMaterials = $projectMaterials;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoiGoal(): ?float
    {
        return $this->roiGoal;
    }

    /**
     * @param float $roiGoal
     * @return self
     */
    public function setRoiGoal(?float $roiGoal): self
    {
        $this->roiGoal = $roiGoal;
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
     * @return \Oceanengine\Models\StdProjectUpdateV30ScheduleType
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30ScheduleType $scheduleType
     * @return self
     */
    public function setScheduleType(?string $scheduleType): self
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30SearchContinueDelivery
     */
    public function getSearchContinueDelivery(): ?string
    {
        return $this->searchContinueDelivery;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30SearchContinueDelivery $searchContinueDelivery
     * @return self
     */
    public function setSearchContinueDelivery(?string $searchContinueDelivery): self
    {
        $this->searchContinueDelivery = $searchContinueDelivery;
        return $this;
    }

    /**
     * @return float
     */
    public function getSevenRoiGoal(): ?float
    {
        return $this->sevenRoiGoal;
    }

    /**
     * @param float $sevenRoiGoal
     * @return self
     */
    public function setSevenRoiGoal(?float $sevenRoiGoal): self
    {
        $this->sevenRoiGoal = $sevenRoiGoal;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getStarTaskIdList(): ?array
    {
        return $this->starTaskIdList;
    }

    /**
     * @param int[] $starTaskIdList
     * @return self
     */
    public function setStarTaskIdList(?array $starTaskIdList): self
    {
        $this->starTaskIdList = $starTaskIdList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StdProjectUpdateV30RequestTrackUrlSetting
     */
    public function getTrackUrlSetting(): ?\Oceanengine\Models\StdProjectUpdateV30RequestTrackUrlSetting
    {
        return $this->trackUrlSetting;
    }

    /**
     * @param \Oceanengine\Models\StdProjectUpdateV30RequestTrackUrlSetting $trackUrlSetting
     * @return self
     */
    public function setTrackUrlSetting(?\Oceanengine\Models\StdProjectUpdateV30RequestTrackUrlSetting $trackUrlSetting): self
    {
        $this->trackUrlSetting = $trackUrlSetting;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnionBidRatio(): ?float
    {
        return $this->unionBidRatio;
    }

    /**
     * @param float $unionBidRatio
     * @return self
     */
    public function setUnionBidRatio(?float $unionBidRatio): self
    {
        $this->unionBidRatio = $unionBidRatio;
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
        if ($this->audienceType !== null) {
            $result['audience_type'] = $this->audienceType;
        }
        if ($this->autoExtendTraffic !== null) {
            $result['auto_extend_traffic'] = $this->autoExtendTraffic;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->blueFlowKeywordName !== null) {
            $result['blue_flow_keyword_name'] = $this->blueFlowKeywordName;
        }
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->deepCpabid !== null) {
            $result['deep_cpabid'] = $this->deepCpabid;
        }
        if ($this->downloadMode !== null) {
            $result['download_mode'] = $this->downloadMode;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->firstRoiGoal !== null) {
            $result['first_roi_goal'] = $this->firstRoiGoal;
        }
        if ($this->internalAdvertiserInfo !== null) {
            $result['internal_advertiser_info'] = $this->internalAdvertiserInfo;
        }
        if ($this->isCommentDisable !== null) {
            $result['is_comment_disable'] = $this->isCommentDisable;
        }
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        if ($this->liveDuration !== null) {
            $result['live_duration'] = $this->liveDuration;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->projectMaterials !== null) {
            $result['project_materials'] = $this->projectMaterials;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->scheduleTime !== null) {
            $result['schedule_time'] = $this->scheduleTime;
        }
        if ($this->scheduleType !== null) {
            $result['schedule_type'] = $this->scheduleType;
        }
        if ($this->searchContinueDelivery !== null) {
            $result['search_continue_delivery'] = $this->searchContinueDelivery;
        }
        if ($this->sevenRoiGoal !== null) {
            $result['seven_roi_goal'] = $this->sevenRoiGoal;
        }
        if ($this->starTaskIdList !== null) {
            $result['star_task_id_list'] = $this->starTaskIdList;
        }
        if ($this->trackUrlSetting !== null) {
            $result['track_url_setting'] = $this->trackUrlSetting;
        }
        if ($this->unionBidRatio !== null) {
            $result['union_bid_ratio'] = $this->unionBidRatio;
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
            $obj->audience = \Oceanengine\Models\StdProjectUpdateV30RequestAudience::fromArray($v);
        }
        if (($v = $data['audience_type'] ?? null) !== null) {
            $obj->audienceType = (string) $v;
        }
        if (($v = $data['auto_extend_traffic'] ?? null) !== null) {
            $obj->autoExtendTraffic = (string) $v;
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['blue_flow_keyword_name'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowKeywordName = $v;
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\StdProjectUpdateV30RequestBrandInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['deep_cpabid'] ?? null) !== null) {
            $obj->deepCpabid = (float) $v;
        }
        if (($v = $data['download_mode'] ?? null) !== null) {
            $obj->downloadMode = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['first_roi_goal'] ?? null) !== null) {
            $obj->firstRoiGoal = (float) $v;
        }
        if (($v = $data['internal_advertiser_info'] ?? null) !== null && is_array($v)) {
            $obj->internalAdvertiserInfo = \Oceanengine\Models\StdProjectUpdateV30RequestInternalAdvertiserInfo::fromArray($v);
        }
        if (($v = $data['is_comment_disable'] ?? null) !== null) {
            $obj->isCommentDisable = (string) $v;
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\StdProjectUpdateV30RequestKeywordsInner::fromArray($vv), $v);
        }
        if (($v = $data['live_duration'] ?? null) !== null) {
            $obj->liveDuration = (float) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['project_materials'] ?? null) !== null && is_array($v)) {
            $obj->projectMaterials = \Oceanengine\Models\StdProjectUpdateV30RequestProjectMaterials::fromArray($v);
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['schedule_time'] ?? null) !== null) {
            $obj->scheduleTime = (string) $v;
        }
        if (($v = $data['schedule_type'] ?? null) !== null) {
            $obj->scheduleType = (string) $v;
        }
        if (($v = $data['search_continue_delivery'] ?? null) !== null) {
            $obj->searchContinueDelivery = (string) $v;
        }
        if (($v = $data['seven_roi_goal'] ?? null) !== null) {
            $obj->sevenRoiGoal = (float) $v;
        }
        if (($v = $data['star_task_id_list'] ?? null) !== null && is_array($v)) {
            $obj->starTaskIdList = $v;
        }
        if (($v = $data['track_url_setting'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlSetting = \Oceanengine\Models\StdProjectUpdateV30RequestTrackUrlSetting::fromArray($v);
        }
        if (($v = $data['union_bid_ratio'] ?? null) !== null) {
            $obj->unionBidRatio = (float) $v;
        }
        return $obj;
    }
}
