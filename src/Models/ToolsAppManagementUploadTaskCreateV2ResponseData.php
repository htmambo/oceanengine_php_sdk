<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppManagementUploadTaskCreateV2ResponseData implements \JsonSerializable
{
    /**
     * 上传文件id
     * @var int
     */
    protected ?int $uploadId = null;

    /**
     * 上传文件id
     * @return int
     */
    public function getUploadId(): ?int
    {
        return $this->uploadId;
    }

    /**
     * 上传文件id
     * @param int $uploadId
     * @return self
     */
    public function setUploadId(?int $uploadId): self
    {
        $this->uploadId = $uploadId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->uploadId !== null) {
            $result['upload_id'] = $this->uploadId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['upload_id'] ?? null) !== null) {
            $obj->uploadId = (int) $v;
        }
        return $obj;
    }
}
