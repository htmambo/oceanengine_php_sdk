<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeImage implements \JsonSerializable
{
    /**
     * 格式
     * @var string
     */
    protected ?string $format = null;

    /**
     * @var string
     */
    protected ?string $hash = null;

    /**
     * 高
     * @var int
     */
    protected ?int $height = null;

    /**
     * 图片URL
     * @var string
     */
    protected ?string $showUrl = null;

    /**
     * 图片URI
     * @var string
     */
    protected ?string $uri = null;

    /**
     * 宽
     * @var int
     */
    protected ?int $width = null;

    /**
     * 格式
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * 格式
     * @param string $format
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return string
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return self
     */
    public function setHash(?string $hash): self
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * 高
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 高
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * 图片URL
     * @return string
     */
    public function getShowUrl(): ?string
    {
        return $this->showUrl;
    }

    /**
     * 图片URL
     * @param string $showUrl
     * @return self
     */
    public function setShowUrl(?string $showUrl): self
    {
        $this->showUrl = $showUrl;
        return $this;
    }

    /**
     * 图片URI
     * @return string
     */
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * 图片URI
     * @param string $uri
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * 宽
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 宽
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
        if ($this->format !== null) {
            $result['format'] = $this->format;
        }
        if ($this->hash !== null) {
            $result['hash'] = $this->hash;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->showUrl !== null) {
            $result['show_url'] = $this->showUrl;
        }
        if ($this->uri !== null) {
            $result['uri'] = $this->uri;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['format'] ?? null) !== null) {
            $obj->format = (string) $v;
        }
        if (($v = $data['hash'] ?? null) !== null) {
            $obj->hash = (string) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['show_url'] ?? null) !== null) {
            $obj->showUrl = (string) $v;
        }
        if (($v = $data['uri'] ?? null) !== null) {
            $obj->uri = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
