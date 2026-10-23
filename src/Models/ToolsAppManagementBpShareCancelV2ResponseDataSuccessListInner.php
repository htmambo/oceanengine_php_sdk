<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAccountInfo
     */
    protected ?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAccountInfo $accountInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccount
     */
    protected ?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccount $allAccount = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccountByCompany
     */
    protected ?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccountByCompany $allAccountByCompany = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareCancelV2DataSuccessListShareMode
     */
    protected ?string $shareMode = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAccountInfo
     */
    public function getAccountInfo(): ?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAccountInfo
    {
        return $this->accountInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAccountInfo $accountInfo
     * @return self
     */
    public function setAccountInfo(?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAccountInfo $accountInfo): self
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccount
     */
    public function getAllAccount(): ?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccount
    {
        return $this->allAccount;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccount $allAccount
     * @return self
     */
    public function setAllAccount(?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccount $allAccount): self
    {
        $this->allAccount = $allAccount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccountByCompany
     */
    public function getAllAccountByCompany(): ?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccountByCompany
    {
        return $this->allAccountByCompany;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccountByCompany $allAccountByCompany
     * @return self
     */
    public function setAllAccountByCompany(?\Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccountByCompany $allAccountByCompany): self
    {
        $this->allAccountByCompany = $allAccountByCompany;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareCancelV2DataSuccessListShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareCancelV2DataSuccessListShareMode $shareMode
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
            $obj->accountInfo = \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAccountInfo::fromArray($v);
        }
        if (($v = $data['all_account'] ?? null) !== null && is_array($v)) {
            $obj->allAccount = \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccount::fromArray($v);
        }
        if (($v = $data['all_account_by_company'] ?? null) !== null && is_array($v)) {
            $obj->allAccountByCompany = \Oceanengine\Models\ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccountByCompany::fromArray($v);
        }
        if (($v = $data['share_mode'] ?? null) !== null) {
            $obj->shareMode = (string) $v;
        }
        return $obj;
    }
}
