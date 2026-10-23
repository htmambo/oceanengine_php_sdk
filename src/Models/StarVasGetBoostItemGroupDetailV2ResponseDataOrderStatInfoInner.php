<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerAllFlowStatInfo
     */
    protected ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerAllFlowStatInfo $allFlowStatInfo = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerBoostFlowStatInfo
     */
    protected ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerBoostFlowStatInfo $boostFlowStatInfo = null;

    /**
     * @var \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerOrderInfo
     */
    protected ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerOrderInfo $orderInfo = null;

    /**
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerAllFlowStatInfo
     */
    public function getAllFlowStatInfo(): ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerAllFlowStatInfo
    {
        return $this->allFlowStatInfo;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerAllFlowStatInfo $allFlowStatInfo
     * @return self
     */
    public function setAllFlowStatInfo(?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerAllFlowStatInfo $allFlowStatInfo): self
    {
        $this->allFlowStatInfo = $allFlowStatInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerBoostFlowStatInfo
     */
    public function getBoostFlowStatInfo(): ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerBoostFlowStatInfo
    {
        return $this->boostFlowStatInfo;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerBoostFlowStatInfo $boostFlowStatInfo
     * @return self
     */
    public function setBoostFlowStatInfo(?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerBoostFlowStatInfo $boostFlowStatInfo): self
    {
        $this->boostFlowStatInfo = $boostFlowStatInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerOrderInfo
     */
    public function getOrderInfo(): ?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerOrderInfo
    {
        return $this->orderInfo;
    }

    /**
     * @param \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerOrderInfo $orderInfo
     * @return self
     */
    public function setOrderInfo(?\Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerOrderInfo $orderInfo): self
    {
        $this->orderInfo = $orderInfo;
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
        if ($this->orderInfo !== null) {
            $result['order_info'] = $this->orderInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['all_flow_stat_info'] ?? null) !== null && is_array($v)) {
            $obj->allFlowStatInfo = \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerAllFlowStatInfo::fromArray($v);
        }
        if (($v = $data['boost_flow_stat_info'] ?? null) !== null && is_array($v)) {
            $obj->boostFlowStatInfo = \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerBoostFlowStatInfo::fromArray($v);
        }
        if (($v = $data['order_info'] ?? null) !== null && is_array($v)) {
            $obj->orderInfo = \Oceanengine\Models\StarVasGetBoostItemGroupDetailV2ResponseDataOrderStatInfoInnerOrderInfo::fromArray($v);
        }
        return $obj;
    }
}
