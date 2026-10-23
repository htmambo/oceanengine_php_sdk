<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StardeliveryTaskSharingListV30ResponseDataSharingAdvertiserInfoInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $sharingAdvertiserId = null;

    /**
     * @var string
     */
    protected ?string $sharingAdvertiserName = null;

    /**
     * @return int
     */
    public function getSharingAdvertiserId(): ?int
    {
        return $this->sharingAdvertiserId;
    }

    /**
     * @param int $sharingAdvertiserId
     * @return self
     */
    public function setSharingAdvertiserId(?int $sharingAdvertiserId): self
    {
        $this->sharingAdvertiserId = $sharingAdvertiserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSharingAdvertiserName(): ?string
    {
        return $this->sharingAdvertiserName;
    }

    /**
     * @param string $sharingAdvertiserName
     * @return self
     */
    public function setSharingAdvertiserName(?string $sharingAdvertiserName): self
    {
        $this->sharingAdvertiserName = $sharingAdvertiserName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->sharingAdvertiserId !== null) {
            $result['sharing_advertiser_id'] = $this->sharingAdvertiserId;
        }
        if ($this->sharingAdvertiserName !== null) {
            $result['sharing_advertiser_name'] = $this->sharingAdvertiserName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['sharing_advertiser_id'] ?? null) !== null) {
            $obj->sharingAdvertiserId = (int) $v;
        }
        if (($v = $data['sharing_advertiser_name'] ?? null) !== null) {
            $obj->sharingAdvertiserName = (string) $v;
        }
        return $obj;
    }
}
