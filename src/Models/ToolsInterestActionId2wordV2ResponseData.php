<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsInterestActionId2wordV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsInterestActionId2wordV2ResponseDataCategoriesInner[]
     */
    protected ?array $categories = null;

    /**
     * @var \Oceanengine\Models\ToolsInterestActionId2wordV2ResponseDataKeywordsInner[]
     */
    protected ?array $keywords = null;

    /**
     * @return \Oceanengine\Models\ToolsInterestActionId2wordV2ResponseDataCategoriesInner[]
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param \Oceanengine\Models\ToolsInterestActionId2wordV2ResponseDataCategoriesInner[] $categories
     * @return self
     */
    public function setCategories(?array $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsInterestActionId2wordV2ResponseDataKeywordsInner[]
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param \Oceanengine\Models\ToolsInterestActionId2wordV2ResponseDataKeywordsInner[] $keywords
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
        if ($this->categories !== null) {
            $result['categories'] = $this->categories;
        }
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['categories'] ?? null) !== null && is_array($v)) {
            $obj->categories = array_map(fn ($vv) => \Oceanengine\Models\ToolsInterestActionId2wordV2ResponseDataCategoriesInner::fromArray($vv), $v);
        }
        if (($v = $data['keywords'] ?? null) !== null && is_array($v)) {
            $obj->keywords = array_map(fn ($vv) => \Oceanengine\Models\ToolsInterestActionId2wordV2ResponseDataKeywordsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
