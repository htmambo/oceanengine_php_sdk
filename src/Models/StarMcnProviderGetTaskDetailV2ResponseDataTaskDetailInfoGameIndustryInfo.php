<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfo implements \JsonSerializable
{
    /**
     * 游戏节点时间
     * @var int
     */
    protected ?int $gameNodeTime = null;

    /**
     * 游戏节点
     * @var int
     */
    protected ?int $gameNodeType = null;

    /**
     * 游戏卖点
     * @var \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfoGamePointsInner[]
     */
    protected ?array $gamePoints = null;

    /**
     * 游戏类型 id
     * @var int
     */
    protected ?int $gameType = null;

    /**
     * 游戏类型 名称
     * @var string
     */
    protected ?string $gameTypeName = null;

    /**
     * 相似游戏h
     * @var string[]
     */
    protected ?array $sameGameNames = null;

    /**
     * 游戏节点时间
     * @return int
     */
    public function getGameNodeTime(): ?int
    {
        return $this->gameNodeTime;
    }

    /**
     * 游戏节点时间
     * @param int $gameNodeTime
     * @return self
     */
    public function setGameNodeTime(?int $gameNodeTime): self
    {
        $this->gameNodeTime = $gameNodeTime;
        return $this;
    }

    /**
     * 游戏节点
     * @return int
     */
    public function getGameNodeType(): ?int
    {
        return $this->gameNodeType;
    }

    /**
     * 游戏节点
     * @param int $gameNodeType
     * @return self
     */
    public function setGameNodeType(?int $gameNodeType): self
    {
        $this->gameNodeType = $gameNodeType;
        return $this;
    }

    /**
     * 游戏卖点
     * @return \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfoGamePointsInner[]
     */
    public function getGamePoints(): ?array
    {
        return $this->gamePoints;
    }

    /**
     * 游戏卖点
     * @param \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfoGamePointsInner[] $gamePoints
     * @return self
     */
    public function setGamePoints(?array $gamePoints): self
    {
        $this->gamePoints = $gamePoints;
        return $this;
    }

    /**
     * 游戏类型 id
     * @return int
     */
    public function getGameType(): ?int
    {
        return $this->gameType;
    }

    /**
     * 游戏类型 id
     * @param int $gameType
     * @return self
     */
    public function setGameType(?int $gameType): self
    {
        $this->gameType = $gameType;
        return $this;
    }

    /**
     * 游戏类型 名称
     * @return string
     */
    public function getGameTypeName(): ?string
    {
        return $this->gameTypeName;
    }

    /**
     * 游戏类型 名称
     * @param string $gameTypeName
     * @return self
     */
    public function setGameTypeName(?string $gameTypeName): self
    {
        $this->gameTypeName = $gameTypeName;
        return $this;
    }

    /**
     * 相似游戏h
     * @return string[]
     */
    public function getSameGameNames(): ?array
    {
        return $this->sameGameNames;
    }

    /**
     * 相似游戏h
     * @param string[] $sameGameNames
     * @return self
     */
    public function setSameGameNames(?array $sameGameNames): self
    {
        $this->sameGameNames = $sameGameNames;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->gameNodeTime !== null) {
            $result['game_node_time'] = $this->gameNodeTime;
        }
        if ($this->gameNodeType !== null) {
            $result['game_node_type'] = $this->gameNodeType;
        }
        if ($this->gamePoints !== null) {
            $result['game_points'] = $this->gamePoints;
        }
        if ($this->gameType !== null) {
            $result['game_type'] = $this->gameType;
        }
        if ($this->gameTypeName !== null) {
            $result['game_type_name'] = $this->gameTypeName;
        }
        if ($this->sameGameNames !== null) {
            $result['same_game_names'] = $this->sameGameNames;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['game_node_time'] ?? null) !== null) {
            $obj->gameNodeTime = (int) $v;
        }
        if (($v = $data['game_node_type'] ?? null) !== null) {
            $obj->gameNodeType = (int) $v;
        }
        if (($v = $data['game_points'] ?? null) !== null && is_array($v)) {
            $obj->gamePoints = array_map(fn ($vv) => \Oceanengine\Models\StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoGameIndustryInfoGamePointsInner::fromArray($vv), $v);
        }
        if (($v = $data['game_type'] ?? null) !== null) {
            $obj->gameType = (int) $v;
        }
        if (($v = $data['game_type_name'] ?? null) !== null) {
            $obj->gameTypeName = (string) $v;
        }
        if (($v = $data['same_game_names'] ?? null) !== null && is_array($v)) {
            $obj->sameGameNames = $v;
        }
        return $obj;
    }
}
