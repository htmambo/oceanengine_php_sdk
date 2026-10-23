<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalFileUploadTaskCreateV30Request implements \JsonSerializable
{
    /**
     * 素材的文件名
     * @var string
     */
    protected ?string $filename = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * 视频 url地址，如http://xxx.xxx
     * @var string
     */
    protected ?string $videoUrl = null;

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
     * 视频 url地址，如http://xxx.xxx
     * @return string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * 视频 url地址，如http://xxx.xxx
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
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->videoUrl !== null) {
            $result['video_url'] = $this->videoUrl;
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
        if (($v = $data['video_url'] ?? null) !== null) {
            $obj->videoUrl = (string) $v;
        }
        return $obj;
    }
}
