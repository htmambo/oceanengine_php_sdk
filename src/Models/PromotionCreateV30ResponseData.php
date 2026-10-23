<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionCreateV30ResponseDataErrorKeywordsListInner[]
     */
    protected ?array $errorKeywordsList = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @return \Oceanengine\Models\PromotionCreateV30ResponseDataErrorKeywordsListInner[]
     */
    public function getErrorKeywordsList(): ?array
    {
        return $this->errorKeywordsList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30ResponseDataErrorKeywordsListInner[] $errorKeywordsList
     * @return self
     */
    public function setErrorKeywordsList(?array $errorKeywordsList): self
    {
        $this->errorKeywordsList = $errorKeywordsList;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorKeywordsList !== null) {
            $result['error_keywords_list'] = $this->errorKeywordsList;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_keywords_list'] ?? null) !== null && is_array($v)) {
            $obj->errorKeywordsList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30ResponseDataErrorKeywordsListInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
