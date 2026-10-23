<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletDailyStatGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 日流水列表信息
     * @var \Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * @return \Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 日流水列表信息
     * @return \Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * 日流水列表信息
     * @param \Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataResultsInner[] $results
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
            $obj->pageInfo = \Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['results'] ?? null) !== null && is_array($v)) {
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletDailyStatGetV30ResponseDataResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
