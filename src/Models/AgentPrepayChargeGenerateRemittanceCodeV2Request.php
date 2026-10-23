<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentPrepayChargeGenerateRemittanceCodeV2Request implements \JsonSerializable
{
    /**
     * 代理商账号ID
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * 充值请求唯一ID
     * @var string
     */
    protected ?string $callerRequestId = null;

    /**
     * 充值金额，单位为分（即实际金额*100）
     * @var int
     */
    protected ?int $chargeAmount = null;

    /**
     * @var \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2RequestContractInfo
     */
    protected ?\Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2RequestContractInfo $contractInfo = null;

    /**
     * 风控信息，至少需要包含device_id和ip的json字符串，例子：{\"ip\": xxx, \"device_id\": xxx}
     * @var string
     */
    protected ?string $riskInfo = null;

    /**
     * 代理商账号ID
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * 代理商账号ID
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 充值请求唯一ID
     * @return string
     */
    public function getCallerRequestId(): ?string
    {
        return $this->callerRequestId;
    }

    /**
     * 充值请求唯一ID
     * @param string $callerRequestId
     * @return self
     */
    public function setCallerRequestId(?string $callerRequestId): self
    {
        $this->callerRequestId = $callerRequestId;
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
     * @return \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2RequestContractInfo
     */
    public function getContractInfo(): ?\Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2RequestContractInfo
    {
        return $this->contractInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2RequestContractInfo $contractInfo
     * @return self
     */
    public function setContractInfo(?\Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2RequestContractInfo $contractInfo): self
    {
        $this->contractInfo = $contractInfo;
        return $this;
    }

    /**
     * 风控信息，至少需要包含device_id和ip的json字符串，例子：{\"ip\": xxx, \"device_id\": xxx}
     * @return string
     */
    public function getRiskInfo(): ?string
    {
        return $this->riskInfo;
    }

    /**
     * 风控信息，至少需要包含device_id和ip的json字符串，例子：{\"ip\": xxx, \"device_id\": xxx}
     * @param string $riskInfo
     * @return self
     */
    public function setRiskInfo(?string $riskInfo): self
    {
        $this->riskInfo = $riskInfo;
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
        if ($this->callerRequestId !== null) {
            $result['caller_request_id'] = $this->callerRequestId;
        }
        if ($this->chargeAmount !== null) {
            $result['charge_amount'] = $this->chargeAmount;
        }
        if ($this->contractInfo !== null) {
            $result['contract_info'] = $this->contractInfo;
        }
        if ($this->riskInfo !== null) {
            $result['risk_info'] = $this->riskInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['caller_request_id'] ?? null) !== null) {
            $obj->callerRequestId = (string) $v;
        }
        if (($v = $data['charge_amount'] ?? null) !== null) {
            $obj->chargeAmount = (int) $v;
        }
        if (($v = $data['contract_info'] ?? null) !== null && is_array($v)) {
            $obj->contractInfo = \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2RequestContractInfo::fromArray($v);
        }
        if (($v = $data['risk_info'] ?? null) !== null) {
            $obj->riskInfo = (string) $v;
        }
        return $obj;
    }
}
