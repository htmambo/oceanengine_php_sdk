<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserQualificationSelectV2V2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $auditTime = null;

    /**
     * @var \Oceanengine\Models\AdvertiserQualificationSelectV2V2ResponseDataListInnerImageListInner[]
     */
    protected ?array $imageList = null;

    /**
     * @var string
     */
    protected ?string $picturePreviewUrl = null;

    /**
     * @var int
     */
    protected ?int $qualificationId = null;

    /**
     * @var int
     */
    protected ?int $qualificationType = null;

    /**
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * @var int
     */
    protected ?int $status = null;

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
     * @return \Oceanengine\Models\AdvertiserQualificationSelectV2V2ResponseDataListInnerImageListInner[]
     */
    public function getImageList(): ?array
    {
        return $this->imageList;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationSelectV2V2ResponseDataListInnerImageListInner[] $imageList
     * @return self
     */
    public function setImageList(?array $imageList): self
    {
        $this->imageList = $imageList;
        return $this;
    }

    /**
     * @return string
     */
    public function getPicturePreviewUrl(): ?string
    {
        return $this->picturePreviewUrl;
    }

    /**
     * @param string $picturePreviewUrl
     * @return self
     */
    public function setPicturePreviewUrl(?string $picturePreviewUrl): self
    {
        $this->picturePreviewUrl = $picturePreviewUrl;
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
     * @return int
     */
    public function getQualificationType(): ?int
    {
        return $this->qualificationType;
    }

    /**
     * @param int $qualificationType
     * @return self
     */
    public function setQualificationType(?int $qualificationType): self
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
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
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
        if ($this->imageList !== null) {
            $result['image_list'] = $this->imageList;
        }
        if ($this->picturePreviewUrl !== null) {
            $result['picture_preview_url'] = $this->picturePreviewUrl;
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
        if (($v = $data['image_list'] ?? null) !== null && is_array($v)) {
            $obj->imageList = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserQualificationSelectV2V2ResponseDataListInnerImageListInner::fromArray($vv), $v);
        }
        if (($v = $data['picture_preview_url'] ?? null) !== null) {
            $obj->picturePreviewUrl = (string) $v;
        }
        if (($v = $data['qualification_id'] ?? null) !== null) {
            $obj->qualificationId = (int) $v;
        }
        if (($v = $data['qualification_type'] ?? null) !== null) {
            $obj->qualificationType = (int) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null) {
            $obj->rejectReason = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        return $obj;
    }
}
