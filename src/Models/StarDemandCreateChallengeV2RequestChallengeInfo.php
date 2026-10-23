<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestChallengeInfo implements \JsonSerializable
{
    /**
     * 达人选择方式
     * @var int
     */
    protected ?int $authorChooseType = null;

    /**
     * @var bool
     */
    protected ?bool $authorNoThresholdTask = null;

    /**
     * 达人侧任务名称 60字内
     * @var string
     */
    protected ?string $authorTaskName = null;

    /**
     * 总预算，单位元 正整数，最低10000
     * @var int
     */
    protected ?int $budget = null;

    /**
     * 漫剧任务填写10，其余任务不填写
     * @var int
     */
    protected ?int $challengePlayType = null;

    /**
     * 投稿活动结束时间，unix时间戳（秒） 不可早于start_time
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * @var int
     */
    protected ?int $marketingType = null;

    /**
     * 单达人可投稿次数 范围1~20
     * @var int
     */
    protected ?int $maxUploadItemCnt = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRange
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRange $participateAuthorRange = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateMcnRange
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateMcnRange $participateMcnRange = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateProviderRange
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateProviderRange $participateProviderRange = null;

    /**
     * 是否给达人寄送样品 0：否；1：是
     * @var int
     */
    protected ?int $sampleDelivery = null;

    /**
     * 示例视频ID（https://www.douyin.com/video/xxx 中的XXX部分） 最多3个
     * @var int[]
     */
    protected ?array $sampleVideo = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoSettlementInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoSettlementInfo $settlementInfo = null;

    /**
     * 投稿活动开始时间，unix时间戳（秒） 不可早于当前日期
     * @var int
     */
    protected ?int $startTime = null;

    /**
     * 任务头图 通过上传材料接口上传的文件名
     * @var string
     */
    protected ?string $taskHeadImage = null;

    /**
     * 任务图标 通过上传材料接口上传的文件名
     * @var string
     */
    protected ?string $taskIcon = null;

    /**
     * 达人选择方式
     * @return int
     */
    public function getAuthorChooseType(): ?int
    {
        return $this->authorChooseType;
    }

    /**
     * 达人选择方式
     * @param int $authorChooseType
     * @return self
     */
    public function setAuthorChooseType(?int $authorChooseType): self
    {
        $this->authorChooseType = $authorChooseType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAuthorNoThresholdTask(): ?bool
    {
        return $this->authorNoThresholdTask;
    }

    /**
     * @param bool $authorNoThresholdTask
     * @return self
     */
    public function setAuthorNoThresholdTask(?bool $authorNoThresholdTask): self
    {
        $this->authorNoThresholdTask = $authorNoThresholdTask;
        return $this;
    }

    /**
     * 达人侧任务名称 60字内
     * @return string
     */
    public function getAuthorTaskName(): ?string
    {
        return $this->authorTaskName;
    }

    /**
     * 达人侧任务名称 60字内
     * @param string $authorTaskName
     * @return self
     */
    public function setAuthorTaskName(?string $authorTaskName): self
    {
        $this->authorTaskName = $authorTaskName;
        return $this;
    }

    /**
     * 总预算，单位元 正整数，最低10000
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * 总预算，单位元 正整数，最低10000
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * 漫剧任务填写10，其余任务不填写
     * @return int
     */
    public function getChallengePlayType(): ?int
    {
        return $this->challengePlayType;
    }

    /**
     * 漫剧任务填写10，其余任务不填写
     * @param int $challengePlayType
     * @return self
     */
    public function setChallengePlayType(?int $challengePlayType): self
    {
        $this->challengePlayType = $challengePlayType;
        return $this;
    }

    /**
     * 投稿活动结束时间，unix时间戳（秒） 不可早于start_time
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * 投稿活动结束时间，unix时间戳（秒） 不可早于start_time
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getMarketingType(): ?int
    {
        return $this->marketingType;
    }

    /**
     * @param int $marketingType
     * @return self
     */
    public function setMarketingType(?int $marketingType): self
    {
        $this->marketingType = $marketingType;
        return $this;
    }

    /**
     * 单达人可投稿次数 范围1~20
     * @return int
     */
    public function getMaxUploadItemCnt(): ?int
    {
        return $this->maxUploadItemCnt;
    }

    /**
     * 单达人可投稿次数 范围1~20
     * @param int $maxUploadItemCnt
     * @return self
     */
    public function setMaxUploadItemCnt(?int $maxUploadItemCnt): self
    {
        $this->maxUploadItemCnt = $maxUploadItemCnt;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRange
     */
    public function getParticipateAuthorRange(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRange
    {
        return $this->participateAuthorRange;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRange $participateAuthorRange
     * @return self
     */
    public function setParticipateAuthorRange(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRange $participateAuthorRange): self
    {
        $this->participateAuthorRange = $participateAuthorRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateMcnRange
     */
    public function getParticipateMcnRange(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateMcnRange
    {
        return $this->participateMcnRange;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateMcnRange $participateMcnRange
     * @return self
     */
    public function setParticipateMcnRange(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateMcnRange $participateMcnRange): self
    {
        $this->participateMcnRange = $participateMcnRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateProviderRange
     */
    public function getParticipateProviderRange(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateProviderRange
    {
        return $this->participateProviderRange;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateProviderRange $participateProviderRange
     * @return self
     */
    public function setParticipateProviderRange(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateProviderRange $participateProviderRange): self
    {
        $this->participateProviderRange = $participateProviderRange;
        return $this;
    }

    /**
     * 是否给达人寄送样品 0：否；1：是
     * @return int
     */
    public function getSampleDelivery(): ?int
    {
        return $this->sampleDelivery;
    }

    /**
     * 是否给达人寄送样品 0：否；1：是
     * @param int $sampleDelivery
     * @return self
     */
    public function setSampleDelivery(?int $sampleDelivery): self
    {
        $this->sampleDelivery = $sampleDelivery;
        return $this;
    }

    /**
     * 示例视频ID（https://www.douyin.com/video/xxx 中的XXX部分） 最多3个
     * @return int[]
     */
    public function getSampleVideo(): ?array
    {
        return $this->sampleVideo;
    }

    /**
     * 示例视频ID（https://www.douyin.com/video/xxx 中的XXX部分） 最多3个
     * @param int[] $sampleVideo
     * @return self
     */
    public function setSampleVideo(?array $sampleVideo): self
    {
        $this->sampleVideo = $sampleVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoSettlementInfo
     */
    public function getSettlementInfo(): ?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoSettlementInfo
    {
        return $this->settlementInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoSettlementInfo $settlementInfo
     * @return self
     */
    public function setSettlementInfo(?\Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoSettlementInfo $settlementInfo): self
    {
        $this->settlementInfo = $settlementInfo;
        return $this;
    }

    /**
     * 投稿活动开始时间，unix时间戳（秒） 不可早于当前日期
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * 投稿活动开始时间，unix时间戳（秒） 不可早于当前日期
     * @param int $startTime
     * @return self
     */
    public function setStartTime(?int $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 任务头图 通过上传材料接口上传的文件名
     * @return string
     */
    public function getTaskHeadImage(): ?string
    {
        return $this->taskHeadImage;
    }

    /**
     * 任务头图 通过上传材料接口上传的文件名
     * @param string $taskHeadImage
     * @return self
     */
    public function setTaskHeadImage(?string $taskHeadImage): self
    {
        $this->taskHeadImage = $taskHeadImage;
        return $this;
    }

    /**
     * 任务图标 通过上传材料接口上传的文件名
     * @return string
     */
    public function getTaskIcon(): ?string
    {
        return $this->taskIcon;
    }

    /**
     * 任务图标 通过上传材料接口上传的文件名
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
        if ($this->authorChooseType !== null) {
            $result['author_choose_type'] = $this->authorChooseType;
        }
        if ($this->authorNoThresholdTask !== null) {
            $result['author_no_threshold_task'] = $this->authorNoThresholdTask;
        }
        if ($this->authorTaskName !== null) {
            $result['author_task_name'] = $this->authorTaskName;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->challengePlayType !== null) {
            $result['challenge_play_type'] = $this->challengePlayType;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->marketingType !== null) {
            $result['marketing_type'] = $this->marketingType;
        }
        if ($this->maxUploadItemCnt !== null) {
            $result['max_upload_item_cnt'] = $this->maxUploadItemCnt;
        }
        if ($this->participateAuthorRange !== null) {
            $result['participate_author_range'] = $this->participateAuthorRange;
        }
        if ($this->participateMcnRange !== null) {
            $result['participate_mcn_range'] = $this->participateMcnRange;
        }
        if ($this->participateProviderRange !== null) {
            $result['participate_provider_range'] = $this->participateProviderRange;
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
        if (($v = $data['author_choose_type'] ?? null) !== null) {
            $obj->authorChooseType = (int) $v;
        }
        if (($v = $data['author_no_threshold_task'] ?? null) !== null) {
            $obj->authorNoThresholdTask = (bool) $v;
        }
        if (($v = $data['author_task_name'] ?? null) !== null) {
            $obj->authorTaskName = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['challenge_play_type'] ?? null) !== null) {
            $obj->challengePlayType = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (int) $v;
        }
        if (($v = $data['marketing_type'] ?? null) !== null) {
            $obj->marketingType = (int) $v;
        }
        if (($v = $data['max_upload_item_cnt'] ?? null) !== null) {
            $obj->maxUploadItemCnt = (int) $v;
        }
        if (($v = $data['participate_author_range'] ?? null) !== null && is_array($v)) {
            $obj->participateAuthorRange = \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateAuthorRange::fromArray($v);
        }
        if (($v = $data['participate_mcn_range'] ?? null) !== null && is_array($v)) {
            $obj->participateMcnRange = \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateMcnRange::fromArray($v);
        }
        if (($v = $data['participate_provider_range'] ?? null) !== null && is_array($v)) {
            $obj->participateProviderRange = \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoParticipateProviderRange::fromArray($v);
        }
        if (($v = $data['sample_delivery'] ?? null) !== null) {
            $obj->sampleDelivery = (int) $v;
        }
        if (($v = $data['sample_video'] ?? null) !== null && is_array($v)) {
            $obj->sampleVideo = $v;
        }
        if (($v = $data['settlement_info'] ?? null) !== null && is_array($v)) {
            $obj->settlementInfo = \Oceanengine\Models\StarDemandCreateChallengeV2RequestChallengeInfoSettlementInfo::fromArray($v);
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
