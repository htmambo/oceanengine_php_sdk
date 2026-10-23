<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportAdGetV10Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportAdGetV10FilteringCampaignScene
     */
    protected ?string $campaignScene = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportAdGetV10FilteringMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportAdGetV10FilteringMarketingScene
     */
    protected ?string $marketingScene = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportAdGetV10FilteringOrderPlatform
     */
    protected ?string $orderPlatform = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportAdGetV10FilteringSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportAdGetV10FilteringStatus
     */
    protected ?string $status = null;

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
     * @return \Oceanengine\Models\QianchuanReportAdGetV10FilteringCampaignScene
     */
    public function getCampaignScene(): ?string
    {
        return $this->campaignScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportAdGetV10FilteringCampaignScene $campaignScene
     * @return self
     */
    public function setCampaignScene(?string $campaignScene): self
    {
        $this->campaignScene = $campaignScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportAdGetV10FilteringMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportAdGetV10FilteringMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportAdGetV10FilteringMarketingScene
     */
    public function getMarketingScene(): ?string
    {
        return $this->marketingScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportAdGetV10FilteringMarketingScene $marketingScene
     * @return self
     */
    public function setMarketingScene(?string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportAdGetV10FilteringOrderPlatform
     */
    public function getOrderPlatform(): ?string
    {
        return $this->orderPlatform;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportAdGetV10FilteringOrderPlatform $orderPlatform
     * @return self
     */
    public function setOrderPlatform(?string $orderPlatform): self
    {
        $this->orderPlatform = $orderPlatform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportAdGetV10FilteringSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportAdGetV10FilteringSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportAdGetV10FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportAdGetV10FilteringStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->campaignScene !== null) {
            $result['campaign_scene'] = $this->campaignScene;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->marketingScene !== null) {
            $result['marketing_scene'] = $this->marketingScene;
        }
        if ($this->orderPlatform !== null) {
            $result['order_platform'] = $this->orderPlatform;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['campaign_scene'] ?? null) !== null) {
            $obj->campaignScene = (string) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['marketing_scene'] ?? null) !== null) {
            $obj->marketingScene = (string) $v;
        }
        if (($v = $data['order_platform'] ?? null) !== null) {
            $obj->orderPlatform = (string) $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
