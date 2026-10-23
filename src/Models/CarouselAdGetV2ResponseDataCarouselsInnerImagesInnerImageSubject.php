<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselAdGetV2ResponseDataCarouselsInnerImagesInnerImageSubject implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $brand = null;

    /**
     * @var string
     */
    protected ?string $comment = null;

    /**
     * @var string
     */
    protected ?string $description = null;

    /**
     * @var string
     */
    protected ?string $text = null;

    /**
     * @return string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return self
     */
    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
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
        if ($this->brand !== null) {
            $result['brand'] = $this->brand;
        }
        if ($this->comment !== null) {
            $result['comment'] = $this->comment;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->text !== null) {
            $result['text'] = $this->text;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand'] ?? null) !== null) {
            $obj->brand = (string) $v;
        }
        if (($v = $data['comment'] ?? null) !== null) {
            $obj->comment = (string) $v;
        }
        if (($v = $data['description'] ?? null) !== null) {
            $obj->description = (string) $v;
        }
        if (($v = $data['text'] ?? null) !== null) {
            $obj->text = (string) $v;
        }
        return $obj;
    }
}
