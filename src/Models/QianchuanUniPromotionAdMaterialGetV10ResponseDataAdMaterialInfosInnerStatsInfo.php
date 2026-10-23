<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerStatsInfo implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $liveConvertRateExcludeVideoForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $liveConvertRateForRoi2V2 = null;

    /**
     * @var float
     */
    protected ?float $liveCvrRateExcludeVideoForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $liveCvrRateForRoi2V2 = null;

    /**
     * @var int
     */
    protected ?int $liveShowCountExcludeVideoForRoi2 = null;

    /**
     * @var int
     */
    protected ?int $liveShowCountForRoi2V2 = null;

    /**
     * @var int
     */
    protected ?int $liveWatchCountExcludeVideoForRoi2 = null;

    /**
     * @var int
     */
    protected ?int $liveWatchCountForRoi2V2 = null;

    /**
     * @var float
     */
    protected ?float $noRefundEcomCouponAmountForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $noRefundEcomPlatformSubsidyAmountForRoi2 = null;

    /**
     * 整体点击次数
     * @var int
     */
    protected ?int $productClickCountForRoi2 = null;

    /**
     * 整体转化率
     * @var float
     */
    protected ?float $productConvertRateForRoi2 = null;

    /**
     * 整体点击率
     * @var float
     */
    protected ?float $productCvrRateForRoi2 = null;

    /**
     * 整体展示次数
     * @var int
     */
    protected ?int $productShowCountForRoi2 = null;

    /**
     * 整体消耗，单位元
     * @var float
     */
    protected ?float $statCostForRoi2 = null;

    /**
     * 整体成交订单成本，单位元
     * @var float
     */
    protected ?float $totalCostPerPayOrderForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $totalCostPerPayOrderSettleForRoi21h = null;

    /**
     * 电商平台补贴金额，单位元
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
     * @var float
     */
    protected ?float $totalPrepayAndPaySettleRoi21h = null;

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
     * 整体未完结预售订单预估金额，单位元
     * @var float
     */
    protected ?float $totalUnfinishedEstimateOrderGmvForRoi2 = null;

    /**
     * @return float
     */
    public function getLiveConvertRateExcludeVideoForRoi2(): ?float
    {
        return $this->liveConvertRateExcludeVideoForRoi2;
    }

    /**
     * @param float $liveConvertRateExcludeVideoForRoi2
     * @return self
     */
    public function setLiveConvertRateExcludeVideoForRoi2(?float $liveConvertRateExcludeVideoForRoi2): self
    {
        $this->liveConvertRateExcludeVideoForRoi2 = $liveConvertRateExcludeVideoForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveConvertRateForRoi2V2(): ?float
    {
        return $this->liveConvertRateForRoi2V2;
    }

    /**
     * @param float $liveConvertRateForRoi2V2
     * @return self
     */
    public function setLiveConvertRateForRoi2V2(?float $liveConvertRateForRoi2V2): self
    {
        $this->liveConvertRateForRoi2V2 = $liveConvertRateForRoi2V2;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveCvrRateExcludeVideoForRoi2(): ?float
    {
        return $this->liveCvrRateExcludeVideoForRoi2;
    }

    /**
     * @param float $liveCvrRateExcludeVideoForRoi2
     * @return self
     */
    public function setLiveCvrRateExcludeVideoForRoi2(?float $liveCvrRateExcludeVideoForRoi2): self
    {
        $this->liveCvrRateExcludeVideoForRoi2 = $liveCvrRateExcludeVideoForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveCvrRateForRoi2V2(): ?float
    {
        return $this->liveCvrRateForRoi2V2;
    }

    /**
     * @param float $liveCvrRateForRoi2V2
     * @return self
     */
    public function setLiveCvrRateForRoi2V2(?float $liveCvrRateForRoi2V2): self
    {
        $this->liveCvrRateForRoi2V2 = $liveCvrRateForRoi2V2;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveShowCountExcludeVideoForRoi2(): ?int
    {
        return $this->liveShowCountExcludeVideoForRoi2;
    }

    /**
     * @param int $liveShowCountExcludeVideoForRoi2
     * @return self
     */
    public function setLiveShowCountExcludeVideoForRoi2(?int $liveShowCountExcludeVideoForRoi2): self
    {
        $this->liveShowCountExcludeVideoForRoi2 = $liveShowCountExcludeVideoForRoi2;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveShowCountForRoi2V2(): ?int
    {
        return $this->liveShowCountForRoi2V2;
    }

    /**
     * @param int $liveShowCountForRoi2V2
     * @return self
     */
    public function setLiveShowCountForRoi2V2(?int $liveShowCountForRoi2V2): self
    {
        $this->liveShowCountForRoi2V2 = $liveShowCountForRoi2V2;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveWatchCountExcludeVideoForRoi2(): ?int
    {
        return $this->liveWatchCountExcludeVideoForRoi2;
    }

    /**
     * @param int $liveWatchCountExcludeVideoForRoi2
     * @return self
     */
    public function setLiveWatchCountExcludeVideoForRoi2(?int $liveWatchCountExcludeVideoForRoi2): self
    {
        $this->liveWatchCountExcludeVideoForRoi2 = $liveWatchCountExcludeVideoForRoi2;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveWatchCountForRoi2V2(): ?int
    {
        return $this->liveWatchCountForRoi2V2;
    }

    /**
     * @param int $liveWatchCountForRoi2V2
     * @return self
     */
    public function setLiveWatchCountForRoi2V2(?int $liveWatchCountForRoi2V2): self
    {
        $this->liveWatchCountForRoi2V2 = $liveWatchCountForRoi2V2;
        return $this;
    }

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
     * 整体点击次数
     * @return int
     */
    public function getProductClickCountForRoi2(): ?int
    {
        return $this->productClickCountForRoi2;
    }

    /**
     * 整体点击次数
     * @param int $productClickCountForRoi2
     * @return self
     */
    public function setProductClickCountForRoi2(?int $productClickCountForRoi2): self
    {
        $this->productClickCountForRoi2 = $productClickCountForRoi2;
        return $this;
    }

    /**
     * 整体转化率
     * @return float
     */
    public function getProductConvertRateForRoi2(): ?float
    {
        return $this->productConvertRateForRoi2;
    }

    /**
     * 整体转化率
     * @param float $productConvertRateForRoi2
     * @return self
     */
    public function setProductConvertRateForRoi2(?float $productConvertRateForRoi2): self
    {
        $this->productConvertRateForRoi2 = $productConvertRateForRoi2;
        return $this;
    }

    /**
     * 整体点击率
     * @return float
     */
    public function getProductCvrRateForRoi2(): ?float
    {
        return $this->productCvrRateForRoi2;
    }

    /**
     * 整体点击率
     * @param float $productCvrRateForRoi2
     * @return self
     */
    public function setProductCvrRateForRoi2(?float $productCvrRateForRoi2): self
    {
        $this->productCvrRateForRoi2 = $productCvrRateForRoi2;
        return $this;
    }

    /**
     * 整体展示次数
     * @return int
     */
    public function getProductShowCountForRoi2(): ?int
    {
        return $this->productShowCountForRoi2;
    }

    /**
     * 整体展示次数
     * @param int $productShowCountForRoi2
     * @return self
     */
    public function setProductShowCountForRoi2(?int $productShowCountForRoi2): self
    {
        $this->productShowCountForRoi2 = $productShowCountForRoi2;
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
     * 整体成交订单成本，单位元
     * @return float
     */
    public function getTotalCostPerPayOrderForRoi2(): ?float
    {
        return $this->totalCostPerPayOrderForRoi2;
    }

    /**
     * 整体成交订单成本，单位元
     * @param float $totalCostPerPayOrderForRoi2
     * @return self
     */
    public function setTotalCostPerPayOrderForRoi2(?float $totalCostPerPayOrderForRoi2): self
    {
        $this->totalCostPerPayOrderForRoi2 = $totalCostPerPayOrderForRoi2;
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
     * 电商平台补贴金额，单位元
     * @return float
     */
    public function getTotalEcomPlatformSubsidyAmountForRoi2(): ?float
    {
        return $this->totalEcomPlatformSubsidyAmountForRoi2;
    }

    /**
     * 电商平台补贴金额，单位元
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
        if ($this->liveConvertRateExcludeVideoForRoi2 !== null) {
            $result['live_convert_rate_exclude_video_for_roi2'] = $this->liveConvertRateExcludeVideoForRoi2;
        }
        if ($this->liveConvertRateForRoi2V2 !== null) {
            $result['live_convert_rate_for_roi2_v2'] = $this->liveConvertRateForRoi2V2;
        }
        if ($this->liveCvrRateExcludeVideoForRoi2 !== null) {
            $result['live_cvr_rate_exclude_video_for_roi2'] = $this->liveCvrRateExcludeVideoForRoi2;
        }
        if ($this->liveCvrRateForRoi2V2 !== null) {
            $result['live_cvr_rate_for_roi2_v2'] = $this->liveCvrRateForRoi2V2;
        }
        if ($this->liveShowCountExcludeVideoForRoi2 !== null) {
            $result['live_show_count_exclude_video_for_roi2'] = $this->liveShowCountExcludeVideoForRoi2;
        }
        if ($this->liveShowCountForRoi2V2 !== null) {
            $result['live_show_count_for_roi2_v2'] = $this->liveShowCountForRoi2V2;
        }
        if ($this->liveWatchCountExcludeVideoForRoi2 !== null) {
            $result['live_watch_count_exclude_video_for_roi2'] = $this->liveWatchCountExcludeVideoForRoi2;
        }
        if ($this->liveWatchCountForRoi2V2 !== null) {
            $result['live_watch_count_for_roi2_v2'] = $this->liveWatchCountForRoi2V2;
        }
        if ($this->noRefundEcomCouponAmountForRoi2 !== null) {
            $result['no_refund_ecom_coupon_amount_for_roi2'] = $this->noRefundEcomCouponAmountForRoi2;
        }
        if ($this->noRefundEcomPlatformSubsidyAmountForRoi2 !== null) {
            $result['no_refund_ecom_platform_subsidy_amount_for_roi2'] = $this->noRefundEcomPlatformSubsidyAmountForRoi2;
        }
        if ($this->productClickCountForRoi2 !== null) {
            $result['product_click_count_for_roi2'] = $this->productClickCountForRoi2;
        }
        if ($this->productConvertRateForRoi2 !== null) {
            $result['product_convert_rate_for_roi2'] = $this->productConvertRateForRoi2;
        }
        if ($this->productCvrRateForRoi2 !== null) {
            $result['product_cvr_rate_for_roi2'] = $this->productCvrRateForRoi2;
        }
        if ($this->productShowCountForRoi2 !== null) {
            $result['product_show_count_for_roi2'] = $this->productShowCountForRoi2;
        }
        if ($this->statCostForRoi2 !== null) {
            $result['stat_cost_for_roi2'] = $this->statCostForRoi2;
        }
        if ($this->totalCostPerPayOrderForRoi2 !== null) {
            $result['total_cost_per_pay_order_for_roi2'] = $this->totalCostPerPayOrderForRoi2;
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
        if ($this->totalPrepayAndPaySettleRoi21h !== null) {
            $result['total_prepay_and_pay_settle_roi2_1h'] = $this->totalPrepayAndPaySettleRoi21h;
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
        if (($v = $data['live_convert_rate_exclude_video_for_roi2'] ?? null) !== null) {
            $obj->liveConvertRateExcludeVideoForRoi2 = (float) $v;
        }
        if (($v = $data['live_convert_rate_for_roi2_v2'] ?? null) !== null) {
            $obj->liveConvertRateForRoi2V2 = (float) $v;
        }
        if (($v = $data['live_cvr_rate_exclude_video_for_roi2'] ?? null) !== null) {
            $obj->liveCvrRateExcludeVideoForRoi2 = (float) $v;
        }
        if (($v = $data['live_cvr_rate_for_roi2_v2'] ?? null) !== null) {
            $obj->liveCvrRateForRoi2V2 = (float) $v;
        }
        if (($v = $data['live_show_count_exclude_video_for_roi2'] ?? null) !== null) {
            $obj->liveShowCountExcludeVideoForRoi2 = (int) $v;
        }
        if (($v = $data['live_show_count_for_roi2_v2'] ?? null) !== null) {
            $obj->liveShowCountForRoi2V2 = (int) $v;
        }
        if (($v = $data['live_watch_count_exclude_video_for_roi2'] ?? null) !== null) {
            $obj->liveWatchCountExcludeVideoForRoi2 = (int) $v;
        }
        if (($v = $data['live_watch_count_for_roi2_v2'] ?? null) !== null) {
            $obj->liveWatchCountForRoi2V2 = (int) $v;
        }
        if (($v = $data['no_refund_ecom_coupon_amount_for_roi2'] ?? null) !== null) {
            $obj->noRefundEcomCouponAmountForRoi2 = (float) $v;
        }
        if (($v = $data['no_refund_ecom_platform_subsidy_amount_for_roi2'] ?? null) !== null) {
            $obj->noRefundEcomPlatformSubsidyAmountForRoi2 = (float) $v;
        }
        if (($v = $data['product_click_count_for_roi2'] ?? null) !== null) {
            $obj->productClickCountForRoi2 = (int) $v;
        }
        if (($v = $data['product_convert_rate_for_roi2'] ?? null) !== null) {
            $obj->productConvertRateForRoi2 = (float) $v;
        }
        if (($v = $data['product_cvr_rate_for_roi2'] ?? null) !== null) {
            $obj->productCvrRateForRoi2 = (float) $v;
        }
        if (($v = $data['product_show_count_for_roi2'] ?? null) !== null) {
            $obj->productShowCountForRoi2 = (int) $v;
        }
        if (($v = $data['stat_cost_for_roi2'] ?? null) !== null) {
            $obj->statCostForRoi2 = (float) $v;
        }
        if (($v = $data['total_cost_per_pay_order_for_roi2'] ?? null) !== null) {
            $obj->totalCostPerPayOrderForRoi2 = (float) $v;
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
