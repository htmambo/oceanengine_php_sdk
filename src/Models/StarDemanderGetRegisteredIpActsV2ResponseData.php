<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderGetRegisteredIpActsV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemanderGetRegisteredIpActsV2ResponseDataIpActivityListInner[]
     */
    protected ?array $ipActivityList = null;

    /**
     * @return \Oceanengine\Models\StarDemanderGetRegisteredIpActsV2ResponseDataIpActivityListInner[]
     */
    public function getIpActivityList(): ?array
    {
        return $this->ipActivityList;
    }

    /**
     * @param \Oceanengine\Models\StarDemanderGetRegisteredIpActsV2ResponseDataIpActivityListInner[] $ipActivityList
     * @return self
     */
    public function setIpActivityList(?array $ipActivityList): self
    {
        $this->ipActivityList = $ipActivityList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ipActivityList !== null) {
            $result['ip_activity_list'] = $this->ipActivityList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ip_activity_list'] ?? null) !== null && is_array($v)) {
            $obj->ipActivityList = array_map(fn ($vv) => \Oceanengine\Models\StarDemanderGetRegisteredIpActsV2ResponseDataIpActivityListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
