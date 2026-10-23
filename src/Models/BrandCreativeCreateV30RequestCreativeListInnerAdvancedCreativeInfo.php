<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfo implements \JsonSerializable
{
    /**
     * 附加创意类型
     * @var int
     */
    protected ?int $advancedCreativeType = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCard
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCard $card = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponent
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponent $exploreOneTimeComponent = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoSearchComponent
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoSearchComponent $searchComponent = null;

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
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCard
     */
    public function getCard(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCard
    {
        return $this->card;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCard $card
     * @return self
     */
    public function setCard(?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCard $card): self
    {
        $this->card = $card;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponent
     */
    public function getExploreOneTimeComponent(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponent
    {
        return $this->exploreOneTimeComponent;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponent $exploreOneTimeComponent
     * @return self
     */
    public function setExploreOneTimeComponent(?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponent $exploreOneTimeComponent): self
    {
        $this->exploreOneTimeComponent = $exploreOneTimeComponent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoSearchComponent
     */
    public function getSearchComponent(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoSearchComponent
    {
        return $this->searchComponent;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoSearchComponent $searchComponent
     * @return self
     */
    public function setSearchComponent(?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoSearchComponent $searchComponent): self
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
            $obj->card = \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoCard::fromArray($v);
        }
        if (($v = $data['explore_one_time_component'] ?? null) !== null && is_array($v)) {
            $obj->exploreOneTimeComponent = \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponent::fromArray($v);
        }
        if (($v = $data['search_component'] ?? null) !== null && is_array($v)) {
            $obj->searchComponent = \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoSearchComponent::fromArray($v);
        }
        return $obj;
    }
}
