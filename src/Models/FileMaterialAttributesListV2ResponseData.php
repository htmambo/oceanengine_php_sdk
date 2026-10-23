<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileMaterialAttributesListV2ResponseData implements \JsonSerializable
{
    /**
     * 素材及素材属性列表
     * @var \Oceanengine\Models\FileMaterialAttributesListV2ResponseDataMaterialsInner[]
     */
    protected ?array $materials = null;

    /**
     * @var \Oceanengine\Models\FileMaterialAttributesListV2ResponseDataPage
     */
    protected ?\Oceanengine\Models\FileMaterialAttributesListV2ResponseDataPage $page = null;

    /**
     * 素材及素材属性列表
     * @return \Oceanengine\Models\FileMaterialAttributesListV2ResponseDataMaterialsInner[]
     */
    public function getMaterials(): ?array
    {
        return $this->materials;
    }

    /**
     * 素材及素材属性列表
     * @param \Oceanengine\Models\FileMaterialAttributesListV2ResponseDataMaterialsInner[] $materials
     * @return self
     */
    public function setMaterials(?array $materials): self
    {
        $this->materials = $materials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileMaterialAttributesListV2ResponseDataPage
     */
    public function getPage(): ?\Oceanengine\Models\FileMaterialAttributesListV2ResponseDataPage
    {
        return $this->page;
    }

    /**
     * @param \Oceanengine\Models\FileMaterialAttributesListV2ResponseDataPage $page
     * @return self
     */
    public function setPage(?\Oceanengine\Models\FileMaterialAttributesListV2ResponseDataPage $page): self
    {
        $this->page = $page;
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
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['materials'] ?? null) !== null && is_array($v)) {
            $obj->materials = array_map(fn ($vv) => \Oceanengine\Models\FileMaterialAttributesListV2ResponseDataMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['page'] ?? null) !== null && is_array($v)) {
            $obj->page = \Oceanengine\Models\FileMaterialAttributesListV2ResponseDataPage::fromArray($v);
        }
        return $obj;
    }
}
