<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueBasicBalanceInfo implements \JsonSerializable
{
    /**
     * 非赠款总余额(单位元)
     * @var float
     */
    protected ?float $nonGrantBalance = null;

    /**
     * 非赠款可转余额(单位元)
     * @var float
     */
    protected ?float $nonGrantTransferableBalance = null;

    /**
     * 非赠款可用余额(单位元)
     * @var float
     */
    protected ?float $nonGrantValidBalance = null;

    /**
     * 总余额(单位元)
     * @var float
     */
    protected ?float $totalBalance = null;

    /**
     * 总可转余额(单位元)
     * @var float
     */
    protected ?float $totalTransferableBalance = null;

    /**
     * 总可用余额(单位元)
     * @var float
     */
    protected ?float $totalValidBalance = null;

    /**
     * 非赠款总余额(单位元)
     * @return float
     */
    public function getNonGrantBalance(): ?float
    {
        return $this->nonGrantBalance;
    }

    /**
     * 非赠款总余额(单位元)
     * @param float $nonGrantBalance
     * @return self
     */
    public function setNonGrantBalance(?float $nonGrantBalance): self
    {
        $this->nonGrantBalance = $nonGrantBalance;
        return $this;
    }

    /**
     * 非赠款可转余额(单位元)
     * @return float
     */
    public function getNonGrantTransferableBalance(): ?float
    {
        return $this->nonGrantTransferableBalance;
    }

    /**
     * 非赠款可转余额(单位元)
     * @param float $nonGrantTransferableBalance
     * @return self
     */
    public function setNonGrantTransferableBalance(?float $nonGrantTransferableBalance): self
    {
        $this->nonGrantTransferableBalance = $nonGrantTransferableBalance;
        return $this;
    }

    /**
     * 非赠款可用余额(单位元)
     * @return float
     */
    public function getNonGrantValidBalance(): ?float
    {
        return $this->nonGrantValidBalance;
    }

    /**
     * 非赠款可用余额(单位元)
     * @param float $nonGrantValidBalance
     * @return self
     */
    public function setNonGrantValidBalance(?float $nonGrantValidBalance): self
    {
        $this->nonGrantValidBalance = $nonGrantValidBalance;
        return $this;
    }

    /**
     * 总余额(单位元)
     * @return float
     */
    public function getTotalBalance(): ?float
    {
        return $this->totalBalance;
    }

    /**
     * 总余额(单位元)
     * @param float $totalBalance
     * @return self
     */
    public function setTotalBalance(?float $totalBalance): self
    {
        $this->totalBalance = $totalBalance;
        return $this;
    }

    /**
     * 总可转余额(单位元)
     * @return float
     */
    public function getTotalTransferableBalance(): ?float
    {
        return $this->totalTransferableBalance;
    }

    /**
     * 总可转余额(单位元)
     * @param float $totalTransferableBalance
     * @return self
     */
    public function setTotalTransferableBalance(?float $totalTransferableBalance): self
    {
        $this->totalTransferableBalance = $totalTransferableBalance;
        return $this;
    }

    /**
     * 总可用余额(单位元)
     * @return float
     */
    public function getTotalValidBalance(): ?float
    {
        return $this->totalValidBalance;
    }

    /**
     * 总可用余额(单位元)
     * @param float $totalValidBalance
     * @return self
     */
    public function setTotalValidBalance(?float $totalValidBalance): self
    {
        $this->totalValidBalance = $totalValidBalance;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->nonGrantBalance !== null) {
            $result['non_grant_balance'] = $this->nonGrantBalance;
        }
        if ($this->nonGrantTransferableBalance !== null) {
            $result['non_grant_transferable_balance'] = $this->nonGrantTransferableBalance;
        }
        if ($this->nonGrantValidBalance !== null) {
            $result['non_grant_valid_balance'] = $this->nonGrantValidBalance;
        }
        if ($this->totalBalance !== null) {
            $result['total_balance'] = $this->totalBalance;
        }
        if ($this->totalTransferableBalance !== null) {
            $result['total_transferable_balance'] = $this->totalTransferableBalance;
        }
        if ($this->totalValidBalance !== null) {
            $result['total_valid_balance'] = $this->totalValidBalance;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['non_grant_balance'] ?? null) !== null) {
            $obj->nonGrantBalance = (float) $v;
        }
        if (($v = $data['non_grant_transferable_balance'] ?? null) !== null) {
            $obj->nonGrantTransferableBalance = (float) $v;
        }
        if (($v = $data['non_grant_valid_balance'] ?? null) !== null) {
            $obj->nonGrantValidBalance = (float) $v;
        }
        if (($v = $data['total_balance'] ?? null) !== null) {
            $obj->totalBalance = (float) $v;
        }
        if (($v = $data['total_transferable_balance'] ?? null) !== null) {
            $obj->totalTransferableBalance = (float) $v;
        }
        if (($v = $data['total_valid_balance'] ?? null) !== null) {
            $obj->totalValidBalance = (float) $v;
        }
        return $obj;
    }
}
