<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalToolPackListGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalToolPackListGetV30ResponseDataPagination
     */
    protected ?\Oceanengine\Models\LocalToolPackListGetV30ResponseDataPagination $pagination = null;

    /**
     * @var \Oceanengine\Models\LocalToolPackListGetV30ResponseDataToolPackListInner[]
     */
    protected ?array $toolPackList = null;

    /**
     * @return \Oceanengine\Models\LocalToolPackListGetV30ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\LocalToolPackListGetV30ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\LocalToolPackListGetV30ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\LocalToolPackListGetV30ResponseDataPagination $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalToolPackListGetV30ResponseDataToolPackListInner[]
     */
    public function getToolPackList(): ?array
    {
        return $this->toolPackList;
    }

    /**
     * @param \Oceanengine\Models\LocalToolPackListGetV30ResponseDataToolPackListInner[] $toolPackList
     * @return self
     */
    public function setToolPackList(?array $toolPackList): self
    {
        $this->toolPackList = $toolPackList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        if ($this->toolPackList !== null) {
            $result['tool_pack_list'] = $this->toolPackList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\LocalToolPackListGetV30ResponseDataPagination::fromArray($v);
        }
        if (($v = $data['tool_pack_list'] ?? null) !== null && is_array($v)) {
            $obj->toolPackList = array_map(fn ($vv) => \Oceanengine\Models\LocalToolPackListGetV30ResponseDataToolPackListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
