<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementBpShareCancelV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAccountInfosInner[]
     */
    protected ?array $accountInfos = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountByCompany
     */
    protected ?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountByCompany $allAccountByCompany = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountsInner[]
     */
    protected ?array $allAccounts = null;

    /**
     * @var int
     */
    protected ?int $organizationId = null;

    /**
     * @var string
     */
    protected ?string $packageId = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ShareMode
     */
    protected ?string $shareMode = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAccountInfosInner[]
     */
    public function getAccountInfos(): ?array
    {
        return $this->accountInfos;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAccountInfosInner[] $accountInfos
     * @return self
     */
    public function setAccountInfos(?array $accountInfos): self
    {
        $this->accountInfos = $accountInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountByCompany
     */
    public function getAllAccountByCompany(): ?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountByCompany
    {
        return $this->allAccountByCompany;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountByCompany $allAccountByCompany
     * @return self
     */
    public function setAllAccountByCompany(?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountByCompany $allAccountByCompany): self
    {
        $this->allAccountByCompany = $allAccountByCompany;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountsInner[]
     */
    public function getAllAccounts(): ?array
    {
        return $this->allAccounts;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountsInner[] $allAccounts
     * @return self
     */
    public function setAllAccounts(?array $allAccounts): self
    {
        $this->allAccounts = $allAccounts;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrganizationId(): ?int
    {
        return $this->organizationId;
    }

    /**
     * @param int $organizationId
     * @return self
     */
    public function setOrganizationId(?int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }

    /**
     * @param string $packageId
     * @return self
     */
    public function setPackageId(?string $packageId): self
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ShareMode $shareMode
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
        if ($this->allAccountByCompany !== null) {
            $result['all_account_by_company'] = $this->allAccountByCompany;
        }
        if ($this->allAccounts !== null) {
            $result['all_accounts'] = $this->allAccounts;
        }
        if ($this->organizationId !== null) {
            $result['organization_id'] = $this->organizationId;
        }
        if ($this->packageId !== null) {
            $result['package_id'] = $this->packageId;
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
            $obj->accountInfos = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAccountInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['all_account_by_company'] ?? null) !== null && is_array($v)) {
            $obj->allAccountByCompany = \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountByCompany::fromArray($v);
        }
        if (($v = $data['all_accounts'] ?? null) !== null && is_array($v)) {
            $obj->allAccounts = array_map(fn ($vv) => \Oceanengine\Models\ToolsAppManagementBpShareCancelV2RequestAllAccountsInner::fromArray($vv), $v);
        }
        if (($v = $data['organization_id'] ?? null) !== null) {
            $obj->organizationId = (int) $v;
        }
        if (($v = $data['package_id'] ?? null) !== null) {
            $obj->packageId = (string) $v;
        }
        if (($v = $data['share_mode'] ?? null) !== null) {
            $obj->shareMode = (string) $v;
        }
        return $obj;
    }
}
