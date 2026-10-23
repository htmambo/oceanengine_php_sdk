<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselUpdateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\CarouselUpdateV2RequestCarouselsInner[]
     */
    protected ?array $carousels = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CarouselUpdateV2RequestCarouselsInner[]
     */
    public function getCarousels(): ?array
    {
        return $this->carousels;
    }

    /**
     * @param \Oceanengine\Models\CarouselUpdateV2RequestCarouselsInner[] $carousels
     * @return self
     */
    public function setCarousels(?array $carousels): self
    {
        $this->carousels = $carousels;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->carousels !== null) {
            $result['carousels'] = $this->carousels;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['carousels'] ?? null) !== null && is_array($v)) {
            $obj->carousels = array_map(fn ($vv) => \Oceanengine\Models\CarouselUpdateV2RequestCarouselsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
