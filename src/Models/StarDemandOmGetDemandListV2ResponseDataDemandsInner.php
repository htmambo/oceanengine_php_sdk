<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetDemandListV2ResponseDataDemandsInner implements \JsonSerializable
{
    /**
     * 任务ID
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * 任务ID
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * 任务ID
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        return $obj;
    }
}
