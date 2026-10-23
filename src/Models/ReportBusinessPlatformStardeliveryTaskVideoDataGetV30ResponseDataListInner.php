<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 应用内付费金额区间（元），T+实时
     * @var int[]
     */
    protected ?array $inAppPaymentAmountRangeT1 = null;

    /**
     * 应用内广告消耗区间（元），T+实时
     * @var int[]
     */
    protected ?array $inAppStatCostRangeT1 = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 任务下视频素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 广告总播放量，实时数据
     * @var int
     */
    protected ?int $starMaterialAdsViews = null;

    /**
     * 点击量
     * @var int
     */
    protected ?int $starMaterialClickCount = null;

    /**
     * 转化量
     * @var int
     */
    protected ?int $starMaterialConvertCount = null;

    /**
     * 自然总播放量，实时数据
     * @var int
     */
    protected ?int $starMaterialOrganicViews = null;

    /**
     * 任务推广剧目ID
     * @var int
     */
    protected ?int $starTaskAlbumId = null;

    /**
     * 任务推广剧目名称
     * @var string
     */
    protected ?string $starTaskAlbumName = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $starTaskId = null;

    /**
     * 任务名称
     * @var string
     */
    protected ?string $starTaskName = null;

    /**
     * 视频关联项目数，仅支持查询14天范围的数据，否则返回0
     * @var int
     */
    protected ?int $starVideoRelateProjectCount = null;

    /**
     * 视频关联广告数，仅支持查询14天范围的数据，否则返回0
     * @var int
     */
    protected ?int $starVideoRelatePromotionCount = null;

    /**
     * 视频关联广告消耗（元）
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * 视频封面图片url
     * @var string
     */
    protected ?string $videoCoverUrl = null;

    /**
     * 达人投稿视频预览url 达人设私、删除的视频不会返回url
     * @var string
     */
    protected ?string $videoPlayLink = null;

    /**
     * 应用内付费金额区间（元），T+实时
     * @return int[]
     */
    public function getInAppPaymentAmountRangeT1(): ?array
    {
        return $this->inAppPaymentAmountRangeT1;
    }

    /**
     * 应用内付费金额区间（元），T+实时
     * @param int[] $inAppPaymentAmountRangeT1
     * @return self
     */
    public function setInAppPaymentAmountRangeT1(?array $inAppPaymentAmountRangeT1): self
    {
        $this->inAppPaymentAmountRangeT1 = $inAppPaymentAmountRangeT1;
        return $this;
    }

    /**
     * 应用内广告消耗区间（元），T+实时
     * @return int[]
     */
    public function getInAppStatCostRangeT1(): ?array
    {
        return $this->inAppStatCostRangeT1;
    }

    /**
     * 应用内广告消耗区间（元），T+实时
     * @param int[] $inAppStatCostRangeT1
     * @return self
     */
    public function setInAppStatCostRangeT1(?array $inAppStatCostRangeT1): self
    {
        $this->inAppStatCostRangeT1 = $inAppStatCostRangeT1;
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
     * 任务下视频素材id
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 任务下视频素材id
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 广告总播放量，实时数据
     * @return int
     */
    public function getStarMaterialAdsViews(): ?int
    {
        return $this->starMaterialAdsViews;
    }

    /**
     * 广告总播放量，实时数据
     * @param int $starMaterialAdsViews
     * @return self
     */
    public function setStarMaterialAdsViews(?int $starMaterialAdsViews): self
    {
        $this->starMaterialAdsViews = $starMaterialAdsViews;
        return $this;
    }

    /**
     * 点击量
     * @return int
     */
    public function getStarMaterialClickCount(): ?int
    {
        return $this->starMaterialClickCount;
    }

    /**
     * 点击量
     * @param int $starMaterialClickCount
     * @return self
     */
    public function setStarMaterialClickCount(?int $starMaterialClickCount): self
    {
        $this->starMaterialClickCount = $starMaterialClickCount;
        return $this;
    }

    /**
     * 转化量
     * @return int
     */
    public function getStarMaterialConvertCount(): ?int
    {
        return $this->starMaterialConvertCount;
    }

    /**
     * 转化量
     * @param int $starMaterialConvertCount
     * @return self
     */
    public function setStarMaterialConvertCount(?int $starMaterialConvertCount): self
    {
        $this->starMaterialConvertCount = $starMaterialConvertCount;
        return $this;
    }

    /**
     * 自然总播放量，实时数据
     * @return int
     */
    public function getStarMaterialOrganicViews(): ?int
    {
        return $this->starMaterialOrganicViews;
    }

    /**
     * 自然总播放量，实时数据
     * @param int $starMaterialOrganicViews
     * @return self
     */
    public function setStarMaterialOrganicViews(?int $starMaterialOrganicViews): self
    {
        $this->starMaterialOrganicViews = $starMaterialOrganicViews;
        return $this;
    }

    /**
     * 任务推广剧目ID
     * @return int
     */
    public function getStarTaskAlbumId(): ?int
    {
        return $this->starTaskAlbumId;
    }

    /**
     * 任务推广剧目ID
     * @param int $starTaskAlbumId
     * @return self
     */
    public function setStarTaskAlbumId(?int $starTaskAlbumId): self
    {
        $this->starTaskAlbumId = $starTaskAlbumId;
        return $this;
    }

    /**
     * 任务推广剧目名称
     * @return string
     */
    public function getStarTaskAlbumName(): ?string
    {
        return $this->starTaskAlbumName;
    }

    /**
     * 任务推广剧目名称
     * @param string $starTaskAlbumName
     * @return self
     */
    public function setStarTaskAlbumName(?string $starTaskAlbumName): self
    {
        $this->starTaskAlbumName = $starTaskAlbumName;
        return $this;
    }

    /**
     * 任务ID
     * @return int
     */
    public function getStarTaskId(): ?int
    {
        return $this->starTaskId;
    }

    /**
     * 任务ID
     * @param int $starTaskId
     * @return self
     */
    public function setStarTaskId(?int $starTaskId): self
    {
        $this->starTaskId = $starTaskId;
        return $this;
    }

    /**
     * 任务名称
     * @return string
     */
    public function getStarTaskName(): ?string
    {
        return $this->starTaskName;
    }

    /**
     * 任务名称
     * @param string $starTaskName
     * @return self
     */
    public function setStarTaskName(?string $starTaskName): self
    {
        $this->starTaskName = $starTaskName;
        return $this;
    }

    /**
     * 视频关联项目数，仅支持查询14天范围的数据，否则返回0
     * @return int
     */
    public function getStarVideoRelateProjectCount(): ?int
    {
        return $this->starVideoRelateProjectCount;
    }

    /**
     * 视频关联项目数，仅支持查询14天范围的数据，否则返回0
     * @param int $starVideoRelateProjectCount
     * @return self
     */
    public function setStarVideoRelateProjectCount(?int $starVideoRelateProjectCount): self
    {
        $this->starVideoRelateProjectCount = $starVideoRelateProjectCount;
        return $this;
    }

    /**
     * 视频关联广告数，仅支持查询14天范围的数据，否则返回0
     * @return int
     */
    public function getStarVideoRelatePromotionCount(): ?int
    {
        return $this->starVideoRelatePromotionCount;
    }

    /**
     * 视频关联广告数，仅支持查询14天范围的数据，否则返回0
     * @param int $starVideoRelatePromotionCount
     * @return self
     */
    public function setStarVideoRelatePromotionCount(?int $starVideoRelatePromotionCount): self
    {
        $this->starVideoRelatePromotionCount = $starVideoRelatePromotionCount;
        return $this;
    }

    /**
     * 视频关联广告消耗（元）
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * 视频关联广告消耗（元）
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * 视频封面图片url
     * @return string
     */
    public function getVideoCoverUrl(): ?string
    {
        return $this->videoCoverUrl;
    }

    /**
     * 视频封面图片url
     * @param string $videoCoverUrl
     * @return self
     */
    public function setVideoCoverUrl(?string $videoCoverUrl): self
    {
        $this->videoCoverUrl = $videoCoverUrl;
        return $this;
    }

    /**
     * 达人投稿视频预览url 达人设私、删除的视频不会返回url
     * @return string
     */
    public function getVideoPlayLink(): ?string
    {
        return $this->videoPlayLink;
    }

    /**
     * 达人投稿视频预览url 达人设私、删除的视频不会返回url
     * @param string $videoPlayLink
     * @return self
     */
    public function setVideoPlayLink(?string $videoPlayLink): self
    {
        $this->videoPlayLink = $videoPlayLink;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->inAppPaymentAmountRangeT1 !== null) {
            $result['in_app_payment_amount_range_t1'] = $this->inAppPaymentAmountRangeT1;
        }
        if ($this->inAppStatCostRangeT1 !== null) {
            $result['in_app_stat_cost_range_t1'] = $this->inAppStatCostRangeT1;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->starMaterialAdsViews !== null) {
            $result['star_material_ads_views'] = $this->starMaterialAdsViews;
        }
        if ($this->starMaterialClickCount !== null) {
            $result['star_material_click_count'] = $this->starMaterialClickCount;
        }
        if ($this->starMaterialConvertCount !== null) {
            $result['star_material_convert_count'] = $this->starMaterialConvertCount;
        }
        if ($this->starMaterialOrganicViews !== null) {
            $result['star_material_organic_views'] = $this->starMaterialOrganicViews;
        }
        if ($this->starTaskAlbumId !== null) {
            $result['star_task_album_id'] = $this->starTaskAlbumId;
        }
        if ($this->starTaskAlbumName !== null) {
            $result['star_task_album_name'] = $this->starTaskAlbumName;
        }
        if ($this->starTaskId !== null) {
            $result['star_task_id'] = $this->starTaskId;
        }
        if ($this->starTaskName !== null) {
            $result['star_task_name'] = $this->starTaskName;
        }
        if ($this->starVideoRelateProjectCount !== null) {
            $result['star_video_relate_project_count'] = $this->starVideoRelateProjectCount;
        }
        if ($this->starVideoRelatePromotionCount !== null) {
            $result['star_video_relate_promotion_count'] = $this->starVideoRelatePromotionCount;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->videoCoverUrl !== null) {
            $result['video_cover_url'] = $this->videoCoverUrl;
        }
        if ($this->videoPlayLink !== null) {
            $result['video_play_link'] = $this->videoPlayLink;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['in_app_payment_amount_range_t1'] ?? null) !== null && is_array($v)) {
            $obj->inAppPaymentAmountRangeT1 = $v;
        }
        if (($v = $data['in_app_stat_cost_range_t1'] ?? null) !== null && is_array($v)) {
            $obj->inAppStatCostRangeT1 = $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['star_material_ads_views'] ?? null) !== null) {
            $obj->starMaterialAdsViews = (int) $v;
        }
        if (($v = $data['star_material_click_count'] ?? null) !== null) {
            $obj->starMaterialClickCount = (int) $v;
        }
        if (($v = $data['star_material_convert_count'] ?? null) !== null) {
            $obj->starMaterialConvertCount = (int) $v;
        }
        if (($v = $data['star_material_organic_views'] ?? null) !== null) {
            $obj->starMaterialOrganicViews = (int) $v;
        }
        if (($v = $data['star_task_album_id'] ?? null) !== null) {
            $obj->starTaskAlbumId = (int) $v;
        }
        if (($v = $data['star_task_album_name'] ?? null) !== null) {
            $obj->starTaskAlbumName = (string) $v;
        }
        if (($v = $data['star_task_id'] ?? null) !== null) {
            $obj->starTaskId = (int) $v;
        }
        if (($v = $data['star_task_name'] ?? null) !== null) {
            $obj->starTaskName = (string) $v;
        }
        if (($v = $data['star_video_relate_project_count'] ?? null) !== null) {
            $obj->starVideoRelateProjectCount = (int) $v;
        }
        if (($v = $data['star_video_relate_promotion_count'] ?? null) !== null) {
            $obj->starVideoRelatePromotionCount = (int) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['video_cover_url'] ?? null) !== null) {
            $obj->videoCoverUrl = (string) $v;
        }
        if (($v = $data['video_play_link'] ?? null) !== null) {
            $obj->videoPlayLink = (string) $v;
        }
        return $obj;
    }
}
