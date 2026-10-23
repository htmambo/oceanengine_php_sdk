<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionEasyUpdateV30RequestPromotionMaterialsVideoMaterialListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionEasyUpdateV30PromotionMaterialsVideoMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 视频封面图片uri
     * @var string
     */
    protected ?string $videoCoverUri = null;

    /**
     * 视频id
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return \Oceanengine\Models\PromotionEasyUpdateV30PromotionMaterialsVideoMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionEasyUpdateV30PromotionMaterialsVideoMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 视频封面图片uri
     * @return string
     */
    public function getVideoCoverUri(): ?string
    {
        return $this->videoCoverUri;
    }

    /**
     * 视频封面图片uri
     * @param string $videoCoverUri
     * @return self
     */
    public function setVideoCoverUri(?string $videoCoverUri): self
    {
        $this->videoCoverUri = $videoCoverUri;
        return $this;
    }

    /**
     * 视频id
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频id
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
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->videoCoverUri !== null) {
            $result['video_cover_uri'] = $this->videoCoverUri;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['video_cover_uri'] ?? null) !== null) {
            $obj->videoCoverUri = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
