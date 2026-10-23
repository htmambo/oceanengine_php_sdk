<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpLevelGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EbpLevelGetV2ResponseDataSubTeamInner[]
     */
    protected ?array $subTeam = null;

    /**
     * @return \Oceanengine\Models\EbpLevelGetV2ResponseDataSubTeamInner[]
     */
    public function getSubTeam(): ?array
    {
        return $this->subTeam;
    }

    /**
     * @param \Oceanengine\Models\EbpLevelGetV2ResponseDataSubTeamInner[] $subTeam
     * @return self
     */
    public function setSubTeam(?array $subTeam): self
    {
        $this->subTeam = $subTeam;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->subTeam !== null) {
            $result['sub_team'] = $this->subTeam;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['sub_team'] ?? null) !== null && is_array($v)) {
            $obj->subTeam = array_map(fn ($vv) => \Oceanengine\Models\EbpLevelGetV2ResponseDataSubTeamInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
