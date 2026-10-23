<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanFinanceDetailGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * 非赠款余额
     * @var int
     */
    protected ?int $cashBalance = null;

    /**
     * 非赠款消耗
     * @var int
     */
    protected ?int $cashCost = null;

    /**
     * 余额总消耗
     * @var int
     */
    protected ?int $cost = null;

    /**
     * 优惠券消耗
     * @var int
     */
    protected ?int $couponCost = null;

    /**
     * 日期，格式 2021-04-05
     * @var string
     */
    protected ?string $date = null;

    /**
     * 消返红包消耗
     * @var int
     */
    protected ?int $deductionCost = null;

    /**
     * 赠款余额
     * @var int
     */
    protected ?int $grantBalance = null;

    /**
     * 赠款消耗
     * @var int
     */
    protected ?int $grantCost = null;

    /**
     * 总存入
     * @var int
     */
    protected ?int $income = null;

    /**
     * 随心推非赠款消耗
     * @var int
     */
    protected ?int $qcAwemeCashCost = null;

    /**
     * 随心推消耗
     * @var int
     */
    protected ?int $qcAwemeCost = null;

    /**
     * 随心推赠款消耗
     * @var int
     */
    protected ?int $qcAwemeGrantCost = null;

    /**
     * 共享余额消耗
     * @var int
     */
    protected ?int $shareCost = null;

    /**
     * 共享钱包消耗
     * @var int
     */
    protected ?int $shareWalletCost = null;

    /**
     * 总余额
     * @var int
     */
    protected ?int $totalBalance = null;

    /**
     * 总转入
     * @var int
     */
    protected ?int $transferIn = null;

    /**
     * 总转出
     * @var int
     */
    protected ?int $transferOut = null;

    /**
     * @var \Oceanengine\Models\QianchuanFinanceDetailGetV10DataListViewDeliveryType
     */
    protected ?string $viewDeliveryType = null;

    /**
     * 非赠款余额
     * @return int
     */
    public function getCashBalance(): ?int
    {
        return $this->cashBalance;
    }

    /**
     * 非赠款余额
     * @param int $cashBalance
     * @return self
     */
    public function setCashBalance(?int $cashBalance): self
    {
        $this->cashBalance = $cashBalance;
        return $this;
    }

    /**
     * 非赠款消耗
     * @return int
     */
    public function getCashCost(): ?int
    {
        return $this->cashCost;
    }

    /**
     * 非赠款消耗
     * @param int $cashCost
     * @return self
     */
    public function setCashCost(?int $cashCost): self
    {
        $this->cashCost = $cashCost;
        return $this;
    }

    /**
     * 余额总消耗
     * @return int
     */
    public function getCost(): ?int
    {
        return $this->cost;
    }

    /**
     * 余额总消耗
     * @param int $cost
     * @return self
     */
    public function setCost(?int $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * 优惠券消耗
     * @return int
     */
    public function getCouponCost(): ?int
    {
        return $this->couponCost;
    }

    /**
     * 优惠券消耗
     * @param int $couponCost
     * @return self
     */
    public function setCouponCost(?int $couponCost): self
    {
        $this->couponCost = $couponCost;
        return $this;
    }

    /**
     * 日期，格式 2021-04-05
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * 日期，格式 2021-04-05
     * @param string $date
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * 消返红包消耗
     * @return int
     */
    public function getDeductionCost(): ?int
    {
        return $this->deductionCost;
    }

    /**
     * 消返红包消耗
     * @param int $deductionCost
     * @return self
     */
    public function setDeductionCost(?int $deductionCost): self
    {
        $this->deductionCost = $deductionCost;
        return $this;
    }

    /**
     * 赠款余额
     * @return int
     */
    public function getGrantBalance(): ?int
    {
        return $this->grantBalance;
    }

    /**
     * 赠款余额
     * @param int $grantBalance
     * @return self
     */
    public function setGrantBalance(?int $grantBalance): self
    {
        $this->grantBalance = $grantBalance;
        return $this;
    }

    /**
     * 赠款消耗
     * @return int
     */
    public function getGrantCost(): ?int
    {
        return $this->grantCost;
    }

    /**
     * 赠款消耗
     * @param int $grantCost
     * @return self
     */
    public function setGrantCost(?int $grantCost): self
    {
        $this->grantCost = $grantCost;
        return $this;
    }

    /**
     * 总存入
     * @return int
     */
    public function getIncome(): ?int
    {
        return $this->income;
    }

    /**
     * 总存入
     * @param int $income
     * @return self
     */
    public function setIncome(?int $income): self
    {
        $this->income = $income;
        return $this;
    }

    /**
     * 随心推非赠款消耗
     * @return int
     */
    public function getQcAwemeCashCost(): ?int
    {
        return $this->qcAwemeCashCost;
    }

    /**
     * 随心推非赠款消耗
     * @param int $qcAwemeCashCost
     * @return self
     */
    public function setQcAwemeCashCost(?int $qcAwemeCashCost): self
    {
        $this->qcAwemeCashCost = $qcAwemeCashCost;
        return $this;
    }

    /**
     * 随心推消耗
     * @return int
     */
    public function getQcAwemeCost(): ?int
    {
        return $this->qcAwemeCost;
    }

    /**
     * 随心推消耗
     * @param int $qcAwemeCost
     * @return self
     */
    public function setQcAwemeCost(?int $qcAwemeCost): self
    {
        $this->qcAwemeCost = $qcAwemeCost;
        return $this;
    }

    /**
     * 随心推赠款消耗
     * @return int
     */
    public function getQcAwemeGrantCost(): ?int
    {
        return $this->qcAwemeGrantCost;
    }

    /**
     * 随心推赠款消耗
     * @param int $qcAwemeGrantCost
     * @return self
     */
    public function setQcAwemeGrantCost(?int $qcAwemeGrantCost): self
    {
        $this->qcAwemeGrantCost = $qcAwemeGrantCost;
        return $this;
    }

    /**
     * 共享余额消耗
     * @return int
     */
    public function getShareCost(): ?int
    {
        return $this->shareCost;
    }

    /**
     * 共享余额消耗
     * @param int $shareCost
     * @return self
     */
    public function setShareCost(?int $shareCost): self
    {
        $this->shareCost = $shareCost;
        return $this;
    }

    /**
     * 共享钱包消耗
     * @return int
     */
    public function getShareWalletCost(): ?int
    {
        return $this->shareWalletCost;
    }

    /**
     * 共享钱包消耗
     * @param int $shareWalletCost
     * @return self
     */
    public function setShareWalletCost(?int $shareWalletCost): self
    {
        $this->shareWalletCost = $shareWalletCost;
        return $this;
    }

    /**
     * 总余额
     * @return int
     */
    public function getTotalBalance(): ?int
    {
        return $this->totalBalance;
    }

    /**
     * 总余额
     * @param int $totalBalance
     * @return self
     */
    public function setTotalBalance(?int $totalBalance): self
    {
        $this->totalBalance = $totalBalance;
        return $this;
    }

    /**
     * 总转入
     * @return int
     */
    public function getTransferIn(): ?int
    {
        return $this->transferIn;
    }

    /**
     * 总转入
     * @param int $transferIn
     * @return self
     */
    public function setTransferIn(?int $transferIn): self
    {
        $this->transferIn = $transferIn;
        return $this;
    }

    /**
     * 总转出
     * @return int
     */
    public function getTransferOut(): ?int
    {
        return $this->transferOut;
    }

    /**
     * 总转出
     * @param int $transferOut
     * @return self
     */
    public function setTransferOut(?int $transferOut): self
    {
        $this->transferOut = $transferOut;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanFinanceDetailGetV10DataListViewDeliveryType
     */
    public function getViewDeliveryType(): ?string
    {
        return $this->viewDeliveryType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanFinanceDetailGetV10DataListViewDeliveryType $viewDeliveryType
     * @return self
     */
    public function setViewDeliveryType(?string $viewDeliveryType): self
    {
        $this->viewDeliveryType = $viewDeliveryType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->cashBalance !== null) {
            $result['cash_balance'] = $this->cashBalance;
        }
        if ($this->cashCost !== null) {
            $result['cash_cost'] = $this->cashCost;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->couponCost !== null) {
            $result['coupon_cost'] = $this->couponCost;
        }
        if ($this->date !== null) {
            $result['date'] = $this->date;
        }
        if ($this->deductionCost !== null) {
            $result['deduction_cost'] = $this->deductionCost;
        }
        if ($this->grantBalance !== null) {
            $result['grant_balance'] = $this->grantBalance;
        }
        if ($this->grantCost !== null) {
            $result['grant_cost'] = $this->grantCost;
        }
        if ($this->income !== null) {
            $result['income'] = $this->income;
        }
        if ($this->qcAwemeCashCost !== null) {
            $result['qc_aweme_cash_cost'] = $this->qcAwemeCashCost;
        }
        if ($this->qcAwemeCost !== null) {
            $result['qc_aweme_cost'] = $this->qcAwemeCost;
        }
        if ($this->qcAwemeGrantCost !== null) {
            $result['qc_aweme_grant_cost'] = $this->qcAwemeGrantCost;
        }
        if ($this->shareCost !== null) {
            $result['share_cost'] = $this->shareCost;
        }
        if ($this->shareWalletCost !== null) {
            $result['share_wallet_cost'] = $this->shareWalletCost;
        }
        if ($this->totalBalance !== null) {
            $result['total_balance'] = $this->totalBalance;
        }
        if ($this->transferIn !== null) {
            $result['transfer_in'] = $this->transferIn;
        }
        if ($this->transferOut !== null) {
            $result['transfer_out'] = $this->transferOut;
        }
        if ($this->viewDeliveryType !== null) {
            $result['view_delivery_type'] = $this->viewDeliveryType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cash_balance'] ?? null) !== null) {
            $obj->cashBalance = (int) $v;
        }
        if (($v = $data['cash_cost'] ?? null) !== null) {
            $obj->cashCost = (int) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (int) $v;
        }
        if (($v = $data['coupon_cost'] ?? null) !== null) {
            $obj->couponCost = (int) $v;
        }
        if (($v = $data['date'] ?? null) !== null) {
            $obj->date = (string) $v;
        }
        if (($v = $data['deduction_cost'] ?? null) !== null) {
            $obj->deductionCost = (int) $v;
        }
        if (($v = $data['grant_balance'] ?? null) !== null) {
            $obj->grantBalance = (int) $v;
        }
        if (($v = $data['grant_cost'] ?? null) !== null) {
            $obj->grantCost = (int) $v;
        }
        if (($v = $data['income'] ?? null) !== null) {
            $obj->income = (int) $v;
        }
        if (($v = $data['qc_aweme_cash_cost'] ?? null) !== null) {
            $obj->qcAwemeCashCost = (int) $v;
        }
        if (($v = $data['qc_aweme_cost'] ?? null) !== null) {
            $obj->qcAwemeCost = (int) $v;
        }
        if (($v = $data['qc_aweme_grant_cost'] ?? null) !== null) {
            $obj->qcAwemeGrantCost = (int) $v;
        }
        if (($v = $data['share_cost'] ?? null) !== null) {
            $obj->shareCost = (int) $v;
        }
        if (($v = $data['share_wallet_cost'] ?? null) !== null) {
            $obj->shareWalletCost = (int) $v;
        }
        if (($v = $data['total_balance'] ?? null) !== null) {
            $obj->totalBalance = (int) $v;
        }
        if (($v = $data['transfer_in'] ?? null) !== null) {
            $obj->transferIn = (int) $v;
        }
        if (($v = $data['transfer_out'] ?? null) !== null) {
            $obj->transferOut = (int) $v;
        }
        if (($v = $data['view_delivery_type'] ?? null) !== null) {
            $obj->viewDeliveryType = (string) $v;
        }
        return $obj;
    }
}
