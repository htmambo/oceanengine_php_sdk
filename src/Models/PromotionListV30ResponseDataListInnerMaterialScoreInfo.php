<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerMaterialScoreInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfoLowQualityMaterialList
     */
    protected ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfoLowQualityMaterialList $lowQualityMaterialList = null;

    /**
     * @var string[]
     */
    protected ?array $materialAdvice = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial
     */
    protected ?string $scoreNumOfMaterial = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial
     */
    protected ?string $scoreTypeOfMaterial = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial
     */
    protected ?string $scoreValueOfMaterial = null;

    /**
     * @return \Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfoLowQualityMaterialList
     */
    public function getLowQualityMaterialList(): ?\Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfoLowQualityMaterialList
    {
        return $this->lowQualityMaterialList;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfoLowQualityMaterialList $lowQualityMaterialList
     * @return self
     */
    public function setLowQualityMaterialList(?\Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfoLowQualityMaterialList $lowQualityMaterialList): self
    {
        $this->lowQualityMaterialList = $lowQualityMaterialList;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMaterialAdvice(): ?array
    {
        return $this->materialAdvice;
    }

    /**
     * @param string[] $materialAdvice
     * @return self
     */
    public function setMaterialAdvice(?array $materialAdvice): self
    {
        $this->materialAdvice = $materialAdvice;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial
     */
    public function getScoreNumOfMaterial(): ?string
    {
        return $this->scoreNumOfMaterial;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListMaterialScoreInfoScoreNumOfMaterial $scoreNumOfMaterial
     * @return self
     */
    public function setScoreNumOfMaterial(?string $scoreNumOfMaterial): self
    {
        $this->scoreNumOfMaterial = $scoreNumOfMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial
     */
    public function getScoreTypeOfMaterial(): ?string
    {
        return $this->scoreTypeOfMaterial;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListMaterialScoreInfoScoreTypeOfMaterial $scoreTypeOfMaterial
     * @return self
     */
    public function setScoreTypeOfMaterial(?string $scoreTypeOfMaterial): self
    {
        $this->scoreTypeOfMaterial = $scoreTypeOfMaterial;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial
     */
    public function getScoreValueOfMaterial(): ?string
    {
        return $this->scoreValueOfMaterial;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListMaterialScoreInfoScoreValueOfMaterial $scoreValueOfMaterial
     * @return self
     */
    public function setScoreValueOfMaterial(?string $scoreValueOfMaterial): self
    {
        $this->scoreValueOfMaterial = $scoreValueOfMaterial;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->lowQualityMaterialList !== null) {
            $result['low_quality_material_list'] = $this->lowQualityMaterialList;
        }
        if ($this->materialAdvice !== null) {
            $result['material_advice'] = $this->materialAdvice;
        }
        if ($this->scoreNumOfMaterial !== null) {
            $result['score_num_of_material'] = $this->scoreNumOfMaterial;
        }
        if ($this->scoreTypeOfMaterial !== null) {
            $result['score_type_of_material'] = $this->scoreTypeOfMaterial;
        }
        if ($this->scoreValueOfMaterial !== null) {
            $result['score_value_of_material'] = $this->scoreValueOfMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['low_quality_material_list'] ?? null) !== null && is_array($v)) {
            $obj->lowQualityMaterialList = \Oceanengine\Models\PromotionListV30ResponseDataListInnerMaterialScoreInfoLowQualityMaterialList::fromArray($v);
        }
        if (($v = $data['material_advice'] ?? null) !== null && is_array($v)) {
            $obj->materialAdvice = $v;
        }
        if (($v = $data['score_num_of_material'] ?? null) !== null) {
            $obj->scoreNumOfMaterial = (string) $v;
        }
        if (($v = $data['score_type_of_material'] ?? null) !== null) {
            $obj->scoreTypeOfMaterial = (string) $v;
        }
        if (($v = $data['score_value_of_material'] ?? null) !== null) {
            $obj->scoreValueOfMaterial = (string) $v;
        }
        return $obj;
    }
}
