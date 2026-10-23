<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAccountInfo
     */
    protected ?\Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAccountInfo $accountInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareGetV30DataSharedAccountsAllAccountsByBp
     */
    protected ?string $allAccountsByBp = null;

    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAllAccountsByCompany
     */
    protected ?\Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAllAccountsByCompany $allAccountsByCompany = null;

    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode
     */
    protected ?string $shareMode = null;

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAccountInfo
     */
    public function getAccountInfo(): ?\Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAccountInfo
    {
        return $this->accountInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAccountInfo $accountInfo
     * @return self
     */
    public function setAccountInfo(?\Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAccountInfo $accountInfo): self
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareGetV30DataSharedAccountsAllAccountsByBp
     */
    public function getAllAccountsByBp(): ?string
    {
        return $this->allAccountsByBp;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareGetV30DataSharedAccountsAllAccountsByBp $allAccountsByBp
     * @return self
     */
    public function setAllAccountsByBp(?string $allAccountsByBp): self
    {
        $this->allAccountsByBp = $allAccountsByBp;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAllAccountsByCompany
     */
    public function getAllAccountsByCompany(): ?\Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAllAccountsByCompany
    {
        return $this->allAccountsByCompany;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAllAccountsByCompany $allAccountsByCompany
     * @return self
     */
    public function setAllAccountsByCompany(?\Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAllAccountsByCompany $allAccountsByCompany): self
    {
        $this->allAccountsByCompany = $allAccountsByCompany;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareGetV30DataSharedAccountsShareMode $shareMode
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
        if ($this->allAccountsByBp !== null) {
            $result['all_accounts_by_bp'] = $this->allAccountsByBp;
        }
        if ($this->allAccountsByCompany !== null) {
            $result['all_accounts_by_company'] = $this->allAccountsByCompany;
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
            $obj->accountInfo = \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAccountInfo::fromArray($v);
        }
        if (($v = $data['all_accounts_by_bp'] ?? null) !== null) {
            $obj->allAccountsByBp = (string) $v;
        }
        if (($v = $data['all_accounts_by_company'] ?? null) !== null && is_array($v)) {
            $obj->allAccountsByCompany = \Oceanengine\Models\ToolsBpAssetManagementShareGetV30ResponseDataSharedAccountsInnerAllAccountsByCompany::fromArray($v);
        }
        if (($v = $data['share_mode'] ?? null) !== null) {
            $obj->shareMode = (string) $v;
        }
        return $obj;
    }
}
