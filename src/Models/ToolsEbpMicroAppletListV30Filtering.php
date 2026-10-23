<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMicroAppletListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpMicroAppletListV30FilteringAssetOwnership
     */
    protected ?string $assetOwnership = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMicroAppletListV30FilteringAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 上限1000
     * @var int[]
     */
    protected ?array $instanceIds = null;

    /**
     * 名称和appid
     * @var string
     */
    protected ?string $searchKey = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroAppletListV30FilteringAssetOwnership
     */
    public function getAssetOwnership(): ?string
    {
        return $this->assetOwnership;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroAppletListV30FilteringAssetOwnership $assetOwnership
     * @return self
     */
    public function setAssetOwnership(?string $assetOwnership): self
    {
        $this->assetOwnership = $assetOwnership;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroAppletListV30FilteringAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroAppletListV30FilteringAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 上限1000
     * @return int[]
     */
    public function getInstanceIds(): ?array
    {
        return $this->instanceIds;
    }

    /**
     * 上限1000
     * @param int[] $instanceIds
     * @return self
     */
    public function setInstanceIds(?array $instanceIds): self
    {
        $this->instanceIds = $instanceIds;
        return $this;
    }

    /**
     * 名称和appid
     * @return string
     */
    public function getSearchKey(): ?string
    {
        return $this->searchKey;
    }

    /**
     * 名称和appid
     * @param string $searchKey
     * @return self
     */
    public function setSearchKey(?string $searchKey): self
    {
        $this->searchKey = $searchKey;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->assetOwnership !== null) {
            $result['asset_ownership'] = $this->assetOwnership;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->instanceIds !== null) {
            $result['instance_ids'] = $this->instanceIds;
        }
        if ($this->searchKey !== null) {
            $result['search_key'] = $this->searchKey;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_ownership'] ?? null) !== null) {
            $obj->assetOwnership = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['instance_ids'] ?? null) !== null && is_array($v)) {
            $obj->instanceIds = $v;
        }
        if (($v = $data['search_key'] ?? null) !== null) {
            $obj->searchKey = (string) $v;
        }
        return $obj;
    }
}
