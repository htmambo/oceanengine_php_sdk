<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetParticipatedTaskV2ResponseDataDataInnerQuotaInfo implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $isActivity = null;

    /**
     * @var int
     */
    protected ?int $maxReward = null;

    /**
     * @var int
     */
    protected ?int $quota = null;

    /**
     * @return bool
     */
    public function getIsActivity(): ?bool
    {
        return $this->isActivity;
    }

    /**
     * @param bool $isActivity
     * @return self
     */
    public function setIsActivity(?bool $isActivity): self
    {
        $this->isActivity = $isActivity;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxReward(): ?int
    {
        return $this->maxReward;
    }

    /**
     * @param int $maxReward
     * @return self
     */
    public function setMaxReward(?int $maxReward): self
    {
        $this->maxReward = $maxReward;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuota(): ?int
    {
        return $this->quota;
    }

    /**
     * @param int $quota
     * @return self
     */
    public function setQuota(?int $quota): self
    {
        $this->quota = $quota;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isActivity !== null) {
            $result['is_activity'] = $this->isActivity;
        }
        if ($this->maxReward !== null) {
            $result['max_reward'] = $this->maxReward;
        }
        if ($this->quota !== null) {
            $result['quota'] = $this->quota;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_activity'] ?? null) !== null) {
            $obj->isActivity = (bool) $v;
        }
        if (($v = $data['max_reward'] ?? null) !== null) {
            $obj->maxReward = (int) $v;
        }
        if (($v = $data['quota'] ?? null) !== null) {
            $obj->quota = (int) $v;
        }
        return $obj;
    }
}
