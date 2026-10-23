<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentPrepayChargeGenerateRemittanceCodeV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2ResponseDataRemittanceInfo
     */
    protected ?\Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2ResponseDataRemittanceInfo $remittanceInfo = null;

    /**
     * @return \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2ResponseDataRemittanceInfo
     */
    public function getRemittanceInfo(): ?\Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2ResponseDataRemittanceInfo
    {
        return $this->remittanceInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2ResponseDataRemittanceInfo $remittanceInfo
     * @return self
     */
    public function setRemittanceInfo(?\Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2ResponseDataRemittanceInfo $remittanceInfo): self
    {
        $this->remittanceInfo = $remittanceInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->remittanceInfo !== null) {
            $result['remittance_info'] = $this->remittanceInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['remittance_info'] ?? null) !== null && is_array($v)) {
            $obj->remittanceInfo = \Oceanengine\Models\AgentPrepayChargeGenerateRemittanceCodeV2ResponseDataRemittanceInfo::fromArray($v);
        }
        return $obj;
    }
}
