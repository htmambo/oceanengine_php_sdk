<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalReportPromotionGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPromotionListInner[]
     */
    protected ?array $promotionList = null;

    /**
     * @return \Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPromotionListInner[]
     */
    public function getPromotionList(): ?array
    {
        return $this->promotionList;
    }

    /**
     * @param \Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPromotionListInner[] $promotionList
     * @return self
     */
    public function setPromotionList(?array $promotionList): self
    {
        $this->promotionList = $promotionList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->promotionList !== null) {
            $result['promotion_list'] = $this->promotionList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['promotion_list'] ?? null) !== null && is_array($v)) {
            $obj->promotionList = array_map(fn ($vv) => \Oceanengine\Models\LocalReportPromotionGetV30ResponseDataPromotionListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
