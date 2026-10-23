<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreative implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard
     */
    protected ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard $programmaticCreativeCard = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeMediaListInner[]
     */
    protected ?array $programmaticCreativeMediaList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeTitleListInner[]
     */
    protected ?array $programmaticCreativeTitleList = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard
     */
    public function getProgrammaticCreativeCard(): ?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard
    {
        return $this->programmaticCreativeCard;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard $programmaticCreativeCard
     * @return self
     */
    public function setProgrammaticCreativeCard(?\Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard $programmaticCreativeCard): self
    {
        $this->programmaticCreativeCard = $programmaticCreativeCard;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeMediaListInner[]
     */
    public function getProgrammaticCreativeMediaList(): ?array
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeMediaListInner[] $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?array $programmaticCreativeMediaList): self
    {
        $this->programmaticCreativeMediaList = $programmaticCreativeMediaList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeTitleListInner[]
     */
    public function getProgrammaticCreativeTitleList(): ?array
    {
        return $this->programmaticCreativeTitleList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeTitleListInner[] $programmaticCreativeTitleList
     * @return self
     */
    public function setProgrammaticCreativeTitleList(?array $programmaticCreativeTitleList): self
    {
        $this->programmaticCreativeTitleList = $programmaticCreativeTitleList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->programmaticCreativeCard !== null) {
            $result['programmatic_creative_card'] = $this->programmaticCreativeCard;
        }
        if ($this->programmaticCreativeMediaList !== null) {
            $result['programmatic_creative_media_list'] = $this->programmaticCreativeMediaList;
        }
        if ($this->programmaticCreativeTitleList !== null) {
            $result['programmatic_creative_title_list'] = $this->programmaticCreativeTitleList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['programmatic_creative_card'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeCard = \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard::fromArray($v);
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeMediaListInner::fromArray($vv), $v);
        }
        if (($v = $data['programmatic_creative_title_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeTitleList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdDetailGetV10ResponseDataMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeTitleListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
