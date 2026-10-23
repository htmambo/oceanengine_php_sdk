<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdMaterialAddV10RequestProgrammaticCreativeMediaListVideoMaterialInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $awemeItemId = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10ProgrammaticCreativeMediaListVideoMaterialImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10ProgrammaticCreativeMediaListVideoMaterialStarTraffic
     */
    protected ?string $starTraffic = null;

    /**
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return int
     */
    public function getAwemeItemId(): ?int
    {
        return $this->awemeItemId;
    }

    /**
     * @param int $awemeItemId
     * @return self
     */
    public function setAwemeItemId(?int $awemeItemId): self
    {
        $this->awemeItemId = $awemeItemId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10ProgrammaticCreativeMediaListVideoMaterialImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10ProgrammaticCreativeMediaListVideoMaterialImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10ProgrammaticCreativeMediaListVideoMaterialStarTraffic
     */
    public function getStarTraffic(): ?string
    {
        return $this->starTraffic;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialAddV10ProgrammaticCreativeMediaListVideoMaterialStarTraffic $starTraffic
     * @return self
     */
    public function setStarTraffic(?string $starTraffic): self
    {
        $this->starTraffic = $starTraffic;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoCoverId(): ?string
    {
        return $this->videoCoverId;
    }

    /**
     * @param string $videoCoverId
     * @return self
     */
    public function setVideoCoverId(?string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
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
        if ($this->awemeItemId !== null) {
            $result['aweme_item_id'] = $this->awemeItemId;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->starTraffic !== null) {
            $result['star_traffic'] = $this->starTraffic;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_item_id'] ?? null) !== null) {
            $obj->awemeItemId = (int) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['star_traffic'] ?? null) !== null) {
            $obj->starTraffic = (string) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
