<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInner[]
     */
    protected ?array $data = null;

    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataPagination
     */
    protected ?\Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataPagination $pagination = null;

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataPagination $pagination): self
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataDataInner::fromArray($vv), $v);
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\ToolsHotMaterialDeriveListV30ResponseDataPagination::fromArray($v);
        }
        return $obj;
    }
}
