<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpLevelGetV2ResponseDataSubTeamInner implements \JsonSerializable
{
    /**
     * @var array<string,mixed>[]
     */
    protected ?array $subTeam = null;

    /**
     * @var int
     */
    protected ?int $teamId = null;

    /**
     * @var string
     */
    protected ?string $teamName = null;

    /**
     * @return array<string,mixed>[]
     */
    public function getSubTeam(): ?array
    {
        return $this->subTeam;
    }

    /**
     * @param array<string,mixed>[] $subTeam
     * @return self
     */
    public function setSubTeam(?array $subTeam): self
    {
        $this->subTeam = $subTeam;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeamId(): ?int
    {
        return $this->teamId;
    }

    /**
     * @param int $teamId
     * @return self
     */
    public function setTeamId(?int $teamId): self
    {
        $this->teamId = $teamId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeamName(): ?string
    {
        return $this->teamName;
    }

    /**
     * @param string $teamName
     * @return self
     */
    public function setTeamName(?string $teamName): self
    {
        $this->teamName = $teamName;
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
        if ($this->teamId !== null) {
            $result['team_id'] = $this->teamId;
        }
        if ($this->teamName !== null) {
            $result['team_name'] = $this->teamName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['sub_team'] ?? null) !== null && is_array($v)) {
            $obj->subTeam = $v;
        }
        if (($v = $data['team_id'] ?? null) !== null) {
            $obj->teamId = (int) $v;
        }
        if (($v = $data['team_name'] ?? null) !== null) {
            $obj->teamName = (string) $v;
        }
        return $obj;
    }
}
