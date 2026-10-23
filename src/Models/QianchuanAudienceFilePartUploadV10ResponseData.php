<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudienceFilePartUploadV10ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $fileKey = null;

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fileKey !== null) {
            $result['file_key'] = $this->fileKey;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['file_key'] ?? null) !== null) {
            $obj->fileKey = (string) $v;
        }
        return $obj;
    }
}
