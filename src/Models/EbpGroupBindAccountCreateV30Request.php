<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpGroupBindAccountCreateV30Request implements \JsonSerializable
{
    /**
     * 绑定的账户范围
     * @var \Oceanengine\Models\EbpGroupBindAccountCreateV30RequestAccountsInner[]
     */
    protected ?array $accounts = null;

    /**
     * @var \Oceanengine\Models\EbpGroupBindAccountCreateV30RequestBindModel
     */
    protected ?\Oceanengine\Models\EbpGroupBindAccountCreateV30RequestBindModel $bindModel = null;

    /**
     * 绑定的目标组织
     * @var int
     */
    protected ?int $enterpriseOrganizationId = null;

    /**
     * 绑定的账户范围
     * @return \Oceanengine\Models\EbpGroupBindAccountCreateV30RequestAccountsInner[]
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * 绑定的账户范围
     * @param \Oceanengine\Models\EbpGroupBindAccountCreateV30RequestAccountsInner[] $accounts
     * @return self
     */
    public function setAccounts(?array $accounts): self
    {
        $this->accounts = $accounts;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpGroupBindAccountCreateV30RequestBindModel
     */
    public function getBindModel(): ?\Oceanengine\Models\EbpGroupBindAccountCreateV30RequestBindModel
    {
        return $this->bindModel;
    }

    /**
     * @param \Oceanengine\Models\EbpGroupBindAccountCreateV30RequestBindModel $bindModel
     * @return self
     */
    public function setBindModel(?\Oceanengine\Models\EbpGroupBindAccountCreateV30RequestBindModel $bindModel): self
    {
        $this->bindModel = $bindModel;
        return $this;
    }

    /**
     * 绑定的目标组织
     * @return int
     */
    public function getEnterpriseOrganizationId(): ?int
    {
        return $this->enterpriseOrganizationId;
    }

    /**
     * 绑定的目标组织
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
        if ($this->bindModel !== null) {
            $result['bind_model'] = $this->bindModel;
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
            $obj->accounts = array_map(fn ($vv) => \Oceanengine\Models\EbpGroupBindAccountCreateV30RequestAccountsInner::fromArray($vv), $v);
        }
        if (($v = $data['bind_model'] ?? null) !== null && is_array($v)) {
            $obj->bindModel = \Oceanengine\Models\EbpGroupBindAccountCreateV30RequestBindModel::fromArray($v);
        }
        if (($v = $data['enterprise_organization_id'] ?? null) !== null) {
            $obj->enterpriseOrganizationId = (int) $v;
        }
        return $obj;
    }
}
