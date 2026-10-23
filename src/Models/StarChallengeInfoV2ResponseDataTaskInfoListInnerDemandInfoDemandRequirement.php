<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoDemandRequirement implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $detailDemand = null;

    /**
     * @var string
     */
    protected ?string $music = null;

    /**
     * @var string
     */
    protected ?string $otherDemand = null;

    /**
     * @var string
     */
    protected ?string $propDemand = null;

    /**
     * @var string
     */
    protected ?string $sceneDemand = null;

    /**
     * @var string
     */
    protected ?string $scriptDemand = null;

    /**
     * @var string
     */
    protected ?string $specialTopic = null;

    /**
     * @return string
     */
    public function getDetailDemand(): ?string
    {
        return $this->detailDemand;
    }

    /**
     * @param string $detailDemand
     * @return self
     */
    public function setDetailDemand(?string $detailDemand): self
    {
        $this->detailDemand = $detailDemand;
        return $this;
    }

    /**
     * @return string
     */
    public function getMusic(): ?string
    {
        return $this->music;
    }

    /**
     * @param string $music
     * @return self
     */
    public function setMusic(?string $music): self
    {
        $this->music = $music;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherDemand(): ?string
    {
        return $this->otherDemand;
    }

    /**
     * @param string $otherDemand
     * @return self
     */
    public function setOtherDemand(?string $otherDemand): self
    {
        $this->otherDemand = $otherDemand;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropDemand(): ?string
    {
        return $this->propDemand;
    }

    /**
     * @param string $propDemand
     * @return self
     */
    public function setPropDemand(?string $propDemand): self
    {
        $this->propDemand = $propDemand;
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
     * @return string
     */
    public function getScriptDemand(): ?string
    {
        return $this->scriptDemand;
    }

    /**
     * @param string $scriptDemand
     * @return self
     */
    public function setScriptDemand(?string $scriptDemand): self
    {
        $this->scriptDemand = $scriptDemand;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpecialTopic(): ?string
    {
        return $this->specialTopic;
    }

    /**
     * @param string $specialTopic
     * @return self
     */
    public function setSpecialTopic(?string $specialTopic): self
    {
        $this->specialTopic = $specialTopic;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->detailDemand !== null) {
            $result['detail_demand'] = $this->detailDemand;
        }
        if ($this->music !== null) {
            $result['music'] = $this->music;
        }
        if ($this->otherDemand !== null) {
            $result['other_demand'] = $this->otherDemand;
        }
        if ($this->propDemand !== null) {
            $result['prop_demand'] = $this->propDemand;
        }
        if ($this->sceneDemand !== null) {
            $result['scene_demand'] = $this->sceneDemand;
        }
        if ($this->scriptDemand !== null) {
            $result['script_demand'] = $this->scriptDemand;
        }
        if ($this->specialTopic !== null) {
            $result['special_topic'] = $this->specialTopic;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['detail_demand'] ?? null) !== null) {
            $obj->detailDemand = (string) $v;
        }
        if (($v = $data['music'] ?? null) !== null) {
            $obj->music = (string) $v;
        }
        if (($v = $data['other_demand'] ?? null) !== null) {
            $obj->otherDemand = (string) $v;
        }
        if (($v = $data['prop_demand'] ?? null) !== null) {
            $obj->propDemand = (string) $v;
        }
        if (($v = $data['scene_demand'] ?? null) !== null) {
            $obj->sceneDemand = (string) $v;
        }
        if (($v = $data['script_demand'] ?? null) !== null) {
            $obj->scriptDemand = (string) $v;
        }
        if (($v = $data['special_topic'] ?? null) !== null) {
            $obj->specialTopic = (string) $v;
        }
        return $obj;
    }
}
