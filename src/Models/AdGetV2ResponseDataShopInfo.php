<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdGetV2ResponseDataShopInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $brandName = null;

    /**
     * @var string
     */
    protected ?string $shopId = null;

    /**
     * @var string
     */
    protected ?string $shopName = null;

    /**
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * @param string $brandName
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopId(): ?string
    {
        return $this->shopId;
    }

    /**
     * @param string $shopId
     * @return self
     */
    public function setShopId(?string $shopId): self
    {
        $this->shopId = $shopId;
        return $this;
    }

    /**
     * @return string
     */
    public function getShopName(): ?string
    {
        return $this->shopName;
    }

    /**
     * @param string $shopName
     * @return self
     */
    public function setShopName(?string $shopName): self
    {
        $this->shopName = $shopName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandName !== null) {
            $result['brand_name'] = $this->brandName;
        }
        if ($this->shopId !== null) {
            $result['shop_id'] = $this->shopId;
        }
        if ($this->shopName !== null) {
            $result['shop_name'] = $this->shopName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_name'] ?? null) !== null) {
            $obj->brandName = (string) $v;
        }
        if (($v = $data['shop_id'] ?? null) !== null) {
            $obj->shopId = (string) $v;
        }
        if (($v = $data['shop_name'] ?? null) !== null) {
            $obj->shopName = (string) $v;
        }
        return $obj;
    }
}
