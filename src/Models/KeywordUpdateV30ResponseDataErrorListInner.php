<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class KeywordUpdateV30ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $errorReason = null;

    /**
     * @var int
     */
    protected ?int $keywordId = null;

    /**
     * @var string
     */
    protected ?string $word = null;

    /**
     * @var int
     */
    protected ?int $wordId = null;

    /**
     * @return string
     */
    public function getErrorReason(): ?string
    {
        return $this->errorReason;
    }

    /**
     * @param string $errorReason
     * @return self
     */
    public function setErrorReason(?string $errorReason): self
    {
        $this->errorReason = $errorReason;
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
        if ($this->errorReason !== null) {
            $result['error_reason'] = $this->errorReason;
        }
        if ($this->keywordId !== null) {
            $result['keyword_id'] = $this->keywordId;
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
        if (($v = $data['error_reason'] ?? null) !== null) {
            $obj->errorReason = (string) $v;
        }
        if (($v = $data['keyword_id'] ?? null) !== null) {
            $obj->keywordId = (int) $v;
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
