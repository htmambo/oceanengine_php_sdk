<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalReportMaterialGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalReportMaterialGetV30FilteringCampaignType
     */
    protected ?string $campaignType = null;

    /**
     * @var int[]
     */
    protected ?array $cdpProjectIds = null;

    /**
     * @var \Oceanengine\Models\LocalReportMaterialGetV30FilteringDeliveryMode[]
     */
    protected ?array $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\LocalReportMaterialGetV30FilteringExternalAction[]
     */
    protected ?array $externalAction = null;

    /**
     * @var \Oceanengine\Models\LocalReportMaterialGetV30FilteringLocalDeliveryScene
     */
    protected ?string $localDeliveryScene = null;

    /**
     * 素材ID，查询素材id。 注意：material_id是个维度条件，如果不传，查询的是本地推广告账户ID全部聚合后数据；如果仅传入字符串material_ids，查询的是维度明细是素材维度数据；如果传入数值，查询的是具体素材id数据
     * @var int[]
     */
    protected ?array $materialIds = null;

    /**
     * @var \Oceanengine\Models\LocalReportMaterialGetV30FilteringMaterialType
     */
    protected ?string $materialType = null;

    /**
     * @var int[]
     */
    protected ?array $promotionIds = null;

    /**
     * @return \Oceanengine\Models\LocalReportMaterialGetV30FilteringCampaignType
     */
    public function getCampaignType(): ?string
    {
        return $this->campaignType;
    }

    /**
     * @param \Oceanengine\Models\LocalReportMaterialGetV30FilteringCampaignType $campaignType
     * @return self
     */
    public function setCampaignType(?string $campaignType): self
    {
        $this->campaignType = $campaignType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCdpProjectIds(): ?array
    {
        return $this->cdpProjectIds;
    }

    /**
     * @param int[] $cdpProjectIds
     * @return self
     */
    public function setCdpProjectIds(?array $cdpProjectIds): self
    {
        $this->cdpProjectIds = $cdpProjectIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportMaterialGetV30FilteringDeliveryMode[]
     */
    public function getDeliveryMode(): ?array
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\LocalReportMaterialGetV30FilteringDeliveryMode[] $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?array $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportMaterialGetV30FilteringExternalAction[]
     */
    public function getExternalAction(): ?array
    {
        return $this->externalAction;
    }

    /**
     * @param \Oceanengine\Models\LocalReportMaterialGetV30FilteringExternalAction[] $externalAction
     * @return self
     */
    public function setExternalAction(?array $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportMaterialGetV30FilteringLocalDeliveryScene
     */
    public function getLocalDeliveryScene(): ?string
    {
        return $this->localDeliveryScene;
    }

    /**
     * @param \Oceanengine\Models\LocalReportMaterialGetV30FilteringLocalDeliveryScene $localDeliveryScene
     * @return self
     */
    public function setLocalDeliveryScene(?string $localDeliveryScene): self
    {
        $this->localDeliveryScene = $localDeliveryScene;
        return $this;
    }

    /**
     * 素材ID，查询素材id。 注意：material_id是个维度条件，如果不传，查询的是本地推广告账户ID全部聚合后数据；如果仅传入字符串material_ids，查询的是维度明细是素材维度数据；如果传入数值，查询的是具体素材id数据
     * @return int[]
     */
    public function getMaterialIds(): ?array
    {
        return $this->materialIds;
    }

    /**
     * 素材ID，查询素材id。 注意：material_id是个维度条件，如果不传，查询的是本地推广告账户ID全部聚合后数据；如果仅传入字符串material_ids，查询的是维度明细是素材维度数据；如果传入数值，查询的是具体素材id数据
     * @param int[] $materialIds
     * @return self
     */
    public function setMaterialIds(?array $materialIds): self
    {
        $this->materialIds = $materialIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalReportMaterialGetV30FilteringMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\LocalReportMaterialGetV30FilteringMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
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
        if ($this->materialIds !== null) {
            $result['material_ids'] = $this->materialIds;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->promotionIds !== null) {
            $result['promotion_ids'] = $this->promotionIds;
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
        if (($v = $data['material_ids'] ?? null) !== null && is_array($v)) {
            $obj->materialIds = $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['promotion_ids'] ?? null) !== null && is_array($v)) {
            $obj->promotionIds = $v;
        }
        return $obj;
    }
}
