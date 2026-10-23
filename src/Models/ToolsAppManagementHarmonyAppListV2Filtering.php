<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementHarmonyAppListV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringPublishTime
     */
    protected ?\Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringPublishTime $publishTime = null;

    /**
     * 搜索关键字 app_id或者应用名称 可以为空，可以传中文/英文，长度不超过50
     * @var string
     */
    protected ?string $searchKey = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringSearchType
     */
    protected ?string $searchType = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringPublishTime
     */
    public function getPublishTime(): ?\Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringPublishTime
    {
        return $this->publishTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringPublishTime $publishTime
     * @return self
     */
    public function setPublishTime(?\Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringPublishTime $publishTime): self
    {
        $this->publishTime = $publishTime;
        return $this;
    }

    /**
     * 搜索关键字 app_id或者应用名称 可以为空，可以传中文/英文，长度不超过50
     * @return string
     */
    public function getSearchKey(): ?string
    {
        return $this->searchKey;
    }

    /**
     * 搜索关键字 app_id或者应用名称 可以为空，可以传中文/英文，长度不超过50
     * @param string $searchKey
     * @return self
     */
    public function setSearchKey(?string $searchKey): self
    {
        $this->searchKey = $searchKey;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringSearchType
     */
    public function getSearchType(): ?string
    {
        return $this->searchType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringSearchType $searchType
     * @return self
     */
    public function setSearchType(?string $searchType): self
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringStatus $status
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
        if (($v = $data['publish_time'] ?? null) !== null && is_array($v)) {
            $obj->publishTime = \Oceanengine\Models\ToolsAppManagementHarmonyAppListV2FilteringPublishTime::fromArray($v);
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
