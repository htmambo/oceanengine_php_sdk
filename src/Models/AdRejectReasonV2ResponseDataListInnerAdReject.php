<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdRejectReasonV2ResponseDataListInnerAdReject implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdRejectRejectDataInner[]
     */
    protected ?array $rejectData = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdRejectRejectDataInner[]
     */
    public function getRejectData(): ?array
    {
        return $this->rejectData;
    }

    /**
     * @param \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdRejectRejectDataInner[] $rejectData
     * @return self
     */
    public function setRejectData(?array $rejectData): self
    {
        $this->rejectData = $rejectData;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->rejectData !== null) {
            $result['reject_data'] = $this->rejectData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['reject_data'] ?? null) !== null && is_array($v)) {
            $obj->rejectData = array_map(fn ($vv) => \Oceanengine\Models\AdRejectReasonV2ResponseDataListInnerAdRejectRejectDataInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
