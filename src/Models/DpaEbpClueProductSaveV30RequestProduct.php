<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpClueProductSaveV30RequestProduct implements \JsonSerializable
{
    /**
     * 定向年龄
     * @var int[]
     */
    protected ?array $age = null;

    /**
     * 购买量
     * @var int
     */
    protected ?int $bought = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductBrandInfo
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductBrandInfo $brandInfo = null;

    /**
     * @var int
     */
    protected ?int $categoryId = null;

    /**
     * 定向城市
     * @var string[]
     */
    protected ?array $city = null;

    /**
     * 评论数
     * @var int
     */
    protected ?int $comments = null;

    /**
     * 主体ID
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 商品描述信息
     * @var string
     */
    protected ?string $description = null;

    /**
     * 特点
     * @var string
     */
    protected ?string $feature = null;

    /**
     * 商品头图url
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * 商品组图
     * @var \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductImagesUrlInner[]
     */
    protected ?array $imagesUrl = null;

    /**
     * @var string[]
     */
    protected ?array $label = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductLandingUrl
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductLandingUrl $landingUrl = null;

    /**
     * 评分
     * @var float
     */
    protected ?float $mark = null;

    /**
     * 商品名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 下线时间，精确到秒
     * @var string
     */
    protected ?string $offlineTime = null;

    /**
     * 上线时间，精确到秒
     * @var string
     */
    protected ?string $onlineTime = null;

    /**
     * 自定义商品ID
     * @var string
     */
    protected ?string $outerId = null;

    /**
     * 商品poiID
     * @var string
     */
    protected ?string $poiId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductPriceInfo
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductPriceInfo $priceInfo = null;

    /**
     * 商品ID
     * @var int
     */
    protected ?int $productId = null;

    /**
     * 行业特定字段
     * @var array<string,string>
     */
    protected ?array $profession = null;

    /**
     * 定向省
     * @var string[]
     */
    protected ?array $province = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductShopKeeperInfo
     */
    protected ?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductShopKeeperInfo $shopKeeperInfo = null;

    /**
     * 商品spuID
     * @var string
     */
    protected ?string $spuId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpClueProductSaveV30ProductStatus
     */
    protected ?string $status = null;

    /**
     * 商品标签
     * @var string[]
     */
    protected ?array $tags = null;

    /**
     * 商品标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 商品视频链接
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 商品视频列表
     * @var \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductVideosInner[]
     */
    protected ?array $videos = null;

    /**
     * 定向年龄
     * @return int[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * 定向年龄
     * @param int[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * 购买量
     * @return int
     */
    public function getBought(): ?int
    {
        return $this->bought;
    }

    /**
     * 购买量
     * @param int $bought
     * @return self
     */
    public function setBought(?int $bought): self
    {
        $this->bought = $bought;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductBrandInfo $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
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
     * 定向城市
     * @return string[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * 定向城市
     * @param string[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * 评论数
     * @return int
     */
    public function getComments(): ?int
    {
        return $this->comments;
    }

    /**
     * 评论数
     * @param int $comments
     * @return self
     */
    public function setComments(?int $comments): self
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * 主体ID
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 主体ID
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * 商品描述信息
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * 商品描述信息
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 特点
     * @return string
     */
    public function getFeature(): ?string
    {
        return $this->feature;
    }

    /**
     * 特点
     * @param string $feature
     * @return self
     */
    public function setFeature(?string $feature): self
    {
        $this->feature = $feature;
        return $this;
    }

    /**
     * 商品头图url
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * 商品头图url
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * 商品组图
     * @return \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductImagesUrlInner[]
     */
    public function getImagesUrl(): ?array
    {
        return $this->imagesUrl;
    }

    /**
     * 商品组图
     * @param \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductImagesUrlInner[] $imagesUrl
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
     * @return \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductLandingUrl
     */
    public function getLandingUrl(): ?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductLandingUrl
    {
        return $this->landingUrl;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductLandingUrl $landingUrl
     * @return self
     */
    public function setLandingUrl(?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductLandingUrl $landingUrl): self
    {
        $this->landingUrl = $landingUrl;
        return $this;
    }

    /**
     * 评分
     * @return float
     */
    public function getMark(): ?float
    {
        return $this->mark;
    }

    /**
     * 评分
     * @param float $mark
     * @return self
     */
    public function setMark(?float $mark): self
    {
        $this->mark = $mark;
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
     * 下线时间，精确到秒
     * @return string
     */
    public function getOfflineTime(): ?string
    {
        return $this->offlineTime;
    }

    /**
     * 下线时间，精确到秒
     * @param string $offlineTime
     * @return self
     */
    public function setOfflineTime(?string $offlineTime): self
    {
        $this->offlineTime = $offlineTime;
        return $this;
    }

    /**
     * 上线时间，精确到秒
     * @return string
     */
    public function getOnlineTime(): ?string
    {
        return $this->onlineTime;
    }

    /**
     * 上线时间，精确到秒
     * @param string $onlineTime
     * @return self
     */
    public function setOnlineTime(?string $onlineTime): self
    {
        $this->onlineTime = $onlineTime;
        return $this;
    }

    /**
     * 自定义商品ID
     * @return string
     */
    public function getOuterId(): ?string
    {
        return $this->outerId;
    }

    /**
     * 自定义商品ID
     * @param string $outerId
     * @return self
     */
    public function setOuterId(?string $outerId): self
    {
        $this->outerId = $outerId;
        return $this;
    }

    /**
     * 商品poiID
     * @return string
     */
    public function getPoiId(): ?string
    {
        return $this->poiId;
    }

    /**
     * 商品poiID
     * @param string $poiId
     * @return self
     */
    public function setPoiId(?string $poiId): self
    {
        $this->poiId = $poiId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductPriceInfo
     */
    public function getPriceInfo(): ?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductPriceInfo
    {
        return $this->priceInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductPriceInfo $priceInfo
     * @return self
     */
    public function setPriceInfo(?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductPriceInfo $priceInfo): self
    {
        $this->priceInfo = $priceInfo;
        return $this;
    }

    /**
     * 商品ID
     * @return int
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * 商品ID
     * @param int $productId
     * @return self
     */
    public function setProductId(?int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * 行业特定字段
     * @return array<string,string>
     */
    public function getProfession(): ?array
    {
        return $this->profession;
    }

    /**
     * 行业特定字段
     * @param array<string,string> $profession
     * @return self
     */
    public function setProfession(?array $profession): self
    {
        $this->profession = $profession;
        return $this;
    }

    /**
     * 定向省
     * @return string[]
     */
    public function getProvince(): ?array
    {
        return $this->province;
    }

    /**
     * 定向省
     * @param string[] $province
     * @return self
     */
    public function setProvince(?array $province): self
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductShopKeeperInfo
     */
    public function getShopKeeperInfo(): ?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductShopKeeperInfo
    {
        return $this->shopKeeperInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductShopKeeperInfo $shopKeeperInfo
     * @return self
     */
    public function setShopKeeperInfo(?\Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductShopKeeperInfo $shopKeeperInfo): self
    {
        $this->shopKeeperInfo = $shopKeeperInfo;
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
     * @return \Oceanengine\Models\DpaEbpClueProductSaveV30ProductStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpClueProductSaveV30ProductStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
     * 商品标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 商品标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
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
     * @return \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductVideosInner[]
     */
    public function getVideos(): ?array
    {
        return $this->videos;
    }

    /**
     * 商品视频列表
     * @param \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductVideosInner[] $videos
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
        if ($this->age !== null) {
            $result['age'] = $this->age;
        }
        if ($this->bought !== null) {
            $result['bought'] = $this->bought;
        }
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->categoryId !== null) {
            $result['category_id'] = $this->categoryId;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->comments !== null) {
            $result['comments'] = $this->comments;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->feature !== null) {
            $result['feature'] = $this->feature;
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
        if ($this->landingUrl !== null) {
            $result['landing_url'] = $this->landingUrl;
        }
        if ($this->mark !== null) {
            $result['mark'] = $this->mark;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->offlineTime !== null) {
            $result['offline_time'] = $this->offlineTime;
        }
        if ($this->onlineTime !== null) {
            $result['online_time'] = $this->onlineTime;
        }
        if ($this->outerId !== null) {
            $result['outer_id'] = $this->outerId;
        }
        if ($this->poiId !== null) {
            $result['poi_id'] = $this->poiId;
        }
        if ($this->priceInfo !== null) {
            $result['price_info'] = $this->priceInfo;
        }
        if ($this->productId !== null) {
            $result['product_id'] = $this->productId;
        }
        if ($this->profession !== null) {
            $result['profession'] = $this->profession;
        }
        if ($this->province !== null) {
            $result['province'] = $this->province;
        }
        if ($this->shopKeeperInfo !== null) {
            $result['shop_keeper_info'] = $this->shopKeeperInfo;
        }
        if ($this->spuId !== null) {
            $result['spu_id'] = $this->spuId;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
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
        if (($v = $data['age'] ?? null) !== null && is_array($v)) {
            $obj->age = $v;
        }
        if (($v = $data['bought'] ?? null) !== null) {
            $obj->bought = (int) $v;
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductBrandInfo::fromArray($v);
        }
        if (($v = $data['category_id'] ?? null) !== null) {
            $obj->categoryId = (int) $v;
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['comments'] ?? null) !== null) {
            $obj->comments = (int) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['feature'] ?? null) !== null) {
            $obj->feature = (string) $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        if (($v = $data['images_url'] ?? null) !== null && is_array($v)) {
            $obj->imagesUrl = array_map(fn ($vv) => \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductImagesUrlInner::fromArray($vv), $v);
        }
        if (($v = $data['label'] ?? null) !== null && is_array($v)) {
            $obj->label = $v;
        }
        if (($v = $data['landing_url'] ?? null) !== null && is_array($v)) {
            $obj->landingUrl = \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductLandingUrl::fromArray($v);
        }
        if (($v = $data['mark'] ?? null) !== null) {
            $obj->mark = (float) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['offline_time'] ?? null) !== null) {
            $obj->offlineTime = (string) $v;
        }
        if (($v = $data['online_time'] ?? null) !== null) {
            $obj->onlineTime = (string) $v;
        }
        if (($v = $data['outer_id'] ?? null) !== null) {
            $obj->outerId = (string) $v;
        }
        if (($v = $data['poi_id'] ?? null) !== null) {
            $obj->poiId = (string) $v;
        }
        if (($v = $data['price_info'] ?? null) !== null && is_array($v)) {
            $obj->priceInfo = \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductPriceInfo::fromArray($v);
        }
        if (($v = $data['product_id'] ?? null) !== null) {
            $obj->productId = (int) $v;
        }
        if (($v = $data['profession'] ?? null) !== null && is_array($v)) {
            $obj->profession = $v;
        }
        if (($v = $data['province'] ?? null) !== null && is_array($v)) {
            $obj->province = $v;
        }
        if (($v = $data['shop_keeper_info'] ?? null) !== null && is_array($v)) {
            $obj->shopKeeperInfo = \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductShopKeeperInfo::fromArray($v);
        }
        if (($v = $data['spu_id'] ?? null) !== null) {
            $obj->spuId = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        if (($v = $data['videos'] ?? null) !== null && is_array($v)) {
            $obj->videos = array_map(fn ($vv) => \Oceanengine\Models\DpaEbpClueProductSaveV30RequestProductVideosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
