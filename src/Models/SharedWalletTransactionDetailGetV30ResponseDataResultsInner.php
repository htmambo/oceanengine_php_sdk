<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletTransactionDetailGetV30ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * 总金额(单位元)
     * @var float
     */
    protected ?float $amount = null;

    /**
     * @var \Oceanengine\Models\SharedWalletTransactionDetailGetV30DataResultsBizType
     */
    protected ?string $bizType = null;

    /**
     * 交易时间,精确到秒
     * @var string
     */
    protected ?string $businessTime = null;

    /**
     * 授信金额(单位元)
     * @var float
     */
    protected ?float $creditAmount = null;

    /**
     * 收款账户ID
     * @var int
     */
    protected ?int $payee = null;

    /**
     * 收款账户名称
     * @var string
     */
    protected ?string $payeeName = null;

    /**
     * @var \Oceanengine\Models\SharedWalletTransactionDetailGetV30DataResultsPayeeType
     */
    protected ?string $payeeType = null;

    /**
     * 预借款金额(单位元)
     * @var float
     */
    protected ?float $preloanAmount = null;

    /**
     * 预付金额(单位元)
     * @var float
     */
    protected ?float $prepayAmount = null;

    /**
     * 付款账户ID
     * @var int
     */
    protected ?int $remitter = null;

    /**
     * 付款账户名称
     * @var string
     */
    protected ?string $remitterName = null;

    /**
     * @var \Oceanengine\Models\SharedWalletTransactionDetailGetV30DataResultsRemitterType
     */
    protected ?string $remitterType = null;

    /**
     * 交易流水id
     * @var int
     */
    protected ?int $transactionSeq = null;

    /**
     * 总金额(单位元)
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * 总金额(单位元)
     * @param float $amount
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletTransactionDetailGetV30DataResultsBizType
     */
    public function getBizType(): ?string
    {
        return $this->bizType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletTransactionDetailGetV30DataResultsBizType $bizType
     * @return self
     */
    public function setBizType(?string $bizType): self
    {
        $this->bizType = $bizType;
        return $this;
    }

    /**
     * 交易时间,精确到秒
     * @return string
     */
    public function getBusinessTime(): ?string
    {
        return $this->businessTime;
    }

    /**
     * 交易时间,精确到秒
     * @param string $businessTime
     * @return self
     */
    public function setBusinessTime(?string $businessTime): self
    {
        $this->businessTime = $businessTime;
        return $this;
    }

    /**
     * 授信金额(单位元)
     * @return float
     */
    public function getCreditAmount(): ?float
    {
        return $this->creditAmount;
    }

    /**
     * 授信金额(单位元)
     * @param float $creditAmount
     * @return self
     */
    public function setCreditAmount(?float $creditAmount): self
    {
        $this->creditAmount = $creditAmount;
        return $this;
    }

    /**
     * 收款账户ID
     * @return int
     */
    public function getPayee(): ?int
    {
        return $this->payee;
    }

    /**
     * 收款账户ID
     * @param int $payee
     * @return self
     */
    public function setPayee(?int $payee): self
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * 收款账户名称
     * @return string
     */
    public function getPayeeName(): ?string
    {
        return $this->payeeName;
    }

    /**
     * 收款账户名称
     * @param string $payeeName
     * @return self
     */
    public function setPayeeName(?string $payeeName): self
    {
        $this->payeeName = $payeeName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletTransactionDetailGetV30DataResultsPayeeType
     */
    public function getPayeeType(): ?string
    {
        return $this->payeeType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletTransactionDetailGetV30DataResultsPayeeType $payeeType
     * @return self
     */
    public function setPayeeType(?string $payeeType): self
    {
        $this->payeeType = $payeeType;
        return $this;
    }

    /**
     * 预借款金额(单位元)
     * @return float
     */
    public function getPreloanAmount(): ?float
    {
        return $this->preloanAmount;
    }

    /**
     * 预借款金额(单位元)
     * @param float $preloanAmount
     * @return self
     */
    public function setPreloanAmount(?float $preloanAmount): self
    {
        $this->preloanAmount = $preloanAmount;
        return $this;
    }

    /**
     * 预付金额(单位元)
     * @return float
     */
    public function getPrepayAmount(): ?float
    {
        return $this->prepayAmount;
    }

    /**
     * 预付金额(单位元)
     * @param float $prepayAmount
     * @return self
     */
    public function setPrepayAmount(?float $prepayAmount): self
    {
        $this->prepayAmount = $prepayAmount;
        return $this;
    }

    /**
     * 付款账户ID
     * @return int
     */
    public function getRemitter(): ?int
    {
        return $this->remitter;
    }

    /**
     * 付款账户ID
     * @param int $remitter
     * @return self
     */
    public function setRemitter(?int $remitter): self
    {
        $this->remitter = $remitter;
        return $this;
    }

    /**
     * 付款账户名称
     * @return string
     */
    public function getRemitterName(): ?string
    {
        return $this->remitterName;
    }

    /**
     * 付款账户名称
     * @param string $remitterName
     * @return self
     */
    public function setRemitterName(?string $remitterName): self
    {
        $this->remitterName = $remitterName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletTransactionDetailGetV30DataResultsRemitterType
     */
    public function getRemitterType(): ?string
    {
        return $this->remitterType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletTransactionDetailGetV30DataResultsRemitterType $remitterType
     * @return self
     */
    public function setRemitterType(?string $remitterType): self
    {
        $this->remitterType = $remitterType;
        return $this;
    }

    /**
     * 交易流水id
     * @return int
     */
    public function getTransactionSeq(): ?int
    {
        return $this->transactionSeq;
    }

    /**
     * 交易流水id
     * @param int $transactionSeq
     * @return self
     */
    public function setTransactionSeq(?int $transactionSeq): self
    {
        $this->transactionSeq = $transactionSeq;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->bizType !== null) {
            $result['biz_type'] = $this->bizType;
        }
        if ($this->businessTime !== null) {
            $result['business_time'] = $this->businessTime;
        }
        if ($this->creditAmount !== null) {
            $result['credit_amount'] = $this->creditAmount;
        }
        if ($this->payee !== null) {
            $result['payee'] = $this->payee;
        }
        if ($this->payeeName !== null) {
            $result['payee_name'] = $this->payeeName;
        }
        if ($this->payeeType !== null) {
            $result['payee_type'] = $this->payeeType;
        }
        if ($this->preloanAmount !== null) {
            $result['preloan_amount'] = $this->preloanAmount;
        }
        if ($this->prepayAmount !== null) {
            $result['prepay_amount'] = $this->prepayAmount;
        }
        if ($this->remitter !== null) {
            $result['remitter'] = $this->remitter;
        }
        if ($this->remitterName !== null) {
            $result['remitter_name'] = $this->remitterName;
        }
        if ($this->remitterType !== null) {
            $result['remitter_type'] = $this->remitterType;
        }
        if ($this->transactionSeq !== null) {
            $result['transaction_seq'] = $this->transactionSeq;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['amount'] ?? null) !== null) {
            $obj->amount = (float) $v;
        }
        if (($v = $data['biz_type'] ?? null) !== null) {
            $obj->bizType = (string) $v;
        }
        if (($v = $data['business_time'] ?? null) !== null) {
            $obj->businessTime = (string) $v;
        }
        if (($v = $data['credit_amount'] ?? null) !== null) {
            $obj->creditAmount = (float) $v;
        }
        if (($v = $data['payee'] ?? null) !== null) {
            $obj->payee = (int) $v;
        }
        if (($v = $data['payee_name'] ?? null) !== null) {
            $obj->payeeName = (string) $v;
        }
        if (($v = $data['payee_type'] ?? null) !== null) {
            $obj->payeeType = (string) $v;
        }
        if (($v = $data['preloan_amount'] ?? null) !== null) {
            $obj->preloanAmount = (float) $v;
        }
        if (($v = $data['prepay_amount'] ?? null) !== null) {
            $obj->prepayAmount = (float) $v;
        }
        if (($v = $data['remitter'] ?? null) !== null) {
            $obj->remitter = (int) $v;
        }
        if (($v = $data['remitter_name'] ?? null) !== null) {
            $obj->remitterName = (string) $v;
        }
        if (($v = $data['remitter_type'] ?? null) !== null) {
            $obj->remitterType = (string) $v;
        }
        if (($v = $data['transaction_seq'] ?? null) !== null) {
            $obj->transactionSeq = (int) $v;
        }
        return $obj;
    }
}
