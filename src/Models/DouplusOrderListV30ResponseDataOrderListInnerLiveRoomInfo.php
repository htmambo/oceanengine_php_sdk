<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOrderListV30ResponseDataOrderListInnerLiveRoomInfo implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $roomCover = null;

    /**
     * @var int
     */
    protected ?int $roomId = null;

    /**
     * @var \Oceanengine\Models\DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus
     */
    protected ?string $roomStatus = null;

    /**
     * @var string
     */
    protected ?string $roomTitle = null;

    /**
     * @return string[]
     */
    public function getRoomCover(): ?array
    {
        return $this->roomCover;
    }

    /**
     * @param string[] $roomCover
     * @return self
     */
    public function setRoomCover(?array $roomCover): self
    {
        $this->roomCover = $roomCover;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomId(): ?int
    {
        return $this->roomId;
    }

    /**
     * @param int $roomId
     * @return self
     */
    public function setRoomId(?int $roomId): self
    {
        $this->roomId = $roomId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus
     */
    public function getRoomStatus(): ?string
    {
        return $this->roomStatus;
    }

    /**
     * @param \Oceanengine\Models\DouplusOrderListV30DataOrderListLiveRoomInfoRoomStatus $roomStatus
     * @return self
     */
    public function setRoomStatus(?string $roomStatus): self
    {
        $this->roomStatus = $roomStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomTitle(): ?string
    {
        return $this->roomTitle;
    }

    /**
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
        if (($v = $data['room_cover'] ?? null) !== null && is_array($v)) {
            $obj->roomCover = $v;
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
