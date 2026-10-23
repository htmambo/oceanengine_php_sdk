<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class GameAddictionIdGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\GameAddictionIdGetV30ResponseDataGameAddictionListInner[]
     */
    protected ?array $gameAddictionList = null;

    /**
     * @return \Oceanengine\Models\GameAddictionIdGetV30ResponseDataGameAddictionListInner[]
     */
    public function getGameAddictionList(): ?array
    {
        return $this->gameAddictionList;
    }

    /**
     * @param \Oceanengine\Models\GameAddictionIdGetV30ResponseDataGameAddictionListInner[] $gameAddictionList
     * @return self
     */
    public function setGameAddictionList(?array $gameAddictionList): self
    {
        $this->gameAddictionList = $gameAddictionList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->gameAddictionList !== null) {
            $result['game_addiction_list'] = $this->gameAddictionList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['game_addiction_list'] ?? null) !== null && is_array($v)) {
            $obj->gameAddictionList = array_map(fn ($vv) => \Oceanengine\Models\GameAddictionIdGetV30ResponseDataGameAddictionListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
