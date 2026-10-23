<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportMaterialGetV10ResponseDataListInnerFields implements \JsonSerializable
{
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
    protected ?float $adLiveOrderSettleCost14d = null;

    /**
     * @var float
     */
    protected ?float $adLiveOrderSettleCost7d = null;

    /**
     * @var float
     */
    protected ?float $adLiveOrderSettleRoi14d = null;

    /**
     * @var float
     */
    protected ?float $adLiveOrderSettleRoi7d = null;

    /**
     * @var float
     */
    protected ?float $averagePlayTimePerPlay = null;

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
    protected ?float $convertRate = null;

    /**
     * @var float
     */
    protected ?float $cpaPlatform = null;

    /**
     * @var float
     */
    protected ?float $cpm = null;

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
    protected ?float $dislikeCnt = null;

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
    protected ?float $indirectOrderUnfinishedEstimateGmv7days = null;

    /**
     * @var float
     */
    protected ?float $liveFansClubJoinCnt = null;

    /**
     * @var float
     */
    protected ?float $liveOrderRefundAmount14d = null;

    /**
     * @var float
     */
    protected ?float $liveOrderRefundAmount7d = null;

    /**
     * @var int
     */
    protected ?int $liveOrderRefundCount14d = null;

    /**
     * @var int
     */
    protected ?int $liveOrderRefundCount7d = null;

    /**
     * @var float
     */
    protected ?float $liveOrderSettleAmount14d = null;

    /**
     * @var float
     */
    protected ?float $liveOrderSettleAmount7d = null;

    /**
     * @var int
     */
    protected ?int $liveOrderSettleCount14d = null;

    /**
     * @var int
     */
    protected ?int $liveOrderSettleCount7d = null;

    /**
     * @var float
     */
    protected ?float $liveOrderSettleCountRate14d = null;

    /**
     * @var float
     */
    protected ?float $liveOrderSettleCountRate7d = null;

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
    protected ?float $materialArpu = null;

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
    protected ?float $playDuration10sRate = null;

    /**
     * @var float
     */
    protected ?float $playDuration2sRate = null;

    /**
     * @var float
     */
    protected ?float $playDuration3sRate = null;

    /**
     * @var float
     */
    protected ?float $playDuration5sRate = null;

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
    protected ?float $reportCnt = null;

    /**
     * @var float
     */
    protected ?float $showCnt = null;

    /**
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * @var float
     */
    protected ?float $totalPlay = null;

    /**
     * @var float
     */
    protected ?float $unfinishedEstimateOrderGmv = null;

    /**
     * @var float
     */
    protected ?float $validPlay = null;

    /**
     * @var float
     */
    protected ?float $validPlayRate = null;

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
    public function getAdLiveOrderSettleCost14d(): ?float
    {
        return $this->adLiveOrderSettleCost14d;
    }

    /**
     * @param float $adLiveOrderSettleCost14d
     * @return self
     */
    public function setAdLiveOrderSettleCost14d(?float $adLiveOrderSettleCost14d): self
    {
        $this->adLiveOrderSettleCost14d = $adLiveOrderSettleCost14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdLiveOrderSettleCost7d(): ?float
    {
        return $this->adLiveOrderSettleCost7d;
    }

    /**
     * @param float $adLiveOrderSettleCost7d
     * @return self
     */
    public function setAdLiveOrderSettleCost7d(?float $adLiveOrderSettleCost7d): self
    {
        $this->adLiveOrderSettleCost7d = $adLiveOrderSettleCost7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdLiveOrderSettleRoi14d(): ?float
    {
        return $this->adLiveOrderSettleRoi14d;
    }

    /**
     * @param float $adLiveOrderSettleRoi14d
     * @return self
     */
    public function setAdLiveOrderSettleRoi14d(?float $adLiveOrderSettleRoi14d): self
    {
        $this->adLiveOrderSettleRoi14d = $adLiveOrderSettleRoi14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdLiveOrderSettleRoi7d(): ?float
    {
        return $this->adLiveOrderSettleRoi7d;
    }

    /**
     * @param float $adLiveOrderSettleRoi7d
     * @return self
     */
    public function setAdLiveOrderSettleRoi7d(?float $adLiveOrderSettleRoi7d): self
    {
        $this->adLiveOrderSettleRoi7d = $adLiveOrderSettleRoi7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getAveragePlayTimePerPlay(): ?float
    {
        return $this->averagePlayTimePerPlay;
    }

    /**
     * @param float $averagePlayTimePerPlay
     * @return self
     */
    public function setAveragePlayTimePerPlay(?float $averagePlayTimePerPlay): self
    {
        $this->averagePlayTimePerPlay = $averagePlayTimePerPlay;
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
    public function getCpaPlatform(): ?float
    {
        return $this->cpaPlatform;
    }

    /**
     * @param float $cpaPlatform
     * @return self
     */
    public function setCpaPlatform(?float $cpaPlatform): self
    {
        $this->cpaPlatform = $cpaPlatform;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpm(): ?float
    {
        return $this->cpm;
    }

    /**
     * @param float $cpm
     * @return self
     */
    public function setCpm(?float $cpm): self
    {
        $this->cpm = $cpm;
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
    public function getDislikeCnt(): ?float
    {
        return $this->dislikeCnt;
    }

    /**
     * @param float $dislikeCnt
     * @return self
     */
    public function setDislikeCnt(?float $dislikeCnt): self
    {
        $this->dislikeCnt = $dislikeCnt;
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
    public function getLiveOrderRefundAmount14d(): ?float
    {
        return $this->liveOrderRefundAmount14d;
    }

    /**
     * @param float $liveOrderRefundAmount14d
     * @return self
     */
    public function setLiveOrderRefundAmount14d(?float $liveOrderRefundAmount14d): self
    {
        $this->liveOrderRefundAmount14d = $liveOrderRefundAmount14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOrderRefundAmount7d(): ?float
    {
        return $this->liveOrderRefundAmount7d;
    }

    /**
     * @param float $liveOrderRefundAmount7d
     * @return self
     */
    public function setLiveOrderRefundAmount7d(?float $liveOrderRefundAmount7d): self
    {
        $this->liveOrderRefundAmount7d = $liveOrderRefundAmount7d;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveOrderRefundCount14d(): ?int
    {
        return $this->liveOrderRefundCount14d;
    }

    /**
     * @param int $liveOrderRefundCount14d
     * @return self
     */
    public function setLiveOrderRefundCount14d(?int $liveOrderRefundCount14d): self
    {
        $this->liveOrderRefundCount14d = $liveOrderRefundCount14d;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveOrderRefundCount7d(): ?int
    {
        return $this->liveOrderRefundCount7d;
    }

    /**
     * @param int $liveOrderRefundCount7d
     * @return self
     */
    public function setLiveOrderRefundCount7d(?int $liveOrderRefundCount7d): self
    {
        $this->liveOrderRefundCount7d = $liveOrderRefundCount7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOrderSettleAmount14d(): ?float
    {
        return $this->liveOrderSettleAmount14d;
    }

    /**
     * @param float $liveOrderSettleAmount14d
     * @return self
     */
    public function setLiveOrderSettleAmount14d(?float $liveOrderSettleAmount14d): self
    {
        $this->liveOrderSettleAmount14d = $liveOrderSettleAmount14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOrderSettleAmount7d(): ?float
    {
        return $this->liveOrderSettleAmount7d;
    }

    /**
     * @param float $liveOrderSettleAmount7d
     * @return self
     */
    public function setLiveOrderSettleAmount7d(?float $liveOrderSettleAmount7d): self
    {
        $this->liveOrderSettleAmount7d = $liveOrderSettleAmount7d;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveOrderSettleCount14d(): ?int
    {
        return $this->liveOrderSettleCount14d;
    }

    /**
     * @param int $liveOrderSettleCount14d
     * @return self
     */
    public function setLiveOrderSettleCount14d(?int $liveOrderSettleCount14d): self
    {
        $this->liveOrderSettleCount14d = $liveOrderSettleCount14d;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveOrderSettleCount7d(): ?int
    {
        return $this->liveOrderSettleCount7d;
    }

    /**
     * @param int $liveOrderSettleCount7d
     * @return self
     */
    public function setLiveOrderSettleCount7d(?int $liveOrderSettleCount7d): self
    {
        $this->liveOrderSettleCount7d = $liveOrderSettleCount7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOrderSettleCountRate14d(): ?float
    {
        return $this->liveOrderSettleCountRate14d;
    }

    /**
     * @param float $liveOrderSettleCountRate14d
     * @return self
     */
    public function setLiveOrderSettleCountRate14d(?float $liveOrderSettleCountRate14d): self
    {
        $this->liveOrderSettleCountRate14d = $liveOrderSettleCountRate14d;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOrderSettleCountRate7d(): ?float
    {
        return $this->liveOrderSettleCountRate7d;
    }

    /**
     * @param float $liveOrderSettleCountRate7d
     * @return self
     */
    public function setLiveOrderSettleCountRate7d(?float $liveOrderSettleCountRate7d): self
    {
        $this->liveOrderSettleCountRate7d = $liveOrderSettleCountRate7d;
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
    public function getMaterialArpu(): ?float
    {
        return $this->materialArpu;
    }

    /**
     * @param float $materialArpu
     * @return self
     */
    public function setMaterialArpu(?float $materialArpu): self
    {
        $this->materialArpu = $materialArpu;
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
    public function getPlayDuration10sRate(): ?float
    {
        return $this->playDuration10sRate;
    }

    /**
     * @param float $playDuration10sRate
     * @return self
     */
    public function setPlayDuration10sRate(?float $playDuration10sRate): self
    {
        $this->playDuration10sRate = $playDuration10sRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlayDuration2sRate(): ?float
    {
        return $this->playDuration2sRate;
    }

    /**
     * @param float $playDuration2sRate
     * @return self
     */
    public function setPlayDuration2sRate(?float $playDuration2sRate): self
    {
        $this->playDuration2sRate = $playDuration2sRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlayDuration3sRate(): ?float
    {
        return $this->playDuration3sRate;
    }

    /**
     * @param float $playDuration3sRate
     * @return self
     */
    public function setPlayDuration3sRate(?float $playDuration3sRate): self
    {
        $this->playDuration3sRate = $playDuration3sRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlayDuration5sRate(): ?float
    {
        return $this->playDuration5sRate;
    }

    /**
     * @param float $playDuration5sRate
     * @return self
     */
    public function setPlayDuration5sRate(?float $playDuration5sRate): self
    {
        $this->playDuration5sRate = $playDuration5sRate;
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
    public function getReportCnt(): ?float
    {
        return $this->reportCnt;
    }

    /**
     * @param float $reportCnt
     * @return self
     */
    public function setReportCnt(?float $reportCnt): self
    {
        $this->reportCnt = $reportCnt;
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
     * @return float
     */
    public function getValidPlay(): ?float
    {
        return $this->validPlay;
    }

    /**
     * @param float $validPlay
     * @return self
     */
    public function setValidPlay(?float $validPlay): self
    {
        $this->validPlay = $validPlay;
        return $this;
    }

    /**
     * @return float
     */
    public function getValidPlayRate(): ?float
    {
        return $this->validPlayRate;
    }

    /**
     * @param float $validPlayRate
     * @return self
     */
    public function setValidPlayRate(?float $validPlayRate): self
    {
        $this->validPlayRate = $validPlayRate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adAllOrderGmvSettleRate14d !== null) {
            $result['ad_all_order_gmv_settle_rate_14d'] = $this->adAllOrderGmvSettleRate14d;
        }
        if ($this->adAllOrderGmvSettleRate7d !== null) {
            $result['ad_all_order_gmv_settle_rate_7d'] = $this->adAllOrderGmvSettleRate7d;
        }
        if ($this->adLiveOrderSettleCost14d !== null) {
            $result['ad_live_order_settle_cost_14d'] = $this->adLiveOrderSettleCost14d;
        }
        if ($this->adLiveOrderSettleCost7d !== null) {
            $result['ad_live_order_settle_cost_7d'] = $this->adLiveOrderSettleCost7d;
        }
        if ($this->adLiveOrderSettleRoi14d !== null) {
            $result['ad_live_order_settle_roi_14d'] = $this->adLiveOrderSettleRoi14d;
        }
        if ($this->adLiveOrderSettleRoi7d !== null) {
            $result['ad_live_order_settle_roi_7d'] = $this->adLiveOrderSettleRoi7d;
        }
        if ($this->averagePlayTimePerPlay !== null) {
            $result['average_play_time_per_play'] = $this->averagePlayTimePerPlay;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->convertRate !== null) {
            $result['convert_rate'] = $this->convertRate;
        }
        if ($this->cpaPlatform !== null) {
            $result['cpa_platform'] = $this->cpaPlatform;
        }
        if ($this->cpm !== null) {
            $result['cpm'] = $this->cpm;
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
        if ($this->dislikeCnt !== null) {
            $result['dislike_cnt'] = $this->dislikeCnt;
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
        if ($this->indirectOrderUnfinishedEstimateGmv7days !== null) {
            $result['indirect_order_unfinished_estimate_gmv_7days'] = $this->indirectOrderUnfinishedEstimateGmv7days;
        }
        if ($this->liveFansClubJoinCnt !== null) {
            $result['live_fans_club_join_cnt'] = $this->liveFansClubJoinCnt;
        }
        if ($this->liveOrderRefundAmount14d !== null) {
            $result['live_order_refund_amount_14d'] = $this->liveOrderRefundAmount14d;
        }
        if ($this->liveOrderRefundAmount7d !== null) {
            $result['live_order_refund_amount_7d'] = $this->liveOrderRefundAmount7d;
        }
        if ($this->liveOrderRefundCount14d !== null) {
            $result['live_order_refund_count_14d'] = $this->liveOrderRefundCount14d;
        }
        if ($this->liveOrderRefundCount7d !== null) {
            $result['live_order_refund_count_7d'] = $this->liveOrderRefundCount7d;
        }
        if ($this->liveOrderSettleAmount14d !== null) {
            $result['live_order_settle_amount_14d'] = $this->liveOrderSettleAmount14d;
        }
        if ($this->liveOrderSettleAmount7d !== null) {
            $result['live_order_settle_amount_7d'] = $this->liveOrderSettleAmount7d;
        }
        if ($this->liveOrderSettleCount14d !== null) {
            $result['live_order_settle_count_14d'] = $this->liveOrderSettleCount14d;
        }
        if ($this->liveOrderSettleCount7d !== null) {
            $result['live_order_settle_count_7d'] = $this->liveOrderSettleCount7d;
        }
        if ($this->liveOrderSettleCountRate14d !== null) {
            $result['live_order_settle_count_rate_14d'] = $this->liveOrderSettleCountRate14d;
        }
        if ($this->liveOrderSettleCountRate7d !== null) {
            $result['live_order_settle_count_rate_7d'] = $this->liveOrderSettleCountRate7d;
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
        if ($this->materialArpu !== null) {
            $result['material_arpu'] = $this->materialArpu;
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
        if ($this->playDuration10sRate !== null) {
            $result['play_duration_10s_rate'] = $this->playDuration10sRate;
        }
        if ($this->playDuration2sRate !== null) {
            $result['play_duration_2s_rate'] = $this->playDuration2sRate;
        }
        if ($this->playDuration3sRate !== null) {
            $result['play_duration_3s_rate'] = $this->playDuration3sRate;
        }
        if ($this->playDuration5sRate !== null) {
            $result['play_duration_5s_rate'] = $this->playDuration5sRate;
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
        if ($this->reportCnt !== null) {
            $result['report_cnt'] = $this->reportCnt;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->totalPlay !== null) {
            $result['total_play'] = $this->totalPlay;
        }
        if ($this->unfinishedEstimateOrderGmv !== null) {
            $result['unfinished_estimate_order_gmv'] = $this->unfinishedEstimateOrderGmv;
        }
        if ($this->validPlay !== null) {
            $result['valid_play'] = $this->validPlay;
        }
        if ($this->validPlayRate !== null) {
            $result['valid_play_rate'] = $this->validPlayRate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_all_order_gmv_settle_rate_14d'] ?? null) !== null) {
            $obj->adAllOrderGmvSettleRate14d = (float) $v;
        }
        if (($v = $data['ad_all_order_gmv_settle_rate_7d'] ?? null) !== null) {
            $obj->adAllOrderGmvSettleRate7d = (float) $v;
        }
        if (($v = $data['ad_live_order_settle_cost_14d'] ?? null) !== null) {
            $obj->adLiveOrderSettleCost14d = (float) $v;
        }
        if (($v = $data['ad_live_order_settle_cost_7d'] ?? null) !== null) {
            $obj->adLiveOrderSettleCost7d = (float) $v;
        }
        if (($v = $data['ad_live_order_settle_roi_14d'] ?? null) !== null) {
            $obj->adLiveOrderSettleRoi14d = (float) $v;
        }
        if (($v = $data['ad_live_order_settle_roi_7d'] ?? null) !== null) {
            $obj->adLiveOrderSettleRoi7d = (float) $v;
        }
        if (($v = $data['average_play_time_per_play'] ?? null) !== null) {
            $obj->averagePlayTimePerPlay = (float) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (float) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (float) $v;
        }
        if (($v = $data['convert_rate'] ?? null) !== null) {
            $obj->convertRate = (float) $v;
        }
        if (($v = $data['cpa_platform'] ?? null) !== null) {
            $obj->cpaPlatform = (float) $v;
        }
        if (($v = $data['cpm'] ?? null) !== null) {
            $obj->cpm = (float) $v;
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
        if (($v = $data['dislike_cnt'] ?? null) !== null) {
            $obj->dislikeCnt = (float) $v;
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
        if (($v = $data['indirect_order_unfinished_estimate_gmv_7days'] ?? null) !== null) {
            $obj->indirectOrderUnfinishedEstimateGmv7days = (float) $v;
        }
        if (($v = $data['live_fans_club_join_cnt'] ?? null) !== null) {
            $obj->liveFansClubJoinCnt = (float) $v;
        }
        if (($v = $data['live_order_refund_amount_14d'] ?? null) !== null) {
            $obj->liveOrderRefundAmount14d = (float) $v;
        }
        if (($v = $data['live_order_refund_amount_7d'] ?? null) !== null) {
            $obj->liveOrderRefundAmount7d = (float) $v;
        }
        if (($v = $data['live_order_refund_count_14d'] ?? null) !== null) {
            $obj->liveOrderRefundCount14d = (int) $v;
        }
        if (($v = $data['live_order_refund_count_7d'] ?? null) !== null) {
            $obj->liveOrderRefundCount7d = (int) $v;
        }
        if (($v = $data['live_order_settle_amount_14d'] ?? null) !== null) {
            $obj->liveOrderSettleAmount14d = (float) $v;
        }
        if (($v = $data['live_order_settle_amount_7d'] ?? null) !== null) {
            $obj->liveOrderSettleAmount7d = (float) $v;
        }
        if (($v = $data['live_order_settle_count_14d'] ?? null) !== null) {
            $obj->liveOrderSettleCount14d = (int) $v;
        }
        if (($v = $data['live_order_settle_count_7d'] ?? null) !== null) {
            $obj->liveOrderSettleCount7d = (int) $v;
        }
        if (($v = $data['live_order_settle_count_rate_14d'] ?? null) !== null) {
            $obj->liveOrderSettleCountRate14d = (float) $v;
        }
        if (($v = $data['live_order_settle_count_rate_7d'] ?? null) !== null) {
            $obj->liveOrderSettleCountRate7d = (float) $v;
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
        if (($v = $data['material_arpu'] ?? null) !== null) {
            $obj->materialArpu = (float) $v;
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
        if (($v = $data['play_duration_10s_rate'] ?? null) !== null) {
            $obj->playDuration10sRate = (float) $v;
        }
        if (($v = $data['play_duration_2s_rate'] ?? null) !== null) {
            $obj->playDuration2sRate = (float) $v;
        }
        if (($v = $data['play_duration_3s_rate'] ?? null) !== null) {
            $obj->playDuration3sRate = (float) $v;
        }
        if (($v = $data['play_duration_5s_rate'] ?? null) !== null) {
            $obj->playDuration5sRate = (float) $v;
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
        if (($v = $data['report_cnt'] ?? null) !== null) {
            $obj->reportCnt = (float) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (float) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (float) $v;
        }
        if (($v = $data['unfinished_estimate_order_gmv'] ?? null) !== null) {
            $obj->unfinishedEstimateOrderGmv = (float) $v;
        }
        if (($v = $data['valid_play'] ?? null) !== null) {
            $obj->validPlay = (float) $v;
        }
        if (($v = $data['valid_play_rate'] ?? null) !== null) {
            $obj->validPlayRate = (float) $v;
        }
        return $obj;
    }
}
