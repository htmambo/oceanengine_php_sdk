<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInner implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $dpaVideoTaskIds = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType
     */
    protected ?string $dpaVideoTemplateType = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerImageInfo
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerImageInfo $imageInfo = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeVideoMaterialsImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerVideoInfo
     */
    protected ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerVideoInfo $videoInfo = null;

    /**
     * @return string[]
     */
    public function getDpaVideoTaskIds(): ?array
    {
        return $this->dpaVideoTaskIds;
    }

    /**
     * @param string[] $dpaVideoTaskIds
     * @return self
     */
    public function setDpaVideoTaskIds(?array $dpaVideoTaskIds): self
    {
        $this->dpaVideoTaskIds = $dpaVideoTaskIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType
     */
    public function getDpaVideoTemplateType(): ?string
    {
        return $this->dpaVideoTemplateType;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeVideoMaterialsDpaVideoTemplateType $dpaVideoTemplateType
     * @return self
     */
    public function setDpaVideoTemplateType(?string $dpaVideoTemplateType): self
    {
        $this->dpaVideoTemplateType = $dpaVideoTemplateType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerImageInfo
     */
    public function getImageInfo(): ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerImageInfo
    {
        return $this->imageInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerImageInfo $imageInfo
     * @return self
     */
    public function setImageInfo(?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerImageInfo $imageInfo): self
    {
        $this->imageInfo = $imageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeVideoMaterialsImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2CreativeVideoMaterialsImageMode $imageMode
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
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerVideoInfo $videoInfo): self
    {
        $this->videoInfo = $videoInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dpaVideoTaskIds !== null) {
            $result['dpa_video_task_ids'] = $this->dpaVideoTaskIds;
        }
        if ($this->dpaVideoTemplateType !== null) {
            $result['dpa_video_template_type'] = $this->dpaVideoTemplateType;
        }
        if ($this->imageInfo !== null) {
            $result['image_info'] = $this->imageInfo;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->videoInfo !== null) {
            $result['video_info'] = $this->videoInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['dpa_video_task_ids'] ?? null) !== null && is_array($v)) {
            $obj->dpaVideoTaskIds = $v;
        }
        if (($v = $data['dpa_video_template_type'] ?? null) !== null) {
            $obj->dpaVideoTemplateType = (string) $v;
        }
        if (($v = $data['image_info'] ?? null) !== null && is_array($v)) {
            $obj->imageInfo = \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerImageInfo::fromArray($v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeVideoMaterialsInnerVideoInfo::fromArray($v);
        }
        return $obj;
    }
}
