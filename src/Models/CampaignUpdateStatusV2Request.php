<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CampaignUpdateStatusV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int[]
     */
    protected ?array $campaignIds = null;

    /**
     * @var \Oceanengine\Models\CampaignUpdateStatusV2OptStatus
     */
    protected ?string $optStatus = null;

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
     * @return int[]
     */
    public function getCampaignIds(): ?array
    {
        return $this->campaignIds;
    }

    /**
     * @param int[] $campaignIds
     * @return self
     */
    public function setCampaignIds(?array $campaignIds): self
    {
        $this->campaignIds = $campaignIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CampaignUpdateStatusV2OptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\CampaignUpdateStatusV2OptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
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
        if ($this->campaignIds !== null) {
            $result['campaign_ids'] = $this->campaignIds;
        }
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['campaign_ids'] ?? null) !== null && is_array($v)) {
            $obj->campaignIds = $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        return $obj;
    }
}
