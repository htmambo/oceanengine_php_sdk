<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalDeliveryQualificationListV30ResponseDataQualificationsInner implements \JsonSerializable
{
    /**
     * 审核时间
     * @var string
     */
    protected ?string $auditTime = null;

    /**
     * 图片字段 *
     * @var \Oceanengine\Models\LocalDeliveryQualificationListV30ResponseDataQualificationsInnerImagesInner[]
     */
    protected ?array $images = null;

    /**
     * 资质ID
     * @var int
     */
    protected ?int $qualificationId = null;

    /**
     * 资质类型
     * @var int
     */
    protected ?int $qualificationType = null;

    /**
     * 资质类型名称
     * @var string
     */
    protected ?string $qualificationTypeName = null;

    /**
     * 资质类型版本
     * @var int
     */
    protected ?int $qualificationTypeVersion = null;

    /**
     * 拒绝理由
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * 资质状态
     * @var int
     */
    protected ?int $status = null;

    /**
     * 审核时间
     * @return string
     */
    public function getAuditTime(): ?string
    {
        return $this->auditTime;
    }

    /**
     * 审核时间
     * @param string $auditTime
     * @return self
     */
    public function setAuditTime(?string $auditTime): self
    {
        $this->auditTime = $auditTime;
        return $this;
    }

    /**
     * 图片字段 *
     * @return \Oceanengine\Models\LocalDeliveryQualificationListV30ResponseDataQualificationsInnerImagesInner[]
     */
    public function getImages(): ?array
    {
        return $this->images;
    }

    /**
     * 图片字段 *
     * @param \Oceanengine\Models\LocalDeliveryQualificationListV30ResponseDataQualificationsInnerImagesInner[] $images
     * @return self
     */
    public function setImages(?array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * 资质ID
     * @return int
     */
    public function getQualificationId(): ?int
    {
        return $this->qualificationId;
    }

    /**
     * 资质ID
     * @param int $qualificationId
     * @return self
     */
    public function setQualificationId(?int $qualificationId): self
    {
        $this->qualificationId = $qualificationId;
        return $this;
    }

    /**
     * 资质类型
     * @return int
     */
    public function getQualificationType(): ?int
    {
        return $this->qualificationType;
    }

    /**
     * 资质类型
     * @param int $qualificationType
     * @return self
     */
    public function setQualificationType(?int $qualificationType): self
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * 资质类型名称
     * @return string
     */
    public function getQualificationTypeName(): ?string
    {
        return $this->qualificationTypeName;
    }

    /**
     * 资质类型名称
     * @param string $qualificationTypeName
     * @return self
     */
    public function setQualificationTypeName(?string $qualificationTypeName): self
    {
        $this->qualificationTypeName = $qualificationTypeName;
        return $this;
    }

    /**
     * 资质类型版本
     * @return int
     */
    public function getQualificationTypeVersion(): ?int
    {
        return $this->qualificationTypeVersion;
    }

    /**
     * 资质类型版本
     * @param int $qualificationTypeVersion
     * @return self
     */
    public function setQualificationTypeVersion(?int $qualificationTypeVersion): self
    {
        $this->qualificationTypeVersion = $qualificationTypeVersion;
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
     * 资质状态
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 资质状态
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
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        if ($this->qualificationId !== null) {
            $result['qualification_id'] = $this->qualificationId;
        }
        if ($this->qualificationType !== null) {
            $result['qualification_type'] = $this->qualificationType;
        }
        if ($this->qualificationTypeName !== null) {
            $result['qualification_type_name'] = $this->qualificationTypeName;
        }
        if ($this->qualificationTypeVersion !== null) {
            $result['qualification_type_version'] = $this->qualificationTypeVersion;
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
            $obj->images = array_map(fn ($vv) => \Oceanengine\Models\LocalDeliveryQualificationListV30ResponseDataQualificationsInnerImagesInner::fromArray($vv), $v);
        }
        if (($v = $data['qualification_id'] ?? null) !== null) {
            $obj->qualificationId = (int) $v;
        }
        if (($v = $data['qualification_type'] ?? null) !== null) {
            $obj->qualificationType = (int) $v;
        }
        if (($v = $data['qualification_type_name'] ?? null) !== null) {
            $obj->qualificationTypeName = (string) $v;
        }
        if (($v = $data['qualification_type_version'] ?? null) !== null) {
            $obj->qualificationTypeVersion = (int) $v;
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
