<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderUpdateV2Request implements \JsonSerializable
{
    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\StarOrderUpdateV2RequestOrderInfoChanges
     */
    protected ?\Oceanengine\Models\StarOrderUpdateV2RequestOrderInfoChanges $orderInfoChanges = null;

    /**
     * 星图客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 任务ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 任务ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderUpdateV2RequestOrderInfoChanges
     */
    public function getOrderInfoChanges(): ?\Oceanengine\Models\StarOrderUpdateV2RequestOrderInfoChanges
    {
        return $this->orderInfoChanges;
    }

    /**
     * @param \Oceanengine\Models\StarOrderUpdateV2RequestOrderInfoChanges $orderInfoChanges
     * @return self
     */
    public function setOrderInfoChanges(?\Oceanengine\Models\StarOrderUpdateV2RequestOrderInfoChanges $orderInfoChanges): self
    {
        $this->orderInfoChanges = $orderInfoChanges;
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
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderInfoChanges !== null) {
            $result['order_info_changes'] = $this->orderInfoChanges;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_info_changes'] ?? null) !== null && is_array($v)) {
            $obj->orderInfoChanges = \Oceanengine\Models\StarOrderUpdateV2RequestOrderInfoChanges::fromArray($v);
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
