<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentCreditChargeSubmitV2Request implements \JsonSerializable
{
    /**
     * 代理商账户
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 充值金额，单位为分（即实际金额*100）
     * @var int
     */
    protected ?int $chargeAmount = null;

    /**
     * 充值请求唯一编号，相同编号幂等
     * @var string
     */
    protected ?string $chargeRequestId = null;

    /**
     * @var \Oceanengine\Models\AgentCreditChargeSubmitV2RequestContractInfo
     */
    protected ?\Oceanengine\Models\AgentCreditChargeSubmitV2RequestContractInfo $contractInfo = null;

    /**
     * 代理商账户
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商账户
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 充值金额，单位为分（即实际金额*100）
     * @return int
     */
    public function getChargeAmount(): ?int
    {
        return $this->chargeAmount;
    }

    /**
     * 充值金额，单位为分（即实际金额*100）
     * @param int $chargeAmount
     * @return self
     */
    public function setChargeAmount(?int $chargeAmount): self
    {
        $this->chargeAmount = $chargeAmount;
        return $this;
    }

    /**
     * 充值请求唯一编号，相同编号幂等
     * @return string
     */
    public function getChargeRequestId(): ?string
    {
        return $this->chargeRequestId;
    }

    /**
     * 充值请求唯一编号，相同编号幂等
     * @param string $chargeRequestId
     * @return self
     */
    public function setChargeRequestId(?string $chargeRequestId): self
    {
        $this->chargeRequestId = $chargeRequestId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentCreditChargeSubmitV2RequestContractInfo
     */
    public function getContractInfo(): ?\Oceanengine\Models\AgentCreditChargeSubmitV2RequestContractInfo
    {
        return $this->contractInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentCreditChargeSubmitV2RequestContractInfo $contractInfo
     * @return self
     */
    public function setContractInfo(?\Oceanengine\Models\AgentCreditChargeSubmitV2RequestContractInfo $contractInfo): self
    {
        $this->contractInfo = $contractInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->chargeAmount !== null) {
            $result['charge_amount'] = $this->chargeAmount;
        }
        if ($this->chargeRequestId !== null) {
            $result['charge_request_id'] = $this->chargeRequestId;
        }
        if ($this->contractInfo !== null) {
            $result['contract_info'] = $this->contractInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['charge_amount'] ?? null) !== null) {
            $obj->chargeAmount = (int) $v;
        }
        if (($v = $data['charge_request_id'] ?? null) !== null) {
            $obj->chargeRequestId = (string) $v;
        }
        if (($v = $data['contract_info'] ?? null) !== null && is_array($v)) {
            $obj->contractInfo = \Oceanengine\Models\AgentCreditChargeSubmitV2RequestContractInfo::fromArray($v);
        }
        return $obj;
    }
}
