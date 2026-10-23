<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeReportOrderGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * 广告计划id
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var float
     */
    protected ?float $averageLiveWatchTime = null;

    /**
     * 点击次数
     * @var int
     */
    protected ?int $clickCnt = null;

    /**
     * 直播间商品点击次数
     * @var int
     */
    protected ?int $clickProduct = null;

    /**
     * 转化数
     * @var int
     */
    protected ?int $convertCnt = null;

    /**
     * 转化成本
     * @var float
     */
    protected ?float $convertCost = null;

    /**
     * 点击率
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * 评论次数
     * @var int
     */
    protected ?int $dyComment = null;

    /**
     * 新增粉丝数
     * @var int
     */
    protected ?int $dyFollow = null;

    /**
     * 主页访问量
     * @var int
     */
    protected ?int $dyHomeVisited = null;

    /**
     * 点赞次数
     * @var int
     */
    protected ?int $dyLike = null;

    /**
     * 分享次数
     * @var int
     */
    protected ?int $dyShare = null;

    /**
     * 转换数，替换convert_cnt
     * @var int
     */
    protected ?int $ecpConvertCnt = null;

    /**
     * 转换成本.替换convert_cost。单位元
     * @var float
     */
    protected ?float $ecpCpaPlatform = null;

    /**
     * 点赞率（视频订单才会返回）
     * @var float
     */
    protected ?float $likeRate = null;

    /**
     * 直播间新加团人次
     * @var int
     */
    protected ?int $liveFansClubJoinCnt = null;

    /**
     * 直播间查看购物车次数
     * @var int
     */
    protected ?int $liveSlidecartClickCnt = null;

    /**
     * 商品点击次数
     * @var int
     */
    protected ?int $lubanLiveClickProductCnt = null;

    /**
     * 直播间评论次数
     * @var int
     */
    protected ?int $lubanLiveCommentCnt = null;

    /**
     * 直播间观看人次
     * @var int
     */
    protected ?int $lubanLiveEnterCnt = null;

    /**
     * 直播间新增粉丝次数
     * @var int
     */
    protected ?int $lubanLiveFollowCnt = null;

    /**
     * 直播间音浪收入
     * @var float
     */
    protected ?float $lubanLiveGiftAmount = null;

    /**
     * 直播间打赏次数
     * @var int
     */
    protected ?int $lubanLiveGiftCnt = null;

    /**
     * 直播间分享次数
     * @var int
     */
    protected ?int $lubanLiveShareCnt = null;

    /**
     * 查看购物车次数
     * @var int
     */
    protected ?int $lubanLiveSlidecartClickCnt = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeReportOrderGetV10DataListMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * 订单Id
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 成交金额
     * @var float
     */
    protected ?float $payOrderAmount = null;

    /**
     * 成交订单数
     * @var int
     */
    protected ?int $payOrderCount = null;

    /**
     * @var float
     */
    protected ?float $playDuration5sRate = null;

    /**
     * 支付roi
     * @var float
     */
    protected ?float $prepayAndPayOrderRoi = null;

    /**
     * 广告预售订单金额
     * @var float
     */
    protected ?float $prepayOrderAmount = null;

    /**
     * 广告预售订单数
     * @var int
     */
    protected ?int $prepayOrderCount = null;

    /**
     * 有效看播数
     * @var int
     */
    protected ?int $qianchuanEffectiveViewConvertCount = null;

    /**
     * 展示次数
     * @var int
     */
    protected ?int $showCnt = null;

    /**
     * 消耗
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * 播放次数
     * @var int
     */
    protected ?int $totalPlay = null;

    /**
     * 广告计划id
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 广告计划id
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
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
    public function getAverageLiveWatchTime(): ?float
    {
        return $this->averageLiveWatchTime;
    }

    /**
     * @param float $averageLiveWatchTime
     * @return self
     */
    public function setAverageLiveWatchTime(?float $averageLiveWatchTime): self
    {
        $this->averageLiveWatchTime = $averageLiveWatchTime;
        return $this;
    }

    /**
     * 点击次数
     * @return int
     */
    public function getClickCnt(): ?int
    {
        return $this->clickCnt;
    }

    /**
     * 点击次数
     * @param int $clickCnt
     * @return self
     */
    public function setClickCnt(?int $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * 直播间商品点击次数
     * @return int
     */
    public function getClickProduct(): ?int
    {
        return $this->clickProduct;
    }

    /**
     * 直播间商品点击次数
     * @param int $clickProduct
     * @return self
     */
    public function setClickProduct(?int $clickProduct): self
    {
        $this->clickProduct = $clickProduct;
        return $this;
    }

    /**
     * 转化数
     * @return int
     */
    public function getConvertCnt(): ?int
    {
        return $this->convertCnt;
    }

    /**
     * 转化数
     * @param int $convertCnt
     * @return self
     */
    public function setConvertCnt(?int $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
        return $this;
    }

    /**
     * 转化成本
     * @return float
     */
    public function getConvertCost(): ?float
    {
        return $this->convertCost;
    }

    /**
     * 转化成本
     * @param float $convertCost
     * @return self
     */
    public function setConvertCost(?float $convertCost): self
    {
        $this->convertCost = $convertCost;
        return $this;
    }

    /**
     * 点击率
     * @return float
     */
    public function getCtr(): ?float
    {
        return $this->ctr;
    }

    /**
     * 点击率
     * @param float $ctr
     * @return self
     */
    public function setCtr(?float $ctr): self
    {
        $this->ctr = $ctr;
        return $this;
    }

    /**
     * 评论次数
     * @return int
     */
    public function getDyComment(): ?int
    {
        return $this->dyComment;
    }

    /**
     * 评论次数
     * @param int $dyComment
     * @return self
     */
    public function setDyComment(?int $dyComment): self
    {
        $this->dyComment = $dyComment;
        return $this;
    }

    /**
     * 新增粉丝数
     * @return int
     */
    public function getDyFollow(): ?int
    {
        return $this->dyFollow;
    }

    /**
     * 新增粉丝数
     * @param int $dyFollow
     * @return self
     */
    public function setDyFollow(?int $dyFollow): self
    {
        $this->dyFollow = $dyFollow;
        return $this;
    }

    /**
     * 主页访问量
     * @return int
     */
    public function getDyHomeVisited(): ?int
    {
        return $this->dyHomeVisited;
    }

    /**
     * 主页访问量
     * @param int $dyHomeVisited
     * @return self
     */
    public function setDyHomeVisited(?int $dyHomeVisited): self
    {
        $this->dyHomeVisited = $dyHomeVisited;
        return $this;
    }

    /**
     * 点赞次数
     * @return int
     */
    public function getDyLike(): ?int
    {
        return $this->dyLike;
    }

    /**
     * 点赞次数
     * @param int $dyLike
     * @return self
     */
    public function setDyLike(?int $dyLike): self
    {
        $this->dyLike = $dyLike;
        return $this;
    }

    /**
     * 分享次数
     * @return int
     */
    public function getDyShare(): ?int
    {
        return $this->dyShare;
    }

    /**
     * 分享次数
     * @param int $dyShare
     * @return self
     */
    public function setDyShare(?int $dyShare): self
    {
        $this->dyShare = $dyShare;
        return $this;
    }

    /**
     * 转换数，替换convert_cnt
     * @return int
     */
    public function getEcpConvertCnt(): ?int
    {
        return $this->ecpConvertCnt;
    }

    /**
     * 转换数，替换convert_cnt
     * @param int $ecpConvertCnt
     * @return self
     */
    public function setEcpConvertCnt(?int $ecpConvertCnt): self
    {
        $this->ecpConvertCnt = $ecpConvertCnt;
        return $this;
    }

    /**
     * 转换成本.替换convert_cost。单位元
     * @return float
     */
    public function getEcpCpaPlatform(): ?float
    {
        return $this->ecpCpaPlatform;
    }

    /**
     * 转换成本.替换convert_cost。单位元
     * @param float $ecpCpaPlatform
     * @return self
     */
    public function setEcpCpaPlatform(?float $ecpCpaPlatform): self
    {
        $this->ecpCpaPlatform = $ecpCpaPlatform;
        return $this;
    }

    /**
     * 点赞率（视频订单才会返回）
     * @return float
     */
    public function getLikeRate(): ?float
    {
        return $this->likeRate;
    }

    /**
     * 点赞率（视频订单才会返回）
     * @param float $likeRate
     * @return self
     */
    public function setLikeRate(?float $likeRate): self
    {
        $this->likeRate = $likeRate;
        return $this;
    }

    /**
     * 直播间新加团人次
     * @return int
     */
    public function getLiveFansClubJoinCnt(): ?int
    {
        return $this->liveFansClubJoinCnt;
    }

    /**
     * 直播间新加团人次
     * @param int $liveFansClubJoinCnt
     * @return self
     */
    public function setLiveFansClubJoinCnt(?int $liveFansClubJoinCnt): self
    {
        $this->liveFansClubJoinCnt = $liveFansClubJoinCnt;
        return $this;
    }

    /**
     * 直播间查看购物车次数
     * @return int
     */
    public function getLiveSlidecartClickCnt(): ?int
    {
        return $this->liveSlidecartClickCnt;
    }

    /**
     * 直播间查看购物车次数
     * @param int $liveSlidecartClickCnt
     * @return self
     */
    public function setLiveSlidecartClickCnt(?int $liveSlidecartClickCnt): self
    {
        $this->liveSlidecartClickCnt = $liveSlidecartClickCnt;
        return $this;
    }

    /**
     * 商品点击次数
     * @return int
     */
    public function getLubanLiveClickProductCnt(): ?int
    {
        return $this->lubanLiveClickProductCnt;
    }

    /**
     * 商品点击次数
     * @param int $lubanLiveClickProductCnt
     * @return self
     */
    public function setLubanLiveClickProductCnt(?int $lubanLiveClickProductCnt): self
    {
        $this->lubanLiveClickProductCnt = $lubanLiveClickProductCnt;
        return $this;
    }

    /**
     * 直播间评论次数
     * @return int
     */
    public function getLubanLiveCommentCnt(): ?int
    {
        return $this->lubanLiveCommentCnt;
    }

    /**
     * 直播间评论次数
     * @param int $lubanLiveCommentCnt
     * @return self
     */
    public function setLubanLiveCommentCnt(?int $lubanLiveCommentCnt): self
    {
        $this->lubanLiveCommentCnt = $lubanLiveCommentCnt;
        return $this;
    }

    /**
     * 直播间观看人次
     * @return int
     */
    public function getLubanLiveEnterCnt(): ?int
    {
        return $this->lubanLiveEnterCnt;
    }

    /**
     * 直播间观看人次
     * @param int $lubanLiveEnterCnt
     * @return self
     */
    public function setLubanLiveEnterCnt(?int $lubanLiveEnterCnt): self
    {
        $this->lubanLiveEnterCnt = $lubanLiveEnterCnt;
        return $this;
    }

    /**
     * 直播间新增粉丝次数
     * @return int
     */
    public function getLubanLiveFollowCnt(): ?int
    {
        return $this->lubanLiveFollowCnt;
    }

    /**
     * 直播间新增粉丝次数
     * @param int $lubanLiveFollowCnt
     * @return self
     */
    public function setLubanLiveFollowCnt(?int $lubanLiveFollowCnt): self
    {
        $this->lubanLiveFollowCnt = $lubanLiveFollowCnt;
        return $this;
    }

    /**
     * 直播间音浪收入
     * @return float
     */
    public function getLubanLiveGiftAmount(): ?float
    {
        return $this->lubanLiveGiftAmount;
    }

    /**
     * 直播间音浪收入
     * @param float $lubanLiveGiftAmount
     * @return self
     */
    public function setLubanLiveGiftAmount(?float $lubanLiveGiftAmount): self
    {
        $this->lubanLiveGiftAmount = $lubanLiveGiftAmount;
        return $this;
    }

    /**
     * 直播间打赏次数
     * @return int
     */
    public function getLubanLiveGiftCnt(): ?int
    {
        return $this->lubanLiveGiftCnt;
    }

    /**
     * 直播间打赏次数
     * @param int $lubanLiveGiftCnt
     * @return self
     */
    public function setLubanLiveGiftCnt(?int $lubanLiveGiftCnt): self
    {
        $this->lubanLiveGiftCnt = $lubanLiveGiftCnt;
        return $this;
    }

    /**
     * 直播间分享次数
     * @return int
     */
    public function getLubanLiveShareCnt(): ?int
    {
        return $this->lubanLiveShareCnt;
    }

    /**
     * 直播间分享次数
     * @param int $lubanLiveShareCnt
     * @return self
     */
    public function setLubanLiveShareCnt(?int $lubanLiveShareCnt): self
    {
        $this->lubanLiveShareCnt = $lubanLiveShareCnt;
        return $this;
    }

    /**
     * 查看购物车次数
     * @return int
     */
    public function getLubanLiveSlidecartClickCnt(): ?int
    {
        return $this->lubanLiveSlidecartClickCnt;
    }

    /**
     * 查看购物车次数
     * @param int $lubanLiveSlidecartClickCnt
     * @return self
     */
    public function setLubanLiveSlidecartClickCnt(?int $lubanLiveSlidecartClickCnt): self
    {
        $this->lubanLiveSlidecartClickCnt = $lubanLiveSlidecartClickCnt;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeReportOrderGetV10DataListMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeReportOrderGetV10DataListMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 订单Id
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 订单Id
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 成交金额
     * @return float
     */
    public function getPayOrderAmount(): ?float
    {
        return $this->payOrderAmount;
    }

    /**
     * 成交金额
     * @param float $payOrderAmount
     * @return self
     */
    public function setPayOrderAmount(?float $payOrderAmount): self
    {
        $this->payOrderAmount = $payOrderAmount;
        return $this;
    }

    /**
     * 成交订单数
     * @return int
     */
    public function getPayOrderCount(): ?int
    {
        return $this->payOrderCount;
    }

    /**
     * 成交订单数
     * @param int $payOrderCount
     * @return self
     */
    public function setPayOrderCount(?int $payOrderCount): self
    {
        $this->payOrderCount = $payOrderCount;
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
     * 支付roi
     * @return float
     */
    public function getPrepayAndPayOrderRoi(): ?float
    {
        return $this->prepayAndPayOrderRoi;
    }

    /**
     * 支付roi
     * @param float $prepayAndPayOrderRoi
     * @return self
     */
    public function setPrepayAndPayOrderRoi(?float $prepayAndPayOrderRoi): self
    {
        $this->prepayAndPayOrderRoi = $prepayAndPayOrderRoi;
        return $this;
    }

    /**
     * 广告预售订单金额
     * @return float
     */
    public function getPrepayOrderAmount(): ?float
    {
        return $this->prepayOrderAmount;
    }

    /**
     * 广告预售订单金额
     * @param float $prepayOrderAmount
     * @return self
     */
    public function setPrepayOrderAmount(?float $prepayOrderAmount): self
    {
        $this->prepayOrderAmount = $prepayOrderAmount;
        return $this;
    }

    /**
     * 广告预售订单数
     * @return int
     */
    public function getPrepayOrderCount(): ?int
    {
        return $this->prepayOrderCount;
    }

    /**
     * 广告预售订单数
     * @param int $prepayOrderCount
     * @return self
     */
    public function setPrepayOrderCount(?int $prepayOrderCount): self
    {
        $this->prepayOrderCount = $prepayOrderCount;
        return $this;
    }

    /**
     * 有效看播数
     * @return int
     */
    public function getQianchuanEffectiveViewConvertCount(): ?int
    {
        return $this->qianchuanEffectiveViewConvertCount;
    }

    /**
     * 有效看播数
     * @param int $qianchuanEffectiveViewConvertCount
     * @return self
     */
    public function setQianchuanEffectiveViewConvertCount(?int $qianchuanEffectiveViewConvertCount): self
    {
        $this->qianchuanEffectiveViewConvertCount = $qianchuanEffectiveViewConvertCount;
        return $this;
    }

    /**
     * 展示次数
     * @return int
     */
    public function getShowCnt(): ?int
    {
        return $this->showCnt;
    }

    /**
     * 展示次数
     * @param int $showCnt
     * @return self
     */
    public function setShowCnt(?int $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * 消耗
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * 消耗
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * 播放次数
     * @return int
     */
    public function getTotalPlay(): ?int
    {
        return $this->totalPlay;
    }

    /**
     * 播放次数
     * @param int $totalPlay
     * @return self
     */
    public function setTotalPlay(?int $totalPlay): self
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
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->averageLiveWatchTime !== null) {
            $result['average_live_watch_time'] = $this->averageLiveWatchTime;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->clickProduct !== null) {
            $result['click_product'] = $this->clickProduct;
        }
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->convertCost !== null) {
            $result['convert_cost'] = $this->convertCost;
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
        if ($this->dyHomeVisited !== null) {
            $result['dy_home_visited'] = $this->dyHomeVisited;
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
        if ($this->ecpCpaPlatform !== null) {
            $result['ecp_cpa_platform'] = $this->ecpCpaPlatform;
        }
        if ($this->likeRate !== null) {
            $result['like_rate'] = $this->likeRate;
        }
        if ($this->liveFansClubJoinCnt !== null) {
            $result['live_fans_club_join_cnt'] = $this->liveFansClubJoinCnt;
        }
        if ($this->liveSlidecartClickCnt !== null) {
            $result['live_slidecart_click_cnt'] = $this->liveSlidecartClickCnt;
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
        if ($this->lubanLiveFollowCnt !== null) {
            $result['luban_live_follow_cnt'] = $this->lubanLiveFollowCnt;
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
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->payOrderAmount !== null) {
            $result['pay_order_amount'] = $this->payOrderAmount;
        }
        if ($this->payOrderCount !== null) {
            $result['pay_order_count'] = $this->payOrderCount;
        }
        if ($this->playDuration5sRate !== null) {
            $result['play_duration_5s_rate'] = $this->playDuration5sRate;
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
        if ($this->qianchuanEffectiveViewConvertCount !== null) {
            $result['qianchuan_effective_view_convert_count'] = $this->qianchuanEffectiveViewConvertCount;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['average_live_watch_time'] ?? null) !== null) {
            $obj->averageLiveWatchTime = (float) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (int) $v;
        }
        if (($v = $data['click_product'] ?? null) !== null) {
            $obj->clickProduct = (int) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (int) $v;
        }
        if (($v = $data['convert_cost'] ?? null) !== null) {
            $obj->convertCost = (float) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
        }
        if (($v = $data['dy_comment'] ?? null) !== null) {
            $obj->dyComment = (int) $v;
        }
        if (($v = $data['dy_follow'] ?? null) !== null) {
            $obj->dyFollow = (int) $v;
        }
        if (($v = $data['dy_home_visited'] ?? null) !== null) {
            $obj->dyHomeVisited = (int) $v;
        }
        if (($v = $data['dy_like'] ?? null) !== null) {
            $obj->dyLike = (int) $v;
        }
        if (($v = $data['dy_share'] ?? null) !== null) {
            $obj->dyShare = (int) $v;
        }
        if (($v = $data['ecp_convert_cnt'] ?? null) !== null) {
            $obj->ecpConvertCnt = (int) $v;
        }
        if (($v = $data['ecp_cpa_platform'] ?? null) !== null) {
            $obj->ecpCpaPlatform = (float) $v;
        }
        if (($v = $data['like_rate'] ?? null) !== null) {
            $obj->likeRate = (float) $v;
        }
        if (($v = $data['live_fans_club_join_cnt'] ?? null) !== null) {
            $obj->liveFansClubJoinCnt = (int) $v;
        }
        if (($v = $data['live_slidecart_click_cnt'] ?? null) !== null) {
            $obj->liveSlidecartClickCnt = (int) $v;
        }
        if (($v = $data['luban_live_click_product_cnt'] ?? null) !== null) {
            $obj->lubanLiveClickProductCnt = (int) $v;
        }
        if (($v = $data['luban_live_comment_cnt'] ?? null) !== null) {
            $obj->lubanLiveCommentCnt = (int) $v;
        }
        if (($v = $data['luban_live_enter_cnt'] ?? null) !== null) {
            $obj->lubanLiveEnterCnt = (int) $v;
        }
        if (($v = $data['luban_live_follow_cnt'] ?? null) !== null) {
            $obj->lubanLiveFollowCnt = (int) $v;
        }
        if (($v = $data['luban_live_gift_amount'] ?? null) !== null) {
            $obj->lubanLiveGiftAmount = (float) $v;
        }
        if (($v = $data['luban_live_gift_cnt'] ?? null) !== null) {
            $obj->lubanLiveGiftCnt = (int) $v;
        }
        if (($v = $data['luban_live_share_cnt'] ?? null) !== null) {
            $obj->lubanLiveShareCnt = (int) $v;
        }
        if (($v = $data['luban_live_slidecart_click_cnt'] ?? null) !== null) {
            $obj->lubanLiveSlidecartClickCnt = (int) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['pay_order_amount'] ?? null) !== null) {
            $obj->payOrderAmount = (float) $v;
        }
        if (($v = $data['pay_order_count'] ?? null) !== null) {
            $obj->payOrderCount = (int) $v;
        }
        if (($v = $data['play_duration_5s_rate'] ?? null) !== null) {
            $obj->playDuration5sRate = (float) $v;
        }
        if (($v = $data['prepay_and_pay_order_roi'] ?? null) !== null) {
            $obj->prepayAndPayOrderRoi = (float) $v;
        }
        if (($v = $data['prepay_order_amount'] ?? null) !== null) {
            $obj->prepayOrderAmount = (float) $v;
        }
        if (($v = $data['prepay_order_count'] ?? null) !== null) {
            $obj->prepayOrderCount = (int) $v;
        }
        if (($v = $data['qianchuan_effective_view_convert_count'] ?? null) !== null) {
            $obj->qianchuanEffectiveViewConvertCount = (int) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (int) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (int) $v;
        }
        return $obj;
    }
}
