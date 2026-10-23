<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryBookingBusinessEntityIdGetV2ResponseDataBusinessEntityIdInfosInner implements \JsonSerializable
{
    /**
     * 业务录入实体ID
     * @var string
     */
    protected ?string $businessEntityId = null;

    /**
     * 排期ID
     * @var int
     */
    protected ?int $cartId = null;

    /**
     * 排期名称
     * @var string
     */
    protected ?string $cartName = null;

    /**
     * 主订单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 业务录入实体ID
     * @return string
     */
    public function getBusinessEntityId(): ?string
    {
        return $this->businessEntityId;
    }

    /**
     * 业务录入实体ID
     * @param string $businessEntityId
     * @return self
     */
    public function setBusinessEntityId(?string $businessEntityId): self
    {
        $this->businessEntityId = $businessEntityId;
        return $this;
    }

    /**
     * 排期ID
     * @return int
     */
    public function getCartId(): ?int
    {
        return $this->cartId;
    }

    /**
     * 排期ID
     * @param int $cartId
     * @return self
     */
    public function setCartId(?int $cartId): self
    {
        $this->cartId = $cartId;
        return $this;
    }

    /**
     * 排期名称
     * @return string
     */
    public function getCartName(): ?string
    {
        return $this->cartName;
    }

    /**
     * 排期名称
     * @param string $cartName
     * @return self
     */
    public function setCartName(?string $cartName): self
    {
        $this->cartName = $cartName;
        return $this;
    }

    /**
     * 主订单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 主订单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->businessEntityId !== null) {
            $result['business_entity_id'] = $this->businessEntityId;
        }
        if ($this->cartId !== null) {
            $result['cart_id'] = $this->cartId;
        }
        if ($this->cartName !== null) {
            $result['cart_name'] = $this->cartName;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['business_entity_id'] ?? null) !== null) {
            $obj->businessEntityId = (string) $v;
        }
        if (($v = $data['cart_id'] ?? null) !== null) {
            $obj->cartId = (int) $v;
        }
        if (($v = $data['cart_name'] ?? null) !== null) {
            $obj->cartName = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        return $obj;
    }
}
