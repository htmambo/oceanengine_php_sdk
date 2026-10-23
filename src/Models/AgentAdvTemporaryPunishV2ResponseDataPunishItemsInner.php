<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvTemporaryPunishV2ResponseDataPunishItemsInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 执行失败原因
     * @var string
     */
    protected ?string $failedReason = null;

    /**
     * 是否执行成功
     * @var bool
     */
    protected ?bool $isSucceed = null;

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
     * 执行失败原因
     * @return string
     */
    public function getFailedReason(): ?string
    {
        return $this->failedReason;
    }

    /**
     * 执行失败原因
     * @param string $failedReason
     * @return self
     */
    public function setFailedReason(?string $failedReason): self
    {
        $this->failedReason = $failedReason;
        return $this;
    }

    /**
     * 是否执行成功
     * @return bool
     */
    public function getIsSucceed(): ?bool
    {
        return $this->isSucceed;
    }

    /**
     * 是否执行成功
     * @param bool $isSucceed
     * @return self
     */
    public function setIsSucceed(?bool $isSucceed): self
    {
        $this->isSucceed = $isSucceed;
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
        if ($this->failedReason !== null) {
            $result['failed_reason'] = $this->failedReason;
        }
        if ($this->isSucceed !== null) {
            $result['is_succeed'] = $this->isSucceed;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['failed_reason'] ?? null) !== null) {
            $obj->failedReason = (string) $v;
        }
        if (($v = $data['is_succeed'] ?? null) !== null) {
            $obj->isSucceed = (bool) $v;
        }
        return $obj;
    }
}
