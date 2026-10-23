<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderReportGetV10ResponseData implements \JsonSerializable
{
    /**
     * 消耗指标
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataAdListInner[]
     */
    protected ?array $adList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * 消耗指标
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataAdListInner[]
     */
    public function getAdList(): ?array
    {
        return $this->adList;
    }

    /**
     * 消耗指标
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataAdListInner[] $adList
     * @return self
     */
    public function setAdList(?array $adList): self
    {
        $this->adList = $adList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataPageInfo $pageInfo): self
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
            $obj->adList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataAdListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
