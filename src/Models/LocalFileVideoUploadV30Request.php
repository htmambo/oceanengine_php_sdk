<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileVideoUploadV30Request implements \JsonSerializable
{
    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符
     * @var string
     */
    protected ?string $filename = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制）
     * @var mixed
     */
    protected $videoFile = null;

    /**
     * 视频的md5值(用于服务端校验)
     * @var string
     */
    protected ?string $videoSignature = null;

    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符
     * @param string $filename
     * @return self
     */
    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制）
     * @return mixed
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * 视频文件 允许格式：mp4、mpeg、3gp、avi（10s超时限制）
     * @param mixed $videoFile
     * @return self
     */
    public function setVideoFile($videoFile): self
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * 视频的md5值(用于服务端校验)
     * @return string
     */
    public function getVideoSignature(): ?string
    {
        return $this->videoSignature;
    }

    /**
     * 视频的md5值(用于服务端校验)
     * @param string $videoSignature
     * @return self
     */
    public function setVideoSignature(?string $videoSignature): self
    {
        $this->videoSignature = $videoSignature;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->videoFile !== null) {
            $result['video_file'] = $this->videoFile;
        }
        if ($this->videoSignature !== null) {
            $result['video_signature'] = $this->videoSignature;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['filename'] ?? null) !== null) {
            $obj->filename = (string) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['video_file'] ?? null) !== null) {
            $obj->videoFile = $v;
        }
        if (($v = $data['video_signature'] ?? null) !== null) {
            $obj->videoSignature = (string) $v;
        }
        return $obj;
    }
}
