<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30RequestPromotionMaterialsTitleMaterialListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTitleMaterialListInnerBidwordListInner[]
     */
    protected ?array $bidwordList = null;

    /**
     * 创建DPA创意时可以选择传入DPA词包ID列表，动态词包与DPA词包总数最多为2。可通过【获取DPA词包】接口获取，结合标题中的词包格式您需要填写相同个数与顺序的词包ID，如果实际ID顺序与标题中词包名顺序不一致我们将以词包ID顺序为准
     * @var int[]
     */
    protected ?array $dpaWordList = null;

    /**
     * @var string
     */
    protected ?string $title = null;

    /**
     * @var int[]
     */
    protected ?array $wordList = null;

    /**
     * @return \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTitleMaterialListInnerBidwordListInner[]
     */
    public function getBidwordList(): ?array
    {
        return $this->bidwordList;
    }

    /**
     * @param \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTitleMaterialListInnerBidwordListInner[] $bidwordList
     * @return self
     */
    public function setBidwordList(?array $bidwordList): self
    {
        $this->bidwordList = $bidwordList;
        return $this;
    }

    /**
     * 创建DPA创意时可以选择传入DPA词包ID列表，动态词包与DPA词包总数最多为2。可通过【获取DPA词包】接口获取，结合标题中的词包格式您需要填写相同个数与顺序的词包ID，如果实际ID顺序与标题中词包名顺序不一致我们将以词包ID顺序为准
     * @return int[]
     */
    public function getDpaWordList(): ?array
    {
        return $this->dpaWordList;
    }

    /**
     * 创建DPA创意时可以选择传入DPA词包ID列表，动态词包与DPA词包总数最多为2。可通过【获取DPA词包】接口获取，结合标题中的词包格式您需要填写相同个数与顺序的词包ID，如果实际ID顺序与标题中词包名顺序不一致我们将以词包ID顺序为准
     * @param int[] $dpaWordList
     * @return self
     */
    public function setDpaWordList(?array $dpaWordList): self
    {
        $this->dpaWordList = $dpaWordList;
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
     * @return int[]
     */
    public function getWordList(): ?array
    {
        return $this->wordList;
    }

    /**
     * @param int[] $wordList
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
            $obj->bidwordList = array_map(fn ($vv) => \Oceanengine\Models\PromotionCreateV30RequestPromotionMaterialsTitleMaterialListInnerBidwordListInner::fromArray($vv), $v);
        }
        if (($v = $data['dpa_word_list'] ?? null) !== null && is_array($v)) {
            $obj->dpaWordList = $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['word_list'] ?? null) !== null && is_array($v)) {
            $obj->wordList = $v;
        }
        return $obj;
    }
}
