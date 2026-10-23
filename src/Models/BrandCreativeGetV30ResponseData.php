<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInner[]
     */
    protected ?array $creatives = null;

    /**
     * 结果总数
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInner[]
     */
    public function getCreatives(): ?array
    {
        return $this->creatives;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInner[] $creatives
     * @return self
     */
    public function setCreatives(?array $creatives): self
    {
        $this->creatives = $creatives;
        return $this;
    }

    /**
     * 结果总数
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * 结果总数
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
        if ($this->creatives !== null) {
            $result['creatives'] = $this->creatives;
        }
        if ($this->totalCount !== null) {
            $result['total_count'] = $this->totalCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creatives'] ?? null) !== null && is_array($v)) {
            $obj->creatives = array_map(fn ($vv) => \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInner::fromArray($vv), $v);
        }
        if (($v = $data['total_count'] ?? null) !== null) {
            $obj->totalCount = (int) $v;
        }
        return $obj;
    }
}
