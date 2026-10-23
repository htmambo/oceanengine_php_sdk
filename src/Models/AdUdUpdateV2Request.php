<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdUdUpdateV2Request implements \JsonSerializable
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
     * @var \Oceanengine\Models\AdUdUpdateV2RequestUdShop
     */
    protected ?\Oceanengine\Models\AdUdUpdateV2RequestUdShop $udShop = null;

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
     * @return \Oceanengine\Models\AdUdUpdateV2RequestUdShop
     */
    public function getUdShop(): ?\Oceanengine\Models\AdUdUpdateV2RequestUdShop
    {
        return $this->udShop;
    }

    /**
     * @param \Oceanengine\Models\AdUdUpdateV2RequestUdShop $udShop
     * @return self
     */
    public function setUdShop(?\Oceanengine\Models\AdUdUpdateV2RequestUdShop $udShop): self
    {
        $this->udShop = $udShop;
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
        if ($this->udShop !== null) {
            $result['ud_shop'] = $this->udShop;
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
        if (($v = $data['ud_shop'] ?? null) !== null && is_array($v)) {
            $obj->udShop = \Oceanengine\Models\AdUdUpdateV2RequestUdShop::fromArray($v);
        }
        return $obj;
    }
}
