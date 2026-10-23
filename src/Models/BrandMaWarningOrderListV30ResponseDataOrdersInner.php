<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaWarningOrderListV30ResponseDataOrdersInner implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 预订单名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 预订单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 产品类型
     * @var int
     */
    protected ?int $proType = null;

    /**
     * 预警类别：1-创意未上传；2-审核原因；3-店铺&商品；4-直播
     * @var int
     */
    protected ?int $warningOrderType = null;

    /**
     * 预警标签
     * @var string[]
     */
    protected ?array $warningTags = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 预订单名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 预订单名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 预订单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 预订单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 产品类型
     * @return int
     */
    public function getProType(): ?int
    {
        return $this->proType;
    }

    /**
     * 产品类型
     * @param int $proType
     * @return self
     */
    public function setProType(?int $proType): self
    {
        $this->proType = $proType;
        return $this;
    }

    /**
     * 预警类别：1-创意未上传；2-审核原因；3-店铺&商品；4-直播
     * @return int
     */
    public function getWarningOrderType(): ?int
    {
        return $this->warningOrderType;
    }

    /**
     * 预警类别：1-创意未上传；2-审核原因；3-店铺&商品；4-直播
     * @param int $warningOrderType
     * @return self
     */
    public function setWarningOrderType(?int $warningOrderType): self
    {
        $this->warningOrderType = $warningOrderType;
        return $this;
    }

    /**
     * 预警标签
     * @return string[]
     */
    public function getWarningTags(): ?array
    {
        return $this->warningTags;
    }

    /**
     * 预警标签
     * @param string[] $warningTags
     * @return self
     */
    public function setWarningTags(?array $warningTags): self
    {
        $this->warningTags = $warningTags;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->proType !== null) {
            $result['pro_type'] = $this->proType;
        }
        if ($this->warningOrderType !== null) {
            $result['warning_order_type'] = $this->warningOrderType;
        }
        if ($this->warningTags !== null) {
            $result['warning_tags'] = $this->warningTags;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['pro_type'] ?? null) !== null) {
            $obj->proType = (int) $v;
        }
        if (($v = $data['warning_order_type'] ?? null) !== null) {
            $obj->warningOrderType = (int) $v;
        }
        if (($v = $data['warning_tags'] ?? null) !== null && is_array($v)) {
            $obj->warningTags = $v;
        }
        return $obj;
    }
}
