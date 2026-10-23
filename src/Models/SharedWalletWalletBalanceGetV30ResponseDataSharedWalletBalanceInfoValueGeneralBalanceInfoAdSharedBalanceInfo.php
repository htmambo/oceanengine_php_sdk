<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletBalanceGetV30ResponseDataSharedWalletBalanceInfoValueGeneralBalanceInfoAdSharedBalanceInfo implements \JsonSerializable
{
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
