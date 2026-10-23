<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportMaterialGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string[]
     */
    protected ?array $analysisType = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10DataListCarouselSource
     */
    protected ?string $carouselSource = null;

    /**
     * @var string
     */
    protected ?string $createData = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var float
     */
    protected ?float $duration = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10ResponseDataListInnerFields
     */
    protected ?\Oceanengine\Models\QianchuanReportMaterialGetV10ResponseDataListInnerFields $fields = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10DataListImageSource
     */
    protected ?string $imageSource = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10DataListMaterialMode
     */
    protected ?string $materialMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10DataListMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var int
     */
    protected ?int $relatedAdCnt = null;

    /**
     * @var int[]
     */
    protected ?array $relatedAdIds = null;

    /**
     * @var int
     */
    protected ?int $relatedCreativeCnt = null;

    /**
     * @var int[]
     */
    protected ?array $relatedCreativeIds = null;

    /**
     * @var string
     */
    protected ?string $tags = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportMaterialGetV10DataListVideoSource
     */
    protected ?string $videoSource = null;

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
    public function getAnalysisType(): ?array
    {
        return $this->analysisType;
    }

    /**
     * @param string[] $analysisType
     * @return self
     */
    public function setAnalysisType(?array $analysisType): self
    {
        $this->analysisType = $analysisType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10DataListCarouselSource
     */
    public function getCarouselSource(): ?string
    {
        return $this->carouselSource;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10DataListCarouselSource $carouselSource
     * @return self
     */
    public function setCarouselSource(?string $carouselSource): self
    {
        $this->carouselSource = $carouselSource;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateData(): ?string
    {
        return $this->createData;
    }

    /**
     * @param string $createData
     * @return self
     */
    public function setCreateData(?string $createData): self
    {
        $this->createData = $createData;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10ResponseDataListInnerFields
     */
    public function getFields(): ?\Oceanengine\Models\QianchuanReportMaterialGetV10ResponseDataListInnerFields
    {
        return $this->fields;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10ResponseDataListInnerFields $fields
     * @return self
     */
    public function setFields(?\Oceanengine\Models\QianchuanReportMaterialGetV10ResponseDataListInnerFields $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10DataListImageSource
     */
    public function getImageSource(): ?string
    {
        return $this->imageSource;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10DataListImageSource $imageSource
     * @return self
     */
    public function setImageSource(?string $imageSource): self
    {
        $this->imageSource = $imageSource;
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
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10DataListMaterialMode
     */
    public function getMaterialMode(): ?string
    {
        return $this->materialMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10DataListMaterialMode $materialMode
     * @return self
     */
    public function setMaterialMode(?string $materialMode): self
    {
        $this->materialMode = $materialMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10DataListMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10DataListMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelatedAdCnt(): ?int
    {
        return $this->relatedAdCnt;
    }

    /**
     * @param int $relatedAdCnt
     * @return self
     */
    public function setRelatedAdCnt(?int $relatedAdCnt): self
    {
        $this->relatedAdCnt = $relatedAdCnt;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getRelatedAdIds(): ?array
    {
        return $this->relatedAdIds;
    }

    /**
     * @param int[] $relatedAdIds
     * @return self
     */
    public function setRelatedAdIds(?array $relatedAdIds): self
    {
        $this->relatedAdIds = $relatedAdIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelatedCreativeCnt(): ?int
    {
        return $this->relatedCreativeCnt;
    }

    /**
     * @param int $relatedCreativeCnt
     * @return self
     */
    public function setRelatedCreativeCnt(?int $relatedCreativeCnt): self
    {
        $this->relatedCreativeCnt = $relatedCreativeCnt;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getRelatedCreativeIds(): ?array
    {
        return $this->relatedCreativeIds;
    }

    /**
     * @param int[] $relatedCreativeIds
     * @return self
     */
    public function setRelatedCreativeIds(?array $relatedCreativeIds): self
    {
        $this->relatedCreativeIds = $relatedCreativeIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getTags(): ?string
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     * @return self
     */
    public function setTags(?string $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportMaterialGetV10DataListVideoSource
     */
    public function getVideoSource(): ?string
    {
        return $this->videoSource;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportMaterialGetV10DataListVideoSource $videoSource
     * @return self
     */
    public function setVideoSource(?string $videoSource): self
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->analysisType !== null) {
            $result['analysis_type'] = $this->analysisType;
        }
        if ($this->carouselSource !== null) {
            $result['carousel_source'] = $this->carouselSource;
        }
        if ($this->createData !== null) {
            $result['create_data'] = $this->createData;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->fields !== null) {
            $result['fields'] = $this->fields;
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
        if ($this->relatedAdCnt !== null) {
            $result['related_ad_cnt'] = $this->relatedAdCnt;
        }
        if ($this->relatedAdIds !== null) {
            $result['related_ad_ids'] = $this->relatedAdIds;
        }
        if ($this->relatedCreativeCnt !== null) {
            $result['related_creative_cnt'] = $this->relatedCreativeCnt;
        }
        if ($this->relatedCreativeIds !== null) {
            $result['related_creative_ids'] = $this->relatedCreativeIds;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->videoSource !== null) {
            $result['video_source'] = $this->videoSource;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['analysis_type'] ?? null) !== null && is_array($v)) {
            $obj->analysisType = $v;
        }
        if (($v = $data['carousel_source'] ?? null) !== null) {
            $obj->carouselSource = (string) $v;
        }
        if (($v = $data['create_data'] ?? null) !== null) {
            $obj->createData = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
        }
        if (($v = $data['fields'] ?? null) !== null && is_array($v)) {
            $obj->fields = \Oceanengine\Models\QianchuanReportMaterialGetV10ResponseDataListInnerFields::fromArray($v);
        }
        if (($v = $data['image_source'] ?? null) !== null) {
            $obj->imageSource = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_mode'] ?? null) !== null) {
            $obj->materialMode = (string) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['related_ad_cnt'] ?? null) !== null) {
            $obj->relatedAdCnt = (int) $v;
        }
        if (($v = $data['related_ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->relatedAdIds = $v;
        }
        if (($v = $data['related_creative_cnt'] ?? null) !== null) {
            $obj->relatedCreativeCnt = (int) $v;
        }
        if (($v = $data['related_creative_ids'] ?? null) !== null && is_array($v)) {
            $obj->relatedCreativeIds = $v;
        }
        if (($v = $data['tags'] ?? null) !== null) {
            $obj->tags = (string) $v;
        }
        if (($v = $data['video_source'] ?? null) !== null) {
            $obj->videoSource = (string) $v;
        }
        return $obj;
    }
}
