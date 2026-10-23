<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsUnionFlowPackageReportV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $active = null;

    /**
     * @var float
     */
    protected ?float $activeCost = null;

    /**
     * @var float
     */
    protected ?float $activePay = null;

    /**
     * @var float
     */
    protected ?float $activePayCost = null;

    /**
     * @var float
     */
    protected ?float $activePayRate = null;

    /**
     * @var float
     */
    protected ?float $activeRegister = null;

    /**
     * @var float
     */
    protected ?float $activeRegisterCost = null;

    /**
     * @var float
     */
    protected ?float $activeRegisterRate = null;

    /**
     * @var float
     */
    protected ?float $clickCnt = null;

    /**
     * @var float
     */
    protected ?float $conversionCost = null;

    /**
     * @var float
     */
    protected ?float $convertCnt = null;

    /**
     * @var float
     */
    protected ?float $cost = null;

    /**
     * @var float
     */
    protected ?float $form = null;

    /**
     * @var float
     */
    protected ?float $formCost = null;

    /**
     * @var float
     */
    protected ?float $gameAddiction = null;

    /**
     * @var float
     */
    protected ?float $gameAddictionCost = null;

    /**
     * @var float
     */
    protected ?float $gameAddictionRate = null;

    /**
     * @var float
     */
    protected ?float $loanCompletion = null;

    /**
     * @var float
     */
    protected ?float $loanCompletionCost = null;

    /**
     * @var float
     */
    protected ?float $loanCredit = null;

    /**
     * @var float
     */
    protected ?float $loanCreditCost = null;

    /**
     * @var float
     */
    protected ?float $nextDayOpen = null;

    /**
     * @var float
     */
    protected ?float $nextDayOpenCost = null;

    /**
     * @var float
     */
    protected ?float $nextDayOpenRate = null;

    /**
     * @var float
     */
    protected ?float $preLoanCredit = null;

    /**
     * @var float
     */
    protected ?float $preLoanCreditCost = null;

    /**
     * @var int
     */
    protected ?int $rit = null;

    /**
     * @var float
     */
    protected ?float $showCnt = null;

    /**
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * @return float
     */
    public function getActive(): ?float
    {
        return $this->active;
    }

    /**
     * @param float $active
     * @return self
     */
    public function setActive(?float $active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return float
     */
    public function getActiveCost(): ?float
    {
        return $this->activeCost;
    }

    /**
     * @param float $activeCost
     * @return self
     */
    public function setActiveCost(?float $activeCost): self
    {
        $this->activeCost = $activeCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getActivePay(): ?float
    {
        return $this->activePay;
    }

    /**
     * @param float $activePay
     * @return self
     */
    public function setActivePay(?float $activePay): self
    {
        $this->activePay = $activePay;
        return $this;
    }

    /**
     * @return float
     */
    public function getActivePayCost(): ?float
    {
        return $this->activePayCost;
    }

    /**
     * @param float $activePayCost
     * @return self
     */
    public function setActivePayCost(?float $activePayCost): self
    {
        $this->activePayCost = $activePayCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getActivePayRate(): ?float
    {
        return $this->activePayRate;
    }

    /**
     * @param float $activePayRate
     * @return self
     */
    public function setActivePayRate(?float $activePayRate): self
    {
        $this->activePayRate = $activePayRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getActiveRegister(): ?float
    {
        return $this->activeRegister;
    }

    /**
     * @param float $activeRegister
     * @return self
     */
    public function setActiveRegister(?float $activeRegister): self
    {
        $this->activeRegister = $activeRegister;
        return $this;
    }

    /**
     * @return float
     */
    public function getActiveRegisterCost(): ?float
    {
        return $this->activeRegisterCost;
    }

    /**
     * @param float $activeRegisterCost
     * @return self
     */
    public function setActiveRegisterCost(?float $activeRegisterCost): self
    {
        $this->activeRegisterCost = $activeRegisterCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getActiveRegisterRate(): ?float
    {
        return $this->activeRegisterRate;
    }

    /**
     * @param float $activeRegisterRate
     * @return self
     */
    public function setActiveRegisterRate(?float $activeRegisterRate): self
    {
        $this->activeRegisterRate = $activeRegisterRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getClickCnt(): ?float
    {
        return $this->clickCnt;
    }

    /**
     * @param float $clickCnt
     * @return self
     */
    public function setClickCnt(?float $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionCost(): ?float
    {
        return $this->conversionCost;
    }

    /**
     * @param float $conversionCost
     * @return self
     */
    public function setConversionCost(?float $conversionCost): self
    {
        $this->conversionCost = $conversionCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getConvertCnt(): ?float
    {
        return $this->convertCnt;
    }

    /**
     * @param float $convertCnt
     * @return self
     */
    public function setConvertCnt(?float $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
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
     * @return float
     */
    public function getForm(): ?float
    {
        return $this->form;
    }

    /**
     * @param float $form
     * @return self
     */
    public function setForm(?float $form): self
    {
        $this->form = $form;
        return $this;
    }

    /**
     * @return float
     */
    public function getFormCost(): ?float
    {
        return $this->formCost;
    }

    /**
     * @param float $formCost
     * @return self
     */
    public function setFormCost(?float $formCost): self
    {
        $this->formCost = $formCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getGameAddiction(): ?float
    {
        return $this->gameAddiction;
    }

    /**
     * @param float $gameAddiction
     * @return self
     */
    public function setGameAddiction(?float $gameAddiction): self
    {
        $this->gameAddiction = $gameAddiction;
        return $this;
    }

    /**
     * @return float
     */
    public function getGameAddictionCost(): ?float
    {
        return $this->gameAddictionCost;
    }

    /**
     * @param float $gameAddictionCost
     * @return self
     */
    public function setGameAddictionCost(?float $gameAddictionCost): self
    {
        $this->gameAddictionCost = $gameAddictionCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getGameAddictionRate(): ?float
    {
        return $this->gameAddictionRate;
    }

    /**
     * @param float $gameAddictionRate
     * @return self
     */
    public function setGameAddictionRate(?float $gameAddictionRate): self
    {
        $this->gameAddictionRate = $gameAddictionRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getLoanCompletion(): ?float
    {
        return $this->loanCompletion;
    }

    /**
     * @param float $loanCompletion
     * @return self
     */
    public function setLoanCompletion(?float $loanCompletion): self
    {
        $this->loanCompletion = $loanCompletion;
        return $this;
    }

    /**
     * @return float
     */
    public function getLoanCompletionCost(): ?float
    {
        return $this->loanCompletionCost;
    }

    /**
     * @param float $loanCompletionCost
     * @return self
     */
    public function setLoanCompletionCost(?float $loanCompletionCost): self
    {
        $this->loanCompletionCost = $loanCompletionCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getLoanCredit(): ?float
    {
        return $this->loanCredit;
    }

    /**
     * @param float $loanCredit
     * @return self
     */
    public function setLoanCredit(?float $loanCredit): self
    {
        $this->loanCredit = $loanCredit;
        return $this;
    }

    /**
     * @return float
     */
    public function getLoanCreditCost(): ?float
    {
        return $this->loanCreditCost;
    }

    /**
     * @param float $loanCreditCost
     * @return self
     */
    public function setLoanCreditCost(?float $loanCreditCost): self
    {
        $this->loanCreditCost = $loanCreditCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getNextDayOpen(): ?float
    {
        return $this->nextDayOpen;
    }

    /**
     * @param float $nextDayOpen
     * @return self
     */
    public function setNextDayOpen(?float $nextDayOpen): self
    {
        $this->nextDayOpen = $nextDayOpen;
        return $this;
    }

    /**
     * @return float
     */
    public function getNextDayOpenCost(): ?float
    {
        return $this->nextDayOpenCost;
    }

    /**
     * @param float $nextDayOpenCost
     * @return self
     */
    public function setNextDayOpenCost(?float $nextDayOpenCost): self
    {
        $this->nextDayOpenCost = $nextDayOpenCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getNextDayOpenRate(): ?float
    {
        return $this->nextDayOpenRate;
    }

    /**
     * @param float $nextDayOpenRate
     * @return self
     */
    public function setNextDayOpenRate(?float $nextDayOpenRate): self
    {
        $this->nextDayOpenRate = $nextDayOpenRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreLoanCredit(): ?float
    {
        return $this->preLoanCredit;
    }

    /**
     * @param float $preLoanCredit
     * @return self
     */
    public function setPreLoanCredit(?float $preLoanCredit): self
    {
        $this->preLoanCredit = $preLoanCredit;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreLoanCreditCost(): ?float
    {
        return $this->preLoanCreditCost;
    }

    /**
     * @param float $preLoanCreditCost
     * @return self
     */
    public function setPreLoanCreditCost(?float $preLoanCreditCost): self
    {
        $this->preLoanCreditCost = $preLoanCreditCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getRit(): ?int
    {
        return $this->rit;
    }

    /**
     * @param int $rit
     * @return self
     */
    public function setRit(?int $rit): self
    {
        $this->rit = $rit;
        return $this;
    }

    /**
     * @return float
     */
    public function getShowCnt(): ?float
    {
        return $this->showCnt;
    }

    /**
     * @param float $showCnt
     * @return self
     */
    public function setShowCnt(?float $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->active !== null) {
            $result['active'] = $this->active;
        }
        if ($this->activeCost !== null) {
            $result['active_cost'] = $this->activeCost;
        }
        if ($this->activePay !== null) {
            $result['active_pay'] = $this->activePay;
        }
        if ($this->activePayCost !== null) {
            $result['active_pay_cost'] = $this->activePayCost;
        }
        if ($this->activePayRate !== null) {
            $result['active_pay_rate'] = $this->activePayRate;
        }
        if ($this->activeRegister !== null) {
            $result['active_register'] = $this->activeRegister;
        }
        if ($this->activeRegisterCost !== null) {
            $result['active_register_cost'] = $this->activeRegisterCost;
        }
        if ($this->activeRegisterRate !== null) {
            $result['active_register_rate'] = $this->activeRegisterRate;
        }
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->conversionCost !== null) {
            $result['conversion_cost'] = $this->conversionCost;
        }
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->form !== null) {
            $result['form'] = $this->form;
        }
        if ($this->formCost !== null) {
            $result['form_cost'] = $this->formCost;
        }
        if ($this->gameAddiction !== null) {
            $result['game_addiction'] = $this->gameAddiction;
        }
        if ($this->gameAddictionCost !== null) {
            $result['game_addiction_cost'] = $this->gameAddictionCost;
        }
        if ($this->gameAddictionRate !== null) {
            $result['game_addiction_rate'] = $this->gameAddictionRate;
        }
        if ($this->loanCompletion !== null) {
            $result['loan_completion'] = $this->loanCompletion;
        }
        if ($this->loanCompletionCost !== null) {
            $result['loan_completion_cost'] = $this->loanCompletionCost;
        }
        if ($this->loanCredit !== null) {
            $result['loan_credit'] = $this->loanCredit;
        }
        if ($this->loanCreditCost !== null) {
            $result['loan_credit_cost'] = $this->loanCreditCost;
        }
        if ($this->nextDayOpen !== null) {
            $result['next_day_open'] = $this->nextDayOpen;
        }
        if ($this->nextDayOpenCost !== null) {
            $result['next_day_open_cost'] = $this->nextDayOpenCost;
        }
        if ($this->nextDayOpenRate !== null) {
            $result['next_day_open_rate'] = $this->nextDayOpenRate;
        }
        if ($this->preLoanCredit !== null) {
            $result['pre_loan_credit'] = $this->preLoanCredit;
        }
        if ($this->preLoanCreditCost !== null) {
            $result['pre_loan_credit_cost'] = $this->preLoanCreditCost;
        }
        if ($this->rit !== null) {
            $result['rit'] = $this->rit;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['active'] ?? null) !== null) {
            $obj->active = (float) $v;
        }
        if (($v = $data['active_cost'] ?? null) !== null) {
            $obj->activeCost = (float) $v;
        }
        if (($v = $data['active_pay'] ?? null) !== null) {
            $obj->activePay = (float) $v;
        }
        if (($v = $data['active_pay_cost'] ?? null) !== null) {
            $obj->activePayCost = (float) $v;
        }
        if (($v = $data['active_pay_rate'] ?? null) !== null) {
            $obj->activePayRate = (float) $v;
        }
        if (($v = $data['active_register'] ?? null) !== null) {
            $obj->activeRegister = (float) $v;
        }
        if (($v = $data['active_register_cost'] ?? null) !== null) {
            $obj->activeRegisterCost = (float) $v;
        }
        if (($v = $data['active_register_rate'] ?? null) !== null) {
            $obj->activeRegisterRate = (float) $v;
        }
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (float) $v;
        }
        if (($v = $data['conversion_cost'] ?? null) !== null) {
            $obj->conversionCost = (float) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (float) $v;
        }
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['form'] ?? null) !== null) {
            $obj->form = (float) $v;
        }
        if (($v = $data['form_cost'] ?? null) !== null) {
            $obj->formCost = (float) $v;
        }
        if (($v = $data['game_addiction'] ?? null) !== null) {
            $obj->gameAddiction = (float) $v;
        }
        if (($v = $data['game_addiction_cost'] ?? null) !== null) {
            $obj->gameAddictionCost = (float) $v;
        }
        if (($v = $data['game_addiction_rate'] ?? null) !== null) {
            $obj->gameAddictionRate = (float) $v;
        }
        if (($v = $data['loan_completion'] ?? null) !== null) {
            $obj->loanCompletion = (float) $v;
        }
        if (($v = $data['loan_completion_cost'] ?? null) !== null) {
            $obj->loanCompletionCost = (float) $v;
        }
        if (($v = $data['loan_credit'] ?? null) !== null) {
            $obj->loanCredit = (float) $v;
        }
        if (($v = $data['loan_credit_cost'] ?? null) !== null) {
            $obj->loanCreditCost = (float) $v;
        }
        if (($v = $data['next_day_open'] ?? null) !== null) {
            $obj->nextDayOpen = (float) $v;
        }
        if (($v = $data['next_day_open_cost'] ?? null) !== null) {
            $obj->nextDayOpenCost = (float) $v;
        }
        if (($v = $data['next_day_open_rate'] ?? null) !== null) {
            $obj->nextDayOpenRate = (float) $v;
        }
        if (($v = $data['pre_loan_credit'] ?? null) !== null) {
            $obj->preLoanCredit = (float) $v;
        }
        if (($v = $data['pre_loan_credit_cost'] ?? null) !== null) {
            $obj->preLoanCreditCost = (float) $v;
        }
        if (($v = $data['rit'] ?? null) !== null) {
            $obj->rit = (int) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (float) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        return $obj;
    }
}
