<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsKeywordsBidRatioDeleteV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 要删除的优词计划id列表
     * @var string[]
     */
    protected ?array $promotionWordIds = null;

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
     * 要删除的优词计划id列表
     * @return string[]
     */
    public function getPromotionWordIds(): ?array
    {
        return $this->promotionWordIds;
    }

    /**
     * 要删除的优词计划id列表
     * @param string[] $promotionWordIds
     * @return self
     */
    public function setPromotionWordIds(?array $promotionWordIds): self
    {
        $this->promotionWordIds = $promotionWordIds;
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
        if ($this->promotionWordIds !== null) {
            $result['promotion_word_ids'] = $this->promotionWordIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['promotion_word_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionWordIds = $v;
        }
        return $obj;
    }
}
