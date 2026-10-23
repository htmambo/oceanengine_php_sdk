<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $authorTaskName = null;

    /**
     * @var int
     */
    protected ?int $budget = null;

    /**
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * @var int
     */
    protected ?int $maxUploadItemCnt = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoParticipateAuthorRange
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoParticipateAuthorRange $participateAuthorRange = null;

    /**
     * @var int
     */
    protected ?int $sampleDelivery = null;

    /**
     * @var int[]
     */
    protected ?array $sampleVideo = null;

    /**
     * @var \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoSettlementInfo
     */
    protected ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoSettlementInfo $settlementInfo = null;

    /**
     * @var int
     */
    protected ?int $startTime = null;

    /**
     * @var string
     */
    protected ?string $taskHeadImage = null;

    /**
     * @var string
     */
    protected ?string $taskIcon = null;

    /**
     * @return string
     */
    public function getAuthorTaskName(): ?string
    {
        return $this->authorTaskName;
    }

    /**
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
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
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
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoParticipateAuthorRange
     */
    public function getParticipateAuthorRange(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoParticipateAuthorRange
    {
        return $this->participateAuthorRange;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoParticipateAuthorRange $participateAuthorRange
     * @return self
     */
    public function setParticipateAuthorRange(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoParticipateAuthorRange $participateAuthorRange): self
    {
        $this->participateAuthorRange = $participateAuthorRange;
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
     * @return int[]
     */
    public function getSampleVideo(): ?array
    {
        return $this->sampleVideo;
    }

    /**
     * @param int[] $sampleVideo
     * @return self
     */
    public function setSampleVideo(?array $sampleVideo): self
    {
        $this->sampleVideo = $sampleVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoSettlementInfo
     */
    public function getSettlementInfo(): ?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoSettlementInfo
    {
        return $this->settlementInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoSettlementInfo $settlementInfo
     * @return self
     */
    public function setSettlementInfo(?\Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoSettlementInfo $settlementInfo): self
    {
        $this->settlementInfo = $settlementInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartTime(): ?int
    {
        return $this->startTime;
    }

    /**
     * @param int $startTime
     * @return self
     */
    public function setStartTime(?int $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskHeadImage(): ?string
    {
        return $this->taskHeadImage;
    }

    /**
     * @param string $taskHeadImage
     * @return self
     */
    public function setTaskHeadImage(?string $taskHeadImage): self
    {
        $this->taskHeadImage = $taskHeadImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaskIcon(): ?string
    {
        return $this->taskIcon;
    }

    /**
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
        if ($this->authorTaskName !== null) {
            $result['author_task_name'] = $this->authorTaskName;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->maxUploadItemCnt !== null) {
            $result['max_upload_item_cnt'] = $this->maxUploadItemCnt;
        }
        if ($this->participateAuthorRange !== null) {
            $result['participate_author_range'] = $this->participateAuthorRange;
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
        if (($v = $data['author_task_name'] ?? null) !== null) {
            $obj->authorTaskName = (string) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (int) $v;
        }
        if (($v = $data['max_upload_item_cnt'] ?? null) !== null) {
            $obj->maxUploadItemCnt = (int) $v;
        }
        if (($v = $data['participate_author_range'] ?? null) !== null && is_array($v)) {
            $obj->participateAuthorRange = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoParticipateAuthorRange::fromArray($v);
        }
        if (($v = $data['sample_delivery'] ?? null) !== null) {
            $obj->sampleDelivery = (int) $v;
        }
        if (($v = $data['sample_video'] ?? null) !== null && is_array($v)) {
            $obj->sampleVideo = $v;
        }
        if (($v = $data['settlement_info'] ?? null) !== null && is_array($v)) {
            $obj->settlementInfo = \Oceanengine\Models\StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeInfoSettlementInfo::fromArray($v);
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
