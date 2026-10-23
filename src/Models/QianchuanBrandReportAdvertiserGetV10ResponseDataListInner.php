<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanBrandReportAdvertiserGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var float
     */
    protected ?float $allOrderCreateRoi7days = null;

    /**
     * @var float
     */
    protected ?float $allOrderPayCount7days = null;

    /**
     * @var float
     */
    protected ?float $allOrderPayGmv7days = null;

    /**
     * @var float
     */
    protected ?float $allOrderPayRoi7days = null;

    /**
     * @var float
     */
    protected ?float $clickCnt = null;

    /**
     * @var float
     */
    protected ?float $cpmPlatform = null;

    /**
     * @var float
     */
    protected ?float $createOrderAmount = null;

    /**
     * @var float
     */
    protected ?float $createOrderCount = null;

    /**
     * @var float
     */
    protected ?float $createOrderCouponAmount = null;

    /**
     * @var float
     */
    protected ?float $createOrderRoi = null;

    /**
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * @var float
     */
    protected ?float $dyFollow = null;

    /**
     * @var float
     */
    protected ?float $indirectOrderCreateCount7days = null;

    /**
     * @var float
     */
    protected ?float $indirectOrderCreateGmv7days = null;

    /**
     * @var float
     */
    protected ?float $indirectOrderPayCount7days = null;

    /**
     * @var float
     */
    protected ?float $indirectOrderPayGmv7days = null;

    /**
     * @var float
     */
    protected ?float $indirectOrderPrepayCount7days = null;

    /**
     * @var float
     */
    protected ?float $indirectOrderPrepayGmv7days = null;

    /**
     * @var int
     */
    protected ?int $indirectOrderUnfinishedEstimateGmv7days = null;

    /**
     * @var float
     */
    protected ?float $lubanLiveClickProductCnt = null;

    /**
     * @var float
     */
    protected ?float $lubanLiveEnterCnt = null;

    /**
     * @var float
     */
    protected ?float $payOrderAmount = null;

    /**
     * @var float
     */
    protected ?float $payOrderCount = null;

    /**
     * @var float
     */
    protected ?float $payOrderCouponAmount = null;

    /**
     * @var float
     */
    protected ?float $play25FeedBreak = null;

    /**
     * @var float
     */
    protected ?float $play50FeedBreak = null;

    /**
     * @var float
     */
    protected ?float $play75FeedBreak = null;

    /**
     * @var float
     */
    protected ?float $playDuration3s = null;

    /**
     * @var float
     */
    protected ?float $playOver = null;

    /**
     * @var float
     */
    protected ?float $playOverRate = null;

    /**
     * @var float
     */
    protected ?float $prepayAndPayOrderRoi = null;

    /**
     * @var float
     */
    protected ?float $prepayOrderAmount = null;

    /**
     * @var float
     */
    protected ?float $prepayOrderCount = null;

    /**
     * @var float
     */
    protected ?float $qianchuanFirstOrderCnt = null;

    /**
     * @var float
     */
    protected ?float $qianchuanFirstOrderConvertCost = null;

    /**
     * @var float
     */
    protected ?float $qianchuanFirstOrderDirectPayGmv = null;

    /**
     * @var float
     */
    protected ?float $qianchuanFirstOrderDirectPayOrderRoi = null;

    /**
     * @var float
     */
    protected ?float $qianchuanFirstOrderLtv30 = null;

    /**
     * @var float
     */
    protected ?float $qianchuanFirstOrderRate = null;

    /**
     * @var float
     */
    protected ?float $qianchuanFirstOrderRoi30 = null;

    /**
     * @var float
     */
    protected ?float $showCnt = null;

    /**
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * @var string
     */
    protected ?string $statDatetime = null;

    /**
     * @var float
     */
    protected ?float $totalPlay = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return float
     */
    public function getAllOrderCreateRoi7days(): ?float
    {
        return $this->allOrderCreateRoi7days;
    }

    /**
     * @param float $allOrderCreateRoi7days
     * @return self
     */
    public function setAllOrderCreateRoi7days(?float $allOrderCreateRoi7days): self
    {
        $this->allOrderCreateRoi7days = $allOrderCreateRoi7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAllOrderPayCount7days(): ?float
    {
        return $this->allOrderPayCount7days;
    }

    /**
     * @param float $allOrderPayCount7days
     * @return self
     */
    public function setAllOrderPayCount7days(?float $allOrderPayCount7days): self
    {
        $this->allOrderPayCount7days = $allOrderPayCount7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAllOrderPayGmv7days(): ?float
    {
        return $this->allOrderPayGmv7days;
    }

    /**
     * @param float $allOrderPayGmv7days
     * @return self
     */
    public function setAllOrderPayGmv7days(?float $allOrderPayGmv7days): self
    {
        $this->allOrderPayGmv7days = $allOrderPayGmv7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAllOrderPayRoi7days(): ?float
    {
        return $this->allOrderPayRoi7days;
    }

    /**
     * @param float $allOrderPayRoi7days
     * @return self
     */
    public function setAllOrderPayRoi7days(?float $allOrderPayRoi7days): self
    {
        $this->allOrderPayRoi7days = $allOrderPayRoi7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getClickCnt(): ?float
    {
        return $this->clickCnt;
    }

    /**
     * @param float $clickCnt
     * @return self
     */
    public function setClickCnt(?float $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpmPlatform(): ?float
    {
        return $this->cpmPlatform;
    }

    /**
     * @param float $cpmPlatform
     * @return self
     */
    public function setCpmPlatform(?float $cpmPlatform): self
    {
        $this->cpmPlatform = $cpmPlatform;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreateOrderAmount(): ?float
    {
        return $this->createOrderAmount;
    }

    /**
     * @param float $createOrderAmount
     * @return self
     */
    public function setCreateOrderAmount(?float $createOrderAmount): self
    {
        $this->createOrderAmount = $createOrderAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreateOrderCount(): ?float
    {
        return $this->createOrderCount;
    }

    /**
     * @param float $createOrderCount
     * @return self
     */
    public function setCreateOrderCount(?float $createOrderCount): self
    {
        $this->createOrderCount = $createOrderCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreateOrderCouponAmount(): ?float
    {
        return $this->createOrderCouponAmount;
    }

    /**
     * @param float $createOrderCouponAmount
     * @return self
     */
    public function setCreateOrderCouponAmount(?float $createOrderCouponAmount): self
    {
        $this->createOrderCouponAmount = $createOrderCouponAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreateOrderRoi(): ?float
    {
        return $this->createOrderRoi;
    }

    /**
     * @param float $createOrderRoi
     * @return self
     */
    public function setCreateOrderRoi(?float $createOrderRoi): self
    {
        $this->createOrderRoi = $createOrderRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getCtr(): ?float
    {
        return $this->ctr;
    }

    /**
     * @param float $ctr
     * @return self
     */
    public function setCtr(?float $ctr): self
    {
        $this->ctr = $ctr;
        return $this;
    }

    /**
     * @return float
     */
    public function getDyFollow(): ?float
    {
        return $this->dyFollow;
    }

    /**
     * @param float $dyFollow
     * @return self
     */
    public function setDyFollow(?float $dyFollow): self
    {
        $this->dyFollow = $dyFollow;
        return $this;
    }

    /**
     * @return float
     */
    public function getIndirectOrderCreateCount7days(): ?float
    {
        return $this->indirectOrderCreateCount7days;
    }

    /**
     * @param float $indirectOrderCreateCount7days
     * @return self
     */
    public function setIndirectOrderCreateCount7days(?float $indirectOrderCreateCount7days): self
    {
        $this->indirectOrderCreateCount7days = $indirectOrderCreateCount7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getIndirectOrderCreateGmv7days(): ?float
    {
        return $this->indirectOrderCreateGmv7days;
    }

    /**
     * @param float $indirectOrderCreateGmv7days
     * @return self
     */
    public function setIndirectOrderCreateGmv7days(?float $indirectOrderCreateGmv7days): self
    {
        $this->indirectOrderCreateGmv7days = $indirectOrderCreateGmv7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getIndirectOrderPayCount7days(): ?float
    {
        return $this->indirectOrderPayCount7days;
    }

    /**
     * @param float $indirectOrderPayCount7days
     * @return self
     */
    public function setIndirectOrderPayCount7days(?float $indirectOrderPayCount7days): self
    {
        $this->indirectOrderPayCount7days = $indirectOrderPayCount7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getIndirectOrderPayGmv7days(): ?float
    {
        return $this->indirectOrderPayGmv7days;
    }

    /**
     * @param float $indirectOrderPayGmv7days
     * @return self
     */
    public function setIndirectOrderPayGmv7days(?float $indirectOrderPayGmv7days): self
    {
        $this->indirectOrderPayGmv7days = $indirectOrderPayGmv7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getIndirectOrderPrepayCount7days(): ?float
    {
        return $this->indirectOrderPrepayCount7days;
    }

    /**
     * @param float $indirectOrderPrepayCount7days
     * @return self
     */
    public function setIndirectOrderPrepayCount7days(?float $indirectOrderPrepayCount7days): self
    {
        $this->indirectOrderPrepayCount7days = $indirectOrderPrepayCount7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getIndirectOrderPrepayGmv7days(): ?float
    {
        return $this->indirectOrderPrepayGmv7days;
    }

    /**
     * @param float $indirectOrderPrepayGmv7days
     * @return self
     */
    public function setIndirectOrderPrepayGmv7days(?float $indirectOrderPrepayGmv7days): self
    {
        $this->indirectOrderPrepayGmv7days = $indirectOrderPrepayGmv7days;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndirectOrderUnfinishedEstimateGmv7days(): ?int
    {
        return $this->indirectOrderUnfinishedEstimateGmv7days;
    }

    /**
     * @param int $indirectOrderUnfinishedEstimateGmv7days
     * @return self
     */
    public function setIndirectOrderUnfinishedEstimateGmv7days(?int $indirectOrderUnfinishedEstimateGmv7days): self
    {
        $this->indirectOrderUnfinishedEstimateGmv7days = $indirectOrderUnfinishedEstimateGmv7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanLiveClickProductCnt(): ?float
    {
        return $this->lubanLiveClickProductCnt;
    }

    /**
     * @param float $lubanLiveClickProductCnt
     * @return self
     */
    public function setLubanLiveClickProductCnt(?float $lubanLiveClickProductCnt): self
    {
        $this->lubanLiveClickProductCnt = $lubanLiveClickProductCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanLiveEnterCnt(): ?float
    {
        return $this->lubanLiveEnterCnt;
    }

    /**
     * @param float $lubanLiveEnterCnt
     * @return self
     */
    public function setLubanLiveEnterCnt(?float $lubanLiveEnterCnt): self
    {
        $this->lubanLiveEnterCnt = $lubanLiveEnterCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayOrderAmount(): ?float
    {
        return $this->payOrderAmount;
    }

    /**
     * @param float $payOrderAmount
     * @return self
     */
    public function setPayOrderAmount(?float $payOrderAmount): self
    {
        $this->payOrderAmount = $payOrderAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayOrderCount(): ?float
    {
        return $this->payOrderCount;
    }

    /**
     * @param float $payOrderCount
     * @return self
     */
    public function setPayOrderCount(?float $payOrderCount): self
    {
        $this->payOrderCount = $payOrderCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayOrderCouponAmount(): ?float
    {
        return $this->payOrderCouponAmount;
    }

    /**
     * @param float $payOrderCouponAmount
     * @return self
     */
    public function setPayOrderCouponAmount(?float $payOrderCouponAmount): self
    {
        $this->payOrderCouponAmount = $payOrderCouponAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlay25FeedBreak(): ?float
    {
        return $this->play25FeedBreak;
    }

    /**
     * @param float $play25FeedBreak
     * @return self
     */
    public function setPlay25FeedBreak(?float $play25FeedBreak): self
    {
        $this->play25FeedBreak = $play25FeedBreak;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlay50FeedBreak(): ?float
    {
        return $this->play50FeedBreak;
    }

    /**
     * @param float $play50FeedBreak
     * @return self
     */
    public function setPlay50FeedBreak(?float $play50FeedBreak): self
    {
        $this->play50FeedBreak = $play50FeedBreak;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlay75FeedBreak(): ?float
    {
        return $this->play75FeedBreak;
    }

    /**
     * @param float $play75FeedBreak
     * @return self
     */
    public function setPlay75FeedBreak(?float $play75FeedBreak): self
    {
        $this->play75FeedBreak = $play75FeedBreak;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlayDuration3s(): ?float
    {
        return $this->playDuration3s;
    }

    /**
     * @param float $playDuration3s
     * @return self
     */
    public function setPlayDuration3s(?float $playDuration3s): self
    {
        $this->playDuration3s = $playDuration3s;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlayOver(): ?float
    {
        return $this->playOver;
    }

    /**
     * @param float $playOver
     * @return self
     */
    public function setPlayOver(?float $playOver): self
    {
        $this->playOver = $playOver;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlayOverRate(): ?float
    {
        return $this->playOverRate;
    }

    /**
     * @param float $playOverRate
     * @return self
     */
    public function setPlayOverRate(?float $playOverRate): self
    {
        $this->playOverRate = $playOverRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrepayAndPayOrderRoi(): ?float
    {
        return $this->prepayAndPayOrderRoi;
    }

    /**
     * @param float $prepayAndPayOrderRoi
     * @return self
     */
    public function setPrepayAndPayOrderRoi(?float $prepayAndPayOrderRoi): self
    {
        $this->prepayAndPayOrderRoi = $prepayAndPayOrderRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrepayOrderAmount(): ?float
    {
        return $this->prepayOrderAmount;
    }

    /**
     * @param float $prepayOrderAmount
     * @return self
     */
    public function setPrepayOrderAmount(?float $prepayOrderAmount): self
    {
        $this->prepayOrderAmount = $prepayOrderAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrepayOrderCount(): ?float
    {
        return $this->prepayOrderCount;
    }

    /**
     * @param float $prepayOrderCount
     * @return self
     */
    public function setPrepayOrderCount(?float $prepayOrderCount): self
    {
        $this->prepayOrderCount = $prepayOrderCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanFirstOrderCnt(): ?float
    {
        return $this->qianchuanFirstOrderCnt;
    }

    /**
     * @param float $qianchuanFirstOrderCnt
     * @return self
     */
    public function setQianchuanFirstOrderCnt(?float $qianchuanFirstOrderCnt): self
    {
        $this->qianchuanFirstOrderCnt = $qianchuanFirstOrderCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanFirstOrderConvertCost(): ?float
    {
        return $this->qianchuanFirstOrderConvertCost;
    }

    /**
     * @param float $qianchuanFirstOrderConvertCost
     * @return self
     */
    public function setQianchuanFirstOrderConvertCost(?float $qianchuanFirstOrderConvertCost): self
    {
        $this->qianchuanFirstOrderConvertCost = $qianchuanFirstOrderConvertCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanFirstOrderDirectPayGmv(): ?float
    {
        return $this->qianchuanFirstOrderDirectPayGmv;
    }

    /**
     * @param float $qianchuanFirstOrderDirectPayGmv
     * @return self
     */
    public function setQianchuanFirstOrderDirectPayGmv(?float $qianchuanFirstOrderDirectPayGmv): self
    {
        $this->qianchuanFirstOrderDirectPayGmv = $qianchuanFirstOrderDirectPayGmv;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanFirstOrderDirectPayOrderRoi(): ?float
    {
        return $this->qianchuanFirstOrderDirectPayOrderRoi;
    }

    /**
     * @param float $qianchuanFirstOrderDirectPayOrderRoi
     * @return self
     */
    public function setQianchuanFirstOrderDirectPayOrderRoi(?float $qianchuanFirstOrderDirectPayOrderRoi): self
    {
        $this->qianchuanFirstOrderDirectPayOrderRoi = $qianchuanFirstOrderDirectPayOrderRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanFirstOrderLtv30(): ?float
    {
        return $this->qianchuanFirstOrderLtv30;
    }

    /**
     * @param float $qianchuanFirstOrderLtv30
     * @return self
     */
    public function setQianchuanFirstOrderLtv30(?float $qianchuanFirstOrderLtv30): self
    {
        $this->qianchuanFirstOrderLtv30 = $qianchuanFirstOrderLtv30;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanFirstOrderRate(): ?float
    {
        return $this->qianchuanFirstOrderRate;
    }

    /**
     * @param float $qianchuanFirstOrderRate
     * @return self
     */
    public function setQianchuanFirstOrderRate(?float $qianchuanFirstOrderRate): self
    {
        $this->qianchuanFirstOrderRate = $qianchuanFirstOrderRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanFirstOrderRoi30(): ?float
    {
        return $this->qianchuanFirstOrderRoi30;
    }

    /**
     * @param float $qianchuanFirstOrderRoi30
     * @return self
     */
    public function setQianchuanFirstOrderRoi30(?float $qianchuanFirstOrderRoi30): self
    {
        $this->qianchuanFirstOrderRoi30 = $qianchuanFirstOrderRoi30;
        return $this;
    }

    /**
     * @return float
     */
    public function getShowCnt(): ?float
    {
        return $this->showCnt;
    }

    /**
     * @param float $showCnt
     * @return self
     */
    public function setShowCnt(?float $showCnt): self
    {
        $this->showCnt = $showCnt;
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
     * @return string
     */
    public function getStatDatetime(): ?string
    {
        return $this->statDatetime;
    }

    /**
     * @param string $statDatetime
     * @return self
     */
    public function setStatDatetime(?string $statDatetime): self
    {
        $this->statDatetime = $statDatetime;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPlay(): ?float
    {
        return $this->totalPlay;
    }

    /**
     * @param float $totalPlay
     * @return self
     */
    public function setTotalPlay(?float $totalPlay): self
    {
        $this->totalPlay = $totalPlay;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->allOrderCreateRoi7days !== null) {
            $result['all_order_create_roi_7days'] = $this->allOrderCreateRoi7days;
        }
        if ($this->allOrderPayCount7days !== null) {
            $result['all_order_pay_count_7days'] = $this->allOrderPayCount7days;
        }
        if ($this->allOrderPayGmv7days !== null) {
            $result['all_order_pay_gmv_7days'] = $this->allOrderPayGmv7days;
        }
        if ($this->allOrderPayRoi7days !== null) {
            $result['all_order_pay_roi_7days'] = $this->allOrderPayRoi7days;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->cpmPlatform !== null) {
            $result['cpm_platform'] = $this->cpmPlatform;
        }
        if ($this->createOrderAmount !== null) {
            $result['create_order_amount'] = $this->createOrderAmount;
        }
        if ($this->createOrderCount !== null) {
            $result['create_order_count'] = $this->createOrderCount;
        }
        if ($this->createOrderCouponAmount !== null) {
            $result['create_order_coupon_amount'] = $this->createOrderCouponAmount;
        }
        if ($this->createOrderRoi !== null) {
            $result['create_order_roi'] = $this->createOrderRoi;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
        }
        if ($this->dyFollow !== null) {
            $result['dy_follow'] = $this->dyFollow;
        }
        if ($this->indirectOrderCreateCount7days !== null) {
            $result['indirect_order_create_count_7days'] = $this->indirectOrderCreateCount7days;
        }
        if ($this->indirectOrderCreateGmv7days !== null) {
            $result['indirect_order_create_gmv_7days'] = $this->indirectOrderCreateGmv7days;
        }
        if ($this->indirectOrderPayCount7days !== null) {
            $result['indirect_order_pay_count_7days'] = $this->indirectOrderPayCount7days;
        }
        if ($this->indirectOrderPayGmv7days !== null) {
            $result['indirect_order_pay_gmv_7days'] = $this->indirectOrderPayGmv7days;
        }
        if ($this->indirectOrderPrepayCount7days !== null) {
            $result['indirect_order_prepay_count_7days'] = $this->indirectOrderPrepayCount7days;
        }
        if ($this->indirectOrderPrepayGmv7days !== null) {
            $result['indirect_order_prepay_gmv_7days'] = $this->indirectOrderPrepayGmv7days;
        }
        if ($this->indirectOrderUnfinishedEstimateGmv7days !== null) {
            $result['indirect_order_unfinished_estimate_gmv_7days'] = $this->indirectOrderUnfinishedEstimateGmv7days;
        }
        if ($this->lubanLiveClickProductCnt !== null) {
            $result['luban_live_click_product_cnt'] = $this->lubanLiveClickProductCnt;
        }
        if ($this->lubanLiveEnterCnt !== null) {
            $result['luban_live_enter_cnt'] = $this->lubanLiveEnterCnt;
        }
        if ($this->payOrderAmount !== null) {
            $result['pay_order_amount'] = $this->payOrderAmount;
        }
        if ($this->payOrderCount !== null) {
            $result['pay_order_count'] = $this->payOrderCount;
        }
        if ($this->payOrderCouponAmount !== null) {
            $result['pay_order_coupon_amount'] = $this->payOrderCouponAmount;
        }
        if ($this->play25FeedBreak !== null) {
            $result['play_25_feed_break'] = $this->play25FeedBreak;
        }
        if ($this->play50FeedBreak !== null) {
            $result['play_50_feed_break'] = $this->play50FeedBreak;
        }
        if ($this->play75FeedBreak !== null) {
            $result['play_75_feed_break'] = $this->play75FeedBreak;
        }
        if ($this->playDuration3s !== null) {
            $result['play_duration_3s'] = $this->playDuration3s;
        }
        if ($this->playOver !== null) {
            $result['play_over'] = $this->playOver;
        }
        if ($this->playOverRate !== null) {
            $result['play_over_rate'] = $this->playOverRate;
        }
        if ($this->prepayAndPayOrderRoi !== null) {
            $result['prepay_and_pay_order_roi'] = $this->prepayAndPayOrderRoi;
        }
        if ($this->prepayOrderAmount !== null) {
            $result['prepay_order_amount'] = $this->prepayOrderAmount;
        }
        if ($this->prepayOrderCount !== null) {
            $result['prepay_order_count'] = $this->prepayOrderCount;
        }
        if ($this->qianchuanFirstOrderCnt !== null) {
            $result['qianchuan_first_order_cnt'] = $this->qianchuanFirstOrderCnt;
        }
        if ($this->qianchuanFirstOrderConvertCost !== null) {
            $result['qianchuan_first_order_convert_cost'] = $this->qianchuanFirstOrderConvertCost;
        }
        if ($this->qianchuanFirstOrderDirectPayGmv !== null) {
            $result['qianchuan_first_order_direct_pay_gmv'] = $this->qianchuanFirstOrderDirectPayGmv;
        }
        if ($this->qianchuanFirstOrderDirectPayOrderRoi !== null) {
            $result['qianchuan_first_order_direct_pay_order_roi'] = $this->qianchuanFirstOrderDirectPayOrderRoi;
        }
        if ($this->qianchuanFirstOrderLtv30 !== null) {
            $result['qianchuan_first_order_ltv30'] = $this->qianchuanFirstOrderLtv30;
        }
        if ($this->qianchuanFirstOrderRate !== null) {
            $result['qianchuan_first_order_rate'] = $this->qianchuanFirstOrderRate;
        }
        if ($this->qianchuanFirstOrderRoi30 !== null) {
            $result['qianchuan_first_order_roi30'] = $this->qianchuanFirstOrderRoi30;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->statDatetime !== null) {
            $result['stat_datetime'] = $this->statDatetime;
        }
        if ($this->totalPlay !== null) {
            $result['total_play'] = $this->totalPlay;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['all_order_create_roi_7days'] ?? null) !== null) {
            $obj->allOrderCreateRoi7days = (float) $v;
        }
        if (($v = $data['all_order_pay_count_7days'] ?? null) !== null) {
            $obj->allOrderPayCount7days = (float) $v;
        }
        if (($v = $data['all_order_pay_gmv_7days'] ?? null) !== null) {
            $obj->allOrderPayGmv7days = (float) $v;
        }
        if (($v = $data['all_order_pay_roi_7days'] ?? null) !== null) {
            $obj->allOrderPayRoi7days = (float) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (float) $v;
        }
        if (($v = $data['cpm_platform'] ?? null) !== null) {
            $obj->cpmPlatform = (float) $v;
        }
        if (($v = $data['create_order_amount'] ?? null) !== null) {
            $obj->createOrderAmount = (float) $v;
        }
        if (($v = $data['create_order_count'] ?? null) !== null) {
            $obj->createOrderCount = (float) $v;
        }
        if (($v = $data['create_order_coupon_amount'] ?? null) !== null) {
            $obj->createOrderCouponAmount = (float) $v;
        }
        if (($v = $data['create_order_roi'] ?? null) !== null) {
            $obj->createOrderRoi = (float) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
        }
        if (($v = $data['dy_follow'] ?? null) !== null) {
            $obj->dyFollow = (float) $v;
        }
        if (($v = $data['indirect_order_create_count_7days'] ?? null) !== null) {
            $obj->indirectOrderCreateCount7days = (float) $v;
        }
        if (($v = $data['indirect_order_create_gmv_7days'] ?? null) !== null) {
            $obj->indirectOrderCreateGmv7days = (float) $v;
        }
        if (($v = $data['indirect_order_pay_count_7days'] ?? null) !== null) {
            $obj->indirectOrderPayCount7days = (float) $v;
        }
        if (($v = $data['indirect_order_pay_gmv_7days'] ?? null) !== null) {
            $obj->indirectOrderPayGmv7days = (float) $v;
        }
        if (($v = $data['indirect_order_prepay_count_7days'] ?? null) !== null) {
            $obj->indirectOrderPrepayCount7days = (float) $v;
        }
        if (($v = $data['indirect_order_prepay_gmv_7days'] ?? null) !== null) {
            $obj->indirectOrderPrepayGmv7days = (float) $v;
        }
        if (($v = $data['indirect_order_unfinished_estimate_gmv_7days'] ?? null) !== null) {
            $obj->indirectOrderUnfinishedEstimateGmv7days = (int) $v;
        }
        if (($v = $data['luban_live_click_product_cnt'] ?? null) !== null) {
            $obj->lubanLiveClickProductCnt = (float) $v;
        }
        if (($v = $data['luban_live_enter_cnt'] ?? null) !== null) {
            $obj->lubanLiveEnterCnt = (float) $v;
        }
        if (($v = $data['pay_order_amount'] ?? null) !== null) {
            $obj->payOrderAmount = (float) $v;
        }
        if (($v = $data['pay_order_count'] ?? null) !== null) {
            $obj->payOrderCount = (float) $v;
        }
        if (($v = $data['pay_order_coupon_amount'] ?? null) !== null) {
            $obj->payOrderCouponAmount = (float) $v;
        }
        if (($v = $data['play_25_feed_break'] ?? null) !== null) {
            $obj->play25FeedBreak = (float) $v;
        }
        if (($v = $data['play_50_feed_break'] ?? null) !== null) {
            $obj->play50FeedBreak = (float) $v;
        }
        if (($v = $data['play_75_feed_break'] ?? null) !== null) {
            $obj->play75FeedBreak = (float) $v;
        }
        if (($v = $data['play_duration_3s'] ?? null) !== null) {
            $obj->playDuration3s = (float) $v;
        }
        if (($v = $data['play_over'] ?? null) !== null) {
            $obj->playOver = (float) $v;
        }
        if (($v = $data['play_over_rate'] ?? null) !== null) {
            $obj->playOverRate = (float) $v;
        }
        if (($v = $data['prepay_and_pay_order_roi'] ?? null) !== null) {
            $obj->prepayAndPayOrderRoi = (float) $v;
        }
        if (($v = $data['prepay_order_amount'] ?? null) !== null) {
            $obj->prepayOrderAmount = (float) $v;
        }
        if (($v = $data['prepay_order_count'] ?? null) !== null) {
            $obj->prepayOrderCount = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_cnt'] ?? null) !== null) {
            $obj->qianchuanFirstOrderCnt = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_convert_cost'] ?? null) !== null) {
            $obj->qianchuanFirstOrderConvertCost = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_direct_pay_gmv'] ?? null) !== null) {
            $obj->qianchuanFirstOrderDirectPayGmv = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_direct_pay_order_roi'] ?? null) !== null) {
            $obj->qianchuanFirstOrderDirectPayOrderRoi = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_ltv30'] ?? null) !== null) {
            $obj->qianchuanFirstOrderLtv30 = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_rate'] ?? null) !== null) {
            $obj->qianchuanFirstOrderRate = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_roi30'] ?? null) !== null) {
            $obj->qianchuanFirstOrderRoi30 = (float) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (float) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['stat_datetime'] ?? null) !== null) {
            $obj->statDatetime = (string) $v;
        }
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (float) $v;
        }
        return $obj;
    }
}
