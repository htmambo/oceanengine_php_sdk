<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAuthorizableShopListV10Filter implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $shopName = null;

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
        if ($this->shopName !== null) {
            $result['shop_name'] = $this->shopName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['shop_name'] ?? null) !== null) {
            $obj->shopName = (string) $v;
        }
        return $obj;
    }
}
