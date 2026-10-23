<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarCampaignListV2ResponseData implements \JsonSerializable
{
    /**
     * 需求列表
     * @var \Oceanengine\Models\StarCampaignListV2ResponseDataCampaignsInner[]
     */
    protected ?array $campaigns = null;

    /**
     * @var \Oceanengine\Models\StarCampaignListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarCampaignListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 需求列表
     * @return \Oceanengine\Models\StarCampaignListV2ResponseDataCampaignsInner[]
     */
    public function getCampaigns(): ?array
    {
        return $this->campaigns;
    }

    /**
     * 需求列表
     * @param \Oceanengine\Models\StarCampaignListV2ResponseDataCampaignsInner[] $campaigns
     * @return self
     */
    public function setCampaigns(?array $campaigns): self
    {
        $this->campaigns = $campaigns;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarCampaignListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarCampaignListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarCampaignListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarCampaignListV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->campaigns !== null) {
            $result['campaigns'] = $this->campaigns;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['campaigns'] ?? null) !== null && is_array($v)) {
            $obj->campaigns = array_map(fn ($vv) => \Oceanengine\Models\StarCampaignListV2ResponseDataCampaignsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarCampaignListV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
