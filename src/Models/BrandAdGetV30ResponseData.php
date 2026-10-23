<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseData implements \JsonSerializable
{
    /**
     * 广告计划详情
     * @var \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInner[]
     */
    protected ?array $ads = null;

    /**
     * 总计划数目
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * 广告计划详情
     * @return \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInner[]
     */
    public function getAds(): ?array
    {
        return $this->ads;
    }

    /**
     * 广告计划详情
     * @param \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInner[] $ads
     * @return self
     */
    public function setAds(?array $ads): self
    {
        $this->ads = $ads;
        return $this;
    }

    /**
     * 总计划数目
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * 总计划数目
     * @param int $totalCount
     * @return self
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ads !== null) {
            $result['ads'] = $this->ads;
        }
        if ($this->totalCount !== null) {
            $result['total_count'] = $this->totalCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ads'] ?? null) !== null && is_array($v)) {
            $obj->ads = array_map(fn ($vv) => \Oceanengine\Models\BrandAdGetV30ResponseDataAdsInner::fromArray($vv), $v);
        }
        if (($v = $data['total_count'] ?? null) !== null) {
            $obj->totalCount = (int) $v;
        }
        return $obj;
    }
}
