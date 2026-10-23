<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionShopInfoUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var \Oceanengine\Models\PromotionShopInfoUpdateV30RequestShopInfo
     */
    protected ?\Oceanengine\Models\PromotionShopInfoUpdateV30RequestShopInfo $shopInfo = null;

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
     * @return \Oceanengine\Models\PromotionShopInfoUpdateV30RequestShopInfo
     */
    public function getShopInfo(): ?\Oceanengine\Models\PromotionShopInfoUpdateV30RequestShopInfo
    {
        return $this->shopInfo;
    }

    /**
     * @param \Oceanengine\Models\PromotionShopInfoUpdateV30RequestShopInfo $shopInfo
     * @return self
     */
    public function setShopInfo(?\Oceanengine\Models\PromotionShopInfoUpdateV30RequestShopInfo $shopInfo): self
    {
        $this->shopInfo = $shopInfo;
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
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->shopInfo !== null) {
            $result['shop_info'] = $this->shopInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['shop_info'] ?? null) !== null && is_array($v)) {
            $obj->shopInfo = \Oceanengine\Models\PromotionShopInfoUpdateV30RequestShopInfo::fromArray($v);
        }
        return $obj;
    }
}
