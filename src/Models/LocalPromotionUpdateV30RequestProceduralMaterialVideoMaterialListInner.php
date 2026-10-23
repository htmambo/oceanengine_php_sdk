<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionUpdateV30RequestProceduralMaterialVideoMaterialListInner implements \JsonSerializable
{
    /**
     * 视频封面图片uri
     * @var string
     */
    protected ?string $coverWebUri = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionUpdateV30ProceduralMaterialVideoMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionUpdateV30ProceduralMaterialVideoMaterialListIsFfSeeSetting
     */
    protected ?string $isFfSeeSetting = null;

    /**
     * 视频vid
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 视频封面图片uri
     * @return string
     */
    public function getCoverWebUri(): ?string
    {
        return $this->coverWebUri;
    }

    /**
     * 视频封面图片uri
     * @param string $coverWebUri
     * @return self
     */
    public function setCoverWebUri(?string $coverWebUri): self
    {
        $this->coverWebUri = $coverWebUri;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionUpdateV30ProceduralMaterialVideoMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionUpdateV30ProceduralMaterialVideoMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionUpdateV30ProceduralMaterialVideoMaterialListIsFfSeeSetting
     */
    public function getIsFfSeeSetting(): ?string
    {
        return $this->isFfSeeSetting;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionUpdateV30ProceduralMaterialVideoMaterialListIsFfSeeSetting $isFfSeeSetting
     * @return self
     */
    public function setIsFfSeeSetting(?string $isFfSeeSetting): self
    {
        $this->isFfSeeSetting = $isFfSeeSetting;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->coverWebUri !== null) {
            $result['cover_web_uri'] = $this->coverWebUri;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->isFfSeeSetting !== null) {
            $result['is_ff_see_setting'] = $this->isFfSeeSetting;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cover_web_uri'] ?? null) !== null) {
            $obj->coverWebUri = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['is_ff_see_setting'] ?? null) !== null) {
            $obj->isFfSeeSetting = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
