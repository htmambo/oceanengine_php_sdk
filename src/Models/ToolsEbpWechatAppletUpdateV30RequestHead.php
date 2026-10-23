<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpWechatAppletUpdateV30RequestHead implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var string
     */
    protected ?string $tosKey = null;

    /**
     * @var string
     */
    protected ?string $uri = null;

    /**
     * 带签名的URL,含过期时间
     * @var string
     */
    protected ?string $url = null;

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
    public function getTosKey(): ?string
    {
        return $this->tosKey;
    }

    /**
     * @param string $tosKey
     * @return self
     */
    public function setTosKey(?string $tosKey): self
    {
        $this->tosKey = $tosKey;
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
     * 带签名的URL,含过期时间
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 带签名的URL,含过期时间
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
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
        if ($this->tosKey !== null) {
            $result['tos_key'] = $this->tosKey;
        }
        if ($this->uri !== null) {
            $result['uri'] = $this->uri;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
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
        if (($v = $data['tos_key'] ?? null) !== null) {
            $obj->tosKey = (string) $v;
        }
        if (($v = $data['uri'] ?? null) !== null) {
            $obj->uri = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
