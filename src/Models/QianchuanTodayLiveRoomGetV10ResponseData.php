<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanTodayLiveRoomGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataRoomListInner[]
     */
    protected ?array $roomList = null;

    /**
     * @return \Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataRoomListInner[]
     */
    public function getRoomList(): ?array
    {
        return $this->roomList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataRoomListInner[] $roomList
     * @return self
     */
    public function setRoomList(?array $roomList): self
    {
        $this->roomList = $roomList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->roomList !== null) {
            $result['room_list'] = $this->roomList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['room_list'] ?? null) !== null && is_array($v)) {
            $obj->roomList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanTodayLiveRoomGetV10ResponseDataRoomListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
