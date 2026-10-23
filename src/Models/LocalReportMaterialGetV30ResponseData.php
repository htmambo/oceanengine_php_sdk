<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalReportMaterialGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalReportMaterialGetV30ResponseDataMaterialListInner[]
     */
    protected ?array $materialList = null;

    /**
     * @var \Oceanengine\Models\LocalReportMaterialGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalReportMaterialGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\LocalReportMaterialGetV30ResponseDataMaterialListInner[]
     */
    public function getMaterialList(): ?array
    {
        return $this->materialList;
    }

    /**
     * @param \Oceanengine\Models\LocalReportMaterialGetV30ResponseDataMaterialListInner[] $materialList
     * @return self
     */
    public function setMaterialList(?array $materialList): self
    {
        $this->materialList = $materialList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportMaterialGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalReportMaterialGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalReportMaterialGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalReportMaterialGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->materialList !== null) {
            $result['material_list'] = $this->materialList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['material_list'] ?? null) !== null && is_array($v)) {
            $obj->materialList = array_map(fn ($vv) => \Oceanengine\Models\LocalReportMaterialGetV30ResponseDataMaterialListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalReportMaterialGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
