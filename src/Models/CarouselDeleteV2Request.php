<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselDeleteV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 图集 id
     * @var int[]
     */
    protected ?array $carouselIds = null;

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
     * 图集 id
     * @return int[]
     */
    public function getCarouselIds(): ?array
    {
        return $this->carouselIds;
    }

    /**
     * 图集 id
     * @param int[] $carouselIds
     * @return self
     */
    public function setCarouselIds(?array $carouselIds): self
    {
        $this->carouselIds = $carouselIds;
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
        if ($this->carouselIds !== null) {
            $result['carousel_ids'] = $this->carouselIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['carousel_ids'] ?? null) !== null && is_array($v)) {
            $obj->carouselIds = $v;
        }
        return $obj;
    }
}
