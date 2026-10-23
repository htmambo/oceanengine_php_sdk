<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserQualificationGetV30ResponseDataSubject implements \JsonSerializable
{
    /**
     * 详细地址
     * @var string
     */
    protected ?string $address = null;

    /**
     * 资质图片附件id
     * @var string
     */
    protected ?string $attachmentId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectCheckType
     */
    protected ?string $checkType = null;

    /**
     * 公司名称
     * @var string
     */
    protected ?string $companyName = null;

    /**
     * @var \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectCompanyType
     */
    protected ?string $companyType = null;

    /**
     * 过期时间，格式yyyy-mm-dd
     * @var string
     */
    protected ?string $effectiveDate = null;

    /**
     * 是否有有效日期
     * @var bool
     */
    protected ?bool $hasEffectiveDate = null;

    /**
     * 资质图片地址
     * @var string
     */
    protected ?string $pictureUrl = null;

    /**
     * 法人
     * @var string
     */
    protected ?string $proprietorName = null;

    /**
     * 资质编号
     * @var string
     */
    protected ?string $qualificationCode = null;

    /**
     * 资质id
     * @var int
     */
    protected ?int $qualificationId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectQualificationType
     */
    protected ?string $qualificationType = null;

    /**
     * 注册城市
     * @var string
     */
    protected ?string $registeredCityName = null;

    /**
     * 注册国家
     * @var string
     */
    protected ?string $registeredNationName = null;

    /**
     * 注册省份
     * @var string
     */
    protected ?string $registeredProvinceName = null;

    /**
     * 拒绝理由
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * @var \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectStatus
     */
    protected ?string $status = null;

    /**
     * 详细地址
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * 详细地址
     * @param string $address
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * 资质图片附件id
     * @return string
     */
    public function getAttachmentId(): ?string
    {
        return $this->attachmentId;
    }

    /**
     * 资质图片附件id
     * @param string $attachmentId
     * @return self
     */
    public function setAttachmentId(?string $attachmentId): self
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectCheckType
     */
    public function getCheckType(): ?string
    {
        return $this->checkType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectCheckType $checkType
     * @return self
     */
    public function setCheckType(?string $checkType): self
    {
        $this->checkType = $checkType;
        return $this;
    }

    /**
     * 公司名称
     * @return string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * 公司名称
     * @param string $companyName
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectCompanyType
     */
    public function getCompanyType(): ?string
    {
        return $this->companyType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectCompanyType $companyType
     * @return self
     */
    public function setCompanyType(?string $companyType): self
    {
        $this->companyType = $companyType;
        return $this;
    }

    /**
     * 过期时间，格式yyyy-mm-dd
     * @return string
     */
    public function getEffectiveDate(): ?string
    {
        return $this->effectiveDate;
    }

    /**
     * 过期时间，格式yyyy-mm-dd
     * @param string $effectiveDate
     * @return self
     */
    public function setEffectiveDate(?string $effectiveDate): self
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * 是否有有效日期
     * @return bool
     */
    public function getHasEffectiveDate(): ?bool
    {
        return $this->hasEffectiveDate;
    }

    /**
     * 是否有有效日期
     * @param bool $hasEffectiveDate
     * @return self
     */
    public function setHasEffectiveDate(?bool $hasEffectiveDate): self
    {
        $this->hasEffectiveDate = $hasEffectiveDate;
        return $this;
    }

    /**
     * 资质图片地址
     * @return string
     */
    public function getPictureUrl(): ?string
    {
        return $this->pictureUrl;
    }

    /**
     * 资质图片地址
     * @param string $pictureUrl
     * @return self
     */
    public function setPictureUrl(?string $pictureUrl): self
    {
        $this->pictureUrl = $pictureUrl;
        return $this;
    }

    /**
     * 法人
     * @return string
     */
    public function getProprietorName(): ?string
    {
        return $this->proprietorName;
    }

    /**
     * 法人
     * @param string $proprietorName
     * @return self
     */
    public function setProprietorName(?string $proprietorName): self
    {
        $this->proprietorName = $proprietorName;
        return $this;
    }

    /**
     * 资质编号
     * @return string
     */
    public function getQualificationCode(): ?string
    {
        return $this->qualificationCode;
    }

    /**
     * 资质编号
     * @param string $qualificationCode
     * @return self
     */
    public function setQualificationCode(?string $qualificationCode): self
    {
        $this->qualificationCode = $qualificationCode;
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
     * @return \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectQualificationType
     */
    public function getQualificationType(): ?string
    {
        return $this->qualificationType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectQualificationType $qualificationType
     * @return self
     */
    public function setQualificationType(?string $qualificationType): self
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * 注册城市
     * @return string
     */
    public function getRegisteredCityName(): ?string
    {
        return $this->registeredCityName;
    }

    /**
     * 注册城市
     * @param string $registeredCityName
     * @return self
     */
    public function setRegisteredCityName(?string $registeredCityName): self
    {
        $this->registeredCityName = $registeredCityName;
        return $this;
    }

    /**
     * 注册国家
     * @return string
     */
    public function getRegisteredNationName(): ?string
    {
        return $this->registeredNationName;
    }

    /**
     * 注册国家
     * @param string $registeredNationName
     * @return self
     */
    public function setRegisteredNationName(?string $registeredNationName): self
    {
        $this->registeredNationName = $registeredNationName;
        return $this;
    }

    /**
     * 注册省份
     * @return string
     */
    public function getRegisteredProvinceName(): ?string
    {
        return $this->registeredProvinceName;
    }

    /**
     * 注册省份
     * @param string $registeredProvinceName
     * @return self
     */
    public function setRegisteredProvinceName(?string $registeredProvinceName): self
    {
        $this->registeredProvinceName = $registeredProvinceName;
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
     * @return \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationGetV30DataSubjectStatus $status
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
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->attachmentId !== null) {
            $result['attachment_id'] = $this->attachmentId;
        }
        if ($this->checkType !== null) {
            $result['check_type'] = $this->checkType;
        }
        if ($this->companyName !== null) {
            $result['company_name'] = $this->companyName;
        }
        if ($this->companyType !== null) {
            $result['company_type'] = $this->companyType;
        }
        if ($this->effectiveDate !== null) {
            $result['effective_date'] = $this->effectiveDate;
        }
        if ($this->hasEffectiveDate !== null) {
            $result['has_effective_date'] = $this->hasEffectiveDate;
        }
        if ($this->pictureUrl !== null) {
            $result['picture_url'] = $this->pictureUrl;
        }
        if ($this->proprietorName !== null) {
            $result['proprietor_name'] = $this->proprietorName;
        }
        if ($this->qualificationCode !== null) {
            $result['qualification_code'] = $this->qualificationCode;
        }
        if ($this->qualificationId !== null) {
            $result['qualification_id'] = $this->qualificationId;
        }
        if ($this->qualificationType !== null) {
            $result['qualification_type'] = $this->qualificationType;
        }
        if ($this->registeredCityName !== null) {
            $result['registered_city_name'] = $this->registeredCityName;
        }
        if ($this->registeredNationName !== null) {
            $result['registered_nation_name'] = $this->registeredNationName;
        }
        if ($this->registeredProvinceName !== null) {
            $result['registered_province_name'] = $this->registeredProvinceName;
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
        if (($v = $data['address'] ?? null) !== null) {
            $obj->address = (string) $v;
        }
        if (($v = $data['attachment_id'] ?? null) !== null) {
            $obj->attachmentId = (string) $v;
        }
        if (($v = $data['check_type'] ?? null) !== null) {
            $obj->checkType = (string) $v;
        }
        if (($v = $data['company_name'] ?? null) !== null) {
            $obj->companyName = (string) $v;
        }
        if (($v = $data['company_type'] ?? null) !== null) {
            $obj->companyType = (string) $v;
        }
        if (($v = $data['effective_date'] ?? null) !== null) {
            $obj->effectiveDate = (string) $v;
        }
        if (($v = $data['has_effective_date'] ?? null) !== null) {
            $obj->hasEffectiveDate = (bool) $v;
        }
        if (($v = $data['picture_url'] ?? null) !== null) {
            $obj->pictureUrl = (string) $v;
        }
        if (($v = $data['proprietor_name'] ?? null) !== null) {
            $obj->proprietorName = (string) $v;
        }
        if (($v = $data['qualification_code'] ?? null) !== null) {
            $obj->qualificationCode = (string) $v;
        }
        if (($v = $data['qualification_id'] ?? null) !== null) {
            $obj->qualificationId = (int) $v;
        }
        if (($v = $data['qualification_type'] ?? null) !== null) {
            $obj->qualificationType = (string) $v;
        }
        if (($v = $data['registered_city_name'] ?? null) !== null) {
            $obj->registeredCityName = (string) $v;
        }
        if (($v = $data['registered_nation_name'] ?? null) !== null) {
            $obj->registeredNationName = (string) $v;
        }
        if (($v = $data['registered_province_name'] ?? null) !== null) {
            $obj->registeredProvinceName = (string) $v;
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
