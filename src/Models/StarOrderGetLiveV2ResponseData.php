<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetLiveV2ResponseData implements \JsonSerializable
{
    /**
     * 任务直播信息
     * @var \Oceanengine\Models\StarOrderGetLiveV2ResponseDataOrderLivestreamListInner[]
     */
    protected ?array $orderLivestreamList = null;

    /**
     * 任务直播信息
     * @return \Oceanengine\Models\StarOrderGetLiveV2ResponseDataOrderLivestreamListInner[]
     */
    public function getOrderLivestreamList(): ?array
    {
        return $this->orderLivestreamList;
    }

    /**
     * 任务直播信息
     * @param \Oceanengine\Models\StarOrderGetLiveV2ResponseDataOrderLivestreamListInner[] $orderLivestreamList
     * @return self
     */
    public function setOrderLivestreamList(?array $orderLivestreamList): self
    {
        $this->orderLivestreamList = $orderLivestreamList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderLivestreamList !== null) {
            $result['order_livestream_list'] = $this->orderLivestreamList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_livestream_list'] ?? null) !== null && is_array($v)) {
            $obj->orderLivestreamList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetLiveV2ResponseDataOrderLivestreamListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
