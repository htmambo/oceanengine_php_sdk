<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdMaterialGetV10Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringAnalysisType[]
     */
    protected ?array $analysisType = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringHavingCost
     */
    protected ?string $havingCost = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringImageMode[]
     */
    protected ?array $imageMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var string
     */
    protected ?string $searchKeyword = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringVideoSource[]
     */
    protected ?array $videoSource = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringAnalysisType[]
     */
    public function getAnalysisType(): ?array
    {
        return $this->analysisType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringAnalysisType[] $analysisType
     * @return self
     */
    public function setAnalysisType(?array $analysisType): self
    {
        $this->analysisType = $analysisType;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringHavingCost
     */
    public function getHavingCost(): ?string
    {
        return $this->havingCost;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringHavingCost $havingCost
     * @return self
     */
    public function setHavingCost(?string $havingCost): self
    {
        $this->havingCost = $havingCost;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringImageMode[]
     */
    public function getImageMode(): ?array
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringImageMode[] $imageMode
     * @return self
     */
    public function setImageMode(?array $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchKeyword(): ?string
    {
        return $this->searchKeyword;
    }

    /**
     * @param string $searchKeyword
     * @return self
     */
    public function setSearchKeyword(?string $searchKeyword): self
    {
        $this->searchKeyword = $searchKeyword;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringVideoSource[]
     */
    public function getVideoSource(): ?array
    {
        return $this->videoSource;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10FilteringVideoSource[] $videoSource
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
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->havingCost !== null) {
            $result['having_cost'] = $this->havingCost;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->searchKeyword !== null) {
            $result['search_keyword'] = $this->searchKeyword;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
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
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['having_cost'] ?? null) !== null) {
            $obj->havingCost = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null && is_array($v)) {
            $obj->imageMode = $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['search_keyword'] ?? null) !== null) {
            $obj->searchKeyword = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        if (($v = $data['video_source'] ?? null) !== null && is_array($v)) {
            $obj->videoSource = $v;
        }
        return $obj;
    }
}
