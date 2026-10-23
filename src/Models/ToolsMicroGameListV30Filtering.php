<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMicroGameListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsMicroGameListV30FilteringAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameListV30FilteringCreateTime
     */
    protected ?\Oceanengine\Models\ToolsMicroGameListV30FilteringCreateTime $createTime = null;

    /**
     * @var string
     */
    protected ?string $searchKey = null;

    /**
     * @var \Oceanengine\Models\ToolsMicroGameListV30FilteringSearchType
     */
    protected ?string $searchType = null;

    /**
     * @return \Oceanengine\Models\ToolsMicroGameListV30FilteringAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameListV30FilteringAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsMicroGameListV30FilteringCreateTime
     */
    public function getCreateTime(): ?\Oceanengine\Models\ToolsMicroGameListV30FilteringCreateTime
    {
        return $this->createTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameListV30FilteringCreateTime $createTime
     * @return self
     */
    public function setCreateTime(?\Oceanengine\Models\ToolsMicroGameListV30FilteringCreateTime $createTime): self
    {
        $this->createTime = $createTime;
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
     * @return \Oceanengine\Models\ToolsMicroGameListV30FilteringSearchType
     */
    public function getSearchType(): ?string
    {
        return $this->searchType;
    }

    /**
     * @param \Oceanengine\Models\ToolsMicroGameListV30FilteringSearchType $searchType
     * @return self
     */
    public function setSearchType(?string $searchType): self
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->searchKey !== null) {
            $result['search_key'] = $this->searchKey;
        }
        if ($this->searchType !== null) {
            $result['search_type'] = $this->searchType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null && is_array($v)) {
            $obj->createTime = \Oceanengine\Models\ToolsMicroGameListV30FilteringCreateTime::fromArray($v);
        }
        if (($v = $data['search_key'] ?? null) !== null) {
            $obj->searchKey = (string) $v;
        }
        if (($v = $data['search_type'] ?? null) !== null) {
            $obj->searchType = (string) $v;
        }
        return $obj;
    }
}
