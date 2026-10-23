<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class KeywordUpdateV30ResponseDataSuccessListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var \Oceanengine\Models\KeywordUpdateV30DataSuccessListBidType
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
     * @var \Oceanengine\Models\KeywordUpdateV30DataSuccessListMatchType
     */
    protected ?string $matchType = null;

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
     * @return \Oceanengine\Models\KeywordUpdateV30DataSuccessListBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\KeywordUpdateV30DataSuccessListBidType $bidType
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
     * @return \Oceanengine\Models\KeywordUpdateV30DataSuccessListMatchType
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    /**
     * @param \Oceanengine\Models\KeywordUpdateV30DataSuccessListMatchType $matchType
     * @return self
     */
    public function setMatchType(?string $matchType): self
    {
        $this->matchType = $matchType;
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
        if ($this->matchType !== null) {
            $result['match_type'] = $this->matchType;
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
        if (($v = $data['match_type'] ?? null) !== null) {
            $obj->matchType = (string) $v;
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
