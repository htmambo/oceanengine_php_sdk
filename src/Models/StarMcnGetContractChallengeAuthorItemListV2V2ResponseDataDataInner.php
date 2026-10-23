<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $androidConvertCount = null;

    /**
     * 达人已发放收益
     * @var int
     */
    protected ?int $authorAmount = null;

    /**
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * @var string
     */
    protected ?string $authorName = null;

    /**
     * 计费明细数据
     * @var string
     */
    protected ?string $billDetail = null;

    /**
     * 用户参与的渠道ID
     * @var string
     */
    protected ?string $channelId = null;

    /**
     * 线索量
     * @var int
     */
    protected ?int $clueCnt = null;

    /**
     * 作品封面url（有效期1小时）
     * @var string
     */
    protected ?string $coverUrl = null;

    /**
     * 创建时间
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * @var string
     */
    protected ?string $douyinId = null;

    /**
     * 预估广告消耗分成金额，单位厘
     * @var int
     */
    protected ?int $estAdShareAmount = null;

    /**
     * 预估用户付费分佣金额，单位厘
     * @var int
     */
    protected ?int $estCpsAmount = null;

    /**
     * @var int
     */
    protected ?int $estRewardAmount = null;

    /**
     * 累计广告收益
     * @var int
     */
    protected ?int $iaaCommercialIncomeHour = null;

    /**
     * item的iaa收益
     * @var int
     */
    protected ?int $iaaIncome = null;

    /**
     * 累计订单金额
     * @var int
     */
    protected ?int $iapOrderIncomeHour = null;

    /**
     * 安装完成量
     * @var int
     */
    protected ?int $installFinishCnt = null;

    /**
     * @var int
     */
    protected ?int $iosConvertCount = null;

    /**
     * @var bool
     */
    protected ?bool $isOwn = null;

    /**
     * 视频是否有违规
     * @var int
     */
    protected ?int $isViolated = null;

    /**
     * @var int
     */
    protected ?int $itemClickRate = null;

    /**
     * @var float
     */
    protected ?float $itemClickRateDouble = null;

    /**
     * @var int
     */
    protected ?int $itemComment = null;

    /**
     * @var int
     */
    protected ?int $itemFeelGood = null;

    /**
     * @var int
     */
    protected ?int $itemForward = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerItemInfoDailyListInner[]
     */
    protected ?array $itemInfoDailyList = null;

    /**
     * @var float
     */
    protected ?float $itemInteractRate = null;

    /**
     * 作品链接
     * @var string
     */
    protected ?string $itemUrl = null;

    /**
     * @var int
     */
    protected ?int $itemView = null;

    /**
     * @var \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerLiveEffectData
     */
    protected ?\Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerLiveEffectData $liveEffectData = null;

    /**
     * MCN 抽成金额
     * @var int
     */
    protected ?int $mcnAmount = null;

    /**
     * 视频公开状态，1：公开，0：非公开
     * @var int
     */
    protected ?int $openState = null;

    /**
     * 审核状态
     * @var int
     */
    protected ?int $overallAuditStatus = null;

    /**
     * 短视频播放量，或直播看播人次
     * @var int
     */
    protected ?int $play = null;

    /**
     * 服务商预估收益
     * @var int
     */
    protected ?int $providerSharePrice = null;

    /**
     * 发布时间
     * @var int
     */
    protected ?int $publishTime = null;

    /**
     * 审核拒绝原因
     * @var string[]
     */
    protected ?array $rejectReasons = null;

    /**
     * 撮合中介已发放佣金(和mcn_amount类似)，单位为厘（元*1000）
     * @var int
     */
    protected ?int $serviceProviderAmount = null;

    /**
     * 结算时间
     * @var int
     */
    protected ?int $settleTime = null;

    /**
     * 已结算广告消耗分成金额，单位厘
     * @var int
     */
    protected ?int $settledAdShareAmount = null;

    /**
     * 已结算用户付费分佣金额，单位厘
     * @var int
     */
    protected ?int $settledCpsAmount = null;

    /**
     * mcn抽佣已结算投广消耗金额，单位厘
     * @var int
     */
    protected ?int $settledMcnAdShareAmount = null;

    /**
     * mcn抽佣已结算付费分佣金额，单位厘
     * @var int
     */
    protected ?int $settledMcnCpsAmount = null;

    /**
     * MCN和达人可获得部分的预估流水，单位为厘（元*1000）
     * @var int
     */
    protected ?int $sharePrice = null;

    /**
     * @var int
     */
    protected ?int $sharePriceHour = null;

    /**
     * 达人预估可收益金额（非已发放金额），单位为厘（元*1000），包含MCN分佣部分
     * @var int
     */
    protected ?int $sharePriceTotal = null;

    /**
     * @var int
     */
    protected ?int $sharePriceTotalHour = null;

    /**
     * 视频有效播放量
     * @var int
     */
    protected ?int $shareVv = null;

    /**
     * @var \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerSmallGameSettle
     */
    protected ?\Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerSmallGameSettle $smallGameSettle = null;

    /**
     * 相关性审核，-1 未通过 0 审核中 1 通过
     * @var int
     */
    protected ?int $uncorrelated = null;

    /**
     * 作品时长（毫秒）
     * @var int
     */
    protected ?int $videoDurationMs = null;

    /**
     * 投稿来源渠道（视频参与来源渠道）
     * @var string
     */
    protected ?string $videoParticipateProviderChannel = null;

    /**
     * @return int
     */
    public function getAndroidConvertCount(): ?int
    {
        return $this->androidConvertCount;
    }

    /**
     * @param int $androidConvertCount
     * @return self
     */
    public function setAndroidConvertCount(?int $androidConvertCount): self
    {
        $this->androidConvertCount = $androidConvertCount;
        return $this;
    }

    /**
     * 达人已发放收益
     * @return int
     */
    public function getAuthorAmount(): ?int
    {
        return $this->authorAmount;
    }

    /**
     * 达人已发放收益
     * @param int $authorAmount
     * @return self
     */
    public function setAuthorAmount(?int $authorAmount): self
    {
        $this->authorAmount = $authorAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * @param int $authorId
     * @return self
     */
    public function setAuthorId(?int $authorId): self
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    /**
     * @param string $authorName
     * @return self
     */
    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * 计费明细数据
     * @return string
     */
    public function getBillDetail(): ?string
    {
        return $this->billDetail;
    }

    /**
     * 计费明细数据
     * @param string $billDetail
     * @return self
     */
    public function setBillDetail(?string $billDetail): self
    {
        $this->billDetail = $billDetail;
        return $this;
    }

    /**
     * 用户参与的渠道ID
     * @return string
     */
    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    /**
     * 用户参与的渠道ID
     * @param string $channelId
     * @return self
     */
    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    /**
     * 线索量
     * @return int
     */
    public function getClueCnt(): ?int
    {
        return $this->clueCnt;
    }

    /**
     * 线索量
     * @param int $clueCnt
     * @return self
     */
    public function setClueCnt(?int $clueCnt): self
    {
        $this->clueCnt = $clueCnt;
        return $this;
    }

    /**
     * 作品封面url（有效期1小时）
     * @return string
     */
    public function getCoverUrl(): ?string
    {
        return $this->coverUrl;
    }

    /**
     * 作品封面url（有效期1小时）
     * @param string $coverUrl
     * @return self
     */
    public function setCoverUrl(?string $coverUrl): self
    {
        $this->coverUrl = $coverUrl;
        return $this;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDouyinId(): ?string
    {
        return $this->douyinId;
    }

    /**
     * @param string $douyinId
     * @return self
     */
    public function setDouyinId(?string $douyinId): self
    {
        $this->douyinId = $douyinId;
        return $this;
    }

    /**
     * 预估广告消耗分成金额，单位厘
     * @return int
     */
    public function getEstAdShareAmount(): ?int
    {
        return $this->estAdShareAmount;
    }

    /**
     * 预估广告消耗分成金额，单位厘
     * @param int $estAdShareAmount
     * @return self
     */
    public function setEstAdShareAmount(?int $estAdShareAmount): self
    {
        $this->estAdShareAmount = $estAdShareAmount;
        return $this;
    }

    /**
     * 预估用户付费分佣金额，单位厘
     * @return int
     */
    public function getEstCpsAmount(): ?int
    {
        return $this->estCpsAmount;
    }

    /**
     * 预估用户付费分佣金额，单位厘
     * @param int $estCpsAmount
     * @return self
     */
    public function setEstCpsAmount(?int $estCpsAmount): self
    {
        $this->estCpsAmount = $estCpsAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getEstRewardAmount(): ?int
    {
        return $this->estRewardAmount;
    }

    /**
     * @param int $estRewardAmount
     * @return self
     */
    public function setEstRewardAmount(?int $estRewardAmount): self
    {
        $this->estRewardAmount = $estRewardAmount;
        return $this;
    }

    /**
     * 累计广告收益
     * @return int
     */
    public function getIaaCommercialIncomeHour(): ?int
    {
        return $this->iaaCommercialIncomeHour;
    }

    /**
     * 累计广告收益
     * @param int $iaaCommercialIncomeHour
     * @return self
     */
    public function setIaaCommercialIncomeHour(?int $iaaCommercialIncomeHour): self
    {
        $this->iaaCommercialIncomeHour = $iaaCommercialIncomeHour;
        return $this;
    }

    /**
     * item的iaa收益
     * @return int
     */
    public function getIaaIncome(): ?int
    {
        return $this->iaaIncome;
    }

    /**
     * item的iaa收益
     * @param int $iaaIncome
     * @return self
     */
    public function setIaaIncome(?int $iaaIncome): self
    {
        $this->iaaIncome = $iaaIncome;
        return $this;
    }

    /**
     * 累计订单金额
     * @return int
     */
    public function getIapOrderIncomeHour(): ?int
    {
        return $this->iapOrderIncomeHour;
    }

    /**
     * 累计订单金额
     * @param int $iapOrderIncomeHour
     * @return self
     */
    public function setIapOrderIncomeHour(?int $iapOrderIncomeHour): self
    {
        $this->iapOrderIncomeHour = $iapOrderIncomeHour;
        return $this;
    }

    /**
     * 安装完成量
     * @return int
     */
    public function getInstallFinishCnt(): ?int
    {
        return $this->installFinishCnt;
    }

    /**
     * 安装完成量
     * @param int $installFinishCnt
     * @return self
     */
    public function setInstallFinishCnt(?int $installFinishCnt): self
    {
        $this->installFinishCnt = $installFinishCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getIosConvertCount(): ?int
    {
        return $this->iosConvertCount;
    }

    /**
     * @param int $iosConvertCount
     * @return self
     */
    public function setIosConvertCount(?int $iosConvertCount): self
    {
        $this->iosConvertCount = $iosConvertCount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOwn(): ?bool
    {
        return $this->isOwn;
    }

    /**
     * @param bool $isOwn
     * @return self
     */
    public function setIsOwn(?bool $isOwn): self
    {
        $this->isOwn = $isOwn;
        return $this;
    }

    /**
     * 视频是否有违规
     * @return int
     */
    public function getIsViolated(): ?int
    {
        return $this->isViolated;
    }

    /**
     * 视频是否有违规
     * @param int $isViolated
     * @return self
     */
    public function setIsViolated(?int $isViolated): self
    {
        $this->isViolated = $isViolated;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemClickRate(): ?int
    {
        return $this->itemClickRate;
    }

    /**
     * @param int $itemClickRate
     * @return self
     */
    public function setItemClickRate(?int $itemClickRate): self
    {
        $this->itemClickRate = $itemClickRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getItemClickRateDouble(): ?float
    {
        return $this->itemClickRateDouble;
    }

    /**
     * @param float $itemClickRateDouble
     * @return self
     */
    public function setItemClickRateDouble(?float $itemClickRateDouble): self
    {
        $this->itemClickRateDouble = $itemClickRateDouble;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemComment(): ?int
    {
        return $this->itemComment;
    }

    /**
     * @param int $itemComment
     * @return self
     */
    public function setItemComment(?int $itemComment): self
    {
        $this->itemComment = $itemComment;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemFeelGood(): ?int
    {
        return $this->itemFeelGood;
    }

    /**
     * @param int $itemFeelGood
     * @return self
     */
    public function setItemFeelGood(?int $itemFeelGood): self
    {
        $this->itemFeelGood = $itemFeelGood;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemForward(): ?int
    {
        return $this->itemForward;
    }

    /**
     * @param int $itemForward
     * @return self
     */
    public function setItemForward(?int $itemForward): self
    {
        $this->itemForward = $itemForward;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerItemInfoDailyListInner[]
     */
    public function getItemInfoDailyList(): ?array
    {
        return $this->itemInfoDailyList;
    }

    /**
     * @param \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerItemInfoDailyListInner[] $itemInfoDailyList
     * @return self
     */
    public function setItemInfoDailyList(?array $itemInfoDailyList): self
    {
        $this->itemInfoDailyList = $itemInfoDailyList;
        return $this;
    }

    /**
     * @return float
     */
    public function getItemInteractRate(): ?float
    {
        return $this->itemInteractRate;
    }

    /**
     * @param float $itemInteractRate
     * @return self
     */
    public function setItemInteractRate(?float $itemInteractRate): self
    {
        $this->itemInteractRate = $itemInteractRate;
        return $this;
    }

    /**
     * 作品链接
     * @return string
     */
    public function getItemUrl(): ?string
    {
        return $this->itemUrl;
    }

    /**
     * 作品链接
     * @param string $itemUrl
     * @return self
     */
    public function setItemUrl(?string $itemUrl): self
    {
        $this->itemUrl = $itemUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemView(): ?int
    {
        return $this->itemView;
    }

    /**
     * @param int $itemView
     * @return self
     */
    public function setItemView(?int $itemView): self
    {
        $this->itemView = $itemView;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerLiveEffectData
     */
    public function getLiveEffectData(): ?\Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerLiveEffectData
    {
        return $this->liveEffectData;
    }

    /**
     * @param \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerLiveEffectData $liveEffectData
     * @return self
     */
    public function setLiveEffectData(?\Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerLiveEffectData $liveEffectData): self
    {
        $this->liveEffectData = $liveEffectData;
        return $this;
    }

    /**
     * MCN 抽成金额
     * @return int
     */
    public function getMcnAmount(): ?int
    {
        return $this->mcnAmount;
    }

    /**
     * MCN 抽成金额
     * @param int $mcnAmount
     * @return self
     */
    public function setMcnAmount(?int $mcnAmount): self
    {
        $this->mcnAmount = $mcnAmount;
        return $this;
    }

    /**
     * 视频公开状态，1：公开，0：非公开
     * @return int
     */
    public function getOpenState(): ?int
    {
        return $this->openState;
    }

    /**
     * 视频公开状态，1：公开，0：非公开
     * @param int $openState
     * @return self
     */
    public function setOpenState(?int $openState): self
    {
        $this->openState = $openState;
        return $this;
    }

    /**
     * 审核状态
     * @return int
     */
    public function getOverallAuditStatus(): ?int
    {
        return $this->overallAuditStatus;
    }

    /**
     * 审核状态
     * @param int $overallAuditStatus
     * @return self
     */
    public function setOverallAuditStatus(?int $overallAuditStatus): self
    {
        $this->overallAuditStatus = $overallAuditStatus;
        return $this;
    }

    /**
     * 短视频播放量，或直播看播人次
     * @return int
     */
    public function getPlay(): ?int
    {
        return $this->play;
    }

    /**
     * 短视频播放量，或直播看播人次
     * @param int $play
     * @return self
     */
    public function setPlay(?int $play): self
    {
        $this->play = $play;
        return $this;
    }

    /**
     * 服务商预估收益
     * @return int
     */
    public function getProviderSharePrice(): ?int
    {
        return $this->providerSharePrice;
    }

    /**
     * 服务商预估收益
     * @param int $providerSharePrice
     * @return self
     */
    public function setProviderSharePrice(?int $providerSharePrice): self
    {
        $this->providerSharePrice = $providerSharePrice;
        return $this;
    }

    /**
     * 发布时间
     * @return int
     */
    public function getPublishTime(): ?int
    {
        return $this->publishTime;
    }

    /**
     * 发布时间
     * @param int $publishTime
     * @return self
     */
    public function setPublishTime(?int $publishTime): self
    {
        $this->publishTime = $publishTime;
        return $this;
    }

    /**
     * 审核拒绝原因
     * @return string[]
     */
    public function getRejectReasons(): ?array
    {
        return $this->rejectReasons;
    }

    /**
     * 审核拒绝原因
     * @param string[] $rejectReasons
     * @return self
     */
    public function setRejectReasons(?array $rejectReasons): self
    {
        $this->rejectReasons = $rejectReasons;
        return $this;
    }

    /**
     * 撮合中介已发放佣金(和mcn_amount类似)，单位为厘（元*1000）
     * @return int
     */
    public function getServiceProviderAmount(): ?int
    {
        return $this->serviceProviderAmount;
    }

    /**
     * 撮合中介已发放佣金(和mcn_amount类似)，单位为厘（元*1000）
     * @param int $serviceProviderAmount
     * @return self
     */
    public function setServiceProviderAmount(?int $serviceProviderAmount): self
    {
        $this->serviceProviderAmount = $serviceProviderAmount;
        return $this;
    }

    /**
     * 结算时间
     * @return int
     */
    public function getSettleTime(): ?int
    {
        return $this->settleTime;
    }

    /**
     * 结算时间
     * @param int $settleTime
     * @return self
     */
    public function setSettleTime(?int $settleTime): self
    {
        $this->settleTime = $settleTime;
        return $this;
    }

    /**
     * 已结算广告消耗分成金额，单位厘
     * @return int
     */
    public function getSettledAdShareAmount(): ?int
    {
        return $this->settledAdShareAmount;
    }

    /**
     * 已结算广告消耗分成金额，单位厘
     * @param int $settledAdShareAmount
     * @return self
     */
    public function setSettledAdShareAmount(?int $settledAdShareAmount): self
    {
        $this->settledAdShareAmount = $settledAdShareAmount;
        return $this;
    }

    /**
     * 已结算用户付费分佣金额，单位厘
     * @return int
     */
    public function getSettledCpsAmount(): ?int
    {
        return $this->settledCpsAmount;
    }

    /**
     * 已结算用户付费分佣金额，单位厘
     * @param int $settledCpsAmount
     * @return self
     */
    public function setSettledCpsAmount(?int $settledCpsAmount): self
    {
        $this->settledCpsAmount = $settledCpsAmount;
        return $this;
    }

    /**
     * mcn抽佣已结算投广消耗金额，单位厘
     * @return int
     */
    public function getSettledMcnAdShareAmount(): ?int
    {
        return $this->settledMcnAdShareAmount;
    }

    /**
     * mcn抽佣已结算投广消耗金额，单位厘
     * @param int $settledMcnAdShareAmount
     * @return self
     */
    public function setSettledMcnAdShareAmount(?int $settledMcnAdShareAmount): self
    {
        $this->settledMcnAdShareAmount = $settledMcnAdShareAmount;
        return $this;
    }

    /**
     * mcn抽佣已结算付费分佣金额，单位厘
     * @return int
     */
    public function getSettledMcnCpsAmount(): ?int
    {
        return $this->settledMcnCpsAmount;
    }

    /**
     * mcn抽佣已结算付费分佣金额，单位厘
     * @param int $settledMcnCpsAmount
     * @return self
     */
    public function setSettledMcnCpsAmount(?int $settledMcnCpsAmount): self
    {
        $this->settledMcnCpsAmount = $settledMcnCpsAmount;
        return $this;
    }

    /**
     * MCN和达人可获得部分的预估流水，单位为厘（元*1000）
     * @return int
     */
    public function getSharePrice(): ?int
    {
        return $this->sharePrice;
    }

    /**
     * MCN和达人可获得部分的预估流水，单位为厘（元*1000）
     * @param int $sharePrice
     * @return self
     */
    public function setSharePrice(?int $sharePrice): self
    {
        $this->sharePrice = $sharePrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getSharePriceHour(): ?int
    {
        return $this->sharePriceHour;
    }

    /**
     * @param int $sharePriceHour
     * @return self
     */
    public function setSharePriceHour(?int $sharePriceHour): self
    {
        $this->sharePriceHour = $sharePriceHour;
        return $this;
    }

    /**
     * 达人预估可收益金额（非已发放金额），单位为厘（元*1000），包含MCN分佣部分
     * @return int
     */
    public function getSharePriceTotal(): ?int
    {
        return $this->sharePriceTotal;
    }

    /**
     * 达人预估可收益金额（非已发放金额），单位为厘（元*1000），包含MCN分佣部分
     * @param int $sharePriceTotal
     * @return self
     */
    public function setSharePriceTotal(?int $sharePriceTotal): self
    {
        $this->sharePriceTotal = $sharePriceTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getSharePriceTotalHour(): ?int
    {
        return $this->sharePriceTotalHour;
    }

    /**
     * @param int $sharePriceTotalHour
     * @return self
     */
    public function setSharePriceTotalHour(?int $sharePriceTotalHour): self
    {
        $this->sharePriceTotalHour = $sharePriceTotalHour;
        return $this;
    }

    /**
     * 视频有效播放量
     * @return int
     */
    public function getShareVv(): ?int
    {
        return $this->shareVv;
    }

    /**
     * 视频有效播放量
     * @param int $shareVv
     * @return self
     */
    public function setShareVv(?int $shareVv): self
    {
        $this->shareVv = $shareVv;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerSmallGameSettle
     */
    public function getSmallGameSettle(): ?\Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerSmallGameSettle
    {
        return $this->smallGameSettle;
    }

    /**
     * @param \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerSmallGameSettle $smallGameSettle
     * @return self
     */
    public function setSmallGameSettle(?\Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerSmallGameSettle $smallGameSettle): self
    {
        $this->smallGameSettle = $smallGameSettle;
        return $this;
    }

    /**
     * 相关性审核，-1 未通过 0 审核中 1 通过
     * @return int
     */
    public function getUncorrelated(): ?int
    {
        return $this->uncorrelated;
    }

    /**
     * 相关性审核，-1 未通过 0 审核中 1 通过
     * @param int $uncorrelated
     * @return self
     */
    public function setUncorrelated(?int $uncorrelated): self
    {
        $this->uncorrelated = $uncorrelated;
        return $this;
    }

    /**
     * 作品时长（毫秒）
     * @return int
     */
    public function getVideoDurationMs(): ?int
    {
        return $this->videoDurationMs;
    }

    /**
     * 作品时长（毫秒）
     * @param int $videoDurationMs
     * @return self
     */
    public function setVideoDurationMs(?int $videoDurationMs): self
    {
        $this->videoDurationMs = $videoDurationMs;
        return $this;
    }

    /**
     * 投稿来源渠道（视频参与来源渠道）
     * @return string
     */
    public function getVideoParticipateProviderChannel(): ?string
    {
        return $this->videoParticipateProviderChannel;
    }

    /**
     * 投稿来源渠道（视频参与来源渠道）
     * @param string $videoParticipateProviderChannel
     * @return self
     */
    public function setVideoParticipateProviderChannel(?string $videoParticipateProviderChannel): self
    {
        $this->videoParticipateProviderChannel = $videoParticipateProviderChannel;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidConvertCount !== null) {
            $result['android_convert_count'] = $this->androidConvertCount;
        }
        if ($this->authorAmount !== null) {
            $result['author_amount'] = $this->authorAmount;
        }
        if ($this->authorId !== null) {
            $result['author_id'] = $this->authorId;
        }
        if ($this->authorName !== null) {
            $result['author_name'] = $this->authorName;
        }
        if ($this->billDetail !== null) {
            $result['bill_detail'] = $this->billDetail;
        }
        if ($this->channelId !== null) {
            $result['channel_id'] = $this->channelId;
        }
        if ($this->clueCnt !== null) {
            $result['clue_cnt'] = $this->clueCnt;
        }
        if ($this->coverUrl !== null) {
            $result['cover_url'] = $this->coverUrl;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->douyinId !== null) {
            $result['douyin_id'] = $this->douyinId;
        }
        if ($this->estAdShareAmount !== null) {
            $result['est_ad_share_amount'] = $this->estAdShareAmount;
        }
        if ($this->estCpsAmount !== null) {
            $result['est_cps_amount'] = $this->estCpsAmount;
        }
        if ($this->estRewardAmount !== null) {
            $result['est_reward_amount'] = $this->estRewardAmount;
        }
        if ($this->iaaCommercialIncomeHour !== null) {
            $result['iaa_commercial_income_hour'] = $this->iaaCommercialIncomeHour;
        }
        if ($this->iaaIncome !== null) {
            $result['iaa_income'] = $this->iaaIncome;
        }
        if ($this->iapOrderIncomeHour !== null) {
            $result['iap_order_income_hour'] = $this->iapOrderIncomeHour;
        }
        if ($this->installFinishCnt !== null) {
            $result['install_finish_cnt'] = $this->installFinishCnt;
        }
        if ($this->iosConvertCount !== null) {
            $result['ios_convert_count'] = $this->iosConvertCount;
        }
        if ($this->isOwn !== null) {
            $result['is_own'] = $this->isOwn;
        }
        if ($this->isViolated !== null) {
            $result['is_violated'] = $this->isViolated;
        }
        if ($this->itemClickRate !== null) {
            $result['item_click_rate'] = $this->itemClickRate;
        }
        if ($this->itemClickRateDouble !== null) {
            $result['item_click_rate_double'] = $this->itemClickRateDouble;
        }
        if ($this->itemComment !== null) {
            $result['item_comment'] = $this->itemComment;
        }
        if ($this->itemFeelGood !== null) {
            $result['item_feel_good'] = $this->itemFeelGood;
        }
        if ($this->itemForward !== null) {
            $result['item_forward'] = $this->itemForward;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->itemInfoDailyList !== null) {
            $result['item_info_daily_list'] = $this->itemInfoDailyList;
        }
        if ($this->itemInteractRate !== null) {
            $result['item_interact_rate'] = $this->itemInteractRate;
        }
        if ($this->itemUrl !== null) {
            $result['item_url'] = $this->itemUrl;
        }
        if ($this->itemView !== null) {
            $result['item_view'] = $this->itemView;
        }
        if ($this->liveEffectData !== null) {
            $result['live_effect_data'] = $this->liveEffectData;
        }
        if ($this->mcnAmount !== null) {
            $result['mcn_amount'] = $this->mcnAmount;
        }
        if ($this->openState !== null) {
            $result['open_state'] = $this->openState;
        }
        if ($this->overallAuditStatus !== null) {
            $result['overall_audit_status'] = $this->overallAuditStatus;
        }
        if ($this->play !== null) {
            $result['play'] = $this->play;
        }
        if ($this->providerSharePrice !== null) {
            $result['provider_share_price'] = $this->providerSharePrice;
        }
        if ($this->publishTime !== null) {
            $result['publish_time'] = $this->publishTime;
        }
        if ($this->rejectReasons !== null) {
            $result['reject_reasons'] = $this->rejectReasons;
        }
        if ($this->serviceProviderAmount !== null) {
            $result['service_provider_amount'] = $this->serviceProviderAmount;
        }
        if ($this->settleTime !== null) {
            $result['settle_time'] = $this->settleTime;
        }
        if ($this->settledAdShareAmount !== null) {
            $result['settled_ad_share_amount'] = $this->settledAdShareAmount;
        }
        if ($this->settledCpsAmount !== null) {
            $result['settled_cps_amount'] = $this->settledCpsAmount;
        }
        if ($this->settledMcnAdShareAmount !== null) {
            $result['settled_mcn_ad_share_amount'] = $this->settledMcnAdShareAmount;
        }
        if ($this->settledMcnCpsAmount !== null) {
            $result['settled_mcn_cps_amount'] = $this->settledMcnCpsAmount;
        }
        if ($this->sharePrice !== null) {
            $result['share_price'] = $this->sharePrice;
        }
        if ($this->sharePriceHour !== null) {
            $result['share_price_hour'] = $this->sharePriceHour;
        }
        if ($this->sharePriceTotal !== null) {
            $result['share_price_total'] = $this->sharePriceTotal;
        }
        if ($this->sharePriceTotalHour !== null) {
            $result['share_price_total_hour'] = $this->sharePriceTotalHour;
        }
        if ($this->shareVv !== null) {
            $result['share_vv'] = $this->shareVv;
        }
        if ($this->smallGameSettle !== null) {
            $result['small_game_settle'] = $this->smallGameSettle;
        }
        if ($this->uncorrelated !== null) {
            $result['uncorrelated'] = $this->uncorrelated;
        }
        if ($this->videoDurationMs !== null) {
            $result['video_duration_ms'] = $this->videoDurationMs;
        }
        if ($this->videoParticipateProviderChannel !== null) {
            $result['video_participate_provider_channel'] = $this->videoParticipateProviderChannel;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_convert_count'] ?? null) !== null) {
            $obj->androidConvertCount = (int) $v;
        }
        if (($v = $data['author_amount'] ?? null) !== null) {
            $obj->authorAmount = (int) $v;
        }
        if (($v = $data['author_id'] ?? null) !== null) {
            $obj->authorId = (int) $v;
        }
        if (($v = $data['author_name'] ?? null) !== null) {
            $obj->authorName = (string) $v;
        }
        if (($v = $data['bill_detail'] ?? null) !== null) {
            $obj->billDetail = (string) $v;
        }
        if (($v = $data['channel_id'] ?? null) !== null) {
            $obj->channelId = (string) $v;
        }
        if (($v = $data['clue_cnt'] ?? null) !== null) {
            $obj->clueCnt = (int) $v;
        }
        if (($v = $data['cover_url'] ?? null) !== null) {
            $obj->coverUrl = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['douyin_id'] ?? null) !== null) {
            $obj->douyinId = (string) $v;
        }
        if (($v = $data['est_ad_share_amount'] ?? null) !== null) {
            $obj->estAdShareAmount = (int) $v;
        }
        if (($v = $data['est_cps_amount'] ?? null) !== null) {
            $obj->estCpsAmount = (int) $v;
        }
        if (($v = $data['est_reward_amount'] ?? null) !== null) {
            $obj->estRewardAmount = (int) $v;
        }
        if (($v = $data['iaa_commercial_income_hour'] ?? null) !== null) {
            $obj->iaaCommercialIncomeHour = (int) $v;
        }
        if (($v = $data['iaa_income'] ?? null) !== null) {
            $obj->iaaIncome = (int) $v;
        }
        if (($v = $data['iap_order_income_hour'] ?? null) !== null) {
            $obj->iapOrderIncomeHour = (int) $v;
        }
        if (($v = $data['install_finish_cnt'] ?? null) !== null) {
            $obj->installFinishCnt = (int) $v;
        }
        if (($v = $data['ios_convert_count'] ?? null) !== null) {
            $obj->iosConvertCount = (int) $v;
        }
        if (($v = $data['is_own'] ?? null) !== null) {
            $obj->isOwn = (bool) $v;
        }
        if (($v = $data['is_violated'] ?? null) !== null) {
            $obj->isViolated = (int) $v;
        }
        if (($v = $data['item_click_rate'] ?? null) !== null) {
            $obj->itemClickRate = (int) $v;
        }
        if (($v = $data['item_click_rate_double'] ?? null) !== null) {
            $obj->itemClickRateDouble = (float) $v;
        }
        if (($v = $data['item_comment'] ?? null) !== null) {
            $obj->itemComment = (int) $v;
        }
        if (($v = $data['item_feel_good'] ?? null) !== null) {
            $obj->itemFeelGood = (int) $v;
        }
        if (($v = $data['item_forward'] ?? null) !== null) {
            $obj->itemForward = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['item_info_daily_list'] ?? null) !== null && is_array($v)) {
            $obj->itemInfoDailyList = array_map(fn ($vv) => \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerItemInfoDailyListInner::fromArray($vv), $v);
        }
        if (($v = $data['item_interact_rate'] ?? null) !== null) {
            $obj->itemInteractRate = (float) $v;
        }
        if (($v = $data['item_url'] ?? null) !== null) {
            $obj->itemUrl = (string) $v;
        }
        if (($v = $data['item_view'] ?? null) !== null) {
            $obj->itemView = (int) $v;
        }
        if (($v = $data['live_effect_data'] ?? null) !== null && is_array($v)) {
            $obj->liveEffectData = \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerLiveEffectData::fromArray($v);
        }
        if (($v = $data['mcn_amount'] ?? null) !== null) {
            $obj->mcnAmount = (int) $v;
        }
        if (($v = $data['open_state'] ?? null) !== null) {
            $obj->openState = (int) $v;
        }
        if (($v = $data['overall_audit_status'] ?? null) !== null) {
            $obj->overallAuditStatus = (int) $v;
        }
        if (($v = $data['play'] ?? null) !== null) {
            $obj->play = (int) $v;
        }
        if (($v = $data['provider_share_price'] ?? null) !== null) {
            $obj->providerSharePrice = (int) $v;
        }
        if (($v = $data['publish_time'] ?? null) !== null) {
            $obj->publishTime = (int) $v;
        }
        if (($v = $data['reject_reasons'] ?? null) !== null && is_array($v)) {
            $obj->rejectReasons = $v;
        }
        if (($v = $data['service_provider_amount'] ?? null) !== null) {
            $obj->serviceProviderAmount = (int) $v;
        }
        if (($v = $data['settle_time'] ?? null) !== null) {
            $obj->settleTime = (int) $v;
        }
        if (($v = $data['settled_ad_share_amount'] ?? null) !== null) {
            $obj->settledAdShareAmount = (int) $v;
        }
        if (($v = $data['settled_cps_amount'] ?? null) !== null) {
            $obj->settledCpsAmount = (int) $v;
        }
        if (($v = $data['settled_mcn_ad_share_amount'] ?? null) !== null) {
            $obj->settledMcnAdShareAmount = (int) $v;
        }
        if (($v = $data['settled_mcn_cps_amount'] ?? null) !== null) {
            $obj->settledMcnCpsAmount = (int) $v;
        }
        if (($v = $data['share_price'] ?? null) !== null) {
            $obj->sharePrice = (int) $v;
        }
        if (($v = $data['share_price_hour'] ?? null) !== null) {
            $obj->sharePriceHour = (int) $v;
        }
        if (($v = $data['share_price_total'] ?? null) !== null) {
            $obj->sharePriceTotal = (int) $v;
        }
        if (($v = $data['share_price_total_hour'] ?? null) !== null) {
            $obj->sharePriceTotalHour = (int) $v;
        }
        if (($v = $data['share_vv'] ?? null) !== null) {
            $obj->shareVv = (int) $v;
        }
        if (($v = $data['small_game_settle'] ?? null) !== null && is_array($v)) {
            $obj->smallGameSettle = \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInnerSmallGameSettle::fromArray($v);
        }
        if (($v = $data['uncorrelated'] ?? null) !== null) {
            $obj->uncorrelated = (int) $v;
        }
        if (($v = $data['video_duration_ms'] ?? null) !== null) {
            $obj->videoDurationMs = (int) $v;
        }
        if (($v = $data['video_participate_provider_channel'] ?? null) !== null) {
            $obj->videoParticipateProviderChannel = (string) $v;
        }
        return $obj;
    }
}
