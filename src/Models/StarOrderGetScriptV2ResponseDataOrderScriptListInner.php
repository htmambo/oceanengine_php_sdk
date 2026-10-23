<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetScriptV2ResponseDataOrderScriptListInner implements \JsonSerializable
{
    /**
     * 订单id
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInnerScriptListInner[]
     */
    protected ?array $scriptList = null;

    /**
     * 订单id
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 订单id
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInnerScriptListInner[]
     */
    public function getScriptList(): ?array
    {
        return $this->scriptList;
    }

    /**
     * @param \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInnerScriptListInner[] $scriptList
     * @return self
     */
    public function setScriptList(?array $scriptList): self
    {
        $this->scriptList = $scriptList;
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
        if ($this->scriptList !== null) {
            $result['script_list'] = $this->scriptList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['script_list'] ?? null) !== null && is_array($v)) {
            $obj->scriptList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetScriptV2ResponseDataOrderScriptListInnerScriptListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
