<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSuggestBudgetGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 广告预算
     * @var float
     */
    protected ?float $promotionBudget = null;

    /**
     * 广告ID
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 建议起量预算
     * @var float
     */
    protected ?float $suggestBudget = null;

    /**
     * 广告预算
     * @return float
     */
    public function getPromotionBudget(): ?float
    {
        return $this->promotionBudget;
    }

    /**
     * 广告预算
     * @param float $promotionBudget
     * @return self
     */
    public function setPromotionBudget(?float $promotionBudget): self
    {
        $this->promotionBudget = $promotionBudget;
        return $this;
    }

    /**
     * 广告ID
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * 广告ID
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * 建议起量预算
     * @return float
     */
    public function getSuggestBudget(): ?float
    {
        return $this->suggestBudget;
    }

    /**
     * 建议起量预算
     * @param float $suggestBudget
     * @return self
     */
    public function setSuggestBudget(?float $suggestBudget): self
    {
        $this->suggestBudget = $suggestBudget;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->promotionBudget !== null) {
            $result['promotion_budget'] = $this->promotionBudget;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->suggestBudget !== null) {
            $result['suggest_budget'] = $this->suggestBudget;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['promotion_budget'] ?? null) !== null) {
            $obj->promotionBudget = (float) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['suggest_budget'] ?? null) !== null) {
            $obj->suggestBudget = (float) $v;
        }
        return $obj;
    }
}
