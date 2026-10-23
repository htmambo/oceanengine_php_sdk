<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInner implements \JsonSerializable
{
    /**
     * 搜索关键词列表
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerBidwordListInner[]
     */
    protected ?array $bidwordList = null;

    /**
     * DPA词包ID列表
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerDpaWordListInner[]
     */
    protected ?array $dpaWordList = null;

    /**
     * 创意标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 动态词包ID列表
     * @var \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerWordListInner[]
     */
    protected ?array $wordList = null;

    /**
     * 搜索关键词列表
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerBidwordListInner[]
     */
    public function getBidwordList(): ?array
    {
        return $this->bidwordList;
    }

    /**
     * 搜索关键词列表
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerBidwordListInner[] $bidwordList
     * @return self
     */
    public function setBidwordList(?array $bidwordList): self
    {
        $this->bidwordList = $bidwordList;
        return $this;
    }

    /**
     * DPA词包ID列表
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerDpaWordListInner[]
     */
    public function getDpaWordList(): ?array
    {
        return $this->dpaWordList;
    }

    /**
     * DPA词包ID列表
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerDpaWordListInner[] $dpaWordList
     * @return self
     */
    public function setDpaWordList(?array $dpaWordList): self
    {
        $this->dpaWordList = $dpaWordList;
        return $this;
    }

    /**
     * 创意标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 创意标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 动态词包ID列表
     * @return \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerWordListInner[]
     */
    public function getWordList(): ?array
    {
        return $this->wordList;
    }

    /**
     * 动态词包ID列表
     * @param \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerWordListInner[] $wordList
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
        if ($this->bidwordList !== null) {
            $result['bidword_list'] = $this->bidwordList;
        }
        if ($this->dpaWordList !== null) {
            $result['dpa_word_list'] = $this->dpaWordList;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->wordList !== null) {
            $result['word_list'] = $this->wordList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bidword_list'] ?? null) !== null && is_array($v)) {
            $obj->bidwordList = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerBidwordListInner::fromArray($vv), $v);
        }
        if (($v = $data['dpa_word_list'] ?? null) !== null && is_array($v)) {
            $obj->dpaWordList = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerDpaWordListInner::fromArray($vv), $v);
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['word_list'] ?? null) !== null && is_array($v)) {
            $obj->wordList = array_map(fn ($vv) => \Oceanengine\Models\CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerWordListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
