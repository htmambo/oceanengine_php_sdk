<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentFeedButtonText implements \JsonSerializable
{
    /**
     * 文案
     * @var string
     */
    protected ?string $text = null;

    /**
     * 文案
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * 文案
     * @param string $text
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['text'] ?? null) !== null) {
            $obj->text = (string) $v;
        }
        return $obj;
    }
}
