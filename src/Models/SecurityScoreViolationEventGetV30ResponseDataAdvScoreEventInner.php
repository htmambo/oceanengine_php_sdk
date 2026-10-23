<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityScoreViolationEventGetV30ResponseDataAdvScoreEventInner implements \JsonSerializable
{
    /**
     * 计划id（AD2.0为广告id）
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 违规单id
     * @var int
     */
    protected ?int $eventId = null;

    /**
     * @var \Oceanengine\Models\SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType
     */
    protected ?string $illegalType = null;

    /**
     * 素材id
     * @var string
     */
    protected ?string $materialId = null;

    /**
     * 拒绝理由
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * 扣罚分值
     * @var int
     */
    protected ?int $score = null;

    /**
     * @var \Oceanengine\Models\SecurityScoreViolationEventGetV30DataAdvScoreEventStatus
     */
    protected ?string $status = null;

    /**
     * 违规证据截图
     * @var string
     */
    protected ?string $violationEvidenceImg = null;

    /**
     * 计划id（AD2.0为广告id）
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划id（AD2.0为广告id）
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

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
     * 违规单id
     * @return int
     */
    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    /**
     * 违规单id
     * @param int $eventId
     * @return self
     */
    public function setEventId(?int $eventId): self
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType
     */
    public function getIllegalType(): ?string
    {
        return $this->illegalType;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreViolationEventGetV30DataAdvScoreEventIllegalType $illegalType
     * @return self
     */
    public function setIllegalType(?string $illegalType): self
    {
        $this->illegalType = $illegalType;
        return $this;
    }

    /**
     * 素材id
     * @return string
     */
    public function getMaterialId(): ?string
    {
        return $this->materialId;
    }

    /**
     * 素材id
     * @param string $materialId
     * @return self
     */
    public function setMaterialId(?string $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 拒绝理由
     * @return string
     */
    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }

    /**
     * 拒绝理由
     * @param string $rejectReason
     * @return self
     */
    public function setRejectReason(?string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * 扣罚分值
     * @return int
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * 扣罚分值
     * @param int $score
     * @return self
     */
    public function setScore(?int $score): self
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityScoreViolationEventGetV30DataAdvScoreEventStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreViolationEventGetV30DataAdvScoreEventStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 违规证据截图
     * @return string
     */
    public function getViolationEvidenceImg(): ?string
    {
        return $this->violationEvidenceImg;
    }

    /**
     * 违规证据截图
     * @param string $violationEvidenceImg
     * @return self
     */
    public function setViolationEvidenceImg(?string $violationEvidenceImg): self
    {
        $this->violationEvidenceImg = $violationEvidenceImg;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->eventId !== null) {
            $result['event_id'] = $this->eventId;
        }
        if ($this->illegalType !== null) {
            $result['illegal_type'] = $this->illegalType;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->score !== null) {
            $result['score'] = $this->score;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->violationEvidenceImg !== null) {
            $result['violation_evidence_img'] = $this->violationEvidenceImg;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['event_id'] ?? null) !== null) {
            $obj->eventId = (int) $v;
        }
        if (($v = $data['illegal_type'] ?? null) !== null) {
            $obj->illegalType = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null) {
            $obj->rejectReason = (string) $v;
        }
        if (($v = $data['score'] ?? null) !== null) {
            $obj->score = (int) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['violation_evidence_img'] ?? null) !== null) {
            $obj->violationEvidenceImg = (string) $v;
        }
        return $obj;
    }
}
