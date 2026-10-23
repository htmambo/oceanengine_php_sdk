<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmCreateChallengeV2RequestChallengeInfo implements \JsonSerializable
{
    /**
     * 最长分账周期
     * @var int
     */
    protected ?int $accountDivideDay = null;

    /**
     * 组件标题 最长14字
     * @var string
     */
    protected ?string $anchorTitle = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2ChallengeInfoAuthorScope
     */
    protected ?string $authorScope = null;

    /**
     * 达人侧任务名称 字符串，最长17
     * @var string
     */
    protected ?string $authorTaskName = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoCommissionInfo
     */
    protected ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoCommissionInfo $commissionInfo = null;

    /**
     * 分佣比例 整数，范围根据任务类型限制
     * @var int
     */
    protected ?int $commissionRate = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2ChallengeInfoCommissionType
     */
    protected ?string $commissionType = null;

    /**
     * 任务介绍 文本，最长500字
     * @var string
     */
    protected ?string $demandDesc = null;

    /**
     * 短剧可剪辑集数限制
     * @var array<string,int>
     */
    protected ?array $episodeLimit = null;

    /**
     * 小程序ID
     * @var string
     */
    protected ?string $microAppId = null;

    /**
     * 任务标签 list<string> 长度固定为2  [${形式标签}, ${内容标签}]
     * @var string[]
     */
    protected ?array $omTaskTag = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateAuthorRange
     */
    protected ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateAuthorRange $participateAuthorRange = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateProviderRange
     */
    protected ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateProviderRange $participateProviderRange = null;

    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2ChallengeInfoProviderScope
     */
    protected ?string $providerScope = null;

    /**
     * 示例视频id list<i64> 最多5个
     * @var int[]
     */
    protected ?array $sampleVideo = null;

    /**
     * 小程序落地页地址 字符串，支持校验合规性
     * @var string
     */
    protected ?string $startPage = null;

    /**
     * 任务头图 URL文本
     * @var string
     */
    protected ?string $taskHeadImage = null;

    /**
     * 任务图标 URL文本
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
     * 组件标题 最长14字
     * @return string
     */
    public function getAnchorTitle(): ?string
    {
        return $this->anchorTitle;
    }

    /**
     * 组件标题 最长14字
     * @param string $anchorTitle
     * @return self
     */
    public function setAnchorTitle(?string $anchorTitle): self
    {
        $this->anchorTitle = $anchorTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2ChallengeInfoAuthorScope
     */
    public function getAuthorScope(): ?string
    {
        return $this->authorScope;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2ChallengeInfoAuthorScope $authorScope
     * @return self
     */
    public function setAuthorScope(?string $authorScope): self
    {
        $this->authorScope = $authorScope;
        return $this;
    }

    /**
     * 达人侧任务名称 字符串，最长17
     * @return string
     */
    public function getAuthorTaskName(): ?string
    {
        return $this->authorTaskName;
    }

    /**
     * 达人侧任务名称 字符串，最长17
     * @param string $authorTaskName
     * @return self
     */
    public function setAuthorTaskName(?string $authorTaskName): self
    {
        $this->authorTaskName = $authorTaskName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoCommissionInfo
     */
    public function getCommissionInfo(): ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoCommissionInfo
    {
        return $this->commissionInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoCommissionInfo $commissionInfo
     * @return self
     */
    public function setCommissionInfo(?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoCommissionInfo $commissionInfo): self
    {
        $this->commissionInfo = $commissionInfo;
        return $this;
    }

    /**
     * 分佣比例 整数，范围根据任务类型限制
     * @return int
     */
    public function getCommissionRate(): ?int
    {
        return $this->commissionRate;
    }

    /**
     * 分佣比例 整数，范围根据任务类型限制
     * @param int $commissionRate
     * @return self
     */
    public function setCommissionRate(?int $commissionRate): self
    {
        $this->commissionRate = $commissionRate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2ChallengeInfoCommissionType
     */
    public function getCommissionType(): ?string
    {
        return $this->commissionType;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2ChallengeInfoCommissionType $commissionType
     * @return self
     */
    public function setCommissionType(?string $commissionType): self
    {
        $this->commissionType = $commissionType;
        return $this;
    }

    /**
     * 任务介绍 文本，最长500字
     * @return string
     */
    public function getDemandDesc(): ?string
    {
        return $this->demandDesc;
    }

    /**
     * 任务介绍 文本，最长500字
     * @param string $demandDesc
     * @return self
     */
    public function setDemandDesc(?string $demandDesc): self
    {
        $this->demandDesc = $demandDesc;
        return $this;
    }

    /**
     * 短剧可剪辑集数限制
     * @return array<string,int>
     */
    public function getEpisodeLimit(): ?array
    {
        return $this->episodeLimit;
    }

    /**
     * 短剧可剪辑集数限制
     * @param array<string,int> $episodeLimit
     * @return self
     */
    public function setEpisodeLimit(?array $episodeLimit): self
    {
        $this->episodeLimit = $episodeLimit;
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
     * 任务标签 list<string> 长度固定为2  [${形式标签}, ${内容标签}]
     * @return string[]
     */
    public function getOmTaskTag(): ?array
    {
        return $this->omTaskTag;
    }

    /**
     * 任务标签 list<string> 长度固定为2  [${形式标签}, ${内容标签}]
     * @param string[] $omTaskTag
     * @return self
     */
    public function setOmTaskTag(?array $omTaskTag): self
    {
        $this->omTaskTag = $omTaskTag;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateAuthorRange
     */
    public function getParticipateAuthorRange(): ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateAuthorRange
    {
        return $this->participateAuthorRange;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateAuthorRange $participateAuthorRange
     * @return self
     */
    public function setParticipateAuthorRange(?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateAuthorRange $participateAuthorRange): self
    {
        $this->participateAuthorRange = $participateAuthorRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateProviderRange
     */
    public function getParticipateProviderRange(): ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateProviderRange
    {
        return $this->participateProviderRange;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateProviderRange $participateProviderRange
     * @return self
     */
    public function setParticipateProviderRange(?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateProviderRange $participateProviderRange): self
    {
        $this->participateProviderRange = $participateProviderRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2ChallengeInfoProviderScope
     */
    public function getProviderScope(): ?string
    {
        return $this->providerScope;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2ChallengeInfoProviderScope $providerScope
     * @return self
     */
    public function setProviderScope(?string $providerScope): self
    {
        $this->providerScope = $providerScope;
        return $this;
    }

    /**
     * 示例视频id list<i64> 最多5个
     * @return int[]
     */
    public function getSampleVideo(): ?array
    {
        return $this->sampleVideo;
    }

    /**
     * 示例视频id list<i64> 最多5个
     * @param int[] $sampleVideo
     * @return self
     */
    public function setSampleVideo(?array $sampleVideo): self
    {
        $this->sampleVideo = $sampleVideo;
        return $this;
    }

    /**
     * 小程序落地页地址 字符串，支持校验合规性
     * @return string
     */
    public function getStartPage(): ?string
    {
        return $this->startPage;
    }

    /**
     * 小程序落地页地址 字符串，支持校验合规性
     * @param string $startPage
     * @return self
     */
    public function setStartPage(?string $startPage): self
    {
        $this->startPage = $startPage;
        return $this;
    }

    /**
     * 任务头图 URL文本
     * @return string
     */
    public function getTaskHeadImage(): ?string
    {
        return $this->taskHeadImage;
    }

    /**
     * 任务头图 URL文本
     * @param string $taskHeadImage
     * @return self
     */
    public function setTaskHeadImage(?string $taskHeadImage): self
    {
        $this->taskHeadImage = $taskHeadImage;
        return $this;
    }

    /**
     * 任务图标 URL文本
     * @return string
     */
    public function getTaskIcon(): ?string
    {
        return $this->taskIcon;
    }

    /**
     * 任务图标 URL文本
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
        if ($this->authorScope !== null) {
            $result['author_scope'] = $this->authorScope;
        }
        if ($this->authorTaskName !== null) {
            $result['author_task_name'] = $this->authorTaskName;
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
        if ($this->episodeLimit !== null) {
            $result['episode_limit'] = $this->episodeLimit;
        }
        if ($this->microAppId !== null) {
            $result['micro_app_id'] = $this->microAppId;
        }
        if ($this->omTaskTag !== null) {
            $result['om_task_tag'] = $this->omTaskTag;
        }
        if ($this->participateAuthorRange !== null) {
            $result['participate_author_range'] = $this->participateAuthorRange;
        }
        if ($this->participateProviderRange !== null) {
            $result['participate_provider_range'] = $this->participateProviderRange;
        }
        if ($this->providerScope !== null) {
            $result['provider_scope'] = $this->providerScope;
        }
        if ($this->sampleVideo !== null) {
            $result['sample_video'] = $this->sampleVideo;
        }
        if ($this->startPage !== null) {
            $result['start_page'] = $this->startPage;
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
        if (($v = $data['author_scope'] ?? null) !== null) {
            $obj->authorScope = (string) $v;
        }
        if (($v = $data['author_task_name'] ?? null) !== null) {
            $obj->authorTaskName = (string) $v;
        }
        if (($v = $data['commission_info'] ?? null) !== null && is_array($v)) {
            $obj->commissionInfo = \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoCommissionInfo::fromArray($v);
        }
        if (($v = $data['commission_rate'] ?? null) !== null) {
            $obj->commissionRate = (int) $v;
        }
        if (($v = $data['commission_type'] ?? null) !== null) {
            $obj->commissionType = (string) $v;
        }
        if (($v = $data['demand_desc'] ?? null) !== null) {
            $obj->demandDesc = (string) $v;
        }
        if (($v = $data['episode_limit'] ?? null) !== null && is_array($v)) {
            $obj->episodeLimit = $v;
        }
        if (($v = $data['micro_app_id'] ?? null) !== null) {
            $obj->microAppId = (string) $v;
        }
        if (($v = $data['om_task_tag'] ?? null) !== null && is_array($v)) {
            $obj->omTaskTag = $v;
        }
        if (($v = $data['participate_author_range'] ?? null) !== null && is_array($v)) {
            $obj->participateAuthorRange = \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateAuthorRange::fromArray($v);
        }
        if (($v = $data['participate_provider_range'] ?? null) !== null && is_array($v)) {
            $obj->participateProviderRange = \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestChallengeInfoParticipateProviderRange::fromArray($v);
        }
        if (($v = $data['provider_scope'] ?? null) !== null) {
            $obj->providerScope = (string) $v;
        }
        if (($v = $data['sample_video'] ?? null) !== null && is_array($v)) {
            $obj->sampleVideo = $v;
        }
        if (($v = $data['start_page'] ?? null) !== null) {
            $obj->startPage = (string) $v;
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
