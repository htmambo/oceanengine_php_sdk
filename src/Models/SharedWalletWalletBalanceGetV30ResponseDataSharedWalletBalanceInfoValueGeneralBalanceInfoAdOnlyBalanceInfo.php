<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdOnlyBalanceInfo implements \JsonSerializable
{
    /**
     * 授信竞价可用余额(单位元)
     * @var float
     */
    protected ?float $creditBiddingValidBalance = null;

    /**
     * 授信品牌可用余额(单位元)
     * @var float
     */
    protected ?float $creditBrandValidBalance = null;

    /**
     * 授信通用可用余额(单位元)
     * @var float
     */
    protected ?float $creditGeneralValidBalance = null;

    /**
     * 预借款竞价可用余额(单位元)
     * @var float
     */
    protected ?float $preloanBiddingValidBalance = null;

    /**
     * 预借款品牌可用余额(单位元)
     * @var float
     */
    protected ?float $preloanBrandValidBalance = null;

    /**
     * 预借款通用可用余额(单位元)
     * @var float
     */
    protected ?float $preloanGeneralValidBalance = null;

    /**
     * 预付竞价可用余额(单位元)
     * @var float
     */
    protected ?float $prepayBiddingValidBalance = null;

    /**
     * 预付品牌可用余额(单位元)
     * @var float
     */
    protected ?float $prepayBrandValidBalance = null;

    /**
     * 预付通用可用余额(单位元)
     * @var float
     */
    protected ?float $prepayGeneralValidBalance = null;

    /**
     * 总余额(单位元)
     * @var float
     */
    protected ?float $totalBalance = null;

    /**
     * 总可用余额(单位元)
     * @var float
     */
    protected ?float $totalValidBalance = null;

    /**
     * 授信竞价可用余额(单位元)
     * @return float
     */
    public function getCreditBiddingValidBalance(): ?float
    {
        return $this->creditBiddingValidBalance;
    }

    /**
     * 授信竞价可用余额(单位元)
     * @param float $creditBiddingValidBalance
     * @return self
     */
    public function setCreditBiddingValidBalance(?float $creditBiddingValidBalance): self
    {
        $this->creditBiddingValidBalance = $creditBiddingValidBalance;
        return $this;
    }

    /**
     * 授信品牌可用余额(单位元)
     * @return float
     */
    public function getCreditBrandValidBalance(): ?float
    {
        return $this->creditBrandValidBalance;
    }

    /**
     * 授信品牌可用余额(单位元)
     * @param float $creditBrandValidBalance
     * @return self
     */
    public function setCreditBrandValidBalance(?float $creditBrandValidBalance): self
    {
        $this->creditBrandValidBalance = $creditBrandValidBalance;
        return $this;
    }

    /**
     * 授信通用可用余额(单位元)
     * @return float
     */
    public function getCreditGeneralValidBalance(): ?float
    {
        return $this->creditGeneralValidBalance;
    }

    /**
     * 授信通用可用余额(单位元)
     * @param float $creditGeneralValidBalance
     * @return self
     */
    public function setCreditGeneralValidBalance(?float $creditGeneralValidBalance): self
    {
        $this->creditGeneralValidBalance = $creditGeneralValidBalance;
        return $this;
    }

    /**
     * 预借款竞价可用余额(单位元)
     * @return float
     */
    public function getPreloanBiddingValidBalance(): ?float
    {
        return $this->preloanBiddingValidBalance;
    }

    /**
     * 预借款竞价可用余额(单位元)
     * @param float $preloanBiddingValidBalance
     * @return self
     */
    public function setPreloanBiddingValidBalance(?float $preloanBiddingValidBalance): self
    {
        $this->preloanBiddingValidBalance = $preloanBiddingValidBalance;
        return $this;
    }

    /**
     * 预借款品牌可用余额(单位元)
     * @return float
     */
    public function getPreloanBrandValidBalance(): ?float
    {
        return $this->preloanBrandValidBalance;
    }

    /**
     * 预借款品牌可用余额(单位元)
     * @param float $preloanBrandValidBalance
     * @return self
     */
    public function setPreloanBrandValidBalance(?float $preloanBrandValidBalance): self
    {
        $this->preloanBrandValidBalance = $preloanBrandValidBalance;
        return $this;
    }

    /**
     * 预借款通用可用余额(单位元)
     * @return float
     */
    public function getPreloanGeneralValidBalance(): ?float
    {
        return $this->preloanGeneralValidBalance;
    }

    /**
     * 预借款通用可用余额(单位元)
     * @param float $preloanGeneralValidBalance
     * @return self
     */
    public function setPreloanGeneralValidBalance(?float $preloanGeneralValidBalance): self
    {
        $this->preloanGeneralValidBalance = $preloanGeneralValidBalance;
        return $this;
    }

    /**
     * 预付竞价可用余额(单位元)
     * @return float
     */
    public function getPrepayBiddingValidBalance(): ?float
    {
        return $this->prepayBiddingValidBalance;
    }

    /**
     * 预付竞价可用余额(单位元)
     * @param float $prepayBiddingValidBalance
     * @return self
     */
    public function setPrepayBiddingValidBalance(?float $prepayBiddingValidBalance): self
    {
        $this->prepayBiddingValidBalance = $prepayBiddingValidBalance;
        return $this;
    }

    /**
     * 预付品牌可用余额(单位元)
     * @return float
     */
    public function getPrepayBrandValidBalance(): ?float
    {
        return $this->prepayBrandValidBalance;
    }

    /**
     * 预付品牌可用余额(单位元)
     * @param float $prepayBrandValidBalance
     * @return self
     */
    public function setPrepayBrandValidBalance(?float $prepayBrandValidBalance): self
    {
        $this->prepayBrandValidBalance = $prepayBrandValidBalance;
        return $this;
    }

    /**
     * 预付通用可用余额(单位元)
     * @return float
     */
    public function getPrepayGeneralValidBalance(): ?float
    {
        return $this->prepayGeneralValidBalance;
    }

    /**
     * 预付通用可用余额(单位元)
     * @param float $prepayGeneralValidBalance
     * @return self
     */
    public function setPrepayGeneralValidBalance(?float $prepayGeneralValidBalance): self
    {
        $this->prepayGeneralValidBalance = $prepayGeneralValidBalance;
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
        if ($this->creditBiddingValidBalance !== null) {
            $result['credit_bidding_valid_balance'] = $this->creditBiddingValidBalance;
        }
        if ($this->creditBrandValidBalance !== null) {
            $result['credit_brand_valid_balance'] = $this->creditBrandValidBalance;
        }
        if ($this->creditGeneralValidBalance !== null) {
            $result['credit_general_valid_balance'] = $this->creditGeneralValidBalance;
        }
        if ($this->preloanBiddingValidBalance !== null) {
            $result['preloan_bidding_valid_balance'] = $this->preloanBiddingValidBalance;
        }
        if ($this->preloanBrandValidBalance !== null) {
            $result['preloan_brand_valid_balance'] = $this->preloanBrandValidBalance;
        }
        if ($this->preloanGeneralValidBalance !== null) {
            $result['preloan_general_valid_balance'] = $this->preloanGeneralValidBalance;
        }
        if ($this->prepayBiddingValidBalance !== null) {
            $result['prepay_bidding_valid_balance'] = $this->prepayBiddingValidBalance;
        }
        if ($this->prepayBrandValidBalance !== null) {
            $result['prepay_brand_valid_balance'] = $this->prepayBrandValidBalance;
        }
        if ($this->prepayGeneralValidBalance !== null) {
            $result['prepay_general_valid_balance'] = $this->prepayGeneralValidBalance;
        }
        if ($this->totalBalance !== null) {
            $result['total_balance'] = $this->totalBalance;
        }
        if ($this->totalValidBalance !== null) {
            $result['total_valid_balance'] = $this->totalValidBalance;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['credit_bidding_valid_balance'] ?? null) !== null) {
            $obj->creditBiddingValidBalance = (float) $v;
        }
        if (($v = $data['credit_brand_valid_balance'] ?? null) !== null) {
            $obj->creditBrandValidBalance = (float) $v;
        }
        if (($v = $data['credit_general_valid_balance'] ?? null) !== null) {
            $obj->creditGeneralValidBalance = (float) $v;
        }
        if (($v = $data['preloan_bidding_valid_balance'] ?? null) !== null) {
            $obj->preloanBiddingValidBalance = (float) $v;
        }
        if (($v = $data['preloan_brand_valid_balance'] ?? null) !== null) {
            $obj->preloanBrandValidBalance = (float) $v;
        }
        if (($v = $data['preloan_general_valid_balance'] ?? null) !== null) {
            $obj->preloanGeneralValidBalance = (float) $v;
        }
        if (($v = $data['prepay_bidding_valid_balance'] ?? null) !== null) {
            $obj->prepayBiddingValidBalance = (float) $v;
        }
        if (($v = $data['prepay_brand_valid_balance'] ?? null) !== null) {
            $obj->prepayBrandValidBalance = (float) $v;
        }
        if (($v = $data['prepay_general_valid_balance'] ?? null) !== null) {
            $obj->prepayGeneralValidBalance = (float) $v;
        }
        if (($v = $data['total_balance'] ?? null) !== null) {
            $obj->totalBalance = (float) $v;
        }
        if (($v = $data['total_valid_balance'] ?? null) !== null) {
            $obj->totalValidBalance = (float) $v;
        }
        return $obj;
    }
}
