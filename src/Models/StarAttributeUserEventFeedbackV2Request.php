<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarAttributeUserEventFeedbackV2Request implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $caid = null;

    /**
     * @var int
     */
    protected ?int $eventType = null;

    /**
     * @var string
     */
    protected ?string $gameName = null;

    /**
     * @var string
     */
    protected ?string $oaid = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @var int
     */
    protected ?int $timeStamp = null;

    /**
     * @return string
     */
    public function getCaid(): ?string
    {
        return $this->caid;
    }

    /**
     * @param string $caid
     * @return self
     */
    public function setCaid(?string $caid): self
    {
        $this->caid = $caid;
        return $this;
    }

    /**
     * @return int
     */
    public function getEventType(): ?int
    {
        return $this->eventType;
    }

    /**
     * @param int $eventType
     * @return self
     */
    public function setEventType(?int $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameName(): ?string
    {
        return $this->gameName;
    }

    /**
     * @param string $gameName
     * @return self
     */
    public function setGameName(?string $gameName): self
    {
        $this->gameName = $gameName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOaid(): ?string
    {
        return $this->oaid;
    }

    /**
     * @param string $oaid
     * @return self
     */
    public function setOaid(?string $oaid): self
    {
        $this->oaid = $oaid;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeStamp(): ?int
    {
        return $this->timeStamp;
    }

    /**
     * @param int $timeStamp
     * @return self
     */
    public function setTimeStamp(?int $timeStamp): self
    {
        $this->timeStamp = $timeStamp;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->caid !== null) {
            $result['caid'] = $this->caid;
        }
        if ($this->eventType !== null) {
            $result['event_type'] = $this->eventType;
        }
        if ($this->gameName !== null) {
            $result['game_name'] = $this->gameName;
        }
        if ($this->oaid !== null) {
            $result['oaid'] = $this->oaid;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->timeStamp !== null) {
            $result['time_stamp'] = $this->timeStamp;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['caid'] ?? null) !== null) {
            $obj->caid = (string) $v;
        }
        if (($v = $data['event_type'] ?? null) !== null) {
            $obj->eventType = (int) $v;
        }
        if (($v = $data['game_name'] ?? null) !== null) {
            $obj->gameName = (string) $v;
        }
        if (($v = $data['oaid'] ?? null) !== null) {
            $obj->oaid = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['time_stamp'] ?? null) !== null) {
            $obj->timeStamp = (int) $v;
        }
        return $obj;
    }
}
