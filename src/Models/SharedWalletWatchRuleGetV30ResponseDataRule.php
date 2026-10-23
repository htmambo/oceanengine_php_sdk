<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWatchRuleGetV30ResponseDataRule implements \JsonSerializable
{
    /**
     * 预警通知邮箱列表
     * @var string[]
     */
    protected ?array $alertEmails = null;

    /**
     * 余额预警规则组
     * @var \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBalanceAlertRulesInner[]
     */
    protected ?array $balanceAlertRules = null;

    /**
     * 预算剩余预警规则组
     * @var \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBudgetAlertRulesInner[]
     */
    protected ?array $budgetAlertRules = null;

    /**
     * 预算使用率预警规则组
     * @var \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBudgetUsageAlertRulesInner[]
     */
    protected ?array $budgetUsageAlertRules = null;

    /**
     * 子钱包ID
     * @var int
     */
    protected ?int $walletId = null;

    /**
     * 预警通知邮箱列表
     * @return string[]
     */
    public function getAlertEmails(): ?array
    {
        return $this->alertEmails;
    }

    /**
     * 预警通知邮箱列表
     * @param string[] $alertEmails
     * @return self
     */
    public function setAlertEmails(?array $alertEmails): self
    {
        $this->alertEmails = $alertEmails;
        return $this;
    }

    /**
     * 余额预警规则组
     * @return \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBalanceAlertRulesInner[]
     */
    public function getBalanceAlertRules(): ?array
    {
        return $this->balanceAlertRules;
    }

    /**
     * 余额预警规则组
     * @param \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBalanceAlertRulesInner[] $balanceAlertRules
     * @return self
     */
    public function setBalanceAlertRules(?array $balanceAlertRules): self
    {
        $this->balanceAlertRules = $balanceAlertRules;
        return $this;
    }

    /**
     * 预算剩余预警规则组
     * @return \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBudgetAlertRulesInner[]
     */
    public function getBudgetAlertRules(): ?array
    {
        return $this->budgetAlertRules;
    }

    /**
     * 预算剩余预警规则组
     * @param \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBudgetAlertRulesInner[] $budgetAlertRules
     * @return self
     */
    public function setBudgetAlertRules(?array $budgetAlertRules): self
    {
        $this->budgetAlertRules = $budgetAlertRules;
        return $this;
    }

    /**
     * 预算使用率预警规则组
     * @return \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBudgetUsageAlertRulesInner[]
     */
    public function getBudgetUsageAlertRules(): ?array
    {
        return $this->budgetUsageAlertRules;
    }

    /**
     * 预算使用率预警规则组
     * @param \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBudgetUsageAlertRulesInner[] $budgetUsageAlertRules
     * @return self
     */
    public function setBudgetUsageAlertRules(?array $budgetUsageAlertRules): self
    {
        $this->budgetUsageAlertRules = $budgetUsageAlertRules;
        return $this;
    }

    /**
     * 子钱包ID
     * @return int
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * 子钱包ID
     * @param int $walletId
     * @return self
     */
    public function setWalletId(?int $walletId): self
    {
        $this->walletId = $walletId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->alertEmails !== null) {
            $result['alert_emails'] = $this->alertEmails;
        }
        if ($this->balanceAlertRules !== null) {
            $result['balance_alert_rules'] = $this->balanceAlertRules;
        }
        if ($this->budgetAlertRules !== null) {
            $result['budget_alert_rules'] = $this->budgetAlertRules;
        }
        if ($this->budgetUsageAlertRules !== null) {
            $result['budget_usage_alert_rules'] = $this->budgetUsageAlertRules;
        }
        if ($this->walletId !== null) {
            $result['wallet_id'] = $this->walletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['alert_emails'] ?? null) !== null && is_array($v)) {
            $obj->alertEmails = $v;
        }
        if (($v = $data['balance_alert_rules'] ?? null) !== null && is_array($v)) {
            $obj->balanceAlertRules = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBalanceAlertRulesInner::fromArray($vv), $v);
        }
        if (($v = $data['budget_alert_rules'] ?? null) !== null && is_array($v)) {
            $obj->budgetAlertRules = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBudgetAlertRulesInner::fromArray($vv), $v);
        }
        if (($v = $data['budget_usage_alert_rules'] ?? null) !== null && is_array($v)) {
            $obj->budgetUsageAlertRules = array_map(fn ($vv) => \Oceanengine\Models\SharedWalletWatchRuleGetV30ResponseDataRuleBudgetUsageAlertRulesInner::fromArray($vv), $v);
        }
        if (($v = $data['wallet_id'] ?? null) !== null) {
            $obj->walletId = (int) $v;
        }
        return $obj;
    }
}
