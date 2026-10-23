<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoAdV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     * @var string
     */
    protected ?string $filename = null;

    /**
     * 视频素材是否为AIGC生成
     * @var bool
     */
    protected ?bool $isAigc = null;

    /**
     * 上传视频场景是否是引导视频
     * @var bool
     */
    protected ?bool $isGuideVideo = null;

    /**
     * @var string[]
     */
    protected ?array $labels = null;

    /**
     * @var \Oceanengine\Models\FileVideoAdV2UploadType
     */
    protected ?string $uploadType = null;

    /**
     * 视频封面
     * @var string
     */
    protected ?string $videoCoverId = null;

    /**
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制） upload_type为UPLOAD_BY_File必填
     * @var mixed
     */
    protected $videoFile = null;

    /**
     * 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填
     * @var string
     */
    protected ?string $videoSignature = null;

    /**
     * 视频url地址，如http://xxx.xxx，upload_type为UPLOAD_BY_URL必填
     * @var string
     */
    protected ?string $videoUrl = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     * @param string $filename
     * @return self
     */
    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * 视频素材是否为AIGC生成
     * @return bool
     */
    public function getIsAigc(): ?bool
    {
        return $this->isAigc;
    }

    /**
     * 视频素材是否为AIGC生成
     * @param bool $isAigc
     * @return self
     */
    public function setIsAigc(?bool $isAigc): self
    {
        $this->isAigc = $isAigc;
        return $this;
    }

    /**
     * 上传视频场景是否是引导视频
     * @return bool
     */
    public function getIsGuideVideo(): ?bool
    {
        return $this->isGuideVideo;
    }

    /**
     * 上传视频场景是否是引导视频
     * @param bool $isGuideVideo
     * @return self
     */
    public function setIsGuideVideo(?bool $isGuideVideo): self
    {
        $this->isGuideVideo = $isGuideVideo;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     * @return self
     */
    public function setLabels(?array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileVideoAdV2UploadType
     */
    public function getUploadType(): ?string
    {
        return $this->uploadType;
    }

    /**
     * @param \Oceanengine\Models\FileVideoAdV2UploadType $uploadType
     * @return self
     */
    public function setUploadType(?string $uploadType): self
    {
        $this->uploadType = $uploadType;
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
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制） upload_type为UPLOAD_BY_File必填
     * @return mixed
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制） upload_type为UPLOAD_BY_File必填
     * @param mixed $videoFile
     * @return self
     */
    public function setVideoFile($videoFile): self
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填
     * @return string
     */
    public function getVideoSignature(): ?string
    {
        return $this->videoSignature;
    }

    /**
     * 视频的md5值(用于服务端校验) upload_type为UPLOAD_BY_File必填
     * @param string $videoSignature
     * @return self
     */
    public function setVideoSignature(?string $videoSignature): self
    {
        $this->videoSignature = $videoSignature;
        return $this;
    }

    /**
     * 视频url地址，如http://xxx.xxx，upload_type为UPLOAD_BY_URL必填
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 视频url地址，如http://xxx.xxx，upload_type为UPLOAD_BY_URL必填
     * @param string $videoUrl
     * @return self
     */
    public function setVideoUrl(?string $videoUrl): self
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
        }
        if ($this->isAigc !== null) {
            $result['is_aigc'] = $this->isAigc;
        }
        if ($this->isGuideVideo !== null) {
            $result['is_guide_video'] = $this->isGuideVideo;
        }
        if ($this->labels !== null) {
            $result['labels'] = $this->labels;
        }
        if ($this->uploadType !== null) {
            $result['upload_type'] = $this->uploadType;
        }
        if ($this->videoCoverId !== null) {
            $result['video_cover_id'] = $this->videoCoverId;
        }
        if ($this->videoFile !== null) {
            $result['video_file'] = $this->videoFile;
        }
        if ($this->videoSignature !== null) {
            $result['video_signature'] = $this->videoSignature;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['filename'] ?? null) !== null) {
            $obj->filename = (string) $v;
        }
        if (($v = $data['is_aigc'] ?? null) !== null) {
            $obj->isAigc = (bool) $v;
        }
        if (($v = $data['is_guide_video'] ?? null) !== null) {
            $obj->isGuideVideo = (bool) $v;
        }
        if (($v = $data['labels'] ?? null) !== null && is_array($v)) {
            $obj->labels = $v;
        }
        if (($v = $data['upload_type'] ?? null) !== null) {
            $obj->uploadType = (string) $v;
        }
        if (($v = $data['video_cover_id'] ?? null) !== null) {
            $obj->videoCoverId = (string) $v;
        }
        if (($v = $data['video_file'] ?? null) !== null) {
            $obj->videoFile = $v;
        }
        if (($v = $data['video_signature'] ?? null) !== null) {
            $obj->videoSignature = (string) $v;
        }
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
