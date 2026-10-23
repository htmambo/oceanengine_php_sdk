<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInnerChallengeBillInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $totalPlatformFee = null;

    /**
     * @var int
     */
    protected ?int $totalTaskCost = null;

    /**
     * @return int
     */
    public function getTotalPlatformFee(): ?int
    {
        return $this->totalPlatformFee;
    }

    /**
     * @param int $totalPlatformFee
     * @return self
     */
    public function setTotalPlatformFee(?int $totalPlatformFee): self
    {
        $this->totalPlatformFee = $totalPlatformFee;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalTaskCost(): ?int
    {
        return $this->totalTaskCost;
    }

    /**
     * @param int $totalTaskCost
     * @return self
     */
    public function setTotalTaskCost(?int $totalTaskCost): self
    {
        $this->totalTaskCost = $totalTaskCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->totalPlatformFee !== null) {
            $result['total_platform_fee'] = $this->totalPlatformFee;
        }
        if ($this->totalTaskCost !== null) {
            $result['total_task_cost'] = $this->totalTaskCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['total_platform_fee'] ?? null) !== null) {
            $obj->totalPlatformFee = (int) $v;
        }
        if (($v = $data['total_task_cost'] ?? null) !== null) {
            $obj->totalTaskCost = (int) $v;
        }
        return $obj;
    }
}
