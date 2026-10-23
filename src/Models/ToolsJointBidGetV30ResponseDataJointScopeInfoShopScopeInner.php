<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsJointBidGetV30ResponseDataJointScopeInfoShopScopeInner implements \JsonSerializable
{
    /**
     * 客户id
     * @var int[]
     */
    protected ?array $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsJointBidGetV30DataJointScopeInfoShopScopeDemension
     */
    protected ?string $demension = null;

    /**
     * @var \Oceanengine\Models\ToolsJointBidGetV30DataJointScopeInfoShopScopeOperator
     */
    protected ?string $operator = null;

    /**
     * 客户id
     * @return int[]
     */
    public function getAccountId(): ?array
    {
        return $this->accountId;
    }

    /**
     * 客户id
     * @param int[] $accountId
     * @return self
     */
    public function setAccountId(?array $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsJointBidGetV30DataJointScopeInfoShopScopeDemension
     */
    public function getDemension(): ?string
    {
        return $this->demension;
    }

    /**
     * @param \Oceanengine\Models\ToolsJointBidGetV30DataJointScopeInfoShopScopeDemension $demension
     * @return self
     */
    public function setDemension(?string $demension): self
    {
        $this->demension = $demension;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsJointBidGetV30DataJointScopeInfoShopScopeOperator
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @param \Oceanengine\Models\ToolsJointBidGetV30DataJointScopeInfoShopScopeOperator $operator
     * @return self
     */
    public function setOperator(?string $operator): self
    {
        $this->operator = $operator;
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
        if ($this->demension !== null) {
            $result['demension'] = $this->demension;
        }
        if ($this->operator !== null) {
            $result['operator'] = $this->operator;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null && is_array($v)) {
            $obj->accountId = $v;
        }
        if (($v = $data['demension'] ?? null) !== null) {
            $obj->demension = (string) $v;
        }
        if (($v = $data['operator'] ?? null) !== null) {
            $obj->operator = (string) $v;
        }
        return $obj;
    }
}
