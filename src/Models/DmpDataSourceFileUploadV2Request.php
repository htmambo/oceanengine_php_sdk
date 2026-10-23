<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpDataSourceFileUploadV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var mixed
     */
    protected $file = null;

    /**
     * @var string
     */
    protected ?string $fileSignature = null;

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
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     * @return self
     */
    public function setFile($file): self
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileSignature(): ?string
    {
        return $this->fileSignature;
    }

    /**
     * @param string $fileSignature
     * @return self
     */
    public function setFileSignature(?string $fileSignature): self
    {
        $this->fileSignature = $fileSignature;
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
        if ($this->file !== null) {
            $result['file'] = $this->file;
        }
        if ($this->fileSignature !== null) {
            $result['file_signature'] = $this->fileSignature;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['file'] ?? null) !== null) {
            $obj->file = $v;
        }
        if (($v = $data['file_signature'] ?? null) !== null) {
            $obj->fileSignature = (string) $v;
        }
        return $obj;
    }
}
