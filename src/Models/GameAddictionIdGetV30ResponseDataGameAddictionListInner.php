<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class GameAddictionIdGetV30ResponseDataGameAddictionListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $gameAddictionId = null;

    /**
     * @var string
     */
    protected ?string $gameAddictionName = null;

    /**
     * @var string
     */
    protected ?string $originEvent = null;

    /**
     * @var \Oceanengine\Models\GameAddictionIdGetV30DataGameAddictionListSuggestion
     */
    protected ?string $suggestion = null;

    /**
     * @return string
     */
    public function getGameAddictionId(): ?string
    {
        return $this->gameAddictionId;
    }

    /**
     * @param string $gameAddictionId
     * @return self
     */
    public function setGameAddictionId(?string $gameAddictionId): self
    {
        $this->gameAddictionId = $gameAddictionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameAddictionName(): ?string
    {
        return $this->gameAddictionName;
    }

    /**
     * @param string $gameAddictionName
     * @return self
     */
    public function setGameAddictionName(?string $gameAddictionName): self
    {
        $this->gameAddictionName = $gameAddictionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginEvent(): ?string
    {
        return $this->originEvent;
    }

    /**
     * @param string $originEvent
     * @return self
     */
    public function setOriginEvent(?string $originEvent): self
    {
        $this->originEvent = $originEvent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\GameAddictionIdGetV30DataGameAddictionListSuggestion
     */
    public function getSuggestion(): ?string
    {
        return $this->suggestion;
    }

    /**
     * @param \Oceanengine\Models\GameAddictionIdGetV30DataGameAddictionListSuggestion $suggestion
     * @return self
     */
    public function setSuggestion(?string $suggestion): self
    {
        $this->suggestion = $suggestion;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->gameAddictionId !== null) {
            $result['game_addiction_id'] = $this->gameAddictionId;
        }
        if ($this->gameAddictionName !== null) {
            $result['game_addiction_name'] = $this->gameAddictionName;
        }
        if ($this->originEvent !== null) {
            $result['origin_event'] = $this->originEvent;
        }
        if ($this->suggestion !== null) {
            $result['suggestion'] = $this->suggestion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['game_addiction_id'] ?? null) !== null) {
            $obj->gameAddictionId = (string) $v;
        }
        if (($v = $data['game_addiction_name'] ?? null) !== null) {
            $obj->gameAddictionName = (string) $v;
        }
        if (($v = $data['origin_event'] ?? null) !== null) {
            $obj->originEvent = (string) $v;
        }
        if (($v = $data['suggestion'] ?? null) !== null) {
            $obj->suggestion = (string) $v;
        }
        return $obj;
    }
}
