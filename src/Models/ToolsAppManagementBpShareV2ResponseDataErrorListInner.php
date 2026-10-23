<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementBpShareV2ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAccountInfo
     */
    protected ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAccountInfo $accountInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccount
     */
    protected ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccount $allAccount = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccountByCompany
     */
    protected ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccountByCompany $allAccountByCompany = null;

    /**
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareV2DataErrorListShareMode
     */
    protected ?string $shareMode = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAccountInfo
     */
    public function getAccountInfo(): ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAccountInfo
    {
        return $this->accountInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAccountInfo $accountInfo
     * @return self
     */
    public function setAccountInfo(?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAccountInfo $accountInfo): self
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccount
     */
    public function getAllAccount(): ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccount
    {
        return $this->allAccount;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccount $allAccount
     * @return self
     */
    public function setAllAccount(?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccount $allAccount): self
    {
        $this->allAccount = $allAccount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccountByCompany
     */
    public function getAllAccountByCompany(): ?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccountByCompany
    {
        return $this->allAccountByCompany;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccountByCompany $allAccountByCompany
     * @return self
     */
    public function setAllAccountByCompany(?\Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccountByCompany $allAccountByCompany): self
    {
        $this->allAccountByCompany = $allAccountByCompany;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareV2DataErrorListShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareV2DataErrorListShareMode $shareMode
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
        if ($this->errorMessage !== null) {
            $result['error_message'] = $this->errorMessage;
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
            $obj->accountInfo = \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAccountInfo::fromArray($v);
        }
        if (($v = $data['all_account'] ?? null) !== null && is_array($v)) {
            $obj->allAccount = \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccount::fromArray($v);
        }
        if (($v = $data['all_account_by_company'] ?? null) !== null && is_array($v)) {
            $obj->allAccountByCompany = \Oceanengine\Models\ToolsAppManagementBpShareV2ResponseDataErrorListInnerAllAccountByCompany::fromArray($v);
        }
        if (($v = $data['error_message'] ?? null) !== null) {
            $obj->errorMessage = (string) $v;
        }
        if (($v = $data['share_mode'] ?? null) !== null) {
            $obj->shareMode = (string) $v;
        }
        return $obj;
    }
}
