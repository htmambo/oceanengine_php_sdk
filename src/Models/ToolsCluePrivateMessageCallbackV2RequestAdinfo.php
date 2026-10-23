<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCluePrivateMessageCallbackV2RequestAdinfo implements \JsonSerializable
{
    /**
     * 广告计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 广告主id
     * @var int
     */
    protected ?int $advId = null;

    /**
     * 广告创意id
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * 广告计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 广告计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 广告主id
     * @return int
     */
    public function getAdvId(): ?int
    {
        return $this->advId;
    }

    /**
     * 广告主id
     * @param int $advId
     * @return self
     */
    public function setAdvId(?int $advId): self
    {
        $this->advId = $advId;
        return $this;
    }

    /**
     * 广告创意id
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * 广告创意id
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
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
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advId !== null) {
            $result['adv_id'] = $this->advId;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['adv_id'] ?? null) !== null) {
            $obj->advId = (int) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        return $obj;
    }
}
