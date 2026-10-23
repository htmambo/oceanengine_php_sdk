<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QueryBookingBusinessEntityIdGetV2ResponseData implements \JsonSerializable
{
    /**
     * 业务实体信息
     * @var \Oceanengine\Models\QueryBookingBusinessEntityIdGetV2ResponseDataBusinessEntityIdInfosInner[]
     */
    protected ?array $businessEntityIdInfos = null;

    /**
     * 业务实体信息
     * @return \Oceanengine\Models\QueryBookingBusinessEntityIdGetV2ResponseDataBusinessEntityIdInfosInner[]
     */
    public function getBusinessEntityIdInfos(): ?array
    {
        return $this->businessEntityIdInfos;
    }

    /**
     * 业务实体信息
     * @param \Oceanengine\Models\QueryBookingBusinessEntityIdGetV2ResponseDataBusinessEntityIdInfosInner[] $businessEntityIdInfos
     * @return self
     */
    public function setBusinessEntityIdInfos(?array $businessEntityIdInfos): self
    {
        $this->businessEntityIdInfos = $businessEntityIdInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->businessEntityIdInfos !== null) {
            $result['business_entity_id_infos'] = $this->businessEntityIdInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['business_entity_id_infos'] ?? null) !== null && is_array($v)) {
            $obj->businessEntityIdInfos = array_map(fn ($vv) => \Oceanengine\Models\QueryBookingBusinessEntityIdGetV2ResponseDataBusinessEntityIdInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
