<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetail implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30DataBrandListYuntuBrandDetailHasGrassBrand
     */
    protected ?string $hasGrassBrand = null;

    /**
     * 云图品牌id
     * @var int
     */
    protected ?int $outerBrandId = null;

    /**
     * 云图子品牌列表
     * @var \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetailSubBrandDetailsInner[]
     */
    protected ?array $subBrandDetails = null;

    /**
     * @return \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30DataBrandListYuntuBrandDetailHasGrassBrand
     */
    public function getHasGrassBrand(): ?string
    {
        return $this->hasGrassBrand;
    }

    /**
     * @param \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30DataBrandListYuntuBrandDetailHasGrassBrand $hasGrassBrand
     * @return self
     */
    public function setHasGrassBrand(?string $hasGrassBrand): self
    {
        $this->hasGrassBrand = $hasGrassBrand;
        return $this;
    }

    /**
     * 云图品牌id
     * @return int
     */
    public function getOuterBrandId(): ?int
    {
        return $this->outerBrandId;
    }

    /**
     * 云图品牌id
     * @param int $outerBrandId
     * @return self
     */
    public function setOuterBrandId(?int $outerBrandId): self
    {
        $this->outerBrandId = $outerBrandId;
        return $this;
    }

    /**
     * 云图子品牌列表
     * @return \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetailSubBrandDetailsInner[]
     */
    public function getSubBrandDetails(): ?array
    {
        return $this->subBrandDetails;
    }

    /**
     * 云图子品牌列表
     * @param \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetailSubBrandDetailsInner[] $subBrandDetails
     * @return self
     */
    public function setSubBrandDetails(?array $subBrandDetails): self
    {
        $this->subBrandDetails = $subBrandDetails;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->hasGrassBrand !== null) {
            $result['has_grass_brand'] = $this->hasGrassBrand;
        }
        if ($this->outerBrandId !== null) {
            $result['outer_brand_id'] = $this->outerBrandId;
        }
        if ($this->subBrandDetails !== null) {
            $result['sub_brand_details'] = $this->subBrandDetails;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['has_grass_brand'] ?? null) !== null) {
            $obj->hasGrassBrand = (string) $v;
        }
        if (($v = $data['outer_brand_id'] ?? null) !== null) {
            $obj->outerBrandId = (int) $v;
        }
        if (($v = $data['sub_brand_details'] ?? null) !== null && is_array($v)) {
            $obj->subBrandDetails = array_map(fn ($vv) => \Oceanengine\Models\DpaBrandAdvAuthFuzzyGetV30ResponseDataBrandListInnerYuntuBrandDetailSubBrandDetailsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
