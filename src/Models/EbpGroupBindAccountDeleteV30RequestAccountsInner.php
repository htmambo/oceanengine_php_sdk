<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpGroupBindAccountDeleteV30RequestAccountsInner implements \JsonSerializable
{
    /**
     * 通过指定账户ID解绑，上限1000个
     * @var int[]
     */
    protected ?array $accountIds = null;

    /**
     * @var \Oceanengine\Models\EbpGroupBindAccountDeleteV30AccountsAccountType
     */
    protected ?string $accountType = null;

    /**
     * 通过全选组织下所有账户解绑
     * @var \Oceanengine\Models\EbpGroupBindAccountDeleteV30RequestAccountsInnerGroupQueriesInner[]
     */
    protected ?array $groupQueries = null;

    /**
     * 通过指定账户ID解绑，上限1000个
     * @return int[]
     */
    public function getAccountIds(): ?array
    {
        return $this->accountIds;
    }

    /**
     * 通过指定账户ID解绑，上限1000个
     * @param int[] $accountIds
     * @return self
     */
    public function setAccountIds(?array $accountIds): self
    {
        $this->accountIds = $accountIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpGroupBindAccountDeleteV30AccountsAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\EbpGroupBindAccountDeleteV30AccountsAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 通过全选组织下所有账户解绑
     * @return \Oceanengine\Models\EbpGroupBindAccountDeleteV30RequestAccountsInnerGroupQueriesInner[]
     */
    public function getGroupQueries(): ?array
    {
        return $this->groupQueries;
    }

    /**
     * 通过全选组织下所有账户解绑
     * @param \Oceanengine\Models\EbpGroupBindAccountDeleteV30RequestAccountsInnerGroupQueriesInner[] $groupQueries
     * @return self
     */
    public function setGroupQueries(?array $groupQueries): self
    {
        $this->groupQueries = $groupQueries;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountIds !== null) {
            $result['account_ids'] = $this->accountIds;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->groupQueries !== null) {
            $result['group_queries'] = $this->groupQueries;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_ids'] ?? null) !== null && is_array($v)) {
            $obj->accountIds = $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['group_queries'] ?? null) !== null && is_array($v)) {
            $obj->groupQueries = array_map(fn ($vv) => \Oceanengine\Models\EbpGroupBindAccountDeleteV30RequestAccountsInnerGroupQueriesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
