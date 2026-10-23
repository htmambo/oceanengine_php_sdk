<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsUnionFlowPackagePromotionReportV30ResponseDataDataListInner implements \JsonSerializable
{
    /**
     * 激活数
     * @var float
     */
    protected ?float $active = null;

    /**
     * 激活成本
     * @var float
     */
    protected ?float $activeCost = null;

    /**
     * 付费数
     * @var float
     */
    protected ?float $activePay = null;

    /**
     * 付费成本
     * @var float
     */
    protected ?float $activePayCost = null;

    /**
     * 付费率
     * @var float
     */
    protected ?float $activePayRate = null;

    /**
     * 注册数
     * @var float
     */
    protected ?float $activeRegister = null;

    /**
     * 注册成本
     * @var float
     */
    protected ?float $activeRegisterCost = null;

    /**
     * 注册率
     * @var float
     */
    protected ?float $activeRegisterRate = null;

    /**
     * 点击指标
     * @var float
     */
    protected ?float $clickCnt = null;

    /**
     * 转化成本
     * @var float
     */
    protected ?float $conversionCost = null;

    /**
     * 转化量
     * @var float
     */
    protected ?float $convertCnt = null;

    /**
     * 表单提交数
     * @var float
     */
    protected ?float $form = null;

    /**
     * 表单
     * @var float
     */
    protected ?float $formCost = null;

    /**
     * 关键行为数
     * @var float
     */
    protected ?float $gameAddiction = null;

    /**
     * 关键行为成本
     * @var float
     */
    protected ?float $gameAddictionCost = null;

    /**
     * 关键行为率
     * @var float
     */
    protected ?float $gameAddictionRate = null;

    /**
     * 完件数
     * @var float
     */
    protected ?float $loanCompletion = null;

    /**
     * 完件成本
     * @var float
     */
    protected ?float $loanCompletionCost = null;

    /**
     * 授信数
     * @var float
     */
    protected ?float $loanCredit = null;

    /**
     * 授信成本
     * @var float
     */
    protected ?float $loanCreditCost = null;

    /**
     * 次留数
     * @var float
     */
    protected ?float $nextDayOpen = null;

    /**
     * 次留成本
     * @var float
     */
    protected ?float $nextDayOpenCost = null;

    /**
     * 次留率
     * @var float
     */
    protected ?float $nextDayOpenRate = null;

    /**
     * 预授信数
     * @var float
     */
    protected ?float $preLoanCredit = null;

    /**
     * 预授信成本
     * @var float
     */
    protected ?float $preLoanCreditCost = null;

    /**
     * 广告位
     * @var int
     */
    protected ?int $rit = null;

    /**
     * 展示指标
     * @var float
     */
    protected ?float $showCnt = null;

    /**
     * 消耗，单位：元
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * 激活数
     * @return float
     */
    public function getActive(): ?float
    {
        return $this->active;
    }

    /**
     * 激活数
     * @param float $active
     * @return self
     */
    public function setActive(?float $active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     * 激活成本
     * @return float
     */
    public function getActiveCost(): ?float
    {
        return $this->activeCost;
    }

    /**
     * 激活成本
     * @param float $activeCost
     * @return self
     */
    public function setActiveCost(?float $activeCost): self
    {
        $this->activeCost = $activeCost;
        return $this;
    }

    /**
     * 付费数
     * @return float
     */
    public function getActivePay(): ?float
    {
        return $this->activePay;
    }

    /**
     * 付费数
     * @param float $activePay
     * @return self
     */
    public function setActivePay(?float $activePay): self
    {
        $this->activePay = $activePay;
        return $this;
    }

    /**
     * 付费成本
     * @return float
     */
    public function getActivePayCost(): ?float
    {
        return $this->activePayCost;
    }

    /**
     * 付费成本
     * @param float $activePayCost
     * @return self
     */
    public function setActivePayCost(?float $activePayCost): self
    {
        $this->activePayCost = $activePayCost;
        return $this;
    }

    /**
     * 付费率
     * @return float
     */
    public function getActivePayRate(): ?float
    {
        return $this->activePayRate;
    }

    /**
     * 付费率
     * @param float $activePayRate
     * @return self
     */
    public function setActivePayRate(?float $activePayRate): self
    {
        $this->activePayRate = $activePayRate;
        return $this;
    }

    /**
     * 注册数
     * @return float
     */
    public function getActiveRegister(): ?float
    {
        return $this->activeRegister;
    }

    /**
     * 注册数
     * @param float $activeRegister
     * @return self
     */
    public function setActiveRegister(?float $activeRegister): self
    {
        $this->activeRegister = $activeRegister;
        return $this;
    }

    /**
     * 注册成本
     * @return float
     */
    public function getActiveRegisterCost(): ?float
    {
        return $this->activeRegisterCost;
    }

    /**
     * 注册成本
     * @param float $activeRegisterCost
     * @return self
     */
    public function setActiveRegisterCost(?float $activeRegisterCost): self
    {
        $this->activeRegisterCost = $activeRegisterCost;
        return $this;
    }

    /**
     * 注册率
     * @return float
     */
    public function getActiveRegisterRate(): ?float
    {
        return $this->activeRegisterRate;
    }

    /**
     * 注册率
     * @param float $activeRegisterRate
     * @return self
     */
    public function setActiveRegisterRate(?float $activeRegisterRate): self
    {
        $this->activeRegisterRate = $activeRegisterRate;
        return $this;
    }

    /**
     * 点击指标
     * @return float
     */
    public function getClickCnt(): ?float
    {
        return $this->clickCnt;
    }

    /**
     * 点击指标
     * @param float $clickCnt
     * @return self
     */
    public function setClickCnt(?float $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * 转化成本
     * @return float
     */
    public function getConversionCost(): ?float
    {
        return $this->conversionCost;
    }

    /**
     * 转化成本
     * @param float $conversionCost
     * @return self
     */
    public function setConversionCost(?float $conversionCost): self
    {
        $this->conversionCost = $conversionCost;
        return $this;
    }

    /**
     * 转化量
     * @return float
     */
    public function getConvertCnt(): ?float
    {
        return $this->convertCnt;
    }

    /**
     * 转化量
     * @param float $convertCnt
     * @return self
     */
    public function setConvertCnt(?float $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
        return $this;
    }

    /**
     * 表单提交数
     * @return float
     */
    public function getForm(): ?float
    {
        return $this->form;
    }

    /**
     * 表单提交数
     * @param float $form
     * @return self
     */
    public function setForm(?float $form): self
    {
        $this->form = $form;
        return $this;
    }

    /**
     * 表单
     * @return float
     */
    public function getFormCost(): ?float
    {
        return $this->formCost;
    }

    /**
     * 表单
     * @param float $formCost
     * @return self
     */
    public function setFormCost(?float $formCost): self
    {
        $this->formCost = $formCost;
        return $this;
    }

    /**
     * 关键行为数
     * @return float
     */
    public function getGameAddiction(): ?float
    {
        return $this->gameAddiction;
    }

    /**
     * 关键行为数
     * @param float $gameAddiction
     * @return self
     */
    public function setGameAddiction(?float $gameAddiction): self
    {
        $this->gameAddiction = $gameAddiction;
        return $this;
    }

    /**
     * 关键行为成本
     * @return float
     */
    public function getGameAddictionCost(): ?float
    {
        return $this->gameAddictionCost;
    }

    /**
     * 关键行为成本
     * @param float $gameAddictionCost
     * @return self
     */
    public function setGameAddictionCost(?float $gameAddictionCost): self
    {
        $this->gameAddictionCost = $gameAddictionCost;
        return $this;
    }

    /**
     * 关键行为率
     * @return float
     */
    public function getGameAddictionRate(): ?float
    {
        return $this->gameAddictionRate;
    }

    /**
     * 关键行为率
     * @param float $gameAddictionRate
     * @return self
     */
    public function setGameAddictionRate(?float $gameAddictionRate): self
    {
        $this->gameAddictionRate = $gameAddictionRate;
        return $this;
    }

    /**
     * 完件数
     * @return float
     */
    public function getLoanCompletion(): ?float
    {
        return $this->loanCompletion;
    }

    /**
     * 完件数
     * @param float $loanCompletion
     * @return self
     */
    public function setLoanCompletion(?float $loanCompletion): self
    {
        $this->loanCompletion = $loanCompletion;
        return $this;
    }

    /**
     * 完件成本
     * @return float
     */
    public function getLoanCompletionCost(): ?float
    {
        return $this->loanCompletionCost;
    }

    /**
     * 完件成本
     * @param float $loanCompletionCost
     * @return self
     */
    public function setLoanCompletionCost(?float $loanCompletionCost): self
    {
        $this->loanCompletionCost = $loanCompletionCost;
        return $this;
    }

    /**
     * 授信数
     * @return float
     */
    public function getLoanCredit(): ?float
    {
        return $this->loanCredit;
    }

    /**
     * 授信数
     * @param float $loanCredit
     * @return self
     */
    public function setLoanCredit(?float $loanCredit): self
    {
        $this->loanCredit = $loanCredit;
        return $this;
    }

    /**
     * 授信成本
     * @return float
     */
    public function getLoanCreditCost(): ?float
    {
        return $this->loanCreditCost;
    }

    /**
     * 授信成本
     * @param float $loanCreditCost
     * @return self
     */
    public function setLoanCreditCost(?float $loanCreditCost): self
    {
        $this->loanCreditCost = $loanCreditCost;
        return $this;
    }

    /**
     * 次留数
     * @return float
     */
    public function getNextDayOpen(): ?float
    {
        return $this->nextDayOpen;
    }

    /**
     * 次留数
     * @param float $nextDayOpen
     * @return self
     */
    public function setNextDayOpen(?float $nextDayOpen): self
    {
        $this->nextDayOpen = $nextDayOpen;
        return $this;
    }

    /**
     * 次留成本
     * @return float
     */
    public function getNextDayOpenCost(): ?float
    {
        return $this->nextDayOpenCost;
    }

    /**
     * 次留成本
     * @param float $nextDayOpenCost
     * @return self
     */
    public function setNextDayOpenCost(?float $nextDayOpenCost): self
    {
        $this->nextDayOpenCost = $nextDayOpenCost;
        return $this;
    }

    /**
     * 次留率
     * @return float
     */
    public function getNextDayOpenRate(): ?float
    {
        return $this->nextDayOpenRate;
    }

    /**
     * 次留率
     * @param float $nextDayOpenRate
     * @return self
     */
    public function setNextDayOpenRate(?float $nextDayOpenRate): self
    {
        $this->nextDayOpenRate = $nextDayOpenRate;
        return $this;
    }

    /**
     * 预授信数
     * @return float
     */
    public function getPreLoanCredit(): ?float
    {
        return $this->preLoanCredit;
    }

    /**
     * 预授信数
     * @param float $preLoanCredit
     * @return self
     */
    public function setPreLoanCredit(?float $preLoanCredit): self
    {
        $this->preLoanCredit = $preLoanCredit;
        return $this;
    }

    /**
     * 预授信成本
     * @return float
     */
    public function getPreLoanCreditCost(): ?float
    {
        return $this->preLoanCreditCost;
    }

    /**
     * 预授信成本
     * @param float $preLoanCreditCost
     * @return self
     */
    public function setPreLoanCreditCost(?float $preLoanCreditCost): self
    {
        $this->preLoanCreditCost = $preLoanCreditCost;
        return $this;
    }

    /**
     * 广告位
     * @return int
     */
    public function getRit(): ?int
    {
        return $this->rit;
    }

    /**
     * 广告位
     * @param int $rit
     * @return self
     */
    public function setRit(?int $rit): self
    {
        $this->rit = $rit;
        return $this;
    }

    /**
     * 展示指标
     * @return float
     */
    public function getShowCnt(): ?float
    {
        return $this->showCnt;
    }

    /**
     * 展示指标
     * @param float $showCnt
     * @return self
     */
    public function setShowCnt(?float $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * 消耗，单位：元
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * 消耗，单位：元
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
