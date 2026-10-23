<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class KeywordListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var \Oceanengine\Models\KeywordListV30DataListBidType
     */
    protected ?string $bidType = null;

    /**
     * @var int
     */
    protected ?int $isPause = null;

    /**
     * @var int
     */
    protected ?int $keywordId = null;

    /**
     * @var \Oceanengine\Models\KeywordListV30DataListKeywordType
     */
    protected ?string $keywordType = null;

    /**
     * @var \Oceanengine\Models\KeywordListV30DataListMatchType
     */
    protected ?string $matchType = null;

    /**
     * @var \Oceanengine\Models\KeywordListV30DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $word = null;

    /**
     * @var int
     */
    protected ?int $wordId = null;

    /**
     * @return float
     */
    public function getBid(): ?float
    {
        return $this->bid;
    }

    /**
     * @param float $bid
     * @return self
     */
    public function setBid(?float $bid): self
    {
        $this->bid = $bid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\KeywordListV30DataListBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\KeywordListV30DataListBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsPause(): ?int
    {
        return $this->isPause;
    }

    /**
     * @param int $isPause
     * @return self
     */
    public function setIsPause(?int $isPause): self
    {
        $this->isPause = $isPause;
        return $this;
    }

    /**
     * @return int
     */
    public function getKeywordId(): ?int
    {
        return $this->keywordId;
    }

    /**
     * @param int $keywordId
     * @return self
     */
    public function setKeywordId(?int $keywordId): self
    {
        $this->keywordId = $keywordId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\KeywordListV30DataListKeywordType
     */
    public function getKeywordType(): ?string
    {
        return $this->keywordType;
    }

    /**
     * @param \Oceanengine\Models\KeywordListV30DataListKeywordType $keywordType
     * @return self
     */
    public function setKeywordType(?string $keywordType): self
    {
        $this->keywordType = $keywordType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\KeywordListV30DataListMatchType
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    /**
     * @param \Oceanengine\Models\KeywordListV30DataListMatchType $matchType
     * @return self
     */
    public function setMatchType(?string $matchType): self
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\KeywordListV30DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\KeywordListV30DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getWord(): ?string
    {
        return $this->word;
    }

    /**
     * @param string $word
     * @return self
     */
    public function setWord(?string $word): self
    {
        $this->word = $word;
        return $this;
    }

    /**
     * @return int
     */
    public function getWordId(): ?int
    {
        return $this->wordId;
    }

    /**
     * @param int $wordId
     * @return self
     */
    public function setWordId(?int $wordId): self
    {
        $this->wordId = $wordId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bid !== null) {
            $result['bid'] = $this->bid;
        }
        if ($this->bidType !== null) {
            $result['bid_type'] = $this->bidType;
        }
        if ($this->isPause !== null) {
            $result['is_pause'] = $this->isPause;
        }
        if ($this->keywordId !== null) {
            $result['keyword_id'] = $this->keywordId;
        }
        if ($this->keywordType !== null) {
            $result['keyword_type'] = $this->keywordType;
        }
        if ($this->matchType !== null) {
            $result['match_type'] = $this->matchType;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->word !== null) {
            $result['word'] = $this->word;
        }
        if ($this->wordId !== null) {
            $result['word_id'] = $this->wordId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bid'] ?? null) !== null) {
            $obj->bid = (float) $v;
        }
        if (($v = $data['bid_type'] ?? null) !== null) {
            $obj->bidType = (string) $v;
        }
        if (($v = $data['is_pause'] ?? null) !== null) {
            $obj->isPause = (int) $v;
        }
        if (($v = $data['keyword_id'] ?? null) !== null) {
            $obj->keywordId = (int) $v;
        }
        if (($v = $data['keyword_type'] ?? null) !== null) {
            $obj->keywordType = (string) $v;
        }
        if (($v = $data['match_type'] ?? null) !== null) {
            $obj->matchType = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['word'] ?? null) !== null) {
            $obj->word = (string) $v;
        }
        if (($v = $data['word_id'] ?? null) !== null) {
            $obj->wordId = (int) $v;
        }
        return $obj;
    }
}
