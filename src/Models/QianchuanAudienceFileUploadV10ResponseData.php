<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudienceFileUploadV10ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $fileKey = null;

    /**
     * @var string
     */
    protected ?string $fileMd5 = null;

    /**
     * @return string
     */
    public function getFileKey(): ?string
    {
        return $this->fileKey;
    }

    /**
     * @param string $fileKey
     * @return self
     */
    public function setFileKey(?string $fileKey): self
    {
        $this->fileKey = $fileKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileMd5(): ?string
    {
        return $this->fileMd5;
    }

    /**
     * @param string $fileMd5
     * @return self
     */
    public function setFileMd5(?string $fileMd5): self
    {
        $this->fileMd5 = $fileMd5;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fileKey !== null) {
            $result['file_key'] = $this->fileKey;
        }
        if ($this->fileMd5 !== null) {
            $result['file_md5'] = $this->fileMd5;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['file_key'] ?? null) !== null) {
            $obj->fileKey = (string) $v;
        }
        if (($v = $data['file_md5'] ?? null) !== null) {
            $obj->fileMd5 = (string) $v;
        }
        return $obj;
    }
}
