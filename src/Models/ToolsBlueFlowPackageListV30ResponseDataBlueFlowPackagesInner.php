<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBlueFlowPackageListV30ResponseDataBlueFlowPackagesInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsBlueFlowPackageListV30ResponseDataBlueFlowPackagesInnerBlueFlowKeywordInner[]
     */
    protected ?array $blueFlowKeyword = null;

    /**
     * @var int
     */
    protected ?int $blueFlowPackageId = null;

    /**
     * @var string
     */
    protected ?string $blueFlowPackageName = null;

    /**
     * @var int[]
     */
    protected ?array $estimatedCostRange = null;

    /**
     * @var int[]
     */
    protected ?array $estimatedReachTrafficRange = null;

    /**
     * @var string
     */
    protected ?string $flowCoverageRatio = null;

    /**
     * @var int[]
     */
    protected ?array $suggestedBidRange = null;

    /**
     * @return \Oceanengine\Models\ToolsBlueFlowPackageListV30ResponseDataBlueFlowPackagesInnerBlueFlowKeywordInner[]
     */
    public function getBlueFlowKeyword(): ?array
    {
        return $this->blueFlowKeyword;
    }

    /**
     * @param \Oceanengine\Models\ToolsBlueFlowPackageListV30ResponseDataBlueFlowPackagesInnerBlueFlowKeywordInner[] $blueFlowKeyword
     * @return self
     */
    public function setBlueFlowKeyword(?array $blueFlowKeyword): self
    {
        $this->blueFlowKeyword = $blueFlowKeyword;
        return $this;
    }

    /**
     * @return int
     */
    public function getBlueFlowPackageId(): ?int
    {
        return $this->blueFlowPackageId;
    }

    /**
     * @param int $blueFlowPackageId
     * @return self
     */
    public function setBlueFlowPackageId(?int $blueFlowPackageId): self
    {
        $this->blueFlowPackageId = $blueFlowPackageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlueFlowPackageName(): ?string
    {
        return $this->blueFlowPackageName;
    }

    /**
     * @param string $blueFlowPackageName
     * @return self
     */
    public function setBlueFlowPackageName(?string $blueFlowPackageName): self
    {
        $this->blueFlowPackageName = $blueFlowPackageName;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getEstimatedCostRange(): ?array
    {
        return $this->estimatedCostRange;
    }

    /**
     * @param int[] $estimatedCostRange
     * @return self
     */
    public function setEstimatedCostRange(?array $estimatedCostRange): self
    {
        $this->estimatedCostRange = $estimatedCostRange;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getEstimatedReachTrafficRange(): ?array
    {
        return $this->estimatedReachTrafficRange;
    }

    /**
     * @param int[] $estimatedReachTrafficRange
     * @return self
     */
    public function setEstimatedReachTrafficRange(?array $estimatedReachTrafficRange): self
    {
        $this->estimatedReachTrafficRange = $estimatedReachTrafficRange;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlowCoverageRatio(): ?string
    {
        return $this->flowCoverageRatio;
    }

    /**
     * @param string $flowCoverageRatio
     * @return self
     */
    public function setFlowCoverageRatio(?string $flowCoverageRatio): self
    {
        $this->flowCoverageRatio = $flowCoverageRatio;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getSuggestedBidRange(): ?array
    {
        return $this->suggestedBidRange;
    }

    /**
     * @param int[] $suggestedBidRange
     * @return self
     */
    public function setSuggestedBidRange(?array $suggestedBidRange): self
    {
        $this->suggestedBidRange = $suggestedBidRange;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->blueFlowKeyword !== null) {
            $result['blue_flow_keyword'] = $this->blueFlowKeyword;
        }
        if ($this->blueFlowPackageId !== null) {
            $result['blue_flow_package_id'] = $this->blueFlowPackageId;
        }
        if ($this->blueFlowPackageName !== null) {
            $result['blue_flow_package_name'] = $this->blueFlowPackageName;
        }
        if ($this->estimatedCostRange !== null) {
            $result['estimated_cost_range'] = $this->estimatedCostRange;
        }
        if ($this->estimatedReachTrafficRange !== null) {
            $result['estimated_reach_traffic_range'] = $this->estimatedReachTrafficRange;
        }
        if ($this->flowCoverageRatio !== null) {
            $result['flow_coverage_ratio'] = $this->flowCoverageRatio;
        }
        if ($this->suggestedBidRange !== null) {
            $result['suggested_bid_range'] = $this->suggestedBidRange;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['blue_flow_keyword'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowKeyword = array_map(fn ($vv) => \Oceanengine\Models\ToolsBlueFlowPackageListV30ResponseDataBlueFlowPackagesInnerBlueFlowKeywordInner::fromArray($vv), $v);
        }
        if (($v = $data['blue_flow_package_id'] ?? null) !== null) {
            $obj->blueFlowPackageId = (int) $v;
        }
        if (($v = $data['blue_flow_package_name'] ?? null) !== null) {
            $obj->blueFlowPackageName = (string) $v;
        }
        if (($v = $data['estimated_cost_range'] ?? null) !== null && is_array($v)) {
            $obj->estimatedCostRange = $v;
        }
        if (($v = $data['estimated_reach_traffic_range'] ?? null) !== null && is_array($v)) {
            $obj->estimatedReachTrafficRange = $v;
        }
        if (($v = $data['flow_coverage_ratio'] ?? null) !== null) {
            $obj->flowCoverageRatio = (string) $v;
        }
        if (($v = $data['suggested_bid_range'] ?? null) !== null && is_array($v)) {
            $obj->suggestedBidRange = $v;
        }
        return $obj;
    }
}
