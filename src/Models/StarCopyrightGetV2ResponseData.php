<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarCopyrightGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarCopyrightGetV2ResponseDataNovelListInner[]
     */
    protected ?array $novelList = null;

    /**
     * @var \Oceanengine\Models\StarCopyrightGetV2ResponseDataPagination
     */
    protected ?\Oceanengine\Models\StarCopyrightGetV2ResponseDataPagination $pagination = null;

    /**
     * @return \Oceanengine\Models\StarCopyrightGetV2ResponseDataNovelListInner[]
     */
    public function getNovelList(): ?array
    {
        return $this->novelList;
    }

    /**
     * @param \Oceanengine\Models\StarCopyrightGetV2ResponseDataNovelListInner[] $novelList
     * @return self
     */
    public function setNovelList(?array $novelList): self
    {
        $this->novelList = $novelList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarCopyrightGetV2ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\StarCopyrightGetV2ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\StarCopyrightGetV2ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\StarCopyrightGetV2ResponseDataPagination $pagination): self
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
        if ($this->novelList !== null) {
            $result['novel_list'] = $this->novelList;
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['novel_list'] ?? null) !== null && is_array($v)) {
            $obj->novelList = array_map(fn ($vv) => \Oceanengine\Models\StarCopyrightGetV2ResponseDataNovelListInner::fromArray($vv), $v);
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\StarCopyrightGetV2ResponseDataPagination::fromArray($v);
        }
        return $obj;
    }
}
