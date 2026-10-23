<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaMaterialListV30OrderFilter implements \JsonSerializable
{
    /**
     * 产品类型
     * @var int[]
     */
    protected ?array $adForm = null;

    /**
     * 进阶选项
     * @var int
     */
    protected ?int $advancedOption = null;

    /**
     * 投放位置
     * @var int
     */
    protected ?int $appOrigin = null;

    /**
     * 预订单创建结束时间
     * @var string
     */
    protected ?string $createEndTime = null;

    /**
     * 预订单创建开始时间
     * @var string
     */
    protected ?string $createStartTime = null;

    /**
     * 优化目标
     * @var int
     */
    protected ?int $gdSendType = null;

    /**
     * 预订单结束开始时间
     * @var string
     */
    protected ?string $orderEndTime = null;

    /**
     * 预定单ID
     * @var string
     */
    protected ?string $orderId = null;

    /**
     * 预订单名称
     * @var string
     */
    protected ?string $orderName = null;

    /**
     * 预订单投放开始时间
     * @var string
     */
    protected ?string $orderStartTime = null;

    /**
     * 预订单状态
     * @var int[]
     */
    protected ?array $orderStatus = null;

    /**
     * 投放产品
     * @var int
     */
    protected ?int $proType = null;

    /**
     * 产品类型
     * @return int[]
     */
    public function getAdForm(): ?array
    {
        return $this->adForm;
    }

    /**
     * 产品类型
     * @param int[] $adForm
     * @return self
     */
    public function setAdForm(?array $adForm): self
    {
        $this->adForm = $adForm;
        return $this;
    }

    /**
     * 进阶选项
     * @return int
     */
    public function getAdvancedOption(): ?int
    {
        return $this->advancedOption;
    }

    /**
     * 进阶选项
     * @param int $advancedOption
     * @return self
     */
    public function setAdvancedOption(?int $advancedOption): self
    {
        $this->advancedOption = $advancedOption;
        return $this;
    }

    /**
     * 投放位置
     * @return int
     */
    public function getAppOrigin(): ?int
    {
        return $this->appOrigin;
    }

    /**
     * 投放位置
     * @param int $appOrigin
     * @return self
     */
    public function setAppOrigin(?int $appOrigin): self
    {
        $this->appOrigin = $appOrigin;
        return $this;
    }

    /**
     * 预订单创建结束时间
     * @return string
     */
    public function getCreateEndTime(): ?string
    {
        return $this->createEndTime;
    }

    /**
     * 预订单创建结束时间
     * @param string $createEndTime
     * @return self
     */
    public function setCreateEndTime(?string $createEndTime): self
    {
        $this->createEndTime = $createEndTime;
        return $this;
    }

    /**
     * 预订单创建开始时间
     * @return string
     */
    public function getCreateStartTime(): ?string
    {
        return $this->createStartTime;
    }

    /**
     * 预订单创建开始时间
     * @param string $createStartTime
     * @return self
     */
    public function setCreateStartTime(?string $createStartTime): self
    {
        $this->createStartTime = $createStartTime;
        return $this;
    }

    /**
     * 优化目标
     * @return int
     */
    public function getGdSendType(): ?int
    {
        return $this->gdSendType;
    }

    /**
     * 优化目标
     * @param int $gdSendType
     * @return self
     */
    public function setGdSendType(?int $gdSendType): self
    {
        $this->gdSendType = $gdSendType;
        return $this;
    }

    /**
     * 预订单结束开始时间
     * @return string
     */
    public function getOrderEndTime(): ?string
    {
        return $this->orderEndTime;
    }

    /**
     * 预订单结束开始时间
     * @param string $orderEndTime
     * @return self
     */
    public function setOrderEndTime(?string $orderEndTime): self
    {
        $this->orderEndTime = $orderEndTime;
        return $this;
    }

    /**
     * 预定单ID
     * @return string
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * 预定单ID
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
     * 预订单投放开始时间
     * @return string
     */
    public function getOrderStartTime(): ?string
    {
        return $this->orderStartTime;
    }

    /**
     * 预订单投放开始时间
     * @param string $orderStartTime
     * @return self
     */
    public function setOrderStartTime(?string $orderStartTime): self
    {
        $this->orderStartTime = $orderStartTime;
        return $this;
    }

    /**
     * 预订单状态
     * @return int[]
     */
    public function getOrderStatus(): ?array
    {
        return $this->orderStatus;
    }

    /**
     * 预订单状态
     * @param int[] $orderStatus
     * @return self
     */
    public function setOrderStatus(?array $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * 投放产品
     * @return int
     */
    public function getProType(): ?int
    {
        return $this->proType;
    }

    /**
     * 投放产品
     * @param int $proType
     * @return self
     */
    public function setProType(?int $proType): self
    {
        $this->proType = $proType;
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
        if ($this->gdSendType !== null) {
            $result['gd_send_type'] = $this->gdSendType;
        }
        if ($this->orderEndTime !== null) {
            $result['order_end_time'] = $this->orderEndTime;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderName !== null) {
            $result['order_name'] = $this->orderName;
        }
        if ($this->orderStartTime !== null) {
            $result['order_start_time'] = $this->orderStartTime;
        }
        if ($this->orderStatus !== null) {
            $result['order_status'] = $this->orderStatus;
        }
        if ($this->proType !== null) {
            $result['pro_type'] = $this->proType;
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
            $obj->advancedOption = (int) $v;
        }
        if (($v = $data['app_origin'] ?? null) !== null) {
            $obj->appOrigin = (int) $v;
        }
        if (($v = $data['create_end_time'] ?? null) !== null) {
            $obj->createEndTime = (string) $v;
        }
        if (($v = $data['create_start_time'] ?? null) !== null) {
            $obj->createStartTime = (string) $v;
        }
        if (($v = $data['gd_send_type'] ?? null) !== null) {
            $obj->gdSendType = (int) $v;
        }
        if (($v = $data['order_end_time'] ?? null) !== null) {
            $obj->orderEndTime = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (string) $v;
        }
        if (($v = $data['order_name'] ?? null) !== null) {
            $obj->orderName = (string) $v;
        }
        if (($v = $data['order_start_time'] ?? null) !== null) {
            $obj->orderStartTime = (string) $v;
        }
        if (($v = $data['order_status'] ?? null) !== null && is_array($v)) {
            $obj->orderStatus = $v;
        }
        if (($v = $data['pro_type'] ?? null) !== null) {
            $obj->proType = (int) $v;
        }
        return $obj;
    }
}
