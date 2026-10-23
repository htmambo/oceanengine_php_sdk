<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfo $demandInfo = null;

    /**
     * @var \Oceanengine\Models\StarDemandCreateAssignV2RequestOrderItemInfo
     */
    protected ?\Oceanengine\Models\StarDemandCreateAssignV2RequestOrderItemInfo $orderItemInfo = null;

    /**
     * 星图客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfo
     */
    public function getDemandInfo(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfo
    {
        return $this->demandInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfo $demandInfo
     * @return self
     */
    public function setDemandInfo(?\Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfo $demandInfo): self
    {
        $this->demandInfo = $demandInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemandCreateAssignV2RequestOrderItemInfo
     */
    public function getOrderItemInfo(): ?\Oceanengine\Models\StarDemandCreateAssignV2RequestOrderItemInfo
    {
        return $this->orderItemInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemandCreateAssignV2RequestOrderItemInfo $orderItemInfo
     * @return self
     */
    public function setOrderItemInfo(?\Oceanengine\Models\StarDemandCreateAssignV2RequestOrderItemInfo $orderItemInfo): self
    {
        $this->orderItemInfo = $orderItemInfo;
        return $this;
    }

    /**
     * 星图客户ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 星图客户ID
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->demandInfo !== null) {
            $result['demand_info'] = $this->demandInfo;
        }
        if ($this->orderItemInfo !== null) {
            $result['order_item_info'] = $this->orderItemInfo;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['demand_info'] ?? null) !== null && is_array($v)) {
            $obj->demandInfo = \Oceanengine\Models\StarDemandCreateAssignV2RequestDemandInfo::fromArray($v);
        }
        if (($v = $data['order_item_info'] ?? null) !== null && is_array($v)) {
            $obj->orderItemInfo = \Oceanengine\Models\StarDemandCreateAssignV2RequestOrderItemInfo::fromArray($v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
