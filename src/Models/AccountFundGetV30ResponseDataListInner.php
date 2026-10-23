<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AccountFundGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var int
     */
    protected ?int $balance = null;

    /**
     * @var int
     */
    protected ?int $biddingCash = null;

    /**
     * @var int
     */
    protected ?int $biddingCreditBalance = null;

    /**
     * @var int
     */
    protected ?int $biddingCreditValidBalance = null;

    /**
     * 预借款竞价专用总余额
     * @var int
     */
    protected ?int $biddingPreloanBalance = null;

    /**
     * 预借款竞价专用可用余额
     * @var int
     */
    protected ?int $biddingPreloanValidBalance = null;

    /**
     * @var int
     */
    protected ?int $biddingPrepayBalance = null;

    /**
     * @var int
     */
    protected ?int $biddingPrepayValidBalance = null;

    /**
     * @var int
     */
    protected ?int $biddingValidGrant = null;

    /**
     * @var int
     */
    protected ?int $brandCash = null;

    /**
     * @var int
     */
    protected ?int $brandCreditBalance = null;

    /**
     * @var int
     */
    protected ?int $brandCreditValidBalance = null;

    /**
     * 预借款品牌专用总余额
     * @var int
     */
    protected ?int $brandPreloanBalance = null;

    /**
     * 预借款品牌专用可用余额
     * @var int
     */
    protected ?int $brandPreloanValidBalance = null;

    /**
     * @var int
     */
    protected ?int $brandPrepayBalance = null;

    /**
     * @var int
     */
    protected ?int $brandPrepayValidBalance = null;

    /**
     * @var int
     */
    protected ?int $brandValidGrant = null;

    /**
     * @var int
     */
    protected ?int $cash = null;

    /**
     * @var int
     */
    protected ?int $commonGrant = null;

    /**
     * @var int
     */
    protected ?int $compensationGrant = null;

    /**
     * @var int
     */
    protected ?int $compensationValidGrant = null;

    /**
     * @var int
     */
    protected ?int $creditBalance = null;

    /**
     * @var int
     */
    protected ?int $creditTransferBalance = null;

    /**
     * @var int
     */
    protected ?int $creditValidBalance = null;

    /**
     * @var int
     */
    protected ?int $defaultGrant = null;

    /**
     * @var int
     */
    protected ?int $generalCash = null;

    /**
     * @var int
     */
    protected ?int $generalCreditBalance = null;

    /**
     * @var int
     */
    protected ?int $generalCreditValidBalance = null;

    /**
     * 预借款通用总余额
     * @var int
     */
    protected ?int $generalPreloanBalance = null;

    /**
     * 预借款通用可用余额
     * @var int
     */
    protected ?int $generalPreloanValidBalance = null;

    /**
     * @var int
     */
    protected ?int $generalPrepayBalance = null;

    /**
     * @var int
     */
    protected ?int $generalPrepayValidBalance = null;

    /**
     * @var int
     */
    protected ?int $generalValidGrant = null;

    /**
     * @var int
     */
    protected ?int $grant = null;

    /**
     * 预借款总余额
     * @var int
     */
    protected ?int $preloanBalance = null;

    /**
     * 账户预借款可转余额
     * @var int
     */
    protected ?int $preloanTransferBalance = null;

    /**
     * 预借款可用总余额
     * @var int
     */
    protected ?int $preloanValidBalance = null;

    /**
     * @var int
     */
    protected ?int $prepayBalance = null;

    /**
     * @var int
     */
    protected ?int $prepayTransferBalance = null;

    /**
     * @var int
     */
    protected ?int $prepayValidBalance = null;

    /**
     * @var int
     */
    protected ?int $returnGoodsAbs = null;

    /**
     * @var int
     */
    protected ?int $searchGrant = null;

    /**
     * @var int
     */
    protected ?int $transferBalance = null;

    /**
     * @var int
     */
    protected ?int $transferCash = null;

    /**
     * @var int
     */
    protected ?int $unionGrant = null;

    /**
     * @var int
     */
    protected ?int $validBalance = null;

    /**
     * @var int
     */
    protected ?int $validCash = null;

    /**
     * @var int
     */
    protected ?int $validGrant = null;

    /**
     * @var int
     */
    protected ?int $validReturnGoodsAbs = null;

    /**
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * @var int
     */
    protected ?int $walletTotalBalanceValid = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     * @return self
     */
    public function setBalance(?int $balance): self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return int
     */
    public function getBiddingCash(): ?int
    {
        return $this->biddingCash;
    }

    /**
     * @param int $biddingCash
     * @return self
     */
    public function setBiddingCash(?int $biddingCash): self
    {
        $this->biddingCash = $biddingCash;
        return $this;
    }

    /**
     * @return int
     */
    public function getBiddingCreditBalance(): ?int
    {
        return $this->biddingCreditBalance;
    }

    /**
     * @param int $biddingCreditBalance
     * @return self
     */
    public function setBiddingCreditBalance(?int $biddingCreditBalance): self
    {
        $this->biddingCreditBalance = $biddingCreditBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getBiddingCreditValidBalance(): ?int
    {
        return $this->biddingCreditValidBalance;
    }

    /**
     * @param int $biddingCreditValidBalance
     * @return self
     */
    public function setBiddingCreditValidBalance(?int $biddingCreditValidBalance): self
    {
        $this->biddingCreditValidBalance = $biddingCreditValidBalance;
        return $this;
    }

    /**
     * 预借款竞价专用总余额
     * @return int
     */
    public function getBiddingPreloanBalance(): ?int
    {
        return $this->biddingPreloanBalance;
    }

    /**
     * 预借款竞价专用总余额
     * @param int $biddingPreloanBalance
     * @return self
     */
    public function setBiddingPreloanBalance(?int $biddingPreloanBalance): self
    {
        $this->biddingPreloanBalance = $biddingPreloanBalance;
        return $this;
    }

    /**
     * 预借款竞价专用可用余额
     * @return int
     */
    public function getBiddingPreloanValidBalance(): ?int
    {
        return $this->biddingPreloanValidBalance;
    }

    /**
     * 预借款竞价专用可用余额
     * @param int $biddingPreloanValidBalance
     * @return self
     */
    public function setBiddingPreloanValidBalance(?int $biddingPreloanValidBalance): self
    {
        $this->biddingPreloanValidBalance = $biddingPreloanValidBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getBiddingPrepayBalance(): ?int
    {
        return $this->biddingPrepayBalance;
    }

    /**
     * @param int $biddingPrepayBalance
     * @return self
     */
    public function setBiddingPrepayBalance(?int $biddingPrepayBalance): self
    {
        $this->biddingPrepayBalance = $biddingPrepayBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getBiddingPrepayValidBalance(): ?int
    {
        return $this->biddingPrepayValidBalance;
    }

    /**
     * @param int $biddingPrepayValidBalance
     * @return self
     */
    public function setBiddingPrepayValidBalance(?int $biddingPrepayValidBalance): self
    {
        $this->biddingPrepayValidBalance = $biddingPrepayValidBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getBiddingValidGrant(): ?int
    {
        return $this->biddingValidGrant;
    }

    /**
     * @param int $biddingValidGrant
     * @return self
     */
    public function setBiddingValidGrant(?int $biddingValidGrant): self
    {
        $this->biddingValidGrant = $biddingValidGrant;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandCash(): ?int
    {
        return $this->brandCash;
    }

    /**
     * @param int $brandCash
     * @return self
     */
    public function setBrandCash(?int $brandCash): self
    {
        $this->brandCash = $brandCash;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandCreditBalance(): ?int
    {
        return $this->brandCreditBalance;
    }

    /**
     * @param int $brandCreditBalance
     * @return self
     */
    public function setBrandCreditBalance(?int $brandCreditBalance): self
    {
        $this->brandCreditBalance = $brandCreditBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandCreditValidBalance(): ?int
    {
        return $this->brandCreditValidBalance;
    }

    /**
     * @param int $brandCreditValidBalance
     * @return self
     */
    public function setBrandCreditValidBalance(?int $brandCreditValidBalance): self
    {
        $this->brandCreditValidBalance = $brandCreditValidBalance;
        return $this;
    }

    /**
     * 预借款品牌专用总余额
     * @return int
     */
    public function getBrandPreloanBalance(): ?int
    {
        return $this->brandPreloanBalance;
    }

    /**
     * 预借款品牌专用总余额
     * @param int $brandPreloanBalance
     * @return self
     */
    public function setBrandPreloanBalance(?int $brandPreloanBalance): self
    {
        $this->brandPreloanBalance = $brandPreloanBalance;
        return $this;
    }

    /**
     * 预借款品牌专用可用余额
     * @return int
     */
    public function getBrandPreloanValidBalance(): ?int
    {
        return $this->brandPreloanValidBalance;
    }

    /**
     * 预借款品牌专用可用余额
     * @param int $brandPreloanValidBalance
     * @return self
     */
    public function setBrandPreloanValidBalance(?int $brandPreloanValidBalance): self
    {
        $this->brandPreloanValidBalance = $brandPreloanValidBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandPrepayBalance(): ?int
    {
        return $this->brandPrepayBalance;
    }

    /**
     * @param int $brandPrepayBalance
     * @return self
     */
    public function setBrandPrepayBalance(?int $brandPrepayBalance): self
    {
        $this->brandPrepayBalance = $brandPrepayBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandPrepayValidBalance(): ?int
    {
        return $this->brandPrepayValidBalance;
    }

    /**
     * @param int $brandPrepayValidBalance
     * @return self
     */
    public function setBrandPrepayValidBalance(?int $brandPrepayValidBalance): self
    {
        $this->brandPrepayValidBalance = $brandPrepayValidBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandValidGrant(): ?int
    {
        return $this->brandValidGrant;
    }

    /**
     * @param int $brandValidGrant
     * @return self
     */
    public function setBrandValidGrant(?int $brandValidGrant): self
    {
        $this->brandValidGrant = $brandValidGrant;
        return $this;
    }

    /**
     * @return int
     */
    public function getCash(): ?int
    {
        return $this->cash;
    }

    /**
     * @param int $cash
     * @return self
     */
    public function setCash(?int $cash): self
    {
        $this->cash = $cash;
        return $this;
    }

    /**
     * @return int
     */
    public function getCommonGrant(): ?int
    {
        return $this->commonGrant;
    }

    /**
     * @param int $commonGrant
     * @return self
     */
    public function setCommonGrant(?int $commonGrant): self
    {
        $this->commonGrant = $commonGrant;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompensationGrant(): ?int
    {
        return $this->compensationGrant;
    }

    /**
     * @param int $compensationGrant
     * @return self
     */
    public function setCompensationGrant(?int $compensationGrant): self
    {
        $this->compensationGrant = $compensationGrant;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompensationValidGrant(): ?int
    {
        return $this->compensationValidGrant;
    }

    /**
     * @param int $compensationValidGrant
     * @return self
     */
    public function setCompensationValidGrant(?int $compensationValidGrant): self
    {
        $this->compensationValidGrant = $compensationValidGrant;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreditBalance(): ?int
    {
        return $this->creditBalance;
    }

    /**
     * @param int $creditBalance
     * @return self
     */
    public function setCreditBalance(?int $creditBalance): self
    {
        $this->creditBalance = $creditBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreditTransferBalance(): ?int
    {
        return $this->creditTransferBalance;
    }

    /**
     * @param int $creditTransferBalance
     * @return self
     */
    public function setCreditTransferBalance(?int $creditTransferBalance): self
    {
        $this->creditTransferBalance = $creditTransferBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreditValidBalance(): ?int
    {
        return $this->creditValidBalance;
    }

    /**
     * @param int $creditValidBalance
     * @return self
     */
    public function setCreditValidBalance(?int $creditValidBalance): self
    {
        $this->creditValidBalance = $creditValidBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultGrant(): ?int
    {
        return $this->defaultGrant;
    }

    /**
     * @param int $defaultGrant
     * @return self
     */
    public function setDefaultGrant(?int $defaultGrant): self
    {
        $this->defaultGrant = $defaultGrant;
        return $this;
    }

    /**
     * @return int
     */
    public function getGeneralCash(): ?int
    {
        return $this->generalCash;
    }

    /**
     * @param int $generalCash
     * @return self
     */
    public function setGeneralCash(?int $generalCash): self
    {
        $this->generalCash = $generalCash;
        return $this;
    }

    /**
     * @return int
     */
    public function getGeneralCreditBalance(): ?int
    {
        return $this->generalCreditBalance;
    }

    /**
     * @param int $generalCreditBalance
     * @return self
     */
    public function setGeneralCreditBalance(?int $generalCreditBalance): self
    {
        $this->generalCreditBalance = $generalCreditBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getGeneralCreditValidBalance(): ?int
    {
        return $this->generalCreditValidBalance;
    }

    /**
     * @param int $generalCreditValidBalance
     * @return self
     */
    public function setGeneralCreditValidBalance(?int $generalCreditValidBalance): self
    {
        $this->generalCreditValidBalance = $generalCreditValidBalance;
        return $this;
    }

    /**
     * 预借款通用总余额
     * @return int
     */
    public function getGeneralPreloanBalance(): ?int
    {
        return $this->generalPreloanBalance;
    }

    /**
     * 预借款通用总余额
     * @param int $generalPreloanBalance
     * @return self
     */
    public function setGeneralPreloanBalance(?int $generalPreloanBalance): self
    {
        $this->generalPreloanBalance = $generalPreloanBalance;
        return $this;
    }

    /**
     * 预借款通用可用余额
     * @return int
     */
    public function getGeneralPreloanValidBalance(): ?int
    {
        return $this->generalPreloanValidBalance;
    }

    /**
     * 预借款通用可用余额
     * @param int $generalPreloanValidBalance
     * @return self
     */
    public function setGeneralPreloanValidBalance(?int $generalPreloanValidBalance): self
    {
        $this->generalPreloanValidBalance = $generalPreloanValidBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getGeneralPrepayBalance(): ?int
    {
        return $this->generalPrepayBalance;
    }

    /**
     * @param int $generalPrepayBalance
     * @return self
     */
    public function setGeneralPrepayBalance(?int $generalPrepayBalance): self
    {
        $this->generalPrepayBalance = $generalPrepayBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getGeneralPrepayValidBalance(): ?int
    {
        return $this->generalPrepayValidBalance;
    }

    /**
     * @param int $generalPrepayValidBalance
     * @return self
     */
    public function setGeneralPrepayValidBalance(?int $generalPrepayValidBalance): self
    {
        $this->generalPrepayValidBalance = $generalPrepayValidBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getGeneralValidGrant(): ?int
    {
        return $this->generalValidGrant;
    }

    /**
     * @param int $generalValidGrant
     * @return self
     */
    public function setGeneralValidGrant(?int $generalValidGrant): self
    {
        $this->generalValidGrant = $generalValidGrant;
        return $this;
    }

    /**
     * @return int
     */
    public function getGrant(): ?int
    {
        return $this->grant;
    }

    /**
     * @param int $grant
     * @return self
     */
    public function setGrant(?int $grant): self
    {
        $this->grant = $grant;
        return $this;
    }

    /**
     * 预借款总余额
     * @return int
     */
    public function getPreloanBalance(): ?int
    {
        return $this->preloanBalance;
    }

    /**
     * 预借款总余额
     * @param int $preloanBalance
     * @return self
     */
    public function setPreloanBalance(?int $preloanBalance): self
    {
        $this->preloanBalance = $preloanBalance;
        return $this;
    }

    /**
     * 账户预借款可转余额
     * @return int
     */
    public function getPreloanTransferBalance(): ?int
    {
        return $this->preloanTransferBalance;
    }

    /**
     * 账户预借款可转余额
     * @param int $preloanTransferBalance
     * @return self
     */
    public function setPreloanTransferBalance(?int $preloanTransferBalance): self
    {
        $this->preloanTransferBalance = $preloanTransferBalance;
        return $this;
    }

    /**
     * 预借款可用总余额
     * @return int
     */
    public function getPreloanValidBalance(): ?int
    {
        return $this->preloanValidBalance;
    }

    /**
     * 预借款可用总余额
     * @param int $preloanValidBalance
     * @return self
     */
    public function setPreloanValidBalance(?int $preloanValidBalance): self
    {
        $this->preloanValidBalance = $preloanValidBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrepayBalance(): ?int
    {
        return $this->prepayBalance;
    }

    /**
     * @param int $prepayBalance
     * @return self
     */
    public function setPrepayBalance(?int $prepayBalance): self
    {
        $this->prepayBalance = $prepayBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrepayTransferBalance(): ?int
    {
        return $this->prepayTransferBalance;
    }

    /**
     * @param int $prepayTransferBalance
     * @return self
     */
    public function setPrepayTransferBalance(?int $prepayTransferBalance): self
    {
        $this->prepayTransferBalance = $prepayTransferBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrepayValidBalance(): ?int
    {
        return $this->prepayValidBalance;
    }

    /**
     * @param int $prepayValidBalance
     * @return self
     */
    public function setPrepayValidBalance(?int $prepayValidBalance): self
    {
        $this->prepayValidBalance = $prepayValidBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getReturnGoodsAbs(): ?int
    {
        return $this->returnGoodsAbs;
    }

    /**
     * @param int $returnGoodsAbs
     * @return self
     */
    public function setReturnGoodsAbs(?int $returnGoodsAbs): self
    {
        $this->returnGoodsAbs = $returnGoodsAbs;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchGrant(): ?int
    {
        return $this->searchGrant;
    }

    /**
     * @param int $searchGrant
     * @return self
     */
    public function setSearchGrant(?int $searchGrant): self
    {
        $this->searchGrant = $searchGrant;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransferBalance(): ?int
    {
        return $this->transferBalance;
    }

    /**
     * @param int $transferBalance
     * @return self
     */
    public function setTransferBalance(?int $transferBalance): self
    {
        $this->transferBalance = $transferBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransferCash(): ?int
    {
        return $this->transferCash;
    }

    /**
     * @param int $transferCash
     * @return self
     */
    public function setTransferCash(?int $transferCash): self
    {
        $this->transferCash = $transferCash;
        return $this;
    }

    /**
     * @return int
     */
    public function getUnionGrant(): ?int
    {
        return $this->unionGrant;
    }

    /**
     * @param int $unionGrant
     * @return self
     */
    public function setUnionGrant(?int $unionGrant): self
    {
        $this->unionGrant = $unionGrant;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidBalance(): ?int
    {
        return $this->validBalance;
    }

    /**
     * @param int $validBalance
     * @return self
     */
    public function setValidBalance(?int $validBalance): self
    {
        $this->validBalance = $validBalance;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidCash(): ?int
    {
        return $this->validCash;
    }

    /**
     * @param int $validCash
     * @return self
     */
    public function setValidCash(?int $validCash): self
    {
        $this->validCash = $validCash;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidGrant(): ?int
    {
        return $this->validGrant;
    }

    /**
     * @param int $validGrant
     * @return self
     */
    public function setValidGrant(?int $validGrant): self
    {
        $this->validGrant = $validGrant;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidReturnGoodsAbs(): ?int
    {
        return $this->validReturnGoodsAbs;
    }

    /**
     * @param int $validReturnGoodsAbs
     * @return self
     */
    public function setValidReturnGoodsAbs(?int $validReturnGoodsAbs): self
    {
        $this->validReturnGoodsAbs = $validReturnGoodsAbs;
        return $this;
    }

    /**
     * @return int
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * @param int $walletId
     * @return self
     */
    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * @return int
     */
    public function getWalletTotalBalanceValid(): ?int
    {
        return $this->walletTotalBalanceValid;
    }

    /**
     * @param int $walletTotalBalanceValid
     * @return self
     */
    public function setWalletTotalBalanceValid(?int $walletTotalBalanceValid): self
    {
        $this->walletTotalBalanceValid = $walletTotalBalanceValid;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->balance !== null) {
            $result['balance'] = $this->balance;
        }
        if ($this->biddingCash !== null) {
            $result['bidding_cash'] = $this->biddingCash;
        }
        if ($this->biddingCreditBalance !== null) {
            $result['bidding_credit_balance'] = $this->biddingCreditBalance;
        }
        if ($this->biddingCreditValidBalance !== null) {
            $result['bidding_credit_valid_balance'] = $this->biddingCreditValidBalance;
        }
        if ($this->biddingPreloanBalance !== null) {
            $result['bidding_preloan_balance'] = $this->biddingPreloanBalance;
        }
        if ($this->biddingPreloanValidBalance !== null) {
            $result['bidding_preloan_valid_balance'] = $this->biddingPreloanValidBalance;
        }
        if ($this->biddingPrepayBalance !== null) {
            $result['bidding_prepay_balance'] = $this->biddingPrepayBalance;
        }
        if ($this->biddingPrepayValidBalance !== null) {
            $result['bidding_prepay_valid_balance'] = $this->biddingPrepayValidBalance;
        }
        if ($this->biddingValidGrant !== null) {
            $result['bidding_valid_grant'] = $this->biddingValidGrant;
        }
        if ($this->brandCash !== null) {
            $result['brand_cash'] = $this->brandCash;
        }
        if ($this->brandCreditBalance !== null) {
            $result['brand_credit_balance'] = $this->brandCreditBalance;
        }
        if ($this->brandCreditValidBalance !== null) {
            $result['brand_credit_valid_balance'] = $this->brandCreditValidBalance;
        }
        if ($this->brandPreloanBalance !== null) {
            $result['brand_preloan_balance'] = $this->brandPreloanBalance;
        }
        if ($this->brandPreloanValidBalance !== null) {
            $result['brand_preloan_valid_balance'] = $this->brandPreloanValidBalance;
        }
        if ($this->brandPrepayBalance !== null) {
            $result['brand_prepay_balance'] = $this->brandPrepayBalance;
        }
        if ($this->brandPrepayValidBalance !== null) {
            $result['brand_prepay_valid_balance'] = $this->brandPrepayValidBalance;
        }
        if ($this->brandValidGrant !== null) {
            $result['brand_valid_grant'] = $this->brandValidGrant;
        }
        if ($this->cash !== null) {
            $result['cash'] = $this->cash;
        }
        if ($this->commonGrant !== null) {
            $result['common_grant'] = $this->commonGrant;
        }
        if ($this->compensationGrant !== null) {
            $result['compensation_grant'] = $this->compensationGrant;
        }
        if ($this->compensationValidGrant !== null) {
            $result['compensation_valid_grant'] = $this->compensationValidGrant;
        }
        if ($this->creditBalance !== null) {
            $result['credit_balance'] = $this->creditBalance;
        }
        if ($this->creditTransferBalance !== null) {
            $result['credit_transfer_balance'] = $this->creditTransferBalance;
        }
        if ($this->creditValidBalance !== null) {
            $result['credit_valid_balance'] = $this->creditValidBalance;
        }
        if ($this->defaultGrant !== null) {
            $result['default_grant'] = $this->defaultGrant;
        }
        if ($this->generalCash !== null) {
            $result['general_cash'] = $this->generalCash;
        }
        if ($this->generalCreditBalance !== null) {
            $result['general_credit_balance'] = $this->generalCreditBalance;
        }
        if ($this->generalCreditValidBalance !== null) {
            $result['general_credit_valid_balance'] = $this->generalCreditValidBalance;
        }
        if ($this->generalPreloanBalance !== null) {
            $result['general_preloan_balance'] = $this->generalPreloanBalance;
        }
        if ($this->generalPreloanValidBalance !== null) {
            $result['general_preloan_valid_balance'] = $this->generalPreloanValidBalance;
        }
        if ($this->generalPrepayBalance !== null) {
            $result['general_prepay_balance'] = $this->generalPrepayBalance;
        }
        if ($this->generalPrepayValidBalance !== null) {
            $result['general_prepay_valid_balance'] = $this->generalPrepayValidBalance;
        }
        if ($this->generalValidGrant !== null) {
            $result['general_valid_grant'] = $this->generalValidGrant;
        }
        if ($this->grant !== null) {
            $result['grant'] = $this->grant;
        }
        if ($this->preloanBalance !== null) {
            $result['preloan_balance'] = $this->preloanBalance;
        }
        if ($this->preloanTransferBalance !== null) {
            $result['preloan_transfer_balance'] = $this->preloanTransferBalance;
        }
        if ($this->preloanValidBalance !== null) {
            $result['preloan_valid_balance'] = $this->preloanValidBalance;
        }
        if ($this->prepayBalance !== null) {
            $result['prepay_balance'] = $this->prepayBalance;
        }
        if ($this->prepayTransferBalance !== null) {
            $result['prepay_transfer_balance'] = $this->prepayTransferBalance;
        }
        if ($this->prepayValidBalance !== null) {
            $result['prepay_valid_balance'] = $this->prepayValidBalance;
        }
        if ($this->returnGoodsAbs !== null) {
            $result['return_goods_abs'] = $this->returnGoodsAbs;
        }
        if ($this->searchGrant !== null) {
            $result['search_grant'] = $this->searchGrant;
        }
        if ($this->transferBalance !== null) {
            $result['transfer_balance'] = $this->transferBalance;
        }
        if ($this->transferCash !== null) {
            $result['transfer_cash'] = $this->transferCash;
        }
        if ($this->unionGrant !== null) {
            $result['union_grant'] = $this->unionGrant;
        }
        if ($this->validBalance !== null) {
            $result['valid_balance'] = $this->validBalance;
        }
        if ($this->validCash !== null) {
            $result['valid_cash'] = $this->validCash;
        }
        if ($this->validGrant !== null) {
            $result['valid_grant'] = $this->validGrant;
        }
        if ($this->validReturnGoodsAbs !== null) {
            $result['valid_return_goods_abs'] = $this->validReturnGoodsAbs;
        }
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
        }
        if ($this->walletTotalBalanceValid !== null) {
            $result['wallet_total_balance_valid'] = $this->walletTotalBalanceValid;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['balance'] ?? null) !== null) {
            $obj->balance = (int) $v;
        }
        if (($v = $data['bidding_cash'] ?? null) !== null) {
            $obj->biddingCash = (int) $v;
        }
        if (($v = $data['bidding_credit_balance'] ?? null) !== null) {
            $obj->biddingCreditBalance = (int) $v;
        }
        if (($v = $data['bidding_credit_valid_balance'] ?? null) !== null) {
            $obj->biddingCreditValidBalance = (int) $v;
        }
        if (($v = $data['bidding_preloan_balance'] ?? null) !== null) {
            $obj->biddingPreloanBalance = (int) $v;
        }
        if (($v = $data['bidding_preloan_valid_balance'] ?? null) !== null) {
            $obj->biddingPreloanValidBalance = (int) $v;
        }
        if (($v = $data['bidding_prepay_balance'] ?? null) !== null) {
            $obj->biddingPrepayBalance = (int) $v;
        }
        if (($v = $data['bidding_prepay_valid_balance'] ?? null) !== null) {
            $obj->biddingPrepayValidBalance = (int) $v;
        }
        if (($v = $data['bidding_valid_grant'] ?? null) !== null) {
            $obj->biddingValidGrant = (int) $v;
        }
        if (($v = $data['brand_cash'] ?? null) !== null) {
            $obj->brandCash = (int) $v;
        }
        if (($v = $data['brand_credit_balance'] ?? null) !== null) {
            $obj->brandCreditBalance = (int) $v;
        }
        if (($v = $data['brand_credit_valid_balance'] ?? null) !== null) {
            $obj->brandCreditValidBalance = (int) $v;
        }
        if (($v = $data['brand_preloan_balance'] ?? null) !== null) {
            $obj->brandPreloanBalance = (int) $v;
        }
        if (($v = $data['brand_preloan_valid_balance'] ?? null) !== null) {
            $obj->brandPreloanValidBalance = (int) $v;
        }
        if (($v = $data['brand_prepay_balance'] ?? null) !== null) {
            $obj->brandPrepayBalance = (int) $v;
        }
        if (($v = $data['brand_prepay_valid_balance'] ?? null) !== null) {
            $obj->brandPrepayValidBalance = (int) $v;
        }
        if (($v = $data['brand_valid_grant'] ?? null) !== null) {
            $obj->brandValidGrant = (int) $v;
        }
        if (($v = $data['cash'] ?? null) !== null) {
            $obj->cash = (int) $v;
        }
        if (($v = $data['common_grant'] ?? null) !== null) {
            $obj->commonGrant = (int) $v;
        }
        if (($v = $data['compensation_grant'] ?? null) !== null) {
            $obj->compensationGrant = (int) $v;
        }
        if (($v = $data['compensation_valid_grant'] ?? null) !== null) {
            $obj->compensationValidGrant = (int) $v;
        }
        if (($v = $data['credit_balance'] ?? null) !== null) {
            $obj->creditBalance = (int) $v;
        }
        if (($v = $data['credit_transfer_balance'] ?? null) !== null) {
            $obj->creditTransferBalance = (int) $v;
        }
        if (($v = $data['credit_valid_balance'] ?? null) !== null) {
            $obj->creditValidBalance = (int) $v;
        }
        if (($v = $data['default_grant'] ?? null) !== null) {
            $obj->defaultGrant = (int) $v;
        }
        if (($v = $data['general_cash'] ?? null) !== null) {
            $obj->generalCash = (int) $v;
        }
        if (($v = $data['general_credit_balance'] ?? null) !== null) {
            $obj->generalCreditBalance = (int) $v;
        }
        if (($v = $data['general_credit_valid_balance'] ?? null) !== null) {
            $obj->generalCreditValidBalance = (int) $v;
        }
        if (($v = $data['general_preloan_balance'] ?? null) !== null) {
            $obj->generalPreloanBalance = (int) $v;
        }
        if (($v = $data['general_preloan_valid_balance'] ?? null) !== null) {
            $obj->generalPreloanValidBalance = (int) $v;
        }
        if (($v = $data['general_prepay_balance'] ?? null) !== null) {
            $obj->generalPrepayBalance = (int) $v;
        }
        if (($v = $data['general_prepay_valid_balance'] ?? null) !== null) {
            $obj->generalPrepayValidBalance = (int) $v;
        }
        if (($v = $data['general_valid_grant'] ?? null) !== null) {
            $obj->generalValidGrant = (int) $v;
        }
        if (($v = $data['grant'] ?? null) !== null) {
            $obj->grant = (int) $v;
        }
        if (($v = $data['preloan_balance'] ?? null) !== null) {
            $obj->preloanBalance = (int) $v;
        }
        if (($v = $data['preloan_transfer_balance'] ?? null) !== null) {
            $obj->preloanTransferBalance = (int) $v;
        }
        if (($v = $data['preloan_valid_balance'] ?? null) !== null) {
            $obj->preloanValidBalance = (int) $v;
        }
        if (($v = $data['prepay_balance'] ?? null) !== null) {
            $obj->prepayBalance = (int) $v;
        }
        if (($v = $data['prepay_transfer_balance'] ?? null) !== null) {
            $obj->prepayTransferBalance = (int) $v;
        }
        if (($v = $data['prepay_valid_balance'] ?? null) !== null) {
            $obj->prepayValidBalance = (int) $v;
        }
        if (($v = $data['return_goods_abs'] ?? null) !== null) {
            $obj->returnGoodsAbs = (int) $v;
        }
        if (($v = $data['search_grant'] ?? null) !== null) {
            $obj->searchGrant = (int) $v;
        }
        if (($v = $data['transfer_balance'] ?? null) !== null) {
            $obj->transferBalance = (int) $v;
        }
        if (($v = $data['transfer_cash'] ?? null) !== null) {
            $obj->transferCash = (int) $v;
        }
        if (($v = $data['union_grant'] ?? null) !== null) {
            $obj->unionGrant = (int) $v;
        }
        if (($v = $data['valid_balance'] ?? null) !== null) {
            $obj->validBalance = (int) $v;
        }
        if (($v = $data['valid_cash'] ?? null) !== null) {
            $obj->validCash = (int) $v;
        }
        if (($v = $data['valid_grant'] ?? null) !== null) {
            $obj->validGrant = (int) $v;
        }
        if (($v = $data['valid_return_goods_abs'] ?? null) !== null) {
            $obj->validReturnGoodsAbs = (int) $v;
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
        }
        if (($v = $data['wallet_total_balance_valid'] ?? null) !== null) {
            $obj->walletTotalBalanceValid = (int) $v;
        }
        return $obj;
    }
}
