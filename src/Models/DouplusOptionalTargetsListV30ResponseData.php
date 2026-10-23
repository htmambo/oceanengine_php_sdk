<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DouplusOptionalTargetsListV30ResponseData implements \JsonSerializable
{
    /**
     * item可投转化目标列表
     * @var \Oceanengine\Models\DouplusOptionalTargetsListV30ResponseDataItemRecommendEasInner[]
     */
    protected ?array $itemRecommendEas = null;

    /**
     * 主播直播间支持的转化目标列表
     * @var \Oceanengine\Models\DouplusOptionalTargetsListV30ResponseDataLiveRecommendEasInner[]
     */
    protected ?array $liveRecommendEas = null;

    /**
     * item可投转化目标列表
     * @return \Oceanengine\Models\DouplusOptionalTargetsListV30ResponseDataItemRecommendEasInner[]
     */
    public function getItemRecommendEas(): ?array
    {
        return $this->itemRecommendEas;
    }

    /**
     * item可投转化目标列表
     * @param \Oceanengine\Models\DouplusOptionalTargetsListV30ResponseDataItemRecommendEasInner[] $itemRecommendEas
     * @return self
     */
    public function setItemRecommendEas(?array $itemRecommendEas): self
    {
        $this->itemRecommendEas = $itemRecommendEas;
        return $this;
    }

    /**
     * 主播直播间支持的转化目标列表
     * @return \Oceanengine\Models\DouplusOptionalTargetsListV30ResponseDataLiveRecommendEasInner[]
     */
    public function getLiveRecommendEas(): ?array
    {
        return $this->liveRecommendEas;
    }

    /**
     * 主播直播间支持的转化目标列表
     * @param \Oceanengine\Models\DouplusOptionalTargetsListV30ResponseDataLiveRecommendEasInner[] $liveRecommendEas
     * @return self
     */
    public function setLiveRecommendEas(?array $liveRecommendEas): self
    {
        $this->liveRecommendEas = $liveRecommendEas;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->itemRecommendEas !== null) {
            $result['item_recommend_eas'] = $this->itemRecommendEas;
        }
        if ($this->liveRecommendEas !== null) {
            $result['live_recommend_eas'] = $this->liveRecommendEas;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['item_recommend_eas'] ?? null) !== null && is_array($v)) {
            $obj->itemRecommendEas = array_map(fn ($vv) => \Oceanengine\Models\DouplusOptionalTargetsListV30ResponseDataItemRecommendEasInner::fromArray($vv), $v);
        }
        if (($v = $data['live_recommend_eas'] ?? null) !== null && is_array($v)) {
            $obj->liveRecommendEas = array_map(fn ($vv) => \Oceanengine\Models\DouplusOptionalTargetsListV30ResponseDataLiveRecommendEasInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
