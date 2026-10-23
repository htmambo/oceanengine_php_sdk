<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserFundTransactionGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataPageInfo $pageInfo): self
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\AdvertiserFundTransactionGetV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
