<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectMaterialTypeUpdateV30RequestMaterialListVideoMaterialListInner implements \JsonSerializable
{
    /**
     * 引导视频ID
     * @var string
     */
    protected ?string $guideVideoId = null;

    /**
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * 抖音主页视频ID
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 视频封面图片ID，取值来源【获取图片素材】
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * @var \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListVideoHpVisibility
     */
    protected ?string $videoHpVisibility = null;

    /**
     * 视频ID，取值来源【获取视频素材】
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 引导视频ID
     * @return string
     */
    public function getGuideVideoId(): ?string
    {
        return $this->guideVideoId;
    }

    /**
     * 引导视频ID
     * @param string $guideVideoId
     * @return self
     */
    public function setGuideVideoId(?string $guideVideoId): self
    {
        $this->guideVideoId = $guideVideoId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * 抖音主页视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 抖音主页视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 视频封面图片ID，取值来源【获取图片素材】
     * @return string
     */
    public function getVideoCoverId(): ?string
    {
        return $this->videoCoverId;
    }

    /**
     * 视频封面图片ID，取值来源【获取图片素材】
     * @param string $videoCoverId
     * @return self
     */
    public function setVideoCoverId(?string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListVideoHpVisibility
     */
    public function getVideoHpVisibility(): ?string
    {
        return $this->videoHpVisibility;
    }

    /**
     * @param \Oceanengine\Models\ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListVideoHpVisibility $videoHpVisibility
     * @return self
     */
    public function setVideoHpVisibility(?string $videoHpVisibility): self
    {
        $this->videoHpVisibility = $videoHpVisibility;
        return $this;
    }

    /**
     * 视频ID，取值来源【获取视频素材】
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频ID，取值来源【获取视频素材】
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
        if ($this->guideVideoId !== null) {
            $result['guide_video_id'] = $this->guideVideoId;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoHpVisibility !== null) {
            $result['video_hp_visibility'] = $this->videoHpVisibility;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['guide_video_id'] ?? null) !== null) {
            $obj->guideVideoId = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_hp_visibility'] ?? null) !== null) {
            $obj->videoHpVisibility = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
