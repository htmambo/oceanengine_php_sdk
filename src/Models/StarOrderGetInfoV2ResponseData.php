<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetInfoV2ResponseData implements \JsonSerializable
{
    /**
     * 任务列表
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInner[]
     */
    protected ?array $orderList = null;

    /**
     * 任务列表
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInner[]
     */
    public function getOrderList(): ?array
    {
        return $this->orderList;
    }

    /**
     * 任务列表
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInner[] $orderList
     * @return self
     */
    public function setOrderList(?array $orderList): self
    {
        $this->orderList = $orderList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderList !== null) {
            $result['order_list'] = $this->orderList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_list'] ?? null) !== null && is_array($v)) {
            $obj->orderList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
