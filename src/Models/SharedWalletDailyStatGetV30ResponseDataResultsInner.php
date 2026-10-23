<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletDailyStatGetV30ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * 日终结余(单位元）
     * @var float
     */
    protected ?float $balance = null;

    /**
     * 总消耗(单位元)
     * @var float
     */
    protected ?float $cost = null;

    /**
     * 授信日终结余(单位元）
     * @var float
     */
    protected ?float $creditBalance = null;

    /**
     * 总支出(单位元)
     * @var float
     */
    protected ?float $expenses = null;

    /**
     * 总存入(单位元)
     * @var float
     */
    protected ?float $incomes = null;

    /**
     * 预借款日终结余(单位元)
     * @var float
     */
    protected ?float $preloanBalance = null;

    /**
     * 预付日终结余(单位元）
     * @var float
     */
    protected ?float $prepayBalance = null;

    /**
     * 共享钱包ID
     * @var int
     */
    protected ?int $sharedWalletId = null;

    /**
     * 共享钱包名称
     * @var string
     */
    protected ?string $sharedWalletName = null;

    /**
     * 日期,精确到天，格式YYYY-MM-DD
     * @var string
     */
    protected ?string $transactionDate = null;

    /**
     * @var \Oceanengine\Models\SharedWalletDailyStatGetV30DataResultsWalletType
     */
    protected ?string $walletType = null;

    /**
     * 日终结余(单位元）
     * @return float
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }

    /**
     * 日终结余(单位元）
     * @param float $balance
     * @return self
     */
    public function setBalance(?float $balance): self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * 总消耗(单位元)
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * 总消耗(单位元)
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * 授信日终结余(单位元）
     * @return float
     */
    public function getCreditBalance(): ?float
    {
        return $this->creditBalance;
    }

    /**
     * 授信日终结余(单位元）
     * @param float $creditBalance
     * @return self
     */
    public function setCreditBalance(?float $creditBalance): self
    {
        $this->creditBalance = $creditBalance;
        return $this;
    }

    /**
     * 总支出(单位元)
     * @return float
     */
    public function getExpenses(): ?float
    {
        return $this->expenses;
    }

    /**
     * 总支出(单位元)
     * @param float $expenses
     * @return self
     */
    public function setExpenses(?float $expenses): self
    {
        $this->expenses = $expenses;
        return $this;
    }

    /**
     * 总存入(单位元)
     * @return float
     */
    public function getIncomes(): ?float
    {
        return $this->incomes;
    }

    /**
     * 总存入(单位元)
     * @param float $incomes
     * @return self
     */
    public function setIncomes(?float $incomes): self
    {
        $this->incomes = $incomes;
        return $this;
    }

    /**
     * 预借款日终结余(单位元)
     * @return float
     */
    public function getPreloanBalance(): ?float
    {
        return $this->preloanBalance;
    }

    /**
     * 预借款日终结余(单位元)
     * @param float $preloanBalance
     * @return self
     */
    public function setPreloanBalance(?float $preloanBalance): self
    {
        $this->preloanBalance = $preloanBalance;
        return $this;
    }

    /**
     * 预付日终结余(单位元）
     * @return float
     */
    public function getPrepayBalance(): ?float
    {
        return $this->prepayBalance;
    }

    /**
     * 预付日终结余(单位元）
     * @param float $prepayBalance
     * @return self
     */
    public function setPrepayBalance(?float $prepayBalance): self
    {
        $this->prepayBalance = $prepayBalance;
        return $this;
    }

    /**
     * 共享钱包ID
     * @return int
     */
    public function getSharedWalletId(): ?int
    {
        return $this->sharedWalletId;
    }

    /**
     * 共享钱包ID
     * @param int $sharedWalletId
     * @return self
     */
    public function setSharedWalletId(?int $sharedWalletId): self
    {
        $this->sharedWalletId = $sharedWalletId;
        return $this;
    }

    /**
     * 共享钱包名称
     * @return string
     */
    public function getSharedWalletName(): ?string
    {
        return $this->sharedWalletName;
    }

    /**
     * 共享钱包名称
     * @param string $sharedWalletName
     * @return self
     */
    public function setSharedWalletName(?string $sharedWalletName): self
    {
        $this->sharedWalletName = $sharedWalletName;
        return $this;
    }

    /**
     * 日期,精确到天，格式YYYY-MM-DD
     * @return string
     */
    public function getTransactionDate(): ?string
    {
        return $this->transactionDate;
    }

    /**
     * 日期,精确到天，格式YYYY-MM-DD
     * @param string $transactionDate
     * @return self
     */
    public function setTransactionDate(?string $transactionDate): self
    {
        $this->transactionDate = $transactionDate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletDailyStatGetV30DataResultsWalletType
     */
    public function getWalletType(): ?string
    {
        return $this->walletType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletDailyStatGetV30DataResultsWalletType $walletType
     * @return self
     */
    public function setWalletType(?string $walletType): self
    {
        $this->walletType = $walletType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->balance !== null) {
            $result['balance'] = $this->balance;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->creditBalance !== null) {
            $result['credit_balance'] = $this->creditBalance;
        }
        if ($this->expenses !== null) {
            $result['expenses'] = $this->expenses;
        }
        if ($this->incomes !== null) {
            $result['incomes'] = $this->incomes;
        }
        if ($this->preloanBalance !== null) {
            $result['preloan_balance'] = $this->preloanBalance;
        }
        if ($this->prepayBalance !== null) {
            $result['prepay_balance'] = $this->prepayBalance;
        }
        if ($this->sharedWalletId !== null) {
            $result['shared_wallet_id'] = $this->sharedWalletId;
        }
        if ($this->sharedWalletName !== null) {
            $result['shared_wallet_name'] = $this->sharedWalletName;
        }
        if ($this->transactionDate !== null) {
            $result['transaction_date'] = $this->transactionDate;
        }
        if ($this->walletType !== null) {
            $result['wallet_type'] = $this->walletType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['balance'] ?? null) !== null) {
            $obj->balance = (float) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['credit_balance'] ?? null) !== null) {
            $obj->creditBalance = (float) $v;
        }
        if (($v = $data['expenses'] ?? null) !== null) {
            $obj->expenses = (float) $v;
        }
        if (($v = $data['incomes'] ?? null) !== null) {
            $obj->incomes = (float) $v;
        }
        if (($v = $data['preloan_balance'] ?? null) !== null) {
            $obj->preloanBalance = (float) $v;
        }
        if (($v = $data['prepay_balance'] ?? null) !== null) {
            $obj->prepayBalance = (float) $v;
        }
        if (($v = $data['shared_wallet_id'] ?? null) !== null) {
            $obj->sharedWalletId = (int) $v;
        }
        if (($v = $data['shared_wallet_name'] ?? null) !== null) {
            $obj->sharedWalletName = (string) $v;
        }
        if (($v = $data['transaction_date'] ?? null) !== null) {
            $obj->transactionDate = (string) $v;
        }
        if (($v = $data['wallet_type'] ?? null) !== null) {
            $obj->walletType = (string) $v;
        }
        return $obj;
    }
}
