<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetComponentV2ResponseData implements \JsonSerializable
{
    /**
     * 任务组件信息
     * @var \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInner[]
     */
    protected ?array $orderComponentList = null;

    /**
     * 任务组件信息
     * @return \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInner[]
     */
    public function getOrderComponentList(): ?array
    {
        return $this->orderComponentList;
    }

    /**
     * 任务组件信息
     * @param \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInner[] $orderComponentList
     * @return self
     */
    public function setOrderComponentList(?array $orderComponentList): self
    {
        $this->orderComponentList = $orderComponentList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderComponentList !== null) {
            $result['order_component_list'] = $this->orderComponentList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_component_list'] ?? null) !== null && is_array($v)) {
            $obj->orderComponentList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetComponentV2ResponseDataOrderComponentListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
