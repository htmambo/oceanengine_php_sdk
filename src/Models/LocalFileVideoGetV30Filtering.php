<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileVideoGetV30Filtering implements \JsonSerializable
{
    /**
     * 评估类型
     * @var \Oceanengine\Models\LocalFileVideoGetV30FilteringAnalysisType[]
     */
    protected ?array $analysisType = null;

    /**
     * 指标统计结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 素材类型
     * @var \Oceanengine\Models\LocalFileVideoGetV30FilteringImageMode[]
     */
    protected ?array $imageMode = null;

    /**
     * 是否过滤低质素材，默认true
     * @var bool
     */
    protected ?bool $isFilterUnqualified = null;

    /**
     * 素材来源
     * @var \Oceanengine\Models\LocalFileVideoGetV30FilteringMaterialSource[]
     */
    protected ?array $materialSource = null;

    /**
     * 搜索词
     * @var string
     */
    protected ?string $searchKeyWord = null;

    /**
     * 指标统计开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 评估类型
     * @return \Oceanengine\Models\LocalFileVideoGetV30FilteringAnalysisType[]
     */
    public function getAnalysisType(): ?array
    {
        return $this->analysisType;
    }

    /**
     * 评估类型
     * @param \Oceanengine\Models\LocalFileVideoGetV30FilteringAnalysisType[] $analysisType
     * @return self
     */
    public function setAnalysisType(?array $analysisType): self
    {
        $this->analysisType = $analysisType;
        return $this;
    }

    /**
     * 指标统计结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 指标统计结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 素材类型
     * @return \Oceanengine\Models\LocalFileVideoGetV30FilteringImageMode[]
     */
    public function getImageMode(): ?array
    {
        return $this->imageMode;
    }

    /**
     * 素材类型
     * @param \Oceanengine\Models\LocalFileVideoGetV30FilteringImageMode[] $imageMode
     * @return self
     */
    public function setImageMode(?array $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * 是否过滤低质素材，默认true
     * @return bool
     */
    public function getIsFilterUnqualified(): ?bool
    {
        return $this->isFilterUnqualified;
    }

    /**
     * 是否过滤低质素材，默认true
     * @param bool $isFilterUnqualified
     * @return self
     */
    public function setIsFilterUnqualified(?bool $isFilterUnqualified): self
    {
        $this->isFilterUnqualified = $isFilterUnqualified;
        return $this;
    }

    /**
     * 素材来源
     * @return \Oceanengine\Models\LocalFileVideoGetV30FilteringMaterialSource[]
     */
    public function getMaterialSource(): ?array
    {
        return $this->materialSource;
    }

    /**
     * 素材来源
     * @param \Oceanengine\Models\LocalFileVideoGetV30FilteringMaterialSource[] $materialSource
     * @return self
     */
    public function setMaterialSource(?array $materialSource): self
    {
        $this->materialSource = $materialSource;
        return $this;
    }

    /**
     * 搜索词
     * @return string
     */
    public function getSearchKeyWord(): ?string
    {
        return $this->searchKeyWord;
    }

    /**
     * 搜索词
     * @param string $searchKeyWord
     * @return self
     */
    public function setSearchKeyWord(?string $searchKeyWord): self
    {
        $this->searchKeyWord = $searchKeyWord;
        return $this;
    }

    /**
     * 指标统计开始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 指标统计开始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
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
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->isFilterUnqualified !== null) {
            $result['is_filter_unqualified'] = $this->isFilterUnqualified;
        }
        if ($this->materialSource !== null) {
            $result['material_source'] = $this->materialSource;
        }
        if ($this->searchKeyWord !== null) {
            $result['search_key_word'] = $this->searchKeyWord;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
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
        if (($v = $data['image_mode'] ?? null) !== null && is_array($v)) {
            $obj->imageMode = $v;
        }
        if (($v = $data['is_filter_unqualified'] ?? null) !== null) {
            $obj->isFilterUnqualified = (bool) $v;
        }
        if (($v = $data['material_source'] ?? null) !== null && is_array($v)) {
            $obj->materialSource = $v;
        }
        if (($v = $data['search_key_word'] ?? null) !== null) {
            $obj->searchKeyWord = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
