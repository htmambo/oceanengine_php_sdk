<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBpAssetManagementShareV30ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAccountInfo
     */
    protected ?\Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAccountInfo $accountInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareV30DataErrorListAllAccountsByBp
     */
    protected ?string $allAccountsByBp = null;

    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAllAccountsByCompany
     */
    protected ?\Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAllAccountsByCompany $allAccountsByCompany = null;

    /**
     * 错误原因
     * @var string
     */
    protected ?string $errorMessage = null;

    /**
     * @var \Oceanengine\Models\ToolsBpAssetManagementShareV30DataErrorListShareMode
     */
    protected ?string $shareMode = null;

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAccountInfo
     */
    public function getAccountInfo(): ?\Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAccountInfo
    {
        return $this->accountInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAccountInfo $accountInfo
     * @return self
     */
    public function setAccountInfo(?\Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAccountInfo $accountInfo): self
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareV30DataErrorListAllAccountsByBp
     */
    public function getAllAccountsByBp(): ?string
    {
        return $this->allAccountsByBp;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareV30DataErrorListAllAccountsByBp $allAccountsByBp
     * @return self
     */
    public function setAllAccountsByBp(?string $allAccountsByBp): self
    {
        $this->allAccountsByBp = $allAccountsByBp;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAllAccountsByCompany
     */
    public function getAllAccountsByCompany(): ?\Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAllAccountsByCompany
    {
        return $this->allAccountsByCompany;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAllAccountsByCompany $allAccountsByCompany
     * @return self
     */
    public function setAllAccountsByCompany(?\Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAllAccountsByCompany $allAccountsByCompany): self
    {
        $this->allAccountsByCompany = $allAccountsByCompany;
        return $this;
    }

    /**
     * 错误原因
     * @return string
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * 错误原因
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsBpAssetManagementShareV30DataErrorListShareMode
     */
    public function getShareMode(): ?string
    {
        return $this->shareMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsBpAssetManagementShareV30DataErrorListShareMode $shareMode
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
            $obj->accountInfo = \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAccountInfo::fromArray($v);
        }
        if (($v = $data['all_accounts_by_bp'] ?? null) !== null) {
            $obj->allAccountsByBp = (string) $v;
        }
        if (($v = $data['all_accounts_by_company'] ?? null) !== null && is_array($v)) {
            $obj->allAccountsByCompany = \Oceanengine\Models\ToolsBpAssetManagementShareV30ResponseDataErrorListInnerAllAccountsByCompany::fromArray($v);
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
