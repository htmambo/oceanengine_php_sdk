<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsVideoCoverSuggestV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 图片高度
     * @var int
     */
    protected ?int $height = null;

    /**
     * 图片ID
     * @var string
     */
    protected ?string $id = null;

    /**
     * 图片预览地址
     * @var string
     */
    protected ?string $url = null;

    /**
     * 图片宽度
     * @var int
     */
    protected ?int $width = null;

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
     * 图片ID
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 图片ID
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 图片预览地址
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 图片预览地址
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
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
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
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
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
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
