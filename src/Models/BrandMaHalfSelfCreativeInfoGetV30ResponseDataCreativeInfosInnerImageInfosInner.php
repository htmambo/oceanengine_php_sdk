<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInner implements \JsonSerializable
{
    /**
     * 图片是否aigc生成
     * @var bool
     */
    protected ?bool $aigc = null;

    /**
     * @var \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInnerAutoColor
     */
    protected ?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInnerAutoColor $autoColor = null;

    /**
     * gif图长度,单位毫秒
     * @var int
     */
    protected ?int $d = null;

    /**
     * 图片格式:jpg/jpeg/png/gif
     * @var string
     */
    protected ?string $format = null;

    /**
     * hash
     * @var string
     */
    protected ?string $hash = null;

    /**
     * 图片高度
     * @var int
     */
    protected ?int $height = null;

    /**
     * mode
     * @var int
     */
    protected ?int $mode = null;

    /**
     * 素材加密使用
     * @var string
     */
    protected ?string $secretKey = null;

    /**
     * 素材加密使用
     * @var string
     */
    protected ?string $secretUri = null;

    /**
     * 图片地址
     * @var string
     */
    protected ?string $webUri = null;

    /**
     * 图片前端展示地址
     * @var string
     */
    protected ?string $webUriShowUrl = null;

    /**
     * 图片前端展示地址
     * @var string
     */
    protected ?string $webUrl = null;

    /**
     * 图片宽度
     * @var int
     */
    protected ?int $width = null;

    /**
     * 图片是否aigc生成
     * @return bool
     */
    public function getAigc(): ?bool
    {
        return $this->aigc;
    }

    /**
     * 图片是否aigc生成
     * @param bool $aigc
     * @return self
     */
    public function setAigc(?bool $aigc): self
    {
        $this->aigc = $aigc;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInnerAutoColor
     */
    public function getAutoColor(): ?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInnerAutoColor
    {
        return $this->autoColor;
    }

    /**
     * @param \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInnerAutoColor $autoColor
     * @return self
     */
    public function setAutoColor(?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInnerAutoColor $autoColor): self
    {
        $this->autoColor = $autoColor;
        return $this;
    }

    /**
     * gif图长度,单位毫秒
     * @return int
     */
    public function getD(): ?int
    {
        return $this->d;
    }

    /**
     * gif图长度,单位毫秒
     * @param int $d
     * @return self
     */
    public function setD(?int $d): self
    {
        $this->d = $d;
        return $this;
    }

    /**
     * 图片格式:jpg/jpeg/png/gif
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * 图片格式:jpg/jpeg/png/gif
     * @param string $format
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    /**
     * hash
     * @return string
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }

    /**
     * hash
     * @param string $hash
     * @return self
     */
    public function setHash(?string $hash): self
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * 图片高度
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 图片高度
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * mode
     * @return int
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }

    /**
     * mode
     * @param int $mode
     * @return self
     */
    public function setMode(?int $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * 素材加密使用
     * @return string
     */
    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    /**
     * 素材加密使用
     * @param string $secretKey
     * @return self
     */
    public function setSecretKey(?string $secretKey): self
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    /**
     * 素材加密使用
     * @return string
     */
    public function getSecretUri(): ?string
    {
        return $this->secretUri;
    }

    /**
     * 素材加密使用
     * @param string $secretUri
     * @return self
     */
    public function setSecretUri(?string $secretUri): self
    {
        $this->secretUri = $secretUri;
        return $this;
    }

    /**
     * 图片地址
     * @return string
     */
    public function getWebUri(): ?string
    {
        return $this->webUri;
    }

    /**
     * 图片地址
     * @param string $webUri
     * @return self
     */
    public function setWebUri(?string $webUri): self
    {
        $this->webUri = $webUri;
        return $this;
    }

    /**
     * 图片前端展示地址
     * @return string
     */
    public function getWebUriShowUrl(): ?string
    {
        return $this->webUriShowUrl;
    }

    /**
     * 图片前端展示地址
     * @param string $webUriShowUrl
     * @return self
     */
    public function setWebUriShowUrl(?string $webUriShowUrl): self
    {
        $this->webUriShowUrl = $webUriShowUrl;
        return $this;
    }

    /**
     * 图片前端展示地址
     * @return string
     */
    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    /**
     * 图片前端展示地址
     * @param string $webUrl
     * @return self
     */
    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    /**
     * 图片宽度
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 图片宽度
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
        if ($this->aigc !== null) {
            $result['aigc'] = $this->aigc;
        }
        if ($this->autoColor !== null) {
            $result['auto_color'] = $this->autoColor;
        }
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
        if ($this->mode !== null) {
            $result['mode'] = $this->mode;
        }
        if ($this->secretKey !== null) {
            $result['secret_key'] = $this->secretKey;
        }
        if ($this->secretUri !== null) {
            $result['secret_uri'] = $this->secretUri;
        }
        if ($this->webUri !== null) {
            $result['web_uri'] = $this->webUri;
        }
        if ($this->webUriShowUrl !== null) {
            $result['web_uri_show_url'] = $this->webUriShowUrl;
        }
        if ($this->webUrl !== null) {
            $result['web_url'] = $this->webUrl;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aigc'] ?? null) !== null) {
            $obj->aigc = (bool) $v;
        }
        if (($v = $data['auto_color'] ?? null) !== null && is_array($v)) {
            $obj->autoColor = \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInnerImageInfosInnerAutoColor::fromArray($v);
        }
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
        if (($v = $data['mode'] ?? null) !== null) {
            $obj->mode = (int) $v;
        }
        if (($v = $data['secret_key'] ?? null) !== null) {
            $obj->secretKey = (string) $v;
        }
        if (($v = $data['secret_uri'] ?? null) !== null) {
            $obj->secretUri = (string) $v;
        }
        if (($v = $data['web_uri'] ?? null) !== null) {
            $obj->webUri = (string) $v;
        }
        if (($v = $data['web_uri_show_url'] ?? null) !== null) {
            $obj->webUriShowUrl = (string) $v;
        }
        if (($v = $data['web_url'] ?? null) !== null) {
            $obj->webUrl = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
