<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetLiveV2ResponseDataOrderLivestreamListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarOrderGetLiveV2ResponseDataOrderLivestreamListInnerLivestreamListInner[]
     */
    protected ?array $livestreamList = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 直播总时长
     * @var int
     */
    protected ?int $totalDuration = null;

    /**
     * @return \Oceanengine\Models\StarOrderGetLiveV2ResponseDataOrderLivestreamListInnerLivestreamListInner[]
     */
    public function getLivestreamList(): ?array
    {
        return $this->livestreamList;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetLiveV2ResponseDataOrderLivestreamListInnerLivestreamListInner[] $livestreamList
     * @return self
     */
    public function setLivestreamList(?array $livestreamList): self
    {
        $this->livestreamList = $livestreamList;
        return $this;
    }

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
     * 直播总时长
     * @return int
     */
    public function getTotalDuration(): ?int
    {
        return $this->totalDuration;
    }

    /**
     * 直播总时长
     * @param int $totalDuration
     * @return self
     */
    public function setTotalDuration(?int $totalDuration): self
    {
        $this->totalDuration = $totalDuration;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->livestreamList !== null) {
            $result['livestream_list'] = $this->livestreamList;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->totalDuration !== null) {
            $result['total_duration'] = $this->totalDuration;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['livestream_list'] ?? null) !== null && is_array($v)) {
            $obj->livestreamList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetLiveV2ResponseDataOrderLivestreamListInnerLivestreamListInner::fromArray($vv), $v);
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['total_duration'] ?? null) !== null) {
            $obj->totalDuration = (int) $v;
        }
        return $obj;
    }
}
