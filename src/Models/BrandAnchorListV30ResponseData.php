<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAnchorListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandAnchorListV30ResponseDataAnchorListInner[]
     */
    protected ?array $anchorList = null;

    /**
     * @var \Oceanengine\Models\BrandAnchorListV30ResponseDataPage
     */
    protected ?\Oceanengine\Models\BrandAnchorListV30ResponseDataPage $page = null;

    /**
     * @return \Oceanengine\Models\BrandAnchorListV30ResponseDataAnchorListInner[]
     */
    public function getAnchorList(): ?array
    {
        return $this->anchorList;
    }

    /**
     * @param \Oceanengine\Models\BrandAnchorListV30ResponseDataAnchorListInner[] $anchorList
     * @return self
     */
    public function setAnchorList(?array $anchorList): self
    {
        $this->anchorList = $anchorList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAnchorListV30ResponseDataPage
     */
    public function getPage(): ?\Oceanengine\Models\BrandAnchorListV30ResponseDataPage
    {
        return $this->page;
    }

    /**
     * @param \Oceanengine\Models\BrandAnchorListV30ResponseDataPage $page
     * @return self
     */
    public function setPage(?\Oceanengine\Models\BrandAnchorListV30ResponseDataPage $page): self
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
        if ($this->anchorList !== null) {
            $result['anchor_list'] = $this->anchorList;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_list'] ?? null) !== null && is_array($v)) {
            $obj->anchorList = array_map(fn ($vv) => \Oceanengine\Models\BrandAnchorListV30ResponseDataAnchorListInner::fromArray($vv), $v);
        }
        if (($v = $data['page'] ?? null) !== null && is_array($v)) {
            $obj->page = \Oceanengine\Models\BrandAnchorListV30ResponseDataPage::fromArray($v);
        }
        return $obj;
    }
}
