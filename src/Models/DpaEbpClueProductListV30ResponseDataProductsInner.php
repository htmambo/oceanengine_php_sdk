<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductListV30ResponseDataProductsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var int
     */
    protected ?int $accountType = null;

    /**
     * 审核状态
     * @var int
     */
    protected ?int $auditStatus = null;

    /**
     * @var string
     */
    protected ?string $brandId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfo
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfo $brandInfo = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerCategory
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerCategory $category = null;

    /**
     * @var int
     */
    protected ?int $categoryId = null;

    /**
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 商品字段填充状态
     * @var int
     */
    protected ?int $completionStatus = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerDelivery
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerDelivery $delivery = null;

    /**
     * 商品描述
     * @var string
     */
    protected ?string $description = null;

    /**
     * for ad创编关联 pId+dpaId+ppId
     * @var int
     */
    protected ?int $dpaId = null;

    /**
     * @var string
     */
    protected ?string $ext = null;

    /**
     * @var string
     */
    protected ?string $feature = null;

    /**
     * 是否存在视频,视频过期策略与商品相同
     * @var int
     */
    protected ?int $hasVideo = null;

    /**
     * EBP资产历史所属账户ID
     * @var int
     */
    protected ?int $historyAccountId = null;

    /**
     * EBP资产历史所属账户类型
     * @var int
     */
    protected ?int $historyAccountType = null;

    /**
     * 各个字段用户选择的热词
     * @var array<string,string[]>
     */
    protected ?array $hotWord = null;

    /**
     * 主图,用于首张/封面展示
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * 商品扩展图
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerImagesUrlInner[]
     */
    protected ?array $imagesUrl = null;

    /**
     * @var string[]
     */
    protected ?array $label = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerLandingInfo
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerLandingInfo $landingInfo = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 下线时间;单位秒
     * @var int
     */
    protected ?int $offlineTime = null;

    /**
     * 线上投放状态
     * @var int
     */
    protected ?int $onlineStatus = null;

    /**
     * 上线时间;单位秒
     * @var int
     */
    protected ?int $onlineTime = null;

    /**
     * 广告主定义的产品ID
     * @var string
     */
    protected ?string $outerId = null;

    /**
     * @var int
     */
    protected ?int $platformProductId = null;

    /**
     * poiID
     * @var string
     */
    protected ?string $poiId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerPriceInfo
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerPriceInfo $priceInfo = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerProductHisEval
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerProductHisEval $productHisEval = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 行业个性信息,json参见文档
     * @var array<string,string>
     */
    protected ?array $profession = null;

    /**
     * 原因
     * @var string
     */
    protected ?string $reason = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfo
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfo $shopKeeperInfo = null;

    /**
     * EBP资产写入来源账户ID
     * @var int
     */
    protected ?int $sourceAccountId = null;

    /**
     * EBP资产写入来源账户类型
     * @var int
     */
    protected ?int $sourceAccountType = null;

    /**
     * 商品spuID
     * @var string
     */
    protected ?string $spuId = null;

    /**
     * 投放状态
     * @var int
     */
    protected ?int $status = null;

    /**
     * 库存状态
     * @var int
     */
    protected ?int $stock = null;

    /**
     * 商品标签
     * @var string[]
     */
    protected ?array $tags = null;

    /**
     * 商品标题,可包含促销等
     * @var string
     */
    protected ?string $title = null;

    /**
     * 商品类型，0:旧商品，1:新商品
     * @var int
     */
    protected ?int $type = null;

    /**
     * 版本号
     * @var int
     */
    protected ?int $version = null;

    /**
     * 商品视频链接
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 商品视频列表
     * @var \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerVideosInner[]
     */
    protected ?array $videos = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }

    /**
     * @param int $accountType
     * @return self
     */
    public function setAccountType(?int $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 审核状态
     * @return int
     */
    public function getAuditStatus(): ?int
    {
        return $this->auditStatus;
    }

    /**
     * 审核状态
     * @param int $auditStatus
     * @return self
     */
    public function setAuditStatus(?int $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrandId(): ?string
    {
        return $this->brandId;
    }

    /**
     * @param string $brandId
     * @return self
     */
    public function setBrandId(?string $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfo $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerCategory
     */
    public function getCategory(): ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerCategory
    {
        return $this->category;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerCategory $category
     * @return self
     */
    public function setCategory(?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerCategory $category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return self
     */
    public function setCategoryId(?int $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * 商品字段填充状态
     * @return int
     */
    public function getCompletionStatus(): ?int
    {
        return $this->completionStatus;
    }

    /**
     * 商品字段填充状态
     * @param int $completionStatus
     * @return self
     */
    public function setCompletionStatus(?int $completionStatus): self
    {
        $this->completionStatus = $completionStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerDelivery
     */
    public function getDelivery(): ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerDelivery
    {
        return $this->delivery;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerDelivery $delivery
     * @return self
     */
    public function setDelivery(?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerDelivery $delivery): self
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * 商品描述
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 商品描述
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * for ad创编关联 pId+dpaId+ppId
     * @return int
     */
    public function getDpaId(): ?int
    {
        return $this->dpaId;
    }

    /**
     * for ad创编关联 pId+dpaId+ppId
     * @param int $dpaId
     * @return self
     */
    public function setDpaId(?int $dpaId): self
    {
        $this->dpaId = $dpaId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExt(): ?string
    {
        return $this->ext;
    }

    /**
     * @param string $ext
     * @return self
     */
    public function setExt(?string $ext): self
    {
        $this->ext = $ext;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeature(): ?string
    {
        return $this->feature;
    }

    /**
     * @param string $feature
     * @return self
     */
    public function setFeature(?string $feature): self
    {
        $this->feature = $feature;
        return $this;
    }

    /**
     * 是否存在视频,视频过期策略与商品相同
     * @return int
     */
    public function getHasVideo(): ?int
    {
        return $this->hasVideo;
    }

    /**
     * 是否存在视频,视频过期策略与商品相同
     * @param int $hasVideo
     * @return self
     */
    public function setHasVideo(?int $hasVideo): self
    {
        $this->hasVideo = $hasVideo;
        return $this;
    }

    /**
     * EBP资产历史所属账户ID
     * @return int
     */
    public function getHistoryAccountId(): ?int
    {
        return $this->historyAccountId;
    }

    /**
     * EBP资产历史所属账户ID
     * @param int $historyAccountId
     * @return self
     */
    public function setHistoryAccountId(?int $historyAccountId): self
    {
        $this->historyAccountId = $historyAccountId;
        return $this;
    }

    /**
     * EBP资产历史所属账户类型
     * @return int
     */
    public function getHistoryAccountType(): ?int
    {
        return $this->historyAccountType;
    }

    /**
     * EBP资产历史所属账户类型
     * @param int $historyAccountType
     * @return self
     */
    public function setHistoryAccountType(?int $historyAccountType): self
    {
        $this->historyAccountType = $historyAccountType;
        return $this;
    }

    /**
     * 各个字段用户选择的热词
     * @return array<string,string[]>
     */
    public function getHotWord(): ?array
    {
        return $this->hotWord;
    }

    /**
     * 各个字段用户选择的热词
     * @param array<string,string[]> $hotWord
     * @return self
     */
    public function setHotWord(?array $hotWord): self
    {
        $this->hotWord = $hotWord;
        return $this;
    }

    /**
     * 主图,用于首张/封面展示
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * 主图,用于首张/封面展示
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * 商品扩展图
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerImagesUrlInner[]
     */
    public function getImagesUrl(): ?array
    {
        return $this->imagesUrl;
    }

    /**
     * 商品扩展图
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerImagesUrlInner[] $imagesUrl
     * @return self
     */
    public function setImagesUrl(?array $imagesUrl): self
    {
        $this->imagesUrl = $imagesUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabel(): ?array
    {
        return $this->label;
    }

    /**
     * @param string[] $label
     * @return self
     */
    public function setLabel(?array $label): self
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerLandingInfo
     */
    public function getLandingInfo(): ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerLandingInfo
    {
        return $this->landingInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerLandingInfo $landingInfo
     * @return self
     */
    public function setLandingInfo(?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerLandingInfo $landingInfo): self
    {
        $this->landingInfo = $landingInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * 商品名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 商品名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 下线时间;单位秒
     * @return int
     */
    public function getOfflineTime(): ?int
    {
        return $this->offlineTime;
    }

    /**
     * 下线时间;单位秒
     * @param int $offlineTime
     * @return self
     */
    public function setOfflineTime(?int $offlineTime): self
    {
        $this->offlineTime = $offlineTime;
        return $this;
    }

    /**
     * 线上投放状态
     * @return int
     */
    public function getOnlineStatus(): ?int
    {
        return $this->onlineStatus;
    }

    /**
     * 线上投放状态
     * @param int $onlineStatus
     * @return self
     */
    public function setOnlineStatus(?int $onlineStatus): self
    {
        $this->onlineStatus = $onlineStatus;
        return $this;
    }

    /**
     * 上线时间;单位秒
     * @return int
     */
    public function getOnlineTime(): ?int
    {
        return $this->onlineTime;
    }

    /**
     * 上线时间;单位秒
     * @param int $onlineTime
     * @return self
     */
    public function setOnlineTime(?int $onlineTime): self
    {
        $this->onlineTime = $onlineTime;
        return $this;
    }

    /**
     * 广告主定义的产品ID
     * @return string
     */
    public function getOuterId(): ?string
    {
        return $this->outerId;
    }

    /**
     * 广告主定义的产品ID
     * @param string $outerId
     * @return self
     */
    public function setOuterId(?string $outerId): self
    {
        $this->outerId = $outerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlatformProductId(): ?int
    {
        return $this->platformProductId;
    }

    /**
     * @param int $platformProductId
     * @return self
     */
    public function setPlatformProductId(?int $platformProductId): self
    {
        $this->platformProductId = $platformProductId;
        return $this;
    }

    /**
     * poiID
     * @return string
     */
    public function getPoiId(): ?string
    {
        return $this->poiId;
    }

    /**
     * poiID
     * @param string $poiId
     * @return self
     */
    public function setPoiId(?string $poiId): self
    {
        $this->poiId = $poiId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerPriceInfo
     */
    public function getPriceInfo(): ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerPriceInfo
    {
        return $this->priceInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerPriceInfo $priceInfo
     * @return self
     */
    public function setPriceInfo(?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerPriceInfo $priceInfo): self
    {
        $this->priceInfo = $priceInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerProductHisEval
     */
    public function getProductHisEval(): ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerProductHisEval
    {
        return $this->productHisEval;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerProductHisEval $productHisEval
     * @return self
     */
    public function setProductHisEval(?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerProductHisEval $productHisEval): self
    {
        $this->productHisEval = $productHisEval;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 行业个性信息,json参见文档
     * @return array<string,string>
     */
    public function getProfession(): ?array
    {
        return $this->profession;
    }

    /**
     * 行业个性信息,json参见文档
     * @param array<string,string> $profession
     * @return self
     */
    public function setProfession(?array $profession): self
    {
        $this->profession = $profession;
        return $this;
    }

    /**
     * 原因
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * 原因
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfo
     */
    public function getShopKeeperInfo(): ?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfo
    {
        return $this->shopKeeperInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfo $shopKeeperInfo
     * @return self
     */
    public function setShopKeeperInfo(?\Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfo $shopKeeperInfo): self
    {
        $this->shopKeeperInfo = $shopKeeperInfo;
        return $this;
    }

    /**
     * EBP资产写入来源账户ID
     * @return int
     */
    public function getSourceAccountId(): ?int
    {
        return $this->sourceAccountId;
    }

    /**
     * EBP资产写入来源账户ID
     * @param int $sourceAccountId
     * @return self
     */
    public function setSourceAccountId(?int $sourceAccountId): self
    {
        $this->sourceAccountId = $sourceAccountId;
        return $this;
    }

    /**
     * EBP资产写入来源账户类型
     * @return int
     */
    public function getSourceAccountType(): ?int
    {
        return $this->sourceAccountType;
    }

    /**
     * EBP资产写入来源账户类型
     * @param int $sourceAccountType
     * @return self
     */
    public function setSourceAccountType(?int $sourceAccountType): self
    {
        $this->sourceAccountType = $sourceAccountType;
        return $this;
    }

    /**
     * 商品spuID
     * @return string
     */
    public function getSpuId(): ?string
    {
        return $this->spuId;
    }

    /**
     * 商品spuID
     * @param string $spuId
     * @return self
     */
    public function setSpuId(?string $spuId): self
    {
        $this->spuId = $spuId;
        return $this;
    }

    /**
     * 投放状态
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 投放状态
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 库存状态
     * @return int
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * 库存状态
     * @param int $stock
     * @return self
     */
    public function setStock(?int $stock): self
    {
        $this->stock = $stock;
        return $this;
    }

    /**
     * 商品标签
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * 商品标签
     * @param string[] $tags
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * 商品标题,可包含促销等
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 商品标题,可包含促销等
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 商品类型，0:旧商品，1:新商品
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * 商品类型，0:旧商品，1:新商品
     * @param int $type
     * @return self
     */
    public function setType(?int $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * 版本号
     * @return int
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * 版本号
     * @param int $version
     * @return self
     */
    public function setVersion(?int $version): self
    {
        $this->version = $version;
        return $this;
    }

    /**
     * 商品视频链接
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 商品视频链接
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * 商品视频列表
     * @return \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerVideosInner[]
     */
    public function getVideos(): ?array
    {
        return $this->videos;
    }

    /**
     * 商品视频列表
     * @param \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerVideosInner[] $videos
     * @return self
     */
    public function setVideos(?array $videos): self
    {
        $this->videos = $videos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->brandId !== null) {
            $result['brand_id'] = $this->brandId;
        }
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->category !== null) {
            $result['category'] = $this->category;
        }
        if ($this->categoryId !== null) {
            $result['category_id'] = $this->categoryId;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->completionStatus !== null) {
            $result['completion_status'] = $this->completionStatus;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->delivery !== null) {
            $result['delivery'] = $this->delivery;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->dpaId !== null) {
            $result['dpa_id'] = $this->dpaId;
        }
        if ($this->ext !== null) {
            $result['ext'] = $this->ext;
        }
        if ($this->feature !== null) {
            $result['feature'] = $this->feature;
        }
        if ($this->hasVideo !== null) {
            $result['has_video'] = $this->hasVideo;
        }
        if ($this->historyAccountId !== null) {
            $result['history_account_id'] = $this->historyAccountId;
        }
        if ($this->historyAccountType !== null) {
            $result['history_account_type'] = $this->historyAccountType;
        }
        if ($this->hotWord !== null) {
            $result['hot_word'] = $this->hotWord;
        }
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
        }
        if ($this->imagesUrl !== null) {
            $result['images_url'] = $this->imagesUrl;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->landingInfo !== null) {
            $result['landing_info'] = $this->landingInfo;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->offlineTime !== null) {
            $result['offline_time'] = $this->offlineTime;
        }
        if ($this->onlineStatus !== null) {
            $result['online_status'] = $this->onlineStatus;
        }
        if ($this->onlineTime !== null) {
            $result['online_time'] = $this->onlineTime;
        }
        if ($this->outerId !== null) {
            $result['outer_id'] = $this->outerId;
        }
        if ($this->platformProductId !== null) {
            $result['platform_product_id'] = $this->platformProductId;
        }
        if ($this->poiId !== null) {
            $result['poi_id'] = $this->poiId;
        }
        if ($this->priceInfo !== null) {
            $result['price_info'] = $this->priceInfo;
        }
        if ($this->productHisEval !== null) {
            $result['product_his_eval'] = $this->productHisEval;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->profession !== null) {
            $result['profession'] = $this->profession;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->shopKeeperInfo !== null) {
            $result['shop_keeper_info'] = $this->shopKeeperInfo;
        }
        if ($this->sourceAccountId !== null) {
            $result['source_account_id'] = $this->sourceAccountId;
        }
        if ($this->sourceAccountType !== null) {
            $result['source_account_type'] = $this->sourceAccountType;
        }
        if ($this->spuId !== null) {
            $result['spu_id'] = $this->spuId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->stock !== null) {
            $result['stock'] = $this->stock;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        if ($this->videos !== null) {
            $result['videos'] = $this->videos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (int) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (int) $v;
        }
        if (($v = $data['brand_id'] ?? null) !== null) {
            $obj->brandId = (string) $v;
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerBrandInfo::fromArray($v);
        }
        if (($v = $data['category'] ?? null) !== null && is_array($v)) {
            $obj->category = \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerCategory::fromArray($v);
        }
        if (($v = $data['category_id'] ?? null) !== null) {
            $obj->categoryId = (int) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['completion_status'] ?? null) !== null) {
            $obj->completionStatus = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['delivery'] ?? null) !== null && is_array($v)) {
            $obj->delivery = \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerDelivery::fromArray($v);
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['dpa_id'] ?? null) !== null) {
            $obj->dpaId = (int) $v;
        }
        if (($v = $data['ext'] ?? null) !== null) {
            $obj->ext = (string) $v;
        }
        if (($v = $data['feature'] ?? null) !== null) {
            $obj->feature = (string) $v;
        }
        if (($v = $data['has_video'] ?? null) !== null) {
            $obj->hasVideo = (int) $v;
        }
        if (($v = $data['history_account_id'] ?? null) !== null) {
            $obj->historyAccountId = (int) $v;
        }
        if (($v = $data['history_account_type'] ?? null) !== null) {
            $obj->historyAccountType = (int) $v;
        }
        if (($v = $data['hot_word'] ?? null) !== null && is_array($v)) {
            $obj->hotWord = $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        if (($v = $data['images_url'] ?? null) !== null && is_array($v)) {
            $obj->imagesUrl = array_map(fn ($vv) => \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerImagesUrlInner::fromArray($vv), $v);
        }
        if (($v = $data['label'] ?? null) !== null && is_array($v)) {
            $obj->label = $v;
        }
        if (($v = $data['landing_info'] ?? null) !== null && is_array($v)) {
            $obj->landingInfo = \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerLandingInfo::fromArray($v);
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['offline_time'] ?? null) !== null) {
            $obj->offlineTime = (int) $v;
        }
        if (($v = $data['online_status'] ?? null) !== null) {
            $obj->onlineStatus = (int) $v;
        }
        if (($v = $data['online_time'] ?? null) !== null) {
            $obj->onlineTime = (int) $v;
        }
        if (($v = $data['outer_id'] ?? null) !== null) {
            $obj->outerId = (string) $v;
        }
        if (($v = $data['platform_product_id'] ?? null) !== null) {
            $obj->platformProductId = (int) $v;
        }
        if (($v = $data['poi_id'] ?? null) !== null) {
            $obj->poiId = (string) $v;
        }
        if (($v = $data['price_info'] ?? null) !== null && is_array($v)) {
            $obj->priceInfo = \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerPriceInfo::fromArray($v);
        }
        if (($v = $data['product_his_eval'] ?? null) !== null && is_array($v)) {
            $obj->productHisEval = \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerProductHisEval::fromArray($v);
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['profession'] ?? null) !== null && is_array($v)) {
            $obj->profession = $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['shop_keeper_info'] ?? null) !== null && is_array($v)) {
            $obj->shopKeeperInfo = \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerShopKeeperInfo::fromArray($v);
        }
        if (($v = $data['source_account_id'] ?? null) !== null) {
            $obj->sourceAccountId = (int) $v;
        }
        if (($v = $data['source_account_type'] ?? null) !== null) {
            $obj->sourceAccountType = (int) $v;
        }
        if (($v = $data['spu_id'] ?? null) !== null) {
            $obj->spuId = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['stock'] ?? null) !== null) {
            $obj->stock = (int) $v;
        }
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (int) $v;
        }
        if (($v = $data['version'] ?? null) !== null) {
            $obj->version = (int) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        if (($v = $data['videos'] ?? null) !== null && is_array($v)) {
            $obj->videos = array_map(fn ($vv) => \Oceanengine\Models\DpaEbpClueProductListV30ResponseDataProductsInnerVideosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
