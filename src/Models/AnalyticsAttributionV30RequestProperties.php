<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AnalyticsAttributionV30RequestProperties implements \JsonSerializable
{
    /**
     * 订单编号
     * @var string
     */
    protected ?string $orderId = null;

    /**
     * 订单状态
     * @var string
     */
    protected ?string $orderState = null;

    /**
     * 下单金额（付款金额，单位为“分”）如下单金额为13.23元，回传数值为1323 下单金额单位为“分”，请注意不要按照元回传⚠️
     * @var int
     */
    protected ?int $payAmount = null;

    /**
     * 媒体位id，mm_1_2_3
     * @var string
     */
    protected ?string $pid = null;

    /**
     * 商品id，按照淘宝的sku_id进行回传。若订单中包含多个sku，则可在此字段中填写全部sku_id，英文逗号分隔
     * @var string
     */
    protected ?string $productId = null;

    /**
     * 商品图片
     * @var string
     */
    protected ?string $productImag = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 商品数量
     * @var int
     */
    protected ?int $productNumber = null;

    /**
     * 商品单价，单位为“元”
     * @var int
     */
    protected ?int $productPrice = null;

    /**
     * 商品标题
     * @var string
     */
    protected ?string $productTitle = null;

    /**
     * 商品类型
     * @var string
     */
    protected ?string $productType = null;

    /**
     * 收货人所在的城市（若城市为直辖市仍然填写市，如北京市）；当phone_num_blurred值为*******1234类型时必填
     * @var string
     */
    protected ?string $receiverCity = null;

    /**
     * 收货人所在的省份；当phone_num_blurred值为*******1234类型时必填
     * @var string
     */
    protected ?string $receiverProvince = null;

    /**
     * 店铺名称
     * @var string
     */
    protected ?string $shopName = null;

    /**
     * 订单编号
     * @return string
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * 订单编号
     * @param string $orderId
     * @return self
     */
    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 订单状态
     * @return string
     */
    public function getOrderState(): ?string
    {
        return $this->orderState;
    }

    /**
     * 订单状态
     * @param string $orderState
     * @return self
     */
    public function setOrderState(?string $orderState): self
    {
        $this->orderState = $orderState;
        return $this;
    }

    /**
     * 下单金额（付款金额，单位为“分”）如下单金额为13.23元，回传数值为1323 下单金额单位为“分”，请注意不要按照元回传⚠️
     * @return int
     */
    public function getPayAmount(): ?int
    {
        return $this->payAmount;
    }

    /**
     * 下单金额（付款金额，单位为“分”）如下单金额为13.23元，回传数值为1323 下单金额单位为“分”，请注意不要按照元回传⚠️
     * @param int $payAmount
     * @return self
     */
    public function setPayAmount(?int $payAmount): self
    {
        $this->payAmount = $payAmount;
        return $this;
    }

    /**
     * 媒体位id，mm_1_2_3
     * @return string
     */
    public function getPid(): ?string
    {
        return $this->pid;
    }

    /**
     * 媒体位id，mm_1_2_3
     * @param string $pid
     * @return self
     */
    public function setPid(?string $pid): self
    {
        $this->pid = $pid;
        return $this;
    }

    /**
     * 商品id，按照淘宝的sku_id进行回传。若订单中包含多个sku，则可在此字段中填写全部sku_id，英文逗号分隔
     * @return string
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * 商品id，按照淘宝的sku_id进行回传。若订单中包含多个sku，则可在此字段中填写全部sku_id，英文逗号分隔
     * @param string $productId
     * @return self
     */
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 商品图片
     * @return string
     */
    public function getProductImag(): ?string
    {
        return $this->productImag;
    }

    /**
     * 商品图片
     * @param string $productImag
     * @return self
     */
    public function setProductImag(?string $productImag): self
    {
        $this->productImag = $productImag;
        return $this;
    }

    /**
     * 商品名称
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 商品名称
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 商品数量
     * @return int
     */
    public function getProductNumber(): ?int
    {
        return $this->productNumber;
    }

    /**
     * 商品数量
     * @param int $productNumber
     * @return self
     */
    public function setProductNumber(?int $productNumber): self
    {
        $this->productNumber = $productNumber;
        return $this;
    }

    /**
     * 商品单价，单位为“元”
     * @return int
     */
    public function getProductPrice(): ?int
    {
        return $this->productPrice;
    }

    /**
     * 商品单价，单位为“元”
     * @param int $productPrice
     * @return self
     */
    public function setProductPrice(?int $productPrice): self
    {
        $this->productPrice = $productPrice;
        return $this;
    }

    /**
     * 商品标题
     * @return string
     */
    public function getProductTitle(): ?string
    {
        return $this->productTitle;
    }

    /**
     * 商品标题
     * @param string $productTitle
     * @return self
     */
    public function setProductTitle(?string $productTitle): self
    {
        $this->productTitle = $productTitle;
        return $this;
    }

    /**
     * 商品类型
     * @return string
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }

    /**
     * 商品类型
     * @param string $productType
     * @return self
     */
    public function setProductType(?string $productType): self
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * 收货人所在的城市（若城市为直辖市仍然填写市，如北京市）；当phone_num_blurred值为*******1234类型时必填
     * @return string
     */
    public function getReceiverCity(): ?string
    {
        return $this->receiverCity;
    }

    /**
     * 收货人所在的城市（若城市为直辖市仍然填写市，如北京市）；当phone_num_blurred值为*******1234类型时必填
     * @param string $receiverCity
     * @return self
     */
    public function setReceiverCity(?string $receiverCity): self
    {
        $this->receiverCity = $receiverCity;
        return $this;
    }

    /**
     * 收货人所在的省份；当phone_num_blurred值为*******1234类型时必填
     * @return string
     */
    public function getReceiverProvince(): ?string
    {
        return $this->receiverProvince;
    }

    /**
     * 收货人所在的省份；当phone_num_blurred值为*******1234类型时必填
     * @param string $receiverProvince
     * @return self
     */
    public function setReceiverProvince(?string $receiverProvince): self
    {
        $this->receiverProvince = $receiverProvince;
        return $this;
    }

    /**
     * 店铺名称
     * @return string
     */
    public function getShopName(): ?string
    {
        return $this->shopName;
    }

    /**
     * 店铺名称
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
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderState !== null) {
            $result['order_state'] = $this->orderState;
        }
        if ($this->payAmount !== null) {
            $result['pay_amount'] = $this->payAmount;
        }
        if ($this->pid !== null) {
            $result['pid'] = $this->pid;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->productImag !== null) {
            $result['product_imag'] = $this->productImag;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->productNumber !== null) {
            $result['product_number'] = $this->productNumber;
        }
        if ($this->productPrice !== null) {
            $result['product_price'] = $this->productPrice;
        }
        if ($this->productTitle !== null) {
            $result['product_title'] = $this->productTitle;
        }
        if ($this->productType !== null) {
            $result['product_type'] = $this->productType;
        }
        if ($this->receiverCity !== null) {
            $result['receiver_city'] = $this->receiverCity;
        }
        if ($this->receiverProvince !== null) {
            $result['receiver_province'] = $this->receiverProvince;
        }
        if ($this->shopName !== null) {
            $result['shop_name'] = $this->shopName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (string) $v;
        }
        if (($v = $data['order_state'] ?? null) !== null) {
            $obj->orderState = (string) $v;
        }
        if (($v = $data['pay_amount'] ?? null) !== null) {
            $obj->payAmount = (int) $v;
        }
        if (($v = $data['pid'] ?? null) !== null) {
            $obj->pid = (string) $v;
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (string) $v;
        }
        if (($v = $data['product_imag'] ?? null) !== null) {
            $obj->productImag = (string) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['product_number'] ?? null) !== null) {
            $obj->productNumber = (int) $v;
        }
        if (($v = $data['product_price'] ?? null) !== null) {
            $obj->productPrice = (int) $v;
        }
        if (($v = $data['product_title'] ?? null) !== null) {
            $obj->productTitle = (string) $v;
        }
        if (($v = $data['product_type'] ?? null) !== null) {
            $obj->productType = (string) $v;
        }
        if (($v = $data['receiver_city'] ?? null) !== null) {
            $obj->receiverCity = (string) $v;
        }
        if (($v = $data['receiver_province'] ?? null) !== null) {
            $obj->receiverProvince = (string) $v;
        }
        if (($v = $data['shop_name'] ?? null) !== null) {
            $obj->shopName = (string) $v;
        }
        return $obj;
    }
}
