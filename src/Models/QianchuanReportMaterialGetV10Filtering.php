<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportMaterialGetV10Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringAnalysisType[]
     */
    protected ?array $analysisType = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringCarouselSource[]
     */
    protected ?array $carouselSource = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringImageSource[]
     */
    protected ?array $imageSource = null;

    /**
     * @var int[]
     */
    protected ?array $materialId = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringMaterialMode[]
     */
    protected ?array $materialMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringVideoSource[]
     */
    protected ?array $videoSource = null;

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringAnalysisType[]
     */
    public function getAnalysisType(): ?array
    {
        return $this->analysisType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringAnalysisType[] $analysisType
     * @return self
     */
    public function setAnalysisType(?array $analysisType): self
    {
        $this->analysisType = $analysisType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringCarouselSource[]
     */
    public function getCarouselSource(): ?array
    {
        return $this->carouselSource;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringCarouselSource[] $carouselSource
     * @return self
     */
    public function setCarouselSource(?array $carouselSource): self
    {
        $this->carouselSource = $carouselSource;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringImageSource[]
     */
    public function getImageSource(): ?array
    {
        return $this->imageSource;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringImageSource[] $imageSource
     * @return self
     */
    public function setImageSource(?array $imageSource): self
    {
        $this->imageSource = $imageSource;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getMaterialId(): ?array
    {
        return $this->materialId;
    }

    /**
     * @param int[] $materialId
     * @return self
     */
    public function setMaterialId(?array $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringMaterialMode[]
     */
    public function getMaterialMode(): ?array
    {
        return $this->materialMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringMaterialMode[] $materialMode
     * @return self
     */
    public function setMaterialMode(?array $materialMode): self
    {
        $this->materialMode = $materialMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringVideoSource[]
     */
    public function getVideoSource(): ?array
    {
        return $this->videoSource;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10FilteringVideoSource[] $videoSource
     * @return self
     */
    public function setVideoSource(?array $videoSource): self
    {
        $this->videoSource = $videoSource;
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
        if ($this->carouselSource !== null) {
            $result['carousel_source'] = $this->carouselSource;
        }
        if ($this->imageSource !== null) {
            $result['image_source'] = $this->imageSource;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialMode !== null) {
            $result['material_mode'] = $this->materialMode;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->videoSource !== null) {
            $result['video_source'] = $this->videoSource;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['analysis_type'] ?? null) !== null && is_array($v)) {
            $obj->analysisType = $v;
        }
        if (($v = $data['carousel_source'] ?? null) !== null && is_array($v)) {
            $obj->carouselSource = $v;
        }
        if (($v = $data['image_source'] ?? null) !== null && is_array($v)) {
            $obj->imageSource = $v;
        }
        if (($v = $data['material_id'] ?? null) !== null && is_array($v)) {
            $obj->materialId = $v;
        }
        if (($v = $data['material_mode'] ?? null) !== null && is_array($v)) {
            $obj->materialMode = $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['video_source'] ?? null) !== null && is_array($v)) {
            $obj->videoSource = $v;
        }
        return $obj;
    }
}
