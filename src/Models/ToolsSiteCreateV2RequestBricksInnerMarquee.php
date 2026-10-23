<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerMarquee implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $prefixIcon = null;

    /**
     * @var string[]
     */
    protected ?array $textList = null;

    /**
     * @return string
     */
    public function getPrefixIcon(): ?string
    {
        return $this->prefixIcon;
    }

    /**
     * @param string $prefixIcon
     * @return self
     */
    public function setPrefixIcon(?string $prefixIcon): self
    {
        $this->prefixIcon = $prefixIcon;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTextList(): ?array
    {
        return $this->textList;
    }

    /**
     * @param string[] $textList
     * @return self
     */
    public function setTextList(?array $textList): self
    {
        $this->textList = $textList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->prefixIcon !== null) {
            $result['prefix_icon'] = $this->prefixIcon;
        }
        if ($this->textList !== null) {
            $result['text_list'] = $this->textList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['prefix_icon'] ?? null) !== null) {
            $obj->prefixIcon = (string) $v;
        }
        if (($v = $data['text_list'] ?? null) !== null && is_array($v)) {
            $obj->textList = $v;
        }
        return $obj;
    }
}
