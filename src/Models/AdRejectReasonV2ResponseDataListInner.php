<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdRejectReasonV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdReject
     */
    protected ?\Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdReject $adReject = null;

    /**
     * @var \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerCreativeRejectInner[]
     */
    protected ?array $creativeReject = null;

    /**
     * @var \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerMaterialRejectInner[]
     */
    protected ?array $materialReject = null;

    /**
     * @return \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdReject
     */
    public function getAdReject(): ?\Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdReject
    {
        return $this->adReject;
    }

    /**
     * @param \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdReject $adReject
     * @return self
     */
    public function setAdReject(?\Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdReject $adReject): self
    {
        $this->adReject = $adReject;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerCreativeRejectInner[]
     */
    public function getCreativeReject(): ?array
    {
        return $this->creativeReject;
    }

    /**
     * @param \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerCreativeRejectInner[] $creativeReject
     * @return self
     */
    public function setCreativeReject(?array $creativeReject): self
    {
        $this->creativeReject = $creativeReject;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerMaterialRejectInner[]
     */
    public function getMaterialReject(): ?array
    {
        return $this->materialReject;
    }

    /**
     * @param \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerMaterialRejectInner[] $materialReject
     * @return self
     */
    public function setMaterialReject(?array $materialReject): self
    {
        $this->materialReject = $materialReject;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adReject !== null) {
            $result['ad_reject'] = $this->adReject;
        }
        if ($this->creativeReject !== null) {
            $result['creative_reject'] = $this->creativeReject;
        }
        if ($this->materialReject !== null) {
            $result['material_reject'] = $this->materialReject;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_reject'] ?? null) !== null && is_array($v)) {
            $obj->adReject = \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdReject::fromArray($v);
        }
        if (($v = $data['creative_reject'] ?? null) !== null && is_array($v)) {
            $obj->creativeReject = array_map(fn ($vv) => \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerCreativeRejectInner::fromArray($vv), $v);
        }
        if (($v = $data['material_reject'] ?? null) !== null && is_array($v)) {
            $obj->materialReject = array_map(fn ($vv) => \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerMaterialRejectInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
