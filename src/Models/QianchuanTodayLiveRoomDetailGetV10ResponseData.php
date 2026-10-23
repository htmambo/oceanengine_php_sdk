<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanTodayLiveRoomDetailGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $awemeAvatar = null;

    /**
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var string[]
     */
    protected ?array $roomCover = null;

    /**
     * @var float
     */
    protected ?float $roomDelivery = null;

    /**
     * @var int
     */
    protected ?int $roomId = null;

    /**
     * @var \Oceanengine\Models\QianchuanTodayLiveRoomDetailGetV10DataRoomStatus
     */
    protected ?string $roomStatus = null;

    /**
     * @var string
     */
    protected ?string $roomTitle = null;

    /**
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * @return string[]
     */
    public function getAwemeAvatar(): ?array
    {
        return $this->awemeAvatar;
    }

    /**
     * @param string[] $awemeAvatar
     * @return self
     */
    public function setAwemeAvatar(?array $awemeAvatar): self
    {
        $this->awemeAvatar = $awemeAvatar;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

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
     * @return float
     */
    public function getRoomDelivery(): ?float
    {
        return $this->roomDelivery;
    }

    /**
     * @param float $roomDelivery
     * @return self
     */
    public function setRoomDelivery(?float $roomDelivery): self
    {
        $this->roomDelivery = $roomDelivery;
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
     * @return \Oceanengine\Models\QianchuanTodayLiveRoomDetailGetV10DataRoomStatus
     */
    public function getRoomStatus(): ?string
    {
        return $this->roomStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanTodayLiveRoomDetailGetV10DataRoomStatus $roomStatus
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
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeAvatar !== null) {
            $result['aweme_avatar'] = $this->awemeAvatar;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->roomCover !== null) {
            $result['room_cover'] = $this->roomCover;
        }
        if ($this->roomDelivery !== null) {
            $result['room_delivery'] = $this->roomDelivery;
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
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_avatar'] ?? null) !== null && is_array($v)) {
            $obj->awemeAvatar = $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['room_cover'] ?? null) !== null && is_array($v)) {
            $obj->roomCover = $v;
        }
        if (($v = $data['room_delivery'] ?? null) !== null) {
            $obj->roomDelivery = (float) $v;
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
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
