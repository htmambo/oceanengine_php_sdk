<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskListV10ResponseDataTaskListInnerMetrics implements \JsonSerializable
{
    /**
     * 调控点击次数
     * @var int
     */
    protected ?int $clickCntForRoi2Assist = null;

    /**
     * 调控转化率
     * @var float
     */
    protected ?float $convertRateForRoi2Assist = null;

    /**
     * 调控点击率
     * @var float
     */
    protected ?float $ctrForRoi2Assist = null;

    /**
     * 调控智能优惠券未退款金额
     * @var float
     */
    protected ?float $noRefundEcomCouponAmountForRoi2Assist = null;

    /**
     * 调控电商平台补贴未退款金额
     * @var float
     */
    protected ?float $noRefundEcomPlatformSubsidyAmountForRoi2Assist = null;

    /**
     * 调控成交人数
     * @var int
     */
    protected ?int $payConvertCntForRoi2Assist = null;

    /**
     * 调控成交成本，单位元
     * @var float
     */
    protected ?float $payConvertCostForRoi2Assist = null;

    /**
     * 调控展示次数
     * @var int
     */
    protected ?int $showCntForRoi2Assist = null;

    /**
     * 调控消耗，单位元
     * @var float
     */
    protected ?float $statCostForRoi2Assist = null;

    /**
     * 调控成交订单成本，单位元
     * @var float
     */
    protected ?float $totalCostPerPayOrderForRoi2Assist = null;

    /**
     * 调控净成交订单成本
     * @var float
     */
    protected ?float $totalCostPerPayOrderSettleForRoi21hAssist = null;

    /**
     * 调控电商平台补贴金额，单位元
     * @var float
     */
    protected ?float $totalEcomPlatformSubsidyAmountForRoi2Assist = null;

    /**
     * 调控用户实际支付净成交金额
     * @var float
     */
    protected ?float $totalOrderRealSettleAmountForRoi21hAssist = null;

    /**
     * 调控净成交金额
     * @var float
     */
    protected ?float $totalOrderSettleAmountForRoi21hAssist = null;

    /**
     * 调控净成交金额结算率
     * @var float
     */
    protected ?float $totalOrderSettleAmountRateForRoi21hAssist = null;

    /**
     * 调控净成交订单数
     * @var int
     */
    protected ?int $totalOrderSettleCountForRoi21hAssist = null;

    /**
     * 调控净成交订单结算率
     * @var float
     */
    protected ?float $totalOrderSettleCountRateForRoi21hAssist = null;

    /**
     * 调控成交订单数
     * @var int
     */
    protected ?int $totalPayOrderCountForRoi2Assist = null;

    /**
     * 调控成交智能优惠券金额
     * @var float
     */
    protected ?float $totalPayOrderCouponAmountForRoi2Assist = null;

    /**
     * 调控用户实际支付金额，单位元
     * @var float
     */
    protected ?float $totalPayOrderGmvForRoi2Assist = null;

    /**
     * 调控整体成交金额金额，单位元
     * @var float
     */
    protected ?float $totalPayOrderGmvIncludeCouponForRoi2Assist = null;

    /**
     * 调控支付ROI
     * @var float
     */
    protected ?float $totalPrepayAndPayOrderRoi2Assist = null;

    /**
     * 调控净成交ROI
     * @var float
     */
    protected ?float $totalPrepayAndPaySettleRoi21hAssist = null;

    /**
     * 调控1小时内退款订单数
     * @var int
     */
    protected ?int $totalRefundOrderCountForRoi21hAssist = null;

    /**
     * 调控1小时内退款金额
     * @var float
     */
    protected ?float $totalRefundOrderGmvForRoi21hAllAssist = null;

    /**
     * 调控1小时内退款率
     * @var float
     */
    protected ?float $totalRefundOrderGmvForRoi21hRateAssist = null;

    /**
     * 调控未完结预售订单预估金额，单位元
     * @var float
     */
    protected ?float $totalUnfinishedEstimateOrderGmvForRoi2Assist = null;

    /**
     * 调控点击次数
     * @return int
     */
    public function getClickCntForRoi2Assist(): ?int
    {
        return $this->clickCntForRoi2Assist;
    }

    /**
     * 调控点击次数
     * @param int $clickCntForRoi2Assist
     * @return self
     */
    public function setClickCntForRoi2Assist(?int $clickCntForRoi2Assist): self
    {
        $this->clickCntForRoi2Assist = $clickCntForRoi2Assist;
        return $this;
    }

    /**
     * 调控转化率
     * @return float
     */
    public function getConvertRateForRoi2Assist(): ?float
    {
        return $this->convertRateForRoi2Assist;
    }

    /**
     * 调控转化率
     * @param float $convertRateForRoi2Assist
     * @return self
     */
    public function setConvertRateForRoi2Assist(?float $convertRateForRoi2Assist): self
    {
        $this->convertRateForRoi2Assist = $convertRateForRoi2Assist;
        return $this;
    }

    /**
     * 调控点击率
     * @return float
     */
    public function getCtrForRoi2Assist(): ?float
    {
        return $this->ctrForRoi2Assist;
    }

    /**
     * 调控点击率
     * @param float $ctrForRoi2Assist
     * @return self
     */
    public function setCtrForRoi2Assist(?float $ctrForRoi2Assist): self
    {
        $this->ctrForRoi2Assist = $ctrForRoi2Assist;
        return $this;
    }

    /**
     * 调控智能优惠券未退款金额
     * @return float
     */
    public function getNoRefundEcomCouponAmountForRoi2Assist(): ?float
    {
        return $this->noRefundEcomCouponAmountForRoi2Assist;
    }

    /**
     * 调控智能优惠券未退款金额
     * @param float $noRefundEcomCouponAmountForRoi2Assist
     * @return self
     */
    public function setNoRefundEcomCouponAmountForRoi2Assist(?float $noRefundEcomCouponAmountForRoi2Assist): self
    {
        $this->noRefundEcomCouponAmountForRoi2Assist = $noRefundEcomCouponAmountForRoi2Assist;
        return $this;
    }

    /**
     * 调控电商平台补贴未退款金额
     * @return float
     */
    public function getNoRefundEcomPlatformSubsidyAmountForRoi2Assist(): ?float
    {
        return $this->noRefundEcomPlatformSubsidyAmountForRoi2Assist;
    }

    /**
     * 调控电商平台补贴未退款金额
     * @param float $noRefundEcomPlatformSubsidyAmountForRoi2Assist
     * @return self
     */
    public function setNoRefundEcomPlatformSubsidyAmountForRoi2Assist(?float $noRefundEcomPlatformSubsidyAmountForRoi2Assist): self
    {
        $this->noRefundEcomPlatformSubsidyAmountForRoi2Assist = $noRefundEcomPlatformSubsidyAmountForRoi2Assist;
        return $this;
    }

    /**
     * 调控成交人数
     * @return int
     */
    public function getPayConvertCntForRoi2Assist(): ?int
    {
        return $this->payConvertCntForRoi2Assist;
    }

    /**
     * 调控成交人数
     * @param int $payConvertCntForRoi2Assist
     * @return self
     */
    public function setPayConvertCntForRoi2Assist(?int $payConvertCntForRoi2Assist): self
    {
        $this->payConvertCntForRoi2Assist = $payConvertCntForRoi2Assist;
        return $this;
    }

    /**
     * 调控成交成本，单位元
     * @return float
     */
    public function getPayConvertCostForRoi2Assist(): ?float
    {
        return $this->payConvertCostForRoi2Assist;
    }

    /**
     * 调控成交成本，单位元
     * @param float $payConvertCostForRoi2Assist
     * @return self
     */
    public function setPayConvertCostForRoi2Assist(?float $payConvertCostForRoi2Assist): self
    {
        $this->payConvertCostForRoi2Assist = $payConvertCostForRoi2Assist;
        return $this;
    }

    /**
     * 调控展示次数
     * @return int
     */
    public function getShowCntForRoi2Assist(): ?int
    {
        return $this->showCntForRoi2Assist;
    }

    /**
     * 调控展示次数
     * @param int $showCntForRoi2Assist
     * @return self
     */
    public function setShowCntForRoi2Assist(?int $showCntForRoi2Assist): self
    {
        $this->showCntForRoi2Assist = $showCntForRoi2Assist;
        return $this;
    }

    /**
     * 调控消耗，单位元
     * @return float
     */
    public function getStatCostForRoi2Assist(): ?float
    {
        return $this->statCostForRoi2Assist;
    }

    /**
     * 调控消耗，单位元
     * @param float $statCostForRoi2Assist
     * @return self
     */
    public function setStatCostForRoi2Assist(?float $statCostForRoi2Assist): self
    {
        $this->statCostForRoi2Assist = $statCostForRoi2Assist;
        return $this;
    }

    /**
     * 调控成交订单成本，单位元
     * @return float
     */
    public function getTotalCostPerPayOrderForRoi2Assist(): ?float
    {
        return $this->totalCostPerPayOrderForRoi2Assist;
    }

    /**
     * 调控成交订单成本，单位元
     * @param float $totalCostPerPayOrderForRoi2Assist
     * @return self
     */
    public function setTotalCostPerPayOrderForRoi2Assist(?float $totalCostPerPayOrderForRoi2Assist): self
    {
        $this->totalCostPerPayOrderForRoi2Assist = $totalCostPerPayOrderForRoi2Assist;
        return $this;
    }

    /**
     * 调控净成交订单成本
     * @return float
     */
    public function getTotalCostPerPayOrderSettleForRoi21hAssist(): ?float
    {
        return $this->totalCostPerPayOrderSettleForRoi21hAssist;
    }

    /**
     * 调控净成交订单成本
     * @param float $totalCostPerPayOrderSettleForRoi21hAssist
     * @return self
     */
    public function setTotalCostPerPayOrderSettleForRoi21hAssist(?float $totalCostPerPayOrderSettleForRoi21hAssist): self
    {
        $this->totalCostPerPayOrderSettleForRoi21hAssist = $totalCostPerPayOrderSettleForRoi21hAssist;
        return $this;
    }

    /**
     * 调控电商平台补贴金额，单位元
     * @return float
     */
    public function getTotalEcomPlatformSubsidyAmountForRoi2Assist(): ?float
    {
        return $this->totalEcomPlatformSubsidyAmountForRoi2Assist;
    }

    /**
     * 调控电商平台补贴金额，单位元
     * @param float $totalEcomPlatformSubsidyAmountForRoi2Assist
     * @return self
     */
    public function setTotalEcomPlatformSubsidyAmountForRoi2Assist(?float $totalEcomPlatformSubsidyAmountForRoi2Assist): self
    {
        $this->totalEcomPlatformSubsidyAmountForRoi2Assist = $totalEcomPlatformSubsidyAmountForRoi2Assist;
        return $this;
    }

    /**
     * 调控用户实际支付净成交金额
     * @return float
     */
    public function getTotalOrderRealSettleAmountForRoi21hAssist(): ?float
    {
        return $this->totalOrderRealSettleAmountForRoi21hAssist;
    }

    /**
     * 调控用户实际支付净成交金额
     * @param float $totalOrderRealSettleAmountForRoi21hAssist
     * @return self
     */
    public function setTotalOrderRealSettleAmountForRoi21hAssist(?float $totalOrderRealSettleAmountForRoi21hAssist): self
    {
        $this->totalOrderRealSettleAmountForRoi21hAssist = $totalOrderRealSettleAmountForRoi21hAssist;
        return $this;
    }

    /**
     * 调控净成交金额
     * @return float
     */
    public function getTotalOrderSettleAmountForRoi21hAssist(): ?float
    {
        return $this->totalOrderSettleAmountForRoi21hAssist;
    }

    /**
     * 调控净成交金额
     * @param float $totalOrderSettleAmountForRoi21hAssist
     * @return self
     */
    public function setTotalOrderSettleAmountForRoi21hAssist(?float $totalOrderSettleAmountForRoi21hAssist): self
    {
        $this->totalOrderSettleAmountForRoi21hAssist = $totalOrderSettleAmountForRoi21hAssist;
        return $this;
    }

    /**
     * 调控净成交金额结算率
     * @return float
     */
    public function getTotalOrderSettleAmountRateForRoi21hAssist(): ?float
    {
        return $this->totalOrderSettleAmountRateForRoi21hAssist;
    }

    /**
     * 调控净成交金额结算率
     * @param float $totalOrderSettleAmountRateForRoi21hAssist
     * @return self
     */
    public function setTotalOrderSettleAmountRateForRoi21hAssist(?float $totalOrderSettleAmountRateForRoi21hAssist): self
    {
        $this->totalOrderSettleAmountRateForRoi21hAssist = $totalOrderSettleAmountRateForRoi21hAssist;
        return $this;
    }

    /**
     * 调控净成交订单数
     * @return int
     */
    public function getTotalOrderSettleCountForRoi21hAssist(): ?int
    {
        return $this->totalOrderSettleCountForRoi21hAssist;
    }

    /**
     * 调控净成交订单数
     * @param int $totalOrderSettleCountForRoi21hAssist
     * @return self
     */
    public function setTotalOrderSettleCountForRoi21hAssist(?int $totalOrderSettleCountForRoi21hAssist): self
    {
        $this->totalOrderSettleCountForRoi21hAssist = $totalOrderSettleCountForRoi21hAssist;
        return $this;
    }

    /**
     * 调控净成交订单结算率
     * @return float
     */
    public function getTotalOrderSettleCountRateForRoi21hAssist(): ?float
    {
        return $this->totalOrderSettleCountRateForRoi21hAssist;
    }

    /**
     * 调控净成交订单结算率
     * @param float $totalOrderSettleCountRateForRoi21hAssist
     * @return self
     */
    public function setTotalOrderSettleCountRateForRoi21hAssist(?float $totalOrderSettleCountRateForRoi21hAssist): self
    {
        $this->totalOrderSettleCountRateForRoi21hAssist = $totalOrderSettleCountRateForRoi21hAssist;
        return $this;
    }

    /**
     * 调控成交订单数
     * @return int
     */
    public function getTotalPayOrderCountForRoi2Assist(): ?int
    {
        return $this->totalPayOrderCountForRoi2Assist;
    }

    /**
     * 调控成交订单数
     * @param int $totalPayOrderCountForRoi2Assist
     * @return self
     */
    public function setTotalPayOrderCountForRoi2Assist(?int $totalPayOrderCountForRoi2Assist): self
    {
        $this->totalPayOrderCountForRoi2Assist = $totalPayOrderCountForRoi2Assist;
        return $this;
    }

    /**
     * 调控成交智能优惠券金额
     * @return float
     */
    public function getTotalPayOrderCouponAmountForRoi2Assist(): ?float
    {
        return $this->totalPayOrderCouponAmountForRoi2Assist;
    }

    /**
     * 调控成交智能优惠券金额
     * @param float $totalPayOrderCouponAmountForRoi2Assist
     * @return self
     */
    public function setTotalPayOrderCouponAmountForRoi2Assist(?float $totalPayOrderCouponAmountForRoi2Assist): self
    {
        $this->totalPayOrderCouponAmountForRoi2Assist = $totalPayOrderCouponAmountForRoi2Assist;
        return $this;
    }

    /**
     * 调控用户实际支付金额，单位元
     * @return float
     */
    public function getTotalPayOrderGmvForRoi2Assist(): ?float
    {
        return $this->totalPayOrderGmvForRoi2Assist;
    }

    /**
     * 调控用户实际支付金额，单位元
     * @param float $totalPayOrderGmvForRoi2Assist
     * @return self
     */
    public function setTotalPayOrderGmvForRoi2Assist(?float $totalPayOrderGmvForRoi2Assist): self
    {
        $this->totalPayOrderGmvForRoi2Assist = $totalPayOrderGmvForRoi2Assist;
        return $this;
    }

    /**
     * 调控整体成交金额金额，单位元
     * @return float
     */
    public function getTotalPayOrderGmvIncludeCouponForRoi2Assist(): ?float
    {
        return $this->totalPayOrderGmvIncludeCouponForRoi2Assist;
    }

    /**
     * 调控整体成交金额金额，单位元
     * @param float $totalPayOrderGmvIncludeCouponForRoi2Assist
     * @return self
     */
    public function setTotalPayOrderGmvIncludeCouponForRoi2Assist(?float $totalPayOrderGmvIncludeCouponForRoi2Assist): self
    {
        $this->totalPayOrderGmvIncludeCouponForRoi2Assist = $totalPayOrderGmvIncludeCouponForRoi2Assist;
        return $this;
    }

    /**
     * 调控支付ROI
     * @return float
     */
    public function getTotalPrepayAndPayOrderRoi2Assist(): ?float
    {
        return $this->totalPrepayAndPayOrderRoi2Assist;
    }

    /**
     * 调控支付ROI
     * @param float $totalPrepayAndPayOrderRoi2Assist
     * @return self
     */
    public function setTotalPrepayAndPayOrderRoi2Assist(?float $totalPrepayAndPayOrderRoi2Assist): self
    {
        $this->totalPrepayAndPayOrderRoi2Assist = $totalPrepayAndPayOrderRoi2Assist;
        return $this;
    }

    /**
     * 调控净成交ROI
     * @return float
     */
    public function getTotalPrepayAndPaySettleRoi21hAssist(): ?float
    {
        return $this->totalPrepayAndPaySettleRoi21hAssist;
    }

    /**
     * 调控净成交ROI
     * @param float $totalPrepayAndPaySettleRoi21hAssist
     * @return self
     */
    public function setTotalPrepayAndPaySettleRoi21hAssist(?float $totalPrepayAndPaySettleRoi21hAssist): self
    {
        $this->totalPrepayAndPaySettleRoi21hAssist = $totalPrepayAndPaySettleRoi21hAssist;
        return $this;
    }

    /**
     * 调控1小时内退款订单数
     * @return int
     */
    public function getTotalRefundOrderCountForRoi21hAssist(): ?int
    {
        return $this->totalRefundOrderCountForRoi21hAssist;
    }

    /**
     * 调控1小时内退款订单数
     * @param int $totalRefundOrderCountForRoi21hAssist
     * @return self
     */
    public function setTotalRefundOrderCountForRoi21hAssist(?int $totalRefundOrderCountForRoi21hAssist): self
    {
        $this->totalRefundOrderCountForRoi21hAssist = $totalRefundOrderCountForRoi21hAssist;
        return $this;
    }

    /**
     * 调控1小时内退款金额
     * @return float
     */
    public function getTotalRefundOrderGmvForRoi21hAllAssist(): ?float
    {
        return $this->totalRefundOrderGmvForRoi21hAllAssist;
    }

    /**
     * 调控1小时内退款金额
     * @param float $totalRefundOrderGmvForRoi21hAllAssist
     * @return self
     */
    public function setTotalRefundOrderGmvForRoi21hAllAssist(?float $totalRefundOrderGmvForRoi21hAllAssist): self
    {
        $this->totalRefundOrderGmvForRoi21hAllAssist = $totalRefundOrderGmvForRoi21hAllAssist;
        return $this;
    }

    /**
     * 调控1小时内退款率
     * @return float
     */
    public function getTotalRefundOrderGmvForRoi21hRateAssist(): ?float
    {
        return $this->totalRefundOrderGmvForRoi21hRateAssist;
    }

    /**
     * 调控1小时内退款率
     * @param float $totalRefundOrderGmvForRoi21hRateAssist
     * @return self
     */
    public function setTotalRefundOrderGmvForRoi21hRateAssist(?float $totalRefundOrderGmvForRoi21hRateAssist): self
    {
        $this->totalRefundOrderGmvForRoi21hRateAssist = $totalRefundOrderGmvForRoi21hRateAssist;
        return $this;
    }

    /**
     * 调控未完结预售订单预估金额，单位元
     * @return float
     */
    public function getTotalUnfinishedEstimateOrderGmvForRoi2Assist(): ?float
    {
        return $this->totalUnfinishedEstimateOrderGmvForRoi2Assist;
    }

    /**
     * 调控未完结预售订单预估金额，单位元
     * @param float $totalUnfinishedEstimateOrderGmvForRoi2Assist
     * @return self
     */
    public function setTotalUnfinishedEstimateOrderGmvForRoi2Assist(?float $totalUnfinishedEstimateOrderGmvForRoi2Assist): self
    {
        $this->totalUnfinishedEstimateOrderGmvForRoi2Assist = $totalUnfinishedEstimateOrderGmvForRoi2Assist;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clickCntForRoi2Assist !== null) {
            $result['click_cnt_for_roi2_assist'] = $this->clickCntForRoi2Assist;
        }
        if ($this->convertRateForRoi2Assist !== null) {
            $result['convert_rate_for_roi2_assist'] = $this->convertRateForRoi2Assist;
        }
        if ($this->ctrForRoi2Assist !== null) {
            $result['ctr_for_roi2_assist'] = $this->ctrForRoi2Assist;
        }
        if ($this->noRefundEcomCouponAmountForRoi2Assist !== null) {
            $result['no_refund_ecom_coupon_amount_for_roi2_assist'] = $this->noRefundEcomCouponAmountForRoi2Assist;
        }
        if ($this->noRefundEcomPlatformSubsidyAmountForRoi2Assist !== null) {
            $result['no_refund_ecom_platform_subsidy_amount_for_roi2_assist'] = $this->noRefundEcomPlatformSubsidyAmountForRoi2Assist;
        }
        if ($this->payConvertCntForRoi2Assist !== null) {
            $result['pay_convert_cnt_for_roi2_assist'] = $this->payConvertCntForRoi2Assist;
        }
        if ($this->payConvertCostForRoi2Assist !== null) {
            $result['pay_convert_cost_for_roi2_assist'] = $this->payConvertCostForRoi2Assist;
        }
        if ($this->showCntForRoi2Assist !== null) {
            $result['show_cnt_for_roi2_assist'] = $this->showCntForRoi2Assist;
        }
        if ($this->statCostForRoi2Assist !== null) {
            $result['stat_cost_for_roi2_assist'] = $this->statCostForRoi2Assist;
        }
        if ($this->totalCostPerPayOrderForRoi2Assist !== null) {
            $result['total_cost_per_pay_order_for_roi2_assist'] = $this->totalCostPerPayOrderForRoi2Assist;
        }
        if ($this->totalCostPerPayOrderSettleForRoi21hAssist !== null) {
            $result['total_cost_per_pay_order_settle_for_roi2_1h_assist'] = $this->totalCostPerPayOrderSettleForRoi21hAssist;
        }
        if ($this->totalEcomPlatformSubsidyAmountForRoi2Assist !== null) {
            $result['total_ecom_platform_subsidy_amount_for_roi2_assist'] = $this->totalEcomPlatformSubsidyAmountForRoi2Assist;
        }
        if ($this->totalOrderRealSettleAmountForRoi21hAssist !== null) {
            $result['total_order_real_settle_amount_for_roi2_1h_assist'] = $this->totalOrderRealSettleAmountForRoi21hAssist;
        }
        if ($this->totalOrderSettleAmountForRoi21hAssist !== null) {
            $result['total_order_settle_amount_for_roi2_1h_assist'] = $this->totalOrderSettleAmountForRoi21hAssist;
        }
        if ($this->totalOrderSettleAmountRateForRoi21hAssist !== null) {
            $result['total_order_settle_amount_rate_for_roi2_1h_assist'] = $this->totalOrderSettleAmountRateForRoi21hAssist;
        }
        if ($this->totalOrderSettleCountForRoi21hAssist !== null) {
            $result['total_order_settle_count_for_roi2_1h_assist'] = $this->totalOrderSettleCountForRoi21hAssist;
        }
        if ($this->totalOrderSettleCountRateForRoi21hAssist !== null) {
            $result['total_order_settle_count_rate_for_roi2_1h_assist'] = $this->totalOrderSettleCountRateForRoi21hAssist;
        }
        if ($this->totalPayOrderCountForRoi2Assist !== null) {
            $result['total_pay_order_count_for_roi2_assist'] = $this->totalPayOrderCountForRoi2Assist;
        }
        if ($this->totalPayOrderCouponAmountForRoi2Assist !== null) {
            $result['total_pay_order_coupon_amount_for_roi2_assist'] = $this->totalPayOrderCouponAmountForRoi2Assist;
        }
        if ($this->totalPayOrderGmvForRoi2Assist !== null) {
            $result['total_pay_order_gmv_for_roi2_assist'] = $this->totalPayOrderGmvForRoi2Assist;
        }
        if ($this->totalPayOrderGmvIncludeCouponForRoi2Assist !== null) {
            $result['total_pay_order_gmv_include_coupon_for_roi2_assist'] = $this->totalPayOrderGmvIncludeCouponForRoi2Assist;
        }
        if ($this->totalPrepayAndPayOrderRoi2Assist !== null) {
            $result['total_prepay_and_pay_order_roi2_assist'] = $this->totalPrepayAndPayOrderRoi2Assist;
        }
        if ($this->totalPrepayAndPaySettleRoi21hAssist !== null) {
            $result['total_prepay_and_pay_settle_roi2_1h_assist'] = $this->totalPrepayAndPaySettleRoi21hAssist;
        }
        if ($this->totalRefundOrderCountForRoi21hAssist !== null) {
            $result['total_refund_order_count_for_roi2_1h_assist'] = $this->totalRefundOrderCountForRoi21hAssist;
        }
        if ($this->totalRefundOrderGmvForRoi21hAllAssist !== null) {
            $result['total_refund_order_gmv_for_roi2_1h_all_assist'] = $this->totalRefundOrderGmvForRoi21hAllAssist;
        }
        if ($this->totalRefundOrderGmvForRoi21hRateAssist !== null) {
            $result['total_refund_order_gmv_for_roi2_1h_rate_assist'] = $this->totalRefundOrderGmvForRoi21hRateAssist;
        }
        if ($this->totalUnfinishedEstimateOrderGmvForRoi2Assist !== null) {
            $result['total_unfinished_estimate_order_gmv_for_roi2_assist'] = $this->totalUnfinishedEstimateOrderGmvForRoi2Assist;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['click_cnt_for_roi2_assist'] ?? null) !== null) {
            $obj->clickCntForRoi2Assist = (int) $v;
        }
        if (($v = $data['convert_rate_for_roi2_assist'] ?? null) !== null) {
            $obj->convertRateForRoi2Assist = (float) $v;
        }
        if (($v = $data['ctr_for_roi2_assist'] ?? null) !== null) {
            $obj->ctrForRoi2Assist = (float) $v;
        }
        if (($v = $data['no_refund_ecom_coupon_amount_for_roi2_assist'] ?? null) !== null) {
            $obj->noRefundEcomCouponAmountForRoi2Assist = (float) $v;
        }
        if (($v = $data['no_refund_ecom_platform_subsidy_amount_for_roi2_assist'] ?? null) !== null) {
            $obj->noRefundEcomPlatformSubsidyAmountForRoi2Assist = (float) $v;
        }
        if (($v = $data['pay_convert_cnt_for_roi2_assist'] ?? null) !== null) {
            $obj->payConvertCntForRoi2Assist = (int) $v;
        }
        if (($v = $data['pay_convert_cost_for_roi2_assist'] ?? null) !== null) {
            $obj->payConvertCostForRoi2Assist = (float) $v;
        }
        if (($v = $data['show_cnt_for_roi2_assist'] ?? null) !== null) {
            $obj->showCntForRoi2Assist = (int) $v;
        }
        if (($v = $data['stat_cost_for_roi2_assist'] ?? null) !== null) {
            $obj->statCostForRoi2Assist = (float) $v;
        }
        if (($v = $data['total_cost_per_pay_order_for_roi2_assist'] ?? null) !== null) {
            $obj->totalCostPerPayOrderForRoi2Assist = (float) $v;
        }
        if (($v = $data['total_cost_per_pay_order_settle_for_roi2_1h_assist'] ?? null) !== null) {
            $obj->totalCostPerPayOrderSettleForRoi21hAssist = (float) $v;
        }
        if (($v = $data['total_ecom_platform_subsidy_amount_for_roi2_assist'] ?? null) !== null) {
            $obj->totalEcomPlatformSubsidyAmountForRoi2Assist = (float) $v;
        }
        if (($v = $data['total_order_real_settle_amount_for_roi2_1h_assist'] ?? null) !== null) {
            $obj->totalOrderRealSettleAmountForRoi21hAssist = (float) $v;
        }
        if (($v = $data['total_order_settle_amount_for_roi2_1h_assist'] ?? null) !== null) {
            $obj->totalOrderSettleAmountForRoi21hAssist = (float) $v;
        }
        if (($v = $data['total_order_settle_amount_rate_for_roi2_1h_assist'] ?? null) !== null) {
            $obj->totalOrderSettleAmountRateForRoi21hAssist = (float) $v;
        }
        if (($v = $data['total_order_settle_count_for_roi2_1h_assist'] ?? null) !== null) {
            $obj->totalOrderSettleCountForRoi21hAssist = (int) $v;
        }
        if (($v = $data['total_order_settle_count_rate_for_roi2_1h_assist'] ?? null) !== null) {
            $obj->totalOrderSettleCountRateForRoi21hAssist = (float) $v;
        }
        if (($v = $data['total_pay_order_count_for_roi2_assist'] ?? null) !== null) {
            $obj->totalPayOrderCountForRoi2Assist = (int) $v;
        }
        if (($v = $data['total_pay_order_coupon_amount_for_roi2_assist'] ?? null) !== null) {
            $obj->totalPayOrderCouponAmountForRoi2Assist = (float) $v;
        }
        if (($v = $data['total_pay_order_gmv_for_roi2_assist'] ?? null) !== null) {
            $obj->totalPayOrderGmvForRoi2Assist = (float) $v;
        }
        if (($v = $data['total_pay_order_gmv_include_coupon_for_roi2_assist'] ?? null) !== null) {
            $obj->totalPayOrderGmvIncludeCouponForRoi2Assist = (float) $v;
        }
        if (($v = $data['total_prepay_and_pay_order_roi2_assist'] ?? null) !== null) {
            $obj->totalPrepayAndPayOrderRoi2Assist = (float) $v;
        }
        if (($v = $data['total_prepay_and_pay_settle_roi2_1h_assist'] ?? null) !== null) {
            $obj->totalPrepayAndPaySettleRoi21hAssist = (float) $v;
        }
        if (($v = $data['total_refund_order_count_for_roi2_1h_assist'] ?? null) !== null) {
            $obj->totalRefundOrderCountForRoi21hAssist = (int) $v;
        }
        if (($v = $data['total_refund_order_gmv_for_roi2_1h_all_assist'] ?? null) !== null) {
            $obj->totalRefundOrderGmvForRoi21hAllAssist = (float) $v;
        }
        if (($v = $data['total_refund_order_gmv_for_roi2_1h_rate_assist'] ?? null) !== null) {
            $obj->totalRefundOrderGmvForRoi21hRateAssist = (float) $v;
        }
        if (($v = $data['total_unfinished_estimate_order_gmv_for_roi2_assist'] ?? null) !== null) {
            $obj->totalUnfinishedEstimateOrderGmvForRoi2Assist = (float) $v;
        }
        return $obj;
    }
}
