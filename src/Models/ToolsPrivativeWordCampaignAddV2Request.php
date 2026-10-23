<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordCampaignAddV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2RequestCampaignListInner[]
     */
    protected ?array $campaignList = null;

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
     * @return \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2RequestCampaignListInner[]
     */
    public function getCampaignList(): ?array
    {
        return $this->campaignList;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2RequestCampaignListInner[] $campaignList
     * @return self
     */
    public function setCampaignList(?array $campaignList): self
    {
        $this->campaignList = $campaignList;
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
        if ($this->campaignList !== null) {
            $result['campaign_list'] = $this->campaignList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['campaign_list'] ?? null) !== null && is_array($v)) {
            $obj->campaignList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2RequestCampaignListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
