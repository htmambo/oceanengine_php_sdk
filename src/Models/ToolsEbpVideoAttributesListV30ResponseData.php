<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpVideoAttributesListV30ResponseData implements \JsonSerializable
{
    /**
     * 素材及素材属性列表
     * @var \Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataMaterialsInner[]
     */
    protected ?array $materials = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataPage
     */
    protected ?\Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataPage $page = null;

    /**
     * 素材及素材属性列表
     * @return \Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataMaterialsInner[]
     */
    public function getMaterials(): ?array
    {
        return $this->materials;
    }

    /**
     * 素材及素材属性列表
     * @param \Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataMaterialsInner[] $materials
     * @return self
     */
    public function setMaterials(?array $materials): self
    {
        $this->materials = $materials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataPage
     */
    public function getPage(): ?\Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataPage
    {
        return $this->page;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataPage $page
     * @return self
     */
    public function setPage(?\Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataPage $page): self
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
            $obj->materials = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['page'] ?? null) !== null && is_array($v)) {
            $obj->page = \Oceanengine\Models\ToolsEbpVideoAttributesListV30ResponseDataPage::fromArray($v);
        }
        return $obj;
    }
}
