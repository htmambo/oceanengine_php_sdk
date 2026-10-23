<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportSearchWordGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var string
     */
    protected ?string $adName = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * @var float
     */
    protected ?float $clickCnt = null;

    /**
     * todo
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
    protected ?float $createOrderRoi = null;

    /**
     * @var float
     */
    protected ?float $ctr = null;

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
     * todo
     * @var float
     */
    protected ?float $ecpCpaPlatform = null;

    /**
     * @var string
     */
    protected ?string $endDate = null;

    /**
     * @var string
     */
    protected ?string $keyWord = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportSearchWordGetV10DataListKeywordMatchType
     */
    protected ?string $keywordMatchType = null;

    /**
     * @var float
     */
    protected ?float $liveFansClubJoinCnt = null;

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
     * @var string
     */
    protected ?string $searchWord = null;

    /**
     * @var float
     */
    protected ?float $showCnt = null;

    /**
     * @var string
     */
    protected ?string $startDate = null;

    /**
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * @var float
     */
    protected ?float $totalPlay = null;

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
     * @return string
     */
    public function getAdName(): ?string
    {
        return $this->adName;
    }

    /**
     * @param string $adName
     * @return self
     */
    public function setAdName(?string $adName): self
    {
        $this->adName = $adName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return self
     */
    public function setCampaignName(?string $campaignName): self
    {
        $this->campaignName = $campaignName;
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
     * todo
     * @return float
     */
    public function getCpmPlatform(): ?float
    {
        return $this->cpmPlatform;
    }

    /**
     * todo
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
     * todo
     * @return float
     */
    public function getEcpCpaPlatform(): ?float
    {
        return $this->ecpCpaPlatform;
    }

    /**
     * todo
     * @param float $ecpCpaPlatform
     * @return self
     */
    public function setEcpCpaPlatform(?float $ecpCpaPlatform): self
    {
        $this->ecpCpaPlatform = $ecpCpaPlatform;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return self
     */
    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeyWord(): ?string
    {
        return $this->keyWord;
    }

    /**
     * @param string $keyWord
     * @return self
     */
    public function setKeyWord(?string $keyWord): self
    {
        $this->keyWord = $keyWord;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportSearchWordGetV10DataListKeywordMatchType
     */
    public function getKeywordMatchType(): ?string
    {
        return $this->keywordMatchType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportSearchWordGetV10DataListKeywordMatchType $keywordMatchType
     * @return self
     */
    public function setKeywordMatchType(?string $keywordMatchType): self
    {
        $this->keywordMatchType = $keywordMatchType;
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
     * @return string
     */
    public function getSearchWord(): ?string
    {
        return $this->searchWord;
    }

    /**
     * @param string $searchWord
     * @return self
     */
    public function setSearchWord(?string $searchWord): self
    {
        $this->searchWord = $searchWord;
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
     * @return string
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return self
     */
    public function setStartDate(?string $startDate): self
    {
        $this->startDate = $startDate;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
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
        if ($this->createOrderRoi !== null) {
            $result['create_order_roi'] = $this->createOrderRoi;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
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
        if ($this->endDate !== null) {
            $result['end_date'] = $this->endDate;
        }
        if ($this->keyWord !== null) {
            $result['key_word'] = $this->keyWord;
        }
        if ($this->keywordMatchType !== null) {
            $result['keyword_match_type'] = $this->keywordMatchType;
        }
        if ($this->liveFansClubJoinCnt !== null) {
            $result['live_fans_club_join_cnt'] = $this->liveFansClubJoinCnt;
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
        if ($this->searchWord !== null) {
            $result['search_word'] = $this->searchWord;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        if ($this->startDate !== null) {
            $result['start_date'] = $this->startDate;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->totalPlay !== null) {
            $result['total_play'] = $this->totalPlay;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
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
        if (($v = $data['create_order_roi'] ?? null) !== null) {
            $obj->createOrderRoi = (float) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
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
        if (($v = $data['end_date'] ?? null) !== null) {
            $obj->endDate = (string) $v;
        }
        if (($v = $data['key_word'] ?? null) !== null) {
            $obj->keyWord = (string) $v;
        }
        if (($v = $data['keyword_match_type'] ?? null) !== null) {
            $obj->keywordMatchType = (string) $v;
        }
        if (($v = $data['live_fans_club_join_cnt'] ?? null) !== null) {
            $obj->liveFansClubJoinCnt = (float) $v;
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
        if (($v = $data['search_word'] ?? null) !== null) {
            $obj->searchWord = (string) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (float) $v;
        }
        if (($v = $data['start_date'] ?? null) !== null) {
            $obj->startDate = (string) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (float) $v;
        }
        return $obj;
    }
}
