<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetDemandListV2ResponseData implements \JsonSerializable
{
    /**
     * 任务ID合集
     * @var \Oceanengine\Models\StarDemandOmGetDemandListV2ResponseDataDemandsInner[]
     */
    protected ?array $demands = null;

    /**
     * 任务ID合集
     * @return \Oceanengine\Models\StarDemandOmGetDemandListV2ResponseDataDemandsInner[]
     */
    public function getDemands(): ?array
    {
        return $this->demands;
    }

    /**
     * 任务ID合集
     * @param \Oceanengine\Models\StarDemandOmGetDemandListV2ResponseDataDemandsInner[] $demands
     * @return self
     */
    public function setDemands(?array $demands): self
    {
        $this->demands = $demands;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->demands !== null) {
            $result['demands'] = $this->demands;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['demands'] ?? null) !== null && is_array($v)) {
            $obj->demands = array_map(fn ($vv) => \Oceanengine\Models\StarDemandOmGetDemandListV2ResponseDataDemandsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
