<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdUdUpdateV2RequestUdShop implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $udBrandName = null;

    /**
     * @var string
     */
    protected ?string $udShopId = null;

    /**
     * @var string
     */
    protected ?string $udShopName = null;

    /**
     * @return string
     */
    public function getUdBrandName(): ?string
    {
        return $this->udBrandName;
    }

    /**
     * @param string $udBrandName
     * @return self
     */
    public function setUdBrandName(?string $udBrandName): self
    {
        $this->udBrandName = $udBrandName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUdShopId(): ?string
    {
        return $this->udShopId;
    }

    /**
     * @param string $udShopId
     * @return self
     */
    public function setUdShopId(?string $udShopId): self
    {
        $this->udShopId = $udShopId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUdShopName(): ?string
    {
        return $this->udShopName;
    }

    /**
     * @param string $udShopName
     * @return self
     */
    public function setUdShopName(?string $udShopName): self
    {
        $this->udShopName = $udShopName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->udBrandName !== null) {
            $result['ud_brand_name'] = $this->udBrandName;
        }
        if ($this->udShopId !== null) {
            $result['ud_shop_id'] = $this->udShopId;
        }
        if ($this->udShopName !== null) {
            $result['ud_shop_name'] = $this->udShopName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ud_brand_name'] ?? null) !== null) {
            $obj->udBrandName = (string) $v;
        }
        if (($v = $data['ud_shop_id'] ?? null) !== null) {
            $obj->udShopId = (string) $v;
        }
        if (($v = $data['ud_shop_name'] ?? null) !== null) {
            $obj->udShopName = (string) $v;
        }
        return $obj;
    }
}
