<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserAvatarSubmitV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $advertiserId = null;

    /**
     * @return string
     */
    public function getAdvertiserId(): ?string
    {
        return $this->advertiserId;
    }

    /**
     * @param string $advertiserId
     * @return self
     */
    public function setAdvertiserId(?string $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
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
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (string) $v;
        }
        return $obj;
    }
}
