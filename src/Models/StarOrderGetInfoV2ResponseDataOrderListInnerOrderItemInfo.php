<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfo implements \JsonSerializable
{
    /**
     * 需求所选达人列表
     * @var \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfoAuthorListInner[]
     */
    protected ?array $authorList = null;

    /**
     * 任务付款类型 (1)：全款； (2)：预付
     * @var int
     */
    protected ?int $orderType = null;

    /**
     * 需求所选达人列表
     * @return \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfoAuthorListInner[]
     */
    public function getAuthorList(): ?array
    {
        return $this->authorList;
    }

    /**
     * 需求所选达人列表
     * @param \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfoAuthorListInner[] $authorList
     * @return self
     */
    public function setAuthorList(?array $authorList): self
    {
        $this->authorList = $authorList;
        return $this;
    }

    /**
     * 任务付款类型 (1)：全款； (2)：预付
     * @return int
     */
    public function getOrderType(): ?int
    {
        return $this->orderType;
    }

    /**
     * 任务付款类型 (1)：全款； (2)：预付
     * @param int $orderType
     * @return self
     */
    public function setOrderType(?int $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorList !== null) {
            $result['author_list'] = $this->authorList;
        }
        if ($this->orderType !== null) {
            $result['order_type'] = $this->orderType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_list'] ?? null) !== null && is_array($v)) {
            $obj->authorList = array_map(fn ($vv) => \Oceanengine\Models\StarOrderGetInfoV2ResponseDataOrderListInnerOrderItemInfoAuthorListInner::fromArray($vv), $v);
        }
        if (($v = $data['order_type'] ?? null) !== null) {
            $obj->orderType = (int) $v;
        }
        return $obj;
    }
}
