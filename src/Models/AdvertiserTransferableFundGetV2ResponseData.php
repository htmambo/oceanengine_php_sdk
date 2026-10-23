<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserTransferableFundGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $bidCreditValid = null;

    /**
     * @var float
     */
    protected ?float $bidPrepayValid = null;

    /**
     * @var float
     */
    protected ?float $brandCreditValid = null;

    /**
     * @var float
     */
    protected ?float $brandPrepayValid = null;

    /**
     * @var float
     */
    protected ?float $cashTransferBalance = null;

    /**
     * @var float
     */
    protected ?float $depositAmount = null;

    /**
     * @var float
     */
    protected ?float $grantValid = null;

    /**
     * @var float
     */
    protected ?float $totalTransferBalance = null;

    /**
     * @var float
     */
    protected ?float $universalCreditValid = null;

    /**
     * @var float
     */
    protected ?float $universalPrepayValid = null;

    /**
     * @return float
     */
    public function getBidCreditValid(): ?float
    {
        return $this->bidCreditValid;
    }

    /**
     * @param float $bidCreditValid
     * @return self
     */
    public function setBidCreditValid(?float $bidCreditValid): self
    {
        $this->bidCreditValid = $bidCreditValid;
        return $this;
    }

    /**
     * @return float
     */
    public function getBidPrepayValid(): ?float
    {
        return $this->bidPrepayValid;
    }

    /**
     * @param float $bidPrepayValid
     * @return self
     */
    public function setBidPrepayValid(?float $bidPrepayValid): self
    {
        $this->bidPrepayValid = $bidPrepayValid;
        return $this;
    }

    /**
     * @return float
     */
    public function getBrandCreditValid(): ?float
    {
        return $this->brandCreditValid;
    }

    /**
     * @param float $brandCreditValid
     * @return self
     */
    public function setBrandCreditValid(?float $brandCreditValid): self
    {
        $this->brandCreditValid = $brandCreditValid;
        return $this;
    }

    /**
     * @return float
     */
    public function getBrandPrepayValid(): ?float
    {
        return $this->brandPrepayValid;
    }

    /**
     * @param float $brandPrepayValid
     * @return self
     */
    public function setBrandPrepayValid(?float $brandPrepayValid): self
    {
        $this->brandPrepayValid = $brandPrepayValid;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashTransferBalance(): ?float
    {
        return $this->cashTransferBalance;
    }

    /**
     * @param float $cashTransferBalance
     * @return self
     */
    public function setCashTransferBalance(?float $cashTransferBalance): self
    {
        $this->cashTransferBalance = $cashTransferBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getDepositAmount(): ?float
    {
        return $this->depositAmount;
    }

    /**
     * @param float $depositAmount
     * @return self
     */
    public function setDepositAmount(?float $depositAmount): self
    {
        $this->depositAmount = $depositAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrantValid(): ?float
    {
        return $this->grantValid;
    }

    /**
     * @param float $grantValid
     * @return self
     */
    public function setGrantValid(?float $grantValid): self
    {
        $this->grantValid = $grantValid;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalTransferBalance(): ?float
    {
        return $this->totalTransferBalance;
    }

    /**
     * @param float $totalTransferBalance
     * @return self
     */
    public function setTotalTransferBalance(?float $totalTransferBalance): self
    {
        $this->totalTransferBalance = $totalTransferBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getUniversalCreditValid(): ?float
    {
        return $this->universalCreditValid;
    }

    /**
     * @param float $universalCreditValid
     * @return self
     */
    public function setUniversalCreditValid(?float $universalCreditValid): self
    {
        $this->universalCreditValid = $universalCreditValid;
        return $this;
    }

    /**
     * @return float
     */
    public function getUniversalPrepayValid(): ?float
    {
        return $this->universalPrepayValid;
    }

    /**
     * @param float $universalPrepayValid
     * @return self
     */
    public function setUniversalPrepayValid(?float $universalPrepayValid): self
    {
        $this->universalPrepayValid = $universalPrepayValid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bidCreditValid !== null) {
            $result['bid_credit_valid'] = $this->bidCreditValid;
        }
        if ($this->bidPrepayValid !== null) {
            $result['bid_prepay_valid'] = $this->bidPrepayValid;
        }
        if ($this->brandCreditValid !== null) {
            $result['brand_credit_valid'] = $this->brandCreditValid;
        }
        if ($this->brandPrepayValid !== null) {
            $result['brand_prepay_valid'] = $this->brandPrepayValid;
        }
        if ($this->cashTransferBalance !== null) {
            $result['cash_transfer_balance'] = $this->cashTransferBalance;
        }
        if ($this->depositAmount !== null) {
            $result['deposit_amount'] = $this->depositAmount;
        }
        if ($this->grantValid !== null) {
            $result['grant_valid'] = $this->grantValid;
        }
        if ($this->totalTransferBalance !== null) {
            $result['total_transfer_balance'] = $this->totalTransferBalance;
        }
        if ($this->universalCreditValid !== null) {
            $result['universal_credit_valid'] = $this->universalCreditValid;
        }
        if ($this->universalPrepayValid !== null) {
            $result['universal_prepay_valid'] = $this->universalPrepayValid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid_credit_valid'] ?? null) !== null) {
            $obj->bidCreditValid = (float) $v;
        }
        if (($v = $data['bid_prepay_valid'] ?? null) !== null) {
            $obj->bidPrepayValid = (float) $v;
        }
        if (($v = $data['brand_credit_valid'] ?? null) !== null) {
            $obj->brandCreditValid = (float) $v;
        }
        if (($v = $data['brand_prepay_valid'] ?? null) !== null) {
            $obj->brandPrepayValid = (float) $v;
        }
        if (($v = $data['cash_transfer_balance'] ?? null) !== null) {
            $obj->cashTransferBalance = (float) $v;
        }
        if (($v = $data['deposit_amount'] ?? null) !== null) {
            $obj->depositAmount = (float) $v;
        }
        if (($v = $data['grant_valid'] ?? null) !== null) {
            $obj->grantValid = (float) $v;
        }
        if (($v = $data['total_transfer_balance'] ?? null) !== null) {
            $obj->totalTransferBalance = (float) $v;
        }
        if (($v = $data['universal_credit_valid'] ?? null) !== null) {
            $obj->universalCreditValid = (float) $v;
        }
        if (($v = $data['universal_prepay_valid'] ?? null) !== null) {
            $obj->universalPrepayValid = (float) $v;
        }
        return $obj;
    }
}
