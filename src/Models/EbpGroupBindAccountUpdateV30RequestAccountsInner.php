<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpGroupBindAccountUpdateV30RequestAccountsInner implements \JsonSerializable
{
    /**
     * 通过指定账户进行转移，上限1000个
     * @var int[]
     */
    protected ?array $accountIds = null;

    /**
     * @var \Oceanengine\Models\EbpGroupBindAccountUpdateV30AccountsAccountType
     */
    protected ?string $accountType = null;

    /**
     * 通过全选团队下所有账户转移，上限5个
     * @var \Oceanengine\Models\EbpGroupBindAccountUpdateV30RequestAccountsInnerGroupQueriesInner[]
     */
    protected ?array $groupQueries = null;

    /**
     * 通过指定账户进行转移，上限1000个
     * @return int[]
     */
    public function getAccountIds(): ?array
    {
        return $this->accountIds;
    }

    /**
     * 通过指定账户进行转移，上限1000个
     * @param int[] $accountIds
     * @return self
     */
    public function setAccountIds(?array $accountIds): self
    {
        $this->accountIds = $accountIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\EbpGroupBindAccountUpdateV30AccountsAccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\EbpGroupBindAccountUpdateV30AccountsAccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 通过全选团队下所有账户转移，上限5个
     * @return \Oceanengine\Models\EbpGroupBindAccountUpdateV30RequestAccountsInnerGroupQueriesInner[]
     */
    public function getGroupQueries(): ?array
    {
        return $this->groupQueries;
    }

    /**
     * 通过全选团队下所有账户转移，上限5个
     * @param \Oceanengine\Models\EbpGroupBindAccountUpdateV30RequestAccountsInnerGroupQueriesInner[] $groupQueries
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
            $obj->groupQueries = array_map(fn ($vv) => \Oceanengine\Models\EbpGroupBindAccountUpdateV30RequestAccountsInnerGroupQueriesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
