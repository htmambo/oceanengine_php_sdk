<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorCreateV30RequestAnchorInfoNetServiceAnchorIconImagesInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var string
     */
    protected ?string $uri = null;

    /**
     * @var int
     */
    protected ?int $width = null;

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
    public function getUri(): ?string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return self
     */
    public function setUri(?string $uri): self
    {
        $this->uri = $uri;
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
        if ($this->height !== null) {
            $result['height'] = $this->height;
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
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
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
