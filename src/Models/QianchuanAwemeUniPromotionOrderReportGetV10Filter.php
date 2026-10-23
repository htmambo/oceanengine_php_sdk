<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionOrderReportGetV10Filter implements \JsonSerializable
{
    /**
     * 随心推商品全域计划id，最多支持100个
     * @var int[]
     */
    protected ?array $adId = null;

    /**
     * 随心推商品全域计划id，最多支持100个
     * @return int[]
     */
    public function getAdId(): ?array
    {
        return $this->adId;
    }

    /**
     * 随心推商品全域计划id，最多支持100个
     * @param int[] $adId
     * @return self
     */
    public function setAdId(?array $adId): self
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
        if (($v = $data['ad_id'] ?? null) !== null && is_array($v)) {
            $obj->adId = $v;
        }
        return $obj;
    }
}
