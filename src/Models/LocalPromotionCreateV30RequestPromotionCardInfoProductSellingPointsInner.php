<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionCreateV30RequestPromotionCardInfoProductSellingPointsInner implements \JsonSerializable
{
    /**
     * 卖点描述
     * @var string
     */
    protected ?string $sellingPoint = null;

    /**
     * 卖点描述
     * @return string
     */
    public function getSellingPoint(): ?string
    {
        return $this->sellingPoint;
    }

    /**
     * 卖点描述
     * @param string $sellingPoint
     * @return self
     */
    public function setSellingPoint(?string $sellingPoint): self
    {
        $this->sellingPoint = $sellingPoint;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->sellingPoint !== null) {
            $result['selling_point'] = $this->sellingPoint;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['selling_point'] ?? null) !== null) {
            $obj->sellingPoint = (string) $v;
        }
        return $obj;
    }
}
