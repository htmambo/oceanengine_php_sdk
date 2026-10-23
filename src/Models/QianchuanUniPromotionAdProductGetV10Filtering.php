<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdProductGetV10Filtering implements \JsonSerializable
{
    /**
     * 搜索关键词，支持根据商品名称/ID进行搜索
     * @var string
     */
    protected ?string $searchKeyWord = null;

    /**
     * 搜索关键词，支持根据商品名称/ID进行搜索
     * @return string
     */
    public function getSearchKeyWord(): ?string
    {
        return $this->searchKeyWord;
    }

    /**
     * 搜索关键词，支持根据商品名称/ID进行搜索
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
