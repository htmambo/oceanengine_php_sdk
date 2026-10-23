<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     * @var int
     */
    protected ?int $bitRate = null;

    /**
     * 视频封面来源  MANUAL_SOURCE ，人工自提 FIRST_FRAME  默认封面或人工裁剪   AI_COVER  AI推荐封面
     * @var string
     */
    protected ?string $coverSource = null;

    /**
     * 素材的上传时间，格式：\"yyyy-mm-dd HH:MM:SS\"
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 码率，单位bps
     * @var float
     */
    protected ?float $duration = null;

    /**
     * 素材的文件名
     * @var string
     */
    protected ?string $filename = null;

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
     * 视频标签
     * @var string[]
     */
    protected ?array $labels = null;

    /**
     * 视频时长
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string[]
     */
    protected ?array $organizationTags = null;

    /**
     * 视频首帧截图，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL”
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
     * 素材来源，详见【附录-素材来源】
     * @var string
     */
    protected ?string $source = null;

    /**
     * @var string
     */
    protected ?string $starAuthorId = null;

    /**
     * 视频地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL” 链接仅做预览使用，预览链接有效期为1小时
     * @var string
     */
    protected ?string $url = null;

    /**
     * 视频封面
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * 视频宽度
     * @var int
     */
    protected ?int $width = null;

    /**
     * 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     * @return int
     */
    public function getBitRate(): ?int
    {
        return $this->bitRate;
    }

    /**
     * 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     * @param int $bitRate
     * @return self
     */
    public function setBitRate(?int $bitRate): self
    {
        $this->bitRate = $bitRate;
        return $this;
    }

    /**
     * 视频封面来源  MANUAL_SOURCE ，人工自提 FIRST_FRAME  默认封面或人工裁剪   AI_COVER  AI推荐封面
     * @return string
     */
    public function getCoverSource(): ?string
    {
        return $this->coverSource;
    }

    /**
     * 视频封面来源  MANUAL_SOURCE ，人工自提 FIRST_FRAME  默认封面或人工裁剪   AI_COVER  AI推荐封面
     * @param string $coverSource
     * @return self
     */
    public function setCoverSource(?string $coverSource): self
    {
        $this->coverSource = $coverSource;
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
     * 码率，单位bps
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * 码率，单位bps
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
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
     * 视频标签
     * @return string[]
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * 视频标签
     * @param string[] $labels
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * 视频时长
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * 视频时长
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getOrganizationTags(): ?array
    {
        return $this->organizationTags;
    }

    /**
     * @param string[] $organizationTags
     * @return self
     */
    public function setOrganizationTags(?array $organizationTags): self
    {
        $this->organizationTags = $organizationTags;
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
     * 素材来源，详见【附录-素材来源】
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * 素材来源，详见【附录-素材来源】
     * @param string $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getStarAuthorId(): ?string
    {
        return $this->starAuthorId;
    }

    /**
     * @param string $starAuthorId
     * @return self
     */
    public function setStarAuthorId(?string $starAuthorId): self
    {
        $this->starAuthorId = $starAuthorId;
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
     * 视频封面
     * @return string
     */
    public function getVideoCoverId(): ?string
    {
        return $this->videoCoverId;
    }

    /**
     * 视频封面
     * @param string $videoCoverId
     * @return self
     */
    public function setVideoCoverId(?string $videoCoverId): self
    {
        $this->videoCoverId = $videoCoverId;
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
        if ($this->coverSource !== null) {
            $result['cover_source'] = $this->coverSource;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
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
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->organizationTags !== null) {
            $result['organization_tags'] = $this->organizationTags;
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
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->starAuthorId !== null) {
            $result['star_author_id'] = $this->starAuthorId;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
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
        if (($v = $data['cover_source'] ?? null) !== null) {
            $obj->coverSource = (string) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (float) $v;
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
        if (($v = $data['labels'] ?? null) !== null && is_array($v)) {
            $obj->labels = $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['organization_tags'] ?? null) !== null && is_array($v)) {
            $obj->organizationTags = $v;
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
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['star_author_id'] ?? null) !== null) {
            $obj->starAuthorId = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
