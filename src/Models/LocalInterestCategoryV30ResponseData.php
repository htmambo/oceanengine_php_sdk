<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalInterestCategoryV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalInterestCategoryV30ResponseDataCategoryInner[]
     */
    protected ?array $category = null;

    /**
     * @return \Oceanengine\Models\LocalInterestCategoryV30ResponseDataCategoryInner[]
     */
    public function getCategory(): ?array
    {
        return $this->category;
    }

    /**
     * @param \Oceanengine\Models\LocalInterestCategoryV30ResponseDataCategoryInner[] $category
     * @return self
     */
    public function setCategory(?array $category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->category !== null) {
            $result['category'] = $this->category;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['category'] ?? null) !== null && is_array($v)) {
            $obj->category = array_map(fn ($vv) => \Oceanengine\Models\LocalInterestCategoryV30ResponseDataCategoryInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
