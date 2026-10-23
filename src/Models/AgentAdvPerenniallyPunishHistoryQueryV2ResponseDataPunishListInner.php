<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvPerenniallyPunishHistoryQueryV2ResponseDataPunishListInner implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 惩罚封停记录
     * @var \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2ResponseDataPunishListInnerPunishmentHistoryInner[]
     */
    protected ?array $punishmentHistory = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 惩罚封停记录
     * @return \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2ResponseDataPunishListInnerPunishmentHistoryInner[]
     */
    public function getPunishmentHistory(): ?array
    {
        return $this->punishmentHistory;
    }

    /**
     * 惩罚封停记录
     * @param \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2ResponseDataPunishListInnerPunishmentHistoryInner[] $punishmentHistory
     * @return self
     */
    public function setPunishmentHistory(?array $punishmentHistory): self
    {
        $this->punishmentHistory = $punishmentHistory;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->punishmentHistory !== null) {
            $result['punishment_history'] = $this->punishmentHistory;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['punishment_history'] ?? null) !== null && is_array($v)) {
            $obj->punishmentHistory = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvPerenniallyPunishHistoryQueryV2ResponseDataPunishListInnerPunishmentHistoryInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
