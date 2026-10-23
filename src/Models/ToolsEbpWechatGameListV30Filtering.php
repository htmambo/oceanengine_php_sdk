<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpWechatGameListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpWechatGameListV30FilteringAssetOwnership
     */
    protected ?string $assetOwnership = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpWechatGameListV30FilteringAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $searchKey = null;

    /**
     * 原始ID
     * @var string
     */
    protected ?string $username = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatGameListV30FilteringAssetOwnership
     */
    public function getAssetOwnership(): ?string
    {
        return $this->assetOwnership;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatGameListV30FilteringAssetOwnership $assetOwnership
     * @return self
     */
    public function setAssetOwnership(?string $assetOwnership): self
    {
        $this->assetOwnership = $assetOwnership;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpWechatGameListV30FilteringAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpWechatGameListV30FilteringAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
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
     * 原始ID
     * @return string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * 原始ID
     * @param string $username
     * @return self
     */
    public function setUsername(?string $username): self
    {
        $this->username = $username;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->searchKey !== null) {
            $result['search_key'] = $this->searchKey;
        }
        if ($this->username !== null) {
            $result['username'] = $this->username;
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
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['search_key'] ?? null) !== null) {
            $obj->searchKey = (string) $v;
        }
        if (($v = $data['username'] ?? null) !== null) {
            $obj->username = (string) $v;
        }
        return $obj;
    }
}
