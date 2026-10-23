<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerTrackUrlUpdateV2Request implements \JsonSerializable
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
    protected ?int $assetId = null;

    /**
     * 应用下载链接，应用必填
     * @var string
     */
    protected ?string $downloadUrl = null;

    /**
     * @var \Oceanengine\Models\EventManagerTrackUrlUpdateV2RequestTrackUrlGroup
     */
    protected ?\Oceanengine\Models\EventManagerTrackUrlUpdateV2RequestTrackUrlGroup $trackUrlGroup = null;

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
    public function getAssetId(): ?int
    {
        return $this->assetId;
    }

    /**
     * 资产ID
     * @param int $assetId
     * @return self
     */
    public function setAssetId(?int $assetId): self
    {
        $this->assetId = $assetId;
        return $this;
    }

    /**
     * 应用下载链接，应用必填
     * @return string
     */
    public function getDownloadUrl(): ?string
    {
        return $this->downloadUrl;
    }

    /**
     * 应用下载链接，应用必填
     * @param string $downloadUrl
     * @return self
     */
    public function setDownloadUrl(?string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EventManagerTrackUrlUpdateV2RequestTrackUrlGroup
     */
    public function getTrackUrlGroup(): ?\Oceanengine\Models\EventManagerTrackUrlUpdateV2RequestTrackUrlGroup
    {
        return $this->trackUrlGroup;
    }

    /**
     * @param \Oceanengine\Models\EventManagerTrackUrlUpdateV2RequestTrackUrlGroup $trackUrlGroup
     * @return self
     */
    public function setTrackUrlGroup(?\Oceanengine\Models\EventManagerTrackUrlUpdateV2RequestTrackUrlGroup $trackUrlGroup): self
    {
        $this->trackUrlGroup = $trackUrlGroup;
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
        if ($this->assetId !== null) {
            $result['asset_id'] = $this->assetId;
        }
        if ($this->downloadUrl !== null) {
            $result['download_url'] = $this->downloadUrl;
        }
        if ($this->trackUrlGroup !== null) {
            $result['track_url_group'] = $this->trackUrlGroup;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['asset_id'] ?? null) !== null) {
            $obj->assetId = (int) $v;
        }
        if (($v = $data['download_url'] ?? null) !== null) {
            $obj->downloadUrl = (string) $v;
        }
        if (($v = $data['track_url_group'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlGroup = \Oceanengine\Models\EventManagerTrackUrlUpdateV2RequestTrackUrlGroup::fromArray($v);
        }
        return $obj;
    }
}
