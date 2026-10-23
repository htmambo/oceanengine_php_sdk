<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletMainWalletGetV30ResponseDataMainWalletInfoUnallocatedBalanceLocalOnlyUnallocatedBalanceUnavailableBalance implements \JsonSerializable
{
    /**
     * 授信竞价不可用余额(单位元)
     * @var float
     */
    protected ?float $creditBiddingBalance = null;

    /**
     * 授信品牌不可用余额(单位元)
     * @var float
     */
    protected ?float $creditBrandBalance = null;

    /**
     * 授信通用不可用余额(单位元)
     * @var float
     */
    protected ?float $creditGeneralBalance = null;

    /**
     * 预付竞价不可用余额(单位元)
     * @var float
     */
    protected ?float $prepayBiddingBalance = null;

    /**
     * 预付品牌不可用余额(单位元)
     * @var float
     */
    protected ?float $prepayBrandBalance = null;

    /**
     * 预付通用不可用余额(单位元)
     * @var float
     */
    protected ?float $prepayGeneralBalance = null;

    /**
     * 授信竞价不可用余额(单位元)
     * @return float
     */
    public function getCreditBiddingBalance(): ?float
    {
        return $this->creditBiddingBalance;
    }

    /**
     * 授信竞价不可用余额(单位元)
     * @param float $creditBiddingBalance
     * @return self
     */
    public function setCreditBiddingBalance(?float $creditBiddingBalance): self
    {
        $this->creditBiddingBalance = $creditBiddingBalance;
        return $this;
    }

    /**
     * 授信品牌不可用余额(单位元)
     * @return float
     */
    public function getCreditBrandBalance(): ?float
    {
        return $this->creditBrandBalance;
    }

    /**
     * 授信品牌不可用余额(单位元)
     * @param float $creditBrandBalance
     * @return self
     */
    public function setCreditBrandBalance(?float $creditBrandBalance): self
    {
        $this->creditBrandBalance = $creditBrandBalance;
        return $this;
    }

    /**
     * 授信通用不可用余额(单位元)
     * @return float
     */
    public function getCreditGeneralBalance(): ?float
    {
        return $this->creditGeneralBalance;
    }

    /**
     * 授信通用不可用余额(单位元)
     * @param float $creditGeneralBalance
     * @return self
     */
    public function setCreditGeneralBalance(?float $creditGeneralBalance): self
    {
        $this->creditGeneralBalance = $creditGeneralBalance;
        return $this;
    }

    /**
     * 预付竞价不可用余额(单位元)
     * @return float
     */
    public function getPrepayBiddingBalance(): ?float
    {
        return $this->prepayBiddingBalance;
    }

    /**
     * 预付竞价不可用余额(单位元)
     * @param float $prepayBiddingBalance
     * @return self
     */
    public function setPrepayBiddingBalance(?float $prepayBiddingBalance): self
    {
        $this->prepayBiddingBalance = $prepayBiddingBalance;
        return $this;
    }

    /**
     * 预付品牌不可用余额(单位元)
     * @return float
     */
    public function getPrepayBrandBalance(): ?float
    {
        return $this->prepayBrandBalance;
    }

    /**
     * 预付品牌不可用余额(单位元)
     * @param float $prepayBrandBalance
     * @return self
     */
    public function setPrepayBrandBalance(?float $prepayBrandBalance): self
    {
        $this->prepayBrandBalance = $prepayBrandBalance;
        return $this;
    }

    /**
     * 预付通用不可用余额(单位元)
     * @return float
     */
    public function getPrepayGeneralBalance(): ?float
    {
        return $this->prepayGeneralBalance;
    }

    /**
     * 预付通用不可用余额(单位元)
     * @param float $prepayGeneralBalance
     * @return self
     */
    public function setPrepayGeneralBalance(?float $prepayGeneralBalance): self
    {
        $this->prepayGeneralBalance = $prepayGeneralBalance;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creditBiddingBalance !== null) {
            $result['credit_bidding_balance'] = $this->creditBiddingBalance;
        }
        if ($this->creditBrandBalance !== null) {
            $result['credit_brand_balance'] = $this->creditBrandBalance;
        }
        if ($this->creditGeneralBalance !== null) {
            $result['credit_general_balance'] = $this->creditGeneralBalance;
        }
        if ($this->prepayBiddingBalance !== null) {
            $result['prepay_bidding_balance'] = $this->prepayBiddingBalance;
        }
        if ($this->prepayBrandBalance !== null) {
            $result['prepay_brand_balance'] = $this->prepayBrandBalance;
        }
        if ($this->prepayGeneralBalance !== null) {
            $result['prepay_general_balance'] = $this->prepayGeneralBalance;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['credit_bidding_balance'] ?? null) !== null) {
            $obj->creditBiddingBalance = (float) $v;
        }
        if (($v = $data['credit_brand_balance'] ?? null) !== null) {
            $obj->creditBrandBalance = (float) $v;
        }
        if (($v = $data['credit_general_balance'] ?? null) !== null) {
            $obj->creditGeneralBalance = (float) $v;
        }
        if (($v = $data['prepay_bidding_balance'] ?? null) !== null) {
            $obj->prepayBiddingBalance = (float) $v;
        }
        if (($v = $data['prepay_brand_balance'] ?? null) !== null) {
            $obj->prepayBrandBalance = (float) $v;
        }
        if (($v = $data['prepay_general_balance'] ?? null) !== null) {
            $obj->prepayGeneralBalance = (float) $v;
        }
        return $obj;
    }
}
