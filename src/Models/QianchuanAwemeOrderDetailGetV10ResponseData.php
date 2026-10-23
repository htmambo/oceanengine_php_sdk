<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeOrderDetailGetV10ResponseData implements \JsonSerializable
{
    /**
     * 计划id，未支付的订单无计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAddAmountInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAddAmountInfo $addAmountInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAudience
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAudience $audience = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAuditRecord
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAuditRecord $auditRecord = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAwemeInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAwemeInfo $awemeInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfo $couponInfo = null;

    /**
     * 批量优惠券信息
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfosInner[]
     */
    protected ?array $couponInfos = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 订单创建时间
     * @var string
     */
    protected ?string $orderCreateTime = null;

    /**
     * 订单ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataProductInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataProductInfo $productInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataRoomInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataRoomInfo $roomInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataVideoInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataVideoInfo $videoInfo = null;

    /**
     * 计划id，未支付的订单无计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划id，未支付的订单无计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAddAmountInfo
     */
    public function getAddAmountInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAddAmountInfo
    {
        return $this->addAmountInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAddAmountInfo $addAmountInfo
     * @return self
     */
    public function setAddAmountInfo(?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAddAmountInfo $addAmountInfo): self
    {
        $this->addAmountInfo = $addAmountInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAudience
     */
    public function getAudience(): ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAuditRecord
     */
    public function getAuditRecord(): ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAuditRecord
    {
        return $this->auditRecord;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAuditRecord $auditRecord
     * @return self
     */
    public function setAuditRecord(?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAuditRecord $auditRecord): self
    {
        $this->auditRecord = $auditRecord;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAwemeInfo
     */
    public function getAwemeInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAwemeInfo
    {
        return $this->awemeInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAwemeInfo $awemeInfo
     * @return self
     */
    public function setAwemeInfo(?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAwemeInfo $awemeInfo): self
    {
        $this->awemeInfo = $awemeInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfo
     */
    public function getCouponInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfo
    {
        return $this->couponInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfo $couponInfo
     * @return self
     */
    public function setCouponInfo(?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfo $couponInfo): self
    {
        $this->couponInfo = $couponInfo;
        return $this;
    }

    /**
     * 批量优惠券信息
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfosInner[]
     */
    public function getCouponInfos(): ?array
    {
        return $this->couponInfos;
    }

    /**
     * 批量优惠券信息
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfosInner[] $couponInfos
     * @return self
     */
    public function setCouponInfos(?array $couponInfos): self
    {
        $this->couponInfos = $couponInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataMarketingGoal $marketingGoal
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
     * 订单ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 订单ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataProductInfo
     */
    public function getProductInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataProductInfo
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataProductInfo $productInfo
     * @return self
     */
    public function setProductInfo(?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataProductInfo $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataRoomInfo
     */
    public function getRoomInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataRoomInfo
    {
        return $this->roomInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataRoomInfo $roomInfo
     * @return self
     */
    public function setRoomInfo(?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataRoomInfo $roomInfo): self
    {
        $this->roomInfo = $roomInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataVideoInfo
     */
    public function getVideoInfo(): ?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataVideoInfo
    {
        return $this->videoInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataVideoInfo $videoInfo
     * @return self
     */
    public function setVideoInfo(?\Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataVideoInfo $videoInfo): self
    {
        $this->videoInfo = $videoInfo;
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
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->auditRecord !== null) {
            $result['audit_record'] = $this->auditRecord;
        }
        if ($this->awemeInfo !== null) {
            $result['aweme_info'] = $this->awemeInfo;
        }
        if ($this->couponInfo !== null) {
            $result['coupon_info'] = $this->couponInfo;
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
        if ($this->roomInfo !== null) {
            $result['room_info'] = $this->roomInfo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->videoInfo !== null) {
            $result['video_info'] = $this->videoInfo;
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
            $obj->addAmountInfo = \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAddAmountInfo::fromArray($v);
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAudience::fromArray($v);
        }
        if (($v = $data['audit_record'] ?? null) !== null && is_array($v)) {
            $obj->auditRecord = \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAuditRecord::fromArray($v);
        }
        if (($v = $data['aweme_info'] ?? null) !== null && is_array($v)) {
            $obj->awemeInfo = \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataAwemeInfo::fromArray($v);
        }
        if (($v = $data['coupon_info'] ?? null) !== null && is_array($v)) {
            $obj->couponInfo = \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfo::fromArray($v);
        }
        if (($v = $data['coupon_infos'] ?? null) !== null && is_array($v)) {
            $obj->couponInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataCouponInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataDeliverySetting::fromArray($v);
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
            $obj->productInfo = \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataProductInfo::fromArray($v);
        }
        if (($v = $data['room_info'] ?? null) !== null && is_array($v)) {
            $obj->roomInfo = \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataRoomInfo::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['video_info'] ?? null) !== null && is_array($v)) {
            $obj->videoInfo = \Oceanengine\Models\QianchuanAwemeOrderDetailGetV10ResponseDataVideoInfo::fromArray($v);
        }
        return $obj;
    }
}
