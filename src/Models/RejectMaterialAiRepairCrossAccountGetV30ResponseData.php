<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RejectMaterialAiRepairCrossAccountGetV30ResponseData implements \JsonSerializable
{
    /**
     * 当前的adv
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 待修复任务ID
     * @var int[]
     */
    protected ?array $aiRepairId = null;

    /**
     * 待修复源素材ID
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\RejectMaterialAiRepairCrossAccountGetV30ResponseDataRejectMaterialRelatedRepairTasksInner[]
     */
    protected ?array $rejectMaterialRelatedRepairTasks = null;

    /**
     * 当前的adv
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 当前的adv
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 待修复任务ID
     * @return int[]
     */
    public function getAiRepairId(): ?array
    {
        return $this->aiRepairId;
    }

    /**
     * 待修复任务ID
     * @param int[] $aiRepairId
     * @return self
     */
    public function setAiRepairId(?array $aiRepairId): self
    {
        $this->aiRepairId = $aiRepairId;
        return $this;
    }

    /**
     * 待修复源素材ID
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 待修复源素材ID
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\RejectMaterialAiRepairCrossAccountGetV30ResponseDataRejectMaterialRelatedRepairTasksInner[]
     */
    public function getRejectMaterialRelatedRepairTasks(): ?array
    {
        return $this->rejectMaterialRelatedRepairTasks;
    }

    /**
     * @param \Oceanengine\Models\RejectMaterialAiRepairCrossAccountGetV30ResponseDataRejectMaterialRelatedRepairTasksInner[] $rejectMaterialRelatedRepairTasks
     * @return self
     */
    public function setRejectMaterialRelatedRepairTasks(?array $rejectMaterialRelatedRepairTasks): self
    {
        $this->rejectMaterialRelatedRepairTasks = $rejectMaterialRelatedRepairTasks;
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
        if ($this->aiRepairId !== null) {
            $result['ai_repair_id'] = $this->aiRepairId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->rejectMaterialRelatedRepairTasks !== null) {
            $result['reject_material_related_repair_tasks'] = $this->rejectMaterialRelatedRepairTasks;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['ai_repair_id'] ?? null) !== null && is_array($v)) {
            $obj->aiRepairId = $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['reject_material_related_repair_tasks'] ?? null) !== null && is_array($v)) {
            $obj->rejectMaterialRelatedRepairTasks = array_map(fn ($vv) => \Oceanengine\Models\RejectMaterialAiRepairCrossAccountGetV30ResponseDataRejectMaterialRelatedRepairTasksInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
