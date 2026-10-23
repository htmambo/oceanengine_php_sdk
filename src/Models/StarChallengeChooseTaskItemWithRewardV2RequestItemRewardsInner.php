<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeChooseTaskItemWithRewardV2RequestItemRewardsInner implements \JsonSerializable
{
    /**
     * 作品id
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 选稿金额（单位：分）
     * @var int
     */
    protected ?int $rewardAmount = null;

    /**
     * 作品id
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 作品id
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * 选稿金额（单位：分）
     * @return int
     */
    public function getRewardAmount(): ?int
    {
        return $this->rewardAmount;
    }

    /**
     * 选稿金额（单位：分）
     * @param int $rewardAmount
     * @return self
     */
    public function setRewardAmount(?int $rewardAmount): self
    {
        $this->rewardAmount = $rewardAmount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->rewardAmount !== null) {
            $result['reward_amount'] = $this->rewardAmount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['reward_amount'] ?? null) !== null) {
            $obj->rewardAmount = (int) $v;
        }
        return $obj;
    }
}
