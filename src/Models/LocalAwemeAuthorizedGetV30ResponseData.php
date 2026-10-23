<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalAwemeAuthorizedGetV30ResponseData implements \JsonSerializable
{
    /**
     * 抖音号列表
     * @var \Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataAwemeIdListInner[]
     */
    protected ?array $awemeIdList = null;

    /**
     * @var \Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 抖音号列表
     * @return \Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataAwemeIdListInner[]
     */
    public function getAwemeIdList(): ?array
    {
        return $this->awemeIdList;
    }

    /**
     * 抖音号列表
     * @param \Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataAwemeIdListInner[] $awemeIdList
     * @return self
     */
    public function setAwemeIdList(?array $awemeIdList): self
    {
        $this->awemeIdList = $awemeIdList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->awemeIdList !== null) {
            $result['aweme_id_list'] = $this->awemeIdList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id_list'] ?? null) !== null && is_array($v)) {
            $obj->awemeIdList = array_map(fn ($vv) => \Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataAwemeIdListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalAwemeAuthorizedGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
