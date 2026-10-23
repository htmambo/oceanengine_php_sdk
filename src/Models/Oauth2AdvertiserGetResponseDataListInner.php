<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class Oauth2AdvertiserGetResponseDataListInner implements \JsonSerializable
{
    /**
     * 账户ID
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 账户名称
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * 账户角色（废弃）
     * @var string
     */
    protected ?string $accountRole = null;

    /**
     * 账户ID，仅当account_role=PLATFORM_ROLE_AWEME抖音号时有效，即为aweme_sec_uid，可用于Dou+接口调用
     * @var string
     */
    protected ?string $accountStringId = null;

    /**
     * @var \Oceanengine\Models\Oauth2AdvertiserGetDataListAccountType
     */
    protected ?string $accountType = null;

    /**
     * 账户ID（废弃）
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 账户名称（废弃）
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * 广告主角色（废弃）
     * @var int
     */
    protected ?int $advertiserRole = null;

    /**
     * 代理商账户下授权公司范围，仅当授权页面授权代理商账户时有效 • company_list为空则代表当前代理商账户下所有adv均可访问 • company_list不为空则代表仅能访问列表内部分客户下业务账户
     * @var \Oceanengine\Models\Oauth2AdvertiserGetResponseDataListInnerCompanyListInner[]
     */
    protected ?array $companyList = null;

    /**
     * 授权有效性 注意：false则表示账号与账户已无管理关系，无权限继续操作使用，需在对应账户所属业务平台重新调整管理关系
     * @var bool
     */
    protected ?bool $isValid = null;

    /**
     * 账户ID
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户ID
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户名称
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * 账户名称
     * @param string $accountName
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * 账户角色（废弃）
     * @return string
     */
    public function getAccountRole(): ?string
    {
        return $this->accountRole;
    }

    /**
     * 账户角色（废弃）
     * @param string $accountRole
     * @return self
     */
    public function setAccountRole(?string $accountRole): self
    {
        $this->accountRole = $accountRole;
        return $this;
    }

    /**
     * 账户ID，仅当account_role=PLATFORM_ROLE_AWEME抖音号时有效，即为aweme_sec_uid，可用于Dou+接口调用
     * @return string
     */
    public function getAccountStringId(): ?string
    {
        return $this->accountStringId;
    }

    /**
     * 账户ID，仅当account_role=PLATFORM_ROLE_AWEME抖音号时有效，即为aweme_sec_uid，可用于Dou+接口调用
     * @param string $accountStringId
     * @return self
     */
    public function setAccountStringId(?string $accountStringId): self
    {
        $this->accountStringId = $accountStringId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\Oauth2AdvertiserGetDataListAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\Oauth2AdvertiserGetDataListAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 账户ID（废弃）
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 账户ID（废弃）
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 账户名称（废弃）
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * 账户名称（废弃）
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * 广告主角色（废弃）
     * @return int
     */
    public function getAdvertiserRole(): ?int
    {
        return $this->advertiserRole;
    }

    /**
     * 广告主角色（废弃）
     * @param int $advertiserRole
     * @return self
     */
    public function setAdvertiserRole(?int $advertiserRole): self
    {
        $this->advertiserRole = $advertiserRole;
        return $this;
    }

    /**
     * 代理商账户下授权公司范围，仅当授权页面授权代理商账户时有效 • company_list为空则代表当前代理商账户下所有adv均可访问 • company_list不为空则代表仅能访问列表内部分客户下业务账户
     * @return \Oceanengine\Models\Oauth2AdvertiserGetResponseDataListInnerCompanyListInner[]
     */
    public function getCompanyList(): ?array
    {
        return $this->companyList;
    }

    /**
     * 代理商账户下授权公司范围，仅当授权页面授权代理商账户时有效 • company_list为空则代表当前代理商账户下所有adv均可访问 • company_list不为空则代表仅能访问列表内部分客户下业务账户
     * @param \Oceanengine\Models\Oauth2AdvertiserGetResponseDataListInnerCompanyListInner[] $companyList
     * @return self
     */
    public function setCompanyList(?array $companyList): self
    {
        $this->companyList = $companyList;
        return $this;
    }

    /**
     * 授权有效性 注意：false则表示账号与账户已无管理关系，无权限继续操作使用，需在对应账户所属业务平台重新调整管理关系
     * @return bool
     */
    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }

    /**
     * 授权有效性 注意：false则表示账号与账户已无管理关系，无权限继续操作使用，需在对应账户所属业务平台重新调整管理关系
     * @param bool $isValid
     * @return self
     */
    public function setIsValid(?bool $isValid): self
    {
        $this->isValid = $isValid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountName !== null) {
            $result['account_name'] = $this->accountName;
        }
        if ($this->accountRole !== null) {
            $result['account_role'] = $this->accountRole;
        }
        if ($this->accountStringId !== null) {
            $result['account_string_id'] = $this->accountStringId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->advertiserRole !== null) {
            $result['advertiser_role'] = $this->advertiserRole;
        }
        if ($this->companyList !== null) {
            $result['company_list'] = $this->companyList;
        }
        if ($this->isValid !== null) {
            $result['is_valid'] = $this->isValid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
        }
        if (($v = $data['account_role'] ?? null) !== null) {
            $obj->accountRole = (string) $v;
        }
        if (($v = $data['account_string_id'] ?? null) !== null) {
            $obj->accountStringId = (string) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['advertiser_name'] ?? null) !== null) {
            $obj->advertiserName = (string) $v;
        }
        if (($v = $data['advertiser_role'] ?? null) !== null) {
            $obj->advertiserRole = (int) $v;
        }
        if (($v = $data['company_list'] ?? null) !== null && is_array($v)) {
            $obj->companyList = array_map(fn ($vv) => \Oceanengine\Models\Oauth2AdvertiserGetResponseDataListInnerCompanyListInner::fromArray($vv), $v);
        }
        if (($v = $data['is_valid'] ?? null) !== null) {
            $obj->isValid = (bool) $v;
        }
        return $obj;
    }
}
