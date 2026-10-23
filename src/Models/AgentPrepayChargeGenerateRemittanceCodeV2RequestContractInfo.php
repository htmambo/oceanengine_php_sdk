<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentPrepayChargeGenerateRemittanceCodeV2RequestContractInfo implements \JsonSerializable
{
    /**
     * 合同ID
     * @var int
     */
    protected ?int $contractId = null;

    /**
     * @var \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType
     */
    protected ?string $deliveryType = null;

    /**
     * 合同ID
     * @return int
     */
    public function getContractId(): ?int
    {
        return $this->contractId;
    }

    /**
     * 合同ID
     * @param int $contractId
     * @return self
     */
    public function setContractId(?int $contractId): self
    {
        $this->contractId = $contractId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    /**
     * @param \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType $deliveryType
     * @return self
     */
    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->contractId !== null) {
            $result['contract_id'] = $this->contractId;
        }
        if ($this->deliveryType !== null) {
            $result['delivery_type'] = $this->deliveryType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['contract_id'] ?? null) !== null) {
            $obj->contractId = (int) $v;
        }
        if (($v = $data['delivery_type'] ?? null) !== null) {
            $obj->deliveryType = (string) $v;
        }
        return $obj;
    }
}
