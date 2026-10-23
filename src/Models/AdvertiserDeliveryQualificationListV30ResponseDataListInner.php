<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryQualificationListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $auditTime = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryQualificationListV30ResponseDataListInnerImagesInner[]
     */
    protected ?array $images = null;

    /**
     * @var int
     */
    protected ?int $qualificationId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryQualificationListV30DataListQualificationType
     */
    protected ?string $qualificationType = null;

    /**
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryQualificationListV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * @return string
     */
    public function getAuditTime(): ?string
    {
        return $this->auditTime;
    }

    /**
     * @param string $auditTime
     * @return self
     */
    public function setAuditTime(?string $auditTime): self
    {
        $this->auditTime = $auditTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryQualificationListV30ResponseDataListInnerImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryQualificationListV30ResponseDataListInnerImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return int
     */
    public function getQualificationId(): ?int
    {
        return $this->qualificationId;
    }

    /**
     * @param int $qualificationId
     * @return self
     */
    public function setQualificationId(?int $qualificationId): self
    {
        $this->qualificationId = $qualificationId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryQualificationListV30DataListQualificationType
     */
    public function getQualificationType(): ?string
    {
        return $this->qualificationType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryQualificationListV30DataListQualificationType $qualificationType
     * @return self
     */
    public function setQualificationType(?string $qualificationType): self
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }

    /**
     * @param string $rejectReason
     * @return self
     */
    public function setRejectReason(?string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryQualificationListV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryQualificationListV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditTime !== null) {
            $result['audit_time'] = $this->auditTime;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        if ($this->qualificationId !== null) {
            $result['qualification_id'] = $this->qualificationId;
        }
        if ($this->qualificationType !== null) {
            $result['qualification_type'] = $this->qualificationType;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_time'] ?? null) !== null) {
            $obj->auditTime = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null && is_array($v)) {
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryQualificationListV30ResponseDataListInnerImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['qualification_id'] ?? null) !== null) {
            $obj->qualificationId = (int) $v;
        }
        if (($v = $data['qualification_type'] ?? null) !== null) {
            $obj->qualificationType = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null) {
            $obj->rejectReason = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
