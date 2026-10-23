<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportLiveGetV10ResponseData implements \JsonSerializable
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
    protected ?float $adLiveCreateOrderRate = null;

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
    protected ?float $adLivePayOrderGmvAvg = null;

    /**
     * @var float
     */
    protected ?float $adLivePayOrderRate = null;

    /**
     * @var float
     */
    protected ?float $adLivePrepayAndPayOrderGmvRoi = null;

    /**
     * @var int
     */
    protected ?int $clickCnt = null;

    /**
     * @var int
     */
    protected ?int $convertCnt = null;

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
    protected ?float $cpcPlatform = null;

    /**
     * @var float
     */
    protected ?float $cpmPlatform = null;

    /**
     * @var float
     */
    protected ?float $ctr = null;

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
     * @var int
     */
    protected ?int $liveClickCartCountAlias = null;

    /**
     * @var int
     */
    protected ?int $liveClickProductCountAlias = null;

    /**
     * @var int
     */
    protected ?int $liveCreateOrderCountAlias = null;

    /**
     * @var float
     */
    protected ?float $liveCreateOrderRate = null;

    /**
     * @var float
     */
    protected ?float $liveOrderPayCouponAmount = null;

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
     * @var int
     */
    protected ?int $livePayOrderCountAlias = null;

    /**
     * @var float
     */
    protected ?float $livePayOrderGmvAlias = null;

    /**
     * @var float
     */
    protected ?float $livePayOrderGmvAvg = null;

    /**
     * @var float
     */
    protected ?float $livePayOrderGmvRoi = null;

    /**
     * @var float
     */
    protected ?float $livePayOrderRate = null;

    /**
     * @var float
     */
    protected ?float $livePrepayOrderCountAlias = null;

    /**
     * @var float
     */
    protected ?float $livePrepayOrderGmvAlias = null;

    /**
     * @var int
     */
    protected ?int $liveWatchOneMinuteCount = null;

    /**
     * @var int
     */
    protected ?int $lubanLiveOrderCount = null;

    /**
     * @var int
     */
    protected ?int $lubanLivePayOrderCount = null;

    /**
     * @var float
     */
    protected ?float $lubanLivePayOrderGmv = null;

    /**
     * @var float
     */
    protected ?float $lubanLivePayOrderGpm = null;

    /**
     * @var int
     */
    protected ?int $lubanLivePrepayOrderCount = null;

    /**
     * @var float
     */
    protected ?float $lubanLivePrepayOrderGmv = null;

    /**
     * @var float
     */
    protected ?float $qualificationStatCost = null;

    /**
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * @var int
     */
    protected ?int $totalLiveCommentCnt = null;

    /**
     * @var int
     */
    protected ?int $totalLiveFansClubJoinCnt = null;

    /**
     * @var int
     */
    protected ?int $totalLiveFollowCnt = null;

    /**
     * @var float
     */
    protected ?float $totalLiveGiftAmount = null;

    /**
     * @var int
     */
    protected ?int $totalLiveGiftCnt = null;

    /**
     * @var float
     */
    protected ?float $totalLivePayOrderGpm = null;

    /**
     * @var int
     */
    protected ?int $totalLiveShareCnt = null;

    /**
     * @var int
     */
    protected ?int $totalLiveWatchCnt = null;

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
    public function getAdLiveCreateOrderRate(): ?float
    {
        return $this->adLiveCreateOrderRate;
    }

    /**
     * @param float $adLiveCreateOrderRate
     * @return self
     */
    public function setAdLiveCreateOrderRate(?float $adLiveCreateOrderRate): self
    {
        $this->adLiveCreateOrderRate = $adLiveCreateOrderRate;
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
    public function getAdLivePayOrderGmvAvg(): ?float
    {
        return $this->adLivePayOrderGmvAvg;
    }

    /**
     * @param float $adLivePayOrderGmvAvg
     * @return self
     */
    public function setAdLivePayOrderGmvAvg(?float $adLivePayOrderGmvAvg): self
    {
        $this->adLivePayOrderGmvAvg = $adLivePayOrderGmvAvg;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdLivePayOrderRate(): ?float
    {
        return $this->adLivePayOrderRate;
    }

    /**
     * @param float $adLivePayOrderRate
     * @return self
     */
    public function setAdLivePayOrderRate(?float $adLivePayOrderRate): self
    {
        $this->adLivePayOrderRate = $adLivePayOrderRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdLivePrepayAndPayOrderGmvRoi(): ?float
    {
        return $this->adLivePrepayAndPayOrderGmvRoi;
    }

    /**
     * @param float $adLivePrepayAndPayOrderGmvRoi
     * @return self
     */
    public function setAdLivePrepayAndPayOrderGmvRoi(?float $adLivePrepayAndPayOrderGmvRoi): self
    {
        $this->adLivePrepayAndPayOrderGmvRoi = $adLivePrepayAndPayOrderGmvRoi;
        return $this;
    }

    /**
     * @return int
     */
    public function getClickCnt(): ?int
    {
        return $this->clickCnt;
    }

    /**
     * @param int $clickCnt
     * @return self
     */
    public function setClickCnt(?int $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getConvertCnt(): ?int
    {
        return $this->convertCnt;
    }

    /**
     * @param int $convertCnt
     * @return self
     */
    public function setConvertCnt(?int $convertCnt): self
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
     * @return int
     */
    public function getLiveClickCartCountAlias(): ?int
    {
        return $this->liveClickCartCountAlias;
    }

    /**
     * @param int $liveClickCartCountAlias
     * @return self
     */
    public function setLiveClickCartCountAlias(?int $liveClickCartCountAlias): self
    {
        $this->liveClickCartCountAlias = $liveClickCartCountAlias;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveClickProductCountAlias(): ?int
    {
        return $this->liveClickProductCountAlias;
    }

    /**
     * @param int $liveClickProductCountAlias
     * @return self
     */
    public function setLiveClickProductCountAlias(?int $liveClickProductCountAlias): self
    {
        $this->liveClickProductCountAlias = $liveClickProductCountAlias;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveCreateOrderCountAlias(): ?int
    {
        return $this->liveCreateOrderCountAlias;
    }

    /**
     * @param int $liveCreateOrderCountAlias
     * @return self
     */
    public function setLiveCreateOrderCountAlias(?int $liveCreateOrderCountAlias): self
    {
        $this->liveCreateOrderCountAlias = $liveCreateOrderCountAlias;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveCreateOrderRate(): ?float
    {
        return $this->liveCreateOrderRate;
    }

    /**
     * @param float $liveCreateOrderRate
     * @return self
     */
    public function setLiveCreateOrderRate(?float $liveCreateOrderRate): self
    {
        $this->liveCreateOrderRate = $liveCreateOrderRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOrderPayCouponAmount(): ?float
    {
        return $this->liveOrderPayCouponAmount;
    }

    /**
     * @param float $liveOrderPayCouponAmount
     * @return self
     */
    public function setLiveOrderPayCouponAmount(?float $liveOrderPayCouponAmount): self
    {
        $this->liveOrderPayCouponAmount = $liveOrderPayCouponAmount;
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
     * @return int
     */
    public function getLivePayOrderCountAlias(): ?int
    {
        return $this->livePayOrderCountAlias;
    }

    /**
     * @param int $livePayOrderCountAlias
     * @return self
     */
    public function setLivePayOrderCountAlias(?int $livePayOrderCountAlias): self
    {
        $this->livePayOrderCountAlias = $livePayOrderCountAlias;
        return $this;
    }

    /**
     * @return float
     */
    public function getLivePayOrderGmvAlias(): ?float
    {
        return $this->livePayOrderGmvAlias;
    }

    /**
     * @param float $livePayOrderGmvAlias
     * @return self
     */
    public function setLivePayOrderGmvAlias(?float $livePayOrderGmvAlias): self
    {
        $this->livePayOrderGmvAlias = $livePayOrderGmvAlias;
        return $this;
    }

    /**
     * @return float
     */
    public function getLivePayOrderGmvAvg(): ?float
    {
        return $this->livePayOrderGmvAvg;
    }

    /**
     * @param float $livePayOrderGmvAvg
     * @return self
     */
    public function setLivePayOrderGmvAvg(?float $livePayOrderGmvAvg): self
    {
        $this->livePayOrderGmvAvg = $livePayOrderGmvAvg;
        return $this;
    }

    /**
     * @return float
     */
    public function getLivePayOrderGmvRoi(): ?float
    {
        return $this->livePayOrderGmvRoi;
    }

    /**
     * @param float $livePayOrderGmvRoi
     * @return self
     */
    public function setLivePayOrderGmvRoi(?float $livePayOrderGmvRoi): self
    {
        $this->livePayOrderGmvRoi = $livePayOrderGmvRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getLivePayOrderRate(): ?float
    {
        return $this->livePayOrderRate;
    }

    /**
     * @param float $livePayOrderRate
     * @return self
     */
    public function setLivePayOrderRate(?float $livePayOrderRate): self
    {
        $this->livePayOrderRate = $livePayOrderRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getLivePrepayOrderCountAlias(): ?float
    {
        return $this->livePrepayOrderCountAlias;
    }

    /**
     * @param float $livePrepayOrderCountAlias
     * @return self
     */
    public function setLivePrepayOrderCountAlias(?float $livePrepayOrderCountAlias): self
    {
        $this->livePrepayOrderCountAlias = $livePrepayOrderCountAlias;
        return $this;
    }

    /**
     * @return float
     */
    public function getLivePrepayOrderGmvAlias(): ?float
    {
        return $this->livePrepayOrderGmvAlias;
    }

    /**
     * @param float $livePrepayOrderGmvAlias
     * @return self
     */
    public function setLivePrepayOrderGmvAlias(?float $livePrepayOrderGmvAlias): self
    {
        $this->livePrepayOrderGmvAlias = $livePrepayOrderGmvAlias;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveWatchOneMinuteCount(): ?int
    {
        return $this->liveWatchOneMinuteCount;
    }

    /**
     * @param int $liveWatchOneMinuteCount
     * @return self
     */
    public function setLiveWatchOneMinuteCount(?int $liveWatchOneMinuteCount): self
    {
        $this->liveWatchOneMinuteCount = $liveWatchOneMinuteCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLiveOrderCount(): ?int
    {
        return $this->lubanLiveOrderCount;
    }

    /**
     * @param int $lubanLiveOrderCount
     * @return self
     */
    public function setLubanLiveOrderCount(?int $lubanLiveOrderCount): self
    {
        $this->lubanLiveOrderCount = $lubanLiveOrderCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLivePayOrderCount(): ?int
    {
        return $this->lubanLivePayOrderCount;
    }

    /**
     * @param int $lubanLivePayOrderCount
     * @return self
     */
    public function setLubanLivePayOrderCount(?int $lubanLivePayOrderCount): self
    {
        $this->lubanLivePayOrderCount = $lubanLivePayOrderCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanLivePayOrderGmv(): ?float
    {
        return $this->lubanLivePayOrderGmv;
    }

    /**
     * @param float $lubanLivePayOrderGmv
     * @return self
     */
    public function setLubanLivePayOrderGmv(?float $lubanLivePayOrderGmv): self
    {
        $this->lubanLivePayOrderGmv = $lubanLivePayOrderGmv;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanLivePayOrderGpm(): ?float
    {
        return $this->lubanLivePayOrderGpm;
    }

    /**
     * @param float $lubanLivePayOrderGpm
     * @return self
     */
    public function setLubanLivePayOrderGpm(?float $lubanLivePayOrderGpm): self
    {
        $this->lubanLivePayOrderGpm = $lubanLivePayOrderGpm;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLivePrepayOrderCount(): ?int
    {
        return $this->lubanLivePrepayOrderCount;
    }

    /**
     * @param int $lubanLivePrepayOrderCount
     * @return self
     */
    public function setLubanLivePrepayOrderCount(?int $lubanLivePrepayOrderCount): self
    {
        $this->lubanLivePrepayOrderCount = $lubanLivePrepayOrderCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanLivePrepayOrderGmv(): ?float
    {
        return $this->lubanLivePrepayOrderGmv;
    }

    /**
     * @param float $lubanLivePrepayOrderGmv
     * @return self
     */
    public function setLubanLivePrepayOrderGmv(?float $lubanLivePrepayOrderGmv): self
    {
        $this->lubanLivePrepayOrderGmv = $lubanLivePrepayOrderGmv;
        return $this;
    }

    /**
     * @return float
     */
    public function getQualificationStatCost(): ?float
    {
        return $this->qualificationStatCost;
    }

    /**
     * @param float $qualificationStatCost
     * @return self
     */
    public function setQualificationStatCost(?float $qualificationStatCost): self
    {
        $this->qualificationStatCost = $qualificationStatCost;
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
     * @return int
     */
    public function getTotalLiveCommentCnt(): ?int
    {
        return $this->totalLiveCommentCnt;
    }

    /**
     * @param int $totalLiveCommentCnt
     * @return self
     */
    public function setTotalLiveCommentCnt(?int $totalLiveCommentCnt): self
    {
        $this->totalLiveCommentCnt = $totalLiveCommentCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalLiveFansClubJoinCnt(): ?int
    {
        return $this->totalLiveFansClubJoinCnt;
    }

    /**
     * @param int $totalLiveFansClubJoinCnt
     * @return self
     */
    public function setTotalLiveFansClubJoinCnt(?int $totalLiveFansClubJoinCnt): self
    {
        $this->totalLiveFansClubJoinCnt = $totalLiveFansClubJoinCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalLiveFollowCnt(): ?int
    {
        return $this->totalLiveFollowCnt;
    }

    /**
     * @param int $totalLiveFollowCnt
     * @return self
     */
    public function setTotalLiveFollowCnt(?int $totalLiveFollowCnt): self
    {
        $this->totalLiveFollowCnt = $totalLiveFollowCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalLiveGiftAmount(): ?float
    {
        return $this->totalLiveGiftAmount;
    }

    /**
     * @param float $totalLiveGiftAmount
     * @return self
     */
    public function setTotalLiveGiftAmount(?float $totalLiveGiftAmount): self
    {
        $this->totalLiveGiftAmount = $totalLiveGiftAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalLiveGiftCnt(): ?int
    {
        return $this->totalLiveGiftCnt;
    }

    /**
     * @param int $totalLiveGiftCnt
     * @return self
     */
    public function setTotalLiveGiftCnt(?int $totalLiveGiftCnt): self
    {
        $this->totalLiveGiftCnt = $totalLiveGiftCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalLivePayOrderGpm(): ?float
    {
        return $this->totalLivePayOrderGpm;
    }

    /**
     * @param float $totalLivePayOrderGpm
     * @return self
     */
    public function setTotalLivePayOrderGpm(?float $totalLivePayOrderGpm): self
    {
        $this->totalLivePayOrderGpm = $totalLivePayOrderGpm;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalLiveShareCnt(): ?int
    {
        return $this->totalLiveShareCnt;
    }

    /**
     * @param int $totalLiveShareCnt
     * @return self
     */
    public function setTotalLiveShareCnt(?int $totalLiveShareCnt): self
    {
        $this->totalLiveShareCnt = $totalLiveShareCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalLiveWatchCnt(): ?int
    {
        return $this->totalLiveWatchCnt;
    }

    /**
     * @param int $totalLiveWatchCnt
     * @return self
     */
    public function setTotalLiveWatchCnt(?int $totalLiveWatchCnt): self
    {
        $this->totalLiveWatchCnt = $totalLiveWatchCnt;
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
        if ($this->adLiveCreateOrderRate !== null) {
            $result['ad_live_create_order_rate'] = $this->adLiveCreateOrderRate;
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
        if ($this->adLivePayOrderGmvAvg !== null) {
            $result['ad_live_pay_order_gmv_avg'] = $this->adLivePayOrderGmvAvg;
        }
        if ($this->adLivePayOrderRate !== null) {
            $result['ad_live_pay_order_rate'] = $this->adLivePayOrderRate;
        }
        if ($this->adLivePrepayAndPayOrderGmvRoi !== null) {
            $result['ad_live_prepay_and_pay_order_gmv_roi'] = $this->adLivePrepayAndPayOrderGmvRoi;
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
        if ($this->cpcPlatform !== null) {
            $result['cpc_platform'] = $this->cpcPlatform;
        }
        if ($this->cpmPlatform !== null) {
            $result['cpm_platform'] = $this->cpmPlatform;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
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
        if ($this->liveClickCartCountAlias !== null) {
            $result['live_click_cart_count_alias'] = $this->liveClickCartCountAlias;
        }
        if ($this->liveClickProductCountAlias !== null) {
            $result['live_click_product_count_alias'] = $this->liveClickProductCountAlias;
        }
        if ($this->liveCreateOrderCountAlias !== null) {
            $result['live_create_order_count_alias'] = $this->liveCreateOrderCountAlias;
        }
        if ($this->liveCreateOrderRate !== null) {
            $result['live_create_order_rate'] = $this->liveCreateOrderRate;
        }
        if ($this->liveOrderPayCouponAmount !== null) {
            $result['live_order_pay_coupon_amount'] = $this->liveOrderPayCouponAmount;
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
        if ($this->livePayOrderCountAlias !== null) {
            $result['live_pay_order_count_alias'] = $this->livePayOrderCountAlias;
        }
        if ($this->livePayOrderGmvAlias !== null) {
            $result['live_pay_order_gmv_alias'] = $this->livePayOrderGmvAlias;
        }
        if ($this->livePayOrderGmvAvg !== null) {
            $result['live_pay_order_gmv_avg'] = $this->livePayOrderGmvAvg;
        }
        if ($this->livePayOrderGmvRoi !== null) {
            $result['live_pay_order_gmv_roi'] = $this->livePayOrderGmvRoi;
        }
        if ($this->livePayOrderRate !== null) {
            $result['live_pay_order_rate'] = $this->livePayOrderRate;
        }
        if ($this->livePrepayOrderCountAlias !== null) {
            $result['live_prepay_order_count_alias'] = $this->livePrepayOrderCountAlias;
        }
        if ($this->livePrepayOrderGmvAlias !== null) {
            $result['live_prepay_order_gmv_alias'] = $this->livePrepayOrderGmvAlias;
        }
        if ($this->liveWatchOneMinuteCount !== null) {
            $result['live_watch_one_minute_count'] = $this->liveWatchOneMinuteCount;
        }
        if ($this->lubanLiveOrderCount !== null) {
            $result['luban_live_order_count'] = $this->lubanLiveOrderCount;
        }
        if ($this->lubanLivePayOrderCount !== null) {
            $result['luban_live_pay_order_count'] = $this->lubanLivePayOrderCount;
        }
        if ($this->lubanLivePayOrderGmv !== null) {
            $result['luban_live_pay_order_gmv'] = $this->lubanLivePayOrderGmv;
        }
        if ($this->lubanLivePayOrderGpm !== null) {
            $result['luban_live_pay_order_gpm'] = $this->lubanLivePayOrderGpm;
        }
        if ($this->lubanLivePrepayOrderCount !== null) {
            $result['luban_live_prepay_order_count'] = $this->lubanLivePrepayOrderCount;
        }
        if ($this->lubanLivePrepayOrderGmv !== null) {
            $result['luban_live_prepay_order_gmv'] = $this->lubanLivePrepayOrderGmv;
        }
        if ($this->qualificationStatCost !== null) {
            $result['qualification_stat_cost'] = $this->qualificationStatCost;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->totalLiveCommentCnt !== null) {
            $result['total_live_comment_cnt'] = $this->totalLiveCommentCnt;
        }
        if ($this->totalLiveFansClubJoinCnt !== null) {
            $result['total_live_fans_club_join_cnt'] = $this->totalLiveFansClubJoinCnt;
        }
        if ($this->totalLiveFollowCnt !== null) {
            $result['total_live_follow_cnt'] = $this->totalLiveFollowCnt;
        }
        if ($this->totalLiveGiftAmount !== null) {
            $result['total_live_gift_amount'] = $this->totalLiveGiftAmount;
        }
        if ($this->totalLiveGiftCnt !== null) {
            $result['total_live_gift_cnt'] = $this->totalLiveGiftCnt;
        }
        if ($this->totalLivePayOrderGpm !== null) {
            $result['total_live_pay_order_gpm'] = $this->totalLivePayOrderGpm;
        }
        if ($this->totalLiveShareCnt !== null) {
            $result['total_live_share_cnt'] = $this->totalLiveShareCnt;
        }
        if ($this->totalLiveWatchCnt !== null) {
            $result['total_live_watch_cnt'] = $this->totalLiveWatchCnt;
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
        if (($v = $data['ad_live_create_order_rate'] ?? null) !== null) {
            $obj->adLiveCreateOrderRate = (float) $v;
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
        if (($v = $data['ad_live_pay_order_gmv_avg'] ?? null) !== null) {
            $obj->adLivePayOrderGmvAvg = (float) $v;
        }
        if (($v = $data['ad_live_pay_order_rate'] ?? null) !== null) {
            $obj->adLivePayOrderRate = (float) $v;
        }
        if (($v = $data['ad_live_prepay_and_pay_order_gmv_roi'] ?? null) !== null) {
            $obj->adLivePrepayAndPayOrderGmvRoi = (float) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (int) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (int) $v;
        }
        if (($v = $data['convert_rate'] ?? null) !== null) {
            $obj->convertRate = (float) $v;
        }
        if (($v = $data['cpa_platform'] ?? null) !== null) {
            $obj->cpaPlatform = (float) $v;
        }
        if (($v = $data['cpc_platform'] ?? null) !== null) {
            $obj->cpcPlatform = (float) $v;
        }
        if (($v = $data['cpm_platform'] ?? null) !== null) {
            $obj->cpmPlatform = (float) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
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
        if (($v = $data['live_click_cart_count_alias'] ?? null) !== null) {
            $obj->liveClickCartCountAlias = (int) $v;
        }
        if (($v = $data['live_click_product_count_alias'] ?? null) !== null) {
            $obj->liveClickProductCountAlias = (int) $v;
        }
        if (($v = $data['live_create_order_count_alias'] ?? null) !== null) {
            $obj->liveCreateOrderCountAlias = (int) $v;
        }
        if (($v = $data['live_create_order_rate'] ?? null) !== null) {
            $obj->liveCreateOrderRate = (float) $v;
        }
        if (($v = $data['live_order_pay_coupon_amount'] ?? null) !== null) {
            $obj->liveOrderPayCouponAmount = (float) $v;
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
        if (($v = $data['live_pay_order_count_alias'] ?? null) !== null) {
            $obj->livePayOrderCountAlias = (int) $v;
        }
        if (($v = $data['live_pay_order_gmv_alias'] ?? null) !== null) {
            $obj->livePayOrderGmvAlias = (float) $v;
        }
        if (($v = $data['live_pay_order_gmv_avg'] ?? null) !== null) {
            $obj->livePayOrderGmvAvg = (float) $v;
        }
        if (($v = $data['live_pay_order_gmv_roi'] ?? null) !== null) {
            $obj->livePayOrderGmvRoi = (float) $v;
        }
        if (($v = $data['live_pay_order_rate'] ?? null) !== null) {
            $obj->livePayOrderRate = (float) $v;
        }
        if (($v = $data['live_prepay_order_count_alias'] ?? null) !== null) {
            $obj->livePrepayOrderCountAlias = (float) $v;
        }
        if (($v = $data['live_prepay_order_gmv_alias'] ?? null) !== null) {
            $obj->livePrepayOrderGmvAlias = (float) $v;
        }
        if (($v = $data['live_watch_one_minute_count'] ?? null) !== null) {
            $obj->liveWatchOneMinuteCount = (int) $v;
        }
        if (($v = $data['luban_live_order_count'] ?? null) !== null) {
            $obj->lubanLiveOrderCount = (int) $v;
        }
        if (($v = $data['luban_live_pay_order_count'] ?? null) !== null) {
            $obj->lubanLivePayOrderCount = (int) $v;
        }
        if (($v = $data['luban_live_pay_order_gmv'] ?? null) !== null) {
            $obj->lubanLivePayOrderGmv = (float) $v;
        }
        if (($v = $data['luban_live_pay_order_gpm'] ?? null) !== null) {
            $obj->lubanLivePayOrderGpm = (float) $v;
        }
        if (($v = $data['luban_live_prepay_order_count'] ?? null) !== null) {
            $obj->lubanLivePrepayOrderCount = (int) $v;
        }
        if (($v = $data['luban_live_prepay_order_gmv'] ?? null) !== null) {
            $obj->lubanLivePrepayOrderGmv = (float) $v;
        }
        if (($v = $data['qualification_stat_cost'] ?? null) !== null) {
            $obj->qualificationStatCost = (float) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['total_live_comment_cnt'] ?? null) !== null) {
            $obj->totalLiveCommentCnt = (int) $v;
        }
        if (($v = $data['total_live_fans_club_join_cnt'] ?? null) !== null) {
            $obj->totalLiveFansClubJoinCnt = (int) $v;
        }
        if (($v = $data['total_live_follow_cnt'] ?? null) !== null) {
            $obj->totalLiveFollowCnt = (int) $v;
        }
        if (($v = $data['total_live_gift_amount'] ?? null) !== null) {
            $obj->totalLiveGiftAmount = (float) $v;
        }
        if (($v = $data['total_live_gift_cnt'] ?? null) !== null) {
            $obj->totalLiveGiftCnt = (int) $v;
        }
        if (($v = $data['total_live_pay_order_gpm'] ?? null) !== null) {
            $obj->totalLivePayOrderGpm = (float) $v;
        }
        if (($v = $data['total_live_share_cnt'] ?? null) !== null) {
            $obj->totalLiveShareCnt = (int) $v;
        }
        if (($v = $data['total_live_watch_cnt'] ?? null) !== null) {
            $obj->totalLiveWatchCnt = (int) $v;
        }
        return $obj;
    }
}
