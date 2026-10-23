<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWatchRuleSubmitV30Request implements \JsonSerializable
{
    /**
     * 鉴权账户鉴权账户(BP传bp_id，代理商传agent_id)
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWatchRuleSubmitV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\SharedWalletWatchRuleSubmitV30RequestRule
     */
    protected ?\Oceanengine\Models\SharedWalletWatchRuleSubmitV30RequestRule $rule = null;

    /**
     * 鉴权账户鉴权账户(BP传bp_id，代理商传agent_id)
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 鉴权账户鉴权账户(BP传bp_id，代理商传agent_id)
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWatchRuleSubmitV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWatchRuleSubmitV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletWatchRuleSubmitV30RequestRule
     */
    public function getRule(): ?\Oceanengine\Models\SharedWalletWatchRuleSubmitV30RequestRule
    {
        return $this->rule;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWatchRuleSubmitV30RequestRule $rule
     * @return self
     */
    public function setRule(?\Oceanengine\Models\SharedWalletWatchRuleSubmitV30RequestRule $rule): self
    {
        $this->rule = $rule;
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
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->rule !== null) {
            $result['rule'] = $this->rule;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['rule'] ?? null) !== null && is_array($v)) {
            $obj->rule = \Oceanengine\Models\SharedWalletWatchRuleSubmitV30RequestRule::fromArray($v);
        }
        return $obj;
    }
}
