<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdUpdateV10Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var string[]
     */
    protected ?array $adKeywords = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestAudience
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10RequestAudience $audience = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10CreativeAutoGenerate
     */
    protected ?string $creativeAutoGenerate = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInner[]
     */
    protected ?array $creativeList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestDeliverySetting
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10RequestDeliverySetting $deliverySetting = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10DynamicCreative
     */
    protected ?string $dynamicCreative = null;

    /**
     * @var int
     */
    protected ?int $firstIndustryId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10IsHomepageHide
     */
    protected ?string $isHomepageHide = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10IsIntelligent
     */
    protected ?string $isIntelligent = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInner[]
     */
    protected ?array $multiProductCreativeList = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeCard
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeCard $programmaticCreativeCard = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeMediaListInner[]
     */
    protected ?array $programmaticCreativeMediaList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeTitleListInner[]
     */
    protected ?array $programmaticCreativeTitleList = null;

    /**
     * @var int
     */
    protected ?int $secondIndustryId = null;

    /**
     * @var int
     */
    protected ?int $thirdIndustryId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestTrackUrl
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10RequestTrackUrl $trackUrl = null;

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
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestAudience
     */
    public function getAudience(): ?\Oceanengine\Models\QianchuanAdUpdateV10RequestAudience
    {
        return $this->audience;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestAudience $audience
     * @return self
     */
    public function setAudience(?\Oceanengine\Models\QianchuanAdUpdateV10RequestAudience $audience): self
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10CreativeAutoGenerate
     */
    public function getCreativeAutoGenerate(): ?string
    {
        return $this->creativeAutoGenerate;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10CreativeAutoGenerate $creativeAutoGenerate
     * @return self
     */
    public function setCreativeAutoGenerate(?string $creativeAutoGenerate): self
    {
        $this->creativeAutoGenerate = $creativeAutoGenerate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInner[]
     */
    public function getCreativeList(): ?array
    {
        return $this->creativeList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInner[] $creativeList
     * @return self
     */
    public function setCreativeList(?array $creativeList): self
    {
        $this->creativeList = $creativeList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestDeliverySetting
     */
    public function getDeliverySetting(): ?\Oceanengine\Models\QianchuanAdUpdateV10RequestDeliverySetting
    {
        return $this->deliverySetting;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestDeliverySetting $deliverySetting
     * @return self
     */
    public function setDeliverySetting(?\Oceanengine\Models\QianchuanAdUpdateV10RequestDeliverySetting $deliverySetting): self
    {
        $this->deliverySetting = $deliverySetting;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10DynamicCreative
     */
    public function getDynamicCreative(): ?string
    {
        return $this->dynamicCreative;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10DynamicCreative $dynamicCreative
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
     * @return \Oceanengine\Models\QianchuanAdUpdateV10IsHomepageHide
     */
    public function getIsHomepageHide(): ?string
    {
        return $this->isHomepageHide;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10IsHomepageHide $isHomepageHide
     * @return self
     */
    public function setIsHomepageHide(?string $isHomepageHide): self
    {
        $this->isHomepageHide = $isHomepageHide;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10IsIntelligent
     */
    public function getIsIntelligent(): ?string
    {
        return $this->isIntelligent;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10IsIntelligent $isIntelligent
     * @return self
     */
    public function setIsIntelligent(?string $isIntelligent): self
    {
        $this->isIntelligent = $isIntelligent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInner[]
     */
    public function getMultiProductCreativeList(): ?array
    {
        return $this->multiProductCreativeList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInner[] $multiProductCreativeList
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
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeCard
     */
    public function getProgrammaticCreativeCard(): ?\Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeCard
    {
        return $this->programmaticCreativeCard;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeCard $programmaticCreativeCard
     * @return self
     */
    public function setProgrammaticCreativeCard(?\Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeCard $programmaticCreativeCard): self
    {
        $this->programmaticCreativeCard = $programmaticCreativeCard;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeMediaListInner[]
     */
    public function getProgrammaticCreativeMediaList(): ?array
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeMediaListInner[] $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?array $programmaticCreativeMediaList): self
    {
        $this->programmaticCreativeMediaList = $programmaticCreativeMediaList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeTitleListInner[]
     */
    public function getProgrammaticCreativeTitleList(): ?array
    {
        return $this->programmaticCreativeTitleList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeTitleListInner[] $programmaticCreativeTitleList
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
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestTrackUrl
     */
    public function getTrackUrl(): ?\Oceanengine\Models\QianchuanAdUpdateV10RequestTrackUrl
    {
        return $this->trackUrl;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestTrackUrl $trackUrl
     * @return self
     */
    public function setTrackUrl(?\Oceanengine\Models\QianchuanAdUpdateV10RequestTrackUrl $trackUrl): self
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
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->adKeywords !== null) {
            $result['ad_keywords'] = $this->adKeywords;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->audience !== null) {
            $result['audience'] = $this->audience;
        }
        if ($this->creativeAutoGenerate !== null) {
            $result['creative_auto_generate'] = $this->creativeAutoGenerate;
        }
        if ($this->creativeList !== null) {
            $result['creative_list'] = $this->creativeList;
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
        if ($this->multiProductCreativeList !== null) {
            $result['multi_product_creative_list'] = $this->multiProductCreativeList;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
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
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['ad_keywords'] ?? null) !== null && is_array($v)) {
            $obj->adKeywords = $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audience'] ?? null) !== null && is_array($v)) {
            $obj->audience = \Oceanengine\Models\QianchuanAdUpdateV10RequestAudience::fromArray($v);
        }
        if (($v = $data['creative_auto_generate'] ?? null) !== null) {
            $obj->creativeAutoGenerate = (string) $v;
        }
        if (($v = $data['creative_list'] ?? null) !== null && is_array($v)) {
            $obj->creativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['delivery_setting'] ?? null) !== null && is_array($v)) {
            $obj->deliverySetting = \Oceanengine\Models\QianchuanAdUpdateV10RequestDeliverySetting::fromArray($v);
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
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdUpdateV10RequestKeywordsInner::fromArray($vv), $v);
        }
        if (($v = $data['multi_product_creative_list'] ?? null) !== null && is_array($v)) {
            $obj->multiProductCreativeList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['programmatic_creative_card'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeCard = \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeCard::fromArray($v);
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeMediaListInner::fromArray($vv), $v);
        }
        if (($v = $data['programmatic_creative_title_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeTitleList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdUpdateV10RequestProgrammaticCreativeTitleListInner::fromArray($vv), $v);
        }
        if (($v = $data['second_industry_id'] ?? null) !== null) {
            $obj->secondIndustryId = (int) $v;
        }
        if (($v = $data['third_industry_id'] ?? null) !== null) {
            $obj->thirdIndustryId = (int) $v;
        }
        if (($v = $data['track_url'] ?? null) !== null && is_array($v)) {
            $obj->trackUrl = \Oceanengine\Models\QianchuanAdUpdateV10RequestTrackUrl::fromArray($v);
        }
        return $obj;
    }
}
