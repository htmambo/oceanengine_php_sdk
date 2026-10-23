<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataAdListInner implements \JsonSerializable
{
    /**
     * 计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 数据起始时间，当time_granularity有入參时返回
     * @var string
     */
    protected ?string $startDateTime = null;

    /**
     * 整体消耗，单位元
     * @var float
     */
    protected ?float $statCostForRoi2 = null;

    /**
     * 净成交订单成本
     * @var float
     */
    protected ?float $totalCostPerPayOrderSettleForRoi21h = null;

    /**
     * 平台补贴金额，单位元
     * @var float
     */
    protected ?float $totalEcomPlatformSubsidyAmountForRoi2 = null;

    /**
     * 净成交金额，单位元
     * @var float
     */
    protected ?float $totalOrderSettleAmountForRoi21h = null;

    /**
     * 净成交订单数
     * @var int
     */
    protected ?int $totalOrderSettleCountForRoi21h = null;

    /**
     * 整体成交订单数
     * @var int
     */
    protected ?int $totalPayOrderCountForRoi2 = null;

    /**
     * 整体成交智能优惠券金额，单位元
     * @var float
     */
    protected ?float $totalPayOrderCouponAmountForRoi2 = null;

    /**
     * 用户实际支付金额，单位元
     * @var float
     */
    protected ?float $totalPayOrderGmvForRoi2 = null;

    /**
     * 整体成交金额，单位元
     * @var float
     */
    protected ?float $totalPayOrderGmvIncludeCouponForRoi2 = null;

    /**
     * 整体支付ROI
     * @var float
     */
    protected ?float $totalPrepayAndPayOrderRoi2 = null;

    /**
     * 净成交ROI
     * @var float
     */
    protected ?float $totalPrepayAndPaySettleRoi21h = null;

    /**
     * 整体未完结预售订单预估金额，单位元
     * @var float
     */
    protected ?float $totalUnfinishedEstimateOrderGmvForRoi2 = null;

    /**
     * 计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 数据起始时间，当time_granularity有入參时返回
     * @return string
     */
    public function getStartDateTime(): ?string
    {
        return $this->startDateTime;
    }

    /**
     * 数据起始时间，当time_granularity有入參时返回
     * @param string $startDateTime
     * @return self
     */
    public function setStartDateTime(?string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * 整体消耗，单位元
     * @return float
     */
    public function getStatCostForRoi2(): ?float
    {
        return $this->statCostForRoi2;
    }

    /**
     * 整体消耗，单位元
     * @param float $statCostForRoi2
     * @return self
     */
    public function setStatCostForRoi2(?float $statCostForRoi2): self
    {
        $this->statCostForRoi2 = $statCostForRoi2;
        return $this;
    }

    /**
     * 净成交订单成本
     * @return float
     */
    public function getTotalCostPerPayOrderSettleForRoi21h(): ?float
    {
        return $this->totalCostPerPayOrderSettleForRoi21h;
    }

    /**
     * 净成交订单成本
     * @param float $totalCostPerPayOrderSettleForRoi21h
     * @return self
     */
    public function setTotalCostPerPayOrderSettleForRoi21h(?float $totalCostPerPayOrderSettleForRoi21h): self
    {
        $this->totalCostPerPayOrderSettleForRoi21h = $totalCostPerPayOrderSettleForRoi21h;
        return $this;
    }

    /**
     * 平台补贴金额，单位元
     * @return float
     */
    public function getTotalEcomPlatformSubsidyAmountForRoi2(): ?float
    {
        return $this->totalEcomPlatformSubsidyAmountForRoi2;
    }

    /**
     * 平台补贴金额，单位元
     * @param float $totalEcomPlatformSubsidyAmountForRoi2
     * @return self
     */
    public function setTotalEcomPlatformSubsidyAmountForRoi2(?float $totalEcomPlatformSubsidyAmountForRoi2): self
    {
        $this->totalEcomPlatformSubsidyAmountForRoi2 = $totalEcomPlatformSubsidyAmountForRoi2;
        return $this;
    }

    /**
     * 净成交金额，单位元
     * @return float
     */
    public function getTotalOrderSettleAmountForRoi21h(): ?float
    {
        return $this->totalOrderSettleAmountForRoi21h;
    }

    /**
     * 净成交金额，单位元
     * @param float $totalOrderSettleAmountForRoi21h
     * @return self
     */
    public function setTotalOrderSettleAmountForRoi21h(?float $totalOrderSettleAmountForRoi21h): self
    {
        $this->totalOrderSettleAmountForRoi21h = $totalOrderSettleAmountForRoi21h;
        return $this;
    }

    /**
     * 净成交订单数
     * @return int
     */
    public function getTotalOrderSettleCountForRoi21h(): ?int
    {
        return $this->totalOrderSettleCountForRoi21h;
    }

    /**
     * 净成交订单数
     * @param int $totalOrderSettleCountForRoi21h
     * @return self
     */
    public function setTotalOrderSettleCountForRoi21h(?int $totalOrderSettleCountForRoi21h): self
    {
        $this->totalOrderSettleCountForRoi21h = $totalOrderSettleCountForRoi21h;
        return $this;
    }

    /**
     * 整体成交订单数
     * @return int
     */
    public function getTotalPayOrderCountForRoi2(): ?int
    {
        return $this->totalPayOrderCountForRoi2;
    }

    /**
     * 整体成交订单数
     * @param int $totalPayOrderCountForRoi2
     * @return self
     */
    public function setTotalPayOrderCountForRoi2(?int $totalPayOrderCountForRoi2): self
    {
        $this->totalPayOrderCountForRoi2 = $totalPayOrderCountForRoi2;
        return $this;
    }

    /**
     * 整体成交智能优惠券金额，单位元
     * @return float
     */
    public function getTotalPayOrderCouponAmountForRoi2(): ?float
    {
        return $this->totalPayOrderCouponAmountForRoi2;
    }

    /**
     * 整体成交智能优惠券金额，单位元
     * @param float $totalPayOrderCouponAmountForRoi2
     * @return self
     */
    public function setTotalPayOrderCouponAmountForRoi2(?float $totalPayOrderCouponAmountForRoi2): self
    {
        $this->totalPayOrderCouponAmountForRoi2 = $totalPayOrderCouponAmountForRoi2;
        return $this;
    }

    /**
     * 用户实际支付金额，单位元
     * @return float
     */
    public function getTotalPayOrderGmvForRoi2(): ?float
    {
        return $this->totalPayOrderGmvForRoi2;
    }

    /**
     * 用户实际支付金额，单位元
     * @param float $totalPayOrderGmvForRoi2
     * @return self
     */
    public function setTotalPayOrderGmvForRoi2(?float $totalPayOrderGmvForRoi2): self
    {
        $this->totalPayOrderGmvForRoi2 = $totalPayOrderGmvForRoi2;
        return $this;
    }

    /**
     * 整体成交金额，单位元
     * @return float
     */
    public function getTotalPayOrderGmvIncludeCouponForRoi2(): ?float
    {
        return $this->totalPayOrderGmvIncludeCouponForRoi2;
    }

    /**
     * 整体成交金额，单位元
     * @param float $totalPayOrderGmvIncludeCouponForRoi2
     * @return self
     */
    public function setTotalPayOrderGmvIncludeCouponForRoi2(?float $totalPayOrderGmvIncludeCouponForRoi2): self
    {
        $this->totalPayOrderGmvIncludeCouponForRoi2 = $totalPayOrderGmvIncludeCouponForRoi2;
        return $this;
    }

    /**
     * 整体支付ROI
     * @return float
     */
    public function getTotalPrepayAndPayOrderRoi2(): ?float
    {
        return $this->totalPrepayAndPayOrderRoi2;
    }

    /**
     * 整体支付ROI
     * @param float $totalPrepayAndPayOrderRoi2
     * @return self
     */
    public function setTotalPrepayAndPayOrderRoi2(?float $totalPrepayAndPayOrderRoi2): self
    {
        $this->totalPrepayAndPayOrderRoi2 = $totalPrepayAndPayOrderRoi2;
        return $this;
    }

    /**
     * 净成交ROI
     * @return float
     */
    public function getTotalPrepayAndPaySettleRoi21h(): ?float
    {
        return $this->totalPrepayAndPaySettleRoi21h;
    }

    /**
     * 净成交ROI
     * @param float $totalPrepayAndPaySettleRoi21h
     * @return self
     */
    public function setTotalPrepayAndPaySettleRoi21h(?float $totalPrepayAndPaySettleRoi21h): self
    {
        $this->totalPrepayAndPaySettleRoi21h = $totalPrepayAndPaySettleRoi21h;
        return $this;
    }

    /**
     * 整体未完结预售订单预估金额，单位元
     * @return float
     */
    public function getTotalUnfinishedEstimateOrderGmvForRoi2(): ?float
    {
        return $this->totalUnfinishedEstimateOrderGmvForRoi2;
    }

    /**
     * 整体未完结预售订单预估金额，单位元
     * @param float $totalUnfinishedEstimateOrderGmvForRoi2
     * @return self
     */
    public function setTotalUnfinishedEstimateOrderGmvForRoi2(?float $totalUnfinishedEstimateOrderGmvForRoi2): self
    {
        $this->totalUnfinishedEstimateOrderGmvForRoi2 = $totalUnfinishedEstimateOrderGmvForRoi2;
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
        if ($this->startDateTime !== null) {
            $result['start_date_time'] = $this->startDateTime;
        }
        if ($this->statCostForRoi2 !== null) {
            $result['stat_cost_for_roi2'] = $this->statCostForRoi2;
        }
        if ($this->totalCostPerPayOrderSettleForRoi21h !== null) {
            $result['total_cost_per_pay_order_settle_for_roi2_1h'] = $this->totalCostPerPayOrderSettleForRoi21h;
        }
        if ($this->totalEcomPlatformSubsidyAmountForRoi2 !== null) {
            $result['total_ecom_platform_subsidy_amount_for_roi2'] = $this->totalEcomPlatformSubsidyAmountForRoi2;
        }
        if ($this->totalOrderSettleAmountForRoi21h !== null) {
            $result['total_order_settle_amount_for_roi2_1h'] = $this->totalOrderSettleAmountForRoi21h;
        }
        if ($this->totalOrderSettleCountForRoi21h !== null) {
            $result['total_order_settle_count_for_roi2_1h'] = $this->totalOrderSettleCountForRoi21h;
        }
        if ($this->totalPayOrderCountForRoi2 !== null) {
            $result['total_pay_order_count_for_roi2'] = $this->totalPayOrderCountForRoi2;
        }
        if ($this->totalPayOrderCouponAmountForRoi2 !== null) {
            $result['total_pay_order_coupon_amount_for_roi2'] = $this->totalPayOrderCouponAmountForRoi2;
        }
        if ($this->totalPayOrderGmvForRoi2 !== null) {
            $result['total_pay_order_gmv_for_roi2'] = $this->totalPayOrderGmvForRoi2;
        }
        if ($this->totalPayOrderGmvIncludeCouponForRoi2 !== null) {
            $result['total_pay_order_gmv_include_coupon_for_roi2'] = $this->totalPayOrderGmvIncludeCouponForRoi2;
        }
        if ($this->totalPrepayAndPayOrderRoi2 !== null) {
            $result['total_prepay_and_pay_order_roi2'] = $this->totalPrepayAndPayOrderRoi2;
        }
        if ($this->totalPrepayAndPaySettleRoi21h !== null) {
            $result['total_prepay_and_pay_settle_roi2_1h'] = $this->totalPrepayAndPaySettleRoi21h;
        }
        if ($this->totalUnfinishedEstimateOrderGmvForRoi2 !== null) {
            $result['total_unfinished_estimate_order_gmv_for_roi2'] = $this->totalUnfinishedEstimateOrderGmvForRoi2;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['start_date_time'] ?? null) !== null) {
            $obj->startDateTime = (string) $v;
        }
        if (($v = $data['stat_cost_for_roi2'] ?? null) !== null) {
            $obj->statCostForRoi2 = (float) $v;
        }
        if (($v = $data['total_cost_per_pay_order_settle_for_roi2_1h'] ?? null) !== null) {
            $obj->totalCostPerPayOrderSettleForRoi21h = (float) $v;
        }
        if (($v = $data['total_ecom_platform_subsidy_amount_for_roi2'] ?? null) !== null) {
            $obj->totalEcomPlatformSubsidyAmountForRoi2 = (float) $v;
        }
        if (($v = $data['total_order_settle_amount_for_roi2_1h'] ?? null) !== null) {
            $obj->totalOrderSettleAmountForRoi21h = (float) $v;
        }
        if (($v = $data['total_order_settle_count_for_roi2_1h'] ?? null) !== null) {
            $obj->totalOrderSettleCountForRoi21h = (int) $v;
        }
        if (($v = $data['total_pay_order_count_for_roi2'] ?? null) !== null) {
            $obj->totalPayOrderCountForRoi2 = (int) $v;
        }
        if (($v = $data['total_pay_order_coupon_amount_for_roi2'] ?? null) !== null) {
            $obj->totalPayOrderCouponAmountForRoi2 = (float) $v;
        }
        if (($v = $data['total_pay_order_gmv_for_roi2'] ?? null) !== null) {
            $obj->totalPayOrderGmvForRoi2 = (float) $v;
        }
        if (($v = $data['total_pay_order_gmv_include_coupon_for_roi2'] ?? null) !== null) {
            $obj->totalPayOrderGmvIncludeCouponForRoi2 = (float) $v;
        }
        if (($v = $data['total_prepay_and_pay_order_roi2'] ?? null) !== null) {
            $obj->totalPrepayAndPayOrderRoi2 = (float) $v;
        }
        if (($v = $data['total_prepay_and_pay_settle_roi2_1h'] ?? null) !== null) {
            $obj->totalPrepayAndPaySettleRoi21h = (float) $v;
        }
        if (($v = $data['total_unfinished_estimate_order_gmv_for_roi2'] ?? null) !== null) {
            $obj->totalUnfinishedEstimateOrderGmvForRoi2 = (float) $v;
        }
        return $obj;
    }
}
