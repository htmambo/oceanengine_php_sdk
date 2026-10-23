<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionUpdateV30Request implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $var7dRetention = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\PromotionUpdateV30AutoExtendTraffic
     */
    protected ?string $autoExtendTraffic = null;

    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var \Oceanengine\Models\PromotionUpdateV30RequestBrandInfo
     */
    protected ?\Oceanengine\Models\PromotionUpdateV30RequestBrandInfo $brandInfo = null;

    /**
     * @var float
     */
    protected ?float $budget = null;

    /**
     * @var int
     */
    protected ?int $configId = null;

    /**
     * @var float
     */
    protected ?float $cpaBid = null;

    /**
     * @var \Oceanengine\Models\PromotionUpdateV30CreativeAutoGenerateSwitch
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
     * @var \Oceanengine\Models\PromotionUpdateV30IsCommentDisable
     */
    protected ?string $isCommentDisable = null;

    /**
     * @var \Oceanengine\Models\PromotionUpdateV30RequestKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var \Oceanengine\Models\PromotionUpdateV30MaterialsType
     */
    protected ?string $materialsType = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\PromotionUpdateV30RequestNativeSetting
     */
    protected ?\Oceanengine\Models\PromotionUpdateV30RequestNativeSetting $nativeSetting = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var \Oceanengine\Models\PromotionUpdateV30RequestPromotionMaterials
     */
    protected ?\Oceanengine\Models\PromotionUpdateV30RequestPromotionMaterials $promotionMaterials = null;

    /**
     * @var \Oceanengine\Models\PromotionUpdateV30RequestPromotionRelatedProductInner[]
     */
    protected ?array $promotionRelatedProduct = null;

    /**
     * @var float
     */
    protected ?float $roiGoal = null;

    /**
     * @var \Oceanengine\Models\PromotionUpdateV30RequestShopMultiRoiGoalsInner[]
     */
    protected ?array $shopMultiRoiGoals = null;

    /**
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var float
     */
    protected ?float $unionBidRatio = null;

    /**
     * @return float
     */
    public function getVar7dRetention(): ?float
    {
        return $this->var7dRetention;
    }

    /**
     * @param float $var7dRetention
     * @return self
     */
    public function setVar7dRetention(?float $var7dRetention): self
    {
        $this->var7dRetention = $var7dRetention;
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
     * @return \Oceanengine\Models\PromotionUpdateV30AutoExtendTraffic
     */
    public function getAutoExtendTraffic(): ?string
    {
        return $this->autoExtendTraffic;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30AutoExtendTraffic $autoExtendTraffic
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
     * @return \Oceanengine\Models\PromotionUpdateV30RequestBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\PromotionUpdateV30RequestBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30RequestBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\PromotionUpdateV30RequestBrandInfo $brandInfo): self
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
     * @return \Oceanengine\Models\PromotionUpdateV30CreativeAutoGenerateSwitch
     */
    public function getCreativeAutoGenerateSwitch(): ?string
    {
        return $this->creativeAutoGenerateSwitch;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30CreativeAutoGenerateSwitch $creativeAutoGenerateSwitch
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
     * @return \Oceanengine\Models\PromotionUpdateV30IsCommentDisable
     */
    public function getIsCommentDisable(): ?string
    {
        return $this->isCommentDisable;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30IsCommentDisable $isCommentDisable
     * @return self
     */
    public function setIsCommentDisable(?string $isCommentDisable): self
    {
        $this->isCommentDisable = $isCommentDisable;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionUpdateV30RequestKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30RequestKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionUpdateV30MaterialsType
     */
    public function getMaterialsType(): ?string
    {
        return $this->materialsType;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30MaterialsType $materialsType
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
     * @return \Oceanengine\Models\PromotionUpdateV30RequestNativeSetting
     */
    public function getNativeSetting(): ?\Oceanengine\Models\PromotionUpdateV30RequestNativeSetting
    {
        return $this->nativeSetting;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30RequestNativeSetting $nativeSetting
     * @return self
     */
    public function setNativeSetting(?\Oceanengine\Models\PromotionUpdateV30RequestNativeSetting $nativeSetting): self
    {
        $this->nativeSetting = $nativeSetting;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionUpdateV30RequestPromotionMaterials
     */
    public function getPromotionMaterials(): ?\Oceanengine\Models\PromotionUpdateV30RequestPromotionMaterials
    {
        return $this->promotionMaterials;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30RequestPromotionMaterials $promotionMaterials
     * @return self
     */
    public function setPromotionMaterials(?\Oceanengine\Models\PromotionUpdateV30RequestPromotionMaterials $promotionMaterials): self
    {
        $this->promotionMaterials = $promotionMaterials;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\PromotionUpdateV30RequestPromotionRelatedProductInner[]
     */
    public function getPromotionRelatedProduct(): ?array
    {
        return $this->promotionRelatedProduct;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30RequestPromotionRelatedProductInner[] $promotionRelatedProduct
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
     * @return \Oceanengine\Models\PromotionUpdateV30RequestShopMultiRoiGoalsInner[]
     */
    public function getShopMultiRoiGoals(): ?array
    {
        return $this->shopMultiRoiGoals;
    }

    /**
     * @param \Oceanengine\Models\PromotionUpdateV30RequestShopMultiRoiGoalsInner[] $shopMultiRoiGoals
     * @return self
     */
    public function setShopMultiRoiGoals(?array $shopMultiRoiGoals): self
    {
        $this->shopMultiRoiGoals = $shopMultiRoiGoals;
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
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
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
        if ($this->shopMultiRoiGoals !== null) {
            $result['shop_multi_roi_goals'] = $this->shopMultiRoiGoals;
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
            $obj->brandInfo = \Oceanengine\Models\PromotionUpdateV30RequestBrandInfo::fromArray($v);
        }
        if (($v = $data['budget'] ?? null) !== null) {
            $obj->budget = (float) $v;
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
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\PromotionUpdateV30RequestKeywordsInner::fromArray($vv), $v);
        }
        if (($v = $data['materials_type'] ?? null) !== null) {
            $obj->materialsType = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['native_setting'] ?? null) !== null && is_array($v)) {
            $obj->nativeSetting = \Oceanengine\Models\PromotionUpdateV30RequestNativeSetting::fromArray($v);
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['promotion_materials'] ?? null) !== null && is_array($v)) {
            $obj->promotionMaterials = \Oceanengine\Models\PromotionUpdateV30RequestPromotionMaterials::fromArray($v);
        }
        if (($v = $data['promotion_related_product'] ?? null) !== null && is_array($v)) {
            $obj->promotionRelatedProduct = array_map(fn ($vv) => \Oceanengine\Models\PromotionUpdateV30RequestPromotionRelatedProductInner::fromArray($vv), $v);
        }
        if (($v = $data['roi_goal'] ?? null) !== null) {
            $obj->roiGoal = (float) $v;
        }
        if (($v = $data['shop_multi_roi_goals'] ?? null) !== null && is_array($v)) {
            $obj->shopMultiRoiGoals = array_map(fn ($vv) => \Oceanengine\Models\PromotionUpdateV30RequestShopMultiRoiGoalsInner::fromArray($vv), $v);
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
