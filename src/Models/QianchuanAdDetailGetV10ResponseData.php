<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $adCreateTime = null;

    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var string[]
     */
    protected ?array $adKeywords = null;

    /**
     * @var string
     */
    protected ?string $adModifyTime = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAudience
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAudience $audience = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAwemeInfoInner[]
     */
    protected ?array $awemeInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataBrandInfo
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataBrandInfo $brandInfo = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataCampaignScene
     */
    protected ?string $campaignScene = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataCreativeAutoGenerate
     */
    protected ?string $creativeAutoGenerate = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInner[]
     */
    protected ?array $creativeList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataCreativeMaterialMode
     */
    protected ?string $creativeMaterialMode = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataDynamicCreative
     */
    protected ?string $dynamicCreative = null;

    /**
     * @var int
     */
    protected ?int $firstIndustryId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataIsHomepageHide
     */
    protected ?string $isHomepageHide = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataIsIntelligent
     */
    protected ?string $isIntelligent = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataLabAdType
     */
    protected ?string $labAdType = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataMarketingScene
     */
    protected ?string $marketingScene = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInner[]
     */
    protected ?array $multiProductCreativeList = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataOptStatus
     */
    protected ?string $optStatus = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataPivativeWords
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataPivativeWords $pivativeWords = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProductInfoInner[]
     */
    protected ?array $productInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeCard
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeCard $programmaticCreativeCard = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInner[]
     */
    protected ?array $programmaticCreativeMediaList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeTitleListInner[]
     */
    protected ?array $programmaticCreativeTitleList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataRoomInfoInner[]
     */
    protected ?array $roomInfo = null;

    /**
     * @var int
     */
    protected ?int $secondIndustryId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataShopInfo
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataShopInfo $shopInfo = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataStatus
     */
    protected ?string $status = null;

    /**
     * @var int
     */
    protected ?int $thirdIndustryId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataTrackUrl
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataTrackUrl $trackUrl = null;

    /**
     * @return string
     */
    public function getAdCreateTime(): ?string
    {
        return $this->adCreateTime;
    }

    /**
     * @param string $adCreateTime
     * @return self
     */
    public function setAdCreateTime(?string $adCreateTime): self
    {
        $this->adCreateTime = $adCreateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

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
     * @return string
     */
    public function getAdModifyTime(): ?string
    {
        return $this->adModifyTime;
    }

    /**
     * @param string $adModifyTime
     * @return self
     */
    public function setAdModifyTime(?string $adModifyTime): self
    {
        $this->adModifyTime = $adModifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAudience
     */
    public function getAudience(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAwemeInfoInner[]
     */
    public function getAwemeInfo(): ?array
    {
        return $this->awemeInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAwemeInfoInner[] $awemeInfo
     * @return self
     */
    public function setAwemeInfo(?array $awemeInfo): self
    {
        $this->awemeInfo = $awemeInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataBrandInfo
     */
    public function getBrandInfo(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataBrandInfo
    {
        return $this->brandInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataBrandInfo $brandInfo
     * @return self
     */
    public function setBrandInfo(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataBrandInfo $brandInfo): self
    {
        $this->brandInfo = $brandInfo;
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataCampaignScene
     */
    public function getCampaignScene(): ?string
    {
        return $this->campaignScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataCampaignScene $campaignScene
     * @return self
     */
    public function setCampaignScene(?string $campaignScene): self
    {
        $this->campaignScene = $campaignScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataCreativeAutoGenerate
     */
    public function getCreativeAutoGenerate(): ?string
    {
        return $this->creativeAutoGenerate;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataCreativeAutoGenerate $creativeAutoGenerate
     * @return self
     */
    public function setCreativeAutoGenerate(?string $creativeAutoGenerate): self
    {
        $this->creativeAutoGenerate = $creativeAutoGenerate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInner[]
     */
    public function getCreativeList(): ?array
    {
        return $this->creativeList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInner[] $creativeList
     * @return self
     */
    public function setCreativeList(?array $creativeList): self
    {
        $this->creativeList = $creativeList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataCreativeMaterialMode
     */
    public function getCreativeMaterialMode(): ?string
    {
        return $this->creativeMaterialMode;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataCreativeMaterialMode $creativeMaterialMode
     * @return self
     */
    public function setCreativeMaterialMode(?string $creativeMaterialMode): self
    {
        $this->creativeMaterialMode = $creativeMaterialMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataDynamicCreative
     */
    public function getDynamicCreative(): ?string
    {
        return $this->dynamicCreative;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataDynamicCreative $dynamicCreative
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataIsHomepageHide
     */
    public function getIsHomepageHide(): ?string
    {
        return $this->isHomepageHide;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataIsHomepageHide $isHomepageHide
     * @return self
     */
    public function setIsHomepageHide(?string $isHomepageHide): self
    {
        $this->isHomepageHide = $isHomepageHide;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataIsIntelligent
     */
    public function getIsIntelligent(): ?string
    {
        return $this->isIntelligent;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataIsIntelligent $isIntelligent
     * @return self
     */
    public function setIsIntelligent(?string $isIntelligent): self
    {
        $this->isIntelligent = $isIntelligent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataLabAdType
     */
    public function getLabAdType(): ?string
    {
        return $this->labAdType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataLabAdType $labAdType
     * @return self
     */
    public function setLabAdType(?string $labAdType): self
    {
        $this->labAdType = $labAdType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataMarketingScene
     */
    public function getMarketingScene(): ?string
    {
        return $this->marketingScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataMarketingScene $marketingScene
     * @return self
     */
    public function setMarketingScene(?string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInner[]
     */
    public function getMultiProductCreativeList(): ?array
    {
        return $this->multiProductCreativeList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInner[] $multiProductCreativeList
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataOptStatus
     */
    public function getOptStatus(): ?string
    {
        return $this->optStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataOptStatus $optStatus
     * @return self
     */
    public function setOptStatus(?string $optStatus): self
    {
        $this->optStatus = $optStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataPivativeWords
     */
    public function getPivativeWords(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataPivativeWords
    {
        return $this->pivativeWords;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataPivativeWords $pivativeWords
     * @return self
     */
    public function setPivativeWords(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataPivativeWords $pivativeWords): self
    {
        $this->pivativeWords = $pivativeWords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProductInfoInner[]
     */
    public function getProductInfo(): ?array
    {
        return $this->productInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProductInfoInner[] $productInfo
     * @return self
     */
    public function setProductInfo(?array $productInfo): self
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeCard
     */
    public function getProgrammaticCreativeCard(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeCard
    {
        return $this->programmaticCreativeCard;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeCard $programmaticCreativeCard
     * @return self
     */
    public function setProgrammaticCreativeCard(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeCard $programmaticCreativeCard): self
    {
        $this->programmaticCreativeCard = $programmaticCreativeCard;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInner[]
     */
    public function getProgrammaticCreativeMediaList(): ?array
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInner[] $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?array $programmaticCreativeMediaList): self
    {
        $this->programmaticCreativeMediaList = $programmaticCreativeMediaList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeTitleListInner[]
     */
    public function getProgrammaticCreativeTitleList(): ?array
    {
        return $this->programmaticCreativeTitleList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeTitleListInner[] $programmaticCreativeTitleList
     * @return self
     */
    public function setProgrammaticCreativeTitleList(?array $programmaticCreativeTitleList): self
    {
        $this->programmaticCreativeTitleList = $programmaticCreativeTitleList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataRoomInfoInner[]
     */
    public function getRoomInfo(): ?array
    {
        return $this->roomInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataRoomInfoInner[] $roomInfo
     * @return self
     */
    public function setRoomInfo(?array $roomInfo): self
    {
        $this->roomInfo = $roomInfo;
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataShopInfo
     */
    public function getShopInfo(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataShopInfo
    {
        return $this->shopInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataShopInfo $shopInfo
     * @return self
     */
    public function setShopInfo(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataShopInfo $shopInfo): self
    {
        $this->shopInfo = $shopInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataTrackUrl
     */
    public function getTrackUrl(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataTrackUrl
    {
        return $this->trackUrl;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataTrackUrl $trackUrl
     * @return self
     */
    public function setTrackUrl(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataTrackUrl $trackUrl): self
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
        if ($this->adCreateTime !== null) {
            $result['ad_create_time'] = $this->adCreateTime;
        }
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adKeywords !== null) {
            $result['ad_keywords'] = $this->adKeywords;
        }
        if ($this->adModifyTime !== null) {
            $result['ad_modify_time'] = $this->adModifyTime;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->awemeInfo !== null) {
            $result['aweme_info'] = $this->awemeInfo;
        }
        if ($this->brandInfo !== null) {
            $result['brand_info'] = $this->brandInfo;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignScene !== null) {
            $result['campaign_scene'] = $this->campaignScene;
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
        if ($this->optStatus !== null) {
            $result['opt_status'] = $this->optStatus;
        }
        if ($this->pivativeWords !== null) {
            $result['pivative_words'] = $this->pivativeWords;
        }
        if ($this->productInfo !== null) {
            $result['product_info'] = $this->productInfo;
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
        if ($this->roomInfo !== null) {
            $result['room_info'] = $this->roomInfo;
        }
        if ($this->secondIndustryId !== null) {
            $result['second_industry_id'] = $this->secondIndustryId;
        }
        if ($this->shopInfo !== null) {
            $result['shop_info'] = $this->shopInfo;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
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
        if (($v = $data['ad_create_time'] ?? null) !== null) {
            $obj->adCreateTime = (string) $v;
        }
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_keywords'] ?? null) !== null && is_array($v)) {
            $obj->adKeywords = $v;
        }
        if (($v = $data['ad_modify_time'] ?? null) !== null) {
            $obj->adModifyTime = (string) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAudience::fromArray($v);
        }
        if (($v = $data['aweme_info'] ?? null) !== null && is_array($v)) {
            $obj->awemeInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataAwemeInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['brand_info'] ?? null) !== null && is_array($v)) {
            $obj->brandInfo = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataBrandInfo::fromArray($v);
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_scene'] ?? null) !== null) {
            $obj->campaignScene = (string) $v;
        }
        if (($v = $data['creative_auto_generate'] ?? null) !== null) {
            $obj->creativeAutoGenerate = (string) $v;
        }
        if (($v = $data['creative_list'] ?? null) !== null && is_array($v)) {
            $obj->creativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['creative_material_mode'] ?? null) !== null) {
            $obj->creativeMaterialMode = (string) $v;
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataDeliverySetting::fromArray($v);
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
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataKeywordsInner::fromArray($vv), $v);
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
            $obj->multiProductCreativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['opt_status'] ?? null) !== null) {
            $obj->optStatus = (string) $v;
        }
        if (($v = $data['pivative_words'] ?? null) !== null && is_array($v)) {
            $obj->pivativeWords = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataPivativeWords::fromArray($v);
        }
        if (($v = $data['product_info'] ?? null) !== null && is_array($v)) {
            $obj->productInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProductInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['programmatic_creative_card'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeCard = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeCard::fromArray($v);
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeMediaListInner::fromArray($vv), $v);
        }
        if (($v = $data['programmatic_creative_title_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeTitleList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataProgrammaticCreativeTitleListInner::fromArray($vv), $v);
        }
        if (($v = $data['room_info'] ?? null) !== null && is_array($v)) {
            $obj->roomInfo = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataRoomInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['second_industry_id'] ?? null) !== null) {
            $obj->secondIndustryId = (int) $v;
        }
        if (($v = $data['shop_info'] ?? null) !== null && is_array($v)) {
            $obj->shopInfo = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataShopInfo::fromArray($v);
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['third_industry_id'] ?? null) !== null) {
            $obj->thirdIndustryId = (int) $v;
        }
        if (($v = $data['track_url'] ?? null) !== null && is_array($v)) {
            $obj->trackUrl = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataTrackUrl::fromArray($v);
        }
        return $obj;
    }
}
