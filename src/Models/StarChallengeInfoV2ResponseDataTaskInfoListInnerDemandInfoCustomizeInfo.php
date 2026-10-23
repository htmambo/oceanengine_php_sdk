<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeInfoV2ResponseDataTaskInfoListInnerDemandInfoCustomizeInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $maxIncome = null;

    /**
     * @var int
     */
    protected ?int $rewardDeadline = null;

    /**
     * @var string
     */
    protected ?string $rewardRule = null;

    /**
     * @return int
     */
    public function getMaxIncome(): ?int
    {
        return $this->maxIncome;
    }

    /**
     * @param int $maxIncome
     * @return self
     */
    public function setMaxIncome(?int $maxIncome): self
    {
        $this->maxIncome = $maxIncome;
        return $this;
    }

    /**
     * @return int
     */
    public function getRewardDeadline(): ?int
    {
        return $this->rewardDeadline;
    }

    /**
     * @param int $rewardDeadline
     * @return self
     */
    public function setRewardDeadline(?int $rewardDeadline): self
    {
        $this->rewardDeadline = $rewardDeadline;
        return $this;
    }

    /**
     * @return string
     */
    public function getRewardRule(): ?string
    {
        return $this->rewardRule;
    }

    /**
     * @param string $rewardRule
     * @return self
     */
    public function setRewardRule(?string $rewardRule): self
    {
        $this->rewardRule = $rewardRule;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->maxIncome !== null) {
            $result['max_income'] = $this->maxIncome;
        }
        if ($this->rewardDeadline !== null) {
            $result['reward_deadline'] = $this->rewardDeadline;
        }
        if ($this->rewardRule !== null) {
            $result['reward_rule'] = $this->rewardRule;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['max_income'] ?? null) !== null) {
            $obj->maxIncome = (int) $v;
        }
        if (($v = $data['reward_deadline'] ?? null) !== null) {
            $obj->rewardDeadline = (int) $v;
        }
        if (($v = $data['reward_rule'] ?? null) !== null) {
            $obj->rewardRule = (string) $v;
        }
        return $obj;
    }
}
