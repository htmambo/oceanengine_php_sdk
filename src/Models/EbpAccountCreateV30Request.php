<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpAccountCreateV30Request implements \JsonSerializable
{
    /**
     * 主体公司id
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 客户id
     * @var int
     */
    protected ?int $customerId = null;

    /**
     * 操作的组织节点
     * @var int
     */
    protected ?int $enterpriseOrganizationId = null;

    /**
     * 账户名称，上限10个
     * @var string[]
     */
    protected ?array $newAccountNames = null;

    /**
     * @var \Oceanengine\Models\EbpAccountCreateV30RequestOwnerUser
     */
    protected ?\Oceanengine\Models\EbpAccountCreateV30RequestOwnerUser $ownerUser = null;

    /**
     * 主体公司id
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 主体公司id
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * 客户id
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * 客户id
     * @param int $customerId
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * 操作的组织节点
     * @return int
     */
    public function getEnterpriseOrganizationId(): ?int
    {
        return $this->enterpriseOrganizationId;
    }

    /**
     * 操作的组织节点
     * @param int $enterpriseOrganizationId
     * @return self
     */
    public function setEnterpriseOrganizationId(?int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

    /**
     * 账户名称，上限10个
     * @return string[]
     */
    public function getNewAccountNames(): ?array
    {
        return $this->newAccountNames;
    }

    /**
     * 账户名称，上限10个
     * @param string[] $newAccountNames
     * @return self
     */
    public function setNewAccountNames(?array $newAccountNames): self
    {
        $this->newAccountNames = $newAccountNames;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpAccountCreateV30RequestOwnerUser
     */
    public function getOwnerUser(): ?\Oceanengine\Models\EbpAccountCreateV30RequestOwnerUser
    {
        return $this->ownerUser;
    }

    /**
     * @param \Oceanengine\Models\EbpAccountCreateV30RequestOwnerUser $ownerUser
     * @return self
     */
    public function setOwnerUser(?\Oceanengine\Models\EbpAccountCreateV30RequestOwnerUser $ownerUser): self
    {
        $this->ownerUser = $ownerUser;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->customerId !== null) {
            $result['customer_id'] = $this->customerId;
        }
        if ($this->enterpriseOrganizationId !== null) {
            $result['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        }
        if ($this->newAccountNames !== null) {
            $result['new_account_names'] = $this->newAccountNames;
        }
        if ($this->ownerUser !== null) {
            $result['owner_user'] = $this->ownerUser;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['customer_id'] ?? null) !== null) {
            $obj->customerId = (int) $v;
        }
        if (($v = $data['enterprise_organization_id'] ?? null) !== null) {
            $obj->enterpriseOrganizationId = (int) $v;
        }
        if (($v = $data['new_account_names'] ?? null) !== null && is_array($v)) {
            $obj->newAccountNames = $v;
        }
        if (($v = $data['owner_user'] ?? null) !== null && is_array($v)) {
            $obj->ownerUser = \Oceanengine\Models\EbpAccountCreateV30RequestOwnerUser::fromArray($v);
        }
        return $obj;
    }
}
