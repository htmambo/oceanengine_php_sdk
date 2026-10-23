<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerSettingLabel implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $color = null;

    /**
     * @var int
     */
    protected ?int $fontSize = null;

    /**
     * @var string
     */
    protected ?string $text = null;

    /**
     * @return string
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getFontSize(): ?int
    {
        return $this->fontSize;
    }

    /**
     * @param int $fontSize
     * @return self
     */
    public function setFontSize(?int $fontSize): self
    {
        $this->fontSize = $fontSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
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
        if ($this->color !== null) {
            $result['color'] = $this->color;
        }
        if ($this->fontSize !== null) {
            $result['font_size'] = $this->fontSize;
        }
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['color'] ?? null) !== null) {
            $obj->color = (string) $v;
        }
        if (($v = $data['font_size'] ?? null) !== null) {
            $obj->fontSize = (int) $v;
        }
        if (($v = $data['text'] ?? null) !== null) {
            $obj->text = (string) $v;
        }
        return $obj;
    }
}
