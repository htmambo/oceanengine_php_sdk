<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanToolsShopAuthV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanToolsShopAuthV10ShopAuthTimeType
     */
    protected ?string $shopAuthTimeType = null;

    /**
     * @var int
     */
    protected ?int $shopId = null;

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
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanToolsShopAuthV10ShopAuthTimeType
     */
    public function getShopAuthTimeType(): ?string
    {
        return $this->shopAuthTimeType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanToolsShopAuthV10ShopAuthTimeType $shopAuthTimeType
     * @return self
     */
    public function setShopAuthTimeType(?string $shopAuthTimeType): self
    {
        $this->shopAuthTimeType = $shopAuthTimeType;
        return $this;
    }

    /**
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     * @return self
     */
    public function setShopId(?int $shopId): self
    {
        $this->shopId = $shopId;
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
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->shopAuthTimeType !== null) {
            $result['shop_auth_time_type'] = $this->shopAuthTimeType;
        }
        if ($this->shopId !== null) {
            $result['shop_id'] = $this->shopId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['shop_auth_time_type'] ?? null) !== null) {
            $obj->shopAuthTimeType = (string) $v;
        }
        if (($v = $data['shop_id'] ?? null) !== null) {
            $obj->shopId = (int) $v;
        }
        return $obj;
    }
}
