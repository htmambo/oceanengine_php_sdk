<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpAdvBindGroupGetV30ResponseData implements \JsonSerializable
{
    /**
     * 每个账户可能对应多个组织
     * @var \Oceanengine\Models\EbpAdvBindGroupGetV30ResponseDataGroupInfosInner[]
     */
    protected ?array $groupInfos = null;

    /**
     * 每个账户可能对应多个组织
     * @return \Oceanengine\Models\EbpAdvBindGroupGetV30ResponseDataGroupInfosInner[]
     */
    public function getGroupInfos(): ?array
    {
        return $this->groupInfos;
    }

    /**
     * 每个账户可能对应多个组织
     * @param \Oceanengine\Models\EbpAdvBindGroupGetV30ResponseDataGroupInfosInner[] $groupInfos
     * @return self
     */
    public function setGroupInfos(?array $groupInfos): self
    {
        $this->groupInfos = $groupInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->groupInfos !== null) {
            $result['group_infos'] = $this->groupInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['group_infos'] ?? null) !== null && is_array($v)) {
            $obj->groupInfos = array_map(fn ($vv) => \Oceanengine\Models\EbpAdvBindGroupGetV30ResponseDataGroupInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
