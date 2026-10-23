<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandPolicyListV30ResponseData implements \JsonSerializable
{
    /**
     * 政策规则行列表
     * @var \Oceanengine\Models\BrandPolicyListV30ResponseDataPolicyInfosInner[]
     */
    protected ?array $policyInfos = null;

    /**
     * 政策规则行列表
     * @return \Oceanengine\Models\BrandPolicyListV30ResponseDataPolicyInfosInner[]
     */
    public function getPolicyInfos(): ?array
    {
        return $this->policyInfos;
    }

    /**
     * 政策规则行列表
     * @param \Oceanengine\Models\BrandPolicyListV30ResponseDataPolicyInfosInner[] $policyInfos
     * @return self
     */
    public function setPolicyInfos(?array $policyInfos): self
    {
        $this->policyInfos = $policyInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->policyInfos !== null) {
            $result['policy_infos'] = $this->policyInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['policy_infos'] ?? null) !== null && is_array($v)) {
            $obj->policyInfos = array_map(fn ($vv) => \Oceanengine\Models\BrandPolicyListV30ResponseDataPolicyInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
