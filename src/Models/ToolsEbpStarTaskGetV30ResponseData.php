<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskGetV30ResponseData implements \JsonSerializable
{
    /**
     * 任务内推广的Android应用包名
     * @var string
     */
    protected ?string $androidAppPackageName = null;

    /**
     * 任务内推广的Android应用链接
     * @var string
     */
    protected ?string $androidDownloadUrl = null;

    /**
     * 任务内Android落地页，橙子落地页，仅1个
     * @var string
     */
    protected ?string $androidExternalUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataAudienceSettings
     */
    protected ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataAudienceSettings $audienceSettings = null;

    /**
     * @var int
     */
    protected ?int $authorSubmitFrequency = null;

    /**
     * 达人侧任务名称，1-50个字符，达人浏览任务时会看到此名称
     * @var string
     */
    protected ?string $authorTaskName = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30DataBriefType
     */
    protected ?string $briefType = null;

    /**
     * 一级行业分类ID
     * @var int
     */
    protected ?int $firstIndustryId = null;

    /**
     * 一级行业分类Name
     * @var string
     */
    protected ?string $firstIndustryName = null;

    /**
     * 任务内推广的iOS应用包名
     * @var string
     */
    protected ?string $iosAppPackageName = null;

    /**
     * 任务内推广的iOS应用链接
     * @var string
     */
    protected ?string $iosDownloadUrl = null;

    /**
     * 任务内iOS落地页，橙子落地页，仅1个
     * @var string
     */
    protected ?string $iosExternalUrl = null;

    /**
     * 任务所选锚点关联的小程序/小游戏appid
     * @var string
     */
    protected ?string $microAppId = null;

    /**
     * 字节小程序链接，创建任务时填写的链接，未设置时不会返回
     * @var string
     */
    protected ?string $microAppLink = null;

    /**
     * 任务所选锚点关联的小程序/小游戏名称
     * @var string
     */
    protected ?string $microAppName = null;

    /**
     * 微信小程序/小游戏路径参数
     * @var string
     */
    protected ?string $microAppPath = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroduction
     */
    protected ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroduction $productAdditionalIntroduction = null;

    /**
     * 产品介绍，1-1000个字符，介绍中出现数据、专利/奖项、影视片段、明星/网红、活动等信息
     * @var string
     */
    protected ?string $productIntroduction = null;

    /**
     * 产品名称，1-40个字符，任务推广的产品名称
     * @var string
     */
    protected ?string $productName = null;

    /**
     * 二级行业分类ID
     * @var int
     */
    protected ?int $secondIndustryId = null;

    /**
     * 二级行业分类Name
     * @var string
     */
    protected ?string $secondIndustryName = null;

    /**
     * 来源星图账户名称
     * @var string
     */
    protected ?string $starAccountName = null;

    /**
     * 广告消耗分成比例
     * @var float
     */
    protected ?float $starAdCostDivideRatio = null;

    /**
     * 来源星图账户id
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 素材出价（元），每条视频最低需要付给达人的底价价格
     * @var float
     */
    protected ?float $starMaterialBid = null;

    /**
     * 基础素材费单价区间，报价区间为建议值，系统优先邀约符合报价区间的达人
     * @var float[]
     */
    protected ?array $starMaterialBidRange = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAlbumMicroAppInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAlbumMicroAppInfo $starTaskAlbumMicroAppInfo = null;

    /**
     * 原生锚点ID
     * @var int
     */
    protected ?int $starTaskAnchorId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskAnchorType
     */
    protected ?string $starTaskAnchorType = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAssetInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAssetInfo $starTaskAssetInfo = null;

    /**
     * 任务审核拒绝原因和意见，没有则返回为空
     * @var string
     */
    protected ?string $starTaskBanReasonDetail = null;

    /**
     * 任务出价（元）
     * @var float
     */
    protected ?float $starTaskBid = null;

    /**
     * 安卓出价（元）
     * @var float
     */
    protected ?float $starTaskBidAndroid = null;

    /**
     * IOS出价（元）
     * @var float
     */
    protected ?float $starTaskBidIos = null;

    /**
     * 任务预算（元），只能是10000-1000000元之间的整数
     * @var float
     */
    protected ?float $starTaskBudget = null;

    /**
     * 任务创建时间，格式YYYY-MM-DD
     * @var string
     */
    protected ?string $starTaskCreateTime = null;

    /**
     * 服务商延长后的实际投稿截止时间
     * @var string
     */
    protected ?string $starTaskDelayedPostEndTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskExternalAction
     */
    protected ?string $starTaskExternalAction = null;

    /**
     * 星广联投任务ID
     * @var int
     */
    protected ?int $starTaskId = null;

    /**
     * 任务内介绍文案
     * @var string
     */
    protected ?string $starTaskIntroductionText = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod
     */
    protected ?string $starTaskMaterialPurchaseMethod = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskMaterialsRequirements
     */
    protected ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskMaterialsRequirements $starTaskMaterialsRequirements = null;

    /**
     * 星广联投任务名称
     * @var string
     */
    protected ?string $starTaskName = null;

    /**
     * 任务结束时间为投稿截止时间,格式YYYY-MM-DD
     * @var string
     */
    protected ?string $starTaskPostEndTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskSource
     */
    protected ?string $starTaskSource = null;

    /**
     * 任务开始时间，格式YYYY-MM-DD
     * @var string
     */
    protected ?string $starTaskStartTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskStatus
     */
    protected ?string $starTaskStatus = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskSubStatus
     */
    protected ?string $starTaskSubStatus = null;

    /**
     * 任务标签
     * @var string
     */
    protected ?string $starTaskTags = null;

    /**
     * 任务图标uri
     * @var string
     */
    protected ?string $taskAvatarId = null;

    /**
     * 任务图标url
     * @var string
     */
    protected ?string $taskAvatarUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataTaskContactInfo
     */
    protected ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataTaskContactInfo $taskContactInfo = null;

    /**
     * 任务头图uri
     * @var string
     */
    protected ?string $taskHeadImageId = null;

    /**
     * 任务内推广的Android应用包名
     * @return string
     */
    public function getAndroidAppPackageName(): ?string
    {
        return $this->androidAppPackageName;
    }

    /**
     * 任务内推广的Android应用包名
     * @param string $androidAppPackageName
     * @return self
     */
    public function setAndroidAppPackageName(?string $androidAppPackageName): self
    {
        $this->androidAppPackageName = $androidAppPackageName;
        return $this;
    }

    /**
     * 任务内推广的Android应用链接
     * @return string
     */
    public function getAndroidDownloadUrl(): ?string
    {
        return $this->androidDownloadUrl;
    }

    /**
     * 任务内推广的Android应用链接
     * @param string $androidDownloadUrl
     * @return self
     */
    public function setAndroidDownloadUrl(?string $androidDownloadUrl): self
    {
        $this->androidDownloadUrl = $androidDownloadUrl;
        return $this;
    }

    /**
     * 任务内Android落地页，橙子落地页，仅1个
     * @return string
     */
    public function getAndroidExternalUrl(): ?string
    {
        return $this->androidExternalUrl;
    }

    /**
     * 任务内Android落地页，橙子落地页，仅1个
     * @param string $androidExternalUrl
     * @return self
     */
    public function setAndroidExternalUrl(?string $androidExternalUrl): self
    {
        $this->androidExternalUrl = $androidExternalUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataAudienceSettings
     */
    public function getAudienceSettings(): ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataAudienceSettings
    {
        return $this->audienceSettings;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataAudienceSettings $audienceSettings
     * @return self
     */
    public function setAudienceSettings(?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataAudienceSettings $audienceSettings): self
    {
        $this->audienceSettings = $audienceSettings;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthorSubmitFrequency(): ?int
    {
        return $this->authorSubmitFrequency;
    }

    /**
     * @param int $authorSubmitFrequency
     * @return self
     */
    public function setAuthorSubmitFrequency(?int $authorSubmitFrequency): self
    {
        $this->authorSubmitFrequency = $authorSubmitFrequency;
        return $this;
    }

    /**
     * 达人侧任务名称，1-50个字符，达人浏览任务时会看到此名称
     * @return string
     */
    public function getAuthorTaskName(): ?string
    {
        return $this->authorTaskName;
    }

    /**
     * 达人侧任务名称，1-50个字符，达人浏览任务时会看到此名称
     * @param string $authorTaskName
     * @return self
     */
    public function setAuthorTaskName(?string $authorTaskName): self
    {
        $this->authorTaskName = $authorTaskName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30DataBriefType
     */
    public function getBriefType(): ?string
    {
        return $this->briefType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30DataBriefType $briefType
     * @return self
     */
    public function setBriefType(?string $briefType): self
    {
        $this->briefType = $briefType;
        return $this;
    }

    /**
     * 一级行业分类ID
     * @return int
     */
    public function getFirstIndustryId(): ?int
    {
        return $this->firstIndustryId;
    }

    /**
     * 一级行业分类ID
     * @param int $firstIndustryId
     * @return self
     */
    public function setFirstIndustryId(?int $firstIndustryId): self
    {
        $this->firstIndustryId = $firstIndustryId;
        return $this;
    }

    /**
     * 一级行业分类Name
     * @return string
     */
    public function getFirstIndustryName(): ?string
    {
        return $this->firstIndustryName;
    }

    /**
     * 一级行业分类Name
     * @param string $firstIndustryName
     * @return self
     */
    public function setFirstIndustryName(?string $firstIndustryName): self
    {
        $this->firstIndustryName = $firstIndustryName;
        return $this;
    }

    /**
     * 任务内推广的iOS应用包名
     * @return string
     */
    public function getIosAppPackageName(): ?string
    {
        return $this->iosAppPackageName;
    }

    /**
     * 任务内推广的iOS应用包名
     * @param string $iosAppPackageName
     * @return self
     */
    public function setIosAppPackageName(?string $iosAppPackageName): self
    {
        $this->iosAppPackageName = $iosAppPackageName;
        return $this;
    }

    /**
     * 任务内推广的iOS应用链接
     * @return string
     */
    public function getIosDownloadUrl(): ?string
    {
        return $this->iosDownloadUrl;
    }

    /**
     * 任务内推广的iOS应用链接
     * @param string $iosDownloadUrl
     * @return self
     */
    public function setIosDownloadUrl(?string $iosDownloadUrl): self
    {
        $this->iosDownloadUrl = $iosDownloadUrl;
        return $this;
    }

    /**
     * 任务内iOS落地页，橙子落地页，仅1个
     * @return string
     */
    public function getIosExternalUrl(): ?string
    {
        return $this->iosExternalUrl;
    }

    /**
     * 任务内iOS落地页，橙子落地页，仅1个
     * @param string $iosExternalUrl
     * @return self
     */
    public function setIosExternalUrl(?string $iosExternalUrl): self
    {
        $this->iosExternalUrl = $iosExternalUrl;
        return $this;
    }

    /**
     * 任务所选锚点关联的小程序/小游戏appid
     * @return string
     */
    public function getMicroAppId(): ?string
    {
        return $this->microAppId;
    }

    /**
     * 任务所选锚点关联的小程序/小游戏appid
     * @param string $microAppId
     * @return self
     */
    public function setMicroAppId(?string $microAppId): self
    {
        $this->microAppId = $microAppId;
        return $this;
    }

    /**
     * 字节小程序链接，创建任务时填写的链接，未设置时不会返回
     * @return string
     */
    public function getMicroAppLink(): ?string
    {
        return $this->microAppLink;
    }

    /**
     * 字节小程序链接，创建任务时填写的链接，未设置时不会返回
     * @param string $microAppLink
     * @return self
     */
    public function setMicroAppLink(?string $microAppLink): self
    {
        $this->microAppLink = $microAppLink;
        return $this;
    }

    /**
     * 任务所选锚点关联的小程序/小游戏名称
     * @return string
     */
    public function getMicroAppName(): ?string
    {
        return $this->microAppName;
    }

    /**
     * 任务所选锚点关联的小程序/小游戏名称
     * @param string $microAppName
     * @return self
     */
    public function setMicroAppName(?string $microAppName): self
    {
        $this->microAppName = $microAppName;
        return $this;
    }

    /**
     * 微信小程序/小游戏路径参数
     * @return string
     */
    public function getMicroAppPath(): ?string
    {
        return $this->microAppPath;
    }

    /**
     * 微信小程序/小游戏路径参数
     * @param string $microAppPath
     * @return self
     */
    public function setMicroAppPath(?string $microAppPath): self
    {
        $this->microAppPath = $microAppPath;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroduction
     */
    public function getProductAdditionalIntroduction(): ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroduction
    {
        return $this->productAdditionalIntroduction;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroduction $productAdditionalIntroduction
     * @return self
     */
    public function setProductAdditionalIntroduction(?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroduction $productAdditionalIntroduction): self
    {
        $this->productAdditionalIntroduction = $productAdditionalIntroduction;
        return $this;
    }

    /**
     * 产品介绍，1-1000个字符，介绍中出现数据、专利/奖项、影视片段、明星/网红、活动等信息
     * @return string
     */
    public function getProductIntroduction(): ?string
    {
        return $this->productIntroduction;
    }

    /**
     * 产品介绍，1-1000个字符，介绍中出现数据、专利/奖项、影视片段、明星/网红、活动等信息
     * @param string $productIntroduction
     * @return self
     */
    public function setProductIntroduction(?string $productIntroduction): self
    {
        $this->productIntroduction = $productIntroduction;
        return $this;
    }

    /**
     * 产品名称，1-40个字符，任务推广的产品名称
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * 产品名称，1-40个字符，任务推广的产品名称
     * @param string $productName
     * @return self
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * 二级行业分类ID
     * @return int
     */
    public function getSecondIndustryId(): ?int
    {
        return $this->secondIndustryId;
    }

    /**
     * 二级行业分类ID
     * @param int $secondIndustryId
     * @return self
     */
    public function setSecondIndustryId(?int $secondIndustryId): self
    {
        $this->secondIndustryId = $secondIndustryId;
        return $this;
    }

    /**
     * 二级行业分类Name
     * @return string
     */
    public function getSecondIndustryName(): ?string
    {
        return $this->secondIndustryName;
    }

    /**
     * 二级行业分类Name
     * @param string $secondIndustryName
     * @return self
     */
    public function setSecondIndustryName(?string $secondIndustryName): self
    {
        $this->secondIndustryName = $secondIndustryName;
        return $this;
    }

    /**
     * 来源星图账户名称
     * @return string
     */
    public function getStarAccountName(): ?string
    {
        return $this->starAccountName;
    }

    /**
     * 来源星图账户名称
     * @param string $starAccountName
     * @return self
     */
    public function setStarAccountName(?string $starAccountName): self
    {
        $this->starAccountName = $starAccountName;
        return $this;
    }

    /**
     * 广告消耗分成比例
     * @return float
     */
    public function getStarAdCostDivideRatio(): ?float
    {
        return $this->starAdCostDivideRatio;
    }

    /**
     * 广告消耗分成比例
     * @param float $starAdCostDivideRatio
     * @return self
     */
    public function setStarAdCostDivideRatio(?float $starAdCostDivideRatio): self
    {
        $this->starAdCostDivideRatio = $starAdCostDivideRatio;
        return $this;
    }

    /**
     * 来源星图账户id
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 来源星图账户id
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 素材出价（元），每条视频最低需要付给达人的底价价格
     * @return float
     */
    public function getStarMaterialBid(): ?float
    {
        return $this->starMaterialBid;
    }

    /**
     * 素材出价（元），每条视频最低需要付给达人的底价价格
     * @param float $starMaterialBid
     * @return self
     */
    public function setStarMaterialBid(?float $starMaterialBid): self
    {
        $this->starMaterialBid = $starMaterialBid;
        return $this;
    }

    /**
     * 基础素材费单价区间，报价区间为建议值，系统优先邀约符合报价区间的达人
     * @return float[]
     */
    public function getStarMaterialBidRange(): ?array
    {
        return $this->starMaterialBidRange;
    }

    /**
     * 基础素材费单价区间，报价区间为建议值，系统优先邀约符合报价区间的达人
     * @param float[] $starMaterialBidRange
     * @return self
     */
    public function setStarMaterialBidRange(?array $starMaterialBidRange): self
    {
        $this->starMaterialBidRange = $starMaterialBidRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAlbumMicroAppInfo
     */
    public function getStarTaskAlbumMicroAppInfo(): ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAlbumMicroAppInfo
    {
        return $this->starTaskAlbumMicroAppInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAlbumMicroAppInfo $starTaskAlbumMicroAppInfo
     * @return self
     */
    public function setStarTaskAlbumMicroAppInfo(?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAlbumMicroAppInfo $starTaskAlbumMicroAppInfo): self
    {
        $this->starTaskAlbumMicroAppInfo = $starTaskAlbumMicroAppInfo;
        return $this;
    }

    /**
     * 原生锚点ID
     * @return int
     */
    public function getStarTaskAnchorId(): ?int
    {
        return $this->starTaskAnchorId;
    }

    /**
     * 原生锚点ID
     * @param int $starTaskAnchorId
     * @return self
     */
    public function setStarTaskAnchorId(?int $starTaskAnchorId): self
    {
        $this->starTaskAnchorId = $starTaskAnchorId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskAnchorType
     */
    public function getStarTaskAnchorType(): ?string
    {
        return $this->starTaskAnchorType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskAnchorType $starTaskAnchorType
     * @return self
     */
    public function setStarTaskAnchorType(?string $starTaskAnchorType): self
    {
        $this->starTaskAnchorType = $starTaskAnchorType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAssetInfo
     */
    public function getStarTaskAssetInfo(): ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAssetInfo
    {
        return $this->starTaskAssetInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAssetInfo $starTaskAssetInfo
     * @return self
     */
    public function setStarTaskAssetInfo(?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAssetInfo $starTaskAssetInfo): self
    {
        $this->starTaskAssetInfo = $starTaskAssetInfo;
        return $this;
    }

    /**
     * 任务审核拒绝原因和意见，没有则返回为空
     * @return string
     */
    public function getStarTaskBanReasonDetail(): ?string
    {
        return $this->starTaskBanReasonDetail;
    }

    /**
     * 任务审核拒绝原因和意见，没有则返回为空
     * @param string $starTaskBanReasonDetail
     * @return self
     */
    public function setStarTaskBanReasonDetail(?string $starTaskBanReasonDetail): self
    {
        $this->starTaskBanReasonDetail = $starTaskBanReasonDetail;
        return $this;
    }

    /**
     * 任务出价（元）
     * @return float
     */
    public function getStarTaskBid(): ?float
    {
        return $this->starTaskBid;
    }

    /**
     * 任务出价（元）
     * @param float $starTaskBid
     * @return self
     */
    public function setStarTaskBid(?float $starTaskBid): self
    {
        $this->starTaskBid = $starTaskBid;
        return $this;
    }

    /**
     * 安卓出价（元）
     * @return float
     */
    public function getStarTaskBidAndroid(): ?float
    {
        return $this->starTaskBidAndroid;
    }

    /**
     * 安卓出价（元）
     * @param float $starTaskBidAndroid
     * @return self
     */
    public function setStarTaskBidAndroid(?float $starTaskBidAndroid): self
    {
        $this->starTaskBidAndroid = $starTaskBidAndroid;
        return $this;
    }

    /**
     * IOS出价（元）
     * @return float
     */
    public function getStarTaskBidIos(): ?float
    {
        return $this->starTaskBidIos;
    }

    /**
     * IOS出价（元）
     * @param float $starTaskBidIos
     * @return self
     */
    public function setStarTaskBidIos(?float $starTaskBidIos): self
    {
        $this->starTaskBidIos = $starTaskBidIos;
        return $this;
    }

    /**
     * 任务预算（元），只能是10000-1000000元之间的整数
     * @return float
     */
    public function getStarTaskBudget(): ?float
    {
        return $this->starTaskBudget;
    }

    /**
     * 任务预算（元），只能是10000-1000000元之间的整数
     * @param float $starTaskBudget
     * @return self
     */
    public function setStarTaskBudget(?float $starTaskBudget): self
    {
        $this->starTaskBudget = $starTaskBudget;
        return $this;
    }

    /**
     * 任务创建时间，格式YYYY-MM-DD
     * @return string
     */
    public function getStarTaskCreateTime(): ?string
    {
        return $this->starTaskCreateTime;
    }

    /**
     * 任务创建时间，格式YYYY-MM-DD
     * @param string $starTaskCreateTime
     * @return self
     */
    public function setStarTaskCreateTime(?string $starTaskCreateTime): self
    {
        $this->starTaskCreateTime = $starTaskCreateTime;
        return $this;
    }

    /**
     * 服务商延长后的实际投稿截止时间
     * @return string
     */
    public function getStarTaskDelayedPostEndTime(): ?string
    {
        return $this->starTaskDelayedPostEndTime;
    }

    /**
     * 服务商延长后的实际投稿截止时间
     * @param string $starTaskDelayedPostEndTime
     * @return self
     */
    public function setStarTaskDelayedPostEndTime(?string $starTaskDelayedPostEndTime): self
    {
        $this->starTaskDelayedPostEndTime = $starTaskDelayedPostEndTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskExternalAction
     */
    public function getStarTaskExternalAction(): ?string
    {
        return $this->starTaskExternalAction;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskExternalAction $starTaskExternalAction
     * @return self
     */
    public function setStarTaskExternalAction(?string $starTaskExternalAction): self
    {
        $this->starTaskExternalAction = $starTaskExternalAction;
        return $this;
    }

    /**
     * 星广联投任务ID
     * @return int
     */
    public function getStarTaskId(): ?int
    {
        return $this->starTaskId;
    }

    /**
     * 星广联投任务ID
     * @param int $starTaskId
     * @return self
     */
    public function setStarTaskId(?int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
        return $this;
    }

    /**
     * 任务内介绍文案
     * @return string
     */
    public function getStarTaskIntroductionText(): ?string
    {
        return $this->starTaskIntroductionText;
    }

    /**
     * 任务内介绍文案
     * @param string $starTaskIntroductionText
     * @return self
     */
    public function setStarTaskIntroductionText(?string $starTaskIntroductionText): self
    {
        $this->starTaskIntroductionText = $starTaskIntroductionText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod
     */
    public function getStarTaskMaterialPurchaseMethod(): ?string
    {
        return $this->starTaskMaterialPurchaseMethod;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskMaterialPurchaseMethod $starTaskMaterialPurchaseMethod
     * @return self
     */
    public function setStarTaskMaterialPurchaseMethod(?string $starTaskMaterialPurchaseMethod): self
    {
        $this->starTaskMaterialPurchaseMethod = $starTaskMaterialPurchaseMethod;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskMaterialsRequirements
     */
    public function getStarTaskMaterialsRequirements(): ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskMaterialsRequirements
    {
        return $this->starTaskMaterialsRequirements;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskMaterialsRequirements $starTaskMaterialsRequirements
     * @return self
     */
    public function setStarTaskMaterialsRequirements(?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskMaterialsRequirements $starTaskMaterialsRequirements): self
    {
        $this->starTaskMaterialsRequirements = $starTaskMaterialsRequirements;
        return $this;
    }

    /**
     * 星广联投任务名称
     * @return string
     */
    public function getStarTaskName(): ?string
    {
        return $this->starTaskName;
    }

    /**
     * 星广联投任务名称
     * @param string $starTaskName
     * @return self
     */
    public function setStarTaskName(?string $starTaskName): self
    {
        $this->starTaskName = $starTaskName;
        return $this;
    }

    /**
     * 任务结束时间为投稿截止时间,格式YYYY-MM-DD
     * @return string
     */
    public function getStarTaskPostEndTime(): ?string
    {
        return $this->starTaskPostEndTime;
    }

    /**
     * 任务结束时间为投稿截止时间,格式YYYY-MM-DD
     * @param string $starTaskPostEndTime
     * @return self
     */
    public function setStarTaskPostEndTime(?string $starTaskPostEndTime): self
    {
        $this->starTaskPostEndTime = $starTaskPostEndTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskSource
     */
    public function getStarTaskSource(): ?string
    {
        return $this->starTaskSource;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskSource $starTaskSource
     * @return self
     */
    public function setStarTaskSource(?string $starTaskSource): self
    {
        $this->starTaskSource = $starTaskSource;
        return $this;
    }

    /**
     * 任务开始时间，格式YYYY-MM-DD
     * @return string
     */
    public function getStarTaskStartTime(): ?string
    {
        return $this->starTaskStartTime;
    }

    /**
     * 任务开始时间，格式YYYY-MM-DD
     * @param string $starTaskStartTime
     * @return self
     */
    public function setStarTaskStartTime(?string $starTaskStartTime): self
    {
        $this->starTaskStartTime = $starTaskStartTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskStatus
     */
    public function getStarTaskStatus(): ?string
    {
        return $this->starTaskStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskStatus $starTaskStatus
     * @return self
     */
    public function setStarTaskStatus(?string $starTaskStatus): self
    {
        $this->starTaskStatus = $starTaskStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskSubStatus
     */
    public function getStarTaskSubStatus(): ?string
    {
        return $this->starTaskSubStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30DataStarTaskSubStatus $starTaskSubStatus
     * @return self
     */
    public function setStarTaskSubStatus(?string $starTaskSubStatus): self
    {
        $this->starTaskSubStatus = $starTaskSubStatus;
        return $this;
    }

    /**
     * 任务标签
     * @return string
     */
    public function getStarTaskTags(): ?string
    {
        return $this->starTaskTags;
    }

    /**
     * 任务标签
     * @param string $starTaskTags
     * @return self
     */
    public function setStarTaskTags(?string $starTaskTags): self
    {
        $this->starTaskTags = $starTaskTags;
        return $this;
    }

    /**
     * 任务图标uri
     * @return string
     */
    public function getTaskAvatarId(): ?string
    {
        return $this->taskAvatarId;
    }

    /**
     * 任务图标uri
     * @param string $taskAvatarId
     * @return self
     */
    public function setTaskAvatarId(?string $taskAvatarId): self
    {
        $this->taskAvatarId = $taskAvatarId;
        return $this;
    }

    /**
     * 任务图标url
     * @return string
     */
    public function getTaskAvatarUrl(): ?string
    {
        return $this->taskAvatarUrl;
    }

    /**
     * 任务图标url
     * @param string $taskAvatarUrl
     * @return self
     */
    public function setTaskAvatarUrl(?string $taskAvatarUrl): self
    {
        $this->taskAvatarUrl = $taskAvatarUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataTaskContactInfo
     */
    public function getTaskContactInfo(): ?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataTaskContactInfo
    {
        return $this->taskContactInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataTaskContactInfo $taskContactInfo
     * @return self
     */
    public function setTaskContactInfo(?\Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataTaskContactInfo $taskContactInfo): self
    {
        $this->taskContactInfo = $taskContactInfo;
        return $this;
    }

    /**
     * 任务头图uri
     * @return string
     */
    public function getTaskHeadImageId(): ?string
    {
        return $this->taskHeadImageId;
    }

    /**
     * 任务头图uri
     * @param string $taskHeadImageId
     * @return self
     */
    public function setTaskHeadImageId(?string $taskHeadImageId): self
    {
        $this->taskHeadImageId = $taskHeadImageId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidAppPackageName !== null) {
            $result['android_app_package_name'] = $this->androidAppPackageName;
        }
        if ($this->androidDownloadUrl !== null) {
            $result['android_download_url'] = $this->androidDownloadUrl;
        }
        if ($this->androidExternalUrl !== null) {
            $result['android_external_url'] = $this->androidExternalUrl;
        }
        if ($this->audienceSettings !== null) {
            $result['audience_settings'] = $this->audienceSettings;
        }
        if ($this->authorSubmitFrequency !== null) {
            $result['author_submit_frequency'] = $this->authorSubmitFrequency;
        }
        if ($this->authorTaskName !== null) {
            $result['author_task_name'] = $this->authorTaskName;
        }
        if ($this->briefType !== null) {
            $result['brief_type'] = $this->briefType;
        }
        if ($this->firstIndustryId !== null) {
            $result['first_industry_id'] = $this->firstIndustryId;
        }
        if ($this->firstIndustryName !== null) {
            $result['first_industry_name'] = $this->firstIndustryName;
        }
        if ($this->iosAppPackageName !== null) {
            $result['ios_app_package_name'] = $this->iosAppPackageName;
        }
        if ($this->iosDownloadUrl !== null) {
            $result['ios_download_url'] = $this->iosDownloadUrl;
        }
        if ($this->iosExternalUrl !== null) {
            $result['ios_external_url'] = $this->iosExternalUrl;
        }
        if ($this->microAppId !== null) {
            $result['micro_app_id'] = $this->microAppId;
        }
        if ($this->microAppLink !== null) {
            $result['micro_app_link'] = $this->microAppLink;
        }
        if ($this->microAppName !== null) {
            $result['micro_app_name'] = $this->microAppName;
        }
        if ($this->microAppPath !== null) {
            $result['micro_app_path'] = $this->microAppPath;
        }
        if ($this->productAdditionalIntroduction !== null) {
            $result['product_additional_introduction'] = $this->productAdditionalIntroduction;
        }
        if ($this->productIntroduction !== null) {
            $result['product_introduction'] = $this->productIntroduction;
        }
        if ($this->productName !== null) {
            $result['product_name'] = $this->productName;
        }
        if ($this->secondIndustryId !== null) {
            $result['second_industry_id'] = $this->secondIndustryId;
        }
        if ($this->secondIndustryName !== null) {
            $result['second_industry_name'] = $this->secondIndustryName;
        }
        if ($this->starAccountName !== null) {
            $result['star_account_name'] = $this->starAccountName;
        }
        if ($this->starAdCostDivideRatio !== null) {
            $result['star_ad_cost_divide_ratio'] = $this->starAdCostDivideRatio;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        if ($this->starMaterialBid !== null) {
            $result['star_material_bid'] = $this->starMaterialBid;
        }
        if ($this->starMaterialBidRange !== null) {
            $result['star_material_bid_range'] = $this->starMaterialBidRange;
        }
        if ($this->starTaskAlbumMicroAppInfo !== null) {
            $result['star_task_album_micro_app_info'] = $this->starTaskAlbumMicroAppInfo;
        }
        if ($this->starTaskAnchorId !== null) {
            $result['star_task_anchor_id'] = $this->starTaskAnchorId;
        }
        if ($this->starTaskAnchorType !== null) {
            $result['star_task_anchor_type'] = $this->starTaskAnchorType;
        }
        if ($this->starTaskAssetInfo !== null) {
            $result['star_task_asset_info'] = $this->starTaskAssetInfo;
        }
        if ($this->starTaskBanReasonDetail !== null) {
            $result['star_task_ban_reason_detail'] = $this->starTaskBanReasonDetail;
        }
        if ($this->starTaskBid !== null) {
            $result['star_task_bid'] = $this->starTaskBid;
        }
        if ($this->starTaskBidAndroid !== null) {
            $result['star_task_bid_android'] = $this->starTaskBidAndroid;
        }
        if ($this->starTaskBidIos !== null) {
            $result['star_task_bid_ios'] = $this->starTaskBidIos;
        }
        if ($this->starTaskBudget !== null) {
            $result['star_task_budget'] = $this->starTaskBudget;
        }
        if ($this->starTaskCreateTime !== null) {
            $result['star_task_create_time'] = $this->starTaskCreateTime;
        }
        if ($this->starTaskDelayedPostEndTime !== null) {
            $result['star_task_delayed_post_end_time'] = $this->starTaskDelayedPostEndTime;
        }
        if ($this->starTaskExternalAction !== null) {
            $result['star_task_external_action'] = $this->starTaskExternalAction;
        }
        if ($this->starTaskId !== null) {
            $result['star_task_id'] = $this->starTaskId;
        }
        if ($this->starTaskIntroductionText !== null) {
            $result['star_task_introduction_text'] = $this->starTaskIntroductionText;
        }
        if ($this->starTaskMaterialPurchaseMethod !== null) {
            $result['star_task_material_purchase_method'] = $this->starTaskMaterialPurchaseMethod;
        }
        if ($this->starTaskMaterialsRequirements !== null) {
            $result['star_task_materials_requirements'] = $this->starTaskMaterialsRequirements;
        }
        if ($this->starTaskName !== null) {
            $result['star_task_name'] = $this->starTaskName;
        }
        if ($this->starTaskPostEndTime !== null) {
            $result['star_task_post_end_time'] = $this->starTaskPostEndTime;
        }
        if ($this->starTaskSource !== null) {
            $result['star_task_source'] = $this->starTaskSource;
        }
        if ($this->starTaskStartTime !== null) {
            $result['star_task_start_time'] = $this->starTaskStartTime;
        }
        if ($this->starTaskStatus !== null) {
            $result['star_task_status'] = $this->starTaskStatus;
        }
        if ($this->starTaskSubStatus !== null) {
            $result['star_task_sub_status'] = $this->starTaskSubStatus;
        }
        if ($this->starTaskTags !== null) {
            $result['star_task_tags'] = $this->starTaskTags;
        }
        if ($this->taskAvatarId !== null) {
            $result['task_avatar_id'] = $this->taskAvatarId;
        }
        if ($this->taskAvatarUrl !== null) {
            $result['task_avatar_url'] = $this->taskAvatarUrl;
        }
        if ($this->taskContactInfo !== null) {
            $result['task_contact_info'] = $this->taskContactInfo;
        }
        if ($this->taskHeadImageId !== null) {
            $result['task_head_image_id'] = $this->taskHeadImageId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_app_package_name'] ?? null) !== null) {
            $obj->androidAppPackageName = (string) $v;
        }
        if (($v = $data['android_download_url'] ?? null) !== null) {
            $obj->androidDownloadUrl = (string) $v;
        }
        if (($v = $data['android_external_url'] ?? null) !== null) {
            $obj->androidExternalUrl = (string) $v;
        }
        if (($v = $data['audience_settings'] ?? null) !== null && is_array($v)) {
            $obj->audienceSettings = \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataAudienceSettings::fromArray($v);
        }
        if (($v = $data['author_submit_frequency'] ?? null) !== null) {
            $obj->authorSubmitFrequency = (int) $v;
        }
        if (($v = $data['author_task_name'] ?? null) !== null) {
            $obj->authorTaskName = (string) $v;
        }
        if (($v = $data['brief_type'] ?? null) !== null) {
            $obj->briefType = (string) $v;
        }
        if (($v = $data['first_industry_id'] ?? null) !== null) {
            $obj->firstIndustryId = (int) $v;
        }
        if (($v = $data['first_industry_name'] ?? null) !== null) {
            $obj->firstIndustryName = (string) $v;
        }
        if (($v = $data['ios_app_package_name'] ?? null) !== null) {
            $obj->iosAppPackageName = (string) $v;
        }
        if (($v = $data['ios_download_url'] ?? null) !== null) {
            $obj->iosDownloadUrl = (string) $v;
        }
        if (($v = $data['ios_external_url'] ?? null) !== null) {
            $obj->iosExternalUrl = (string) $v;
        }
        if (($v = $data['micro_app_id'] ?? null) !== null) {
            $obj->microAppId = (string) $v;
        }
        if (($v = $data['micro_app_link'] ?? null) !== null) {
            $obj->microAppLink = (string) $v;
        }
        if (($v = $data['micro_app_name'] ?? null) !== null) {
            $obj->microAppName = (string) $v;
        }
        if (($v = $data['micro_app_path'] ?? null) !== null) {
            $obj->microAppPath = (string) $v;
        }
        if (($v = $data['product_additional_introduction'] ?? null) !== null && is_array($v)) {
            $obj->productAdditionalIntroduction = \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataProductAdditionalIntroduction::fromArray($v);
        }
        if (($v = $data['product_introduction'] ?? null) !== null) {
            $obj->productIntroduction = (string) $v;
        }
        if (($v = $data['product_name'] ?? null) !== null) {
            $obj->productName = (string) $v;
        }
        if (($v = $data['second_industry_id'] ?? null) !== null) {
            $obj->secondIndustryId = (int) $v;
        }
        if (($v = $data['second_industry_name'] ?? null) !== null) {
            $obj->secondIndustryName = (string) $v;
        }
        if (($v = $data['star_account_name'] ?? null) !== null) {
            $obj->starAccountName = (string) $v;
        }
        if (($v = $data['star_ad_cost_divide_ratio'] ?? null) !== null) {
            $obj->starAdCostDivideRatio = (float) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        if (($v = $data['star_material_bid'] ?? null) !== null) {
            $obj->starMaterialBid = (float) $v;
        }
        if (($v = $data['star_material_bid_range'] ?? null) !== null && is_array($v)) {
            $obj->starMaterialBidRange = $v;
        }
        if (($v = $data['star_task_album_micro_app_info'] ?? null) !== null && is_array($v)) {
            $obj->starTaskAlbumMicroAppInfo = \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAlbumMicroAppInfo::fromArray($v);
        }
        if (($v = $data['star_task_anchor_id'] ?? null) !== null) {
            $obj->starTaskAnchorId = (int) $v;
        }
        if (($v = $data['star_task_anchor_type'] ?? null) !== null) {
            $obj->starTaskAnchorType = (string) $v;
        }
        if (($v = $data['star_task_asset_info'] ?? null) !== null && is_array($v)) {
            $obj->starTaskAssetInfo = \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskAssetInfo::fromArray($v);
        }
        if (($v = $data['star_task_ban_reason_detail'] ?? null) !== null) {
            $obj->starTaskBanReasonDetail = (string) $v;
        }
        if (($v = $data['star_task_bid'] ?? null) !== null) {
            $obj->starTaskBid = (float) $v;
        }
        if (($v = $data['star_task_bid_android'] ?? null) !== null) {
            $obj->starTaskBidAndroid = (float) $v;
        }
        if (($v = $data['star_task_bid_ios'] ?? null) !== null) {
            $obj->starTaskBidIos = (float) $v;
        }
        if (($v = $data['star_task_budget'] ?? null) !== null) {
            $obj->starTaskBudget = (float) $v;
        }
        if (($v = $data['star_task_create_time'] ?? null) !== null) {
            $obj->starTaskCreateTime = (string) $v;
        }
        if (($v = $data['star_task_delayed_post_end_time'] ?? null) !== null) {
            $obj->starTaskDelayedPostEndTime = (string) $v;
        }
        if (($v = $data['star_task_external_action'] ?? null) !== null) {
            $obj->starTaskExternalAction = (string) $v;
        }
        if (($v = $data['star_task_id'] ?? null) !== null) {
            $obj->starTaskId = (int) $v;
        }
        if (($v = $data['star_task_introduction_text'] ?? null) !== null) {
            $obj->starTaskIntroductionText = (string) $v;
        }
        if (($v = $data['star_task_material_purchase_method'] ?? null) !== null) {
            $obj->starTaskMaterialPurchaseMethod = (string) $v;
        }
        if (($v = $data['star_task_materials_requirements'] ?? null) !== null && is_array($v)) {
            $obj->starTaskMaterialsRequirements = \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataStarTaskMaterialsRequirements::fromArray($v);
        }
        if (($v = $data['star_task_name'] ?? null) !== null) {
            $obj->starTaskName = (string) $v;
        }
        if (($v = $data['star_task_post_end_time'] ?? null) !== null) {
            $obj->starTaskPostEndTime = (string) $v;
        }
        if (($v = $data['star_task_source'] ?? null) !== null) {
            $obj->starTaskSource = (string) $v;
        }
        if (($v = $data['star_task_start_time'] ?? null) !== null) {
            $obj->starTaskStartTime = (string) $v;
        }
        if (($v = $data['star_task_status'] ?? null) !== null) {
            $obj->starTaskStatus = (string) $v;
        }
        if (($v = $data['star_task_sub_status'] ?? null) !== null) {
            $obj->starTaskSubStatus = (string) $v;
        }
        if (($v = $data['star_task_tags'] ?? null) !== null) {
            $obj->starTaskTags = (string) $v;
        }
        if (($v = $data['task_avatar_id'] ?? null) !== null) {
            $obj->taskAvatarId = (string) $v;
        }
        if (($v = $data['task_avatar_url'] ?? null) !== null) {
            $obj->taskAvatarUrl = (string) $v;
        }
        if (($v = $data['task_contact_info'] ?? null) !== null && is_array($v)) {
            $obj->taskContactInfo = \Oceanengine\Models\ToolsEbpStarTaskGetV30ResponseDataTaskContactInfo::fromArray($v);
        }
        if (($v = $data['task_head_image_id'] ?? null) !== null) {
            $obj->taskHeadImageId = (string) $v;
        }
        return $obj;
    }
}
