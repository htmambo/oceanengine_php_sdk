<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderDemanderGetAuthorBindInfoV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataAuthorInfoInner[]
     */
    protected ?array $authorInfo = null;

    /**
     * @var \Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataPagination
     */
    protected ?\Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataPagination $pagination = null;

    /**
     * @return \Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataAuthorInfoInner[]
     */
    public function getAuthorInfo(): ?array
    {
        return $this->authorInfo;
    }

    /**
     * @param \Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataAuthorInfoInner[] $authorInfo
     * @return self
     */
    public function setAuthorInfo(?array $authorInfo): self
    {
        $this->authorInfo = $authorInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataPagination $pagination): self
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
        if ($this->authorInfo !== null) {
            $result['author_info'] = $this->authorInfo;
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_info'] ?? null) !== null && is_array($v)) {
            $obj->authorInfo = array_map(fn ($vv) => \Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataAuthorInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\StarDemanderDemanderGetAuthorBindInfoV2ResponseDataPagination::fromArray($v);
        }
        return $obj;
    }
}
