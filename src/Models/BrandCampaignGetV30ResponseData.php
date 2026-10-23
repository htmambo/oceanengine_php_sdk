<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignGetV30ResponseData implements \JsonSerializable
{
    /**
     * 广告组列表
     * @var \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInner[]
     */
    protected ?array $campaigns = null;

    /**
     * 广告组总数
     * @var int
     */
    protected ?int $totalCount = null;

    /**
     * 广告组列表
     * @return \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInner[]
     */
    public function getCampaigns(): ?array
    {
        return $this->campaigns;
    }

    /**
     * 广告组列表
     * @param \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInner[] $campaigns
     * @return self
     */
    public function setCampaigns(?array $campaigns): self
    {
        $this->campaigns = $campaigns;
        return $this;
    }

    /**
     * 广告组总数
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * 广告组总数
     * @param int $totalCount
     * @return self
     */
    public function setTotalCount(?int $totalCount): self
    {
        $this->totalCount = $totalCount;
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
        if ($this->totalCount !== null) {
            $result['total_count'] = $this->totalCount;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['campaigns'] ?? null) !== null && is_array($v)) {
            $obj->campaigns = array_map(fn ($vv) => \Oceanengine\Models\BrandCampaignGetV30ResponseDataCampaignsInner::fromArray($vv), $v);
        }
        if (($v = $data['total_count'] ?? null) !== null) {
            $obj->totalCount = (int) $v;
        }
        return $obj;
    }
}
