<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoDeleteV2Request implements \JsonSerializable
{
    /**
     * 素材归属的广告主
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 待删除的素材ID列表，长度范围：1 ~ 100 注意：video_ids和material_ids至少填一个
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * 待删除的视频ID列表，长度范围：1 ~ 100
     * @var string[]
     */
    protected ?array $videoIds = null;

    /**
     * 素材归属的广告主
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 素材归属的广告主
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 待删除的素材ID列表，长度范围：1 ~ 100 注意：video_ids和material_ids至少填一个
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 待删除的素材ID列表，长度范围：1 ~ 100 注意：video_ids和material_ids至少填一个
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * 待删除的视频ID列表，长度范围：1 ~ 100
     * @return string[]
     */
    public function getVideoIds(): ?array
    {
        return $this->videoIds;
    }

    /**
     * 待删除的视频ID列表，长度范围：1 ~ 100
     * @param string[] $videoIds
     * @return self
     */
    public function setVideoIds(?array $videoIds): self
    {
        $this->videoIds = $videoIds;
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
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->videoIds !== null) {
            $result['video_ids'] = $this->videoIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['video_ids'] ?? null) !== null && is_array($v)) {
            $obj->videoIds = $v;
        }
        return $obj;
    }
}
