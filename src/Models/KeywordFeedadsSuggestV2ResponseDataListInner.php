<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class KeywordFeedadsSuggestV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $keyword = null;

    /**
     * @var \Oceanengine\Models\KeywordFeedadsSuggestV2DataListMatchType
     */
    protected ?string $matchType = null;

    /**
     * @return string
     */
    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     * @return self
     */
    public function setKeyword(?string $keyword): self
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\KeywordFeedadsSuggestV2DataListMatchType
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    /**
     * @param \Oceanengine\Models\KeywordFeedadsSuggestV2DataListMatchType $matchType
     * @return self
     */
    public function setMatchType(?string $matchType): self
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->keyword !== null) {
            $result['keyword'] = $this->keyword;
        }
        if ($this->matchType !== null) {
            $result['match_type'] = $this->matchType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['keyword'] ?? null) !== null) {
            $obj->keyword = (string) $v;
        }
        if (($v = $data['match_type'] ?? null) !== null) {
            $obj->matchType = (string) $v;
        }
        return $obj;
    }
}
