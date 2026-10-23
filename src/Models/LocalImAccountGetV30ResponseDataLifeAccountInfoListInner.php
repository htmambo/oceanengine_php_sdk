<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImAccountGetV30ResponseDataLifeAccountInfoListInner implements \JsonSerializable
{
    /**
     * 账户名称
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * @var \Oceanengine\Models\LocalImAccountGetV30DataLifeAccountInfoListAccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInnerAdvertiserInfo
     */
    protected ?\Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInnerAdvertiserInfo $advertiserInfo = null;

    /**
     * 生服区域/门店账户ID
     * @var int
     */
    protected ?int $lifeAccountId = null;

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
     * @return \Oceanengine\Models\LocalImAccountGetV30DataLifeAccountInfoListAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\LocalImAccountGetV30DataLifeAccountInfoListAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInnerAdvertiserInfo
     */
    public function getAdvertiserInfo(): ?\Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInnerAdvertiserInfo
    {
        return $this->advertiserInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInnerAdvertiserInfo $advertiserInfo
     * @return self
     */
    public function setAdvertiserInfo(?\Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInnerAdvertiserInfo $advertiserInfo): self
    {
        $this->advertiserInfo = $advertiserInfo;
        return $this;
    }

    /**
     * 生服区域/门店账户ID
     * @return int
     */
    public function getLifeAccountId(): ?int
    {
        return $this->lifeAccountId;
    }

    /**
     * 生服区域/门店账户ID
     * @param int $lifeAccountId
     * @return self
     */
    public function setLifeAccountId(?int $lifeAccountId): self
    {
        $this->lifeAccountId = $lifeAccountId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountName !== null) {
            $result['account_name'] = $this->accountName;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->advertiserInfo !== null) {
            $result['advertiser_info'] = $this->advertiserInfo;
        }
        if ($this->lifeAccountId !== null) {
            $result['life_account_id'] = $this->lifeAccountId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['advertiser_info'] ?? null) !== null && is_array($v)) {
            $obj->advertiserInfo = \Oceanengine\Models\LocalImAccountGetV30ResponseDataLifeAccountInfoListInnerAdvertiserInfo::fromArray($v);
        }
        if (($v = $data['life_account_id'] ?? null) !== null) {
            $obj->lifeAccountId = (int) $v;
        }
        return $obj;
    }
}
