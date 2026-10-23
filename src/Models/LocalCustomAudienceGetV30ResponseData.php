<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalCustomAudienceGetV30ResponseData implements \JsonSerializable
{
    /**
     * 人群包列表
     * @var \Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataCustomAudienceListInner[]
     */
    protected ?array $customAudienceList = null;

    /**
     * @var \Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 人群包列表
     * @return \Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataCustomAudienceListInner[]
     */
    public function getCustomAudienceList(): ?array
    {
        return $this->customAudienceList;
    }

    /**
     * 人群包列表
     * @param \Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataCustomAudienceListInner[] $customAudienceList
     * @return self
     */
    public function setCustomAudienceList(?array $customAudienceList): self
    {
        $this->customAudienceList = $customAudienceList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->customAudienceList !== null) {
            $result['custom_audience_list'] = $this->customAudienceList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['custom_audience_list'] ?? null) !== null && is_array($v)) {
            $obj->customAudienceList = array_map(fn ($vv) => \Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataCustomAudienceListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\LocalCustomAudienceGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
