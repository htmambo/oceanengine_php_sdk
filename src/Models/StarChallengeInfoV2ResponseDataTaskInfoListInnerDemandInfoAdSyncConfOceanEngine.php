<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoAdSyncConfOceanEngine implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adSyncOrigin = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $autoSync = null;

    /**
     * @var int
     */
    protected ?int $douPlusUid = null;

    /**
     * @var string
     */
    protected ?string $productLink = null;

    /**
     * @var string[]
     */
    protected ?array $productPics = null;

    /**
     * @var int
     */
    protected ?int $syncDuration = null;

    /**
     * @return int
     */
    public function getAdSyncOrigin(): ?int
    {
        return $this->adSyncOrigin;
    }

    /**
     * @param int $adSyncOrigin
     * @return self
     */
    public function setAdSyncOrigin(?int $adSyncOrigin): self
    {
        $this->adSyncOrigin = $adSyncOrigin;
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
    public function getAutoSync(): ?int
    {
        return $this->autoSync;
    }

    /**
     * @param int $autoSync
     * @return self
     */
    public function setAutoSync(?int $autoSync): self
    {
        $this->autoSync = $autoSync;
        return $this;
    }

    /**
     * @return int
     */
    public function getDouPlusUid(): ?int
    {
        return $this->douPlusUid;
    }

    /**
     * @param int $douPlusUid
     * @return self
     */
    public function setDouPlusUid(?int $douPlusUid): self
    {
        $this->douPlusUid = $douPlusUid;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductLink(): ?string
    {
        return $this->productLink;
    }

    /**
     * @param string $productLink
     * @return self
     */
    public function setProductLink(?string $productLink): self
    {
        $this->productLink = $productLink;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProductPics(): ?array
    {
        return $this->productPics;
    }

    /**
     * @param string[] $productPics
     * @return self
     */
    public function setProductPics(?array $productPics): self
    {
        $this->productPics = $productPics;
        return $this;
    }

    /**
     * @return int
     */
    public function getSyncDuration(): ?int
    {
        return $this->syncDuration;
    }

    /**
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
        if ($this->productLink !== null) {
            $result['product_link'] = $this->productLink;
        }
        if ($this->productPics !== null) {
            $result['product_pics'] = $this->productPics;
        }
        if ($this->syncDuration !== null) {
            $result['sync_duration'] = $this->syncDuration;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
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
        if (($v = $data['product_link'] ?? null) !== null) {
            $obj->productLink = (string) $v;
        }
        if (($v = $data['product_pics'] ?? null) !== null && is_array($v)) {
            $obj->productPics = $v;
        }
        if (($v = $data['sync_duration'] ?? null) !== null) {
            $obj->syncDuration = (int) $v;
        }
        return $obj;
    }
}
