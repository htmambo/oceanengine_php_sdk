<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CustomerCenterAccountListV30ResponseDataAccountsInner implements \JsonSerializable
{
    /**
     * 账户ID，对应账户类型参考account_type
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 账户名称
     * @var string
     */
    protected ?string $accountName = null;

    /**
     * 账户类型，枚举值： - `AD` 巨量广告 - `QIANCHUAN` 巨量千川 - `LOCAL` 巨量本地推 - `DOU+` DOU+
     * @var string
     */
    protected ?string $accountType = null;

    /**
     * 账户ID，对应账户类型参考account_type
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账户ID，对应账户类型参考account_type
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户名称
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * 账户名称
     * @param string $accountName
     * @return self
     */
    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * 账户类型，枚举值： - `AD` 巨量广告 - `QIANCHUAN` 巨量千川 - `LOCAL` 巨量本地推 - `DOU+` DOU+
     * @return string
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * 账户类型，枚举值： - `AD` 巨量广告 - `QIANCHUAN` 巨量千川 - `LOCAL` 巨量本地推 - `DOU+` DOU+
     * @param string $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountName !== null) {
            $result['account_name'] = $this->accountName;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_name'] ?? null) !== null) {
            $obj->accountName = (string) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        return $obj;
    }
}
