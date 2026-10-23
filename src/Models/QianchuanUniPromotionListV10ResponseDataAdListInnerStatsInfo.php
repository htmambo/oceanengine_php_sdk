<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionListV10ResponseDataAdListInnerStatsInfo implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $noRefundEcomCouponAmountForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $noRefundEcomPlatformSubsidyAmountForRoi2 = null;

    /**
     * 预估达人佣金成本
     * @var float
     */
    protected ?float $shopEstimatedComissionCost = null;

    /**
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * 综合成本
     * @var float
     */
    protected ?float $statCostForOverallRoi2 = null;

    /**
     * @var float
     */
    protected ?float $totalCostPerPayOrderForRoi2 = null;

    /**
     * 综合订单成本
     * @var float
     */
    protected ?float $totalCostPerPayOrderSettleForOverallRoi21h = null;

    /**
     * @var float
     */
    protected ?float $totalCostPerPayOrderSettleForRoi21h = null;

    /**
     * @var float
     */
    protected ?float $totalEcomPlatformSubsidyAmountForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $totalOrderRealSettleAmountForRoi21h = null;

    /**
     * @var float
     */
    protected ?float $totalOrderSettleAmountForRoi21h = null;

    /**
     * @var float
     */
    protected ?float $totalOrderSettleAmountRateForRoi21h = null;

    /**
     * @var int
     */
    protected ?int $totalOrderSettleCountForRoi21h = null;

    /**
     * @var float
     */
    protected ?float $totalOrderSettleCountRateForRoi21h = null;

    /**
     * @var float
     */
    protected ?float $totalPayOrderCountForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $totalPayOrderCouponAmountForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $totalPayOrderGmvForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $totalPayOrderGmvIncludeCouponForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $totalPrepayAndPayOrderRoi2 = null;

    /**
     * 综合ROI
     * @var float
     */
    protected ?float $totalPrepayAndPaySettleOverallRoi21h = null;

    /**
     * @var float
     */
    protected ?float $totalPrepayAndPaySettleRoi21h = null;

    /**
     * @var int
     */
    protected ?int $totalPrepayOrderCountForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $totalPrepayOrderGmvForRoi2 = null;

    /**
     * @var int
     */
    protected ?int $totalRefundOrderCountForRoi21h = null;

    /**
     * @var float
     */
    protected ?float $totalRefundOrderGmvForRoi21hAll = null;

    /**
     * @var float
     */
    protected ?float $totalRefundOrderGmvForRoi21hRate = null;

    /**
     * @var float
     */
    protected ?float $totalUnfinishedEstimateOrderGmvForRoi2 = null;

    /**
     * @return float
     */
    public function getNoRefundEcomCouponAmountForRoi2(): ?float
    {
        return $this->noRefundEcomCouponAmountForRoi2;
    }

    /**
     * @param float $noRefundEcomCouponAmountForRoi2
     * @return self
     */
    public function setNoRefundEcomCouponAmountForRoi2(?float $noRefundEcomCouponAmountForRoi2): self
    {
        $this->noRefundEcomCouponAmountForRoi2 = $noRefundEcomCouponAmountForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getNoRefundEcomPlatformSubsidyAmountForRoi2(): ?float
    {
        return $this->noRefundEcomPlatformSubsidyAmountForRoi2;
    }

    /**
     * @param float $noRefundEcomPlatformSubsidyAmountForRoi2
     * @return self
     */
    public function setNoRefundEcomPlatformSubsidyAmountForRoi2(?float $noRefundEcomPlatformSubsidyAmountForRoi2): self
    {
        $this->noRefundEcomPlatformSubsidyAmountForRoi2 = $noRefundEcomPlatformSubsidyAmountForRoi2;
        return $this;
    }

    /**
     * 预估达人佣金成本
     * @return float
     */
    public function getShopEstimatedComissionCost(): ?float
    {
        return $this->shopEstimatedComissionCost;
    }

    /**
     * 预估达人佣金成本
     * @param float $shopEstimatedComissionCost
     * @return self
     */
    public function setShopEstimatedComissionCost(?float $shopEstimatedComissionCost): self
    {
        $this->shopEstimatedComissionCost = $shopEstimatedComissionCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * 综合成本
     * @return float
     */
    public function getStatCostForOverallRoi2(): ?float
    {
        return $this->statCostForOverallRoi2;
    }

    /**
     * 综合成本
     * @param float $statCostForOverallRoi2
     * @return self
     */
    public function setStatCostForOverallRoi2(?float $statCostForOverallRoi2): self
    {
        $this->statCostForOverallRoi2 = $statCostForOverallRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalCostPerPayOrderForRoi2(): ?float
    {
        return $this->totalCostPerPayOrderForRoi2;
    }

    /**
     * @param float $totalCostPerPayOrderForRoi2
     * @return self
     */
    public function setTotalCostPerPayOrderForRoi2(?float $totalCostPerPayOrderForRoi2): self
    {
        $this->totalCostPerPayOrderForRoi2 = $totalCostPerPayOrderForRoi2;
        return $this;
    }

    /**
     * 综合订单成本
     * @return float
     */
    public function getTotalCostPerPayOrderSettleForOverallRoi21h(): ?float
    {
        return $this->totalCostPerPayOrderSettleForOverallRoi21h;
    }

    /**
     * 综合订单成本
     * @param float $totalCostPerPayOrderSettleForOverallRoi21h
     * @return self
     */
    public function setTotalCostPerPayOrderSettleForOverallRoi21h(?float $totalCostPerPayOrderSettleForOverallRoi21h): self
    {
        $this->totalCostPerPayOrderSettleForOverallRoi21h = $totalCostPerPayOrderSettleForOverallRoi21h;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalCostPerPayOrderSettleForRoi21h(): ?float
    {
        return $this->totalCostPerPayOrderSettleForRoi21h;
    }

    /**
     * @param float $totalCostPerPayOrderSettleForRoi21h
     * @return self
     */
    public function setTotalCostPerPayOrderSettleForRoi21h(?float $totalCostPerPayOrderSettleForRoi21h): self
    {
        $this->totalCostPerPayOrderSettleForRoi21h = $totalCostPerPayOrderSettleForRoi21h;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalEcomPlatformSubsidyAmountForRoi2(): ?float
    {
        return $this->totalEcomPlatformSubsidyAmountForRoi2;
    }

    /**
     * @param float $totalEcomPlatformSubsidyAmountForRoi2
     * @return self
     */
    public function setTotalEcomPlatformSubsidyAmountForRoi2(?float $totalEcomPlatformSubsidyAmountForRoi2): self
    {
        $this->totalEcomPlatformSubsidyAmountForRoi2 = $totalEcomPlatformSubsidyAmountForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalOrderRealSettleAmountForRoi21h(): ?float
    {
        return $this->totalOrderRealSettleAmountForRoi21h;
    }

    /**
     * @param float $totalOrderRealSettleAmountForRoi21h
     * @return self
     */
    public function setTotalOrderRealSettleAmountForRoi21h(?float $totalOrderRealSettleAmountForRoi21h): self
    {
        $this->totalOrderRealSettleAmountForRoi21h = $totalOrderRealSettleAmountForRoi21h;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalOrderSettleAmountForRoi21h(): ?float
    {
        return $this->totalOrderSettleAmountForRoi21h;
    }

    /**
     * @param float $totalOrderSettleAmountForRoi21h
     * @return self
     */
    public function setTotalOrderSettleAmountForRoi21h(?float $totalOrderSettleAmountForRoi21h): self
    {
        $this->totalOrderSettleAmountForRoi21h = $totalOrderSettleAmountForRoi21h;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalOrderSettleAmountRateForRoi21h(): ?float
    {
        return $this->totalOrderSettleAmountRateForRoi21h;
    }

    /**
     * @param float $totalOrderSettleAmountRateForRoi21h
     * @return self
     */
    public function setTotalOrderSettleAmountRateForRoi21h(?float $totalOrderSettleAmountRateForRoi21h): self
    {
        $this->totalOrderSettleAmountRateForRoi21h = $totalOrderSettleAmountRateForRoi21h;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalOrderSettleCountForRoi21h(): ?int
    {
        return $this->totalOrderSettleCountForRoi21h;
    }

    /**
     * @param int $totalOrderSettleCountForRoi21h
     * @return self
     */
    public function setTotalOrderSettleCountForRoi21h(?int $totalOrderSettleCountForRoi21h): self
    {
        $this->totalOrderSettleCountForRoi21h = $totalOrderSettleCountForRoi21h;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalOrderSettleCountRateForRoi21h(): ?float
    {
        return $this->totalOrderSettleCountRateForRoi21h;
    }

    /**
     * @param float $totalOrderSettleCountRateForRoi21h
     * @return self
     */
    public function setTotalOrderSettleCountRateForRoi21h(?float $totalOrderSettleCountRateForRoi21h): self
    {
        $this->totalOrderSettleCountRateForRoi21h = $totalOrderSettleCountRateForRoi21h;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPayOrderCountForRoi2(): ?float
    {
        return $this->totalPayOrderCountForRoi2;
    }

    /**
     * @param float $totalPayOrderCountForRoi2
     * @return self
     */
    public function setTotalPayOrderCountForRoi2(?float $totalPayOrderCountForRoi2): self
    {
        $this->totalPayOrderCountForRoi2 = $totalPayOrderCountForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPayOrderCouponAmountForRoi2(): ?float
    {
        return $this->totalPayOrderCouponAmountForRoi2;
    }

    /**
     * @param float $totalPayOrderCouponAmountForRoi2
     * @return self
     */
    public function setTotalPayOrderCouponAmountForRoi2(?float $totalPayOrderCouponAmountForRoi2): self
    {
        $this->totalPayOrderCouponAmountForRoi2 = $totalPayOrderCouponAmountForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPayOrderGmvForRoi2(): ?float
    {
        return $this->totalPayOrderGmvForRoi2;
    }

    /**
     * @param float $totalPayOrderGmvForRoi2
     * @return self
     */
    public function setTotalPayOrderGmvForRoi2(?float $totalPayOrderGmvForRoi2): self
    {
        $this->totalPayOrderGmvForRoi2 = $totalPayOrderGmvForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPayOrderGmvIncludeCouponForRoi2(): ?float
    {
        return $this->totalPayOrderGmvIncludeCouponForRoi2;
    }

    /**
     * @param float $totalPayOrderGmvIncludeCouponForRoi2
     * @return self
     */
    public function setTotalPayOrderGmvIncludeCouponForRoi2(?float $totalPayOrderGmvIncludeCouponForRoi2): self
    {
        $this->totalPayOrderGmvIncludeCouponForRoi2 = $totalPayOrderGmvIncludeCouponForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrepayAndPayOrderRoi2(): ?float
    {
        return $this->totalPrepayAndPayOrderRoi2;
    }

    /**
     * @param float $totalPrepayAndPayOrderRoi2
     * @return self
     */
    public function setTotalPrepayAndPayOrderRoi2(?float $totalPrepayAndPayOrderRoi2): self
    {
        $this->totalPrepayAndPayOrderRoi2 = $totalPrepayAndPayOrderRoi2;
        return $this;
    }

    /**
     * 综合ROI
     * @return float
     */
    public function getTotalPrepayAndPaySettleOverallRoi21h(): ?float
    {
        return $this->totalPrepayAndPaySettleOverallRoi21h;
    }

    /**
     * 综合ROI
     * @param float $totalPrepayAndPaySettleOverallRoi21h
     * @return self
     */
    public function setTotalPrepayAndPaySettleOverallRoi21h(?float $totalPrepayAndPaySettleOverallRoi21h): self
    {
        $this->totalPrepayAndPaySettleOverallRoi21h = $totalPrepayAndPaySettleOverallRoi21h;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrepayAndPaySettleRoi21h(): ?float
    {
        return $this->totalPrepayAndPaySettleRoi21h;
    }

    /**
     * @param float $totalPrepayAndPaySettleRoi21h
     * @return self
     */
    public function setTotalPrepayAndPaySettleRoi21h(?float $totalPrepayAndPaySettleRoi21h): self
    {
        $this->totalPrepayAndPaySettleRoi21h = $totalPrepayAndPaySettleRoi21h;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPrepayOrderCountForRoi2(): ?int
    {
        return $this->totalPrepayOrderCountForRoi2;
    }

    /**
     * @param int $totalPrepayOrderCountForRoi2
     * @return self
     */
    public function setTotalPrepayOrderCountForRoi2(?int $totalPrepayOrderCountForRoi2): self
    {
        $this->totalPrepayOrderCountForRoi2 = $totalPrepayOrderCountForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrepayOrderGmvForRoi2(): ?float
    {
        return $this->totalPrepayOrderGmvForRoi2;
    }

    /**
     * @param float $totalPrepayOrderGmvForRoi2
     * @return self
     */
    public function setTotalPrepayOrderGmvForRoi2(?float $totalPrepayOrderGmvForRoi2): self
    {
        $this->totalPrepayOrderGmvForRoi2 = $totalPrepayOrderGmvForRoi2;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalRefundOrderCountForRoi21h(): ?int
    {
        return $this->totalRefundOrderCountForRoi21h;
    }

    /**
     * @param int $totalRefundOrderCountForRoi21h
     * @return self
     */
    public function setTotalRefundOrderCountForRoi21h(?int $totalRefundOrderCountForRoi21h): self
    {
        $this->totalRefundOrderCountForRoi21h = $totalRefundOrderCountForRoi21h;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRefundOrderGmvForRoi21hAll(): ?float
    {
        return $this->totalRefundOrderGmvForRoi21hAll;
    }

    /**
     * @param float $totalRefundOrderGmvForRoi21hAll
     * @return self
     */
    public function setTotalRefundOrderGmvForRoi21hAll(?float $totalRefundOrderGmvForRoi21hAll): self
    {
        $this->totalRefundOrderGmvForRoi21hAll = $totalRefundOrderGmvForRoi21hAll;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalRefundOrderGmvForRoi21hRate(): ?float
    {
        return $this->totalRefundOrderGmvForRoi21hRate;
    }

    /**
     * @param float $totalRefundOrderGmvForRoi21hRate
     * @return self
     */
    public function setTotalRefundOrderGmvForRoi21hRate(?float $totalRefundOrderGmvForRoi21hRate): self
    {
        $this->totalRefundOrderGmvForRoi21hRate = $totalRefundOrderGmvForRoi21hRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalUnfinishedEstimateOrderGmvForRoi2(): ?float
    {
        return $this->totalUnfinishedEstimateOrderGmvForRoi2;
    }

    /**
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
        if ($this->noRefundEcomCouponAmountForRoi2 !== null) {
            $result['no_refund_ecom_coupon_amount_for_roi2'] = $this->noRefundEcomCouponAmountForRoi2;
        }
        if ($this->noRefundEcomPlatformSubsidyAmountForRoi2 !== null) {
            $result['no_refund_ecom_platform_subsidy_amount_for_roi2'] = $this->noRefundEcomPlatformSubsidyAmountForRoi2;
        }
        if ($this->shopEstimatedComissionCost !== null) {
            $result['shop_estimated_comission_cost'] = $this->shopEstimatedComissionCost;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->statCostForOverallRoi2 !== null) {
            $result['stat_cost_for_overall_roi2'] = $this->statCostForOverallRoi2;
        }
        if ($this->totalCostPerPayOrderForRoi2 !== null) {
            $result['total_cost_per_pay_order_for_roi2'] = $this->totalCostPerPayOrderForRoi2;
        }
        if ($this->totalCostPerPayOrderSettleForOverallRoi21h !== null) {
            $result['total_cost_per_pay_order_settle_for_overall_roi2_1h'] = $this->totalCostPerPayOrderSettleForOverallRoi21h;
        }
        if ($this->totalCostPerPayOrderSettleForRoi21h !== null) {
            $result['total_cost_per_pay_order_settle_for_roi2_1h'] = $this->totalCostPerPayOrderSettleForRoi21h;
        }
        if ($this->totalEcomPlatformSubsidyAmountForRoi2 !== null) {
            $result['total_ecom_platform_subsidy_amount_for_roi2'] = $this->totalEcomPlatformSubsidyAmountForRoi2;
        }
        if ($this->totalOrderRealSettleAmountForRoi21h !== null) {
            $result['total_order_real_settle_amount_for_roi2_1h'] = $this->totalOrderRealSettleAmountForRoi21h;
        }
        if ($this->totalOrderSettleAmountForRoi21h !== null) {
            $result['total_order_settle_amount_for_roi2_1h'] = $this->totalOrderSettleAmountForRoi21h;
        }
        if ($this->totalOrderSettleAmountRateForRoi21h !== null) {
            $result['total_order_settle_amount_rate_for_roi2_1h'] = $this->totalOrderSettleAmountRateForRoi21h;
        }
        if ($this->totalOrderSettleCountForRoi21h !== null) {
            $result['total_order_settle_count_for_roi2_1h'] = $this->totalOrderSettleCountForRoi21h;
        }
        if ($this->totalOrderSettleCountRateForRoi21h !== null) {
            $result['total_order_settle_count_rate_for_roi2_1h'] = $this->totalOrderSettleCountRateForRoi21h;
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
        if ($this->totalPrepayAndPaySettleOverallRoi21h !== null) {
            $result['total_prepay_and_pay_settle_overall_roi2_1h'] = $this->totalPrepayAndPaySettleOverallRoi21h;
        }
        if ($this->totalPrepayAndPaySettleRoi21h !== null) {
            $result['total_prepay_and_pay_settle_roi2_1h'] = $this->totalPrepayAndPaySettleRoi21h;
        }
        if ($this->totalPrepayOrderCountForRoi2 !== null) {
            $result['total_prepay_order_count_for_roi2'] = $this->totalPrepayOrderCountForRoi2;
        }
        if ($this->totalPrepayOrderGmvForRoi2 !== null) {
            $result['total_prepay_order_gmv_for_roi2'] = $this->totalPrepayOrderGmvForRoi2;
        }
        if ($this->totalRefundOrderCountForRoi21h !== null) {
            $result['total_refund_order_count_for_roi2_1h'] = $this->totalRefundOrderCountForRoi21h;
        }
        if ($this->totalRefundOrderGmvForRoi21hAll !== null) {
            $result['total_refund_order_gmv_for_roi2_1h_all'] = $this->totalRefundOrderGmvForRoi21hAll;
        }
        if ($this->totalRefundOrderGmvForRoi21hRate !== null) {
            $result['total_refund_order_gmv_for_roi2_1h_rate'] = $this->totalRefundOrderGmvForRoi21hRate;
        }
        if ($this->totalUnfinishedEstimateOrderGmvForRoi2 !== null) {
            $result['total_unfinished_estimate_order_gmv_for_roi2'] = $this->totalUnfinishedEstimateOrderGmvForRoi2;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['no_refund_ecom_coupon_amount_for_roi2'] ?? null) !== null) {
            $obj->noRefundEcomCouponAmountForRoi2 = (float) $v;
        }
        if (($v = $data['no_refund_ecom_platform_subsidy_amount_for_roi2'] ?? null) !== null) {
            $obj->noRefundEcomPlatformSubsidyAmountForRoi2 = (float) $v;
        }
        if (($v = $data['shop_estimated_comission_cost'] ?? null) !== null) {
            $obj->shopEstimatedComissionCost = (float) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['stat_cost_for_overall_roi2'] ?? null) !== null) {
            $obj->statCostForOverallRoi2 = (float) $v;
        }
        if (($v = $data['total_cost_per_pay_order_for_roi2'] ?? null) !== null) {
            $obj->totalCostPerPayOrderForRoi2 = (float) $v;
        }
        if (($v = $data['total_cost_per_pay_order_settle_for_overall_roi2_1h'] ?? null) !== null) {
            $obj->totalCostPerPayOrderSettleForOverallRoi21h = (float) $v;
        }
        if (($v = $data['total_cost_per_pay_order_settle_for_roi2_1h'] ?? null) !== null) {
            $obj->totalCostPerPayOrderSettleForRoi21h = (float) $v;
        }
        if (($v = $data['total_ecom_platform_subsidy_amount_for_roi2'] ?? null) !== null) {
            $obj->totalEcomPlatformSubsidyAmountForRoi2 = (float) $v;
        }
        if (($v = $data['total_order_real_settle_amount_for_roi2_1h'] ?? null) !== null) {
            $obj->totalOrderRealSettleAmountForRoi21h = (float) $v;
        }
        if (($v = $data['total_order_settle_amount_for_roi2_1h'] ?? null) !== null) {
            $obj->totalOrderSettleAmountForRoi21h = (float) $v;
        }
        if (($v = $data['total_order_settle_amount_rate_for_roi2_1h'] ?? null) !== null) {
            $obj->totalOrderSettleAmountRateForRoi21h = (float) $v;
        }
        if (($v = $data['total_order_settle_count_for_roi2_1h'] ?? null) !== null) {
            $obj->totalOrderSettleCountForRoi21h = (int) $v;
        }
        if (($v = $data['total_order_settle_count_rate_for_roi2_1h'] ?? null) !== null) {
            $obj->totalOrderSettleCountRateForRoi21h = (float) $v;
        }
        if (($v = $data['total_pay_order_count_for_roi2'] ?? null) !== null) {
            $obj->totalPayOrderCountForRoi2 = (float) $v;
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
        if (($v = $data['total_prepay_and_pay_settle_overall_roi2_1h'] ?? null) !== null) {
            $obj->totalPrepayAndPaySettleOverallRoi21h = (float) $v;
        }
        if (($v = $data['total_prepay_and_pay_settle_roi2_1h'] ?? null) !== null) {
            $obj->totalPrepayAndPaySettleRoi21h = (float) $v;
        }
        if (($v = $data['total_prepay_order_count_for_roi2'] ?? null) !== null) {
            $obj->totalPrepayOrderCountForRoi2 = (int) $v;
        }
        if (($v = $data['total_prepay_order_gmv_for_roi2'] ?? null) !== null) {
            $obj->totalPrepayOrderGmvForRoi2 = (float) $v;
        }
        if (($v = $data['total_refund_order_count_for_roi2_1h'] ?? null) !== null) {
            $obj->totalRefundOrderCountForRoi21h = (int) $v;
        }
        if (($v = $data['total_refund_order_gmv_for_roi2_1h_all'] ?? null) !== null) {
            $obj->totalRefundOrderGmvForRoi21hAll = (float) $v;
        }
        if (($v = $data['total_refund_order_gmv_for_roi2_1h_rate'] ?? null) !== null) {
            $obj->totalRefundOrderGmvForRoi21hRate = (float) $v;
        }
        if (($v = $data['total_unfinished_estimate_order_gmv_for_roi2'] ?? null) !== null) {
            $obj->totalUnfinishedEstimateOrderGmvForRoi2 = (float) $v;
        }
        return $obj;
    }
}
