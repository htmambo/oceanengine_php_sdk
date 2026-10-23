<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskAuthorVideoDetailV30Filtering implements \JsonSerializable
{
    /**
     * 达人抖音号id列表
     * @var string[]
     */
    protected ?array $awemeIds = null;

    /**
     * @var string[]
     */
    protected ?array $excludeAwemeIds = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringExcludeMaterialAssessment[]
     */
    protected ?array $excludeMaterialAssessment = null;

    /**
     * 视频素材id列表
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringStarMaterialPurchaseMethod
     */
    protected ?string $starMaterialPurchaseMethod = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoDeliveryStatus
     */
    protected ?string $starVideoDeliveryStatus = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment[]
     */
    protected ?array $starVideoMaterialAssessment = null;

    /**
     * 视频发布时间筛选，结束时间
     * @var string
     */
    protected ?string $videoPublishEndTime = null;

    /**
     * 视频发布时间筛选，开始时间
     * @var string
     */
    protected ?string $videoPublishStartTime = null;

    /**
     * 达人抖音号id列表
     * @return string[]
     */
    public function getAwemeIds(): ?array
    {
        return $this->awemeIds;
    }

    /**
     * 达人抖音号id列表
     * @param string[] $awemeIds
     * @return self
     */
    public function setAwemeIds(?array $awemeIds): self
    {
        $this->awemeIds = $awemeIds;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getExcludeAwemeIds(): ?array
    {
        return $this->excludeAwemeIds;
    }

    /**
     * @param string[] $excludeAwemeIds
     * @return self
     */
    public function setExcludeAwemeIds(?array $excludeAwemeIds): self
    {
        $this->excludeAwemeIds = $excludeAwemeIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringExcludeMaterialAssessment[]
     */
    public function getExcludeMaterialAssessment(): ?array
    {
        return $this->excludeMaterialAssessment;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringExcludeMaterialAssessment[] $excludeMaterialAssessment
     * @return self
     */
    public function setExcludeMaterialAssessment(?array $excludeMaterialAssessment): self
    {
        $this->excludeMaterialAssessment = $excludeMaterialAssessment;
        return $this;
    }

    /**
     * 视频素材id列表
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 视频素材id列表
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringStarMaterialPurchaseMethod
     */
    public function getStarMaterialPurchaseMethod(): ?string
    {
        return $this->starMaterialPurchaseMethod;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringStarMaterialPurchaseMethod $starMaterialPurchaseMethod
     * @return self
     */
    public function setStarMaterialPurchaseMethod(?string $starMaterialPurchaseMethod): self
    {
        $this->starMaterialPurchaseMethod = $starMaterialPurchaseMethod;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoDeliveryStatus
     */
    public function getStarVideoDeliveryStatus(): ?string
    {
        return $this->starVideoDeliveryStatus;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoDeliveryStatus $starVideoDeliveryStatus
     * @return self
     */
    public function setStarVideoDeliveryStatus(?string $starVideoDeliveryStatus): self
    {
        $this->starVideoDeliveryStatus = $starVideoDeliveryStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment[]
     */
    public function getStarVideoMaterialAssessment(): ?array
    {
        return $this->starVideoMaterialAssessment;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskAuthorVideoDetailV30FilteringStarVideoMaterialAssessment[] $starVideoMaterialAssessment
     * @return self
     */
    public function setStarVideoMaterialAssessment(?array $starVideoMaterialAssessment): self
    {
        $this->starVideoMaterialAssessment = $starVideoMaterialAssessment;
        return $this;
    }

    /**
     * 视频发布时间筛选，结束时间
     * @return string
     */
    public function getVideoPublishEndTime(): ?string
    {
        return $this->videoPublishEndTime;
    }

    /**
     * 视频发布时间筛选，结束时间
     * @param string $videoPublishEndTime
     * @return self
     */
    public function setVideoPublishEndTime(?string $videoPublishEndTime): self
    {
        $this->videoPublishEndTime = $videoPublishEndTime;
        return $this;
    }

    /**
     * 视频发布时间筛选，开始时间
     * @return string
     */
    public function getVideoPublishStartTime(): ?string
    {
        return $this->videoPublishStartTime;
    }

    /**
     * 视频发布时间筛选，开始时间
     * @param string $videoPublishStartTime
     * @return self
     */
    public function setVideoPublishStartTime(?string $videoPublishStartTime): self
    {
        $this->videoPublishStartTime = $videoPublishStartTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeIds !== null) {
            $result['aweme_ids'] = $this->awemeIds;
        }
        if ($this->excludeAwemeIds !== null) {
            $result['exclude_aweme_ids'] = $this->excludeAwemeIds;
        }
        if ($this->excludeMaterialAssessment !== null) {
            $result['exclude_material_assessment'] = $this->excludeMaterialAssessment;
        }
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->starMaterialPurchaseMethod !== null) {
            $result['star_material_purchase_method'] = $this->starMaterialPurchaseMethod;
        }
        if ($this->starVideoDeliveryStatus !== null) {
            $result['star_video_delivery_status'] = $this->starVideoDeliveryStatus;
        }
        if ($this->starVideoMaterialAssessment !== null) {
            $result['star_video_material_assessment'] = $this->starVideoMaterialAssessment;
        }
        if ($this->videoPublishEndTime !== null) {
            $result['video_publish_end_time'] = $this->videoPublishEndTime;
        }
        if ($this->videoPublishStartTime !== null) {
            $result['video_publish_start_time'] = $this->videoPublishStartTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_ids'] ?? null) !== null && is_array($v)) {
            $obj->awemeIds = $v;
        }
        if (($v = $data['exclude_aweme_ids'] ?? null) !== null && is_array($v)) {
            $obj->excludeAwemeIds = $v;
        }
        if (($v = $data['exclude_material_assessment'] ?? null) !== null && is_array($v)) {
            $obj->excludeMaterialAssessment = $v;
        }
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['star_material_purchase_method'] ?? null) !== null) {
            $obj->starMaterialPurchaseMethod = (string) $v;
        }
        if (($v = $data['star_video_delivery_status'] ?? null) !== null) {
            $obj->starVideoDeliveryStatus = (string) $v;
        }
        if (($v = $data['star_video_material_assessment'] ?? null) !== null && is_array($v)) {
            $obj->starVideoMaterialAssessment = $v;
        }
        if (($v = $data['video_publish_end_time'] ?? null) !== null) {
            $obj->videoPublishEndTime = (string) $v;
        }
        if (($v = $data['video_publish_start_time'] ?? null) !== null) {
            $obj->videoPublishStartTime = (string) $v;
        }
        return $obj;
    }
}
