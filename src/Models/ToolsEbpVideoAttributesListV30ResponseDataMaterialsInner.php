<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpVideoAttributesListV30ResponseDataMaterialsInner implements \JsonSerializable
{
    /**
     * 当该素材为AD低质素材时，返回低质原因
     * @var string[]
     */
    protected ?array $adLowQualitySuggestions = null;

    /**
     * 当该素材为千川低质素材时，返回低质原因
     * @var string[]
     */
    protected ?array $ecpLowQualitySuggestions = null;

    /**
     * 是否AD优质素材
     * @var bool
     */
    protected ?bool $isAdHighQualityMaterial = null;

    /**
     * 是否AD低质素材
     * @var bool
     */
    protected ?bool $isAdLowQualityMaterial = null;

    /**
     * 是否千川优质素材
     * @var bool
     */
    protected ?bool $isEcpHighQualityMaterial = null;

    /**
     * 是否千川低质素材
     * @var bool
     */
    protected ?bool $isEcpLowQualityMaterial = null;

    /**
     * 是否是首发素材
     * @var bool
     */
    protected ?bool $isFirstPublishMaterial = null;

    /**
     * 是否低效素材
     * @var bool
     */
    protected ?bool $isInefficientMaterial = null;

    /**
     * 素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 当该素材为AD低质素材时，返回低质原因
     * @return string[]
     */
    public function getAdLowQualitySuggestions(): ?array
    {
        return $this->adLowQualitySuggestions;
    }

    /**
     * 当该素材为AD低质素材时，返回低质原因
     * @param string[] $adLowQualitySuggestions
     * @return self
     */
    public function setAdLowQualitySuggestions(?array $adLowQualitySuggestions): self
    {
        $this->adLowQualitySuggestions = $adLowQualitySuggestions;
        return $this;
    }

    /**
     * 当该素材为千川低质素材时，返回低质原因
     * @return string[]
     */
    public function getEcpLowQualitySuggestions(): ?array
    {
        return $this->ecpLowQualitySuggestions;
    }

    /**
     * 当该素材为千川低质素材时，返回低质原因
     * @param string[] $ecpLowQualitySuggestions
     * @return self
     */
    public function setEcpLowQualitySuggestions(?array $ecpLowQualitySuggestions): self
    {
        $this->ecpLowQualitySuggestions = $ecpLowQualitySuggestions;
        return $this;
    }

    /**
     * 是否AD优质素材
     * @return bool
     */
    public function getIsAdHighQualityMaterial(): ?bool
    {
        return $this->isAdHighQualityMaterial;
    }

    /**
     * 是否AD优质素材
     * @param bool $isAdHighQualityMaterial
     * @return self
     */
    public function setIsAdHighQualityMaterial(?bool $isAdHighQualityMaterial): self
    {
        $this->isAdHighQualityMaterial = $isAdHighQualityMaterial;
        return $this;
    }

    /**
     * 是否AD低质素材
     * @return bool
     */
    public function getIsAdLowQualityMaterial(): ?bool
    {
        return $this->isAdLowQualityMaterial;
    }

    /**
     * 是否AD低质素材
     * @param bool $isAdLowQualityMaterial
     * @return self
     */
    public function setIsAdLowQualityMaterial(?bool $isAdLowQualityMaterial): self
    {
        $this->isAdLowQualityMaterial = $isAdLowQualityMaterial;
        return $this;
    }

    /**
     * 是否千川优质素材
     * @return bool
     */
    public function getIsEcpHighQualityMaterial(): ?bool
    {
        return $this->isEcpHighQualityMaterial;
    }

    /**
     * 是否千川优质素材
     * @param bool $isEcpHighQualityMaterial
     * @return self
     */
    public function setIsEcpHighQualityMaterial(?bool $isEcpHighQualityMaterial): self
    {
        $this->isEcpHighQualityMaterial = $isEcpHighQualityMaterial;
        return $this;
    }

    /**
     * 是否千川低质素材
     * @return bool
     */
    public function getIsEcpLowQualityMaterial(): ?bool
    {
        return $this->isEcpLowQualityMaterial;
    }

    /**
     * 是否千川低质素材
     * @param bool $isEcpLowQualityMaterial
     * @return self
     */
    public function setIsEcpLowQualityMaterial(?bool $isEcpLowQualityMaterial): self
    {
        $this->isEcpLowQualityMaterial = $isEcpLowQualityMaterial;
        return $this;
    }

    /**
     * 是否是首发素材
     * @return bool
     */
    public function getIsFirstPublishMaterial(): ?bool
    {
        return $this->isFirstPublishMaterial;
    }

    /**
     * 是否是首发素材
     * @param bool $isFirstPublishMaterial
     * @return self
     */
    public function setIsFirstPublishMaterial(?bool $isFirstPublishMaterial): self
    {
        $this->isFirstPublishMaterial = $isFirstPublishMaterial;
        return $this;
    }

    /**
     * 是否低效素材
     * @return bool
     */
    public function getIsInefficientMaterial(): ?bool
    {
        return $this->isInefficientMaterial;
    }

    /**
     * 是否低效素材
     * @param bool $isInefficientMaterial
     * @return self
     */
    public function setIsInefficientMaterial(?bool $isInefficientMaterial): self
    {
        $this->isInefficientMaterial = $isInefficientMaterial;
        return $this;
    }

    /**
     * 素材id
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材id
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adLowQualitySuggestions !== null) {
            $result['ad_low_quality_suggestions'] = $this->adLowQualitySuggestions;
        }
        if ($this->ecpLowQualitySuggestions !== null) {
            $result['ecp_low_quality_suggestions'] = $this->ecpLowQualitySuggestions;
        }
        if ($this->isAdHighQualityMaterial !== null) {
            $result['is_ad_high_quality_material'] = $this->isAdHighQualityMaterial;
        }
        if ($this->isAdLowQualityMaterial !== null) {
            $result['is_ad_low_quality_material'] = $this->isAdLowQualityMaterial;
        }
        if ($this->isEcpHighQualityMaterial !== null) {
            $result['is_ecp_high_quality_material'] = $this->isEcpHighQualityMaterial;
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
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_low_quality_suggestions'] ?? null) !== null && is_array($v)) {
            $obj->adLowQualitySuggestions = $v;
        }
        if (($v = $data['ecp_low_quality_suggestions'] ?? null) !== null && is_array($v)) {
            $obj->ecpLowQualitySuggestions = $v;
        }
        if (($v = $data['is_ad_high_quality_material'] ?? null) !== null) {
            $obj->isAdHighQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_ad_low_quality_material'] ?? null) !== null) {
            $obj->isAdLowQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_ecp_high_quality_material'] ?? null) !== null) {
            $obj->isEcpHighQualityMaterial = (bool) $v;
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
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        return $obj;
    }
}
