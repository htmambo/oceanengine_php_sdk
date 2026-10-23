<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanMaterialAdGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInner[]
     */
    protected ?array $adList = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInner[]
     */
    public function getAdList(): ?array
    {
        return $this->adList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInner[] $adList
     * @return self
     */
    public function setAdList(?array $adList): self
    {
        $this->adList = $adList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataPageInfo $pageInfo): self
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
        if ($this->adList !== null) {
            $result['ad_list'] = $this->adList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_list'] ?? null) !== null && is_array($v)) {
            $obj->adList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataAdListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanMaterialAdGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
