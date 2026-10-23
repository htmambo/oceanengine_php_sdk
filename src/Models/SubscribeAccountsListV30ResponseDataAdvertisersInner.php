<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SubscribeAccountsListV30ResponseDataAdvertisersInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SubscribeAccountsListV30DataAdvertisersAccountType
     */
    protected ?string $accountType = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $coreUserId = null;

    /**
     * @var string
     */
    protected ?string $createdTime = null;

    /**
     * @var string
     */
    protected ?string $event = null;

    /**
     * @var string
     */
    protected ?string $reason = null;

    /**
     * @var \Oceanengine\Models\SubscribeAccountsListV30DataAdvertisersSource
     */
    protected ?string $source = null;

    /**
     * @var \Oceanengine\Models\SubscribeAccountsListV30DataAdvertisersStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $updatedTime = null;

    /**
     * @return \Oceanengine\Models\SubscribeAccountsListV30DataAdvertisersAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\SubscribeAccountsListV30DataAdvertisersAccountType $accountType
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
     * @return string
     */
    public function getCreatedTime(): ?string
    {
        return $this->createdTime;
    }

    /**
     * @param string $createdTime
     * @return self
     */
    public function setCreatedTime(?string $createdTime): self
    {
        $this->createdTime = $createdTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    /**
     * @param string $event
     * @return self
     */
    public function setEvent(?string $event): self
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SubscribeAccountsListV30DataAdvertisersSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\SubscribeAccountsListV30DataAdvertisersSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SubscribeAccountsListV30DataAdvertisersStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\SubscribeAccountsListV30DataAdvertisersStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedTime(): ?string
    {
        return $this->updatedTime;
    }

    /**
     * @param string $updatedTime
     * @return self
     */
    public function setUpdatedTime(?string $updatedTime): self
    {
        $this->updatedTime = $updatedTime;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->coreUserId !== null) {
            $result['core_user_id'] = $this->coreUserId;
        }
        if ($this->createdTime !== null) {
            $result['created_time'] = $this->createdTime;
        }
        if ($this->event !== null) {
            $result['event'] = $this->event;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->updatedTime !== null) {
            $result['updated_time'] = $this->updatedTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['core_user_id'] ?? null) !== null) {
            $obj->coreUserId = (int) $v;
        }
        if (($v = $data['created_time'] ?? null) !== null) {
            $obj->createdTime = (string) $v;
        }
        if (($v = $data['event'] ?? null) !== null) {
            $obj->event = (string) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['updated_time'] ?? null) !== null) {
            $obj->updatedTime = (string) $v;
        }
        return $obj;
    }
}
