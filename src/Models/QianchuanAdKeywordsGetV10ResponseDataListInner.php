<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdKeywordsGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * 计划ID
     * @var int
     */
    protected ?int $adId = null;

    /**
     * 关键词id
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdKeywordsGetV10DataListMatchType
     */
    protected ?string $matchType = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdKeywordsGetV10DataListStatus
     */
    protected ?string $status = null;

    /**
     * 关键词字面
     * @var string
     */
    protected ?string $word = null;

    /**
     * 词ID
     * @var int
     */
    protected ?int $wordId = null;

    /**
     * 计划ID
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * 计划ID
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 关键词id
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 关键词id
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdKeywordsGetV10DataListMatchType
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdKeywordsGetV10DataListMatchType $matchType
     * @return self
     */
    public function setMatchType(?string $matchType): self
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdKeywordsGetV10DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdKeywordsGetV10DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 关键词字面
     * @return string
     */
    public function getWord(): ?string
    {
        return $this->word;
    }

    /**
     * 关键词字面
     * @param string $word
     * @return self
     */
    public function setWord(?string $word): self
    {
        $this->word = $word;
        return $this;
    }

    /**
     * 词ID
     * @return int
     */
    public function getWordId(): ?int
    {
        return $this->wordId;
    }

    /**
     * 词ID
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
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
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
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
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
