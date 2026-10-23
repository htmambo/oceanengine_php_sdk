<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerTrackUrlCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 资产ID
     * @var int
     */
    protected ?int $assetsId = null;

    /**
     * 应用下载链接
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * 监测链接组信息，IOS和安卓应用可绑定多组监测链接
     * @var \Oceanengine\Models\EventManagerTrackUrlCreateV2RequestTrackUrlGroupsInner[]
     */
    protected ?array $trackUrlGroups = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 资产ID
     * @return int
     */
    public function getAssetsId(): ?int
    {
        return $this->assetsId;
    }

    /**
     * 资产ID
     * @param int $assetsId
     * @return self
     */
    public function setAssetsId(?int $assetsId): self
    {
        $this->assetsId = $assetsId;
        return $this;
    }

    /**
     * 应用下载链接
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 应用下载链接
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * 监测链接组信息，IOS和安卓应用可绑定多组监测链接
     * @return \Oceanengine\Models\EventManagerTrackUrlCreateV2RequestTrackUrlGroupsInner[]
     */
    public function getTrackUrlGroups(): ?array
    {
        return $this->trackUrlGroups;
    }

    /**
     * 监测链接组信息，IOS和安卓应用可绑定多组监测链接
     * @param \Oceanengine\Models\EventManagerTrackUrlCreateV2RequestTrackUrlGroupsInner[] $trackUrlGroups
     * @return self
     */
    public function setTrackUrlGroups(?array $trackUrlGroups): self
    {
        $this->trackUrlGroups = $trackUrlGroups;
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
        if ($this->assetsId !== null) {
            $result['assets_id'] = $this->assetsId;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->trackUrlGroups !== null) {
            $result['track_url_groups'] = $this->trackUrlGroups;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['assets_id'] ?? null) !== null) {
            $obj->assetsId = (int) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['track_url_groups'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlGroups = array_map(fn ($vv) => \Oceanengine\Models\EventManagerTrackUrlCreateV2RequestTrackUrlGroupsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
