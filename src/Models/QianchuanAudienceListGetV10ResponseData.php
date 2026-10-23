<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudienceListGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataAudiencesListInner[]
     */
    protected ?array $audiencesList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataAudiencesListInner[]
     */
    public function getAudiencesList(): ?array
    {
        return $this->audiencesList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataAudiencesListInner[] $audiencesList
     * @return self
     */
    public function setAudiencesList(?array $audiencesList): self
    {
        $this->audiencesList = $audiencesList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataPageInfo $pageInfo): self
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
        if ($this->audiencesList !== null) {
            $result['audiences_list'] = $this->audiencesList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audiences_list'] ?? null) !== null && is_array($v)) {
            $obj->audiencesList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataAudiencesListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanAudienceListGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
