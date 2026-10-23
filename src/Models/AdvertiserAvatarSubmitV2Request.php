<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserAvatarSubmitV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * @var string
     */
    protected ?string $sourceInfo = null;

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
     * @return string
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->imageId = $imageId;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
        if ($this->sourceInfo !== null) {
            $result['source_info'] = $this->sourceInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        if (($v = $data['source_info'] ?? null) !== null) {
            $obj->sourceInfo = (string) $v;
        }
        return $obj;
    }
}
