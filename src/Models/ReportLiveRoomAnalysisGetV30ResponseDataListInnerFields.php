<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportLiveRoomAnalysisGetV30ResponseDataListInnerFields implements \JsonSerializable
{
    /**
     * 整体平均同时在线人数
     * @var int
     */
    protected ?int $allAvgLivePcuTd = null;

    /**
     * 整体观众平均停留时长
     * @var int
     */
    protected ?int $allAvgLiveWatchDurationSecondsTd = null;

    /**
     * 整体粉丝评论次数
     * @var int
     */
    protected ?int $allFansLiveCommentCntTd = null;

    /**
     * 整体粉丝观看人数
     * @var int
     */
    protected ?int $allFansLiveWatchUcntTd = null;

    /**
     * 整体看播粉丝占比
     * @var float
     */
    protected ?float $allFansLiveWatchUrateTd = null;

    /**
     * 整体评论数
     * @var int
     */
    protected ?int $allLiveCommentCntTd = null;

    /**
     * 整体评论人数
     * @var int
     */
    protected ?int $allLiveCommentUcntTd = null;

    /**
     * 整体评论率
     * @var float
     */
    protected ?float $allLiveCommentUrateTd = null;

    /**
     * 整体不喜欢次数
     * @var int
     */
    protected ?int $allLiveDislikeCntTd = null;

    /**
     * 整体不喜欢人数
     * @var int
     */
    protected ?int $allLiveDislikeUcntTd = null;

    /**
     * 整体不喜欢率
     * @var float
     */
    protected ?float $allLiveDislikeUrateTd = null;

    /**
     * 整体直播间外层点击率
     * @var float
     */
    protected ?float $allLiveEnterRoomRateTd = null;

    /**
     * 整体直播间进入率
     * @var float
     */
    protected ?float $allLiveEnterRoomUrateTd = null;

    /**
     * 整体粉丝人均观看时长
     * @var int
     */
    protected ?int $allLiveFansAvgWatchDurationSecondsTd = null;

    /**
     * 整体加入粉丝团数
     * @var int
     */
    protected ?int $allLiveFansClubJoinCntTd = null;

    /**
     * 整体关注数
     * @var int
     */
    protected ?int $allLiveFollowCntTd = null;

    /**
     * 整体关注率
     * @var float
     */
    protected ?float $allLiveFollowUrateTd = null;

    /**
     * 整体礼物总金额
     * @var int
     */
    protected ?int $allLiveGiftAmountTd = null;

    /**
     * 整体点赞数
     * @var int
     */
    protected ?int $allLiveLikeCntTd = null;

    /**
     * 整体点赞率
     * @var float
     */
    protected ?float $allLiveLikeUrateTd = null;

    /**
     * 整体最高同时在线人数
     * @var int
     */
    protected ?int $allLiveMax1minPcuTd = null;

    /**
     * 整体打赏次数
     * @var int
     */
    protected ?int $allLiveSendGiftCntTd = null;

    /**
     * 整体分享数
     * @var int
     */
    protected ?int $allLiveShareCntTd = null;

    /**
     * 整体分享人数
     * @var int
     */
    protected ?int $allLiveShareUcntTd = null;

    /**
     * 整体分享率
     * @var float
     */
    protected ?float $allLiveShareUrateTd = null;

    /**
     * 整体超一分钟观看数
     * @var int
     */
    protected ?int $allLiveSingleWatchOver1mCntTd = null;

    /**
     * 整体超一分钟观看率
     * @var float
     */
    protected ?float $allLiveSingleWatchOver1mRateTd = null;

    /**
     * 整体观看数
     * @var int
     */
    protected ?int $allLiveWatchCntTd = null;

    /**
     * 整体直播间观看人数
     * @var int
     */
    protected ?int $allLiveWatchUcntTd = null;

    /**
     * 点击数
     * @var int
     */
    protected ?int $stdAdClickCntTd = null;

    /**
     * 转化数
     * @var int
     */
    protected ?int $stdAdConvertCntTd = null;

    /**
     * 消耗
     * @var float
     */
    protected ?float $stdAdCostAmountTd = null;

    /**
     * 平均千次展示费用
     * @var float
     */
    protected ?float $stdAdCpmTd = null;

    /**
     * 点击率
     * @var float
     */
    protected ?float $stdAdCtrTd = null;

    /**
     * 转化率
     * @var float
     */
    protected ?float $stdAdCvrTd = null;

    /**
     * 展示数
     * @var int
     */
    protected ?int $stdAdShowCntTd = null;

    /**
     * 安卓应用激活
     * @var int
     */
    protected ?int $stdAppActiveCntTd = null;

    /**
     * 注册数
     * @var int
     */
    protected ?int $stdAppActiveRegisterCntTd = null;

    /**
     * 次留数
     * @var int
     */
    protected ?int $stdAppAttributionNextDayOpenCntTd = null;

    /**
     * 次留率
     * @var float
     */
    protected ?float $stdAppAttributionNextDayOpenRateTd = null;

    /**
     * 安卓下载完成数
     * @var int
     */
    protected ?int $stdAppDownloadFinishCntTd = null;

    /**
     * 安卓应用下载开始
     * @var int
     */
    protected ?int $stdAppDownloadStartCntTd = null;

    /**
     * 首次付费数
     * @var int
     */
    protected ?int $stdAppFirstPaymentCntTd = null;

    /**
     * 付费次数
     * @var int
     */
    protected ?int $stdAppGamePayCntTd = null;

    /**
     * 安卓应用安装完成
     * @var int
     */
    protected ?int $stdAppInstallFinishCntTd = null;

    /**
     * 观众平均停留时长
     * @var int
     */
    protected ?int $stdAvgLiveWatchDurationSecondsTd = null;

    /**
     * 有效咨询
     * @var int
     */
    protected ?int $stdConsultEffectiveCntTd = null;

    /**
     * 有效获客
     * @var int
     */
    protected ?int $stdCustomerEffectiveCntTd = null;

    /**
     * 表单提交数
     * @var int
     */
    protected ?int $stdFormSubmitCntTd = null;

    /**
     * 微信内付费
     * @var int
     */
    protected ?int $stdInWechatPayCntTd = null;

    /**
     * 直播间评论数
     * @var int
     */
    protected ?int $stdLiveCommentCntTd = null;

    /**
     * 评论人数
     * @var int
     */
    protected ?int $stdLiveCommentUcntTd = null;

    /**
     * 评论率
     * @var float
     */
    protected ?float $stdLiveCommentUrateTd = null;

    /**
     * 组件点击数
     * @var int
     */
    protected ?int $stdLiveComponentClickCntTd = null;

    /**
     * 组件点击率
     * @var float
     */
    protected ?float $stdLiveComponentClickRateTd = null;

    /**
     * 组件展示数
     * @var int
     */
    protected ?int $stdLiveComponentShowCntTd = null;

    /**
     * 不喜欢次数
     * @var int
     */
    protected ?int $stdLiveDislikeCntTd = null;

    /**
     * 直播间加入粉丝团数
     * @var int
     */
    protected ?int $stdLiveFansClubJoinCntTd = null;

    /**
     * 直播间关注数
     * @var int
     */
    protected ?int $stdLiveFollowCntTd = null;

    /**
     * 关注率
     * @var float
     */
    protected ?float $stdLiveFollowUrateTd = null;

    /**
     * 直播间礼物总金额
     * @var float
     */
    protected ?float $stdLiveGiftAmountTd = null;

    /**
     * 直播间打赏次数
     * @var int
     */
    protected ?int $stdLiveSendGiftCntTd = null;

    /**
     * 直播间分享数
     * @var int
     */
    protected ?int $stdLiveShareCntTd = null;

    /**
     * 分享人数
     * @var int
     */
    protected ?int $stdLiveShareUcntTd = null;

    /**
     * 分享率
     * @var float
     */
    protected ?float $stdLiveShareUrateTd = null;

    /**
     * 直播间超一分钟停留次数
     * @var int
     */
    protected ?int $stdLiveSingleWatchOver1mCntTd = null;

    /**
     * 直播间观看数
     * @var int
     */
    protected ?int $stdLiveWatchCntTd = null;

    /**
     * 直播间观看人数
     * @var int
     */
    protected ?int $stdLiveWatchUcntTd = null;

    /**
     * 直播间进入率
     * @var float
     */
    protected ?float $stdLiveWatchUrateTd = null;

    /**
     * 保险支付数
     * @var int
     */
    protected ?int $stdPremiumPaymentCntTd = null;

    /**
     * 添加企业微信数
     * @var int
     */
    protected ?int $stdWorkWechatAddedCntTd = null;

    /**
     * 整体平均同时在线人数
     * @return int
     */
    public function getAllAvgLivePcuTd(): ?int
    {
        return $this->allAvgLivePcuTd;
    }

    /**
     * 整体平均同时在线人数
     * @param int $allAvgLivePcuTd
     * @return self
     */
    public function setAllAvgLivePcuTd(?int $allAvgLivePcuTd): self
    {
        $this->allAvgLivePcuTd = $allAvgLivePcuTd;
        return $this;
    }

    /**
     * 整体观众平均停留时长
     * @return int
     */
    public function getAllAvgLiveWatchDurationSecondsTd(): ?int
    {
        return $this->allAvgLiveWatchDurationSecondsTd;
    }

    /**
     * 整体观众平均停留时长
     * @param int $allAvgLiveWatchDurationSecondsTd
     * @return self
     */
    public function setAllAvgLiveWatchDurationSecondsTd(?int $allAvgLiveWatchDurationSecondsTd): self
    {
        $this->allAvgLiveWatchDurationSecondsTd = $allAvgLiveWatchDurationSecondsTd;
        return $this;
    }

    /**
     * 整体粉丝评论次数
     * @return int
     */
    public function getAllFansLiveCommentCntTd(): ?int
    {
        return $this->allFansLiveCommentCntTd;
    }

    /**
     * 整体粉丝评论次数
     * @param int $allFansLiveCommentCntTd
     * @return self
     */
    public function setAllFansLiveCommentCntTd(?int $allFansLiveCommentCntTd): self
    {
        $this->allFansLiveCommentCntTd = $allFansLiveCommentCntTd;
        return $this;
    }

    /**
     * 整体粉丝观看人数
     * @return int
     */
    public function getAllFansLiveWatchUcntTd(): ?int
    {
        return $this->allFansLiveWatchUcntTd;
    }

    /**
     * 整体粉丝观看人数
     * @param int $allFansLiveWatchUcntTd
     * @return self
     */
    public function setAllFansLiveWatchUcntTd(?int $allFansLiveWatchUcntTd): self
    {
        $this->allFansLiveWatchUcntTd = $allFansLiveWatchUcntTd;
        return $this;
    }

    /**
     * 整体看播粉丝占比
     * @return float
     */
    public function getAllFansLiveWatchUrateTd(): ?float
    {
        return $this->allFansLiveWatchUrateTd;
    }

    /**
     * 整体看播粉丝占比
     * @param float $allFansLiveWatchUrateTd
     * @return self
     */
    public function setAllFansLiveWatchUrateTd(?float $allFansLiveWatchUrateTd): self
    {
        $this->allFansLiveWatchUrateTd = $allFansLiveWatchUrateTd;
        return $this;
    }

    /**
     * 整体评论数
     * @return int
     */
    public function getAllLiveCommentCntTd(): ?int
    {
        return $this->allLiveCommentCntTd;
    }

    /**
     * 整体评论数
     * @param int $allLiveCommentCntTd
     * @return self
     */
    public function setAllLiveCommentCntTd(?int $allLiveCommentCntTd): self
    {
        $this->allLiveCommentCntTd = $allLiveCommentCntTd;
        return $this;
    }

    /**
     * 整体评论人数
     * @return int
     */
    public function getAllLiveCommentUcntTd(): ?int
    {
        return $this->allLiveCommentUcntTd;
    }

    /**
     * 整体评论人数
     * @param int $allLiveCommentUcntTd
     * @return self
     */
    public function setAllLiveCommentUcntTd(?int $allLiveCommentUcntTd): self
    {
        $this->allLiveCommentUcntTd = $allLiveCommentUcntTd;
        return $this;
    }

    /**
     * 整体评论率
     * @return float
     */
    public function getAllLiveCommentUrateTd(): ?float
    {
        return $this->allLiveCommentUrateTd;
    }

    /**
     * 整体评论率
     * @param float $allLiveCommentUrateTd
     * @return self
     */
    public function setAllLiveCommentUrateTd(?float $allLiveCommentUrateTd): self
    {
        $this->allLiveCommentUrateTd = $allLiveCommentUrateTd;
        return $this;
    }

    /**
     * 整体不喜欢次数
     * @return int
     */
    public function getAllLiveDislikeCntTd(): ?int
    {
        return $this->allLiveDislikeCntTd;
    }

    /**
     * 整体不喜欢次数
     * @param int $allLiveDislikeCntTd
     * @return self
     */
    public function setAllLiveDislikeCntTd(?int $allLiveDislikeCntTd): self
    {
        $this->allLiveDislikeCntTd = $allLiveDislikeCntTd;
        return $this;
    }

    /**
     * 整体不喜欢人数
     * @return int
     */
    public function getAllLiveDislikeUcntTd(): ?int
    {
        return $this->allLiveDislikeUcntTd;
    }

    /**
     * 整体不喜欢人数
     * @param int $allLiveDislikeUcntTd
     * @return self
     */
    public function setAllLiveDislikeUcntTd(?int $allLiveDislikeUcntTd): self
    {
        $this->allLiveDislikeUcntTd = $allLiveDislikeUcntTd;
        return $this;
    }

    /**
     * 整体不喜欢率
     * @return float
     */
    public function getAllLiveDislikeUrateTd(): ?float
    {
        return $this->allLiveDislikeUrateTd;
    }

    /**
     * 整体不喜欢率
     * @param float $allLiveDislikeUrateTd
     * @return self
     */
    public function setAllLiveDislikeUrateTd(?float $allLiveDislikeUrateTd): self
    {
        $this->allLiveDislikeUrateTd = $allLiveDislikeUrateTd;
        return $this;
    }

    /**
     * 整体直播间外层点击率
     * @return float
     */
    public function getAllLiveEnterRoomRateTd(): ?float
    {
        return $this->allLiveEnterRoomRateTd;
    }

    /**
     * 整体直播间外层点击率
     * @param float $allLiveEnterRoomRateTd
     * @return self
     */
    public function setAllLiveEnterRoomRateTd(?float $allLiveEnterRoomRateTd): self
    {
        $this->allLiveEnterRoomRateTd = $allLiveEnterRoomRateTd;
        return $this;
    }

    /**
     * 整体直播间进入率
     * @return float
     */
    public function getAllLiveEnterRoomUrateTd(): ?float
    {
        return $this->allLiveEnterRoomUrateTd;
    }

    /**
     * 整体直播间进入率
     * @param float $allLiveEnterRoomUrateTd
     * @return self
     */
    public function setAllLiveEnterRoomUrateTd(?float $allLiveEnterRoomUrateTd): self
    {
        $this->allLiveEnterRoomUrateTd = $allLiveEnterRoomUrateTd;
        return $this;
    }

    /**
     * 整体粉丝人均观看时长
     * @return int
     */
    public function getAllLiveFansAvgWatchDurationSecondsTd(): ?int
    {
        return $this->allLiveFansAvgWatchDurationSecondsTd;
    }

    /**
     * 整体粉丝人均观看时长
     * @param int $allLiveFansAvgWatchDurationSecondsTd
     * @return self
     */
    public function setAllLiveFansAvgWatchDurationSecondsTd(?int $allLiveFansAvgWatchDurationSecondsTd): self
    {
        $this->allLiveFansAvgWatchDurationSecondsTd = $allLiveFansAvgWatchDurationSecondsTd;
        return $this;
    }

    /**
     * 整体加入粉丝团数
     * @return int
     */
    public function getAllLiveFansClubJoinCntTd(): ?int
    {
        return $this->allLiveFansClubJoinCntTd;
    }

    /**
     * 整体加入粉丝团数
     * @param int $allLiveFansClubJoinCntTd
     * @return self
     */
    public function setAllLiveFansClubJoinCntTd(?int $allLiveFansClubJoinCntTd): self
    {
        $this->allLiveFansClubJoinCntTd = $allLiveFansClubJoinCntTd;
        return $this;
    }

    /**
     * 整体关注数
     * @return int
     */
    public function getAllLiveFollowCntTd(): ?int
    {
        return $this->allLiveFollowCntTd;
    }

    /**
     * 整体关注数
     * @param int $allLiveFollowCntTd
     * @return self
     */
    public function setAllLiveFollowCntTd(?int $allLiveFollowCntTd): self
    {
        $this->allLiveFollowCntTd = $allLiveFollowCntTd;
        return $this;
    }

    /**
     * 整体关注率
     * @return float
     */
    public function getAllLiveFollowUrateTd(): ?float
    {
        return $this->allLiveFollowUrateTd;
    }

    /**
     * 整体关注率
     * @param float $allLiveFollowUrateTd
     * @return self
     */
    public function setAllLiveFollowUrateTd(?float $allLiveFollowUrateTd): self
    {
        $this->allLiveFollowUrateTd = $allLiveFollowUrateTd;
        return $this;
    }

    /**
     * 整体礼物总金额
     * @return int
     */
    public function getAllLiveGiftAmountTd(): ?int
    {
        return $this->allLiveGiftAmountTd;
    }

    /**
     * 整体礼物总金额
     * @param int $allLiveGiftAmountTd
     * @return self
     */
    public function setAllLiveGiftAmountTd(?int $allLiveGiftAmountTd): self
    {
        $this->allLiveGiftAmountTd = $allLiveGiftAmountTd;
        return $this;
    }

    /**
     * 整体点赞数
     * @return int
     */
    public function getAllLiveLikeCntTd(): ?int
    {
        return $this->allLiveLikeCntTd;
    }

    /**
     * 整体点赞数
     * @param int $allLiveLikeCntTd
     * @return self
     */
    public function setAllLiveLikeCntTd(?int $allLiveLikeCntTd): self
    {
        $this->allLiveLikeCntTd = $allLiveLikeCntTd;
        return $this;
    }

    /**
     * 整体点赞率
     * @return float
     */
    public function getAllLiveLikeUrateTd(): ?float
    {
        return $this->allLiveLikeUrateTd;
    }

    /**
     * 整体点赞率
     * @param float $allLiveLikeUrateTd
     * @return self
     */
    public function setAllLiveLikeUrateTd(?float $allLiveLikeUrateTd): self
    {
        $this->allLiveLikeUrateTd = $allLiveLikeUrateTd;
        return $this;
    }

    /**
     * 整体最高同时在线人数
     * @return int
     */
    public function getAllLiveMax1minPcuTd(): ?int
    {
        return $this->allLiveMax1minPcuTd;
    }

    /**
     * 整体最高同时在线人数
     * @param int $allLiveMax1minPcuTd
     * @return self
     */
    public function setAllLiveMax1minPcuTd(?int $allLiveMax1minPcuTd): self
    {
        $this->allLiveMax1minPcuTd = $allLiveMax1minPcuTd;
        return $this;
    }

    /**
     * 整体打赏次数
     * @return int
     */
    public function getAllLiveSendGiftCntTd(): ?int
    {
        return $this->allLiveSendGiftCntTd;
    }

    /**
     * 整体打赏次数
     * @param int $allLiveSendGiftCntTd
     * @return self
     */
    public function setAllLiveSendGiftCntTd(?int $allLiveSendGiftCntTd): self
    {
        $this->allLiveSendGiftCntTd = $allLiveSendGiftCntTd;
        return $this;
    }

    /**
     * 整体分享数
     * @return int
     */
    public function getAllLiveShareCntTd(): ?int
    {
        return $this->allLiveShareCntTd;
    }

    /**
     * 整体分享数
     * @param int $allLiveShareCntTd
     * @return self
     */
    public function setAllLiveShareCntTd(?int $allLiveShareCntTd): self
    {
        $this->allLiveShareCntTd = $allLiveShareCntTd;
        return $this;
    }

    /**
     * 整体分享人数
     * @return int
     */
    public function getAllLiveShareUcntTd(): ?int
    {
        return $this->allLiveShareUcntTd;
    }

    /**
     * 整体分享人数
     * @param int $allLiveShareUcntTd
     * @return self
     */
    public function setAllLiveShareUcntTd(?int $allLiveShareUcntTd): self
    {
        $this->allLiveShareUcntTd = $allLiveShareUcntTd;
        return $this;
    }

    /**
     * 整体分享率
     * @return float
     */
    public function getAllLiveShareUrateTd(): ?float
    {
        return $this->allLiveShareUrateTd;
    }

    /**
     * 整体分享率
     * @param float $allLiveShareUrateTd
     * @return self
     */
    public function setAllLiveShareUrateTd(?float $allLiveShareUrateTd): self
    {
        $this->allLiveShareUrateTd = $allLiveShareUrateTd;
        return $this;
    }

    /**
     * 整体超一分钟观看数
     * @return int
     */
    public function getAllLiveSingleWatchOver1mCntTd(): ?int
    {
        return $this->allLiveSingleWatchOver1mCntTd;
    }

    /**
     * 整体超一分钟观看数
     * @param int $allLiveSingleWatchOver1mCntTd
     * @return self
     */
    public function setAllLiveSingleWatchOver1mCntTd(?int $allLiveSingleWatchOver1mCntTd): self
    {
        $this->allLiveSingleWatchOver1mCntTd = $allLiveSingleWatchOver1mCntTd;
        return $this;
    }

    /**
     * 整体超一分钟观看率
     * @return float
     */
    public function getAllLiveSingleWatchOver1mRateTd(): ?float
    {
        return $this->allLiveSingleWatchOver1mRateTd;
    }

    /**
     * 整体超一分钟观看率
     * @param float $allLiveSingleWatchOver1mRateTd
     * @return self
     */
    public function setAllLiveSingleWatchOver1mRateTd(?float $allLiveSingleWatchOver1mRateTd): self
    {
        $this->allLiveSingleWatchOver1mRateTd = $allLiveSingleWatchOver1mRateTd;
        return $this;
    }

    /**
     * 整体观看数
     * @return int
     */
    public function getAllLiveWatchCntTd(): ?int
    {
        return $this->allLiveWatchCntTd;
    }

    /**
     * 整体观看数
     * @param int $allLiveWatchCntTd
     * @return self
     */
    public function setAllLiveWatchCntTd(?int $allLiveWatchCntTd): self
    {
        $this->allLiveWatchCntTd = $allLiveWatchCntTd;
        return $this;
    }

    /**
     * 整体直播间观看人数
     * @return int
     */
    public function getAllLiveWatchUcntTd(): ?int
    {
        return $this->allLiveWatchUcntTd;
    }

    /**
     * 整体直播间观看人数
     * @param int $allLiveWatchUcntTd
     * @return self
     */
    public function setAllLiveWatchUcntTd(?int $allLiveWatchUcntTd): self
    {
        $this->allLiveWatchUcntTd = $allLiveWatchUcntTd;
        return $this;
    }

    /**
     * 点击数
     * @return int
     */
    public function getStdAdClickCntTd(): ?int
    {
        return $this->stdAdClickCntTd;
    }

    /**
     * 点击数
     * @param int $stdAdClickCntTd
     * @return self
     */
    public function setStdAdClickCntTd(?int $stdAdClickCntTd): self
    {
        $this->stdAdClickCntTd = $stdAdClickCntTd;
        return $this;
    }

    /**
     * 转化数
     * @return int
     */
    public function getStdAdConvertCntTd(): ?int
    {
        return $this->stdAdConvertCntTd;
    }

    /**
     * 转化数
     * @param int $stdAdConvertCntTd
     * @return self
     */
    public function setStdAdConvertCntTd(?int $stdAdConvertCntTd): self
    {
        $this->stdAdConvertCntTd = $stdAdConvertCntTd;
        return $this;
    }

    /**
     * 消耗
     * @return float
     */
    public function getStdAdCostAmountTd(): ?float
    {
        return $this->stdAdCostAmountTd;
    }

    /**
     * 消耗
     * @param float $stdAdCostAmountTd
     * @return self
     */
    public function setStdAdCostAmountTd(?float $stdAdCostAmountTd): self
    {
        $this->stdAdCostAmountTd = $stdAdCostAmountTd;
        return $this;
    }

    /**
     * 平均千次展示费用
     * @return float
     */
    public function getStdAdCpmTd(): ?float
    {
        return $this->stdAdCpmTd;
    }

    /**
     * 平均千次展示费用
     * @param float $stdAdCpmTd
     * @return self
     */
    public function setStdAdCpmTd(?float $stdAdCpmTd): self
    {
        $this->stdAdCpmTd = $stdAdCpmTd;
        return $this;
    }

    /**
     * 点击率
     * @return float
     */
    public function getStdAdCtrTd(): ?float
    {
        return $this->stdAdCtrTd;
    }

    /**
     * 点击率
     * @param float $stdAdCtrTd
     * @return self
     */
    public function setStdAdCtrTd(?float $stdAdCtrTd): self
    {
        $this->stdAdCtrTd = $stdAdCtrTd;
        return $this;
    }

    /**
     * 转化率
     * @return float
     */
    public function getStdAdCvrTd(): ?float
    {
        return $this->stdAdCvrTd;
    }

    /**
     * 转化率
     * @param float $stdAdCvrTd
     * @return self
     */
    public function setStdAdCvrTd(?float $stdAdCvrTd): self
    {
        $this->stdAdCvrTd = $stdAdCvrTd;
        return $this;
    }

    /**
     * 展示数
     * @return int
     */
    public function getStdAdShowCntTd(): ?int
    {
        return $this->stdAdShowCntTd;
    }

    /**
     * 展示数
     * @param int $stdAdShowCntTd
     * @return self
     */
    public function setStdAdShowCntTd(?int $stdAdShowCntTd): self
    {
        $this->stdAdShowCntTd = $stdAdShowCntTd;
        return $this;
    }

    /**
     * 安卓应用激活
     * @return int
     */
    public function getStdAppActiveCntTd(): ?int
    {
        return $this->stdAppActiveCntTd;
    }

    /**
     * 安卓应用激活
     * @param int $stdAppActiveCntTd
     * @return self
     */
    public function setStdAppActiveCntTd(?int $stdAppActiveCntTd): self
    {
        $this->stdAppActiveCntTd = $stdAppActiveCntTd;
        return $this;
    }

    /**
     * 注册数
     * @return int
     */
    public function getStdAppActiveRegisterCntTd(): ?int
    {
        return $this->stdAppActiveRegisterCntTd;
    }

    /**
     * 注册数
     * @param int $stdAppActiveRegisterCntTd
     * @return self
     */
    public function setStdAppActiveRegisterCntTd(?int $stdAppActiveRegisterCntTd): self
    {
        $this->stdAppActiveRegisterCntTd = $stdAppActiveRegisterCntTd;
        return $this;
    }

    /**
     * 次留数
     * @return int
     */
    public function getStdAppAttributionNextDayOpenCntTd(): ?int
    {
        return $this->stdAppAttributionNextDayOpenCntTd;
    }

    /**
     * 次留数
     * @param int $stdAppAttributionNextDayOpenCntTd
     * @return self
     */
    public function setStdAppAttributionNextDayOpenCntTd(?int $stdAppAttributionNextDayOpenCntTd): self
    {
        $this->stdAppAttributionNextDayOpenCntTd = $stdAppAttributionNextDayOpenCntTd;
        return $this;
    }

    /**
     * 次留率
     * @return float
     */
    public function getStdAppAttributionNextDayOpenRateTd(): ?float
    {
        return $this->stdAppAttributionNextDayOpenRateTd;
    }

    /**
     * 次留率
     * @param float $stdAppAttributionNextDayOpenRateTd
     * @return self
     */
    public function setStdAppAttributionNextDayOpenRateTd(?float $stdAppAttributionNextDayOpenRateTd): self
    {
        $this->stdAppAttributionNextDayOpenRateTd = $stdAppAttributionNextDayOpenRateTd;
        return $this;
    }

    /**
     * 安卓下载完成数
     * @return int
     */
    public function getStdAppDownloadFinishCntTd(): ?int
    {
        return $this->stdAppDownloadFinishCntTd;
    }

    /**
     * 安卓下载完成数
     * @param int $stdAppDownloadFinishCntTd
     * @return self
     */
    public function setStdAppDownloadFinishCntTd(?int $stdAppDownloadFinishCntTd): self
    {
        $this->stdAppDownloadFinishCntTd = $stdAppDownloadFinishCntTd;
        return $this;
    }

    /**
     * 安卓应用下载开始
     * @return int
     */
    public function getStdAppDownloadStartCntTd(): ?int
    {
        return $this->stdAppDownloadStartCntTd;
    }

    /**
     * 安卓应用下载开始
     * @param int $stdAppDownloadStartCntTd
     * @return self
     */
    public function setStdAppDownloadStartCntTd(?int $stdAppDownloadStartCntTd): self
    {
        $this->stdAppDownloadStartCntTd = $stdAppDownloadStartCntTd;
        return $this;
    }

    /**
     * 首次付费数
     * @return int
     */
    public function getStdAppFirstPaymentCntTd(): ?int
    {
        return $this->stdAppFirstPaymentCntTd;
    }

    /**
     * 首次付费数
     * @param int $stdAppFirstPaymentCntTd
     * @return self
     */
    public function setStdAppFirstPaymentCntTd(?int $stdAppFirstPaymentCntTd): self
    {
        $this->stdAppFirstPaymentCntTd = $stdAppFirstPaymentCntTd;
        return $this;
    }

    /**
     * 付费次数
     * @return int
     */
    public function getStdAppGamePayCntTd(): ?int
    {
        return $this->stdAppGamePayCntTd;
    }

    /**
     * 付费次数
     * @param int $stdAppGamePayCntTd
     * @return self
     */
    public function setStdAppGamePayCntTd(?int $stdAppGamePayCntTd): self
    {
        $this->stdAppGamePayCntTd = $stdAppGamePayCntTd;
        return $this;
    }

    /**
     * 安卓应用安装完成
     * @return int
     */
    public function getStdAppInstallFinishCntTd(): ?int
    {
        return $this->stdAppInstallFinishCntTd;
    }

    /**
     * 安卓应用安装完成
     * @param int $stdAppInstallFinishCntTd
     * @return self
     */
    public function setStdAppInstallFinishCntTd(?int $stdAppInstallFinishCntTd): self
    {
        $this->stdAppInstallFinishCntTd = $stdAppInstallFinishCntTd;
        return $this;
    }

    /**
     * 观众平均停留时长
     * @return int
     */
    public function getStdAvgLiveWatchDurationSecondsTd(): ?int
    {
        return $this->stdAvgLiveWatchDurationSecondsTd;
    }

    /**
     * 观众平均停留时长
     * @param int $stdAvgLiveWatchDurationSecondsTd
     * @return self
     */
    public function setStdAvgLiveWatchDurationSecondsTd(?int $stdAvgLiveWatchDurationSecondsTd): self
    {
        $this->stdAvgLiveWatchDurationSecondsTd = $stdAvgLiveWatchDurationSecondsTd;
        return $this;
    }

    /**
     * 有效咨询
     * @return int
     */
    public function getStdConsultEffectiveCntTd(): ?int
    {
        return $this->stdConsultEffectiveCntTd;
    }

    /**
     * 有效咨询
     * @param int $stdConsultEffectiveCntTd
     * @return self
     */
    public function setStdConsultEffectiveCntTd(?int $stdConsultEffectiveCntTd): self
    {
        $this->stdConsultEffectiveCntTd = $stdConsultEffectiveCntTd;
        return $this;
    }

    /**
     * 有效获客
     * @return int
     */
    public function getStdCustomerEffectiveCntTd(): ?int
    {
        return $this->stdCustomerEffectiveCntTd;
    }

    /**
     * 有效获客
     * @param int $stdCustomerEffectiveCntTd
     * @return self
     */
    public function setStdCustomerEffectiveCntTd(?int $stdCustomerEffectiveCntTd): self
    {
        $this->stdCustomerEffectiveCntTd = $stdCustomerEffectiveCntTd;
        return $this;
    }

    /**
     * 表单提交数
     * @return int
     */
    public function getStdFormSubmitCntTd(): ?int
    {
        return $this->stdFormSubmitCntTd;
    }

    /**
     * 表单提交数
     * @param int $stdFormSubmitCntTd
     * @return self
     */
    public function setStdFormSubmitCntTd(?int $stdFormSubmitCntTd): self
    {
        $this->stdFormSubmitCntTd = $stdFormSubmitCntTd;
        return $this;
    }

    /**
     * 微信内付费
     * @return int
     */
    public function getStdInWechatPayCntTd(): ?int
    {
        return $this->stdInWechatPayCntTd;
    }

    /**
     * 微信内付费
     * @param int $stdInWechatPayCntTd
     * @return self
     */
    public function setStdInWechatPayCntTd(?int $stdInWechatPayCntTd): self
    {
        $this->stdInWechatPayCntTd = $stdInWechatPayCntTd;
        return $this;
    }

    /**
     * 直播间评论数
     * @return int
     */
    public function getStdLiveCommentCntTd(): ?int
    {
        return $this->stdLiveCommentCntTd;
    }

    /**
     * 直播间评论数
     * @param int $stdLiveCommentCntTd
     * @return self
     */
    public function setStdLiveCommentCntTd(?int $stdLiveCommentCntTd): self
    {
        $this->stdLiveCommentCntTd = $stdLiveCommentCntTd;
        return $this;
    }

    /**
     * 评论人数
     * @return int
     */
    public function getStdLiveCommentUcntTd(): ?int
    {
        return $this->stdLiveCommentUcntTd;
    }

    /**
     * 评论人数
     * @param int $stdLiveCommentUcntTd
     * @return self
     */
    public function setStdLiveCommentUcntTd(?int $stdLiveCommentUcntTd): self
    {
        $this->stdLiveCommentUcntTd = $stdLiveCommentUcntTd;
        return $this;
    }

    /**
     * 评论率
     * @return float
     */
    public function getStdLiveCommentUrateTd(): ?float
    {
        return $this->stdLiveCommentUrateTd;
    }

    /**
     * 评论率
     * @param float $stdLiveCommentUrateTd
     * @return self
     */
    public function setStdLiveCommentUrateTd(?float $stdLiveCommentUrateTd): self
    {
        $this->stdLiveCommentUrateTd = $stdLiveCommentUrateTd;
        return $this;
    }

    /**
     * 组件点击数
     * @return int
     */
    public function getStdLiveComponentClickCntTd(): ?int
    {
        return $this->stdLiveComponentClickCntTd;
    }

    /**
     * 组件点击数
     * @param int $stdLiveComponentClickCntTd
     * @return self
     */
    public function setStdLiveComponentClickCntTd(?int $stdLiveComponentClickCntTd): self
    {
        $this->stdLiveComponentClickCntTd = $stdLiveComponentClickCntTd;
        return $this;
    }

    /**
     * 组件点击率
     * @return float
     */
    public function getStdLiveComponentClickRateTd(): ?float
    {
        return $this->stdLiveComponentClickRateTd;
    }

    /**
     * 组件点击率
     * @param float $stdLiveComponentClickRateTd
     * @return self
     */
    public function setStdLiveComponentClickRateTd(?float $stdLiveComponentClickRateTd): self
    {
        $this->stdLiveComponentClickRateTd = $stdLiveComponentClickRateTd;
        return $this;
    }

    /**
     * 组件展示数
     * @return int
     */
    public function getStdLiveComponentShowCntTd(): ?int
    {
        return $this->stdLiveComponentShowCntTd;
    }

    /**
     * 组件展示数
     * @param int $stdLiveComponentShowCntTd
     * @return self
     */
    public function setStdLiveComponentShowCntTd(?int $stdLiveComponentShowCntTd): self
    {
        $this->stdLiveComponentShowCntTd = $stdLiveComponentShowCntTd;
        return $this;
    }

    /**
     * 不喜欢次数
     * @return int
     */
    public function getStdLiveDislikeCntTd(): ?int
    {
        return $this->stdLiveDislikeCntTd;
    }

    /**
     * 不喜欢次数
     * @param int $stdLiveDislikeCntTd
     * @return self
     */
    public function setStdLiveDislikeCntTd(?int $stdLiveDislikeCntTd): self
    {
        $this->stdLiveDislikeCntTd = $stdLiveDislikeCntTd;
        return $this;
    }

    /**
     * 直播间加入粉丝团数
     * @return int
     */
    public function getStdLiveFansClubJoinCntTd(): ?int
    {
        return $this->stdLiveFansClubJoinCntTd;
    }

    /**
     * 直播间加入粉丝团数
     * @param int $stdLiveFansClubJoinCntTd
     * @return self
     */
    public function setStdLiveFansClubJoinCntTd(?int $stdLiveFansClubJoinCntTd): self
    {
        $this->stdLiveFansClubJoinCntTd = $stdLiveFansClubJoinCntTd;
        return $this;
    }

    /**
     * 直播间关注数
     * @return int
     */
    public function getStdLiveFollowCntTd(): ?int
    {
        return $this->stdLiveFollowCntTd;
    }

    /**
     * 直播间关注数
     * @param int $stdLiveFollowCntTd
     * @return self
     */
    public function setStdLiveFollowCntTd(?int $stdLiveFollowCntTd): self
    {
        $this->stdLiveFollowCntTd = $stdLiveFollowCntTd;
        return $this;
    }

    /**
     * 关注率
     * @return float
     */
    public function getStdLiveFollowUrateTd(): ?float
    {
        return $this->stdLiveFollowUrateTd;
    }

    /**
     * 关注率
     * @param float $stdLiveFollowUrateTd
     * @return self
     */
    public function setStdLiveFollowUrateTd(?float $stdLiveFollowUrateTd): self
    {
        $this->stdLiveFollowUrateTd = $stdLiveFollowUrateTd;
        return $this;
    }

    /**
     * 直播间礼物总金额
     * @return float
     */
    public function getStdLiveGiftAmountTd(): ?float
    {
        return $this->stdLiveGiftAmountTd;
    }

    /**
     * 直播间礼物总金额
     * @param float $stdLiveGiftAmountTd
     * @return self
     */
    public function setStdLiveGiftAmountTd(?float $stdLiveGiftAmountTd): self
    {
        $this->stdLiveGiftAmountTd = $stdLiveGiftAmountTd;
        return $this;
    }

    /**
     * 直播间打赏次数
     * @return int
     */
    public function getStdLiveSendGiftCntTd(): ?int
    {
        return $this->stdLiveSendGiftCntTd;
    }

    /**
     * 直播间打赏次数
     * @param int $stdLiveSendGiftCntTd
     * @return self
     */
    public function setStdLiveSendGiftCntTd(?int $stdLiveSendGiftCntTd): self
    {
        $this->stdLiveSendGiftCntTd = $stdLiveSendGiftCntTd;
        return $this;
    }

    /**
     * 直播间分享数
     * @return int
     */
    public function getStdLiveShareCntTd(): ?int
    {
        return $this->stdLiveShareCntTd;
    }

    /**
     * 直播间分享数
     * @param int $stdLiveShareCntTd
     * @return self
     */
    public function setStdLiveShareCntTd(?int $stdLiveShareCntTd): self
    {
        $this->stdLiveShareCntTd = $stdLiveShareCntTd;
        return $this;
    }

    /**
     * 分享人数
     * @return int
     */
    public function getStdLiveShareUcntTd(): ?int
    {
        return $this->stdLiveShareUcntTd;
    }

    /**
     * 分享人数
     * @param int $stdLiveShareUcntTd
     * @return self
     */
    public function setStdLiveShareUcntTd(?int $stdLiveShareUcntTd): self
    {
        $this->stdLiveShareUcntTd = $stdLiveShareUcntTd;
        return $this;
    }

    /**
     * 分享率
     * @return float
     */
    public function getStdLiveShareUrateTd(): ?float
    {
        return $this->stdLiveShareUrateTd;
    }

    /**
     * 分享率
     * @param float $stdLiveShareUrateTd
     * @return self
     */
    public function setStdLiveShareUrateTd(?float $stdLiveShareUrateTd): self
    {
        $this->stdLiveShareUrateTd = $stdLiveShareUrateTd;
        return $this;
    }

    /**
     * 直播间超一分钟停留次数
     * @return int
     */
    public function getStdLiveSingleWatchOver1mCntTd(): ?int
    {
        return $this->stdLiveSingleWatchOver1mCntTd;
    }

    /**
     * 直播间超一分钟停留次数
     * @param int $stdLiveSingleWatchOver1mCntTd
     * @return self
     */
    public function setStdLiveSingleWatchOver1mCntTd(?int $stdLiveSingleWatchOver1mCntTd): self
    {
        $this->stdLiveSingleWatchOver1mCntTd = $stdLiveSingleWatchOver1mCntTd;
        return $this;
    }

    /**
     * 直播间观看数
     * @return int
     */
    public function getStdLiveWatchCntTd(): ?int
    {
        return $this->stdLiveWatchCntTd;
    }

    /**
     * 直播间观看数
     * @param int $stdLiveWatchCntTd
     * @return self
     */
    public function setStdLiveWatchCntTd(?int $stdLiveWatchCntTd): self
    {
        $this->stdLiveWatchCntTd = $stdLiveWatchCntTd;
        return $this;
    }

    /**
     * 直播间观看人数
     * @return int
     */
    public function getStdLiveWatchUcntTd(): ?int
    {
        return $this->stdLiveWatchUcntTd;
    }

    /**
     * 直播间观看人数
     * @param int $stdLiveWatchUcntTd
     * @return self
     */
    public function setStdLiveWatchUcntTd(?int $stdLiveWatchUcntTd): self
    {
        $this->stdLiveWatchUcntTd = $stdLiveWatchUcntTd;
        return $this;
    }

    /**
     * 直播间进入率
     * @return float
     */
    public function getStdLiveWatchUrateTd(): ?float
    {
        return $this->stdLiveWatchUrateTd;
    }

    /**
     * 直播间进入率
     * @param float $stdLiveWatchUrateTd
     * @return self
     */
    public function setStdLiveWatchUrateTd(?float $stdLiveWatchUrateTd): self
    {
        $this->stdLiveWatchUrateTd = $stdLiveWatchUrateTd;
        return $this;
    }

    /**
     * 保险支付数
     * @return int
     */
    public function getStdPremiumPaymentCntTd(): ?int
    {
        return $this->stdPremiumPaymentCntTd;
    }

    /**
     * 保险支付数
     * @param int $stdPremiumPaymentCntTd
     * @return self
     */
    public function setStdPremiumPaymentCntTd(?int $stdPremiumPaymentCntTd): self
    {
        $this->stdPremiumPaymentCntTd = $stdPremiumPaymentCntTd;
        return $this;
    }

    /**
     * 添加企业微信数
     * @return int
     */
    public function getStdWorkWechatAddedCntTd(): ?int
    {
        return $this->stdWorkWechatAddedCntTd;
    }

    /**
     * 添加企业微信数
     * @param int $stdWorkWechatAddedCntTd
     * @return self
     */
    public function setStdWorkWechatAddedCntTd(?int $stdWorkWechatAddedCntTd): self
    {
        $this->stdWorkWechatAddedCntTd = $stdWorkWechatAddedCntTd;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allAvgLivePcuTd !== null) {
            $result['all_avg_live_pcu_td'] = $this->allAvgLivePcuTd;
        }
        if ($this->allAvgLiveWatchDurationSecondsTd !== null) {
            $result['all_avg_live_watch_duration_seconds_td'] = $this->allAvgLiveWatchDurationSecondsTd;
        }
        if ($this->allFansLiveCommentCntTd !== null) {
            $result['all_fans_live_comment_cnt_td'] = $this->allFansLiveCommentCntTd;
        }
        if ($this->allFansLiveWatchUcntTd !== null) {
            $result['all_fans_live_watch_ucnt_td'] = $this->allFansLiveWatchUcntTd;
        }
        if ($this->allFansLiveWatchUrateTd !== null) {
            $result['all_fans_live_watch_urate_td'] = $this->allFansLiveWatchUrateTd;
        }
        if ($this->allLiveCommentCntTd !== null) {
            $result['all_live_comment_cnt_td'] = $this->allLiveCommentCntTd;
        }
        if ($this->allLiveCommentUcntTd !== null) {
            $result['all_live_comment_ucnt_td'] = $this->allLiveCommentUcntTd;
        }
        if ($this->allLiveCommentUrateTd !== null) {
            $result['all_live_comment_urate_td'] = $this->allLiveCommentUrateTd;
        }
        if ($this->allLiveDislikeCntTd !== null) {
            $result['all_live_dislike_cnt_td'] = $this->allLiveDislikeCntTd;
        }
        if ($this->allLiveDislikeUcntTd !== null) {
            $result['all_live_dislike_ucnt_td'] = $this->allLiveDislikeUcntTd;
        }
        if ($this->allLiveDislikeUrateTd !== null) {
            $result['all_live_dislike_urate_td'] = $this->allLiveDislikeUrateTd;
        }
        if ($this->allLiveEnterRoomRateTd !== null) {
            $result['all_live_enter_room_rate_td'] = $this->allLiveEnterRoomRateTd;
        }
        if ($this->allLiveEnterRoomUrateTd !== null) {
            $result['all_live_enter_room_urate_td'] = $this->allLiveEnterRoomUrateTd;
        }
        if ($this->allLiveFansAvgWatchDurationSecondsTd !== null) {
            $result['all_live_fans_avg_watch_duration_seconds_td'] = $this->allLiveFansAvgWatchDurationSecondsTd;
        }
        if ($this->allLiveFansClubJoinCntTd !== null) {
            $result['all_live_fans_club_join_cnt_td'] = $this->allLiveFansClubJoinCntTd;
        }
        if ($this->allLiveFollowCntTd !== null) {
            $result['all_live_follow_cnt_td'] = $this->allLiveFollowCntTd;
        }
        if ($this->allLiveFollowUrateTd !== null) {
            $result['all_live_follow_urate_td'] = $this->allLiveFollowUrateTd;
        }
        if ($this->allLiveGiftAmountTd !== null) {
            $result['all_live_gift_amount_td'] = $this->allLiveGiftAmountTd;
        }
        if ($this->allLiveLikeCntTd !== null) {
            $result['all_live_like_cnt_td'] = $this->allLiveLikeCntTd;
        }
        if ($this->allLiveLikeUrateTd !== null) {
            $result['all_live_like_urate_td'] = $this->allLiveLikeUrateTd;
        }
        if ($this->allLiveMax1minPcuTd !== null) {
            $result['all_live_max_1min_pcu_td'] = $this->allLiveMax1minPcuTd;
        }
        if ($this->allLiveSendGiftCntTd !== null) {
            $result['all_live_send_gift_cnt_td'] = $this->allLiveSendGiftCntTd;
        }
        if ($this->allLiveShareCntTd !== null) {
            $result['all_live_share_cnt_td'] = $this->allLiveShareCntTd;
        }
        if ($this->allLiveShareUcntTd !== null) {
            $result['all_live_share_ucnt_td'] = $this->allLiveShareUcntTd;
        }
        if ($this->allLiveShareUrateTd !== null) {
            $result['all_live_share_urate_td'] = $this->allLiveShareUrateTd;
        }
        if ($this->allLiveSingleWatchOver1mCntTd !== null) {
            $result['all_live_single_watch_over_1m_cnt_td'] = $this->allLiveSingleWatchOver1mCntTd;
        }
        if ($this->allLiveSingleWatchOver1mRateTd !== null) {
            $result['all_live_single_watch_over_1m_rate_td'] = $this->allLiveSingleWatchOver1mRateTd;
        }
        if ($this->allLiveWatchCntTd !== null) {
            $result['all_live_watch_cnt_td'] = $this->allLiveWatchCntTd;
        }
        if ($this->allLiveWatchUcntTd !== null) {
            $result['all_live_watch_ucnt_td'] = $this->allLiveWatchUcntTd;
        }
        if ($this->stdAdClickCntTd !== null) {
            $result['std_ad_click_cnt_td'] = $this->stdAdClickCntTd;
        }
        if ($this->stdAdConvertCntTd !== null) {
            $result['std_ad_convert_cnt_td'] = $this->stdAdConvertCntTd;
        }
        if ($this->stdAdCostAmountTd !== null) {
            $result['std_ad_cost_amount_td'] = $this->stdAdCostAmountTd;
        }
        if ($this->stdAdCpmTd !== null) {
            $result['std_ad_cpm_td'] = $this->stdAdCpmTd;
        }
        if ($this->stdAdCtrTd !== null) {
            $result['std_ad_ctr_td'] = $this->stdAdCtrTd;
        }
        if ($this->stdAdCvrTd !== null) {
            $result['std_ad_cvr_td'] = $this->stdAdCvrTd;
        }
        if ($this->stdAdShowCntTd !== null) {
            $result['std_ad_show_cnt_td'] = $this->stdAdShowCntTd;
        }
        if ($this->stdAppActiveCntTd !== null) {
            $result['std_app_active_cnt_td'] = $this->stdAppActiveCntTd;
        }
        if ($this->stdAppActiveRegisterCntTd !== null) {
            $result['std_app_active_register_cnt_td'] = $this->stdAppActiveRegisterCntTd;
        }
        if ($this->stdAppAttributionNextDayOpenCntTd !== null) {
            $result['std_app_attribution_next_day_open_cnt_td'] = $this->stdAppAttributionNextDayOpenCntTd;
        }
        if ($this->stdAppAttributionNextDayOpenRateTd !== null) {
            $result['std_app_attribution_next_day_open_rate_td'] = $this->stdAppAttributionNextDayOpenRateTd;
        }
        if ($this->stdAppDownloadFinishCntTd !== null) {
            $result['std_app_download_finish_cnt_td'] = $this->stdAppDownloadFinishCntTd;
        }
        if ($this->stdAppDownloadStartCntTd !== null) {
            $result['std_app_download_start_cnt_td'] = $this->stdAppDownloadStartCntTd;
        }
        if ($this->stdAppFirstPaymentCntTd !== null) {
            $result['std_app_first_payment_cnt_td'] = $this->stdAppFirstPaymentCntTd;
        }
        if ($this->stdAppGamePayCntTd !== null) {
            $result['std_app_game_pay_cnt_td'] = $this->stdAppGamePayCntTd;
        }
        if ($this->stdAppInstallFinishCntTd !== null) {
            $result['std_app_install_finish_cnt_td'] = $this->stdAppInstallFinishCntTd;
        }
        if ($this->stdAvgLiveWatchDurationSecondsTd !== null) {
            $result['std_avg_live_watch_duration_seconds_td'] = $this->stdAvgLiveWatchDurationSecondsTd;
        }
        if ($this->stdConsultEffectiveCntTd !== null) {
            $result['std_consult_effective_cnt_td'] = $this->stdConsultEffectiveCntTd;
        }
        if ($this->stdCustomerEffectiveCntTd !== null) {
            $result['std_customer_effective_cnt_td'] = $this->stdCustomerEffectiveCntTd;
        }
        if ($this->stdFormSubmitCntTd !== null) {
            $result['std_form_submit_cnt_td'] = $this->stdFormSubmitCntTd;
        }
        if ($this->stdInWechatPayCntTd !== null) {
            $result['std_in_wechat_pay_cnt_td'] = $this->stdInWechatPayCntTd;
        }
        if ($this->stdLiveCommentCntTd !== null) {
            $result['std_live_comment_cnt_td'] = $this->stdLiveCommentCntTd;
        }
        if ($this->stdLiveCommentUcntTd !== null) {
            $result['std_live_comment_ucnt_td'] = $this->stdLiveCommentUcntTd;
        }
        if ($this->stdLiveCommentUrateTd !== null) {
            $result['std_live_comment_urate_td'] = $this->stdLiveCommentUrateTd;
        }
        if ($this->stdLiveComponentClickCntTd !== null) {
            $result['std_live_component_click_cnt_td'] = $this->stdLiveComponentClickCntTd;
        }
        if ($this->stdLiveComponentClickRateTd !== null) {
            $result['std_live_component_click_rate_td'] = $this->stdLiveComponentClickRateTd;
        }
        if ($this->stdLiveComponentShowCntTd !== null) {
            $result['std_live_component_show_cnt_td'] = $this->stdLiveComponentShowCntTd;
        }
        if ($this->stdLiveDislikeCntTd !== null) {
            $result['std_live_dislike_cnt_td'] = $this->stdLiveDislikeCntTd;
        }
        if ($this->stdLiveFansClubJoinCntTd !== null) {
            $result['std_live_fans_club_join_cnt_td'] = $this->stdLiveFansClubJoinCntTd;
        }
        if ($this->stdLiveFollowCntTd !== null) {
            $result['std_live_follow_cnt_td'] = $this->stdLiveFollowCntTd;
        }
        if ($this->stdLiveFollowUrateTd !== null) {
            $result['std_live_follow_urate_td'] = $this->stdLiveFollowUrateTd;
        }
        if ($this->stdLiveGiftAmountTd !== null) {
            $result['std_live_gift_amount_td'] = $this->stdLiveGiftAmountTd;
        }
        if ($this->stdLiveSendGiftCntTd !== null) {
            $result['std_live_send_gift_cnt_td'] = $this->stdLiveSendGiftCntTd;
        }
        if ($this->stdLiveShareCntTd !== null) {
            $result['std_live_share_cnt_td'] = $this->stdLiveShareCntTd;
        }
        if ($this->stdLiveShareUcntTd !== null) {
            $result['std_live_share_ucnt_td'] = $this->stdLiveShareUcntTd;
        }
        if ($this->stdLiveShareUrateTd !== null) {
            $result['std_live_share_urate_td'] = $this->stdLiveShareUrateTd;
        }
        if ($this->stdLiveSingleWatchOver1mCntTd !== null) {
            $result['std_live_single_watch_over_1m_cnt_td'] = $this->stdLiveSingleWatchOver1mCntTd;
        }
        if ($this->stdLiveWatchCntTd !== null) {
            $result['std_live_watch_cnt_td'] = $this->stdLiveWatchCntTd;
        }
        if ($this->stdLiveWatchUcntTd !== null) {
            $result['std_live_watch_ucnt_td'] = $this->stdLiveWatchUcntTd;
        }
        if ($this->stdLiveWatchUrateTd !== null) {
            $result['std_live_watch_urate_td'] = $this->stdLiveWatchUrateTd;
        }
        if ($this->stdPremiumPaymentCntTd !== null) {
            $result['std_premium_payment_cnt_td'] = $this->stdPremiumPaymentCntTd;
        }
        if ($this->stdWorkWechatAddedCntTd !== null) {
            $result['std_work_wechat_added_cnt_td'] = $this->stdWorkWechatAddedCntTd;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['all_avg_live_pcu_td'] ?? null) !== null) {
            $obj->allAvgLivePcuTd = (int) $v;
        }
        if (($v = $data['all_avg_live_watch_duration_seconds_td'] ?? null) !== null) {
            $obj->allAvgLiveWatchDurationSecondsTd = (int) $v;
        }
        if (($v = $data['all_fans_live_comment_cnt_td'] ?? null) !== null) {
            $obj->allFansLiveCommentCntTd = (int) $v;
        }
        if (($v = $data['all_fans_live_watch_ucnt_td'] ?? null) !== null) {
            $obj->allFansLiveWatchUcntTd = (int) $v;
        }
        if (($v = $data['all_fans_live_watch_urate_td'] ?? null) !== null) {
            $obj->allFansLiveWatchUrateTd = (float) $v;
        }
        if (($v = $data['all_live_comment_cnt_td'] ?? null) !== null) {
            $obj->allLiveCommentCntTd = (int) $v;
        }
        if (($v = $data['all_live_comment_ucnt_td'] ?? null) !== null) {
            $obj->allLiveCommentUcntTd = (int) $v;
        }
        if (($v = $data['all_live_comment_urate_td'] ?? null) !== null) {
            $obj->allLiveCommentUrateTd = (float) $v;
        }
        if (($v = $data['all_live_dislike_cnt_td'] ?? null) !== null) {
            $obj->allLiveDislikeCntTd = (int) $v;
        }
        if (($v = $data['all_live_dislike_ucnt_td'] ?? null) !== null) {
            $obj->allLiveDislikeUcntTd = (int) $v;
        }
        if (($v = $data['all_live_dislike_urate_td'] ?? null) !== null) {
            $obj->allLiveDislikeUrateTd = (float) $v;
        }
        if (($v = $data['all_live_enter_room_rate_td'] ?? null) !== null) {
            $obj->allLiveEnterRoomRateTd = (float) $v;
        }
        if (($v = $data['all_live_enter_room_urate_td'] ?? null) !== null) {
            $obj->allLiveEnterRoomUrateTd = (float) $v;
        }
        if (($v = $data['all_live_fans_avg_watch_duration_seconds_td'] ?? null) !== null) {
            $obj->allLiveFansAvgWatchDurationSecondsTd = (int) $v;
        }
        if (($v = $data['all_live_fans_club_join_cnt_td'] ?? null) !== null) {
            $obj->allLiveFansClubJoinCntTd = (int) $v;
        }
        if (($v = $data['all_live_follow_cnt_td'] ?? null) !== null) {
            $obj->allLiveFollowCntTd = (int) $v;
        }
        if (($v = $data['all_live_follow_urate_td'] ?? null) !== null) {
            $obj->allLiveFollowUrateTd = (float) $v;
        }
        if (($v = $data['all_live_gift_amount_td'] ?? null) !== null) {
            $obj->allLiveGiftAmountTd = (int) $v;
        }
        if (($v = $data['all_live_like_cnt_td'] ?? null) !== null) {
            $obj->allLiveLikeCntTd = (int) $v;
        }
        if (($v = $data['all_live_like_urate_td'] ?? null) !== null) {
            $obj->allLiveLikeUrateTd = (float) $v;
        }
        if (($v = $data['all_live_max_1min_pcu_td'] ?? null) !== null) {
            $obj->allLiveMax1minPcuTd = (int) $v;
        }
        if (($v = $data['all_live_send_gift_cnt_td'] ?? null) !== null) {
            $obj->allLiveSendGiftCntTd = (int) $v;
        }
        if (($v = $data['all_live_share_cnt_td'] ?? null) !== null) {
            $obj->allLiveShareCntTd = (int) $v;
        }
        if (($v = $data['all_live_share_ucnt_td'] ?? null) !== null) {
            $obj->allLiveShareUcntTd = (int) $v;
        }
        if (($v = $data['all_live_share_urate_td'] ?? null) !== null) {
            $obj->allLiveShareUrateTd = (float) $v;
        }
        if (($v = $data['all_live_single_watch_over_1m_cnt_td'] ?? null) !== null) {
            $obj->allLiveSingleWatchOver1mCntTd = (int) $v;
        }
        if (($v = $data['all_live_single_watch_over_1m_rate_td'] ?? null) !== null) {
            $obj->allLiveSingleWatchOver1mRateTd = (float) $v;
        }
        if (($v = $data['all_live_watch_cnt_td'] ?? null) !== null) {
            $obj->allLiveWatchCntTd = (int) $v;
        }
        if (($v = $data['all_live_watch_ucnt_td'] ?? null) !== null) {
            $obj->allLiveWatchUcntTd = (int) $v;
        }
        if (($v = $data['std_ad_click_cnt_td'] ?? null) !== null) {
            $obj->stdAdClickCntTd = (int) $v;
        }
        if (($v = $data['std_ad_convert_cnt_td'] ?? null) !== null) {
            $obj->stdAdConvertCntTd = (int) $v;
        }
        if (($v = $data['std_ad_cost_amount_td'] ?? null) !== null) {
            $obj->stdAdCostAmountTd = (float) $v;
        }
        if (($v = $data['std_ad_cpm_td'] ?? null) !== null) {
            $obj->stdAdCpmTd = (float) $v;
        }
        if (($v = $data['std_ad_ctr_td'] ?? null) !== null) {
            $obj->stdAdCtrTd = (float) $v;
        }
        if (($v = $data['std_ad_cvr_td'] ?? null) !== null) {
            $obj->stdAdCvrTd = (float) $v;
        }
        if (($v = $data['std_ad_show_cnt_td'] ?? null) !== null) {
            $obj->stdAdShowCntTd = (int) $v;
        }
        if (($v = $data['std_app_active_cnt_td'] ?? null) !== null) {
            $obj->stdAppActiveCntTd = (int) $v;
        }
        if (($v = $data['std_app_active_register_cnt_td'] ?? null) !== null) {
            $obj->stdAppActiveRegisterCntTd = (int) $v;
        }
        if (($v = $data['std_app_attribution_next_day_open_cnt_td'] ?? null) !== null) {
            $obj->stdAppAttributionNextDayOpenCntTd = (int) $v;
        }
        if (($v = $data['std_app_attribution_next_day_open_rate_td'] ?? null) !== null) {
            $obj->stdAppAttributionNextDayOpenRateTd = (float) $v;
        }
        if (($v = $data['std_app_download_finish_cnt_td'] ?? null) !== null) {
            $obj->stdAppDownloadFinishCntTd = (int) $v;
        }
        if (($v = $data['std_app_download_start_cnt_td'] ?? null) !== null) {
            $obj->stdAppDownloadStartCntTd = (int) $v;
        }
        if (($v = $data['std_app_first_payment_cnt_td'] ?? null) !== null) {
            $obj->stdAppFirstPaymentCntTd = (int) $v;
        }
        if (($v = $data['std_app_game_pay_cnt_td'] ?? null) !== null) {
            $obj->stdAppGamePayCntTd = (int) $v;
        }
        if (($v = $data['std_app_install_finish_cnt_td'] ?? null) !== null) {
            $obj->stdAppInstallFinishCntTd = (int) $v;
        }
        if (($v = $data['std_avg_live_watch_duration_seconds_td'] ?? null) !== null) {
            $obj->stdAvgLiveWatchDurationSecondsTd = (int) $v;
        }
        if (($v = $data['std_consult_effective_cnt_td'] ?? null) !== null) {
            $obj->stdConsultEffectiveCntTd = (int) $v;
        }
        if (($v = $data['std_customer_effective_cnt_td'] ?? null) !== null) {
            $obj->stdCustomerEffectiveCntTd = (int) $v;
        }
        if (($v = $data['std_form_submit_cnt_td'] ?? null) !== null) {
            $obj->stdFormSubmitCntTd = (int) $v;
        }
        if (($v = $data['std_in_wechat_pay_cnt_td'] ?? null) !== null) {
            $obj->stdInWechatPayCntTd = (int) $v;
        }
        if (($v = $data['std_live_comment_cnt_td'] ?? null) !== null) {
            $obj->stdLiveCommentCntTd = (int) $v;
        }
        if (($v = $data['std_live_comment_ucnt_td'] ?? null) !== null) {
            $obj->stdLiveCommentUcntTd = (int) $v;
        }
        if (($v = $data['std_live_comment_urate_td'] ?? null) !== null) {
            $obj->stdLiveCommentUrateTd = (float) $v;
        }
        if (($v = $data['std_live_component_click_cnt_td'] ?? null) !== null) {
            $obj->stdLiveComponentClickCntTd = (int) $v;
        }
        if (($v = $data['std_live_component_click_rate_td'] ?? null) !== null) {
            $obj->stdLiveComponentClickRateTd = (float) $v;
        }
        if (($v = $data['std_live_component_show_cnt_td'] ?? null) !== null) {
            $obj->stdLiveComponentShowCntTd = (int) $v;
        }
        if (($v = $data['std_live_dislike_cnt_td'] ?? null) !== null) {
            $obj->stdLiveDislikeCntTd = (int) $v;
        }
        if (($v = $data['std_live_fans_club_join_cnt_td'] ?? null) !== null) {
            $obj->stdLiveFansClubJoinCntTd = (int) $v;
        }
        if (($v = $data['std_live_follow_cnt_td'] ?? null) !== null) {
            $obj->stdLiveFollowCntTd = (int) $v;
        }
        if (($v = $data['std_live_follow_urate_td'] ?? null) !== null) {
            $obj->stdLiveFollowUrateTd = (float) $v;
        }
        if (($v = $data['std_live_gift_amount_td'] ?? null) !== null) {
            $obj->stdLiveGiftAmountTd = (float) $v;
        }
        if (($v = $data['std_live_send_gift_cnt_td'] ?? null) !== null) {
            $obj->stdLiveSendGiftCntTd = (int) $v;
        }
        if (($v = $data['std_live_share_cnt_td'] ?? null) !== null) {
            $obj->stdLiveShareCntTd = (int) $v;
        }
        if (($v = $data['std_live_share_ucnt_td'] ?? null) !== null) {
            $obj->stdLiveShareUcntTd = (int) $v;
        }
        if (($v = $data['std_live_share_urate_td'] ?? null) !== null) {
            $obj->stdLiveShareUrateTd = (float) $v;
        }
        if (($v = $data['std_live_single_watch_over_1m_cnt_td'] ?? null) !== null) {
            $obj->stdLiveSingleWatchOver1mCntTd = (int) $v;
        }
        if (($v = $data['std_live_watch_cnt_td'] ?? null) !== null) {
            $obj->stdLiveWatchCntTd = (int) $v;
        }
        if (($v = $data['std_live_watch_ucnt_td'] ?? null) !== null) {
            $obj->stdLiveWatchUcntTd = (int) $v;
        }
        if (($v = $data['std_live_watch_urate_td'] ?? null) !== null) {
            $obj->stdLiveWatchUrateTd = (float) $v;
        }
        if (($v = $data['std_premium_payment_cnt_td'] ?? null) !== null) {
            $obj->stdPremiumPaymentCntTd = (int) $v;
        }
        if (($v = $data['std_work_wechat_added_cnt_td'] ?? null) !== null) {
            $obj->stdWorkWechatAddedCntTd = (int) $v;
        }
        return $obj;
    }
}
