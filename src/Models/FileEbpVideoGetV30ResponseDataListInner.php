<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileEbpVideoGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 码率，单位bps
     * @var int
     */
    protected ?int $bitRate = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 素材时长
     * @var string
     */
    protected ?string $duration = null;

    /**
     * 素材文件名
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * 素材宽度
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var \Oceanengine\Models\FileEbpVideoGetV30DataListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * 素材ID
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var \Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInnerMaterialProperties
     */
    protected ?\Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInnerMaterialProperties $materialProperties = null;

    /**
     * 视频首帧截图，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL”
     * @var string
     */
    protected ?string $posterUrl = null;

    /**
     * 素材md5
     * @var string
     */
    protected ?string $signature = null;

    /**
     * 素材文件大小
     * @var int
     */
    protected ?int $size = null;

    /**
     * 视频地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL” 链接仅做预览使用，预览链接有效期为1小时
     * @var string
     */
    protected ?string $url = null;

    /**
     * 视频ID
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * 素材长度
     * @var int
     */
    protected ?int $width = null;

    /**
     * 码率，单位bps
     * @return int
     */
    public function getBitRate(): ?int
    {
        return $this->bitRate;
    }

    /**
     * 码率，单位bps
     * @param int $bitRate
     * @return self
     */
    public function setBitRate(?int $bitRate): self
    {
        $this->bitRate = $bitRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 素材时长
     * @return string
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * 素材时长
     * @param string $duration
     * @return self
     */
    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * 素材文件名
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * 素材文件名
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * 素材宽度
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 素材宽度
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileEbpVideoGetV30DataListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\FileEbpVideoGetV30DataListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * 素材ID
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 素材ID
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInnerMaterialProperties
     */
    public function getMaterialProperties(): ?\Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInnerMaterialProperties
    {
        return $this->materialProperties;
    }

    /**
     * @param \Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInnerMaterialProperties $materialProperties
     * @return self
     */
    public function setMaterialProperties(?\Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInnerMaterialProperties $materialProperties): self
    {
        $this->materialProperties = $materialProperties;
        return $this;
    }

    /**
     * 视频首帧截图，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL”
     * @return string
     */
    public function getPosterUrl(): ?string
    {
        return $this->posterUrl;
    }

    /**
     * 视频首帧截图，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL”
     * @param string $posterUrl
     * @return self
     */
    public function setPosterUrl(?string $posterUrl): self
    {
        $this->posterUrl = $posterUrl;
        return $this;
    }

    /**
     * 素材md5
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * 素材md5
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * 素材文件大小
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * 素材文件大小
     * @param int $size
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * 视频地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL” 链接仅做预览使用，预览链接有效期为1小时
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 视频地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL” 链接仅做预览使用，预览链接有效期为1小时
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * 视频ID
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * 视频ID
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * 素材长度
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 素材长度
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialProperties !== null) {
            $result['material_properties'] = $this->materialProperties;
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
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
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
            $obj->bitRate = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (string) $v;
        }
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_properties'] ?? null) !== null && is_array($v)) {
            $obj->materialProperties = \Oceanengine\Models\FileEbpVideoGetV30ResponseDataListInnerMaterialProperties::fromArray($v);
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
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
