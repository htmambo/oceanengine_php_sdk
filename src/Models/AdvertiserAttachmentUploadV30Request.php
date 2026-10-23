<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserAttachmentUploadV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\AdvertiserAttachmentUploadV30AttachmentType
     */
    protected ?string $attachmentType = null;

    /**
     * 文件名 注意：不要包含文件路径，不要含有'/'等非法字符
     * @var string
     */
    protected ?string $filename = null;

    /**
     * 图片数据
     * @var mixed
     */
    protected $imageData = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserAttachmentUploadV30AttachmentType
     */
    public function getAttachmentType(): ?string
    {
        return $this->attachmentType;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserAttachmentUploadV30AttachmentType $attachmentType
     * @return self
     */
    public function setAttachmentType(?string $attachmentType): self
    {
        $this->attachmentType = $attachmentType;
        return $this;
    }

    /**
     * 文件名 注意：不要包含文件路径，不要含有'/'等非法字符
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * 文件名 注意：不要包含文件路径，不要含有'/'等非法字符
     * @param string $filename
     * @return self
     */
    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * 图片数据
     * @return mixed
     */
    public function getImageData()
    {
        return $this->imageData;
    }

    /**
     * 图片数据
     * @param mixed $imageData
     * @return self
     */
    public function setImageData($imageData): self
    {
        $this->imageData = $imageData;
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
        if ($this->attachmentType !== null) {
            $result['attachment_type'] = $this->attachmentType;
        }
        if ($this->filename !== null) {
            $result['filename'] = $this->filename;
        }
        if ($this->imageData !== null) {
            $result['image_data'] = $this->imageData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['attachment_type'] ?? null) !== null) {
            $obj->attachmentType = (string) $v;
        }
        if (($v = $data['filename'] ?? null) !== null) {
            $obj->filename = (string) $v;
        }
        if (($v = $data['image_data'] ?? null) !== null) {
            $obj->imageData = $v;
        }
        return $obj;
    }
}
