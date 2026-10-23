<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoChallengeRequirement implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $oralDemand = null;

    /**
     * @var string[]
     */
    protected ?array $otherDemand = null;

    /**
     * @var string
     */
    protected ?string $sceneDemand = null;

    /**
     * @var string[]
     */
    protected ?array $strongRequirements = null;

    /**
     * @var string
     */
    protected ?string $titleDemand = null;

    /**
     * @return string
     */
    public function getOralDemand(): ?string
    {
        return $this->oralDemand;
    }

    /**
     * @param string $oralDemand
     * @return self
     */
    public function setOralDemand(?string $oralDemand): self
    {
        $this->oralDemand = $oralDemand;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOtherDemand(): ?array
    {
        return $this->otherDemand;
    }

    /**
     * @param string[] $otherDemand
     * @return self
     */
    public function setOtherDemand(?array $otherDemand): self
    {
        $this->otherDemand = $otherDemand;
        return $this;
    }

    /**
     * @return string
     */
    public function getSceneDemand(): ?string
    {
        return $this->sceneDemand;
    }

    /**
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
     * @return string
     */
    public function getTitleDemand(): ?string
    {
        return $this->titleDemand;
    }

    /**
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
        if ($this->oralDemand !== null) {
            $result['oral_demand'] = $this->oralDemand;
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
        if (($v = $data['oral_demand'] ?? null) !== null) {
            $obj->oralDemand = (string) $v;
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
