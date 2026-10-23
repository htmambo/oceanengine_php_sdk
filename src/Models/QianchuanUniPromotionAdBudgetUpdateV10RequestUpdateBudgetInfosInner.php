<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdBudgetUpdateV10RequestUpdateBudgetInfosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var int
     */
    protected ?int $estimateConvert = null;

    /**
     * @var float
     */
    protected ?float $estimateRoiGoal = null;

    /**
     * @var int
     */
    protected ?int $minEstimateConvert = null;

    /**
     * @var float
     */
    protected ?float $minEstimateRoiGoal = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return int
     */
    public function getEstimateConvert(): ?int
    {
        return $this->estimateConvert;
    }

    /**
     * @param int $estimateConvert
     * @return self
     */
    public function setEstimateConvert(?int $estimateConvert): self
    {
        $this->estimateConvert = $estimateConvert;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimateRoiGoal(): ?float
    {
        return $this->estimateRoiGoal;
    }

    /**
     * @param float $estimateRoiGoal
     * @return self
     */
    public function setEstimateRoiGoal(?float $estimateRoiGoal): self
    {
        $this->estimateRoiGoal = $estimateRoiGoal;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinEstimateConvert(): ?int
    {
        return $this->minEstimateConvert;
    }

    /**
     * @param int $minEstimateConvert
     * @return self
     */
    public function setMinEstimateConvert(?int $minEstimateConvert): self
    {
        $this->minEstimateConvert = $minEstimateConvert;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinEstimateRoiGoal(): ?float
    {
        return $this->minEstimateRoiGoal;
    }

    /**
     * @param float $minEstimateRoiGoal
     * @return self
     */
    public function setMinEstimateRoiGoal(?float $minEstimateRoiGoal): self
    {
        $this->minEstimateRoiGoal = $minEstimateRoiGoal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->estimateConvert !== null) {
            $result['estimate_convert'] = $this->estimateConvert;
        }
        if ($this->estimateRoiGoal !== null) {
            $result['estimate_roi_goal'] = $this->estimateRoiGoal;
        }
        if ($this->minEstimateConvert !== null) {
            $result['min_estimate_convert'] = $this->minEstimateConvert;
        }
        if ($this->minEstimateRoiGoal !== null) {
            $result['min_estimate_roi_goal'] = $this->minEstimateRoiGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['estimate_convert'] ?? null) !== null) {
            $obj->estimateConvert = (int) $v;
        }
        if (($v = $data['estimate_roi_goal'] ?? null) !== null) {
            $obj->estimateRoiGoal = (float) $v;
        }
        if (($v = $data['min_estimate_convert'] ?? null) !== null) {
            $obj->minEstimateConvert = (int) $v;
        }
        if (($v = $data['min_estimate_roi_goal'] ?? null) !== null) {
            $obj->minEstimateRoiGoal = (float) $v;
        }
        return $obj;
    }
}
