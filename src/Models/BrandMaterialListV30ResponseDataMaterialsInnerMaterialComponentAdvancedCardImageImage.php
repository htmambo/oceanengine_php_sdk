<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAdvancedCardImageImage implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $d = null;

    /**
     * @var string
     */
    protected ?string $format = null;

    /**
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var string
     */
    protected ?string $webUriShowUrl = null;

    /**
     * @var int
     */
    protected ?int $width = null;

    /**
     * @return float
     */
    public function getD(): ?float
    {
        return $this->d;
    }

    /**
     * @param float $d
     * @return self
     */
    public function setD(?float $d): self
    {
        $this->d = $d;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebUriShowUrl(): ?string
    {
        return $this->webUriShowUrl;
    }

    /**
     * @param string $webUriShowUrl
     * @return self
     */
    public function setWebUriShowUrl(?string $webUriShowUrl): self
    {
        $this->webUriShowUrl = $webUriShowUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->d !== null) {
            $result['d'] = $this->d;
        }
        if ($this->format !== null) {
            $result['format'] = $this->format;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->webUriShowUrl !== null) {
            $result['web_uri_show_url'] = $this->webUriShowUrl;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['d'] ?? null) !== null) {
            $obj->d = (float) $v;
        }
        if (($v = $data['format'] ?? null) !== null) {
            $obj->format = (string) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['web_uri_show_url'] ?? null) !== null) {
            $obj->webUriShowUrl = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
