<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnGetContractChallengeAuthorItemListV2V2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInner[]
     */
    protected ?array $data = null;

    /**
     * @var \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataPageInfo $pageInfo): self
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
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataDataInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarMcnGetContractChallengeAuthorItemListV2V2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
