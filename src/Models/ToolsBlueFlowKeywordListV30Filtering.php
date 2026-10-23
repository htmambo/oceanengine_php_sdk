<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBlueFlowKeywordListV30Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $blueFlowKeywordName = null;

    /**
     * @var \Oceanengine\Models\ToolsBlueFlowKeywordListV30FilteringBlueFlowRecommendType
     */
    protected ?string $blueFlowRecommendType = null;

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
     * @return \Oceanengine\Models\ToolsBlueFlowKeywordListV30FilteringBlueFlowRecommendType
     */
    public function getBlueFlowRecommendType(): ?string
    {
        return $this->blueFlowRecommendType;
    }

    /**
     * @param \Oceanengine\Models\ToolsBlueFlowKeywordListV30FilteringBlueFlowRecommendType $blueFlowRecommendType
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
        if ($this->blueFlowKeywordName !== null) {
            $result['blue_flow_keyword_name'] = $this->blueFlowKeywordName;
        }
        if ($this->blueFlowRecommendType !== null) {
            $result['blue_flow_recommend_type'] = $this->blueFlowRecommendType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['blue_flow_keyword_name'] ?? null) !== null) {
            $obj->blueFlowKeywordName = (string) $v;
        }
        if (($v = $data['blue_flow_recommend_type'] ?? null) !== null) {
            $obj->blueFlowRecommendType = (string) $v;
        }
        return $obj;
    }
}
