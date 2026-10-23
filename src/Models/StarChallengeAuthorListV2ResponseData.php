<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeAuthorListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarChallengeAuthorListV2ResponseDataAuthorListInner[]
     */
    protected ?array $authorList = null;

    /**
     * @var \Oceanengine\Models\StarChallengeAuthorListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarChallengeAuthorListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\StarChallengeAuthorListV2ResponseDataAuthorListInner[]
     */
    public function getAuthorList(): ?array
    {
        return $this->authorList;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeAuthorListV2ResponseDataAuthorListInner[] $authorList
     * @return self
     */
    public function setAuthorList(?array $authorList): self
    {
        $this->authorList = $authorList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeAuthorListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarChallengeAuthorListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeAuthorListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarChallengeAuthorListV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->authorList !== null) {
            $result['author_list'] = $this->authorList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_list'] ?? null) !== null && is_array($v)) {
            $obj->authorList = array_map(fn ($vv) => \Oceanengine\Models\StarChallengeAuthorListV2ResponseDataAuthorListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarChallengeAuthorListV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
