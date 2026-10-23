<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FilePlayableListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FilePlayableListV30ResponseDataMaterialsInner[]
     */
    protected ?array $materials = null;

    /**
     * @var \Oceanengine\Models\FilePlayableListV30ResponseDataPagination
     */
    protected ?\Oceanengine\Models\FilePlayableListV30ResponseDataPagination $pagination = null;

    /**
     * @return \Oceanengine\Models\FilePlayableListV30ResponseDataMaterialsInner[]
     */
    public function getMaterials(): ?array
    {
        return $this->materials;
    }

    /**
     * @param \Oceanengine\Models\FilePlayableListV30ResponseDataMaterialsInner[] $materials
     * @return self
     */
    public function setMaterials(?array $materials): self
    {
        $this->materials = $materials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FilePlayableListV30ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\FilePlayableListV30ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\FilePlayableListV30ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\FilePlayableListV30ResponseDataPagination $pagination): self
    {
        $this->pagination = $pagination;
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
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['materials'] ?? null) !== null && is_array($v)) {
            $obj->materials = array_map(fn ($vv) => \Oceanengine\Models\FilePlayableListV30ResponseDataMaterialsInner::fromArray($vv), $v);
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\FilePlayableListV30ResponseDataPagination::fromArray($v);
        }
        return $obj;
    }
}
