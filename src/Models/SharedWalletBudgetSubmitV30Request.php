<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletBudgetSubmitV30Request implements \JsonSerializable
{
    /**
     * 鉴权账户(BP传bp_id，代理商传agent_id)
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletBudgetSubmitV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\SharedWalletBudgetSubmitV30RequestBudget
     */
    protected ?\Oceanengine\Models\SharedWalletBudgetSubmitV30RequestBudget $budget = null;

    /**
     * @var \Oceanengine\Models\SharedWalletBudgetSubmitV30EffectiveMode
     */
    protected ?string $effectiveMode = null;

    /**
     * 子钱包ID
     * @var int
     */
    protected ?int $subWalletId = null;

    /**
     * 鉴权账户(BP传bp_id，代理商传agent_id)
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 鉴权账户(BP传bp_id，代理商传agent_id)
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletBudgetSubmitV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletBudgetSubmitV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletBudgetSubmitV30RequestBudget
     */
    public function getBudget(): ?\Oceanengine\Models\SharedWalletBudgetSubmitV30RequestBudget
    {
        return $this->budget;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletBudgetSubmitV30RequestBudget $budget
     * @return self
     */
    public function setBudget(?\Oceanengine\Models\SharedWalletBudgetSubmitV30RequestBudget $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletBudgetSubmitV30EffectiveMode
     */
    public function getEffectiveMode(): ?string
    {
        return $this->effectiveMode;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletBudgetSubmitV30EffectiveMode $effectiveMode
     * @return self
     */
    public function setEffectiveMode(?string $effectiveMode): self
    {
        $this->effectiveMode = $effectiveMode;
        return $this;
    }

    /**
     * 子钱包ID
     * @return int
     */
    public function getSubWalletId(): ?int
    {
        return $this->subWalletId;
    }

    /**
     * 子钱包ID
     * @param int $subWalletId
     * @return self
     */
    public function setSubWalletId(?int $subWalletId): self
    {
        $this->subWalletId = $subWalletId;
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
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->effectiveMode !== null) {
            $result['effective_mode'] = $this->effectiveMode;
        }
        if ($this->subWalletId !== null) {
            $result['sub_wallet_id'] = $this->subWalletId;
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
        if (($v = $data['budget'] ?? null) !== null && is_array($v)) {
            $obj->budget = \Oceanengine\Models\SharedWalletBudgetSubmitV30RequestBudget::fromArray($v);
        }
        if (($v = $data['effective_mode'] ?? null) !== null) {
            $obj->effectiveMode = (string) $v;
        }
        if (($v = $data['sub_wallet_id'] ?? null) !== null) {
            $obj->subWalletId = (int) $v;
        }
        return $obj;
    }
}
