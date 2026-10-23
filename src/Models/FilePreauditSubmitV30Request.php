<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FilePreauditSubmitV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\FilePreauditSubmitV30MaterialChannel
     */
    protected ?string $materialChannel = null;

    /**
     * @var \Oceanengine\Models\FilePreauditSubmitV30MaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var string
     */
    protected ?string $videoUrl = null;

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
     * @return \Oceanengine\Models\FilePreauditSubmitV30MaterialChannel
     */
    public function getMaterialChannel(): ?string
    {
        return $this->materialChannel;
    }

    /**
     * @param \Oceanengine\Models\FilePreauditSubmitV30MaterialChannel $materialChannel
     * @return self
     */
    public function setMaterialChannel(?string $materialChannel): self
    {
        $this->materialChannel = $materialChannel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePreauditSubmitV30MaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\FilePreauditSubmitV30MaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
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
        if ($this->materialChannel !== null) {
            $result['material_channel'] = $this->materialChannel;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['material_channel'] ?? null) !== null) {
            $obj->materialChannel = (string) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
