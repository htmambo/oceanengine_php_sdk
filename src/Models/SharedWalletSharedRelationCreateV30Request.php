<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletSharedRelationCreateV30Request implements \JsonSerializable
{
    /**
     * 账号id
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * 账户业务线列表，本次操作的adv业务线，EBP的操作必须传此参数
     * @var \Oceanengine\Models\SharedWalletSharedRelationCreateV30AccountPlatformList[]
     */
    protected ?array $accountPlatformList = null;

    /**
     * @var \Oceanengine\Models\SharedWalletSharedRelationCreateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * @var \Oceanengine\Models\SharedWalletSharedRelationCreateV30RequestAdvRangeParameter
     */
    protected ?\Oceanengine\Models\SharedWalletSharedRelationCreateV30RequestAdvRangeParameter $advRangeParameter = null;

    /**
     * 如果是绑定，填 0
     * @var int
     */
    protected ?int $fromWalletId = null;

    /**
     * 操作id
     * @var int
     */
    protected ?int $operationId = null;

    /**
     * @var \Oceanengine\Models\SharedWalletSharedRelationCreateV30RelationChangeMode
     */
    protected ?string $relationChangeMode = null;

    /**
     * 如果是解绑，填0
     * @var int
     */
    protected ?int $toWalletId = null;

    /**
     * 账号id
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * 账号id
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * 账户业务线列表，本次操作的adv业务线，EBP的操作必须传此参数
     * @return \Oceanengine\Models\SharedWalletSharedRelationCreateV30AccountPlatformList[]
     */
    public function getAccountPlatformList(): ?array
    {
        return $this->accountPlatformList;
    }

    /**
     * 账户业务线列表，本次操作的adv业务线，EBP的操作必须传此参数
     * @param \Oceanengine\Models\SharedWalletSharedRelationCreateV30AccountPlatformList[] $accountPlatformList
     * @return self
     */
    public function setAccountPlatformList(?array $accountPlatformList): self
    {
        $this->accountPlatformList = $accountPlatformList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletSharedRelationCreateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletSharedRelationCreateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletSharedRelationCreateV30RequestAdvRangeParameter
     */
    public function getAdvRangeParameter(): ?\Oceanengine\Models\SharedWalletSharedRelationCreateV30RequestAdvRangeParameter
    {
        return $this->advRangeParameter;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletSharedRelationCreateV30RequestAdvRangeParameter $advRangeParameter
     * @return self
     */
    public function setAdvRangeParameter(?\Oceanengine\Models\SharedWalletSharedRelationCreateV30RequestAdvRangeParameter $advRangeParameter): self
    {
        $this->advRangeParameter = $advRangeParameter;
        return $this;
    }

    /**
     * 如果是绑定，填 0
     * @return int
     */
    public function getFromWalletId(): ?int
    {
        return $this->fromWalletId;
    }

    /**
     * 如果是绑定，填 0
     * @param int $fromWalletId
     * @return self
     */
    public function setFromWalletId(?int $fromWalletId): self
    {
        $this->fromWalletId = $fromWalletId;
        return $this;
    }

    /**
     * 操作id
     * @return int
     */
    public function getOperationId(): ?int
    {
        return $this->operationId;
    }

    /**
     * 操作id
     * @param int $operationId
     * @return self
     */
    public function setOperationId(?int $operationId): self
    {
        $this->operationId = $operationId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\SharedWalletSharedRelationCreateV30RelationChangeMode
     */
    public function getRelationChangeMode(): ?string
    {
        return $this->relationChangeMode;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletSharedRelationCreateV30RelationChangeMode $relationChangeMode
     * @return self
     */
    public function setRelationChangeMode(?string $relationChangeMode): self
    {
        $this->relationChangeMode = $relationChangeMode;
        return $this;
    }

    /**
     * 如果是解绑，填0
     * @return int
     */
    public function getToWalletId(): ?int
    {
        return $this->toWalletId;
    }

    /**
     * 如果是解绑，填0
     * @param int $toWalletId
     * @return self
     */
    public function setToWalletId(?int $toWalletId): self
    {
        $this->toWalletId = $toWalletId;
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
        if ($this->accountPlatformList !== null) {
            $result['account_platform_list'] = $this->accountPlatformList;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->advRangeParameter !== null) {
            $result['adv_range_parameter'] = $this->advRangeParameter;
        }
        if ($this->fromWalletId !== null) {
            $result['from_wallet_id'] = $this->fromWalletId;
        }
        if ($this->operationId !== null) {
            $result['operation_id'] = $this->operationId;
        }
        if ($this->relationChangeMode !== null) {
            $result['relation_change_mode'] = $this->relationChangeMode;
        }
        if ($this->toWalletId !== null) {
            $result['to_wallet_id'] = $this->toWalletId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_platform_list'] ?? null) !== null && is_array($v)) {
            $obj->accountPlatformList = $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['adv_range_parameter'] ?? null) !== null && is_array($v)) {
            $obj->advRangeParameter = \Oceanengine\Models\SharedWalletSharedRelationCreateV30RequestAdvRangeParameter::fromArray($v);
        }
        if (($v = $data['from_wallet_id'] ?? null) !== null) {
            $obj->fromWalletId = (int) $v;
        }
        if (($v = $data['operation_id'] ?? null) !== null) {
            $obj->operationId = (int) $v;
        }
        if (($v = $data['relation_change_mode'] ?? null) !== null) {
            $obj->relationChangeMode = (string) $v;
        }
        if (($v = $data['to_wallet_id'] ?? null) !== null) {
            $obj->toWalletId = (int) $v;
        }
        return $obj;
    }
}
