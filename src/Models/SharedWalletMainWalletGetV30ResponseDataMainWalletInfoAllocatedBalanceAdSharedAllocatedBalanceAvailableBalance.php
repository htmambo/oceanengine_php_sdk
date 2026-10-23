<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletMainWalletGetV30ResponseDataMainWalletInfoAllocatedBalanceAdSharedAllocatedBalanceAvailableBalance implements \JsonSerializable
{
    /**
     * 预付竞价可用余额(单位元)
     * @var float
     */
    protected ?float $prepayBiddingBalance = null;

    /**
     * 预付品牌可用余额(单位元)
     * @var float
     */
    protected ?float $prepayBrandBalance = null;

    /**
     * 预付通用可用余额(单位元)
     * @var float
     */
    protected ?float $prepayGeneralBalance = null;

    /**
     * 预付竞价可用余额(单位元)
     * @return float
     */
    public function getPrepayBiddingBalance(): ?float
    {
        return $this->prepayBiddingBalance;
    }

    /**
     * 预付竞价可用余额(单位元)
     * @param float $prepayBiddingBalance
     * @return self
     */
    public function setPrepayBiddingBalance(?float $prepayBiddingBalance): self
    {
        $this->prepayBiddingBalance = $prepayBiddingBalance;
        return $this;
    }

    /**
     * 预付品牌可用余额(单位元)
     * @return float
     */
    public function getPrepayBrandBalance(): ?float
    {
        return $this->prepayBrandBalance;
    }

    /**
     * 预付品牌可用余额(单位元)
     * @param float $prepayBrandBalance
     * @return self
     */
    public function setPrepayBrandBalance(?float $prepayBrandBalance): self
    {
        $this->prepayBrandBalance = $prepayBrandBalance;
        return $this;
    }

    /**
     * 预付通用可用余额(单位元)
     * @return float
     */
    public function getPrepayGeneralBalance(): ?float
    {
        return $this->prepayGeneralBalance;
    }

    /**
     * 预付通用可用余额(单位元)
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
