<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaAccountListV30ResponseData implements \JsonSerializable
{
    /**
     * 账户列表
     * @var \Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInner[]
     */
    protected ?array $accounts = null;

    /**
     * 账户列表
     * @return \Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInner[]
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * 账户列表
     * @param \Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInner[] $accounts
     * @return self
     */
    public function setAccounts(?array $accounts): self
    {
        $this->accounts = $accounts;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['accounts'] ?? null) !== null && is_array($v)) {
            $obj->accounts = array_map(fn ($vv) => \Oceanengine\Models\BrandMaAccountListV30ResponseDataAccountsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
