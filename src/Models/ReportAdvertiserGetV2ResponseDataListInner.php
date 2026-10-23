<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAdvertiserGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListAc
     */
    protected ?string $ac = null;

    /**
     * @var int
     */
    protected ?int $active = null;

    /**
     * @var float
     */
    protected ?float $activeCost = null;

    /**
     * @var int
     */
    protected ?int $activePayAmount = null;

    /**
     * @var float
     */
    protected ?float $activePayCost = null;

    /**
     * @var float
     */
    protected ?float $activePayRate = null;

    /**
     * @var float
     */
    protected ?float $activeRate = null;

    /**
     * @var float
     */
    protected ?float $activeRegisterCost = null;

    /**
     * @var float
     */
    protected ?float $activeRegisterRate = null;

    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var string
     */
    protected ?string $adName = null;

    /**
     * @var string
     */
    protected ?string $adTag = null;

    /**
     * @var int
     */
    protected ?int $advancedCreativeCounselClick = null;

    /**
     * @var int
     */
    protected ?int $advancedCreativeCouponAddition = null;

    /**
     * @var int
     */
    protected ?int $advancedCreativeFormClick = null;

    /**
     * @var int
     */
    protected ?int $advancedCreativeFormSubmit = null;

    /**
     * @var int
     */
    protected ?int $advancedCreativePhoneClick = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $age = null;

    /**
     * @var float
     */
    protected ?float $approvalCount = null;

    /**
     * @var float
     */
    protected ?float $attributionActivePay7dCost = null;

    /**
     * @var int
     */
    protected ?int $attributionActivePay7dCount = null;

    /**
     * @var int
     */
    protected ?int $attributionActivePay7dPerCount = null;

    /**
     * @var float
     */
    protected ?float $attributionActivePay7dRate = null;

    /**
     * @var float
     */
    protected ?float $attributionActivePayIntraOneDayAmount = null;

    /**
     * @var float
     */
    protected ?float $attributionActivePayIntraOneDayCost = null;

    /**
     * @var int
     */
    protected ?int $attributionActivePayIntraOneDayCount = null;

    /**
     * @var float
     */
    protected ?float $attributionActivePayIntraOneDayRate = null;

    /**
     * @var float
     */
    protected ?float $attributionActivePayIntraOneDayRoi = null;

    /**
     * @var int
     */
    protected ?int $attributionConvert = null;

    /**
     * @var float
     */
    protected ?float $attributionConvertCost = null;

    /**
     * @var int
     */
    protected ?int $attributionDayAcitvePayCount = null;

    /**
     * @var int
     */
    protected ?int $attributionDayActivePayCount = null;

    /**
     * @var int
     */
    protected ?int $attributionDeepConvert = null;

    /**
     * @var float
     */
    protected ?float $attributionDeepConvertCost = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppLtv1day = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppLtv2days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppLtv3days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppLtv4days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppLtv5days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppLtv6days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppLtv7days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppLtv8days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppRoi1day = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppRoi2days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppRoi3days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppRoi4days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppRoi5days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppRoi6days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppRoi7days = null;

    /**
     * @var float
     */
    protected ?float $attributionGameInAppRoi8days = null;

    /**
     * @var float
     */
    protected ?float $attributionGamePay7dCost = null;

    /**
     * @var int
     */
    protected ?int $attributionGamePay7dCount = null;

    /**
     * @var float
     */
    protected ?float $attributionMicroGame0dLtv = null;

    /**
     * @var float
     */
    protected ?float $attributionMicroGame0dRoi = null;

    /**
     * @var float
     */
    protected ?float $attributionMicroGame3dLtv = null;

    /**
     * @var float
     */
    protected ?float $attributionMicroGame3dRoi = null;

    /**
     * @var float
     */
    protected ?float $attributionMicroGame7dLtv = null;

    /**
     * @var float
     */
    protected ?float $attributionMicroGame7dRoi = null;

    /**
     * @var int
     */
    protected ?int $attributionNextDayOpenCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionNextDayOpenCost = null;

    /**
     * @var float
     */
    protected ?float $attributionNextDayOpenRate = null;

    /**
     * @var int
     */
    protected ?int $attributionRetention2dCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention2dCost = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention2dRate = null;

    /**
     * @var int
     */
    protected ?int $attributionRetention3dCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention3dCost = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention3dRate = null;

    /**
     * @var int
     */
    protected ?int $attributionRetention4dCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention4dCost = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention4dRate = null;

    /**
     * @var int
     */
    protected ?int $attributionRetention5dCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention5dCost = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention5dRate = null;

    /**
     * @var int
     */
    protected ?int $attributionRetention6dCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention6dCost = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention6dRate = null;

    /**
     * @var int
     */
    protected ?int $attributionRetention7dCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention7dCost = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention7dRate = null;

    /**
     * @var int
     */
    protected ?int $attributionRetention7dSumCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionRetention7dTotalCost = null;

    /**
     * @var float
     */
    protected ?float $attributionWechatFirstPay30dCost = null;

    /**
     * @var int
     */
    protected ?int $attributionWechatFirstPay30dCount = null;

    /**
     * @var float
     */
    protected ?float $attributionWechatFirstPay30dRate = null;

    /**
     * @var float
     */
    protected ?float $attributionWechatLogin30dCost = null;

    /**
     * @var int
     */
    protected ?int $attributionWechatLogin30dCount = null;

    /**
     * @var float
     */
    protected ?float $attributionWechatPay30dAmount = null;

    /**
     * @var float
     */
    protected ?float $attributionWechatPay30dRoi = null;

    /**
     * @var float
     */
    protected ?float $averagePlayProgress = null;

    /**
     * @var float
     */
    protected ?float $averagePlayTimePerPlay = null;

    /**
     * @var float
     */
    protected ?float $averageVideoPlay = null;

    /**
     * @var float
     */
    protected ?float $avgClickCost = null;

    /**
     * @var float
     */
    protected ?float $avgRank = null;

    /**
     * @var float
     */
    protected ?float $avgShowCost = null;

    /**
     * @var string
     */
    protected ?string $bidword = null;

    /**
     * @var int
     */
    protected ?int $bidwordId = null;

    /**
     * @var int
     */
    protected ?int $button = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var string
     */
    protected ?string $campaignName = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListCampaignType
     */
    protected ?string $campaignType = null;

    /**
     * @var int
     */
    protected ?int $cardShow = null;

    /**
     * @var string
     */
    protected ?string $cityName = null;

    /**
     * @var int
     */
    protected ?int $click = null;

    /**
     * @var int
     */
    protected ?int $clickCallDy = null;

    /**
     * @var int
     */
    protected ?int $clickDownload = null;

    /**
     * @var int
     */
    protected ?int $clickInstall = null;

    /**
     * @var int
     */
    protected ?int $clickLandingPage = null;

    /**
     * @var int
     */
    protected ?int $clickShopwindow = null;

    /**
     * @var int
     */
    protected ?int $clickWebsite = null;

    /**
     * @var int
     */
    protected ?int $comment = null;

    /**
     * @var float
     */
    protected ?float $commuteFirstPayCount = null;

    /**
     * @var int
     */
    protected ?int $consult = null;

    /**
     * @var int
     */
    protected ?int $consultEffective = null;

    /**
     * @var int
     */
    protected ?int $convert = null;

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
    protected ?float $convertShowRate = null;

    /**
     * @var float
     */
    protected ?float $cost = null;

    /**
     * @var int
     */
    protected ?int $coupon = null;

    /**
     * @var int
     */
    protected ?int $couponSinglePage = null;

    /**
     * @var float
     */
    protected ?float $cpa = null;

    /**
     * @var float
     */
    protected ?float $cpc = null;

    /**
     * @var float
     */
    protected ?float $cpm = null;

    /**
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListCreativeMaterialMode
     */
    protected ?string $creativeMaterialMode = null;

    /**
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * @var int
     */
    protected ?int $customerEffective = null;

    /**
     * @var int
     */
    protected ?int $deepConvert = null;

    /**
     * @var float
     */
    protected ?float $deepConvertCost = null;

    /**
     * @var float
     */
    protected ?float $deepConvertRate = null;

    /**
     * @var int
     */
    protected ?int $dislike = null;

    /**
     * @var int
     */
    protected ?int $download = null;

    /**
     * @var int
     */
    protected ?int $downloadFinish = null;

    /**
     * @var float
     */
    protected ?float $downloadFinishCost = null;

    /**
     * @var float
     */
    protected ?float $downloadFinishRate = null;

    /**
     * @var int
     */
    protected ?int $downloadStart = null;

    /**
     * @var float
     */
    protected ?float $downloadStartCost = null;

    /**
     * @var float
     */
    protected ?float $downloadStartRate = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListExternalAction
     */
    protected ?string $externalAction = null;

    /**
     * @var float
     */
    protected ?float $firstOrderCount = null;

    /**
     * @var float
     */
    protected ?float $firstRentalOrderCount = null;

    /**
     * @var int
     */
    protected ?int $follow = null;

    /**
     * @var int
     */
    protected ?int $form = null;

    /**
     * @var int
     */
    protected ?int $gameAddiction = null;

    /**
     * @var float
     */
    protected ?float $gameAddictionCost = null;

    /**
     * @var float
     */
    protected ?float $gameAddictionRate = null;

    /**
     * @var int
     */
    protected ?int $gamePayCost = null;

    /**
     * @var int
     */
    protected ?int $gamePayCount = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListGender
     */
    protected ?string $gender = null;

    /**
     * @var int
     */
    protected ?int $homeVisited = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var int
     */
    protected ?int $iesChallengeClick = null;

    /**
     * @var int
     */
    protected ?int $iesMusicClick = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $inAppCart = null;

    /**
     * @var int
     */
    protected ?int $inAppDetailUv = null;

    /**
     * @var int
     */
    protected ?int $inAppOrder = null;

    /**
     * @var int
     */
    protected ?int $inAppPay = null;

    /**
     * @var int
     */
    protected ?int $inAppUv = null;

    /**
     * @var int
     */
    protected ?int $installFinish = null;

    /**
     * @var float
     */
    protected ?float $installFinishCost = null;

    /**
     * @var float
     */
    protected ?float $installFinishRate = null;

    /**
     * @var float
     */
    protected ?float $interactPerCost = null;

    /**
     * @var string
     */
    protected ?string $interestTag = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListInventory
     */
    protected ?string $inventory = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var int
     */
    protected ?int $like = null;

    /**
     * @var float
     */
    protected ?float $liveComponentClickCost = null;

    /**
     * @var int
     */
    protected ?int $liveComponentClickCount = null;

    /**
     * @var float
     */
    protected ?float $liveComponentClickRate = null;

    /**
     * @var int
     */
    protected ?int $liveFansClubJoinCnt = null;

    /**
     * @var int
     */
    protected ?int $liveWatchOneMinuteCount = null;

    /**
     * @var int
     */
    protected ?int $loanCompletion = null;

    /**
     * @var float
     */
    protected ?float $loanCompletionCost = null;

    /**
     * @var float
     */
    protected ?float $loanCompletionRate = null;

    /**
     * @var int
     */
    protected ?int $loanCredit = null;

    /**
     * @var float
     */
    protected ?float $loanCreditCost = null;

    /**
     * @var float
     */
    protected ?float $loanCreditRate = null;

    /**
     * @var int
     */
    protected ?int $locationClick = null;

    /**
     * @var int
     */
    protected ?int $lottery = null;

    /**
     * @var int
     */
    protected ?int $lubanLiveClickProductCnt = null;

    /**
     * @var int
     */
    protected ?int $lubanLiveCommentCnt = null;

    /**
     * @var int
     */
    protected ?int $lubanLiveEnterCnt = null;

    /**
     * @var int
     */
    protected ?int $lubanLiveFollowCnt = null;

    /**
     * @var int
     */
    protected ?int $lubanLiveGiftAmount = null;

    /**
     * @var int
     */
    protected ?int $lubanLiveGiftCnt = null;

    /**
     * @var int
     */
    protected ?int $lubanLivePayOrderCount = null;

    /**
     * @var float
     */
    protected ?float $lubanLivePayOrderStatCost = null;

    /**
     * @var int
     */
    protected ?int $lubanLiveShareCnt = null;

    /**
     * @var int
     */
    protected ?int $lubanLiveSlidecartClickCnt = null;

    /**
     * @var int
     */
    protected ?int $lubanOrderCnt = null;

    /**
     * @var float
     */
    protected ?float $lubanOrderRoi = null;

    /**
     * @var float
     */
    protected ?float $lubanOrderStatAmount = null;

    /**
     * @var int
     */
    protected ?int $mapSearch = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var int
     */
    protected ?int $message = null;

    /**
     * @var int
     */
    protected ?int $messageAction = null;

    /**
     * @var int
     */
    protected ?int $nextDayOpen = null;

    /**
     * @var float
     */
    protected ?float $nextDayOpenCost = null;

    /**
     * @var float
     */
    protected ?float $nextDayOpenRate = null;

    /**
     * @var float
     */
    protected ?float $payAmountRoi = null;

    /**
     * @var int
     */
    protected ?int $payCount = null;

    /**
     * @var int
     */
    protected ?int $phone = null;

    /**
     * @var int
     */
    protected ?int $phoneConfirm = null;

    /**
     * @var int
     */
    protected ?int $phoneConnect = null;

    /**
     * @var int
     */
    protected ?int $phoneEffective = null;

    /**
     * @var string
     */
    protected ?string $platform = null;

    /**
     * @var int
     */
    protected ?int $play100FeedBreak = null;

    /**
     * @var float
     */
    protected ?float $play100FeedBreakRate = null;

    /**
     * @var int
     */
    protected ?int $play25FeedBreak = null;

    /**
     * @var float
     */
    protected ?float $play25FeedBreakRate = null;

    /**
     * @var int
     */
    protected ?int $play50FeedBreak = null;

    /**
     * @var float
     */
    protected ?float $play50FeedBreakRate = null;

    /**
     * @var int
     */
    protected ?int $play75FeedBreak = null;

    /**
     * @var float
     */
    protected ?float $play75FeedBreakRate = null;

    /**
     * @var int
     */
    protected ?int $playDuration = null;

    /**
     * @var int
     */
    protected ?int $playDuration10s = null;

    /**
     * @var float
     */
    protected ?float $playDuration10sRate = null;

    /**
     * @var int
     */
    protected ?int $playDuration2s = null;

    /**
     * @var float
     */
    protected ?float $playDuration2sRate = null;

    /**
     * @var int
     */
    protected ?int $playDuration3s = null;

    /**
     * @var float
     */
    protected ?float $playDuration3sRate = null;

    /**
     * @var float
     */
    protected ?float $playDuration5sRate = null;

    /**
     * @var int
     */
    protected ?int $playDurationSum = null;

    /**
     * @var int
     */
    protected ?int $playOver = null;

    /**
     * @var float
     */
    protected ?float $playOverRate = null;

    /**
     * @var int
     */
    protected ?int $playableId = null;

    /**
     * @var string
     */
    protected ?string $playableName = null;

    /**
     * @var string
     */
    protected ?string $playableOrientation = null;

    /**
     * @var string
     */
    protected ?string $playablePreviewUrl = null;

    /**
     * @var string
     */
    protected ?string $playableUrl = null;

    /**
     * @var int
     */
    protected ?int $poiAddressClick = null;

    /**
     * @var int
     */
    protected ?int $poiCollect = null;

    /**
     * @var int
     */
    protected ?int $preConvertCost = null;

    /**
     * @var int
     */
    protected ?int $preConvertCount = null;

    /**
     * @var float
     */
    protected ?float $preConvertRate = null;

    /**
     * @var int
     */
    protected ?int $preLoanCredit = null;

    /**
     * @var float
     */
    protected ?float $preLoanCreditCost = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListPricing
     */
    protected ?string $pricing = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListPricingCategory
     */
    protected ?string $pricingCategory = null;

    /**
     * @var string
     */
    protected ?string $provinceName = null;

    /**
     * @var int
     */
    protected ?int $qq = null;

    /**
     * @var string
     */
    protected ?string $query = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2DataListRealRecallMatchType
     */
    protected ?string $realRecallMatchType = null;

    /**
     * @var int
     */
    protected ?int $redirect = null;

    /**
     * @var int
     */
    protected ?int $redirectToShop = null;

    /**
     * @var int
     */
    protected ?int $register = null;

    /**
     * @var int
     */
    protected ?int $report = null;

    /**
     * @var int
     */
    protected ?int $share = null;

    /**
     * @var int
     */
    protected ?int $shopping = null;

    /**
     * @var int
     */
    protected ?int $show = null;

    /**
     * @var string
     */
    protected ?string $statDatetime = null;

    /**
     * @var float
     */
    protected ?float $statPayAmount = null;

    /**
     * @var float
     */
    protected ?float $statUnionLtv0 = null;

    /**
     * @var float
     */
    protected ?float $statUnionLtv3 = null;

    /**
     * @var float
     */
    protected ?float $statUnionLtv7 = null;

    /**
     * @var float
     */
    protected ?float $submitCertificationCount = null;

    /**
     * @var int
     */
    protected ?int $totalPlay = null;

    /**
     * @var float
     */
    protected ?float $unionRoi0 = null;

    /**
     * @var float
     */
    protected ?float $unionRoi3 = null;

    /**
     * @var float
     */
    protected ?float $unionRoi7 = null;

    /**
     * @var int
     */
    protected ?int $validPlay = null;

    /**
     * @var float
     */
    protected ?float $validPlayCost = null;

    /**
     * @var float
     */
    protected ?float $validPlayRate = null;

    /**
     * @var int
     */
    protected ?int $view = null;

    /**
     * @var int
     */
    protected ?int $vote = null;

    /**
     * @var int
     */
    protected ?int $wechat = null;

    /**
     * @var float
     */
    protected ?float $wechatFirstPayCost = null;

    /**
     * @var int
     */
    protected ?int $wechatFirstPayCount = null;

    /**
     * @var float
     */
    protected ?float $wechatFirstPayRate = null;

    /**
     * @var float
     */
    protected ?float $wechatLoginCost = null;

    /**
     * @var int
     */
    protected ?int $wechatLoginCount = null;

    /**
     * @var float
     */
    protected ?float $wechatPayAmount = null;

    /**
     * @var int
     */
    protected ?int $wifiPlay = null;

    /**
     * @var float
     */
    protected ?float $wifiPlayRate = null;

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListAc
     */
    public function getAc(): ?string
    {
        return $this->ac;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListAc $ac
     * @return self
     */
    public function setAc(?string $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    /**
     * @return int
     */
    public function getActive(): ?int
    {
        return $this->active;
    }

    /**
     * @param int $active
     * @return self
     */
    public function setActive(?int $active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return float
     */
    public function getActiveCost(): ?float
    {
        return $this->activeCost;
    }

    /**
     * @param float $activeCost
     * @return self
     */
    public function setActiveCost(?float $activeCost): self
    {
        $this->activeCost = $activeCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivePayAmount(): ?int
    {
        return $this->activePayAmount;
    }

    /**
     * @param int $activePayAmount
     * @return self
     */
    public function setActivePayAmount(?int $activePayAmount): self
    {
        $this->activePayAmount = $activePayAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getActivePayCost(): ?float
    {
        return $this->activePayCost;
    }

    /**
     * @param float $activePayCost
     * @return self
     */
    public function setActivePayCost(?float $activePayCost): self
    {
        $this->activePayCost = $activePayCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getActivePayRate(): ?float
    {
        return $this->activePayRate;
    }

    /**
     * @param float $activePayRate
     * @return self
     */
    public function setActivePayRate(?float $activePayRate): self
    {
        $this->activePayRate = $activePayRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getActiveRate(): ?float
    {
        return $this->activeRate;
    }

    /**
     * @param float $activeRate
     * @return self
     */
    public function setActiveRate(?float $activeRate): self
    {
        $this->activeRate = $activeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getActiveRegisterCost(): ?float
    {
        return $this->activeRegisterCost;
    }

    /**
     * @param float $activeRegisterCost
     * @return self
     */
    public function setActiveRegisterCost(?float $activeRegisterCost): self
    {
        $this->activeRegisterCost = $activeRegisterCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getActiveRegisterRate(): ?float
    {
        return $this->activeRegisterRate;
    }

    /**
     * @param float $activeRegisterRate
     * @return self
     */
    public function setActiveRegisterRate(?float $activeRegisterRate): self
    {
        $this->activeRegisterRate = $activeRegisterRate;
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
     * @return string
     */
    public function getAdTag(): ?string
    {
        return $this->adTag;
    }

    /**
     * @param string $adTag
     * @return self
     */
    public function setAdTag(?string $adTag): self
    {
        $this->adTag = $adTag;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvancedCreativeCounselClick(): ?int
    {
        return $this->advancedCreativeCounselClick;
    }

    /**
     * @param int $advancedCreativeCounselClick
     * @return self
     */
    public function setAdvancedCreativeCounselClick(?int $advancedCreativeCounselClick): self
    {
        $this->advancedCreativeCounselClick = $advancedCreativeCounselClick;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvancedCreativeCouponAddition(): ?int
    {
        return $this->advancedCreativeCouponAddition;
    }

    /**
     * @param int $advancedCreativeCouponAddition
     * @return self
     */
    public function setAdvancedCreativeCouponAddition(?int $advancedCreativeCouponAddition): self
    {
        $this->advancedCreativeCouponAddition = $advancedCreativeCouponAddition;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvancedCreativeFormClick(): ?int
    {
        return $this->advancedCreativeFormClick;
    }

    /**
     * @param int $advancedCreativeFormClick
     * @return self
     */
    public function setAdvancedCreativeFormClick(?int $advancedCreativeFormClick): self
    {
        $this->advancedCreativeFormClick = $advancedCreativeFormClick;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvancedCreativeFormSubmit(): ?int
    {
        return $this->advancedCreativeFormSubmit;
    }

    /**
     * @param int $advancedCreativeFormSubmit
     * @return self
     */
    public function setAdvancedCreativeFormSubmit(?int $advancedCreativeFormSubmit): self
    {
        $this->advancedCreativeFormSubmit = $advancedCreativeFormSubmit;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvancedCreativePhoneClick(): ?int
    {
        return $this->advancedCreativePhoneClick;
    }

    /**
     * @param int $advancedCreativePhoneClick
     * @return self
     */
    public function setAdvancedCreativePhoneClick(?int $advancedCreativePhoneClick): self
    {
        $this->advancedCreativePhoneClick = $advancedCreativePhoneClick;
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
     * @return string
     */
    public function getAge(): ?string
    {
        return $this->age;
    }

    /**
     * @param string $age
     * @return self
     */
    public function setAge(?string $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return float
     */
    public function getApprovalCount(): ?float
    {
        return $this->approvalCount;
    }

    /**
     * @param float $approvalCount
     * @return self
     */
    public function setApprovalCount(?float $approvalCount): self
    {
        $this->approvalCount = $approvalCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionActivePay7dCost(): ?float
    {
        return $this->attributionActivePay7dCost;
    }

    /**
     * @param float $attributionActivePay7dCost
     * @return self
     */
    public function setAttributionActivePay7dCost(?float $attributionActivePay7dCost): self
    {
        $this->attributionActivePay7dCost = $attributionActivePay7dCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionActivePay7dCount(): ?int
    {
        return $this->attributionActivePay7dCount;
    }

    /**
     * @param int $attributionActivePay7dCount
     * @return self
     */
    public function setAttributionActivePay7dCount(?int $attributionActivePay7dCount): self
    {
        $this->attributionActivePay7dCount = $attributionActivePay7dCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionActivePay7dPerCount(): ?int
    {
        return $this->attributionActivePay7dPerCount;
    }

    /**
     * @param int $attributionActivePay7dPerCount
     * @return self
     */
    public function setAttributionActivePay7dPerCount(?int $attributionActivePay7dPerCount): self
    {
        $this->attributionActivePay7dPerCount = $attributionActivePay7dPerCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionActivePay7dRate(): ?float
    {
        return $this->attributionActivePay7dRate;
    }

    /**
     * @param float $attributionActivePay7dRate
     * @return self
     */
    public function setAttributionActivePay7dRate(?float $attributionActivePay7dRate): self
    {
        $this->attributionActivePay7dRate = $attributionActivePay7dRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionActivePayIntraOneDayAmount(): ?float
    {
        return $this->attributionActivePayIntraOneDayAmount;
    }

    /**
     * @param float $attributionActivePayIntraOneDayAmount
     * @return self
     */
    public function setAttributionActivePayIntraOneDayAmount(?float $attributionActivePayIntraOneDayAmount): self
    {
        $this->attributionActivePayIntraOneDayAmount = $attributionActivePayIntraOneDayAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionActivePayIntraOneDayCost(): ?float
    {
        return $this->attributionActivePayIntraOneDayCost;
    }

    /**
     * @param float $attributionActivePayIntraOneDayCost
     * @return self
     */
    public function setAttributionActivePayIntraOneDayCost(?float $attributionActivePayIntraOneDayCost): self
    {
        $this->attributionActivePayIntraOneDayCost = $attributionActivePayIntraOneDayCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionActivePayIntraOneDayCount(): ?int
    {
        return $this->attributionActivePayIntraOneDayCount;
    }

    /**
     * @param int $attributionActivePayIntraOneDayCount
     * @return self
     */
    public function setAttributionActivePayIntraOneDayCount(?int $attributionActivePayIntraOneDayCount): self
    {
        $this->attributionActivePayIntraOneDayCount = $attributionActivePayIntraOneDayCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionActivePayIntraOneDayRate(): ?float
    {
        return $this->attributionActivePayIntraOneDayRate;
    }

    /**
     * @param float $attributionActivePayIntraOneDayRate
     * @return self
     */
    public function setAttributionActivePayIntraOneDayRate(?float $attributionActivePayIntraOneDayRate): self
    {
        $this->attributionActivePayIntraOneDayRate = $attributionActivePayIntraOneDayRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionActivePayIntraOneDayRoi(): ?float
    {
        return $this->attributionActivePayIntraOneDayRoi;
    }

    /**
     * @param float $attributionActivePayIntraOneDayRoi
     * @return self
     */
    public function setAttributionActivePayIntraOneDayRoi(?float $attributionActivePayIntraOneDayRoi): self
    {
        $this->attributionActivePayIntraOneDayRoi = $attributionActivePayIntraOneDayRoi;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionConvert(): ?int
    {
        return $this->attributionConvert;
    }

    /**
     * @param int $attributionConvert
     * @return self
     */
    public function setAttributionConvert(?int $attributionConvert): self
    {
        $this->attributionConvert = $attributionConvert;
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
     * @return int
     */
    public function getAttributionDayAcitvePayCount(): ?int
    {
        return $this->attributionDayAcitvePayCount;
    }

    /**
     * @param int $attributionDayAcitvePayCount
     * @return self
     */
    public function setAttributionDayAcitvePayCount(?int $attributionDayAcitvePayCount): self
    {
        $this->attributionDayAcitvePayCount = $attributionDayAcitvePayCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionDayActivePayCount(): ?int
    {
        return $this->attributionDayActivePayCount;
    }

    /**
     * @param int $attributionDayActivePayCount
     * @return self
     */
    public function setAttributionDayActivePayCount(?int $attributionDayActivePayCount): self
    {
        $this->attributionDayActivePayCount = $attributionDayActivePayCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionDeepConvert(): ?int
    {
        return $this->attributionDeepConvert;
    }

    /**
     * @param int $attributionDeepConvert
     * @return self
     */
    public function setAttributionDeepConvert(?int $attributionDeepConvert): self
    {
        $this->attributionDeepConvert = $attributionDeepConvert;
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
    public function getAttributionGameInAppLtv1day(): ?float
    {
        return $this->attributionGameInAppLtv1day;
    }

    /**
     * @param float $attributionGameInAppLtv1day
     * @return self
     */
    public function setAttributionGameInAppLtv1day(?float $attributionGameInAppLtv1day): self
    {
        $this->attributionGameInAppLtv1day = $attributionGameInAppLtv1day;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppLtv2days(): ?float
    {
        return $this->attributionGameInAppLtv2days;
    }

    /**
     * @param float $attributionGameInAppLtv2days
     * @return self
     */
    public function setAttributionGameInAppLtv2days(?float $attributionGameInAppLtv2days): self
    {
        $this->attributionGameInAppLtv2days = $attributionGameInAppLtv2days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppLtv3days(): ?float
    {
        return $this->attributionGameInAppLtv3days;
    }

    /**
     * @param float $attributionGameInAppLtv3days
     * @return self
     */
    public function setAttributionGameInAppLtv3days(?float $attributionGameInAppLtv3days): self
    {
        $this->attributionGameInAppLtv3days = $attributionGameInAppLtv3days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppLtv4days(): ?float
    {
        return $this->attributionGameInAppLtv4days;
    }

    /**
     * @param float $attributionGameInAppLtv4days
     * @return self
     */
    public function setAttributionGameInAppLtv4days(?float $attributionGameInAppLtv4days): self
    {
        $this->attributionGameInAppLtv4days = $attributionGameInAppLtv4days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppLtv5days(): ?float
    {
        return $this->attributionGameInAppLtv5days;
    }

    /**
     * @param float $attributionGameInAppLtv5days
     * @return self
     */
    public function setAttributionGameInAppLtv5days(?float $attributionGameInAppLtv5days): self
    {
        $this->attributionGameInAppLtv5days = $attributionGameInAppLtv5days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppLtv6days(): ?float
    {
        return $this->attributionGameInAppLtv6days;
    }

    /**
     * @param float $attributionGameInAppLtv6days
     * @return self
     */
    public function setAttributionGameInAppLtv6days(?float $attributionGameInAppLtv6days): self
    {
        $this->attributionGameInAppLtv6days = $attributionGameInAppLtv6days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppLtv7days(): ?float
    {
        return $this->attributionGameInAppLtv7days;
    }

    /**
     * @param float $attributionGameInAppLtv7days
     * @return self
     */
    public function setAttributionGameInAppLtv7days(?float $attributionGameInAppLtv7days): self
    {
        $this->attributionGameInAppLtv7days = $attributionGameInAppLtv7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppLtv8days(): ?float
    {
        return $this->attributionGameInAppLtv8days;
    }

    /**
     * @param float $attributionGameInAppLtv8days
     * @return self
     */
    public function setAttributionGameInAppLtv8days(?float $attributionGameInAppLtv8days): self
    {
        $this->attributionGameInAppLtv8days = $attributionGameInAppLtv8days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppRoi1day(): ?float
    {
        return $this->attributionGameInAppRoi1day;
    }

    /**
     * @param float $attributionGameInAppRoi1day
     * @return self
     */
    public function setAttributionGameInAppRoi1day(?float $attributionGameInAppRoi1day): self
    {
        $this->attributionGameInAppRoi1day = $attributionGameInAppRoi1day;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppRoi2days(): ?float
    {
        return $this->attributionGameInAppRoi2days;
    }

    /**
     * @param float $attributionGameInAppRoi2days
     * @return self
     */
    public function setAttributionGameInAppRoi2days(?float $attributionGameInAppRoi2days): self
    {
        $this->attributionGameInAppRoi2days = $attributionGameInAppRoi2days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppRoi3days(): ?float
    {
        return $this->attributionGameInAppRoi3days;
    }

    /**
     * @param float $attributionGameInAppRoi3days
     * @return self
     */
    public function setAttributionGameInAppRoi3days(?float $attributionGameInAppRoi3days): self
    {
        $this->attributionGameInAppRoi3days = $attributionGameInAppRoi3days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppRoi4days(): ?float
    {
        return $this->attributionGameInAppRoi4days;
    }

    /**
     * @param float $attributionGameInAppRoi4days
     * @return self
     */
    public function setAttributionGameInAppRoi4days(?float $attributionGameInAppRoi4days): self
    {
        $this->attributionGameInAppRoi4days = $attributionGameInAppRoi4days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppRoi5days(): ?float
    {
        return $this->attributionGameInAppRoi5days;
    }

    /**
     * @param float $attributionGameInAppRoi5days
     * @return self
     */
    public function setAttributionGameInAppRoi5days(?float $attributionGameInAppRoi5days): self
    {
        $this->attributionGameInAppRoi5days = $attributionGameInAppRoi5days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppRoi6days(): ?float
    {
        return $this->attributionGameInAppRoi6days;
    }

    /**
     * @param float $attributionGameInAppRoi6days
     * @return self
     */
    public function setAttributionGameInAppRoi6days(?float $attributionGameInAppRoi6days): self
    {
        $this->attributionGameInAppRoi6days = $attributionGameInAppRoi6days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppRoi7days(): ?float
    {
        return $this->attributionGameInAppRoi7days;
    }

    /**
     * @param float $attributionGameInAppRoi7days
     * @return self
     */
    public function setAttributionGameInAppRoi7days(?float $attributionGameInAppRoi7days): self
    {
        $this->attributionGameInAppRoi7days = $attributionGameInAppRoi7days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGameInAppRoi8days(): ?float
    {
        return $this->attributionGameInAppRoi8days;
    }

    /**
     * @param float $attributionGameInAppRoi8days
     * @return self
     */
    public function setAttributionGameInAppRoi8days(?float $attributionGameInAppRoi8days): self
    {
        $this->attributionGameInAppRoi8days = $attributionGameInAppRoi8days;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionGamePay7dCost(): ?float
    {
        return $this->attributionGamePay7dCost;
    }

    /**
     * @param float $attributionGamePay7dCost
     * @return self
     */
    public function setAttributionGamePay7dCost(?float $attributionGamePay7dCost): self
    {
        $this->attributionGamePay7dCost = $attributionGamePay7dCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionGamePay7dCount(): ?int
    {
        return $this->attributionGamePay7dCount;
    }

    /**
     * @param int $attributionGamePay7dCount
     * @return self
     */
    public function setAttributionGamePay7dCount(?int $attributionGamePay7dCount): self
    {
        $this->attributionGamePay7dCount = $attributionGamePay7dCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionMicroGame0dLtv(): ?float
    {
        return $this->attributionMicroGame0dLtv;
    }

    /**
     * @param float $attributionMicroGame0dLtv
     * @return self
     */
    public function setAttributionMicroGame0dLtv(?float $attributionMicroGame0dLtv): self
    {
        $this->attributionMicroGame0dLtv = $attributionMicroGame0dLtv;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionMicroGame0dRoi(): ?float
    {
        return $this->attributionMicroGame0dRoi;
    }

    /**
     * @param float $attributionMicroGame0dRoi
     * @return self
     */
    public function setAttributionMicroGame0dRoi(?float $attributionMicroGame0dRoi): self
    {
        $this->attributionMicroGame0dRoi = $attributionMicroGame0dRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionMicroGame3dLtv(): ?float
    {
        return $this->attributionMicroGame3dLtv;
    }

    /**
     * @param float $attributionMicroGame3dLtv
     * @return self
     */
    public function setAttributionMicroGame3dLtv(?float $attributionMicroGame3dLtv): self
    {
        $this->attributionMicroGame3dLtv = $attributionMicroGame3dLtv;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionMicroGame3dRoi(): ?float
    {
        return $this->attributionMicroGame3dRoi;
    }

    /**
     * @param float $attributionMicroGame3dRoi
     * @return self
     */
    public function setAttributionMicroGame3dRoi(?float $attributionMicroGame3dRoi): self
    {
        $this->attributionMicroGame3dRoi = $attributionMicroGame3dRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionMicroGame7dLtv(): ?float
    {
        return $this->attributionMicroGame7dLtv;
    }

    /**
     * @param float $attributionMicroGame7dLtv
     * @return self
     */
    public function setAttributionMicroGame7dLtv(?float $attributionMicroGame7dLtv): self
    {
        $this->attributionMicroGame7dLtv = $attributionMicroGame7dLtv;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionMicroGame7dRoi(): ?float
    {
        return $this->attributionMicroGame7dRoi;
    }

    /**
     * @param float $attributionMicroGame7dRoi
     * @return self
     */
    public function setAttributionMicroGame7dRoi(?float $attributionMicroGame7dRoi): self
    {
        $this->attributionMicroGame7dRoi = $attributionMicroGame7dRoi;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionNextDayOpenCnt(): ?int
    {
        return $this->attributionNextDayOpenCnt;
    }

    /**
     * @param int $attributionNextDayOpenCnt
     * @return self
     */
    public function setAttributionNextDayOpenCnt(?int $attributionNextDayOpenCnt): self
    {
        $this->attributionNextDayOpenCnt = $attributionNextDayOpenCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionNextDayOpenCost(): ?float
    {
        return $this->attributionNextDayOpenCost;
    }

    /**
     * @param float $attributionNextDayOpenCost
     * @return self
     */
    public function setAttributionNextDayOpenCost(?float $attributionNextDayOpenCost): self
    {
        $this->attributionNextDayOpenCost = $attributionNextDayOpenCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionNextDayOpenRate(): ?float
    {
        return $this->attributionNextDayOpenRate;
    }

    /**
     * @param float $attributionNextDayOpenRate
     * @return self
     */
    public function setAttributionNextDayOpenRate(?float $attributionNextDayOpenRate): self
    {
        $this->attributionNextDayOpenRate = $attributionNextDayOpenRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionRetention2dCnt(): ?int
    {
        return $this->attributionRetention2dCnt;
    }

    /**
     * @param int $attributionRetention2dCnt
     * @return self
     */
    public function setAttributionRetention2dCnt(?int $attributionRetention2dCnt): self
    {
        $this->attributionRetention2dCnt = $attributionRetention2dCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention2dCost(): ?float
    {
        return $this->attributionRetention2dCost;
    }

    /**
     * @param float $attributionRetention2dCost
     * @return self
     */
    public function setAttributionRetention2dCost(?float $attributionRetention2dCost): self
    {
        $this->attributionRetention2dCost = $attributionRetention2dCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention2dRate(): ?float
    {
        return $this->attributionRetention2dRate;
    }

    /**
     * @param float $attributionRetention2dRate
     * @return self
     */
    public function setAttributionRetention2dRate(?float $attributionRetention2dRate): self
    {
        $this->attributionRetention2dRate = $attributionRetention2dRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionRetention3dCnt(): ?int
    {
        return $this->attributionRetention3dCnt;
    }

    /**
     * @param int $attributionRetention3dCnt
     * @return self
     */
    public function setAttributionRetention3dCnt(?int $attributionRetention3dCnt): self
    {
        $this->attributionRetention3dCnt = $attributionRetention3dCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention3dCost(): ?float
    {
        return $this->attributionRetention3dCost;
    }

    /**
     * @param float $attributionRetention3dCost
     * @return self
     */
    public function setAttributionRetention3dCost(?float $attributionRetention3dCost): self
    {
        $this->attributionRetention3dCost = $attributionRetention3dCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention3dRate(): ?float
    {
        return $this->attributionRetention3dRate;
    }

    /**
     * @param float $attributionRetention3dRate
     * @return self
     */
    public function setAttributionRetention3dRate(?float $attributionRetention3dRate): self
    {
        $this->attributionRetention3dRate = $attributionRetention3dRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionRetention4dCnt(): ?int
    {
        return $this->attributionRetention4dCnt;
    }

    /**
     * @param int $attributionRetention4dCnt
     * @return self
     */
    public function setAttributionRetention4dCnt(?int $attributionRetention4dCnt): self
    {
        $this->attributionRetention4dCnt = $attributionRetention4dCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention4dCost(): ?float
    {
        return $this->attributionRetention4dCost;
    }

    /**
     * @param float $attributionRetention4dCost
     * @return self
     */
    public function setAttributionRetention4dCost(?float $attributionRetention4dCost): self
    {
        $this->attributionRetention4dCost = $attributionRetention4dCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention4dRate(): ?float
    {
        return $this->attributionRetention4dRate;
    }

    /**
     * @param float $attributionRetention4dRate
     * @return self
     */
    public function setAttributionRetention4dRate(?float $attributionRetention4dRate): self
    {
        $this->attributionRetention4dRate = $attributionRetention4dRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionRetention5dCnt(): ?int
    {
        return $this->attributionRetention5dCnt;
    }

    /**
     * @param int $attributionRetention5dCnt
     * @return self
     */
    public function setAttributionRetention5dCnt(?int $attributionRetention5dCnt): self
    {
        $this->attributionRetention5dCnt = $attributionRetention5dCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention5dCost(): ?float
    {
        return $this->attributionRetention5dCost;
    }

    /**
     * @param float $attributionRetention5dCost
     * @return self
     */
    public function setAttributionRetention5dCost(?float $attributionRetention5dCost): self
    {
        $this->attributionRetention5dCost = $attributionRetention5dCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention5dRate(): ?float
    {
        return $this->attributionRetention5dRate;
    }

    /**
     * @param float $attributionRetention5dRate
     * @return self
     */
    public function setAttributionRetention5dRate(?float $attributionRetention5dRate): self
    {
        $this->attributionRetention5dRate = $attributionRetention5dRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionRetention6dCnt(): ?int
    {
        return $this->attributionRetention6dCnt;
    }

    /**
     * @param int $attributionRetention6dCnt
     * @return self
     */
    public function setAttributionRetention6dCnt(?int $attributionRetention6dCnt): self
    {
        $this->attributionRetention6dCnt = $attributionRetention6dCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention6dCost(): ?float
    {
        return $this->attributionRetention6dCost;
    }

    /**
     * @param float $attributionRetention6dCost
     * @return self
     */
    public function setAttributionRetention6dCost(?float $attributionRetention6dCost): self
    {
        $this->attributionRetention6dCost = $attributionRetention6dCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention6dRate(): ?float
    {
        return $this->attributionRetention6dRate;
    }

    /**
     * @param float $attributionRetention6dRate
     * @return self
     */
    public function setAttributionRetention6dRate(?float $attributionRetention6dRate): self
    {
        $this->attributionRetention6dRate = $attributionRetention6dRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionRetention7dCnt(): ?int
    {
        return $this->attributionRetention7dCnt;
    }

    /**
     * @param int $attributionRetention7dCnt
     * @return self
     */
    public function setAttributionRetention7dCnt(?int $attributionRetention7dCnt): self
    {
        $this->attributionRetention7dCnt = $attributionRetention7dCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention7dCost(): ?float
    {
        return $this->attributionRetention7dCost;
    }

    /**
     * @param float $attributionRetention7dCost
     * @return self
     */
    public function setAttributionRetention7dCost(?float $attributionRetention7dCost): self
    {
        $this->attributionRetention7dCost = $attributionRetention7dCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention7dRate(): ?float
    {
        return $this->attributionRetention7dRate;
    }

    /**
     * @param float $attributionRetention7dRate
     * @return self
     */
    public function setAttributionRetention7dRate(?float $attributionRetention7dRate): self
    {
        $this->attributionRetention7dRate = $attributionRetention7dRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionRetention7dSumCnt(): ?int
    {
        return $this->attributionRetention7dSumCnt;
    }

    /**
     * @param int $attributionRetention7dSumCnt
     * @return self
     */
    public function setAttributionRetention7dSumCnt(?int $attributionRetention7dSumCnt): self
    {
        $this->attributionRetention7dSumCnt = $attributionRetention7dSumCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionRetention7dTotalCost(): ?float
    {
        return $this->attributionRetention7dTotalCost;
    }

    /**
     * @param float $attributionRetention7dTotalCost
     * @return self
     */
    public function setAttributionRetention7dTotalCost(?float $attributionRetention7dTotalCost): self
    {
        $this->attributionRetention7dTotalCost = $attributionRetention7dTotalCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionWechatFirstPay30dCost(): ?float
    {
        return $this->attributionWechatFirstPay30dCost;
    }

    /**
     * @param float $attributionWechatFirstPay30dCost
     * @return self
     */
    public function setAttributionWechatFirstPay30dCost(?float $attributionWechatFirstPay30dCost): self
    {
        $this->attributionWechatFirstPay30dCost = $attributionWechatFirstPay30dCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionWechatFirstPay30dCount(): ?int
    {
        return $this->attributionWechatFirstPay30dCount;
    }

    /**
     * @param int $attributionWechatFirstPay30dCount
     * @return self
     */
    public function setAttributionWechatFirstPay30dCount(?int $attributionWechatFirstPay30dCount): self
    {
        $this->attributionWechatFirstPay30dCount = $attributionWechatFirstPay30dCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionWechatFirstPay30dRate(): ?float
    {
        return $this->attributionWechatFirstPay30dRate;
    }

    /**
     * @param float $attributionWechatFirstPay30dRate
     * @return self
     */
    public function setAttributionWechatFirstPay30dRate(?float $attributionWechatFirstPay30dRate): self
    {
        $this->attributionWechatFirstPay30dRate = $attributionWechatFirstPay30dRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionWechatLogin30dCost(): ?float
    {
        return $this->attributionWechatLogin30dCost;
    }

    /**
     * @param float $attributionWechatLogin30dCost
     * @return self
     */
    public function setAttributionWechatLogin30dCost(?float $attributionWechatLogin30dCost): self
    {
        $this->attributionWechatLogin30dCost = $attributionWechatLogin30dCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getAttributionWechatLogin30dCount(): ?int
    {
        return $this->attributionWechatLogin30dCount;
    }

    /**
     * @param int $attributionWechatLogin30dCount
     * @return self
     */
    public function setAttributionWechatLogin30dCount(?int $attributionWechatLogin30dCount): self
    {
        $this->attributionWechatLogin30dCount = $attributionWechatLogin30dCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionWechatPay30dAmount(): ?float
    {
        return $this->attributionWechatPay30dAmount;
    }

    /**
     * @param float $attributionWechatPay30dAmount
     * @return self
     */
    public function setAttributionWechatPay30dAmount(?float $attributionWechatPay30dAmount): self
    {
        $this->attributionWechatPay30dAmount = $attributionWechatPay30dAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionWechatPay30dRoi(): ?float
    {
        return $this->attributionWechatPay30dRoi;
    }

    /**
     * @param float $attributionWechatPay30dRoi
     * @return self
     */
    public function setAttributionWechatPay30dRoi(?float $attributionWechatPay30dRoi): self
    {
        $this->attributionWechatPay30dRoi = $attributionWechatPay30dRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getAveragePlayProgress(): ?float
    {
        return $this->averagePlayProgress;
    }

    /**
     * @param float $averagePlayProgress
     * @return self
     */
    public function setAveragePlayProgress(?float $averagePlayProgress): self
    {
        $this->averagePlayProgress = $averagePlayProgress;
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
    public function getAverageVideoPlay(): ?float
    {
        return $this->averageVideoPlay;
    }

    /**
     * @param float $averageVideoPlay
     * @return self
     */
    public function setAverageVideoPlay(?float $averageVideoPlay): self
    {
        $this->averageVideoPlay = $averageVideoPlay;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvgClickCost(): ?float
    {
        return $this->avgClickCost;
    }

    /**
     * @param float $avgClickCost
     * @return self
     */
    public function setAvgClickCost(?float $avgClickCost): self
    {
        $this->avgClickCost = $avgClickCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvgRank(): ?float
    {
        return $this->avgRank;
    }

    /**
     * @param float $avgRank
     * @return self
     */
    public function setAvgRank(?float $avgRank): self
    {
        $this->avgRank = $avgRank;
        return $this;
    }

    /**
     * @return float
     */
    public function getAvgShowCost(): ?float
    {
        return $this->avgShowCost;
    }

    /**
     * @param float $avgShowCost
     * @return self
     */
    public function setAvgShowCost(?float $avgShowCost): self
    {
        $this->avgShowCost = $avgShowCost;
        return $this;
    }

    /**
     * @return string
     */
    public function getBidword(): ?string
    {
        return $this->bidword;
    }

    /**
     * @param string $bidword
     * @return self
     */
    public function setBidword(?string $bidword): self
    {
        $this->bidword = $bidword;
        return $this;
    }

    /**
     * @return int
     */
    public function getBidwordId(): ?int
    {
        return $this->bidwordId;
    }

    /**
     * @param int $bidwordId
     * @return self
     */
    public function setBidwordId(?int $bidwordId): self
    {
        $this->bidwordId = $bidwordId;
        return $this;
    }

    /**
     * @return int
     */
    public function getButton(): ?int
    {
        return $this->button;
    }

    /**
     * @param int $button
     * @return self
     */
    public function setButton(?int $button): self
    {
        $this->button = $button;
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
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListCampaignType
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListCampaignType $campaignType
     * @return self
     */
    public function setCampaignType(?string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * @return int
     */
    public function getCardShow(): ?int
    {
        return $this->cardShow;
    }

    /**
     * @param int $cardShow
     * @return self
     */
    public function setCardShow(?int $cardShow): self
    {
        $this->cardShow = $cardShow;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return self
     */
    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @return int
     */
    public function getClick(): ?int
    {
        return $this->click;
    }

    /**
     * @param int $click
     * @return self
     */
    public function setClick(?int $click): self
    {
        $this->click = $click;
        return $this;
    }

    /**
     * @return int
     */
    public function getClickCallDy(): ?int
    {
        return $this->clickCallDy;
    }

    /**
     * @param int $clickCallDy
     * @return self
     */
    public function setClickCallDy(?int $clickCallDy): self
    {
        $this->clickCallDy = $clickCallDy;
        return $this;
    }

    /**
     * @return int
     */
    public function getClickDownload(): ?int
    {
        return $this->clickDownload;
    }

    /**
     * @param int $clickDownload
     * @return self
     */
    public function setClickDownload(?int $clickDownload): self
    {
        $this->clickDownload = $clickDownload;
        return $this;
    }

    /**
     * @return int
     */
    public function getClickInstall(): ?int
    {
        return $this->clickInstall;
    }

    /**
     * @param int $clickInstall
     * @return self
     */
    public function setClickInstall(?int $clickInstall): self
    {
        $this->clickInstall = $clickInstall;
        return $this;
    }

    /**
     * @return int
     */
    public function getClickLandingPage(): ?int
    {
        return $this->clickLandingPage;
    }

    /**
     * @param int $clickLandingPage
     * @return self
     */
    public function setClickLandingPage(?int $clickLandingPage): self
    {
        $this->clickLandingPage = $clickLandingPage;
        return $this;
    }

    /**
     * @return int
     */
    public function getClickShopwindow(): ?int
    {
        return $this->clickShopwindow;
    }

    /**
     * @param int $clickShopwindow
     * @return self
     */
    public function setClickShopwindow(?int $clickShopwindow): self
    {
        $this->clickShopwindow = $clickShopwindow;
        return $this;
    }

    /**
     * @return int
     */
    public function getClickWebsite(): ?int
    {
        return $this->clickWebsite;
    }

    /**
     * @param int $clickWebsite
     * @return self
     */
    public function setClickWebsite(?int $clickWebsite): self
    {
        $this->clickWebsite = $clickWebsite;
        return $this;
    }

    /**
     * @return int
     */
    public function getComment(): ?int
    {
        return $this->comment;
    }

    /**
     * @param int $comment
     * @return self
     */
    public function setComment(?int $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return float
     */
    public function getCommuteFirstPayCount(): ?float
    {
        return $this->commuteFirstPayCount;
    }

    /**
     * @param float $commuteFirstPayCount
     * @return self
     */
    public function setCommuteFirstPayCount(?float $commuteFirstPayCount): self
    {
        $this->commuteFirstPayCount = $commuteFirstPayCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getConsult(): ?int
    {
        return $this->consult;
    }

    /**
     * @param int $consult
     * @return self
     */
    public function setConsult(?int $consult): self
    {
        $this->consult = $consult;
        return $this;
    }

    /**
     * @return int
     */
    public function getConsultEffective(): ?int
    {
        return $this->consultEffective;
    }

    /**
     * @param int $consultEffective
     * @return self
     */
    public function setConsultEffective(?int $consultEffective): self
    {
        $this->consultEffective = $consultEffective;
        return $this;
    }

    /**
     * @return int
     */
    public function getConvert(): ?int
    {
        return $this->convert;
    }

    /**
     * @param int $convert
     * @return self
     */
    public function setConvert(?int $convert): self
    {
        $this->convert = $convert;
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
    public function getConvertShowRate(): ?float
    {
        return $this->convertShowRate;
    }

    /**
     * @param float $convertShowRate
     * @return self
     */
    public function setConvertShowRate(?float $convertShowRate): self
    {
        $this->convertShowRate = $convertShowRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return int
     */
    public function getCoupon(): ?int
    {
        return $this->coupon;
    }

    /**
     * @param int $coupon
     * @return self
     */
    public function setCoupon(?int $coupon): self
    {
        $this->coupon = $coupon;
        return $this;
    }

    /**
     * @return int
     */
    public function getCouponSinglePage(): ?int
    {
        return $this->couponSinglePage;
    }

    /**
     * @param int $couponSinglePage
     * @return self
     */
    public function setCouponSinglePage(?int $couponSinglePage): self
    {
        $this->couponSinglePage = $couponSinglePage;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpa(): ?float
    {
        return $this->cpa;
    }

    /**
     * @param float $cpa
     * @return self
     */
    public function setCpa(?float $cpa): self
    {
        $this->cpa = $cpa;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpc(): ?float
    {
        return $this->cpc;
    }

    /**
     * @param float $cpc
     * @return self
     */
    public function setCpc(?float $cpc): self
    {
        $this->cpc = $cpc;
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
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListCreativeMaterialMode
     */
    public function getCreativeMaterialMode(): ?string
    {
        return $this->creativeMaterialMode;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListCreativeMaterialMode $creativeMaterialMode
     * @return self
     */
    public function setCreativeMaterialMode(?string $creativeMaterialMode): self
    {
        $this->creativeMaterialMode = $creativeMaterialMode;
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
     * @return int
     */
    public function getCustomerEffective(): ?int
    {
        return $this->customerEffective;
    }

    /**
     * @param int $customerEffective
     * @return self
     */
    public function setCustomerEffective(?int $customerEffective): self
    {
        $this->customerEffective = $customerEffective;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeepConvert(): ?int
    {
        return $this->deepConvert;
    }

    /**
     * @param int $deepConvert
     * @return self
     */
    public function setDeepConvert(?int $deepConvert): self
    {
        $this->deepConvert = $deepConvert;
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
     * @return int
     */
    public function getDislike(): ?int
    {
        return $this->dislike;
    }

    /**
     * @param int $dislike
     * @return self
     */
    public function setDislike(?int $dislike): self
    {
        $this->dislike = $dislike;
        return $this;
    }

    /**
     * @return int
     */
    public function getDownload(): ?int
    {
        return $this->download;
    }

    /**
     * @param int $download
     * @return self
     */
    public function setDownload(?int $download): self
    {
        $this->download = $download;
        return $this;
    }

    /**
     * @return int
     */
    public function getDownloadFinish(): ?int
    {
        return $this->downloadFinish;
    }

    /**
     * @param int $downloadFinish
     * @return self
     */
    public function setDownloadFinish(?int $downloadFinish): self
    {
        $this->downloadFinish = $downloadFinish;
        return $this;
    }

    /**
     * @return float
     */
    public function getDownloadFinishCost(): ?float
    {
        return $this->downloadFinishCost;
    }

    /**
     * @param float $downloadFinishCost
     * @return self
     */
    public function setDownloadFinishCost(?float $downloadFinishCost): self
    {
        $this->downloadFinishCost = $downloadFinishCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getDownloadFinishRate(): ?float
    {
        return $this->downloadFinishRate;
    }

    /**
     * @param float $downloadFinishRate
     * @return self
     */
    public function setDownloadFinishRate(?float $downloadFinishRate): self
    {
        $this->downloadFinishRate = $downloadFinishRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getDownloadStart(): ?int
    {
        return $this->downloadStart;
    }

    /**
     * @param int $downloadStart
     * @return self
     */
    public function setDownloadStart(?int $downloadStart): self
    {
        $this->downloadStart = $downloadStart;
        return $this;
    }

    /**
     * @return float
     */
    public function getDownloadStartCost(): ?float
    {
        return $this->downloadStartCost;
    }

    /**
     * @param float $downloadStartCost
     * @return self
     */
    public function setDownloadStartCost(?float $downloadStartCost): self
    {
        $this->downloadStartCost = $downloadStartCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getDownloadStartRate(): ?float
    {
        return $this->downloadStartRate;
    }

    /**
     * @param float $downloadStartRate
     * @return self
     */
    public function setDownloadStartRate(?float $downloadStartRate): self
    {
        $this->downloadStartRate = $downloadStartRate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListExternalAction
     */
    public function getExternalAction(): ?string
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListExternalAction $externalAction
     * @return self
     */
    public function setExternalAction(?string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstOrderCount(): ?float
    {
        return $this->firstOrderCount;
    }

    /**
     * @param float $firstOrderCount
     * @return self
     */
    public function setFirstOrderCount(?float $firstOrderCount): self
    {
        $this->firstOrderCount = $firstOrderCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstRentalOrderCount(): ?float
    {
        return $this->firstRentalOrderCount;
    }

    /**
     * @param float $firstRentalOrderCount
     * @return self
     */
    public function setFirstRentalOrderCount(?float $firstRentalOrderCount): self
    {
        $this->firstRentalOrderCount = $firstRentalOrderCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getFollow(): ?int
    {
        return $this->follow;
    }

    /**
     * @param int $follow
     * @return self
     */
    public function setFollow(?int $follow): self
    {
        $this->follow = $follow;
        return $this;
    }

    /**
     * @return int
     */
    public function getForm(): ?int
    {
        return $this->form;
    }

    /**
     * @param int $form
     * @return self
     */
    public function setForm(?int $form): self
    {
        $this->form = $form;
        return $this;
    }

    /**
     * @return int
     */
    public function getGameAddiction(): ?int
    {
        return $this->gameAddiction;
    }

    /**
     * @param int $gameAddiction
     * @return self
     */
    public function setGameAddiction(?int $gameAddiction): self
    {
        $this->gameAddiction = $gameAddiction;
        return $this;
    }

    /**
     * @return float
     */
    public function getGameAddictionCost(): ?float
    {
        return $this->gameAddictionCost;
    }

    /**
     * @param float $gameAddictionCost
     * @return self
     */
    public function setGameAddictionCost(?float $gameAddictionCost): self
    {
        $this->gameAddictionCost = $gameAddictionCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getGameAddictionRate(): ?float
    {
        return $this->gameAddictionRate;
    }

    /**
     * @param float $gameAddictionRate
     * @return self
     */
    public function setGameAddictionRate(?float $gameAddictionRate): self
    {
        $this->gameAddictionRate = $gameAddictionRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getGamePayCost(): ?int
    {
        return $this->gamePayCost;
    }

    /**
     * @param int $gamePayCost
     * @return self
     */
    public function setGamePayCost(?int $gamePayCost): self
    {
        $this->gamePayCost = $gamePayCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getGamePayCount(): ?int
    {
        return $this->gamePayCount;
    }

    /**
     * @param int $gamePayCount
     * @return self
     */
    public function setGamePayCount(?int $gamePayCount): self
    {
        $this->gamePayCount = $gamePayCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListGender
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListGender $gender
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return int
     */
    public function getHomeVisited(): ?int
    {
        return $this->homeVisited;
    }

    /**
     * @param int $homeVisited
     * @return self
     */
    public function setHomeVisited(?int $homeVisited): self
    {
        $this->homeVisited = $homeVisited;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getIesChallengeClick(): ?int
    {
        return $this->iesChallengeClick;
    }

    /**
     * @param int $iesChallengeClick
     * @return self
     */
    public function setIesChallengeClick(?int $iesChallengeClick): self
    {
        $this->iesChallengeClick = $iesChallengeClick;
        return $this;
    }

    /**
     * @return int
     */
    public function getIesMusicClick(): ?int
    {
        return $this->iesMusicClick;
    }

    /**
     * @param int $iesMusicClick
     * @return self
     */
    public function setIesMusicClick(?int $iesMusicClick): self
    {
        $this->iesMusicClick = $iesMusicClick;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getInAppCart(): ?int
    {
        return $this->inAppCart;
    }

    /**
     * @param int $inAppCart
     * @return self
     */
    public function setInAppCart(?int $inAppCart): self
    {
        $this->inAppCart = $inAppCart;
        return $this;
    }

    /**
     * @return int
     */
    public function getInAppDetailUv(): ?int
    {
        return $this->inAppDetailUv;
    }

    /**
     * @param int $inAppDetailUv
     * @return self
     */
    public function setInAppDetailUv(?int $inAppDetailUv): self
    {
        $this->inAppDetailUv = $inAppDetailUv;
        return $this;
    }

    /**
     * @return int
     */
    public function getInAppOrder(): ?int
    {
        return $this->inAppOrder;
    }

    /**
     * @param int $inAppOrder
     * @return self
     */
    public function setInAppOrder(?int $inAppOrder): self
    {
        $this->inAppOrder = $inAppOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getInAppPay(): ?int
    {
        return $this->inAppPay;
    }

    /**
     * @param int $inAppPay
     * @return self
     */
    public function setInAppPay(?int $inAppPay): self
    {
        $this->inAppPay = $inAppPay;
        return $this;
    }

    /**
     * @return int
     */
    public function getInAppUv(): ?int
    {
        return $this->inAppUv;
    }

    /**
     * @param int $inAppUv
     * @return self
     */
    public function setInAppUv(?int $inAppUv): self
    {
        $this->inAppUv = $inAppUv;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstallFinish(): ?int
    {
        return $this->installFinish;
    }

    /**
     * @param int $installFinish
     * @return self
     */
    public function setInstallFinish(?int $installFinish): self
    {
        $this->installFinish = $installFinish;
        return $this;
    }

    /**
     * @return float
     */
    public function getInstallFinishCost(): ?float
    {
        return $this->installFinishCost;
    }

    /**
     * @param float $installFinishCost
     * @return self
     */
    public function setInstallFinishCost(?float $installFinishCost): self
    {
        $this->installFinishCost = $installFinishCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getInstallFinishRate(): ?float
    {
        return $this->installFinishRate;
    }

    /**
     * @param float $installFinishRate
     * @return self
     */
    public function setInstallFinishRate(?float $installFinishRate): self
    {
        $this->installFinishRate = $installFinishRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getInteractPerCost(): ?float
    {
        return $this->interactPerCost;
    }

    /**
     * @param float $interactPerCost
     * @return self
     */
    public function setInteractPerCost(?float $interactPerCost): self
    {
        $this->interactPerCost = $interactPerCost;
        return $this;
    }

    /**
     * @return string
     */
    public function getInterestTag(): ?string
    {
        return $this->interestTag;
    }

    /**
     * @param string $interestTag
     * @return self
     */
    public function setInterestTag(?string $interestTag): self
    {
        $this->interestTag = $interestTag;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListInventory
     */
    public function getInventory(): ?string
    {
        return $this->inventory;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListInventory $inventory
     * @return self
     */
    public function setInventory(?string $inventory): self
    {
        $this->inventory = $inventory;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return int
     */
    public function getLike(): ?int
    {
        return $this->like;
    }

    /**
     * @param int $like
     * @return self
     */
    public function setLike(?int $like): self
    {
        $this->like = $like;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveComponentClickCost(): ?float
    {
        return $this->liveComponentClickCost;
    }

    /**
     * @param float $liveComponentClickCost
     * @return self
     */
    public function setLiveComponentClickCost(?float $liveComponentClickCost): self
    {
        $this->liveComponentClickCost = $liveComponentClickCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveComponentClickCount(): ?int
    {
        return $this->liveComponentClickCount;
    }

    /**
     * @param int $liveComponentClickCount
     * @return self
     */
    public function setLiveComponentClickCount(?int $liveComponentClickCount): self
    {
        $this->liveComponentClickCount = $liveComponentClickCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveComponentClickRate(): ?float
    {
        return $this->liveComponentClickRate;
    }

    /**
     * @param float $liveComponentClickRate
     * @return self
     */
    public function setLiveComponentClickRate(?float $liveComponentClickRate): self
    {
        $this->liveComponentClickRate = $liveComponentClickRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveFansClubJoinCnt(): ?int
    {
        return $this->liveFansClubJoinCnt;
    }

    /**
     * @param int $liveFansClubJoinCnt
     * @return self
     */
    public function setLiveFansClubJoinCnt(?int $liveFansClubJoinCnt): self
    {
        $this->liveFansClubJoinCnt = $liveFansClubJoinCnt;
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
    public function getLoanCompletion(): ?int
    {
        return $this->loanCompletion;
    }

    /**
     * @param int $loanCompletion
     * @return self
     */
    public function setLoanCompletion(?int $loanCompletion): self
    {
        $this->loanCompletion = $loanCompletion;
        return $this;
    }

    /**
     * @return float
     */
    public function getLoanCompletionCost(): ?float
    {
        return $this->loanCompletionCost;
    }

    /**
     * @param float $loanCompletionCost
     * @return self
     */
    public function setLoanCompletionCost(?float $loanCompletionCost): self
    {
        $this->loanCompletionCost = $loanCompletionCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getLoanCompletionRate(): ?float
    {
        return $this->loanCompletionRate;
    }

    /**
     * @param float $loanCompletionRate
     * @return self
     */
    public function setLoanCompletionRate(?float $loanCompletionRate): self
    {
        $this->loanCompletionRate = $loanCompletionRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getLoanCredit(): ?int
    {
        return $this->loanCredit;
    }

    /**
     * @param int $loanCredit
     * @return self
     */
    public function setLoanCredit(?int $loanCredit): self
    {
        $this->loanCredit = $loanCredit;
        return $this;
    }

    /**
     * @return float
     */
    public function getLoanCreditCost(): ?float
    {
        return $this->loanCreditCost;
    }

    /**
     * @param float $loanCreditCost
     * @return self
     */
    public function setLoanCreditCost(?float $loanCreditCost): self
    {
        $this->loanCreditCost = $loanCreditCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getLoanCreditRate(): ?float
    {
        return $this->loanCreditRate;
    }

    /**
     * @param float $loanCreditRate
     * @return self
     */
    public function setLoanCreditRate(?float $loanCreditRate): self
    {
        $this->loanCreditRate = $loanCreditRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocationClick(): ?int
    {
        return $this->locationClick;
    }

    /**
     * @param int $locationClick
     * @return self
     */
    public function setLocationClick(?int $locationClick): self
    {
        $this->locationClick = $locationClick;
        return $this;
    }

    /**
     * @return int
     */
    public function getLottery(): ?int
    {
        return $this->lottery;
    }

    /**
     * @param int $lottery
     * @return self
     */
    public function setLottery(?int $lottery): self
    {
        $this->lottery = $lottery;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLiveClickProductCnt(): ?int
    {
        return $this->lubanLiveClickProductCnt;
    }

    /**
     * @param int $lubanLiveClickProductCnt
     * @return self
     */
    public function setLubanLiveClickProductCnt(?int $lubanLiveClickProductCnt): self
    {
        $this->lubanLiveClickProductCnt = $lubanLiveClickProductCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLiveCommentCnt(): ?int
    {
        return $this->lubanLiveCommentCnt;
    }

    /**
     * @param int $lubanLiveCommentCnt
     * @return self
     */
    public function setLubanLiveCommentCnt(?int $lubanLiveCommentCnt): self
    {
        $this->lubanLiveCommentCnt = $lubanLiveCommentCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLiveEnterCnt(): ?int
    {
        return $this->lubanLiveEnterCnt;
    }

    /**
     * @param int $lubanLiveEnterCnt
     * @return self
     */
    public function setLubanLiveEnterCnt(?int $lubanLiveEnterCnt): self
    {
        $this->lubanLiveEnterCnt = $lubanLiveEnterCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLiveFollowCnt(): ?int
    {
        return $this->lubanLiveFollowCnt;
    }

    /**
     * @param int $lubanLiveFollowCnt
     * @return self
     */
    public function setLubanLiveFollowCnt(?int $lubanLiveFollowCnt): self
    {
        $this->lubanLiveFollowCnt = $lubanLiveFollowCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLiveGiftAmount(): ?int
    {
        return $this->lubanLiveGiftAmount;
    }

    /**
     * @param int $lubanLiveGiftAmount
     * @return self
     */
    public function setLubanLiveGiftAmount(?int $lubanLiveGiftAmount): self
    {
        $this->lubanLiveGiftAmount = $lubanLiveGiftAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLiveGiftCnt(): ?int
    {
        return $this->lubanLiveGiftCnt;
    }

    /**
     * @param int $lubanLiveGiftCnt
     * @return self
     */
    public function setLubanLiveGiftCnt(?int $lubanLiveGiftCnt): self
    {
        $this->lubanLiveGiftCnt = $lubanLiveGiftCnt;
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
    public function getLubanLivePayOrderStatCost(): ?float
    {
        return $this->lubanLivePayOrderStatCost;
    }

    /**
     * @param float $lubanLivePayOrderStatCost
     * @return self
     */
    public function setLubanLivePayOrderStatCost(?float $lubanLivePayOrderStatCost): self
    {
        $this->lubanLivePayOrderStatCost = $lubanLivePayOrderStatCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLiveShareCnt(): ?int
    {
        return $this->lubanLiveShareCnt;
    }

    /**
     * @param int $lubanLiveShareCnt
     * @return self
     */
    public function setLubanLiveShareCnt(?int $lubanLiveShareCnt): self
    {
        $this->lubanLiveShareCnt = $lubanLiveShareCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLiveSlidecartClickCnt(): ?int
    {
        return $this->lubanLiveSlidecartClickCnt;
    }

    /**
     * @param int $lubanLiveSlidecartClickCnt
     * @return self
     */
    public function setLubanLiveSlidecartClickCnt(?int $lubanLiveSlidecartClickCnt): self
    {
        $this->lubanLiveSlidecartClickCnt = $lubanLiveSlidecartClickCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanOrderCnt(): ?int
    {
        return $this->lubanOrderCnt;
    }

    /**
     * @param int $lubanOrderCnt
     * @return self
     */
    public function setLubanOrderCnt(?int $lubanOrderCnt): self
    {
        $this->lubanOrderCnt = $lubanOrderCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanOrderRoi(): ?float
    {
        return $this->lubanOrderRoi;
    }

    /**
     * @param float $lubanOrderRoi
     * @return self
     */
    public function setLubanOrderRoi(?float $lubanOrderRoi): self
    {
        $this->lubanOrderRoi = $lubanOrderRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getLubanOrderStatAmount(): ?float
    {
        return $this->lubanOrderStatAmount;
    }

    /**
     * @param float $lubanOrderStatAmount
     * @return self
     */
    public function setLubanOrderStatAmount(?float $lubanOrderStatAmount): self
    {
        $this->lubanOrderStatAmount = $lubanOrderStatAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getMapSearch(): ?int
    {
        return $this->mapSearch;
    }

    /**
     * @param int $mapSearch
     * @return self
     */
    public function setMapSearch(?int $mapSearch): self
    {
        $this->mapSearch = $mapSearch;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMessage(): ?int
    {
        return $this->message;
    }

    /**
     * @param int $message
     * @return self
     */
    public function setMessage(?int $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return int
     */
    public function getMessageAction(): ?int
    {
        return $this->messageAction;
    }

    /**
     * @param int $messageAction
     * @return self
     */
    public function setMessageAction(?int $messageAction): self
    {
        $this->messageAction = $messageAction;
        return $this;
    }

    /**
     * @return int
     */
    public function getNextDayOpen(): ?int
    {
        return $this->nextDayOpen;
    }

    /**
     * @param int $nextDayOpen
     * @return self
     */
    public function setNextDayOpen(?int $nextDayOpen): self
    {
        $this->nextDayOpen = $nextDayOpen;
        return $this;
    }

    /**
     * @return float
     */
    public function getNextDayOpenCost(): ?float
    {
        return $this->nextDayOpenCost;
    }

    /**
     * @param float $nextDayOpenCost
     * @return self
     */
    public function setNextDayOpenCost(?float $nextDayOpenCost): self
    {
        $this->nextDayOpenCost = $nextDayOpenCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getNextDayOpenRate(): ?float
    {
        return $this->nextDayOpenRate;
    }

    /**
     * @param float $nextDayOpenRate
     * @return self
     */
    public function setNextDayOpenRate(?float $nextDayOpenRate): self
    {
        $this->nextDayOpenRate = $nextDayOpenRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayAmountRoi(): ?float
    {
        return $this->payAmountRoi;
    }

    /**
     * @param float $payAmountRoi
     * @return self
     */
    public function setPayAmountRoi(?float $payAmountRoi): self
    {
        $this->payAmountRoi = $payAmountRoi;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayCount(): ?int
    {
        return $this->payCount;
    }

    /**
     * @param int $payCount
     * @return self
     */
    public function setPayCount(?int $payCount): self
    {
        $this->payCount = $payCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhone(): ?int
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     * @return self
     */
    public function setPhone(?int $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneConfirm(): ?int
    {
        return $this->phoneConfirm;
    }

    /**
     * @param int $phoneConfirm
     * @return self
     */
    public function setPhoneConfirm(?int $phoneConfirm): self
    {
        $this->phoneConfirm = $phoneConfirm;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneConnect(): ?int
    {
        return $this->phoneConnect;
    }

    /**
     * @param int $phoneConnect
     * @return self
     */
    public function setPhoneConnect(?int $phoneConnect): self
    {
        $this->phoneConnect = $phoneConnect;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneEffective(): ?int
    {
        return $this->phoneEffective;
    }

    /**
     * @param int $phoneEffective
     * @return self
     */
    public function setPhoneEffective(?int $phoneEffective): self
    {
        $this->phoneEffective = $phoneEffective;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlay100FeedBreak(): ?int
    {
        return $this->play100FeedBreak;
    }

    /**
     * @param int $play100FeedBreak
     * @return self
     */
    public function setPlay100FeedBreak(?int $play100FeedBreak): self
    {
        $this->play100FeedBreak = $play100FeedBreak;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlay100FeedBreakRate(): ?float
    {
        return $this->play100FeedBreakRate;
    }

    /**
     * @param float $play100FeedBreakRate
     * @return self
     */
    public function setPlay100FeedBreakRate(?float $play100FeedBreakRate): self
    {
        $this->play100FeedBreakRate = $play100FeedBreakRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlay25FeedBreak(): ?int
    {
        return $this->play25FeedBreak;
    }

    /**
     * @param int $play25FeedBreak
     * @return self
     */
    public function setPlay25FeedBreak(?int $play25FeedBreak): self
    {
        $this->play25FeedBreak = $play25FeedBreak;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlay25FeedBreakRate(): ?float
    {
        return $this->play25FeedBreakRate;
    }

    /**
     * @param float $play25FeedBreakRate
     * @return self
     */
    public function setPlay25FeedBreakRate(?float $play25FeedBreakRate): self
    {
        $this->play25FeedBreakRate = $play25FeedBreakRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlay50FeedBreak(): ?int
    {
        return $this->play50FeedBreak;
    }

    /**
     * @param int $play50FeedBreak
     * @return self
     */
    public function setPlay50FeedBreak(?int $play50FeedBreak): self
    {
        $this->play50FeedBreak = $play50FeedBreak;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlay50FeedBreakRate(): ?float
    {
        return $this->play50FeedBreakRate;
    }

    /**
     * @param float $play50FeedBreakRate
     * @return self
     */
    public function setPlay50FeedBreakRate(?float $play50FeedBreakRate): self
    {
        $this->play50FeedBreakRate = $play50FeedBreakRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlay75FeedBreak(): ?int
    {
        return $this->play75FeedBreak;
    }

    /**
     * @param int $play75FeedBreak
     * @return self
     */
    public function setPlay75FeedBreak(?int $play75FeedBreak): self
    {
        $this->play75FeedBreak = $play75FeedBreak;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlay75FeedBreakRate(): ?float
    {
        return $this->play75FeedBreakRate;
    }

    /**
     * @param float $play75FeedBreakRate
     * @return self
     */
    public function setPlay75FeedBreakRate(?float $play75FeedBreakRate): self
    {
        $this->play75FeedBreakRate = $play75FeedBreakRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayDuration(): ?int
    {
        return $this->playDuration;
    }

    /**
     * @param int $playDuration
     * @return self
     */
    public function setPlayDuration(?int $playDuration): self
    {
        $this->playDuration = $playDuration;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayDuration10s(): ?int
    {
        return $this->playDuration10s;
    }

    /**
     * @param int $playDuration10s
     * @return self
     */
    public function setPlayDuration10s(?int $playDuration10s): self
    {
        $this->playDuration10s = $playDuration10s;
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
     * @return int
     */
    public function getPlayDuration2s(): ?int
    {
        return $this->playDuration2s;
    }

    /**
     * @param int $playDuration2s
     * @return self
     */
    public function setPlayDuration2s(?int $playDuration2s): self
    {
        $this->playDuration2s = $playDuration2s;
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
     * @return int
     */
    public function getPlayDuration3s(): ?int
    {
        return $this->playDuration3s;
    }

    /**
     * @param int $playDuration3s
     * @return self
     */
    public function setPlayDuration3s(?int $playDuration3s): self
    {
        $this->playDuration3s = $playDuration3s;
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
     * @return int
     */
    public function getPlayDurationSum(): ?int
    {
        return $this->playDurationSum;
    }

    /**
     * @param int $playDurationSum
     * @return self
     */
    public function setPlayDurationSum(?int $playDurationSum): self
    {
        $this->playDurationSum = $playDurationSum;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayOver(): ?int
    {
        return $this->playOver;
    }

    /**
     * @param int $playOver
     * @return self
     */
    public function setPlayOver(?int $playOver): self
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
     * @return int
     */
    public function getPlayableId(): ?int
    {
        return $this->playableId;
    }

    /**
     * @param int $playableId
     * @return self
     */
    public function setPlayableId(?int $playableId): self
    {
        $this->playableId = $playableId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayableName(): ?string
    {
        return $this->playableName;
    }

    /**
     * @param string $playableName
     * @return self
     */
    public function setPlayableName(?string $playableName): self
    {
        $this->playableName = $playableName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayableOrientation(): ?string
    {
        return $this->playableOrientation;
    }

    /**
     * @param string $playableOrientation
     * @return self
     */
    public function setPlayableOrientation(?string $playableOrientation): self
    {
        $this->playableOrientation = $playableOrientation;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayablePreviewUrl(): ?string
    {
        return $this->playablePreviewUrl;
    }

    /**
     * @param string $playablePreviewUrl
     * @return self
     */
    public function setPlayablePreviewUrl(?string $playablePreviewUrl): self
    {
        $this->playablePreviewUrl = $playablePreviewUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlayableUrl(): ?string
    {
        return $this->playableUrl;
    }

    /**
     * @param string $playableUrl
     * @return self
     */
    public function setPlayableUrl(?string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getPoiAddressClick(): ?int
    {
        return $this->poiAddressClick;
    }

    /**
     * @param int $poiAddressClick
     * @return self
     */
    public function setPoiAddressClick(?int $poiAddressClick): self
    {
        $this->poiAddressClick = $poiAddressClick;
        return $this;
    }

    /**
     * @return int
     */
    public function getPoiCollect(): ?int
    {
        return $this->poiCollect;
    }

    /**
     * @param int $poiCollect
     * @return self
     */
    public function setPoiCollect(?int $poiCollect): self
    {
        $this->poiCollect = $poiCollect;
        return $this;
    }

    /**
     * @return int
     */
    public function getPreConvertCost(): ?int
    {
        return $this->preConvertCost;
    }

    /**
     * @param int $preConvertCost
     * @return self
     */
    public function setPreConvertCost(?int $preConvertCost): self
    {
        $this->preConvertCost = $preConvertCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getPreConvertCount(): ?int
    {
        return $this->preConvertCount;
    }

    /**
     * @param int $preConvertCount
     * @return self
     */
    public function setPreConvertCount(?int $preConvertCount): self
    {
        $this->preConvertCount = $preConvertCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreConvertRate(): ?float
    {
        return $this->preConvertRate;
    }

    /**
     * @param float $preConvertRate
     * @return self
     */
    public function setPreConvertRate(?float $preConvertRate): self
    {
        $this->preConvertRate = $preConvertRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPreLoanCredit(): ?int
    {
        return $this->preLoanCredit;
    }

    /**
     * @param int $preLoanCredit
     * @return self
     */
    public function setPreLoanCredit(?int $preLoanCredit): self
    {
        $this->preLoanCredit = $preLoanCredit;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreLoanCreditCost(): ?float
    {
        return $this->preLoanCreditCost;
    }

    /**
     * @param float $preLoanCreditCost
     * @return self
     */
    public function setPreLoanCreditCost(?float $preLoanCreditCost): self
    {
        $this->preLoanCreditCost = $preLoanCreditCost;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListPricing $pricing
     * @return self
     */
    public function setPricing(?string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListPricingCategory
     */
    public function getPricingCategory(): ?string
    {
        return $this->pricingCategory;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListPricingCategory $pricingCategory
     * @return self
     */
    public function setPricingCategory(?string $pricingCategory): self
    {
        $this->pricingCategory = $pricingCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvinceName(): ?string
    {
        return $this->provinceName;
    }

    /**
     * @param string $provinceName
     * @return self
     */
    public function setProvinceName(?string $provinceName): self
    {
        $this->provinceName = $provinceName;
        return $this;
    }

    /**
     * @return int
     */
    public function getQq(): ?int
    {
        return $this->qq;
    }

    /**
     * @param int $qq
     * @return self
     */
    public function setQq(?int $qq): self
    {
        $this->qq = $qq;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuery(): ?string
    {
        return $this->query;
    }

    /**
     * @param string $query
     * @return self
     */
    public function setQuery(?string $query): self
    {
        $this->query = $query;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2DataListRealRecallMatchType
     */
    public function getRealRecallMatchType(): ?string
    {
        return $this->realRecallMatchType;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2DataListRealRecallMatchType $realRecallMatchType
     * @return self
     */
    public function setRealRecallMatchType(?string $realRecallMatchType): self
    {
        $this->realRecallMatchType = $realRecallMatchType;
        return $this;
    }

    /**
     * @return int
     */
    public function getRedirect(): ?int
    {
        return $this->redirect;
    }

    /**
     * @param int $redirect
     * @return self
     */
    public function setRedirect(?int $redirect): self
    {
        $this->redirect = $redirect;
        return $this;
    }

    /**
     * @return int
     */
    public function getRedirectToShop(): ?int
    {
        return $this->redirectToShop;
    }

    /**
     * @param int $redirectToShop
     * @return self
     */
    public function setRedirectToShop(?int $redirectToShop): self
    {
        $this->redirectToShop = $redirectToShop;
        return $this;
    }

    /**
     * @return int
     */
    public function getRegister(): ?int
    {
        return $this->register;
    }

    /**
     * @param int $register
     * @return self
     */
    public function setRegister(?int $register): self
    {
        $this->register = $register;
        return $this;
    }

    /**
     * @return int
     */
    public function getReport(): ?int
    {
        return $this->report;
    }

    /**
     * @param int $report
     * @return self
     */
    public function setReport(?int $report): self
    {
        $this->report = $report;
        return $this;
    }

    /**
     * @return int
     */
    public function getShare(): ?int
    {
        return $this->share;
    }

    /**
     * @param int $share
     * @return self
     */
    public function setShare(?int $share): self
    {
        $this->share = $share;
        return $this;
    }

    /**
     * @return int
     */
    public function getShopping(): ?int
    {
        return $this->shopping;
    }

    /**
     * @param int $shopping
     * @return self
     */
    public function setShopping(?int $shopping): self
    {
        $this->shopping = $shopping;
        return $this;
    }

    /**
     * @return int
     */
    public function getShow(): ?int
    {
        return $this->show;
    }

    /**
     * @param int $show
     * @return self
     */
    public function setShow(?int $show): self
    {
        $this->show = $show;
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
    public function getStatPayAmount(): ?float
    {
        return $this->statPayAmount;
    }

    /**
     * @param float $statPayAmount
     * @return self
     */
    public function setStatPayAmount(?float $statPayAmount): self
    {
        $this->statPayAmount = $statPayAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatUnionLtv0(): ?float
    {
        return $this->statUnionLtv0;
    }

    /**
     * @param float $statUnionLtv0
     * @return self
     */
    public function setStatUnionLtv0(?float $statUnionLtv0): self
    {
        $this->statUnionLtv0 = $statUnionLtv0;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatUnionLtv3(): ?float
    {
        return $this->statUnionLtv3;
    }

    /**
     * @param float $statUnionLtv3
     * @return self
     */
    public function setStatUnionLtv3(?float $statUnionLtv3): self
    {
        $this->statUnionLtv3 = $statUnionLtv3;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatUnionLtv7(): ?float
    {
        return $this->statUnionLtv7;
    }

    /**
     * @param float $statUnionLtv7
     * @return self
     */
    public function setStatUnionLtv7(?float $statUnionLtv7): self
    {
        $this->statUnionLtv7 = $statUnionLtv7;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubmitCertificationCount(): ?float
    {
        return $this->submitCertificationCount;
    }

    /**
     * @param float $submitCertificationCount
     * @return self
     */
    public function setSubmitCertificationCount(?float $submitCertificationCount): self
    {
        $this->submitCertificationCount = $submitCertificationCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPlay(): ?int
    {
        return $this->totalPlay;
    }

    /**
     * @param int $totalPlay
     * @return self
     */
    public function setTotalPlay(?int $totalPlay): self
    {
        $this->totalPlay = $totalPlay;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnionRoi0(): ?float
    {
        return $this->unionRoi0;
    }

    /**
     * @param float $unionRoi0
     * @return self
     */
    public function setUnionRoi0(?float $unionRoi0): self
    {
        $this->unionRoi0 = $unionRoi0;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnionRoi3(): ?float
    {
        return $this->unionRoi3;
    }

    /**
     * @param float $unionRoi3
     * @return self
     */
    public function setUnionRoi3(?float $unionRoi3): self
    {
        $this->unionRoi3 = $unionRoi3;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnionRoi7(): ?float
    {
        return $this->unionRoi7;
    }

    /**
     * @param float $unionRoi7
     * @return self
     */
    public function setUnionRoi7(?float $unionRoi7): self
    {
        $this->unionRoi7 = $unionRoi7;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidPlay(): ?int
    {
        return $this->validPlay;
    }

    /**
     * @param int $validPlay
     * @return self
     */
    public function setValidPlay(?int $validPlay): self
    {
        $this->validPlay = $validPlay;
        return $this;
    }

    /**
     * @return float
     */
    public function getValidPlayCost(): ?float
    {
        return $this->validPlayCost;
    }

    /**
     * @param float $validPlayCost
     * @return self
     */
    public function setValidPlayCost(?float $validPlayCost): self
    {
        $this->validPlayCost = $validPlayCost;
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
     * @return int
     */
    public function getView(): ?int
    {
        return $this->view;
    }

    /**
     * @param int $view
     * @return self
     */
    public function setView(?int $view): self
    {
        $this->view = $view;
        return $this;
    }

    /**
     * @return int
     */
    public function getVote(): ?int
    {
        return $this->vote;
    }

    /**
     * @param int $vote
     * @return self
     */
    public function setVote(?int $vote): self
    {
        $this->vote = $vote;
        return $this;
    }

    /**
     * @return int
     */
    public function getWechat(): ?int
    {
        return $this->wechat;
    }

    /**
     * @param int $wechat
     * @return self
     */
    public function setWechat(?int $wechat): self
    {
        $this->wechat = $wechat;
        return $this;
    }

    /**
     * @return float
     */
    public function getWechatFirstPayCost(): ?float
    {
        return $this->wechatFirstPayCost;
    }

    /**
     * @param float $wechatFirstPayCost
     * @return self
     */
    public function setWechatFirstPayCost(?float $wechatFirstPayCost): self
    {
        $this->wechatFirstPayCost = $wechatFirstPayCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getWechatFirstPayCount(): ?int
    {
        return $this->wechatFirstPayCount;
    }

    /**
     * @param int $wechatFirstPayCount
     * @return self
     */
    public function setWechatFirstPayCount(?int $wechatFirstPayCount): self
    {
        $this->wechatFirstPayCount = $wechatFirstPayCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getWechatFirstPayRate(): ?float
    {
        return $this->wechatFirstPayRate;
    }

    /**
     * @param float $wechatFirstPayRate
     * @return self
     */
    public function setWechatFirstPayRate(?float $wechatFirstPayRate): self
    {
        $this->wechatFirstPayRate = $wechatFirstPayRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getWechatLoginCost(): ?float
    {
        return $this->wechatLoginCost;
    }

    /**
     * @param float $wechatLoginCost
     * @return self
     */
    public function setWechatLoginCost(?float $wechatLoginCost): self
    {
        $this->wechatLoginCost = $wechatLoginCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getWechatLoginCount(): ?int
    {
        return $this->wechatLoginCount;
    }

    /**
     * @param int $wechatLoginCount
     * @return self
     */
    public function setWechatLoginCount(?int $wechatLoginCount): self
    {
        $this->wechatLoginCount = $wechatLoginCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getWechatPayAmount(): ?float
    {
        return $this->wechatPayAmount;
    }

    /**
     * @param float $wechatPayAmount
     * @return self
     */
    public function setWechatPayAmount(?float $wechatPayAmount): self
    {
        $this->wechatPayAmount = $wechatPayAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getWifiPlay(): ?int
    {
        return $this->wifiPlay;
    }

    /**
     * @param int $wifiPlay
     * @return self
     */
    public function setWifiPlay(?int $wifiPlay): self
    {
        $this->wifiPlay = $wifiPlay;
        return $this;
    }

    /**
     * @return float
     */
    public function getWifiPlayRate(): ?float
    {
        return $this->wifiPlayRate;
    }

    /**
     * @param float $wifiPlayRate
     * @return self
     */
    public function setWifiPlayRate(?float $wifiPlayRate): self
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
        if ($this->ac !== null) {
            $result['ac'] = $this->ac;
        }
        if ($this->active !== null) {
            $result['active'] = $this->active;
        }
        if ($this->activeCost !== null) {
            $result['active_cost'] = $this->activeCost;
        }
        if ($this->activePayAmount !== null) {
            $result['active_pay_amount'] = $this->activePayAmount;
        }
        if ($this->activePayCost !== null) {
            $result['active_pay_cost'] = $this->activePayCost;
        }
        if ($this->activePayRate !== null) {
            $result['active_pay_rate'] = $this->activePayRate;
        }
        if ($this->activeRate !== null) {
            $result['active_rate'] = $this->activeRate;
        }
        if ($this->activeRegisterCost !== null) {
            $result['active_register_cost'] = $this->activeRegisterCost;
        }
        if ($this->activeRegisterRate !== null) {
            $result['active_register_rate'] = $this->activeRegisterRate;
        }
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->adTag !== null) {
            $result['ad_tag'] = $this->adTag;
        }
        if ($this->advancedCreativeCounselClick !== null) {
            $result['advanced_creative_counsel_click'] = $this->advancedCreativeCounselClick;
        }
        if ($this->advancedCreativeCouponAddition !== null) {
            $result['advanced_creative_coupon_addition'] = $this->advancedCreativeCouponAddition;
        }
        if ($this->advancedCreativeFormClick !== null) {
            $result['advanced_creative_form_click'] = $this->advancedCreativeFormClick;
        }
        if ($this->advancedCreativeFormSubmit !== null) {
            $result['advanced_creative_form_submit'] = $this->advancedCreativeFormSubmit;
        }
        if ($this->advancedCreativePhoneClick !== null) {
            $result['advanced_creative_phone_click'] = $this->advancedCreativePhoneClick;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->approvalCount !== null) {
            $result['approval_count'] = $this->approvalCount;
        }
        if ($this->attributionActivePay7dCost !== null) {
            $result['attribution_active_pay_7d_cost'] = $this->attributionActivePay7dCost;
        }
        if ($this->attributionActivePay7dCount !== null) {
            $result['attribution_active_pay_7d_count'] = $this->attributionActivePay7dCount;
        }
        if ($this->attributionActivePay7dPerCount !== null) {
            $result['attribution_active_pay_7d_per_count'] = $this->attributionActivePay7dPerCount;
        }
        if ($this->attributionActivePay7dRate !== null) {
            $result['attribution_active_pay_7d_rate'] = $this->attributionActivePay7dRate;
        }
        if ($this->attributionActivePayIntraOneDayAmount !== null) {
            $result['attribution_active_pay_intra_one_day_amount'] = $this->attributionActivePayIntraOneDayAmount;
        }
        if ($this->attributionActivePayIntraOneDayCost !== null) {
            $result['attribution_active_pay_intra_one_day_cost'] = $this->attributionActivePayIntraOneDayCost;
        }
        if ($this->attributionActivePayIntraOneDayCount !== null) {
            $result['attribution_active_pay_intra_one_day_count'] = $this->attributionActivePayIntraOneDayCount;
        }
        if ($this->attributionActivePayIntraOneDayRate !== null) {
            $result['attribution_active_pay_intra_one_day_rate'] = $this->attributionActivePayIntraOneDayRate;
        }
        if ($this->attributionActivePayIntraOneDayRoi !== null) {
            $result['attribution_active_pay_intra_one_day_roi'] = $this->attributionActivePayIntraOneDayRoi;
        }
        if ($this->attributionConvert !== null) {
            $result['attribution_convert'] = $this->attributionConvert;
        }
        if ($this->attributionConvertCost !== null) {
            $result['attribution_convert_cost'] = $this->attributionConvertCost;
        }
        if ($this->attributionDayAcitvePayCount !== null) {
            $result['attribution_day_acitve_pay_count'] = $this->attributionDayAcitvePayCount;
        }
        if ($this->attributionDayActivePayCount !== null) {
            $result['attribution_day_active_pay_count'] = $this->attributionDayActivePayCount;
        }
        if ($this->attributionDeepConvert !== null) {
            $result['attribution_deep_convert'] = $this->attributionDeepConvert;
        }
        if ($this->attributionDeepConvertCost !== null) {
            $result['attribution_deep_convert_cost'] = $this->attributionDeepConvertCost;
        }
        if ($this->attributionGameInAppLtv1day !== null) {
            $result['attribution_game_in_app_ltv_1day'] = $this->attributionGameInAppLtv1day;
        }
        if ($this->attributionGameInAppLtv2days !== null) {
            $result['attribution_game_in_app_ltv_2days'] = $this->attributionGameInAppLtv2days;
        }
        if ($this->attributionGameInAppLtv3days !== null) {
            $result['attribution_game_in_app_ltv_3days'] = $this->attributionGameInAppLtv3days;
        }
        if ($this->attributionGameInAppLtv4days !== null) {
            $result['attribution_game_in_app_ltv_4days'] = $this->attributionGameInAppLtv4days;
        }
        if ($this->attributionGameInAppLtv5days !== null) {
            $result['attribution_game_in_app_ltv_5days'] = $this->attributionGameInAppLtv5days;
        }
        if ($this->attributionGameInAppLtv6days !== null) {
            $result['attribution_game_in_app_ltv_6days'] = $this->attributionGameInAppLtv6days;
        }
        if ($this->attributionGameInAppLtv7days !== null) {
            $result['attribution_game_in_app_ltv_7days'] = $this->attributionGameInAppLtv7days;
        }
        if ($this->attributionGameInAppLtv8days !== null) {
            $result['attribution_game_in_app_ltv_8days'] = $this->attributionGameInAppLtv8days;
        }
        if ($this->attributionGameInAppRoi1day !== null) {
            $result['attribution_game_in_app_roi_1day'] = $this->attributionGameInAppRoi1day;
        }
        if ($this->attributionGameInAppRoi2days !== null) {
            $result['attribution_game_in_app_roi_2days'] = $this->attributionGameInAppRoi2days;
        }
        if ($this->attributionGameInAppRoi3days !== null) {
            $result['attribution_game_in_app_roi_3days'] = $this->attributionGameInAppRoi3days;
        }
        if ($this->attributionGameInAppRoi4days !== null) {
            $result['attribution_game_in_app_roi_4days'] = $this->attributionGameInAppRoi4days;
        }
        if ($this->attributionGameInAppRoi5days !== null) {
            $result['attribution_game_in_app_roi_5days'] = $this->attributionGameInAppRoi5days;
        }
        if ($this->attributionGameInAppRoi6days !== null) {
            $result['attribution_game_in_app_roi_6days'] = $this->attributionGameInAppRoi6days;
        }
        if ($this->attributionGameInAppRoi7days !== null) {
            $result['attribution_game_in_app_roi_7days'] = $this->attributionGameInAppRoi7days;
        }
        if ($this->attributionGameInAppRoi8days !== null) {
            $result['attribution_game_in_app_roi_8days'] = $this->attributionGameInAppRoi8days;
        }
        if ($this->attributionGamePay7dCost !== null) {
            $result['attribution_game_pay_7d_cost'] = $this->attributionGamePay7dCost;
        }
        if ($this->attributionGamePay7dCount !== null) {
            $result['attribution_game_pay_7d_count'] = $this->attributionGamePay7dCount;
        }
        if ($this->attributionMicroGame0dLtv !== null) {
            $result['attribution_micro_game_0d_ltv'] = $this->attributionMicroGame0dLtv;
        }
        if ($this->attributionMicroGame0dRoi !== null) {
            $result['attribution_micro_game_0d_roi'] = $this->attributionMicroGame0dRoi;
        }
        if ($this->attributionMicroGame3dLtv !== null) {
            $result['attribution_micro_game_3d_ltv'] = $this->attributionMicroGame3dLtv;
        }
        if ($this->attributionMicroGame3dRoi !== null) {
            $result['attribution_micro_game_3d_roi'] = $this->attributionMicroGame3dRoi;
        }
        if ($this->attributionMicroGame7dLtv !== null) {
            $result['attribution_micro_game_7d_ltv'] = $this->attributionMicroGame7dLtv;
        }
        if ($this->attributionMicroGame7dRoi !== null) {
            $result['attribution_micro_game_7d_roi'] = $this->attributionMicroGame7dRoi;
        }
        if ($this->attributionNextDayOpenCnt !== null) {
            $result['attribution_next_day_open_cnt'] = $this->attributionNextDayOpenCnt;
        }
        if ($this->attributionNextDayOpenCost !== null) {
            $result['attribution_next_day_open_cost'] = $this->attributionNextDayOpenCost;
        }
        if ($this->attributionNextDayOpenRate !== null) {
            $result['attribution_next_day_open_rate'] = $this->attributionNextDayOpenRate;
        }
        if ($this->attributionRetention2dCnt !== null) {
            $result['attribution_retention_2d_cnt'] = $this->attributionRetention2dCnt;
        }
        if ($this->attributionRetention2dCost !== null) {
            $result['attribution_retention_2d_cost'] = $this->attributionRetention2dCost;
        }
        if ($this->attributionRetention2dRate !== null) {
            $result['attribution_retention_2d_rate'] = $this->attributionRetention2dRate;
        }
        if ($this->attributionRetention3dCnt !== null) {
            $result['attribution_retention_3d_cnt'] = $this->attributionRetention3dCnt;
        }
        if ($this->attributionRetention3dCost !== null) {
            $result['attribution_retention_3d_cost'] = $this->attributionRetention3dCost;
        }
        if ($this->attributionRetention3dRate !== null) {
            $result['attribution_retention_3d_rate'] = $this->attributionRetention3dRate;
        }
        if ($this->attributionRetention4dCnt !== null) {
            $result['attribution_retention_4d_cnt'] = $this->attributionRetention4dCnt;
        }
        if ($this->attributionRetention4dCost !== null) {
            $result['attribution_retention_4d_cost'] = $this->attributionRetention4dCost;
        }
        if ($this->attributionRetention4dRate !== null) {
            $result['attribution_retention_4d_rate'] = $this->attributionRetention4dRate;
        }
        if ($this->attributionRetention5dCnt !== null) {
            $result['attribution_retention_5d_cnt'] = $this->attributionRetention5dCnt;
        }
        if ($this->attributionRetention5dCost !== null) {
            $result['attribution_retention_5d_cost'] = $this->attributionRetention5dCost;
        }
        if ($this->attributionRetention5dRate !== null) {
            $result['attribution_retention_5d_rate'] = $this->attributionRetention5dRate;
        }
        if ($this->attributionRetention6dCnt !== null) {
            $result['attribution_retention_6d_cnt'] = $this->attributionRetention6dCnt;
        }
        if ($this->attributionRetention6dCost !== null) {
            $result['attribution_retention_6d_cost'] = $this->attributionRetention6dCost;
        }
        if ($this->attributionRetention6dRate !== null) {
            $result['attribution_retention_6d_rate'] = $this->attributionRetention6dRate;
        }
        if ($this->attributionRetention7dCnt !== null) {
            $result['attribution_retention_7d_cnt'] = $this->attributionRetention7dCnt;
        }
        if ($this->attributionRetention7dCost !== null) {
            $result['attribution_retention_7d_cost'] = $this->attributionRetention7dCost;
        }
        if ($this->attributionRetention7dRate !== null) {
            $result['attribution_retention_7d_rate'] = $this->attributionRetention7dRate;
        }
        if ($this->attributionRetention7dSumCnt !== null) {
            $result['attribution_retention_7d_sum_cnt'] = $this->attributionRetention7dSumCnt;
        }
        if ($this->attributionRetention7dTotalCost !== null) {
            $result['attribution_retention_7d_total_cost'] = $this->attributionRetention7dTotalCost;
        }
        if ($this->attributionWechatFirstPay30dCost !== null) {
            $result['attribution_wechat_first_pay_30d_cost'] = $this->attributionWechatFirstPay30dCost;
        }
        if ($this->attributionWechatFirstPay30dCount !== null) {
            $result['attribution_wechat_first_pay_30d_count'] = $this->attributionWechatFirstPay30dCount;
        }
        if ($this->attributionWechatFirstPay30dRate !== null) {
            $result['attribution_wechat_first_pay_30d_rate'] = $this->attributionWechatFirstPay30dRate;
        }
        if ($this->attributionWechatLogin30dCost !== null) {
            $result['attribution_wechat_login_30d_cost'] = $this->attributionWechatLogin30dCost;
        }
        if ($this->attributionWechatLogin30dCount !== null) {
            $result['attribution_wechat_login_30d_count'] = $this->attributionWechatLogin30dCount;
        }
        if ($this->attributionWechatPay30dAmount !== null) {
            $result['attribution_wechat_pay_30d_amount'] = $this->attributionWechatPay30dAmount;
        }
        if ($this->attributionWechatPay30dRoi !== null) {
            $result['attribution_wechat_pay_30d_roi'] = $this->attributionWechatPay30dRoi;
        }
        if ($this->averagePlayProgress !== null) {
            $result['average_play_progress'] = $this->averagePlayProgress;
        }
        if ($this->averagePlayTimePerPlay !== null) {
            $result['average_play_time_per_play'] = $this->averagePlayTimePerPlay;
        }
        if ($this->averageVideoPlay !== null) {
            $result['average_video_play'] = $this->averageVideoPlay;
        }
        if ($this->avgClickCost !== null) {
            $result['avg_click_cost'] = $this->avgClickCost;
        }
        if ($this->avgRank !== null) {
            $result['avg_rank'] = $this->avgRank;
        }
        if ($this->avgShowCost !== null) {
            $result['avg_show_cost'] = $this->avgShowCost;
        }
        if ($this->bidword !== null) {
            $result['bidword'] = $this->bidword;
        }
        if ($this->bidwordId !== null) {
            $result['bidword_id'] = $this->bidwordId;
        }
        if ($this->button !== null) {
            $result['button'] = $this->button;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignName !== null) {
            $result['campaign_name'] = $this->campaignName;
        }
        if ($this->campaignType !== null) {
            $result['campaign_type'] = $this->campaignType;
        }
        if ($this->cardShow !== null) {
            $result['card_show'] = $this->cardShow;
        }
        if ($this->cityName !== null) {
            $result['city_name'] = $this->cityName;
        }
        if ($this->click !== null) {
            $result['click'] = $this->click;
        }
        if ($this->clickCallDy !== null) {
            $result['click_call_dy'] = $this->clickCallDy;
        }
        if ($this->clickDownload !== null) {
            $result['click_download'] = $this->clickDownload;
        }
        if ($this->clickInstall !== null) {
            $result['click_install'] = $this->clickInstall;
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
        if ($this->comment !== null) {
            $result['comment'] = $this->comment;
        }
        if ($this->commuteFirstPayCount !== null) {
            $result['commute_first_pay_count'] = $this->commuteFirstPayCount;
        }
        if ($this->consult !== null) {
            $result['consult'] = $this->consult;
        }
        if ($this->consultEffective !== null) {
            $result['consult_effective'] = $this->consultEffective;
        }
        if ($this->convert !== null) {
            $result['convert'] = $this->convert;
        }
        if ($this->convertCost !== null) {
            $result['convert_cost'] = $this->convertCost;
        }
        if ($this->convertRate !== null) {
            $result['convert_rate'] = $this->convertRate;
        }
        if ($this->convertShowRate !== null) {
            $result['convert_show_rate'] = $this->convertShowRate;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->coupon !== null) {
            $result['coupon'] = $this->coupon;
        }
        if ($this->couponSinglePage !== null) {
            $result['coupon_single_page'] = $this->couponSinglePage;
        }
        if ($this->cpa !== null) {
            $result['cpa'] = $this->cpa;
        }
        if ($this->cpc !== null) {
            $result['cpc'] = $this->cpc;
        }
        if ($this->cpm !== null) {
            $result['cpm'] = $this->cpm;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->creativeMaterialMode !== null) {
            $result['creative_material_mode'] = $this->creativeMaterialMode;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
        }
        if ($this->customerEffective !== null) {
            $result['customer_effective'] = $this->customerEffective;
        }
        if ($this->deepConvert !== null) {
            $result['deep_convert'] = $this->deepConvert;
        }
        if ($this->deepConvertCost !== null) {
            $result['deep_convert_cost'] = $this->deepConvertCost;
        }
        if ($this->deepConvertRate !== null) {
            $result['deep_convert_rate'] = $this->deepConvertRate;
        }
        if ($this->dislike !== null) {
            $result['dislike'] = $this->dislike;
        }
        if ($this->download !== null) {
            $result['download'] = $this->download;
        }
        if ($this->downloadFinish !== null) {
            $result['download_finish'] = $this->downloadFinish;
        }
        if ($this->downloadFinishCost !== null) {
            $result['download_finish_cost'] = $this->downloadFinishCost;
        }
        if ($this->downloadFinishRate !== null) {
            $result['download_finish_rate'] = $this->downloadFinishRate;
        }
        if ($this->downloadStart !== null) {
            $result['download_start'] = $this->downloadStart;
        }
        if ($this->downloadStartCost !== null) {
            $result['download_start_cost'] = $this->downloadStartCost;
        }
        if ($this->downloadStartRate !== null) {
            $result['download_start_rate'] = $this->downloadStartRate;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->firstOrderCount !== null) {
            $result['first_order_count'] = $this->firstOrderCount;
        }
        if ($this->firstRentalOrderCount !== null) {
            $result['first_rental_order_count'] = $this->firstRentalOrderCount;
        }
        if ($this->follow !== null) {
            $result['follow'] = $this->follow;
        }
        if ($this->form !== null) {
            $result['form'] = $this->form;
        }
        if ($this->gameAddiction !== null) {
            $result['game_addiction'] = $this->gameAddiction;
        }
        if ($this->gameAddictionCost !== null) {
            $result['game_addiction_cost'] = $this->gameAddictionCost;
        }
        if ($this->gameAddictionRate !== null) {
            $result['game_addiction_rate'] = $this->gameAddictionRate;
        }
        if ($this->gamePayCost !== null) {
            $result['game_pay_cost'] = $this->gamePayCost;
        }
        if ($this->gamePayCount !== null) {
            $result['game_pay_count'] = $this->gamePayCount;
        }
        if ($this->gender !== null) {
            $result['gender'] = $this->gender;
        }
        if ($this->homeVisited !== null) {
            $result['home_visited'] = $this->homeVisited;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->iesChallengeClick !== null) {
            $result['ies_challenge_click'] = $this->iesChallengeClick;
        }
        if ($this->iesMusicClick !== null) {
            $result['ies_music_click'] = $this->iesMusicClick;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->inAppCart !== null) {
            $result['in_app_cart'] = $this->inAppCart;
        }
        if ($this->inAppDetailUv !== null) {
            $result['in_app_detail_uv'] = $this->inAppDetailUv;
        }
        if ($this->inAppOrder !== null) {
            $result['in_app_order'] = $this->inAppOrder;
        }
        if ($this->inAppPay !== null) {
            $result['in_app_pay'] = $this->inAppPay;
        }
        if ($this->inAppUv !== null) {
            $result['in_app_uv'] = $this->inAppUv;
        }
        if ($this->installFinish !== null) {
            $result['install_finish'] = $this->installFinish;
        }
        if ($this->installFinishCost !== null) {
            $result['install_finish_cost'] = $this->installFinishCost;
        }
        if ($this->installFinishRate !== null) {
            $result['install_finish_rate'] = $this->installFinishRate;
        }
        if ($this->interactPerCost !== null) {
            $result['interact_per_cost'] = $this->interactPerCost;
        }
        if ($this->interestTag !== null) {
            $result['interest_tag'] = $this->interestTag;
        }
        if ($this->inventory !== null) {
            $result['inventory'] = $this->inventory;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->like !== null) {
            $result['like'] = $this->like;
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
        if ($this->liveWatchOneMinuteCount !== null) {
            $result['live_watch_one_minute_count'] = $this->liveWatchOneMinuteCount;
        }
        if ($this->loanCompletion !== null) {
            $result['loan_completion'] = $this->loanCompletion;
        }
        if ($this->loanCompletionCost !== null) {
            $result['loan_completion_cost'] = $this->loanCompletionCost;
        }
        if ($this->loanCompletionRate !== null) {
            $result['loan_completion_rate'] = $this->loanCompletionRate;
        }
        if ($this->loanCredit !== null) {
            $result['loan_credit'] = $this->loanCredit;
        }
        if ($this->loanCreditCost !== null) {
            $result['loan_credit_cost'] = $this->loanCreditCost;
        }
        if ($this->loanCreditRate !== null) {
            $result['loan_credit_rate'] = $this->loanCreditRate;
        }
        if ($this->locationClick !== null) {
            $result['location_click'] = $this->locationClick;
        }
        if ($this->lottery !== null) {
            $result['lottery'] = $this->lottery;
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
        if ($this->lubanLivePayOrderStatCost !== null) {
            $result['luban_live_pay_order_stat_cost'] = $this->lubanLivePayOrderStatCost;
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
        if ($this->mapSearch !== null) {
            $result['map_search'] = $this->mapSearch;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->messageAction !== null) {
            $result['message_action'] = $this->messageAction;
        }
        if ($this->nextDayOpen !== null) {
            $result['next_day_open'] = $this->nextDayOpen;
        }
        if ($this->nextDayOpenCost !== null) {
            $result['next_day_open_cost'] = $this->nextDayOpenCost;
        }
        if ($this->nextDayOpenRate !== null) {
            $result['next_day_open_rate'] = $this->nextDayOpenRate;
        }
        if ($this->payAmountRoi !== null) {
            $result['pay_amount_roi'] = $this->payAmountRoi;
        }
        if ($this->payCount !== null) {
            $result['pay_count'] = $this->payCount;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->phoneConfirm !== null) {
            $result['phone_confirm'] = $this->phoneConfirm;
        }
        if ($this->phoneConnect !== null) {
            $result['phone_connect'] = $this->phoneConnect;
        }
        if ($this->phoneEffective !== null) {
            $result['phone_effective'] = $this->phoneEffective;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->play100FeedBreak !== null) {
            $result['play_100_feed_break'] = $this->play100FeedBreak;
        }
        if ($this->play100FeedBreakRate !== null) {
            $result['play_100_feed_break_rate'] = $this->play100FeedBreakRate;
        }
        if ($this->play25FeedBreak !== null) {
            $result['play_25_feed_break'] = $this->play25FeedBreak;
        }
        if ($this->play25FeedBreakRate !== null) {
            $result['play_25_feed_break_rate'] = $this->play25FeedBreakRate;
        }
        if ($this->play50FeedBreak !== null) {
            $result['play_50_feed_break'] = $this->play50FeedBreak;
        }
        if ($this->play50FeedBreakRate !== null) {
            $result['play_50_feed_break_rate'] = $this->play50FeedBreakRate;
        }
        if ($this->play75FeedBreak !== null) {
            $result['play_75_feed_break'] = $this->play75FeedBreak;
        }
        if ($this->play75FeedBreakRate !== null) {
            $result['play_75_feed_break_rate'] = $this->play75FeedBreakRate;
        }
        if ($this->playDuration !== null) {
            $result['play_duration'] = $this->playDuration;
        }
        if ($this->playDuration10s !== null) {
            $result['play_duration_10s'] = $this->playDuration10s;
        }
        if ($this->playDuration10sRate !== null) {
            $result['play_duration_10s_rate'] = $this->playDuration10sRate;
        }
        if ($this->playDuration2s !== null) {
            $result['play_duration_2s'] = $this->playDuration2s;
        }
        if ($this->playDuration2sRate !== null) {
            $result['play_duration_2s_rate'] = $this->playDuration2sRate;
        }
        if ($this->playDuration3s !== null) {
            $result['play_duration_3s'] = $this->playDuration3s;
        }
        if ($this->playDuration3sRate !== null) {
            $result['play_duration_3s_rate'] = $this->playDuration3sRate;
        }
        if ($this->playDuration5sRate !== null) {
            $result['play_duration_5s_rate'] = $this->playDuration5sRate;
        }
        if ($this->playDurationSum !== null) {
            $result['play_duration_sum'] = $this->playDurationSum;
        }
        if ($this->playOver !== null) {
            $result['play_over'] = $this->playOver;
        }
        if ($this->playOverRate !== null) {
            $result['play_over_rate'] = $this->playOverRate;
        }
        if ($this->playableId !== null) {
            $result['playable_id'] = $this->playableId;
        }
        if ($this->playableName !== null) {
            $result['playable_name'] = $this->playableName;
        }
        if ($this->playableOrientation !== null) {
            $result['playable_orientation'] = $this->playableOrientation;
        }
        if ($this->playablePreviewUrl !== null) {
            $result['playable_preview_url'] = $this->playablePreviewUrl;
        }
        if ($this->playableUrl !== null) {
            $result['playable_url'] = $this->playableUrl;
        }
        if ($this->poiAddressClick !== null) {
            $result['poi_address_click'] = $this->poiAddressClick;
        }
        if ($this->poiCollect !== null) {
            $result['poi_collect'] = $this->poiCollect;
        }
        if ($this->preConvertCost !== null) {
            $result['pre_convert_cost'] = $this->preConvertCost;
        }
        if ($this->preConvertCount !== null) {
            $result['pre_convert_count'] = $this->preConvertCount;
        }
        if ($this->preConvertRate !== null) {
            $result['pre_convert_rate'] = $this->preConvertRate;
        }
        if ($this->preLoanCredit !== null) {
            $result['pre_loan_credit'] = $this->preLoanCredit;
        }
        if ($this->preLoanCreditCost !== null) {
            $result['pre_loan_credit_cost'] = $this->preLoanCreditCost;
        }
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
        }
        if ($this->pricingCategory !== null) {
            $result['pricing_category'] = $this->pricingCategory;
        }
        if ($this->provinceName !== null) {
            $result['province_name'] = $this->provinceName;
        }
        if ($this->qq !== null) {
            $result['qq'] = $this->qq;
        }
        if ($this->query !== null) {
            $result['query'] = $this->query;
        }
        if ($this->realRecallMatchType !== null) {
            $result['real_recall_match_type'] = $this->realRecallMatchType;
        }
        if ($this->redirect !== null) {
            $result['redirect'] = $this->redirect;
        }
        if ($this->redirectToShop !== null) {
            $result['redirect_to_shop'] = $this->redirectToShop;
        }
        if ($this->register !== null) {
            $result['register'] = $this->register;
        }
        if ($this->report !== null) {
            $result['report'] = $this->report;
        }
        if ($this->share !== null) {
            $result['share'] = $this->share;
        }
        if ($this->shopping !== null) {
            $result['shopping'] = $this->shopping;
        }
        if ($this->show !== null) {
            $result['show'] = $this->show;
        }
        if ($this->statDatetime !== null) {
            $result['stat_datetime'] = $this->statDatetime;
        }
        if ($this->statPayAmount !== null) {
            $result['stat_pay_amount'] = $this->statPayAmount;
        }
        if ($this->statUnionLtv0 !== null) {
            $result['stat_union_ltv_0'] = $this->statUnionLtv0;
        }
        if ($this->statUnionLtv3 !== null) {
            $result['stat_union_ltv_3'] = $this->statUnionLtv3;
        }
        if ($this->statUnionLtv7 !== null) {
            $result['stat_union_ltv_7'] = $this->statUnionLtv7;
        }
        if ($this->submitCertificationCount !== null) {
            $result['submit_certification_count'] = $this->submitCertificationCount;
        }
        if ($this->totalPlay !== null) {
            $result['total_play'] = $this->totalPlay;
        }
        if ($this->unionRoi0 !== null) {
            $result['union_roi_0'] = $this->unionRoi0;
        }
        if ($this->unionRoi3 !== null) {
            $result['union_roi_3'] = $this->unionRoi3;
        }
        if ($this->unionRoi7 !== null) {
            $result['union_roi_7'] = $this->unionRoi7;
        }
        if ($this->validPlay !== null) {
            $result['valid_play'] = $this->validPlay;
        }
        if ($this->validPlayCost !== null) {
            $result['valid_play_cost'] = $this->validPlayCost;
        }
        if ($this->validPlayRate !== null) {
            $result['valid_play_rate'] = $this->validPlayRate;
        }
        if ($this->view !== null) {
            $result['view'] = $this->view;
        }
        if ($this->vote !== null) {
            $result['vote'] = $this->vote;
        }
        if ($this->wechat !== null) {
            $result['wechat'] = $this->wechat;
        }
        if ($this->wechatFirstPayCost !== null) {
            $result['wechat_first_pay_cost'] = $this->wechatFirstPayCost;
        }
        if ($this->wechatFirstPayCount !== null) {
            $result['wechat_first_pay_count'] = $this->wechatFirstPayCount;
        }
        if ($this->wechatFirstPayRate !== null) {
            $result['wechat_first_pay_rate'] = $this->wechatFirstPayRate;
        }
        if ($this->wechatLoginCost !== null) {
            $result['wechat_login_cost'] = $this->wechatLoginCost;
        }
        if ($this->wechatLoginCount !== null) {
            $result['wechat_login_count'] = $this->wechatLoginCount;
        }
        if ($this->wechatPayAmount !== null) {
            $result['wechat_pay_amount'] = $this->wechatPayAmount;
        }
        if ($this->wifiPlay !== null) {
            $result['wifi_play'] = $this->wifiPlay;
        }
        if ($this->wifiPlayRate !== null) {
            $result['wifi_play_rate'] = $this->wifiPlayRate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ac'] ?? null) !== null) {
            $obj->ac = (string) $v;
        }
        if (($v = $data['active'] ?? null) !== null) {
            $obj->active = (int) $v;
        }
        if (($v = $data['active_cost'] ?? null) !== null) {
            $obj->activeCost = (float) $v;
        }
        if (($v = $data['active_pay_amount'] ?? null) !== null) {
            $obj->activePayAmount = (int) $v;
        }
        if (($v = $data['active_pay_cost'] ?? null) !== null) {
            $obj->activePayCost = (float) $v;
        }
        if (($v = $data['active_pay_rate'] ?? null) !== null) {
            $obj->activePayRate = (float) $v;
        }
        if (($v = $data['active_rate'] ?? null) !== null) {
            $obj->activeRate = (float) $v;
        }
        if (($v = $data['active_register_cost'] ?? null) !== null) {
            $obj->activeRegisterCost = (float) $v;
        }
        if (($v = $data['active_register_rate'] ?? null) !== null) {
            $obj->activeRegisterRate = (float) $v;
        }
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['ad_tag'] ?? null) !== null) {
            $obj->adTag = (string) $v;
        }
        if (($v = $data['advanced_creative_counsel_click'] ?? null) !== null) {
            $obj->advancedCreativeCounselClick = (int) $v;
        }
        if (($v = $data['advanced_creative_coupon_addition'] ?? null) !== null) {
            $obj->advancedCreativeCouponAddition = (int) $v;
        }
        if (($v = $data['advanced_creative_form_click'] ?? null) !== null) {
            $obj->advancedCreativeFormClick = (int) $v;
        }
        if (($v = $data['advanced_creative_form_submit'] ?? null) !== null) {
            $obj->advancedCreativeFormSubmit = (int) $v;
        }
        if (($v = $data['advanced_creative_phone_click'] ?? null) !== null) {
            $obj->advancedCreativePhoneClick = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['age'] ?? null) !== null) {
            $obj->age = (string) $v;
        }
        if (($v = $data['approval_count'] ?? null) !== null) {
            $obj->approvalCount = (float) $v;
        }
        if (($v = $data['attribution_active_pay_7d_cost'] ?? null) !== null) {
            $obj->attributionActivePay7dCost = (float) $v;
        }
        if (($v = $data['attribution_active_pay_7d_count'] ?? null) !== null) {
            $obj->attributionActivePay7dCount = (int) $v;
        }
        if (($v = $data['attribution_active_pay_7d_per_count'] ?? null) !== null) {
            $obj->attributionActivePay7dPerCount = (int) $v;
        }
        if (($v = $data['attribution_active_pay_7d_rate'] ?? null) !== null) {
            $obj->attributionActivePay7dRate = (float) $v;
        }
        if (($v = $data['attribution_active_pay_intra_one_day_amount'] ?? null) !== null) {
            $obj->attributionActivePayIntraOneDayAmount = (float) $v;
        }
        if (($v = $data['attribution_active_pay_intra_one_day_cost'] ?? null) !== null) {
            $obj->attributionActivePayIntraOneDayCost = (float) $v;
        }
        if (($v = $data['attribution_active_pay_intra_one_day_count'] ?? null) !== null) {
            $obj->attributionActivePayIntraOneDayCount = (int) $v;
        }
        if (($v = $data['attribution_active_pay_intra_one_day_rate'] ?? null) !== null) {
            $obj->attributionActivePayIntraOneDayRate = (float) $v;
        }
        if (($v = $data['attribution_active_pay_intra_one_day_roi'] ?? null) !== null) {
            $obj->attributionActivePayIntraOneDayRoi = (float) $v;
        }
        if (($v = $data['attribution_convert'] ?? null) !== null) {
            $obj->attributionConvert = (int) $v;
        }
        if (($v = $data['attribution_convert_cost'] ?? null) !== null) {
            $obj->attributionConvertCost = (float) $v;
        }
        if (($v = $data['attribution_day_acitve_pay_count'] ?? null) !== null) {
            $obj->attributionDayAcitvePayCount = (int) $v;
        }
        if (($v = $data['attribution_day_active_pay_count'] ?? null) !== null) {
            $obj->attributionDayActivePayCount = (int) $v;
        }
        if (($v = $data['attribution_deep_convert'] ?? null) !== null) {
            $obj->attributionDeepConvert = (int) $v;
        }
        if (($v = $data['attribution_deep_convert_cost'] ?? null) !== null) {
            $obj->attributionDeepConvertCost = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_ltv_1day'] ?? null) !== null) {
            $obj->attributionGameInAppLtv1day = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_ltv_2days'] ?? null) !== null) {
            $obj->attributionGameInAppLtv2days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_ltv_3days'] ?? null) !== null) {
            $obj->attributionGameInAppLtv3days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_ltv_4days'] ?? null) !== null) {
            $obj->attributionGameInAppLtv4days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_ltv_5days'] ?? null) !== null) {
            $obj->attributionGameInAppLtv5days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_ltv_6days'] ?? null) !== null) {
            $obj->attributionGameInAppLtv6days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_ltv_7days'] ?? null) !== null) {
            $obj->attributionGameInAppLtv7days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_ltv_8days'] ?? null) !== null) {
            $obj->attributionGameInAppLtv8days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_roi_1day'] ?? null) !== null) {
            $obj->attributionGameInAppRoi1day = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_roi_2days'] ?? null) !== null) {
            $obj->attributionGameInAppRoi2days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_roi_3days'] ?? null) !== null) {
            $obj->attributionGameInAppRoi3days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_roi_4days'] ?? null) !== null) {
            $obj->attributionGameInAppRoi4days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_roi_5days'] ?? null) !== null) {
            $obj->attributionGameInAppRoi5days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_roi_6days'] ?? null) !== null) {
            $obj->attributionGameInAppRoi6days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_roi_7days'] ?? null) !== null) {
            $obj->attributionGameInAppRoi7days = (float) $v;
        }
        if (($v = $data['attribution_game_in_app_roi_8days'] ?? null) !== null) {
            $obj->attributionGameInAppRoi8days = (float) $v;
        }
        if (($v = $data['attribution_game_pay_7d_cost'] ?? null) !== null) {
            $obj->attributionGamePay7dCost = (float) $v;
        }
        if (($v = $data['attribution_game_pay_7d_count'] ?? null) !== null) {
            $obj->attributionGamePay7dCount = (int) $v;
        }
        if (($v = $data['attribution_micro_game_0d_ltv'] ?? null) !== null) {
            $obj->attributionMicroGame0dLtv = (float) $v;
        }
        if (($v = $data['attribution_micro_game_0d_roi'] ?? null) !== null) {
            $obj->attributionMicroGame0dRoi = (float) $v;
        }
        if (($v = $data['attribution_micro_game_3d_ltv'] ?? null) !== null) {
            $obj->attributionMicroGame3dLtv = (float) $v;
        }
        if (($v = $data['attribution_micro_game_3d_roi'] ?? null) !== null) {
            $obj->attributionMicroGame3dRoi = (float) $v;
        }
        if (($v = $data['attribution_micro_game_7d_ltv'] ?? null) !== null) {
            $obj->attributionMicroGame7dLtv = (float) $v;
        }
        if (($v = $data['attribution_micro_game_7d_roi'] ?? null) !== null) {
            $obj->attributionMicroGame7dRoi = (float) $v;
        }
        if (($v = $data['attribution_next_day_open_cnt'] ?? null) !== null) {
            $obj->attributionNextDayOpenCnt = (int) $v;
        }
        if (($v = $data['attribution_next_day_open_cost'] ?? null) !== null) {
            $obj->attributionNextDayOpenCost = (float) $v;
        }
        if (($v = $data['attribution_next_day_open_rate'] ?? null) !== null) {
            $obj->attributionNextDayOpenRate = (float) $v;
        }
        if (($v = $data['attribution_retention_2d_cnt'] ?? null) !== null) {
            $obj->attributionRetention2dCnt = (int) $v;
        }
        if (($v = $data['attribution_retention_2d_cost'] ?? null) !== null) {
            $obj->attributionRetention2dCost = (float) $v;
        }
        if (($v = $data['attribution_retention_2d_rate'] ?? null) !== null) {
            $obj->attributionRetention2dRate = (float) $v;
        }
        if (($v = $data['attribution_retention_3d_cnt'] ?? null) !== null) {
            $obj->attributionRetention3dCnt = (int) $v;
        }
        if (($v = $data['attribution_retention_3d_cost'] ?? null) !== null) {
            $obj->attributionRetention3dCost = (float) $v;
        }
        if (($v = $data['attribution_retention_3d_rate'] ?? null) !== null) {
            $obj->attributionRetention3dRate = (float) $v;
        }
        if (($v = $data['attribution_retention_4d_cnt'] ?? null) !== null) {
            $obj->attributionRetention4dCnt = (int) $v;
        }
        if (($v = $data['attribution_retention_4d_cost'] ?? null) !== null) {
            $obj->attributionRetention4dCost = (float) $v;
        }
        if (($v = $data['attribution_retention_4d_rate'] ?? null) !== null) {
            $obj->attributionRetention4dRate = (float) $v;
        }
        if (($v = $data['attribution_retention_5d_cnt'] ?? null) !== null) {
            $obj->attributionRetention5dCnt = (int) $v;
        }
        if (($v = $data['attribution_retention_5d_cost'] ?? null) !== null) {
            $obj->attributionRetention5dCost = (float) $v;
        }
        if (($v = $data['attribution_retention_5d_rate'] ?? null) !== null) {
            $obj->attributionRetention5dRate = (float) $v;
        }
        if (($v = $data['attribution_retention_6d_cnt'] ?? null) !== null) {
            $obj->attributionRetention6dCnt = (int) $v;
        }
        if (($v = $data['attribution_retention_6d_cost'] ?? null) !== null) {
            $obj->attributionRetention6dCost = (float) $v;
        }
        if (($v = $data['attribution_retention_6d_rate'] ?? null) !== null) {
            $obj->attributionRetention6dRate = (float) $v;
        }
        if (($v = $data['attribution_retention_7d_cnt'] ?? null) !== null) {
            $obj->attributionRetention7dCnt = (int) $v;
        }
        if (($v = $data['attribution_retention_7d_cost'] ?? null) !== null) {
            $obj->attributionRetention7dCost = (float) $v;
        }
        if (($v = $data['attribution_retention_7d_rate'] ?? null) !== null) {
            $obj->attributionRetention7dRate = (float) $v;
        }
        if (($v = $data['attribution_retention_7d_sum_cnt'] ?? null) !== null) {
            $obj->attributionRetention7dSumCnt = (int) $v;
        }
        if (($v = $data['attribution_retention_7d_total_cost'] ?? null) !== null) {
            $obj->attributionRetention7dTotalCost = (float) $v;
        }
        if (($v = $data['attribution_wechat_first_pay_30d_cost'] ?? null) !== null) {
            $obj->attributionWechatFirstPay30dCost = (float) $v;
        }
        if (($v = $data['attribution_wechat_first_pay_30d_count'] ?? null) !== null) {
            $obj->attributionWechatFirstPay30dCount = (int) $v;
        }
        if (($v = $data['attribution_wechat_first_pay_30d_rate'] ?? null) !== null) {
            $obj->attributionWechatFirstPay30dRate = (float) $v;
        }
        if (($v = $data['attribution_wechat_login_30d_cost'] ?? null) !== null) {
            $obj->attributionWechatLogin30dCost = (float) $v;
        }
        if (($v = $data['attribution_wechat_login_30d_count'] ?? null) !== null) {
            $obj->attributionWechatLogin30dCount = (int) $v;
        }
        if (($v = $data['attribution_wechat_pay_30d_amount'] ?? null) !== null) {
            $obj->attributionWechatPay30dAmount = (float) $v;
        }
        if (($v = $data['attribution_wechat_pay_30d_roi'] ?? null) !== null) {
            $obj->attributionWechatPay30dRoi = (float) $v;
        }
        if (($v = $data['average_play_progress'] ?? null) !== null) {
            $obj->averagePlayProgress = (float) $v;
        }
        if (($v = $data['average_play_time_per_play'] ?? null) !== null) {
            $obj->averagePlayTimePerPlay = (float) $v;
        }
        if (($v = $data['average_video_play'] ?? null) !== null) {
            $obj->averageVideoPlay = (float) $v;
        }
        if (($v = $data['avg_click_cost'] ?? null) !== null) {
            $obj->avgClickCost = (float) $v;
        }
        if (($v = $data['avg_rank'] ?? null) !== null) {
            $obj->avgRank = (float) $v;
        }
        if (($v = $data['avg_show_cost'] ?? null) !== null) {
            $obj->avgShowCost = (float) $v;
        }
        if (($v = $data['bidword'] ?? null) !== null) {
            $obj->bidword = (string) $v;
        }
        if (($v = $data['bidword_id'] ?? null) !== null) {
            $obj->bidwordId = (int) $v;
        }
        if (($v = $data['button'] ?? null) !== null) {
            $obj->button = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_name'] ?? null) !== null) {
            $obj->campaignName = (string) $v;
        }
        if (($v = $data['campaign_type'] ?? null) !== null) {
            $obj->campaignType = (string) $v;
        }
        if (($v = $data['card_show'] ?? null) !== null) {
            $obj->cardShow = (int) $v;
        }
        if (($v = $data['city_name'] ?? null) !== null) {
            $obj->cityName = (string) $v;
        }
        if (($v = $data['click'] ?? null) !== null) {
            $obj->click = (int) $v;
        }
        if (($v = $data['click_call_dy'] ?? null) !== null) {
            $obj->clickCallDy = (int) $v;
        }
        if (($v = $data['click_download'] ?? null) !== null) {
            $obj->clickDownload = (int) $v;
        }
        if (($v = $data['click_install'] ?? null) !== null) {
            $obj->clickInstall = (int) $v;
        }
        if (($v = $data['click_landing_page'] ?? null) !== null) {
            $obj->clickLandingPage = (int) $v;
        }
        if (($v = $data['click_shopwindow'] ?? null) !== null) {
            $obj->clickShopwindow = (int) $v;
        }
        if (($v = $data['click_website'] ?? null) !== null) {
            $obj->clickWebsite = (int) $v;
        }
        if (($v = $data['comment'] ?? null) !== null) {
            $obj->comment = (int) $v;
        }
        if (($v = $data['commute_first_pay_count'] ?? null) !== null) {
            $obj->commuteFirstPayCount = (float) $v;
        }
        if (($v = $data['consult'] ?? null) !== null) {
            $obj->consult = (int) $v;
        }
        if (($v = $data['consult_effective'] ?? null) !== null) {
            $obj->consultEffective = (int) $v;
        }
        if (($v = $data['convert'] ?? null) !== null) {
            $obj->convert = (int) $v;
        }
        if (($v = $data['convert_cost'] ?? null) !== null) {
            $obj->convertCost = (float) $v;
        }
        if (($v = $data['convert_rate'] ?? null) !== null) {
            $obj->convertRate = (float) $v;
        }
        if (($v = $data['convert_show_rate'] ?? null) !== null) {
            $obj->convertShowRate = (float) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['coupon'] ?? null) !== null) {
            $obj->coupon = (int) $v;
        }
        if (($v = $data['coupon_single_page'] ?? null) !== null) {
            $obj->couponSinglePage = (int) $v;
        }
        if (($v = $data['cpa'] ?? null) !== null) {
            $obj->cpa = (float) $v;
        }
        if (($v = $data['cpc'] ?? null) !== null) {
            $obj->cpc = (float) $v;
        }
        if (($v = $data['cpm'] ?? null) !== null) {
            $obj->cpm = (float) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['creative_material_mode'] ?? null) !== null) {
            $obj->creativeMaterialMode = (string) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
        }
        if (($v = $data['customer_effective'] ?? null) !== null) {
            $obj->customerEffective = (int) $v;
        }
        if (($v = $data['deep_convert'] ?? null) !== null) {
            $obj->deepConvert = (int) $v;
        }
        if (($v = $data['deep_convert_cost'] ?? null) !== null) {
            $obj->deepConvertCost = (float) $v;
        }
        if (($v = $data['deep_convert_rate'] ?? null) !== null) {
            $obj->deepConvertRate = (float) $v;
        }
        if (($v = $data['dislike'] ?? null) !== null) {
            $obj->dislike = (int) $v;
        }
        if (($v = $data['download'] ?? null) !== null) {
            $obj->download = (int) $v;
        }
        if (($v = $data['download_finish'] ?? null) !== null) {
            $obj->downloadFinish = (int) $v;
        }
        if (($v = $data['download_finish_cost'] ?? null) !== null) {
            $obj->downloadFinishCost = (float) $v;
        }
        if (($v = $data['download_finish_rate'] ?? null) !== null) {
            $obj->downloadFinishRate = (float) $v;
        }
        if (($v = $data['download_start'] ?? null) !== null) {
            $obj->downloadStart = (int) $v;
        }
        if (($v = $data['download_start_cost'] ?? null) !== null) {
            $obj->downloadStartCost = (float) $v;
        }
        if (($v = $data['download_start_rate'] ?? null) !== null) {
            $obj->downloadStartRate = (float) $v;
        }
        if (($v = $data['external_action'] ?? null) !== null) {
            $obj->externalAction = (string) $v;
        }
        if (($v = $data['first_order_count'] ?? null) !== null) {
            $obj->firstOrderCount = (float) $v;
        }
        if (($v = $data['first_rental_order_count'] ?? null) !== null) {
            $obj->firstRentalOrderCount = (float) $v;
        }
        if (($v = $data['follow'] ?? null) !== null) {
            $obj->follow = (int) $v;
        }
        if (($v = $data['form'] ?? null) !== null) {
            $obj->form = (int) $v;
        }
        if (($v = $data['game_addiction'] ?? null) !== null) {
            $obj->gameAddiction = (int) $v;
        }
        if (($v = $data['game_addiction_cost'] ?? null) !== null) {
            $obj->gameAddictionCost = (float) $v;
        }
        if (($v = $data['game_addiction_rate'] ?? null) !== null) {
            $obj->gameAddictionRate = (float) $v;
        }
        if (($v = $data['game_pay_cost'] ?? null) !== null) {
            $obj->gamePayCost = (int) $v;
        }
        if (($v = $data['game_pay_count'] ?? null) !== null) {
            $obj->gamePayCount = (int) $v;
        }
        if (($v = $data['gender'] ?? null) !== null) {
            $obj->gender = (string) $v;
        }
        if (($v = $data['home_visited'] ?? null) !== null) {
            $obj->homeVisited = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['ies_challenge_click'] ?? null) !== null) {
            $obj->iesChallengeClick = (int) $v;
        }
        if (($v = $data['ies_music_click'] ?? null) !== null) {
            $obj->iesMusicClick = (int) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['in_app_cart'] ?? null) !== null) {
            $obj->inAppCart = (int) $v;
        }
        if (($v = $data['in_app_detail_uv'] ?? null) !== null) {
            $obj->inAppDetailUv = (int) $v;
        }
        if (($v = $data['in_app_order'] ?? null) !== null) {
            $obj->inAppOrder = (int) $v;
        }
        if (($v = $data['in_app_pay'] ?? null) !== null) {
            $obj->inAppPay = (int) $v;
        }
        if (($v = $data['in_app_uv'] ?? null) !== null) {
            $obj->inAppUv = (int) $v;
        }
        if (($v = $data['install_finish'] ?? null) !== null) {
            $obj->installFinish = (int) $v;
        }
        if (($v = $data['install_finish_cost'] ?? null) !== null) {
            $obj->installFinishCost = (float) $v;
        }
        if (($v = $data['install_finish_rate'] ?? null) !== null) {
            $obj->installFinishRate = (float) $v;
        }
        if (($v = $data['interact_per_cost'] ?? null) !== null) {
            $obj->interactPerCost = (float) $v;
        }
        if (($v = $data['interest_tag'] ?? null) !== null) {
            $obj->interestTag = (string) $v;
        }
        if (($v = $data['inventory'] ?? null) !== null) {
            $obj->inventory = (string) $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['like'] ?? null) !== null) {
            $obj->like = (int) $v;
        }
        if (($v = $data['live_component_click_cost'] ?? null) !== null) {
            $obj->liveComponentClickCost = (float) $v;
        }
        if (($v = $data['live_component_click_count'] ?? null) !== null) {
            $obj->liveComponentClickCount = (int) $v;
        }
        if (($v = $data['live_component_click_rate'] ?? null) !== null) {
            $obj->liveComponentClickRate = (float) $v;
        }
        if (($v = $data['live_fans_club_join_cnt'] ?? null) !== null) {
            $obj->liveFansClubJoinCnt = (int) $v;
        }
        if (($v = $data['live_watch_one_minute_count'] ?? null) !== null) {
            $obj->liveWatchOneMinuteCount = (int) $v;
        }
        if (($v = $data['loan_completion'] ?? null) !== null) {
            $obj->loanCompletion = (int) $v;
        }
        if (($v = $data['loan_completion_cost'] ?? null) !== null) {
            $obj->loanCompletionCost = (float) $v;
        }
        if (($v = $data['loan_completion_rate'] ?? null) !== null) {
            $obj->loanCompletionRate = (float) $v;
        }
        if (($v = $data['loan_credit'] ?? null) !== null) {
            $obj->loanCredit = (int) $v;
        }
        if (($v = $data['loan_credit_cost'] ?? null) !== null) {
            $obj->loanCreditCost = (float) $v;
        }
        if (($v = $data['loan_credit_rate'] ?? null) !== null) {
            $obj->loanCreditRate = (float) $v;
        }
        if (($v = $data['location_click'] ?? null) !== null) {
            $obj->locationClick = (int) $v;
        }
        if (($v = $data['lottery'] ?? null) !== null) {
            $obj->lottery = (int) $v;
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
            $obj->lubanLiveGiftAmount = (int) $v;
        }
        if (($v = $data['luban_live_gift_cnt'] ?? null) !== null) {
            $obj->lubanLiveGiftCnt = (int) $v;
        }
        if (($v = $data['luban_live_pay_order_count'] ?? null) !== null) {
            $obj->lubanLivePayOrderCount = (int) $v;
        }
        if (($v = $data['luban_live_pay_order_stat_cost'] ?? null) !== null) {
            $obj->lubanLivePayOrderStatCost = (float) $v;
        }
        if (($v = $data['luban_live_share_cnt'] ?? null) !== null) {
            $obj->lubanLiveShareCnt = (int) $v;
        }
        if (($v = $data['luban_live_slidecart_click_cnt'] ?? null) !== null) {
            $obj->lubanLiveSlidecartClickCnt = (int) $v;
        }
        if (($v = $data['luban_order_cnt'] ?? null) !== null) {
            $obj->lubanOrderCnt = (int) $v;
        }
        if (($v = $data['luban_order_roi'] ?? null) !== null) {
            $obj->lubanOrderRoi = (float) $v;
        }
        if (($v = $data['luban_order_stat_amount'] ?? null) !== null) {
            $obj->lubanOrderStatAmount = (float) $v;
        }
        if (($v = $data['map_search'] ?? null) !== null) {
            $obj->mapSearch = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['message'] ?? null) !== null) {
            $obj->message = (int) $v;
        }
        if (($v = $data['message_action'] ?? null) !== null) {
            $obj->messageAction = (int) $v;
        }
        if (($v = $data['next_day_open'] ?? null) !== null) {
            $obj->nextDayOpen = (int) $v;
        }
        if (($v = $data['next_day_open_cost'] ?? null) !== null) {
            $obj->nextDayOpenCost = (float) $v;
        }
        if (($v = $data['next_day_open_rate'] ?? null) !== null) {
            $obj->nextDayOpenRate = (float) $v;
        }
        if (($v = $data['pay_amount_roi'] ?? null) !== null) {
            $obj->payAmountRoi = (float) $v;
        }
        if (($v = $data['pay_count'] ?? null) !== null) {
            $obj->payCount = (int) $v;
        }
        if (($v = $data['phone'] ?? null) !== null) {
            $obj->phone = (int) $v;
        }
        if (($v = $data['phone_confirm'] ?? null) !== null) {
            $obj->phoneConfirm = (int) $v;
        }
        if (($v = $data['phone_connect'] ?? null) !== null) {
            $obj->phoneConnect = (int) $v;
        }
        if (($v = $data['phone_effective'] ?? null) !== null) {
            $obj->phoneEffective = (int) $v;
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['play_100_feed_break'] ?? null) !== null) {
            $obj->play100FeedBreak = (int) $v;
        }
        if (($v = $data['play_100_feed_break_rate'] ?? null) !== null) {
            $obj->play100FeedBreakRate = (float) $v;
        }
        if (($v = $data['play_25_feed_break'] ?? null) !== null) {
            $obj->play25FeedBreak = (int) $v;
        }
        if (($v = $data['play_25_feed_break_rate'] ?? null) !== null) {
            $obj->play25FeedBreakRate = (float) $v;
        }
        if (($v = $data['play_50_feed_break'] ?? null) !== null) {
            $obj->play50FeedBreak = (int) $v;
        }
        if (($v = $data['play_50_feed_break_rate'] ?? null) !== null) {
            $obj->play50FeedBreakRate = (float) $v;
        }
        if (($v = $data['play_75_feed_break'] ?? null) !== null) {
            $obj->play75FeedBreak = (int) $v;
        }
        if (($v = $data['play_75_feed_break_rate'] ?? null) !== null) {
            $obj->play75FeedBreakRate = (float) $v;
        }
        if (($v = $data['play_duration'] ?? null) !== null) {
            $obj->playDuration = (int) $v;
        }
        if (($v = $data['play_duration_10s'] ?? null) !== null) {
            $obj->playDuration10s = (int) $v;
        }
        if (($v = $data['play_duration_10s_rate'] ?? null) !== null) {
            $obj->playDuration10sRate = (float) $v;
        }
        if (($v = $data['play_duration_2s'] ?? null) !== null) {
            $obj->playDuration2s = (int) $v;
        }
        if (($v = $data['play_duration_2s_rate'] ?? null) !== null) {
            $obj->playDuration2sRate = (float) $v;
        }
        if (($v = $data['play_duration_3s'] ?? null) !== null) {
            $obj->playDuration3s = (int) $v;
        }
        if (($v = $data['play_duration_3s_rate'] ?? null) !== null) {
            $obj->playDuration3sRate = (float) $v;
        }
        if (($v = $data['play_duration_5s_rate'] ?? null) !== null) {
            $obj->playDuration5sRate = (float) $v;
        }
        if (($v = $data['play_duration_sum'] ?? null) !== null) {
            $obj->playDurationSum = (int) $v;
        }
        if (($v = $data['play_over'] ?? null) !== null) {
            $obj->playOver = (int) $v;
        }
        if (($v = $data['play_over_rate'] ?? null) !== null) {
            $obj->playOverRate = (float) $v;
        }
        if (($v = $data['playable_id'] ?? null) !== null) {
            $obj->playableId = (int) $v;
        }
        if (($v = $data['playable_name'] ?? null) !== null) {
            $obj->playableName = (string) $v;
        }
        if (($v = $data['playable_orientation'] ?? null) !== null) {
            $obj->playableOrientation = (string) $v;
        }
        if (($v = $data['playable_preview_url'] ?? null) !== null) {
            $obj->playablePreviewUrl = (string) $v;
        }
        if (($v = $data['playable_url'] ?? null) !== null) {
            $obj->playableUrl = (string) $v;
        }
        if (($v = $data['poi_address_click'] ?? null) !== null) {
            $obj->poiAddressClick = (int) $v;
        }
        if (($v = $data['poi_collect'] ?? null) !== null) {
            $obj->poiCollect = (int) $v;
        }
        if (($v = $data['pre_convert_cost'] ?? null) !== null) {
            $obj->preConvertCost = (int) $v;
        }
        if (($v = $data['pre_convert_count'] ?? null) !== null) {
            $obj->preConvertCount = (int) $v;
        }
        if (($v = $data['pre_convert_rate'] ?? null) !== null) {
            $obj->preConvertRate = (float) $v;
        }
        if (($v = $data['pre_loan_credit'] ?? null) !== null) {
            $obj->preLoanCredit = (int) $v;
        }
        if (($v = $data['pre_loan_credit_cost'] ?? null) !== null) {
            $obj->preLoanCreditCost = (float) $v;
        }
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
        }
        if (($v = $data['pricing_category'] ?? null) !== null) {
            $obj->pricingCategory = (string) $v;
        }
        if (($v = $data['province_name'] ?? null) !== null) {
            $obj->provinceName = (string) $v;
        }
        if (($v = $data['qq'] ?? null) !== null) {
            $obj->qq = (int) $v;
        }
        if (($v = $data['query'] ?? null) !== null) {
            $obj->query = (string) $v;
        }
        if (($v = $data['real_recall_match_type'] ?? null) !== null) {
            $obj->realRecallMatchType = (string) $v;
        }
        if (($v = $data['redirect'] ?? null) !== null) {
            $obj->redirect = (int) $v;
        }
        if (($v = $data['redirect_to_shop'] ?? null) !== null) {
            $obj->redirectToShop = (int) $v;
        }
        if (($v = $data['register'] ?? null) !== null) {
            $obj->register = (int) $v;
        }
        if (($v = $data['report'] ?? null) !== null) {
            $obj->report = (int) $v;
        }
        if (($v = $data['share'] ?? null) !== null) {
            $obj->share = (int) $v;
        }
        if (($v = $data['shopping'] ?? null) !== null) {
            $obj->shopping = (int) $v;
        }
        if (($v = $data['show'] ?? null) !== null) {
            $obj->show = (int) $v;
        }
        if (($v = $data['stat_datetime'] ?? null) !== null) {
            $obj->statDatetime = (string) $v;
        }
        if (($v = $data['stat_pay_amount'] ?? null) !== null) {
            $obj->statPayAmount = (float) $v;
        }
        if (($v = $data['stat_union_ltv_0'] ?? null) !== null) {
            $obj->statUnionLtv0 = (float) $v;
        }
        if (($v = $data['stat_union_ltv_3'] ?? null) !== null) {
            $obj->statUnionLtv3 = (float) $v;
        }
        if (($v = $data['stat_union_ltv_7'] ?? null) !== null) {
            $obj->statUnionLtv7 = (float) $v;
        }
        if (($v = $data['submit_certification_count'] ?? null) !== null) {
            $obj->submitCertificationCount = (float) $v;
        }
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (int) $v;
        }
        if (($v = $data['union_roi_0'] ?? null) !== null) {
            $obj->unionRoi0 = (float) $v;
        }
        if (($v = $data['union_roi_3'] ?? null) !== null) {
            $obj->unionRoi3 = (float) $v;
        }
        if (($v = $data['union_roi_7'] ?? null) !== null) {
            $obj->unionRoi7 = (float) $v;
        }
        if (($v = $data['valid_play'] ?? null) !== null) {
            $obj->validPlay = (int) $v;
        }
        if (($v = $data['valid_play_cost'] ?? null) !== null) {
            $obj->validPlayCost = (float) $v;
        }
        if (($v = $data['valid_play_rate'] ?? null) !== null) {
            $obj->validPlayRate = (float) $v;
        }
        if (($v = $data['view'] ?? null) !== null) {
            $obj->view = (int) $v;
        }
        if (($v = $data['vote'] ?? null) !== null) {
            $obj->vote = (int) $v;
        }
        if (($v = $data['wechat'] ?? null) !== null) {
            $obj->wechat = (int) $v;
        }
        if (($v = $data['wechat_first_pay_cost'] ?? null) !== null) {
            $obj->wechatFirstPayCost = (float) $v;
        }
        if (($v = $data['wechat_first_pay_count'] ?? null) !== null) {
            $obj->wechatFirstPayCount = (int) $v;
        }
        if (($v = $data['wechat_first_pay_rate'] ?? null) !== null) {
            $obj->wechatFirstPayRate = (float) $v;
        }
        if (($v = $data['wechat_login_cost'] ?? null) !== null) {
            $obj->wechatLoginCost = (float) $v;
        }
        if (($v = $data['wechat_login_count'] ?? null) !== null) {
            $obj->wechatLoginCount = (int) $v;
        }
        if (($v = $data['wechat_pay_amount'] ?? null) !== null) {
            $obj->wechatPayAmount = (float) $v;
        }
        if (($v = $data['wifi_play'] ?? null) !== null) {
            $obj->wifiPlay = (int) $v;
        }
        if (($v = $data['wifi_play_rate'] ?? null) !== null) {
            $obj->wifiPlayRate = (float) $v;
        }
        return $obj;
    }
}
