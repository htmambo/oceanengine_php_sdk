<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaEbpProductListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $age = null;

    /**
     * @var string
     */
    protected ?string $auditHitField = null;

    /**
     * @var string
     */
    protected ?string $auditReasonText = null;

    /**
     * @var int
     */
    protected ?int $auditStatus = null;

    /**
     * @var int
     */
    protected ?int $bought = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerBrandInfo
     */
    protected ?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerBrandInfo $brandInfo = null;

    /**
     * @var string[]
     */
    protected ?array $city = null;

    /**
     * @var int
     */
    protected ?int $comments = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string
     */
    protected ?string $feature = null;

    /**
     * @var string
     */
    protected ?string $firstCategory = null;

    /**
     * @var string
     */
    protected ?string $firstCategoryId = null;

    /**
     * @var int
     */
    protected ?int $hasVideo = null;

    /**
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerImageUrlsInner[]
     */
    protected ?array $imageUrls = null;

    /**
     * @var string[]
     */
    protected ?array $label = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerLandingInfo
     */
    protected ?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerLandingInfo $landingInfo = null;

    /**
     * @var float
     */
    protected ?float $mark = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $offlineTime = null;

    /**
     * @var int
     */
    protected ?int $onlineTime = null;

    /**
     * @var string
     */
    protected ?string $outerId = null;

    /**
     * @var int
     */
    protected ?int $platformId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerPriceInfo
     */
    protected ?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerPriceInfo $priceInfo = null;

    /**
     * @var int
     */
    protected ?int $productId = null;

    /**
     * @var array<string,string>
     */
    protected ?array $profession = null;

    /**
     * @var string[]
     */
    protected ?array $province = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerShopKeeperInfo
     */
    protected ?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerShopKeeperInfo $shopKeeperInfo = null;

    /**
     * @var string
     */
    protected ?string $spuId = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductListV30DataListSpuSource
     */
    protected ?string $spuSource = null;

    /**
     * @var int
     */
    protected ?int $status = null;

    /**
     * @var int
     */
    protected ?int $stock = null;

    /**
     * @var string
     */
    protected ?string $subCategory = null;

    /**
     * @var string
     */
    protected ?string $subCategoryId = null;

    /**
     * @var string[]
     */
    protected ?array $tags = null;

    /**
     * @var string
     */
    protected ?string $thirdCategory = null;

    /**
     * @var string
     */
    protected ?string $thirdCategoryId = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var string[]
     */
    protected ?array $titles = null;

    /**
     * @var string
     */
    protected ?string $video = null;

    /**
     * @var \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerVideosInner[]
     */
    protected ?array $videos = null;

    /**
     * @return int[]
     */
    public function getAge(): ?array
    {
        return $this->age;
    }

    /**
     * @param int[] $age
     * @return self
     */
    public function setAge(?array $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuditHitField(): ?string
    {
        return $this->auditHitField;
    }

    /**
     * @param string $auditHitField
     * @return self
     */
    public function setAuditHitField(?string $auditHitField): self
    {
        $this->auditHitField = $auditHitField;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuditReasonText(): ?string
    {
        return $this->auditReasonText;
    }

    /**
     * @param string $auditReasonText
     * @return self
     */
    public function setAuditReasonText(?string $auditReasonText): self
    {
        $this->auditReasonText = $auditReasonText;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuditStatus(): ?int
    {
        return $this->auditStatus;
    }

    /**
     * @param int $auditStatus
     * @return self
     */
    public function setAuditStatus(?int $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getBought(): ?int
    {
        return $this->bought;
    }

    /**
     * @param int $bought
     * @return self
     */
    public function setBought(?int $bought): self
    {
        $this->bought = $bought;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerBrandInfo $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * @param string[] $city
     * @return self
     */
    public function setCity(?array $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return int
     */
    public function getComments(): ?int
    {
        return $this->comments;
    }

    /**
     * @param int $comments
     * @return self
     */
    public function setComments(?int $comments): self
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
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
     * @return string
     */
    public function getFirstCategory(): ?string
    {
        return $this->firstCategory;
    }

    /**
     * @param string $firstCategory
     * @return self
     */
    public function setFirstCategory(?string $firstCategory): self
    {
        $this->firstCategory = $firstCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstCategoryId(): ?string
    {
        return $this->firstCategoryId;
    }

    /**
     * @param string $firstCategoryId
     * @return self
     */
    public function setFirstCategoryId(?string $firstCategoryId): self
    {
        $this->firstCategoryId = $firstCategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getHasVideo(): ?int
    {
        return $this->hasVideo;
    }

    /**
     * @param int $hasVideo
     * @return self
     */
    public function setHasVideo(?int $hasVideo): self
    {
        $this->hasVideo = $hasVideo;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerImageUrlsInner[]
     */
    public function getImageUrls(): ?array
    {
        return $this->imageUrls;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerImageUrlsInner[] $imageUrls
     * @return self
     */
    public function setImageUrls(?array $imageUrls): self
    {
        $this->imageUrls = $imageUrls;
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
     * @return \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerLandingInfo
     */
    public function getLandingInfo(): ?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerLandingInfo
    {
        return $this->landingInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerLandingInfo $landingInfo
     * @return self
     */
    public function setLandingInfo(?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerLandingInfo $landingInfo): self
    {
        $this->landingInfo = $landingInfo;
        return $this;
    }

    /**
     * @return float
     */
    public function getMark(): ?float
    {
        return $this->mark;
    }

    /**
     * @param float $mark
     * @return self
     */
    public function setMark(?float $mark): self
    {
        $this->mark = $mark;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getOfflineTime(): ?int
    {
        return $this->offlineTime;
    }

    /**
     * @param int $offlineTime
     * @return self
     */
    public function setOfflineTime(?int $offlineTime): self
    {
        $this->offlineTime = $offlineTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getOnlineTime(): ?int
    {
        return $this->onlineTime;
    }

    /**
     * @param int $onlineTime
     * @return self
     */
    public function setOnlineTime(?int $onlineTime): self
    {
        $this->onlineTime = $onlineTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getOuterId(): ?string
    {
        return $this->outerId;
    }

    /**
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
    public function getPlatformId(): ?int
    {
        return $this->platformId;
    }

    /**
     * @param int $platformId
     * @return self
     */
    public function setPlatformId(?int $platformId): self
    {
        $this->platformId = $platformId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerPriceInfo
     */
    public function getPriceInfo(): ?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerPriceInfo
    {
        return $this->priceInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerPriceInfo $priceInfo
     * @return self
     */
    public function setPriceInfo(?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerPriceInfo $priceInfo): self
    {
        $this->priceInfo = $priceInfo;
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
     * @return array<string,string>
     */
    public function getProfession(): ?array
    {
        return $this->profession;
    }

    /**
     * @param array<string,string> $profession
     * @return self
     */
    public function setProfession(?array $profession): self
    {
        $this->profession = $profession;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProvince(): ?array
    {
        return $this->province;
    }

    /**
     * @param string[] $province
     * @return self
     */
    public function setProvince(?array $province): self
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerShopKeeperInfo
     */
    public function getShopKeeperInfo(): ?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerShopKeeperInfo
    {
        return $this->shopKeeperInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerShopKeeperInfo $shopKeeperInfo
     * @return self
     */
    public function setShopKeeperInfo(?\Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerShopKeeperInfo $shopKeeperInfo): self
    {
        $this->shopKeeperInfo = $shopKeeperInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpuId(): ?string
    {
        return $this->spuId;
    }

    /**
     * @param string $spuId
     * @return self
     */
    public function setSpuId(?string $spuId): self
    {
        $this->spuId = $spuId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpProductListV30DataListSpuSource
     */
    public function getSpuSource(): ?string
    {
        return $this->spuSource;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductListV30DataListSpuSource $spuSource
     * @return self
     */
    public function setSpuSource(?string $spuSource): self
    {
        $this->spuSource = $spuSource;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     * @return self
     */
    public function setStock(?int $stock): self
    {
        $this->stock = $stock;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubCategory(): ?string
    {
        return $this->subCategory;
    }

    /**
     * @param string $subCategory
     * @return self
     */
    public function setSubCategory(?string $subCategory): self
    {
        $this->subCategory = $subCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubCategoryId(): ?string
    {
        return $this->subCategoryId;
    }

    /**
     * @param string $subCategoryId
     * @return self
     */
    public function setSubCategoryId(?string $subCategoryId): self
    {
        $this->subCategoryId = $subCategoryId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdCategory(): ?string
    {
        return $this->thirdCategory;
    }

    /**
     * @param string $thirdCategory
     * @return self
     */
    public function setThirdCategory(?string $thirdCategory): self
    {
        $this->thirdCategory = $thirdCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdCategoryId(): ?string
    {
        return $this->thirdCategoryId;
    }

    /**
     * @param string $thirdCategoryId
     * @return self
     */
    public function setThirdCategoryId(?string $thirdCategoryId): self
    {
        $this->thirdCategoryId = $thirdCategoryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTitles(): ?array
    {
        return $this->titles;
    }

    /**
     * @param string[] $titles
     * @return self
     */
    public function setTitles(?array $titles): self
    {
        $this->titles = $titles;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideo(): ?string
    {
        return $this->video;
    }

    /**
     * @param string $video
     * @return self
     */
    public function setVideo(?string $video): self
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerVideosInner[]
     */
    public function getVideos(): ?array
    {
        return $this->videos;
    }

    /**
     * @param \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerVideosInner[] $videos
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
        if ($this->auditHitField !== null) {
            $result['audit_hit_field'] = $this->auditHitField;
        }
        if ($this->auditReasonText !== null) {
            $result['audit_reason_text'] = $this->auditReasonText;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->bought !== null) {
            $result['bought'] = $this->bought;
        }
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->comments !== null) {
            $result['comments'] = $this->comments;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->feature !== null) {
            $result['feature'] = $this->feature;
        }
        if ($this->firstCategory !== null) {
            $result['first_category'] = $this->firstCategory;
        }
        if ($this->firstCategoryId !== null) {
            $result['first_category_id'] = $this->firstCategoryId;
        }
        if ($this->hasVideo !== null) {
            $result['has_video'] = $this->hasVideo;
        }
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
        }
        if ($this->imageUrls !== null) {
            $result['image_urls'] = $this->imageUrls;
        }
        if ($this->label !== null) {
            $result['label'] = $this->label;
        }
        if ($this->landingInfo !== null) {
            $result['landing_info'] = $this->landingInfo;
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
        if ($this->platformId !== null) {
            $result['platform_id'] = $this->platformId;
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
        if ($this->spuSource !== null) {
            $result['spu_source'] = $this->spuSource;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->stock !== null) {
            $result['stock'] = $this->stock;
        }
        if ($this->subCategory !== null) {
            $result['sub_category'] = $this->subCategory;
        }
        if ($this->subCategoryId !== null) {
            $result['sub_category_id'] = $this->subCategoryId;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->thirdCategory !== null) {
            $result['third_category'] = $this->thirdCategory;
        }
        if ($this->thirdCategoryId !== null) {
            $result['third_category_id'] = $this->thirdCategoryId;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->titles !== null) {
            $result['titles'] = $this->titles;
        }
        if ($this->video !== null) {
            $result['video'] = $this->video;
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
        if (($v = $data['audit_hit_field'] ?? null) !== null) {
            $obj->auditHitField = (string) $v;
        }
        if (($v = $data['audit_reason_text'] ?? null) !== null) {
            $obj->auditReasonText = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (int) $v;
        }
        if (($v = $data['bought'] ?? null) !== null) {
            $obj->bought = (int) $v;
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerBrandInfo::fromArray($v);
        }
        if (($v = $data['city'] ?? null) !== null && is_array($v)) {
            $obj->city = $v;
        }
        if (($v = $data['comments'] ?? null) !== null) {
            $obj->comments = (int) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['feature'] ?? null) !== null) {
            $obj->feature = (string) $v;
        }
        if (($v = $data['first_category'] ?? null) !== null) {
            $obj->firstCategory = (string) $v;
        }
        if (($v = $data['first_category_id'] ?? null) !== null) {
            $obj->firstCategoryId = (string) $v;
        }
        if (($v = $data['has_video'] ?? null) !== null) {
            $obj->hasVideo = (int) $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        if (($v = $data['image_urls'] ?? null) !== null && is_array($v)) {
            $obj->imageUrls = array_map(fn ($vv) => \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerImageUrlsInner::fromArray($vv), $v);
        }
        if (($v = $data['label'] ?? null) !== null && is_array($v)) {
            $obj->label = $v;
        }
        if (($v = $data['landing_info'] ?? null) !== null && is_array($v)) {
            $obj->landingInfo = \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerLandingInfo::fromArray($v);
        }
        if (($v = $data['mark'] ?? null) !== null) {
            $obj->mark = (float) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['offline_time'] ?? null) !== null) {
            $obj->offlineTime = (int) $v;
        }
        if (($v = $data['online_time'] ?? null) !== null) {
            $obj->onlineTime = (int) $v;
        }
        if (($v = $data['outer_id'] ?? null) !== null) {
            $obj->outerId = (string) $v;
        }
        if (($v = $data['platform_id'] ?? null) !== null) {
            $obj->platformId = (int) $v;
        }
        if (($v = $data['price_info'] ?? null) !== null && is_array($v)) {
            $obj->priceInfo = \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerPriceInfo::fromArray($v);
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
            $obj->shopKeeperInfo = \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerShopKeeperInfo::fromArray($v);
        }
        if (($v = $data['spu_id'] ?? null) !== null) {
            $obj->spuId = (string) $v;
        }
        if (($v = $data['spu_source'] ?? null) !== null) {
            $obj->spuSource = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['stock'] ?? null) !== null) {
            $obj->stock = (int) $v;
        }
        if (($v = $data['sub_category'] ?? null) !== null) {
            $obj->subCategory = (string) $v;
        }
        if (($v = $data['sub_category_id'] ?? null) !== null) {
            $obj->subCategoryId = (string) $v;
        }
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = $v;
        }
        if (($v = $data['third_category'] ?? null) !== null) {
            $obj->thirdCategory = (string) $v;
        }
        if (($v = $data['third_category_id'] ?? null) !== null) {
            $obj->thirdCategoryId = (string) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['titles'] ?? null) !== null && is_array($v)) {
            $obj->titles = $v;
        }
        if (($v = $data['video'] ?? null) !== null) {
            $obj->video = (string) $v;
        }
        if (($v = $data['videos'] ?? null) !== null && is_array($v)) {
            $obj->videos = array_map(fn ($vv) => \Oceanengine\Models\DpaEbpProductListV30ResponseDataListInnerVideosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
