<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectListV30ResponseDataListInnerKeywordsInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $bid = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListKeywordsBidType
     */
    protected ?string $bidType = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListKeywordsMatchType
     */
    protected ?string $matchType = null;

    /**
     * 关键名称
     * @var string
     */
    protected ?string $word = null;

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
     * @return \Oceanengine\Models\ProjectListV30DataListKeywordsBidType
     */
    public function getBidType(): ?string
    {
        return $this->bidType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListKeywordsBidType $bidType
     * @return self
     */
    public function setBidType(?string $bidType): self
    {
        $this->bidType = $bidType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ProjectListV30DataListKeywordsMatchType
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListKeywordsMatchType $matchType
     * @return self
     */
    public function setMatchType(?string $matchType): self
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * 关键名称
     * @return string
     */
    public function getWord(): ?string
    {
        return $this->word;
    }

    /**
     * 关键名称
     * @param string $word
     * @return self
     */
    public function setWord(?string $word): self
    {
        $this->word = $word;
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
        if ($this->matchType !== null) {
            $result['match_type'] = $this->matchType;
        }
        if ($this->word !== null) {
            $result['word'] = $this->word;
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
        if (($v = $data['match_type'] ?? null) !== null) {
            $obj->matchType = (string) $v;
        }
        if (($v = $data['word'] ?? null) !== null) {
            $obj->word = (string) $v;
        }
        return $obj;
    }
}
