<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * @var int
     */
    protected ?int $duration = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var int
     */
    protected ?int $isvId = null;

    /**
     * @var string
     */
    protected ?string $isvName = null;

    /**
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInnerMaterialProperties
     */
    protected ?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInnerMaterialProperties $materialProperties = null;

    /**
     * @var string
     */
    protected ?string $starMaterialCreativeOrient = null;

    /**
     * @var string
     */
    protected ?string $starMaterialDisplayFormat = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarMaterialPurchaseMethod
     */
    protected ?string $starMaterialPurchaseMethod = null;

    /**
     * 视频被客户审核拒绝的理由
     * @var string
     */
    protected ?string $starVideoBanReasonDetail = null;

    /**
     * 视频被服务商审核通过的时间
     * @var string
     */
    protected ?string $starVideoCusApprovalTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus
     */
    protected ?string $starVideoDeliveryStatus = null;

    /**
     * 视频发布时间
     * @var string
     */
    protected ?string $starVideoPublishTime = null;

    /**
     * @var int
     */
    protected ?int $starVideoRelatePromotionCount = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult
     */
    protected ?string $starVideoReviewResult = null;

    /**
     * 视频定时发布时间
     * @var string
     */
    protected ?string $starVideoScheduledPublishTime = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus
     */
    protected ?string $starVideoStatus = null;

    /**
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * @var string
     */
    protected ?string $videoCoverUrl = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var string
     */
    protected ?string $videoPlayLink = null;

    /**
     * @var string
     */
    protected ?string $videoTitle = null;

    /**
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosImageMode $imageMode
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
    public function getIsvId(): ?int
    {
        return $this->isvId;
    }

    /**
     * @param int $isvId
     * @return self
     */
    public function setIsvId(?int $isvId): self
    {
        $this->isvId = $isvId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsvName(): ?string
    {
        return $this->isvName;
    }

    /**
     * @param string $isvName
     * @return self
     */
    public function setIsvName(?string $isvName): self
    {
        $this->isvName = $isvName;
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
     * @return \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInnerMaterialProperties
     */
    public function getMaterialProperties(): ?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInnerMaterialProperties
    {
        return $this->materialProperties;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInnerMaterialProperties $materialProperties
     * @return self
     */
    public function setMaterialProperties(?\Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInnerMaterialProperties $materialProperties): self
    {
        $this->materialProperties = $materialProperties;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarMaterialCreativeOrient(): ?string
    {
        return $this->starMaterialCreativeOrient;
    }

    /**
     * @param string $starMaterialCreativeOrient
     * @return self
     */
    public function setStarMaterialCreativeOrient(?string $starMaterialCreativeOrient): self
    {
        $this->starMaterialCreativeOrient = $starMaterialCreativeOrient;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarMaterialDisplayFormat(): ?string
    {
        return $this->starMaterialDisplayFormat;
    }

    /**
     * @param string $starMaterialDisplayFormat
     * @return self
     */
    public function setStarMaterialDisplayFormat(?string $starMaterialDisplayFormat): self
    {
        $this->starMaterialDisplayFormat = $starMaterialDisplayFormat;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarMaterialPurchaseMethod
     */
    public function getStarMaterialPurchaseMethod(): ?string
    {
        return $this->starMaterialPurchaseMethod;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarMaterialPurchaseMethod $starMaterialPurchaseMethod
     * @return self
     */
    public function setStarMaterialPurchaseMethod(?string $starMaterialPurchaseMethod): self
    {
        $this->starMaterialPurchaseMethod = $starMaterialPurchaseMethod;
        return $this;
    }

    /**
     * 视频被客户审核拒绝的理由
     * @return string
     */
    public function getStarVideoBanReasonDetail(): ?string
    {
        return $this->starVideoBanReasonDetail;
    }

    /**
     * 视频被客户审核拒绝的理由
     * @param string $starVideoBanReasonDetail
     * @return self
     */
    public function setStarVideoBanReasonDetail(?string $starVideoBanReasonDetail): self
    {
        $this->starVideoBanReasonDetail = $starVideoBanReasonDetail;
        return $this;
    }

    /**
     * 视频被服务商审核通过的时间
     * @return string
     */
    public function getStarVideoCusApprovalTime(): ?string
    {
        return $this->starVideoCusApprovalTime;
    }

    /**
     * 视频被服务商审核通过的时间
     * @param string $starVideoCusApprovalTime
     * @return self
     */
    public function setStarVideoCusApprovalTime(?string $starVideoCusApprovalTime): self
    {
        $this->starVideoCusApprovalTime = $starVideoCusApprovalTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus
     */
    public function getStarVideoDeliveryStatus(): ?string
    {
        return $this->starVideoDeliveryStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoDeliveryStatus $starVideoDeliveryStatus
     * @return self
     */
    public function setStarVideoDeliveryStatus(?string $starVideoDeliveryStatus): self
    {
        $this->starVideoDeliveryStatus = $starVideoDeliveryStatus;
        return $this;
    }

    /**
     * 视频发布时间
     * @return string
     */
    public function getStarVideoPublishTime(): ?string
    {
        return $this->starVideoPublishTime;
    }

    /**
     * 视频发布时间
     * @param string $starVideoPublishTime
     * @return self
     */
    public function setStarVideoPublishTime(?string $starVideoPublishTime): self
    {
        $this->starVideoPublishTime = $starVideoPublishTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarVideoRelatePromotionCount(): ?int
    {
        return $this->starVideoRelatePromotionCount;
    }

    /**
     * @param int $starVideoRelatePromotionCount
     * @return self
     */
    public function setStarVideoRelatePromotionCount(?int $starVideoRelatePromotionCount): self
    {
        $this->starVideoRelatePromotionCount = $starVideoRelatePromotionCount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult
     */
    public function getStarVideoReviewResult(): ?string
    {
        return $this->starVideoReviewResult;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoReviewResult $starVideoReviewResult
     * @return self
     */
    public function setStarVideoReviewResult(?string $starVideoReviewResult): self
    {
        $this->starVideoReviewResult = $starVideoReviewResult;
        return $this;
    }

    /**
     * 视频定时发布时间
     * @return string
     */
    public function getStarVideoScheduledPublishTime(): ?string
    {
        return $this->starVideoScheduledPublishTime;
    }

    /**
     * 视频定时发布时间
     * @param string $starVideoScheduledPublishTime
     * @return self
     */
    public function setStarVideoScheduledPublishTime(?string $starVideoScheduledPublishTime): self
    {
        $this->starVideoScheduledPublishTime = $starVideoScheduledPublishTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus
     */
    public function getStarVideoStatus(): ?string
    {
        return $this->starVideoStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30DataValidAuthorSubmittedVideosStarVideoStatus $starVideoStatus
     * @return self
     */
    public function setStarVideoStatus(?string $starVideoStatus): self
    {
        $this->starVideoStatus = $starVideoStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoCoverId(): ?string
    {
        return $this->videoCoverId;
    }

    /**
     * @param string $videoCoverId
     * @return self
     */
    public function setVideoCoverId(?string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoCoverUrl(): ?string
    {
        return $this->videoCoverUrl;
    }

    /**
     * @param string $videoCoverUrl
     * @return self
     */
    public function setVideoCoverUrl(?string $videoCoverUrl): self
    {
        $this->videoCoverUrl = $videoCoverUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoPlayLink(): ?string
    {
        return $this->videoPlayLink;
    }

    /**
     * @param string $videoPlayLink
     * @return self
     */
    public function setVideoPlayLink(?string $videoPlayLink): self
    {
        $this->videoPlayLink = $videoPlayLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoTitle(): ?string
    {
        return $this->videoTitle;
    }

    /**
     * @param string $videoTitle
     * @return self
     */
    public function setVideoTitle(?string $videoTitle): self
    {
        $this->videoTitle = $videoTitle;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->isvId !== null) {
            $result['isv_id'] = $this->isvId;
        }
        if ($this->isvName !== null) {
            $result['isv_name'] = $this->isvName;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialProperties !== null) {
            $result['material_properties'] = $this->materialProperties;
        }
        if ($this->starMaterialCreativeOrient !== null) {
            $result['star_material_creative_orient'] = $this->starMaterialCreativeOrient;
        }
        if ($this->starMaterialDisplayFormat !== null) {
            $result['star_material_display_format'] = $this->starMaterialDisplayFormat;
        }
        if ($this->starMaterialPurchaseMethod !== null) {
            $result['star_material_purchase_method'] = $this->starMaterialPurchaseMethod;
        }
        if ($this->starVideoBanReasonDetail !== null) {
            $result['star_video_ban_reason_detail'] = $this->starVideoBanReasonDetail;
        }
        if ($this->starVideoCusApprovalTime !== null) {
            $result['star_video_cus_approval_time'] = $this->starVideoCusApprovalTime;
        }
        if ($this->starVideoDeliveryStatus !== null) {
            $result['star_video_delivery_status'] = $this->starVideoDeliveryStatus;
        }
        if ($this->starVideoPublishTime !== null) {
            $result['star_video_publish_time'] = $this->starVideoPublishTime;
        }
        if ($this->starVideoRelatePromotionCount !== null) {
            $result['star_video_relate_promotion_count'] = $this->starVideoRelatePromotionCount;
        }
        if ($this->starVideoReviewResult !== null) {
            $result['star_video_review_result'] = $this->starVideoReviewResult;
        }
        if ($this->starVideoScheduledPublishTime !== null) {
            $result['star_video_scheduled_publish_time'] = $this->starVideoScheduledPublishTime;
        }
        if ($this->starVideoStatus !== null) {
            $result['star_video_status'] = $this->starVideoStatus;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoCoverUrl !== null) {
            $result['video_cover_url'] = $this->videoCoverUrl;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        if ($this->videoPlayLink !== null) {
            $result['video_play_link'] = $this->videoPlayLink;
        }
        if ($this->videoTitle !== null) {
            $result['video_title'] = $this->videoTitle;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (int) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['isv_id'] ?? null) !== null) {
            $obj->isvId = (int) $v;
        }
        if (($v = $data['isv_name'] ?? null) !== null) {
            $obj->isvName = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_properties'] ?? null) !== null && is_array($v)) {
            $obj->materialProperties = \Oceanengine\Models\ToolsEbpStarTaskTaskAuthorVedioGetV30ResponseDataValidAuthorSubmittedVideosInnerMaterialProperties::fromArray($v);
        }
        if (($v = $data['star_material_creative_orient'] ?? null) !== null) {
            $obj->starMaterialCreativeOrient = (string) $v;
        }
        if (($v = $data['star_material_display_format'] ?? null) !== null) {
            $obj->starMaterialDisplayFormat = (string) $v;
        }
        if (($v = $data['star_material_purchase_method'] ?? null) !== null) {
            $obj->starMaterialPurchaseMethod = (string) $v;
        }
        if (($v = $data['star_video_ban_reason_detail'] ?? null) !== null) {
            $obj->starVideoBanReasonDetail = (string) $v;
        }
        if (($v = $data['star_video_cus_approval_time'] ?? null) !== null) {
            $obj->starVideoCusApprovalTime = (string) $v;
        }
        if (($v = $data['star_video_delivery_status'] ?? null) !== null) {
            $obj->starVideoDeliveryStatus = (string) $v;
        }
        if (($v = $data['star_video_publish_time'] ?? null) !== null) {
            $obj->starVideoPublishTime = (string) $v;
        }
        if (($v = $data['star_video_relate_promotion_count'] ?? null) !== null) {
            $obj->starVideoRelatePromotionCount = (int) $v;
        }
        if (($v = $data['star_video_review_result'] ?? null) !== null) {
            $obj->starVideoReviewResult = (string) $v;
        }
        if (($v = $data['star_video_scheduled_publish_time'] ?? null) !== null) {
            $obj->starVideoScheduledPublishTime = (string) $v;
        }
        if (($v = $data['star_video_status'] ?? null) !== null) {
            $obj->starVideoStatus = (string) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_cover_url'] ?? null) !== null) {
            $obj->videoCoverUrl = (string) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['video_play_link'] ?? null) !== null) {
            $obj->videoPlayLink = (string) $v;
        }
        if (($v = $data['video_title'] ?? null) !== null) {
            $obj->videoTitle = (string) $v;
        }
        return $obj;
    }
}
