<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeRejectReasonV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var \Oceanengine\Models\CreativeRejectReasonV2ResponseDataListInnerMaterialRejectInner[]
     */
    protected ?array $materialReject = null;

    /**
     * @var \Oceanengine\Models\CreativeRejectReasonV2ResponseDataListInnerRejectDataInner[]
     */
    protected ?array $rejectData = null;

    /**
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeRejectReasonV2ResponseDataListInnerMaterialRejectInner[]
     */
    public function getMaterialReject(): ?array
    {
        return $this->materialReject;
    }

    /**
     * @param \Oceanengine\Models\CreativeRejectReasonV2ResponseDataListInnerMaterialRejectInner[] $materialReject
     * @return self
     */
    public function setMaterialReject(?array $materialReject): self
    {
        $this->materialReject = $materialReject;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeRejectReasonV2ResponseDataListInnerRejectDataInner[]
     */
    public function getRejectData(): ?array
    {
        return $this->rejectData;
    }

    /**
     * @param \Oceanengine\Models\CreativeRejectReasonV2ResponseDataListInnerRejectDataInner[] $rejectData
     * @return self
     */
    public function setRejectData(?array $rejectData): self
    {
        $this->rejectData = $rejectData;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->materialReject !== null) {
            $result['material_reject'] = $this->materialReject;
        }
        if ($this->rejectData !== null) {
            $result['reject_data'] = $this->rejectData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['material_reject'] ?? null) !== null && is_array($v)) {
            $obj->materialReject = array_map(fn ($vv) => \Oceanengine\Models\CreativeRejectReasonV2ResponseDataListInnerMaterialRejectInner::fromArray($vv), $v);
        }
        if (($v = $data['reject_data'] ?? null) !== null && is_array($v)) {
            $obj->rejectData = array_map(fn ($vv) => \Oceanengine\Models\CreativeRejectReasonV2ResponseDataListInnerRejectDataInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
