<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniAwemeAuthorizedGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataAwemeIdListInner[]
     */
    protected ?array $awemeIdList = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataAwemeIdListInner[]
     */
    public function getAwemeIdList(): ?array
    {
        return $this->awemeIdList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataAwemeIdListInner[] $awemeIdList
     * @return self
     */
    public function setAwemeIdList(?array $awemeIdList): self
    {
        $this->awemeIdList = $awemeIdList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataPageInfo $pageInfo): self
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
            $obj->awemeIdList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataAwemeIdListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanUniAwemeAuthorizedGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
