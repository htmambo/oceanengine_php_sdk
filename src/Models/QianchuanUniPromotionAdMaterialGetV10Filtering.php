<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdMaterialGetV10Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType[]
     */
    protected ?array $analysisType = null;

    /**
     * 查询结束日期
     * @var string
     */
    protected ?string $endDate = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType
     */
    protected ?string $materialSelectType = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus
     */
    protected ?string $materialStatus = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType
     */
    protected ?string $materialType = null;

    /**
     * 商品ID，仅商品全域/乘方计划支持
     * @var string
     */
    protected ?string $productId = null;

    /**
     * @var string
     */
    protected ?string $productKeyword = null;

    /**
     * @var string
     */
    protected ?string $searchKeyword = null;

    /**
     * 查询起始日期
     * @var string
     */
    protected ?string $startDate = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringVideoType
     */
    protected ?string $videoType = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType[]
     */
    public function getAnalysisType(): ?array
    {
        return $this->analysisType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringAnalysisType[] $analysisType
     * @return self
     */
    public function setAnalysisType(?array $analysisType): self
    {
        $this->analysisType = $analysisType;
        return $this;
    }

    /**
     * 查询结束日期
     * @return string
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * 查询结束日期
     * @param string $endDate
     * @return self
     */
    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType
     */
    public function getMaterialSelectType(): ?string
    {
        return $this->materialSelectType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringMaterialSelectType $materialSelectType
     * @return self
     */
    public function setMaterialSelectType(?string $materialSelectType): self
    {
        $this->materialSelectType = $materialSelectType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus
     */
    public function getMaterialStatus(): ?string
    {
        return $this->materialStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringMaterialStatus $materialStatus
     * @return self
     */
    public function setMaterialStatus(?string $materialStatus): self
    {
        $this->materialStatus = $materialStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * 商品ID，仅商品全域/乘方计划支持
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * 商品ID，仅商品全域/乘方计划支持
     * @param string $productId
     * @return self
     */
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductKeyword(): ?string
    {
        return $this->productKeyword;
    }

    /**
     * @param string $productKeyword
     * @return self
     */
    public function setProductKeyword(?string $productKeyword): self
    {
        $this->productKeyword = $productKeyword;
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
     * 查询起始日期
     * @return string
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * 查询起始日期
     * @param string $startDate
     * @return self
     */
    public function setStartDate(?string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringVideoType
     */
    public function getVideoType(): ?string
    {
        return $this->videoType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10FilteringVideoType $videoType
     * @return self
     */
    public function setVideoType(?string $videoType): self
    {
        $this->videoType = $videoType;
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
        if ($this->endDate !== null) {
            $result['end_date'] = $this->endDate;
        }
        if ($this->materialSelectType !== null) {
            $result['material_select_type'] = $this->materialSelectType;
        }
        if ($this->materialStatus !== null) {
            $result['material_status'] = $this->materialStatus;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productKeyword !== null) {
            $result['product_keyword'] = $this->productKeyword;
        }
        if ($this->searchKeyword !== null) {
            $result['search_keyword'] = $this->searchKeyword;
        }
        if ($this->startDate !== null) {
            $result['start_date'] = $this->startDate;
        }
        if ($this->videoType !== null) {
            $result['video_type'] = $this->videoType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['analysis_type'] ?? null) !== null && is_array($v)) {
            $obj->analysisType = $v;
        }
        if (($v = $data['end_date'] ?? null) !== null) {
            $obj->endDate = (string) $v;
        }
        if (($v = $data['material_select_type'] ?? null) !== null) {
            $obj->materialSelectType = (string) $v;
        }
        if (($v = $data['material_status'] ?? null) !== null) {
            $obj->materialStatus = (string) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (string) $v;
        }
        if (($v = $data['product_keyword'] ?? null) !== null) {
            $obj->productKeyword = (string) $v;
        }
        if (($v = $data['search_keyword'] ?? null) !== null) {
            $obj->searchKeyword = (string) $v;
        }
        if (($v = $data['start_date'] ?? null) !== null) {
            $obj->startDate = (string) $v;
        }
        if (($v = $data['video_type'] ?? null) !== null) {
            $obj->videoType = (string) $v;
        }
        return $obj;
    }
}
