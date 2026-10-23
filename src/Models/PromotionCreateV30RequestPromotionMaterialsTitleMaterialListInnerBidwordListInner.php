<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionCreateV30RequestPromotionMaterialsTitleMaterialListInnerBidwordListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $defaultWord = null;

    /**
     * @return string
     */
    public function getDefaultWord(): ?string
    {
        return $this->defaultWord;
    }

    /**
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
