<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskAuthorVideoDetailV30ResponseDataValidAuthorSubmittedVideosInnerMaterialProperties implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $isFirstPublishMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isHighQualityMaterial = null;

    /**
     * @var bool
     */
    protected ?bool $isInefficientMaterial = null;

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
    public function getIsHighQualityMaterial(): ?bool
    {
        return $this->isHighQualityMaterial;
    }

    /**
     * @param bool $isHighQualityMaterial
     * @return self
     */
    public function setIsHighQualityMaterial(?bool $isHighQualityMaterial): self
    {
        $this->isHighQualityMaterial = $isHighQualityMaterial;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->isFirstPublishMaterial !== null) {
            $result['is_first_publish_material'] = $this->isFirstPublishMaterial;
        }
        if ($this->isHighQualityMaterial !== null) {
            $result['is_high_quality_material'] = $this->isHighQualityMaterial;
        }
        if ($this->isInefficientMaterial !== null) {
            $result['is_inefficient_material'] = $this->isInefficientMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['is_first_publish_material'] ?? null) !== null) {
            $obj->isFirstPublishMaterial = (bool) $v;
        }
        if (($v = $data['is_high_quality_material'] ?? null) !== null) {
            $obj->isHighQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_inefficient_material'] ?? null) !== null) {
            $obj->isInefficientMaterial = (bool) $v;
        }
        return $obj;
    }
}
