<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionRaiseStatusCurrentIdsGetV30ResponseDataDataInnerRaiseInfo implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $raiseBudget = null;

    /**
     * @var string
     */
    protected ?string $raiseEndTime = null;

    /**
     * @return float
     */
    public function getRaiseBudget(): ?float
    {
        return $this->raiseBudget;
    }

    /**
     * @param float $raiseBudget
     * @return self
     */
    public function setRaiseBudget(?float $raiseBudget): self
    {
        $this->raiseBudget = $raiseBudget;
        return $this;
    }

    /**
     * @return string
     */
    public function getRaiseEndTime(): ?string
    {
        return $this->raiseEndTime;
    }

    /**
     * @param string $raiseEndTime
     * @return self
     */
    public function setRaiseEndTime(?string $raiseEndTime): self
    {
        $this->raiseEndTime = $raiseEndTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->raiseBudget !== null) {
            $result['raise_budget'] = $this->raiseBudget;
        }
        if ($this->raiseEndTime !== null) {
            $result['raise_end_time'] = $this->raiseEndTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['raise_budget'] ?? null) !== null) {
            $obj->raiseBudget = (float) $v;
        }
        if (($v = $data['raise_end_time'] ?? null) !== null) {
            $obj->raiseEndTime = (string) $v;
        }
        return $obj;
    }
}
