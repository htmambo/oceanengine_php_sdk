<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpGroupBindAccountDeleteV30Request implements \JsonSerializable
{
    /**
     * 所选账户
     * @var \Oceanengine\Models\EbpGroupBindAccountDeleteV30RequestAccountsInner[]
     */
    protected ?array $accounts = null;

    /**
     * 操作的工作台组织
     * @var int
     */
    protected ?int $enterpriseOrganizationId = null;

    /**
     * 所选账户
     * @return \Oceanengine\Models\EbpGroupBindAccountDeleteV30RequestAccountsInner[]
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * 所选账户
     * @param \Oceanengine\Models\EbpGroupBindAccountDeleteV30RequestAccountsInner[] $accounts
     * @return self
     */
    public function setAccounts(?array $accounts): self
    {
        $this->accounts = $accounts;
        return $this;
    }

    /**
     * 操作的工作台组织
     * @return int
     */
    public function getEnterpriseOrganizationId(): ?int
    {
        return $this->enterpriseOrganizationId;
    }

    /**
     * 操作的工作台组织
     * @param int $enterpriseOrganizationId
     * @return self
     */
    public function setEnterpriseOrganizationId(?int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accounts !== null) {
            $result['accounts'] = $this->accounts;
        }
        if ($this->enterpriseOrganizationId !== null) {
            $result['enterprise_organization_id'] = $this->enterpriseOrganizationId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['accounts'] ?? null) !== null && is_array($v)) {
            $obj->accounts = array_map(fn ($vv) => \Oceanengine\Models\EbpGroupBindAccountDeleteV30RequestAccountsInner::fromArray($vv), $v);
        }
        if (($v = $data['enterprise_organization_id'] ?? null) !== null) {
            $obj->enterpriseOrganizationId = (int) $v;
        }
        return $obj;
    }
}
