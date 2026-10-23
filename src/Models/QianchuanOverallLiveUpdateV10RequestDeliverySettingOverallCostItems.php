<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallLiveUpdateV10RequestDeliverySettingOverallCostItems implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $starTaskMaterialSwitch = null;

    /**
     * @return bool
     */
    public function getStarTaskMaterialSwitch(): ?bool
    {
        return $this->starTaskMaterialSwitch;
    }

    /**
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
        if ($this->starTaskMaterialSwitch !== null) {
            $result['star_task_material_switch'] = $this->starTaskMaterialSwitch;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['star_task_material_switch'] ?? null) !== null) {
            $obj->starTaskMaterialSwitch = (bool) $v;
        }
        return $obj;
    }
}
