<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBpAssetManagementShareV30Request implements \JsonSerializable
{
    /**
     * 部分共享的账户列表
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareV30RequestAccountInfosInner[]
     */
    protected ?array $accountInfos = null;

    /**
     * 组织内业务线
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareV30AllAccountsByBp[]
     */
    protected ?array $allAccountsByBp = null;

    /**
     * 主体共享信息
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareV30RequestAllAccountsByCompanyInner[]
     */
    protected ?array $allAccountsByCompany = null;

    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareV30AssetType
     */
    protected ?string $assetType = null;

    /**
     * 资产ID
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 组织ID
     * @var int
     */
    protected ?int $organizationId = null;

    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareV30ShareMode
     */
    protected ?string $shareMode = null;

    /**
     * 部分共享的账户列表
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareV30RequestAccountInfosInner[]
     */
    public function getAccountInfos(): ?array
    {
        return $this->accountInfos;
    }

    /**
     * 部分共享的账户列表
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareV30RequestAccountInfosInner[] $accountInfos
     * @return self
     */
    public function setAccountInfos(?array $accountInfos): self
    {
        $this->accountInfos = $accountInfos;
        return $this;
    }

    /**
     * 组织内业务线
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareV30AllAccountsByBp[]
     */
    public function getAllAccountsByBp(): ?array
    {
        return $this->allAccountsByBp;
    }

    /**
     * 组织内业务线
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareV30AllAccountsByBp[] $allAccountsByBp
     * @return self
     */
    public function setAllAccountsByBp(?array $allAccountsByBp): self
    {
        $this->allAccountsByBp = $allAccountsByBp;
        return $this;
    }

    /**
     * 主体共享信息
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareV30RequestAllAccountsByCompanyInner[]
     */
    public function getAllAccountsByCompany(): ?array
    {
        return $this->allAccountsByCompany;
    }

    /**
     * 主体共享信息
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareV30RequestAllAccountsByCompanyInner[] $allAccountsByCompany
     * @return self
     */
    public function setAllAccountsByCompany(?array $allAccountsByCompany): self
    {
        $this->allAccountsByCompany = $allAccountsByCompany;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareV30AssetType
     */
    public function getAssetType(): ?string
    {
        return $this->assetType;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareV30AssetType $assetType
     * @return self
     */
    public function setAssetType(?string $assetType): self
    {
        $this->assetType = $assetType;
        return $this;
    }

    /**
     * 资产ID
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 资产ID
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * 组织ID
     * @return int
     */
    public function getOrganizationId(): ?int
    {
        return $this->organizationId;
    }

    /**
     * 组织ID
     * @param int $organizationId
     * @return self
     */
    public function setOrganizationId(?int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareV30ShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareV30ShareMode $shareMode
     * @return self
     */
    public function setShareMode(?string $shareMode): self
    {
        $this->shareMode = $shareMode;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountInfos !== null) {
            $result['account_infos'] = $this->accountInfos;
        }
        if ($this->allAccountsByBp !== null) {
            $result['all_accounts_by_bp'] = $this->allAccountsByBp;
        }
        if ($this->allAccountsByCompany !== null) {
            $result['all_accounts_by_company'] = $this->allAccountsByCompany;
        }
        if ($this->assetType !== null) {
            $result['asset_type'] = $this->assetType;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->organizationId !== null) {
            $result['organization_id'] = $this->organizationId;
        }
        if ($this->shareMode !== null) {
            $result['share_mode'] = $this->shareMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_infos'] ?? null) !== null && is_array($v)) {
            $obj->accountInfos = array_map(fn ($vv) => \Oceanengine\Models\ToolsBpAssetManagementShareV30RequestAccountInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['all_accounts_by_bp'] ?? null) !== null && is_array($v)) {
            $obj->allAccountsByBp = $v;
        }
        if (($v = $data['all_accounts_by_company'] ?? null) !== null && is_array($v)) {
            $obj->allAccountsByCompany = array_map(fn ($vv) => \Oceanengine\Models\ToolsBpAssetManagementShareV30RequestAllAccountsByCompanyInner::fromArray($vv), $v);
        }
        if (($v = $data['asset_type'] ?? null) !== null) {
            $obj->assetType = (string) $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['organization_id'] ?? null) !== null) {
            $obj->organizationId = (int) $v;
        }
        if (($v = $data['share_mode'] ?? null) !== null) {
            $obj->shareMode = (string) $v;
        }
        return $obj;
    }
}
