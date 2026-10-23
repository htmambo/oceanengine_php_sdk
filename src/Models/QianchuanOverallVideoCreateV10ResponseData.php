<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallVideoCreateV10ResponseData implements \JsonSerializable
{
    /**
     * 创建后生成的计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 创建后生成的计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 创建后生成的计划ID
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
