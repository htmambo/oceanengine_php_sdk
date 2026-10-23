<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserAvatarGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserAvatarGetV2ResponseDataAvatarInfo
     */
    protected ?\Oceanengine\Models\AdvertiserAvatarGetV2ResponseDataAvatarInfo $avatarInfo = null;

    /**
     * @var string
     */
    protected ?string $avatarReason = null;

    /**
     * @var \Oceanengine\Models\AdvertiserAvatarGetV2DataAvatarStatus
     */
    protected ?string $avatarStatus = null;

    /**
     * @var string
     */
    protected ?string $sourceInfo = null;

    /**
     * @var string
     */
    protected ?string $sourceReason = null;

    /**
     * @var \Oceanengine\Models\AdvertiserAvatarGetV2DataSourceStatus
     */
    protected ?string $sourceStatus = null;

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
     * @return \Oceanengine\Models\AdvertiserAvatarGetV2ResponseDataAvatarInfo
     */
    public function getAvatarInfo(): ?\Oceanengine\Models\AdvertiserAvatarGetV2ResponseDataAvatarInfo
    {
        return $this->avatarInfo;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserAvatarGetV2ResponseDataAvatarInfo $avatarInfo
     * @return self
     */
    public function setAvatarInfo(?\Oceanengine\Models\AdvertiserAvatarGetV2ResponseDataAvatarInfo $avatarInfo): self
    {
        $this->avatarInfo = $avatarInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvatarReason(): ?string
    {
        return $this->avatarReason;
    }

    /**
     * @param string $avatarReason
     * @return self
     */
    public function setAvatarReason(?string $avatarReason): self
    {
        $this->avatarReason = $avatarReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserAvatarGetV2DataAvatarStatus
     */
    public function getAvatarStatus(): ?string
    {
        return $this->avatarStatus;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserAvatarGetV2DataAvatarStatus $avatarStatus
     * @return self
     */
    public function setAvatarStatus(?string $avatarStatus): self
    {
        $this->avatarStatus = $avatarStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceInfo(): ?string
    {
        return $this->sourceInfo;
    }

    /**
     * @param string $sourceInfo
     * @return self
     */
    public function setSourceInfo(?string $sourceInfo): self
    {
        $this->sourceInfo = $sourceInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceReason(): ?string
    {
        return $this->sourceReason;
    }

    /**
     * @param string $sourceReason
     * @return self
     */
    public function setSourceReason(?string $sourceReason): self
    {
        $this->sourceReason = $sourceReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserAvatarGetV2DataSourceStatus
     */
    public function getSourceStatus(): ?string
    {
        return $this->sourceStatus;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserAvatarGetV2DataSourceStatus $sourceStatus
     * @return self
     */
    public function setSourceStatus(?string $sourceStatus): self
    {
        $this->sourceStatus = $sourceStatus;
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
        if ($this->avatarInfo !== null) {
            $result['avatar_info'] = $this->avatarInfo;
        }
        if ($this->avatarReason !== null) {
            $result['avatar_reason'] = $this->avatarReason;
        }
        if ($this->avatarStatus !== null) {
            $result['avatar_status'] = $this->avatarStatus;
        }
        if ($this->sourceInfo !== null) {
            $result['source_info'] = $this->sourceInfo;
        }
        if ($this->sourceReason !== null) {
            $result['source_reason'] = $this->sourceReason;
        }
        if ($this->sourceStatus !== null) {
            $result['source_status'] = $this->sourceStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['avatar_info'] ?? null) !== null && is_array($v)) {
            $obj->avatarInfo = \Oceanengine\Models\AdvertiserAvatarGetV2ResponseDataAvatarInfo::fromArray($v);
        }
        if (($v = $data['avatar_reason'] ?? null) !== null) {
            $obj->avatarReason = (string) $v;
        }
        if (($v = $data['avatar_status'] ?? null) !== null) {
            $obj->avatarStatus = (string) $v;
        }
        if (($v = $data['source_info'] ?? null) !== null) {
            $obj->sourceInfo = (string) $v;
        }
        if (($v = $data['source_reason'] ?? null) !== null) {
            $obj->sourceReason = (string) $v;
        }
        if (($v = $data['source_status'] ?? null) !== null) {
            $obj->sourceStatus = (string) $v;
        }
        return $obj;
    }
}
