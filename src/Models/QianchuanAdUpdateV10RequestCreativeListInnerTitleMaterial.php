<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterial implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterialDynamicWordsInner[]
     */
    protected ?array $dynamicWords = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdUpdateV10CreativeListTitleMaterialTitleType
     */
    protected ?string $titleType = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterialDynamicWordsInner[]
     */
    public function getDynamicWords(): ?array
    {
        return $this->dynamicWords;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterialDynamicWordsInner[] $dynamicWords
     * @return self
     */
    public function setDynamicWords(?array $dynamicWords): self
    {
        $this->dynamicWords = $dynamicWords;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
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
     * @return \Oceanengine\Models\QianchuanAdUpdateV10CreativeListTitleMaterialTitleType
     */
    public function getTitleType(): ?string
    {
        return $this->titleType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdUpdateV10CreativeListTitleMaterialTitleType $titleType
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
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
            $obj->dynamicWords = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdUpdateV10RequestCreativeListInnerTitleMaterialDynamicWordsInner::fromArray($vv), $v);
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
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
