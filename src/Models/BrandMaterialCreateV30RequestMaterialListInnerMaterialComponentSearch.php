<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentSearch implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $searchWords = null;

    /**
     * @return string[]
     */
    public function getSearchWords(): ?array
    {
        return $this->searchWords;
    }

    /**
     * @param string[] $searchWords
     * @return self
     */
    public function setSearchWords(?array $searchWords): self
    {
        $this->searchWords = $searchWords;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->searchWords !== null) {
            $result['search_words'] = $this->searchWords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['search_words'] ?? null) !== null && is_array($v)) {
            $obj->searchWords = $v;
        }
        return $obj;
    }
}
