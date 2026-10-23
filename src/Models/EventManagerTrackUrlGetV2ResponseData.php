<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EventManagerTrackUrlGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 监测链接组信息
     * @var \Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataTrackUrlGroupsInner[]
     */
    protected ?array $trackUrlGroups = null;

    /**
     * @return \Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * 监测链接组信息
     * @return \Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataTrackUrlGroupsInner[]
     */
    public function getTrackUrlGroups(): ?array
    {
        return $this->trackUrlGroups;
    }

    /**
     * 监测链接组信息
     * @param \Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataTrackUrlGroupsInner[] $trackUrlGroups
     * @return self
     */
    public function setTrackUrlGroups(?array $trackUrlGroups): self
    {
        $this->trackUrlGroups = $trackUrlGroups;
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
        if ($this->trackUrlGroups !== null) {
            $result['track_url_groups'] = $this->trackUrlGroups;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['track_url_groups'] ?? null) !== null && is_array($v)) {
            $obj->trackUrlGroups = array_map(fn ($vv) => \Oceanengine\Models\EventManagerTrackUrlGetV2ResponseDataTrackUrlGroupsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
