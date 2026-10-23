<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryInvoiceV2ResponseDataInvoiceInfoListInner[]
     */
    protected ?array $invoiceInfoList = null;

    /**
     * @var \Oceanengine\Models\QueryInvoiceV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QueryInvoiceV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\QueryInvoiceV2ResponseDataInvoiceInfoListInner[]
     */
    public function getInvoiceInfoList(): ?array
    {
        return $this->invoiceInfoList;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceV2ResponseDataInvoiceInfoListInner[] $invoiceInfoList
     * @return self
     */
    public function setInvoiceInfoList(?array $invoiceInfoList): self
    {
        $this->invoiceInfoList = $invoiceInfoList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QueryInvoiceV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QueryInvoiceV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QueryInvoiceV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->invoiceInfoList !== null) {
            $result['invoice_info_list'] = $this->invoiceInfoList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['invoice_info_list'] ?? null) !== null && is_array($v)) {
            $obj->invoiceInfoList = array_map(fn ($vv) => \Oceanengine\Models\QueryInvoiceV2ResponseDataInvoiceInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QueryInvoiceV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
