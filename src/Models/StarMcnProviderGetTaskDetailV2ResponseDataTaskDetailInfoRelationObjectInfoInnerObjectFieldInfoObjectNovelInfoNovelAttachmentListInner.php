<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskDetailV2ResponseDataTaskDetailInfoRelationObjectInfoInnerObjectFieldInfoObjectNovelInfoNovelAttachmentListInner implements \JsonSerializable
{
    /**
     * 文件名称
     * @var string
     */
    protected ?string $fileName = null;

    /**
     * 文件链接
     * @var string
     */
    protected ?string $fileUri = null;

    /**
     * 文件名称
     * @return string
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * 文件名称
     * @param string $fileName
     * @return self
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * 文件链接
     * @return string
     */
    public function getFileUri(): ?string
    {
        return $this->fileUri;
    }

    /**
     * 文件链接
     * @param string $fileUri
     * @return self
     */
    public function setFileUri(?string $fileUri): self
    {
        $this->fileUri = $fileUri;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fileName !== null) {
            $result['file_name'] = $this->fileName;
        }
        if ($this->fileUri !== null) {
            $result['file_uri'] = $this->fileUri;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['file_name'] ?? null) !== null) {
            $obj->fileName = (string) $v;
        }
        if (($v = $data['file_uri'] ?? null) !== null) {
            $obj->fileUri = (string) $v;
        }
        return $obj;
    }
}
