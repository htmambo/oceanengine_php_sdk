<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfo implements \JsonSerializable
{
    /**
     * 最长分账周期
     * @var int
     */
    protected ?int $accountDivideDay = null;

    /**
     * 组件标题
     * @var string
     */
    protected ?string $anchorTitle = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoAuthorListInner[]
     */
    protected ?array $authorList = null;

    /**
     * 达人选择
     * @var int
     */
    protected ?int $authorScope = null;

    /**
     * 达人侧任务名称
     * @var string
     */
    protected ?string $authorTaskName = null;

    /**
     * @var int
     */
    protected ?int $budget = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoCommissionInfo
     */
    protected ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoCommissionInfo $commissionInfo = null;

    /**
     * 分佣比例
     * @var int
     */
    protected ?int $commissionRate = null;

    /**
     * 结算方式
     * @var int
     */
    protected ?int $commissionType = null;

    /**
     * 任务介绍
     * @var string
     */
    protected ?string $demandDesc = null;

    /**
     * 任务截止时间
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * 短剧可剪辑集数设置
     * @var array<string,int>
     */
    protected ?array $episodeLimit = null;

    /**
     * @var int
     */
    protected ?int $maxUploadItemCnt = null;

    /**
     * 小程序ID
     * @var string
     */
    protected ?string $microAppId = null;

    /**
     * 任务状态
     * @var int
     */
    protected ?int $omTaskStatus = null;

    /**
     * 任务标签
     * @var string[]
     */
    protected ?array $omTaskTag = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoParticipateAuthorRange
     */
    protected ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoParticipateAuthorRange $participateAuthorRange = null;

    /**
     * @var int
     */
    protected ?int $providerScope = null;

    /**
     * @var int
     */
    protected ?int $sampleDelivery = null;

    /**
     * 示例视频
     * @var int[]
     */
    protected ?array $sampleVideo = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoSettlementInfo
     */
    protected ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoSettlementInfo $settlementInfo = null;

    /**
     * 小程序落地页地址
     * @var string
     */
    protected ?string $startPage = null;

    /**
     * 投稿开始时间
     * @var int
     */
    protected ?int $startTime = null;

    /**
     * 任务头图
     * @var string
     */
    protected ?string $taskHeadImage = null;

    /**
     * 任务图标
     * @var string
     */
    protected ?string $taskIcon = null;

    /**
     * 最长分账周期
     * @return int
     */
    public function getAccountDivideDay(): ?int
    {
        return $this->accountDivideDay;
    }

    /**
     * 最长分账周期
     * @param int $accountDivideDay
     * @return self
     */
    public function setAccountDivideDay(?int $accountDivideDay): self
    {
        $this->accountDivideDay = $accountDivideDay;
        return $this;
    }

    /**
     * 组件标题
     * @return string
     */
    public function getAnchorTitle(): ?string
    {
        return $this->anchorTitle;
    }

    /**
     * 组件标题
     * @param string $anchorTitle
     * @return self
     */
    public function setAnchorTitle(?string $anchorTitle): self
    {
        $this->anchorTitle = $anchorTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoAuthorListInner[]
     */
    public function getAuthorList(): ?array
    {
        return $this->authorList;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoAuthorListInner[] $authorList
     * @return self
     */
    public function setAuthorList(?array $authorList): self
    {
        $this->authorList = $authorList;
        return $this;
    }

    /**
     * 达人选择
     * @return int
     */
    public function getAuthorScope(): ?int
    {
        return $this->authorScope;
    }

    /**
     * 达人选择
     * @param int $authorScope
     * @return self
     */
    public function setAuthorScope(?int $authorScope): self
    {
        $this->authorScope = $authorScope;
        return $this;
    }

    /**
     * 达人侧任务名称
     * @return string
     */
    public function getAuthorTaskName(): ?string
    {
        return $this->authorTaskName;
    }

    /**
     * 达人侧任务名称
     * @param string $authorTaskName
     * @return self
     */
    public function setAuthorTaskName(?string $authorTaskName): self
    {
        $this->authorTaskName = $authorTaskName;
        return $this;
    }

    /**
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoCommissionInfo
     */
    public function getCommissionInfo(): ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoCommissionInfo
    {
        return $this->commissionInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoCommissionInfo $commissionInfo
     * @return self
     */
    public function setCommissionInfo(?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoCommissionInfo $commissionInfo): self
    {
        $this->commissionInfo = $commissionInfo;
        return $this;
    }

    /**
     * 分佣比例
     * @return int
     */
    public function getCommissionRate(): ?int
    {
        return $this->commissionRate;
    }

    /**
     * 分佣比例
     * @param int $commissionRate
     * @return self
     */
    public function setCommissionRate(?int $commissionRate): self
    {
        $this->commissionRate = $commissionRate;
        return $this;
    }

    /**
     * 结算方式
     * @return int
     */
    public function getCommissionType(): ?int
    {
        return $this->commissionType;
    }

    /**
     * 结算方式
     * @param int $commissionType
     * @return self
     */
    public function setCommissionType(?int $commissionType): self
    {
        $this->commissionType = $commissionType;
        return $this;
    }

    /**
     * 任务介绍
     * @return string
     */
    public function getDemandDesc(): ?string
    {
        return $this->demandDesc;
    }

    /**
     * 任务介绍
     * @param string $demandDesc
     * @return self
     */
    public function setDemandDesc(?string $demandDesc): self
    {
        $this->demandDesc = $demandDesc;
        return $this;
    }

    /**
     * 任务截止时间
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * 任务截止时间
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 短剧可剪辑集数设置
     * @return array<string,int>
     */
    public function getEpisodeLimit(): ?array
    {
        return $this->episodeLimit;
    }

    /**
     * 短剧可剪辑集数设置
     * @param array<string,int> $episodeLimit
     * @return self
     */
    public function setEpisodeLimit(?array $episodeLimit): self
    {
        $this->episodeLimit = $episodeLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxUploadItemCnt(): ?int
    {
        return $this->maxUploadItemCnt;
    }

    /**
     * @param int $maxUploadItemCnt
     * @return self
     */
    public function setMaxUploadItemCnt(?int $maxUploadItemCnt): self
    {
        $this->maxUploadItemCnt = $maxUploadItemCnt;
        return $this;
    }

    /**
     * 小程序ID
     * @return string
     */
    public function getMicroAppId(): ?string
    {
        return $this->microAppId;
    }

    /**
     * 小程序ID
     * @param string $microAppId
     * @return self
     */
    public function setMicroAppId(?string $microAppId): self
    {
        $this->microAppId = $microAppId;
        return $this;
    }

    /**
     * 任务状态
     * @return int
     */
    public function getOmTaskStatus(): ?int
    {
        return $this->omTaskStatus;
    }

    /**
     * 任务状态
     * @param int $omTaskStatus
     * @return self
     */
    public function setOmTaskStatus(?int $omTaskStatus): self
    {
        $this->omTaskStatus = $omTaskStatus;
        return $this;
    }

    /**
     * 任务标签
     * @return string[]
     */
    public function getOmTaskTag(): ?array
    {
        return $this->omTaskTag;
    }

    /**
     * 任务标签
     * @param string[] $omTaskTag
     * @return self
     */
    public function setOmTaskTag(?array $omTaskTag): self
    {
        $this->omTaskTag = $omTaskTag;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoParticipateAuthorRange
     */
    public function getParticipateAuthorRange(): ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoParticipateAuthorRange
    {
        return $this->participateAuthorRange;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoParticipateAuthorRange $participateAuthorRange
     * @return self
     */
    public function setParticipateAuthorRange(?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoParticipateAuthorRange $participateAuthorRange): self
    {
        $this->participateAuthorRange = $participateAuthorRange;
        return $this;
    }

    /**
     * @return int
     */
    public function getProviderScope(): ?int
    {
        return $this->providerScope;
    }

    /**
     * @param int $providerScope
     * @return self
     */
    public function setProviderScope(?int $providerScope): self
    {
        $this->providerScope = $providerScope;
        return $this;
    }

    /**
     * @return int
     */
    public function getSampleDelivery(): ?int
    {
        return $this->sampleDelivery;
    }

    /**
     * @param int $sampleDelivery
     * @return self
     */
    public function setSampleDelivery(?int $sampleDelivery): self
    {
        $this->sampleDelivery = $sampleDelivery;
        return $this;
    }

    /**
     * 示例视频
     * @return int[]
     */
    public function getSampleVideo(): ?array
    {
        return $this->sampleVideo;
    }

    /**
     * 示例视频
     * @param int[] $sampleVideo
     * @return self
     */
    public function setSampleVideo(?array $sampleVideo): self
    {
        $this->sampleVideo = $sampleVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoSettlementInfo
     */
    public function getSettlementInfo(): ?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoSettlementInfo
    {
        return $this->settlementInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoSettlementInfo $settlementInfo
     * @return self
     */
    public function setSettlementInfo(?\Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoSettlementInfo $settlementInfo): self
    {
        $this->settlementInfo = $settlementInfo;
        return $this;
    }

    /**
     * 小程序落地页地址
     * @return string
     */
    public function getStartPage(): ?string
    {
        return $this->startPage;
    }

    /**
     * 小程序落地页地址
     * @param string $startPage
     * @return self
     */
    public function setStartPage(?string $startPage): self
    {
        $this->startPage = $startPage;
        return $this;
    }

    /**
     * 投稿开始时间
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * 投稿开始时间
     * @param int $startTime
     * @return self
     */
    public function setStartTime(?int $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 任务头图
     * @return string
     */
    public function getTaskHeadImage(): ?string
    {
        return $this->taskHeadImage;
    }

    /**
     * 任务头图
     * @param string $taskHeadImage
     * @return self
     */
    public function setTaskHeadImage(?string $taskHeadImage): self
    {
        $this->taskHeadImage = $taskHeadImage;
        return $this;
    }

    /**
     * 任务图标
     * @return string
     */
    public function getTaskIcon(): ?string
    {
        return $this->taskIcon;
    }

    /**
     * 任务图标
     * @param string $taskIcon
     * @return self
     */
    public function setTaskIcon(?string $taskIcon): self
    {
        $this->taskIcon = $taskIcon;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountDivideDay !== null) {
            $result['account_divide_day'] = $this->accountDivideDay;
        }
        if ($this->anchorTitle !== null) {
            $result['anchor_title'] = $this->anchorTitle;
        }
        if ($this->authorList !== null) {
            $result['author_list'] = $this->authorList;
        }
        if ($this->authorScope !== null) {
            $result['author_scope'] = $this->authorScope;
        }
        if ($this->authorTaskName !== null) {
            $result['author_task_name'] = $this->authorTaskName;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->commissionInfo !== null) {
            $result['commission_info'] = $this->commissionInfo;
        }
        if ($this->commissionRate !== null) {
            $result['commission_rate'] = $this->commissionRate;
        }
        if ($this->commissionType !== null) {
            $result['commission_type'] = $this->commissionType;
        }
        if ($this->demandDesc !== null) {
            $result['demand_desc'] = $this->demandDesc;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->episodeLimit !== null) {
            $result['episode_limit'] = $this->episodeLimit;
        }
        if ($this->maxUploadItemCnt !== null) {
            $result['max_upload_item_cnt'] = $this->maxUploadItemCnt;
        }
        if ($this->microAppId !== null) {
            $result['micro_app_id'] = $this->microAppId;
        }
        if ($this->omTaskStatus !== null) {
            $result['om_task_status'] = $this->omTaskStatus;
        }
        if ($this->omTaskTag !== null) {
            $result['om_task_tag'] = $this->omTaskTag;
        }
        if ($this->participateAuthorRange !== null) {
            $result['participate_author_range'] = $this->participateAuthorRange;
        }
        if ($this->providerScope !== null) {
            $result['provider_scope'] = $this->providerScope;
        }
        if ($this->sampleDelivery !== null) {
            $result['sample_delivery'] = $this->sampleDelivery;
        }
        if ($this->sampleVideo !== null) {
            $result['sample_video'] = $this->sampleVideo;
        }
        if ($this->settlementInfo !== null) {
            $result['settlement_info'] = $this->settlementInfo;
        }
        if ($this->startPage !== null) {
            $result['start_page'] = $this->startPage;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        if ($this->taskHeadImage !== null) {
            $result['task_head_image'] = $this->taskHeadImage;
        }
        if ($this->taskIcon !== null) {
            $result['task_icon'] = $this->taskIcon;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_divide_day'] ?? null) !== null) {
            $obj->accountDivideDay = (int) $v;
        }
        if (($v = $data['anchor_title'] ?? null) !== null) {
            $obj->anchorTitle = (string) $v;
        }
        if (($v = $data['author_list'] ?? null) !== null && is_array($v)) {
            $obj->authorList = array_map(fn ($vv) => \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoAuthorListInner::fromArray($vv), $v);
        }
        if (($v = $data['author_scope'] ?? null) !== null) {
            $obj->authorScope = (int) $v;
        }
        if (($v = $data['author_task_name'] ?? null) !== null) {
            $obj->authorTaskName = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['commission_info'] ?? null) !== null && is_array($v)) {
            $obj->commissionInfo = \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoCommissionInfo::fromArray($v);
        }
        if (($v = $data['commission_rate'] ?? null) !== null) {
            $obj->commissionRate = (int) $v;
        }
        if (($v = $data['commission_type'] ?? null) !== null) {
            $obj->commissionType = (int) $v;
        }
        if (($v = $data['demand_desc'] ?? null) !== null) {
            $obj->demandDesc = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (int) $v;
        }
        if (($v = $data['episode_limit'] ?? null) !== null && is_array($v)) {
            $obj->episodeLimit = $v;
        }
        if (($v = $data['max_upload_item_cnt'] ?? null) !== null) {
            $obj->maxUploadItemCnt = (int) $v;
        }
        if (($v = $data['micro_app_id'] ?? null) !== null) {
            $obj->microAppId = (string) $v;
        }
        if (($v = $data['om_task_status'] ?? null) !== null) {
            $obj->omTaskStatus = (int) $v;
        }
        if (($v = $data['om_task_tag'] ?? null) !== null && is_array($v)) {
            $obj->omTaskTag = $v;
        }
        if (($v = $data['participate_author_range'] ?? null) !== null && is_array($v)) {
            $obj->participateAuthorRange = \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoParticipateAuthorRange::fromArray($v);
        }
        if (($v = $data['provider_scope'] ?? null) !== null) {
            $obj->providerScope = (int) $v;
        }
        if (($v = $data['sample_delivery'] ?? null) !== null) {
            $obj->sampleDelivery = (int) $v;
        }
        if (($v = $data['sample_video'] ?? null) !== null && is_array($v)) {
            $obj->sampleVideo = $v;
        }
        if (($v = $data['settlement_info'] ?? null) !== null && is_array($v)) {
            $obj->settlementInfo = \Oceanengine\Models\StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoSettlementInfo::fromArray($v);
        }
        if (($v = $data['start_page'] ?? null) !== null) {
            $obj->startPage = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (int) $v;
        }
        if (($v = $data['task_head_image'] ?? null) !== null) {
            $obj->taskHeadImage = (string) $v;
        }
        if (($v = $data['task_icon'] ?? null) !== null) {
            $obj->taskIcon = (string) $v;
        }
        return $obj;
    }
}
