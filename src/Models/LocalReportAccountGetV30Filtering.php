<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalReportAccountGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalReportAccountGetV30FilteringCampaignType
     */
    protected ?string $campaignType = null;

    /**
     * @var \Oceanengine\Models\LocalReportAccountGetV30FilteringDeliveryMode[]
     */
    protected ?array $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\LocalReportAccountGetV30FilteringExternalAction[]
     */
    protected ?array $externalAction = null;

    /**
     * @var \Oceanengine\Models\LocalReportAccountGetV30FilteringLocalDeliveryScene
     */
    protected ?string $localDeliveryScene = null;

    /**
     * @var \Oceanengine\Models\LocalReportAccountGetV30FilteringMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @return \Oceanengine\Models\LocalReportAccountGetV30FilteringCampaignType
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAccountGetV30FilteringCampaignType $campaignType
     * @return self
     */
    public function setCampaignType(?string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportAccountGetV30FilteringDeliveryMode[]
     */
    public function getDeliveryMode(): ?array
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAccountGetV30FilteringDeliveryMode[] $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?array $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportAccountGetV30FilteringExternalAction[]
     */
    public function getExternalAction(): ?array
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAccountGetV30FilteringExternalAction[] $externalAction
     * @return self
     */
    public function setExternalAction(?array $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportAccountGetV30FilteringLocalDeliveryScene
     */
    public function getLocalDeliveryScene(): ?string
    {
        return $this->localDeliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAccountGetV30FilteringLocalDeliveryScene $localDeliveryScene
     * @return self
     */
    public function setLocalDeliveryScene(?string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportAccountGetV30FilteringMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalReportAccountGetV30FilteringMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->campaignType !== null) {
            $result['campaign_type'] = $this->campaignType;
        }
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->externalAction !== null) {
            $result['external_action'] = $this->externalAction;
        }
        if ($this->localDeliveryScene !== null) {
            $result['local_delivery_scene'] = $this->localDeliveryScene;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['campaign_type'] ?? null) !== null) {
            $obj->campaignType = (string) $v;
        }
        if (($v = $data['delivery_mode'] ?? null) !== null && is_array($v)) {
            $obj->deliveryMode = $v;
        }
        if (($v = $data['external_action'] ?? null) !== null && is_array($v)) {
            $obj->externalAction = $v;
        }
        if (($v = $data['local_delivery_scene'] ?? null) !== null) {
            $obj->localDeliveryScene = (string) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        return $obj;
    }
}
