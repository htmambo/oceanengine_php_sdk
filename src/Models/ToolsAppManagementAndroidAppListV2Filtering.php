<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementAndroidAppListV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringCreateTime
     */
    protected ?\Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringCreateTime $createTime = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringPublishTime
     */
    protected ?\Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringPublishTime $publishTime = null;

    /**
     * @var string
     */
    protected ?string $searchKey = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringSearchType
     */
    protected ?string $searchType = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringCreateTime
     */
    public function getCreateTime(): ?\Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringCreateTime
    {
        return $this->createTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringCreateTime $createTime
     * @return self
     */
    public function setCreateTime(?\Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringCreateTime $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringPublishTime
     */
    public function getPublishTime(): ?\Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringPublishTime
    {
        return $this->publishTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringPublishTime $publishTime
     * @return self
     */
    public function setPublishTime(?\Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringPublishTime $publishTime): self
    {
        $this->publishTime = $publishTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchKey(): ?string
    {
        return $this->searchKey;
    }

    /**
     * @param string $searchKey
     * @return self
     */
    public function setSearchKey(?string $searchKey): self
    {
        $this->searchKey = $searchKey;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringSearchType
     */
    public function getSearchType(): ?string
    {
        return $this->searchType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringSearchType $searchType
     * @return self
     */
    public function setSearchType(?string $searchType): self
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->publishTime !== null) {
            $result['publish_time'] = $this->publishTime;
        }
        if ($this->searchKey !== null) {
            $result['search_key'] = $this->searchKey;
        }
        if ($this->searchType !== null) {
            $result['search_type'] = $this->searchType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null && is_array($v)) {
            $obj->createTime = \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringCreateTime::fromArray($v);
        }
        if (($v = $data['publish_time'] ?? null) !== null && is_array($v)) {
            $obj->publishTime = \Oceanengine\Models\ToolsAppManagementAndroidAppListV2FilteringPublishTime::fromArray($v);
        }
        if (($v = $data['search_key'] ?? null) !== null) {
            $obj->searchKey = (string) $v;
        }
        if (($v = $data['search_type'] ?? null) !== null) {
            $obj->searchType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
