<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaBrandFuzzyGetV30ResponseData implements \JsonSerializable
{
    /**
     * 品牌信息列表
     * @var \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataBrandDetailListInner[]
     */
    protected ?array $brandDetailList = null;

    /**
     * @var \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 品牌信息列表
     * @return \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataBrandDetailListInner[]
     */
    public function getBrandDetailList(): ?array
    {
        return $this->brandDetailList;
    }

    /**
     * 品牌信息列表
     * @param \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataBrandDetailListInner[] $brandDetailList
     * @return self
     */
    public function setBrandDetailList(?array $brandDetailList): self
    {
        $this->brandDetailList = $brandDetailList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandDetailList !== null) {
            $result['brand_detail_list'] = $this->brandDetailList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->brandDetailList = array_map(fn ($vv) => \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataBrandDetailListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\DpaBrandFuzzyGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
