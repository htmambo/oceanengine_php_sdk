<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserFundDailyStatV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var float
     */
    protected ?float $balance = null;

    /**
     * @var float
     */
    protected ?float $cashCost = null;

    /**
     * @var float
     */
    protected ?float $companyWalletCost = null;

    /**
     * @var float
     */
    protected ?float $compensationRewardCost = null;

    /**
     * @var float
     */
    protected ?float $cost = null;

    /**
     * @var string
     */
    protected ?string $date = null;

    /**
     * @var float
     */
    protected ?float $deductionCost = null;

    /**
     * @var float
     */
    protected ?float $frozen = null;

    /**
     * @var float
     */
    protected ?float $grantBalance = null;

    /**
     * @var float
     */
    protected ?float $income = null;

    /**
     * @var float
     */
    protected ?float $nonGrantBalance = null;

    /**
     * @var float
     */
    protected ?float $realtimeCouponCost = null;

    /**
     * @var float
     */
    protected ?float $returnGoodsRewardCost = null;

    /**
     * @var float
     */
    protected ?float $rewardCost = null;

    /**
     * @var float
     */
    protected ?float $sharedWalletCost = null;

    /**
     * @var float
     */
    protected ?float $transferIn = null;

    /**
     * @var float
     */
    protected ?float $transferOut = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return self
     */
    public function setBalance(?float $balance): self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getCashCost(): ?float
    {
        return $this->cashCost;
    }

    /**
     * @param float $cashCost
     * @return self
     */
    public function setCashCost(?float $cashCost): self
    {
        $this->cashCost = $cashCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCompanyWalletCost(): ?float
    {
        return $this->companyWalletCost;
    }

    /**
     * @param float $companyWalletCost
     * @return self
     */
    public function setCompanyWalletCost(?float $companyWalletCost): self
    {
        $this->companyWalletCost = $companyWalletCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCompensationRewardCost(): ?float
    {
        return $this->compensationRewardCost;
    }

    /**
     * @param float $compensationRewardCost
     * @return self
     */
    public function setCompensationRewardCost(?float $compensationRewardCost): self
    {
        $this->compensationRewardCost = $compensationRewardCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeductionCost(): ?float
    {
        return $this->deductionCost;
    }

    /**
     * @param float $deductionCost
     * @return self
     */
    public function setDeductionCost(?float $deductionCost): self
    {
        $this->deductionCost = $deductionCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getFrozen(): ?float
    {
        return $this->frozen;
    }

    /**
     * @param float $frozen
     * @return self
     */
    public function setFrozen(?float $frozen): self
    {
        $this->frozen = $frozen;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrantBalance(): ?float
    {
        return $this->grantBalance;
    }

    /**
     * @param float $grantBalance
     * @return self
     */
    public function setGrantBalance(?float $grantBalance): self
    {
        $this->grantBalance = $grantBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getIncome(): ?float
    {
        return $this->income;
    }

    /**
     * @param float $income
     * @return self
     */
    public function setIncome(?float $income): self
    {
        $this->income = $income;
        return $this;
    }

    /**
     * @return float
     */
    public function getNonGrantBalance(): ?float
    {
        return $this->nonGrantBalance;
    }

    /**
     * @param float $nonGrantBalance
     * @return self
     */
    public function setNonGrantBalance(?float $nonGrantBalance): self
    {
        $this->nonGrantBalance = $nonGrantBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getRealtimeCouponCost(): ?float
    {
        return $this->realtimeCouponCost;
    }

    /**
     * @param float $realtimeCouponCost
     * @return self
     */
    public function setRealtimeCouponCost(?float $realtimeCouponCost): self
    {
        $this->realtimeCouponCost = $realtimeCouponCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getReturnGoodsRewardCost(): ?float
    {
        return $this->returnGoodsRewardCost;
    }

    /**
     * @param float $returnGoodsRewardCost
     * @return self
     */
    public function setReturnGoodsRewardCost(?float $returnGoodsRewardCost): self
    {
        $this->returnGoodsRewardCost = $returnGoodsRewardCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getRewardCost(): ?float
    {
        return $this->rewardCost;
    }

    /**
     * @param float $rewardCost
     * @return self
     */
    public function setRewardCost(?float $rewardCost): self
    {
        $this->rewardCost = $rewardCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getSharedWalletCost(): ?float
    {
        return $this->sharedWalletCost;
    }

    /**
     * @param float $sharedWalletCost
     * @return self
     */
    public function setSharedWalletCost(?float $sharedWalletCost): self
    {
        $this->sharedWalletCost = $sharedWalletCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getTransferIn(): ?float
    {
        return $this->transferIn;
    }

    /**
     * @param float $transferIn
     * @return self
     */
    public function setTransferIn(?float $transferIn): self
    {
        $this->transferIn = $transferIn;
        return $this;
    }

    /**
     * @return float
     */
    public function getTransferOut(): ?float
    {
        return $this->transferOut;
    }

    /**
     * @param float $transferOut
     * @return self
     */
    public function setTransferOut(?float $transferOut): self
    {
        $this->transferOut = $transferOut;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->balance !== null) {
            $result['balance'] = $this->balance;
        }
        if ($this->cashCost !== null) {
            $result['cash_cost'] = $this->cashCost;
        }
        if ($this->companyWalletCost !== null) {
            $result['company_wallet_cost'] = $this->companyWalletCost;
        }
        if ($this->compensationRewardCost !== null) {
            $result['compensation_reward_cost'] = $this->compensationRewardCost;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->deductionCost !== null) {
            $result['deduction_cost'] = $this->deductionCost;
        }
        if ($this->frozen !== null) {
            $result['frozen'] = $this->frozen;
        }
        if ($this->grantBalance !== null) {
            $result['grant_balance'] = $this->grantBalance;
        }
        if ($this->income !== null) {
            $result['income'] = $this->income;
        }
        if ($this->nonGrantBalance !== null) {
            $result['non_grant_balance'] = $this->nonGrantBalance;
        }
        if ($this->realtimeCouponCost !== null) {
            $result['realtime_coupon_cost'] = $this->realtimeCouponCost;
        }
        if ($this->returnGoodsRewardCost !== null) {
            $result['return_goods_reward_cost'] = $this->returnGoodsRewardCost;
        }
        if ($this->rewardCost !== null) {
            $result['reward_cost'] = $this->rewardCost;
        }
        if ($this->sharedWalletCost !== null) {
            $result['shared_wallet_cost'] = $this->sharedWalletCost;
        }
        if ($this->transferIn !== null) {
            $result['transfer_in'] = $this->transferIn;
        }
        if ($this->transferOut !== null) {
            $result['transfer_out'] = $this->transferOut;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['balance'] ?? null) !== null) {
            $obj->balance = (float) $v;
        }
        if (($v = $data['cash_cost'] ?? null) !== null) {
            $obj->cashCost = (float) $v;
        }
        if (($v = $data['company_wallet_cost'] ?? null) !== null) {
            $obj->companyWalletCost = (float) $v;
        }
        if (($v = $data['compensation_reward_cost'] ?? null) !== null) {
            $obj->compensationRewardCost = (float) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['deduction_cost'] ?? null) !== null) {
            $obj->deductionCost = (float) $v;
        }
        if (($v = $data['frozen'] ?? null) !== null) {
            $obj->frozen = (float) $v;
        }
        if (($v = $data['grant_balance'] ?? null) !== null) {
            $obj->grantBalance = (float) $v;
        }
        if (($v = $data['income'] ?? null) !== null) {
            $obj->income = (float) $v;
        }
        if (($v = $data['non_grant_balance'] ?? null) !== null) {
            $obj->nonGrantBalance = (float) $v;
        }
        if (($v = $data['realtime_coupon_cost'] ?? null) !== null) {
            $obj->realtimeCouponCost = (float) $v;
        }
        if (($v = $data['return_goods_reward_cost'] ?? null) !== null) {
            $obj->returnGoodsRewardCost = (float) $v;
        }
        if (($v = $data['reward_cost'] ?? null) !== null) {
            $obj->rewardCost = (float) $v;
        }
        if (($v = $data['shared_wallet_cost'] ?? null) !== null) {
            $obj->sharedWalletCost = (float) $v;
        }
        if (($v = $data['transfer_in'] ?? null) !== null) {
            $obj->transferIn = (float) $v;
        }
        if (($v = $data['transfer_out'] ?? null) !== null) {
            $obj->transferOut = (float) $v;
        }
        return $obj;
    }
}
