<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerSettingButton implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $backgroundColor = null;

    /**
     * @var string
     */
    protected ?string $borderColor = null;

    /**
     * @var int
     */
    protected ?int $borderRadius = null;

    /**
     * @var int
     */
    protected ?int $borderWidth = null;

    /**
     * @var string
     */
    protected ?string $color = null;

    /**
     * @var int
     */
    protected ?int $fontSize = null;

    /**
     * @return string
     */
    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     * @return self
     */
    public function setBackgroundColor(?string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getBorderColor(): ?string
    {
        return $this->borderColor;
    }

    /**
     * @param string $borderColor
     * @return self
     */
    public function setBorderColor(?string $borderColor): self
    {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getBorderRadius(): ?int
    {
        return $this->borderRadius;
    }

    /**
     * @param int $borderRadius
     * @return self
     */
    public function setBorderRadius(?int $borderRadius): self
    {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * @return int
     */
    public function getBorderWidth(): ?int
    {
        return $this->borderWidth;
    }

    /**
     * @param int $borderWidth
     * @return self
     */
    public function setBorderWidth(?int $borderWidth): self
    {
        $this->borderWidth = $borderWidth;
        return $this;
    }

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->backgroundColor !== null) {
            $result['background_color'] = $this->backgroundColor;
        }
        if ($this->borderColor !== null) {
            $result['border_color'] = $this->borderColor;
        }
        if ($this->borderRadius !== null) {
            $result['border_radius'] = $this->borderRadius;
        }
        if ($this->borderWidth !== null) {
            $result['border_width'] = $this->borderWidth;
        }
        if ($this->color !== null) {
            $result['color'] = $this->color;
        }
        if ($this->fontSize !== null) {
            $result['font_size'] = $this->fontSize;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['background_color'] ?? null) !== null) {
            $obj->backgroundColor = (string) $v;
        }
        if (($v = $data['border_color'] ?? null) !== null) {
            $obj->borderColor = (string) $v;
        }
        if (($v = $data['border_radius'] ?? null) !== null) {
            $obj->borderRadius = (int) $v;
        }
        if (($v = $data['border_width'] ?? null) !== null) {
            $obj->borderWidth = (int) $v;
        }
        if (($v = $data['color'] ?? null) !== null) {
            $obj->color = (string) $v;
        }
        if (($v = $data['font_size'] ?? null) !== null) {
            $obj->fontSize = (int) $v;
        }
        return $obj;
    }
}
