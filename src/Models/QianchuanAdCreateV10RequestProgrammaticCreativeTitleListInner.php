<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdCreateV10RequestProgrammaticCreativeTitleListInner implements \JsonSerializable
{
    /**
     * title所属的主页图文id
     * @var int
     */
    protected ?int $awemeCarouselId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeTitleListInnerDynamicWordsInner[]
     */
    protected ?array $dynamicWords = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType
     */
    protected ?string $titleType = null;

    /**
     * title所属的主页图文id
     * @return int
     */
    public function getAwemeCarouselId(): ?int
    {
        return $this->awemeCarouselId;
    }

    /**
     * title所属的主页图文id
     * @param int $awemeCarouselId
     * @return self
     */
    public function setAwemeCarouselId(?int $awemeCarouselId): self
    {
        $this->awemeCarouselId = $awemeCarouselId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeTitleListInnerDynamicWordsInner[]
     */
    public function getDynamicWords(): ?array
    {
        return $this->dynamicWords;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeTitleListInnerDynamicWordsInner[] $dynamicWords
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
     * @return \Oceanengine\Models\QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType
     */
    public function getTitleType(): ?string
    {
        return $this->titleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10ProgrammaticCreativeTitleListTitleType $titleType
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
        if ($this->awemeCarouselId !== null) {
            $result['aweme_carousel_id'] = $this->awemeCarouselId;
        }
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
        if (($v = $data['aweme_carousel_id'] ?? null) !== null) {
            $obj->awemeCarouselId = (int) $v;
        }
        if (($v = $data['dynamic_words'] ?? null) !== null && is_array($v)) {
            $obj->dynamicWords = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdCreateV10RequestProgrammaticCreativeTitleListInnerDynamicWordsInner::fromArray($vv), $v);
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
