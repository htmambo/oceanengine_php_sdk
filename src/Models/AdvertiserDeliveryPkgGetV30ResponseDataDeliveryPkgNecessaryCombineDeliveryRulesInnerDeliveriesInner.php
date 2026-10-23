<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombineDeliveryRulesInnerDeliveriesInner implements \JsonSerializable
{
    /**
     * 资质图片附件
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombineDeliveryRulesInnerDeliveriesInnerAttachmentsInner[]
     */
    protected ?array $attachments = null;

    /**
     * 资质类型id
     * @var int
     */
    protected ?int $qualType = null;

    /**
     * 资质类型名称
     * @var string
     */
    protected ?string $qualTypeName = null;

    /**
     * 资质id
     * @var int
     */
    protected ?int $qualificationId = null;

    /**
     * 拒绝理由，若资质被拒绝，则会有拒绝理由
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgGetV30DataDeliveryPkgNecessaryCombineDeliveryRulesDeliveriesStatus
     */
    protected ?string $status = null;

    /**
     * 资质图片附件
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombineDeliveryRulesInnerDeliveriesInnerAttachmentsInner[]
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
    }

    /**
     * 资质图片附件
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombineDeliveryRulesInnerDeliveriesInnerAttachmentsInner[] $attachments
     * @return self
     */
    public function setAttachments(?array $attachments): self
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     * 资质类型id
     * @return int
     */
    public function getQualType(): ?int
    {
        return $this->qualType;
    }

    /**
     * 资质类型id
     * @param int $qualType
     * @return self
     */
    public function setQualType(?int $qualType): self
    {
        $this->qualType = $qualType;
        return $this;
    }

    /**
     * 资质类型名称
     * @return string
     */
    public function getQualTypeName(): ?string
    {
        return $this->qualTypeName;
    }

    /**
     * 资质类型名称
     * @param string $qualTypeName
     * @return self
     */
    public function setQualTypeName(?string $qualTypeName): self
    {
        $this->qualTypeName = $qualTypeName;
        return $this;
    }

    /**
     * 资质id
     * @return int
     */
    public function getQualificationId(): ?int
    {
        return $this->qualificationId;
    }

    /**
     * 资质id
     * @param int $qualificationId
     * @return self
     */
    public function setQualificationId(?int $qualificationId): self
    {
        $this->qualificationId = $qualificationId;
        return $this;
    }

    /**
     * 拒绝理由，若资质被拒绝，则会有拒绝理由
     * @return string
     */
    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }

    /**
     * 拒绝理由，若资质被拒绝，则会有拒绝理由
     * @param string $rejectReason
     * @return self
     */
    public function setRejectReason(?string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgGetV30DataDeliveryPkgNecessaryCombineDeliveryRulesDeliveriesStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgGetV30DataDeliveryPkgNecessaryCombineDeliveryRulesDeliveriesStatus $status
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
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        if ($this->qualType !== null) {
            $result['qual_type'] = $this->qualType;
        }
        if ($this->qualTypeName !== null) {
            $result['qual_type_name'] = $this->qualTypeName;
        }
        if ($this->qualificationId !== null) {
            $result['qualification_id'] = $this->qualificationId;
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
        if (($v = $data['attachments'] ?? null) !== null && is_array($v)) {
            $obj->attachments = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombineDeliveryRulesInnerDeliveriesInnerAttachmentsInner::fromArray($vv), $v);
        }
        if (($v = $data['qual_type'] ?? null) !== null) {
            $obj->qualType = (int) $v;
        }
        if (($v = $data['qual_type_name'] ?? null) !== null) {
            $obj->qualTypeName = (string) $v;
        }
        if (($v = $data['qualification_id'] ?? null) !== null) {
            $obj->qualificationId = (int) $v;
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
