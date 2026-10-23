<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ServeMarketOrderGetV10ResponseDataOrderListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $appActiveDays = null;

    /**
     * @var int[]
     */
    protected ?array $appAvailableUserIds = null;

    /**
     * @var int
     */
    protected ?int $appLimitUserCount = null;

    /**
     * @var int
     */
    protected ?int $beginTime = null;

    /**
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * @var int
     */
    protected ?int $endTime = null;

    /**
     * @var int
     */
    protected ?int $fee = null;

    /**
     * @var \Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerFunction
     */
    protected ?\Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerFunction $function = null;

    /**
     * 是否是付费功能点类型的sku
     * @var bool
     */
    protected ?bool $isFunc = null;

    /**
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\ServeMarketOrderGetV10DataOrderListOrderStatus
     */
    protected ?string $orderStatus = null;

    /**
     * @var int
     */
    protected ?int $originPrice = null;

    /**
     * @var int
     */
    protected ?int $paidUserId = null;

    /**
     * @var int
     */
    protected ?int $payTime = null;

    /**
     * @var string
     */
    protected ?string $skuDescription = null;

    /**
     * @var int
     */
    protected ?int $skuId = null;

    /**
     * @var \Oceanengine\Models\ServeMarketOrderGetV10DataOrderListSkuType
     */
    protected ?string $skuType = null;

    /**
     * @var \Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerSpecsInner[]
     */
    protected ?array $specs = null;

    /**
     * @return int
     */
    public function getAppActiveDays(): ?int
    {
        return $this->appActiveDays;
    }

    /**
     * @param int $appActiveDays
     * @return self
     */
    public function setAppActiveDays(?int $appActiveDays): self
    {
        $this->appActiveDays = $appActiveDays;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAppAvailableUserIds(): ?array
    {
        return $this->appAvailableUserIds;
    }

    /**
     * @param int[] $appAvailableUserIds
     * @return self
     */
    public function setAppAvailableUserIds(?array $appAvailableUserIds): self
    {
        $this->appAvailableUserIds = $appAvailableUserIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppLimitUserCount(): ?int
    {
        return $this->appLimitUserCount;
    }

    /**
     * @param int $appLimitUserCount
     * @return self
     */
    public function setAppLimitUserCount(?int $appLimitUserCount): self
    {
        $this->appLimitUserCount = $appLimitUserCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getBeginTime(): ?int
    {
        return $this->beginTime;
    }

    /**
     * @param int $beginTime
     * @return self
     */
    public function setBeginTime(?int $beginTime): self
    {
        $this->beginTime = $beginTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getEndTime(): ?int
    {
        return $this->endTime;
    }

    /**
     * @param int $endTime
     * @return self
     */
    public function setEndTime(?int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getFee(): ?int
    {
        return $this->fee;
    }

    /**
     * @param int $fee
     * @return self
     */
    public function setFee(?int $fee): self
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerFunction
     */
    public function getFunction(): ?\Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerFunction
    {
        return $this->function;
    }

    /**
     * @param \Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerFunction $function
     * @return self
     */
    public function setFunction(?\Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerFunction $function): self
    {
        $this->function = $function;
        return $this;
    }

    /**
     * 是否是付费功能点类型的sku
     * @return bool
     */
    public function getIsFunc(): ?bool
    {
        return $this->isFunc;
    }

    /**
     * 是否是付费功能点类型的sku
     * @param bool $isFunc
     * @return self
     */
    public function setIsFunc(?bool $isFunc): self
    {
        $this->isFunc = $isFunc;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ServeMarketOrderGetV10DataOrderListOrderStatus
     */
    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    /**
     * @param \Oceanengine\Models\ServeMarketOrderGetV10DataOrderListOrderStatus $orderStatus
     * @return self
     */
    public function setOrderStatus(?string $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getOriginPrice(): ?int
    {
        return $this->originPrice;
    }

    /**
     * @param int $originPrice
     * @return self
     */
    public function setOriginPrice(?int $originPrice): self
    {
        $this->originPrice = $originPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaidUserId(): ?int
    {
        return $this->paidUserId;
    }

    /**
     * @param int $paidUserId
     * @return self
     */
    public function setPaidUserId(?int $paidUserId): self
    {
        $this->paidUserId = $paidUserId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayTime(): ?int
    {
        return $this->payTime;
    }

    /**
     * @param int $payTime
     * @return self
     */
    public function setPayTime(?int $payTime): self
    {
        $this->payTime = $payTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkuDescription(): ?string
    {
        return $this->skuDescription;
    }

    /**
     * @param string $skuDescription
     * @return self
     */
    public function setSkuDescription(?string $skuDescription): self
    {
        $this->skuDescription = $skuDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     * @return self
     */
    public function setSkuId(?int $skuId): self
    {
        $this->skuId = $skuId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ServeMarketOrderGetV10DataOrderListSkuType
     */
    public function getSkuType(): ?string
    {
        return $this->skuType;
    }

    /**
     * @param \Oceanengine\Models\ServeMarketOrderGetV10DataOrderListSkuType $skuType
     * @return self
     */
    public function setSkuType(?string $skuType): self
    {
        $this->skuType = $skuType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerSpecsInner[]
     */
    public function getSpecs(): ?array
    {
        return $this->specs;
    }

    /**
     * @param \Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerSpecsInner[] $specs
     * @return self
     */
    public function setSpecs(?array $specs): self
    {
        $this->specs = $specs;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appActiveDays !== null) {
            $result['app_active_days'] = $this->appActiveDays;
        }
        if ($this->appAvailableUserIds !== null) {
            $result['app_available_user_ids'] = $this->appAvailableUserIds;
        }
        if ($this->appLimitUserCount !== null) {
            $result['app_limit_user_count'] = $this->appLimitUserCount;
        }
        if ($this->beginTime !== null) {
            $result['begin_time'] = $this->beginTime;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->fee !== null) {
            $result['fee'] = $this->fee;
        }
        if ($this->function !== null) {
            $result['function'] = $this->function;
        }
        if ($this->isFunc !== null) {
            $result['is_func'] = $this->isFunc;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderStatus !== null) {
            $result['order_status'] = $this->orderStatus;
        }
        if ($this->originPrice !== null) {
            $result['origin_price'] = $this->originPrice;
        }
        if ($this->paidUserId !== null) {
            $result['paid_user_id'] = $this->paidUserId;
        }
        if ($this->payTime !== null) {
            $result['pay_time'] = $this->payTime;
        }
        if ($this->skuDescription !== null) {
            $result['sku_description'] = $this->skuDescription;
        }
        if ($this->skuId !== null) {
            $result['sku_id'] = $this->skuId;
        }
        if ($this->skuType !== null) {
            $result['sku_type'] = $this->skuType;
        }
        if ($this->specs !== null) {
            $result['specs'] = $this->specs;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_active_days'] ?? null) !== null) {
            $obj->appActiveDays = (int) $v;
        }
        if (($v = $data['app_available_user_ids'] ?? null) !== null && is_array($v)) {
            $obj->appAvailableUserIds = $v;
        }
        if (($v = $data['app_limit_user_count'] ?? null) !== null) {
            $obj->appLimitUserCount = (int) $v;
        }
        if (($v = $data['begin_time'] ?? null) !== null) {
            $obj->beginTime = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (int) $v;
        }
        if (($v = $data['fee'] ?? null) !== null) {
            $obj->fee = (int) $v;
        }
        if (($v = $data['function'] ?? null) !== null && is_array($v)) {
            $obj->function = \Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerFunction::fromArray($v);
        }
        if (($v = $data['is_func'] ?? null) !== null) {
            $obj->isFunc = (bool) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_status'] ?? null) !== null) {
            $obj->orderStatus = (string) $v;
        }
        if (($v = $data['origin_price'] ?? null) !== null) {
            $obj->originPrice = (int) $v;
        }
        if (($v = $data['paid_user_id'] ?? null) !== null) {
            $obj->paidUserId = (int) $v;
        }
        if (($v = $data['pay_time'] ?? null) !== null) {
            $obj->payTime = (int) $v;
        }
        if (($v = $data['sku_description'] ?? null) !== null) {
            $obj->skuDescription = (string) $v;
        }
        if (($v = $data['sku_id'] ?? null) !== null) {
            $obj->skuId = (int) $v;
        }
        if (($v = $data['sku_type'] ?? null) !== null) {
            $obj->skuType = (string) $v;
        }
        if (($v = $data['specs'] ?? null) !== null && is_array($v)) {
            $obj->specs = array_map(fn ($vv) => \Oceanengine\Models\ServeMarketOrderGetV10ResponseDataOrderListInnerSpecsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
