<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsWechatGameListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30FilteringAssetStatus
     */
    protected ?string $assetStatus = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30FilteringAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30FilteringCreateTime
     */
    protected ?\Oceanengine\Models\ToolsWechatGameListV30FilteringCreateTime $createTime = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsWechatGameListV30FilteringSearchType
     */
    protected ?string $searchType = null;

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30FilteringAssetStatus
     */
    public function getAssetStatus(): ?string
    {
        return $this->assetStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30FilteringAssetStatus $assetStatus
     * @return self
     */
    public function setAssetStatus(?string $assetStatus): self
    {
        $this->assetStatus = $assetStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30FilteringAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30FilteringAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30FilteringCreateTime
     */
    public function getCreateTime(): ?\Oceanengine\Models\ToolsWechatGameListV30FilteringCreateTime
    {
        return $this->createTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30FilteringCreateTime $createTime
     * @return self
     */
    public function setCreateTime(?\Oceanengine\Models\ToolsWechatGameListV30FilteringCreateTime $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsWechatGameListV30FilteringSearchType
     */
    public function getSearchType(): ?string
    {
        return $this->searchType;
    }

    /**
     * @param \Oceanengine\Models\ToolsWechatGameListV30FilteringSearchType $searchType
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
        if ($this->assetStatus !== null) {
            $result['asset_status'] = $this->assetStatus;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->searchType !== null) {
            $result['search_type'] = $this->searchType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_status'] ?? null) !== null) {
            $obj->assetStatus = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null && is_array($v)) {
            $obj->createTime = \Oceanengine\Models\ToolsWechatGameListV30FilteringCreateTime::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['search_type'] ?? null) !== null) {
            $obj->searchType = (string) $v;
        }
        return $obj;
    }
}
