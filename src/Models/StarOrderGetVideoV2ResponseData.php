<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetVideoV2ResponseData implements \JsonSerializable
{
    /**
     * 任务视频信息
     * @var \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInner[]
     */
    protected ?array $orderVideoList = null;

    /**
     * 任务视频信息
     * @return \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInner[]
     */
    public function getOrderVideoList(): ?array
    {
        return $this->orderVideoList;
    }

    /**
     * 任务视频信息
     * @param \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInner[] $orderVideoList
     * @return self
     */
    public function setOrderVideoList(?array $orderVideoList): self
    {
        $this->orderVideoList = $orderVideoList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderVideoList !== null) {
            $result['order_video_list'] = $this->orderVideoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_video_list'] ?? null) !== null && is_array($v)) {
            $obj->orderVideoList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetVideoV2ResponseDataOrderVideoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
