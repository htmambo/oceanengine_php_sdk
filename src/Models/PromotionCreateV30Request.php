<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30Request implements \JsonSerializable
{
    /**
     * 七日内留存天数，单位：天，取值范围(0,7)，仅支持最多2位小数。仅当满足以下条件时可设置： - landing_type = APP 应用推广 - ad_type = ALL 通投 - delivery_mode = MANUAL  手动投放 - external_action = AD_CONVERT_TYPE_ACTIVE 优化目标=激活 - deep_external_action = AD_CONVERT_TYPE_RETENTION_DAYS深度优化目标 = 留存天数 - delivery_setting.deep_bid_type = AD_CONVERT_TYPE_RETENTION_DAYS深度优化方式 = 留存天数 - delivery_range.inventory_catalog = MANUAL  广告位大类 = 首选媒体 - inventory_type = INVENTORY_UNION_SLOT  投放位置 只选择穿山甲
     * @var float
     */
    protected ?float $var7dRetention = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30AdDownloadStatus
     */
    protected ?string $adDownloadStatus = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30AutoExtendTraffic
     */
    protected ?string $autoExtendTraffic = null;

    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestBrandInfo
     */
    protected ?\Oceanengine\Models\PromotionCreateV30RequestBrandInfo $brandInfo = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30BudgetMode
     */
    protected ?string $budgetMode = null;

    /**
     * @var int
     */
    protected ?int $configId = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30CreativeAutoGenerateSwitch
     */
    protected ?string $creativeAutoGenerateSwitch = null;

    /**
     * @var float
     */
    protected ?float $deepCpabid = null;

    /**
     * @var float
     */
    protected ?float $firstRoiGoal = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30IsCommentDisable
     */
    protected ?string $isCommentDisable = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30MaterialsType
     */
    protected ?string $materialsType = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestNativeSetting
     */
    protected ?\Oceanengine\Models\PromotionCreateV30RequestNativeSetting $nativeSetting = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30Operation
     */
    protected ?string $operation = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterials
     */
    protected ?\Oceanengine\Models\PromotionCreateV30RequestPromotionMaterials $promotionMaterials = null;

    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionRelatedProductInner[]
     */
    protected ?array $promotionRelatedProduct = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var float
     */
    protected ?float $unionBidRatio = null;

    /**
     * 七日内留存天数，单位：天，取值范围(0,7)，仅支持最多2位小数。仅当满足以下条件时可设置： - landing_type = APP 应用推广 - ad_type = ALL 通投 - delivery_mode = MANUAL  手动投放 - external_action = AD_CONVERT_TYPE_ACTIVE 优化目标=激活 - deep_external_action = AD_CONVERT_TYPE_RETENTION_DAYS深度优化目标 = 留存天数 - delivery_setting.deep_bid_type = AD_CONVERT_TYPE_RETENTION_DAYS深度优化方式 = 留存天数 - delivery_range.inventory_catalog = MANUAL  广告位大类 = 首选媒体 - inventory_type = INVENTORY_UNION_SLOT  投放位置 只选择穿山甲
     * @return float
     */
    public function getVar7dRetention(): ?float
    {
        return $this->var7dRetention;
    }

    /**
     * 七日内留存天数，单位：天，取值范围(0,7)，仅支持最多2位小数。仅当满足以下条件时可设置： - landing_type = APP 应用推广 - ad_type = ALL 通投 - delivery_mode = MANUAL  手动投放 - external_action = AD_CONVERT_TYPE_ACTIVE 优化目标=激活 - deep_external_action = AD_CONVERT_TYPE_RETENTION_DAYS深度优化目标 = 留存天数 - delivery_setting.deep_bid_type = AD_CONVERT_TYPE_RETENTION_DAYS深度优化方式 = 留存天数 - delivery_range.inventory_catalog = MANUAL  广告位大类 = 首选媒体 - inventory_type = INVENTORY_UNION_SLOT  投放位置 只选择穿山甲
     * @param float $var7dRetention
     * @return self
     */
    public function setVar7dRetention(?float $var7dRetention): self
    {
        $this->var7dRetention = $var7dRetention;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30AdDownloadStatus
     */
    public function getAdDownloadStatus(): ?string
    {
        return $this->adDownloadStatus;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30AdDownloadStatus $adDownloadStatus
     * @return self
     */
    public function setAdDownloadStatus(?string $adDownloadStatus): self
    {
        $this->adDownloadStatus = $adDownloadStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30AutoExtendTraffic
     */
    public function getAutoExtendTraffic(): ?string
    {
        return $this->autoExtendTraffic;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30AutoExtendTraffic $autoExtendTraffic
     * @return self
     */
    public function setAutoExtendTraffic(?string $autoExtendTraffic): self
    {
        $this->autoExtendTraffic = $autoExtendTraffic;
        return $this;
    }

    /**
     * @return float
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * @param float $bid
     * @return self
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\PromotionCreateV30RequestBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\PromotionCreateV30RequestBrandInfo $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudget(): ?float
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     * @return self
     */
    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30BudgetMode
     */
    public function getBudgetMode(): ?string
    {
        return $this->budgetMode;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30BudgetMode $budgetMode
     * @return self
     */
    public function setBudgetMode(?string $budgetMode): self
    {
        $this->budgetMode = $budgetMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfigId(): ?int
    {
        return $this->configId;
    }

    /**
     * @param int $configId
     * @return self
     */
    public function setConfigId(?int $configId): self
    {
        $this->configId = $configId;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpaBid(): ?float
    {
        return $this->cpaBid;
    }

    /**
     * @param float $cpaBid
     * @return self
     */
    public function setCpaBid(?float $cpaBid): self
    {
        $this->cpaBid = $cpaBid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30CreativeAutoGenerateSwitch
     */
    public function getCreativeAutoGenerateSwitch(): ?string
    {
        return $this->creativeAutoGenerateSwitch;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30CreativeAutoGenerateSwitch $creativeAutoGenerateSwitch
     * @return self
     */
    public function setCreativeAutoGenerateSwitch(?string $creativeAutoGenerateSwitch): self
    {
        $this->creativeAutoGenerateSwitch = $creativeAutoGenerateSwitch;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeepCpabid(): ?float
    {
        return $this->deepCpabid;
    }

    /**
     * @param float $deepCpabid
     * @return self
     */
    public function setDeepCpabid(?float $deepCpabid): self
    {
        $this->deepCpabid = $deepCpabid;
        return $this;
    }

    /**
     * @return float
     */
    public function getFirstRoiGoal(): ?float
    {
        return $this->firstRoiGoal;
    }

    /**
     * @param float $firstRoiGoal
     * @return self
     */
    public function setFirstRoiGoal(?float $firstRoiGoal): self
    {
        $this->firstRoiGoal = $firstRoiGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30IsCommentDisable
     */
    public function getIsCommentDisable(): ?string
    {
        return $this->isCommentDisable;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30IsCommentDisable $isCommentDisable
     * @return self
     */
    public function setIsCommentDisable(?string $isCommentDisable): self
    {
        $this->isCommentDisable = $isCommentDisable;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30MaterialsType
     */
    public function getMaterialsType(): ?string
    {
        return $this->materialsType;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30MaterialsType $materialsType
     * @return self
     */
    public function setMaterialsType(?string $materialsType): self
    {
        $this->materialsType = $materialsType;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestNativeSetting
     */
    public function getNativeSetting(): ?\Oceanengine\Models\PromotionCreateV30RequestNativeSetting
    {
        return $this->nativeSetting;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestNativeSetting $nativeSetting
     * @return self
     */
    public function setNativeSetting(?\Oceanengine\Models\PromotionCreateV30RequestNativeSetting $nativeSetting): self
    {
        $this->nativeSetting = $nativeSetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30Operation
     */
    public function getOperation(): ?string
    {
        return $this->operation;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30Operation $operation
     * @return self
     */
    public function setOperation(?string $operation): self
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterials
     */
    public function getPromotionMaterials(): ?\Oceanengine\Models\PromotionCreateV30RequestPromotionMaterials
    {
        return $this->promotionMaterials;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterials $promotionMaterials
     * @return self
     */
    public function setPromotionMaterials(?\Oceanengine\Models\PromotionCreateV30RequestPromotionMaterials $promotionMaterials): self
    {
        $this->promotionMaterials = $promotionMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionRelatedProductInner[]
     */
    public function getPromotionRelatedProduct(): ?array
    {
        return $this->promotionRelatedProduct;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionRelatedProductInner[] $promotionRelatedProduct
     * @return self
     */
    public function setPromotionRelatedProduct(?array $promotionRelatedProduct): self
    {
        $this->promotionRelatedProduct = $promotionRelatedProduct;
        return $this;
    }

    /**
     * @return float
     */
    public function getRoiGoal(): ?float
    {
        return $this->roiGoal;
    }

    /**
     * @param float $roiGoal
     * @return self
     */
    public function setRoiGoal(?float $roiGoal): self
    {
        $this->roiGoal = $roiGoal;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnionBidRatio(): ?float
    {
        return $this->unionBidRatio;
    }

    /**
     * @param float $unionBidRatio
     * @return self
     */
    public function setUnionBidRatio(?float $unionBidRatio): self
    {
        $this->unionBidRatio = $unionBidRatio;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->var7dRetention !== null) {
            $result['7d_retention'] = $this->var7dRetention;
        }
        if ($this->adDownloadStatus !== null) {
            $result['ad_download_status'] = $this->adDownloadStatus;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->autoExtendTraffic !== null) {
            $result['auto_extend_traffic'] = $this->autoExtendTraffic;
        }
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->budget !== null) {
            $result['budget'] = $this->budget;
        }
        if ($this->budgetMode !== null) {
            $result['budget_mode'] = $this->budgetMode;
        }
        if ($this->configId !== null) {
            $result['config_id'] = $this->configId;
        }
        if ($this->cpaBid !== null) {
            $result['cpa_bid'] = $this->cpaBid;
        }
        if ($this->creativeAutoGenerateSwitch !== null) {
            $result['creative_auto_generate_switch'] = $this->creativeAutoGenerateSwitch;
        }
        if ($this->deepCpabid !== null) {
            $result['deep_cpabid'] = $this->deepCpabid;
        }
        if ($this->firstRoiGoal !== null) {
            $result['first_roi_goal'] = $this->firstRoiGoal;
        }
        if ($this->isCommentDisable !== null) {
            $result['is_comment_disable'] = $this->isCommentDisable;
        }
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        if ($this->materialsType !== null) {
            $result['materials_type'] = $this->materialsType;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->nativeSetting !== null) {
            $result['native_setting'] = $this->nativeSetting;
        }
        if ($this->operation !== null) {
            $result['operation'] = $this->operation;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        if ($this->promotionMaterials !== null) {
            $result['promotion_materials'] = $this->promotionMaterials;
        }
        if ($this->promotionRelatedProduct !== null) {
            $result['promotion_related_product'] = $this->promotionRelatedProduct;
        }
        if ($this->roiGoal !== null) {
            $result['roi_goal'] = $this->roiGoal;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->unionBidRatio !== null) {
            $result['union_bid_ratio'] = $this->unionBidRatio;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['7d_retention'] ?? null) !== null) {
            $obj->var7dRetention = (float) $v;
        }
        if (($v = $data['ad_download_status'] ?? null) !== null) {
            $obj->adDownloadStatus = (string) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['auto_extend_traffic'] ?? null) !== null) {
            $obj->autoExtendTraffic = (string) $v;
        }
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\PromotionCreateV30RequestBrandInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
        }
        if (($v = $data['budget_mode'] ?? null) !== null) {
            $obj->budgetMode = (string) $v;
        }
        if (($v = $data['config_id'] ?? null) !== null) {
            $obj->configId = (int) $v;
        }
        if (($v = $data['cpa_bid'] ?? null) !== null) {
            $obj->cpaBid = (float) $v;
        }
        if (($v = $data['creative_auto_generate_switch'] ?? null) !== null) {
            $obj->creativeAutoGenerateSwitch = (string) $v;
        }
        if (($v = $data['deep_cpabid'] ?? null) !== null) {
            $obj->deepCpabid = (float) $v;
        }
        if (($v = $data['first_roi_goal'] ?? null) !== null) {
            $obj->firstRoiGoal = (float) $v;
        }
        if (($v = $data['is_comment_disable'] ?? null) !== null) {
            $obj->isCommentDisable = (string) $v;
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestKeywordsInner::fromArray($vv), $v);
        }
        if (($v = $data['materials_type'] ?? null) !== null) {
            $obj->materialsType = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['native_setting'] ?? null) !== null && is_array($v)) {
            $obj->nativeSetting = \Oceanengine\Models\PromotionCreateV30RequestNativeSetting::fromArray($v);
        }
        if (($v = $data['operation'] ?? null) !== null) {
            $obj->operation = (string) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        if (($v = $data['promotion_materials'] ?? null) !== null && is_array($v)) {
            $obj->promotionMaterials = \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterials::fromArray($v);
        }
        if (($v = $data['promotion_related_product'] ?? null) !== null && is_array($v)) {
            $obj->promotionRelatedProduct = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionRelatedProductInner::fromArray($vv), $v);
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['union_bid_ratio'] ?? null) !== null) {
            $obj->unionBidRatio = (float) $v;
        }
        return $obj;
    }
}
