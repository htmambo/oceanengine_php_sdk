<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeUpdateV30RequestAdvancedCreativeInfo implements \JsonSerializable
{
    /**
     * 附加创意类型
     * @var int
     */
    protected ?int $advancedCreativeType = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoCard
     */
    protected ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoCard $card = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponent
     */
    protected ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponent $exploreOneTimeComponent = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoSearchComponent
     */
    protected ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoSearchComponent $searchComponent = null;

    /**
     * 附加创意类型
     * @return int
     */
    public function getAdvancedCreativeType(): ?int
    {
        return $this->advancedCreativeType;
    }

    /**
     * 附加创意类型
     * @param int $advancedCreativeType
     * @return self
     */
    public function setAdvancedCreativeType(?int $advancedCreativeType): self
    {
        $this->advancedCreativeType = $advancedCreativeType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoCard
     */
    public function getCard(): ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoCard
    {
        return $this->card;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoCard $card
     * @return self
     */
    public function setCard(?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoCard $card): self
    {
        $this->card = $card;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponent
     */
    public function getExploreOneTimeComponent(): ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponent
    {
        return $this->exploreOneTimeComponent;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponent $exploreOneTimeComponent
     * @return self
     */
    public function setExploreOneTimeComponent(?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponent $exploreOneTimeComponent): self
    {
        $this->exploreOneTimeComponent = $exploreOneTimeComponent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoSearchComponent
     */
    public function getSearchComponent(): ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoSearchComponent
    {
        return $this->searchComponent;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoSearchComponent $searchComponent
     * @return self
     */
    public function setSearchComponent(?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoSearchComponent $searchComponent): self
    {
        $this->searchComponent = $searchComponent;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advancedCreativeType !== null) {
            $result['advanced_creative_type'] = $this->advancedCreativeType;
        }
        if ($this->card !== null) {
            $result['card'] = $this->card;
        }
        if ($this->exploreOneTimeComponent !== null) {
            $result['explore_one_time_component'] = $this->exploreOneTimeComponent;
        }
        if ($this->searchComponent !== null) {
            $result['search_component'] = $this->searchComponent;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advanced_creative_type'] ?? null) !== null) {
            $obj->advancedCreativeType = (int) $v;
        }
        if (($v = $data['card'] ?? null) !== null && is_array($v)) {
            $obj->card = \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoCard::fromArray($v);
        }
        if (($v = $data['explore_one_time_component'] ?? null) !== null && is_array($v)) {
            $obj->exploreOneTimeComponent = \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponent::fromArray($v);
        }
        if (($v = $data['search_component'] ?? null) !== null && is_array($v)) {
            $obj->searchComponent = \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoSearchComponent::fromArray($v);
        }
        return $obj;
    }
}
