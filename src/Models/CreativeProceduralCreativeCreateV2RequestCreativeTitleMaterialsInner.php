<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerBidwordListInner[]
     */
    protected ?array $bidwordList = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerDpaWordListInner[]
     */
    protected ?array $dpaWordList = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerWordListInner[]
     */
    protected ?array $wordList = null;

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerBidwordListInner[]
     */
    public function getBidwordList(): ?array
    {
        return $this->bidwordList;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerBidwordListInner[] $bidwordList
     * @return self
     */
    public function setBidwordList(?array $bidwordList): self
    {
        $this->bidwordList = $bidwordList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerDpaWordListInner[]
     */
    public function getDpaWordList(): ?array
    {
        return $this->dpaWordList;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerDpaWordListInner[] $dpaWordList
     * @return self
     */
    public function setDpaWordList(?array $dpaWordList): self
    {
        $this->dpaWordList = $dpaWordList;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
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
     * @return \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerWordListInner[]
     */
    public function getWordList(): ?array
    {
        return $this->wordList;
    }

    /**
     * @param \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerWordListInner[] $wordList
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
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
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
            $obj->bidwordList = array_map(fn ($vv) => \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerBidwordListInner::fromArray($vv), $v);
        }
        if (($v = $data['dpa_word_list'] ?? null) !== null && is_array($v)) {
            $obj->dpaWordList = array_map(fn ($vv) => \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerDpaWordListInner::fromArray($vv), $v);
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['word_list'] ?? null) !== null && is_array($v)) {
            $obj->wordList = array_map(fn ($vv) => \Oceanengine\Models\CreativeProceduralCreativeCreateV2RequestCreativeTitleMaterialsInnerWordListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
