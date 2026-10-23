<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvBiddingListQueryV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataDataInner[]
     */
    protected ?array $data = null;

    /**
     * @var \Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataDataInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\AgentAdvBiddingListQueryV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
