<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentCreditChargeSubmitV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentCreditChargeSubmitV2ResponseDataChargeCommitResult
     */
    protected ?\Oceanengine\Models\AgentCreditChargeSubmitV2ResponseDataChargeCommitResult $chargeCommitResult = null;

    /**
     * @return \Oceanengine\Models\AgentCreditChargeSubmitV2ResponseDataChargeCommitResult
     */
    public function getChargeCommitResult(): ?\Oceanengine\Models\AgentCreditChargeSubmitV2ResponseDataChargeCommitResult
    {
        return $this->chargeCommitResult;
    }

    /**
     * @param \Oceanengine\Models\AgentCreditChargeSubmitV2ResponseDataChargeCommitResult $chargeCommitResult
     * @return self
     */
    public function setChargeCommitResult(?\Oceanengine\Models\AgentCreditChargeSubmitV2ResponseDataChargeCommitResult $chargeCommitResult): self
    {
        $this->chargeCommitResult = $chargeCommitResult;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->chargeCommitResult !== null) {
            $result['charge_commit_result'] = $this->chargeCommitResult;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['charge_commit_result'] ?? null) !== null && is_array($v)) {
            $obj->chargeCommitResult = \Oceanengine\Models\AgentCreditChargeSubmitV2ResponseDataChargeCommitResult::fromArray($v);
        }
        return $obj;
    }
}
