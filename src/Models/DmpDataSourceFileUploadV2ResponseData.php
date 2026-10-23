<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpDataSourceFileUploadV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $filePath = null;

    /**
     * @return string
     */
    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     * @return self
     */
    public function setFilePath(?string $filePath): self
    {
        $this->filePath = $filePath;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->filePath !== null) {
            $result['file_path'] = $this->filePath;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['file_path'] ?? null) !== null) {
            $obj->filePath = (string) $v;
        }
        return $obj;
    }
}
