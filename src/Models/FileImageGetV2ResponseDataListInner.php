<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileImageGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 素材是否是aigc生成
     * @var bool
     */
    protected ?bool $aigc = null;

    /**
     * 素材的上传时间，格式：\"yyyy-mm-dd HH:MM:SS\"
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 素材的文件名
     * @var string
     */
    protected ?string $filename = null;

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
     * 图片预览地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL” 链接仅做预览使用，预览链接有效期为1小时
     * @var string
     */
    protected ?string $url = null;

    /**
     * 图片宽度
     * @var int
     */
    protected ?int $width = null;

    /**
     * 素材是否是aigc生成
     * @return bool
     */
    public function getAigc(): ?bool
    {
        return $this->aigc;
    }

    /**
     * 素材是否是aigc生成
     * @param bool $aigc
     * @return self
     */
    public function setAigc(?bool $aigc): self
    {
        $this->aigc = $aigc;
        return $this;
    }

    /**
     * 素材的上传时间，格式：\"yyyy-mm-dd HH:MM:SS\"
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 素材的上传时间，格式：\"yyyy-mm-dd HH:MM:SS\"
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 素材的文件名
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * 素材的文件名
     * @param string $filename
     * @return self
     */
    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

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
     * 图片预览地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL” 链接仅做预览使用，预览链接有效期为1小时
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 图片预览地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL” 链接仅做预览使用，预览链接有效期为1小时
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
        if ($this->aigc !== null) {
            $result['aigc'] = $this->aigc;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
        }
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
        if (($v = $data['aigc'] ?? null) !== null) {
            $obj->aigc = (bool) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['filename'] ?? null) !== null) {
            $obj->filename = (string) $v;
        }
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
