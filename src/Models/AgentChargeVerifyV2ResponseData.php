<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentChargeVerifyV2ResponseData implements \JsonSerializable
{
    /**
     * 可用合同列表
     * @var \Oceanengine\Models\AgentChargeVerifyV2ResponseDataChargeContractListInner[]
     */
    protected ?array $chargeContractList = null;

    /**
     * 可用合同列表
     * @return \Oceanengine\Models\AgentChargeVerifyV2ResponseDataChargeContractListInner[]
     */
    public function getChargeContractList(): ?array
    {
        return $this->chargeContractList;
    }

    /**
     * 可用合同列表
     * @param \Oceanengine\Models\AgentChargeVerifyV2ResponseDataChargeContractListInner[] $chargeContractList
     * @return self
     */
    public function setChargeContractList(?array $chargeContractList): self
    {
        $this->chargeContractList = $chargeContractList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->chargeContractList !== null) {
            $result['charge_contract_list'] = $this->chargeContractList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['charge_contract_list'] ?? null) !== null && is_array($v)) {
            $obj->chargeContractList = array_map(fn ($vv) => \Oceanengine\Models\AgentChargeVerifyV2ResponseDataChargeContractListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
