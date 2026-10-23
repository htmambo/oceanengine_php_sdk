<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserFundGrantTransactionGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2ResponseDataPageInfoInner[]
     */
    protected ?array $pageInfo = null;

    /**
     * @return \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2ResponseDataPageInfoInner[]
     */
    public function getPageInfo(): ?array
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2ResponseDataPageInfoInner[] $pageInfo
     * @return self
     */
    public function setPageInfo(?array $pageInfo): self
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
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2ResponseDataPageInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
