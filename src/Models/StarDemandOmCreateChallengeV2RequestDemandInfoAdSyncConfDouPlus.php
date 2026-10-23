<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConfDouPlus implements \JsonSerializable
{
    /**
     * 是否推送原素材 1-推送 2-不推送
     * @var int
     */
    protected ?int $adSync = null;

    /**
     * 是否投放原生视频0否1 是
     * @var int
     */
    protected ?int $adSyncOrigin = null;

    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 是否自动投放 0-否 1-是
     * @var int
     */
    protected ?int $autoSync = null;

    /**
     * 抖音uid
     * @var int
     */
    protected ?int $douPlusUid = null;

    /**
     * 期望投放时长（单位：天） 大于0的整数，默认30天
     * @var int
     */
    protected ?int $syncDuration = null;

    /**
     * 是否推送原素材 1-推送 2-不推送
     * @return int
     */
    public function getAdSync(): ?int
    {
        return $this->adSync;
    }

    /**
     * 是否推送原素材 1-推送 2-不推送
     * @param int $adSync
     * @return self
     */
    public function setAdSync(?int $adSync): self
    {
        $this->adSync = $adSync;
        return $this;
    }

    /**
     * 是否投放原生视频0否1 是
     * @return int
     */
    public function getAdSyncOrigin(): ?int
    {
        return $this->adSyncOrigin;
    }

    /**
     * 是否投放原生视频0否1 是
     * @param int $adSyncOrigin
     * @return self
     */
    public function setAdSyncOrigin(?int $adSyncOrigin): self
    {
        $this->adSyncOrigin = $adSyncOrigin;
        return $this;
    }

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
     * 是否自动投放 0-否 1-是
     * @return int
     */
    public function getAutoSync(): ?int
    {
        return $this->autoSync;
    }

    /**
     * 是否自动投放 0-否 1-是
     * @param int $autoSync
     * @return self
     */
    public function setAutoSync(?int $autoSync): self
    {
        $this->autoSync = $autoSync;
        return $this;
    }

    /**
     * 抖音uid
     * @return int
     */
    public function getDouPlusUid(): ?int
    {
        return $this->douPlusUid;
    }

    /**
     * 抖音uid
     * @param int $douPlusUid
     * @return self
     */
    public function setDouPlusUid(?int $douPlusUid): self
    {
        $this->douPlusUid = $douPlusUid;
        return $this;
    }

    /**
     * 期望投放时长（单位：天） 大于0的整数，默认30天
     * @return int
     */
    public function getSyncDuration(): ?int
    {
        return $this->syncDuration;
    }

    /**
     * 期望投放时长（单位：天） 大于0的整数，默认30天
     * @param int $syncDuration
     * @return self
     */
    public function setSyncDuration(?int $syncDuration): self
    {
        $this->syncDuration = $syncDuration;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adSync !== null) {
            $result['ad_sync'] = $this->adSync;
        }
        if ($this->adSyncOrigin !== null) {
            $result['ad_sync_origin'] = $this->adSyncOrigin;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->autoSync !== null) {
            $result['auto_sync'] = $this->autoSync;
        }
        if ($this->douPlusUid !== null) {
            $result['dou_plus_uid'] = $this->douPlusUid;
        }
        if ($this->syncDuration !== null) {
            $result['sync_duration'] = $this->syncDuration;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_sync'] ?? null) !== null) {
            $obj->adSync = (int) $v;
        }
        if (($v = $data['ad_sync_origin'] ?? null) !== null) {
            $obj->adSyncOrigin = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['auto_sync'] ?? null) !== null) {
            $obj->autoSync = (int) $v;
        }
        if (($v = $data['dou_plus_uid'] ?? null) !== null) {
            $obj->douPlusUid = (int) $v;
        }
        if (($v = $data['sync_duration'] ?? null) !== null) {
            $obj->syncDuration = (int) $v;
        }
        return $obj;
    }
}
