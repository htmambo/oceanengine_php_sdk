<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalReportProjectGetV30ResponseDataProjectListInner implements \JsonSerializable
{
    /**
     * 确认意向数(计费时间)
     * @var int
     */
    protected ?int $attributionClueConfirm = null;

    /**
     * 确认意向成本(计费时间)
     * @var float
     */
    protected ?float $attributionClueConfirmCost = null;

    /**
     * 预付定金数(计费时间)
     * @var int
     */
    protected ?int $attributionClueHighIntention = null;

    /**
     * 预付定金成本(计费时间)
     * @var float
     */
    protected ?float $attributionClueHighIntentionCost = null;

    /**
     * 私信留资数(计费时间)
     * @var int
     */
    protected ?int $attributionClueMessageCnt = null;

    /**
     * 团购线索数(计费时间)
     * @var int
     */
    protected ?int $attributionCluePayOrderCnt = null;

    /**
     * 正价课购买成本(计费时间)
     * @var float
     */
    protected ?float $attributionConversionClassCost = null;

    /**
     * 正价课购买数(计费时间)
     * @var int
     */
    protected ?int $attributionConversionClassCount = null;

    /**
     * 转化率(计费时间)(建议参考对应的事件指标)
     * @var float
     */
    protected ?float $attributionConversionRate = null;

    /**
     * 转化数(计费时间)(建议参考对应的事件指标)
     * @var int
     */
    protected ?int $attributionConvertCnt = null;

    /**
     * 转化成本(元)(计费时间)(建议参考对应的事件指标)
     * @var float
     */
    protected ?float $attributionConvertCost = null;

    /**
     * 表单提交数(计费时间)
     * @var int
     */
    protected ?int $attributionFormCnt = null;

    /**
     * 意向表单数(计费时间)
     * @var int
     */
    protected ?int $attributionIntentionFormCnt = null;

    /**
     * 意向咨询数(计费时间)
     * @var int
     */
    protected ?int $attributionIntentionMessageClueCnt = null;

    /**
     * @var float
     */
    protected ?float $attributionIntentionMessageClueCost = null;

    /**
     * 意向话单数(计费时间)
     * @var int
     */
    protected ?int $attributionIntentionPhoneCnt = null;

    /**
     * 私信咨询数(计费时间)
     * @var int
     */
    protected ?int $attributionMessageActionCnt = null;

    /**
     * 电话拨打数(计费时间)
     * @var int
     */
    protected ?int $attributionPhoneConfirmCnt = null;

    /**
     * 电话接通数(计费时间)
     * @var int
     */
    protected ?int $attributionPhoneConnectCnt = null;

    /**
     * 点击次数
     * @var int
     */
    protected ?int $clickCnt = null;

    /**
     * 私信留资数
     * @var int
     */
    protected ?int $clueMessageCount = null;

    /**
     * 团购线索数
     * @var int
     */
    protected ?int $cluePayOrderCnt = null;

    /**
     * 转化成本(元)(建议参考对应的事件指标)
     * @var float
     */
    protected ?float $conversionCost = null;

    /**
     * 转化率(建议参考对应的事件指标)
     * @var float
     */
    protected ?float $conversionRate = null;

    /**
     * 转化数(建议参考对应的事件指标)
     * @var int
     */
    protected ?int $convertCnt = null;

    /**
     * @var float
     */
    protected ?float $costPerVideoOtoPayOrder7d = null;

    /**
     * 点击均价(元)
     * @var float
     */
    protected ?float $cpcPlatform = null;

    /**
     * 平均千次展示费用(元)
     * @var float
     */
    protected ?float $cpmPlatform = null;

    /**
     * 点击率
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * 视频收藏次数
     * @var int
     */
    protected ?int $dyCollect = null;

    /**
     * 视频评论次数
     * @var int
     */
    protected ?int $dyComment = null;

    /**
     * 粉丝量
     * @var int
     */
    protected ?int $dyFollow = null;

    /**
     * @var int
     */
    protected ?int $dyHomeVisited = null;

    /**
     * 视频点赞次数
     * @var int
     */
    protected ?int $dyLike = null;

    /**
     * 视频点赞率
     * @var float
     */
    protected ?float $dyLikeRate = null;

    /**
     * 视频分享次数
     * @var int
     */
    protected ?int $dyShare = null;

    /**
     * 表单提交数
     * @var int
     */
    protected ?int $formCnt = null;

    /**
     * 意向表单数
     * @var int
     */
    protected ?int $intentionFormCnt = null;

    /**
     * 意向咨询数
     * @var int
     */
    protected ?int $intentionMessageClueCnt = null;

    /**
     * 意向话单数
     * @var int
     */
    protected ?int $intentionPhoneCnt = null;

    /**
     * @var int
     */
    protected ?int $liveGrouponProductClickCount = null;

    /**
     * @var int
     */
    protected ?int $liveOtoPayOrderCount = null;

    /**
     * @var float
     */
    protected ?float $liveOtoPayOrderRoi = null;

    /**
     * @var float
     */
    protected ?float $liveOtoPayOrderStatAmount = null;

    /**
     * 直播间超1分钟停留次数
     * @var int
     */
    protected ?int $liveWatchOneMinuteCount = null;

    /**
     * 直播间评论次数
     * @var int
     */
    protected ?int $lubanLiveCommentCnt = null;

    /**
     * 直播间观看次数
     * @var int
     */
    protected ?int $lubanLiveEnterCnt = null;

    /**
     * 直播间分享次数
     * @var int
     */
    protected ?int $lubanLiveShareCnt = null;

    /**
     * 私信咨询数
     * @var int
     */
    protected ?int $messageActionCnt = null;

    /**
     * @var float
     */
    protected ?float $otoPayOrderAmount = null;

    /**
     * @var int
     */
    protected ?int $otoPayOrderCount = null;

    /**
     * @var float
     */
    protected ?float $otoPayOrderRoi = null;

    /**
     * 电话拨打数
     * @var int
     */
    protected ?int $phoneConfirmCnt = null;

    /**
     * 电话接通数
     * @var int
     */
    protected ?int $phoneConnectCnt = null;

    /**
     * 视频25%进度播放次数
     * @var int
     */
    protected ?int $play25FeedBreak = null;

    /**
     * 视频50%进度播放次数
     * @var int
     */
    protected ?int $play50FeedBreak = null;

    /**
     * 视频75%进度播放次数
     * @var int
     */
    protected ?int $play75FeedBreak = null;

    /**
     * 视频3s播放次数
     * @var int
     */
    protected ?int $playDuration3s = null;

    /**
     * 视频5s播放次数
     * @var int
     */
    protected ?int $playDuration5s = null;

    /**
     * 视频5s播放率
     * @var float
     */
    protected ?float $playDuration5sShowCntRate = null;

    /**
     * 视频播放完成次数
     * @var int
     */
    protected ?int $playOver = null;

    /**
     * 视频完播率
     * @var float
     */
    protected ?float $playOverRate = null;

    /**
     * @var int
     */
    protected ?int $poiRecommendCount = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 项目名称
     * @var string
     */
    protected ?string $projectName = null;

    /**
     * 展示次数
     * @var int
     */
    protected ?int $showCnt = null;

    /**
     * 消耗(元)
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * 时间-天
     * @var string
     */
    protected ?string $statTimeDay = null;

    /**
     * 时间-小时
     * @var string
     */
    protected ?string $statTimeHour = null;

    /**
     * 视频播放次数
     * @var int
     */
    protected ?int $totalPlay = null;

    /**
     * @var int
     */
    protected ?int $videoOtoPayOrderCount = null;

    /**
     * @var int
     */
    protected ?int $videoOtoPayOrderCount7d = null;

    /**
     * @var float
     */
    protected ?float $videoOtoPayOrderRoi = null;

    /**
     * @var float
     */
    protected ?float $videoOtoPayOrderRoi7d = null;

    /**
     * @var float
     */
    protected ?float $videoOtoPayOrderStatAmount = null;

    /**
     * @var float
     */
    protected ?float $videoOtoPayOrderStatAmount7d = null;

    /**
     * 确认意向数(计费时间)
     * @return int
     */
    public function getAttributionClueConfirm(): ?int
    {
        return $this->attributionClueConfirm;
    }

    /**
     * 确认意向数(计费时间)
     * @param int $attributionClueConfirm
     * @return self
     */
    public function setAttributionClueConfirm(?int $attributionClueConfirm): self
    {
        $this->attributionClueConfirm = $attributionClueConfirm;
        return $this;
    }

    /**
     * 确认意向成本(计费时间)
     * @return float
     */
    public function getAttributionClueConfirmCost(): ?float
    {
        return $this->attributionClueConfirmCost;
    }

    /**
     * 确认意向成本(计费时间)
     * @param float $attributionClueConfirmCost
     * @return self
     */
    public function setAttributionClueConfirmCost(?float $attributionClueConfirmCost): self
    {
        $this->attributionClueConfirmCost = $attributionClueConfirmCost;
        return $this;
    }

    /**
     * 预付定金数(计费时间)
     * @return int
     */
    public function getAttributionClueHighIntention(): ?int
    {
        return $this->attributionClueHighIntention;
    }

    /**
     * 预付定金数(计费时间)
     * @param int $attributionClueHighIntention
     * @return self
     */
    public function setAttributionClueHighIntention(?int $attributionClueHighIntention): self
    {
        $this->attributionClueHighIntention = $attributionClueHighIntention;
        return $this;
    }

    /**
     * 预付定金成本(计费时间)
     * @return float
     */
    public function getAttributionClueHighIntentionCost(): ?float
    {
        return $this->attributionClueHighIntentionCost;
    }

    /**
     * 预付定金成本(计费时间)
     * @param float $attributionClueHighIntentionCost
     * @return self
     */
    public function setAttributionClueHighIntentionCost(?float $attributionClueHighIntentionCost): self
    {
        $this->attributionClueHighIntentionCost = $attributionClueHighIntentionCost;
        return $this;
    }

    /**
     * 私信留资数(计费时间)
     * @return int
     */
    public function getAttributionClueMessageCnt(): ?int
    {
        return $this->attributionClueMessageCnt;
    }

    /**
     * 私信留资数(计费时间)
     * @param int $attributionClueMessageCnt
     * @return self
     */
    public function setAttributionClueMessageCnt(?int $attributionClueMessageCnt): self
    {
        $this->attributionClueMessageCnt = $attributionClueMessageCnt;
        return $this;
    }

    /**
     * 团购线索数(计费时间)
     * @return int
     */
    public function getAttributionCluePayOrderCnt(): ?int
    {
        return $this->attributionCluePayOrderCnt;
    }

    /**
     * 团购线索数(计费时间)
     * @param int $attributionCluePayOrderCnt
     * @return self
     */
    public function setAttributionCluePayOrderCnt(?int $attributionCluePayOrderCnt): self
    {
        $this->attributionCluePayOrderCnt = $attributionCluePayOrderCnt;
        return $this;
    }

    /**
     * 正价课购买成本(计费时间)
     * @return float
     */
    public function getAttributionConversionClassCost(): ?float
    {
        return $this->attributionConversionClassCost;
    }

    /**
     * 正价课购买成本(计费时间)
     * @param float $attributionConversionClassCost
     * @return self
     */
    public function setAttributionConversionClassCost(?float $attributionConversionClassCost): self
    {
        $this->attributionConversionClassCost = $attributionConversionClassCost;
        return $this;
    }

    /**
     * 正价课购买数(计费时间)
     * @return int
     */
    public function getAttributionConversionClassCount(): ?int
    {
        return $this->attributionConversionClassCount;
    }

    /**
     * 正价课购买数(计费时间)
     * @param int $attributionConversionClassCount
     * @return self
     */
    public function setAttributionConversionClassCount(?int $attributionConversionClassCount): self
    {
        $this->attributionConversionClassCount = $attributionConversionClassCount;
        return $this;
    }

    /**
     * 转化率(计费时间)(建议参考对应的事件指标)
     * @return float
     */
    public function getAttributionConversionRate(): ?float
    {
        return $this->attributionConversionRate;
    }

    /**
     * 转化率(计费时间)(建议参考对应的事件指标)
     * @param float $attributionConversionRate
     * @return self
     */
    public function setAttributionConversionRate(?float $attributionConversionRate): self
    {
        $this->attributionConversionRate = $attributionConversionRate;
        return $this;
    }

    /**
     * 转化数(计费时间)(建议参考对应的事件指标)
     * @return int
     */
    public function getAttributionConvertCnt(): ?int
    {
        return $this->attributionConvertCnt;
    }

    /**
     * 转化数(计费时间)(建议参考对应的事件指标)
     * @param int $attributionConvertCnt
     * @return self
     */
    public function setAttributionConvertCnt(?int $attributionConvertCnt): self
    {
        $this->attributionConvertCnt = $attributionConvertCnt;
        return $this;
    }

    /**
     * 转化成本(元)(计费时间)(建议参考对应的事件指标)
     * @return float
     */
    public function getAttributionConvertCost(): ?float
    {
        return $this->attributionConvertCost;
    }

    /**
     * 转化成本(元)(计费时间)(建议参考对应的事件指标)
     * @param float $attributionConvertCost
     * @return self
     */
    public function setAttributionConvertCost(?float $attributionConvertCost): self
    {
        $this->attributionConvertCost = $attributionConvertCost;
        return $this;
    }

    /**
     * 表单提交数(计费时间)
     * @return int
     */
    public function getAttributionFormCnt(): ?int
    {
        return $this->attributionFormCnt;
    }

    /**
     * 表单提交数(计费时间)
     * @param int $attributionFormCnt
     * @return self
     */
    public function setAttributionFormCnt(?int $attributionFormCnt): self
    {
        $this->attributionFormCnt = $attributionFormCnt;
        return $this;
    }

    /**
     * 意向表单数(计费时间)
     * @return int
     */
    public function getAttributionIntentionFormCnt(): ?int
    {
        return $this->attributionIntentionFormCnt;
    }

    /**
     * 意向表单数(计费时间)
     * @param int $attributionIntentionFormCnt
     * @return self
     */
    public function setAttributionIntentionFormCnt(?int $attributionIntentionFormCnt): self
    {
        $this->attributionIntentionFormCnt = $attributionIntentionFormCnt;
        return $this;
    }

    /**
     * 意向咨询数(计费时间)
     * @return int
     */
    public function getAttributionIntentionMessageClueCnt(): ?int
    {
        return $this->attributionIntentionMessageClueCnt;
    }

    /**
     * 意向咨询数(计费时间)
     * @param int $attributionIntentionMessageClueCnt
     * @return self
     */
    public function setAttributionIntentionMessageClueCnt(?int $attributionIntentionMessageClueCnt): self
    {
        $this->attributionIntentionMessageClueCnt = $attributionIntentionMessageClueCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getAttributionIntentionMessageClueCost(): ?float
    {
        return $this->attributionIntentionMessageClueCost;
    }

    /**
     * @param float $attributionIntentionMessageClueCost
     * @return self
     */
    public function setAttributionIntentionMessageClueCost(?float $attributionIntentionMessageClueCost): self
    {
        $this->attributionIntentionMessageClueCost = $attributionIntentionMessageClueCost;
        return $this;
    }

    /**
     * 意向话单数(计费时间)
     * @return int
     */
    public function getAttributionIntentionPhoneCnt(): ?int
    {
        return $this->attributionIntentionPhoneCnt;
    }

    /**
     * 意向话单数(计费时间)
     * @param int $attributionIntentionPhoneCnt
     * @return self
     */
    public function setAttributionIntentionPhoneCnt(?int $attributionIntentionPhoneCnt): self
    {
        $this->attributionIntentionPhoneCnt = $attributionIntentionPhoneCnt;
        return $this;
    }

    /**
     * 私信咨询数(计费时间)
     * @return int
     */
    public function getAttributionMessageActionCnt(): ?int
    {
        return $this->attributionMessageActionCnt;
    }

    /**
     * 私信咨询数(计费时间)
     * @param int $attributionMessageActionCnt
     * @return self
     */
    public function setAttributionMessageActionCnt(?int $attributionMessageActionCnt): self
    {
        $this->attributionMessageActionCnt = $attributionMessageActionCnt;
        return $this;
    }

    /**
     * 电话拨打数(计费时间)
     * @return int
     */
    public function getAttributionPhoneConfirmCnt(): ?int
    {
        return $this->attributionPhoneConfirmCnt;
    }

    /**
     * 电话拨打数(计费时间)
     * @param int $attributionPhoneConfirmCnt
     * @return self
     */
    public function setAttributionPhoneConfirmCnt(?int $attributionPhoneConfirmCnt): self
    {
        $this->attributionPhoneConfirmCnt = $attributionPhoneConfirmCnt;
        return $this;
    }

    /**
     * 电话接通数(计费时间)
     * @return int
     */
    public function getAttributionPhoneConnectCnt(): ?int
    {
        return $this->attributionPhoneConnectCnt;
    }

    /**
     * 电话接通数(计费时间)
     * @param int $attributionPhoneConnectCnt
     * @return self
     */
    public function setAttributionPhoneConnectCnt(?int $attributionPhoneConnectCnt): self
    {
        $this->attributionPhoneConnectCnt = $attributionPhoneConnectCnt;
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
     * 私信留资数
     * @return int
     */
    public function getClueMessageCount(): ?int
    {
        return $this->clueMessageCount;
    }

    /**
     * 私信留资数
     * @param int $clueMessageCount
     * @return self
     */
    public function setClueMessageCount(?int $clueMessageCount): self
    {
        $this->clueMessageCount = $clueMessageCount;
        return $this;
    }

    /**
     * 团购线索数
     * @return int
     */
    public function getCluePayOrderCnt(): ?int
    {
        return $this->cluePayOrderCnt;
    }

    /**
     * 团购线索数
     * @param int $cluePayOrderCnt
     * @return self
     */
    public function setCluePayOrderCnt(?int $cluePayOrderCnt): self
    {
        $this->cluePayOrderCnt = $cluePayOrderCnt;
        return $this;
    }

    /**
     * 转化成本(元)(建议参考对应的事件指标)
     * @return float
     */
    public function getConversionCost(): ?float
    {
        return $this->conversionCost;
    }

    /**
     * 转化成本(元)(建议参考对应的事件指标)
     * @param float $conversionCost
     * @return self
     */
    public function setConversionCost(?float $conversionCost): self
    {
        $this->conversionCost = $conversionCost;
        return $this;
    }

    /**
     * 转化率(建议参考对应的事件指标)
     * @return float
     */
    public function getConversionRate(): ?float
    {
        return $this->conversionRate;
    }

    /**
     * 转化率(建议参考对应的事件指标)
     * @param float $conversionRate
     * @return self
     */
    public function setConversionRate(?float $conversionRate): self
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * 转化数(建议参考对应的事件指标)
     * @return int
     */
    public function getConvertCnt(): ?int
    {
        return $this->convertCnt;
    }

    /**
     * 转化数(建议参考对应的事件指标)
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
    public function getCostPerVideoOtoPayOrder7d(): ?float
    {
        return $this->costPerVideoOtoPayOrder7d;
    }

    /**
     * @param float $costPerVideoOtoPayOrder7d
     * @return self
     */
    public function setCostPerVideoOtoPayOrder7d(?float $costPerVideoOtoPayOrder7d): self
    {
        $this->costPerVideoOtoPayOrder7d = $costPerVideoOtoPayOrder7d;
        return $this;
    }

    /**
     * 点击均价(元)
     * @return float
     */
    public function getCpcPlatform(): ?float
    {
        return $this->cpcPlatform;
    }

    /**
     * 点击均价(元)
     * @param float $cpcPlatform
     * @return self
     */
    public function setCpcPlatform(?float $cpcPlatform): self
    {
        $this->cpcPlatform = $cpcPlatform;
        return $this;
    }

    /**
     * 平均千次展示费用(元)
     * @return float
     */
    public function getCpmPlatform(): ?float
    {
        return $this->cpmPlatform;
    }

    /**
     * 平均千次展示费用(元)
     * @param float $cpmPlatform
     * @return self
     */
    public function setCpmPlatform(?float $cpmPlatform): self
    {
        $this->cpmPlatform = $cpmPlatform;
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
     * 视频收藏次数
     * @return int
     */
    public function getDyCollect(): ?int
    {
        return $this->dyCollect;
    }

    /**
     * 视频收藏次数
     * @param int $dyCollect
     * @return self
     */
    public function setDyCollect(?int $dyCollect): self
    {
        $this->dyCollect = $dyCollect;
        return $this;
    }

    /**
     * 视频评论次数
     * @return int
     */
    public function getDyComment(): ?int
    {
        return $this->dyComment;
    }

    /**
     * 视频评论次数
     * @param int $dyComment
     * @return self
     */
    public function setDyComment(?int $dyComment): self
    {
        $this->dyComment = $dyComment;
        return $this;
    }

    /**
     * 粉丝量
     * @return int
     */
    public function getDyFollow(): ?int
    {
        return $this->dyFollow;
    }

    /**
     * 粉丝量
     * @param int $dyFollow
     * @return self
     */
    public function setDyFollow(?int $dyFollow): self
    {
        $this->dyFollow = $dyFollow;
        return $this;
    }

    /**
     * @return int
     */
    public function getDyHomeVisited(): ?int
    {
        return $this->dyHomeVisited;
    }

    /**
     * @param int $dyHomeVisited
     * @return self
     */
    public function setDyHomeVisited(?int $dyHomeVisited): self
    {
        $this->dyHomeVisited = $dyHomeVisited;
        return $this;
    }

    /**
     * 视频点赞次数
     * @return int
     */
    public function getDyLike(): ?int
    {
        return $this->dyLike;
    }

    /**
     * 视频点赞次数
     * @param int $dyLike
     * @return self
     */
    public function setDyLike(?int $dyLike): self
    {
        $this->dyLike = $dyLike;
        return $this;
    }

    /**
     * 视频点赞率
     * @return float
     */
    public function getDyLikeRate(): ?float
    {
        return $this->dyLikeRate;
    }

    /**
     * 视频点赞率
     * @param float $dyLikeRate
     * @return self
     */
    public function setDyLikeRate(?float $dyLikeRate): self
    {
        $this->dyLikeRate = $dyLikeRate;
        return $this;
    }

    /**
     * 视频分享次数
     * @return int
     */
    public function getDyShare(): ?int
    {
        return $this->dyShare;
    }

    /**
     * 视频分享次数
     * @param int $dyShare
     * @return self
     */
    public function setDyShare(?int $dyShare): self
    {
        $this->dyShare = $dyShare;
        return $this;
    }

    /**
     * 表单提交数
     * @return int
     */
    public function getFormCnt(): ?int
    {
        return $this->formCnt;
    }

    /**
     * 表单提交数
     * @param int $formCnt
     * @return self
     */
    public function setFormCnt(?int $formCnt): self
    {
        $this->formCnt = $formCnt;
        return $this;
    }

    /**
     * 意向表单数
     * @return int
     */
    public function getIntentionFormCnt(): ?int
    {
        return $this->intentionFormCnt;
    }

    /**
     * 意向表单数
     * @param int $intentionFormCnt
     * @return self
     */
    public function setIntentionFormCnt(?int $intentionFormCnt): self
    {
        $this->intentionFormCnt = $intentionFormCnt;
        return $this;
    }

    /**
     * 意向咨询数
     * @return int
     */
    public function getIntentionMessageClueCnt(): ?int
    {
        return $this->intentionMessageClueCnt;
    }

    /**
     * 意向咨询数
     * @param int $intentionMessageClueCnt
     * @return self
     */
    public function setIntentionMessageClueCnt(?int $intentionMessageClueCnt): self
    {
        $this->intentionMessageClueCnt = $intentionMessageClueCnt;
        return $this;
    }

    /**
     * 意向话单数
     * @return int
     */
    public function getIntentionPhoneCnt(): ?int
    {
        return $this->intentionPhoneCnt;
    }

    /**
     * 意向话单数
     * @param int $intentionPhoneCnt
     * @return self
     */
    public function setIntentionPhoneCnt(?int $intentionPhoneCnt): self
    {
        $this->intentionPhoneCnt = $intentionPhoneCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveGrouponProductClickCount(): ?int
    {
        return $this->liveGrouponProductClickCount;
    }

    /**
     * @param int $liveGrouponProductClickCount
     * @return self
     */
    public function setLiveGrouponProductClickCount(?int $liveGrouponProductClickCount): self
    {
        $this->liveGrouponProductClickCount = $liveGrouponProductClickCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveOtoPayOrderCount(): ?int
    {
        return $this->liveOtoPayOrderCount;
    }

    /**
     * @param int $liveOtoPayOrderCount
     * @return self
     */
    public function setLiveOtoPayOrderCount(?int $liveOtoPayOrderCount): self
    {
        $this->liveOtoPayOrderCount = $liveOtoPayOrderCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOtoPayOrderRoi(): ?float
    {
        return $this->liveOtoPayOrderRoi;
    }

    /**
     * @param float $liveOtoPayOrderRoi
     * @return self
     */
    public function setLiveOtoPayOrderRoi(?float $liveOtoPayOrderRoi): self
    {
        $this->liveOtoPayOrderRoi = $liveOtoPayOrderRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOtoPayOrderStatAmount(): ?float
    {
        return $this->liveOtoPayOrderStatAmount;
    }

    /**
     * @param float $liveOtoPayOrderStatAmount
     * @return self
     */
    public function setLiveOtoPayOrderStatAmount(?float $liveOtoPayOrderStatAmount): self
    {
        $this->liveOtoPayOrderStatAmount = $liveOtoPayOrderStatAmount;
        return $this;
    }

    /**
     * 直播间超1分钟停留次数
     * @return int
     */
    public function getLiveWatchOneMinuteCount(): ?int
    {
        return $this->liveWatchOneMinuteCount;
    }

    /**
     * 直播间超1分钟停留次数
     * @param int $liveWatchOneMinuteCount
     * @return self
     */
    public function setLiveWatchOneMinuteCount(?int $liveWatchOneMinuteCount): self
    {
        $this->liveWatchOneMinuteCount = $liveWatchOneMinuteCount;
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
     * 直播间观看次数
     * @return int
     */
    public function getLubanLiveEnterCnt(): ?int
    {
        return $this->lubanLiveEnterCnt;
    }

    /**
     * 直播间观看次数
     * @param int $lubanLiveEnterCnt
     * @return self
     */
    public function setLubanLiveEnterCnt(?int $lubanLiveEnterCnt): self
    {
        $this->lubanLiveEnterCnt = $lubanLiveEnterCnt;
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
     * 私信咨询数
     * @return int
     */
    public function getMessageActionCnt(): ?int
    {
        return $this->messageActionCnt;
    }

    /**
     * 私信咨询数
     * @param int $messageActionCnt
     * @return self
     */
    public function setMessageActionCnt(?int $messageActionCnt): self
    {
        $this->messageActionCnt = $messageActionCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getOtoPayOrderAmount(): ?float
    {
        return $this->otoPayOrderAmount;
    }

    /**
     * @param float $otoPayOrderAmount
     * @return self
     */
    public function setOtoPayOrderAmount(?float $otoPayOrderAmount): self
    {
        $this->otoPayOrderAmount = $otoPayOrderAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getOtoPayOrderCount(): ?int
    {
        return $this->otoPayOrderCount;
    }

    /**
     * @param int $otoPayOrderCount
     * @return self
     */
    public function setOtoPayOrderCount(?int $otoPayOrderCount): self
    {
        $this->otoPayOrderCount = $otoPayOrderCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOtoPayOrderRoi(): ?float
    {
        return $this->otoPayOrderRoi;
    }

    /**
     * @param float $otoPayOrderRoi
     * @return self
     */
    public function setOtoPayOrderRoi(?float $otoPayOrderRoi): self
    {
        $this->otoPayOrderRoi = $otoPayOrderRoi;
        return $this;
    }

    /**
     * 电话拨打数
     * @return int
     */
    public function getPhoneConfirmCnt(): ?int
    {
        return $this->phoneConfirmCnt;
    }

    /**
     * 电话拨打数
     * @param int $phoneConfirmCnt
     * @return self
     */
    public function setPhoneConfirmCnt(?int $phoneConfirmCnt): self
    {
        $this->phoneConfirmCnt = $phoneConfirmCnt;
        return $this;
    }

    /**
     * 电话接通数
     * @return int
     */
    public function getPhoneConnectCnt(): ?int
    {
        return $this->phoneConnectCnt;
    }

    /**
     * 电话接通数
     * @param int $phoneConnectCnt
     * @return self
     */
    public function setPhoneConnectCnt(?int $phoneConnectCnt): self
    {
        $this->phoneConnectCnt = $phoneConnectCnt;
        return $this;
    }

    /**
     * 视频25%进度播放次数
     * @return int
     */
    public function getPlay25FeedBreak(): ?int
    {
        return $this->play25FeedBreak;
    }

    /**
     * 视频25%进度播放次数
     * @param int $play25FeedBreak
     * @return self
     */
    public function setPlay25FeedBreak(?int $play25FeedBreak): self
    {
        $this->play25FeedBreak = $play25FeedBreak;
        return $this;
    }

    /**
     * 视频50%进度播放次数
     * @return int
     */
    public function getPlay50FeedBreak(): ?int
    {
        return $this->play50FeedBreak;
    }

    /**
     * 视频50%进度播放次数
     * @param int $play50FeedBreak
     * @return self
     */
    public function setPlay50FeedBreak(?int $play50FeedBreak): self
    {
        $this->play50FeedBreak = $play50FeedBreak;
        return $this;
    }

    /**
     * 视频75%进度播放次数
     * @return int
     */
    public function getPlay75FeedBreak(): ?int
    {
        return $this->play75FeedBreak;
    }

    /**
     * 视频75%进度播放次数
     * @param int $play75FeedBreak
     * @return self
     */
    public function setPlay75FeedBreak(?int $play75FeedBreak): self
    {
        $this->play75FeedBreak = $play75FeedBreak;
        return $this;
    }

    /**
     * 视频3s播放次数
     * @return int
     */
    public function getPlayDuration3s(): ?int
    {
        return $this->playDuration3s;
    }

    /**
     * 视频3s播放次数
     * @param int $playDuration3s
     * @return self
     */
    public function setPlayDuration3s(?int $playDuration3s): self
    {
        $this->playDuration3s = $playDuration3s;
        return $this;
    }

    /**
     * 视频5s播放次数
     * @return int
     */
    public function getPlayDuration5s(): ?int
    {
        return $this->playDuration5s;
    }

    /**
     * 视频5s播放次数
     * @param int $playDuration5s
     * @return self
     */
    public function setPlayDuration5s(?int $playDuration5s): self
    {
        $this->playDuration5s = $playDuration5s;
        return $this;
    }

    /**
     * 视频5s播放率
     * @return float
     */
    public function getPlayDuration5sShowCntRate(): ?float
    {
        return $this->playDuration5sShowCntRate;
    }

    /**
     * 视频5s播放率
     * @param float $playDuration5sShowCntRate
     * @return self
     */
    public function setPlayDuration5sShowCntRate(?float $playDuration5sShowCntRate): self
    {
        $this->playDuration5sShowCntRate = $playDuration5sShowCntRate;
        return $this;
    }

    /**
     * 视频播放完成次数
     * @return int
     */
    public function getPlayOver(): ?int
    {
        return $this->playOver;
    }

    /**
     * 视频播放完成次数
     * @param int $playOver
     * @return self
     */
    public function setPlayOver(?int $playOver): self
    {
        $this->playOver = $playOver;
        return $this;
    }

    /**
     * 视频完播率
     * @return float
     */
    public function getPlayOverRate(): ?float
    {
        return $this->playOverRate;
    }

    /**
     * 视频完播率
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
    public function getPoiRecommendCount(): ?int
    {
        return $this->poiRecommendCount;
    }

    /**
     * @param int $poiRecommendCount
     * @return self
     */
    public function setPoiRecommendCount(?int $poiRecommendCount): self
    {
        $this->poiRecommendCount = $poiRecommendCount;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * 项目名称
     * @return string
     */
    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    /**
     * 项目名称
     * @param string $projectName
     * @return self
     */
    public function setProjectName(?string $projectName): self
    {
        $this->projectName = $projectName;
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
     * 消耗(元)
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * 消耗(元)
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * 时间-天
     * @return string
     */
    public function getStatTimeDay(): ?string
    {
        return $this->statTimeDay;
    }

    /**
     * 时间-天
     * @param string $statTimeDay
     * @return self
     */
    public function setStatTimeDay(?string $statTimeDay): self
    {
        $this->statTimeDay = $statTimeDay;
        return $this;
    }

    /**
     * 时间-小时
     * @return string
     */
    public function getStatTimeHour(): ?string
    {
        return $this->statTimeHour;
    }

    /**
     * 时间-小时
     * @param string $statTimeHour
     * @return self
     */
    public function setStatTimeHour(?string $statTimeHour): self
    {
        $this->statTimeHour = $statTimeHour;
        return $this;
    }

    /**
     * 视频播放次数
     * @return int
     */
    public function getTotalPlay(): ?int
    {
        return $this->totalPlay;
    }

    /**
     * 视频播放次数
     * @param int $totalPlay
     * @return self
     */
    public function setTotalPlay(?int $totalPlay): self
    {
        $this->totalPlay = $totalPlay;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoOtoPayOrderCount(): ?int
    {
        return $this->videoOtoPayOrderCount;
    }

    /**
     * @param int $videoOtoPayOrderCount
     * @return self
     */
    public function setVideoOtoPayOrderCount(?int $videoOtoPayOrderCount): self
    {
        $this->videoOtoPayOrderCount = $videoOtoPayOrderCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoOtoPayOrderCount7d(): ?int
    {
        return $this->videoOtoPayOrderCount7d;
    }

    /**
     * @param int $videoOtoPayOrderCount7d
     * @return self
     */
    public function setVideoOtoPayOrderCount7d(?int $videoOtoPayOrderCount7d): self
    {
        $this->videoOtoPayOrderCount7d = $videoOtoPayOrderCount7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getVideoOtoPayOrderRoi(): ?float
    {
        return $this->videoOtoPayOrderRoi;
    }

    /**
     * @param float $videoOtoPayOrderRoi
     * @return self
     */
    public function setVideoOtoPayOrderRoi(?float $videoOtoPayOrderRoi): self
    {
        $this->videoOtoPayOrderRoi = $videoOtoPayOrderRoi;
        return $this;
    }

    /**
     * @return float
     */
    public function getVideoOtoPayOrderRoi7d(): ?float
    {
        return $this->videoOtoPayOrderRoi7d;
    }

    /**
     * @param float $videoOtoPayOrderRoi7d
     * @return self
     */
    public function setVideoOtoPayOrderRoi7d(?float $videoOtoPayOrderRoi7d): self
    {
        $this->videoOtoPayOrderRoi7d = $videoOtoPayOrderRoi7d;
        return $this;
    }

    /**
     * @return float
     */
    public function getVideoOtoPayOrderStatAmount(): ?float
    {
        return $this->videoOtoPayOrderStatAmount;
    }

    /**
     * @param float $videoOtoPayOrderStatAmount
     * @return self
     */
    public function setVideoOtoPayOrderStatAmount(?float $videoOtoPayOrderStatAmount): self
    {
        $this->videoOtoPayOrderStatAmount = $videoOtoPayOrderStatAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getVideoOtoPayOrderStatAmount7d(): ?float
    {
        return $this->videoOtoPayOrderStatAmount7d;
    }

    /**
     * @param float $videoOtoPayOrderStatAmount7d
     * @return self
     */
    public function setVideoOtoPayOrderStatAmount7d(?float $videoOtoPayOrderStatAmount7d): self
    {
        $this->videoOtoPayOrderStatAmount7d = $videoOtoPayOrderStatAmount7d;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attributionClueConfirm !== null) {
            $result['attribution_clue_confirm'] = $this->attributionClueConfirm;
        }
        if ($this->attributionClueConfirmCost !== null) {
            $result['attribution_clue_confirm_cost'] = $this->attributionClueConfirmCost;
        }
        if ($this->attributionClueHighIntention !== null) {
            $result['attribution_clue_high_intention'] = $this->attributionClueHighIntention;
        }
        if ($this->attributionClueHighIntentionCost !== null) {
            $result['attribution_clue_high_intention_cost'] = $this->attributionClueHighIntentionCost;
        }
        if ($this->attributionClueMessageCnt !== null) {
            $result['attribution_clue_message_cnt'] = $this->attributionClueMessageCnt;
        }
        if ($this->attributionCluePayOrderCnt !== null) {
            $result['attribution_clue_pay_order_cnt'] = $this->attributionCluePayOrderCnt;
        }
        if ($this->attributionConversionClassCost !== null) {
            $result['attribution_conversion_class_cost'] = $this->attributionConversionClassCost;
        }
        if ($this->attributionConversionClassCount !== null) {
            $result['attribution_conversion_class_count'] = $this->attributionConversionClassCount;
        }
        if ($this->attributionConversionRate !== null) {
            $result['attribution_conversion_rate'] = $this->attributionConversionRate;
        }
        if ($this->attributionConvertCnt !== null) {
            $result['attribution_convert_cnt'] = $this->attributionConvertCnt;
        }
        if ($this->attributionConvertCost !== null) {
            $result['attribution_convert_cost'] = $this->attributionConvertCost;
        }
        if ($this->attributionFormCnt !== null) {
            $result['attribution_form_cnt'] = $this->attributionFormCnt;
        }
        if ($this->attributionIntentionFormCnt !== null) {
            $result['attribution_intention_form_cnt'] = $this->attributionIntentionFormCnt;
        }
        if ($this->attributionIntentionMessageClueCnt !== null) {
            $result['attribution_intention_message_clue_cnt'] = $this->attributionIntentionMessageClueCnt;
        }
        if ($this->attributionIntentionMessageClueCost !== null) {
            $result['attribution_intention_message_clue_cost'] = $this->attributionIntentionMessageClueCost;
        }
        if ($this->attributionIntentionPhoneCnt !== null) {
            $result['attribution_intention_phone_cnt'] = $this->attributionIntentionPhoneCnt;
        }
        if ($this->attributionMessageActionCnt !== null) {
            $result['attribution_message_action_cnt'] = $this->attributionMessageActionCnt;
        }
        if ($this->attributionPhoneConfirmCnt !== null) {
            $result['attribution_phone_confirm_cnt'] = $this->attributionPhoneConfirmCnt;
        }
        if ($this->attributionPhoneConnectCnt !== null) {
            $result['attribution_phone_connect_cnt'] = $this->attributionPhoneConnectCnt;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->clueMessageCount !== null) {
            $result['clue_message_count'] = $this->clueMessageCount;
        }
        if ($this->cluePayOrderCnt !== null) {
            $result['clue_pay_order_cnt'] = $this->cluePayOrderCnt;
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
        if ($this->costPerVideoOtoPayOrder7d !== null) {
            $result['cost_per_video_oto_pay_order_7d'] = $this->costPerVideoOtoPayOrder7d;
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
        if ($this->dyCollect !== null) {
            $result['dy_collect'] = $this->dyCollect;
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
        if ($this->dyLikeRate !== null) {
            $result['dy_like_rate'] = $this->dyLikeRate;
        }
        if ($this->dyShare !== null) {
            $result['dy_share'] = $this->dyShare;
        }
        if ($this->formCnt !== null) {
            $result['form_cnt'] = $this->formCnt;
        }
        if ($this->intentionFormCnt !== null) {
            $result['intention_form_cnt'] = $this->intentionFormCnt;
        }
        if ($this->intentionMessageClueCnt !== null) {
            $result['intention_message_clue_cnt'] = $this->intentionMessageClueCnt;
        }
        if ($this->intentionPhoneCnt !== null) {
            $result['intention_phone_cnt'] = $this->intentionPhoneCnt;
        }
        if ($this->liveGrouponProductClickCount !== null) {
            $result['live_groupon_product_click_count'] = $this->liveGrouponProductClickCount;
        }
        if ($this->liveOtoPayOrderCount !== null) {
            $result['live_oto_pay_order_count'] = $this->liveOtoPayOrderCount;
        }
        if ($this->liveOtoPayOrderRoi !== null) {
            $result['live_oto_pay_order_roi'] = $this->liveOtoPayOrderRoi;
        }
        if ($this->liveOtoPayOrderStatAmount !== null) {
            $result['live_oto_pay_order_stat_amount'] = $this->liveOtoPayOrderStatAmount;
        }
        if ($this->liveWatchOneMinuteCount !== null) {
            $result['live_watch_one_minute_count'] = $this->liveWatchOneMinuteCount;
        }
        if ($this->lubanLiveCommentCnt !== null) {
            $result['luban_live_comment_cnt'] = $this->lubanLiveCommentCnt;
        }
        if ($this->lubanLiveEnterCnt !== null) {
            $result['luban_live_enter_cnt'] = $this->lubanLiveEnterCnt;
        }
        if ($this->lubanLiveShareCnt !== null) {
            $result['luban_live_share_cnt'] = $this->lubanLiveShareCnt;
        }
        if ($this->messageActionCnt !== null) {
            $result['message_action_cnt'] = $this->messageActionCnt;
        }
        if ($this->otoPayOrderAmount !== null) {
            $result['oto_pay_order_amount'] = $this->otoPayOrderAmount;
        }
        if ($this->otoPayOrderCount !== null) {
            $result['oto_pay_order_count'] = $this->otoPayOrderCount;
        }
        if ($this->otoPayOrderRoi !== null) {
            $result['oto_pay_order_roi'] = $this->otoPayOrderRoi;
        }
        if ($this->phoneConfirmCnt !== null) {
            $result['phone_confirm_cnt'] = $this->phoneConfirmCnt;
        }
        if ($this->phoneConnectCnt !== null) {
            $result['phone_connect_cnt'] = $this->phoneConnectCnt;
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
        if ($this->playDuration5s !== null) {
            $result['play_duration_5s'] = $this->playDuration5s;
        }
        if ($this->playDuration5sShowCntRate !== null) {
            $result['play_duration_5s_show_cnt_rate'] = $this->playDuration5sShowCntRate;
        }
        if ($this->playOver !== null) {
            $result['play_over'] = $this->playOver;
        }
        if ($this->playOverRate !== null) {
            $result['play_over_rate'] = $this->playOverRate;
        }
        if ($this->poiRecommendCount !== null) {
            $result['poi_recommend_count'] = $this->poiRecommendCount;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->projectName !== null) {
            $result['project_name'] = $this->projectName;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->statTimeDay !== null) {
            $result['stat_time_day'] = $this->statTimeDay;
        }
        if ($this->statTimeHour !== null) {
            $result['stat_time_hour'] = $this->statTimeHour;
        }
        if ($this->totalPlay !== null) {
            $result['total_play'] = $this->totalPlay;
        }
        if ($this->videoOtoPayOrderCount !== null) {
            $result['video_oto_pay_order_count'] = $this->videoOtoPayOrderCount;
        }
        if ($this->videoOtoPayOrderCount7d !== null) {
            $result['video_oto_pay_order_count_7d'] = $this->videoOtoPayOrderCount7d;
        }
        if ($this->videoOtoPayOrderRoi !== null) {
            $result['video_oto_pay_order_roi'] = $this->videoOtoPayOrderRoi;
        }
        if ($this->videoOtoPayOrderRoi7d !== null) {
            $result['video_oto_pay_order_roi_7d'] = $this->videoOtoPayOrderRoi7d;
        }
        if ($this->videoOtoPayOrderStatAmount !== null) {
            $result['video_oto_pay_order_stat_amount'] = $this->videoOtoPayOrderStatAmount;
        }
        if ($this->videoOtoPayOrderStatAmount7d !== null) {
            $result['video_oto_pay_order_stat_amount_7d'] = $this->videoOtoPayOrderStatAmount7d;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attribution_clue_confirm'] ?? null) !== null) {
            $obj->attributionClueConfirm = (int) $v;
        }
        if (($v = $data['attribution_clue_confirm_cost'] ?? null) !== null) {
            $obj->attributionClueConfirmCost = (float) $v;
        }
        if (($v = $data['attribution_clue_high_intention'] ?? null) !== null) {
            $obj->attributionClueHighIntention = (int) $v;
        }
        if (($v = $data['attribution_clue_high_intention_cost'] ?? null) !== null) {
            $obj->attributionClueHighIntentionCost = (float) $v;
        }
        if (($v = $data['attribution_clue_message_cnt'] ?? null) !== null) {
            $obj->attributionClueMessageCnt = (int) $v;
        }
        if (($v = $data['attribution_clue_pay_order_cnt'] ?? null) !== null) {
            $obj->attributionCluePayOrderCnt = (int) $v;
        }
        if (($v = $data['attribution_conversion_class_cost'] ?? null) !== null) {
            $obj->attributionConversionClassCost = (float) $v;
        }
        if (($v = $data['attribution_conversion_class_count'] ?? null) !== null) {
            $obj->attributionConversionClassCount = (int) $v;
        }
        if (($v = $data['attribution_conversion_rate'] ?? null) !== null) {
            $obj->attributionConversionRate = (float) $v;
        }
        if (($v = $data['attribution_convert_cnt'] ?? null) !== null) {
            $obj->attributionConvertCnt = (int) $v;
        }
        if (($v = $data['attribution_convert_cost'] ?? null) !== null) {
            $obj->attributionConvertCost = (float) $v;
        }
        if (($v = $data['attribution_form_cnt'] ?? null) !== null) {
            $obj->attributionFormCnt = (int) $v;
        }
        if (($v = $data['attribution_intention_form_cnt'] ?? null) !== null) {
            $obj->attributionIntentionFormCnt = (int) $v;
        }
        if (($v = $data['attribution_intention_message_clue_cnt'] ?? null) !== null) {
            $obj->attributionIntentionMessageClueCnt = (int) $v;
        }
        if (($v = $data['attribution_intention_message_clue_cost'] ?? null) !== null) {
            $obj->attributionIntentionMessageClueCost = (float) $v;
        }
        if (($v = $data['attribution_intention_phone_cnt'] ?? null) !== null) {
            $obj->attributionIntentionPhoneCnt = (int) $v;
        }
        if (($v = $data['attribution_message_action_cnt'] ?? null) !== null) {
            $obj->attributionMessageActionCnt = (int) $v;
        }
        if (($v = $data['attribution_phone_confirm_cnt'] ?? null) !== null) {
            $obj->attributionPhoneConfirmCnt = (int) $v;
        }
        if (($v = $data['attribution_phone_connect_cnt'] ?? null) !== null) {
            $obj->attributionPhoneConnectCnt = (int) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (int) $v;
        }
        if (($v = $data['clue_message_count'] ?? null) !== null) {
            $obj->clueMessageCount = (int) $v;
        }
        if (($v = $data['clue_pay_order_cnt'] ?? null) !== null) {
            $obj->cluePayOrderCnt = (int) $v;
        }
        if (($v = $data['conversion_cost'] ?? null) !== null) {
            $obj->conversionCost = (float) $v;
        }
        if (($v = $data['conversion_rate'] ?? null) !== null) {
            $obj->conversionRate = (float) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (int) $v;
        }
        if (($v = $data['cost_per_video_oto_pay_order_7d'] ?? null) !== null) {
            $obj->costPerVideoOtoPayOrder7d = (float) $v;
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
        if (($v = $data['dy_collect'] ?? null) !== null) {
            $obj->dyCollect = (int) $v;
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
        if (($v = $data['dy_like_rate'] ?? null) !== null) {
            $obj->dyLikeRate = (float) $v;
        }
        if (($v = $data['dy_share'] ?? null) !== null) {
            $obj->dyShare = (int) $v;
        }
        if (($v = $data['form_cnt'] ?? null) !== null) {
            $obj->formCnt = (int) $v;
        }
        if (($v = $data['intention_form_cnt'] ?? null) !== null) {
            $obj->intentionFormCnt = (int) $v;
        }
        if (($v = $data['intention_message_clue_cnt'] ?? null) !== null) {
            $obj->intentionMessageClueCnt = (int) $v;
        }
        if (($v = $data['intention_phone_cnt'] ?? null) !== null) {
            $obj->intentionPhoneCnt = (int) $v;
        }
        if (($v = $data['live_groupon_product_click_count'] ?? null) !== null) {
            $obj->liveGrouponProductClickCount = (int) $v;
        }
        if (($v = $data['live_oto_pay_order_count'] ?? null) !== null) {
            $obj->liveOtoPayOrderCount = (int) $v;
        }
        if (($v = $data['live_oto_pay_order_roi'] ?? null) !== null) {
            $obj->liveOtoPayOrderRoi = (float) $v;
        }
        if (($v = $data['live_oto_pay_order_stat_amount'] ?? null) !== null) {
            $obj->liveOtoPayOrderStatAmount = (float) $v;
        }
        if (($v = $data['live_watch_one_minute_count'] ?? null) !== null) {
            $obj->liveWatchOneMinuteCount = (int) $v;
        }
        if (($v = $data['luban_live_comment_cnt'] ?? null) !== null) {
            $obj->lubanLiveCommentCnt = (int) $v;
        }
        if (($v = $data['luban_live_enter_cnt'] ?? null) !== null) {
            $obj->lubanLiveEnterCnt = (int) $v;
        }
        if (($v = $data['luban_live_share_cnt'] ?? null) !== null) {
            $obj->lubanLiveShareCnt = (int) $v;
        }
        if (($v = $data['message_action_cnt'] ?? null) !== null) {
            $obj->messageActionCnt = (int) $v;
        }
        if (($v = $data['oto_pay_order_amount'] ?? null) !== null) {
            $obj->otoPayOrderAmount = (float) $v;
        }
        if (($v = $data['oto_pay_order_count'] ?? null) !== null) {
            $obj->otoPayOrderCount = (int) $v;
        }
        if (($v = $data['oto_pay_order_roi'] ?? null) !== null) {
            $obj->otoPayOrderRoi = (float) $v;
        }
        if (($v = $data['phone_confirm_cnt'] ?? null) !== null) {
            $obj->phoneConfirmCnt = (int) $v;
        }
        if (($v = $data['phone_connect_cnt'] ?? null) !== null) {
            $obj->phoneConnectCnt = (int) $v;
        }
        if (($v = $data['play_25_feed_break'] ?? null) !== null) {
            $obj->play25FeedBreak = (int) $v;
        }
        if (($v = $data['play_50_feed_break'] ?? null) !== null) {
            $obj->play50FeedBreak = (int) $v;
        }
        if (($v = $data['play_75_feed_break'] ?? null) !== null) {
            $obj->play75FeedBreak = (int) $v;
        }
        if (($v = $data['play_duration_3s'] ?? null) !== null) {
            $obj->playDuration3s = (int) $v;
        }
        if (($v = $data['play_duration_5s'] ?? null) !== null) {
            $obj->playDuration5s = (int) $v;
        }
        if (($v = $data['play_duration_5s_show_cnt_rate'] ?? null) !== null) {
            $obj->playDuration5sShowCntRate = (float) $v;
        }
        if (($v = $data['play_over'] ?? null) !== null) {
            $obj->playOver = (int) $v;
        }
        if (($v = $data['play_over_rate'] ?? null) !== null) {
            $obj->playOverRate = (float) $v;
        }
        if (($v = $data['poi_recommend_count'] ?? null) !== null) {
            $obj->poiRecommendCount = (int) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['project_name'] ?? null) !== null) {
            $obj->projectName = (string) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (int) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['stat_time_day'] ?? null) !== null) {
            $obj->statTimeDay = (string) $v;
        }
        if (($v = $data['stat_time_hour'] ?? null) !== null) {
            $obj->statTimeHour = (string) $v;
        }
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (int) $v;
        }
        if (($v = $data['video_oto_pay_order_count'] ?? null) !== null) {
            $obj->videoOtoPayOrderCount = (int) $v;
        }
        if (($v = $data['video_oto_pay_order_count_7d'] ?? null) !== null) {
            $obj->videoOtoPayOrderCount7d = (int) $v;
        }
        if (($v = $data['video_oto_pay_order_roi'] ?? null) !== null) {
            $obj->videoOtoPayOrderRoi = (float) $v;
        }
        if (($v = $data['video_oto_pay_order_roi_7d'] ?? null) !== null) {
            $obj->videoOtoPayOrderRoi7d = (float) $v;
        }
        if (($v = $data['video_oto_pay_order_stat_amount'] ?? null) !== null) {
            $obj->videoOtoPayOrderStatAmount = (float) $v;
        }
        if (($v = $data['video_oto_pay_order_stat_amount_7d'] ?? null) !== null) {
            $obj->videoOtoPayOrderStatAmount7d = (float) $v;
        }
        return $obj;
    }
}
