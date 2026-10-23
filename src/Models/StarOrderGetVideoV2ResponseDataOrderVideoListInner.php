<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetVideoV2ResponseDataOrderVideoListInner implements \JsonSerializable
{
    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 视频列表
     * @var \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInnerVideoListInner[]
     */
    protected ?array $videoList = null;

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
     * 视频列表
     * @return \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInnerVideoListInner[]
     */
    public function getVideoList(): ?array
    {
        return $this->videoList;
    }

    /**
     * 视频列表
     * @param \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInnerVideoListInner[] $videoList
     * @return self
     */
    public function setVideoList(?array $videoList): self
    {
        $this->videoList = $videoList;
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
        if ($this->videoList !== null) {
            $result['video_list'] = $this->videoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['video_list'] ?? null) !== null && is_array($v)) {
            $obj->videoList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInnerVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
