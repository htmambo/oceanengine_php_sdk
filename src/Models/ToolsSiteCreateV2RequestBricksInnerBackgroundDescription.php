<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerBackgroundDescription implements \JsonSerializable
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
     * @var string[]
     */
    protected ?array $labels = null;

    /**
     * @var string
     */
    protected ?string $type = null;

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
     * @return string[]
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
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
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
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
        if (($v = $data['labels'] ?? null) !== null && is_array($v)) {
            $obj->labels = $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
