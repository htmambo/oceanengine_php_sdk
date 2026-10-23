<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileMaterialListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileMaterialListV2ResponseDataMaterialsInner[]
     */
    protected ?array $materials = null;

    /**
     * @var \Oceanengine\Models\FileMaterialListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\FileMaterialListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\FileMaterialListV2ResponseDataMaterialsInner[]
     */
    public function getMaterials(): ?array
    {
        return $this->materials;
    }

    /**
     * @param \Oceanengine\Models\FileMaterialListV2ResponseDataMaterialsInner[] $materials
     * @return self
     */
    public function setMaterials(?array $materials): self
    {
        $this->materials = $materials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileMaterialListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\FileMaterialListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\FileMaterialListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\FileMaterialListV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->materials !== null) {
            $result['materials'] = $this->materials;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['materials'] ?? null) !== null && is_array($v)) {
            $obj->materials = array_map(fn ($vv) => \Oceanengine\Models\FileMaterialListV2ResponseDataMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\FileMaterialListV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
