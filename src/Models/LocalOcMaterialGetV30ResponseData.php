<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalOcMaterialGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalOcMaterialGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterial
     */
    protected ?\Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterial $proceduralMaterial = null;

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalOcMaterialGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalOcMaterialGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterial
     */
    public function getProceduralMaterial(): ?\Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterial
    {
        return $this->proceduralMaterial;
    }

    /**
     * @param \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterial $proceduralMaterial
     * @return self
     */
    public function setProceduralMaterial(?\Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterial $proceduralMaterial): self
    {
        $this->proceduralMaterial = $proceduralMaterial;
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
        if ($this->proceduralMaterial !== null) {
            $result['procedural_material'] = $this->proceduralMaterial;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['procedural_material'] ?? null) !== null && is_array($v)) {
            $obj->proceduralMaterial = \Oceanengine\Models\LocalOcMaterialGetV30ResponseDataProceduralMaterial::fromArray($v);
        }
        return $obj;
    }
}
