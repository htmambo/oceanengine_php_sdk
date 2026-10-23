<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAuthorizableShopListV10ResponseDataShopListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $shopAvatar = null;

    /**
     * @var int
     */
    protected ?int $shopId = null;

    /**
     * @var string
     */
    protected ?string $shopName = null;

    /**
     * @return string
     */
    public function getShopAvatar(): ?string
    {
        return $this->shopAvatar;
    }

    /**
     * @param string $shopAvatar
     * @return self
     */
    public function setShopAvatar(?string $shopAvatar): self
    {
        $this->shopAvatar = $shopAvatar;
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
        if ($this->shopAvatar !== null) {
            $result['shop_avatar'] = $this->shopAvatar;
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
        if (($v = $data['shop_avatar'] ?? null) !== null) {
            $obj->shopAvatar = (string) $v;
        }
        if (($v = $data['shop_id'] ?? null) !== null) {
            $obj->shopId = (int) $v;
        }
        if (($v = $data['shop_name'] ?? null) !== null) {
            $obj->shopName = (string) $v;
        }
        return $obj;
    }
}
