<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RejectMaterialAiRepairCrossAccountGetV30ResponseDataRejectMaterialRelatedRepairTasksInner implements \JsonSerializable
{
    /**
     * 关联ADV
     * @var int
     */
    protected ?int $relatedAdvertiserId = null;

    /**
     * 关联关联的任务ID
     * @var int[]
     */
    protected ?array $relatedAiRepairIds = null;

    /**
     * 关联ADV
     * @return int
     */
    public function getRelatedAdvertiserId(): ?int
    {
        return $this->relatedAdvertiserId;
    }

    /**
     * 关联ADV
     * @param int $relatedAdvertiserId
     * @return self
     */
    public function setRelatedAdvertiserId(?int $relatedAdvertiserId): self
    {
        $this->relatedAdvertiserId = $relatedAdvertiserId;
        return $this;
    }

    /**
     * 关联关联的任务ID
     * @return int[]
     */
    public function getRelatedAiRepairIds(): ?array
    {
        return $this->relatedAiRepairIds;
    }

    /**
     * 关联关联的任务ID
     * @param int[] $relatedAiRepairIds
     * @return self
     */
    public function setRelatedAiRepairIds(?array $relatedAiRepairIds): self
    {
        $this->relatedAiRepairIds = $relatedAiRepairIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->relatedAdvertiserId !== null) {
            $result['related_advertiser_id'] = $this->relatedAdvertiserId;
        }
        if ($this->relatedAiRepairIds !== null) {
            $result['related_ai_repair_ids'] = $this->relatedAiRepairIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['related_advertiser_id'] ?? null) !== null) {
            $obj->relatedAdvertiserId = (int) $v;
        }
        if (($v = $data['related_ai_repair_ids'] ?? null) !== null && is_array($v)) {
            $obj->relatedAiRepairIds = $v;
        }
        return $obj;
    }
}
