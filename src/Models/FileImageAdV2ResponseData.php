<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileImageAdV2ResponseData implements \JsonSerializable
{
    /**
     * 图片格式
     * @var string
     */
    protected ?string $format = null;

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
     * 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 图片md5
     * @var string
     */
    protected ?string $signature = null;

    /**
     * 图片大小
     * @var int
     */
    protected ?int $size = null;

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
     * 图片格式
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * 图片格式
     * @param string $format
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;
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
     * 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * 图片md5
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * 图片md5
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * 图片大小
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * 图片大小
     * @param int $size
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;
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
        if ($this->format !== null) {
            $result['format'] = $this->format;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->signature !== null) {
            $result['signature'] = $this->signature;
        }
        if ($this->size !== null) {
            $result['size'] = $this->size;
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
        if (($v = $data['format'] ?? null) !== null) {
            $obj->format = (string) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['signature'] ?? null) !== null) {
            $obj->signature = (string) $v;
        }
        if (($v = $data['size'] ?? null) !== null) {
            $obj->size = (int) $v;
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
