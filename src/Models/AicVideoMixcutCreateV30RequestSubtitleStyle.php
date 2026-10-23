<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicVideoMixcutCreateV30RequestSubtitleStyle implements \JsonSerializable
{
    /**
     * 常规字幕边框颜色，支持RGB、RGBA，系统默认:#000000（黑色），示例：#000000、#000000FF
     * @var string
     */
    protected ?string $fontBorderColor = null;

    /**
     * 字体元素id，系统默认抖音美好体
     * @var int
     */
    protected ?int $fontElementId = null;

    /**
     * 常规字幕填充颜色，支持RGB、RGBA，系统默认#FFFFFF（白色）,示例：#FFFFF、#FFFFFFFF
     * @var string
     */
    protected ?string $fontFillColor = null;

    /**
     * 字体大小，默认大小49px，最大99px，大小对标1080p视频
     * @var int
     */
    protected ?int $fontSize = null;

    /**
     * 需要高亮强调的字幕边框颜色，支持RGB、RGBA，系统默认:#000000（黑色），#RGBA格式，示例：#000000、#000000FF
     * @var string
     */
    protected ?string $highlightFontBorderColor = null;

    /**
     * 需要高亮强调的字幕填充颜色支持RGB、RGBA，系统默认:#FFD700（黄色），示例#FFD700、#FFD700FF
     * @var string
     */
    protected ?string $highlightFontFillColor = null;

    /**
     * 常规字幕边框颜色，支持RGB、RGBA，系统默认:#000000（黑色），示例：#000000、#000000FF
     * @return string
     */
    public function getFontBorderColor(): ?string
    {
        return $this->fontBorderColor;
    }

    /**
     * 常规字幕边框颜色，支持RGB、RGBA，系统默认:#000000（黑色），示例：#000000、#000000FF
     * @param string $fontBorderColor
     * @return self
     */
    public function setFontBorderColor(?string $fontBorderColor): self
    {
        $this->fontBorderColor = $fontBorderColor;
        return $this;
    }

    /**
     * 字体元素id，系统默认抖音美好体
     * @return int
     */
    public function getFontElementId(): ?int
    {
        return $this->fontElementId;
    }

    /**
     * 字体元素id，系统默认抖音美好体
     * @param int $fontElementId
     * @return self
     */
    public function setFontElementId(?int $fontElementId): self
    {
        $this->fontElementId = $fontElementId;
        return $this;
    }

    /**
     * 常规字幕填充颜色，支持RGB、RGBA，系统默认#FFFFFF（白色）,示例：#FFFFF、#FFFFFFFF
     * @return string
     */
    public function getFontFillColor(): ?string
    {
        return $this->fontFillColor;
    }

    /**
     * 常规字幕填充颜色，支持RGB、RGBA，系统默认#FFFFFF（白色）,示例：#FFFFF、#FFFFFFFF
     * @param string $fontFillColor
     * @return self
     */
    public function setFontFillColor(?string $fontFillColor): self
    {
        $this->fontFillColor = $fontFillColor;
        return $this;
    }

    /**
     * 字体大小，默认大小49px，最大99px，大小对标1080p视频
     * @return int
     */
    public function getFontSize(): ?int
    {
        return $this->fontSize;
    }

    /**
     * 字体大小，默认大小49px，最大99px，大小对标1080p视频
     * @param int $fontSize
     * @return self
     */
    public function setFontSize(?int $fontSize): self
    {
        $this->fontSize = $fontSize;
        return $this;
    }

    /**
     * 需要高亮强调的字幕边框颜色，支持RGB、RGBA，系统默认:#000000（黑色），#RGBA格式，示例：#000000、#000000FF
     * @return string
     */
    public function getHighlightFontBorderColor(): ?string
    {
        return $this->highlightFontBorderColor;
    }

    /**
     * 需要高亮强调的字幕边框颜色，支持RGB、RGBA，系统默认:#000000（黑色），#RGBA格式，示例：#000000、#000000FF
     * @param string $highlightFontBorderColor
     * @return self
     */
    public function setHighlightFontBorderColor(?string $highlightFontBorderColor): self
    {
        $this->highlightFontBorderColor = $highlightFontBorderColor;
        return $this;
    }

    /**
     * 需要高亮强调的字幕填充颜色支持RGB、RGBA，系统默认:#FFD700（黄色），示例#FFD700、#FFD700FF
     * @return string
     */
    public function getHighlightFontFillColor(): ?string
    {
        return $this->highlightFontFillColor;
    }

    /**
     * 需要高亮强调的字幕填充颜色支持RGB、RGBA，系统默认:#FFD700（黄色），示例#FFD700、#FFD700FF
     * @param string $highlightFontFillColor
     * @return self
     */
    public function setHighlightFontFillColor(?string $highlightFontFillColor): self
    {
        $this->highlightFontFillColor = $highlightFontFillColor;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fontBorderColor !== null) {
            $result['font_border_color'] = $this->fontBorderColor;
        }
        if ($this->fontElementId !== null) {
            $result['font_element_id'] = $this->fontElementId;
        }
        if ($this->fontFillColor !== null) {
            $result['font_fill_color'] = $this->fontFillColor;
        }
        if ($this->fontSize !== null) {
            $result['font_size'] = $this->fontSize;
        }
        if ($this->highlightFontBorderColor !== null) {
            $result['highlight_font_border_color'] = $this->highlightFontBorderColor;
        }
        if ($this->highlightFontFillColor !== null) {
            $result['highlight_font_fill_color'] = $this->highlightFontFillColor;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['font_border_color'] ?? null) !== null) {
            $obj->fontBorderColor = (string) $v;
        }
        if (($v = $data['font_element_id'] ?? null) !== null) {
            $obj->fontElementId = (int) $v;
        }
        if (($v = $data['font_fill_color'] ?? null) !== null) {
            $obj->fontFillColor = (string) $v;
        }
        if (($v = $data['font_size'] ?? null) !== null) {
            $obj->fontSize = (int) $v;
        }
        if (($v = $data['highlight_font_border_color'] ?? null) !== null) {
            $obj->highlightFontBorderColor = (string) $v;
        }
        if (($v = $data['highlight_font_fill_color'] ?? null) !== null) {
            $obj->highlightFontFillColor = (string) $v;
        }
        return $obj;
    }
}
