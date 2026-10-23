<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeMultiLevelCategoryGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAwemeMultiLevelCategoryGetV2ResponseDataCategoriesInner[]
     */
    protected ?array $categories = null;

    /**
     * @return \Oceanengine\Models\ToolsAwemeMultiLevelCategoryGetV2ResponseDataCategoriesInner[]
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeMultiLevelCategoryGetV2ResponseDataCategoriesInner[] $categories
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
        if ($this->categories !== null) {
            $result['categories'] = $this->categories;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['categories'] ?? null) !== null && is_array($v)) {
            $obj->categories = array_map(fn ($vv) => \Oceanengine\Models\ToolsAwemeMultiLevelCategoryGetV2ResponseDataCategoriesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
