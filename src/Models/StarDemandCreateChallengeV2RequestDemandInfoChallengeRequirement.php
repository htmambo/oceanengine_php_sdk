<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateChallengeV2RequestDemandInfoChallengeRequirement implements \JsonSerializable
{
    /**
     * 福利相关（直播必选一个）
     * @var int[]
     */
    protected ?array $boonList = null;

    /**
     * 口播要求
     * @var string
     */
    protected ?string $broadcastDemand = null;

    /**
     * 口播次数
     * @var int
     */
    protected ?int $broadcastNum = null;

    /**
     * 补充要求
     * @var string
     */
    protected ?string $extraDemand = null;

    /**
     * 直播画面
     * @var int
     */
    protected ?int $liveSceenType = null;

    /**
     * 口播要求 60字内
     * @var string
     */
    protected ?string $oralDemand = null;

    /**
     * 其他福利
     * @var string
     */
    protected ?string $otherBoon = null;

    /**
     * 其他要求 60字内
     * @var string[]
     */
    protected ?array $otherDemand = null;

    /**
     * 镜头要求 60字内
     * @var string
     */
    protected ?string $sceneDemand = null;

    /**
     * @var string[]
     */
    protected ?array $strongRequirements = null;

    /**
     * 标题要求 80字内
     * @var string
     */
    protected ?string $titleDemand = null;

    /**
     * 福利相关（直播必选一个）
     * @return int[]
     */
    public function getBoonList(): ?array
    {
        return $this->boonList;
    }

    /**
     * 福利相关（直播必选一个）
     * @param int[] $boonList
     * @return self
     */
    public function setBoonList(?array $boonList): self
    {
        $this->boonList = $boonList;
        return $this;
    }

    /**
     * 口播要求
     * @return string
     */
    public function getBroadcastDemand(): ?string
    {
        return $this->broadcastDemand;
    }

    /**
     * 口播要求
     * @param string $broadcastDemand
     * @return self
     */
    public function setBroadcastDemand(?string $broadcastDemand): self
    {
        $this->broadcastDemand = $broadcastDemand;
        return $this;
    }

    /**
     * 口播次数
     * @return int
     */
    public function getBroadcastNum(): ?int
    {
        return $this->broadcastNum;
    }

    /**
     * 口播次数
     * @param int $broadcastNum
     * @return self
     */
    public function setBroadcastNum(?int $broadcastNum): self
    {
        $this->broadcastNum = $broadcastNum;
        return $this;
    }

    /**
     * 补充要求
     * @return string
     */
    public function getExtraDemand(): ?string
    {
        return $this->extraDemand;
    }

    /**
     * 补充要求
     * @param string $extraDemand
     * @return self
     */
    public function setExtraDemand(?string $extraDemand): self
    {
        $this->extraDemand = $extraDemand;
        return $this;
    }

    /**
     * 直播画面
     * @return int
     */
    public function getLiveSceenType(): ?int
    {
        return $this->liveSceenType;
    }

    /**
     * 直播画面
     * @param int $liveSceenType
     * @return self
     */
    public function setLiveSceenType(?int $liveSceenType): self
    {
        $this->liveSceenType = $liveSceenType;
        return $this;
    }

    /**
     * 口播要求 60字内
     * @return string
     */
    public function getOralDemand(): ?string
    {
        return $this->oralDemand;
    }

    /**
     * 口播要求 60字内
     * @param string $oralDemand
     * @return self
     */
    public function setOralDemand(?string $oralDemand): self
    {
        $this->oralDemand = $oralDemand;
        return $this;
    }

    /**
     * 其他福利
     * @return string
     */
    public function getOtherBoon(): ?string
    {
        return $this->otherBoon;
    }

    /**
     * 其他福利
     * @param string $otherBoon
     * @return self
     */
    public function setOtherBoon(?string $otherBoon): self
    {
        $this->otherBoon = $otherBoon;
        return $this;
    }

    /**
     * 其他要求 60字内
     * @return string[]
     */
    public function getOtherDemand(): ?array
    {
        return $this->otherDemand;
    }

    /**
     * 其他要求 60字内
     * @param string[] $otherDemand
     * @return self
     */
    public function setOtherDemand(?array $otherDemand): self
    {
        $this->otherDemand = $otherDemand;
        return $this;
    }

    /**
     * 镜头要求 60字内
     * @return string
     */
    public function getSceneDemand(): ?string
    {
        return $this->sceneDemand;
    }

    /**
     * 镜头要求 60字内
     * @param string $sceneDemand
     * @return self
     */
    public function setSceneDemand(?string $sceneDemand): self
    {
        $this->sceneDemand = $sceneDemand;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getStrongRequirements(): ?array
    {
        return $this->strongRequirements;
    }

    /**
     * @param string[] $strongRequirements
     * @return self
     */
    public function setStrongRequirements(?array $strongRequirements): self
    {
        $this->strongRequirements = $strongRequirements;
        return $this;
    }

    /**
     * 标题要求 80字内
     * @return string
     */
    public function getTitleDemand(): ?string
    {
        return $this->titleDemand;
    }

    /**
     * 标题要求 80字内
     * @param string $titleDemand
     * @return self
     */
    public function setTitleDemand(?string $titleDemand): self
    {
        $this->titleDemand = $titleDemand;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->boonList !== null) {
            $result['boon_list'] = $this->boonList;
        }
        if ($this->broadcastDemand !== null) {
            $result['broadcast_demand'] = $this->broadcastDemand;
        }
        if ($this->broadcastNum !== null) {
            $result['broadcast_num'] = $this->broadcastNum;
        }
        if ($this->extraDemand !== null) {
            $result['extra_demand'] = $this->extraDemand;
        }
        if ($this->liveSceenType !== null) {
            $result['live_sceen_type'] = $this->liveSceenType;
        }
        if ($this->oralDemand !== null) {
            $result['oral_demand'] = $this->oralDemand;
        }
        if ($this->otherBoon !== null) {
            $result['other_boon'] = $this->otherBoon;
        }
        if ($this->otherDemand !== null) {
            $result['other_demand'] = $this->otherDemand;
        }
        if ($this->sceneDemand !== null) {
            $result['scene_demand'] = $this->sceneDemand;
        }
        if ($this->strongRequirements !== null) {
            $result['strong_requirements'] = $this->strongRequirements;
        }
        if ($this->titleDemand !== null) {
            $result['title_demand'] = $this->titleDemand;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['boon_list'] ?? null) !== null && is_array($v)) {
            $obj->boonList = $v;
        }
        if (($v = $data['broadcast_demand'] ?? null) !== null) {
            $obj->broadcastDemand = (string) $v;
        }
        if (($v = $data['broadcast_num'] ?? null) !== null) {
            $obj->broadcastNum = (int) $v;
        }
        if (($v = $data['extra_demand'] ?? null) !== null) {
            $obj->extraDemand = (string) $v;
        }
        if (($v = $data['live_sceen_type'] ?? null) !== null) {
            $obj->liveSceenType = (int) $v;
        }
        if (($v = $data['oral_demand'] ?? null) !== null) {
            $obj->oralDemand = (string) $v;
        }
        if (($v = $data['other_boon'] ?? null) !== null) {
            $obj->otherBoon = (string) $v;
        }
        if (($v = $data['other_demand'] ?? null) !== null && is_array($v)) {
            $obj->otherDemand = $v;
        }
        if (($v = $data['scene_demand'] ?? null) !== null) {
            $obj->sceneDemand = (string) $v;
        }
        if (($v = $data['strong_requirements'] ?? null) !== null && is_array($v)) {
            $obj->strongRequirements = $v;
        }
        if (($v = $data['title_demand'] ?? null) !== null) {
            $obj->titleDemand = (string) $v;
        }
        return $obj;
    }
}
