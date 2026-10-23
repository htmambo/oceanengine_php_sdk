<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdKeywordsGetV10Filtering implements \JsonSerializable
{
    /**
     * 需要获取关键词的计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 需要获取关键词的计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 需要获取关键词的计划ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        return $obj;
    }
}
