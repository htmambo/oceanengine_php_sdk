<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserQualificationCreateV2V2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserQualificationCreateV2V2QualificationType
     */
    protected ?string $qualificationType = null;

    /**
     * @var \Oceanengine\Models\AdvertiserQualificationCreateV2V2RequestQualificationsInner[]
     */
    protected ?array $qualifications = null;

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
     * @return \Oceanengine\Models\AdvertiserQualificationCreateV2V2QualificationType
     */
    public function getQualificationType(): ?string
    {
        return $this->qualificationType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationCreateV2V2QualificationType $qualificationType
     * @return self
     */
    public function setQualificationType(?string $qualificationType): self
    {
        $this->qualificationType = $qualificationType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserQualificationCreateV2V2RequestQualificationsInner[]
     */
    public function getQualifications(): ?array
    {
        return $this->qualifications;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationCreateV2V2RequestQualificationsInner[] $qualifications
     * @return self
     */
    public function setQualifications(?array $qualifications): self
    {
        $this->qualifications = $qualifications;
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
        if ($this->qualificationType !== null) {
            $result['qualification_type'] = $this->qualificationType;
        }
        if ($this->qualifications !== null) {
            $result['qualifications'] = $this->qualifications;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['qualification_type'] ?? null) !== null) {
            $obj->qualificationType = (string) $v;
        }
        if (($v = $data['qualifications'] ?? null) !== null && is_array($v)) {
            $obj->qualifications = array_map(fn ($vv) => \Oceanengine\Models\AdvertiserQualificationCreateV2V2RequestQualificationsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
