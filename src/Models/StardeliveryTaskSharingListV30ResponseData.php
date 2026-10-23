<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskSharingListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataSharingAdvertiserInfoInner[]
     */
    protected ?array $sharingAdvertiserInfo = null;

    /**
     * @return \Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataSharingAdvertiserInfoInner[]
     */
    public function getSharingAdvertiserInfo(): ?array
    {
        return $this->sharingAdvertiserInfo;
    }

    /**
     * @param \Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataSharingAdvertiserInfoInner[] $sharingAdvertiserInfo
     * @return self
     */
    public function setSharingAdvertiserInfo(?array $sharingAdvertiserInfo): self
    {
        $this->sharingAdvertiserInfo = $sharingAdvertiserInfo;
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
        if ($this->sharingAdvertiserInfo !== null) {
            $result['sharing_advertiser_info'] = $this->sharingAdvertiserInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['sharing_advertiser_info'] ?? null) !== null && is_array($v)) {
            $obj->sharingAdvertiserInfo = array_map(fn ($vv) => \Oceanengine\Models\StardeliveryTaskSharingListV30ResponseDataSharingAdvertiserInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
