<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionBudgetUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * 更新失败的广告ID列表
     * @var \Oceanengine\Models\PromotionBudgetUpdateV30ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 更新成功的广告ID列表
     * @var int[]
     */
    protected ?array $promotionIds = null;

    /**
     * 更新失败的广告ID列表
     * @return \Oceanengine\Models\PromotionBudgetUpdateV30ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 更新失败的广告ID列表
     * @param \Oceanengine\Models\PromotionBudgetUpdateV30ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * 更新成功的广告ID列表
     * @return int[]
     */
    public function getPromotionIds(): ?array
    {
        return $this->promotionIds;
    }

    /**
     * 更新成功的广告ID列表
     * @param int[] $promotionIds
     * @return self
     */
    public function setPromotionIds(?array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        if ($this->promotionIds !== null) {
            $result['promotion_ids'] = $this->promotionIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\PromotionBudgetUpdateV30ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionIds = $v;
        }
        return $obj;
    }
}
