<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletTransactionDetailGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 流水明细结果
     * @var \Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * @return \Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 流水明细结果
     * @return \Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * 流水明细结果
     * @param \Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataResultsInner[] $results
     * @return self
     */
    public function setResults(?array $results): self
    {
        $this->results = $results;
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
        if ($this->results !== null) {
            $result['results'] = $this->results;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['results'] ?? null) !== null && is_array($v)) {
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletTransactionDetailGetV30ResponseDataResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
