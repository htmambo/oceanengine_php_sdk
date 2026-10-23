<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RejectMaterialAiRepairGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataRepairMaterialInfoInner[]
     */
    protected ?array $repairMaterialInfo = null;

    /**
     * @return \Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataRepairMaterialInfoInner[]
     */
    public function getRepairMaterialInfo(): ?array
    {
        return $this->repairMaterialInfo;
    }

    /**
     * @param \Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataRepairMaterialInfoInner[] $repairMaterialInfo
     * @return self
     */
    public function setRepairMaterialInfo(?array $repairMaterialInfo): self
    {
        $this->repairMaterialInfo = $repairMaterialInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->repairMaterialInfo !== null) {
            $result['repair_material_info'] = $this->repairMaterialInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['repair_material_info'] ?? null) !== null && is_array($v)) {
            $obj->repairMaterialInfo = array_map(fn ($vv) => \Oceanengine\Models\RejectMaterialAiRepairGetV30ResponseDataRepairMaterialInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
