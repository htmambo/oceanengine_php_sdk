<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsInterestActionKeywordSuggestV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsInterestActionKeywordSuggestV2ResponseDataKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @return \Oceanengine\Models\ToolsInterestActionKeywordSuggestV2ResponseDataKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\ToolsInterestActionKeywordSuggestV2ResponseDataKeywordsInner[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\ToolsInterestActionKeywordSuggestV2ResponseDataKeywordsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
