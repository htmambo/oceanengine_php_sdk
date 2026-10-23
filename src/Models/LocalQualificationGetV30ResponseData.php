<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalQualificationGetV30ResponseData implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 行业资质
     * @var \Oceanengine\Models\LocalQualificationGetV30ResponseDataIndustriesInner[]
     */
    protected ?array $industries = null;

    /**
     * @var \Oceanengine\Models\LocalQualificationGetV30DataIndustryQuaStatus
     */
    protected ?string $industryQuaStatus = null;

    /**
     * 拒绝理由
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * @var \Oceanengine\Models\LocalQualificationGetV30DataStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\LocalQualificationGetV30ResponseDataSubject
     */
    protected ?\Oceanengine\Models\LocalQualificationGetV30ResponseDataSubject $subject = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 行业资质
     * @return \Oceanengine\Models\LocalQualificationGetV30ResponseDataIndustriesInner[]
     */
    public function getIndustries(): ?array
    {
        return $this->industries;
    }

    /**
     * 行业资质
     * @param \Oceanengine\Models\LocalQualificationGetV30ResponseDataIndustriesInner[] $industries
     * @return self
     */
    public function setIndustries(?array $industries): self
    {
        $this->industries = $industries;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalQualificationGetV30DataIndustryQuaStatus
     */
    public function getIndustryQuaStatus(): ?string
    {
        return $this->industryQuaStatus;
    }

    /**
     * @param \Oceanengine\Models\LocalQualificationGetV30DataIndustryQuaStatus $industryQuaStatus
     * @return self
     */
    public function setIndustryQuaStatus(?string $industryQuaStatus): self
    {
        $this->industryQuaStatus = $industryQuaStatus;
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
     * @return \Oceanengine\Models\LocalQualificationGetV30DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\LocalQualificationGetV30DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalQualificationGetV30ResponseDataSubject
     */
    public function getSubject(): ?\Oceanengine\Models\LocalQualificationGetV30ResponseDataSubject
    {
        return $this->subject;
    }

    /**
     * @param \Oceanengine\Models\LocalQualificationGetV30ResponseDataSubject $subject
     * @return self
     */
    public function setSubject(?\Oceanengine\Models\LocalQualificationGetV30ResponseDataSubject $subject): self
    {
        $this->subject = $subject;
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
        if ($this->industries !== null) {
            $result['industries'] = $this->industries;
        }
        if ($this->industryQuaStatus !== null) {
            $result['industry_qua_status'] = $this->industryQuaStatus;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['industries'] ?? null) !== null && is_array($v)) {
            $obj->industries = array_map(fn ($vv) => \Oceanengine\Models\LocalQualificationGetV30ResponseDataIndustriesInner::fromArray($vv), $v);
        }
        if (($v = $data['industry_qua_status'] ?? null) !== null) {
            $obj->industryQuaStatus = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null) {
            $obj->rejectReason = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['subject'] ?? null) !== null && is_array($v)) {
            $obj->subject = \Oceanengine\Models\LocalQualificationGetV30ResponseDataSubject::fromArray($v);
        }
        return $obj;
    }
}
