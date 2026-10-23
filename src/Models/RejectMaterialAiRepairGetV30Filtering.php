<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RejectMaterialAiRepairGetV30Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $aiRepairIds = null;

    /**
     * @var bool
     */
    protected ?bool $isOc = null;

    /**
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * @var int[]
     */
    protected ?array $promotionIds = null;

    /**
     * @var string
     */
    protected ?string $repairEndTime = null;

    /**
     * @var string
     */
    protected ?string $repairStartTime = null;

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
     * @return bool
     */
    public function getIsOc(): ?bool
    {
        return $this->isOc;
    }

    /**
     * @param bool $isOc
     * @return self
     */
    public function setIsOc(?bool $isOc): self
    {
        $this->isOc = $isOc;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * @param int[] $projectIds
     * @return self
     */
    public function setProjectIds(?array $projectIds): self
    {
        $this->projectIds = $projectIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getPromotionIds(): ?array
    {
        return $this->promotionIds;
    }

    /**
     * @param int[] $promotionIds
     * @return self
     */
    public function setPromotionIds(?array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepairEndTime(): ?string
    {
        return $this->repairEndTime;
    }

    /**
     * @param string $repairEndTime
     * @return self
     */
    public function setRepairEndTime(?string $repairEndTime): self
    {
        $this->repairEndTime = $repairEndTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getRepairStartTime(): ?string
    {
        return $this->repairStartTime;
    }

    /**
     * @param string $repairStartTime
     * @return self
     */
    public function setRepairStartTime(?string $repairStartTime): self
    {
        $this->repairStartTime = $repairStartTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->aiRepairIds !== null) {
            $result['ai_repair_ids'] = $this->aiRepairIds;
        }
        if ($this->isOc !== null) {
            $result['is_oc'] = $this->isOc;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->projectIds !== null) {
            $result['project_ids'] = $this->projectIds;
        }
        if ($this->promotionIds !== null) {
            $result['promotion_ids'] = $this->promotionIds;
        }
        if ($this->repairEndTime !== null) {
            $result['repair_end_time'] = $this->repairEndTime;
        }
        if ($this->repairStartTime !== null) {
            $result['repair_start_time'] = $this->repairStartTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ai_repair_ids'] ?? null) !== null && is_array($v)) {
            $obj->aiRepairIds = $v;
        }
        if (($v = $data['is_oc'] ?? null) !== null) {
            $obj->isOc = (bool) $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        if (($v = $data['promotion_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionIds = $v;
        }
        if (($v = $data['repair_end_time'] ?? null) !== null) {
            $obj->repairEndTime = (string) $v;
        }
        if (($v = $data['repair_start_time'] ?? null) !== null) {
            $obj->repairStartTime = (string) $v;
        }
        return $obj;
    }
}
