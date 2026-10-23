<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalDeliveryQualificationListV30ResponseDataQualificationsInnerImagesInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $attachmentId = null;

    /**
     * @var string
     */
    protected ?string $imageDownloadUrl = null;

    /**
     * @var string
     */
    protected ?string $imagePreviewUrl = null;

    /**
     * @return int
     */
    public function getAttachmentId(): ?int
    {
        return $this->attachmentId;
    }

    /**
     * @param int $attachmentId
     * @return self
     */
    public function setAttachmentId(?int $attachmentId): self
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageDownloadUrl(): ?string
    {
        return $this->imageDownloadUrl;
    }

    /**
     * @param string $imageDownloadUrl
     * @return self
     */
    public function setImageDownloadUrl(?string $imageDownloadUrl): self
    {
        $this->imageDownloadUrl = $imageDownloadUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getImagePreviewUrl(): ?string
    {
        return $this->imagePreviewUrl;
    }

    /**
     * @param string $imagePreviewUrl
     * @return self
     */
    public function setImagePreviewUrl(?string $imagePreviewUrl): self
    {
        $this->imagePreviewUrl = $imagePreviewUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attachmentId !== null) {
            $result['attachment_id'] = $this->attachmentId;
        }
        if ($this->imageDownloadUrl !== null) {
            $result['image_download_url'] = $this->imageDownloadUrl;
        }
        if ($this->imagePreviewUrl !== null) {
            $result['image_preview_url'] = $this->imagePreviewUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attachment_id'] ?? null) !== null) {
            $obj->attachmentId = (int) $v;
        }
        if (($v = $data['image_download_url'] ?? null) !== null) {
            $obj->imageDownloadUrl = (string) $v;
        }
        if (($v = $data['image_preview_url'] ?? null) !== null) {
            $obj->imagePreviewUrl = (string) $v;
        }
        return $obj;
    }
}
