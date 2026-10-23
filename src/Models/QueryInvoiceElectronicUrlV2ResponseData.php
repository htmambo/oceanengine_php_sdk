<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceElectronicUrlV2ResponseData implements \JsonSerializable
{
    /**
     * 数电发票下载链接
     * @var \Oceanengine\Models\QueryInvoiceElectronicUrlV2ResponseDataUrlListInner[]
     */
    protected ?array $urlList = null;

    /**
     * 数电发票下载链接
     * @return \Oceanengine\Models\QueryInvoiceElectronicUrlV2ResponseDataUrlListInner[]
     */
    public function getUrlList(): ?array
    {
        return $this->urlList;
    }

    /**
     * 数电发票下载链接
     * @param \Oceanengine\Models\QueryInvoiceElectronicUrlV2ResponseDataUrlListInner[] $urlList
     * @return self
     */
    public function setUrlList(?array $urlList): self
    {
        $this->urlList = $urlList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->urlList !== null) {
            $result['url_list'] = $this->urlList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['url_list'] ?? null) !== null && is_array($v)) {
            $obj->urlList = array_map(fn ($vv) => \Oceanengine\Models\QueryInvoiceElectronicUrlV2ResponseDataUrlListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
