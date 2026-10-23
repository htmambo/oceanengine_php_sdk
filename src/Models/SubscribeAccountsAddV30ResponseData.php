<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SubscribeAccountsAddV30ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $failedAdvertiserIds = null;

    /**
     * @var string
     */
    protected ?string $failedReason = null;

    /**
     * @return int[]
     */
    public function getFailedAdvertiserIds(): ?array
    {
        return $this->failedAdvertiserIds;
    }

    /**
     * @param int[] $failedAdvertiserIds
     * @return self
     */
    public function setFailedAdvertiserIds(?array $failedAdvertiserIds): self
    {
        $this->failedAdvertiserIds = $failedAdvertiserIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getFailedReason(): ?string
    {
        return $this->failedReason;
    }

    /**
     * @param string $failedReason
     * @return self
     */
    public function setFailedReason(?string $failedReason): self
    {
        $this->failedReason = $failedReason;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failedAdvertiserIds !== null) {
            $result['failed_advertiser_ids'] = $this->failedAdvertiserIds;
        }
        if ($this->failedReason !== null) {
            $result['failed_reason'] = $this->failedReason;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['failed_advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->failedAdvertiserIds = $v;
        }
        if (($v = $data['failed_reason'] ?? null) !== null) {
            $obj->failedReason = (string) $v;
        }
        return $obj;
    }
}
