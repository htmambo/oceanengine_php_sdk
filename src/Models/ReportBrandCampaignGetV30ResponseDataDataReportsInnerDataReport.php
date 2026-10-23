<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBrandCampaignGetV30ResponseDataDataReportsInnerDataReport implements \JsonSerializable
{
    /**
     * 活动banner图点击数
     * @var string
     */
    protected ?string $activityBannerClickCount = null;

    /**
     * 附加创意卡片点击数
     * @var string
     */
    protected ?string $attachCreativeClickCnt = null;

    /**
     * 附加创意卡片展示数
     * @var string
     */
    protected ?string $attachCreativeShowCnt = null;

    /**
     * 平均单次播放时长
     * @var string
     */
    protected ?string $averagePlayTimePerPlay = null;

    /**
     * 支付订单平均每单交易额
     * @var string
     */
    protected ?string $brandAllOrderPayAverageAmount7days = null;

    /**
     * 支付订单数目7天
     * @var string
     */
    protected ?string $brandAllOrderPayCount7days = null;

    /**
     * 支付订单gvm7天
     * @var string
     */
    protected ?string $brandAllOrderPayGmv7days = null;

    /**
     * 支付订单数7天
     * @var string
     */
    protected ?string $brandIndirectOrderPayCount7days = null;

    /**
     * 支付订单gvm7天
     * @var string
     */
    protected ?string $brandIndirectOrderPayGmv7days = null;

    /**
     * 3秒卡片展现数
     * @var string
     */
    protected ?string $cardShow = null;

    /**
     * 附加创意电话按钮点击
     * @var string
     */
    protected ?string $clickCallCnt = null;

    /**
     * 主页内电话拨打点击量
     * @var string
     */
    protected ?string $clickCallDy = null;

    /**
     * 点击数
     * @var string
     */
    protected ?string $clickCnt = null;

    /**
     * 附件创意在线咨询点击
     * @var string
     */
    protected ?string $clickCounsel = null;

    /**
     * 主页下载链接点击量
     * @var string
     */
    protected ?string $clickDownload = null;

    /**
     * 推广页访问量
     * @var string
     */
    protected ?string $clickLandingPage = null;

    /**
     * 主页商品橱窗访问量
     * @var string
     */
    protected ?string $clickShopwindow = null;

    /**
     * 主页内落地页访问量
     * @var string
     */
    protected ?string $clickWebsite = null;

    /**
     * 转化成本
     * @var string
     */
    protected ?string $conversionCost = null;

    /**
     * 转化率
     * @var string
     */
    protected ?string $conversionRate = null;

    /**
     * 转化数
     * @var string
     */
    protected ?string $convertCnt = null;

    /**
     * 附件创意卡券领取
     * @var string
     */
    protected ?string $couponAddition = null;

    /**
     * 平均点击单价
     * @var string
     */
    protected ?string $cpcPlatform = null;

    /**
     * 平均千次展现费用
     * @var string
     */
    protected ?string $cpmPlatform = null;

    /**
     * 点击率
     * @var string
     */
    protected ?string $ctr = null;

    /**
     * 深度转化数
     * @var string
     */
    protected ?string $deepConvertCnt = null;

    /**
     * 深度转化成本
     * @var string
     */
    protected ?string $deepConvertCost = null;

    /**
     * 深度转化率
     * @var string
     */
    protected ?string $deepConvertRate = null;

    /**
     * 评论量
     * @var string
     */
    protected ?string $dyComment = null;

    /**
     * 粉丝量
     * @var string
     */
    protected ?string $dyFollow = null;

    /**
     * 主页访问量
     * @var string
     */
    protected ?string $dyHomeVisited = null;

    /**
     * 点赞数
     * @var string
     */
    protected ?string $dyLike = null;

    /**
     * 分享量
     * @var string
     */
    protected ?string $dyShare = null;

    /**
     * 粉丝视频评论数
     * @var string
     */
    protected ?string $fansDyCommentCount = null;

    /**
     * 粉丝视频点赞数
     * @var string
     */
    protected ?string $fansDyLikeCount = null;

    /**
     * 粉丝主页浏览数
     * @var string
     */
    protected ?string $fansHomeVisitedCount = null;

    /**
     * 粉丝直播评论次数
     * @var string
     */
    protected ?string $fansLubanLiveCommentCount = null;

    /**
     * 粉丝直播观看次数
     * @var string
     */
    protected ?string $fansLubanLiveEnterCount = null;

    /**
     * 粉丝直播间礼物总金额
     * @var string
     */
    protected ?string $fansLubanLiveGiftAmount = null;

    /**
     * 粉丝直播间订单金额
     * @var string
     */
    protected ?string $fansLubanLivePayOrderStatCost = null;

    /**
     * 粉丝直播间购物车点击量
     * @var string
     */
    protected ?string $fansLubanLiveSlidecartClickCount = null;

    /**
     * 粉丝视频播放数
     * @var string
     */
    protected ?string $fansVideoPlayCount = null;

    /**
     * 粉丝视频转发数
     * @var string
     */
    protected ?string $fansVideoShareCount = null;

    /**
     * 附件创意表单按钮点击
     * @var string
     */
    protected ?string $formClickButton = null;

    /**
     * 挑战赛查看数
     * @var string
     */
    protected ?string $iesChallengeClick = null;

    /**
     * 音乐查看数
     * @var string
     */
    protected ?string $iesMusicClick = null;

    /**
     * 直播预约人数
     * @var string
     */
    protected ?string $liveAppointCount = null;

    /**
     * 组件点击成本
     * @var string
     */
    protected ?string $liveComponentClickCost = null;

    /**
     * 组件点击数
     * @var string
     */
    protected ?string $liveComponentClickCount = null;

    /**
     * 组件点击率
     * @var string
     */
    protected ?string $liveComponentClickRate = null;

    /**
     * 直播间加入粉丝团
     * @var string
     */
    protected ?string $liveFansClubJoinCnt = null;

    /**
     * 直播间团购点击量
     * @var string
     */
    protected ?string $liveGrouponProductClickCount = null;

    /**
     * 直播间客单价
     * @var string
     */
    protected ?string $livePayOrderCostPerOrder = null;

    /**
     * 直播间客单价（长效影响-15天）
     * @var string
     */
    protected ?string $livePayOrderCostPerOrderByAuthor15days = null;

    /**
     * 直播间客单价（长效影响-30天）
     * @var string
     */
    protected ?string $livePayOrderCostPerOrderByAuthor30days = null;

    /**
     * 直播间客单价（长效影响-3天）
     * @var string
     */
    protected ?string $livePayOrderCostPerOrderByAuthor3days = null;

    /**
     * 直播间客单价（长效影响-7天）
     * @var string
     */
    protected ?string $livePayOrderCostPerOrderByAuthor7days = null;

    /**
     * 直播间超过一分钟观看数
     * @var string
     */
    protected ?string $liveWatchOneMinuteCount = null;

    /**
     * POI点击数
     * @var string
     */
    protected ?string $locationClick = null;

    /**
     * 直播间点击商品数
     * @var string
     */
    protected ?string $lubanLiveClickProductCnt = null;

    /**
     * 直播间评论数
     * @var string
     */
    protected ?string $lubanLiveCommentCnt = null;

    /**
     * 直播间观看数
     * @var string
     */
    protected ?string $lubanLiveEnterCnt = null;

    /**
     * 直播间关注数
     * @var string
     */
    protected ?string $lubanLiveFollowCnt = null;

    /**
     * 直播间礼物总金额
     * @var string
     */
    protected ?string $lubanLiveGiftAmount = null;

    /**
     * 直播间打赏次数
     * @var string
     */
    protected ?string $lubanLiveGiftCnt = null;

    /**
     * 直播间订单量
     * @var string
     */
    protected ?string $lubanLivePayOrderCount = null;

    /**
     * 直播间15日订单量
     * @var string
     */
    protected ?string $lubanLivePayOrderCountByAuthor15days = null;

    /**
     * 直播间30日订单量
     * @var string
     */
    protected ?string $lubanLivePayOrderCountByAuthor30Days = null;

    /**
     * 直播间3日订单量
     * @var string
     */
    protected ?string $lubanLivePayOrderCountByAuthor3days = null;

    /**
     * 直播间7日订单量
     * @var string
     */
    protected ?string $lubanLivePayOrderCountByAuthor7days = null;

    /**
     * 直播间订单金额
     * @var string
     */
    protected ?string $lubanLivePayOrderStatCost = null;

    /**
     * 直播间15日订单金额
     * @var string
     */
    protected ?string $lubanLivePayOrderStatCostByAuthor15days = null;

    /**
     * 直播间30日订单金额
     * @var string
     */
    protected ?string $lubanLivePayOrderStatCostByAuthor30days = null;

    /**
     * 直播间3日订单金额
     * @var string
     */
    protected ?string $lubanLivePayOrderStatCostByAuthor3days = null;

    /**
     * 直播间7日订单金额
     * @var string
     */
    protected ?string $lubanLivePayOrderStatCostByAuthor7days = null;

    /**
     * 直播间分享数
     * @var string
     */
    protected ?string $lubanLiveShareCnt = null;

    /**
     * 直播间查看购物车数
     * @var string
     */
    protected ?string $lubanLiveSlidecartClickCnt = null;

    /**
     * 鲁班订单量
     * @var string
     */
    protected ?string $lubanOrderCnt = null;

    /**
     * 鲁班订单ROI
     * @var string
     */
    protected ?string $lubanOrderRoi = null;

    /**
     * 鲁班订单金额
     * @var string
     */
    protected ?string $lubanOrderStatAmount = null;

    /**
     * 主素材点击数
     * @var string
     */
    protected ?string $mainMaterialClickCount = null;

    /**
     * 私信数
     * @var string
     */
    protected ?string $messageAction = null;

    /**
     * 外跳模块点击数
     * @var string
     */
    protected ?string $outsideJumpAreaClickCount = null;

    /**
     * 25%进度播放数
     * @var string
     */
    protected ?string $play25FeedBreak = null;

    /**
     * 50%进度播放数
     * @var string
     */
    protected ?string $play50FeedBreak = null;

    /**
     * 75%进度播放数
     * @var string
     */
    protected ?string $play75FeedBreak = null;

    /**
     * 99%进度播放数
     * @var string
     */
    protected ?string $play99FeedBreak = null;

    /**
     * 完播率
     * @var string
     */
    protected ?string $playOverRate = null;

    /**
     * 门店浏览次数
     * @var string
     */
    protected ?string $poiHomepageViewCount = null;

    /**
     * 品专总点击数
     * @var string
     */
    protected ?string $searchBrandTotalClickCount = null;

    /**
     * 品专总点击率
     * @var string
     */
    protected ?string $searchBrandTotalCtr = null;

    /**
     * 店铺访问量
     * @var string
     */
    protected ?string $shopVisitedCount = null;

    /**
     * 展示数
     * @var string
     */
    protected ?string $showCnt = null;

    /**
     * 消耗
     * @var string
     */
    protected ?string $statCost = null;

    /**
     * 子链点击数
     * @var string
     */
    protected ?string $subchainClickCount = null;

    /**
     * 超级品专话题点击数
     * @var string
     */
    protected ?string $superBrandTopicClickCount = null;

    /**
     * 超级品专视频卡点击数
     * @var string
     */
    protected ?string $superBrandVideocardClickCount = null;

    /**
     * 播放数
     * @var string
     */
    protected ?string $totalPlay = null;

    /**
     * 有效播放数
     * @var string
     */
    protected ?string $validPlay = null;

    /**
     * 有效播放成本
     * @var string
     */
    protected ?string $validPlayCost = null;

    /**
     * 千次有效播放成本
     * @var string
     */
    protected ?string $validPlayCostOfMille = null;

    /**
     * 千次有效播放数
     * @var string
     */
    protected ?string $validPlayOfMille = null;

    /**
     * 有效播放率
     * @var string
     */
    protected ?string $validPlayRate = null;

    /**
     * WIFI播放占比
     * @var string
     */
    protected ?string $wifiPlayRate = null;

    /**
     * 活动banner图点击数
     * @return string
     */
    public function getActivityBannerClickCount(): ?string
    {
        return $this->activityBannerClickCount;
    }

    /**
     * 活动banner图点击数
     * @param string $activityBannerClickCount
     * @return self
     */
    public function setActivityBannerClickCount(?string $activityBannerClickCount): self
    {
        $this->activityBannerClickCount = $activityBannerClickCount;
        return $this;
    }

    /**
     * 附加创意卡片点击数
     * @return string
     */
    public function getAttachCreativeClickCnt(): ?string
    {
        return $this->attachCreativeClickCnt;
    }

    /**
     * 附加创意卡片点击数
     * @param string $attachCreativeClickCnt
     * @return self
     */
    public function setAttachCreativeClickCnt(?string $attachCreativeClickCnt): self
    {
        $this->attachCreativeClickCnt = $attachCreativeClickCnt;
        return $this;
    }

    /**
     * 附加创意卡片展示数
     * @return string
     */
    public function getAttachCreativeShowCnt(): ?string
    {
        return $this->attachCreativeShowCnt;
    }

    /**
     * 附加创意卡片展示数
     * @param string $attachCreativeShowCnt
     * @return self
     */
    public function setAttachCreativeShowCnt(?string $attachCreativeShowCnt): self
    {
        $this->attachCreativeShowCnt = $attachCreativeShowCnt;
        return $this;
    }

    /**
     * 平均单次播放时长
     * @return string
     */
    public function getAveragePlayTimePerPlay(): ?string
    {
        return $this->averagePlayTimePerPlay;
    }

    /**
     * 平均单次播放时长
     * @param string $averagePlayTimePerPlay
     * @return self
     */
    public function setAveragePlayTimePerPlay(?string $averagePlayTimePerPlay): self
    {
        $this->averagePlayTimePerPlay = $averagePlayTimePerPlay;
        return $this;
    }

    /**
     * 支付订单平均每单交易额
     * @return string
     */
    public function getBrandAllOrderPayAverageAmount7days(): ?string
    {
        return $this->brandAllOrderPayAverageAmount7days;
    }

    /**
     * 支付订单平均每单交易额
     * @param string $brandAllOrderPayAverageAmount7days
     * @return self
     */
    public function setBrandAllOrderPayAverageAmount7days(?string $brandAllOrderPayAverageAmount7days): self
    {
        $this->brandAllOrderPayAverageAmount7days = $brandAllOrderPayAverageAmount7days;
        return $this;
    }

    /**
     * 支付订单数目7天
     * @return string
     */
    public function getBrandAllOrderPayCount7days(): ?string
    {
        return $this->brandAllOrderPayCount7days;
    }

    /**
     * 支付订单数目7天
     * @param string $brandAllOrderPayCount7days
     * @return self
     */
    public function setBrandAllOrderPayCount7days(?string $brandAllOrderPayCount7days): self
    {
        $this->brandAllOrderPayCount7days = $brandAllOrderPayCount7days;
        return $this;
    }

    /**
     * 支付订单gvm7天
     * @return string
     */
    public function getBrandAllOrderPayGmv7days(): ?string
    {
        return $this->brandAllOrderPayGmv7days;
    }

    /**
     * 支付订单gvm7天
     * @param string $brandAllOrderPayGmv7days
     * @return self
     */
    public function setBrandAllOrderPayGmv7days(?string $brandAllOrderPayGmv7days): self
    {
        $this->brandAllOrderPayGmv7days = $brandAllOrderPayGmv7days;
        return $this;
    }

    /**
     * 支付订单数7天
     * @return string
     */
    public function getBrandIndirectOrderPayCount7days(): ?string
    {
        return $this->brandIndirectOrderPayCount7days;
    }

    /**
     * 支付订单数7天
     * @param string $brandIndirectOrderPayCount7days
     * @return self
     */
    public function setBrandIndirectOrderPayCount7days(?string $brandIndirectOrderPayCount7days): self
    {
        $this->brandIndirectOrderPayCount7days = $brandIndirectOrderPayCount7days;
        return $this;
    }

    /**
     * 支付订单gvm7天
     * @return string
     */
    public function getBrandIndirectOrderPayGmv7days(): ?string
    {
        return $this->brandIndirectOrderPayGmv7days;
    }

    /**
     * 支付订单gvm7天
     * @param string $brandIndirectOrderPayGmv7days
     * @return self
     */
    public function setBrandIndirectOrderPayGmv7days(?string $brandIndirectOrderPayGmv7days): self
    {
        $this->brandIndirectOrderPayGmv7days = $brandIndirectOrderPayGmv7days;
        return $this;
    }

    /**
     * 3秒卡片展现数
     * @return string
     */
    public function getCardShow(): ?string
    {
        return $this->cardShow;
    }

    /**
     * 3秒卡片展现数
     * @param string $cardShow
     * @return self
     */
    public function setCardShow(?string $cardShow): self
    {
        $this->cardShow = $cardShow;
        return $this;
    }

    /**
     * 附加创意电话按钮点击
     * @return string
     */
    public function getClickCallCnt(): ?string
    {
        return $this->clickCallCnt;
    }

    /**
     * 附加创意电话按钮点击
     * @param string $clickCallCnt
     * @return self
     */
    public function setClickCallCnt(?string $clickCallCnt): self
    {
        $this->clickCallCnt = $clickCallCnt;
        return $this;
    }

    /**
     * 主页内电话拨打点击量
     * @return string
     */
    public function getClickCallDy(): ?string
    {
        return $this->clickCallDy;
    }

    /**
     * 主页内电话拨打点击量
     * @param string $clickCallDy
     * @return self
     */
    public function setClickCallDy(?string $clickCallDy): self
    {
        $this->clickCallDy = $clickCallDy;
        return $this;
    }

    /**
     * 点击数
     * @return string
     */
    public function getClickCnt(): ?string
    {
        return $this->clickCnt;
    }

    /**
     * 点击数
     * @param string $clickCnt
     * @return self
     */
    public function setClickCnt(?string $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * 附件创意在线咨询点击
     * @return string
     */
    public function getClickCounsel(): ?string
    {
        return $this->clickCounsel;
    }

    /**
     * 附件创意在线咨询点击
     * @param string $clickCounsel
     * @return self
     */
    public function setClickCounsel(?string $clickCounsel): self
    {
        $this->clickCounsel = $clickCounsel;
        return $this;
    }

    /**
     * 主页下载链接点击量
     * @return string
     */
    public function getClickDownload(): ?string
    {
        return $this->clickDownload;
    }

    /**
     * 主页下载链接点击量
     * @param string $clickDownload
     * @return self
     */
    public function setClickDownload(?string $clickDownload): self
    {
        $this->clickDownload = $clickDownload;
        return $this;
    }

    /**
     * 推广页访问量
     * @return string
     */
    public function getClickLandingPage(): ?string
    {
        return $this->clickLandingPage;
    }

    /**
     * 推广页访问量
     * @param string $clickLandingPage
     * @return self
     */
    public function setClickLandingPage(?string $clickLandingPage): self
    {
        $this->clickLandingPage = $clickLandingPage;
        return $this;
    }

    /**
     * 主页商品橱窗访问量
     * @return string
     */
    public function getClickShopwindow(): ?string
    {
        return $this->clickShopwindow;
    }

    /**
     * 主页商品橱窗访问量
     * @param string $clickShopwindow
     * @return self
     */
    public function setClickShopwindow(?string $clickShopwindow): self
    {
        $this->clickShopwindow = $clickShopwindow;
        return $this;
    }

    /**
     * 主页内落地页访问量
     * @return string
     */
    public function getClickWebsite(): ?string
    {
        return $this->clickWebsite;
    }

    /**
     * 主页内落地页访问量
     * @param string $clickWebsite
     * @return self
     */
    public function setClickWebsite(?string $clickWebsite): self
    {
        $this->clickWebsite = $clickWebsite;
        return $this;
    }

    /**
     * 转化成本
     * @return string
     */
    public function getConversionCost(): ?string
    {
        return $this->conversionCost;
    }

    /**
     * 转化成本
     * @param string $conversionCost
     * @return self
     */
    public function setConversionCost(?string $conversionCost): self
    {
        $this->conversionCost = $conversionCost;
        return $this;
    }

    /**
     * 转化率
     * @return string
     */
    public function getConversionRate(): ?string
    {
        return $this->conversionRate;
    }

    /**
     * 转化率
     * @param string $conversionRate
     * @return self
     */
    public function setConversionRate(?string $conversionRate): self
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * 转化数
     * @return string
     */
    public function getConvertCnt(): ?string
    {
        return $this->convertCnt;
    }

    /**
     * 转化数
     * @param string $convertCnt
     * @return self
     */
    public function setConvertCnt(?string $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
        return $this;
    }

    /**
     * 附件创意卡券领取
     * @return string
     */
    public function getCouponAddition(): ?string
    {
        return $this->couponAddition;
    }

    /**
     * 附件创意卡券领取
     * @param string $couponAddition
     * @return self
     */
    public function setCouponAddition(?string $couponAddition): self
    {
        $this->couponAddition = $couponAddition;
        return $this;
    }

    /**
     * 平均点击单价
     * @return string
     */
    public function getCpcPlatform(): ?string
    {
        return $this->cpcPlatform;
    }

    /**
     * 平均点击单价
     * @param string $cpcPlatform
     * @return self
     */
    public function setCpcPlatform(?string $cpcPlatform): self
    {
        $this->cpcPlatform = $cpcPlatform;
        return $this;
    }

    /**
     * 平均千次展现费用
     * @return string
     */
    public function getCpmPlatform(): ?string
    {
        return $this->cpmPlatform;
    }

    /**
     * 平均千次展现费用
     * @param string $cpmPlatform
     * @return self
     */
    public function setCpmPlatform(?string $cpmPlatform): self
    {
        $this->cpmPlatform = $cpmPlatform;
        return $this;
    }

    /**
     * 点击率
     * @return string
     */
    public function getCtr(): ?string
    {
        return $this->ctr;
    }

    /**
     * 点击率
     * @param string $ctr
     * @return self
     */
    public function setCtr(?string $ctr): self
    {
        $this->ctr = $ctr;
        return $this;
    }

    /**
     * 深度转化数
     * @return string
     */
    public function getDeepConvertCnt(): ?string
    {
        return $this->deepConvertCnt;
    }

    /**
     * 深度转化数
     * @param string $deepConvertCnt
     * @return self
     */
    public function setDeepConvertCnt(?string $deepConvertCnt): self
    {
        $this->deepConvertCnt = $deepConvertCnt;
        return $this;
    }

    /**
     * 深度转化成本
     * @return string
     */
    public function getDeepConvertCost(): ?string
    {
        return $this->deepConvertCost;
    }

    /**
     * 深度转化成本
     * @param string $deepConvertCost
     * @return self
     */
    public function setDeepConvertCost(?string $deepConvertCost): self
    {
        $this->deepConvertCost = $deepConvertCost;
        return $this;
    }

    /**
     * 深度转化率
     * @return string
     */
    public function getDeepConvertRate(): ?string
    {
        return $this->deepConvertRate;
    }

    /**
     * 深度转化率
     * @param string $deepConvertRate
     * @return self
     */
    public function setDeepConvertRate(?string $deepConvertRate): self
    {
        $this->deepConvertRate = $deepConvertRate;
        return $this;
    }

    /**
     * 评论量
     * @return string
     */
    public function getDyComment(): ?string
    {
        return $this->dyComment;
    }

    /**
     * 评论量
     * @param string $dyComment
     * @return self
     */
    public function setDyComment(?string $dyComment): self
    {
        $this->dyComment = $dyComment;
        return $this;
    }

    /**
     * 粉丝量
     * @return string
     */
    public function getDyFollow(): ?string
    {
        return $this->dyFollow;
    }

    /**
     * 粉丝量
     * @param string $dyFollow
     * @return self
     */
    public function setDyFollow(?string $dyFollow): self
    {
        $this->dyFollow = $dyFollow;
        return $this;
    }

    /**
     * 主页访问量
     * @return string
     */
    public function getDyHomeVisited(): ?string
    {
        return $this->dyHomeVisited;
    }

    /**
     * 主页访问量
     * @param string $dyHomeVisited
     * @return self
     */
    public function setDyHomeVisited(?string $dyHomeVisited): self
    {
        $this->dyHomeVisited = $dyHomeVisited;
        return $this;
    }

    /**
     * 点赞数
     * @return string
     */
    public function getDyLike(): ?string
    {
        return $this->dyLike;
    }

    /**
     * 点赞数
     * @param string $dyLike
     * @return self
     */
    public function setDyLike(?string $dyLike): self
    {
        $this->dyLike = $dyLike;
        return $this;
    }

    /**
     * 分享量
     * @return string
     */
    public function getDyShare(): ?string
    {
        return $this->dyShare;
    }

    /**
     * 分享量
     * @param string $dyShare
     * @return self
     */
    public function setDyShare(?string $dyShare): self
    {
        $this->dyShare = $dyShare;
        return $this;
    }

    /**
     * 粉丝视频评论数
     * @return string
     */
    public function getFansDyCommentCount(): ?string
    {
        return $this->fansDyCommentCount;
    }

    /**
     * 粉丝视频评论数
     * @param string $fansDyCommentCount
     * @return self
     */
    public function setFansDyCommentCount(?string $fansDyCommentCount): self
    {
        $this->fansDyCommentCount = $fansDyCommentCount;
        return $this;
    }

    /**
     * 粉丝视频点赞数
     * @return string
     */
    public function getFansDyLikeCount(): ?string
    {
        return $this->fansDyLikeCount;
    }

    /**
     * 粉丝视频点赞数
     * @param string $fansDyLikeCount
     * @return self
     */
    public function setFansDyLikeCount(?string $fansDyLikeCount): self
    {
        $this->fansDyLikeCount = $fansDyLikeCount;
        return $this;
    }

    /**
     * 粉丝主页浏览数
     * @return string
     */
    public function getFansHomeVisitedCount(): ?string
    {
        return $this->fansHomeVisitedCount;
    }

    /**
     * 粉丝主页浏览数
     * @param string $fansHomeVisitedCount
     * @return self
     */
    public function setFansHomeVisitedCount(?string $fansHomeVisitedCount): self
    {
        $this->fansHomeVisitedCount = $fansHomeVisitedCount;
        return $this;
    }

    /**
     * 粉丝直播评论次数
     * @return string
     */
    public function getFansLubanLiveCommentCount(): ?string
    {
        return $this->fansLubanLiveCommentCount;
    }

    /**
     * 粉丝直播评论次数
     * @param string $fansLubanLiveCommentCount
     * @return self
     */
    public function setFansLubanLiveCommentCount(?string $fansLubanLiveCommentCount): self
    {
        $this->fansLubanLiveCommentCount = $fansLubanLiveCommentCount;
        return $this;
    }

    /**
     * 粉丝直播观看次数
     * @return string
     */
    public function getFansLubanLiveEnterCount(): ?string
    {
        return $this->fansLubanLiveEnterCount;
    }

    /**
     * 粉丝直播观看次数
     * @param string $fansLubanLiveEnterCount
     * @return self
     */
    public function setFansLubanLiveEnterCount(?string $fansLubanLiveEnterCount): self
    {
        $this->fansLubanLiveEnterCount = $fansLubanLiveEnterCount;
        return $this;
    }

    /**
     * 粉丝直播间礼物总金额
     * @return string
     */
    public function getFansLubanLiveGiftAmount(): ?string
    {
        return $this->fansLubanLiveGiftAmount;
    }

    /**
     * 粉丝直播间礼物总金额
     * @param string $fansLubanLiveGiftAmount
     * @return self
     */
    public function setFansLubanLiveGiftAmount(?string $fansLubanLiveGiftAmount): self
    {
        $this->fansLubanLiveGiftAmount = $fansLubanLiveGiftAmount;
        return $this;
    }

    /**
     * 粉丝直播间订单金额
     * @return string
     */
    public function getFansLubanLivePayOrderStatCost(): ?string
    {
        return $this->fansLubanLivePayOrderStatCost;
    }

    /**
     * 粉丝直播间订单金额
     * @param string $fansLubanLivePayOrderStatCost
     * @return self
     */
    public function setFansLubanLivePayOrderStatCost(?string $fansLubanLivePayOrderStatCost): self
    {
        $this->fansLubanLivePayOrderStatCost = $fansLubanLivePayOrderStatCost;
        return $this;
    }

    /**
     * 粉丝直播间购物车点击量
     * @return string
     */
    public function getFansLubanLiveSlidecartClickCount(): ?string
    {
        return $this->fansLubanLiveSlidecartClickCount;
    }

    /**
     * 粉丝直播间购物车点击量
     * @param string $fansLubanLiveSlidecartClickCount
     * @return self
     */
    public function setFansLubanLiveSlidecartClickCount(?string $fansLubanLiveSlidecartClickCount): self
    {
        $this->fansLubanLiveSlidecartClickCount = $fansLubanLiveSlidecartClickCount;
        return $this;
    }

    /**
     * 粉丝视频播放数
     * @return string
     */
    public function getFansVideoPlayCount(): ?string
    {
        return $this->fansVideoPlayCount;
    }

    /**
     * 粉丝视频播放数
     * @param string $fansVideoPlayCount
     * @return self
     */
    public function setFansVideoPlayCount(?string $fansVideoPlayCount): self
    {
        $this->fansVideoPlayCount = $fansVideoPlayCount;
        return $this;
    }

    /**
     * 粉丝视频转发数
     * @return string
     */
    public function getFansVideoShareCount(): ?string
    {
        return $this->fansVideoShareCount;
    }

    /**
     * 粉丝视频转发数
     * @param string $fansVideoShareCount
     * @return self
     */
    public function setFansVideoShareCount(?string $fansVideoShareCount): self
    {
        $this->fansVideoShareCount = $fansVideoShareCount;
        return $this;
    }

    /**
     * 附件创意表单按钮点击
     * @return string
     */
    public function getFormClickButton(): ?string
    {
        return $this->formClickButton;
    }

    /**
     * 附件创意表单按钮点击
     * @param string $formClickButton
     * @return self
     */
    public function setFormClickButton(?string $formClickButton): self
    {
        $this->formClickButton = $formClickButton;
        return $this;
    }

    /**
     * 挑战赛查看数
     * @return string
     */
    public function getIesChallengeClick(): ?string
    {
        return $this->iesChallengeClick;
    }

    /**
     * 挑战赛查看数
     * @param string $iesChallengeClick
     * @return self
     */
    public function setIesChallengeClick(?string $iesChallengeClick): self
    {
        $this->iesChallengeClick = $iesChallengeClick;
        return $this;
    }

    /**
     * 音乐查看数
     * @return string
     */
    public function getIesMusicClick(): ?string
    {
        return $this->iesMusicClick;
    }

    /**
     * 音乐查看数
     * @param string $iesMusicClick
     * @return self
     */
    public function setIesMusicClick(?string $iesMusicClick): self
    {
        $this->iesMusicClick = $iesMusicClick;
        return $this;
    }

    /**
     * 直播预约人数
     * @return string
     */
    public function getLiveAppointCount(): ?string
    {
        return $this->liveAppointCount;
    }

    /**
     * 直播预约人数
     * @param string $liveAppointCount
     * @return self
     */
    public function setLiveAppointCount(?string $liveAppointCount): self
    {
        $this->liveAppointCount = $liveAppointCount;
        return $this;
    }

    /**
     * 组件点击成本
     * @return string
     */
    public function getLiveComponentClickCost(): ?string
    {
        return $this->liveComponentClickCost;
    }

    /**
     * 组件点击成本
     * @param string $liveComponentClickCost
     * @return self
     */
    public function setLiveComponentClickCost(?string $liveComponentClickCost): self
    {
        $this->liveComponentClickCost = $liveComponentClickCost;
        return $this;
    }

    /**
     * 组件点击数
     * @return string
     */
    public function getLiveComponentClickCount(): ?string
    {
        return $this->liveComponentClickCount;
    }

    /**
     * 组件点击数
     * @param string $liveComponentClickCount
     * @return self
     */
    public function setLiveComponentClickCount(?string $liveComponentClickCount): self
    {
        $this->liveComponentClickCount = $liveComponentClickCount;
        return $this;
    }

    /**
     * 组件点击率
     * @return string
     */
    public function getLiveComponentClickRate(): ?string
    {
        return $this->liveComponentClickRate;
    }

    /**
     * 组件点击率
     * @param string $liveComponentClickRate
     * @return self
     */
    public function setLiveComponentClickRate(?string $liveComponentClickRate): self
    {
        $this->liveComponentClickRate = $liveComponentClickRate;
        return $this;
    }

    /**
     * 直播间加入粉丝团
     * @return string
     */
    public function getLiveFansClubJoinCnt(): ?string
    {
        return $this->liveFansClubJoinCnt;
    }

    /**
     * 直播间加入粉丝团
     * @param string $liveFansClubJoinCnt
     * @return self
     */
    public function setLiveFansClubJoinCnt(?string $liveFansClubJoinCnt): self
    {
        $this->liveFansClubJoinCnt = $liveFansClubJoinCnt;
        return $this;
    }

    /**
     * 直播间团购点击量
     * @return string
     */
    public function getLiveGrouponProductClickCount(): ?string
    {
        return $this->liveGrouponProductClickCount;
    }

    /**
     * 直播间团购点击量
     * @param string $liveGrouponProductClickCount
     * @return self
     */
    public function setLiveGrouponProductClickCount(?string $liveGrouponProductClickCount): self
    {
        $this->liveGrouponProductClickCount = $liveGrouponProductClickCount;
        return $this;
    }

    /**
     * 直播间客单价
     * @return string
     */
    public function getLivePayOrderCostPerOrder(): ?string
    {
        return $this->livePayOrderCostPerOrder;
    }

    /**
     * 直播间客单价
     * @param string $livePayOrderCostPerOrder
     * @return self
     */
    public function setLivePayOrderCostPerOrder(?string $livePayOrderCostPerOrder): self
    {
        $this->livePayOrderCostPerOrder = $livePayOrderCostPerOrder;
        return $this;
    }

    /**
     * 直播间客单价（长效影响-15天）
     * @return string
     */
    public function getLivePayOrderCostPerOrderByAuthor15days(): ?string
    {
        return $this->livePayOrderCostPerOrderByAuthor15days;
    }

    /**
     * 直播间客单价（长效影响-15天）
     * @param string $livePayOrderCostPerOrderByAuthor15days
     * @return self
     */
    public function setLivePayOrderCostPerOrderByAuthor15days(?string $livePayOrderCostPerOrderByAuthor15days): self
    {
        $this->livePayOrderCostPerOrderByAuthor15days = $livePayOrderCostPerOrderByAuthor15days;
        return $this;
    }

    /**
     * 直播间客单价（长效影响-30天）
     * @return string
     */
    public function getLivePayOrderCostPerOrderByAuthor30days(): ?string
    {
        return $this->livePayOrderCostPerOrderByAuthor30days;
    }

    /**
     * 直播间客单价（长效影响-30天）
     * @param string $livePayOrderCostPerOrderByAuthor30days
     * @return self
     */
    public function setLivePayOrderCostPerOrderByAuthor30days(?string $livePayOrderCostPerOrderByAuthor30days): self
    {
        $this->livePayOrderCostPerOrderByAuthor30days = $livePayOrderCostPerOrderByAuthor30days;
        return $this;
    }

    /**
     * 直播间客单价（长效影响-3天）
     * @return string
     */
    public function getLivePayOrderCostPerOrderByAuthor3days(): ?string
    {
        return $this->livePayOrderCostPerOrderByAuthor3days;
    }

    /**
     * 直播间客单价（长效影响-3天）
     * @param string $livePayOrderCostPerOrderByAuthor3days
     * @return self
     */
    public function setLivePayOrderCostPerOrderByAuthor3days(?string $livePayOrderCostPerOrderByAuthor3days): self
    {
        $this->livePayOrderCostPerOrderByAuthor3days = $livePayOrderCostPerOrderByAuthor3days;
        return $this;
    }

    /**
     * 直播间客单价（长效影响-7天）
     * @return string
     */
    public function getLivePayOrderCostPerOrderByAuthor7days(): ?string
    {
        return $this->livePayOrderCostPerOrderByAuthor7days;
    }

    /**
     * 直播间客单价（长效影响-7天）
     * @param string $livePayOrderCostPerOrderByAuthor7days
     * @return self
     */
    public function setLivePayOrderCostPerOrderByAuthor7days(?string $livePayOrderCostPerOrderByAuthor7days): self
    {
        $this->livePayOrderCostPerOrderByAuthor7days = $livePayOrderCostPerOrderByAuthor7days;
        return $this;
    }

    /**
     * 直播间超过一分钟观看数
     * @return string
     */
    public function getLiveWatchOneMinuteCount(): ?string
    {
        return $this->liveWatchOneMinuteCount;
    }

    /**
     * 直播间超过一分钟观看数
     * @param string $liveWatchOneMinuteCount
     * @return self
     */
    public function setLiveWatchOneMinuteCount(?string $liveWatchOneMinuteCount): self
    {
        $this->liveWatchOneMinuteCount = $liveWatchOneMinuteCount;
        return $this;
    }

    /**
     * POI点击数
     * @return string
     */
    public function getLocationClick(): ?string
    {
        return $this->locationClick;
    }

    /**
     * POI点击数
     * @param string $locationClick
     * @return self
     */
    public function setLocationClick(?string $locationClick): self
    {
        $this->locationClick = $locationClick;
        return $this;
    }

    /**
     * 直播间点击商品数
     * @return string
     */
    public function getLubanLiveClickProductCnt(): ?string
    {
        return $this->lubanLiveClickProductCnt;
    }

    /**
     * 直播间点击商品数
     * @param string $lubanLiveClickProductCnt
     * @return self
     */
    public function setLubanLiveClickProductCnt(?string $lubanLiveClickProductCnt): self
    {
        $this->lubanLiveClickProductCnt = $lubanLiveClickProductCnt;
        return $this;
    }

    /**
     * 直播间评论数
     * @return string
     */
    public function getLubanLiveCommentCnt(): ?string
    {
        return $this->lubanLiveCommentCnt;
    }

    /**
     * 直播间评论数
     * @param string $lubanLiveCommentCnt
     * @return self
     */
    public function setLubanLiveCommentCnt(?string $lubanLiveCommentCnt): self
    {
        $this->lubanLiveCommentCnt = $lubanLiveCommentCnt;
        return $this;
    }

    /**
     * 直播间观看数
     * @return string
     */
    public function getLubanLiveEnterCnt(): ?string
    {
        return $this->lubanLiveEnterCnt;
    }

    /**
     * 直播间观看数
     * @param string $lubanLiveEnterCnt
     * @return self
     */
    public function setLubanLiveEnterCnt(?string $lubanLiveEnterCnt): self
    {
        $this->lubanLiveEnterCnt = $lubanLiveEnterCnt;
        return $this;
    }

    /**
     * 直播间关注数
     * @return string
     */
    public function getLubanLiveFollowCnt(): ?string
    {
        return $this->lubanLiveFollowCnt;
    }

    /**
     * 直播间关注数
     * @param string $lubanLiveFollowCnt
     * @return self
     */
    public function setLubanLiveFollowCnt(?string $lubanLiveFollowCnt): self
    {
        $this->lubanLiveFollowCnt = $lubanLiveFollowCnt;
        return $this;
    }

    /**
     * 直播间礼物总金额
     * @return string
     */
    public function getLubanLiveGiftAmount(): ?string
    {
        return $this->lubanLiveGiftAmount;
    }

    /**
     * 直播间礼物总金额
     * @param string $lubanLiveGiftAmount
     * @return self
     */
    public function setLubanLiveGiftAmount(?string $lubanLiveGiftAmount): self
    {
        $this->lubanLiveGiftAmount = $lubanLiveGiftAmount;
        return $this;
    }

    /**
     * 直播间打赏次数
     * @return string
     */
    public function getLubanLiveGiftCnt(): ?string
    {
        return $this->lubanLiveGiftCnt;
    }

    /**
     * 直播间打赏次数
     * @param string $lubanLiveGiftCnt
     * @return self
     */
    public function setLubanLiveGiftCnt(?string $lubanLiveGiftCnt): self
    {
        $this->lubanLiveGiftCnt = $lubanLiveGiftCnt;
        return $this;
    }

    /**
     * 直播间订单量
     * @return string
     */
    public function getLubanLivePayOrderCount(): ?string
    {
        return $this->lubanLivePayOrderCount;
    }

    /**
     * 直播间订单量
     * @param string $lubanLivePayOrderCount
     * @return self
     */
    public function setLubanLivePayOrderCount(?string $lubanLivePayOrderCount): self
    {
        $this->lubanLivePayOrderCount = $lubanLivePayOrderCount;
        return $this;
    }

    /**
     * 直播间15日订单量
     * @return string
     */
    public function getLubanLivePayOrderCountByAuthor15days(): ?string
    {
        return $this->lubanLivePayOrderCountByAuthor15days;
    }

    /**
     * 直播间15日订单量
     * @param string $lubanLivePayOrderCountByAuthor15days
     * @return self
     */
    public function setLubanLivePayOrderCountByAuthor15days(?string $lubanLivePayOrderCountByAuthor15days): self
    {
        $this->lubanLivePayOrderCountByAuthor15days = $lubanLivePayOrderCountByAuthor15days;
        return $this;
    }

    /**
     * 直播间30日订单量
     * @return string
     */
    public function getLubanLivePayOrderCountByAuthor30Days(): ?string
    {
        return $this->lubanLivePayOrderCountByAuthor30Days;
    }

    /**
     * 直播间30日订单量
     * @param string $lubanLivePayOrderCountByAuthor30Days
     * @return self
     */
    public function setLubanLivePayOrderCountByAuthor30Days(?string $lubanLivePayOrderCountByAuthor30Days): self
    {
        $this->lubanLivePayOrderCountByAuthor30Days = $lubanLivePayOrderCountByAuthor30Days;
        return $this;
    }

    /**
     * 直播间3日订单量
     * @return string
     */
    public function getLubanLivePayOrderCountByAuthor3days(): ?string
    {
        return $this->lubanLivePayOrderCountByAuthor3days;
    }

    /**
     * 直播间3日订单量
     * @param string $lubanLivePayOrderCountByAuthor3days
     * @return self
     */
    public function setLubanLivePayOrderCountByAuthor3days(?string $lubanLivePayOrderCountByAuthor3days): self
    {
        $this->lubanLivePayOrderCountByAuthor3days = $lubanLivePayOrderCountByAuthor3days;
        return $this;
    }

    /**
     * 直播间7日订单量
     * @return string
     */
    public function getLubanLivePayOrderCountByAuthor7days(): ?string
    {
        return $this->lubanLivePayOrderCountByAuthor7days;
    }

    /**
     * 直播间7日订单量
     * @param string $lubanLivePayOrderCountByAuthor7days
     * @return self
     */
    public function setLubanLivePayOrderCountByAuthor7days(?string $lubanLivePayOrderCountByAuthor7days): self
    {
        $this->lubanLivePayOrderCountByAuthor7days = $lubanLivePayOrderCountByAuthor7days;
        return $this;
    }

    /**
     * 直播间订单金额
     * @return string
     */
    public function getLubanLivePayOrderStatCost(): ?string
    {
        return $this->lubanLivePayOrderStatCost;
    }

    /**
     * 直播间订单金额
     * @param string $lubanLivePayOrderStatCost
     * @return self
     */
    public function setLubanLivePayOrderStatCost(?string $lubanLivePayOrderStatCost): self
    {
        $this->lubanLivePayOrderStatCost = $lubanLivePayOrderStatCost;
        return $this;
    }

    /**
     * 直播间15日订单金额
     * @return string
     */
    public function getLubanLivePayOrderStatCostByAuthor15days(): ?string
    {
        return $this->lubanLivePayOrderStatCostByAuthor15days;
    }

    /**
     * 直播间15日订单金额
     * @param string $lubanLivePayOrderStatCostByAuthor15days
     * @return self
     */
    public function setLubanLivePayOrderStatCostByAuthor15days(?string $lubanLivePayOrderStatCostByAuthor15days): self
    {
        $this->lubanLivePayOrderStatCostByAuthor15days = $lubanLivePayOrderStatCostByAuthor15days;
        return $this;
    }

    /**
     * 直播间30日订单金额
     * @return string
     */
    public function getLubanLivePayOrderStatCostByAuthor30days(): ?string
    {
        return $this->lubanLivePayOrderStatCostByAuthor30days;
    }

    /**
     * 直播间30日订单金额
     * @param string $lubanLivePayOrderStatCostByAuthor30days
     * @return self
     */
    public function setLubanLivePayOrderStatCostByAuthor30days(?string $lubanLivePayOrderStatCostByAuthor30days): self
    {
        $this->lubanLivePayOrderStatCostByAuthor30days = $lubanLivePayOrderStatCostByAuthor30days;
        return $this;
    }

    /**
     * 直播间3日订单金额
     * @return string
     */
    public function getLubanLivePayOrderStatCostByAuthor3days(): ?string
    {
        return $this->lubanLivePayOrderStatCostByAuthor3days;
    }

    /**
     * 直播间3日订单金额
     * @param string $lubanLivePayOrderStatCostByAuthor3days
     * @return self
     */
    public function setLubanLivePayOrderStatCostByAuthor3days(?string $lubanLivePayOrderStatCostByAuthor3days): self
    {
        $this->lubanLivePayOrderStatCostByAuthor3days = $lubanLivePayOrderStatCostByAuthor3days;
        return $this;
    }

    /**
     * 直播间7日订单金额
     * @return string
     */
    public function getLubanLivePayOrderStatCostByAuthor7days(): ?string
    {
        return $this->lubanLivePayOrderStatCostByAuthor7days;
    }

    /**
     * 直播间7日订单金额
     * @param string $lubanLivePayOrderStatCostByAuthor7days
     * @return self
     */
    public function setLubanLivePayOrderStatCostByAuthor7days(?string $lubanLivePayOrderStatCostByAuthor7days): self
    {
        $this->lubanLivePayOrderStatCostByAuthor7days = $lubanLivePayOrderStatCostByAuthor7days;
        return $this;
    }

    /**
     * 直播间分享数
     * @return string
     */
    public function getLubanLiveShareCnt(): ?string
    {
        return $this->lubanLiveShareCnt;
    }

    /**
     * 直播间分享数
     * @param string $lubanLiveShareCnt
     * @return self
     */
    public function setLubanLiveShareCnt(?string $lubanLiveShareCnt): self
    {
        $this->lubanLiveShareCnt = $lubanLiveShareCnt;
        return $this;
    }

    /**
     * 直播间查看购物车数
     * @return string
     */
    public function getLubanLiveSlidecartClickCnt(): ?string
    {
        return $this->lubanLiveSlidecartClickCnt;
    }

    /**
     * 直播间查看购物车数
     * @param string $lubanLiveSlidecartClickCnt
     * @return self
     */
    public function setLubanLiveSlidecartClickCnt(?string $lubanLiveSlidecartClickCnt): self
    {
        $this->lubanLiveSlidecartClickCnt = $lubanLiveSlidecartClickCnt;
        return $this;
    }

    /**
     * 鲁班订单量
     * @return string
     */
    public function getLubanOrderCnt(): ?string
    {
        return $this->lubanOrderCnt;
    }

    /**
     * 鲁班订单量
     * @param string $lubanOrderCnt
     * @return self
     */
    public function setLubanOrderCnt(?string $lubanOrderCnt): self
    {
        $this->lubanOrderCnt = $lubanOrderCnt;
        return $this;
    }

    /**
     * 鲁班订单ROI
     * @return string
     */
    public function getLubanOrderRoi(): ?string
    {
        return $this->lubanOrderRoi;
    }

    /**
     * 鲁班订单ROI
     * @param string $lubanOrderRoi
     * @return self
     */
    public function setLubanOrderRoi(?string $lubanOrderRoi): self
    {
        $this->lubanOrderRoi = $lubanOrderRoi;
        return $this;
    }

    /**
     * 鲁班订单金额
     * @return string
     */
    public function getLubanOrderStatAmount(): ?string
    {
        return $this->lubanOrderStatAmount;
    }

    /**
     * 鲁班订单金额
     * @param string $lubanOrderStatAmount
     * @return self
     */
    public function setLubanOrderStatAmount(?string $lubanOrderStatAmount): self
    {
        $this->lubanOrderStatAmount = $lubanOrderStatAmount;
        return $this;
    }

    /**
     * 主素材点击数
     * @return string
     */
    public function getMainMaterialClickCount(): ?string
    {
        return $this->mainMaterialClickCount;
    }

    /**
     * 主素材点击数
     * @param string $mainMaterialClickCount
     * @return self
     */
    public function setMainMaterialClickCount(?string $mainMaterialClickCount): self
    {
        $this->mainMaterialClickCount = $mainMaterialClickCount;
        return $this;
    }

    /**
     * 私信数
     * @return string
     */
    public function getMessageAction(): ?string
    {
        return $this->messageAction;
    }

    /**
     * 私信数
     * @param string $messageAction
     * @return self
     */
    public function setMessageAction(?string $messageAction): self
    {
        $this->messageAction = $messageAction;
        return $this;
    }

    /**
     * 外跳模块点击数
     * @return string
     */
    public function getOutsideJumpAreaClickCount(): ?string
    {
        return $this->outsideJumpAreaClickCount;
    }

    /**
     * 外跳模块点击数
     * @param string $outsideJumpAreaClickCount
     * @return self
     */
    public function setOutsideJumpAreaClickCount(?string $outsideJumpAreaClickCount): self
    {
        $this->outsideJumpAreaClickCount = $outsideJumpAreaClickCount;
        return $this;
    }

    /**
     * 25%进度播放数
     * @return string
     */
    public function getPlay25FeedBreak(): ?string
    {
        return $this->play25FeedBreak;
    }

    /**
     * 25%进度播放数
     * @param string $play25FeedBreak
     * @return self
     */
    public function setPlay25FeedBreak(?string $play25FeedBreak): self
    {
        $this->play25FeedBreak = $play25FeedBreak;
        return $this;
    }

    /**
     * 50%进度播放数
     * @return string
     */
    public function getPlay50FeedBreak(): ?string
    {
        return $this->play50FeedBreak;
    }

    /**
     * 50%进度播放数
     * @param string $play50FeedBreak
     * @return self
     */
    public function setPlay50FeedBreak(?string $play50FeedBreak): self
    {
        $this->play50FeedBreak = $play50FeedBreak;
        return $this;
    }

    /**
     * 75%进度播放数
     * @return string
     */
    public function getPlay75FeedBreak(): ?string
    {
        return $this->play75FeedBreak;
    }

    /**
     * 75%进度播放数
     * @param string $play75FeedBreak
     * @return self
     */
    public function setPlay75FeedBreak(?string $play75FeedBreak): self
    {
        $this->play75FeedBreak = $play75FeedBreak;
        return $this;
    }

    /**
     * 99%进度播放数
     * @return string
     */
    public function getPlay99FeedBreak(): ?string
    {
        return $this->play99FeedBreak;
    }

    /**
     * 99%进度播放数
     * @param string $play99FeedBreak
     * @return self
     */
    public function setPlay99FeedBreak(?string $play99FeedBreak): self
    {
        $this->play99FeedBreak = $play99FeedBreak;
        return $this;
    }

    /**
     * 完播率
     * @return string
     */
    public function getPlayOverRate(): ?string
    {
        return $this->playOverRate;
    }

    /**
     * 完播率
     * @param string $playOverRate
     * @return self
     */
    public function setPlayOverRate(?string $playOverRate): self
    {
        $this->playOverRate = $playOverRate;
        return $this;
    }

    /**
     * 门店浏览次数
     * @return string
     */
    public function getPoiHomepageViewCount(): ?string
    {
        return $this->poiHomepageViewCount;
    }

    /**
     * 门店浏览次数
     * @param string $poiHomepageViewCount
     * @return self
     */
    public function setPoiHomepageViewCount(?string $poiHomepageViewCount): self
    {
        $this->poiHomepageViewCount = $poiHomepageViewCount;
        return $this;
    }

    /**
     * 品专总点击数
     * @return string
     */
    public function getSearchBrandTotalClickCount(): ?string
    {
        return $this->searchBrandTotalClickCount;
    }

    /**
     * 品专总点击数
     * @param string $searchBrandTotalClickCount
     * @return self
     */
    public function setSearchBrandTotalClickCount(?string $searchBrandTotalClickCount): self
    {
        $this->searchBrandTotalClickCount = $searchBrandTotalClickCount;
        return $this;
    }

    /**
     * 品专总点击率
     * @return string
     */
    public function getSearchBrandTotalCtr(): ?string
    {
        return $this->searchBrandTotalCtr;
    }

    /**
     * 品专总点击率
     * @param string $searchBrandTotalCtr
     * @return self
     */
    public function setSearchBrandTotalCtr(?string $searchBrandTotalCtr): self
    {
        $this->searchBrandTotalCtr = $searchBrandTotalCtr;
        return $this;
    }

    /**
     * 店铺访问量
     * @return string
     */
    public function getShopVisitedCount(): ?string
    {
        return $this->shopVisitedCount;
    }

    /**
     * 店铺访问量
     * @param string $shopVisitedCount
     * @return self
     */
    public function setShopVisitedCount(?string $shopVisitedCount): self
    {
        $this->shopVisitedCount = $shopVisitedCount;
        return $this;
    }

    /**
     * 展示数
     * @return string
     */
    public function getShowCnt(): ?string
    {
        return $this->showCnt;
    }

    /**
     * 展示数
     * @param string $showCnt
     * @return self
     */
    public function setShowCnt(?string $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * 消耗
     * @return string
     */
    public function getStatCost(): ?string
    {
        return $this->statCost;
    }

    /**
     * 消耗
     * @param string $statCost
     * @return self
     */
    public function setStatCost(?string $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * 子链点击数
     * @return string
     */
    public function getSubchainClickCount(): ?string
    {
        return $this->subchainClickCount;
    }

    /**
     * 子链点击数
     * @param string $subchainClickCount
     * @return self
     */
    public function setSubchainClickCount(?string $subchainClickCount): self
    {
        $this->subchainClickCount = $subchainClickCount;
        return $this;
    }

    /**
     * 超级品专话题点击数
     * @return string
     */
    public function getSuperBrandTopicClickCount(): ?string
    {
        return $this->superBrandTopicClickCount;
    }

    /**
     * 超级品专话题点击数
     * @param string $superBrandTopicClickCount
     * @return self
     */
    public function setSuperBrandTopicClickCount(?string $superBrandTopicClickCount): self
    {
        $this->superBrandTopicClickCount = $superBrandTopicClickCount;
        return $this;
    }

    /**
     * 超级品专视频卡点击数
     * @return string
     */
    public function getSuperBrandVideocardClickCount(): ?string
    {
        return $this->superBrandVideocardClickCount;
    }

    /**
     * 超级品专视频卡点击数
     * @param string $superBrandVideocardClickCount
     * @return self
     */
    public function setSuperBrandVideocardClickCount(?string $superBrandVideocardClickCount): self
    {
        $this->superBrandVideocardClickCount = $superBrandVideocardClickCount;
        return $this;
    }

    /**
     * 播放数
     * @return string
     */
    public function getTotalPlay(): ?string
    {
        return $this->totalPlay;
    }

    /**
     * 播放数
     * @param string $totalPlay
     * @return self
     */
    public function setTotalPlay(?string $totalPlay): self
    {
        $this->totalPlay = $totalPlay;
        return $this;
    }

    /**
     * 有效播放数
     * @return string
     */
    public function getValidPlay(): ?string
    {
        return $this->validPlay;
    }

    /**
     * 有效播放数
     * @param string $validPlay
     * @return self
     */
    public function setValidPlay(?string $validPlay): self
    {
        $this->validPlay = $validPlay;
        return $this;
    }

    /**
     * 有效播放成本
     * @return string
     */
    public function getValidPlayCost(): ?string
    {
        return $this->validPlayCost;
    }

    /**
     * 有效播放成本
     * @param string $validPlayCost
     * @return self
     */
    public function setValidPlayCost(?string $validPlayCost): self
    {
        $this->validPlayCost = $validPlayCost;
        return $this;
    }

    /**
     * 千次有效播放成本
     * @return string
     */
    public function getValidPlayCostOfMille(): ?string
    {
        return $this->validPlayCostOfMille;
    }

    /**
     * 千次有效播放成本
     * @param string $validPlayCostOfMille
     * @return self
     */
    public function setValidPlayCostOfMille(?string $validPlayCostOfMille): self
    {
        $this->validPlayCostOfMille = $validPlayCostOfMille;
        return $this;
    }

    /**
     * 千次有效播放数
     * @return string
     */
    public function getValidPlayOfMille(): ?string
    {
        return $this->validPlayOfMille;
    }

    /**
     * 千次有效播放数
     * @param string $validPlayOfMille
     * @return self
     */
    public function setValidPlayOfMille(?string $validPlayOfMille): self
    {
        $this->validPlayOfMille = $validPlayOfMille;
        return $this;
    }

    /**
     * 有效播放率
     * @return string
     */
    public function getValidPlayRate(): ?string
    {
        return $this->validPlayRate;
    }

    /**
     * 有效播放率
     * @param string $validPlayRate
     * @return self
     */
    public function setValidPlayRate(?string $validPlayRate): self
    {
        $this->validPlayRate = $validPlayRate;
        return $this;
    }

    /**
     * WIFI播放占比
     * @return string
     */
    public function getWifiPlayRate(): ?string
    {
        return $this->wifiPlayRate;
    }

    /**
     * WIFI播放占比
     * @param string $wifiPlayRate
     * @return self
     */
    public function setWifiPlayRate(?string $wifiPlayRate): self
    {
        $this->wifiPlayRate = $wifiPlayRate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activityBannerClickCount !== null) {
            $result['activity_banner_click_count'] = $this->activityBannerClickCount;
        }
        if ($this->attachCreativeClickCnt !== null) {
            $result['attach_creative_click_cnt'] = $this->attachCreativeClickCnt;
        }
        if ($this->attachCreativeShowCnt !== null) {
            $result['attach_creative_show_cnt'] = $this->attachCreativeShowCnt;
        }
        if ($this->averagePlayTimePerPlay !== null) {
            $result['average_play_time_per_play'] = $this->averagePlayTimePerPlay;
        }
        if ($this->brandAllOrderPayAverageAmount7days !== null) {
            $result['brand_all_order_pay_average_amount_7days'] = $this->brandAllOrderPayAverageAmount7days;
        }
        if ($this->brandAllOrderPayCount7days !== null) {
            $result['brand_all_order_pay_count_7days'] = $this->brandAllOrderPayCount7days;
        }
        if ($this->brandAllOrderPayGmv7days !== null) {
            $result['brand_all_order_pay_gmv_7days'] = $this->brandAllOrderPayGmv7days;
        }
        if ($this->brandIndirectOrderPayCount7days !== null) {
            $result['brand_indirect_order_pay_count_7days'] = $this->brandIndirectOrderPayCount7days;
        }
        if ($this->brandIndirectOrderPayGmv7days !== null) {
            $result['brand_indirect_order_pay_gmv_7days'] = $this->brandIndirectOrderPayGmv7days;
        }
        if ($this->cardShow !== null) {
            $result['card_show'] = $this->cardShow;
        }
        if ($this->clickCallCnt !== null) {
            $result['click_call_cnt'] = $this->clickCallCnt;
        }
        if ($this->clickCallDy !== null) {
            $result['click_call_dy'] = $this->clickCallDy;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->clickCounsel !== null) {
            $result['click_counsel'] = $this->clickCounsel;
        }
        if ($this->clickDownload !== null) {
            $result['click_download'] = $this->clickDownload;
        }
        if ($this->clickLandingPage !== null) {
            $result['click_landing_page'] = $this->clickLandingPage;
        }
        if ($this->clickShopwindow !== null) {
            $result['click_shopwindow'] = $this->clickShopwindow;
        }
        if ($this->clickWebsite !== null) {
            $result['click_website'] = $this->clickWebsite;
        }
        if ($this->conversionCost !== null) {
            $result['conversion_cost'] = $this->conversionCost;
        }
        if ($this->conversionRate !== null) {
            $result['conversion_rate'] = $this->conversionRate;
        }
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->couponAddition !== null) {
            $result['coupon_addition'] = $this->couponAddition;
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
        if ($this->dyHomeVisited !== null) {
            $result['dy_home_visited'] = $this->dyHomeVisited;
        }
        if ($this->dyLike !== null) {
            $result['dy_like'] = $this->dyLike;
        }
        if ($this->dyShare !== null) {
            $result['dy_share'] = $this->dyShare;
        }
        if ($this->fansDyCommentCount !== null) {
            $result['fans_dy_comment_count'] = $this->fansDyCommentCount;
        }
        if ($this->fansDyLikeCount !== null) {
            $result['fans_dy_like_count'] = $this->fansDyLikeCount;
        }
        if ($this->fansHomeVisitedCount !== null) {
            $result['fans_home_visited_count'] = $this->fansHomeVisitedCount;
        }
        if ($this->fansLubanLiveCommentCount !== null) {
            $result['fans_luban_live_comment_count'] = $this->fansLubanLiveCommentCount;
        }
        if ($this->fansLubanLiveEnterCount !== null) {
            $result['fans_luban_live_enter_count'] = $this->fansLubanLiveEnterCount;
        }
        if ($this->fansLubanLiveGiftAmount !== null) {
            $result['fans_luban_live_gift_amount'] = $this->fansLubanLiveGiftAmount;
        }
        if ($this->fansLubanLivePayOrderStatCost !== null) {
            $result['fans_luban_live_pay_order_stat_cost'] = $this->fansLubanLivePayOrderStatCost;
        }
        if ($this->fansLubanLiveSlidecartClickCount !== null) {
            $result['fans_luban_live_slidecart_click_count'] = $this->fansLubanLiveSlidecartClickCount;
        }
        if ($this->fansVideoPlayCount !== null) {
            $result['fans_video_play_count'] = $this->fansVideoPlayCount;
        }
        if ($this->fansVideoShareCount !== null) {
            $result['fans_video_share_count'] = $this->fansVideoShareCount;
        }
        if ($this->formClickButton !== null) {
            $result['form_click_button'] = $this->formClickButton;
        }
        if ($this->iesChallengeClick !== null) {
            $result['ies_challenge_click'] = $this->iesChallengeClick;
        }
        if ($this->iesMusicClick !== null) {
            $result['ies_music_click'] = $this->iesMusicClick;
        }
        if ($this->liveAppointCount !== null) {
            $result['live_appoint_count'] = $this->liveAppointCount;
        }
        if ($this->liveComponentClickCost !== null) {
            $result['live_component_click_cost'] = $this->liveComponentClickCost;
        }
        if ($this->liveComponentClickCount !== null) {
            $result['live_component_click_count'] = $this->liveComponentClickCount;
        }
        if ($this->liveComponentClickRate !== null) {
            $result['live_component_click_rate'] = $this->liveComponentClickRate;
        }
        if ($this->liveFansClubJoinCnt !== null) {
            $result['live_fans_club_join_cnt'] = $this->liveFansClubJoinCnt;
        }
        if ($this->liveGrouponProductClickCount !== null) {
            $result['live_groupon_product_click_count'] = $this->liveGrouponProductClickCount;
        }
        if ($this->livePayOrderCostPerOrder !== null) {
            $result['live_pay_order_cost_per_order'] = $this->livePayOrderCostPerOrder;
        }
        if ($this->livePayOrderCostPerOrderByAuthor15days !== null) {
            $result['live_pay_order_cost_per_order_by_author_15days'] = $this->livePayOrderCostPerOrderByAuthor15days;
        }
        if ($this->livePayOrderCostPerOrderByAuthor30days !== null) {
            $result['live_pay_order_cost_per_order_by_author_30days'] = $this->livePayOrderCostPerOrderByAuthor30days;
        }
        if ($this->livePayOrderCostPerOrderByAuthor3days !== null) {
            $result['live_pay_order_cost_per_order_by_author_3days'] = $this->livePayOrderCostPerOrderByAuthor3days;
        }
        if ($this->livePayOrderCostPerOrderByAuthor7days !== null) {
            $result['live_pay_order_cost_per_order_by_author_7days'] = $this->livePayOrderCostPerOrderByAuthor7days;
        }
        if ($this->liveWatchOneMinuteCount !== null) {
            $result['live_watch_one_minute_count'] = $this->liveWatchOneMinuteCount;
        }
        if ($this->locationClick !== null) {
            $result['location_click'] = $this->locationClick;
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
        if ($this->lubanLivePayOrderCount !== null) {
            $result['luban_live_pay_order_count'] = $this->lubanLivePayOrderCount;
        }
        if ($this->lubanLivePayOrderCountByAuthor15days !== null) {
            $result['luban_live_pay_order_count_by_author_15days'] = $this->lubanLivePayOrderCountByAuthor15days;
        }
        if ($this->lubanLivePayOrderCountByAuthor30Days !== null) {
            $result['luban_live_pay_order_count_by_author_30_days'] = $this->lubanLivePayOrderCountByAuthor30Days;
        }
        if ($this->lubanLivePayOrderCountByAuthor3days !== null) {
            $result['luban_live_pay_order_count_by_author_3days'] = $this->lubanLivePayOrderCountByAuthor3days;
        }
        if ($this->lubanLivePayOrderCountByAuthor7days !== null) {
            $result['luban_live_pay_order_count_by_author_7days'] = $this->lubanLivePayOrderCountByAuthor7days;
        }
        if ($this->lubanLivePayOrderStatCost !== null) {
            $result['luban_live_pay_order_stat_cost'] = $this->lubanLivePayOrderStatCost;
        }
        if ($this->lubanLivePayOrderStatCostByAuthor15days !== null) {
            $result['luban_live_pay_order_stat_cost_by_author_15days'] = $this->lubanLivePayOrderStatCostByAuthor15days;
        }
        if ($this->lubanLivePayOrderStatCostByAuthor30days !== null) {
            $result['luban_live_pay_order_stat_cost_by_author_30days'] = $this->lubanLivePayOrderStatCostByAuthor30days;
        }
        if ($this->lubanLivePayOrderStatCostByAuthor3days !== null) {
            $result['luban_live_pay_order_stat_cost_by_author_3days'] = $this->lubanLivePayOrderStatCostByAuthor3days;
        }
        if ($this->lubanLivePayOrderStatCostByAuthor7days !== null) {
            $result['luban_live_pay_order_stat_cost_by_author_7days'] = $this->lubanLivePayOrderStatCostByAuthor7days;
        }
        if ($this->lubanLiveShareCnt !== null) {
            $result['luban_live_share_cnt'] = $this->lubanLiveShareCnt;
        }
        if ($this->lubanLiveSlidecartClickCnt !== null) {
            $result['luban_live_slidecart_click_cnt'] = $this->lubanLiveSlidecartClickCnt;
        }
        if ($this->lubanOrderCnt !== null) {
            $result['luban_order_cnt'] = $this->lubanOrderCnt;
        }
        if ($this->lubanOrderRoi !== null) {
            $result['luban_order_roi'] = $this->lubanOrderRoi;
        }
        if ($this->lubanOrderStatAmount !== null) {
            $result['luban_order_stat_amount'] = $this->lubanOrderStatAmount;
        }
        if ($this->mainMaterialClickCount !== null) {
            $result['main_material_click_count'] = $this->mainMaterialClickCount;
        }
        if ($this->messageAction !== null) {
            $result['message_action'] = $this->messageAction;
        }
        if ($this->outsideJumpAreaClickCount !== null) {
            $result['outside_jump_area_click_count'] = $this->outsideJumpAreaClickCount;
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
        if ($this->play99FeedBreak !== null) {
            $result['play_99_feed_break'] = $this->play99FeedBreak;
        }
        if ($this->playOverRate !== null) {
            $result['play_over_rate'] = $this->playOverRate;
        }
        if ($this->poiHomepageViewCount !== null) {
            $result['poi_homepage_view_count'] = $this->poiHomepageViewCount;
        }
        if ($this->searchBrandTotalClickCount !== null) {
            $result['search_brand_total_click_count'] = $this->searchBrandTotalClickCount;
        }
        if ($this->searchBrandTotalCtr !== null) {
            $result['search_brand_total_ctr'] = $this->searchBrandTotalCtr;
        }
        if ($this->shopVisitedCount !== null) {
            $result['shop_visited_count'] = $this->shopVisitedCount;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->subchainClickCount !== null) {
            $result['subchain_click_count'] = $this->subchainClickCount;
        }
        if ($this->superBrandTopicClickCount !== null) {
            $result['super_brand_topic_click_count'] = $this->superBrandTopicClickCount;
        }
        if ($this->superBrandVideocardClickCount !== null) {
            $result['super_brand_videocard_click_count'] = $this->superBrandVideocardClickCount;
        }
        if ($this->totalPlay !== null) {
            $result['total_play'] = $this->totalPlay;
        }
        if ($this->validPlay !== null) {
            $result['valid_play'] = $this->validPlay;
        }
        if ($this->validPlayCost !== null) {
            $result['valid_play_cost'] = $this->validPlayCost;
        }
        if ($this->validPlayCostOfMille !== null) {
            $result['valid_play_cost_of_mille'] = $this->validPlayCostOfMille;
        }
        if ($this->validPlayOfMille !== null) {
            $result['valid_play_of_mille'] = $this->validPlayOfMille;
        }
        if ($this->validPlayRate !== null) {
            $result['valid_play_rate'] = $this->validPlayRate;
        }
        if ($this->wifiPlayRate !== null) {
            $result['wifi_play_rate'] = $this->wifiPlayRate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_banner_click_count'] ?? null) !== null) {
            $obj->activityBannerClickCount = (string) $v;
        }
        if (($v = $data['attach_creative_click_cnt'] ?? null) !== null) {
            $obj->attachCreativeClickCnt = (string) $v;
        }
        if (($v = $data['attach_creative_show_cnt'] ?? null) !== null) {
            $obj->attachCreativeShowCnt = (string) $v;
        }
        if (($v = $data['average_play_time_per_play'] ?? null) !== null) {
            $obj->averagePlayTimePerPlay = (string) $v;
        }
        if (($v = $data['brand_all_order_pay_average_amount_7days'] ?? null) !== null) {
            $obj->brandAllOrderPayAverageAmount7days = (string) $v;
        }
        if (($v = $data['brand_all_order_pay_count_7days'] ?? null) !== null) {
            $obj->brandAllOrderPayCount7days = (string) $v;
        }
        if (($v = $data['brand_all_order_pay_gmv_7days'] ?? null) !== null) {
            $obj->brandAllOrderPayGmv7days = (string) $v;
        }
        if (($v = $data['brand_indirect_order_pay_count_7days'] ?? null) !== null) {
            $obj->brandIndirectOrderPayCount7days = (string) $v;
        }
        if (($v = $data['brand_indirect_order_pay_gmv_7days'] ?? null) !== null) {
            $obj->brandIndirectOrderPayGmv7days = (string) $v;
        }
        if (($v = $data['card_show'] ?? null) !== null) {
            $obj->cardShow = (string) $v;
        }
        if (($v = $data['click_call_cnt'] ?? null) !== null) {
            $obj->clickCallCnt = (string) $v;
        }
        if (($v = $data['click_call_dy'] ?? null) !== null) {
            $obj->clickCallDy = (string) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (string) $v;
        }
        if (($v = $data['click_counsel'] ?? null) !== null) {
            $obj->clickCounsel = (string) $v;
        }
        if (($v = $data['click_download'] ?? null) !== null) {
            $obj->clickDownload = (string) $v;
        }
        if (($v = $data['click_landing_page'] ?? null) !== null) {
            $obj->clickLandingPage = (string) $v;
        }
        if (($v = $data['click_shopwindow'] ?? null) !== null) {
            $obj->clickShopwindow = (string) $v;
        }
        if (($v = $data['click_website'] ?? null) !== null) {
            $obj->clickWebsite = (string) $v;
        }
        if (($v = $data['conversion_cost'] ?? null) !== null) {
            $obj->conversionCost = (string) $v;
        }
        if (($v = $data['conversion_rate'] ?? null) !== null) {
            $obj->conversionRate = (string) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (string) $v;
        }
        if (($v = $data['coupon_addition'] ?? null) !== null) {
            $obj->couponAddition = (string) $v;
        }
        if (($v = $data['cpc_platform'] ?? null) !== null) {
            $obj->cpcPlatform = (string) $v;
        }
        if (($v = $data['cpm_platform'] ?? null) !== null) {
            $obj->cpmPlatform = (string) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (string) $v;
        }
        if (($v = $data['deep_convert_cnt'] ?? null) !== null) {
            $obj->deepConvertCnt = (string) $v;
        }
        if (($v = $data['deep_convert_cost'] ?? null) !== null) {
            $obj->deepConvertCost = (string) $v;
        }
        if (($v = $data['deep_convert_rate'] ?? null) !== null) {
            $obj->deepConvertRate = (string) $v;
        }
        if (($v = $data['dy_comment'] ?? null) !== null) {
            $obj->dyComment = (string) $v;
        }
        if (($v = $data['dy_follow'] ?? null) !== null) {
            $obj->dyFollow = (string) $v;
        }
        if (($v = $data['dy_home_visited'] ?? null) !== null) {
            $obj->dyHomeVisited = (string) $v;
        }
        if (($v = $data['dy_like'] ?? null) !== null) {
            $obj->dyLike = (string) $v;
        }
        if (($v = $data['dy_share'] ?? null) !== null) {
            $obj->dyShare = (string) $v;
        }
        if (($v = $data['fans_dy_comment_count'] ?? null) !== null) {
            $obj->fansDyCommentCount = (string) $v;
        }
        if (($v = $data['fans_dy_like_count'] ?? null) !== null) {
            $obj->fansDyLikeCount = (string) $v;
        }
        if (($v = $data['fans_home_visited_count'] ?? null) !== null) {
            $obj->fansHomeVisitedCount = (string) $v;
        }
        if (($v = $data['fans_luban_live_comment_count'] ?? null) !== null) {
            $obj->fansLubanLiveCommentCount = (string) $v;
        }
        if (($v = $data['fans_luban_live_enter_count'] ?? null) !== null) {
            $obj->fansLubanLiveEnterCount = (string) $v;
        }
        if (($v = $data['fans_luban_live_gift_amount'] ?? null) !== null) {
            $obj->fansLubanLiveGiftAmount = (string) $v;
        }
        if (($v = $data['fans_luban_live_pay_order_stat_cost'] ?? null) !== null) {
            $obj->fansLubanLivePayOrderStatCost = (string) $v;
        }
        if (($v = $data['fans_luban_live_slidecart_click_count'] ?? null) !== null) {
            $obj->fansLubanLiveSlidecartClickCount = (string) $v;
        }
        if (($v = $data['fans_video_play_count'] ?? null) !== null) {
            $obj->fansVideoPlayCount = (string) $v;
        }
        if (($v = $data['fans_video_share_count'] ?? null) !== null) {
            $obj->fansVideoShareCount = (string) $v;
        }
        if (($v = $data['form_click_button'] ?? null) !== null) {
            $obj->formClickButton = (string) $v;
        }
        if (($v = $data['ies_challenge_click'] ?? null) !== null) {
            $obj->iesChallengeClick = (string) $v;
        }
        if (($v = $data['ies_music_click'] ?? null) !== null) {
            $obj->iesMusicClick = (string) $v;
        }
        if (($v = $data['live_appoint_count'] ?? null) !== null) {
            $obj->liveAppointCount = (string) $v;
        }
        if (($v = $data['live_component_click_cost'] ?? null) !== null) {
            $obj->liveComponentClickCost = (string) $v;
        }
        if (($v = $data['live_component_click_count'] ?? null) !== null) {
            $obj->liveComponentClickCount = (string) $v;
        }
        if (($v = $data['live_component_click_rate'] ?? null) !== null) {
            $obj->liveComponentClickRate = (string) $v;
        }
        if (($v = $data['live_fans_club_join_cnt'] ?? null) !== null) {
            $obj->liveFansClubJoinCnt = (string) $v;
        }
        if (($v = $data['live_groupon_product_click_count'] ?? null) !== null) {
            $obj->liveGrouponProductClickCount = (string) $v;
        }
        if (($v = $data['live_pay_order_cost_per_order'] ?? null) !== null) {
            $obj->livePayOrderCostPerOrder = (string) $v;
        }
        if (($v = $data['live_pay_order_cost_per_order_by_author_15days'] ?? null) !== null) {
            $obj->livePayOrderCostPerOrderByAuthor15days = (string) $v;
        }
        if (($v = $data['live_pay_order_cost_per_order_by_author_30days'] ?? null) !== null) {
            $obj->livePayOrderCostPerOrderByAuthor30days = (string) $v;
        }
        if (($v = $data['live_pay_order_cost_per_order_by_author_3days'] ?? null) !== null) {
            $obj->livePayOrderCostPerOrderByAuthor3days = (string) $v;
        }
        if (($v = $data['live_pay_order_cost_per_order_by_author_7days'] ?? null) !== null) {
            $obj->livePayOrderCostPerOrderByAuthor7days = (string) $v;
        }
        if (($v = $data['live_watch_one_minute_count'] ?? null) !== null) {
            $obj->liveWatchOneMinuteCount = (string) $v;
        }
        if (($v = $data['location_click'] ?? null) !== null) {
            $obj->locationClick = (string) $v;
        }
        if (($v = $data['luban_live_click_product_cnt'] ?? null) !== null) {
            $obj->lubanLiveClickProductCnt = (string) $v;
        }
        if (($v = $data['luban_live_comment_cnt'] ?? null) !== null) {
            $obj->lubanLiveCommentCnt = (string) $v;
        }
        if (($v = $data['luban_live_enter_cnt'] ?? null) !== null) {
            $obj->lubanLiveEnterCnt = (string) $v;
        }
        if (($v = $data['luban_live_follow_cnt'] ?? null) !== null) {
            $obj->lubanLiveFollowCnt = (string) $v;
        }
        if (($v = $data['luban_live_gift_amount'] ?? null) !== null) {
            $obj->lubanLiveGiftAmount = (string) $v;
        }
        if (($v = $data['luban_live_gift_cnt'] ?? null) !== null) {
            $obj->lubanLiveGiftCnt = (string) $v;
        }
        if (($v = $data['luban_live_pay_order_count'] ?? null) !== null) {
            $obj->lubanLivePayOrderCount = (string) $v;
        }
        if (($v = $data['luban_live_pay_order_count_by_author_15days'] ?? null) !== null) {
            $obj->lubanLivePayOrderCountByAuthor15days = (string) $v;
        }
        if (($v = $data['luban_live_pay_order_count_by_author_30_days'] ?? null) !== null) {
            $obj->lubanLivePayOrderCountByAuthor30Days = (string) $v;
        }
        if (($v = $data['luban_live_pay_order_count_by_author_3days'] ?? null) !== null) {
            $obj->lubanLivePayOrderCountByAuthor3days = (string) $v;
        }
        if (($v = $data['luban_live_pay_order_count_by_author_7days'] ?? null) !== null) {
            $obj->lubanLivePayOrderCountByAuthor7days = (string) $v;
        }
        if (($v = $data['luban_live_pay_order_stat_cost'] ?? null) !== null) {
            $obj->lubanLivePayOrderStatCost = (string) $v;
        }
        if (($v = $data['luban_live_pay_order_stat_cost_by_author_15days'] ?? null) !== null) {
            $obj->lubanLivePayOrderStatCostByAuthor15days = (string) $v;
        }
        if (($v = $data['luban_live_pay_order_stat_cost_by_author_30days'] ?? null) !== null) {
            $obj->lubanLivePayOrderStatCostByAuthor30days = (string) $v;
        }
        if (($v = $data['luban_live_pay_order_stat_cost_by_author_3days'] ?? null) !== null) {
            $obj->lubanLivePayOrderStatCostByAuthor3days = (string) $v;
        }
        if (($v = $data['luban_live_pay_order_stat_cost_by_author_7days'] ?? null) !== null) {
            $obj->lubanLivePayOrderStatCostByAuthor7days = (string) $v;
        }
        if (($v = $data['luban_live_share_cnt'] ?? null) !== null) {
            $obj->lubanLiveShareCnt = (string) $v;
        }
        if (($v = $data['luban_live_slidecart_click_cnt'] ?? null) !== null) {
            $obj->lubanLiveSlidecartClickCnt = (string) $v;
        }
        if (($v = $data['luban_order_cnt'] ?? null) !== null) {
            $obj->lubanOrderCnt = (string) $v;
        }
        if (($v = $data['luban_order_roi'] ?? null) !== null) {
            $obj->lubanOrderRoi = (string) $v;
        }
        if (($v = $data['luban_order_stat_amount'] ?? null) !== null) {
            $obj->lubanOrderStatAmount = (string) $v;
        }
        if (($v = $data['main_material_click_count'] ?? null) !== null) {
            $obj->mainMaterialClickCount = (string) $v;
        }
        if (($v = $data['message_action'] ?? null) !== null) {
            $obj->messageAction = (string) $v;
        }
        if (($v = $data['outside_jump_area_click_count'] ?? null) !== null) {
            $obj->outsideJumpAreaClickCount = (string) $v;
        }
        if (($v = $data['play_25_feed_break'] ?? null) !== null) {
            $obj->play25FeedBreak = (string) $v;
        }
        if (($v = $data['play_50_feed_break'] ?? null) !== null) {
            $obj->play50FeedBreak = (string) $v;
        }
        if (($v = $data['play_75_feed_break'] ?? null) !== null) {
            $obj->play75FeedBreak = (string) $v;
        }
        if (($v = $data['play_99_feed_break'] ?? null) !== null) {
            $obj->play99FeedBreak = (string) $v;
        }
        if (($v = $data['play_over_rate'] ?? null) !== null) {
            $obj->playOverRate = (string) $v;
        }
        if (($v = $data['poi_homepage_view_count'] ?? null) !== null) {
            $obj->poiHomepageViewCount = (string) $v;
        }
        if (($v = $data['search_brand_total_click_count'] ?? null) !== null) {
            $obj->searchBrandTotalClickCount = (string) $v;
        }
        if (($v = $data['search_brand_total_ctr'] ?? null) !== null) {
            $obj->searchBrandTotalCtr = (string) $v;
        }
        if (($v = $data['shop_visited_count'] ?? null) !== null) {
            $obj->shopVisitedCount = (string) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (string) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (string) $v;
        }
        if (($v = $data['subchain_click_count'] ?? null) !== null) {
            $obj->subchainClickCount = (string) $v;
        }
        if (($v = $data['super_brand_topic_click_count'] ?? null) !== null) {
            $obj->superBrandTopicClickCount = (string) $v;
        }
        if (($v = $data['super_brand_videocard_click_count'] ?? null) !== null) {
            $obj->superBrandVideocardClickCount = (string) $v;
        }
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (string) $v;
        }
        if (($v = $data['valid_play'] ?? null) !== null) {
            $obj->validPlay = (string) $v;
        }
        if (($v = $data['valid_play_cost'] ?? null) !== null) {
            $obj->validPlayCost = (string) $v;
        }
        if (($v = $data['valid_play_cost_of_mille'] ?? null) !== null) {
            $obj->validPlayCostOfMille = (string) $v;
        }
        if (($v = $data['valid_play_of_mille'] ?? null) !== null) {
            $obj->validPlayOfMille = (string) $v;
        }
        if (($v = $data['valid_play_rate'] ?? null) !== null) {
            $obj->validPlayRate = (string) $v;
        }
        if (($v = $data['wifi_play_rate'] ?? null) !== null) {
            $obj->wifiPlayRate = (string) $v;
        }
        return $obj;
    }
}
