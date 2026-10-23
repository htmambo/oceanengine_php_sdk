<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserVerifyInfoGetV30ResponseDataRecordsInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 状态变更时间
     * @var string
     */
    protected ?string $authTime = null;

    /**
     * @var \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsCheckType
     */
    protected ?string $checkType = null;

    /**
     * 有效期截止时间
     * @var string
     */
    protected ?string $expireTime = null;

    /**
     * @var \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsPlatform
     */
    protected ?string $platform = null;

    /**
     * 资质编号
     * @var string
     */
    protected ?string $qualificationSerialNo = null;

    /**
     * @var \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsVerifyType
     */
    protected ?string $verifyType = null;

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
     * 状态变更时间
     * @return string
     */
    public function getAuthTime(): ?string
    {
        return $this->authTime;
    }

    /**
     * 状态变更时间
     * @param string $authTime
     * @return self
     */
    public function setAuthTime(?string $authTime): self
    {
        $this->authTime = $authTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsCheckType
     */
    public function getCheckType(): ?string
    {
        return $this->checkType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsCheckType $checkType
     * @return self
     */
    public function setCheckType(?string $checkType): self
    {
        $this->checkType = $checkType;
        return $this;
    }

    /**
     * 有效期截止时间
     * @return string
     */
    public function getExpireTime(): ?string
    {
        return $this->expireTime;
    }

    /**
     * 有效期截止时间
     * @param string $expireTime
     * @return self
     */
    public function setExpireTime(?string $expireTime): self
    {
        $this->expireTime = $expireTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsPlatform
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsPlatform $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * 资质编号
     * @return string
     */
    public function getQualificationSerialNo(): ?string
    {
        return $this->qualificationSerialNo;
    }

    /**
     * 资质编号
     * @param string $qualificationSerialNo
     * @return self
     */
    public function setQualificationSerialNo(?string $qualificationSerialNo): self
    {
        $this->qualificationSerialNo = $qualificationSerialNo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsVerifyType
     */
    public function getVerifyType(): ?string
    {
        return $this->verifyType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserVerifyInfoGetV30DataRecordsVerifyType $verifyType
     * @return self
     */
    public function setVerifyType(?string $verifyType): self
    {
        $this->verifyType = $verifyType;
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
        if ($this->authTime !== null) {
            $result['auth_time'] = $this->authTime;
        }
        if ($this->checkType !== null) {
            $result['check_type'] = $this->checkType;
        }
        if ($this->expireTime !== null) {
            $result['expire_time'] = $this->expireTime;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->qualificationSerialNo !== null) {
            $result['qualification_serial_no'] = $this->qualificationSerialNo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->verifyType !== null) {
            $result['verify_type'] = $this->verifyType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['auth_time'] ?? null) !== null) {
            $obj->authTime = (string) $v;
        }
        if (($v = $data['check_type'] ?? null) !== null) {
            $obj->checkType = (string) $v;
        }
        if (($v = $data['expire_time'] ?? null) !== null) {
            $obj->expireTime = (string) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['qualification_serial_no'] ?? null) !== null) {
            $obj->qualificationSerialNo = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['verify_type'] ?? null) !== null) {
            $obj->verifyType = (string) $v;
        }
        return $obj;
    }
}
