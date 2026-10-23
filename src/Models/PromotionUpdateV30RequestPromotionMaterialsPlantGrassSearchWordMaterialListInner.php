<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionUpdateV30RequestPromotionMaterialsPlantGrassSearchWordMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $searchWord = null;

    /**
     * @return string
     */
    public function getSearchWord(): ?string
    {
        return $this->searchWord;
    }

    /**
     * @param string $searchWord
     * @return self
     */
    public function setSearchWord(?string $searchWord): self
    {
        $this->searchWord = $searchWord;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->searchWord !== null) {
            $result['search_word'] = $this->searchWord;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['search_word'] ?? null) !== null) {
            $obj->searchWord = (string) $v;
        }
        return $obj;
    }
}
