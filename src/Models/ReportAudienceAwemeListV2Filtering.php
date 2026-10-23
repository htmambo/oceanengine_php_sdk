<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAudienceAwemeListV2Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var \Oceanengine\Models\ReportAudienceAwemeListV2FilteringAudienceLevel
     */
    protected ?string $audienceLevel = null;

    /**
     * @var \Oceanengine\Models\ReportAudienceAwemeListV2FilteringBehaviors[]
     */
    protected ?array $behaviors = null;

    /**
     * @var int[]
     */
    protected ?array $campaignIds = null;

    /**
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAudienceAwemeListV2FilteringAudienceLevel
     */
    public function getAudienceLevel(): ?string
    {
        return $this->audienceLevel;
    }

    /**
     * @param \Oceanengine\Models\ReportAudienceAwemeListV2FilteringAudienceLevel $audienceLevel
     * @return self
     */
    public function setAudienceLevel(?string $audienceLevel): self
    {
        $this->audienceLevel = $audienceLevel;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAudienceAwemeListV2FilteringBehaviors[]
     */
    public function getBehaviors(): ?array
    {
        return $this->behaviors;
    }

    /**
     * @param \Oceanengine\Models\ReportAudienceAwemeListV2FilteringBehaviors[] $behaviors
     * @return self
     */
    public function setBehaviors(?array $behaviors): self
    {
        $this->behaviors = $behaviors;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->audienceLevel !== null) {
            $result['audience_level'] = $this->audienceLevel;
        }
        if ($this->behaviors !== null) {
            $result['behaviors'] = $this->behaviors;
        }
        if ($this->campaignIds !== null) {
            $result['campaign_ids'] = $this->campaignIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['audience_level'] ?? null) !== null) {
            $obj->audienceLevel = (string) $v;
        }
        if (($v = $data['behaviors'] ?? null) !== null && is_array($v)) {
            $obj->behaviors = $v;
        }
        if (($v = $data['campaign_ids'] ?? null) !== null && is_array($v)) {
            $obj->campaignIds = $v;
        }
        return $obj;
    }
}
