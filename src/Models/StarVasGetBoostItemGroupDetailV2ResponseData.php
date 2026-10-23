<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostItemGroupDetailV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataAllFlowStatInfo
     */
    protected ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataAllFlowStatInfo $allFlowStatInfo = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataBoostFlowStatInfo
     */
    protected ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataBoostFlowStatInfo $boostFlowStatInfo = null;

    /**
     * 指派单业务指标，最多返回50个指派单的信息
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInner[]
     */
    protected ?array $orderStatInfo = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataTaskInfo
     */
    protected ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataTaskInfo $taskInfo = null;

    /**
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataAllFlowStatInfo
     */
    public function getAllFlowStatInfo(): ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataAllFlowStatInfo
    {
        return $this->allFlowStatInfo;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataAllFlowStatInfo $allFlowStatInfo
     * @return self
     */
    public function setAllFlowStatInfo(?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataAllFlowStatInfo $allFlowStatInfo): self
    {
        $this->allFlowStatInfo = $allFlowStatInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataBoostFlowStatInfo
     */
    public function getBoostFlowStatInfo(): ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataBoostFlowStatInfo
    {
        return $this->boostFlowStatInfo;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataBoostFlowStatInfo $boostFlowStatInfo
     * @return self
     */
    public function setBoostFlowStatInfo(?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataBoostFlowStatInfo $boostFlowStatInfo): self
    {
        $this->boostFlowStatInfo = $boostFlowStatInfo;
        return $this;
    }

    /**
     * 指派单业务指标，最多返回50个指派单的信息
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInner[]
     */
    public function getOrderStatInfo(): ?array
    {
        return $this->orderStatInfo;
    }

    /**
     * 指派单业务指标，最多返回50个指派单的信息
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInner[] $orderStatInfo
     * @return self
     */
    public function setOrderStatInfo(?array $orderStatInfo): self
    {
        $this->orderStatInfo = $orderStatInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataTaskInfo
     */
    public function getTaskInfo(): ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataTaskInfo
    {
        return $this->taskInfo;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataTaskInfo $taskInfo
     * @return self
     */
    public function setTaskInfo(?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataTaskInfo $taskInfo): self
    {
        $this->taskInfo = $taskInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allFlowStatInfo !== null) {
            $result['all_flow_stat_info'] = $this->allFlowStatInfo;
        }
        if ($this->boostFlowStatInfo !== null) {
            $result['boost_flow_stat_info'] = $this->boostFlowStatInfo;
        }
        if ($this->orderStatInfo !== null) {
            $result['order_stat_info'] = $this->orderStatInfo;
        }
        if ($this->taskInfo !== null) {
            $result['task_info'] = $this->taskInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['all_flow_stat_info'] ?? null) !== null && is_array($v)) {
            $obj->allFlowStatInfo = \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataAllFlowStatInfo::fromArray($v);
        }
        if (($v = $data['boost_flow_stat_info'] ?? null) !== null && is_array($v)) {
            $obj->boostFlowStatInfo = \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataBoostFlowStatInfo::fromArray($v);
        }
        if (($v = $data['order_stat_info'] ?? null) !== null && is_array($v)) {
            $obj->orderStatInfo = array_map(fn ($vv) => \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['task_info'] ?? null) !== null && is_array($v)) {
            $obj->taskInfo = \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataTaskInfo::fromArray($v);
        }
        return $obj;
    }
}
