<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileMaterialDetailV2ResponseDataMaterialsInner implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $isAdHighQuality = null;

    /**
     * @var bool
     */
    protected ?bool $isAdLowQualityMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isEcpHighQuality = null;

    /**
     * @var bool
     */
    protected ?bool $isEcpLowQualityMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isFirstPublishMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isInefficientMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isSimilarExpectedQueueMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isSimilarMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isSimilarQueueMaterial = null;

    /**
     * @var string
     */
    protected ?string $materialId = null;

    /**
     * @var string[]
     */
    protected ?array $messageAdLowQualityMaterial = null;

    /**
     * @var string[]
     */
    protected ?array $messageEcpLowQualityMaterial = null;

    /**
     * @return bool
     */
    public function getIsAdHighQuality(): ?bool
    {
        return $this->isAdHighQuality;
    }

    /**
     * @param bool $isAdHighQuality
     * @return self
     */
    public function setIsAdHighQuality(?bool $isAdHighQuality): self
    {
        $this->isAdHighQuality = $isAdHighQuality;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAdLowQualityMaterial(): ?bool
    {
        return $this->isAdLowQualityMaterial;
    }

    /**
     * @param bool $isAdLowQualityMaterial
     * @return self
     */
    public function setIsAdLowQualityMaterial(?bool $isAdLowQualityMaterial): self
    {
        $this->isAdLowQualityMaterial = $isAdLowQualityMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEcpHighQuality(): ?bool
    {
        return $this->isEcpHighQuality;
    }

    /**
     * @param bool $isEcpHighQuality
     * @return self
     */
    public function setIsEcpHighQuality(?bool $isEcpHighQuality): self
    {
        $this->isEcpHighQuality = $isEcpHighQuality;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEcpLowQualityMaterial(): ?bool
    {
        return $this->isEcpLowQualityMaterial;
    }

    /**
     * @param bool $isEcpLowQualityMaterial
     * @return self
     */
    public function setIsEcpLowQualityMaterial(?bool $isEcpLowQualityMaterial): self
    {
        $this->isEcpLowQualityMaterial = $isEcpLowQualityMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFirstPublishMaterial(): ?bool
    {
        return $this->isFirstPublishMaterial;
    }

    /**
     * @param bool $isFirstPublishMaterial
     * @return self
     */
    public function setIsFirstPublishMaterial(?bool $isFirstPublishMaterial): self
    {
        $this->isFirstPublishMaterial = $isFirstPublishMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInefficientMaterial(): ?bool
    {
        return $this->isInefficientMaterial;
    }

    /**
     * @param bool $isInefficientMaterial
     * @return self
     */
    public function setIsInefficientMaterial(?bool $isInefficientMaterial): self
    {
        $this->isInefficientMaterial = $isInefficientMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSimilarExpectedQueueMaterial(): ?bool
    {
        return $this->isSimilarExpectedQueueMaterial;
    }

    /**
     * @param bool $isSimilarExpectedQueueMaterial
     * @return self
     */
    public function setIsSimilarExpectedQueueMaterial(?bool $isSimilarExpectedQueueMaterial): self
    {
        $this->isSimilarExpectedQueueMaterial = $isSimilarExpectedQueueMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSimilarMaterial(): ?bool
    {
        return $this->isSimilarMaterial;
    }

    /**
     * @param bool $isSimilarMaterial
     * @return self
     */
    public function setIsSimilarMaterial(?bool $isSimilarMaterial): self
    {
        $this->isSimilarMaterial = $isSimilarMaterial;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSimilarQueueMaterial(): ?bool
    {
        return $this->isSimilarQueueMaterial;
    }

    /**
     * @param bool $isSimilarQueueMaterial
     * @return self
     */
    public function setIsSimilarQueueMaterial(?bool $isSimilarQueueMaterial): self
    {
        $this->isSimilarQueueMaterial = $isSimilarQueueMaterial;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaterialId(): ?string
    {
        return $this->materialId;
    }

    /**
     * @param string $materialId
     * @return self
     */
    public function setMaterialId(?string $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMessageAdLowQualityMaterial(): ?array
    {
        return $this->messageAdLowQualityMaterial;
    }

    /**
     * @param string[] $messageAdLowQualityMaterial
     * @return self
     */
    public function setMessageAdLowQualityMaterial(?array $messageAdLowQualityMaterial): self
    {
        $this->messageAdLowQualityMaterial = $messageAdLowQualityMaterial;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMessageEcpLowQualityMaterial(): ?array
    {
        return $this->messageEcpLowQualityMaterial;
    }

    /**
     * @param string[] $messageEcpLowQualityMaterial
     * @return self
     */
    public function setMessageEcpLowQualityMaterial(?array $messageEcpLowQualityMaterial): self
    {
        $this->messageEcpLowQualityMaterial = $messageEcpLowQualityMaterial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isAdHighQuality !== null) {
            $result['is_ad_high_quality'] = $this->isAdHighQuality;
        }
        if ($this->isAdLowQualityMaterial !== null) {
            $result['is_ad_low_quality_material'] = $this->isAdLowQualityMaterial;
        }
        if ($this->isEcpHighQuality !== null) {
            $result['is_ecp_high_quality'] = $this->isEcpHighQuality;
        }
        if ($this->isEcpLowQualityMaterial !== null) {
            $result['is_ecp_low_quality_material'] = $this->isEcpLowQualityMaterial;
        }
        if ($this->isFirstPublishMaterial !== null) {
            $result['is_first_publish_material'] = $this->isFirstPublishMaterial;
        }
        if ($this->isInefficientMaterial !== null) {
            $result['is_inefficient_material'] = $this->isInefficientMaterial;
        }
        if ($this->isSimilarExpectedQueueMaterial !== null) {
            $result['is_similar_expected_queue_material'] = $this->isSimilarExpectedQueueMaterial;
        }
        if ($this->isSimilarMaterial !== null) {
            $result['is_similar_material'] = $this->isSimilarMaterial;
        }
        if ($this->isSimilarQueueMaterial !== null) {
            $result['is_similar_queue_material'] = $this->isSimilarQueueMaterial;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->messageAdLowQualityMaterial !== null) {
            $result['message_ad_low_quality_material'] = $this->messageAdLowQualityMaterial;
        }
        if ($this->messageEcpLowQualityMaterial !== null) {
            $result['message_ecp_low_quality_material'] = $this->messageEcpLowQualityMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_ad_high_quality'] ?? null) !== null) {
            $obj->isAdHighQuality = (bool) $v;
        }
        if (($v = $data['is_ad_low_quality_material'] ?? null) !== null) {
            $obj->isAdLowQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_ecp_high_quality'] ?? null) !== null) {
            $obj->isEcpHighQuality = (bool) $v;
        }
        if (($v = $data['is_ecp_low_quality_material'] ?? null) !== null) {
            $obj->isEcpLowQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_first_publish_material'] ?? null) !== null) {
            $obj->isFirstPublishMaterial = (bool) $v;
        }
        if (($v = $data['is_inefficient_material'] ?? null) !== null) {
            $obj->isInefficientMaterial = (bool) $v;
        }
        if (($v = $data['is_similar_expected_queue_material'] ?? null) !== null) {
            $obj->isSimilarExpectedQueueMaterial = (bool) $v;
        }
        if (($v = $data['is_similar_material'] ?? null) !== null) {
            $obj->isSimilarMaterial = (bool) $v;
        }
        if (($v = $data['is_similar_queue_material'] ?? null) !== null) {
            $obj->isSimilarQueueMaterial = (bool) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (string) $v;
        }
        if (($v = $data['message_ad_low_quality_material'] ?? null) !== null && is_array($v)) {
            $obj->messageAdLowQualityMaterial = $v;
        }
        if (($v = $data['message_ecp_low_quality_material'] ?? null) !== null && is_array($v)) {
            $obj->messageEcpLowQualityMaterial = $v;
        }
        return $obj;
    }
}
