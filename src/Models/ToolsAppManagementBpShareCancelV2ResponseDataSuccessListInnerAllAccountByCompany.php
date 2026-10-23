<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementBpShareCancelV2ResponseDataSuccessListInnerAllAccountByCompany implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType
     */
    protected ?string $accountType = null;

    /**
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * @return \Oceanengine\Models\ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppManagementBpShareCancelV2DataSuccessListAllAccountByCompanyAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        return $obj;
    }
}
