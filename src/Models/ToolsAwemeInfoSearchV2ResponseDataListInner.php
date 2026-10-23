<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeInfoSearchV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerAuthorsInner[]
     */
    protected ?array $authors = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerCategoriesInner[]
     */
    protected ?array $categories = null;

    /**
     * @return \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerAuthorsInner[]
     */
    public function getAuthors(): ?array
    {
        return $this->authors;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerAuthorsInner[] $authors
     * @return self
     */
    public function setAuthors(?array $authors): self
    {
        $this->authors = $authors;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerCategoriesInner[]
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerCategoriesInner[] $categories
     * @return self
     */
    public function setCategories(?array $categories): self
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authors !== null) {
            $result['authors'] = $this->authors;
        }
        if ($this->categories !== null) {
            $result['categories'] = $this->categories;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['authors'] ?? null) !== null && is_array($v)) {
            $obj->authors = array_map(fn ($vv) => \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerAuthorsInner::fromArray($vv), $v);
        }
        if (($v = $data['categories'] ?? null) !== null && is_array($v)) {
            $obj->categories = array_map(fn ($vv) => \Oceanengine\Models\ToolsAwemeInfoSearchV2ResponseDataListInnerCategoriesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
