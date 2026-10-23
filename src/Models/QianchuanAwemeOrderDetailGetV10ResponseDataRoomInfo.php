<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderDetailGetV10ResponseDataRoomInfo implements \JsonSerializable
{
    /**
     * 直播间封面
     * @var string
     */
    protected ?string $roomCover = null;

    /**
     * 直播间id
     * @var int
     */
    protected ?int $roomId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus
     */
    protected ?string $roomStatus = null;

    /**
     * 直播间标题
     * @var string
     */
    protected ?string $roomTitle = null;

    /**
     * 直播间封面
     * @return string
     */
    public function getRoomCover(): ?string
    {
        return $this->roomCover;
    }

    /**
     * 直播间封面
     * @param string $roomCover
     * @return self
     */
    public function setRoomCover(?string $roomCover): self
    {
        $this->roomCover = $roomCover;
        return $this;
    }

    /**
     * 直播间id
     * @return int
     */
    public function getRoomId(): ?int
    {
        return $this->roomId;
    }

    /**
     * 直播间id
     * @param int $roomId
     * @return self
     */
    public function setRoomId(?int $roomId): self
    {
        $this->roomId = $roomId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus
     */
    public function getRoomStatus(): ?string
    {
        return $this->roomStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataRoomInfoRoomStatus $roomStatus
     * @return self
     */
    public function setRoomStatus(?string $roomStatus): self
    {
        $this->roomStatus = $roomStatus;
        return $this;
    }

    /**
     * 直播间标题
     * @return string
     */
    public function getRoomTitle(): ?string
    {
        return $this->roomTitle;
    }

    /**
     * 直播间标题
     * @param string $roomTitle
     * @return self
     */
    public function setRoomTitle(?string $roomTitle): self
    {
        $this->roomTitle = $roomTitle;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->roomCover !== null) {
            $result['room_cover'] = $this->roomCover;
        }
        if ($this->roomId !== null) {
            $result['room_id'] = $this->roomId;
        }
        if ($this->roomStatus !== null) {
            $result['room_status'] = $this->roomStatus;
        }
        if ($this->roomTitle !== null) {
            $result['room_title'] = $this->roomTitle;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['room_cover'] ?? null) !== null) {
            $obj->roomCover = (string) $v;
        }
        if (($v = $data['room_id'] ?? null) !== null) {
            $obj->roomId = (int) $v;
        }
        if (($v = $data['room_status'] ?? null) !== null) {
            $obj->roomStatus = (string) $v;
        }
        if (($v = $data['room_title'] ?? null) !== null) {
            $obj->roomTitle = (string) $v;
        }
        return $obj;
    }
}
