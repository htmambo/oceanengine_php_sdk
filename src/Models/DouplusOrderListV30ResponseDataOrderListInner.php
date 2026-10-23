<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderListV30ResponseDataOrderListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInner[]
     */
    protected ?array $adList = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerItemInfoListInner[]
     */
    protected ?array $itemInfoList = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerLiveRoomInfo
     */
    protected ?\Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerLiveRoomInfo $liveRoomInfo = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerOrder
     */
    protected ?\Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerOrder $order = null;

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInner[]
     */
    public function getAdList(): ?array
    {
        return $this->adList;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInner[] $adList
     * @return self
     */
    public function setAdList(?array $adList): self
    {
        $this->adList = $adList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerItemInfoListInner[]
     */
    public function getItemInfoList(): ?array
    {
        return $this->itemInfoList;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerItemInfoListInner[] $itemInfoList
     * @return self
     */
    public function setItemInfoList(?array $itemInfoList): self
    {
        $this->itemInfoList = $itemInfoList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerLiveRoomInfo
     */
    public function getLiveRoomInfo(): ?\Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerLiveRoomInfo
    {
        return $this->liveRoomInfo;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerLiveRoomInfo $liveRoomInfo
     * @return self
     */
    public function setLiveRoomInfo(?\Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerLiveRoomInfo $liveRoomInfo): self
    {
        $this->liveRoomInfo = $liveRoomInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerOrder
     */
    public function getOrder(): ?\Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerOrder
    {
        return $this->order;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerOrder $order
     * @return self
     */
    public function setOrder(?\Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerOrder $order): self
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adList !== null) {
            $result['ad_list'] = $this->adList;
        }
        if ($this->itemInfoList !== null) {
            $result['item_info_list'] = $this->itemInfoList;
        }
        if ($this->liveRoomInfo !== null) {
            $result['live_room_info'] = $this->liveRoomInfo;
        }
        if ($this->order !== null) {
            $result['order'] = $this->order;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_list'] ?? null) !== null && is_array($v)) {
            $obj->adList = array_map(fn ($vv) => \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerAdListInner::fromArray($vv), $v);
        }
        if (($v = $data['item_info_list'] ?? null) !== null && is_array($v)) {
            $obj->itemInfoList = array_map(fn ($vv) => \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerItemInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['live_room_info'] ?? null) !== null && is_array($v)) {
            $obj->liveRoomInfo = \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerLiveRoomInfo::fromArray($v);
        }
        if (($v = $data['order'] ?? null) !== null && is_array($v)) {
            $obj->order = \Oceanengine\Models\DouplusOrderListV30ResponseDataOrderListInnerOrder::fromArray($v);
        }
        return $obj;
    }
}
