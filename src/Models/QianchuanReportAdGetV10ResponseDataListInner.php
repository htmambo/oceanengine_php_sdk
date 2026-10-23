<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportAdGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $adAllOrderCountSettleRate14d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderCountSettleRate7d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderGmvSettleRate14d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderGmvSettleRate7d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderSettleAmount14d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderSettleAmount7d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderSettleCost14d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderSettleCost7d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderSettleCount14d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderSettleCount7d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderSettleRoi14d = null;

    /**
     * @var float
     */
    protected ?float $adAllOrderSettleRoi7d = null;

    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var float
     */
    protected ?float $adOrderGmvRefundRate14d = null;

    /**
     * @var float
     */
    protected ?float $adOrderGmvRefundRate7d = null;

    /**
     * @var float
     */
    protected ?float $adOrderRefundRate14d = null;

    /**
     * @var float
     */
    protected ?float $adOrderRefundRate7d = null;

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
    protected ?float $allOrderRefundAmount14d = null;

    /**
     * @var float
     */
    protected ?float $allOrderRefundAmount7d = null;

    /**
     * @var float
     */
    protected ?float $allOrderRefundCount14d = null;

    /**
     * @var float
     */
    protected ?float $allOrderRefundCount7d = null;

    /**
     * @var float
     */
    protected ?float $attributionConvertCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionConvertCost = null;

    /**
     * @var float
     */
    protected ?float $attributionConvertRate = null;

    /**
     * @var float
     */
    protected ?float $attributionDeepConvertCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionDeepConvertCost = null;

    /**
     * @var float
     */
    protected ?float $attributionDeepConvertRate = null;

    /**
     * @var float
     */
    protected ?float $clickCnt = null;

    /**
     * @var float
     */
    protected ?float $convertCnt = null;

    /**
     * @var float
     */
    protected ?float $convertCost = null;

    /**
     * @var float
     */
    protected ?float $convertRate = null;

    /**
     * @var float
     */
    protected ?float $cpcPlatform = null;

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
    protected ?float $deepConvertCnt = null;

    /**
     * @var float
     */
    protected ?float $deepConvertCost = null;

    /**
     * @var float
     */
    protected ?float $deepConvertRate = null;

    /**
     * @var float
     */
    protected ?float $dyComment = null;

    /**
     * @var float
     */
    protected ?float $dyFollow = null;

    /**
     * @var float
     */
    protected ?float $dyLike = null;

    /**
     * @var float
     */
    protected ?float $dyShare = null;

    /**
     * @var float
     */
    protected ?float $ecpConvertCnt = null;

    /**
     * @var float
     */
    protected ?float $ecpConvertRate = null;

    /**
     * @var float
     */
    protected ?float $ecpCpaPlatform = null;

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
     * @var float
     */
    protected ?float $indirectOrderUnfinishedEstimateGmv7days = null;

    /**
     * @var float
     */
    protected ?float $liveFansClubJoinCnt = null;

    /**
     * @var float
     */
    protected ?float $livePayOrderCostPerOrder = null;

    /**
     * @var float
     */
    protected ?float $liveWatchOneMinuteCount = null;

    /**
     * @var float
     */
    protected ?float $lubanLiveClickProductCnt = null;

    /**
     * @var float
     */
    protected ?float $lubanLiveCommentCnt = null;

    /**
     * @var float
     */
    protected ?float $lubanLiveEnterCnt = null;

    /**
     * @var float
     */
    protected ?float $lubanLiveGiftAmount = null;

    /**
     * @var float
     */
    protected ?float $lubanLiveGiftCnt = null;

    /**
     * @var float
     */
    protected ?float $lubanLiveShareCnt = null;

    /**
     * @var float
     */
    protected ?float $lubanLiveSlidecartClickCnt = null;

    /**
     * @var float
     */
    protected ?float $payOrderAmount = null;

    /**
     * @var float
     */
    protected ?float $payOrderCostPerOrder = null;

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
     * @var int
     */
    protected ?int $qianchuanAuthorFirstOrderCnt = null;

    /**
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderConvertCost = null;

    /**
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderDirectPayGmv = null;

    /**
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderDirectPayOrderRoi = null;

    /**
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderLtv30 = null;

    /**
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderRate = null;

    /**
     * @var float
     */
    protected ?float $qianchuanAuthorFirstOrderRoi30 = null;

    /**
     * @var int
     */
    protected ?int $qianchuanBrandFirstOrderCnt = null;

    /**
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderConvertCost = null;

    /**
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderDirectPayGmv = null;

    /**
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderDirectPayOrderRoi = null;

    /**
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderLtv30 = null;

    /**
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderRate = null;

    /**
     * @var float
     */
    protected ?float $qianchuanBrandFirstOrderRoi30 = null;

    /**
     * @var int
     */
    protected ?int $qianchuanFirstOrderCnt = null;

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
     * @var float
     */
    protected ?float $unfinishedEstimateOrderGmv = null;

    /**
     * @return float
     */
    public function getAdAllOrderCountSettleRate14d(): ?float
    {
        return $this->adAllOrderCountSettleRate14d;
    }

    /**
     * @param float $adAllOrderCountSettleRate14d
     * @return self
     */
    public function setAdAllOrderCountSettleRate14d(?float $adAllOrderCountSettleRate14d): self
    {
        $this->adAllOrderCountSettleRate14d = $adAllOrderCountSettleRate14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderCountSettleRate7d(): ?float
    {
        return $this->adAllOrderCountSettleRate7d;
    }

    /**
     * @param float $adAllOrderCountSettleRate7d
     * @return self
     */
    public function setAdAllOrderCountSettleRate7d(?float $adAllOrderCountSettleRate7d): self
    {
        $this->adAllOrderCountSettleRate7d = $adAllOrderCountSettleRate7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderGmvSettleRate14d(): ?float
    {
        return $this->adAllOrderGmvSettleRate14d;
    }

    /**
     * @param float $adAllOrderGmvSettleRate14d
     * @return self
     */
    public function setAdAllOrderGmvSettleRate14d(?float $adAllOrderGmvSettleRate14d): self
    {
        $this->adAllOrderGmvSettleRate14d = $adAllOrderGmvSettleRate14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderGmvSettleRate7d(): ?float
    {
        return $this->adAllOrderGmvSettleRate7d;
    }

    /**
     * @param float $adAllOrderGmvSettleRate7d
     * @return self
     */
    public function setAdAllOrderGmvSettleRate7d(?float $adAllOrderGmvSettleRate7d): self
    {
        $this->adAllOrderGmvSettleRate7d = $adAllOrderGmvSettleRate7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderSettleAmount14d(): ?float
    {
        return $this->adAllOrderSettleAmount14d;
    }

    /**
     * @param float $adAllOrderSettleAmount14d
     * @return self
     */
    public function setAdAllOrderSettleAmount14d(?float $adAllOrderSettleAmount14d): self
    {
        $this->adAllOrderSettleAmount14d = $adAllOrderSettleAmount14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderSettleAmount7d(): ?float
    {
        return $this->adAllOrderSettleAmount7d;
    }

    /**
     * @param float $adAllOrderSettleAmount7d
     * @return self
     */
    public function setAdAllOrderSettleAmount7d(?float $adAllOrderSettleAmount7d): self
    {
        $this->adAllOrderSettleAmount7d = $adAllOrderSettleAmount7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderSettleCost14d(): ?float
    {
        return $this->adAllOrderSettleCost14d;
    }

    /**
     * @param float $adAllOrderSettleCost14d
     * @return self
     */
    public function setAdAllOrderSettleCost14d(?float $adAllOrderSettleCost14d): self
    {
        $this->adAllOrderSettleCost14d = $adAllOrderSettleCost14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderSettleCost7d(): ?float
    {
        return $this->adAllOrderSettleCost7d;
    }

    /**
     * @param float $adAllOrderSettleCost7d
     * @return self
     */
    public function setAdAllOrderSettleCost7d(?float $adAllOrderSettleCost7d): self
    {
        $this->adAllOrderSettleCost7d = $adAllOrderSettleCost7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderSettleCount14d(): ?float
    {
        return $this->adAllOrderSettleCount14d;
    }

    /**
     * @param float $adAllOrderSettleCount14d
     * @return self
     */
    public function setAdAllOrderSettleCount14d(?float $adAllOrderSettleCount14d): self
    {
        $this->adAllOrderSettleCount14d = $adAllOrderSettleCount14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderSettleCount7d(): ?float
    {
        return $this->adAllOrderSettleCount7d;
    }

    /**
     * @param float $adAllOrderSettleCount7d
     * @return self
     */
    public function setAdAllOrderSettleCount7d(?float $adAllOrderSettleCount7d): self
    {
        $this->adAllOrderSettleCount7d = $adAllOrderSettleCount7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderSettleRoi14d(): ?float
    {
        return $this->adAllOrderSettleRoi14d;
    }

    /**
     * @param float $adAllOrderSettleRoi14d
     * @return self
     */
    public function setAdAllOrderSettleRoi14d(?float $adAllOrderSettleRoi14d): self
    {
        $this->adAllOrderSettleRoi14d = $adAllOrderSettleRoi14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdAllOrderSettleRoi7d(): ?float
    {
        return $this->adAllOrderSettleRoi7d;
    }

    /**
     * @param float $adAllOrderSettleRoi7d
     * @return self
     */
    public function setAdAllOrderSettleRoi7d(?float $adAllOrderSettleRoi7d): self
    {
        $this->adAllOrderSettleRoi7d = $adAllOrderSettleRoi7d;
        return $this;
    }

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
     * @return float
     */
    public function getAdOrderGmvRefundRate14d(): ?float
    {
        return $this->adOrderGmvRefundRate14d;
    }

    /**
     * @param float $adOrderGmvRefundRate14d
     * @return self
     */
    public function setAdOrderGmvRefundRate14d(?float $adOrderGmvRefundRate14d): self
    {
        $this->adOrderGmvRefundRate14d = $adOrderGmvRefundRate14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdOrderGmvRefundRate7d(): ?float
    {
        return $this->adOrderGmvRefundRate7d;
    }

    /**
     * @param float $adOrderGmvRefundRate7d
     * @return self
     */
    public function setAdOrderGmvRefundRate7d(?float $adOrderGmvRefundRate7d): self
    {
        $this->adOrderGmvRefundRate7d = $adOrderGmvRefundRate7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdOrderRefundRate14d(): ?float
    {
        return $this->adOrderRefundRate14d;
    }

    /**
     * @param float $adOrderRefundRate14d
     * @return self
     */
    public function setAdOrderRefundRate14d(?float $adOrderRefundRate14d): self
    {
        $this->adOrderRefundRate14d = $adOrderRefundRate14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdOrderRefundRate7d(): ?float
    {
        return $this->adOrderRefundRate7d;
    }

    /**
     * @param float $adOrderRefundRate7d
     * @return self
     */
    public function setAdOrderRefundRate7d(?float $adOrderRefundRate7d): self
    {
        $this->adOrderRefundRate7d = $adOrderRefundRate7d;
        return $this;
    }

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
    public function getAllOrderRefundAmount14d(): ?float
    {
        return $this->allOrderRefundAmount14d;
    }

    /**
     * @param float $allOrderRefundAmount14d
     * @return self
     */
    public function setAllOrderRefundAmount14d(?float $allOrderRefundAmount14d): self
    {
        $this->allOrderRefundAmount14d = $allOrderRefundAmount14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAllOrderRefundAmount7d(): ?float
    {
        return $this->allOrderRefundAmount7d;
    }

    /**
     * @param float $allOrderRefundAmount7d
     * @return self
     */
    public function setAllOrderRefundAmount7d(?float $allOrderRefundAmount7d): self
    {
        $this->allOrderRefundAmount7d = $allOrderRefundAmount7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAllOrderRefundCount14d(): ?float
    {
        return $this->allOrderRefundCount14d;
    }

    /**
     * @param float $allOrderRefundCount14d
     * @return self
     */
    public function setAllOrderRefundCount14d(?float $allOrderRefundCount14d): self
    {
        $this->allOrderRefundCount14d = $allOrderRefundCount14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAllOrderRefundCount7d(): ?float
    {
        return $this->allOrderRefundCount7d;
    }

    /**
     * @param float $allOrderRefundCount7d
     * @return self
     */
    public function setAllOrderRefundCount7d(?float $allOrderRefundCount7d): self
    {
        $this->allOrderRefundCount7d = $allOrderRefundCount7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionConvertCnt(): ?float
    {
        return $this->attributionConvertCnt;
    }

    /**
     * @param float $attributionConvertCnt
     * @return self
     */
    public function setAttributionConvertCnt(?float $attributionConvertCnt): self
    {
        $this->attributionConvertCnt = $attributionConvertCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionConvertCost(): ?float
    {
        return $this->attributionConvertCost;
    }

    /**
     * @param float $attributionConvertCost
     * @return self
     */
    public function setAttributionConvertCost(?float $attributionConvertCost): self
    {
        $this->attributionConvertCost = $attributionConvertCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionConvertRate(): ?float
    {
        return $this->attributionConvertRate;
    }

    /**
     * @param float $attributionConvertRate
     * @return self
     */
    public function setAttributionConvertRate(?float $attributionConvertRate): self
    {
        $this->attributionConvertRate = $attributionConvertRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionDeepConvertCnt(): ?float
    {
        return $this->attributionDeepConvertCnt;
    }

    /**
     * @param float $attributionDeepConvertCnt
     * @return self
     */
    public function setAttributionDeepConvertCnt(?float $attributionDeepConvertCnt): self
    {
        $this->attributionDeepConvertCnt = $attributionDeepConvertCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionDeepConvertCost(): ?float
    {
        return $this->attributionDeepConvertCost;
    }

    /**
     * @param float $attributionDeepConvertCost
     * @return self
     */
    public function setAttributionDeepConvertCost(?float $attributionDeepConvertCost): self
    {
        $this->attributionDeepConvertCost = $attributionDeepConvertCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionDeepConvertRate(): ?float
    {
        return $this->attributionDeepConvertRate;
    }

    /**
     * @param float $attributionDeepConvertRate
     * @return self
     */
    public function setAttributionDeepConvertRate(?float $attributionDeepConvertRate): self
    {
        $this->attributionDeepConvertRate = $attributionDeepConvertRate;
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
    public function getConvertCnt(): ?float
    {
        return $this->convertCnt;
    }

    /**
     * @param float $convertCnt
     * @return self
     */
    public function setConvertCnt(?float $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getConvertCost(): ?float
    {
        return $this->convertCost;
    }

    /**
     * @param float $convertCost
     * @return self
     */
    public function setConvertCost(?float $convertCost): self
    {
        $this->convertCost = $convertCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getConvertRate(): ?float
    {
        return $this->convertRate;
    }

    /**
     * @param float $convertRate
     * @return self
     */
    public function setConvertRate(?float $convertRate): self
    {
        $this->convertRate = $convertRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpcPlatform(): ?float
    {
        return $this->cpcPlatform;
    }

    /**
     * @param float $cpcPlatform
     * @return self
     */
    public function setCpcPlatform(?float $cpcPlatform): self
    {
        $this->cpcPlatform = $cpcPlatform;
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
    public function getDeepConvertCnt(): ?float
    {
        return $this->deepConvertCnt;
    }

    /**
     * @param float $deepConvertCnt
     * @return self
     */
    public function setDeepConvertCnt(?float $deepConvertCnt): self
    {
        $this->deepConvertCnt = $deepConvertCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeepConvertCost(): ?float
    {
        return $this->deepConvertCost;
    }

    /**
     * @param float $deepConvertCost
     * @return self
     */
    public function setDeepConvertCost(?float $deepConvertCost): self
    {
        $this->deepConvertCost = $deepConvertCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeepConvertRate(): ?float
    {
        return $this->deepConvertRate;
    }

    /**
     * @param float $deepConvertRate
     * @return self
     */
    public function setDeepConvertRate(?float $deepConvertRate): self
    {
        $this->deepConvertRate = $deepConvertRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getDyComment(): ?float
    {
        return $this->dyComment;
    }

    /**
     * @param float $dyComment
     * @return self
     */
    public function setDyComment(?float $dyComment): self
    {
        $this->dyComment = $dyComment;
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
    public function getDyLike(): ?float
    {
        return $this->dyLike;
    }

    /**
     * @param float $dyLike
     * @return self
     */
    public function setDyLike(?float $dyLike): self
    {
        $this->dyLike = $dyLike;
        return $this;
    }

    /**
     * @return float
     */
    public function getDyShare(): ?float
    {
        return $this->dyShare;
    }

    /**
     * @param float $dyShare
     * @return self
     */
    public function setDyShare(?float $dyShare): self
    {
        $this->dyShare = $dyShare;
        return $this;
    }

    /**
     * @return float
     */
    public function getEcpConvertCnt(): ?float
    {
        return $this->ecpConvertCnt;
    }

    /**
     * @param float $ecpConvertCnt
     * @return self
     */
    public function setEcpConvertCnt(?float $ecpConvertCnt): self
    {
        $this->ecpConvertCnt = $ecpConvertCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getEcpConvertRate(): ?float
    {
        return $this->ecpConvertRate;
    }

    /**
     * @param float $ecpConvertRate
     * @return self
     */
    public function setEcpConvertRate(?float $ecpConvertRate): self
    {
        $this->ecpConvertRate = $ecpConvertRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getEcpCpaPlatform(): ?float
    {
        return $this->ecpCpaPlatform;
    }

    /**
     * @param float $ecpCpaPlatform
     * @return self
     */
    public function setEcpCpaPlatform(?float $ecpCpaPlatform): self
    {
        $this->ecpCpaPlatform = $ecpCpaPlatform;
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
     * @return float
     */
    public function getIndirectOrderUnfinishedEstimateGmv7days(): ?float
    {
        return $this->indirectOrderUnfinishedEstimateGmv7days;
    }

    /**
     * @param float $indirectOrderUnfinishedEstimateGmv7days
     * @return self
     */
    public function setIndirectOrderUnfinishedEstimateGmv7days(?float $indirectOrderUnfinishedEstimateGmv7days): self
    {
        $this->indirectOrderUnfinishedEstimateGmv7days = $indirectOrderUnfinishedEstimateGmv7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveFansClubJoinCnt(): ?float
    {
        return $this->liveFansClubJoinCnt;
    }

    /**
     * @param float $liveFansClubJoinCnt
     * @return self
     */
    public function setLiveFansClubJoinCnt(?float $liveFansClubJoinCnt): self
    {
        $this->liveFansClubJoinCnt = $liveFansClubJoinCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getLivePayOrderCostPerOrder(): ?float
    {
        return $this->livePayOrderCostPerOrder;
    }

    /**
     * @param float $livePayOrderCostPerOrder
     * @return self
     */
    public function setLivePayOrderCostPerOrder(?float $livePayOrderCostPerOrder): self
    {
        $this->livePayOrderCostPerOrder = $livePayOrderCostPerOrder;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveWatchOneMinuteCount(): ?float
    {
        return $this->liveWatchOneMinuteCount;
    }

    /**
     * @param float $liveWatchOneMinuteCount
     * @return self
     */
    public function setLiveWatchOneMinuteCount(?float $liveWatchOneMinuteCount): self
    {
        $this->liveWatchOneMinuteCount = $liveWatchOneMinuteCount;
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
    public function getLubanLiveCommentCnt(): ?float
    {
        return $this->lubanLiveCommentCnt;
    }

    /**
     * @param float $lubanLiveCommentCnt
     * @return self
     */
    public function setLubanLiveCommentCnt(?float $lubanLiveCommentCnt): self
    {
        $this->lubanLiveCommentCnt = $lubanLiveCommentCnt;
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
    public function getLubanLiveGiftAmount(): ?float
    {
        return $this->lubanLiveGiftAmount;
    }

    /**
     * @param float $lubanLiveGiftAmount
     * @return self
     */
    public function setLubanLiveGiftAmount(?float $lubanLiveGiftAmount): self
    {
        $this->lubanLiveGiftAmount = $lubanLiveGiftAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanLiveGiftCnt(): ?float
    {
        return $this->lubanLiveGiftCnt;
    }

    /**
     * @param float $lubanLiveGiftCnt
     * @return self
     */
    public function setLubanLiveGiftCnt(?float $lubanLiveGiftCnt): self
    {
        $this->lubanLiveGiftCnt = $lubanLiveGiftCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanLiveShareCnt(): ?float
    {
        return $this->lubanLiveShareCnt;
    }

    /**
     * @param float $lubanLiveShareCnt
     * @return self
     */
    public function setLubanLiveShareCnt(?float $lubanLiveShareCnt): self
    {
        $this->lubanLiveShareCnt = $lubanLiveShareCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanLiveSlidecartClickCnt(): ?float
    {
        return $this->lubanLiveSlidecartClickCnt;
    }

    /**
     * @param float $lubanLiveSlidecartClickCnt
     * @return self
     */
    public function setLubanLiveSlidecartClickCnt(?float $lubanLiveSlidecartClickCnt): self
    {
        $this->lubanLiveSlidecartClickCnt = $lubanLiveSlidecartClickCnt;
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
    public function getPayOrderCostPerOrder(): ?float
    {
        return $this->payOrderCostPerOrder;
    }

    /**
     * @param float $payOrderCostPerOrder
     * @return self
     */
    public function setPayOrderCostPerOrder(?float $payOrderCostPerOrder): self
    {
        $this->payOrderCostPerOrder = $payOrderCostPerOrder;
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
     * @return int
     */
    public function getQianchuanAuthorFirstOrderCnt(): ?int
    {
        return $this->qianchuanAuthorFirstOrderCnt;
    }

    /**
     * @param int $qianchuanAuthorFirstOrderCnt
     * @return self
     */
    public function setQianchuanAuthorFirstOrderCnt(?int $qianchuanAuthorFirstOrderCnt): self
    {
        $this->qianchuanAuthorFirstOrderCnt = $qianchuanAuthorFirstOrderCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanAuthorFirstOrderConvertCost(): ?float
    {
        return $this->qianchuanAuthorFirstOrderConvertCost;
    }

    /**
     * @param float $qianchuanAuthorFirstOrderConvertCost
     * @return self
     */
    public function setQianchuanAuthorFirstOrderConvertCost(?float $qianchuanAuthorFirstOrderConvertCost): self
    {
        $this->qianchuanAuthorFirstOrderConvertCost = $qianchuanAuthorFirstOrderConvertCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanAuthorFirstOrderDirectPayGmv(): ?float
    {
        return $this->qianchuanAuthorFirstOrderDirectPayGmv;
    }

    /**
     * @param float $qianchuanAuthorFirstOrderDirectPayGmv
     * @return self
     */
    public function setQianchuanAuthorFirstOrderDirectPayGmv(?float $qianchuanAuthorFirstOrderDirectPayGmv): self
    {
        $this->qianchuanAuthorFirstOrderDirectPayGmv = $qianchuanAuthorFirstOrderDirectPayGmv;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanAuthorFirstOrderDirectPayOrderRoi(): ?float
    {
        return $this->qianchuanAuthorFirstOrderDirectPayOrderRoi;
    }

    /**
     * @param float $qianchuanAuthorFirstOrderDirectPayOrderRoi
     * @return self
     */
    public function setQianchuanAuthorFirstOrderDirectPayOrderRoi(?float $qianchuanAuthorFirstOrderDirectPayOrderRoi): self
    {
        $this->qianchuanAuthorFirstOrderDirectPayOrderRoi = $qianchuanAuthorFirstOrderDirectPayOrderRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanAuthorFirstOrderLtv30(): ?float
    {
        return $this->qianchuanAuthorFirstOrderLtv30;
    }

    /**
     * @param float $qianchuanAuthorFirstOrderLtv30
     * @return self
     */
    public function setQianchuanAuthorFirstOrderLtv30(?float $qianchuanAuthorFirstOrderLtv30): self
    {
        $this->qianchuanAuthorFirstOrderLtv30 = $qianchuanAuthorFirstOrderLtv30;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanAuthorFirstOrderRate(): ?float
    {
        return $this->qianchuanAuthorFirstOrderRate;
    }

    /**
     * @param float $qianchuanAuthorFirstOrderRate
     * @return self
     */
    public function setQianchuanAuthorFirstOrderRate(?float $qianchuanAuthorFirstOrderRate): self
    {
        $this->qianchuanAuthorFirstOrderRate = $qianchuanAuthorFirstOrderRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanAuthorFirstOrderRoi30(): ?float
    {
        return $this->qianchuanAuthorFirstOrderRoi30;
    }

    /**
     * @param float $qianchuanAuthorFirstOrderRoi30
     * @return self
     */
    public function setQianchuanAuthorFirstOrderRoi30(?float $qianchuanAuthorFirstOrderRoi30): self
    {
        $this->qianchuanAuthorFirstOrderRoi30 = $qianchuanAuthorFirstOrderRoi30;
        return $this;
    }

    /**
     * @return int
     */
    public function getQianchuanBrandFirstOrderCnt(): ?int
    {
        return $this->qianchuanBrandFirstOrderCnt;
    }

    /**
     * @param int $qianchuanBrandFirstOrderCnt
     * @return self
     */
    public function setQianchuanBrandFirstOrderCnt(?int $qianchuanBrandFirstOrderCnt): self
    {
        $this->qianchuanBrandFirstOrderCnt = $qianchuanBrandFirstOrderCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanBrandFirstOrderConvertCost(): ?float
    {
        return $this->qianchuanBrandFirstOrderConvertCost;
    }

    /**
     * @param float $qianchuanBrandFirstOrderConvertCost
     * @return self
     */
    public function setQianchuanBrandFirstOrderConvertCost(?float $qianchuanBrandFirstOrderConvertCost): self
    {
        $this->qianchuanBrandFirstOrderConvertCost = $qianchuanBrandFirstOrderConvertCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanBrandFirstOrderDirectPayGmv(): ?float
    {
        return $this->qianchuanBrandFirstOrderDirectPayGmv;
    }

    /**
     * @param float $qianchuanBrandFirstOrderDirectPayGmv
     * @return self
     */
    public function setQianchuanBrandFirstOrderDirectPayGmv(?float $qianchuanBrandFirstOrderDirectPayGmv): self
    {
        $this->qianchuanBrandFirstOrderDirectPayGmv = $qianchuanBrandFirstOrderDirectPayGmv;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanBrandFirstOrderDirectPayOrderRoi(): ?float
    {
        return $this->qianchuanBrandFirstOrderDirectPayOrderRoi;
    }

    /**
     * @param float $qianchuanBrandFirstOrderDirectPayOrderRoi
     * @return self
     */
    public function setQianchuanBrandFirstOrderDirectPayOrderRoi(?float $qianchuanBrandFirstOrderDirectPayOrderRoi): self
    {
        $this->qianchuanBrandFirstOrderDirectPayOrderRoi = $qianchuanBrandFirstOrderDirectPayOrderRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanBrandFirstOrderLtv30(): ?float
    {
        return $this->qianchuanBrandFirstOrderLtv30;
    }

    /**
     * @param float $qianchuanBrandFirstOrderLtv30
     * @return self
     */
    public function setQianchuanBrandFirstOrderLtv30(?float $qianchuanBrandFirstOrderLtv30): self
    {
        $this->qianchuanBrandFirstOrderLtv30 = $qianchuanBrandFirstOrderLtv30;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanBrandFirstOrderRate(): ?float
    {
        return $this->qianchuanBrandFirstOrderRate;
    }

    /**
     * @param float $qianchuanBrandFirstOrderRate
     * @return self
     */
    public function setQianchuanBrandFirstOrderRate(?float $qianchuanBrandFirstOrderRate): self
    {
        $this->qianchuanBrandFirstOrderRate = $qianchuanBrandFirstOrderRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getQianchuanBrandFirstOrderRoi30(): ?float
    {
        return $this->qianchuanBrandFirstOrderRoi30;
    }

    /**
     * @param float $qianchuanBrandFirstOrderRoi30
     * @return self
     */
    public function setQianchuanBrandFirstOrderRoi30(?float $qianchuanBrandFirstOrderRoi30): self
    {
        $this->qianchuanBrandFirstOrderRoi30 = $qianchuanBrandFirstOrderRoi30;
        return $this;
    }

    /**
     * @return int
     */
    public function getQianchuanFirstOrderCnt(): ?int
    {
        return $this->qianchuanFirstOrderCnt;
    }

    /**
     * @param int $qianchuanFirstOrderCnt
     * @return self
     */
    public function setQianchuanFirstOrderCnt(?int $qianchuanFirstOrderCnt): self
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
     * @return float
     */
    public function getUnfinishedEstimateOrderGmv(): ?float
    {
        return $this->unfinishedEstimateOrderGmv;
    }

    /**
     * @param float $unfinishedEstimateOrderGmv
     * @return self
     */
    public function setUnfinishedEstimateOrderGmv(?float $unfinishedEstimateOrderGmv): self
    {
        $this->unfinishedEstimateOrderGmv = $unfinishedEstimateOrderGmv;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adAllOrderCountSettleRate14d !== null) {
            $result['ad_all_order_count_settle_rate_14d'] = $this->adAllOrderCountSettleRate14d;
        }
        if ($this->adAllOrderCountSettleRate7d !== null) {
            $result['ad_all_order_count_settle_rate_7d'] = $this->adAllOrderCountSettleRate7d;
        }
        if ($this->adAllOrderGmvSettleRate14d !== null) {
            $result['ad_all_order_gmv_settle_rate_14d'] = $this->adAllOrderGmvSettleRate14d;
        }
        if ($this->adAllOrderGmvSettleRate7d !== null) {
            $result['ad_all_order_gmv_settle_rate_7d'] = $this->adAllOrderGmvSettleRate7d;
        }
        if ($this->adAllOrderSettleAmount14d !== null) {
            $result['ad_all_order_settle_amount_14d'] = $this->adAllOrderSettleAmount14d;
        }
        if ($this->adAllOrderSettleAmount7d !== null) {
            $result['ad_all_order_settle_amount_7d'] = $this->adAllOrderSettleAmount7d;
        }
        if ($this->adAllOrderSettleCost14d !== null) {
            $result['ad_all_order_settle_cost_14d'] = $this->adAllOrderSettleCost14d;
        }
        if ($this->adAllOrderSettleCost7d !== null) {
            $result['ad_all_order_settle_cost_7d'] = $this->adAllOrderSettleCost7d;
        }
        if ($this->adAllOrderSettleCount14d !== null) {
            $result['ad_all_order_settle_count_14d'] = $this->adAllOrderSettleCount14d;
        }
        if ($this->adAllOrderSettleCount7d !== null) {
            $result['ad_all_order_settle_count_7d'] = $this->adAllOrderSettleCount7d;
        }
        if ($this->adAllOrderSettleRoi14d !== null) {
            $result['ad_all_order_settle_roi_14d'] = $this->adAllOrderSettleRoi14d;
        }
        if ($this->adAllOrderSettleRoi7d !== null) {
            $result['ad_all_order_settle_roi_7d'] = $this->adAllOrderSettleRoi7d;
        }
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adOrderGmvRefundRate14d !== null) {
            $result['ad_order_gmv_refund_rate_14d'] = $this->adOrderGmvRefundRate14d;
        }
        if ($this->adOrderGmvRefundRate7d !== null) {
            $result['ad_order_gmv_refund_rate_7d'] = $this->adOrderGmvRefundRate7d;
        }
        if ($this->adOrderRefundRate14d !== null) {
            $result['ad_order_refund_rate_14d'] = $this->adOrderRefundRate14d;
        }
        if ($this->adOrderRefundRate7d !== null) {
            $result['ad_order_refund_rate_7d'] = $this->adOrderRefundRate7d;
        }
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
        if ($this->allOrderRefundAmount14d !== null) {
            $result['all_order_refund_amount_14d'] = $this->allOrderRefundAmount14d;
        }
        if ($this->allOrderRefundAmount7d !== null) {
            $result['all_order_refund_amount_7d'] = $this->allOrderRefundAmount7d;
        }
        if ($this->allOrderRefundCount14d !== null) {
            $result['all_order_refund_count_14d'] = $this->allOrderRefundCount14d;
        }
        if ($this->allOrderRefundCount7d !== null) {
            $result['all_order_refund_count_7d'] = $this->allOrderRefundCount7d;
        }
        if ($this->attributionConvertCnt !== null) {
            $result['attribution_convert_cnt'] = $this->attributionConvertCnt;
        }
        if ($this->attributionConvertCost !== null) {
            $result['attribution_convert_cost'] = $this->attributionConvertCost;
        }
        if ($this->attributionConvertRate !== null) {
            $result['attribution_convert_rate'] = $this->attributionConvertRate;
        }
        if ($this->attributionDeepConvertCnt !== null) {
            $result['attribution_deep_convert_cnt'] = $this->attributionDeepConvertCnt;
        }
        if ($this->attributionDeepConvertCost !== null) {
            $result['attribution_deep_convert_cost'] = $this->attributionDeepConvertCost;
        }
        if ($this->attributionDeepConvertRate !== null) {
            $result['attribution_deep_convert_rate'] = $this->attributionDeepConvertRate;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->convertCost !== null) {
            $result['convert_cost'] = $this->convertCost;
        }
        if ($this->convertRate !== null) {
            $result['convert_rate'] = $this->convertRate;
        }
        if ($this->cpcPlatform !== null) {
            $result['cpc_platform'] = $this->cpcPlatform;
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
        if ($this->deepConvertCnt !== null) {
            $result['deep_convert_cnt'] = $this->deepConvertCnt;
        }
        if ($this->deepConvertCost !== null) {
            $result['deep_convert_cost'] = $this->deepConvertCost;
        }
        if ($this->deepConvertRate !== null) {
            $result['deep_convert_rate'] = $this->deepConvertRate;
        }
        if ($this->dyComment !== null) {
            $result['dy_comment'] = $this->dyComment;
        }
        if ($this->dyFollow !== null) {
            $result['dy_follow'] = $this->dyFollow;
        }
        if ($this->dyLike !== null) {
            $result['dy_like'] = $this->dyLike;
        }
        if ($this->dyShare !== null) {
            $result['dy_share'] = $this->dyShare;
        }
        if ($this->ecpConvertCnt !== null) {
            $result['ecp_convert_cnt'] = $this->ecpConvertCnt;
        }
        if ($this->ecpConvertRate !== null) {
            $result['ecp_convert_rate'] = $this->ecpConvertRate;
        }
        if ($this->ecpCpaPlatform !== null) {
            $result['ecp_cpa_platform'] = $this->ecpCpaPlatform;
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
        if ($this->liveFansClubJoinCnt !== null) {
            $result['live_fans_club_join_cnt'] = $this->liveFansClubJoinCnt;
        }
        if ($this->livePayOrderCostPerOrder !== null) {
            $result['live_pay_order_cost_per_order'] = $this->livePayOrderCostPerOrder;
        }
        if ($this->liveWatchOneMinuteCount !== null) {
            $result['live_watch_one_minute_count'] = $this->liveWatchOneMinuteCount;
        }
        if ($this->lubanLiveClickProductCnt !== null) {
            $result['luban_live_click_product_cnt'] = $this->lubanLiveClickProductCnt;
        }
        if ($this->lubanLiveCommentCnt !== null) {
            $result['luban_live_comment_cnt'] = $this->lubanLiveCommentCnt;
        }
        if ($this->lubanLiveEnterCnt !== null) {
            $result['luban_live_enter_cnt'] = $this->lubanLiveEnterCnt;
        }
        if ($this->lubanLiveGiftAmount !== null) {
            $result['luban_live_gift_amount'] = $this->lubanLiveGiftAmount;
        }
        if ($this->lubanLiveGiftCnt !== null) {
            $result['luban_live_gift_cnt'] = $this->lubanLiveGiftCnt;
        }
        if ($this->lubanLiveShareCnt !== null) {
            $result['luban_live_share_cnt'] = $this->lubanLiveShareCnt;
        }
        if ($this->lubanLiveSlidecartClickCnt !== null) {
            $result['luban_live_slidecart_click_cnt'] = $this->lubanLiveSlidecartClickCnt;
        }
        if ($this->payOrderAmount !== null) {
            $result['pay_order_amount'] = $this->payOrderAmount;
        }
        if ($this->payOrderCostPerOrder !== null) {
            $result['pay_order_cost_per_order'] = $this->payOrderCostPerOrder;
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
        if ($this->qianchuanAuthorFirstOrderCnt !== null) {
            $result['qianchuan_author_first_order_cnt'] = $this->qianchuanAuthorFirstOrderCnt;
        }
        if ($this->qianchuanAuthorFirstOrderConvertCost !== null) {
            $result['qianchuan_author_first_order_convert_cost'] = $this->qianchuanAuthorFirstOrderConvertCost;
        }
        if ($this->qianchuanAuthorFirstOrderDirectPayGmv !== null) {
            $result['qianchuan_author_first_order_direct_pay_gmv'] = $this->qianchuanAuthorFirstOrderDirectPayGmv;
        }
        if ($this->qianchuanAuthorFirstOrderDirectPayOrderRoi !== null) {
            $result['qianchuan_author_first_order_direct_pay_order_roi'] = $this->qianchuanAuthorFirstOrderDirectPayOrderRoi;
        }
        if ($this->qianchuanAuthorFirstOrderLtv30 !== null) {
            $result['qianchuan_author_first_order_ltv30'] = $this->qianchuanAuthorFirstOrderLtv30;
        }
        if ($this->qianchuanAuthorFirstOrderRate !== null) {
            $result['qianchuan_author_first_order_rate'] = $this->qianchuanAuthorFirstOrderRate;
        }
        if ($this->qianchuanAuthorFirstOrderRoi30 !== null) {
            $result['qianchuan_author_first_order_roi30'] = $this->qianchuanAuthorFirstOrderRoi30;
        }
        if ($this->qianchuanBrandFirstOrderCnt !== null) {
            $result['qianchuan_brand_first_order_cnt'] = $this->qianchuanBrandFirstOrderCnt;
        }
        if ($this->qianchuanBrandFirstOrderConvertCost !== null) {
            $result['qianchuan_brand_first_order_convert_cost'] = $this->qianchuanBrandFirstOrderConvertCost;
        }
        if ($this->qianchuanBrandFirstOrderDirectPayGmv !== null) {
            $result['qianchuan_brand_first_order_direct_pay_gmv'] = $this->qianchuanBrandFirstOrderDirectPayGmv;
        }
        if ($this->qianchuanBrandFirstOrderDirectPayOrderRoi !== null) {
            $result['qianchuan_brand_first_order_direct_pay_order_roi'] = $this->qianchuanBrandFirstOrderDirectPayOrderRoi;
        }
        if ($this->qianchuanBrandFirstOrderLtv30 !== null) {
            $result['qianchuan_brand_first_order_ltv30'] = $this->qianchuanBrandFirstOrderLtv30;
        }
        if ($this->qianchuanBrandFirstOrderRate !== null) {
            $result['qianchuan_brand_first_order_rate'] = $this->qianchuanBrandFirstOrderRate;
        }
        if ($this->qianchuanBrandFirstOrderRoi30 !== null) {
            $result['qianchuan_brand_first_order_roi30'] = $this->qianchuanBrandFirstOrderRoi30;
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
        if ($this->unfinishedEstimateOrderGmv !== null) {
            $result['unfinished_estimate_order_gmv'] = $this->unfinishedEstimateOrderGmv;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_all_order_count_settle_rate_14d'] ?? null) !== null) {
            $obj->adAllOrderCountSettleRate14d = (float) $v;
        }
        if (($v = $data['ad_all_order_count_settle_rate_7d'] ?? null) !== null) {
            $obj->adAllOrderCountSettleRate7d = (float) $v;
        }
        if (($v = $data['ad_all_order_gmv_settle_rate_14d'] ?? null) !== null) {
            $obj->adAllOrderGmvSettleRate14d = (float) $v;
        }
        if (($v = $data['ad_all_order_gmv_settle_rate_7d'] ?? null) !== null) {
            $obj->adAllOrderGmvSettleRate7d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_amount_14d'] ?? null) !== null) {
            $obj->adAllOrderSettleAmount14d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_amount_7d'] ?? null) !== null) {
            $obj->adAllOrderSettleAmount7d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_cost_14d'] ?? null) !== null) {
            $obj->adAllOrderSettleCost14d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_cost_7d'] ?? null) !== null) {
            $obj->adAllOrderSettleCost7d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_count_14d'] ?? null) !== null) {
            $obj->adAllOrderSettleCount14d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_count_7d'] ?? null) !== null) {
            $obj->adAllOrderSettleCount7d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_roi_14d'] ?? null) !== null) {
            $obj->adAllOrderSettleRoi14d = (float) $v;
        }
        if (($v = $data['ad_all_order_settle_roi_7d'] ?? null) !== null) {
            $obj->adAllOrderSettleRoi7d = (float) $v;
        }
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_order_gmv_refund_rate_14d'] ?? null) !== null) {
            $obj->adOrderGmvRefundRate14d = (float) $v;
        }
        if (($v = $data['ad_order_gmv_refund_rate_7d'] ?? null) !== null) {
            $obj->adOrderGmvRefundRate7d = (float) $v;
        }
        if (($v = $data['ad_order_refund_rate_14d'] ?? null) !== null) {
            $obj->adOrderRefundRate14d = (float) $v;
        }
        if (($v = $data['ad_order_refund_rate_7d'] ?? null) !== null) {
            $obj->adOrderRefundRate7d = (float) $v;
        }
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
        if (($v = $data['all_order_refund_amount_14d'] ?? null) !== null) {
            $obj->allOrderRefundAmount14d = (float) $v;
        }
        if (($v = $data['all_order_refund_amount_7d'] ?? null) !== null) {
            $obj->allOrderRefundAmount7d = (float) $v;
        }
        if (($v = $data['all_order_refund_count_14d'] ?? null) !== null) {
            $obj->allOrderRefundCount14d = (float) $v;
        }
        if (($v = $data['all_order_refund_count_7d'] ?? null) !== null) {
            $obj->allOrderRefundCount7d = (float) $v;
        }
        if (($v = $data['attribution_convert_cnt'] ?? null) !== null) {
            $obj->attributionConvertCnt = (float) $v;
        }
        if (($v = $data['attribution_convert_cost'] ?? null) !== null) {
            $obj->attributionConvertCost = (float) $v;
        }
        if (($v = $data['attribution_convert_rate'] ?? null) !== null) {
            $obj->attributionConvertRate = (float) $v;
        }
        if (($v = $data['attribution_deep_convert_cnt'] ?? null) !== null) {
            $obj->attributionDeepConvertCnt = (float) $v;
        }
        if (($v = $data['attribution_deep_convert_cost'] ?? null) !== null) {
            $obj->attributionDeepConvertCost = (float) $v;
        }
        if (($v = $data['attribution_deep_convert_rate'] ?? null) !== null) {
            $obj->attributionDeepConvertRate = (float) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (float) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (float) $v;
        }
        if (($v = $data['convert_cost'] ?? null) !== null) {
            $obj->convertCost = (float) $v;
        }
        if (($v = $data['convert_rate'] ?? null) !== null) {
            $obj->convertRate = (float) $v;
        }
        if (($v = $data['cpc_platform'] ?? null) !== null) {
            $obj->cpcPlatform = (float) $v;
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
        if (($v = $data['deep_convert_cnt'] ?? null) !== null) {
            $obj->deepConvertCnt = (float) $v;
        }
        if (($v = $data['deep_convert_cost'] ?? null) !== null) {
            $obj->deepConvertCost = (float) $v;
        }
        if (($v = $data['deep_convert_rate'] ?? null) !== null) {
            $obj->deepConvertRate = (float) $v;
        }
        if (($v = $data['dy_comment'] ?? null) !== null) {
            $obj->dyComment = (float) $v;
        }
        if (($v = $data['dy_follow'] ?? null) !== null) {
            $obj->dyFollow = (float) $v;
        }
        if (($v = $data['dy_like'] ?? null) !== null) {
            $obj->dyLike = (float) $v;
        }
        if (($v = $data['dy_share'] ?? null) !== null) {
            $obj->dyShare = (float) $v;
        }
        if (($v = $data['ecp_convert_cnt'] ?? null) !== null) {
            $obj->ecpConvertCnt = (float) $v;
        }
        if (($v = $data['ecp_convert_rate'] ?? null) !== null) {
            $obj->ecpConvertRate = (float) $v;
        }
        if (($v = $data['ecp_cpa_platform'] ?? null) !== null) {
            $obj->ecpCpaPlatform = (float) $v;
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
            $obj->indirectOrderUnfinishedEstimateGmv7days = (float) $v;
        }
        if (($v = $data['live_fans_club_join_cnt'] ?? null) !== null) {
            $obj->liveFansClubJoinCnt = (float) $v;
        }
        if (($v = $data['live_pay_order_cost_per_order'] ?? null) !== null) {
            $obj->livePayOrderCostPerOrder = (float) $v;
        }
        if (($v = $data['live_watch_one_minute_count'] ?? null) !== null) {
            $obj->liveWatchOneMinuteCount = (float) $v;
        }
        if (($v = $data['luban_live_click_product_cnt'] ?? null) !== null) {
            $obj->lubanLiveClickProductCnt = (float) $v;
        }
        if (($v = $data['luban_live_comment_cnt'] ?? null) !== null) {
            $obj->lubanLiveCommentCnt = (float) $v;
        }
        if (($v = $data['luban_live_enter_cnt'] ?? null) !== null) {
            $obj->lubanLiveEnterCnt = (float) $v;
        }
        if (($v = $data['luban_live_gift_amount'] ?? null) !== null) {
            $obj->lubanLiveGiftAmount = (float) $v;
        }
        if (($v = $data['luban_live_gift_cnt'] ?? null) !== null) {
            $obj->lubanLiveGiftCnt = (float) $v;
        }
        if (($v = $data['luban_live_share_cnt'] ?? null) !== null) {
            $obj->lubanLiveShareCnt = (float) $v;
        }
        if (($v = $data['luban_live_slidecart_click_cnt'] ?? null) !== null) {
            $obj->lubanLiveSlidecartClickCnt = (float) $v;
        }
        if (($v = $data['pay_order_amount'] ?? null) !== null) {
            $obj->payOrderAmount = (float) $v;
        }
        if (($v = $data['pay_order_cost_per_order'] ?? null) !== null) {
            $obj->payOrderCostPerOrder = (float) $v;
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
        if (($v = $data['qianchuan_author_first_order_cnt'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderCnt = (int) $v;
        }
        if (($v = $data['qianchuan_author_first_order_convert_cost'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderConvertCost = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_direct_pay_gmv'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderDirectPayGmv = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_direct_pay_order_roi'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderDirectPayOrderRoi = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_ltv30'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderLtv30 = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_rate'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderRate = (float) $v;
        }
        if (($v = $data['qianchuan_author_first_order_roi30'] ?? null) !== null) {
            $obj->qianchuanAuthorFirstOrderRoi30 = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_cnt'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderCnt = (int) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_convert_cost'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderConvertCost = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_direct_pay_gmv'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderDirectPayGmv = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_direct_pay_order_roi'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderDirectPayOrderRoi = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_ltv30'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderLtv30 = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_rate'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderRate = (float) $v;
        }
        if (($v = $data['qianchuan_brand_first_order_roi30'] ?? null) !== null) {
            $obj->qianchuanBrandFirstOrderRoi30 = (float) $v;
        }
        if (($v = $data['qianchuan_first_order_cnt'] ?? null) !== null) {
            $obj->qianchuanFirstOrderCnt = (int) $v;
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
        if (($v = $data['unfinished_estimate_order_gmv'] ?? null) !== null) {
            $obj->unfinishedEstimateOrderGmv = (float) $v;
        }
        return $obj;
    }
}
