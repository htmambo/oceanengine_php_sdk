<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionAidGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionAidGetV30ResponseDataErrorListInner[]
     */
    protected ?array $errorList = null;

    /**
     * @var \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInner[]
     */
    protected ?array $promotionMapData = null;

    /**
     * @return \Oceanengine\Models\PromotionAidGetV30ResponseDataErrorListInner[]
     */
    public function getErrorList(): ?array
    {
        return $this->errorList;
    }

    /**
     * @param \Oceanengine\Models\PromotionAidGetV30ResponseDataErrorListInner[] $errorList
     * @return self
     */
    public function setErrorList(?array $errorList): self
    {
        $this->errorList = $errorList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInner[]
     */
    public function getPromotionMapData(): ?array
    {
        return $this->promotionMapData;
    }

    /**
     * @param \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInner[] $promotionMapData
     * @return self
     */
    public function setPromotionMapData(?array $promotionMapData): self
    {
        $this->promotionMapData = $promotionMapData;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorList !== null) {
            $result['error_list'] = $this->errorList;
        }
        if ($this->promotionMapData !== null) {
            $result['promotion_map_data'] = $this->promotionMapData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_list'] ?? null) !== null && is_array($v)) {
            $obj->errorList = array_map(fn ($vv) => \Oceanengine\Models\PromotionAidGetV30ResponseDataErrorListInner::fromArray($vv), $v);
        }
        if (($v = $data['promotion_map_data'] ?? null) !== null && is_array($v)) {
            $obj->promotionMapData = array_map(fn ($vv) => \Oceanengine\Models\PromotionAidGetV30ResponseDataPromotionMapDataInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
