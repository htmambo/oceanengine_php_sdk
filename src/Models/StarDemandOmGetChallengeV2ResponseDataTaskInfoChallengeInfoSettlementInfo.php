<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeV2ResponseDataTaskInfoChallengeInfoSettlementInfo implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $androidConvertId = null;

    /**
     * @var int
     */
    protected ?int $autoAddBudgetTimes = null;

    /**
     * @var int
     */
    protected ?int $autoAddBudgetTriggerRatio = null;

    /**
     * @var int
     */
    protected ?int $evaluateType = null;

    /**
     * @var int
     */
    protected ?int $iosConvertId = null;

    /**
     * @var int
     */
    protected ?int $maxBudgetAddAmount = null;

    /**
     * @var string
     */
    protected ?string $rewardRule = null;

    /**
     * @var string
     */
    protected ?string $supplementInfo = null;

    /**
     * @var int
     */
    protected ?int $unitPrice = null;

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
     * @return int
     */
    public function getAndroidConvertId(): ?int
    {
        return $this->androidConvertId;
    }

    /**
     * @param int $androidConvertId
     * @return self
     */
    public function setAndroidConvertId(?int $androidConvertId): self
    {
        $this->androidConvertId = $androidConvertId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAutoAddBudgetTimes(): ?int
    {
        return $this->autoAddBudgetTimes;
    }

    /**
     * @param int $autoAddBudgetTimes
     * @return self
     */
    public function setAutoAddBudgetTimes(?int $autoAddBudgetTimes): self
    {
        $this->autoAddBudgetTimes = $autoAddBudgetTimes;
        return $this;
    }

    /**
     * @return int
     */
    public function getAutoAddBudgetTriggerRatio(): ?int
    {
        return $this->autoAddBudgetTriggerRatio;
    }

    /**
     * @param int $autoAddBudgetTriggerRatio
     * @return self
     */
    public function setAutoAddBudgetTriggerRatio(?int $autoAddBudgetTriggerRatio): self
    {
        $this->autoAddBudgetTriggerRatio = $autoAddBudgetTriggerRatio;
        return $this;
    }

    /**
     * @return int
     */
    public function getEvaluateType(): ?int
    {
        return $this->evaluateType;
    }

    /**
     * @param int $evaluateType
     * @return self
     */
    public function setEvaluateType(?int $evaluateType): self
    {
        $this->evaluateType = $evaluateType;
        return $this;
    }

    /**
     * @return int
     */
    public function getIosConvertId(): ?int
    {
        return $this->iosConvertId;
    }

    /**
     * @param int $iosConvertId
     * @return self
     */
    public function setIosConvertId(?int $iosConvertId): self
    {
        $this->iosConvertId = $iosConvertId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxBudgetAddAmount(): ?int
    {
        return $this->maxBudgetAddAmount;
    }

    /**
     * @param int $maxBudgetAddAmount
     * @return self
     */
    public function setMaxBudgetAddAmount(?int $maxBudgetAddAmount): self
    {
        $this->maxBudgetAddAmount = $maxBudgetAddAmount;
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
     * @return string
     */
    public function getSupplementInfo(): ?string
    {
        return $this->supplementInfo;
    }

    /**
     * @param string $supplementInfo
     * @return self
     */
    public function setSupplementInfo(?string $supplementInfo): self
    {
        $this->supplementInfo = $supplementInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnitPrice(): ?int
    {
        return $this->unitPrice;
    }

    /**
     * @param int $unitPrice
     * @return self
     */
    public function setUnitPrice(?int $unitPrice): self
    {
        $this->unitPrice = $unitPrice;
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
        if ($this->androidConvertId !== null) {
            $result['android_convert_id'] = $this->androidConvertId;
        }
        if ($this->autoAddBudgetTimes !== null) {
            $result['auto_add_budget_times'] = $this->autoAddBudgetTimes;
        }
        if ($this->autoAddBudgetTriggerRatio !== null) {
            $result['auto_add_budget_trigger_ratio'] = $this->autoAddBudgetTriggerRatio;
        }
        if ($this->evaluateType !== null) {
            $result['evaluate_type'] = $this->evaluateType;
        }
        if ($this->iosConvertId !== null) {
            $result['ios_convert_id'] = $this->iosConvertId;
        }
        if ($this->maxBudgetAddAmount !== null) {
            $result['max_budget_add_amount'] = $this->maxBudgetAddAmount;
        }
        if ($this->rewardRule !== null) {
            $result['reward_rule'] = $this->rewardRule;
        }
        if ($this->supplementInfo !== null) {
            $result['supplement_info'] = $this->supplementInfo;
        }
        if ($this->unitPrice !== null) {
            $result['unit_price'] = $this->unitPrice;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['android_convert_id'] ?? null) !== null) {
            $obj->androidConvertId = (int) $v;
        }
        if (($v = $data['auto_add_budget_times'] ?? null) !== null) {
            $obj->autoAddBudgetTimes = (int) $v;
        }
        if (($v = $data['auto_add_budget_trigger_ratio'] ?? null) !== null) {
            $obj->autoAddBudgetTriggerRatio = (int) $v;
        }
        if (($v = $data['evaluate_type'] ?? null) !== null) {
            $obj->evaluateType = (int) $v;
        }
        if (($v = $data['ios_convert_id'] ?? null) !== null) {
            $obj->iosConvertId = (int) $v;
        }
        if (($v = $data['max_budget_add_amount'] ?? null) !== null) {
            $obj->maxBudgetAddAmount = (int) $v;
        }
        if (($v = $data['reward_rule'] ?? null) !== null) {
            $obj->rewardRule = (string) $v;
        }
        if (($v = $data['supplement_info'] ?? null) !== null) {
            $obj->supplementInfo = (string) $v;
        }
        if (($v = $data['unit_price'] ?? null) !== null) {
            $obj->unitPrice = (int) $v;
        }
        return $obj;
    }
}
