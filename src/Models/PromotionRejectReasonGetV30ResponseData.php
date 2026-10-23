<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionRejectReasonGetV30ResponseData implements \JsonSerializable
{
    /**
     * 广告审核建议列表
     * @var \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * 广告审核建议列表
     * @return \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 广告审核建议列表
     * @param \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\PromotionRejectReasonGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
