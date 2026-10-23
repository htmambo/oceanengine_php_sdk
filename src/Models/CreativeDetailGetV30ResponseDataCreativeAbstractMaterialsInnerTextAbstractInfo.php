<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfo implements \JsonSerializable
{
    /**
     * 文本摘要内容
     * @var string
     */
    protected ?string $abstractText = null;

    /**
     * 搜索关键词列表
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfoBidwordListInner[]
     */
    protected ?array $bidwordList = null;

    /**
     * 动态词包ID列表
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfoWordListInner[]
     */
    protected ?array $wordList = null;

    /**
     * 文本摘要内容
     * @return string
     */
    public function getAbstractText(): ?string
    {
        return $this->abstractText;
    }

    /**
     * 文本摘要内容
     * @param string $abstractText
     * @return self
     */
    public function setAbstractText(?string $abstractText): self
    {
        $this->abstractText = $abstractText;
        return $this;
    }

    /**
     * 搜索关键词列表
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfoBidwordListInner[]
     */
    public function getBidwordList(): ?array
    {
        return $this->bidwordList;
    }

    /**
     * 搜索关键词列表
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfoBidwordListInner[] $bidwordList
     * @return self
     */
    public function setBidwordList(?array $bidwordList): self
    {
        $this->bidwordList = $bidwordList;
        return $this;
    }

    /**
     * 动态词包ID列表
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfoWordListInner[]
     */
    public function getWordList(): ?array
    {
        return $this->wordList;
    }

    /**
     * 动态词包ID列表
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfoWordListInner[] $wordList
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
            $obj->bidwordList = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfoBidwordListInner::fromArray($vv), $v);
        }
        if (($v = $data['word_list'] ?? null) !== null && is_array($v)) {
            $obj->wordList = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeAbstractMaterialsInnerTextAbstractInfoWordListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
