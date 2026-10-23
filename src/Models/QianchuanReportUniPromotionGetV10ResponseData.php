<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportUniPromotionGetV10ResponseData implements \JsonSerializable
{
    /**
     * 整体消耗，单位元，小数点2位
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * 整体成交订单成本
     * @var float
     */
    protected ?float $totalCostPerPayOrderForRoi2 = null;

    /**
     * 平台补贴金额，单位元，小数点2位
     * @var float
     */
    protected ?float $totalEcomPlatformSubsidyAmountForRoi2 = null;

    /**
     * 整体成交订单数
     * @var float
     */
    protected ?float $totalPayOrderCountForRoi2 = null;

    /**
     * 整体成交智能优惠券金额，单位元，小数点2位
     * @var float
     */
    protected ?float $totalPayOrderCouponAmountForRoi2 = null;

    /**
     * 用户实际支付金额，单位元，小数点2位
     * @var float
     */
    protected ?float $totalPayOrderGmvForRoi2 = null;

    /**
     * 整体成交金额，单位元，小数点2位
     * @var float
     */
    protected ?float $totalPayOrderGmvIncludeCouponForRoi2 = null;

    /**
     * 整体支付ROI
     * @var float
     */
    protected ?float $totalPrepayAndPayOrderRoi2 = null;

    /**
     * 整体预售订单数 注意：仅支持直播全域
     * @var float
     */
    protected ?float $totalPrepayOrderCountForRoi2 = null;

    /**
     * 整体预售订单金额，单位元，小数点2位 注意：仅支持直播全域
     * @var float
     */
    protected ?float $totalPrepayOrderGmvForRoi2 = null;

    /**
     * 整体未完结预售订单预估金额，单位元，小数点2位
     * @var float
     */
    protected ?float $totalUnfinishedEstimateOrderGmvForRoi2 = null;

    /**
     * 整体消耗，单位元，小数点2位
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * 整体消耗，单位元，小数点2位
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * 整体成交订单成本
     * @return float
     */
    public function getTotalCostPerPayOrderForRoi2(): ?float
    {
        return $this->totalCostPerPayOrderForRoi2;
    }

    /**
     * 整体成交订单成本
     * @param float $totalCostPerPayOrderForRoi2
     * @return self
     */
    public function setTotalCostPerPayOrderForRoi2(?float $totalCostPerPayOrderForRoi2): self
    {
        $this->totalCostPerPayOrderForRoi2 = $totalCostPerPayOrderForRoi2;
        return $this;
    }

    /**
     * 平台补贴金额，单位元，小数点2位
     * @return float
     */
    public function getTotalEcomPlatformSubsidyAmountForRoi2(): ?float
    {
        return $this->totalEcomPlatformSubsidyAmountForRoi2;
    }

    /**
     * 平台补贴金额，单位元，小数点2位
     * @param float $totalEcomPlatformSubsidyAmountForRoi2
     * @return self
     */
    public function setTotalEcomPlatformSubsidyAmountForRoi2(?float $totalEcomPlatformSubsidyAmountForRoi2): self
    {
        $this->totalEcomPlatformSubsidyAmountForRoi2 = $totalEcomPlatformSubsidyAmountForRoi2;
        return $this;
    }

    /**
     * 整体成交订单数
     * @return float
     */
    public function getTotalPayOrderCountForRoi2(): ?float
    {
        return $this->totalPayOrderCountForRoi2;
    }

    /**
     * 整体成交订单数
     * @param float $totalPayOrderCountForRoi2
     * @return self
     */
    public function setTotalPayOrderCountForRoi2(?float $totalPayOrderCountForRoi2): self
    {
        $this->totalPayOrderCountForRoi2 = $totalPayOrderCountForRoi2;
        return $this;
    }

    /**
     * 整体成交智能优惠券金额，单位元，小数点2位
     * @return float
     */
    public function getTotalPayOrderCouponAmountForRoi2(): ?float
    {
        return $this->totalPayOrderCouponAmountForRoi2;
    }

    /**
     * 整体成交智能优惠券金额，单位元，小数点2位
     * @param float $totalPayOrderCouponAmountForRoi2
     * @return self
     */
    public function setTotalPayOrderCouponAmountForRoi2(?float $totalPayOrderCouponAmountForRoi2): self
    {
        $this->totalPayOrderCouponAmountForRoi2 = $totalPayOrderCouponAmountForRoi2;
        return $this;
    }

    /**
     * 用户实际支付金额，单位元，小数点2位
     * @return float
     */
    public function getTotalPayOrderGmvForRoi2(): ?float
    {
        return $this->totalPayOrderGmvForRoi2;
    }

    /**
     * 用户实际支付金额，单位元，小数点2位
     * @param float $totalPayOrderGmvForRoi2
     * @return self
     */
    public function setTotalPayOrderGmvForRoi2(?float $totalPayOrderGmvForRoi2): self
    {
        $this->totalPayOrderGmvForRoi2 = $totalPayOrderGmvForRoi2;
        return $this;
    }

    /**
     * 整体成交金额，单位元，小数点2位
     * @return float
     */
    public function getTotalPayOrderGmvIncludeCouponForRoi2(): ?float
    {
        return $this->totalPayOrderGmvIncludeCouponForRoi2;
    }

    /**
     * 整体成交金额，单位元，小数点2位
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
     * 整体预售订单数 注意：仅支持直播全域
     * @return float
     */
    public function getTotalPrepayOrderCountForRoi2(): ?float
    {
        return $this->totalPrepayOrderCountForRoi2;
    }

    /**
     * 整体预售订单数 注意：仅支持直播全域
     * @param float $totalPrepayOrderCountForRoi2
     * @return self
     */
    public function setTotalPrepayOrderCountForRoi2(?float $totalPrepayOrderCountForRoi2): self
    {
        $this->totalPrepayOrderCountForRoi2 = $totalPrepayOrderCountForRoi2;
        return $this;
    }

    /**
     * 整体预售订单金额，单位元，小数点2位 注意：仅支持直播全域
     * @return float
     */
    public function getTotalPrepayOrderGmvForRoi2(): ?float
    {
        return $this->totalPrepayOrderGmvForRoi2;
    }

    /**
     * 整体预售订单金额，单位元，小数点2位 注意：仅支持直播全域
     * @param float $totalPrepayOrderGmvForRoi2
     * @return self
     */
    public function setTotalPrepayOrderGmvForRoi2(?float $totalPrepayOrderGmvForRoi2): self
    {
        $this->totalPrepayOrderGmvForRoi2 = $totalPrepayOrderGmvForRoi2;
        return $this;
    }

    /**
     * 整体未完结预售订单预估金额，单位元，小数点2位
     * @return float
     */
    public function getTotalUnfinishedEstimateOrderGmvForRoi2(): ?float
    {
        return $this->totalUnfinishedEstimateOrderGmvForRoi2;
    }

    /**
     * 整体未完结预售订单预估金额，单位元，小数点2位
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
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->totalCostPerPayOrderForRoi2 !== null) {
            $result['total_cost_per_pay_order_for_roi2'] = $this->totalCostPerPayOrderForRoi2;
        }
        if ($this->totalEcomPlatformSubsidyAmountForRoi2 !== null) {
            $result['total_ecom_platform_subsidy_amount_for_roi2'] = $this->totalEcomPlatformSubsidyAmountForRoi2;
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
        if ($this->totalPrepayOrderCountForRoi2 !== null) {
            $result['total_prepay_order_count_for_roi2'] = $this->totalPrepayOrderCountForRoi2;
        }
        if ($this->totalPrepayOrderGmvForRoi2 !== null) {
            $result['total_prepay_order_gmv_for_roi2'] = $this->totalPrepayOrderGmvForRoi2;
        }
        if ($this->totalUnfinishedEstimateOrderGmvForRoi2 !== null) {
            $result['total_unfinished_estimate_order_gmv_for_roi2'] = $this->totalUnfinishedEstimateOrderGmvForRoi2;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['total_cost_per_pay_order_for_roi2'] ?? null) !== null) {
            $obj->totalCostPerPayOrderForRoi2 = (float) $v;
        }
        if (($v = $data['total_ecom_platform_subsidy_amount_for_roi2'] ?? null) !== null) {
            $obj->totalEcomPlatformSubsidyAmountForRoi2 = (float) $v;
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
        if (($v = $data['total_prepay_order_count_for_roi2'] ?? null) !== null) {
            $obj->totalPrepayOrderCountForRoi2 = (float) $v;
        }
        if (($v = $data['total_prepay_order_gmv_for_roi2'] ?? null) !== null) {
            $obj->totalPrepayOrderGmvForRoi2 = (float) $v;
        }
        if (($v = $data['total_unfinished_estimate_order_gmv_for_roi2'] ?? null) !== null) {
            $obj->totalUnfinishedEstimateOrderGmvForRoi2 = (float) $v;
        }
        return $obj;
    }
}
