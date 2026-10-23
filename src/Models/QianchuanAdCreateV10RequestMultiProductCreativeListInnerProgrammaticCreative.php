<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreative implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard
     */
    protected ?\Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard $programmaticCreativeCard = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeMediaListInner[]
     */
    protected ?array $programmaticCreativeMediaList = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeTitleListInner[]
     */
    protected ?array $programmaticCreativeTitleList = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard
     */
    public function getProgrammaticCreativeCard(): ?\Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard
    {
        return $this->programmaticCreativeCard;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard $programmaticCreativeCard
     * @return self
     */
    public function setProgrammaticCreativeCard(?\Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard $programmaticCreativeCard): self
    {
        $this->programmaticCreativeCard = $programmaticCreativeCard;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeMediaListInner[]
     */
    public function getProgrammaticCreativeMediaList(): ?array
    {
        return $this->programmaticCreativeMediaList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeMediaListInner[] $programmaticCreativeMediaList
     * @return self
     */
    public function setProgrammaticCreativeMediaList(?array $programmaticCreativeMediaList): self
    {
        $this->programmaticCreativeMediaList = $programmaticCreativeMediaList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeTitleListInner[]
     */
    public function getProgrammaticCreativeTitleList(): ?array
    {
        return $this->programmaticCreativeTitleList;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeTitleListInner[] $programmaticCreativeTitleList
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
            $obj->programmaticCreativeCard = \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeCard::fromArray($v);
        }
        if (($v = $data['programmatic_creative_media_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeMediaList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeMediaListInner::fromArray($vv), $v);
        }
        if (($v = $data['programmatic_creative_title_list'] ?? null) !== null && is_array($v)) {
            $obj->programmaticCreativeTitleList = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdCreateV10RequestMultiProductCreativeListInnerProgrammaticCreativeProgrammaticCreativeTitleListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
