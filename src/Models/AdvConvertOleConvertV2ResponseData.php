<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvConvertOleConvertV2ResponseData implements \JsonSerializable
{
    /**
     * 订单明细
     * @var array<string,mixed>[]
     */
    protected ?array $orderInfos = null;

    /**
     * 订单明细
     * @return array<string,mixed>[]
     */
    public function getOrderInfos(): ?array
    {
        return $this->orderInfos;
    }

    /**
     * 订单明细
     * @param array<string,mixed>[] $orderInfos
     * @return self
     */
    public function setOrderInfos(?array $orderInfos): self
    {
        $this->orderInfos = $orderInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderInfos !== null) {
            $result['order_infos'] = $this->orderInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_infos'] ?? null) !== null && is_array($v)) {
            $obj->orderInfos = $v;
        }
        return $obj;
    }
}
