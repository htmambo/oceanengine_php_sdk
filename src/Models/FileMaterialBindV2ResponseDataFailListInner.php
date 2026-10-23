<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileMaterialBindV2ResponseDataFailListInner implements \JsonSerializable
{
    /**
     * 推送失败的图集id
     * @var int
     */
    protected ?int $carouselId = null;

    /**
     * 推送失败原因
     * @var string
     */
    protected ?string $failReason = null;

    /**
     * 推送失败的图片id
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * 目标推送广告主id
     * @var int
     */
    protected ?int $targetAdvertiserId = null;

    /**
     * 推送失败的视频id
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 推送失败的图集id
     * @return int
     */
    public function getCarouselId(): ?int
    {
        return $this->carouselId;
    }

    /**
     * 推送失败的图集id
     * @param int $carouselId
     * @return self
     */
    public function setCarouselId(?int $carouselId): self
    {
        $this->carouselId = $carouselId;
        return $this;
    }

    /**
     * 推送失败原因
     * @return string
     */
    public function getFailReason(): ?string
    {
        return $this->failReason;
    }

    /**
     * 推送失败原因
     * @param string $failReason
     * @return self
     */
    public function setFailReason(?string $failReason): self
    {
        $this->failReason = $failReason;
        return $this;
    }

    /**
     * 推送失败的图片id
     * @return string
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    /**
     * 推送失败的图片id
     * @param string $imageId
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * 目标推送广告主id
     * @return int
     */
    public function getTargetAdvertiserId(): ?int
    {
        return $this->targetAdvertiserId;
    }

    /**
     * 目标推送广告主id
     * @param int $targetAdvertiserId
     * @return self
     */
    public function setTargetAdvertiserId(?int $targetAdvertiserId): self
    {
        $this->targetAdvertiserId = $targetAdvertiserId;
        return $this;
    }

    /**
     * 推送失败的视频id
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 推送失败的视频id
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
        if ($this->carouselId !== null) {
            $result['carousel_id'] = $this->carouselId;
        }
        if ($this->failReason !== null) {
            $result['fail_reason'] = $this->failReason;
        }
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
        if ($this->targetAdvertiserId !== null) {
            $result['target_advertiser_id'] = $this->targetAdvertiserId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['carousel_id'] ?? null) !== null) {
            $obj->carouselId = (int) $v;
        }
        if (($v = $data['fail_reason'] ?? null) !== null) {
            $obj->failReason = (string) $v;
        }
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        if (($v = $data['target_advertiser_id'] ?? null) !== null) {
            $obj->targetAdvertiserId = (int) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
