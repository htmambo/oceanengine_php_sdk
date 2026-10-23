<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileVideoAwemeGetV30ResponseDataVideoListInner implements \JsonSerializable
{
    /**
     * 抖音号id
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 抖音号name
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * 视频播放地址
     * @var string
     */
    protected ?string $awemeVideoUrl = null;

    /**
     * 是否可投放
     * @var bool
     */
    protected ?bool $canDelivery = null;

    /**
     * 视频封面图片地址
     * @var string
     */
    protected ?string $coverImageUrl = null;

    /**
     * 时长
     * @var string
     */
    protected ?string $duration = null;

    /**
     * @var \Oceanengine\Models\LocalFileVideoAwemeGetV30DataVideoListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * 抖音视频ID
     * @var string
     */
    protected ?string $itemId = null;

    /**
     * @var int
     */
    protected ?int $legoMaterialId = null;

    /**
     * 不可投放原因
     * @var string[]
     */
    protected ?array $notDeliveryReason = null;

    /**
     * @var \Oceanengine\Models\LocalFileVideoAwemeGetV30DataVideoListQualityMark
     */
    protected ?string $qualityMark = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var int
     */
    protected ?int $videoHeigh = null;

    /**
     * 视频ID
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var int
     */
    protected ?int $videoWidth = null;

    /**
     * 抖音号id
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 抖音号name
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音号name
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * 视频播放地址
     * @return string
     */
    public function getAwemeVideoUrl(): ?string
    {
        return $this->awemeVideoUrl;
    }

    /**
     * 视频播放地址
     * @param string $awemeVideoUrl
     * @return self
     */
    public function setAwemeVideoUrl(?string $awemeVideoUrl): self
    {
        $this->awemeVideoUrl = $awemeVideoUrl;
        return $this;
    }

    /**
     * 是否可投放
     * @return bool
     */
    public function getCanDelivery(): ?bool
    {
        return $this->canDelivery;
    }

    /**
     * 是否可投放
     * @param bool $canDelivery
     * @return self
     */
    public function setCanDelivery(?bool $canDelivery): self
    {
        $this->canDelivery = $canDelivery;
        return $this;
    }

    /**
     * 视频封面图片地址
     * @return string
     */
    public function getCoverImageUrl(): ?string
    {
        return $this->coverImageUrl;
    }

    /**
     * 视频封面图片地址
     * @param string $coverImageUrl
     * @return self
     */
    public function setCoverImageUrl(?string $coverImageUrl): self
    {
        $this->coverImageUrl = $coverImageUrl;
        return $this;
    }

    /**
     * 时长
     * @return string
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * 时长
     * @param string $duration
     * @return self
     */
    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileVideoAwemeGetV30DataVideoListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoAwemeGetV30DataVideoListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * 抖音视频ID
     * @return string
     */
    public function getItemId(): ?string
    {
        return $this->itemId;
    }

    /**
     * 抖音视频ID
     * @param string $itemId
     * @return self
     */
    public function setItemId(?string $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLegoMaterialId(): ?int
    {
        return $this->legoMaterialId;
    }

    /**
     * @param int $legoMaterialId
     * @return self
     */
    public function setLegoMaterialId(?int $legoMaterialId): self
    {
        $this->legoMaterialId = $legoMaterialId;
        return $this;
    }

    /**
     * 不可投放原因
     * @return string[]
     */
    public function getNotDeliveryReason(): ?array
    {
        return $this->notDeliveryReason;
    }

    /**
     * 不可投放原因
     * @param string[] $notDeliveryReason
     * @return self
     */
    public function setNotDeliveryReason(?array $notDeliveryReason): self
    {
        $this->notDeliveryReason = $notDeliveryReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalFileVideoAwemeGetV30DataVideoListQualityMark
     */
    public function getQualityMark(): ?string
    {
        return $this->qualityMark;
    }

    /**
     * @param \Oceanengine\Models\LocalFileVideoAwemeGetV30DataVideoListQualityMark $qualityMark
     * @return self
     */
    public function setQualityMark(?string $qualityMark): self
    {
        $this->qualityMark = $qualityMark;
        return $this;
    }

    /**
     * 视频标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 视频标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoHeigh(): ?int
    {
        return $this->videoHeigh;
    }

    /**
     * @param int $videoHeigh
     * @return self
     */
    public function setVideoHeigh(?int $videoHeigh): self
    {
        $this->videoHeigh = $videoHeigh;
        return $this;
    }

    /**
     * 视频ID
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频ID
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoWidth(): ?int
    {
        return $this->videoWidth;
    }

    /**
     * @param int $videoWidth
     * @return self
     */
    public function setVideoWidth(?int $videoWidth): self
    {
        $this->videoWidth = $videoWidth;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->awemeVideoUrl !== null) {
            $result['aweme_video_url'] = $this->awemeVideoUrl;
        }
        if ($this->canDelivery !== null) {
            $result['can_delivery'] = $this->canDelivery;
        }
        if ($this->coverImageUrl !== null) {
            $result['cover_image_url'] = $this->coverImageUrl;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->legoMaterialId !== null) {
            $result['lego_material_id'] = $this->legoMaterialId;
        }
        if ($this->notDeliveryReason !== null) {
            $result['not_delivery_reason'] = $this->notDeliveryReason;
        }
        if ($this->qualityMark !== null) {
            $result['quality_mark'] = $this->qualityMark;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->videoHeigh !== null) {
            $result['video_heigh'] = $this->videoHeigh;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoWidth !== null) {
            $result['video_width'] = $this->videoWidth;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['aweme_video_url'] ?? null) !== null) {
            $obj->awemeVideoUrl = (string) $v;
        }
        if (($v = $data['can_delivery'] ?? null) !== null) {
            $obj->canDelivery = (bool) $v;
        }
        if (($v = $data['cover_image_url'] ?? null) !== null) {
            $obj->coverImageUrl = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (string) $v;
        }
        if (($v = $data['lego_material_id'] ?? null) !== null) {
            $obj->legoMaterialId = (int) $v;
        }
        if (($v = $data['not_delivery_reason'] ?? null) !== null && is_array($v)) {
            $obj->notDeliveryReason = $v;
        }
        if (($v = $data['quality_mark'] ?? null) !== null) {
            $obj->qualityMark = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_heigh'] ?? null) !== null) {
            $obj->videoHeigh = (int) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_width'] ?? null) !== null) {
            $obj->videoWidth = (int) $v;
        }
        return $obj;
    }
}
