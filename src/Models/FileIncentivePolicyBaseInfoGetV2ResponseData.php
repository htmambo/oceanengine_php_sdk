<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileIncentivePolicyBaseInfoGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\FileIncentivePolicyBaseInfoGetV2ResponseDataPolicyListInner[]
     */
    protected ?array $policyList = null;

    /**
     * @return \Oceanengine\Models\FileIncentivePolicyBaseInfoGetV2ResponseDataPolicyListInner[]
     */
    public function getPolicyList(): ?array
    {
        return $this->policyList;
    }

    /**
     * @param \Oceanengine\Models\FileIncentivePolicyBaseInfoGetV2ResponseDataPolicyListInner[] $policyList
     * @return self
     */
    public function setPolicyList(?array $policyList): self
    {
        $this->policyList = $policyList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->policyList !== null) {
            $result['policy_list'] = $this->policyList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['policy_list'] ?? null) !== null && is_array($v)) {
            $obj->policyList = array_map(fn ($vv) => \Oceanengine\Models\FileIncentivePolicyBaseInfoGetV2ResponseDataPolicyListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
