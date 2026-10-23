<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileAudioAdV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var mixed
     */
    protected $audioFile = null;

    /**
     * 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE
     * @var string
     */
    protected ?string $audioSignature = null;

    /**
     * @var string
     */
    protected ?string $audioUrl = null;

    /**
     * @var \Oceanengine\Models\FileAudioAdV2UploadType
     */
    protected ?string $uploadType = null;

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
     * @return mixed
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * @param mixed $audioFile
     * @return self
     */
    public function setAudioFile($audioFile): self
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE
     * @return string
     */
    public function getAudioSignature(): ?string
    {
        return $this->audioSignature;
    }

    /**
     * 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE
     * @param string $audioSignature
     * @return self
     */
    public function setAudioSignature(?string $audioSignature): self
    {
        $this->audioSignature = $audioSignature;
        return $this;
    }

    /**
     * @return string
     */
    public function getAudioUrl(): ?string
    {
        return $this->audioUrl;
    }

    /**
     * @param string $audioUrl
     * @return self
     */
    public function setAudioUrl(?string $audioUrl): self
    {
        $this->audioUrl = $audioUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileAudioAdV2UploadType
     */
    public function getUploadType(): ?string
    {
        return $this->uploadType;
    }

    /**
     * @param \Oceanengine\Models\FileAudioAdV2UploadType $uploadType
     * @return self
     */
    public function setUploadType(?string $uploadType): self
    {
        $this->uploadType = $uploadType;
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
        if ($this->audioFile !== null) {
            $result['audio_file'] = $this->audioFile;
        }
        if ($this->audioSignature !== null) {
            $result['audio_signature'] = $this->audioSignature;
        }
        if ($this->audioUrl !== null) {
            $result['audio_url'] = $this->audioUrl;
        }
        if ($this->uploadType !== null) {
            $result['upload_type'] = $this->uploadType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['audio_file'] ?? null) !== null) {
            $obj->audioFile = $v;
        }
        if (($v = $data['audio_signature'] ?? null) !== null) {
            $obj->audioSignature = (string) $v;
        }
        if (($v = $data['audio_url'] ?? null) !== null) {
            $obj->audioUrl = (string) $v;
        }
        if (($v = $data['upload_type'] ?? null) !== null) {
            $obj->uploadType = (string) $v;
        }
        return $obj;
    }
}
