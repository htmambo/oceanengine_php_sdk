<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfo implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $abstractText = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfoBidwordListInner[]
     */
    protected ?array $bidwordList = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfoWordListInner[]
     */
    protected ?array $wordList = null;

    /**
     * @return string
     */
    public function getAbstractText(): ?string
    {
        return $this->abstractText;
    }

    /**
     * @param string $abstractText
     * @return self
     */
    public function setAbstractText(?string $abstractText): self
    {
        $this->abstractText = $abstractText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfoBidwordListInner[]
     */
    public function getBidwordList(): ?array
    {
        return $this->bidwordList;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfoBidwordListInner[] $bidwordList
     * @return self
     */
    public function setBidwordList(?array $bidwordList): self
    {
        $this->bidwordList = $bidwordList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfoWordListInner[]
     */
    public function getWordList(): ?array
    {
        return $this->wordList;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfoWordListInner[] $wordList
     * @return self
     */
    public function setWordList(?array $wordList): self
    {
        $this->wordList = $wordList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->abstractText !== null) {
            $result['abstract_text'] = $this->abstractText;
        }
        if ($this->bidwordList !== null) {
            $result['bidword_list'] = $this->bidwordList;
        }
        if ($this->wordList !== null) {
            $result['word_list'] = $this->wordList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['abstract_text'] ?? null) !== null) {
            $obj->abstractText = (string) $v;
        }
        if (($v = $data['bidword_list'] ?? null) !== null && is_array($v)) {
            $obj->bidwordList = array_map(fn ($vv) => \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfoBidwordListInner::fromArray($vv), $v);
        }
        if (($v = $data['word_list'] ?? null) !== null && is_array($v)) {
            $obj->wordList = array_map(fn ($vv) => \Oceanengine\Models\CreativeCustomCreativeCreateV2RequestCreativeListInnerAbstractMaterialsInnerTextAbstractInfoWordListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
