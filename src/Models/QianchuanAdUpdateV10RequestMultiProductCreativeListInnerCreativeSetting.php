<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdUpdateV10RequestMultiProductCreativeListInnerCreativeSetting implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $adKeywords = null;

    /**
     * 抖音号id
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingCreativeAutoGenerate
     */
    protected ?string $creativeAutoGenerate = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInnerCreativeSettingCreativeCategory
     */
    protected ?\Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInnerCreativeSettingCreativeCategory $creativeCategory = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingDynamicCreative
     */
    protected ?string $dynamicCreative = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingIsHomepageHide
     */
    protected ?string $isHomepageHide = null;

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
     * 抖音号id
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingCreativeAutoGenerate
     */
    public function getCreativeAutoGenerate(): ?string
    {
        return $this->creativeAutoGenerate;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingCreativeAutoGenerate $creativeAutoGenerate
     * @return self
     */
    public function setCreativeAutoGenerate(?string $creativeAutoGenerate): self
    {
        $this->creativeAutoGenerate = $creativeAutoGenerate;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInnerCreativeSettingCreativeCategory
     */
    public function getCreativeCategory(): ?\Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInnerCreativeSettingCreativeCategory
    {
        return $this->creativeCategory;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInnerCreativeSettingCreativeCategory $creativeCategory
     * @return self
     */
    public function setCreativeCategory(?\Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInnerCreativeSettingCreativeCategory $creativeCategory): self
    {
        $this->creativeCategory = $creativeCategory;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingDynamicCreative
     */
    public function getDynamicCreative(): ?string
    {
        return $this->dynamicCreative;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingDynamicCreative $dynamicCreative
     * @return self
     */
    public function setDynamicCreative(?string $dynamicCreative): self
    {
        $this->dynamicCreative = $dynamicCreative;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingIsHomepageHide
     */
    public function getIsHomepageHide(): ?string
    {
        return $this->isHomepageHide;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10MultiProductCreativeListCreativeSettingIsHomepageHide $isHomepageHide
     * @return self
     */
    public function setIsHomepageHide(?string $isHomepageHide): self
    {
        $this->isHomepageHide = $isHomepageHide;
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
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->creativeAutoGenerate !== null) {
            $result['creative_auto_generate'] = $this->creativeAutoGenerate;
        }
        if ($this->creativeCategory !== null) {
            $result['creative_category'] = $this->creativeCategory;
        }
        if ($this->dynamicCreative !== null) {
            $result['dynamic_creative'] = $this->dynamicCreative;
        }
        if ($this->isHomepageHide !== null) {
            $result['is_homepage_hide'] = $this->isHomepageHide;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_keywords'] ?? null) !== null && is_array($v)) {
            $obj->adKeywords = $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['creative_auto_generate'] ?? null) !== null) {
            $obj->creativeAutoGenerate = (string) $v;
        }
        if (($v = $data['creative_category'] ?? null) !== null && is_array($v)) {
            $obj->creativeCategory = \Oceanengine\Models\QianchuanAdUpdateV10RequestMultiProductCreativeListInnerCreativeSettingCreativeCategory::fromArray($v);
        }
        if (($v = $data['dynamic_creative'] ?? null) !== null) {
            $obj->dynamicCreative = (string) $v;
        }
        if (($v = $data['is_homepage_hide'] ?? null) !== null) {
            $obj->isHomepageHide = (string) $v;
        }
        return $obj;
    }
}
