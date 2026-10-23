<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandCreateAssignV2RequestDemandInfoDemandRequirement implements \JsonSerializable
{
    /**
     * 详细要求 500字内
     * @var string
     */
    protected ?string $detailDemand = null;

    /**
     * 直播要求 500字内
     * @var string
     */
    protected ?string $livestreamDemand = null;

    /**
     * 指定音乐 20字内
     * @var string
     */
    protected ?string $music = null;

    /**
     * 其他要求 500字内
     * @var string
     */
    protected ?string $otherDemand = null;

    /**
     * 场景要求 20字内
     * @var string
     */
    protected ?string $propDemand = null;

    /**
     * 场景要求 20字内
     * @var string
     */
    protected ?string $sceneDemand = null;

    /**
     * 文案要求 20字内
     * @var string
     */
    protected ?string $scriptDemand = null;

    /**
     * 指定话题 40字内
     * @var string
     */
    protected ?string $specialTopic = null;

    /**
     * 详细要求 500字内
     * @return string
     */
    public function getDetailDemand(): ?string
    {
        return $this->detailDemand;
    }

    /**
     * 详细要求 500字内
     * @param string $detailDemand
     * @return self
     */
    public function setDetailDemand(?string $detailDemand): self
    {
        $this->detailDemand = $detailDemand;
        return $this;
    }

    /**
     * 直播要求 500字内
     * @return string
     */
    public function getLivestreamDemand(): ?string
    {
        return $this->livestreamDemand;
    }

    /**
     * 直播要求 500字内
     * @param string $livestreamDemand
     * @return self
     */
    public function setLivestreamDemand(?string $livestreamDemand): self
    {
        $this->livestreamDemand = $livestreamDemand;
        return $this;
    }

    /**
     * 指定音乐 20字内
     * @return string
     */
    public function getMusic(): ?string
    {
        return $this->music;
    }

    /**
     * 指定音乐 20字内
     * @param string $music
     * @return self
     */
    public function setMusic(?string $music): self
    {
        $this->music = $music;
        return $this;
    }

    /**
     * 其他要求 500字内
     * @return string
     */
    public function getOtherDemand(): ?string
    {
        return $this->otherDemand;
    }

    /**
     * 其他要求 500字内
     * @param string $otherDemand
     * @return self
     */
    public function setOtherDemand(?string $otherDemand): self
    {
        $this->otherDemand = $otherDemand;
        return $this;
    }

    /**
     * 场景要求 20字内
     * @return string
     */
    public function getPropDemand(): ?string
    {
        return $this->propDemand;
    }

    /**
     * 场景要求 20字内
     * @param string $propDemand
     * @return self
     */
    public function setPropDemand(?string $propDemand): self
    {
        $this->propDemand = $propDemand;
        return $this;
    }

    /**
     * 场景要求 20字内
     * @return string
     */
    public function getSceneDemand(): ?string
    {
        return $this->sceneDemand;
    }

    /**
     * 场景要求 20字内
     * @param string $sceneDemand
     * @return self
     */
    public function setSceneDemand(?string $sceneDemand): self
    {
        $this->sceneDemand = $sceneDemand;
        return $this;
    }

    /**
     * 文案要求 20字内
     * @return string
     */
    public function getScriptDemand(): ?string
    {
        return $this->scriptDemand;
    }

    /**
     * 文案要求 20字内
     * @param string $scriptDemand
     * @return self
     */
    public function setScriptDemand(?string $scriptDemand): self
    {
        $this->scriptDemand = $scriptDemand;
        return $this;
    }

    /**
     * 指定话题 40字内
     * @return string
     */
    public function getSpecialTopic(): ?string
    {
        return $this->specialTopic;
    }

    /**
     * 指定话题 40字内
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
        if ($this->livestreamDemand !== null) {
            $result['livestream_demand'] = $this->livestreamDemand;
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
        if (($v = $data['livestream_demand'] ?? null) !== null) {
            $obj->livestreamDemand = (string) $v;
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
