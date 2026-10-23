<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileMaterialBindV2Request implements \JsonSerializable
{
    /**
     * 素材归属广告主
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 图集ID，数量限制：<=50 注意：跟video_ids必须三选一
     * @var int[]
     */
    protected ?array $carouselIds = null;

    /**
     * 图片ID，数量限制：<=50 注意：跟video_ids必须三选一
     * @var string[]
     */
    protected ?array $imageIds = null;

    /**
     * 待推送的广告主，数量限制：<=50
     * @var int[]
     */
    protected ?array $targetAdvertiserIds = null;

    /**
     * 视频ID，数量限制：<=50 注意：跟image_ids必须三选一、组织共享视频不可推送
     * @var string[]
     */
    protected ?array $videoIds = null;

    /**
     * 素材归属广告主
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 素材归属广告主
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 图集ID，数量限制：<=50 注意：跟video_ids必须三选一
     * @return int[]
     */
    public function getCarouselIds(): ?array
    {
        return $this->carouselIds;
    }

    /**
     * 图集ID，数量限制：<=50 注意：跟video_ids必须三选一
     * @param int[] $carouselIds
     * @return self
     */
    public function setCarouselIds(?array $carouselIds): self
    {
        $this->carouselIds = $carouselIds;
        return $this;
    }

    /**
     * 图片ID，数量限制：<=50 注意：跟video_ids必须三选一
     * @return string[]
     */
    public function getImageIds(): ?array
    {
        return $this->imageIds;
    }

    /**
     * 图片ID，数量限制：<=50 注意：跟video_ids必须三选一
     * @param string[] $imageIds
     * @return self
     */
    public function setImageIds(?array $imageIds): self
    {
        $this->imageIds = $imageIds;
        return $this;
    }

    /**
     * 待推送的广告主，数量限制：<=50
     * @return int[]
     */
    public function getTargetAdvertiserIds(): ?array
    {
        return $this->targetAdvertiserIds;
    }

    /**
     * 待推送的广告主，数量限制：<=50
     * @param int[] $targetAdvertiserIds
     * @return self
     */
    public function setTargetAdvertiserIds(?array $targetAdvertiserIds): self
    {
        $this->targetAdvertiserIds = $targetAdvertiserIds;
        return $this;
    }

    /**
     * 视频ID，数量限制：<=50 注意：跟image_ids必须三选一、组织共享视频不可推送
     * @return string[]
     */
    public function getVideoIds(): ?array
    {
        return $this->videoIds;
    }

    /**
     * 视频ID，数量限制：<=50 注意：跟image_ids必须三选一、组织共享视频不可推送
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
        if ($this->carouselIds !== null) {
            $result['carousel_ids'] = $this->carouselIds;
        }
        if ($this->imageIds !== null) {
            $result['image_ids'] = $this->imageIds;
        }
        if ($this->targetAdvertiserIds !== null) {
            $result['target_advertiser_ids'] = $this->targetAdvertiserIds;
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
        if (($v = $data['carousel_ids'] ?? null) !== null && is_array($v)) {
            $obj->carouselIds = $v;
        }
        if (($v = $data['image_ids'] ?? null) !== null && is_array($v)) {
            $obj->imageIds = $v;
        }
        if (($v = $data['target_advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->targetAdvertiserIds = $v;
        }
        if (($v = $data['video_ids'] ?? null) !== null && is_array($v)) {
            $obj->videoIds = $v;
        }
        return $obj;
    }
}
