<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeStrategyListV2ResponseDataStrategyModelsInnerStateListInnerLimit implements \JsonSerializable
{
    /**
     * 图片高度(仅对state_type=Image有效)
     * @var int
     */
    protected ?int $imgHeight = null;

    /**
     * 图片宽度(仅对state_type=Image有效)
     * @var int
     */
    protected ?int $imgWidth = null;

    /**
     * 文案最大长度(仅对state_type=Text有效)
     * @var int
     */
    protected ?int $textMaxLength = null;

    /**
     * 文案最小长度(仅对state_type=Text有效)
     * @var int
     */
    protected ?int $textMinLength = null;

    /**
     * 图片高度(仅对state_type=Image有效)
     * @return int
     */
    public function getImgHeight(): ?int
    {
        return $this->imgHeight;
    }

    /**
     * 图片高度(仅对state_type=Image有效)
     * @param int $imgHeight
     * @return self
     */
    public function setImgHeight(?int $imgHeight): self
    {
        $this->imgHeight = $imgHeight;
        return $this;
    }

    /**
     * 图片宽度(仅对state_type=Image有效)
     * @return int
     */
    public function getImgWidth(): ?int
    {
        return $this->imgWidth;
    }

    /**
     * 图片宽度(仅对state_type=Image有效)
     * @param int $imgWidth
     * @return self
     */
    public function setImgWidth(?int $imgWidth): self
    {
        $this->imgWidth = $imgWidth;
        return $this;
    }

    /**
     * 文案最大长度(仅对state_type=Text有效)
     * @return int
     */
    public function getTextMaxLength(): ?int
    {
        return $this->textMaxLength;
    }

    /**
     * 文案最大长度(仅对state_type=Text有效)
     * @param int $textMaxLength
     * @return self
     */
    public function setTextMaxLength(?int $textMaxLength): self
    {
        $this->textMaxLength = $textMaxLength;
        return $this;
    }

    /**
     * 文案最小长度(仅对state_type=Text有效)
     * @return int
     */
    public function getTextMinLength(): ?int
    {
        return $this->textMinLength;
    }

    /**
     * 文案最小长度(仅对state_type=Text有效)
     * @param int $textMinLength
     * @return self
     */
    public function setTextMinLength(?int $textMinLength): self
    {
        $this->textMinLength = $textMinLength;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imgHeight !== null) {
            $result['img_height'] = $this->imgHeight;
        }
        if ($this->imgWidth !== null) {
            $result['img_width'] = $this->imgWidth;
        }
        if ($this->textMaxLength !== null) {
            $result['text_max_length'] = $this->textMaxLength;
        }
        if ($this->textMinLength !== null) {
            $result['text_min_length'] = $this->textMinLength;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['img_height'] ?? null) !== null) {
            $obj->imgHeight = (int) $v;
        }
        if (($v = $data['img_width'] ?? null) !== null) {
            $obj->imgWidth = (int) $v;
        }
        if (($v = $data['text_max_length'] ?? null) !== null) {
            $obj->textMaxLength = (int) $v;
        }
        if (($v = $data['text_min_length'] ?? null) !== null) {
            $obj->textMinLength = (int) $v;
        }
        return $obj;
    }
}
