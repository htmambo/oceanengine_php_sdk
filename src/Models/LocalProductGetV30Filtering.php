<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalProductGetV30Filtering implements \JsonSerializable
{
    /**
     * 根据商品名称/商品ID搜索（商品名称支持模糊搜索，商品ID支持精确搜索）
     * @var string
     */
    protected ?string $searchKeyWord = null;

    /**
     * 根据商品名称/商品ID搜索（商品名称支持模糊搜索，商品ID支持精确搜索）
     * @return string
     */
    public function getSearchKeyWord(): ?string
    {
        return $this->searchKeyWord;
    }

    /**
     * 根据商品名称/商品ID搜索（商品名称支持模糊搜索，商品ID支持精确搜索）
     * @param string $searchKeyWord
     * @return self
     */
    public function setSearchKeyWord(?string $searchKeyWord): self
    {
        $this->searchKeyWord = $searchKeyWord;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->searchKeyWord !== null) {
            $result['search_key_word'] = $this->searchKeyWord;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['search_key_word'] ?? null) !== null) {
            $obj->searchKeyWord = (string) $v;
        }
        return $obj;
    }
}
