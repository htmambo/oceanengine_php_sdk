<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderDetailV10ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAddAmountInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAddAmountInfo $addAmountInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAuditRecord
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAuditRecord $auditRecord = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAwemeInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAwemeInfo $awemeInfo = null;

    /**
     * 订单优惠券信息
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataCouponInfosInner[]
     */
    protected ?array $couponInfos = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 订单创建时间
     * @var string
     */
    protected ?string $orderCreateTime = null;

    /**
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataProductInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataProductInfo $productInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataStatus
     */
    protected ?string $status = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAddAmountInfo
     */
    public function getAddAmountInfo(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAddAmountInfo
    {
        return $this->addAmountInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAddAmountInfo $addAmountInfo
     * @return self
     */
    public function setAddAmountInfo(?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAddAmountInfo $addAmountInfo): self
    {
        $this->addAmountInfo = $addAmountInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAuditRecord
     */
    public function getAuditRecord(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAuditRecord
    {
        return $this->auditRecord;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAuditRecord $auditRecord
     * @return self
     */
    public function setAuditRecord(?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAuditRecord $auditRecord): self
    {
        $this->auditRecord = $auditRecord;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAwemeInfo
     */
    public function getAwemeInfo(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAwemeInfo
    {
        return $this->awemeInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAwemeInfo $awemeInfo
     * @return self
     */
    public function setAwemeInfo(?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAwemeInfo $awemeInfo): self
    {
        $this->awemeInfo = $awemeInfo;
        return $this;
    }

    /**
     * 订单优惠券信息
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataCouponInfosInner[]
     */
    public function getCouponInfos(): ?array
    {
        return $this->couponInfos;
    }

    /**
     * 订单优惠券信息
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataCouponInfosInner[] $couponInfos
     * @return self
     */
    public function setCouponInfos(?array $couponInfos): self
    {
        $this->couponInfos = $couponInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 订单创建时间
     * @return string
     */
    public function getOrderCreateTime(): ?string
    {
        return $this->orderCreateTime;
    }

    /**
     * 订单创建时间
     * @param string $orderCreateTime
     * @return self
     */
    public function setOrderCreateTime(?string $orderCreateTime): self
    {
        $this->orderCreateTime = $orderCreateTime;
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
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->addAmountInfo !== null) {
            $result['add_amount_info'] = $this->addAmountInfo;
        }
        if ($this->auditRecord !== null) {
            $result['audit_record'] = $this->auditRecord;
        }
        if ($this->awemeInfo !== null) {
            $result['aweme_info'] = $this->awemeInfo;
        }
        if ($this->couponInfos !== null) {
            $result['coupon_infos'] = $this->couponInfos;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->orderCreateTime !== null) {
            $result['order_create_time'] = $this->orderCreateTime;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['add_amount_info'] ?? null) !== null && is_array($v)) {
            $obj->addAmountInfo = \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAddAmountInfo::fromArray($v);
        }
        if (($v = $data['audit_record'] ?? null) !== null && is_array($v)) {
            $obj->auditRecord = \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAuditRecord::fromArray($v);
        }
        if (($v = $data['aweme_info'] ?? null) !== null && is_array($v)) {
            $obj->awemeInfo = \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataAwemeInfo::fromArray($v);
        }
        if (($v = $data['coupon_infos'] ?? null) !== null && is_array($v)) {
            $obj->couponInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataCouponInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataDeliverySetting::fromArray($v);
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['order_create_time'] ?? null) !== null) {
            $obj->orderCreateTime = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = \Oceanengine\Models\QianchuanAwemeUniPromotionOrderDetailV10ResponseDataProductInfo::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
