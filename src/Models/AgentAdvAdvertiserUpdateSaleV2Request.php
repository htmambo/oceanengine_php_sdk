<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvAdvertiserUpdateSaleV2Request implements \JsonSerializable
{
    /**
     * 需要变更销售的广告主账户ID列表
     * @var int[]
     */
    protected ?array $accountIds = null;

    /**
     * 代理商账户ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 变更后广告主的销售ID
     * @var int
     */
    protected ?int $saleId = null;

    /**
     * 需要变更销售的广告主账户ID列表
     * @return int[]
     */
    public function getAccountIds(): ?array
    {
        return $this->accountIds;
    }

    /**
     * 需要变更销售的广告主账户ID列表
     * @param int[] $accountIds
     * @return self
     */
    public function setAccountIds(?array $accountIds): self
    {
        $this->accountIds = $accountIds;
        return $this;
    }

    /**
     * 代理商账户ID
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商账户ID
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 变更后广告主的销售ID
     * @return int
     */
    public function getSaleId(): ?int
    {
        return $this->saleId;
    }

    /**
     * 变更后广告主的销售ID
     * @param int $saleId
     * @return self
     */
    public function setSaleId(?int $saleId): self
    {
        $this->saleId = $saleId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountIds !== null) {
            $result['account_ids'] = $this->accountIds;
        }
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->saleId !== null) {
            $result['sale_id'] = $this->saleId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_ids'] ?? null) !== null && is_array($v)) {
            $obj->accountIds = $v;
        }
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['sale_id'] ?? null) !== null) {
            $obj->saleId = (int) $v;
        }
        return $obj;
    }
}
