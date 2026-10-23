<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RejectMaterialAiRepairGetV30ResponseDataRepairMaterialInfoInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string[]
     */
    protected ?array $aiRepairContent = null;

    /**
     * @var int
     */
    protected ?int $aiRepairId = null;

    /**
     * @var string
     */
    protected ?string $aiRepairPreviewUrl = null;

    /**
     * @var string
     */
    protected ?string $aiRepairTime = null;

    /**
     * @var string
     */
    protected ?string $aiRepairVideoCoverId = null;

    /**
     * @var string
     */
    protected ?string $aiRepairVideoCoverUrl = null;

    /**
     * @var string
     */
    protected ?string $aiRepairVideoId = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string
     */
    protected ?string $previewUrl = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAiRepairContent(): ?array
    {
        return $this->aiRepairContent;
    }

    /**
     * @param string[] $aiRepairContent
     * @return self
     */
    public function setAiRepairContent(?array $aiRepairContent): self
    {
        $this->aiRepairContent = $aiRepairContent;
        return $this;
    }

    /**
     * @return int
     */
    public function getAiRepairId(): ?int
    {
        return $this->aiRepairId;
    }

    /**
     * @param int $aiRepairId
     * @return self
     */
    public function setAiRepairId(?int $aiRepairId): self
    {
        $this->aiRepairId = $aiRepairId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAiRepairPreviewUrl(): ?string
    {
        return $this->aiRepairPreviewUrl;
    }

    /**
     * @param string $aiRepairPreviewUrl
     * @return self
     */
    public function setAiRepairPreviewUrl(?string $aiRepairPreviewUrl): self
    {
        $this->aiRepairPreviewUrl = $aiRepairPreviewUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getAiRepairTime(): ?string
    {
        return $this->aiRepairTime;
    }

    /**
     * @param string $aiRepairTime
     * @return self
     */
    public function setAiRepairTime(?string $aiRepairTime): self
    {
        $this->aiRepairTime = $aiRepairTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getAiRepairVideoCoverId(): ?string
    {
        return $this->aiRepairVideoCoverId;
    }

    /**
     * @param string $aiRepairVideoCoverId
     * @return self
     */
    public function setAiRepairVideoCoverId(?string $aiRepairVideoCoverId): self
    {
        $this->aiRepairVideoCoverId = $aiRepairVideoCoverId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAiRepairVideoCoverUrl(): ?string
    {
        return $this->aiRepairVideoCoverUrl;
    }

    /**
     * @param string $aiRepairVideoCoverUrl
     * @return self
     */
    public function setAiRepairVideoCoverUrl(?string $aiRepairVideoCoverUrl): self
    {
        $this->aiRepairVideoCoverUrl = $aiRepairVideoCoverUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getAiRepairVideoId(): ?string
    {
        return $this->aiRepairVideoId;
    }

    /**
     * @param string $aiRepairVideoId
     * @return self
     */
    public function setAiRepairVideoId(?string $aiRepairVideoId): self
    {
        $this->aiRepairVideoId = $aiRepairVideoId;
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
    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    /**
     * @param string $previewUrl
     * @return self
     */
    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->previewUrl = $previewUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->aiRepairContent !== null) {
            $result['ai_repair_content'] = $this->aiRepairContent;
        }
        if ($this->aiRepairId !== null) {
            $result['ai_repair_id'] = $this->aiRepairId;
        }
        if ($this->aiRepairPreviewUrl !== null) {
            $result['ai_repair_preview_url'] = $this->aiRepairPreviewUrl;
        }
        if ($this->aiRepairTime !== null) {
            $result['ai_repair_time'] = $this->aiRepairTime;
        }
        if ($this->aiRepairVideoCoverId !== null) {
            $result['ai_repair_video_cover_id'] = $this->aiRepairVideoCoverId;
        }
        if ($this->aiRepairVideoCoverUrl !== null) {
            $result['ai_repair_video_cover_url'] = $this->aiRepairVideoCoverUrl;
        }
        if ($this->aiRepairVideoId !== null) {
            $result['ai_repair_video_id'] = $this->aiRepairVideoId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->previewUrl !== null) {
            $result['preview_url'] = $this->previewUrl;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['ai_repair_content'] ?? null) !== null && is_array($v)) {
            $obj->aiRepairContent = $v;
        }
        if (($v = $data['ai_repair_id'] ?? null) !== null) {
            $obj->aiRepairId = (int) $v;
        }
        if (($v = $data['ai_repair_preview_url'] ?? null) !== null) {
            $obj->aiRepairPreviewUrl = (string) $v;
        }
        if (($v = $data['ai_repair_time'] ?? null) !== null) {
            $obj->aiRepairTime = (string) $v;
        }
        if (($v = $data['ai_repair_video_cover_id'] ?? null) !== null) {
            $obj->aiRepairVideoCoverId = (string) $v;
        }
        if (($v = $data['ai_repair_video_cover_url'] ?? null) !== null) {
            $obj->aiRepairVideoCoverUrl = (string) $v;
        }
        if (($v = $data['ai_repair_video_id'] ?? null) !== null) {
            $obj->aiRepairVideoId = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['preview_url'] ?? null) !== null) {
            $obj->previewUrl = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
