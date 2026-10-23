<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryInvoiceElectronicUrlSelfV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QueryInvoiceElectronicUrlSelfV2ResponseDataUrlListInner[]
     */
    protected ?array $urlList = null;

    /**
     * @return \Oceanengine\Models\QueryInvoiceElectronicUrlSelfV2ResponseDataUrlListInner[]
     */
    public function getUrlList(): ?array
    {
        return $this->urlList;
    }

    /**
     * @param \Oceanengine\Models\QueryInvoiceElectronicUrlSelfV2ResponseDataUrlListInner[] $urlList
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
            $obj->urlList = array_map(fn ($vv) => \Oceanengine\Models\QueryInvoiceElectronicUrlSelfV2ResponseDataUrlListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
