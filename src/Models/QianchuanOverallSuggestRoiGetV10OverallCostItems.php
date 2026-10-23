<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallSuggestRoiGetV10OverallCostItems implements \JsonSerializable
{
    /**
     * 达人带货佣金优化，仅商品支持
     * @var bool
     */
    protected ?bool $allianceCommisionSwitch = null;

    /**
     * 千川星选素材
     * @var bool
     */
    protected ?bool $starTaskMaterialSwitch = null;

    /**
     * 达人带货佣金优化，仅商品支持
     * @return bool
     */
    public function getAllianceCommisionSwitch(): ?bool
    {
        return $this->allianceCommisionSwitch;
    }

    /**
     * 达人带货佣金优化，仅商品支持
     * @param bool $allianceCommisionSwitch
     * @return self
     */
    public function setAllianceCommisionSwitch(?bool $allianceCommisionSwitch): self
    {
        $this->allianceCommisionSwitch = $allianceCommisionSwitch;
        return $this;
    }

    /**
     * 千川星选素材
     * @return bool
     */
    public function getStarTaskMaterialSwitch(): ?bool
    {
        return $this->starTaskMaterialSwitch;
    }

    /**
     * 千川星选素材
     * @param bool $starTaskMaterialSwitch
     * @return self
     */
    public function setStarTaskMaterialSwitch(?bool $starTaskMaterialSwitch): self
    {
        $this->starTaskMaterialSwitch = $starTaskMaterialSwitch;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allianceCommisionSwitch !== null) {
            $result['alliance_commision_switch'] = $this->allianceCommisionSwitch;
        }
        if ($this->starTaskMaterialSwitch !== null) {
            $result['star_task_material_switch'] = $this->starTaskMaterialSwitch;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['alliance_commision_switch'] ?? null) !== null) {
            $obj->allianceCommisionSwitch = (bool) $v;
        }
        if (($v = $data['star_task_material_switch'] ?? null) !== null) {
            $obj->starTaskMaterialSwitch = (bool) $v;
        }
        return $obj;
    }
}
