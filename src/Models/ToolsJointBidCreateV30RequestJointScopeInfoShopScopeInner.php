<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsJointBidCreateV30RequestJointScopeInfoShopScopeInner implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsJointBidCreateV30JointScopeInfoShopScopeDimension
     */
    protected ?string $dimension = null;

    /**
     * @var \Oceanengine\Models\ToolsJointBidCreateV30JointScopeInfoShopScopeOperator
     */
    protected ?string $operator = null;

    /**
     * @return int[]
     */
    public function getAccountId(): ?array
    {
        return $this->accountId;
    }

    /**
     * @param int[] $accountId
     * @return self
     */
    public function setAccountId(?array $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsJointBidCreateV30JointScopeInfoShopScopeDimension
     */
    public function getDimension(): ?string
    {
        return $this->dimension;
    }

    /**
     * @param \Oceanengine\Models\ToolsJointBidCreateV30JointScopeInfoShopScopeDimension $dimension
     * @return self
     */
    public function setDimension(?string $dimension): self
    {
        $this->dimension = $dimension;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsJointBidCreateV30JointScopeInfoShopScopeOperator
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @param \Oceanengine\Models\ToolsJointBidCreateV30JointScopeInfoShopScopeOperator $operator
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
        if ($this->dimension !== null) {
            $result['dimension'] = $this->dimension;
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
        if (($v = $data['dimension'] ?? null) !== null) {
            $obj->dimension = (string) $v;
        }
        if (($v = $data['operator'] ?? null) !== null) {
            $obj->operator = (string) $v;
        }
        return $obj;
    }
}
