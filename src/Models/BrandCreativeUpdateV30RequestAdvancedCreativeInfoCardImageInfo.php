<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeUpdateV30RequestAdvancedCreativeInfoCardImageInfo implements \JsonSerializable
{
    /**
     * 动图时长
     * @var int
     */
    protected ?int $d = null;

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
     * 图片URI
     * @var string
     */
    protected ?string $webUri = null;

    /**
     * 图片URL
     * @var string
     */
    protected ?string $webUriShowUrl = null;

    /**
     * 宽
     * @var int
     */
    protected ?int $width = null;

    /**
     * 动图时长
     * @return int
     */
    public function getD(): ?int
    {
        return $this->d;
    }

    /**
     * 动图时长
     * @param int $d
     * @return self
     */
    public function setD(?int $d): self
    {
        $this->d = $d;
        return $this;
    }

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
     * 图片URI
     * @return string
     */
    public function getWebUri(): ?string
    {
        return $this->webUri;
    }

    /**
     * 图片URI
     * @param string $webUri
     * @return self
     */
    public function setWebUri(?string $webUri): self
    {
        $this->webUri = $webUri;
        return $this;
    }

    /**
     * 图片URL
     * @return string
     */
    public function getWebUriShowUrl(): ?string
    {
        return $this->webUriShowUrl;
    }

    /**
     * 图片URL
     * @param string $webUriShowUrl
     * @return self
     */
    public function setWebUriShowUrl(?string $webUriShowUrl): self
    {
        $this->webUriShowUrl = $webUriShowUrl;
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
        if ($this->d !== null) {
            $result['d'] = $this->d;
        }
        if ($this->format !== null) {
            $result['format'] = $this->format;
        }
        if ($this->hash !== null) {
            $result['hash'] = $this->hash;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->webUri !== null) {
            $result['web_uri'] = $this->webUri;
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
            $obj->d = (int) $v;
        }
        if (($v = $data['format'] ?? null) !== null) {
            $obj->format = (string) $v;
        }
        if (($v = $data['hash'] ?? null) !== null) {
            $obj->hash = (string) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['web_uri'] ?? null) !== null) {
            $obj->webUri = (string) $v;
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
