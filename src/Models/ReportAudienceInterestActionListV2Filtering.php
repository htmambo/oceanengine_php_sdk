<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAudienceInterestActionListV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringActionDays
     */
    protected ?string $actionDays = null;

    /**
     * @var \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringActionScene[]
     */
    protected ?array $actionScene = null;

    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringAudienceLevel
     */
    protected ?string $audienceLevel = null;

    /**
     * @var int[]
     */
    protected ?array $campaignIds = null;

    /**
     * @var \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringInterestActionType
     */
    protected ?string $interestActionType = null;

    /**
     * @return \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringActionDays
     */
    public function getActionDays(): ?string
    {
        return $this->actionDays;
    }

    /**
     * @param \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringActionDays $actionDays
     * @return self
     */
    public function setActionDays(?string $actionDays): self
    {
        $this->actionDays = $actionDays;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringActionScene[]
     */
    public function getActionScene(): ?array
    {
        return $this->actionScene;
    }

    /**
     * @param \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringActionScene[] $actionScene
     * @return self
     */
    public function setActionScene(?array $actionScene): self
    {
        $this->actionScene = $actionScene;
        return $this;
    }

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
     * @return \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringAudienceLevel
     */
    public function getAudienceLevel(): ?string
    {
        return $this->audienceLevel;
    }

    /**
     * @param \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringAudienceLevel $audienceLevel
     * @return self
     */
    public function setAudienceLevel(?string $audienceLevel): self
    {
        $this->audienceLevel = $audienceLevel;
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
     * @return \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringInterestActionType
     */
    public function getInterestActionType(): ?string
    {
        return $this->interestActionType;
    }

    /**
     * @param \Oceanengine\Models\ReportAudienceInterestActionListV2FilteringInterestActionType $interestActionType
     * @return self
     */
    public function setInterestActionType(?string $interestActionType): self
    {
        $this->interestActionType = $interestActionType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionDays !== null) {
            $result['action_days'] = $this->actionDays;
        }
        if ($this->actionScene !== null) {
            $result['action_scene'] = $this->actionScene;
        }
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->audienceLevel !== null) {
            $result['audience_level'] = $this->audienceLevel;
        }
        if ($this->campaignIds !== null) {
            $result['campaign_ids'] = $this->campaignIds;
        }
        if ($this->interestActionType !== null) {
            $result['interest_action_type'] = $this->interestActionType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_days'] ?? null) !== null) {
            $obj->actionDays = (string) $v;
        }
        if (($v = $data['action_scene'] ?? null) !== null && is_array($v)) {
            $obj->actionScene = $v;
        }
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['audience_level'] ?? null) !== null) {
            $obj->audienceLevel = (string) $v;
        }
        if (($v = $data['campaign_ids'] ?? null) !== null && is_array($v)) {
            $obj->campaignIds = $v;
        }
        if (($v = $data['interest_action_type'] ?? null) !== null) {
            $obj->interestActionType = (string) $v;
        }
        return $obj;
    }
}
