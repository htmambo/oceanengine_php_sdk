<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityScoreDisposalInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 处置信息
     * @var \Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataDisposalInfoListInner[]
     */
    protected ?array $disposalInfoList = null;

    /**
     * @var \Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 处置信息
     * @return \Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataDisposalInfoListInner[]
     */
    public function getDisposalInfoList(): ?array
    {
        return $this->disposalInfoList;
    }

    /**
     * 处置信息
     * @param \Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataDisposalInfoListInner[] $disposalInfoList
     * @return self
     */
    public function setDisposalInfoList(?array $disposalInfoList): self
    {
        $this->disposalInfoList = $disposalInfoList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->disposalInfoList !== null) {
            $result['disposal_info_list'] = $this->disposalInfoList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['disposal_info_list'] ?? null) !== null && is_array($v)) {
            $obj->disposalInfoList = array_map(fn ($vv) => \Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataDisposalInfoListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\SecurityScoreDisposalInfoGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
