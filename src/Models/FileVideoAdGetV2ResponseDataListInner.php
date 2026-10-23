<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoAdGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 码率，单位bps
     * @var float
     */
    protected ?float $bitRate = null;

    /**
     * 视频时长
     * @var float
     */
    protected ?float $duration = null;

    /**
     * 视频格式
     * @var string
     */
    protected ?string $format = null;

    /**
     * 视频高度
     * @var int
     */
    protected ?int $height = null;

    /**
     * 视频ID
     * @var string
     */
    protected ?string $id = null;

    /**
     * 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * 视频首帧截图
     * @var string
     */
    protected ?string $posterUrl = null;

    /**
     * 视频md5值
     * @var string
     */
    protected ?string $signature = null;

    /**
     * 视频大小
     * @var int
     */
    protected ?int $size = null;

    /**
     * 视频地址
     * @var string
     */
    protected ?string $url = null;

    /**
     * 视频宽度
     * @var int
     */
    protected ?int $width = null;

    /**
     * 码率，单位bps
     * @return float
     */
    public function getBitRate(): ?float
    {
        return $this->bitRate;
    }

    /**
     * 码率，单位bps
     * @param float $bitRate
     * @return self
     */
    public function setBitRate(?float $bitRate): self
    {
        $this->bitRate = $bitRate;
        return $this;
    }

    /**
     * 视频时长
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 视频时长
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 视频格式
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * 视频格式
     * @param string $format
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

    /**
     * 视频高度
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 视频高度
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * 视频ID
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 视频ID
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
     * 视频首帧截图
     * @return string
     */
    public function getPosterUrl(): ?string
    {
        return $this->posterUrl;
    }

    /**
     * 视频首帧截图
     * @param string $posterUrl
     * @return self
     */
    public function setPosterUrl(?string $posterUrl): self
    {
        $this->posterUrl = $posterUrl;
        return $this;
    }

    /**
     * 视频md5值
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * 视频md5值
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * 视频大小
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * 视频大小
     * @param int $size
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * 视频地址
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 视频地址
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * 视频宽度
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 视频宽度
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
        if ($this->bitRate !== null) {
            $result['bit_rate'] = $this->bitRate;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
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
        if ($this->posterUrl !== null) {
            $result['poster_url'] = $this->posterUrl;
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
        if (($v = $data['bit_rate'] ?? null) !== null) {
            $obj->bitRate = (float) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
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
        if (($v = $data['poster_url'] ?? null) !== null) {
            $obj->posterUrl = (string) $v;
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
