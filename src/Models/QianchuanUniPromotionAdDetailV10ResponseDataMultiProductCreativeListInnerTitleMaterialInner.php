<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerTitleMaterialInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerTitleMaterialInnerDynamicWordsInner[]
     */
    protected ?array $dynamicWords = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType
     */
    protected ?string $titleType = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerTitleMaterialInnerDynamicWordsInner[]
     */
    public function getDynamicWords(): ?array
    {
        return $this->dynamicWords;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerTitleMaterialInnerDynamicWordsInner[] $dynamicWords
     * @return self
     */
    public function setDynamicWords(?array $dynamicWords): self
    {
        $this->dynamicWords = $dynamicWords;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType
     */
    public function getTitleType(): ?string
    {
        return $this->titleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType $titleType
     * @return self
     */
    public function setTitleType(?string $titleType): self
    {
        $this->titleType = $titleType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dynamicWords !== null) {
            $result['dynamic_words'] = $this->dynamicWords;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->titleType !== null) {
            $result['title_type'] = $this->titleType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['dynamic_words'] ?? null) !== null && is_array($v)) {
            $obj->dynamicWords = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdDetailV10ResponseDataMultiProductCreativeListInnerTitleMaterialInnerDynamicWordsInner::fromArray($vv), $v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['title_type'] ?? null) !== null) {
            $obj->titleType = (string) $v;
        }
        return $obj;
    }
}
