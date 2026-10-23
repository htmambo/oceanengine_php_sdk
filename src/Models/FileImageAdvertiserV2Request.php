<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileImageAdvertiserV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var mixed
     */
    protected $imageFile = null;

    /**
     * @var string
     */
    protected ?string $imageSignature = null;

    /**
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * @var \Oceanengine\Models\FileImageAdvertiserV2UploadTo
     */
    protected ?string $uploadTo = null;

    /**
     * @var \Oceanengine\Models\FileImageAdvertiserV2UploadType
     */
    protected ?string $uploadType = null;

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
     * @return mixed
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param mixed $imageFile
     * @return self
     */
    public function setImageFile($imageFile): self
    {
        $this->imageFile = $imageFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageSignature(): ?string
    {
        return $this->imageSignature;
    }

    /**
     * @param string $imageSignature
     * @return self
     */
    public function setImageSignature(?string $imageSignature): self
    {
        $this->imageSignature = $imageSignature;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileImageAdvertiserV2UploadTo
     */
    public function getUploadTo(): ?string
    {
        return $this->uploadTo;
    }

    /**
     * @param \Oceanengine\Models\FileImageAdvertiserV2UploadTo $uploadTo
     * @return self
     */
    public function setUploadTo(?string $uploadTo): self
    {
        $this->uploadTo = $uploadTo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\FileImageAdvertiserV2UploadType
     */
    public function getUploadType(): ?string
    {
        return $this->uploadType;
    }

    /**
     * @param \Oceanengine\Models\FileImageAdvertiserV2UploadType $uploadType
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
        if ($this->imageFile !== null) {
            $result['image_file'] = $this->imageFile;
        }
        if ($this->imageSignature !== null) {
            $result['image_signature'] = $this->imageSignature;
        }
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
        }
        if ($this->uploadTo !== null) {
            $result['upload_to'] = $this->uploadTo;
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
        if (($v = $data['image_file'] ?? null) !== null) {
            $obj->imageFile = $v;
        }
        if (($v = $data['image_signature'] ?? null) !== null) {
            $obj->imageSignature = (string) $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        if (($v = $data['upload_to'] ?? null) !== null) {
            $obj->uploadTo = (string) $v;
        }
        if (($v = $data['upload_type'] ?? null) !== null) {
            $obj->uploadType = (string) $v;
        }
        return $obj;
    }
}
