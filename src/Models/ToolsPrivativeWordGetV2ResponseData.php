<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adErrorList = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordGetV2ResponseDataAdsPrivativeInner[]
     */
    protected ?array $adsPrivative = null;

    /**
     * @var int[]
     */
    protected ?array $campaignErrorList = null;

    /**
     * @var \Oceanengine\Models\ToolsPrivativeWordGetV2ResponseDataCampaignsPrivativeInner[]
     */
    protected ?array $campaignsPrivative = null;

    /**
     * @return int[]
     */
    public function getAdErrorList(): ?array
    {
        return $this->adErrorList;
    }

    /**
     * @param int[] $adErrorList
     * @return self
     */
    public function setAdErrorList(?array $adErrorList): self
    {
        $this->adErrorList = $adErrorList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPrivativeWordGetV2ResponseDataAdsPrivativeInner[]
     */
    public function getAdsPrivative(): ?array
    {
        return $this->adsPrivative;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordGetV2ResponseDataAdsPrivativeInner[] $adsPrivative
     * @return self
     */
    public function setAdsPrivative(?array $adsPrivative): self
    {
        $this->adsPrivative = $adsPrivative;
        return $this;
    }

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
     * @return \Oceanengine\Models\ToolsPrivativeWordGetV2ResponseDataCampaignsPrivativeInner[]
     */
    public function getCampaignsPrivative(): ?array
    {
        return $this->campaignsPrivative;
    }

    /**
     * @param \Oceanengine\Models\ToolsPrivativeWordGetV2ResponseDataCampaignsPrivativeInner[] $campaignsPrivative
     * @return self
     */
    public function setCampaignsPrivative(?array $campaignsPrivative): self
    {
        $this->campaignsPrivative = $campaignsPrivative;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adErrorList !== null) {
            $result['ad_error_list'] = $this->adErrorList;
        }
        if ($this->adsPrivative !== null) {
            $result['ads_privative'] = $this->adsPrivative;
        }
        if ($this->campaignErrorList !== null) {
            $result['campaign_error_list'] = $this->campaignErrorList;
        }
        if ($this->campaignsPrivative !== null) {
            $result['campaigns_privative'] = $this->campaignsPrivative;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_error_list'] ?? null) !== null && is_array($v)) {
            $obj->adErrorList = $v;
        }
        if (($v = $data['ads_privative'] ?? null) !== null && is_array($v)) {
            $obj->adsPrivative = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordGetV2ResponseDataAdsPrivativeInner::fromArray($vv), $v);
        }
        if (($v = $data['campaign_error_list'] ?? null) !== null && is_array($v)) {
            $obj->campaignErrorList = $v;
        }
        if (($v = $data['campaigns_privative'] ?? null) !== null && is_array($v)) {
            $obj->campaignsPrivative = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordGetV2ResponseDataCampaignsPrivativeInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
