<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterial implements \JsonSerializable
{
    /**
     * 素材建议
     * @var string[]
     */
    protected ?array $analysisType = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterialCoverImage
     */
    protected ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterialCoverImage $coverImage = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode
     */
    protected ?string $imageMode = null;

    /**
     * 更新时需要传，创建时不需要传
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource
     */
    protected ?string $source = null;

    /**
     * 视频标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 视频时长
     * @var int
     */
    protected ?int $videoDuration = null;

    /**
     * 视频 vid
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 素材建议
     * @return string[]
     */
    public function getAnalysisType(): ?array
    {
        return $this->analysisType;
    }

    /**
     * 素材建议
     * @param string[] $analysisType
     * @return self
     */
    public function setAnalysisType(?array $analysisType): self
    {
        $this->analysisType = $analysisType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterialCoverImage
     */
    public function getCoverImage(): ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterialCoverImage
    {
        return $this->coverImage;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterialCoverImage $coverImage
     * @return self
     */
    public function setCoverImage(?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterialCoverImage $coverImage): self
    {
        $this->coverImage = $coverImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * 更新时需要传，创建时不需要传
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 更新时需要传，创建时不需要传
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoVideoMaterialSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
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
     * 视频时长
     * @return int
     */
    public function getVideoDuration(): ?int
    {
        return $this->videoDuration;
    }

    /**
     * 视频时长
     * @param int $videoDuration
     * @return self
     */
    public function setVideoDuration(?int $videoDuration): self
    {
        $this->videoDuration = $videoDuration;
        return $this;
    }

    /**
     * 视频 vid
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频 vid
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
        if ($this->analysisType !== null) {
            $result['analysis_type'] = $this->analysisType;
        }
        if ($this->coverImage !== null) {
            $result['cover_image'] = $this->coverImage;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->videoDuration !== null) {
            $result['video_duration'] = $this->videoDuration;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['analysis_type'] ?? null) !== null && is_array($v)) {
            $obj->analysisType = $v;
        }
        if (($v = $data['cover_image'] ?? null) !== null && is_array($v)) {
            $obj->coverImage = \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInnerMaterialInfoVideoMaterialCoverImage::fromArray($v);
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_duration'] ?? null) !== null) {
            $obj->videoDuration = (int) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
