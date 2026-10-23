<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundDetailGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataRefundDetailListInner[]
     */
    protected ?array $refundDetailList = null;

    /**
     * @return \Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataRefundDetailListInner[]
     */
    public function getRefundDetailList(): ?array
    {
        return $this->refundDetailList;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataRefundDetailListInner[] $refundDetailList
     * @return self
     */
    public function setRefundDetailList(?array $refundDetailList): self
    {
        $this->refundDetailList = $refundDetailList;
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
        if ($this->refundDetailList !== null) {
            $result['refund_detail_list'] = $this->refundDetailList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['refund_detail_list'] ?? null) !== null && is_array($v)) {
            $obj->refundDetailList = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueRefundDetailGetV2ResponseDataRefundDetailListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
