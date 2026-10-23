<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataAdDataSupplementsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataSupplementsInnerGamesInner[]
     */
    protected ?array $games = null;

    /**
     * @var \Oceanengine\Models\CreativeDetailGetV30DataAdDataSupplementsSupplementType
     */
    protected ?string $supplementType = null;

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataSupplementsInnerGamesInner[]
     */
    public function getGames(): ?array
    {
        return $this->games;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataSupplementsInnerGamesInner[] $games
     * @return self
     */
    public function setGames(?array $games): self
    {
        $this->games = $games;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeDetailGetV30DataAdDataSupplementsSupplementType
     */
    public function getSupplementType(): ?string
    {
        return $this->supplementType;
    }

    /**
     * @param \Oceanengine\Models\CreativeDetailGetV30DataAdDataSupplementsSupplementType $supplementType
     * @return self
     */
    public function setSupplementType(?string $supplementType): self
    {
        $this->supplementType = $supplementType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->games !== null) {
            $result['games'] = $this->games;
        }
        if ($this->supplementType !== null) {
            $result['supplement_type'] = $this->supplementType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['games'] ?? null) !== null && is_array($v)) {
            $obj->games = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataAdDataSupplementsInnerGamesInner::fromArray($vv), $v);
        }
        if (($v = $data['supplement_type'] ?? null) !== null) {
            $obj->supplementType = (string) $v;
        }
        return $obj;
    }
}
