<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserQualificationSubmitV30Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserQualificationSubmitV30RequestSubject
     */
    protected ?\Oceanengine\Models\AdvertiserQualificationSubmitV30RequestSubject $subject = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserQualificationSubmitV30RequestSubject
     */
    public function getSubject(): ?\Oceanengine\Models\AdvertiserQualificationSubmitV30RequestSubject
    {
        return $this->subject;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationSubmitV30RequestSubject $subject
     * @return self
     */
    public function setSubject(?\Oceanengine\Models\AdvertiserQualificationSubmitV30RequestSubject $subject): self
    {
        $this->subject = $subject;
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
        if ($this->subject !== null) {
            $result['subject'] = $this->subject;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['subject'] ?? null) !== null && is_array($v)) {
            $obj->subject = \Oceanengine\Models\AdvertiserQualificationSubmitV30RequestSubject::fromArray($v);
        }
        return $obj;
    }
}
