<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalInterestKeywordV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalInterestKeywordV30ResponseDataKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @return \Oceanengine\Models\LocalInterestKeywordV30ResponseDataKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\LocalInterestKeywordV30ResponseDataKeywordsInner[] $keywords
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
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\LocalInterestKeywordV30ResponseDataKeywordsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
