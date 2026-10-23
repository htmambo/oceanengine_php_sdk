<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionDetailV30ResponseDataProceduralMaterialVideoMaterialListInner implements \JsonSerializable
{
    /**
     * 封面图片高度
     * @var int
     */
    protected ?int $coverImageHeight = null;

    /**
     * 封面图片宽度
     * @var int
     */
    protected ?int $coverImageWidth = null;

    /**
     * 封面图片uri
     * @var string
     */
    protected ?string $coverWebUri = null;

    /**
     * 封面图片链接
     * @var string
     */
    protected ?string $coverWebUrl = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting
     */
    protected ?string $isFfSeeSetting = null;

    /**
     * 标题素材库id
     * @var int
     */
    protected ?int $legoMaterialId = null;

    /**
     * 标题素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 视频长度
     * @var int
     */
    protected ?int $videoDuration = null;

    /**
     * 视频高度
     * @var int
     */
    protected ?int $videoHeight = null;

    /**
     * 视频vid
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 视频播放链接
     * @var string
     */
    protected ?string $videoPlayUrl = null;

    /**
     * 视频宽度
     * @var int
     */
    protected ?int $videoWidth = null;

    /**
     * 封面图片高度
     * @return int
     */
    public function getCoverImageHeight(): ?int
    {
        return $this->coverImageHeight;
    }

    /**
     * 封面图片高度
     * @param int $coverImageHeight
     * @return self
     */
    public function setCoverImageHeight(?int $coverImageHeight): self
    {
        $this->coverImageHeight = $coverImageHeight;
        return $this;
    }

    /**
     * 封面图片宽度
     * @return int
     */
    public function getCoverImageWidth(): ?int
    {
        return $this->coverImageWidth;
    }

    /**
     * 封面图片宽度
     * @param int $coverImageWidth
     * @return self
     */
    public function setCoverImageWidth(?int $coverImageWidth): self
    {
        $this->coverImageWidth = $coverImageWidth;
        return $this;
    }

    /**
     * 封面图片uri
     * @return string
     */
    public function getCoverWebUri(): ?string
    {
        return $this->coverWebUri;
    }

    /**
     * 封面图片uri
     * @param string $coverWebUri
     * @return self
     */
    public function setCoverWebUri(?string $coverWebUri): self
    {
        $this->coverWebUri = $coverWebUri;
        return $this;
    }

    /**
     * 封面图片链接
     * @return string
     */
    public function getCoverWebUrl(): ?string
    {
        return $this->coverWebUrl;
    }

    /**
     * 封面图片链接
     * @param string $coverWebUrl
     * @return self
     */
    public function setCoverWebUrl(?string $coverWebUrl): self
    {
        $this->coverWebUrl = $coverWebUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting
     */
    public function getIsFfSeeSetting(): ?string
    {
        return $this->isFfSeeSetting;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting $isFfSeeSetting
     * @return self
     */
    public function setIsFfSeeSetting(?string $isFfSeeSetting): self
    {
        $this->isFfSeeSetting = $isFfSeeSetting;
        return $this;
    }

    /**
     * 标题素材库id
     * @return int
     */
    public function getLegoMaterialId(): ?int
    {
        return $this->legoMaterialId;
    }

    /**
     * 标题素材库id
     * @param int $legoMaterialId
     * @return self
     */
    public function setLegoMaterialId(?int $legoMaterialId): self
    {
        $this->legoMaterialId = $legoMaterialId;
        return $this;
    }

    /**
     * 标题素材id
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 标题素材id
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 视频长度
     * @return int
     */
    public function getVideoDuration(): ?int
    {
        return $this->videoDuration;
    }

    /**
     * 视频长度
     * @param int $videoDuration
     * @return self
     */
    public function setVideoDuration(?int $videoDuration): self
    {
        $this->videoDuration = $videoDuration;
        return $this;
    }

    /**
     * 视频高度
     * @return int
     */
    public function getVideoHeight(): ?int
    {
        return $this->videoHeight;
    }

    /**
     * 视频高度
     * @param int $videoHeight
     * @return self
     */
    public function setVideoHeight(?int $videoHeight): self
    {
        $this->videoHeight = $videoHeight;
        return $this;
    }

    /**
     * 视频vid
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频vid
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 视频播放链接
     * @return string
     */
    public function getVideoPlayUrl(): ?string
    {
        return $this->videoPlayUrl;
    }

    /**
     * 视频播放链接
     * @param string $videoPlayUrl
     * @return self
     */
    public function setVideoPlayUrl(?string $videoPlayUrl): self
    {
        $this->videoPlayUrl = $videoPlayUrl;
        return $this;
    }

    /**
     * 视频宽度
     * @return int
     */
    public function getVideoWidth(): ?int
    {
        return $this->videoWidth;
    }

    /**
     * 视频宽度
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
        if ($this->coverImageHeight !== null) {
            $result['cover_image_height'] = $this->coverImageHeight;
        }
        if ($this->coverImageWidth !== null) {
            $result['cover_image_width'] = $this->coverImageWidth;
        }
        if ($this->coverWebUri !== null) {
            $result['cover_web_uri'] = $this->coverWebUri;
        }
        if ($this->coverWebUrl !== null) {
            $result['cover_web_url'] = $this->coverWebUrl;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->isFfSeeSetting !== null) {
            $result['is_ff_see_setting'] = $this->isFfSeeSetting;
        }
        if ($this->legoMaterialId !== null) {
            $result['lego_material_id'] = $this->legoMaterialId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->videoDuration !== null) {
            $result['video_duration'] = $this->videoDuration;
        }
        if ($this->videoHeight !== null) {
            $result['video_height'] = $this->videoHeight;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoPlayUrl !== null) {
            $result['video_play_url'] = $this->videoPlayUrl;
        }
        if ($this->videoWidth !== null) {
            $result['video_width'] = $this->videoWidth;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cover_image_height'] ?? null) !== null) {
            $obj->coverImageHeight = (int) $v;
        }
        if (($v = $data['cover_image_width'] ?? null) !== null) {
            $obj->coverImageWidth = (int) $v;
        }
        if (($v = $data['cover_web_uri'] ?? null) !== null) {
            $obj->coverWebUri = (string) $v;
        }
        if (($v = $data['cover_web_url'] ?? null) !== null) {
            $obj->coverWebUrl = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['is_ff_see_setting'] ?? null) !== null) {
            $obj->isFfSeeSetting = (string) $v;
        }
        if (($v = $data['lego_material_id'] ?? null) !== null) {
            $obj->legoMaterialId = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['video_duration'] ?? null) !== null) {
            $obj->videoDuration = (int) $v;
        }
        if (($v = $data['video_height'] ?? null) !== null) {
            $obj->videoHeight = (int) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_play_url'] ?? null) !== null) {
            $obj->videoPlayUrl = (string) $v;
        }
        if (($v = $data['video_width'] ?? null) !== null) {
            $obj->videoWidth = (int) $v;
        }
        return $obj;
    }
}
