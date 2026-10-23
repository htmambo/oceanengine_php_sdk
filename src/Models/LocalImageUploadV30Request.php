<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImageUploadV30Request implements \JsonSerializable
{
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
     * 图片素材是否为AIGC生成
     * @var bool
     */
    protected ?bool $isAigc = null;

    /**
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @var \Oceanengine\Models\LocalImageUploadV30UploadType
     */
    protected ?string $uploadType = null;

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
     * @return \Oceanengine\Models\LocalImageUploadV30UploadType
     */
    public function getUploadType(): ?string
    {
        return $this->uploadType;
    }

    /**
     * @param \Oceanengine\Models\LocalImageUploadV30UploadType $uploadType
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
        if ($this->imageFile !== null) {
            $result['image_file'] = $this->imageFile;
        }
        if ($this->imageSignature !== null) {
            $result['image_signature'] = $this->imageSignature;
        }
        if ($this->isAigc !== null) {
            $result['is_aigc'] = $this->isAigc;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->uploadType !== null) {
            $result['upload_type'] = $this->uploadType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_file'] ?? null) !== null) {
            $obj->imageFile = $v;
        }
        if (($v = $data['image_signature'] ?? null) !== null) {
            $obj->imageSignature = (string) $v;
        }
        if (($v = $data['is_aigc'] ?? null) !== null) {
            $obj->isAigc = (bool) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['upload_type'] ?? null) !== null) {
            $obj->uploadType = (string) $v;
        }
        return $obj;
    }
}
