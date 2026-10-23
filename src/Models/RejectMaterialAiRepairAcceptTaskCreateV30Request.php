<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RejectMaterialAiRepairAcceptTaskCreateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int[]
     */
    protected ?array $aiRepairIds = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAiRepairIds(): ?array
    {
        return $this->aiRepairIds;
    }

    /**
     * @param int[] $aiRepairIds
     * @return self
     */
    public function setAiRepairIds(?array $aiRepairIds): self
    {
        $this->aiRepairIds = $aiRepairIds;
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
        if ($this->aiRepairIds !== null) {
            $result['ai_repair_ids'] = $this->aiRepairIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['ai_repair_ids'] ?? null) !== null && is_array($v)) {
            $obj->aiRepairIds = $v;
        }
        return $obj;
    }
}
