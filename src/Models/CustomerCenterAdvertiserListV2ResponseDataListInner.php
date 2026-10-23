<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CustomerCenterAdvertiserListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $accountId = null;

    /**
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * @var string
     */
    protected ?string $accountType = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $advertiserName = null;

    /**
     * @var string
     */
    protected ?string $advertiserType = null;

    /**
     * @var string
     */
    protected ?string $eDouyinId = null;

    /**
     * @var string
     */
    protected ?string $eDouyinName = null;

    /**
     * @return string
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return self
     */
    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvertiserName(): ?string
    {
        return $this->advertiserName;
    }

    /**
     * @param string $advertiserName
     * @return self
     */
    public function setAdvertiserName(?string $advertiserName): self
    {
        $this->advertiserName = $advertiserName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvertiserType(): ?string
    {
        return $this->advertiserType;
    }

    /**
     * @param string $advertiserType
     * @return self
     */
    public function setAdvertiserType(?string $advertiserType): self
    {
        $this->advertiserType = $advertiserType;
        return $this;
    }

    /**
     * @return string
     */
    public function getEDouyinId(): ?string
    {
        return $this->eDouyinId;
    }

    /**
     * @param string $eDouyinId
     * @return self
     */
    public function setEDouyinId(?string $eDouyinId): self
    {
        $this->eDouyinId = $eDouyinId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEDouyinName(): ?string
    {
        return $this->eDouyinName;
    }

    /**
     * @param string $eDouyinName
     * @return self
     */
    public function setEDouyinName(?string $eDouyinName): self
    {
        $this->eDouyinName = $eDouyinName;
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
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->advertiserName !== null) {
            $result['advertiser_name'] = $this->advertiserName;
        }
        if ($this->advertiserType !== null) {
            $result['advertiser_type'] = $this->advertiserType;
        }
        if ($this->eDouyinId !== null) {
            $result['e_douyin_id'] = $this->eDouyinId;
        }
        if ($this->eDouyinName !== null) {
            $result['e_douyin_name'] = $this->eDouyinName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (string) $v;
        }
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
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
        if (($v = $data['advertiser_type'] ?? null) !== null) {
            $obj->advertiserType = (string) $v;
        }
        if (($v = $data['e_douyin_id'] ?? null) !== null) {
            $obj->eDouyinId = (string) $v;
        }
        if (($v = $data['e_douyin_name'] ?? null) !== null) {
            $obj->eDouyinName = (string) $v;
        }
        return $obj;
    }
}
