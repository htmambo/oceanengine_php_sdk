<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SubjectBankInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 账户名称
     * @var string
     */
    protected ?string $bankAccountName = null;

    /**
     * 收款银行账号
     * @var string
     */
    protected ?string $bankAccountNo = null;

    /**
     * 开户行
     * @var string
     */
    protected ?string $bankName = null;

    /**
     * 联行号
     * @var string
     */
    protected ?string $bankUnionNo = null;

    /**
     * 账户名称
     * @return string
     */
    public function getBankAccountName(): ?string
    {
        return $this->bankAccountName;
    }

    /**
     * 账户名称
     * @param string $bankAccountName
     * @return self
     */
    public function setBankAccountName(?string $bankAccountName): self
    {
        $this->bankAccountName = $bankAccountName;
        return $this;
    }

    /**
     * 收款银行账号
     * @return string
     */
    public function getBankAccountNo(): ?string
    {
        return $this->bankAccountNo;
    }

    /**
     * 收款银行账号
     * @param string $bankAccountNo
     * @return self
     */
    public function setBankAccountNo(?string $bankAccountNo): self
    {
        $this->bankAccountNo = $bankAccountNo;
        return $this;
    }

    /**
     * 开户行
     * @return string
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * 开户行
     * @param string $bankName
     * @return self
     */
    public function setBankName(?string $bankName): self
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * 联行号
     * @return string
     */
    public function getBankUnionNo(): ?string
    {
        return $this->bankUnionNo;
    }

    /**
     * 联行号
     * @param string $bankUnionNo
     * @return self
     */
    public function setBankUnionNo(?string $bankUnionNo): self
    {
        $this->bankUnionNo = $bankUnionNo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bankAccountName !== null) {
            $result['bank_account_name'] = $this->bankAccountName;
        }
        if ($this->bankAccountNo !== null) {
            $result['bank_account_no'] = $this->bankAccountNo;
        }
        if ($this->bankName !== null) {
            $result['bank_name'] = $this->bankName;
        }
        if ($this->bankUnionNo !== null) {
            $result['bank_union_no'] = $this->bankUnionNo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bank_account_name'] ?? null) !== null) {
            $obj->bankAccountName = (string) $v;
        }
        if (($v = $data['bank_account_no'] ?? null) !== null) {
            $obj->bankAccountNo = (string) $v;
        }
        if (($v = $data['bank_name'] ?? null) !== null) {
            $obj->bankName = (string) $v;
        }
        if (($v = $data['bank_union_no'] ?? null) !== null) {
            $obj->bankUnionNo = (string) $v;
        }
        return $obj;
    }
}
