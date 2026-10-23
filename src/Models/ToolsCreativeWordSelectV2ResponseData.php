<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCreativeWordSelectV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsCreativeWordSelectV2ResponseDataCreativeWordInner[]
     */
    protected ?array $creativeWord = null;

    /**
     * @return \Oceanengine\Models\ToolsCreativeWordSelectV2ResponseDataCreativeWordInner[]
     */
    public function getCreativeWord(): ?array
    {
        return $this->creativeWord;
    }

    /**
     * @param \Oceanengine\Models\ToolsCreativeWordSelectV2ResponseDataCreativeWordInner[] $creativeWord
     * @return self
     */
    public function setCreativeWord(?array $creativeWord): self
    {
        $this->creativeWord = $creativeWord;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeWord !== null) {
            $result['creative_word'] = $this->creativeWord;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_word'] ?? null) !== null && is_array($v)) {
            $obj->creativeWord = array_map(fn ($vv) => \Oceanengine\Models\ToolsCreativeWordSelectV2ResponseDataCreativeWordInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
