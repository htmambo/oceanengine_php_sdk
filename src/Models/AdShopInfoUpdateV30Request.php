<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdShopInfoUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\AdShopInfoUpdateV30RequestShopInfo
     */
    protected ?\Oceanengine\Models\AdShopInfoUpdateV30RequestShopInfo $shopInfo = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

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
     * @return \Oceanengine\Models\AdShopInfoUpdateV30RequestShopInfo
     */
    public function getShopInfo(): ?\Oceanengine\Models\AdShopInfoUpdateV30RequestShopInfo
    {
        return $this->shopInfo;
    }

    /**
     * @param \Oceanengine\Models\AdShopInfoUpdateV30RequestShopInfo $shopInfo
     * @return self
     */
    public function setShopInfo(?\Oceanengine\Models\AdShopInfoUpdateV30RequestShopInfo $shopInfo): self
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
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->shopInfo !== null) {
            $result['shop_info'] = $this->shopInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['shop_info'] ?? null) !== null && is_array($v)) {
            $obj->shopInfo = \Oceanengine\Models\AdShopInfoUpdateV30RequestShopInfo::fromArray($v);
        }
        return $obj;
    }
}
