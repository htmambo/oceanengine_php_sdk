<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMaterialPushV30ResponseDataSuccessResultsInner implements \JsonSerializable
{
    /**
     * 推送成功的广告主
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * 素材id
     * @var string
     */
    protected ?string $materialId = null;

    /**
     * 推送成功的视频id
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 推送成功的广告主
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 推送成功的广告主
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * 素材id
     * @return string
     */
    public function getMaterialId(): ?string
    {
        return $this->materialId;
    }

    /**
     * 素材id
     * @param string $materialId
     * @return self
     */
    public function setMaterialId(?string $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 推送成功的视频id
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 推送成功的视频id
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
