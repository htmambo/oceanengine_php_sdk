<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpGroupBindAccountUpdateV30Request implements \JsonSerializable
{
    /**
     * 所选账户，上限5个
     * @var \Oceanengine\Models\EbpGroupBindAccountUpdateV30RequestAccountsInner[]
     */
    protected ?array $accounts = null;

    /**
     * @var int
     */
    protected ?int $enterpriseOrganizationId = null;

    /**
     * 要转移到的目标组织节点
     * @var int
     */
    protected ?int $toGroupId = null;

    /**
     * 所选账户，上限5个
     * @return \Oceanengine\Models\EbpGroupBindAccountUpdateV30RequestAccountsInner[]
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * 所选账户，上限5个
     * @param \Oceanengine\Models\EbpGroupBindAccountUpdateV30RequestAccountsInner[] $accounts
     * @return self
     */
    public function setAccounts(?array $accounts): self
    {
        $this->accounts = $accounts;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnterpriseOrganizationId(): ?int
    {
        return $this->enterpriseOrganizationId;
    }

    /**
     * @param int $enterpriseOrganizationId
     * @return self
     */
    public function setEnterpriseOrganizationId(?int $enterpriseOrganizationId): self
    {
        $this->enterpriseOrganizationId = $enterpriseOrganizationId;
        return $this;
    }

    /**
     * 要转移到的目标组织节点
     * @return int
     */
    public function getToGroupId(): ?int
    {
        return $this->toGroupId;
    }

    /**
     * 要转移到的目标组织节点
     * @param int $toGroupId
     * @return self
     */
    public function setToGroupId(?int $toGroupId): self
    {
        $this->toGroupId = $toGroupId;
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
        if ($this->toGroupId !== null) {
            $result['to_group_id'] = $this->toGroupId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['accounts'] ?? null) !== null && is_array($v)) {
            $obj->accounts = array_map(fn ($vv) => \Oceanengine\Models\EbpGroupBindAccountUpdateV30RequestAccountsInner::fromArray($vv), $v);
        }
        if (($v = $data['enterprise_organization_id'] ?? null) !== null) {
            $obj->enterpriseOrganizationId = (int) $v;
        }
        if (($v = $data['to_group_id'] ?? null) !== null) {
            $obj->toGroupId = (int) $v;
        }
        return $obj;
    }
}
