<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30OrderFilter implements \JsonSerializable
{
    /**
     * 产品
     * @var \Oceanengine\Models\BrandMaterialListV30OrderFilterAdForm[]
     */
    protected ?array $adForm = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30OrderFilterAdvancedOption
     */
    protected ?string $advancedOption = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30OrderFilterAppOrigin
     */
    protected ?string $appOrigin = null;

    /**
     * 预订单创建截止时间
     * @var string
     */
    protected ?string $createEndTime = null;

    /**
     * 预订单创建起始时间
     * @var string
     */
    protected ?string $createStartTime = null;

    /**
     * 预订单截止投放时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30OrderFilterGdSendType
     */
    protected ?string $gdSendType = null;

    /**
     * 预订单ID
     * @var string
     */
    protected ?string $orderId = null;

    /**
     * 预订单名称
     * @var string
     */
    protected ?string $orderName = null;

    /**
     * 预订单状态
     * @var \Oceanengine\Models\BrandMaterialListV30OrderFilterOrderStatus[]
     */
    protected ?array $orderStatus = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30OrderFilterProType
     */
    protected ?string $proType = null;

    /**
     * 预订单起始投放时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 产品
     * @return \Oceanengine\Models\BrandMaterialListV30OrderFilterAdForm[]
     */
    public function getAdForm(): ?array
    {
        return $this->adForm;
    }

    /**
     * 产品
     * @param \Oceanengine\Models\BrandMaterialListV30OrderFilterAdForm[] $adForm
     * @return self
     */
    public function setAdForm(?array $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30OrderFilterAdvancedOption
     */
    public function getAdvancedOption(): ?string
    {
        return $this->advancedOption;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30OrderFilterAdvancedOption $advancedOption
     * @return self
     */
    public function setAdvancedOption(?string $advancedOption): self
    {
        $this->advancedOption = $advancedOption;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30OrderFilterAppOrigin
     */
    public function getAppOrigin(): ?string
    {
        return $this->appOrigin;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30OrderFilterAppOrigin $appOrigin
     * @return self
     */
    public function setAppOrigin(?string $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * 预订单创建截止时间
     * @return string
     */
    public function getCreateEndTime(): ?string
    {
        return $this->createEndTime;
    }

    /**
     * 预订单创建截止时间
     * @param string $createEndTime
     * @return self
     */
    public function setCreateEndTime(?string $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * 预订单创建起始时间
     * @return string
     */
    public function getCreateStartTime(): ?string
    {
        return $this->createStartTime;
    }

    /**
     * 预订单创建起始时间
     * @param string $createStartTime
     * @return self
     */
    public function setCreateStartTime(?string $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * 预订单截止投放时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 预订单截止投放时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30OrderFilterGdSendType
     */
    public function getGdSendType(): ?string
    {
        return $this->gdSendType;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30OrderFilterGdSendType $gdSendType
     * @return self
     */
    public function setGdSendType(?string $gdSendType): self
    {
        $this->gdSendType = $gdSendType;
        return $this;
    }

    /**
     * 预订单ID
     * @return string
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * 预订单ID
     * @param string $orderId
     * @return self
     */
    public function setOrderId(?string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 预订单名称
     * @return string
     */
    public function getOrderName(): ?string
    {
        return $this->orderName;
    }

    /**
     * 预订单名称
     * @param string $orderName
     * @return self
     */
    public function setOrderName(?string $orderName): self
    {
        $this->orderName = $orderName;
        return $this;
    }

    /**
     * 预订单状态
     * @return \Oceanengine\Models\BrandMaterialListV30OrderFilterOrderStatus[]
     */
    public function getOrderStatus(): ?array
    {
        return $this->orderStatus;
    }

    /**
     * 预订单状态
     * @param \Oceanengine\Models\BrandMaterialListV30OrderFilterOrderStatus[] $orderStatus
     * @return self
     */
    public function setOrderStatus(?array $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30OrderFilterProType
     */
    public function getProType(): ?string
    {
        return $this->proType;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30OrderFilterProType $proType
     * @return self
     */
    public function setProType(?string $proType): self
    {
        $this->proType = $proType;
        return $this;
    }

    /**
     * 预订单起始投放时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 预订单起始投放时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adForm !== null) {
            $result['ad_form'] = $this->adForm;
        }
        if ($this->advancedOption !== null) {
            $result['advanced_option'] = $this->advancedOption;
        }
        if ($this->appOrigin !== null) {
            $result['app_origin'] = $this->appOrigin;
        }
        if ($this->createEndTime !== null) {
            $result['create_end_time'] = $this->createEndTime;
        }
        if ($this->createStartTime !== null) {
            $result['create_start_time'] = $this->createStartTime;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->gdSendType !== null) {
            $result['gd_send_type'] = $this->gdSendType;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderName !== null) {
            $result['order_name'] = $this->orderName;
        }
        if ($this->orderStatus !== null) {
            $result['order_status'] = $this->orderStatus;
        }
        if ($this->proType !== null) {
            $result['pro_type'] = $this->proType;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_form'] ?? null) !== null && is_array($v)) {
            $obj->adForm = $v;
        }
        if (($v = $data['advanced_option'] ?? null) !== null) {
            $obj->advancedOption = (string) $v;
        }
        if (($v = $data['app_origin'] ?? null) !== null) {
            $obj->appOrigin = (string) $v;
        }
        if (($v = $data['create_end_time'] ?? null) !== null) {
            $obj->createEndTime = (string) $v;
        }
        if (($v = $data['create_start_time'] ?? null) !== null) {
            $obj->createStartTime = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['gd_send_type'] ?? null) !== null) {
            $obj->gdSendType = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (string) $v;
        }
        if (($v = $data['order_name'] ?? null) !== null) {
            $obj->orderName = (string) $v;
        }
        if (($v = $data['order_status'] ?? null) !== null && is_array($v)) {
            $obj->orderStatus = $v;
        }
        if (($v = $data['pro_type'] ?? null) !== null) {
            $obj->proType = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
