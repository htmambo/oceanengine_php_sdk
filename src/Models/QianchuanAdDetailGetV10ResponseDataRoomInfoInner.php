<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataRoomInfoInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $anchorAvatar = null;

    /**
     * @var int
     */
    protected ?int $anchorId = null;

    /**
     * @var string
     */
    protected ?string $anchorName = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataRoomInfoRoomStatus
     */
    protected ?string $roomStatus = null;

    /**
     * @var string
     */
    protected ?string $roomTitle = null;

    /**
     * @return string
     */
    public function getAnchorAvatar(): ?string
    {
        return $this->anchorAvatar;
    }

    /**
     * @param string $anchorAvatar
     * @return self
     */
    public function setAnchorAvatar(?string $anchorAvatar): self
    {
        $this->anchorAvatar = $anchorAvatar;
        return $this;
    }

    /**
     * @return int
     */
    public function getAnchorId(): ?int
    {
        return $this->anchorId;
    }

    /**
     * @param int $anchorId
     * @return self
     */
    public function setAnchorId(?int $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorName(): ?string
    {
        return $this->anchorName;
    }

    /**
     * @param string $anchorName
     * @return self
     */
    public function setAnchorName(?string $anchorName): self
    {
        $this->anchorName = $anchorName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataRoomInfoRoomStatus
     */
    public function getRoomStatus(): ?string
    {
        return $this->roomStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataRoomInfoRoomStatus $roomStatus
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
        if ($this->anchorAvatar !== null) {
            $result['anchor_avatar'] = $this->anchorAvatar;
        }
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->anchorName !== null) {
            $result['anchor_name'] = $this->anchorName;
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
        if (($v = $data['anchor_avatar'] ?? null) !== null) {
            $obj->anchorAvatar = (string) $v;
        }
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (int) $v;
        }
        if (($v = $data['anchor_name'] ?? null) !== null) {
            $obj->anchorName = (string) $v;
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
