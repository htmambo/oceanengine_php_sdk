<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignModifyV30ResponseData implements \JsonSerializable
{
    /**
     * 组ID
     * @var int
     */
    protected ?int $campaignId = null;

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
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        return $obj;
    }
}
