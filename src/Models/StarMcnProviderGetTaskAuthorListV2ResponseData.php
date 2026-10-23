<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskAuthorListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInner[]
     */
    protected ?array $authorList = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataPagination
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataPagination $pagination = null;

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInner[]
     */
    public function getAuthorList(): ?array
    {
        return $this->authorList;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInner[] $authorList
     * @return self
     */
    public function setAuthorList(?array $authorList): self
    {
        $this->authorList = $authorList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataPagination $pagination): self
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
        if ($this->authorList !== null) {
            $result['author_list'] = $this->authorList;
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_list'] ?? null) !== null && is_array($v)) {
            $obj->authorList = array_map(fn ($vv) => \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataAuthorListInner::fromArray($vv), $v);
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\StarMcnProviderGetTaskAuthorListV2ResponseDataPagination::fromArray($v);
        }
        return $obj;
    }
}
