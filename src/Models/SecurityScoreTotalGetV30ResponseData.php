<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityScoreTotalGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 积分详情
     * @var \Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataScoreInfoListInner[]
     */
    protected ?array $scoreInfoList = null;

    /**
     * @return \Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 积分详情
     * @return \Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataScoreInfoListInner[]
     */
    public function getScoreInfoList(): ?array
    {
        return $this->scoreInfoList;
    }

    /**
     * 积分详情
     * @param \Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataScoreInfoListInner[] $scoreInfoList
     * @return self
     */
    public function setScoreInfoList(?array $scoreInfoList): self
    {
        $this->scoreInfoList = $scoreInfoList;
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
        if ($this->scoreInfoList !== null) {
            $result['score_info_list'] = $this->scoreInfoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['score_info_list'] ?? null) !== null && is_array($v)) {
            $obj->scoreInfoList = array_map(fn ($vv) => \Oceanengine\Models\SecurityScoreTotalGetV30ResponseDataScoreInfoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
