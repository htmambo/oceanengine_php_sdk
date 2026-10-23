<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementBpShareV2ResponseDataSuccessListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAccountInfo
     */
    protected ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAccountInfo $accountInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccount
     */
    protected ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccount $allAccount = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccountByCompany
     */
    protected ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccountByCompany $allAccountByCompany = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareV2DataSuccessListShareMode
     */
    protected ?string $shareMode = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAccountInfo
     */
    public function getAccountInfo(): ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAccountInfo
    {
        return $this->accountInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAccountInfo $accountInfo
     * @return self
     */
    public function setAccountInfo(?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAccountInfo $accountInfo): self
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccount
     */
    public function getAllAccount(): ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccount
    {
        return $this->allAccount;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccount $allAccount
     * @return self
     */
    public function setAllAccount(?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccount $allAccount): self
    {
        $this->allAccount = $allAccount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccountByCompany
     */
    public function getAllAccountByCompany(): ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccountByCompany
    {
        return $this->allAccountByCompany;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccountByCompany $allAccountByCompany
     * @return self
     */
    public function setAllAccountByCompany(?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccountByCompany $allAccountByCompany): self
    {
        $this->allAccountByCompany = $allAccountByCompany;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareV2DataSuccessListShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareV2DataSuccessListShareMode $shareMode
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
            $obj->accountInfo = \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAccountInfo::fromArray($v);
        }
        if (($v = $data['all_account'] ?? null) !== null && is_array($v)) {
            $obj->allAccount = \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccount::fromArray($v);
        }
        if (($v = $data['all_account_by_company'] ?? null) !== null && is_array($v)) {
            $obj->allAccountByCompany = \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataSuccessListInnerAllAccountByCompany::fromArray($v);
        }
        if (($v = $data['share_mode'] ?? null) !== null) {
            $obj->shareMode = (string) $v;
        }
        return $obj;
    }
}
