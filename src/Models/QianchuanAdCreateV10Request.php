<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdCreateV10Request implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $adKeywords = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestAudience
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestAudience $audience = null;

    /**
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var int
     */
    protected ?int $brandId = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10CampaignScene
     */
    protected ?string $campaignScene = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestChannelProductInfosInner[]
     */
    protected ?array $channelProductInfos = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10CreativeAutoGenerate
     */
    protected ?string $creativeAutoGenerate = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInner[]
     */
    protected ?array $creativeList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10CreativeMaterialMode
     */
    protected ?string $creativeMaterialMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10DynamicCreative
     */
    protected ?string $dynamicCreative = null;

    /**
     * @var int
     */
    protected ?int $firstIndustryId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10IsHomepageHide
     */
    protected ?string $isHomepageHide = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10IsIntelligent
     */
    protected ?string $isIntelligent = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10LabAdType
     */
    protected ?string $labAdType = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10MarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10MarketingScene
     */
    protected ?string $marketingScene = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInner[]
     */
    protected ?array $multiProductCreativeList = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int[]
     */
    protected ?array $productIds = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeCard
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeCard $programmaticCreativeCard = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeMediaListInner[]
     */
    protected ?array $programmaticCreativeMediaList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeTitleListInner[]
     */
    protected ?array $programmaticCreativeTitleList = null;

    /**
     * @var int
     */
    protected ?int $secondIndustryId = null;

    /**
     * @var int
     */
    protected ?int $shopId = null;

    /**
     * @var int
     */
    protected ?int $thirdIndustryId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestTrackUrl
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestTrackUrl $trackUrl = null;

    /**
     * @return string[]
     */
    public function getAdKeywords(): ?array
    {
        return $this->adKeywords;
    }

    /**
     * @param string[] $adKeywords
     * @return self
     */
    public function setAdKeywords(?array $adKeywords): self
    {
        $this->adKeywords = $adKeywords;
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
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\QianchuanAdCreateV10RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * @param int $brandId
     * @return self
     */
    public function setBrandId(?int $brandId): self
    {
        $this->brandId = $brandId;
        return $this;
    }

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
     * @return \Oceanengine\Models\QianchuanAdCreateV10CampaignScene
     */
    public function getCampaignScene(): ?string
    {
        return $this->campaignScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10CampaignScene $campaignScene
     * @return self
     */
    public function setCampaignScene(?string $campaignScene): self
    {
        $this->campaignScene = $campaignScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestChannelProductInfosInner[]
     */
    public function getChannelProductInfos(): ?array
    {
        return $this->channelProductInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestChannelProductInfosInner[] $channelProductInfos
     * @return self
     */
    public function setChannelProductInfos(?array $channelProductInfos): self
    {
        $this->channelProductInfos = $channelProductInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10CreativeAutoGenerate
     */
    public function getCreativeAutoGenerate(): ?string
    {
        return $this->creativeAutoGenerate;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10CreativeAutoGenerate $creativeAutoGenerate
     * @return self
     */
    public function setCreativeAutoGenerate(?string $creativeAutoGenerate): self
    {
        $this->creativeAutoGenerate = $creativeAutoGenerate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInner[]
     */
    public function getCreativeList(): ?array
    {
        return $this->creativeList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInner[] $creativeList
     * @return self
     */
    public function setCreativeList(?array $creativeList): self
    {
        $this->creativeList = $creativeList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10CreativeMaterialMode
     */
    public function getCreativeMaterialMode(): ?string
    {
        return $this->creativeMaterialMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10CreativeMaterialMode $creativeMaterialMode
     * @return self
     */
    public function setCreativeMaterialMode(?string $creativeMaterialMode): self
    {
        $this->creativeMaterialMode = $creativeMaterialMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanAdCreateV10RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10DynamicCreative
     */
    public function getDynamicCreative(): ?string
    {
        return $this->dynamicCreative;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10DynamicCreative $dynamicCreative
     * @return self
     */
    public function setDynamicCreative(?string $dynamicCreative): self
    {
        $this->dynamicCreative = $dynamicCreative;
        return $this;
    }

    /**
     * @return int
     */
    public function getFirstIndustryId(): ?int
    {
        return $this->firstIndustryId;
    }

    /**
     * @param int $firstIndustryId
     * @return self
     */
    public function setFirstIndustryId(?int $firstIndustryId): self
    {
        $this->firstIndustryId = $firstIndustryId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10IsHomepageHide
     */
    public function getIsHomepageHide(): ?string
    {
        return $this->isHomepageHide;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10IsHomepageHide $isHomepageHide
     * @return self
     */
    public function setIsHomepageHide(?string $isHomepageHide): self
    {
        $this->isHomepageHide = $isHomepageHide;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10IsIntelligent
     */
    public function getIsIntelligent(): ?string
    {
        return $this->isIntelligent;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10IsIntelligent $isIntelligent
     * @return self
     */
    public function setIsIntelligent(?string $isIntelligent): self
    {
        $this->isIntelligent = $isIntelligent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10LabAdType
     */
    public function getLabAdType(): ?string
    {
        return $this->labAdType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10LabAdType $labAdType
     * @return self
     */
    public function setLabAdType(?string $labAdType): self
    {
        $this->labAdType = $labAdType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10MarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10MarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10MarketingScene
     */
    public function getMarketingScene(): ?string
    {
        return $this->marketingScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10MarketingScene $marketingScene
     * @return self
     */
    public function setMarketingScene(?string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInner[]
     */
    public function getMultiProductCreativeList(): ?array
    {
        return $this->multiProductCreativeList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInner[] $multiProductCreativeList
     * @return self
     */
    public function setMultiProductCreativeList(?array $multiProductCreativeList): self
    {
        $this->multiProductCreativeList = $multiProductCreativeList;
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
     * @return int[]
     */
    public function getProductIds(): ?array
    {
        return $this->productIds;
    }

    /**
     * @param int[] $productIds
     * @return self
     */
    public function setProductIds(?array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeCard
     */
    public function getProgrammaticCreativeCard(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeCard
    {
        return $this->programmaticCreativeCard;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeCard $programmaticCreativeCard
     * @return self
     */
    public function setProgrammaticCreativeCard(?\Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeCard $programmaticCreativeCard): self
    {
        $this->programmaticCreativeCard = $programmaticCreativeCard;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeMediaListInner[]
     */
    public function getProgrammaticCreativeMediaList(): ?array
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeMediaListInner[] $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?array $programmaticCreativeMediaList): self
    {
        $this->programmaticCreativeMediaList = $programmaticCreativeMediaList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeTitleListInner[]
     */
    public function getProgrammaticCreativeTitleList(): ?array
    {
        return $this->programmaticCreativeTitleList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeTitleListInner[] $programmaticCreativeTitleList
     * @return self
     */
    public function setProgrammaticCreativeTitleList(?array $programmaticCreativeTitleList): self
    {
        $this->programmaticCreativeTitleList = $programmaticCreativeTitleList;
        return $this;
    }

    /**
     * @return int
     */
    public function getSecondIndustryId(): ?int
    {
        return $this->secondIndustryId;
    }

    /**
     * @param int $secondIndustryId
     * @return self
     */
    public function setSecondIndustryId(?int $secondIndustryId): self
    {
        $this->secondIndustryId = $secondIndustryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     * @return self
     */
    public function setShopId(?int $shopId): self
    {
        $this->shopId = $shopId;
        return $this;
    }

    /**
     * @return int
     */
    public function getThirdIndustryId(): ?int
    {
        return $this->thirdIndustryId;
    }

    /**
     * @param int $thirdIndustryId
     * @return self
     */
    public function setThirdIndustryId(?int $thirdIndustryId): self
    {
        $this->thirdIndustryId = $thirdIndustryId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestTrackUrl
     */
    public function getTrackUrl(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestTrackUrl
    {
        return $this->trackUrl;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestTrackUrl $trackUrl
     * @return self
     */
    public function setTrackUrl(?\Oceanengine\Models\QianchuanAdCreateV10RequestTrackUrl $trackUrl): self
    {
        $this->trackUrl = $trackUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adKeywords !== null) {
            $result['ad_keywords'] = $this->adKeywords;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->brandId !== null) {
            $result['brand_id'] = $this->brandId;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignScene !== null) {
            $result['campaign_scene'] = $this->campaignScene;
        }
        if ($this->channelProductInfos !== null) {
            $result['channel_product_infos'] = $this->channelProductInfos;
        }
        if ($this->creativeAutoGenerate !== null) {
            $result['creative_auto_generate'] = $this->creativeAutoGenerate;
        }
        if ($this->creativeList !== null) {
            $result['creative_list'] = $this->creativeList;
        }
        if ($this->creativeMaterialMode !== null) {
            $result['creative_material_mode'] = $this->creativeMaterialMode;
        }
        if ($this->deliverySetting !== null) {
            $result['delivery_setting'] = $this->deliverySetting;
        }
        if ($this->dynamicCreative !== null) {
            $result['dynamic_creative'] = $this->dynamicCreative;
        }
        if ($this->firstIndustryId !== null) {
            $result['first_industry_id'] = $this->firstIndustryId;
        }
        if ($this->isHomepageHide !== null) {
            $result['is_homepage_hide'] = $this->isHomepageHide;
        }
        if ($this->isIntelligent !== null) {
            $result['is_intelligent'] = $this->isIntelligent;
        }
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        if ($this->labAdType !== null) {
            $result['lab_ad_type'] = $this->labAdType;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->marketingScene !== null) {
            $result['marketing_scene'] = $this->marketingScene;
        }
        if ($this->multiProductCreativeList !== null) {
            $result['multi_product_creative_list'] = $this->multiProductCreativeList;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->productIds !== null) {
            $result['product_ids'] = $this->productIds;
        }
        if ($this->programmaticCreativeCard !== null) {
            $result['programmatic_creative_card'] = $this->programmaticCreativeCard;
        }
        if ($this->programmaticCreativeMediaList !== null) {
            $result['programmatic_creative_media_list'] = $this->programmaticCreativeMediaList;
        }
        if ($this->programmaticCreativeTitleList !== null) {
            $result['programmatic_creative_title_list'] = $this->programmaticCreativeTitleList;
        }
        if ($this->secondIndustryId !== null) {
            $result['second_industry_id'] = $this->secondIndustryId;
        }
        if ($this->shopId !== null) {
            $result['shop_id'] = $this->shopId;
        }
        if ($this->thirdIndustryId !== null) {
            $result['third_industry_id'] = $this->thirdIndustryId;
        }
        if ($this->trackUrl !== null) {
            $result['track_url'] = $this->trackUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_keywords'] ?? null) !== null && is_array($v)) {
            $obj->adKeywords = $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\QianchuanAdCreateV10RequestAudience::fromArray($v);
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['brand_id'] ?? null) !== null) {
            $obj->brandId = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_scene'] ?? null) !== null) {
            $obj->campaignScene = (string) $v;
        }
        if (($v = $data['channel_product_infos'] ?? null) !== null && is_array($v)) {
            $obj->channelProductInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdCreateV10RequestChannelProductInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['creative_auto_generate'] ?? null) !== null) {
            $obj->creativeAutoGenerate = (string) $v;
        }
        if (($v = $data['creative_list'] ?? null) !== null && is_array($v)) {
            $obj->creativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdCreateV10RequestCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['creative_material_mode'] ?? null) !== null) {
            $obj->creativeMaterialMode = (string) $v;
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanAdCreateV10RequestDeliverySetting::fromArray($v);
        }
        if (($v = $data['dynamic_creative'] ?? null) !== null) {
            $obj->dynamicCreative = (string) $v;
        }
        if (($v = $data['first_industry_id'] ?? null) !== null) {
            $obj->firstIndustryId = (int) $v;
        }
        if (($v = $data['is_homepage_hide'] ?? null) !== null) {
            $obj->isHomepageHide = (string) $v;
        }
        if (($v = $data['is_intelligent'] ?? null) !== null) {
            $obj->isIntelligent = (string) $v;
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdCreateV10RequestKeywordsInner::fromArray($vv), $v);
        }
        if (($v = $data['lab_ad_type'] ?? null) !== null) {
            $obj->labAdType = (string) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['marketing_scene'] ?? null) !== null) {
            $obj->marketingScene = (string) $v;
        }
        if (($v = $data['multi_product_creative_list'] ?? null) !== null && is_array($v)) {
            $obj->multiProductCreativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['product_ids'] ?? null) !== null && is_array($v)) {
            $obj->productIds = $v;
        }
        if (($v = $data['programmatic_creative_card'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeCard = \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeCard::fromArray($v);
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeMediaListInner::fromArray($vv), $v);
        }
        if (($v = $data['programmatic_creative_title_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeTitleList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeTitleListInner::fromArray($vv), $v);
        }
        if (($v = $data['second_industry_id'] ?? null) !== null) {
            $obj->secondIndustryId = (int) $v;
        }
        if (($v = $data['shop_id'] ?? null) !== null) {
            $obj->shopId = (int) $v;
        }
        if (($v = $data['third_industry_id'] ?? null) !== null) {
            $obj->thirdIndustryId = (int) $v;
        }
        if (($v = $data['track_url'] ?? null) !== null && is_array($v)) {
            $obj->trackUrl = \Oceanengine\Models\QianchuanAdCreateV10RequestTrackUrl::fromArray($v);
        }
        return $obj;
    }
}
