<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileImageAdV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 素材的文件名，可自定义素材名，不传则默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     * @var string
     */
    protected ?string $filename = null;

    /**
     * 图片文件 upload_type为UPLOAD_BY_FILE必填 格式: jpg、jpeg、png、bmp、gif, 大小1.5M内
     * @var mixed
     */
    protected $imageFile = null;

    /**
     * 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE
     * @var string
     */
    protected ?string $imageSignature = null;

    /**
     * 图片url地址，如http://xxx.xxx upload_type为UPLOAD_BY_URL必填
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * 图片素材是否为AIGC生成
     * @var bool
     */
    protected ?bool $isAigc = null;

    /**
     * @var \Oceanengine\Models\FileImageAdV2UploadType
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
     * 素材的文件名，可自定义素材名，不传则默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * 素材的文件名，可自定义素材名，不传则默认取文件名，最长255个字符 注：若同一素材已进行上传，重新上传不会改名
     * @param string $filename
     * @return self
     */
    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * 图片文件 upload_type为UPLOAD_BY_FILE必填 格式: jpg、jpeg、png、bmp、gif, 大小1.5M内
     * @return mixed
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * 图片文件 upload_type为UPLOAD_BY_FILE必填 格式: jpg、jpeg、png、bmp、gif, 大小1.5M内
     * @param mixed $imageFile
     * @return self
     */
    public function setImageFile($imageFile): self
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    /**
     * 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE
     * @return string
     */
    public function getImageSignature(): ?string
    {
        return $this->imageSignature;
    }

    /**
     * 图片的md5值(用于服务端校验) upload_type为UPLOAD_BY_FILE
     * @param string $imageSignature
     * @return self
     */
    public function setImageSignature(?string $imageSignature): self
    {
        $this->imageSignature = $imageSignature;
        return $this;
    }

    /**
     * 图片url地址，如http://xxx.xxx upload_type为UPLOAD_BY_URL必填
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * 图片url地址，如http://xxx.xxx upload_type为UPLOAD_BY_URL必填
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * 图片素材是否为AIGC生成
     * @return bool
     */
    public function getIsAigc(): ?bool
    {
        return $this->isAigc;
    }

    /**
     * 图片素材是否为AIGC生成
     * @param bool $isAigc
     * @return self
     */
    public function setIsAigc(?bool $isAigc): self
    {
        $this->isAigc = $isAigc;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileImageAdV2UploadType
     */
    public function getUploadType(): ?string
    {
        return $this->uploadType;
    }

    /**
     * @param \Oceanengine\Models\FileImageAdV2UploadType $uploadType
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
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
        }
        if ($this->imageFile !== null) {
            $result['image_file'] = $this->imageFile;
        }
        if ($this->imageSignature !== null) {
            $result['image_signature'] = $this->imageSignature;
        }
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
        }
        if ($this->isAigc !== null) {
            $result['is_aigc'] = $this->isAigc;
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
        if (($v = $data['filename'] ?? null) !== null) {
            $obj->filename = (string) $v;
        }
        if (($v = $data['image_file'] ?? null) !== null) {
            $obj->imageFile = $v;
        }
        if (($v = $data['image_signature'] ?? null) !== null) {
            $obj->imageSignature = (string) $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        if (($v = $data['is_aigc'] ?? null) !== null) {
            $obj->isAigc = (bool) $v;
        }
        if (($v = $data['upload_type'] ?? null) !== null) {
            $obj->uploadType = (string) $v;
        }
        return $obj;
    }
}
