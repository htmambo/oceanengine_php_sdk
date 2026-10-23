<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalReportAudienceGetV30Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * @var \Oceanengine\Models\LocalReportAudienceGetV30FilteringCampaignType
     */
    protected ?string $campaignType = null;

    /**
     * @var \Oceanengine\Models\LocalReportAudienceGetV30FilteringDeliveryScene[]
     */
    protected ?array $deliveryScene = null;

    /**
     * @var int[]
     */
    protected ?array $poiIds = null;

    /**
     * @var int[]
     */
    protected ?array $projectIds = null;

    /**
     * @var int[]
     */
    protected ?array $promotionIds = null;

    /**
     * @var \Oceanengine\Models\LocalReportAudienceGetV30FilteringRaiseGoal
     */
    protected ?string $raiseGoal = null;

    /**
     * @var \Oceanengine\Models\LocalReportAudienceGetV30FilteringRoi2Type
     */
    protected ?string $roi2Type = null;

    /**
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportAudienceGetV30FilteringCampaignType
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAudienceGetV30FilteringCampaignType $campaignType
     * @return self
     */
    public function setCampaignType(?string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportAudienceGetV30FilteringDeliveryScene[]
     */
    public function getDeliveryScene(): ?array
    {
        return $this->deliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAudienceGetV30FilteringDeliveryScene[] $deliveryScene
     * @return self
     */
    public function setDeliveryScene(?array $deliveryScene): self
    {
        $this->deliveryScene = $deliveryScene;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getPoiIds(): ?array
    {
        return $this->poiIds;
    }

    /**
     * @param int[] $poiIds
     * @return self
     */
    public function setPoiIds(?array $poiIds): self
    {
        $this->poiIds = $poiIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getProjectIds(): ?array
    {
        return $this->projectIds;
    }

    /**
     * @param int[] $projectIds
     * @return self
     */
    public function setProjectIds(?array $projectIds): self
    {
        $this->projectIds = $projectIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getPromotionIds(): ?array
    {
        return $this->promotionIds;
    }

    /**
     * @param int[] $promotionIds
     * @return self
     */
    public function setPromotionIds(?array $promotionIds): self
    {
        $this->promotionIds = $promotionIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportAudienceGetV30FilteringRaiseGoal
     */
    public function getRaiseGoal(): ?string
    {
        return $this->raiseGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAudienceGetV30FilteringRaiseGoal $raiseGoal
     * @return self
     */
    public function setRaiseGoal(?string $raiseGoal): self
    {
        $this->raiseGoal = $raiseGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportAudienceGetV30FilteringRoi2Type
     */
    public function getRoi2Type(): ?string
    {
        return $this->roi2Type;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAudienceGetV30FilteringRoi2Type $roi2Type
     * @return self
     */
    public function setRoi2Type(?string $roi2Type): self
    {
        $this->roi2Type = $roi2Type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->campaignType !== null) {
            $result['campaign_type'] = $this->campaignType;
        }
        if ($this->deliveryScene !== null) {
            $result['delivery_scene'] = $this->deliveryScene;
        }
        if ($this->poiIds !== null) {
            $result['poi_ids'] = $this->poiIds;
        }
        if ($this->projectIds !== null) {
            $result['project_ids'] = $this->projectIds;
        }
        if ($this->promotionIds !== null) {
            $result['promotion_ids'] = $this->promotionIds;
        }
        if ($this->raiseGoal !== null) {
            $result['raise_goal'] = $this->raiseGoal;
        }
        if ($this->roi2Type !== null) {
            $result['roi2_type'] = $this->roi2Type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['campaign_type'] ?? null) !== null) {
            $obj->campaignType = (string) $v;
        }
        if (($v = $data['delivery_scene'] ?? null) !== null && is_array($v)) {
            $obj->deliveryScene = $v;
        }
        if (($v = $data['poi_ids'] ?? null) !== null && is_array($v)) {
            $obj->poiIds = $v;
        }
        if (($v = $data['project_ids'] ?? null) !== null && is_array($v)) {
            $obj->projectIds = $v;
        }
        if (($v = $data['promotion_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionIds = $v;
        }
        if (($v = $data['raise_goal'] ?? null) !== null) {
            $obj->raiseGoal = (string) $v;
        }
        if (($v = $data['roi2_type'] ?? null) !== null) {
            $obj->roi2Type = (string) $v;
        }
        return $obj;
    }
}
