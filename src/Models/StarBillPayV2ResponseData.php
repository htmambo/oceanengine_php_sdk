<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarBillPayV2ResponseData implements \JsonSerializable
{
    /**
     * 实付金额（单位元，下同）
     * @var int
     */
    protected ?int $actualPay = null;

    /**
     * 付款后账户余额
     * @var int
     */
    protected ?int $balance = null;

    /**
     * 精确实付金额（单位元，下同）
     * @var float
     */
    protected ?float $preciseActualPay = null;

    /**
     * 精确付款后账户余额
     * @var float
     */
    protected ?float $preciseBalance = null;

    /**
     * 实付金额（单位元，下同）
     * @return int
     */
    public function getActualPay(): ?int
    {
        return $this->actualPay;
    }

    /**
     * 实付金额（单位元，下同）
     * @param int $actualPay
     * @return self
     */
    public function setActualPay(?int $actualPay): self
    {
        $this->actualPay = $actualPay;
        return $this;
    }

    /**
     * 付款后账户余额
     * @return int
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * 付款后账户余额
     * @param int $balance
     * @return self
     */
    public function setBalance(?int $balance): self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * 精确实付金额（单位元，下同）
     * @return float
     */
    public function getPreciseActualPay(): ?float
    {
        return $this->preciseActualPay;
    }

    /**
     * 精确实付金额（单位元，下同）
     * @param float $preciseActualPay
     * @return self
     */
    public function setPreciseActualPay(?float $preciseActualPay): self
    {
        $this->preciseActualPay = $preciseActualPay;
        return $this;
    }

    /**
     * 精确付款后账户余额
     * @return float
     */
    public function getPreciseBalance(): ?float
    {
        return $this->preciseBalance;
    }

    /**
     * 精确付款后账户余额
     * @param float $preciseBalance
     * @return self
     */
    public function setPreciseBalance(?float $preciseBalance): self
    {
        $this->preciseBalance = $preciseBalance;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actualPay !== null) {
            $result['actual_pay'] = $this->actualPay;
        }
        if ($this->balance !== null) {
            $result['balance'] = $this->balance;
        }
        if ($this->preciseActualPay !== null) {
            $result['precise_actual_pay'] = $this->preciseActualPay;
        }
        if ($this->preciseBalance !== null) {
            $result['precise_balance'] = $this->preciseBalance;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['actual_pay'] ?? null) !== null) {
            $obj->actualPay = (int) $v;
        }
        if (($v = $data['balance'] ?? null) !== null) {
            $obj->balance = (int) $v;
        }
        if (($v = $data['precise_actual_pay'] ?? null) !== null) {
            $obj->preciseActualPay = (float) $v;
        }
        if (($v = $data['precise_balance'] ?? null) !== null) {
            $obj->preciseBalance = (float) $v;
        }
        return $obj;
    }
}
