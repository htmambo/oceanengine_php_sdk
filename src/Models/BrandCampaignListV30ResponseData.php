<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignListV30ResponseData implements \JsonSerializable
{
    /**
     * 广告组列表
     * @var \Oceanengine\Models\BrandCampaignListV30ResponseDataCampaignsInner[]
     */
    protected ?array $campaigns = null;

    /**
     * @var \Oceanengine\Models\BrandCampaignListV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\BrandCampaignListV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 广告组列表
     * @return \Oceanengine\Models\BrandCampaignListV30ResponseDataCampaignsInner[]
     */
    public function getCampaigns(): ?array
    {
        return $this->campaigns;
    }

    /**
     * 广告组列表
     * @param \Oceanengine\Models\BrandCampaignListV30ResponseDataCampaignsInner[] $campaigns
     * @return self
     */
    public function setCampaigns(?array $campaigns): self
    {
        $this->campaigns = $campaigns;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCampaignListV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\BrandCampaignListV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandCampaignListV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\BrandCampaignListV30ResponseDataPageInfo $pageInfo): self
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
            $obj->campaigns = array_map(fn ($vv) => \Oceanengine\Models\BrandCampaignListV30ResponseDataCampaignsInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\BrandCampaignListV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
