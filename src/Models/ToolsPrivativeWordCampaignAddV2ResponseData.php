<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordCampaignAddV2ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $campaignErrorList = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInner[]
     */
    protected ?array $campaignList = null;

    /**
     * @return int[]
     */
    public function getCampaignErrorList(): ?array
    {
        return $this->campaignErrorList;
    }

    /**
     * @param int[] $campaignErrorList
     * @return self
     */
    public function setCampaignErrorList(?array $campaignErrorList): self
    {
        $this->campaignErrorList = $campaignErrorList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInner[]
     */
    public function getCampaignList(): ?array
    {
        return $this->campaignList;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInner[] $campaignList
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
        if ($this->campaignErrorList !== null) {
            $result['campaign_error_list'] = $this->campaignErrorList;
        }
        if ($this->campaignList !== null) {
            $result['campaign_list'] = $this->campaignList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['campaign_error_list'] ?? null) !== null && is_array($v)) {
            $obj->campaignErrorList = $v;
        }
        if (($v = $data['campaign_list'] ?? null) !== null && is_array($v)) {
            $obj->campaignList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordCampaignAddV2ResponseDataCampaignListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
