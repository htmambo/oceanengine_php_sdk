<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentCompanyBrandListQueryV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInner[]
     */
    protected ?array $data = null;

    /**
     * @var \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataPageInfo $pageInfo): self
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
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataDataInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\AgentCompanyBrandListQueryV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
