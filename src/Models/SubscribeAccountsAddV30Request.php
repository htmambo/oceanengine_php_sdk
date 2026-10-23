<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SubscribeAccountsAddV30Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SubscribeAccountsAddV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * @var int
     */
    protected ?int $appId = null;

    /**
     * @var int
     */
    protected ?int $coreUserId = null;

    /**
     * @var \Oceanengine\Models\SubscribeAccountsAddV30SubscribePackageType
     */
    protected ?string $subscribePackageType = null;

    /**
     * @var int
     */
    protected ?int $subscribeTaskId = null;

    /**
     * @return \Oceanengine\Models\SubscribeAccountsAddV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\SubscribeAccountsAddV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppId(): ?int
    {
        return $this->appId;
    }

    /**
     * @param int $appId
     * @return self
     */
    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCoreUserId(): ?int
    {
        return $this->coreUserId;
    }

    /**
     * @param int $coreUserId
     * @return self
     */
    public function setCoreUserId(?int $coreUserId): self
    {
        $this->coreUserId = $coreUserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SubscribeAccountsAddV30SubscribePackageType
     */
    public function getSubscribePackageType(): ?string
    {
        return $this->subscribePackageType;
    }

    /**
     * @param \Oceanengine\Models\SubscribeAccountsAddV30SubscribePackageType $subscribePackageType
     * @return self
     */
    public function setSubscribePackageType(?string $subscribePackageType): self
    {
        $this->subscribePackageType = $subscribePackageType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubscribeTaskId(): ?int
    {
        return $this->subscribeTaskId;
    }

    /**
     * @param int $subscribeTaskId
     * @return self
     */
    public function setSubscribeTaskId(?int $subscribeTaskId): self
    {
        $this->subscribeTaskId = $subscribeTaskId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->coreUserId !== null) {
            $result['core_user_id'] = $this->coreUserId;
        }
        if ($this->subscribePackageType !== null) {
            $result['subscribe_package_type'] = $this->subscribePackageType;
        }
        if ($this->subscribeTaskId !== null) {
            $result['subscribe_task_id'] = $this->subscribeTaskId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (int) $v;
        }
        if (($v = $data['core_user_id'] ?? null) !== null) {
            $obj->coreUserId = (int) $v;
        }
        if (($v = $data['subscribe_package_type'] ?? null) !== null) {
            $obj->subscribePackageType = (string) $v;
        }
        if (($v = $data['subscribe_task_id'] ?? null) !== null) {
            $obj->subscribeTaskId = (int) $v;
        }
        return $obj;
    }
}
