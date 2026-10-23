<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CampaignUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $data = null;

    /**
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
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
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array<string,mixed> $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = $v;
        }
        return $obj;
    }
}
