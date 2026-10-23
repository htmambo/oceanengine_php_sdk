<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialListV30ResponseDataDataVideosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $bitRate = null;

    /**
     * 组织维度口径：视频绑定到 EBP 组织的时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var float
     */
    protected ?float $duration = null;

    /**
     * @var int
     */
    protected ?int $ebpId = null;

    /**
     * @var string
     */
    protected ?string $format = null;

    /**
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var int
     */
    protected ?int $materialId = null;

    /**
     * @var string
     */
    protected ?string $materialName = null;

    /**
     * @var string
     */
    protected ?string $posterUrl = null;

    /**
     * @var string
     */
    protected ?string $signature = null;

    /**
     * @var int
     */
    protected ?int $size = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialListV30DataDataVideosSource
     */
    protected ?string $source = null;

    /**
     * 当前 Root EBP 下视频活跃标签，含自定义标签和系统标签
     * @var \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataDataVideosInnerTagsInner[]
     */
    protected ?array $tags = null;

    /**
     * @var string
     */
    protected ?string $updateTime = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @var int
     */
    protected ?int $width = null;

    /**
     * @return int
     */
    public function getBitRate(): ?int
    {
        return $this->bitRate;
    }

    /**
     * @param int $bitRate
     * @return self
     */
    public function setBitRate(?int $bitRate): self
    {
        $this->bitRate = $bitRate;
        return $this;
    }

    /**
     * 组织维度口径：视频绑定到 EBP 组织的时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 组织维度口径：视频绑定到 EBP 组织的时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * @param float $duration
     * @return self
     */
    public function setDuration(?float $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getEbpId(): ?int
    {
        return $this->ebpId;
    }

    /**
     * @param int $ebpId
     * @return self
     */
    public function setEbpId(?int $ebpId): self
    {
        $this->ebpId = $ebpId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;
        return $this;
    }

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
     * @return int
     */
    public function getMaterialId(): ?int
    {
        return $this->materialId;
    }

    /**
     * @param int $materialId
     * @return self
     */
    public function setMaterialId(?int $materialId): self
    {
        $this->materialId = $materialId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaterialName(): ?string
    {
        return $this->materialName;
    }

    /**
     * @param string $materialName
     * @return self
     */
    public function setMaterialName(?string $materialName): self
    {
        $this->materialName = $materialName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPosterUrl(): ?string
    {
        return $this->posterUrl;
    }

    /**
     * @param string $posterUrl
     * @return self
     */
    public function setPosterUrl(?string $posterUrl): self
    {
        $this->posterUrl = $posterUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return self
     */
    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialListV30DataDataVideosSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialListV30DataDataVideosSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * 当前 Root EBP 下视频活跃标签，含自定义标签和系统标签
     * @return \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataDataVideosInnerTagsInner[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * 当前 Root EBP 下视频活跃标签，含自定义标签和系统标签
     * @param \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataDataVideosInnerTagsInner[] $tags
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * @param string $updateTime
     * @return self
     */
    public function setUpdateTime(?string $updateTime): self
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
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
        if ($this->bitRate !== null) {
            $result['bit_rate'] = $this->bitRate;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->ebpId !== null) {
            $result['ebp_id'] = $this->ebpId;
        }
        if ($this->format !== null) {
            $result['format'] = $this->format;
        }
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->materialId !== null) {
            $result['material_id'] = $this->materialId;
        }
        if ($this->materialName !== null) {
            $result['material_name'] = $this->materialName;
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
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        if ($this->updateTime !== null) {
            $result['update_time'] = $this->updateTime;
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
            $obj->duration = (float) $v;
        }
        if (($v = $data['ebp_id'] ?? null) !== null) {
            $obj->ebpId = (int) $v;
        }
        if (($v = $data['format'] ?? null) !== null) {
            $obj->format = (string) $v;
        }
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['material_id'] ?? null) !== null) {
            $obj->materialId = (int) $v;
        }
        if (($v = $data['material_name'] ?? null) !== null) {
            $obj->materialName = (string) $v;
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
        if (($v = $data['tags'] ?? null) !== null && is_array($v)) {
            $obj->tags = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpMaterialListV30ResponseDataDataVideosInnerTagsInner::fromArray($vv), $v);
        }
        if (($v = $data['update_time'] ?? null) !== null) {
            $obj->updateTime = (string) $v;
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
