<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionStatusUpdateV30ResponseData implements \JsonSerializable
{
    /**
     * 失败的广告ID以及失败的信息
     * @var \Oceanengine\Models\LocalPromotionStatusUpdateV30ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * 更新成功的广告ID
     * @var int[]
     */
    protected ?array $promotionIds = null;

    /**
     * 失败的广告ID以及失败的信息
     * @return \Oceanengine\Models\LocalPromotionStatusUpdateV30ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * 失败的广告ID以及失败的信息
     * @param \Oceanengine\Models\LocalPromotionStatusUpdateV30ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * 更新成功的广告ID
     * @return int[]
     */
    public function getPromotionIds(): ?array
    {
        return $this->promotionIds;
    }

    /**
     * 更新成功的广告ID
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
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionStatusUpdateV30ResponseDataErrorsInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionIds = $v;
        }
        return $obj;
    }
}
