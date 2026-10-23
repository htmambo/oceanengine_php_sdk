<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBlueFlowPackageListV30ResponseDataBlueFlowPackagesInnerBlueFlowKeywordInner implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $blueFlowKeywordEstimatedCostRange = null;

    /**
     * @var string
     */
    protected ?string $blueFlowKeywordName = null;

    /**
     * @var string[]
     */
    protected ?array $blueFlowKeywordTopQueryWordList = null;

    /**
     * @var \Oceanengine\Models\ToolsBlueFlowPackageListV30DataBlueFlowPackagesBlueFlowKeywordBlueFlowRecommendType
     */
    protected ?string $blueFlowRecommendType = null;

    /**
     * @return int[]
     */
    public function getBlueFlowKeywordEstimatedCostRange(): ?array
    {
        return $this->blueFlowKeywordEstimatedCostRange;
    }

    /**
     * @param int[] $blueFlowKeywordEstimatedCostRange
     * @return self
     */
    public function setBlueFlowKeywordEstimatedCostRange(?array $blueFlowKeywordEstimatedCostRange): self
    {
        $this->blueFlowKeywordEstimatedCostRange = $blueFlowKeywordEstimatedCostRange;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlueFlowKeywordName(): ?string
    {
        return $this->blueFlowKeywordName;
    }

    /**
     * @param string $blueFlowKeywordName
     * @return self
     */
    public function setBlueFlowKeywordName(?string $blueFlowKeywordName): self
    {
        $this->blueFlowKeywordName = $blueFlowKeywordName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getBlueFlowKeywordTopQueryWordList(): ?array
    {
        return $this->blueFlowKeywordTopQueryWordList;
    }

    /**
     * @param string[] $blueFlowKeywordTopQueryWordList
     * @return self
     */
    public function setBlueFlowKeywordTopQueryWordList(?array $blueFlowKeywordTopQueryWordList): self
    {
        $this->blueFlowKeywordTopQueryWordList = $blueFlowKeywordTopQueryWordList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsBlueFlowPackageListV30DataBlueFlowPackagesBlueFlowKeywordBlueFlowRecommendType
     */
    public function getBlueFlowRecommendType(): ?string
    {
        return $this->blueFlowRecommendType;
    }

    /**
     * @param \Oceanengine\Models\ToolsBlueFlowPackageListV30DataBlueFlowPackagesBlueFlowKeywordBlueFlowRecommendType $blueFlowRecommendType
     * @return self
     */
    public function setBlueFlowRecommendType(?string $blueFlowRecommendType): self
    {
        $this->blueFlowRecommendType = $blueFlowRecommendType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->blueFlowKeywordEstimatedCostRange !== null) {
            $result['blue_flow_keyword_estimated_cost_range'] = $this->blueFlowKeywordEstimatedCostRange;
        }
        if ($this->blueFlowKeywordName !== null) {
            $result['blue_flow_keyword_name'] = $this->blueFlowKeywordName;
        }
        if ($this->blueFlowKeywordTopQueryWordList !== null) {
            $result['blue_flow_keyword_top_query_word_list'] = $this->blueFlowKeywordTopQueryWordList;
        }
        if ($this->blueFlowRecommendType !== null) {
            $result['blue_flow_recommend_type'] = $this->blueFlowRecommendType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['blue_flow_keyword_estimated_cost_range'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowKeywordEstimatedCostRange = $v;
        }
        if (($v = $data['blue_flow_keyword_name'] ?? null) !== null) {
            $obj->blueFlowKeywordName = (string) $v;
        }
        if (($v = $data['blue_flow_keyword_top_query_word_list'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowKeywordTopQueryWordList = $v;
        }
        if (($v = $data['blue_flow_recommend_type'] ?? null) !== null) {
            $obj->blueFlowRecommendType = (string) $v;
        }
        return $obj;
    }
}
