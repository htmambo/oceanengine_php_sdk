<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalReportProjectGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalReportProjectGetV30FilteringCampaignType
     */
    protected ?string $campaignType = null;

    /**
     * 项目ID，查询项目id。 注意：project_id是个维度条件，如果不传，查询的是本地推广告账户ID全部聚合后数据；如果仅传入字符串project_ids，查询的是维度明细是项目维度数据；如果传入数值，查询的是具体项目id数据
     * @var int[]
     */
    protected ?array $cdpProjectIds = null;

    /**
     * 投放模式
     * @var \Oceanengine\Models\LocalReportProjectGetV30FilteringDeliveryMode[]
     */
    protected ?array $deliveryMode = null;

    /**
     * 优化目标
     * @var \Oceanengine\Models\LocalReportProjectGetV30FilteringExternalAction[]
     */
    protected ?array $externalAction = null;

    /**
     * @var \Oceanengine\Models\LocalReportProjectGetV30FilteringLocalDeliveryScene
     */
    protected ?string $localDeliveryScene = null;

    /**
     * @var \Oceanengine\Models\LocalReportProjectGetV30FilteringMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @return \Oceanengine\Models\LocalReportProjectGetV30FilteringCampaignType
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }

    /**
     * @param \Oceanengine\Models\LocalReportProjectGetV30FilteringCampaignType $campaignType
     * @return self
     */
    public function setCampaignType(?string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * 项目ID，查询项目id。 注意：project_id是个维度条件，如果不传，查询的是本地推广告账户ID全部聚合后数据；如果仅传入字符串project_ids，查询的是维度明细是项目维度数据；如果传入数值，查询的是具体项目id数据
     * @return int[]
     */
    public function getCdpProjectIds(): ?array
    {
        return $this->cdpProjectIds;
    }

    /**
     * 项目ID，查询项目id。 注意：project_id是个维度条件，如果不传，查询的是本地推广告账户ID全部聚合后数据；如果仅传入字符串project_ids，查询的是维度明细是项目维度数据；如果传入数值，查询的是具体项目id数据
     * @param int[] $cdpProjectIds
     * @return self
     */
    public function setCdpProjectIds(?array $cdpProjectIds): self
    {
        $this->cdpProjectIds = $cdpProjectIds;
        return $this;
    }

    /**
     * 投放模式
     * @return \Oceanengine\Models\LocalReportProjectGetV30FilteringDeliveryMode[]
     */
    public function getDeliveryMode(): ?array
    {
        return $this->deliveryMode;
    }

    /**
     * 投放模式
     * @param \Oceanengine\Models\LocalReportProjectGetV30FilteringDeliveryMode[] $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?array $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * 优化目标
     * @return \Oceanengine\Models\LocalReportProjectGetV30FilteringExternalAction[]
     */
    public function getExternalAction(): ?array
    {
        return $this->externalAction;
    }

    /**
     * 优化目标
     * @param \Oceanengine\Models\LocalReportProjectGetV30FilteringExternalAction[] $externalAction
     * @return self
     */
    public function setExternalAction(?array $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportProjectGetV30FilteringLocalDeliveryScene
     */
    public function getLocalDeliveryScene(): ?string
    {
        return $this->localDeliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalReportProjectGetV30FilteringLocalDeliveryScene $localDeliveryScene
     * @return self
     */
    public function setLocalDeliveryScene(?string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportProjectGetV30FilteringMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\LocalReportProjectGetV30FilteringMarketingGoal $marketingGoal
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
        if ($this->cdpProjectIds !== null) {
            $result['cdp_project_ids'] = $this->cdpProjectIds;
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
        if (($v = $data['cdp_project_ids'] ?? null) !== null && is_array($v)) {
            $obj->cdpProjectIds = $v;
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
