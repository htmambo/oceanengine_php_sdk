<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialGetV30ResponseDataVideoMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $guideVideoId = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataVideoMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string
     */
    protected ?string $materialOptStatus = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataVideoMaterialListMaterialStatusFrist
     */
    protected ?string $materialStatusFrist = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialGetV30DataVideoMaterialListMaterialStatusSecond[]
     */
    protected ?array $materialStatusSecond = null;

    /**
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * @var string
     */
    protected ?string $videoCoverUri = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return string
     */
    public function getGuideVideoId(): ?string
    {
        return $this->guideVideoId;
    }

    /**
     * @param string $guideVideoId
     * @return self
     */
    public function setGuideVideoId(?string $guideVideoId): self
    {
        $this->guideVideoId = $guideVideoId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataVideoMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataVideoMaterialListImageMode $imageMode
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
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaterialOptStatus(): ?string
    {
        return $this->materialOptStatus;
    }

    /**
     * @param string $materialOptStatus
     * @return self
     */
    public function setMaterialOptStatus(?string $materialOptStatus): self
    {
        $this->materialOptStatus = $materialOptStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataVideoMaterialListMaterialStatusFrist
     */
    public function getMaterialStatusFrist(): ?string
    {
        return $this->materialStatusFrist;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataVideoMaterialListMaterialStatusFrist $materialStatusFrist
     * @return self
     */
    public function setMaterialStatusFrist(?string $materialStatusFrist): self
    {
        $this->materialStatusFrist = $materialStatusFrist;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OcProjectMaterialGetV30DataVideoMaterialListMaterialStatusSecond[]
     */
    public function getMaterialStatusSecond(): ?array
    {
        return $this->materialStatusSecond;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialGetV30DataVideoMaterialListMaterialStatusSecond[] $materialStatusSecond
     * @return self
     */
    public function setMaterialStatusSecond(?array $materialStatusSecond): self
    {
        $this->materialStatusSecond = $materialStatusSecond;
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
    public function getVideoCoverUri(): ?string
    {
        return $this->videoCoverUri;
    }

    /**
     * @param string $videoCoverUri
     * @return self
     */
    public function setVideoCoverUri(?string $videoCoverUri): self
    {
        $this->videoCoverUri = $videoCoverUri;
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
        if ($this->guideVideoId !== null) {
            $result['guide_video_id'] = $this->guideVideoId;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialOptStatus !== null) {
            $result['material_opt_status'] = $this->materialOptStatus;
        }
        if ($this->materialStatusFrist !== null) {
            $result['material_status_frist'] = $this->materialStatusFrist;
        }
        if ($this->materialStatusSecond !== null) {
            $result['material_status_second'] = $this->materialStatusSecond;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
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
        if (($v = $data['guide_video_id'] ?? null) !== null) {
            $obj->guideVideoId = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_opt_status'] ?? null) !== null) {
            $obj->materialOptStatus = (string) $v;
        }
        if (($v = $data['material_status_frist'] ?? null) !== null) {
            $obj->materialStatusFrist = (string) $v;
        }
        if (($v = $data['material_status_second'] ?? null) !== null && is_array($v)) {
            $obj->materialStatusSecond = $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
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
