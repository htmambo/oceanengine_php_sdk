<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DiagnosisTaskAgentGetV2ResponseDataTaskListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial
     */
    protected ?string $isAdHighQualityMaterial = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial
     */
    protected ?string $isEcpHighQualityMaterial = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial
     */
    protected ?string $isFirstPublishMaterial = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial
     */
    protected ?string $isInefficientMaterial = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial
     */
    protected ?string $isLocalHighQualityMaterial = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string[]
     */
    protected ?array $notAdHighQualityReason = null;

    /**
     * @var string[]
     */
    protected ?array $notEcpHighQualityReason = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListStatus
     */
    protected ?string $status = null;

    /**
     * @var int
     */
    protected ?int $taskId = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial
     */
    public function getIsAdHighQualityMaterial(): ?string
    {
        return $this->isAdHighQualityMaterial;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsAdHighQualityMaterial $isAdHighQualityMaterial
     * @return self
     */
    public function setIsAdHighQualityMaterial(?string $isAdHighQualityMaterial): self
    {
        $this->isAdHighQualityMaterial = $isAdHighQualityMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial
     */
    public function getIsEcpHighQualityMaterial(): ?string
    {
        return $this->isEcpHighQualityMaterial;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsEcpHighQualityMaterial $isEcpHighQualityMaterial
     * @return self
     */
    public function setIsEcpHighQualityMaterial(?string $isEcpHighQualityMaterial): self
    {
        $this->isEcpHighQualityMaterial = $isEcpHighQualityMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial
     */
    public function getIsFirstPublishMaterial(): ?string
    {
        return $this->isFirstPublishMaterial;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsFirstPublishMaterial $isFirstPublishMaterial
     * @return self
     */
    public function setIsFirstPublishMaterial(?string $isFirstPublishMaterial): self
    {
        $this->isFirstPublishMaterial = $isFirstPublishMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial
     */
    public function getIsInefficientMaterial(): ?string
    {
        return $this->isInefficientMaterial;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsInefficientMaterial $isInefficientMaterial
     * @return self
     */
    public function setIsInefficientMaterial(?string $isInefficientMaterial): self
    {
        $this->isInefficientMaterial = $isInefficientMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial
     */
    public function getIsLocalHighQualityMaterial(): ?string
    {
        return $this->isLocalHighQualityMaterial;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListIsLocalHighQualityMaterial $isLocalHighQualityMaterial
     * @return self
     */
    public function setIsLocalHighQualityMaterial(?string $isLocalHighQualityMaterial): self
    {
        $this->isLocalHighQualityMaterial = $isLocalHighQualityMaterial;
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
     * @return string[]
     */
    public function getNotAdHighQualityReason(): ?array
    {
        return $this->notAdHighQualityReason;
    }

    /**
     * @param string[] $notAdHighQualityReason
     * @return self
     */
    public function setNotAdHighQualityReason(?array $notAdHighQualityReason): self
    {
        $this->notAdHighQualityReason = $notAdHighQualityReason;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getNotEcpHighQualityReason(): ?array
    {
        return $this->notEcpHighQualityReason;
    }

    /**
     * @param string[] $notEcpHighQualityReason
     * @return self
     */
    public function setNotEcpHighQualityReason(?array $notEcpHighQualityReason): self
    {
        $this->notEcpHighQualityReason = $notEcpHighQualityReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAgentGetV2DataTaskListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    /**
     * @param int $taskId
     * @return self
     */
    public function setTaskId(?int $taskId): self
    {
        $this->taskId = $taskId;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->isAdHighQualityMaterial !== null) {
            $result['is_ad_high_quality_material'] = $this->isAdHighQualityMaterial;
        }
        if ($this->isEcpHighQualityMaterial !== null) {
            $result['is_ecp_high_quality_material'] = $this->isEcpHighQualityMaterial;
        }
        if ($this->isFirstPublishMaterial !== null) {
            $result['is_first_publish_material'] = $this->isFirstPublishMaterial;
        }
        if ($this->isInefficientMaterial !== null) {
            $result['is_inefficient_material'] = $this->isInefficientMaterial;
        }
        if ($this->isLocalHighQualityMaterial !== null) {
            $result['is_local_high_quality_material'] = $this->isLocalHighQualityMaterial;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->notAdHighQualityReason !== null) {
            $result['not_ad_high_quality_reason'] = $this->notAdHighQualityReason;
        }
        if ($this->notEcpHighQualityReason !== null) {
            $result['not_ecp_high_quality_reason'] = $this->notEcpHighQualityReason;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->taskId !== null) {
            $result['task_id'] = $this->taskId;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['is_ad_high_quality_material'] ?? null) !== null) {
            $obj->isAdHighQualityMaterial = (string) $v;
        }
        if (($v = $data['is_ecp_high_quality_material'] ?? null) !== null) {
            $obj->isEcpHighQualityMaterial = (string) $v;
        }
        if (($v = $data['is_first_publish_material'] ?? null) !== null) {
            $obj->isFirstPublishMaterial = (string) $v;
        }
        if (($v = $data['is_inefficient_material'] ?? null) !== null) {
            $obj->isInefficientMaterial = (string) $v;
        }
        if (($v = $data['is_local_high_quality_material'] ?? null) !== null) {
            $obj->isLocalHighQualityMaterial = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['not_ad_high_quality_reason'] ?? null) !== null && is_array($v)) {
            $obj->notAdHighQualityReason = $v;
        }
        if (($v = $data['not_ecp_high_quality_reason'] ?? null) !== null && is_array($v)) {
            $obj->notEcpHighQualityReason = $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['task_id'] ?? null) !== null) {
            $obj->taskId = (int) $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
