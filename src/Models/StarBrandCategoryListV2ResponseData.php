<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarBrandCategoryListV2ResponseData implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $categories = null;

    /**
     * @return string[]
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param string[] $categories
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
            $obj->categories = $v;
        }
        return $obj;
    }
}
