<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType
     */
    protected ?string $advancedCreativeType = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCard
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCard $card = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCard
     */
    protected ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCard $liveCard = null;

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType
     */
    public function getAdvancedCreativeType(): ?string
    {
        return $this->advancedCreativeType;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType $advancedCreativeType
     * @return self
     */
    public function setAdvancedCreativeType(?string $advancedCreativeType): self
    {
        $this->advancedCreativeType = $advancedCreativeType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCard
     */
    public function getCard(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCard
    {
        return $this->card;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCard $card
     * @return self
     */
    public function setCard(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCard $card): self
    {
        $this->card = $card;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCard
     */
    public function getLiveCard(): ?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCard
    {
        return $this->liveCard;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCard $liveCard
     * @return self
     */
    public function setLiveCard(?\Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCard $liveCard): self
    {
        $this->liveCard = $liveCard;
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
        if ($this->liveCard !== null) {
            $result['live_card'] = $this->liveCard;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advanced_creative_type'] ?? null) !== null) {
            $obj->advancedCreativeType = (string) $v;
        }
        if (($v = $data['card'] ?? null) !== null && is_array($v)) {
            $obj->card = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoCard::fromArray($v);
        }
        if (($v = $data['live_card'] ?? null) !== null && is_array($v)) {
            $obj->liveCard = \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeAdvancedCreativeInfoLiveCard::fromArray($v);
        }
        return $obj;
    }
}
