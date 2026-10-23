<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImCardGetV30ResponseData implements \JsonSerializable
{
    /**
     * 卡片列表
     * @var \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInner[]
     */
    protected ?array $msgCardList = null;

    /**
     * 总条数
     * @var int
     */
    protected ?int $total = null;

    /**
     * 卡片列表
     * @return \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInner[]
     */
    public function getMsgCardList(): ?array
    {
        return $this->msgCardList;
    }

    /**
     * 卡片列表
     * @param \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInner[] $msgCardList
     * @return self
     */
    public function setMsgCardList(?array $msgCardList): self
    {
        $this->msgCardList = $msgCardList;
        return $this;
    }

    /**
     * 总条数
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * 总条数
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->msgCardList !== null) {
            $result['msg_card_list'] = $this->msgCardList;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['msg_card_list'] ?? null) !== null && is_array($v)) {
            $obj->msgCardList = array_map(fn ($vv) => \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInner::fromArray($vv), $v);
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
