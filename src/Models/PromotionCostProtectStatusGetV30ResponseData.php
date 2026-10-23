<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCostProtectStatusGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionCostProtectStatusGetV30ResponseDataCompensateStatusInfoListInner[]
     */
    protected ?array $compensateStatusInfoList = null;

    /**
     * @return \Oceanengine\Models\PromotionCostProtectStatusGetV30ResponseDataCompensateStatusInfoListInner[]
     */
    public function getCompensateStatusInfoList(): ?array
    {
        return $this->compensateStatusInfoList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCostProtectStatusGetV30ResponseDataCompensateStatusInfoListInner[] $compensateStatusInfoList
     * @return self
     */
    public function setCompensateStatusInfoList(?array $compensateStatusInfoList): self
    {
        $this->compensateStatusInfoList = $compensateStatusInfoList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->compensateStatusInfoList !== null) {
            $result['compensate_status_info_list'] = $this->compensateStatusInfoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['compensate_status_info_list'] ?? null) !== null && is_array($v)) {
            $obj->compensateStatusInfoList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCostProtectStatusGetV30ResponseDataCompensateStatusInfoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
