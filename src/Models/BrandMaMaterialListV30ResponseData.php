<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaMaterialListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInner[]
     */
    protected ?array $materials = null;

    /**
     * @var \Oceanengine\Models\BrandMaMaterialListV30ResponseDataPageResp
     */
    protected ?\Oceanengine\Models\BrandMaMaterialListV30ResponseDataPageResp $pageResp = null;

    /**
     * @return \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInner[]
     */
    public function getMaterials(): ?array
    {
        return $this->materials;
    }

    /**
     * @param \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInner[] $materials
     * @return self
     */
    public function setMaterials(?array $materials): self
    {
        $this->materials = $materials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaMaterialListV30ResponseDataPageResp
     */
    public function getPageResp(): ?\Oceanengine\Models\BrandMaMaterialListV30ResponseDataPageResp
    {
        return $this->pageResp;
    }

    /**
     * @param \Oceanengine\Models\BrandMaMaterialListV30ResponseDataPageResp $pageResp
     * @return self
     */
    public function setPageResp(?\Oceanengine\Models\BrandMaMaterialListV30ResponseDataPageResp $pageResp): self
    {
        $this->pageResp = $pageResp;
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
        if ($this->pageResp !== null) {
            $result['page_resp'] = $this->pageResp;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['materials'] ?? null) !== null && is_array($v)) {
            $obj->materials = array_map(fn ($vv) => \Oceanengine\Models\BrandMaMaterialListV30ResponseDataMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_resp'] ?? null) !== null && is_array($v)) {
            $obj->pageResp = \Oceanengine\Models\BrandMaMaterialListV30ResponseDataPageResp::fromArray($v);
        }
        return $obj;
    }
}
