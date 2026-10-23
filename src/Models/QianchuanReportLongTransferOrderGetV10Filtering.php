<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportLongTransferOrderGetV10Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $adId = null;

    /**
     * @return string
     */
    public function getAdId(): ?string
    {
        return $this->adId;
    }

    /**
     * @param string $adId
     * @return self
     */
    public function setAdId(?string $adId): self
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
            $obj->adId = (string) $v;
        }
        return $obj;
    }
}
