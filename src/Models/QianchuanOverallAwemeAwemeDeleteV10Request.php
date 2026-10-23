<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeAwemeDeleteV10Request implements \JsonSerializable
{
    /**
     * 计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 千川广告账户ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 抖音uid列表
     * @var int
     */
    protected ?int $awemeUid = null;

    /**
     * 计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 千川广告账户ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 千川广告账户ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 抖音uid列表
     * @return int
     */
    public function getAwemeUid(): ?int
    {
        return $this->awemeUid;
    }

    /**
     * 抖音uid列表
     * @param int $awemeUid
     * @return self
     */
    public function setAwemeUid(?int $awemeUid): self
    {
        $this->awemeUid = $awemeUid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->awemeUid !== null) {
            $result['aweme_uid'] = $this->awemeUid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aweme_uid'] ?? null) !== null) {
            $obj->awemeUid = (int) $v;
        }
        return $obj;
    }
}
