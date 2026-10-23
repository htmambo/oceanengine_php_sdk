<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAwemeListV30ResponseDataAwemeUserInfoListInner implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * @var \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListAppName
     */
    protected ?string $appName = null;

    /**
     * @var \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListAuthStatus
     */
    protected ?string $authStatus = null;

    /**
     * @var \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListAuthType
     */
    protected ?string $authType = null;

    /**
     * 抖音号ID
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 抖音号名称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * 绑定时间
     * @var string
     */
    protected ?string $bindTime = null;

    /**
     * 剩余有效天数
     * @var int
     */
    protected ?int $leftValidDays = null;

    /**
     * @var \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListOperatePlatform
     */
    protected ?string $operatePlatform = null;

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
     * 抖音号
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 抖音号
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListAppName
     */
    public function getAppName(): ?string
    {
        return $this->appName;
    }

    /**
     * @param \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListAppName $appName
     * @return self
     */
    public function setAppName(?string $appName): self
    {
        $this->appName = $appName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListAuthStatus
     */
    public function getAuthStatus(): ?string
    {
        return $this->authStatus;
    }

    /**
     * @param \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListAuthStatus $authStatus
     * @return self
     */
    public function setAuthStatus(?string $authStatus): self
    {
        $this->authStatus = $authStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListAuthType
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListAuthType $authType
     * @return self
     */
    public function setAuthType(?string $authType): self
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * 抖音号ID
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号ID
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 抖音号名称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音号名称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * 绑定时间
     * @return string
     */
    public function getBindTime(): ?string
    {
        return $this->bindTime;
    }

    /**
     * 绑定时间
     * @param string $bindTime
     * @return self
     */
    public function setBindTime(?string $bindTime): self
    {
        $this->bindTime = $bindTime;
        return $this;
    }

    /**
     * 剩余有效天数
     * @return int
     */
    public function getLeftValidDays(): ?int
    {
        return $this->leftValidDays;
    }

    /**
     * 剩余有效天数
     * @param int $leftValidDays
     * @return self
     */
    public function setLeftValidDays(?int $leftValidDays): self
    {
        $this->leftValidDays = $leftValidDays;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListOperatePlatform
     */
    public function getOperatePlatform(): ?string
    {
        return $this->operatePlatform;
    }

    /**
     * @param \Oceanengine\Models\BrandAwemeListV30DataAwemeUserInfoListOperatePlatform $operatePlatform
     * @return self
     */
    public function setOperatePlatform(?string $operatePlatform): self
    {
        $this->operatePlatform = $operatePlatform;
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
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->appName !== null) {
            $result['app_name'] = $this->appName;
        }
        if ($this->authStatus !== null) {
            $result['auth_status'] = $this->authStatus;
        }
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->bindTime !== null) {
            $result['bind_time'] = $this->bindTime;
        }
        if ($this->leftValidDays !== null) {
            $result['left_valid_days'] = $this->leftValidDays;
        }
        if ($this->operatePlatform !== null) {
            $result['operate_platform'] = $this->operatePlatform;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['app_name'] ?? null) !== null) {
            $obj->appName = (string) $v;
        }
        if (($v = $data['auth_status'] ?? null) !== null) {
            $obj->authStatus = (string) $v;
        }
        if (($v = $data['auth_type'] ?? null) !== null) {
            $obj->authType = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['bind_time'] ?? null) !== null) {
            $obj->bindTime = (string) $v;
        }
        if (($v = $data['left_valid_days'] ?? null) !== null) {
            $obj->leftValidDays = (int) $v;
        }
        if (($v = $data['operate_platform'] ?? null) !== null) {
            $obj->operatePlatform = (string) $v;
        }
        return $obj;
    }
}
