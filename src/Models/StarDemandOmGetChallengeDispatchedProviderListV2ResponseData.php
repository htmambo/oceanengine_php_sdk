<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmGetChallengeDispatchedProviderListV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandOmGetChallengeDispatchedProviderListV2ResponseDataProviderListInner[]
     */
    protected ?array $providerList = null;

    /**
     * @var int
     */
    protected ?int $total = null;

    /**
     * @return \Oceanengine\Models\StarDemandOmGetChallengeDispatchedProviderListV2ResponseDataProviderListInner[]
     */
    public function getProviderList(): ?array
    {
        return $this->providerList;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmGetChallengeDispatchedProviderListV2ResponseDataProviderListInner[] $providerList
     * @return self
     */
    public function setProviderList(?array $providerList): self
    {
        $this->providerList = $providerList;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->providerList !== null) {
            $result['provider_list'] = $this->providerList;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['provider_list'] ?? null) !== null && is_array($v)) {
            $obj->providerList = array_map(fn ($vv) => \Oceanengine\Models\StarDemandOmGetChallengeDispatchedProviderListV2ResponseDataProviderListInner::fromArray($vv), $v);
        }
        if (($v = $data['total'] ?? null) !== null) {
            $obj->total = (int) $v;
        }
        return $obj;
    }
}
