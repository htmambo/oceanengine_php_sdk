<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsKeywordsBidRatioUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var float
     */
    protected ?float $bidRatio = null;

    /**
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * @var string
     */
    protected ?string $promotionWordId = null;

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
     * @return float
     */
    public function getBidRatio(): ?float
    {
        return $this->bidRatio;
    }

    /**
     * @param float $bidRatio
     * @return self
     */
    public function setBidRatio(?float $bidRatio): self
    {
        $this->bidRatio = $bidRatio;
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
     * @return string
     */
    public function getPromotionWordId(): ?string
    {
        return $this->promotionWordId;
    }

    /**
     * @param string $promotionWordId
     * @return self
     */
    public function setPromotionWordId(?string $promotionWordId): self
    {
        $this->promotionWordId = $promotionWordId;
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
        if ($this->bidRatio !== null) {
            $result['bid_ratio'] = $this->bidRatio;
        }
        if ($this->projectIds !== null) {
            $result['project_ids'] = $this->projectIds;
        }
        if ($this->promotionWordId !== null) {
            $result['promotion_word_id'] = $this->promotionWordId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['bid_ratio'] ?? null) !== null) {
            $obj->bidRatio = (float) $v;
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        if (($v = $data['promotion_word_id'] ?? null) !== null) {
            $obj->promotionWordId = (string) $v;
        }
        return $obj;
    }
}
