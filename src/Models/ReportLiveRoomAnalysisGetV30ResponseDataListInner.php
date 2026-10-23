<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportLiveRoomAnalysisGetV30ResponseDataListInner implements \JsonSerializable
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
    protected ?string $anchorNick = null;

    /**
     * @var \Oceanengine\Models\ReportLiveRoomAnalysisGetV30ResponseDataListInnerFields
     */
    protected ?\Oceanengine\Models\ReportLiveRoomAnalysisGetV30ResponseDataListInnerFields $fields = null;

    /**
     * @var string
     */
    protected ?string $roomCover = null;

    /**
     * @var string
     */
    protected ?string $roomCreateTime = null;

    /**
     * @var string
     */
    protected ?string $roomFinishTime = null;

    /**
     * @var int
     */
    protected ?int $roomId = null;

    /**
     * @var string
     */
    protected ?string $roomQrcode = null;

    /**
     * @var \Oceanengine\Models\ReportLiveRoomAnalysisGetV30DataListRoomStatus
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
    public function getAnchorNick(): ?string
    {
        return $this->anchorNick;
    }

    /**
     * @param string $anchorNick
     * @return self
     */
    public function setAnchorNick(?string $anchorNick): self
    {
        $this->anchorNick = $anchorNick;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportLiveRoomAnalysisGetV30ResponseDataListInnerFields
     */
    public function getFields(): ?\Oceanengine\Models\ReportLiveRoomAnalysisGetV30ResponseDataListInnerFields
    {
        return $this->fields;
    }

    /**
     * @param \Oceanengine\Models\ReportLiveRoomAnalysisGetV30ResponseDataListInnerFields $fields
     * @return self
     */
    public function setFields(?\Oceanengine\Models\ReportLiveRoomAnalysisGetV30ResponseDataListInnerFields $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomCover(): ?string
    {
        return $this->roomCover;
    }

    /**
     * @param string $roomCover
     * @return self
     */
    public function setRoomCover(?string $roomCover): self
    {
        $this->roomCover = $roomCover;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomCreateTime(): ?string
    {
        return $this->roomCreateTime;
    }

    /**
     * @param string $roomCreateTime
     * @return self
     */
    public function setRoomCreateTime(?string $roomCreateTime): self
    {
        $this->roomCreateTime = $roomCreateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoomFinishTime(): ?string
    {
        return $this->roomFinishTime;
    }

    /**
     * @param string $roomFinishTime
     * @return self
     */
    public function setRoomFinishTime(?string $roomFinishTime): self
    {
        $this->roomFinishTime = $roomFinishTime;
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
     * @return string
     */
    public function getRoomQrcode(): ?string
    {
        return $this->roomQrcode;
    }

    /**
     * @param string $roomQrcode
     * @return self
     */
    public function setRoomQrcode(?string $roomQrcode): self
    {
        $this->roomQrcode = $roomQrcode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportLiveRoomAnalysisGetV30DataListRoomStatus
     */
    public function getRoomStatus(): ?string
    {
        return $this->roomStatus;
    }

    /**
     * @param \Oceanengine\Models\ReportLiveRoomAnalysisGetV30DataListRoomStatus $roomStatus
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
        if ($this->anchorNick !== null) {
            $result['anchor_nick'] = $this->anchorNick;
        }
        if ($this->fields !== null) {
            $result['fields'] = $this->fields;
        }
        if ($this->roomCover !== null) {
            $result['room_cover'] = $this->roomCover;
        }
        if ($this->roomCreateTime !== null) {
            $result['room_create_time'] = $this->roomCreateTime;
        }
        if ($this->roomFinishTime !== null) {
            $result['room_finish_time'] = $this->roomFinishTime;
        }
        if ($this->roomId !== null) {
            $result['room_id'] = $this->roomId;
        }
        if ($this->roomQrcode !== null) {
            $result['room_qrcode'] = $this->roomQrcode;
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
        if (($v = $data['anchor_nick'] ?? null) !== null) {
            $obj->anchorNick = (string) $v;
        }
        if (($v = $data['fields'] ?? null) !== null && is_array($v)) {
            $obj->fields = \Oceanengine\Models\ReportLiveRoomAnalysisGetV30ResponseDataListInnerFields::fromArray($v);
        }
        if (($v = $data['room_cover'] ?? null) !== null) {
            $obj->roomCover = (string) $v;
        }
        if (($v = $data['room_create_time'] ?? null) !== null) {
            $obj->roomCreateTime = (string) $v;
        }
        if (($v = $data['room_finish_time'] ?? null) !== null) {
            $obj->roomFinishTime = (string) $v;
        }
        if (($v = $data['room_id'] ?? null) !== null) {
            $obj->roomId = (int) $v;
        }
        if (($v = $data['room_qrcode'] ?? null) !== null) {
            $obj->roomQrcode = (string) $v;
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
