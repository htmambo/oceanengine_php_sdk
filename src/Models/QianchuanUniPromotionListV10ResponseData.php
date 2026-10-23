<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionListV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInner[]
     */
    protected ?array $adList = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInner[]
     */
    public function getAdList(): ?array
    {
        return $this->adList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInner[] $adList
     * @return self
     */
    public function setAdList(?array $adList): self
    {
        $this->adList = $adList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataPageInfo $pageInfo): self
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
            $obj->adList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataAdListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanUniPromotionListV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
