<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeDetailGetV30ResponseDataCreativeTitleMaterialsInnerBidwordListInner implements \JsonSerializable
{
    /**
     * 搜索关键词
     * @var string
     */
    protected ?string $defaultWord = null;

    /**
     * 搜索关键词
     * @return string
     */
    public function getDefaultWord(): ?string
    {
        return $this->defaultWord;
    }

    /**
     * 搜索关键词
     * @param string $defaultWord
     * @return self
     */
    public function setDefaultWord(?string $defaultWord): self
    {
        $this->defaultWord = $defaultWord;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->defaultWord !== null) {
            $result['default_word'] = $this->defaultWord;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['default_word'] ?? null) !== null) {
            $obj->defaultWord = (string) $v;
        }
        return $obj;
    }
}
