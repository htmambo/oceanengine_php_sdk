<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdQuotaGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaFeed
     */
    protected ?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaFeed $quotaFeed = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearch
     */
    protected ?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearch $quotaSearch = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaFeed
     */
    public function getQuotaFeed(): ?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaFeed
    {
        return $this->quotaFeed;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaFeed $quotaFeed
     * @return self
     */
    public function setQuotaFeed(?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaFeed $quotaFeed): self
    {
        $this->quotaFeed = $quotaFeed;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearch
     */
    public function getQuotaSearch(): ?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearch
    {
        return $this->quotaSearch;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearch $quotaSearch
     * @return self
     */
    public function setQuotaSearch(?\Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearch $quotaSearch): self
    {
        $this->quotaSearch = $quotaSearch;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->quotaFeed !== null) {
            $result['quota_feed'] = $this->quotaFeed;
        }
        if ($this->quotaSearch !== null) {
            $result['quota_search'] = $this->quotaSearch;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['quota_feed'] ?? null) !== null && is_array($v)) {
            $obj->quotaFeed = \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaFeed::fromArray($v);
        }
        if (($v = $data['quota_search'] ?? null) !== null && is_array($v)) {
            $obj->quotaSearch = \Oceanengine\Models\QianchuanAdQuotaGetV10ResponseDataQuotaSearch::fromArray($v);
        }
        return $obj;
    }
}
