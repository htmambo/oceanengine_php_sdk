<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementShareAccountListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAccountInfo
     */
    protected ?\Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAccountInfo $accountInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccount
     */
    protected ?\Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccount $allAccount = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccountByCompany
     */
    protected ?\Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccountByCompany $allAccountByCompany = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementShareAccountListV2DataListShareMode
     */
    protected ?string $shareMode = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAccountInfo
     */
    public function getAccountInfo(): ?\Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAccountInfo
    {
        return $this->accountInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAccountInfo $accountInfo
     * @return self
     */
    public function setAccountInfo(?\Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAccountInfo $accountInfo): self
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccount
     */
    public function getAllAccount(): ?\Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccount
    {
        return $this->allAccount;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccount $allAccount
     * @return self
     */
    public function setAllAccount(?\Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccount $allAccount): self
    {
        $this->allAccount = $allAccount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccountByCompany
     */
    public function getAllAccountByCompany(): ?\Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccountByCompany
    {
        return $this->allAccountByCompany;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccountByCompany $allAccountByCompany
     * @return self
     */
    public function setAllAccountByCompany(?\Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccountByCompany $allAccountByCompany): self
    {
        $this->allAccountByCompany = $allAccountByCompany;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementShareAccountListV2DataListShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementShareAccountListV2DataListShareMode $shareMode
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
        if ($this->accountInfo !== null) {
            $result['account_info'] = $this->accountInfo;
        }
        if ($this->allAccount !== null) {
            $result['all_account'] = $this->allAccount;
        }
        if ($this->allAccountByCompany !== null) {
            $result['all_account_by_company'] = $this->allAccountByCompany;
        }
        if ($this->shareMode !== null) {
            $result['share_mode'] = $this->shareMode;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_info'] ?? null) !== null && is_array($v)) {
            $obj->accountInfo = \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAccountInfo::fromArray($v);
        }
        if (($v = $data['all_account'] ?? null) !== null && is_array($v)) {
            $obj->allAccount = \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccount::fromArray($v);
        }
        if (($v = $data['all_account_by_company'] ?? null) !== null && is_array($v)) {
            $obj->allAccountByCompany = \Oceanengine\Models\ToolsAppManagementShareAccountListV2ResponseDataListInnerAllAccountByCompany::fromArray($v);
        }
        if (($v = $data['share_mode'] ?? null) !== null) {
            $obj->shareMode = (string) $v;
        }
        return $obj;
    }
}
