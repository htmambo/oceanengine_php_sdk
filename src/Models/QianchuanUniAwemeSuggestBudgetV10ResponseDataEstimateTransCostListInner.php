<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeSuggestBudgetV10ResponseDataEstimateTransCostListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $budget = null;

    /**
     * @var int
     */
    protected ?int $estimateConvert = null;

    /**
     * @var float
     */
    protected ?float $estimateRoi = null;

    /**
     * @var bool
     */
    protected ?bool $isUpdate = null;

    /**
     * @var string
     */
    protected ?string $lastUpdateTime = null;

    /**
     * @var int
     */
    protected ?int $maxEstimateConvert = null;

    /**
     * @var float
     */
    protected ?float $maxEstimateRoi = null;

    /**
     * @var int
     */
    protected ?int $minEstimateConvert = null;

    /**
     * @var float
     */
    protected ?float $minEstimateRoi = null;

    /**
     * @return int
     */
    public function getBudget(): ?int
    {
        return $this->budget;
    }

    /**
     * @param int $budget
     * @return self
     */
    public function setBudget(?int $budget): self
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
    public function getEstimateRoi(): ?float
    {
        return $this->estimateRoi;
    }

    /**
     * @param float $estimateRoi
     * @return self
     */
    public function setEstimateRoi(?float $estimateRoi): self
    {
        $this->estimateRoi = $estimateRoi;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsUpdate(): ?bool
    {
        return $this->isUpdate;
    }

    /**
     * @param bool $isUpdate
     * @return self
     */
    public function setIsUpdate(?bool $isUpdate): self
    {
        $this->isUpdate = $isUpdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastUpdateTime(): ?string
    {
        return $this->lastUpdateTime;
    }

    /**
     * @param string $lastUpdateTime
     * @return self
     */
    public function setLastUpdateTime(?string $lastUpdateTime): self
    {
        $this->lastUpdateTime = $lastUpdateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxEstimateConvert(): ?int
    {
        return $this->maxEstimateConvert;
    }

    /**
     * @param int $maxEstimateConvert
     * @return self
     */
    public function setMaxEstimateConvert(?int $maxEstimateConvert): self
    {
        $this->maxEstimateConvert = $maxEstimateConvert;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxEstimateRoi(): ?float
    {
        return $this->maxEstimateRoi;
    }

    /**
     * @param float $maxEstimateRoi
     * @return self
     */
    public function setMaxEstimateRoi(?float $maxEstimateRoi): self
    {
        $this->maxEstimateRoi = $maxEstimateRoi;
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
    public function getMinEstimateRoi(): ?float
    {
        return $this->minEstimateRoi;
    }

    /**
     * @param float $minEstimateRoi
     * @return self
     */
    public function setMinEstimateRoi(?float $minEstimateRoi): self
    {
        $this->minEstimateRoi = $minEstimateRoi;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->estimateConvert !== null) {
            $result['estimate_convert'] = $this->estimateConvert;
        }
        if ($this->estimateRoi !== null) {
            $result['estimate_roi'] = $this->estimateRoi;
        }
        if ($this->isUpdate !== null) {
            $result['is_update'] = $this->isUpdate;
        }
        if ($this->lastUpdateTime !== null) {
            $result['last_update_time'] = $this->lastUpdateTime;
        }
        if ($this->maxEstimateConvert !== null) {
            $result['max_estimate_convert'] = $this->maxEstimateConvert;
        }
        if ($this->maxEstimateRoi !== null) {
            $result['max_estimate_roi'] = $this->maxEstimateRoi;
        }
        if ($this->minEstimateConvert !== null) {
            $result['min_estimate_convert'] = $this->minEstimateConvert;
        }
        if ($this->minEstimateRoi !== null) {
            $result['min_estimate_roi'] = $this->minEstimateRoi;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (int) $v;
        }
        if (($v = $data['estimate_convert'] ?? null) !== null) {
            $obj->estimateConvert = (int) $v;
        }
        if (($v = $data['estimate_roi'] ?? null) !== null) {
            $obj->estimateRoi = (float) $v;
        }
        if (($v = $data['is_update'] ?? null) !== null) {
            $obj->isUpdate = (bool) $v;
        }
        if (($v = $data['last_update_time'] ?? null) !== null) {
            $obj->lastUpdateTime = (string) $v;
        }
        if (($v = $data['max_estimate_convert'] ?? null) !== null) {
            $obj->maxEstimateConvert = (int) $v;
        }
        if (($v = $data['max_estimate_roi'] ?? null) !== null) {
            $obj->maxEstimateRoi = (float) $v;
        }
        if (($v = $data['min_estimate_convert'] ?? null) !== null) {
            $obj->minEstimateConvert = (int) $v;
        }
        if (($v = $data['min_estimate_roi'] ?? null) !== null) {
            $obj->minEstimateRoi = (float) $v;
        }
        return $obj;
    }
}
