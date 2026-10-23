<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileMaterialAttributesListV2ResponseDataMaterialsInner implements \JsonSerializable
{
    /**
     * 当该素材为AD低质素材时，返回低质原因
     * @var string[]
     */
    protected ?array $adLowQualitySuggestions = null;

    /**
     * @var string
     */
    protected ?string $attributesModifyTime = null;

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
     * 是否存在搬运风险，建议入参account_type = AD 或 QIANCHUAN查询
     * @var bool
     */
    protected ?bool $isCarryMaterial = null;

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
     * @var bool
     */
    protected ?bool $isExtremelySimilar = null;

    /**
     * 是否是首发素材
     * @var bool
     */
    protected ?bool $isFirstPublishMaterial = null;

    /**
     * 是否暗水印搬运素材，仅 account_type = AD 或 LOCAL 查询
     * @var bool
     */
    protected ?bool $isHiddenWatermark = null;

    /**
     * 是否低效素材
     * @var bool
     */
    protected ?bool $isInefficientMaterial = null;

    /**
     * 是否本地推优质素材
     * @var bool
     */
    protected ?bool $isLocalHighQualityMaterial = null;

    /**
     * 是否本地推低质素材
     * @var bool
     */
    protected ?bool $isLocalLowQualityMaterial = null;

    /**
     * 是否同质化素材风险-未投放预计排队素材 - 方舟/纵横不支持
     * @var bool
     */
    protected ?bool $isSimilarExpectedQueueMaterial = null;

    /**
     * 是否同质化挤压严重素材 - 方舟/纵横不支持
     * @var bool
     */
    protected ?bool $isSimilarMaterial = null;

    /**
     * 是否同质化素材风险-排队投放素材 - 方舟/纵横不支持
     * @var bool
     */
    protected ?bool $isSimilarQueueMaterial = null;

    /**
     * 当该素材为本地推低质素材时，返回低质原因
     * @var string[]
     */
    protected ?array $localLowQualitySuggestions = null;

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
     * @return string
     */
    public function getAttributesModifyTime(): ?string
    {
        return $this->attributesModifyTime;
    }

    /**
     * @param string $attributesModifyTime
     * @return self
     */
    public function setAttributesModifyTime(?string $attributesModifyTime): self
    {
        $this->attributesModifyTime = $attributesModifyTime;
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
     * 是否存在搬运风险，建议入参account_type = AD 或 QIANCHUAN查询
     * @return bool
     */
    public function getIsCarryMaterial(): ?bool
    {
        return $this->isCarryMaterial;
    }

    /**
     * 是否存在搬运风险，建议入参account_type = AD 或 QIANCHUAN查询
     * @param bool $isCarryMaterial
     * @return self
     */
    public function setIsCarryMaterial(?bool $isCarryMaterial): self
    {
        $this->isCarryMaterial = $isCarryMaterial;
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
     * @return bool
     */
    public function getIsExtremelySimilar(): ?bool
    {
        return $this->isExtremelySimilar;
    }

    /**
     * @param bool $isExtremelySimilar
     * @return self
     */
    public function setIsExtremelySimilar(?bool $isExtremelySimilar): self
    {
        $this->isExtremelySimilar = $isExtremelySimilar;
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
     * 是否暗水印搬运素材，仅 account_type = AD 或 LOCAL 查询
     * @return bool
     */
    public function getIsHiddenWatermark(): ?bool
    {
        return $this->isHiddenWatermark;
    }

    /**
     * 是否暗水印搬运素材，仅 account_type = AD 或 LOCAL 查询
     * @param bool $isHiddenWatermark
     * @return self
     */
    public function setIsHiddenWatermark(?bool $isHiddenWatermark): self
    {
        $this->isHiddenWatermark = $isHiddenWatermark;
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
     * 是否本地推优质素材
     * @return bool
     */
    public function getIsLocalHighQualityMaterial(): ?bool
    {
        return $this->isLocalHighQualityMaterial;
    }

    /**
     * 是否本地推优质素材
     * @param bool $isLocalHighQualityMaterial
     * @return self
     */
    public function setIsLocalHighQualityMaterial(?bool $isLocalHighQualityMaterial): self
    {
        $this->isLocalHighQualityMaterial = $isLocalHighQualityMaterial;
        return $this;
    }

    /**
     * 是否本地推低质素材
     * @return bool
     */
    public function getIsLocalLowQualityMaterial(): ?bool
    {
        return $this->isLocalLowQualityMaterial;
    }

    /**
     * 是否本地推低质素材
     * @param bool $isLocalLowQualityMaterial
     * @return self
     */
    public function setIsLocalLowQualityMaterial(?bool $isLocalLowQualityMaterial): self
    {
        $this->isLocalLowQualityMaterial = $isLocalLowQualityMaterial;
        return $this;
    }

    /**
     * 是否同质化素材风险-未投放预计排队素材 - 方舟/纵横不支持
     * @return bool
     */
    public function getIsSimilarExpectedQueueMaterial(): ?bool
    {
        return $this->isSimilarExpectedQueueMaterial;
    }

    /**
     * 是否同质化素材风险-未投放预计排队素材 - 方舟/纵横不支持
     * @param bool $isSimilarExpectedQueueMaterial
     * @return self
     */
    public function setIsSimilarExpectedQueueMaterial(?bool $isSimilarExpectedQueueMaterial): self
    {
        $this->isSimilarExpectedQueueMaterial = $isSimilarExpectedQueueMaterial;
        return $this;
    }

    /**
     * 是否同质化挤压严重素材 - 方舟/纵横不支持
     * @return bool
     */
    public function getIsSimilarMaterial(): ?bool
    {
        return $this->isSimilarMaterial;
    }

    /**
     * 是否同质化挤压严重素材 - 方舟/纵横不支持
     * @param bool $isSimilarMaterial
     * @return self
     */
    public function setIsSimilarMaterial(?bool $isSimilarMaterial): self
    {
        $this->isSimilarMaterial = $isSimilarMaterial;
        return $this;
    }

    /**
     * 是否同质化素材风险-排队投放素材 - 方舟/纵横不支持
     * @return bool
     */
    public function getIsSimilarQueueMaterial(): ?bool
    {
        return $this->isSimilarQueueMaterial;
    }

    /**
     * 是否同质化素材风险-排队投放素材 - 方舟/纵横不支持
     * @param bool $isSimilarQueueMaterial
     * @return self
     */
    public function setIsSimilarQueueMaterial(?bool $isSimilarQueueMaterial): self
    {
        $this->isSimilarQueueMaterial = $isSimilarQueueMaterial;
        return $this;
    }

    /**
     * 当该素材为本地推低质素材时，返回低质原因
     * @return string[]
     */
    public function getLocalLowQualitySuggestions(): ?array
    {
        return $this->localLowQualitySuggestions;
    }

    /**
     * 当该素材为本地推低质素材时，返回低质原因
     * @param string[] $localLowQualitySuggestions
     * @return self
     */
    public function setLocalLowQualitySuggestions(?array $localLowQualitySuggestions): self
    {
        $this->localLowQualitySuggestions = $localLowQualitySuggestions;
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
        if ($this->attributesModifyTime !== null) {
            $result['attributes_modify_time'] = $this->attributesModifyTime;
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
        if ($this->isCarryMaterial !== null) {
            $result['is_carry_material'] = $this->isCarryMaterial;
        }
        if ($this->isEcpHighQualityMaterial !== null) {
            $result['is_ecp_high_quality_material'] = $this->isEcpHighQualityMaterial;
        }
        if ($this->isEcpLowQualityMaterial !== null) {
            $result['is_ecp_low_quality_material'] = $this->isEcpLowQualityMaterial;
        }
        if ($this->isExtremelySimilar !== null) {
            $result['is_extremely_similar'] = $this->isExtremelySimilar;
        }
        if ($this->isFirstPublishMaterial !== null) {
            $result['is_first_publish_material'] = $this->isFirstPublishMaterial;
        }
        if ($this->isHiddenWatermark !== null) {
            $result['is_hidden_watermark'] = $this->isHiddenWatermark;
        }
        if ($this->isInefficientMaterial !== null) {
            $result['is_inefficient_material'] = $this->isInefficientMaterial;
        }
        if ($this->isLocalHighQualityMaterial !== null) {
            $result['is_local_high_quality_material'] = $this->isLocalHighQualityMaterial;
        }
        if ($this->isLocalLowQualityMaterial !== null) {
            $result['is_local_low_quality_material'] = $this->isLocalLowQualityMaterial;
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
        if ($this->localLowQualitySuggestions !== null) {
            $result['local_low_quality_suggestions'] = $this->localLowQualitySuggestions;
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
        if (($v = $data['attributes_modify_time'] ?? null) !== null) {
            $obj->attributesModifyTime = (string) $v;
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
        if (($v = $data['is_carry_material'] ?? null) !== null) {
            $obj->isCarryMaterial = (bool) $v;
        }
        if (($v = $data['is_ecp_high_quality_material'] ?? null) !== null) {
            $obj->isEcpHighQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_ecp_low_quality_material'] ?? null) !== null) {
            $obj->isEcpLowQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_extremely_similar'] ?? null) !== null) {
            $obj->isExtremelySimilar = (bool) $v;
        }
        if (($v = $data['is_first_publish_material'] ?? null) !== null) {
            $obj->isFirstPublishMaterial = (bool) $v;
        }
        if (($v = $data['is_hidden_watermark'] ?? null) !== null) {
            $obj->isHiddenWatermark = (bool) $v;
        }
        if (($v = $data['is_inefficient_material'] ?? null) !== null) {
            $obj->isInefficientMaterial = (bool) $v;
        }
        if (($v = $data['is_local_high_quality_material'] ?? null) !== null) {
            $obj->isLocalHighQualityMaterial = (bool) $v;
        }
        if (($v = $data['is_local_low_quality_material'] ?? null) !== null) {
            $obj->isLocalLowQualityMaterial = (bool) $v;
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
        if (($v = $data['local_low_quality_suggestions'] ?? null) !== null && is_array($v)) {
            $obj->localLowQualitySuggestions = $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        return $obj;
    }
}
