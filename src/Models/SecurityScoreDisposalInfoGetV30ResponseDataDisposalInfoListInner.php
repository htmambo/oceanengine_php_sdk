<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityScoreDisposalInfoGetV30ResponseDataDisposalInfoListInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalAction
     */
    protected ?string $disposalAction = null;

    /**
     * 处置结束时间
     * @var string
     */
    protected ?string $disposalEndTime = null;

    /**
     * 处罚单id
     * @var int
     */
    protected ?int $disposalInfoId = null;

    /**
     * 落罚分值
     * @var int
     */
    protected ?int $disposalScore = null;

    /**
     * 处置开始时间
     * @var string
     */
    protected ?string $disposalStartTime = null;

    /**
     * @var \Oceanengine\Models\SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalStatus
     */
    protected ?string $disposalStatus = null;

    /**
     * 处置时长
     * @var string
     */
    protected ?string $disposalTerm = null;

    /**
     * 对外文案
     * @var string
     */
    protected ?string $outerText = null;

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
     * @return \Oceanengine\Models\SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalAction
     */
    public function getDisposalAction(): ?string
    {
        return $this->disposalAction;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalAction $disposalAction
     * @return self
     */
    public function setDisposalAction(?string $disposalAction): self
    {
        $this->disposalAction = $disposalAction;
        return $this;
    }

    /**
     * 处置结束时间
     * @return string
     */
    public function getDisposalEndTime(): ?string
    {
        return $this->disposalEndTime;
    }

    /**
     * 处置结束时间
     * @param string $disposalEndTime
     * @return self
     */
    public function setDisposalEndTime(?string $disposalEndTime): self
    {
        $this->disposalEndTime = $disposalEndTime;
        return $this;
    }

    /**
     * 处罚单id
     * @return int
     */
    public function getDisposalInfoId(): ?int
    {
        return $this->disposalInfoId;
    }

    /**
     * 处罚单id
     * @param int $disposalInfoId
     * @return self
     */
    public function setDisposalInfoId(?int $disposalInfoId): self
    {
        $this->disposalInfoId = $disposalInfoId;
        return $this;
    }

    /**
     * 落罚分值
     * @return int
     */
    public function getDisposalScore(): ?int
    {
        return $this->disposalScore;
    }

    /**
     * 落罚分值
     * @param int $disposalScore
     * @return self
     */
    public function setDisposalScore(?int $disposalScore): self
    {
        $this->disposalScore = $disposalScore;
        return $this;
    }

    /**
     * 处置开始时间
     * @return string
     */
    public function getDisposalStartTime(): ?string
    {
        return $this->disposalStartTime;
    }

    /**
     * 处置开始时间
     * @param string $disposalStartTime
     * @return self
     */
    public function setDisposalStartTime(?string $disposalStartTime): self
    {
        $this->disposalStartTime = $disposalStartTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalStatus
     */
    public function getDisposalStatus(): ?string
    {
        return $this->disposalStatus;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreDisposalInfoGetV30DataDisposalInfoListDisposalStatus $disposalStatus
     * @return self
     */
    public function setDisposalStatus(?string $disposalStatus): self
    {
        $this->disposalStatus = $disposalStatus;
        return $this;
    }

    /**
     * 处置时长
     * @return string
     */
    public function getDisposalTerm(): ?string
    {
        return $this->disposalTerm;
    }

    /**
     * 处置时长
     * @param string $disposalTerm
     * @return self
     */
    public function setDisposalTerm(?string $disposalTerm): self
    {
        $this->disposalTerm = $disposalTerm;
        return $this;
    }

    /**
     * 对外文案
     * @return string
     */
    public function getOuterText(): ?string
    {
        return $this->outerText;
    }

    /**
     * 对外文案
     * @param string $outerText
     * @return self
     */
    public function setOuterText(?string $outerText): self
    {
        $this->outerText = $outerText;
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
        if ($this->disposalAction !== null) {
            $result['disposal_action'] = $this->disposalAction;
        }
        if ($this->disposalEndTime !== null) {
            $result['disposal_end_time'] = $this->disposalEndTime;
        }
        if ($this->disposalInfoId !== null) {
            $result['disposal_info_id'] = $this->disposalInfoId;
        }
        if ($this->disposalScore !== null) {
            $result['disposal_score'] = $this->disposalScore;
        }
        if ($this->disposalStartTime !== null) {
            $result['disposal_start_time'] = $this->disposalStartTime;
        }
        if ($this->disposalStatus !== null) {
            $result['disposal_status'] = $this->disposalStatus;
        }
        if ($this->disposalTerm !== null) {
            $result['disposal_term'] = $this->disposalTerm;
        }
        if ($this->outerText !== null) {
            $result['outer_text'] = $this->outerText;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['disposal_action'] ?? null) !== null) {
            $obj->disposalAction = (string) $v;
        }
        if (($v = $data['disposal_end_time'] ?? null) !== null) {
            $obj->disposalEndTime = (string) $v;
        }
        if (($v = $data['disposal_info_id'] ?? null) !== null) {
            $obj->disposalInfoId = (int) $v;
        }
        if (($v = $data['disposal_score'] ?? null) !== null) {
            $obj->disposalScore = (int) $v;
        }
        if (($v = $data['disposal_start_time'] ?? null) !== null) {
            $obj->disposalStartTime = (string) $v;
        }
        if (($v = $data['disposal_status'] ?? null) !== null) {
            $obj->disposalStatus = (string) $v;
        }
        if (($v = $data['disposal_term'] ?? null) !== null) {
            $obj->disposalTerm = (string) $v;
        }
        if (($v = $data['outer_text'] ?? null) !== null) {
            $obj->outerText = (string) $v;
        }
        return $obj;
    }
}
