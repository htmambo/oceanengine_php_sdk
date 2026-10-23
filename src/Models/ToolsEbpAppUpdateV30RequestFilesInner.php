<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppUpdateV30RequestFilesInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAppUpdateV30FilesFileTag
     */
    protected ?string $fileTag = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppUpdateV30FilesFileType
     */
    protected ?string $fileType = null;

    /**
     * 文件上传id
     * @var int
     */
    protected ?int $uploadId = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAppUpdateV30FilesFileTag
     */
    public function getFileTag(): ?string
    {
        return $this->fileTag;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppUpdateV30FilesFileTag $fileTag
     * @return self
     */
    public function setFileTag(?string $fileTag): self
    {
        $this->fileTag = $fileTag;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppUpdateV30FilesFileType
     */
    public function getFileType(): ?string
    {
        return $this->fileType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppUpdateV30FilesFileType $fileType
     * @return self
     */
    public function setFileType(?string $fileType): self
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * 文件上传id
     * @return int
     */
    public function getUploadId(): ?int
    {
        return $this->uploadId;
    }

    /**
     * 文件上传id
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
        if ($this->fileTag !== null) {
            $result['file_tag'] = $this->fileTag;
        }
        if ($this->fileType !== null) {
            $result['file_type'] = $this->fileType;
        }
        if ($this->uploadId !== null) {
            $result['upload_id'] = $this->uploadId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['file_tag'] ?? null) !== null) {
            $obj->fileTag = (string) $v;
        }
        if (($v = $data['file_type'] ?? null) !== null) {
            $obj->fileType = (string) $v;
        }
        if (($v = $data['upload_id'] ?? null) !== null) {
            $obj->uploadId = (int) $v;
        }
        return $obj;
    }
}
