<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignModifyV30Request implements \JsonSerializable
{
    /**
     * 广告主
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 组ID
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * 广告主
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 组ID
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * 组ID
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
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
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        return $obj;
    }
}
